// webpack.mix.js
const mix = require('laravel-mix');

// admin
mix.sass('resources/sass/admin/login-form.scss', 'public/assets/admin/css');


// config global
mix.version()
    .browserSync('127.0.0.1:8000')
    .disableNotifications();
