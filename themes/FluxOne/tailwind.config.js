/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './themes/Fluxone/views/**/*.blade.php',
        './themes/Fluxone/resources/js/**/*.js',
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