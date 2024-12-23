/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'services': "url('/assets/images/abt3.jpeg')",
        'recruit': "url('/assets/images/recruiting2.jpg')",
        'recruit1': "url('/assets/images/recruiting3.jpg')",
        'recruit2': "url('/assets/images/recruiting4.jpg')",
      }
    }
  },
  plugins: [],
}

