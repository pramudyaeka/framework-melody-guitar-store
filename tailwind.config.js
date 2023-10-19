/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors :{
            gold : '#bca37f',
            textGold :'#3f2305',
            cream: '#f2ead3',
            bluelight : "#009FBD",
            dark :'#272829'
        }
    },
  },
  plugins: [],
}

