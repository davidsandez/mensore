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

mix.js(['resources/js/jquery-3.5.1.min.js',
        'resources/js/datatables.js',
        'resources/js/bootstrap.bundle.min.js',
        //'resources/js/dataTables.jqueryui.min.js',
        'resources/js/app.js'], 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css');
