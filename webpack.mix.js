// webpack.mix.js
const mix = require('laravel-mix');

/**
 * Global
 * **/
mix.copy([
    'node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.ttf',
    'node_modules/@fortawesome/fontawesome-free/webfonts/fa-brands-400.woff2',
    'node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.ttf',
    'node_modules/@fortawesome/fontawesome-free/webfonts/fa-regular-400.woff2',
    'node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.ttf',
    'node_modules/@fortawesome/fontawesome-free/webfonts/fa-solid-900.woff2',
],'public/assets/libs/fontawesome/webfonts/')
    .sass('resources/assets/sass/fontawesome.scss', 'public/assets/libs/fontawesome/css/');

/**
 * Admin
 * **/

// main
mix.js('resources/assets/admin/js/dashboard.js', 'public/assets/admin/js/')
    .css('resources/assets/admin/css/admin.css', 'public/assets/admin/css/')
    .sass('resources/assets/admin/scss/dashboard.scss', 'public/assets/admin/css/');

// login page
mix.sass('resources/assets/admin/scss/login-form.scss', 'public/assets/admin/css/');

// user page
mix.js('resources/assets/admin/js/user.js', 'public/assets/admin/js/')
    .sass('resources/assets/admin/scss/tpl-users.scss', 'public/assets/admin/css/');

//

// config global
mix.options({
    hideModules: false,
    license: false,
    processCssUrls: false
}).sourceMaps(true, 'source-map')
    .version()
    .browserSync({
        proxy: '127.0.0.1:8000',
        open: false,
        cors: true,
        ghostMode: false
    }).disableNotifications();
