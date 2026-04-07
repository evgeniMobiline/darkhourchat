const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

const appPaths = {
    jsPath: path.resolve(__dirname, 'src'),
    cssPath: path.resolve(__dirname, 'src'),
    output: path.resolve(__dirname, 'public/assets'),
};

module.exports = (env, argv) => ({
    mode: env.NODE_ENV,
    entry: {
        app: [
            appPaths.jsPath + '/app.js',
            appPaths.cssPath + '/app.css',
        ],
        forms: appPaths.jsPath + '/forms.js',
    },
    output: {
        path: appPaths.output,
        filename: 'js/[name].js',
    },
    optimization: {
        concatenateModules: env.NODE_ENV === 'production',
        runtimeChunk: {
            name: 'base'
        },
        splitChunks: {
            cacheGroups: {
                style: {
                    type: 'css/mini-extract',
                    test: /[\\/]style(\.module)?\.(sc|sa|c)ss$/,
                    chunks: 'all',
                    enforce: true,
                    name(module, chunks, cacheGroupKey) {
                        return `${cacheGroupKey}-${chunks[0].name}`;
                    },
                },
                default: false,
            },
        },
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                exclude: /(node_modules|bower_components|vendor)/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader',
                    'postcss-loader',
                ],
            },
            {
                test: /\.(js|jsx)$/,
                include: appPaths.jsPath,
                exclude: /(node_modules|bower_components|vendor)/,
                use: {
                    loader: "babel-loader"
                }
            }
        ],
    },
    resolve: {
        extensions: [".js", ".jsx"]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/[name].css',
        }),
    ],
    watchOptions: {
        ignored: /node_modules/,
    },
});