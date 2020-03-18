/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 */

// Load required modules
const mix = require('laravel-mix');
let tailwindcss = require('tailwindcss');
require('dotenv').config();

mix.js('resources/js/panel.js', 'public/panel/js')
    .webpackConfig({
        resolve: {
            alias: {
                '@': path.resolve(__dirname, 'resources/js/panel'),
                '@assets': path.resolve(__dirname, 'resources/assets/panel'),
                '@sass': path.resolve(__dirname, 'resources/sass')
            }
        }
    })
    .sass('resources/sass/panel.scss', 'public/panel/css').options({
        postCss:[require('autoprefixer'), require('postcss-rtl')]
    })
    .postCss('resources/assets/panel/css/main.css', 'public/panel/css', [
        tailwindcss('tailwind.js'), require('postcss-rtl')()
    ])
    .copy('node_modules/vuesax/dist/vuesax.css', 'public/panel/css/vuesax.css') // Vuesax framework css
    .copy('resources/assets/panel/css/iconfont.css', 'public/panel/css/iconfont.css') // Feather Icon Font css
    .copyDirectory('resources/assets/panel/fonts', 'public/panel/fonts') // Feather Icon fonts
    .copyDirectory('node_modules/material-icons/iconfont', 'public/panel/css/material-icons') // Material Icon fonts
    .copyDirectory('node_modules/material-icons/iconfont/material-icons.css', 'public/panel/css/material-icons/material-icons.css') // Material Icon fonts css
    .copyDirectory('resources/assets/panel/images', 'public/panel/images'); // Copy all images from resources to public folder

// Change below options according to your requirement
if (mix.inProduction()) {
    mix.version();
    mix.webpackConfig({
        output: {
            chunkFilename: 'panel/js/chunks/[name].[chunkhash].js',
        }
    });
   // mix.setResourceRoot("/public/");
}
else{
    mix.webpackConfig({
        output: {
            chunkFilename: 'panel/js/chunks/[name].js',
        }
    });
}