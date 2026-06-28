const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");
const CopyPlugin = require("copy-webpack-plugin");
const HtmlWebpackPlugin = require("html-webpack-plugin");

module.exports = {
    mode: "production",

    entry: "./css/estilos.css",

    output: {
        path: path.resolve(__dirname, "dist"),
        clean: true
    },

    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    "css-loader"
                ]
            }
        ]
    },

    plugins: [
        new MiniCssExtractPlugin({
            filename: "css/estilos.css"
        }),
        new HtmlWebpackPlugin({
    template: "./index.html",
    filename: "index.html",
    inject: false,
    minify: {
        collapseWhitespace: true,
        removeComments: true,
        removeRedundantAttributes: true,
        removeScriptTypeAttributes: true,
        removeStyleLinkTypeAttributes: true,
        useShortDoctype: true,
        minifyCSS: true,
        minifyJS: true
    }
}),

        new CopyPlugin({
            patterns: [
                { from: "guardar.php", to: "guardar.php" },
                { from: "conexion.php", to: "conexion.php" },
                { from: "img", to: "img" }
            ]
        })
    ],

    optimization: {
        minimizer: [
            "...",
            new CssMinimizerPlugin()
        ]
    }
};