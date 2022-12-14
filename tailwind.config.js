/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'main': {
          100: '#c8d2c6',
          200: '#7aa88f',
          300: '#467970',
          400: '#2d4f52',
          500: '#2a3e46',
          'gold': '#B79C3D',
          'main': '#0B1516',
          'footer': '#000200',
          'mainl': '#1a3336',
          'lore' : '#B9AA91',
          'lore-nav': '#5e5648'
        },
      },
      fontFamily: {
        'title': [
          'Metamorphous',
          'cursive',
          "Segoe UI"
        ],
        'header': [
          'Cinzel',
          "Segoe UI"
        ],
        'body': [
          'Karla',
          'sans-serif',
        ],
        'form': [
          'Roboto'
        ]
      }
    },
  },
  plugins: [
  ],
}

// dafont.com/enchanted-land.font

// dafont.com/sketch-gothic-school.font

// dafont.com/seven-swordsmen-bb.font

// dafont.com/breathe-fire.font

// dafont.com/holy-empire.font