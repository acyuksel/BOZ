const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Raleway', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'cosmic-latte': '#DFF3EE',
                'puerto-rico': '#44B69A',
                'fountain-blue': '#61C4AD',
                'tradewind': '#48ABA4',
                'paradiso-light': '#3A9197',
                'paradiso-dark': '#347886',
                'casal': '#325F70',
                'pickled-bluewood': '#2F4858',
            },
            width: {
                'container': '1140px'
            },
            maxWidth: {
                'container': '1140px'
            },
            blur: {
                'xs-sm': '3px'
            },
            height: {
                '128': '32rem'
            },
            minHeight: {
                '128': '32rem',
                '1/6': '16.666667%'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
