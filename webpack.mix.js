let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/script.js', 'public/js')
   .sass('resources/assets/sass/style.scss', 'public/css');

mix.js('resources/assets/js/materialize/bin/materialize.js', 'public/js')
    .sass('resources/assets/sass/materialize/materialize.scss', 'public/css');
