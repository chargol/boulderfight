var elixir = require('laravel-elixir');

var bowerPath = 'resources/assets/bower_components/';

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	// jQuery
	mix.copy(bowerPath + 'jquery/dist/jquery.js', 'public/js/');
	// Pickadate-Plugin
	mix.copy(bowerPath + 'pickadate/lib/themes/default.css', 'public/css/pickadate/');
	mix.copy(bowerPath + 'pickadate/lib/themes/default.date.css', 'public/css/pickadate/');
	mix.copy(bowerPath + 'pickadate/lib/picker.js', 'public/js/');
	mix.copy(bowerPath + 'pickadate/lib/picker.date.js', 'public/js/');
    
    mix.rubySass('app.scss');
});
