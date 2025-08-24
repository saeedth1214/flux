import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from '@tailwindcss/vite'
import path from 'path'

export default defineConfig({
    base: "/Fluxone",
    plugins: [
        laravel({
            input: [
                'themes/Fluxone/resources/css/app.css',
                'themes/Fluxone/resources/js/app.js',
            ],
            buildDirectory: "Fluxone",
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
            '@': path.resolve(__dirname, 'themes/Fluxone/resources/js'),
            // '@flux': path.resolve(__dirname, '../../../../vendor/livewire/flux/dist')
        }
    },
    server: {
        hmr: {
            host: 'localhost',
        }
    }
});


// console.log(__dirname);

