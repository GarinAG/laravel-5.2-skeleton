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

elixir(function (mix) {
    mix.sass('style.scss');

    mix.styles(['style.css'], null, "public/css");

    mix.scripts([
        'foundation.core.js',
        'foundation.util.box.js',
        'foundation.util.box.js',
        'foundation.util.mediaQuery.js',
        'foundation.util.motion.js',
        'foundation.util.nest.js',
        'foundation.util.timerAndImageLoader.js',
        'foundation.util.touch.js',
        'foundation.util.triggers.js',
        'common.js',
    ], "public/js", "resources/assets/js");

    mix.version([
        "public/css/all.css",
        "public/js/all.js"
    ]);
});

