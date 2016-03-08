var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    //mix.sass('app.scss');

    mix.styles([
        'resources/assets/css/bootstrap.min.css',
        'resources/assets/css/modern-business.css',
        'resources/assets/css/app.css'
    ],'public/assets/css/behabitat.css');

    mix.version('public/assets/css/behabitat.css');

    mix.copy('resources/assets/font-awesome', 'public/assets/font-awesome')
    .copy('resources/assets/fonts', 'public/assets/fonts')
    .copy('resources/assets/img', 'public/assets/img');

    mix.scripts([
        'resources/assets/js/jquery.min.js',
        'resources/assets/js/bootstrap.min.js',
        'resources/assets/js/app.js'
    ],'public/assets/js/behabitat.js');

    mix.version('public/assets/js/behabitat.js');

});
