import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            height:{
                "10v":"10vh", //navbar
                "16v":"16vh", //Header
                "30v":"30vh", //LOGO en login y register
                "68v":"68vh"  //Main
            },
            colors: {
                'header': "#1C489E",
                'nav': "#FFFFFF",
                'main':"#DCE5F4",
                'footer' : "#000000" //"#E5E5E5"
            }
        }
    },

    plugins: [forms],
};
