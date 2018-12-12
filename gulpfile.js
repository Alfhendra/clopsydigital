var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');


elixir.config.assetsPath = 'themes/clopsy-theme/assets/';
elixir.config.publicPath = 'themes/clopsy-theme/assets/compiled/';

elixir(function(mix){

    mix.sass('style.scss');

    mix.scripts([
        'jquery.js',
        'app.js'
    ]);

    mix.livereload([
        'themes/clopsy-theme/assets/compiled/css/style.css',
        'themes/clopsy-theme/**/*.htm',
        'themes/clopsy-theme/assets/compiled/js/*.js'
    ])
})
