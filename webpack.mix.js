const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .scripts([
        'resources/assets/js/bootstrap.js',
        'resources/assets/js/slick.js',
        'resources/assets/js/jquery.mixitup.js',
        'resources/assets/js/jquery.fancybox.pack.js',
        'resources/assets/js/waypoints.js',
        'resources/assets/js/jquery.counterup.js',
        'resources/assets/js/wow.js',
        'resources/assets/js/bootstrap-progressbar.js',
        'resources/assets/js/custom.js',
    ], 'public/js/main.js')
   .sass('resources/sass/main.scss', 'public/css');