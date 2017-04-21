const { mix } = require('laravel-mix');

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

mix.js('resources/assets/js/app.js', 'public/js/custom.js')
.styles(
  [
    'node_modules/font-awesome/css/font-awesome.min.css',
    'resources/assets/css/bootstrap.css',
    'resources/assets/css/bootstrap-responsive.css',

    // styles
    'resources/assets/css/style.css',
    'resources/assets/css/styles/contact.css',

    'resources/assets/css/pluton.css',
    'resources/assets/css/jquery.cslider.css',
    'resources/assets/css/jquery.bxslider.css',
    'resources/assets/css/animate.css',
    'resources/assets/css/homeform/style.css',
    'resources/assets/css/formvalidate.css',
    'resources/assets/css/comics.css'
  ], 'public/css/all.css'
)
.scripts(
  [
    'resources/assets/js/honeypro/jquery.js',
    'resources/assets/js/honeypro/is.mobile.js',
    'resources/assets/js/honeypro/jquery.maskedinput.min.js',
    'resources/assets/js/honeypro/formcheck.js',
    'resources/assets/js/honeypro/jquery.mixitup.js',
    'resources/assets/js/honeypro/bootstrap.js',
    'resources/assets/js/honeypro/modernizr.custom.js',
    'resources/assets/js/honeypro/jquery.bxslider.js',
    'resources/assets/js/honeypro/jquery.cslider.js',
    'resources/assets/js/honeypro/jquery.placeholder.js',
    'resources/assets/js/honeypro/jquery.inview.js',
    'resources/assets/js/honeypro/respond.min.js',
    'resources/assets/js/honeypro/app.js',

    // compiled
    'public/js/custom.js',

    'resources/assets/js/honeypro/velocity.min.js',
    'resources/assets/js/honeypro/main.js'
  ], 'public/js/all.js'
);
