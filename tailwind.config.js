const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    purge: [
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
                trueGray: colors.trueGray,
                orange: colors.orange,
                lime: colors.lime,
                teal: colors.teal,
                cyan: colors.cyan,
                rose: colors.rose,
                fuchsia: colors.fuchsia,
                violet: colors.violet,
                emerald: colors.emerald,
                amber: colors.amber,
                sky: colors.sky,
                warmGray: colors.warmGray,
                coolGray: colors.coolGray,

            }
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
