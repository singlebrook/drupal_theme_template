## Singlebrook Boilerplate
A starting point for Drupal projects involving new themes.

## Templates
The default theme implementation for a single page (page.tpl.php) is included, to be customized for a new project. 

## SCSS

## Guard/Livereload
This base theme uses Guard to compile the scss into our stylesheets.  When working on scss files, make sure to run `bundle exec guard` in the terminal so that your changes are compiled.

This theme is also equipped to use Livereload when guard is running. Just make sure that the theme setting "Enable livereload" is checked; by default, it will not be.  (This is for development only). Then when you save your scss/css/js files, guard will watch and compile them, and Livereload will see the changes and update your browser automagically. 