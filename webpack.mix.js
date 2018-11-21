
var mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .sass('resources/sass/custom-admin.scss', 'public/css/custom-admin.css')

    .styles([
        'public/css/app.css',
        'resources/admin/ionicons/2.0.1/css/ionicons.min.css',
        'resources/admin/dist/css/AdminLTE.min.css',
        'resources/admin/dist/css/skins/_all-skins.min.css',
        'resources/admin/plugins/iCheck/all.css',
        'resources/admin/plugins/datepicker/datepicker3.css',
        'resources/admin/plugins/select2/select2.min.css',
        'resources/admin/plugins/datatables/dataTables.bootstrap.css',
        'public/css/custom-admin.css'
        ],
        'public/css/admin.css')

    .scripts([
        'public/js/app.js',
        'resources/admin/plugins/slimScroll/jquery.slimscroll.min.js',
        'resources/admin/plugins/fastclick/fastclick.js',
        'resources/admin/dist/js/app.min.js',
        'resources/admin/dist/js/demo.js',
        'resources/admin/plugins/select2/select2.full.min.js',
        'resources/admin/plugins/datepicker/bootstrap-datepicker.js',
        'resources/admin/plugins/iCheck/icheck.min.js',
        'resources/admin/plugins/datatables/jquery.dataTables.min.js',
        'resources/admin/plugins/datatables/dataTables.bootstrap.min.js',
        'public/js/scripts-admin.js',
        'public/js/custom-admin.js'
        ],
        'public/js/admin.js')

    .version();

    // mix.browserSync('blog.loc');

mix.copy('resources/admin/bootstrap/fonts','public/fonts');
mix.copy('resources/admin/dist/fonts','public/fonts');
mix.copy('resources/admin/dist/img','public/img/admin');




