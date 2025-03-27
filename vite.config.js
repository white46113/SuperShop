import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        strictPort: true,
        hmr: {
            host: '127.0.0.1',
            port: 8000, // Force Vite HMR to use Laravel's port
        },
    },
    build: {
        assetsDir: '', // Ensure assets load from the correct path
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
