import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js', 
                'resources/css/client/plugins.css', 
                'resources/client/css/style.css', 
                'resources/client/js/plugins.js', 
                'resources/client/js/theme.js'
            ],
            refresh: true,
        }),
    ],
    build: {
        chunkSizeWarningLimit: 1000,
    },
});
