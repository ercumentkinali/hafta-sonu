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
            line: "#E9D29E",

        },
        fontFamily: {
            'abril': ['"Abril Fatface"', 'cursive'],
            'playfair': ['"Playfair Display"', 'serif'],
            'poppins': ['"Poppins"', 'sans-serif'],
          },
          height: {
            '132': '33rem',
          },
          width: {
            '37rem': '37rem',
          },
    },
  },
  plugins: [],
}

