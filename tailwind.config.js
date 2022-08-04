const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            borderWidth: {
                '12': '12px',
            },
            zIndex: {
                '60': '60',
                '100': '100',
                '200': '200',
            },
            maxHeight: {
                'screen-1/2': '50vh',
                'screen-3/4': '75vh',
            },
            sepia: {
                50: '.50',
            }
        },
    },

    safelist: [
        {
            pattern: /bg-(gray|green|blue|orange|indigo|red|yellow)-(50|100|400|600|800)/,
            variants: ['hover'],
        },
        {
            pattern: /border-(gray|green|blue|orange|indigo|red)-(200)/,
        },
        {
            pattern: /text-(gray|green|blue|orange|indigo|red)-(800)/,
        },
        'fill-black',
        'bg-green-600',
        'shadow-md',
        'shadow-green-600',
        'bg-yellow-400',
    ],

    plugins: [require('@tailwindcss/forms')],
};
