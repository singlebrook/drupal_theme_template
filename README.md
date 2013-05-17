# Singlebrook Boilerplate
A starting point for Drupal projects involving new themes.

## Setup
There is little setup involved for this theme. You shouldn't have to alter `config.rb` or the Guardfile unless you alter the structure of the folders in the assets directory. 

However, the theme will need to be renamed once you copy it over to your new project.  The folder, .info file, livereload setting, and function names will need to be updated to reflect the new theme name, not `drupal_theme_template` or `dtt`. *In the future we may write a script to handle this.*

## Templates
The default theme implementation for a single page (`page.tpl.php`) is included, to be customized for a new project. A base `html.tpl.php` file is also included.  These can be found in the `templates` folder. Templates are based on Drupal Core but have been updated to reflect new HTML5 elements.  

## SCSS
SCSS files are already well-organized.  All .scss files are imported into the main style.scss file, which is compiled to css.  Make sure to add an import statement for any stylesheets you add. 

## Guard/Livereload
This base theme uses Guard to compile the scss into our stylesheets.  When working on scss files, make sure to run `bundle exec guard` in the terminal so that your changes are compiled. (If you run into issues, try running in interactive mode: `bundle exec guard -i`). 

This theme is also equipped to use Livereload when Guard is running. Just make sure that the theme setting "Enable livereload" is checked; by default, it will not be (this is for development only). When you save your scss/css/js files, guard will watch and compile them, and Livereload will see the changes and update your browser automagically. 

## Browser Compatibility
It is recommended that you add modernizr.js to this theme, so that you can test for support of certain features and handle them gracefully if they are not supported.  Because every project is different, a custom modernizr build should be added to this theme, rather than keeping the entire modernizr.js library within your code.  You can download a custom build at http://modernizr.com/. It can then be added to your theme's info file with the following: `scripts[] = javascripts/modernizr.js`.   