import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/site.scss',
                'resources/scss/auth.scss',
                'resources/scss/dash.scss',
                'resources/js/site.js',
                'resources/js/auth.js',
                'resources/js/dash.js',
            ],
            refresh: true,
        }),
    ],
});