/** @type {import('tailwindcss').Config} */
export default {
  darkMode: 'class',
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './resources/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        darkBackground: '#121212',
        darkText: '#E4E4E7'
      }
    },
  },
  plugins: [],
}

