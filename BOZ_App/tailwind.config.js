const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'fountain-blue': '#61C4AD',
                'pickled-bluewood': '#2F4858'
            },
            width: {
                'container': '1140px'
            },
            blur: {
                'xs-sm': '3px'
            },
            height: {
                '128': '32rem'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
