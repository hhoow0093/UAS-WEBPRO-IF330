import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                zoom: 'zoom 0.3s ease-in-out',
            },
            keyframes: {
                zoom: {
                    '0%': { transform: 'scale(1)' },
                    '100%': { transform: 'scale(1.05)' },
                },
            },
        },
    },
    plugins: [],
};
