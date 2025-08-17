import {defineConfig} from "vite";
import laravel from "laravel-vite-plugin";
export default defineConfig({
    base: "/FluxOne",
    plugins: [
        laravel({
            input: [
                "/resources/css/app.css",
                "/resources/js/app.js",
            ],
            buildDirectory: "FluxOne",
            publicDirectory: "./../../public"
        }),
        {
            name: "blade",
            handleHotUpdate({file, server}) {
                if (file.endsWith(".blade.php")) {
                    server.ws.send({
                        type: "full-reload",
                        path: "*",
                    });
                }
            },
        },
    ],
    resolve: {
        alias: {
            '@': '/resources/js',

        }
    },
    server: {
        hmr: {
            host: 'localhost',
        }
    }
});
