const mix = require('laravel-mix');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');
require('mix-tailwindcss');

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
    .sass('resources/scss/public/app.scss', 'public/css')
    .tailwind('./tailwind.config.js')
    .copy('node_modules/@fortawesome/fontawesome-pro/webfonts', 'public/fonts')
    // .purgeCss()
    .options({processCssUrls: false});

if (mix.inProduction()) {
    mix.version();
}
