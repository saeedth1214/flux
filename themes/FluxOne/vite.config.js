import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    base: "/FluxOne",
    plugins: [
        laravel({
            input: [
                'themes/FluxOne/resources/css/app.css',
                'themes/FluxOne/resources/js/app.js',
            ],
            buildDirectory: "FluxOne",
            publicDirectory: "./../../public"
        }),
        {
            name: "blade",
            handleHotUpdate({ file, server }) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
        tailwindcss()
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
            '@flux': path.resolve(__dirname, '../../../vendor/livewire/flux/dist')
        }
    },
    server: {
        hmr: {
            host: 'localhost',
        }
    }
});
