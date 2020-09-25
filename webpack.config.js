const path = require("path");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const urlDev = "DrMarcelo";

const webpackConfig = {
  mode: "development",
  entry: {
    bundle: path.join(__dirname, "dist", "js", "main", "main.js"),
  },
  output: {
    filename: "app.js",
    path: path.resolve(__dirname, "dist/js"),
    publicPath: "",
  },
  module: {
    rules: [
      {
        test: /.(js|jsx)$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
        },
      },
      {
        test: /.(css|scss|sass)$/,
        use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"],
      },
      {
        test: /\.(png|svg|jpg|gif)$/,
        use: {
          loader: "file-loader",
          options: {
            name: "./../img/[name].[ext]",
          },
        },
      },
    ],
  },
  plugins: [
    new BrowserSyncPlugin({
      proxy: {
        target: `http://localhost/${urlDev}`,
      },
      files: ["**/*.php"],
      cors: true,
      reloadDelay: 0,
      open: true,
    }),
    new MiniCssExtractPlugin({
      disable: false,
      filename: "../css/styles.css",
      allChunks: true,
    }),
  ],
};

if (process.env.NODE_ENV === "production") {
  webpackConfig.mode = "production";
}

module.exports = webpackConfig;
