
var mix = require('laravel-mix');

mix
    .js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .sass('resources/sass/custom.scss', 'public/css/custom.css')

    .styles([
        'public/css/app.css',
        'public/css/custom.css'
        ],
        'public/css/all.css')

    .scripts([
        'public/js/app.js',
        'public/js/custom.js'
        ],
        'public/js/all.js')

    .version()

    .browserSync('sandiplusnew.loc');


mix
    .styles([
        'resources/admin/bootstrap/css/bootstrap.min.css',
        'resources/admin/font-awesome/4.5.0/css/font-awesome.min.css',
        'resources/admin/ionicons/2.0.1/css/ionicons.min.css',
        'resources/admin/dist/css/AdminLTE.min.css',
        'resources/admin/dist/css/skins/_all-skins.min.css',
        'resources/admin/plugins/iCheck/all.css',
        'resources/admin/plugins/datepicker/datepicker3.css',
        'resources/admin/plugins/select2/select2.min.css',
        'resources/admin/plugins/datatables/dataTables.bootstrap.css'
        ],
        'public/css/admin.css')

    .scripts([
        'resources/admin/plugins/jQuery/jquery-2.2.3.min.js',
        'resources/admin/bootstrap/js/bootstrap.min.js',
        'resources/admin/plugins/slimScroll/jquery.slimscroll.min.js',
        'resources/admin/plugins/fastclick/fastclick.js',
        'resources/admin/dist/js/app.min.js',
        'resources/admin/dist/js/demo.js',
        'resources/admin/plugins/select2/select2.full.min.js',
        'resources/plugins/datepicker/bootstrap-datepicker.js',
        'resources/plugins/iCheck/icheck.min.js',
        'resources/plugins/datatables/jquery.dataTables.min.js',
        'resources/plugins/datatables/dataTables.bootstrap.min.js'
        ],
        'public/js/admin.js');

mix.copy('resources/admin/bootstrap/fonts','public/fonts');
mix.copy('resources/admin/dist/fonts','public/fonts');
mix.copy('resources/admin/dist/img','public/img/admin');




