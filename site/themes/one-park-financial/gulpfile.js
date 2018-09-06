var elixir = require('laravel-elixir');
var theme = 'style';
elixir.config.assetsPath = './';
elixir.config.publicPath = './';
elixir(function(mix) {
    mix.sass(theme + '.scss', 'css/' + theme + '.css');
    mix.scripts([
        'vendor/collage-plus.js',
        'vendor/zoom.js',
        'jabbascripts.js'
    ], './js/'+ theme +'.js');
});