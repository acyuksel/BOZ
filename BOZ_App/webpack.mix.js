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

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.js('resources/js/sb-admin-2.min.js', 'public/js').postCss('resources/css/sb-admin-2.min.css', 'public/css');
mix.js('resources/js/media_library.js', 'public/js').postCss('resources/css/media_library.css', 'public/css');
mix.js('resources/js/homepage.js', 'public/js');
