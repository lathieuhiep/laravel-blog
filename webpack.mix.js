// webpack.mix.js
const mix = require('laravel-mix');
const CleanCssPlugin = require('clean-css-cli');
const TerserPlugin = require('terser-webpack-plugin');

/**
 * Admin
 * **/

// main
mix.js('resources/assets/admin/js/main.js', 'public/assets/admin/js/')
    .sass('resources/assets/admin/scss/main.scss', 'public/assets/admin/css');

// login page
mix.sass('resources/assets/admin/scss/login-form.scss', 'public/assets/admin/css');

//

// config global
mix.options({
    hideModules: false,
    license: false
}).version()
    .browserSync({
        proxy: '127.0.0.1:8000',
        open: false,
        cors: true,
        ghostMode: false
    })
    .disableNotifications();
