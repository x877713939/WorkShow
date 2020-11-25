<?php return array (
  'article.liked' => 
  array (
    0 => 
    array (
      0 => 'article_article_event_subscriber',
      1 => 'onArticleLike',
      2 => 0,
    ),
  ),
  'article.delete' => 
  array (
    0 => 
    array (
      0 => 'article_article_event_subscriber',
      1 => 'onArticleDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onArticleDelete',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleDelete',
      2 => 0,
    ),
  ),
  'article.cancelLike' => 
  array (
    0 => 
    array (
      0 => 'article_article_event_subscriber',
      1 => 'onArticleCancelLike',
      2 => 0,
    ),
  ),
  'article.post_create' => 
  array (
    0 => 
    array (
      0 => 'article_article_event_subscriber',
      1 => 'onPostCreate',
      2 => 0,
    ),
  ),
  'article.post_delete' => 
  array (
    0 => 
    array (
      0 => 'article_article_event_subscriber',
      1 => 'onPostDelete',
      2 => 0,
    ),
  ),
  'live.replay.generate' => 
  array (
    0 => 
    array (
      0 => 'activity_live_replay_event_subscriber',
      1 => 'onLiveReplayGenerate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onLiveReplayGenerate',
      2 => 0,
    ),
  ),
  'classroom.update' => 
  array (
    0 => 
    array (
      0 => 'course_classroom_course_expiry_date_event_subscriber',
      1 => 'onClassroomUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onClassroomUpdate',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onClassroomUpdate',
      2 => 0,
    ),
  ),
  'classroom.member.deadline.update' => 
  array (
    0 => 
    array (
      0 => 'course_classroom_course_expiry_date_event_subscriber',
      1 => 'onClassroomMemberDeadlineUpdate',
      2 => 0,
    ),
  ),
  'payment_trade.paid' => 
  array (
    0 => 
    array (
      0 => 'order_subscriber',
      1 => 'onPaid',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onPaid',
      2 => 0,
    ),
  ),
  'payment_trade.refunded' => 
  array (
    0 => 
    array (
      0 => 'order_subscriber',
      1 => 'onTradeRefunded',
      2 => 0,
    ),
  ),
  'order.paid' => 
  array (
    0 => 
    array (
      0 => 'app_order_subscriber',
      1 => 'onOrderPaid',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'orderrefererlog_event_subscriber',
      1 => 'onOrderPaid',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onOrderPaid',
      2 => 0,
    ),
  ),
  'order.service.paid' => 
  array (
    0 => 
    array (
      0 => 'card_event_subscriber',
      1 => 'onOrderPaid',
      2 => 0,
    ),
  ),
  'user.register' => 
  array (
    0 => 
    array (
      0 => 'card_event_subscriber',
      1 => 'onUserRegister',
      2 => 0,
    ),
  ),
  'course.note.create' => 
  array (
    0 => 
    array (
      0 => 'course_note_event_subscriber',
      1 => 'onCourseNoteCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onCourseNoteCreate',
      2 => 0,
    ),
  ),
  'course.note.update' => 
  array (
    0 => 
    array (
      0 => 'course_note_event_subscriber',
      1 => 'onCourseNoteUpdate',
      2 => 0,
    ),
  ),
  'course.note.delete' => 
  array (
    0 => 
    array (
      0 => 'course_note_event_subscriber',
      1 => 'onCourseNoteDelete',
      2 => 0,
    ),
  ),
  'course.note.liked' => 
  array (
    0 => 
    array (
      0 => 'course_note_event_subscriber',
      1 => 'onCourseNoteLike',
      2 => 0,
    ),
  ),
  'course.note.cancelLike' => 
  array (
    0 => 
    array (
      0 => 'course_note_event_subscriber',
      1 => 'onCourseNoteCancelLike',
      2 => 0,
    ),
  ),
  'course.join' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onCourseJoin',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseJoin',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'learning_progress_event_subscriber',
      1 => 'onStudentJoin',
      2 => 0,
    ),
  ),
  'course.quit' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onMemberDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseQuit',
      2 => 0,
    ),
  ),
  'course.view' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onCourseView',
      2 => 0,
    ),
  ),
  'task.view' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onTaskView',
      2 => 0,
    ),
  ),
  'classroom.course.join' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onClassroomCourseJoin',
      2 => 0,
    ),
  ),
  'classroom.course.copy' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onClassroomCourseCopy',
      2 => 0,
    ),
  ),
  'course.delete' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_set_teacher_event_subscriber',
      1 => 'onCourseDelete',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onCourseDelete',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onCourseDelete',
      2 => 0,
    ),
    4 => 
    array (
      0 => 'conversation_event_subscriber',
      1 => 'onCourseDelete',
      2 => 0,
    ),
    5 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onCourseDelete',
      2 => -100,
    ),
  ),
  'course.task.finish' => 
  array (
    0 => 
    array (
      0 => 'course_member_event_subscriber',
      1 => 'onTaskFinish',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'status_event_subscriber',
      1 => 'onCourseTaskFinish',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'classroom_member_event_subscriber',
      1 => 'onTaskFinish',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onCourseTaskFinish',
      2 => 0,
    ),
  ),
  'content.delete' => 
  array (
    0 => 
    array (
      0 => 'content_event_subscriber',
      1 => 'onContentDelete',
      2 => 0,
    ),
  ),
  'content.create' => 
  array (
    0 => 
    array (
      0 => 'content_event_subscriber',
      1 => 'onContentCreate',
      2 => 0,
    ),
  ),
  'content.update' => 
  array (
    0 => 
    array (
      0 => 'content_event_subscriber',
      1 => 'onContentUpdate',
      2 => 0,
    ),
  ),
  'course.thread.post.create' => 
  array (
    0 => 
    array (
      0 => 'user_course_thread_event_subscriber',
      1 => 'onThreadPostCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'activity_event_subscriber',
      1 => 'onPostCreate',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadPostCreate',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
      2 => 0,
    ),
    4 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onCourseQuestionAnswerCreate',
      2 => 0,
    ),
  ),
  'classroom.join' => 
  array (
    0 => 
    array (
      0 => 'user_classroom_event_subscriber',
      1 => 'onClassroomJoin',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onClassroomJoin',
      2 => 0,
    ),
  ),
  'classroom.auditor_join' => 
  array (
    0 => 
    array (
      0 => 'user_classroom_event_subscriber',
      1 => 'onClassroomGuest',
      2 => 0,
    ),
  ),
  'user.registered' => 
  array (
    0 => 
    array (
      0 => 'user_user_event_subscriber',
      1 => 'onUserRegistered',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserCreate',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onUserRegistered',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'user_account_event_subscriber',
      1 => 'onUserRegister',
      2 => 0,
    ),
  ),
  'user.follow' => 
  array (
    0 => 
    array (
      0 => 'user_user_event_subscriber',
      1 => 'onUserFollowed',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserFollow',
      2 => 0,
    ),
  ),
  'user.unfollow' => 
  array (
    0 => 
    array (
      0 => 'user_user_event_subscriber',
      1 => 'onUserUnfollowed',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserUnFollow',
      2 => 0,
    ),
  ),
  'user.bind' => 
  array (
    0 => 
    array (
      0 => 'user_user_event_subscriber',
      1 => 'onUserBind',
      2 => 0,
    ),
  ),
  'user.unbind' => 
  array (
    0 => 
    array (
      0 => 'user_user_event_subscriber',
      1 => 'onUserUnbind',
      2 => 0,
    ),
  ),
  'admin.operate.vip_member' => 
  array (
    0 => 
    array (
      0 => 'user_vip_member_event_subscriber',
      1 => 'onOperateVipMember',
      2 => 0,
    ),
  ),
  'activity.start' => 
  array (
    0 => 
    array (
      0 => 'task_event_subscriber',
      1 => 'onActivityStart',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'video_task_event_subscriber',
      1 => 'onVideoView',
      2 => 0,
    ),
  ),
  'activity.doing' => 
  array (
    0 => 
    array (
      0 => 'task_event_subscriber',
      1 => 'onActivityDoing',
      2 => 0,
    ),
  ),
  'activity.finish' => 
  array (
    0 => 
    array (
      0 => 'task_event_subscriber',
      1 => 'onActivityFinish',
      2 => 0,
    ),
  ),
  'article.create' => 
  array (
    0 => 
    array (
      0 => 'taxonomy_article_event_subscriber',
      1 => 'onArticleCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleCreate',
      2 => 0,
    ),
  ),
  'article.update' => 
  array (
    0 => 
    array (
      0 => 'taxonomy_article_event_subscriber',
      1 => 'onArticleUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleUpdate',
      2 => 0,
    ),
  ),
  'course.thread.create' => 
  array (
    0 => 
    array (
      0 => 'activity_event_subscriber',
      1 => 'onThreadCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseThreadChange',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'course_thread_subscriber',
      1 => 'onCourseThreadAskVideoThumbnailUpdate',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadCreate',
      2 => 0,
    ),
    4 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
      2 => 0,
    ),
    5 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onCourseThreadCreate',
      2 => 0,
    ),
    6 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onCourseQuestionCreate',
      2 => 0,
    ),
  ),
  'course.task.create' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onTaskCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskCreate',
      2 => 0,
    ),
  ),
  'course.task.update' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onTaskUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskUpdate',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseLessonUpdate',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskUpdate',
      2 => 0,
    ),
    4 => 
    array (
      0 => 'learning_progress_event_subscriber',
      1 => 'onTaskUpdate',
      2 => 0,
    ),
    5 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onTaskUpdate',
      2 => 0,
    ),
  ),
  'course.task.delete' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onTaskDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskDelete',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseLessonDelete',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskDelete',
      2 => 0,
    ),
    4 => 
    array (
      0 => 'learning_progress_event_subscriber',
      1 => 'onTaskDelete',
      2 => 0,
    ),
    5 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onTaskDelete',
      2 => 0,
    ),
  ),
  'course.lesson.publish' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onPublishLessonNumberChange',
      2 => -100,
    ),
  ),
  'course.lesson.unpublish' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onPublishLessonNumberChange',
      2 => -100,
    ),
  ),
  'course.lesson.create' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onLessonNumberChange',
      2 => -100,
    ),
  ),
  'course.lesson.delete' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onLessonNumberChange',
      2 => -100,
    ),
  ),
  'course.lesson.setOptional' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onLessonOptionalChange',
      2 => -100,
    ),
  ),
  'course.thread.delete' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseThreadChange',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onCourseThreadDelete',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadDelete',
      2 => 0,
    ),
  ),
  'course.review.add' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onReviewNumberChange',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onCourseReviewAdd',
      2 => 0,
    ),
  ),
  'course.review.update' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onReviewNumberChange',
      2 => 0,
    ),
  ),
  'course.review.delete' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onReviewNumberChange',
      2 => 0,
    ),
  ),
  'course.marketing.update' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseMarketingChange',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_product_event_subscriber',
      1 => 'onCourseMarketingUpdate',
      2 => 0,
    ),
  ),
  'course.publish' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseStatusChange',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseStatusChange',
      2 => 0,
    ),
  ),
  'course.close' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseStatusChange',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseStatusChange',
      2 => 0,
    ),
  ),
  'course.task.updateOptional' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onCourseTaskUpdateOptional',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskUpdate',
      2 => 0,
    ),
  ),
  'review.create' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onReviewChange',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_set_statistics_event_subscriber',
      1 => 'onReviewChange',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onReviewCreate',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onReviewChanged',
      2 => 0,
    ),
    4 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onReviewCreate',
      2 => 0,
    ),
  ),
  'review.update' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onReviewChange',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_set_statistics_event_subscriber',
      1 => 'onReviewChange',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onReviewChanged',
      2 => 0,
    ),
  ),
  'review.delete' => 
  array (
    0 => 
    array (
      0 => 'course_statistics_event_subscriber',
      1 => 'onReviewChange',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_set_statistics_event_subscriber',
      1 => 'onReviewChange',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onReviewChanged',
      2 => 0,
    ),
  ),
  'course.create' => 
  array (
    0 => 
    array (
      0 => 'course_set_teacher_event_subscriber',
      1 => 'calculateCourseTeacher',
      2 => 0,
    ),
  ),
  'course.teachers.update' => 
  array (
    0 => 
    array (
      0 => 'course_set_teacher_event_subscriber',
      1 => 'calculateCourseTeacher',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseTeachersChange',
      2 => 0,
    ),
  ),
  'course.teacher.create' => 
  array (
    0 => 
    array (
      0 => 'course_set_teacher_event_subscriber',
      1 => 'calculateCourseTeacher',
      2 => 0,
    ),
  ),
  'courseSet.maxRate.update' => 
  array (
    0 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseSetMaxRateUpdate',
      2 => 0,
    ),
  ),
  'courseSet.recommend' => 
  array (
    0 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseSetRecommend',
      2 => 0,
    ),
  ),
  'courseSet.recommend.cancel' => 
  array (
    0 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseSetCancelRecommend',
      2 => 0,
    ),
  ),
  'course-set.update' => 
  array (
    0 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseSetUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseSetUpdate',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseUpdate',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'tag_course_set_event_subscriber',
      1 => 'onCourseSetUpdate',
      2 => 0,
    ),
  ),
  'course-set.unlock' => 
  array (
    0 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseSetUnlock',
      2 => 0,
    ),
  ),
  'courseSet.courses.sort' => 
  array (
    0 => 
    array (
      0 => 'course_set_event_subscriber',
      1 => 'onCourseSetCoursesSort',
      2 => 0,
    ),
  ),
  'question.create' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onQuestionCreate',
      2 => 2,
    ),
  ),
  'question.update' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onQuestionUpdate',
      2 => 2,
    ),
  ),
  'question.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onQuestionDelete',
      2 => 2,
    ),
  ),
  'course.material.create' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onMaterialCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onMaterialCreate',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'course_material_event_subscriber',
      1 => 'onCourseMaterialCreate',
      2 => 0,
    ),
  ),
  'course.material.update' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onMaterialUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseMaterialUpdate',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onMaterialUpdate',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'course_material_event_subscriber',
      1 => 'onCourseMaterialUpdate',
      2 => 0,
    ),
  ),
  'course.material.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onMaterialDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseMaterialDelete',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onMaterialDelete',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'course_material_event_subscriber',
      1 => 'onCourseMaterialDelete',
      2 => 0,
    ),
  ),
  'open.course.lesson.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onOpenCourseLessonDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onOpenCourseLessonDelete',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onLessonDelete',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'open_course_sms_event_subscriber',
      1 => 'onLiveOpenCourseLessonDelete',
      2 => 0,
    ),
  ),
  'open.course.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onOpenCourseDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onOpenCourseDelete',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onOpenCourseDelete',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onCourseDelete',
      2 => 0,
    ),
  ),
  'group.thread.post.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onGroupThreadPostDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadPostDelete',
      2 => 0,
    ),
  ),
  'group.thread.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onGroupThreadDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadDelete',
      2 => 0,
    ),
  ),
  'course.thread.post.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onCourseThreadPostDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadPostDelete',
      2 => 0,
    ),
  ),
  'thread.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onThreadDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onThreadDelete',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onThreadDelete',
      2 => 0,
    ),
  ),
  'thread.post.delete' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onThreadPostDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onThreadPostDelete',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onPostDelete',
      2 => 0,
    ),
  ),
  'live.activity.update' => 
  array (
    0 => 
    array (
      0 => 'upload_file_event_subscriber',
      1 => 'onLiveActivityUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'live_statistics_event_subscriber',
      1 => 'onLiveActivityUpdate',
      2 => 0,
    ),
  ),
  'course.update' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseUpdate',
      2 => 0,
    ),
  ),
  'course.chapter.create' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterCreate',
      2 => 0,
    ),
  ),
  'course.chapter.update' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterUpdate',
      2 => 0,
    ),
  ),
  'course.chapter.delete' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterDelete',
      2 => 0,
    ),
  ),
  'course.lesson.update' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseChapterUpdate',
      2 => 0,
    ),
  ),
  'course.change.showPublishLesson' => 
  array (
    0 => 
    array (
      0 => 'course_sync_event_subscriber',
      1 => 'onCourseUpdate',
      2 => 0,
    ),
  ),
  'course.task.publish' => 
  array (
    0 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskPublish',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseLessonCreate',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskPublish',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onTaskPublish',
      2 => 0,
    ),
  ),
  'course.task.unpublish' => 
  array (
    0 => 
    array (
      0 => 'task_sync_event_subscriber',
      1 => 'onCourseTaskUnpublish',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseLessonDelete',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskUnpublish',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onTaskUnpublish',
      2 => 0,
    ),
  ),
  'course-set.delete' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onCourseSetDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseDelete',
      2 => 0,
    ),
  ),
  'upload.file.delete' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onUploadFileDelete',
      2 => 0,
    ),
  ),
  'upload.file.finish' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onUploadFileFinish',
      2 => 0,
    ),
  ),
  'upload.file.add' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onUploadFileFinish',
      2 => 0,
    ),
  ),
  'open.course.lesson.create' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onOpenCourseLessonCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onLessonCreate',
      2 => 0,
    ),
  ),
  'open.course.lesson.update' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onOpenCourseLessonUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'open_course_sms_event_subscriber',
      1 => 'onLiveOpenCourseLessonUpdate',
      2 => 0,
    ),
  ),
  'open.course.lesson.generate.video.replay' => 
  array (
    0 => 
    array (
      0 => 'course_set_material_event_subscriber',
      1 => 'onLiveOpenFileReplay',
      2 => 0,
    ),
  ),
  'classroom.delete' => 
  array (
    0 => 
    array (
      0 => 'conversation_event_subscriber',
      1 => 'onClassroomDelete',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onClassroomDelete',
      2 => 0,
    ),
  ),
  'article.publish' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleCreate',
      2 => 0,
    ),
  ),
  'article.trash' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleDelete',
      2 => 0,
    ),
  ),
  'article.unpublish' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onArticleDelete',
      2 => 0,
    ),
  ),
  'user.unlock' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserCreate',
      2 => 0,
    ),
  ),
  'user.lock' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserDelete',
      2 => 0,
    ),
  ),
  'user.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserUpdate',
      2 => 0,
    ),
  ),
  'user.change_nickname' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onUserUpdate',
      2 => 0,
    ),
  ),
  'classroom.quit' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onClassroomQuit',
      2 => 0,
    ),
  ),
  'thread.create' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onThreadCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onThreadCreate',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onClassroomQuestionCreate',
      2 => 0,
    ),
  ),
  'thread.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onThreadUpdate',
      2 => 0,
    ),
  ),
  'course.thread.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadUpdate',
      2 => 0,
    ),
  ),
  'group.thread.create' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
      2 => 0,
    ),
  ),
  'group.thread.open' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadOpen',
      2 => 0,
    ),
  ),
  'group.thread.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadUpdate',
      2 => 0,
    ),
  ),
  'course.thread.elite' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadElite',
      2 => 0,
    ),
  ),
  'course.thread.unelite' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadUnelite',
      2 => 0,
    ),
  ),
  'course.thread.stick' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadStick',
      2 => 0,
    ),
  ),
  'course.thread.unstick' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadUnstick',
      2 => 0,
    ),
  ),
  'course.thread.post.at' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadPostAt',
      2 => 0,
    ),
  ),
  'thread.post.create' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onThreadPostCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onPostCreate',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onClassroomQuestionAnswerCreate',
      2 => 0,
    ),
  ),
  'course.thread.post.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseThreadPostUpdate',
      2 => 0,
    ),
  ),
  'group.thread.post.create' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onGroupThreadPostCreate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'incrToken',
      2 => 0,
    ),
  ),
  'announcement.create' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onAnnouncementCreate',
      2 => 0,
    ),
  ),
  'course-set.publish' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseCreate',
      2 => 0,
    ),
  ),
  'course-set.closed' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCourseDelete',
      2 => 0,
    ),
  ),
  'open.course.publish' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onOpenCourseCreate',
      2 => 0,
    ),
  ),
  'open.course.close' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onOpenCourseDelete',
      2 => 0,
    ),
  ),
  'open.course.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onOpenCourseUpdate',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onCourseUpdate',
      2 => 0,
    ),
  ),
  'coupon.update' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onCouponUpdate',
      2 => 0,
    ),
  ),
  'answer.submitted' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onAnswerSubmitted',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'testpaper_event_subscriber',
      1 => 'onAnswerSubmitted',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onAnswerSubmitted',
      2 => 0,
    ),
  ),
  'answer.finished' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onAnswerFinished',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'sms_testpaper_event_subscriber',
      1 => 'onAnswerFinished',
      2 => 0,
    ),
    2 => 
    array (
      0 => 'testpaper_event_subscriber',
      1 => 'onAnswerFinished',
      2 => 0,
    ),
    3 => 
    array (
      0 => 'status_event_subscriber',
      1 => 'onAnswerFinished',
      2 => 0,
    ),
    4 => 
    array (
      0 => 'task_testpaper_event_subscriber',
      1 => 'onAnswerFinished',
      2 => 0,
    ),
    5 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onAnswerFinished',
      2 => 0,
    ),
  ),
  'invite.reward' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onInviteReward',
      2 => 0,
    ),
  ),
  'batch_notification.publish' => 
  array (
    0 => 
    array (
      0 => 'notification_event_subscriber',
      1 => 'onBatchNotificationPublish',
      2 => 0,
    ),
  ),
  'open.course.member.create' => 
  array (
    0 => 
    array (
      0 => 'opencourse_event_subscriber',
      1 => 'onMemberCreate',
      2 => 0,
    ),
  ),
  'order.created' => 
  array (
    0 => 
    array (
      0 => 'orderrefererlog_event_subscriber',
      1 => 'onOrderCreated',
      2 => 0,
    ),
  ),
  'thread.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
      2 => 0,
    ),
  ),
  'thread.post.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
      2 => 0,
    ),
  ),
  'course.thread.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
      2 => 0,
    ),
  ),
  'course.thread.post.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
      2 => 0,
    ),
  ),
  'group.thread.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
      2 => 0,
    ),
  ),
  'group.thread.post.before_create' => 
  array (
    0 => 
    array (
      0 => 'tokenbucket_event_subscriber',
      1 => 'before',
      2 => 0,
    ),
  ),
  'course.task.create.sync' => 
  array (
    0 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskCreateSync',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onTaskCreateSync',
      2 => 0,
    ),
  ),
  'course.task.update.sync' => 
  array (
    0 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskUpdateSync',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onTaskUpdateSync',
      2 => 0,
    ),
  ),
  'course.task.publish.sync' => 
  array (
    0 => 
    array (
      0 => 'sms_task_event_subscriber',
      1 => 'onTaskPublishSync',
      2 => 0,
    ),
    1 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onTaskPublishSync',
      2 => 0,
    ),
  ),
  'order.pay.success' => 
  array (
    0 => 
    array (
      0 => 'sms_pay_center_event_subscriber',
      1 => 'onPaySuccess',
      2 => 0,
    ),
  ),
  'thread.nice' => 
  array (
    0 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onThreadNice',
      2 => 0,
    ),
  ),
  'thread.sticky' => 
  array (
    0 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onThreadSticky',
      2 => 0,
    ),
  ),
  'thread.post.vote' => 
  array (
    0 => 
    array (
      0 => 'thread_event_subscriber',
      1 => 'onPostVote',
      2 => 0,
    ),
  ),
  'classroom.course.create' => 
  array (
    0 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onClassroomCourseChange',
      2 => 0,
    ),
  ),
  'classroom.course.delete' => 
  array (
    0 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onClassroomCourseChange',
      2 => 0,
    ),
  ),
  'classroom.course.update' => 
  array (
    0 => 
    array (
      0 => 'classroom_event_subscriber',
      1 => 'onClassroomCourseChange',
      2 => 0,
    ),
  ),
  'course.lesson.materials.delete' => 
  array (
    0 => 
    array (
      0 => 'course_material_event_subscriber',
      1 => 'onCourseLessonMaterialsDelete',
      2 => 0,
    ),
  ),
  'course.task.material.update' => 
  array (
    0 => 
    array (
      0 => 'course_material_event_subscriber',
      1 => 'onCourseTaskMaterialUpdate',
      2 => 0,
    ),
  ),
  'course.task.start' => 
  array (
    0 => 
    array (
      0 => 'status_event_subscriber',
      1 => 'onCourseTaskStart',
      2 => 0,
    ),
  ),
  'task.preview' => 
  array (
    0 => 
    array (
      0 => 'course_try_view_subscriber',
      1 => 'onTaskPreview',
      2 => 0,
    ),
  ),
  'scheduler.job.created' => 
  array (
    0 => 
    array (
      0 => 'crontab_event_subscriber',
      1 => 'onSchedulerJobCreated',
      2 => 0,
    ),
  ),
  'scheduler.job.executing' => 
  array (
    0 => 
    array (
      0 => 'crontab_event_subscriber',
      1 => 'onSchedulerJobExecuting',
      2 => 0,
    ),
  ),
  'open.course.lesson.publish' => 
  array (
    0 => 
    array (
      0 => 'open_course_sms_event_subscriber',
      1 => 'onLiveOpenCourseLessonCreate',
      2 => 0,
    ),
  ),
  'question_marker.finish' => 
  array (
    0 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onQuestionMarkerFinish',
      2 => 0,
    ),
  ),
  'classReview.add' => 
  array (
    0 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onClassroomReviewAdd',
      2 => 0,
    ),
  ),
  'user.search' => 
  array (
    0 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onUserSearch',
      2 => 0,
    ),
  ),
  'user.daily.active' => 
  array (
    0 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onUserDailyActive',
      2 => 0,
    ),
  ),
  'favorite.create' => 
  array (
    0 => 
    array (
      0 => 'statement_event_subscriber',
      1 => 'onCourseSetFavorite',
      2 => 0,
    ),
  ),
  'wechat.template_setting.save' => 
  array (
    0 => 
    array (
      0 => 'wechat_notification_event_subscriber',
      1 => 'onWeChatTemplateSettingSave',
      2 => 0,
    ),
  ),
  'coupon.use' => 
  array (
    0 => 
    array (
      0 => 'coupon_event_subscriber',
      1 => 'onCouponUse',
      2 => 0,
    ),
  ),
  'coupon.receive' => 
  array (
    0 => 
    array (
      0 => 'coupon_event_subscriber',
      1 => 'onCouponReceive',
      2 => 0,
    ),
  ),
  'coupon.append' => 
  array (
    0 => 
    array (
      0 => 'coupon_event_subscriber',
      1 => 'onCouponAppend',
      2 => 0,
    ),
  ),
  'navigation.operate' => 
  array (
    0 => 
    array (
      0 => 'navigation_event_subscriber',
      1 => 'onNavigationOperate',
      2 => 0,
    ),
  ),
  'user.destroyed' => 
  array (
    0 => 
    array (
      0 => 'destroy_account_event_subscriber',
      1 => 'onUserDestroyed',
      2 => 0,
    ),
  ),
  'user.reject.destroy' => 
  array (
    0 => 
    array (
      0 => 'destroy_account_event_subscriber',
      1 => 'onUserRejectDestroy',
      2 => 0,
    ),
  ),
  'live.activity.create' => 
  array (
    0 => 
    array (
      0 => 'live_statistics_event_subscriber',
      1 => 'onLiveActivityCreate',
      2 => 0,
    ),
  ),
  'live.activity.delete' => 
  array (
    0 => 
    array (
      0 => 'live_statistics_event_subscriber',
      1 => 'onLiveActivityDelete',
      2 => 0,
    ),
  ),
  'order.success' => 
  array (
    0 => 
    array (
      0 => 'course_product_event_subscriber',
      1 => 'onOrderSuccess',
      2 => 0,
    ),
  ),
  'order.refunded' => 
  array (
    0 => 
    array (
      0 => 'course_product_event_subscriber',
      1 => 'onOrderRefunded',
      2 => 0,
    ),
  ),
);