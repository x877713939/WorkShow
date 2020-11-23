module.exports = {
  output: {
    path: 'web/static-dist/', // 用于生产环境下的输出目录
    publicPath: '/static-dist/', // 用于开发环境下的输出目录
  },
  libs: {
    'base': ['libs/base.js'], // 基础类库
    'boot_base': ['libs/boot_base.js'],
    'html5shiv': ['html5shiv'],
    'fix-ie': ['console-polyfill', 'respond-js'], //也可以是一个npm依赖包
    'jquery-insertAtCaret': ['libs/jquery-insertAtCaret.js'],
    'jquery-nouislider': ['libs/jquery-nouislider.js'],
    'jquery-sortable': ['es-jquery-sortable'],
    'swiper': ['swiper'],
    'perfect-scrollbar': ['libs/perfect-scrollbar/index.js'],
    'jquery-validation': ['libs/jquery-validation.js'],
    'jquery-intro': ['libs/jquery-intro/index.js'],
    'bootstrap-datetimepicker': ['libs/datetimepicker/index.js'],
    'bootstrap-daterangepicker': ['libs/bootstrap-daterangepicker.js'],
    'iframe-resizer': ['libs/iframe-resizer.js'],
    'iframe-resizer-contentWindow': ['libs/iframe-resizer-contentWindow.js'],
    'jquery-timer': ['libs/jquery-timer.js'],
    'jquery-countdown': ['libs/jquery-countdown.js'],
    'jquery-cycle2': ['jquery-cycle2'],
    'excanvas-compiled': ['libs/excanvas-compiled.js'],
    'echo-js': ['echo-js'],
    'jquery-blurr': ['jquery-blurr'],
    'jquery-waypoints': ['jquery-waypoints'],
    'jquery-raty': ['libs/jquery-raty.js'],
    'echarts': ['echarts'],
    'select2': ['libs/select2/index.js'],
    'handlebars': ['handlebars'],
    'fullcalendar': ['libs/fullcalendar/index.js'],
    'ltc-sdk-client': ['libs/ltc-sdk-client/index.js'],
    'ltc-sdk-server': ['libs/ltc-sdk-server/index.js'],
    'bootstrap-treeview': ['libs/bootstrap-treeview/index.js'],
    'vue': ['vue']
  },
  noParseDeps: { // 不解析依赖，加快编译速度
    'jquery': 'jquery/dist/jquery.js',
    'bootstrap': 'bootstrap/dist/js/bootstrap.js',
    'jquery-validation': 'jquery-validation/dist/jquery.validate.js',
    'perfect-scrollbar': 'perfect-scrollbar/dist/js/perfect-scrollbar.jquery.js',
    'bootstrap-notify': 'bootstrap-notify/bootstrap-notify.js',
    'store': 'store/store.js',
    'respond-js': 'respond.js/dest/respond.src.js',
    'console-polyfill': 'console-polyfill/index.js',
    'html5shiv': 'html5shiv/dist/html5shiv.js',
    'bootstrap-daterangepicker': 'bootstrap-daterangepicker/daterangepicker.js',
    'bootstrap-datetime-picker': 'bootstrap-datetime-picker/js/bootstrap-datetimepicker.js',
    'jquery-sortable': 'es-jquery-sortable/source/js/jquery-sortable.js',
    'jquery-cycle2': 'jquery.cycle2/src/jquery.cycle2.min.js',
    'nouislider': 'nouislider/distribute/nouislider.js',
    'echo-js': 'echo-js/dist/echo.js',
    'jquery-waypoints': 'jquery-waypoints/waypoints.js',
    'echarts': 'echarts/dist/echarts.js',
    'vue': 'vue/dist/vue.min.js',
    'handlebars': 'handlebars/dist/handlebars.min.js',
    'moment': 'moment/moment.js',
    'fullcalendar': 'es-fullcalendar/dist/fullcalendar.js',
    'codeages-design': 'codeages-design/dist/codeages-design.js'
  },
  onlyCopys: [ //纯拷贝文件到输出的libs目录下
    {
      name: 'es-ckeditor',
      ignore: [
        '**/samples/**',
        '**/kityformula/libs/**',
      ]
    },
    // 纯拷贝item-bank/lib/itemBank.umd.min.js
    {
      name: 'item-bank/lib/itemBank.umd.min.js',
    },
    // 纯拷贝item-bank/lib/styles目录下的简墨主色调
    {
      name: 'item-bank/lib/styles',
    },
    // 纯拷贝item-bank/lib/local目录下的语言包
    {
      name: 'item-bank/lib/locale',
    },
    {
      name: 'es5-shim/es5-shim.js',
    },
    {
      name: 'es5-shim/es5-sham.js',
    },
    {
      name: 'easy-pie-chart/dist/jquery.easypiechart.js',
    },
    {
      name: 'jquery/dist/jquery.min.js',
    },
    {
      name: 'codeages-design',
      ignore: [
        'node_modules/**',
        'src/**',
      ]
    },
    {
      name: 'jquery-validation/dist/jquery.validate.js'
    },
    {
      name: 'bootstrap',
      ignore: [
        'grunt/**',
        'js/**',
        'less/**',
      ]
    }
  ],
  extryCssName: '{main,header,bootstrap,mobile,admin}',
  isESlint: false,
  baseName: 'libs/base,libs/ltc-sdk',
  activitiesDir: 'web/activities',
};