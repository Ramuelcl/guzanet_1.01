const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                rojo: '#DA5C53',
                verde: '#2FDD92',
                amarillo:'#FDFFA9',
                azul:'#4700D8',
            },
        },
        container: {
            center: true,
        },

    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
