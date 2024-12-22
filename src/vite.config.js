import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/css/app.css'],
            refresh: true,
        }),
        vue(),
    ],
    server: {
        host: '0.0.0.0',  // Docker環境向け
        port: 5173,
        hmr: {
            host: 'localhost', // ホットリロード用のホスト名
        },
    },
});