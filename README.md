# Astrobotany WordPress Theme

## Table of Contents
- [Installing](#installing)
- [Basic Configuration](#basic-configuration)
  - [Navigation Menu](#navigation-menu)
  - [Blog Page](#blog-page)
  - [Home Page](#home-page)

## Installing
1. **Download Theme as `.zip` file.** On the [project home page](https://github.com/isaacev/astrobotany-theme) click the button labeled *Clone or Download* and from the dropdown select *Download ZIP*. This will begin the download of a `.zip` file. This file is a bundled collection of all of the theme's source files. It is not necessary to unzip the file.
2. **Upload Theme to WordPress Site.** Open the WordPress site administrator dashboard and navigate to the Appearance&rarr;Themes page.  Click the button labeled `Add New` near the top of the page. On the **Add Themes** page, click the button labeled `Upload Theme` near the top of the page. This should show a button for uploading a file. Click this button to upload the `.zip` file downloaded in step 1. Click `Install Now`.
3. **Set Astrobotany as Active Theme.** In the Appearance&rarr;Themes page find the newly added Astrobotany theme and click the button labeled `Activate` next to the theme name. The Astrobotany theme should now be active on the site.


## Basic Configuration
After installing and activating the Astrobotany theme there are still a few options to configure before the theme is fully functional.


### Navigation Menu
[Create a menu](https://codex.wordpress.org/WordPress_Menu_User_Guide) and populate it with links to prominent pages on the site. In order for this menu to appear at the top of every page, the checkbox labeled **Navigation menu in header of each page** at the bottom of the page must be selected. Be sure to click the button labled "Save Menu" to save this menu.

The contents of the menu can be changed at any time by navigating back to the menu editing page, selecting the menu to edit, making changes, and clicking "Save Menu".


### Blog Page
[Create a page](https://codex.wordpress.org/Pages) titled "Blog" with no contents. Navigate to the Settings&rarr;Reading page. Under the section labled `Front page displays` from the dropdown labled `Posts page` select the "Blog" page. Click `Save Changes`. Now the page at `astrobotany.com/blog` will automatically be populated with the latest blog posts.


### Home Page
[Create a page](https://codex.wordpress.org/Pages) titled "Home" with contents for the front page of the site. Navigate to the Settings&rarr;Reading page. Under the section labled `Front page displays` from the dropdown labled `Front page` select the "Home" page. Click `Save Changes`. Now the page at `astrobotany.com/` will show any contents added to the "Home" page.

## Building Theme from source
In order to develop the theme, download a copy of the most recent version of the source from this repository and once that has completed run `npm install` from inside the source directory to install the NPM packages required for building the theme.

After the theme has been modified it can be uploaded to a WordPress installation after it has been compressed to a `.zip` file. This compression process has been automated by the `gulp zip` task which creates a ZIP archive including only files matching the following patterns:

- `**/*.css`
- `**/*.php`
- `./style.css`
- `./screenshot.png`
- `**/*.{jpg,png,svg}`

While excluding any files in the folders:

- `./node_modules`
- `./releases`

If some file not matching these patterns should be included in future versions of the archive, add the appropriate file pattern to the list of patterns in `gulpfile.js`.

### Changes to the CSS
After a change to the theme's SCSS files, running `gulp css` will compile the SCSS to CSS. During development where many changes will be made to the theme's SCSS files, it may be helpful to run `gulp css:watch` which will re-run the `css` task every time a SCSS file changes.

If there were changes to the theme's CSS it is important that the theme patch number is incremented. This will force any browsers that had viewed previous versions of the theme to updated their cached CSS files with the updated CSS files. The patch number can be automatically incremented by running the `gulp bump` task. Be sure to run this task before the `gulp zip` task so that the updated version number is included in the new theme ZIP file.
