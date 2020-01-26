const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
mix.sass('resources/sass/app.scss', 'public/css');
mix.sass('resources/sass/style.scss', 'public/css');
mix.sass('resources/sass/main.scss', 'public/css');
mix.sass('resources/sass/menu.scss', 'public/css');
mix.sass('resources/sass/banner.scss', 'public/css');

//**************** CSS ******************** 
//css
mix.copy('resources/vendors/pace-progress/css/pace.min.css', 'public/css');
mix.copy('node_modules/@coreui/coreui-chartjs/dist/css/coreui-chartjs.css', 'public/css');
mix.copy('resources/sass/magiczoomplus.css', 'public/css');
mix.copy('resources/sass/zInput_default_stylesheet.css', 'public/css');
mix.copy('resources/sass/owl-carousel.css', 'public/css');
mix.copy('resources/sass/carouseller.css', 'public/css');

//************** SCRIPTS ****************** 
// general scripts
mix.copy('node_modules/pace-progress/pace.min.js', 'public/js');
mix.copy('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js', 'public/js');
// views scripts
mix.copy('node_modules/chart.js/dist/Chart.min.js', 'public/js');

mix.copy('node_modules/@coreui/coreui-chartjs/dist/js/coreui-chartjs.bundle.js', 'public/js');
// details scripts
mix.copy('resources/js/coreui/main.js', 'public/js');
mix.copy('resources/js/coreui/colors.js', 'public/js');
mix.copy('resources/js/coreui/charts.js', 'public/js');
mix.copy('resources/js/coreui/widgets.js', 'public/js');
mix.copy('resources/js/coreui/popovers.js', 'public/js');
mix.copy('resources/js/coreui/tooltips.js', 'public/js');
mix.copy('resources/js/magiczoomplus.js', 'public/js');
mix.copy('resources/js/quantity.js', 'public/js');
mix.copy('resources/js/zInput.js', 'public/js');
mix.copy('resources/js/owl.carousel.js', 'public/js');
mix.copy('resources/js/carouseller.min.js', 'public/js');

//*************** OTHER ****************** 
//fonts
mix.copy('node_modules/@coreui/icons/fonts', 'public/fonts');
//icons
mix.copy('node_modules/@coreui/icons/css/free.min.css', 'public/css');
mix.copy('node_modules/@coreui/icons/css/brand.min.css', 'public/css');
mix.copy('node_modules/@coreui/icons/css/flag.min.css', 'public/css');
mix.copy('node_modules/@coreui/icons/svg/flag', 'public/svg/flag');

mix.copy('node_modules/@coreui/icons/sprites/', 'public/icons/sprites');
//images
mix.copy('resources/assets', 'public/assets');