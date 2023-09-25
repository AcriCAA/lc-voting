import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const colors = require('tailwindcss/colors'); 

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                transparent: 'transparent', 
                'gray-background':'#f7f8fc',
                'black':'#000000', 
                'blue':'#328af1', 


            },
            spacing: {
                70:"17.5rem", 
                175:'43.75rem',
                44: '11rem'

            },
            maxWidth: {
                custom: '62.5rem', 
               
            },

            boxShadow: {

                card: '4px 4px 15px 0 rgba(36, 37, 38, 0.08)', 
                dialog: '10px 4px 15px 0 rgba(36, 37, 38, 0.22)'

            },
            fontFamily: {
                sans: ['Open Sans', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
            xxs: ['0.625rem', { lineHeight: '1rem' }],
            }
        },
    },

    plugins: [

        forms, 

        require('@tailwindcss/line-clamp'), 

        ],
};
