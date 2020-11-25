<?php 
 return array (
  'audio' => 
  array (
    'name' => 'course.activity.audio',
    'type' => 'audio',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_body.html.twig',
      'finish' => 'create_or_update_finish.html.twig',
      'show' => 'show.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'end',
        'describe' => 'course.plan_task.activity_manage.audio.finish',
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/audio',
  ),
  'discuss' => 
  array (
    'name' => 'course.activity.discuss',
    'type' => 'discuss',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_body.html.twig',
      'finish' => 'create_or_update_finish.html.twig',
      'show' => 'show.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'join',
        'describe' => 'course.plan_task.activity_manage.discuss.publish_article_tips',
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/discuss',
  ),
  'doc' => 
  array (
    'name' => 'course.activity.doc',
    'type' => 'doc',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_body.html.twig',
      'show' => 'show.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'time',
        'value' => 1,
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/doc',
  ),
  'download' => 
  array (
    'name' => 'course.activity.download',
    'type' => 'download',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_body.html.twig',
      'show' => 'show.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'download',
        'describe' => 'course.plan_task.activity_manage.download.downloaded_tips',
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/download',
  ),
  'exercise' => 
  array (
    'name' => 'course.activity.exercise',
    'type' => 'exercise',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_body.html.twig',
      'show' => 'show.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'submit',
        'describe' => 'course.plan_task.activity_manage.exercise.finished_condition',
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/exercise',
  ),
  'flash' => 
  array (
    'name' => 'course.activity.flash',
    'type' => 'flash',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_body.html.twig',
      'show' => 'show.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'time',
        'value' => 1,
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/flash',
  ),
  'homework' => 
  array (
    'name' => 'course.activity.homework',
    'type' => 'homework',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_body.html.twig',
      'show' => 'show.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'submit',
        'describe' => 'course.plan_task.activity_manage.homework.finished_condition',
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/homework',
  ),
  'live' => 
  array (
    'name' => 'course.activity.live',
    'type' => 'live',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_body.html.twig',
      'show' => 'show.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'join',
        'describe' => 'course.plan_task.activity_manage.live.finished_condition_tips',
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/live',
  ),
  'ppt' => 
  array (
    'name' => 'course.activity.ppt',
    'type' => 'ppt',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_content.html.twig',
      'show' => 'show.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'end',
        'describe' => 'course.plan_task.activity_manage.ppt.learn_to_last_page_tips',
      ),
      1 => 
      array (
        'type' => 'time',
        'value' => 1,
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/ppt',
  ),
  'testpaper' => 
  array (
    'name' => 'course.activity.testpaper',
    'type' => 'testpaper',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_content.html.twig',
      'show' => 'show.html.twig',
      'finish_tip' => 'finish_tip.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'submit',
        'describe' => 'course.plan_task.activity_manage.testpaper.submit',
      ),
      1 => 
      array (
        'type' => 'score',
        'describe' => 'course.plan_task.activity_manage.testpaper.score_pass',
        'html' => 'conditions.html.twig',
        'value' => '0.6',
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/testpaper',
  ),
  'text' => 
  array (
    'name' => 'course.activity.text',
    'type' => 'text',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_body.html',
      'show' => 'show.html',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'time',
        'value' => 1,
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/text',
  ),
  'video' => 
  array (
    'name' => 'course.activity.video',
    'type' => 'video',
    'description' => '',
    'authors' => 
    array (
      0 => 
      array (
        'name' => 'EduSoho',
        'email' => 'edusoho@howzhi.com',
      ),
    ),
    'version' => '1.0.0',
    'ltc_version' => '1.0.0',
    'icon' => 
    array (
      'type' => 'font',
      'value' => 'es-icon es-icon-graphicclass',
    ),
    'routes' => 
    array (
      'content' => 'create_or_update_body.html.twig',
      'show' => 'show.html.twig',
    ),
    'finish_condition' => 
    array (
      0 => 
      array (
        'type' => 'end',
      ),
      1 => 
      array (
        'type' => 'time',
        'value' => 1,
      ),
    ),
    'dir' => '/var/www/bootcamp/chenlong/EduSoho/app/../web/activities/video',
  ),
);