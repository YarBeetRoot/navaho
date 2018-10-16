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
        'resources/theme/js/bootstrap.js',
        'resources/theme/js/slick.js',
        'resources/theme/js/jquery.mixitup.js',
        'resources/theme/js/jquery.fancybox.pack.js',
        'resources/theme/js/waypoints.js',
        'resources/theme/js/jquery.counterup.js',
        'resources/theme/js/wow.js',
        'resources/theme/js/bootstrap-progressbar.js',
        'resources/theme/js/custom.js',
    ], 'public/assets/js/main.js')
   .sass('resources/sass/app.scss', 'public/css')
    .styles([
        'resources/theme/css/font-awesome.css',
        'resources/theme/css/bootstrap.css',
        'resources/theme/css/slick.css',
        'resources/theme/css/jquery.fancybox.css',
        'resources/theme/css/animate.css',
        'resources/theme/css/bootstrap-progressbar-3.3.4.css',
        'resources/theme/css/theme-color/default-theme.css'
    ],'public/assets/css/main.css');
