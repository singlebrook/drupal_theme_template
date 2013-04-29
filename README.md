# Singlebrook Boilerplate
A starting point for Drupal projects involving new themes.

## Setup
There is little setup involved for this theme. You shouldn't have to alter `config.rb` or the Guardfile unless you alter the structure of the folders in the assets directory. 

## Templates
The default theme implementation for a single page (page.tpl.php) is included, to be customized for a new project. A base html.tpl.php file is also included.  These can be found in the `templates` folder. 

## SCSS
SCSS files are already well-organized.  All .scss files are imported into the main style.scss file, which is compiled to css.  Make sure to import any stylesheets you add. 

## Guard/Livereload
This base theme uses Guard to compile the scss into our stylesheets.  When working on scss files, make sure to run `bundle exec guard` in the terminal so that your changes are compiled.

This theme is also equipped to use Livereload when Guard is running. Just make sure that the theme setting "Enable livereload" is checked; by default, it will not be (this is for development only). When you save your scss/css/js files, guard will watch and compile them, and Livereload will see the changes and update your browser automagically. 