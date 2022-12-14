/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/views/**/*.{html,php}"],
  theme: {
    extend: {
      fontFamily: {
        'body': ['Poppins', 'sans-serif'],
      },
      backgroundImage: {
        'dot-pattern': 'radial-gradient(#ed7966 1.5px, transparent 0)',
      },
      colors: {
        'main': '#303179',
        'black': '#141850',
        'slate': {
          500: '#141850'
        },
        'zinc': {
          600: '#5F5F5F'
        },
        'yellow': {
          100: '#fae5df'
        },
        'orange': {
          600: '#ed7966'
        }

      },
      fontSize: {
        "80": ['5rem', '1.25'],
        "40": ['2.5rem', '2.5rem'],
      }
    }
  },
  plugins: [],
}
