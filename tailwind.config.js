/** @type {import('tailwindcss').Config} */
export default {
  content: ["./src/**/**/*.{html,js,php}",
            "./src/**/*.{html,js,php}",
            "./src/*.{html,js,php}",
            "index.html",
            "resources/views/*.blade.php",
            "resources/views/layouts/*.blade.php",
            "resources/views/components/*.blade.php"
          ],
  theme: {
    extend: {
      colors:{
        primary:'#FFCA26',
        secondary:'#39B5FF'
      }
    },
  },
  plugins: [],
}

