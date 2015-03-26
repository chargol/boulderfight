var elixir = require('laravel-elixir');

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
	mix.copy('resources/assets/bower_components/jquery/dist/jquery.js', 'public/js/');
	// Select2-Plugin
	mix.copy('resources/assets/bower_components/select2-dist/select2.css', 'public/css/')
		.copy('resources/assets/bower_components/select2-dist/select2.js', 'public/js/');
	// Date-Dropper-Plugin
	mix.copy('resources/assets/bower_components/datedropper/datedropper.css', 'public/css/')
		.copy('resources/assets/bower_components/datedropper/datedropper.js', 'public/js/');
    
    mix.rubySass('app.scss');
});
