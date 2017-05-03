var elixir = require('laravel-elixir');

var browserify = require('browserify');

elixir(function(mix) {
    mix.sass('app.scss')
    mix.stylesIn('public/');
    mix.scriptsIn('public/');
});