/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './themes/FluxOne/views/**/*.blade.php',
        './themes/FluxOne/resources/js/**/*.js',
        './modules/Base/views/**/*.blade.php',
        './vendor/livewire/flux/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                vazir: ['vazir', 'sans-serif'],
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};