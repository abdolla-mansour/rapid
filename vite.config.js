import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
// import { defineConfig } from 'vite';
// import laravel from 'vite-plugin-laravel';

// export default defineConfig({
//   plugins: [
//     laravel({
//       // Set this to the path to your Laravel public directory
//       publicDir: 'public',
//     }),
//   ],
// });