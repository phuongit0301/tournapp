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

var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.scripts([
    		'jquery.min.js',
            'bootstrap.min.js',
            'bootstrap-datepicker.min.js',
            'scripts.js',
            'category-scripts.js'
            
        ], 'public/src/js/all.js')
        .styles([
            'bootstrap.min.css',
            'bootstrap-datepicker.min.css'
        ],'public/src/css/modules.css')
        .less('*.less', 'public/src/css/style.min.css')
        .copy('node_modules/font-awesome/fonts/**', 'public/src/fonts')
});
