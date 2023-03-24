/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
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
