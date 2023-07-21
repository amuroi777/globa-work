module.exports = () => ({
  plugins: {
    autoprefixer: {},
    'node-css-mqpacker': {
      from: '/themes/global-work/assets/css/main.css',
      map: {
        inline: false,
      },
      sort: true,
      to: '/themes/global-work/assets/css/main.css',
    },
  },
});