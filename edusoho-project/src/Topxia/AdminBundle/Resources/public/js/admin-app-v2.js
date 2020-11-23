define(function(require, exports, module) {
  window.$ = window.jQuery = require('jquery');
  require('./util/mark-menu.js');
  require('placeholder');
  require('common/bootstrap-modal-hack2');

  var Notify = require('common/bootstrap-notify');

  if ($.isFunction($('').tooltip)) {
    $('[data-toggle="tooltip"]').tooltip({html: true});
  }
  exports.load = function(name) {
    if (window.app.jsPaths[name.split('/', 1)[0]] == undefined) {
      name = window.app.basePath + '/bundles/topxiaadmin/js/controller/' + name;
    }
    seajs.use(name, function(module) {
      if ($.isFunction(module.run)) {
        module.run();
      }
    });
  };

  exports.loadScript = function(scripts) {
    for(var index in scripts) {
      exports.load(scripts[index]);
    }
  };

  $('.shortcuts').on('click', '.shortcut-add', function() {
    Notify.success(Translator.trans('admin.shortcut_add_success_hint'));

    var title = $(document).attr('title');

    title = title.split('|');

    var params = {
      title: title[0],
      url: window.location.pathname + window.location.search
    };
    $.post($(this).data('url'), params, function() {
      window.location.reload();
    });
  });

  $('.shortcuts').on('click', '.glyphicon-remove-circle', function() {
    Notify.success(Translator.trans('admin.shortcut_delete_success_hint'));
    $.post($(this).data('url'), function() {
      window.location.reload();
    });
  });

  window.app.load = exports.load;

  if (app.controller) {
    exports.load(app.controller);
  }

  if (app.scripts) {
    exports.loadScript(app.scripts);
  }

  $(document).ajaxSend(function(a, b, c) {
    if (c.type == 'POST') {
      b.setRequestHeader('X-CSRF-Token', $('meta[name=csrf-token]').attr('content'));
    }
  });

  if (app.scheduleCrontab) {
    $.post(app.scheduleCrontab);
  }

  if($('.js-update-modal').length) {
    $('.js-update-modal').modal('show');
  }

  $('.modal').on('hidden.bs.modal', function(){
    var $modal = $(this);
    if ($modal.find('.modal-dialog').data('clear')) {
      $modal.empty();
    }
  });

  $.ajax('/online/sample');

  $('.js-no-permission-btn').on('click',function () {
      Notify.danger(Translator.trans('admin.switch_old_version.permission_error'));
  })
});