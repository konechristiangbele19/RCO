const mix = require('laravel-mix');

mix
    .js('./node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js')
    .js('./node_modules/popper.js/dist/popper.min.js', 'public/js')
    .js('./node_modules/jquery/dist/jquery.min.js', 'public/js')
    .sass('resources/sass/style.scss', 'public/css')


mix.browserSync('http://localhost:8000');