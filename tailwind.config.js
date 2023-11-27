/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme  : {
        extend: {
            fontFamily: {
                'sans': ['Open Sans', 'sans-serif'],
            },
            colors    : {
                'primary': {
                    disabled: '#FBE8EA',
                    DEFAULT: '#CB3546'
                },
            }
        },
    },
    plugins: [],
}

