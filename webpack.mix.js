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
   .sass('resources/sass/app.scss', 'public/css');


mix.scripts([
    'node_modules/venobox/venobox/venobox.min.js',
    'node_modules/air-datepicker/dist/js/datepicker.min.js',
    'node_modules/air-datepicker/dist/js/i18n/datepicker.en.js'
    // 'node_modules/slick-carousel/slick/slick.min.js',
    // 'node_modules/metismenu/dist/metisMenu.min.js',
    // 'node_modules/owl.carousel/dist/owl.carousel.js',
    // 'node_modules/smartwizard/dist/js/jquery.smartWizard.js',
    // 'resources/assets/js/vendors/viedolightbox/video.js',
    // 'resources/assets/js/vendors/jquery.waypoints.min.js',
], 'public/js/plugins.js');
