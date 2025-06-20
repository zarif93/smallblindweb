// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/styles.css',
                'resources/css/responsive.css',
                'resources/css/mobilemenu.css',
                'resources/js/app.js',
                'resources/js/imagesloaded.pkgd.min.js',
                'resources/js/isotope.pkgd.min.js',
                'resources/js/script.js',
            ],
            refresh: true,
        }),
    ],
});