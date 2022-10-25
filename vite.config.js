import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/css/welcome.css',
                'resources/css/mypage.css',
                'resources/css/archive-show.css',
                'resources/css/delete-confirm.css',
                'resources/css/flash_message.css',
                'resources/css/header.css',
                'resources/css/home.css',
                'resources/css/admin/header.css',
                'resources/css/admin/dashboard.css',
                // 'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
});
