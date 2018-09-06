var elixir = require('laravel-elixir');
elixir.config.assetsPath = './';
elixir.config.publicPath = './';
elixir(function(mix) {
    mix.sass('override.scss', 'cp/override.css');
});