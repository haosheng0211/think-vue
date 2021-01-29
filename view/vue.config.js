/* eslint-disable */
const {CleanWebpackPlugin} = require("clean-webpack-plugin");

module.exports = {
  outputDir: "../public",
  indexPath: "../view/index.html",
  devServer: {
    proxy: {
      '/api': {
        target: '<api-host>',
        changeOrigin: true
      }
    }
  },
  configureWebpack: {
    plugins: [
      new CleanWebpackPlugin({
        cleanOnceBeforeBuildPatterns: ["js/*", "css/*", "fonts/*", "img/*"]
      })
    ]
  }
};
