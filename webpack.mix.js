const mix = require('laravel-mix');

mix.js('public/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css');

mix.webpackConfig({
   resolve: {
      extensions: ['.js', '.json']
   }
});
