/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            arkaplan: "#FFF8EA",

        },
        fontFamily: {
            'abril': ['"Abril Fatface"', 'cursive'],
            'playfair': ['"Playfair Display"', 'serif'],
            'poppins': ['"Poppins"', 'sans-serif'],
          },
    },
  },
  plugins: [],
}

