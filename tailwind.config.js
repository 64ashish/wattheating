/** @type {import('tailwindcss').Config} */
const colors = require('tailwindcss/colors')
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
      colors: {
          primary: {
              '50': '#ebffff',
              '100': '#cefdff',
              '200': '#a2f8ff',
              '300': '#63f0fd',
              '400': '#1cdef4',
              '500': '#00b5cc',
              '600': '#039ab7',
              '700': '#0a7b94',
              '800': '#126278',
              '900': '#145265',
              '950': '#063646',
          },
          secondary: {
              '50': '#e7fffe',
              '100': '#c2fffd',
              '200': '#8cfffb',
              '300': '#3dfff9',
              '400': '#00fff8',
              '500': '#00e8ff',
              '600': '#00b6e3',
              '700': '#008fb5',
              '800': '#007190',
              '900': '#005874',
              '950': '#003d55',
          },
          alabaster: {
              '50': '#f9f9f9',
              '100': '#f0f0f0',
              '200': '#e4e4e4',
              '300': '#d1d1d1',
              '400': '#b4b4b4',
              '500': '#9a9a9a',
              '600': '#818181',
              '700': '#6a6a6a',
              '800': '#5a5a5a',
              '900': '#4e4e4e',
              '950': '#282828',
          },
          black: colors.black,
          white: colors.white,
          gray: colors.gray,
          // emerald: colors.emerald,
          // indigo: colors.indigo,
          // yellow: colors.yellow,
          // ...
      },
      extend: {
          padding: {
              '1/2': '50%',
              full: '100%',
          },
      },
  },
  plugins: [
      require('@tailwindcss/forms')
  ],
}
