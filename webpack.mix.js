const { mix } = require('laravel-mix');
var debug = process.env.NODE_ENV !== "production";
var webpack = require('webpack');
var path = require('path');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.options({ processCssUrls: false });
mix.react('resources/assets/js/app.js', 'public/js')
    .less('resources/assets/less/app.less', 'public/css/style.min.css')
    .less('resources/assets/less/session_management.less', 'public/css')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('node_modules/vis/dist/vis.min.css', 'public/css')
    .copy('node_modules/font-awesome/fonts', 'public/fonts')
    .copy('resources/assets/font/TTF', 'public/fonts')
    .copy('resources/assets/js/jquery.min.js', 'public/js')
    .copy('resources/assets/js/bootstrap.min.js', 'public/js')
    .copy('resources/assets/js/session-management.js', 'public/js');

// module.exports = {
//     context: path.join(__dirname, "public"),
//     devtool: debug ? "inline-sourcemap" : null,
//     entry: ["./js/app.js"],
//     module: {
//         loaders: [
//             {
//                 test: /\.jsx?$/,
//                 exclude: /(node_modules|bower_components)/,
//                 loader: 'babel-loader',
//                 query: {
//                     presets: ['react', 'es2015', 'stage-0'],
//                     plugins: ['react-html-attrs', 'transform-decorators-legacy', 'transform-class-properties'],
//                 }
//             }
//         ]
//     },
//     output: {
//         path: __dirname + "/public/js/",
//         filename: "bundle.js"
//     },
//     plugins: debug ? [] : [
//         new webpack.optimize.DedupePlugin(),
//         new webpack.optimize.OccurenceOrderPlugin(),
//         new webpack.optimize.UglifyJsPlugin({ mangle: false, sourcemap: false }),
//     ],
// };