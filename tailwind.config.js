/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.{blade.php,vue,js}"
  ],
  theme: {
    extend: {
        colors: {
            turquoise: 'hsla(178, 75%, 46%, 1)',
            lighterTurquoise: 'hsla(178, 75%, 46%, 0.15)',
            darkBlue: 'hsla(216, 90%, 19%, 1)',
            darkGray: 'hsl(0, 0%, 95%)',
            darkerGray: 'hsla(0, 0%, 62%, 1)',
            lightGray: 'hsla(0, 0%, 100%, 0.2)',
            lighterGray: 'hsla(0, 0%, 100%, 1)',
        },
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
        }
    },
  },
  plugins: [],
}

