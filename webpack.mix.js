const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .react() // This is for React compilation
   .sass('resources/sass/app.scss', 'public/css');


mix.disableNotifications()






//    .setResourceRoot('/public/') // Adjust this path according to your project setup
//    .webpackConfig({
//        resolve: {
//            extensions: ['.js', '.jsx'], // Add '.jsx' extension for JSX files
//        },
//        module: {
//            rules: [
//                {
//                    test: /\.jsx$/, // Match .jsx files
//                    exclude: /node_modules/,
//                    use: [
//                        {
//                            loader: 'babel-loader', // Use Babel for JSX files
//                            options: {
//                                presets: ['@babel/preset-react'],
//                            },
//                        },
//                        {
//                            loader: 'esbuild-loader', // Use esbuild-loader for JSX files
//                            options: {
//                                loader: 'jsx', // Specify the 'jsx' loader for JSX files
//                            },
//                        },
//                    ],
//                },
//            ],
//        },
//    })
   ;

// if (mix.inProduction()) {
//     mix.version();
// }


// .sass('resources/sass/*.scss', 'public/css')
// .css('resources/css/*.css', 'public/css')