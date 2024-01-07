/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./app/views/**/*.{php,html}",
        "./public/**/*.{html,js}"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('@tailwindcss/typography')
    ],
}

