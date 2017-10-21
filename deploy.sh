#!/bin/bash

# args
MSG=${1-'deploy from git'}
MAINFILE="wc-category-showcase.php" # for version checking

# paths
SRC_DIR=$(git rev-parse --show-toplevel)
DIR_NAME=$(basename $SRC_DIR)
SVN_DIR=~/svn/wp-plugins/$DIR_NAME
TRUNK="$SVN_DIR/trunk"
SVNURL="http://plugins.svn.wordpress.org/$DIR_NAME/"
BUILD_DIR="$SRC_DIR/build"
# make sure we're deploying from the right dir
if [ ! -d "$SRC_DIR/.git" ]; then
    echo "$SRC_DIR doesn't seem to be a git repository"
    exit
fi

# check version in readme.txt is the same as plugin file
#READMEVERSION=`grep "Stable tag" $SRC_DIR/readme.txt | awk '{ print $NF}'`
READMEVERSION=`grep "^Stable tag:" $SRC_DIR/readme.txt | awk -F' ' '{print $NF}'`
#PLUGINVERSION=`grep "* Version" $SRC_DIR/$MAINFILE | awk '{ print $NF}'`
PLUGINVERSION=`grep "Version:" $SRC_DIR/$MAINFILE | awk -F' ' '{print $NF}'`
PLUGINNAME=`grep "Plugin Name" $SRC_DIR/$MAINFILE  |  awk -F':' '{print $2}' | tr -d '' `

echo ".........................................."
echo "Preparing to deploy $PLUGINNAME"
echo
echo "readme version: $READMEVERSION"
echo "$MAINFILE version: $PLUGINVERSION"
echo
echo "(Current version: $PLUGINVERSION)"
echo
echo ".........................................."
echo


if [ "$READMEVERSION" -ne "$PLUGINVERSION" ]; then echo "Version in readme.txt & $MAINFILE don't match. Exiting...."; exit 1; fi

NEWVERSION=$READMEVERSION

#remove build dir
echo "Removing Build directory"
rm -r "$SRC_DIR/build" > /dev/null 2>&1
echo "Running release process"
grunt release  > /dev/null 2>&1
echo "Creating build"
grunt build > /dev/null 2>&1

echo ".........................................."

if git show-ref --tags --quiet --verify -- "refs/tags/$NEWVERSION"
    then
		echo "Version $NEWVERSION already exists as git tag. Exiting....";
		exit 1;
	else
		echo "Git version does not exist. Let's proceed..."
fi

cd $SRC_DIR
echo -e "Enter a commit message for this new version: \c"
read COMMITMSG
git commit -am "$COMMITMSG"
git push origin develop

echo "Tagging new version in git"
git tag -a "$NEWVERSION" -m "Tagging version $NEWVERSION"

echo "Pushing latest commit to origin, with tags"
git checkout master
git marge develop
git push origin master --tags

# make sure the destination dir exists
svn mkdir $TRUNK 2> /dev/null
svn add $TRUNK 2> /dev/null

# delete everything except .svn dirs
for file in $(find $TRUNK/* -not -path "*.svn*")
do
    rm $file 2>/dev/null
    #echo $file
done

rsync -r  $BUILD_DIR/* $TRUNK
