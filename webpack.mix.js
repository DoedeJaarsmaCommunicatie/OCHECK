const mix = require('laravel-mix');

mix
    .sass('assets/styles/main.scss', 'dist/styles/main.css')
    .js('assets/scripts/main.js', 'dist/scripts/main.js')
    .copyDirectory('assets/images', 'dist/images')
    .options({
        processCssUrls: false,
        postCss: [
            require('tailwindcss'),
            require('autoprefixer')
        ]
    });
