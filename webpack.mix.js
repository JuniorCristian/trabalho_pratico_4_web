const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles('node_modules/bootstrap/dist/css/bootstrap.css', 'public/css/bootstrap.min.css')
    .styles(['node_modules/datatables.net-dt/css/dataTable.dataTable.css', 'node_modules/datatables.net-responsive-dt/css/responsive.dataTable.css'], 'public/css/datatables.min.css')
    .styles(['node_modules/@fontawesome/fontawesome-free/css/all.css', 'node_modules/@fontawesome/fontawesome-free/css/brands.css', 'node_modules/@fontawesome/fontawesome-free/css/fontawesome.css', 'node_modules/@fontawesome/fontawesome-free/css/regular.css', 'node_modules/@fontawesome/fontawesome-free/css/svg-with-js.css', 'node_modules/@fontawesome/fontawesome-free/css/v4-shims.css'], 'public/css/fontawesome.min.css')
    .scripts('node_modules/jquery/dist/jquery.js', 'public/js/jquery.min.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/js/bootstrap.min.js')
    .scripts(['node_modules/datatables.net-dt/js/dataTable.dataTable.js', 'node_modules/datatables.net-responsive-dt/responsive.dataTable.js'], 'public/js/datatables.min.js')
