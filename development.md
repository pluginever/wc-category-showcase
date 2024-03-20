# Development

This plugin works as the boilerplate for all the plugins that we build in-house. It has all the necessary tools and configurations that we need to build a plugin.


## Structure
Here is the structure of the plugin:


- `.github` - Contains the github actions for the plugin
- `assets` - Contains the assets for the plugin like images, css, js etc.
	- `src` - Contains the source files for the assets
	- `dist` - Contains the compiled files for the assets
- `bin` - Contains the executable. These files used for releasing the plugin, deploying the plugin etc.
- `src` - Contains the PHP source files for the plugin.
	- `Admin` - Contains the admin related files.
    - `Frontend` - Contains the frontend related files.
- `templates` - Contains the templates of the plugin. Any content that is displayed on the frontend is considered as a template.
- `tests` - Contains the tests for the plugin
- `.distignore` - Contains the files that are ignored while creating the distribution of the plugin are defined here.
- `.editorconfig` - Contains the editor configurations.
- `.eslintignore` - Contains the files that are ignored by eslint.
- `.eslintrc.json` - Contains the eslint configurations.
- `.gitignore` - Contains the files that are ignored by git.
- `.stylelintignore` - Contains the files that are ignored by stylelint.
- `codeception.dist.yml` - Contains the codeception configurations.
- `composer.json` - Contains the composer dependencies and scripts.
- `Gruntfile.js` - Contains the grunt tasks. We use grunt for translating the plugin.
- `package.json` - Contains the npm dependencies and scripts.
- `phpcs.xml.dist` - Contains the phpcs configurations.
- `uninstall.php` - Contains the uninstallation code for the plugin.
- `wc-category-showcase.php` - Contains the main plugin file.
- `webpack.config.js` - Contains the webpack configurations.
