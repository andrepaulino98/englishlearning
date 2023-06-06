const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('./build.css', 'public/css', [
    require("tailwindcss"),
   ]);
