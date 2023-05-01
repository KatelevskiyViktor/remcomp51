const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/css/reset.min.css',
    'resources/css/main.css'
], 'public/css/styles.css');


mix.scripts([
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/jquery.maskedinput.min.js',
    'resources/js/jquery.bpopup.min.js',
    'resources/js/fontawesome-free-5.15.3-web/js/all.min.js',
    'resources/js/function.js',
    'resources/js/main.js'
], 'public/js/scripts.js');

// mix.copyDirectory('resources/img', 'public/img');

mix.browserSync('mr.robot');
