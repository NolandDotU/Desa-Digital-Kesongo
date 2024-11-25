/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,php}"],
  theme: {
    colors: {
      primary: "#FC8210",
      primeSupSoft: "#FFF3E7",
      primeExtSoft: "#FEE6CF",
      grey: "#BDBDBD",
      white: "#ffffff",
      garis: "#F6F7FA",
      grey1: "#333333",
      grey3: "#828282",
      grey4: "#BDBDBD",
    },
    fontFamily: {
      sans: ['"Poppins"', "sans-serif"],
      nunito: ['"Nunito Sans"', "sans-serif"],
    },
    extend: {},
  },
  plugins: [],
};
