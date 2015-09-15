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
    mix.sass(
        'app.scss', // Source files
        'public/css', // Destination folder
        {includePaths: ['vendor/bower_components/foundation/scss','vendor/bower_components/sweetalert/dev']}
    );

    // Compile JavaScript
    mix.scripts(
        ['foundation/js/vendor/modernizr.js', 'foundation/js/vendor/jquery.js', 'foundation/js/foundation.min.js', 'country-region-selector/dist/jquery.crs.min.js','sweetalert/dist/sweetalert.min.js'], // Source files
        'public/js/app.js', // Destination file
        'vendor/bower_components/' // Source files base directory
    );
});
