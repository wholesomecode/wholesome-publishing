# Wholesome Publishing

Wholesome Publishing is a WordPress plugin boilerplate that supports best practices and a modern workflow.

Created by [Matt Watson](https://mattwatson.codes) ([@mattwatsoncodes](https://twitter.com/mattwatsoncodes)) - [Wholesome Code](https://wholesomecode.ltd.)
([@wholesomecode](https://twitter.com/wholesomecode)).

## Features

### Starter Code

#### An example settings panel that uses WordPress Editor (Gutenberg) Blocks
Inspired by the **CodeinWP** article _[Making a “Plugin Options Page” With Gutenberg Components](https://www.codeinwp.com/blog/plugin-options-page-gutenberg/) by [Hardeep Asrani](https://twitter.com/HardeepAsrani)_ the boilerplate contains an example settings page built with WordPress Editor (Gutenberg) blocks.

<p align="center">
	<img src="https://github.com/wholesomecode/wholesome-publishing/blob/master/assets/screenshot-1.png" alt="Block based settings panel" width="500">
</p>

#### An example block editor plugin (sidebar)
The boilerplate contains an example custom sidebar plugin named `Sidebar Comments`, this contains some quick start configuration, and inline documentation.

<p align="center">
	<img src="https://github.com/wholesomecode/wholesome-publishing/blob/master/assets/screenshot-3.png" alt="Custom sidebar" width="500">
</p>

#### An example block
The boilerplate contains an example block named `Example`, this block contains some quick start configuration, and inline documentation.

<p align="center">
	<img src="https://github.com/wholesomecode/wholesome-publishing/blob/master/assets/screenshot-2.png" alt="Basic Block with Inspector and Block Controls" width="500">
</p>

### *Lots* of inline documentation
The boilerplate is not shy about telling you how something is done, or where the inspiration for the approach came from. Every file in this plugin is crammed with inline documentation to help you quickly find your feet.

### Extensive webpack based tooling
1. Extends the [@wordpress/create-block](https://www.npmjs.com/package/@wordpress/create-block) npm script.
2. A custom webpack configuration that has the following features:
  1. Extend wp-scripts to compile build and transpile JS.
  2. JS linting and fixing, configured via the `/.stylelintrc` file.
  3. JS minification.
  4. Prevent incorrect file creation.
  5. SCSS linting and fixing, configured via the `/.eslintrc` file.
  6. SCSS compile and build.
  7. CSS autoprefix and polyfills.
  8. CSS minification.
  9. Friendly Webpack errors.
  10. Multiple JS and CSS endpoints to support multiple enqueue types, _more on this in a moment_.
3. SCSS and JS linting advice appears directly in the terminal while your code is compiling with `npm start`.
4. PHP coding standards autofix and linting by using the `npm run wpcs` command (dependent on the correct installation and", configuration of phpcs and the WordPress coding standards).

### An enqueue for everything
The `/inc/namespace.php` file enqueues several file types. Just remove the parts you don't need from this and webpack.

1. `block-styles.scss`: styles for the front end and the block editor.
2. `block-editor.js`: scripts for the block editor, with localization for custom settings, and auto enquing of WordPress block editor (Gutenberg) dependencies (thanks to `@wordpress/create-block` under the hood).
3. `block-editor.scss`: styles for the block editor only.
5. `scripts.js`: scripts for the front end of the site.
6. `styles.scss`: styles for the front end of the site.
7. `admin.js`: scripts for WordPress Admin area, with localization for custom settings, and auto enquing of WordPress block editor (Gutenberg) dependencies (thanks to `@wordpress/create-block` under the hood).
8. `admin.scss`: styles for the WordPress Admin area.
9. `customizer.js`: scripts for the Customizer screen.
10. `customizer.scss`: styles for the Customizer screen.
11. `classic-editor.scss`: styles for the classic editor TinyMCE textarea.

### Get up and running quickly in the WordPress.org repository
The `readme.txt` file in the root of the template is the default generated by `@wordpress/create-block` with a few added tweaks.

This file is used for the displaying the plugin on the WordPress.org plugin repository.

Note that the `/assets/` folder contains files specific to the WordPress.org plugin repository. These are:

1. `banner-1544x500.png`: High definition version of the WordPress.org plugin repository banner image.
2. `banner-772x250.png`: Standard definition version of the WordPress.org plugin repository banner image.
3. `icon-128x128.png`: Standard definition version of the WordPress.org plugin repository icon image.
4. `icon-256x256.png`: High definition version of the WordPress.org plugin repository icon image.
5. `screenshot-1.png`: A plugin screenshot, supports png, jpg, jpeg, gif.
6. `screenshot-2.png`: A second plugin screenshot, supports png, jpg, jpeg, gif.

## Namespace driven architecture.
Inspired by the **Human Made** Engineering Handbook on [Namespaced File Naming](https://engineering.hmn.md/standards/style/php/#namespaced-file-naming), the structure of this boilerplate uses the namespace based architecture.

## Quick start

1. Download or clone Wholesome Publishing from GitHub (https://github.com/wholesomecode/wholesome-publishing) into your WordPress plugins folder.
2. Using the terminal cd into the `plugins/wholesome-publishing` folder and run `npm start`
3. In the WordPress admin dashboard activate the Wholesome Publishing plugin.
4. In the WordPress admin dashboard navigate into the settings menu option and view the example settings page.
5. Edit a post or page in WordPress and note the 'Example' block.
6. Edit a post or page in WordPress and note the 'Example' custom sidebar.
7. **Edit and add to the Wholesome Publishing to be your next best WordPress plugin.**

## Roadmap
Planned progress can be found on the project kanban board: https://github.com/wholesomecode/wholesome-publishing/projects/1

## Requesting bugs / features
Just create a GitHub issue in the repository: https://github.com/wholesomecode/wholesome-publishing/issues
