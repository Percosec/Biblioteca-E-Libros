/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "./node_modules/flowbite/**/*.js"
    ],
    theme: {
      extend: {
        screens:{
          'breakpoint': '1280px',
          'breakpoint2': '960px',
          'breakpoint3': '700px',
          'breakpoint4': '1535px',
          'breakpoint5': '1879px',
        }
      },
    },
    plugins: [
        require('flowbite/plugin')
    ],
}

