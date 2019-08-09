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
	.js('resources/js/bootstrap.js', 'public/js')
	.js('resources/js/myjs.js', 'public/js/myjs.js')
	.js('resources/js/js.js', 'public/js/js.js')
	.js('resources/js/webfont.js', 'public/js/webfont.js')
	.js('resources/js/jquery.min.js', 'public/js/jquery.min.js')
    .sass('resources/sass/app.scss', 'public/css')
    .copyDirectory('resources/css/mystyle.css', 'public/css/mystyle.css')
    .copyDirectory('resources/css/style.css', 'public/css/style.css');
