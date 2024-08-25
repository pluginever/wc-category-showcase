/* jshint node:true */
module.exports = function (grunt) {
	'use strict';
	// Load multiple grunt tasks using globbing patterns
	require('load-grunt-tasks')(grunt);

	var sass = require('sass');

	grunt.initConfig({

		// Setting folder templates.
		dirs: {
			css: 'assets/css',
			fonts: 'assets/fonts',
			images: 'assets/images',
			js: 'assets/js',
		},

		// Minify .js files.
		uglify: {
			options: {
				ie8: true,
				parse: {
					strict: false
				},
				output: {
					comments: /@license|@preserve|^!/
				}
			},
			target: {
				files: [{
					expand: true,
					cwd: '<%= dirs.js %>',
					src: [
						'*.js',
						'!*.min.js'
					],
					dest: '<%= dirs.js %>',
					ext: '.min.js'
				}]
			}
		},

		// Compile all .scss files.
		sass: {
			options: {
				implementation: sass,
				sourceMap: false,
				outputStyle: 'compressed'
			},
			dist: {
				files: [{
					expand: true,
					cwd: '<%= dirs.css %>/',
					src: ['*.scss'],
					dest: '<%= dirs.css %>/',
					ext: '.css'
				}]
			}
		},

		// Autoprefixer.
		postcss: {
			options: {
				processors: [
					require('autoprefixer')()
				]
			},
			dist: {
				src: [
					'<%= dirs.css %>/*.css'
				]
			}
		},

		// Minify all .css files.
		cssmin: {
			minify: {
				expand: true,
				cwd: '<%= dirs.css %>/',
				src: ['*.css'],
				dest: '<%= dirs.css %>/',
				ext: '.css'
			}
		},

		// Watch changes for assets.
		watch: {
			css: {
				files: ['<%= dirs.css %>/*.scss'],
				tasks: ['sass', 'postcss', 'cssmin']
			},
			js: {
				files: ['<%= dirs.js %>/*.js'],
				tasks: ['uglify']
			}
		},

		// Generate POT files.
		makepot: {
			target: {
				options: {
					mainFile: 'wc-category-showcase.php',
					type: 'wp-plugin',
					domainPath: 'i18n/languages',
					potFilename: 'wc-category-showcase.pot',
					exclude: [
						'vendor/.*',
						'tests/.*',
						'tmp/.*'
					]
				}
			}
		},

	});

	// Register tasks.
	grunt.registerTask('build', ['uglify', 'sass', 'postcss', 'cssmin', 'makepot']);
};
