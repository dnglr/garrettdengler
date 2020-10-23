const mix = require('laravel-mix');
require('laravel-mix-jigsaw');
require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw({
        browserSync: false
    })
    .js('source/_assets/js/main.js', 'js')
    .js('source/_assets/js/grid.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .sass('source/_assets/sass/font.woff.scss', 'css')
    .sass('source/_assets/sass/font.woff2.scss', 'css')
    .options({
        processCssUrls: false,
    }).version();
