const mix = require("laravel-mix");
const elixir = require('laravel-elixir');
elixir.config.assetsPath = './';
elixir.config.publicPath = './';
mix.scripts(['js/vendor/collage-plus.js','js/vendor/zoom.js','js/jabbascripts.js','js/vue.js'],'js/app.js')
    .sass("sass/style.scss", "css")
    .options({
        processCssUrls: false
    });