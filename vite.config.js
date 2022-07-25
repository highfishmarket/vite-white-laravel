import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
//추가
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    //추가
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
