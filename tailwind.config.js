module.exports = {
    dark:[
      'media'
    ],
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
    extend: {
        colors: {
            'dark-mode': '#121212',
            'dark-input': '#2b2d30',
        }
    },
  },
    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),


    ],
}
