const plugin = require('tailwindcss/plugin')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./assets/**/*.js",
    "./templates/**/*.html.twig",
    "./vendor/tales-from-a-dev/flowbite-bundle/templates/**/*.html.twig"
  ],
  theme: {
    extend: {
      colors: {
        "light-beige": "#F3EDE7",
        "dark-gray": "#1E1C1F",
        "pale-pink": "#C39E80",
        "warm-orange": "#CA734D",
      }
    },
  },
  plugins: [
    plugin(function({addVariant}) {
      addVariant('turbo-frame', 'turbo-frame[src] &')
    })
  ],
}
