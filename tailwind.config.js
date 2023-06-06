/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
        colors: {
            amarelo: {
                claro:  '#fef3c7',
                escuro: '#facc15',
                hover:  '#ca8a04'
            },
            red: {
                claro:  '#f87171',
                escuro: '#b91c1c',
                hover:  '#fca5a5'
            },
            azul: {
                claro:  '#C5DFFF',
                escuro: '#061E3C',
                hover:  '#1057B0'
            },
        fontFamily: {
            inter: ['Inter', 'sans-serif']
            },
        }
    },
  },
  plugins: [],
}

