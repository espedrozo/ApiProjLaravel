const mix = require('laravel-mix');

mix.js('public/js/frontConnection.js', 'public/js')
    //.js('public/js/frontConnection.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [        
]);

mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.json']
    }
});
