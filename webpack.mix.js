const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .js('public/js/frontConnection.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [        
]);
