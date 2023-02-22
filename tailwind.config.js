/** @type {import('tailwindcss').Config} */
module.exports = {
  
  purge: [

    './resources/**/*.blade.php',

    './resources/**/*.js',

    './resources/**/*.vue',

  ],
  theme: {
    extend: {
      colors: {
        'metallic-gold': '#AA6C39',
        'custom-green': '#4CAF50',
      },
    },
  },
  variants: {},
  plugins: [],
};