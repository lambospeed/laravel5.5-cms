var mix       = require('laravel-mix'),
  assetsDir   = 'resources/assets/',
  nodeDir     = 'node_modules/',
  publicDir   = 'public/',
  distDir     = 'public/dist/',
  composerDir = 'vendor/',
  adminJs = [
    nodeDir     + 'jquery/dist/jquery.min.js',
    nodeDir     + 'moment/moment.js',
    nodeDir     + 'moment/min/locales.js',
    nodeDir     + 'bootstrap/dist/js/bootstrap.min.js',
    nodeDir     + 'eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
    nodeDir     + 'select2/dist/js/select2.min.js',
    nodeDir     + 'select2/dist/js/i18n/tr.js',
    nodeDir     + 'datatables.net/js/jquery.dataTables.js',
    nodeDir     + 'datatables.net-bs/js/dataTables.bootstrap.js',
    nodeDir     + 'datatables.net-buttons/js/dataTables.buttons.js',
    nodeDir     + 'datatables.net-buttons-bs/js/buttons.bootstrap.js',
    nodeDir     + 'morris.js/morris.js',
    nodeDir     + 'admin-lte/dist/js/app.min.js',
    nodeDir     + 'raphael/raphael.min.js',
    nodeDir     + 'nestable-fork/dist/jquery.nestable.min.js',
    composerDir + 'yajra/laravel-datatables-buttons/src/resources/assets/buttons.server-side.js',
    assetsDir   + 'js/admin.js'
  ],
  applicationJs = [
    nodeDir   + 'jquery/dist/jquery.min.js',
    nodeDir   + 'webfontloader/webfontloader.js',
    nodeDir   + 'jquery-floating-social-share/dist/jquery.floating-social-share.min.js',
    assetsDir + 'dist/js/bootstrap.min.js',
    assetsDir + 'libs/bootstrap/js/bootstrapValidator.min.js',
    assetsDir + 'libs/main/scripts.js',
  ];
  blogJs = [
    nodeDir   + 'jquery/dist/jquery.min.js',
    nodeDir   + 'webfontloader/webfontloader.js',
    nodeDir   + 'jquery-floating-social-share/dist/jquery.floating-social-share.min.js',
    assetsDir + 'dist/js/bootstrap.min.js',
    assetsDir + 'libs/bootstrap/js/bootstrapValidator.min.js',
    assetsDir + 'blog/libs/main/scripts.js',
  ];

mix
  .copyDirectory(nodeDir + 'tinymce', publicDir + 'packages/tinymce')
  .copyDirectory(assetsDir + 'img', publicDir + 'img')
  .less(assetsDir + 'less/admin.less', distDir + 'css/admin.css')
  .less(assetsDir + 'less/application.less', distDir + 'css/application.css')
  .sass(assetsDir + 'sass/styles.scss', distDir + 'css/styles.css')
  .sass(assetsDir + 'blog/sass/styles.scss', distDir + 'blog/css/styles.css')
  .babel(adminJs, distDir + 'js/admin.js')
  .babel(applicationJs, distDir +'js/script.js')
  .babel(blogJs, distDir +'blog/js/script.js');

if (mix.inProduction()) {
  mix.version();
}
