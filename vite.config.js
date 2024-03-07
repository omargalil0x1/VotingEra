import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
              'resources/css/about.css',
              'resources/css/app.css',
              'resources/css/error-badge.css',
              'resources/css/form.css',
              'resources/css/ops-block.css',
              'resources/css/vote-cards.css',
              'resources/css/voting-form.css',
              'resources/js/app.js',
              'resources/js/form-validation.js',
              'resources/js/form-validation-2.js',
              'resources/js/form.js',
            ],
            refresh: true,
        }),
    ],
});
