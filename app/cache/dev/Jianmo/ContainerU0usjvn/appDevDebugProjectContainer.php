<?php

namespace ContainerU0usjvn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $buildParameters;
    private $containerDir;
    private $parameters = [];
    private $targetDirs = [];

    public function __construct(array $buildParameters = [], $containerDir = __DIR__)
    {
        $dir = $this->targetDirs[0] = \dirname($containerDir);
        for ($i = 1; $i <= 6; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->containerDir = $containerDir;
        $this->parameters = $this->getDefaultParameters();

        $this->services = [];
        $this->normalizedIds = [
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        ];
        $this->syntheticIds = [
            'kernel' => true,
        ];
        $this->methodMap = [
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'app.cloud_api_collector' => 'getApp_CloudApiCollectorService',
            'app.locale_listener' => 'getApp_LocaleListenerService',
            'argument_metadata_factory' => 'getArgumentMetadataFactoryService',
            'assetic.asset_factory' => 'getAssetic_AssetFactoryService',
            'assetic.request_listener' => 'getAssetic_RequestListenerService',
            'assets._version__default' => 'getAssets_VersionDefaultService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'biz' => 'getBizService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'codeages_plugin.dict_collector' => 'getCodeagesPlugin_DictCollectorService',
            'codeages_plugin.dict_twig_extension' => 'getCodeagesPlugin_DictTwigExtensionService',
            'codeages_plugin.slot_collector' => 'getCodeagesPlugin_SlotCollectorService',
            'codeages_plugin.slot_manager' => 'getCodeagesPlugin_SlotManagerService',
            'codeages_plugin.theme.file_locator' => 'getCodeagesPlugin_Theme_FileLocatorService',
            'codeages_plugin.theme.templating.locator' => 'getCodeagesPlugin_Theme_Templating_LocatorService',
            'codeages_plugin.theme.twig_loader' => 'getCodeagesPlugin_Theme_TwigLoaderService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'data_collector.translation' => 'getDataCollector_TranslationService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'endroid.qrcode.twig.extension' => 'getEndroid_Qrcode_Twig_ExtensionService',
            'fragment.listener' => 'getFragment_ListenerService',
            'framework_extra_bundle.argument_name_convertor' => 'getFrameworkExtraBundle_ArgumentNameConvertorService',
            'framework_extra_bundle.event.is_granted' => 'getFrameworkExtraBundle_Event_IsGrantedService',
            'http_kernel' => 'getHttpKernelService',
            'json_formatter' => 'getJsonFormatterService',
            'kernel.controller.permission_listener' => 'getKernel_Controller_PermissionListenerService',
            'kernel.listener.kernel_admin_request_intercept_listener' => 'getKernel_Listener_KernelAdminRequestInterceptListenerService',
            'kernel.listener.kernel_h5_request_listener' => 'getKernel_Listener_KernelH5RequestListenerService',
            'kernel.listener.kernel_request_listener' => 'getKernel_Listener_KernelRequestListenerService',
            'kernel.listener.kernel_response_listener' => 'getKernel_Listener_KernelResponseListenerService',
            'kernel.listener.user_login_token_listener' => 'getKernel_Listener_UserLoginTokenListenerService',
            'kernel.response.permission_listener' => 'getKernel_Response_PermissionListenerService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.firephp' => 'getMonolog_Handler_FirephpService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'monolog.processor.psr_log_message' => 'getMonolog_Processor_PsrLogMessageService',
            'monolog.processor.trace_processor' => 'getMonolog_Processor_TraceProcessorService',
            'permission.twig.permission_extension' => 'getPermission_Twig_PermissionExtensionService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'templating.name_parser' => 'getTemplating_NameParserService',
            'topxia.twig.cache_extension' => 'getTopxia_Twig_CacheExtensionService',
            'topxia.twig.cache_provider' => 'getTopxia_Twig_CacheProviderService',
            'topxia.twig.cache_strategy' => 'getTopxia_Twig_CacheStrategyService',
            'topxia.twig.file_cache' => 'getTopxia_Twig_FileCacheService',
            'translator' => 'getTranslatorService',
            'translator.default' => 'getTranslator_DefaultService',
            'translator_listener' => 'getTranslatorListenerService',
            'twig' => 'getTwigService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'web.twig.activity_extension' => 'getWeb_Twig_ActivityExtensionService',
            'web.twig.app_extension' => 'getWeb_Twig_AppExtensionService',
            'web.twig.block_extension' => 'getWeb_Twig_BlockExtensionService',
            'web.twig.course_extension' => 'getWeb_Twig_CourseExtensionService',
            'web.twig.data_extension' => 'getWeb_Twig_DataExtensionService',
            'web.twig.dictionary_extension' => 'getWeb_Twig_DictionaryExtensionService',
            'web.twig.extension' => 'getWeb_Twig_ExtensionService',
            'web.twig.face_inspection_extension' => 'getWeb_Twig_FaceInspectionExtensionService',
            'web.twig.html_extension' => 'getWeb_Twig_HtmlExtensionService',
            'web.twig.live_extension' => 'getWeb_Twig_LiveExtensionService',
            'web.twig.material_extension' => 'getWeb_Twig_MaterialExtensionService',
            'web.twig.order_extension' => 'getWeb_Twig_OrderExtensionService',
            'web.twig.question_extension' => 'getWeb_Twig_QuestionExtensionService',
            'web.twig.question_type_extension' => 'getWeb_Twig_QuestionTypeExtensionService',
            'web.twig.search_extension' => 'getWeb_Twig_SearchExtensionService',
            'web.twig.testpaper_extension' => 'getWeb_Twig_TestpaperExtensionService',
            'web.twig.theme_extension' => 'getWeb_Twig_ThemeExtensionService',
            'web.twig.uploader_extension' => 'getWeb_Twig_UploaderExtensionService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        ];
        $this->fileMap = [
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => 'getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => 'getTemplateControllerService.php',
            'activity.extension' => 'getActivity_ExtensionService.php',
            'activity_config_manager' => 'getActivityConfigManagerService.php',
            'activity_event_subscriber' => 'getActivityEventSubscriberService.php',
            'activity_live_replay_event_subscriber' => 'getActivityLiveReplayEventSubscriberService.php',
            'activity_runtime_container' => 'getActivityRuntimeContainerService.php',
            'annotations.cache' => 'getAnnotations_CacheService.php',
            'annotations.cache_warmer' => 'getAnnotations_CacheWarmerService.php',
            'api.field.filter.factory' => 'getApi_Field_Filter_FactoryService.php',
            'api.path.parser' => 'getApi_Path_ParserService.php',
            'api.plugin.config.manager' => 'getApi_Plugin_Config_ManagerService.php',
            'api.resource.manager' => 'getApi_Resource_ManagerService.php',
            'api.util.item_helper' => 'getApi_Util_ItemHelperService.php',
            'api.util.oc' => 'getApi_Util_OcService.php',
            'api_anonymous_listener' => 'getApiAnonymousListenerService.php',
            'api_authenticate_listener' => 'getApiAuthenticateListenerService.php',
            'api_authentication_manager' => 'getApiAuthenticationManagerService.php',
            'api_basic_authentication_listener' => 'getApiBasicAuthenticationListenerService.php',
            'api_biz_ratelimit_listener' => 'getApiBizRatelimitListenerService.php',
            'api_default_authentication' => 'getApiDefaultAuthenticationService.php',
            'api_exception_listener' => 'getApiExceptionListenerService.php',
            'api_firewall' => 'getApiFirewallService.php',
            'api_h5_third_party_oauth2_authentication_listener' => 'getApiH5ThirdPartyOauth2AuthenticationListenerService.php',
            'api_oauth2_authentication_listener' => 'getApiOauth2AuthenticationListenerService.php',
            'api_old_token_header_listener' => 'getApiOldTokenHeaderListenerService.php',
            'api_resource_kernel' => 'getApiResourceKernelService.php',
            'api_response_viewer' => 'getApiResponseViewerService.php',
            'api_session_authentication_listener' => 'getApiSessionAuthenticationListenerService.php',
            'api_third_party_oauth2_authentication_listener' => 'getApiThirdPartyOauth2AuthenticationListenerService.php',
            'api_token_header_listener' => 'getApiTokenHeaderListenerService.php',
            'api_web_lib_listener' => 'getApiWebLibListenerService.php',
            'app.user_locale_listener' => 'getApp_UserLocaleListenerService.php',
            'app_order_subscriber' => 'getAppOrderSubscriberService.php',
            'argument_resolver.default' => 'getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => 'getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => 'getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => 'getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => 'getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => 'getArgumentResolver_VariadicService.php',
            'article_article_event_subscriber' => 'getArticleArticleEventSubscriberService.php',
            'assetic.asset_manager' => 'getAssetic_AssetManagerService.php',
            'assetic.asset_manager_cache_warmer' => 'getAssetic_AssetManagerCacheWarmerService.php',
            'assetic.controller' => 'getAssetic_ControllerService.php',
            'assetic.filter_manager' => 'getAssetic_FilterManagerService.php',
            'assets.path_package' => 'getAssets_PathPackageService.php',
            'assets.static_version_strategy' => 'getAssets_StaticVersionStrategyService.php',
            'bazinga.jstranslation.controller' => 'getBazinga_Jstranslation_ControllerService.php',
            'bazinga.jstranslation.dump_command' => 'getBazinga_Jstranslation_DumpCommandService.php',
            'bazinga.jstranslation.translation_dumper' => 'getBazinga_Jstranslation_TranslationDumperService.php',
            'bazinga.jstranslation.translation_finder' => 'getBazinga_Jstranslation_TranslationFinderService.php',
            'biz.service_provider.collector' => 'getBiz_ServiceProvider_CollectorService.php',
            'cache.default_clearer' => 'getCache_DefaultClearerService.php',
            'cache.global_clearer' => 'getCache_GlobalClearerService.php',
            'cache.system_clearer' => 'getCache_SystemClearerService.php',
            'cache_clearer' => 'getCacheClearerService.php',
            'cache_warmer' => 'getCacheWarmerService.php',
            'callback.extension' => 'getCallback_ExtensionService.php',
            'card_event_subscriber' => 'getCardEventSubscriberService.php',
            'classroom_event_subscriber' => 'getClassroomEventSubscriberService.php',
            'classroom_member_event_subscriber' => 'getClassroomMemberEventSubscriberService.php',
            'codeags_plugin.event.lazy_subscribers' => 'getCodeagsPlugin_Event_LazySubscribersService.php',
            'config.resource.self_checking_resource_checker' => 'getConfig_Resource_SelfCheckingResourceCheckerService.php',
            'console.command.about' => 'getConsole_Command_AboutService.php',
            'console.command.assets_install' => 'getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => 'getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => 'getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => 'getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => 'getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => 'getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => 'getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => 'getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => 'getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => 'getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => 'getConsole_Command_FormDebugService.php',
            'console.command.router_debug' => 'getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => 'getConsole_Command_RouterMatchService.php',
            'console.command.translation_debug' => 'getConsole_Command_TranslationDebugService.php',
            'console.command.translation_update' => 'getConsole_Command_TranslationUpdateService.php',
            'console.command.xliff_lint' => 'getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => 'getConsole_Command_YamlLintService.php',
            'console.command_loader' => 'getConsole_CommandLoaderService.php',
            'console.error_listener' => 'getConsole_ErrorListenerService.php',
            'content_event_subscriber' => 'getContentEventSubscriberService.php',
            'conversation_event_subscriber' => 'getConversationEventSubscriberService.php',
            'copy.extension' => 'getCopy_ExtensionService.php',
            'coupon_event_subscriber' => 'getCouponEventSubscriberService.php',
            'coupon_service_provider' => 'getCouponServiceProviderService.php',
            'course.extension' => 'getCourse_ExtensionService.php',
            'course_classroom_course_expiry_date_event_subscriber' => 'getCourseClassroomCourseExpiryDateEventSubscriberService.php',
            'course_material_event_subscriber' => 'getCourseMaterialEventSubscriberService.php',
            'course_member_event_subscriber' => 'getCourseMemberEventSubscriberService.php',
            'course_note_event_subscriber' => 'getCourseNoteEventSubscriberService.php',
            'course_product_event_subscriber' => 'getCourseProductEventSubscriberService.php',
            'course_set_event_subscriber' => 'getCourseSetEventSubscriberService.php',
            'course_set_material_event_subscriber' => 'getCourseSetMaterialEventSubscriberService.php',
            'course_set_statistics_event_subscriber' => 'getCourseSetStatisticsEventSubscriberService.php',
            'course_set_teacher_event_subscriber' => 'getCourseSetTeacherEventSubscriberService.php',
            'course_statistics_event_subscriber' => 'getCourseStatisticsEventSubscriberService.php',
            'course_sync_event_subscriber' => 'getCourseSyncEventSubscriberService.php',
            'course_thread_subscriber' => 'getCourseThreadSubscriberService.php',
            'course_try_view_subscriber' => 'getCourseTryViewSubscriberService.php',
            'crontab_event_subscriber' => 'getCrontabEventSubscriberService.php',
            'custom.activity.extension' => 'getCustom_Activity_ExtensionService.php',
            'debug.file_link_formatter.url_format' => 'getDebug_FileLinkFormatter_UrlFormatService.php',
            'dependency_injection.config.container_parameters_resource_checker' => 'getDependencyInjection_Config_ContainerParametersResourceCheckerService.php',
            'deprecated.form.registry' => 'getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => 'getDeprecated_Form_Registry_CsrfService.php',
            'destroy_account_event_subscriber' => 'getDestroyAccountEventSubscriberService.php',
            'doctrine.entity_manager.config' => 'getDoctrine_EntityManager_ConfigService.php',
            'doctrine.entity_manager.driver.yaml' => 'getDoctrine_EntityManager_Driver_YamlService.php',
            'doctrine.orm.entity_manager' => 'getDoctrine_Orm_EntityManagerService.php',
            'endroid.qrcode.factory' => 'getEndroid_Qrcode_FactoryService.php',
            'export_factory' => 'getExportFactoryService.php',
            'extension.manager' => 'getExtension_ManagerService.php',
            'file_locator' => 'getFileLocatorService.php',
            'filesystem' => 'getFilesystemService.php',
            'form.factory' => 'getForm_FactoryService.php',
            'form.registry' => 'getForm_RegistryService.php',
            'form.resolved_type_factory' => 'getForm_ResolvedTypeFactoryService.php',
            'form.server_params' => 'getForm_ServerParamsService.php',
            'form.type.birthday' => 'getForm_Type_BirthdayService.php',
            'form.type.button' => 'getForm_Type_ButtonService.php',
            'form.type.checkbox' => 'getForm_Type_CheckboxService.php',
            'form.type.choice' => 'getForm_Type_ChoiceService.php',
            'form.type.collection' => 'getForm_Type_CollectionService.php',
            'form.type.country' => 'getForm_Type_CountryService.php',
            'form.type.currency' => 'getForm_Type_CurrencyService.php',
            'form.type.date' => 'getForm_Type_DateService.php',
            'form.type.datetime' => 'getForm_Type_DatetimeService.php',
            'form.type.email' => 'getForm_Type_EmailService.php',
            'form.type.file' => 'getForm_Type_FileService.php',
            'form.type.form' => 'getForm_Type_FormService.php',
            'form.type.hidden' => 'getForm_Type_HiddenService.php',
            'form.type.integer' => 'getForm_Type_IntegerService.php',
            'form.type.language' => 'getForm_Type_LanguageService.php',
            'form.type.locale' => 'getForm_Type_LocaleService.php',
            'form.type.money' => 'getForm_Type_MoneyService.php',
            'form.type.number' => 'getForm_Type_NumberService.php',
            'form.type.password' => 'getForm_Type_PasswordService.php',
            'form.type.percent' => 'getForm_Type_PercentService.php',
            'form.type.radio' => 'getForm_Type_RadioService.php',
            'form.type.range' => 'getForm_Type_RangeService.php',
            'form.type.repeated' => 'getForm_Type_RepeatedService.php',
            'form.type.reset' => 'getForm_Type_ResetService.php',
            'form.type.search' => 'getForm_Type_SearchService.php',
            'form.type.submit' => 'getForm_Type_SubmitService.php',
            'form.type.text' => 'getForm_Type_TextService.php',
            'form.type.textarea' => 'getForm_Type_TextareaService.php',
            'form.type.time' => 'getForm_Type_TimeService.php',
            'form.type.timezone' => 'getForm_Type_TimezoneService.php',
            'form.type.url' => 'getForm_Type_UrlService.php',
            'form.type_extension.csrf' => 'getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.data_collector' => 'getForm_TypeExtension_Form_DataCollectorService.php',
            'form.type_extension.form.http_foundation' => 'getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.transformation_failure_handling' => 'getForm_TypeExtension_Form_TransformationFailureHandlingService.php',
            'form.type_extension.form.validator' => 'getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => 'getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => 'getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => 'getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.validator' => 'getForm_TypeGuesser_ValidatorService.php',
            'fragment.handler' => 'getFragment_HandlerService.php',
            'fragment.renderer.hinclude' => 'getFragment_Renderer_HincludeService.php',
            'fragment.renderer.inline' => 'getFragment_Renderer_InlineService.php',
            'kernel.class_cache.cache_warmer' => 'getKernel_ClassCache_CacheWarmerService.php',
            'kernel.listener.exception_listener' => 'getKernel_Listener_ExceptionListenerService.php',
            'learning_progress_event_subscriber' => 'getLearningProgressEventSubscriberService.php',
            'live_statistics_event_subscriber' => 'getLiveStatisticsEventSubscriberService.php',
            'mail_service_provider' => 'getMailServiceProviderService.php',
            'monolog.handler.null_internal' => 'getMonolog_Handler_NullInternalService.php',
            'monolog.logger.assetic' => 'getMonolog_Logger_AsseticService.php',
            'monolog.logger.console' => 'getMonolog_Logger_ConsoleService.php',
            'monolog.logger.security' => 'getMonolog_Logger_SecurityService.php',
            'monolog.logger.templating' => 'getMonolog_Logger_TemplatingService.php',
            'monolog.logger.translation' => 'getMonolog_Logger_TranslationService.php',
            'navigation_event_subscriber' => 'getNavigationEventSubscriberService.php',
            'newcomer_task.extension' => 'getNewcomerTask_ExtensionService.php',
            'notification_event_subscriber' => 'getNotificationEventSubscriberService.php',
            'oauth2.client_manager' => 'getOauth2_ClientManagerService.php',
            'oauth2.grant_type.authorization_code' => 'getOauth2_GrantType_AuthorizationCodeService.php',
            'oauth2.grant_type.client_credentials' => 'getOauth2_GrantType_ClientCredentialsService.php',
            'oauth2.grant_type.refresh_token' => 'getOauth2_GrantType_RefreshTokenService.php',
            'oauth2.grant_type.user_credentials' => 'getOauth2_GrantType_UserCredentialsService.php',
            'oauth2.request' => 'getOauth2_RequestService.php',
            'oauth2.response' => 'getOauth2_ResponseService.php',
            'oauth2.scope_manager' => 'getOauth2_ScopeManagerService.php',
            'oauth2.server' => 'getOauth2_ServerService.php',
            'oauth2.storage.access_token' => 'getOauth2_Storage_AccessTokenService.php',
            'oauth2.storage.authorization_code' => 'getOauth2_Storage_AuthorizationCodeService.php',
            'oauth2.storage.client_credentials' => 'getOauth2_Storage_ClientCredentialsService.php',
            'oauth2.storage.public_key' => 'getOauth2_Storage_PublicKeyService.php',
            'oauth2.storage.refresh_token' => 'getOauth2_Storage_RefreshTokenService.php',
            'oauth2.storage.scope' => 'getOauth2_Storage_ScopeService.php',
            'oauth2.storage.user_claims' => 'getOauth2_Storage_UserClaimsService.php',
            'oauth2.storage.user_credentials' => 'getOauth2_Storage_UserCredentialsService.php',
            'oauth2.user_provider' => 'getOauth2_UserProviderService.php',
            'open_course_sms_event_subscriber' => 'getOpenCourseSmsEventSubscriberService.php',
            'opencourse_event_subscriber' => 'getOpencourseEventSubscriberService.php',
            'order_subscriber' => 'getOrderSubscriberService.php',
            'orderrefererlog_event_subscriber' => 'getOrderrefererlogEventSubscriberService.php',
            'payment.extension' => 'getPayment_ExtensionService.php',
            'permission.admin_voter' => 'getPermission_AdminVoterService.php',
            'property_accessor' => 'getPropertyAccessorService.php',
            'qrcode_whitelist_filter' => 'getQrcodeWhitelistFilterService.php',
            'question.extension' => 'getQuestion_ExtensionService.php',
            'request' => 'getRequestService.php',
            'router.cache_warmer' => 'getRouter_CacheWarmerService.php',
            'routing.loader' => 'getRouting_LoaderService.php',
            'routing.loader.yml' => 'getRouting_Loader_YmlService.php',
            'security.access.authenticated_voter' => 'getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.expression_voter' => 'getSecurity_Access_ExpressionVoterService.php',
            'security.access.role_hierarchy_voter' => 'getSecurity_Access_RoleHierarchyVoterService.php',
            'security.access_listener' => 'getSecurity_AccessListenerService.php',
            'security.access_map' => 'getSecurity_AccessMapService.php',
            'security.authentication.guard_handler' => 'getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.anonymous.main' => 'getSecurity_Authentication_Listener_Anonymous_MainService.php',
            'security.authentication.listener.form.main' => 'getSecurity_Authentication_Listener_Form_MainService.php',
            'security.authentication.listener.rememberme.main' => 'getSecurity_Authentication_Listener_Rememberme_MainService.php',
            'security.authentication.provider.anonymous.main' => 'getSecurity_Authentication_Provider_Anonymous_MainService.php',
            'security.authentication.provider.dao.main' => 'getSecurity_Authentication_Provider_Dao_MainService.php',
            'security.authentication.provider.rememberme.main' => 'getSecurity_Authentication_Provider_Rememberme_MainService.php',
            'security.authentication.rememberme.services.simplehash.main' => 'getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php',
            'security.authentication.session_strategy.main' => 'getSecurity_Authentication_SessionStrategy_MainService.php',
            'security.authentication_utils' => 'getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => 'getSecurity_ChannelListenerService.php',
            'security.command.user_password_encoder' => 'getSecurity_Command_UserPasswordEncoderService.php',
            'security.context_listener.0' => 'getSecurity_ContextListener_0Service.php',
            'security.csrf.token_manager' => 'getSecurity_Csrf_TokenManagerService.php',
            'security.csrf.token_storage' => 'getSecurity_Csrf_TokenStorageService.php',
            'security.encoder_factory' => 'getSecurity_EncoderFactoryService.php',
            'security.firewall.map.context.dev' => 'getSecurity_Firewall_Map_Context_DevService.php',
            'security.firewall.map.context.disabled' => 'getSecurity_Firewall_Map_Context_DisabledService.php',
            'security.firewall.map.context.main' => 'getSecurity_Firewall_Map_Context_MainService.php',
            'security.http_utils' => 'getSecurity_HttpUtilsService.php',
            'security.password_encoder' => 'getSecurity_PasswordEncoderService.php',
            'security.request_matcher.mw0s1ky' => 'getSecurity_RequestMatcher_Mw0s1kyService.php',
            'security.request_matcher.olatxmb' => 'getSecurity_RequestMatcher_OlatxmbService.php',
            'security.request_matcher.zfhj2lw' => 'getSecurity_RequestMatcher_Zfhj2lwService.php',
            'security.user_checker' => 'getSecurity_UserCheckerService.php',
            'security.user_value_resolver' => 'getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => 'getSecurity_Validator_UserPasswordService.php',
            'sensio_distribution.security_checker' => 'getSensioDistribution_SecurityCheckerService.php',
            'sensio_distribution.security_checker.command' => 'getSensioDistribution_SecurityChecker_CommandService.php',
            'sensio_framework_extra.routing.loader.annot_class' => 'getSensioFrameworkExtra_Routing_Loader_AnnotClassService.php',
            'sensio_framework_extra.routing.loader.annot_dir' => 'getSensioFrameworkExtra_Routing_Loader_AnnotDirService.php',
            'sensio_framework_extra.routing.loader.annot_file' => 'getSensioFrameworkExtra_Routing_Loader_AnnotFileService.php',
            'services_resetter' => 'getServicesResetterService.php',
            'session' => 'getSessionService.php',
            'session.handler.pdo' => 'getSession_Handler_PdoService.php',
            'session.storage.filesystem' => 'getSession_Storage_FilesystemService.php',
            'session.storage.metadata_bag' => 'getSession_Storage_MetadataBagService.php',
            'session.storage.native' => 'getSession_Storage_NativeService.php',
            'session.storage.php_bridge' => 'getSession_Storage_PhpBridgeService.php',
            'sms_pay_center_event_subscriber' => 'getSmsPayCenterEventSubscriberService.php',
            'sms_task_event_subscriber' => 'getSmsTaskEventSubscriberService.php',
            'sms_testpaper_event_subscriber' => 'getSmsTestpaperEventSubscriberService.php',
            'statement_event_subscriber' => 'getStatementEventSubscriberService.php',
            'status_event_subscriber' => 'getStatusEventSubscriberService.php',
            'swiftmailer.email_sender.listener' => 'getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => 'getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => 'getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.transport' => 'getSwiftmailer_Mailer_Default_TransportService.php',
            'tag_course_set_event_subscriber' => 'getTagCourseSetEventSubscriberService.php',
            'task_event_subscriber' => 'getTaskEventSubscriberService.php',
            'task_sync_event_subscriber' => 'getTaskSyncEventSubscriberService.php',
            'task_testpaper_event_subscriber' => 'getTaskTestpaperEventSubscriberService.php',
            'task_toolbar.extension' => 'getTaskToolbar_ExtensionService.php',
            'taxonomy_article_event_subscriber' => 'getTaxonomyArticleEventSubscriberService.php',
            'templating' => 'getTemplatingService.php',
            'templating.cache_warmer.template_paths' => 'getTemplating_CacheWarmer_TemplatePathsService.php',
            'templating.filename_parser' => 'getTemplating_FilenameParserService.php',
            'templating.finder' => 'getTemplating_FinderService.php',
            'templating.helper.logout_url' => 'getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.security' => 'getTemplating_Helper_SecurityService.php',
            'templating.loader' => 'getTemplating_LoaderService.php',
            'testpaper_event_subscriber' => 'getTestpaperEventSubscriberService.php',
            'thread_event_subscriber' => 'getThreadEventSubscriberService.php',
            'tokenbucket_event_subscriber' => 'getTokenbucketEventSubscriberService.php',
            'topxia.timemachine' => 'getTopxia_TimemachineService.php',
            'topxia.user_provider' => 'getTopxia_UserProviderService.php',
            'translation.dumper.csv' => 'getTranslation_Dumper_CsvService.php',
            'translation.dumper.ini' => 'getTranslation_Dumper_IniService.php',
            'translation.dumper.json' => 'getTranslation_Dumper_JsonService.php',
            'translation.dumper.mo' => 'getTranslation_Dumper_MoService.php',
            'translation.dumper.php' => 'getTranslation_Dumper_PhpService.php',
            'translation.dumper.po' => 'getTranslation_Dumper_PoService.php',
            'translation.dumper.qt' => 'getTranslation_Dumper_QtService.php',
            'translation.dumper.res' => 'getTranslation_Dumper_ResService.php',
            'translation.dumper.xliff' => 'getTranslation_Dumper_XliffService.php',
            'translation.dumper.yml' => 'getTranslation_Dumper_YmlService.php',
            'translation.extractor' => 'getTranslation_ExtractorService.php',
            'translation.extractor.php' => 'getTranslation_Extractor_PhpService.php',
            'translation.loader' => 'getTranslation_LoaderService.php',
            'translation.loader.csv' => 'getTranslation_Loader_CsvService.php',
            'translation.loader.dat' => 'getTranslation_Loader_DatService.php',
            'translation.loader.ini' => 'getTranslation_Loader_IniService.php',
            'translation.loader.json' => 'getTranslation_Loader_JsonService.php',
            'translation.loader.mo' => 'getTranslation_Loader_MoService.php',
            'translation.loader.php' => 'getTranslation_Loader_PhpService.php',
            'translation.loader.po' => 'getTranslation_Loader_PoService.php',
            'translation.loader.qt' => 'getTranslation_Loader_QtService.php',
            'translation.loader.res' => 'getTranslation_Loader_ResService.php',
            'translation.loader.xliff' => 'getTranslation_Loader_XliffService.php',
            'translation.loader.yml' => 'getTranslation_Loader_YmlService.php',
            'translation.reader' => 'getTranslation_ReaderService.php',
            'translation.warmer' => 'getTranslation_WarmerService.php',
            'translation.writer' => 'getTranslation_WriterService.php',
            'twig.cache_warmer' => 'getTwig_CacheWarmerService.php',
            'twig.command.debug' => 'getTwig_Command_DebugService.php',
            'twig.command.lint' => 'getTwig_Command_LintService.php',
            'twig.controller.exception' => 'getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => 'getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => 'getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => 'getTwig_Form_RendererService.php',
            'twig.runtime.httpkernel' => 'getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => 'getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => 'getTwig_Translation_ExtractorService.php',
            'upload_file_event_subscriber' => 'getUploadFileEventSubscriberService.php',
            'user.login_generate_notification_handler' => 'getUser_LoginGenerateNotificationHandlerService.php',
            'user.login_listener' => 'getUser_LoginListenerService.php',
            'user.online_track' => 'getUser_OnlineTrackService.php',
            'user_account_event_subscriber' => 'getUserAccountEventSubscriberService.php',
            'user_classroom_event_subscriber' => 'getUserClassroomEventSubscriberService.php',
            'user_course_thread_event_subscriber' => 'getUserCourseThreadEventSubscriberService.php',
            'user_user_event_subscriber' => 'getUserUserEventSubscriberService.php',
            'user_vip_member_event_subscriber' => 'getUserVipMemberEventSubscriberService.php',
            'validator.email' => 'getValidator_EmailService.php',
            'validator.expression' => 'getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => 'getValidator_Mapping_CacheWarmerService.php',
            'video_task_event_subscriber' => 'getVideoTaskEventSubscriberService.php',
            'web.wrapper' => 'getWeb_WrapperService.php',
            'web_profiler.controller.exception' => 'getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => 'getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => 'getWebProfiler_Controller_RouterService.php',
            'web_server.command.server_log' => 'getWebServer_Command_ServerLogService.php',
            'web_server.command.server_run' => 'getWebServer_Command_ServerRunService.php',
            'web_server.command.server_start' => 'getWebServer_Command_ServerStartService.php',
            'web_server.command.server_status' => 'getWebServer_Command_ServerStatusService.php',
            'web_server.command.server_stop' => 'getWebServer_Command_ServerStopService.php',
            'wechat_notification_event_subscriber' => 'getWechatNotificationEventSubscriberService.php',
            'wechat_template.extension' => 'getWechatTemplate_ExtensionService.php',
        ];
        $this->privates = [
            'session.handler' => true,
            'session.handler.redis' => true,
            'session.storage' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.plugin.messagelogger' => true,
            'swiftmailer.transport' => true,
            'templating.helper.assets' => true,
            'templating.locator' => true,
            'annotation_reader' => true,
            'annotations.cache' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'api.field.filter.factory' => true,
            'api.path.parser' => true,
            'api.plugin.config.manager' => true,
            'api.resource.manager' => true,
            'api.util.item_helper' => true,
            'api.util.oc' => true,
            'api_anonymous_listener' => true,
            'api_authenticate_listener' => true,
            'api_authentication_manager' => true,
            'api_basic_authentication_listener' => true,
            'api_biz_ratelimit_listener' => true,
            'api_default_authentication' => true,
            'api_exception_listener' => true,
            'api_firewall' => true,
            'api_h5_third_party_oauth2_authentication_listener' => true,
            'api_oauth2_authentication_listener' => true,
            'api_old_token_header_listener' => true,
            'api_resource_kernel' => true,
            'api_response_viewer' => true,
            'api_session_authentication_listener' => true,
            'api_third_party_oauth2_authentication_listener' => true,
            'api_token_header_listener' => true,
            'api_web_lib_listener' => true,
            'app.cloud_api_collector' => true,
            'app.locale_listener' => true,
            'app.user_locale_listener' => true,
            'argument_metadata_factory' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assetic.asset_factory' => true,
            'assetic.asset_manager' => true,
            'assetic.asset_manager_cache_warmer' => true,
            'assetic.controller' => true,
            'assetic.filter_manager' => true,
            'assetic.request_listener' => true,
            'assets._version__default' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'assets.path_package' => true,
            'assets.static_version_strategy' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'codeages_plugin.dict_collector' => true,
            'codeages_plugin.slot_collector' => true,
            'codeages_plugin.slot_manager' => true,
            'codeages_plugin.theme.file_locator' => true,
            'codeages_plugin.theme.templating.locator' => true,
            'codeages_plugin.theme.twig_loader' => true,
            'config.resource.self_checking_resource_checker' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.translation_debug' => true,
            'console.command.translation_update' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'course_product_event_subscriber' => true,
            'custom.activity.extension' => true,
            'data_collector.form' => true,
            'data_collector.form.extractor' => true,
            'data_collector.request' => true,
            'data_collector.router' => true,
            'data_collector.translation' => true,
            'debug.argument_resolver' => true,
            'debug.controller_resolver' => true,
            'debug.debug_handlers_listener' => true,
            'debug.event_dispatcher' => true,
            'debug.file_link_formatter' => true,
            'debug.file_link_formatter.url_format' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'debug.stopwatch' => true,
            'dependency_injection.config.container_parameters_resource_checker' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'doctrine.entity_manager.config' => true,
            'doctrine.entity_manager.driver.yaml' => true,
            'doctrine.orm.entity_manager' => true,
            'endroid.qrcode.factory' => true,
            'endroid.qrcode.twig.extension' => true,
            'file_locator' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.data_collector' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.transformation_failure_handling' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.validator' => true,
            'fragment.handler' => true,
            'fragment.listener' => true,
            'fragment.renderer.hinclude' => true,
            'fragment.renderer.inline' => true,
            'framework_extra_bundle.argument_name_convertor' => true,
            'framework_extra_bundle.event.is_granted' => true,
            'json_formatter' => true,
            'kernel.class_cache.cache_warmer' => true,
            'kernel.controller.permission_listener' => true,
            'kernel.listener.exception_listener' => true,
            'kernel.listener.kernel_admin_request_intercept_listener' => true,
            'kernel.listener.kernel_h5_request_listener' => true,
            'kernel.listener.kernel_request_listener' => true,
            'kernel.listener.kernel_response_listener' => true,
            'kernel.listener.user_login_token_listener' => true,
            'kernel.response.permission_listener' => true,
            'locale_listener' => true,
            'logger' => true,
            'monolog.handler.firephp' => true,
            'monolog.handler.main' => true,
            'monolog.handler.null_internal' => true,
            'monolog.logger.assetic' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.event' => true,
            'monolog.logger.php' => true,
            'monolog.logger.profiler' => true,
            'monolog.logger.request' => true,
            'monolog.logger.security' => true,
            'monolog.logger.templating' => true,
            'monolog.logger.translation' => true,
            'monolog.processor.psr_log_message' => true,
            'monolog.processor.trace_processor' => true,
            'oauth2.client_manager' => true,
            'oauth2.grant_type.authorization_code' => true,
            'oauth2.grant_type.client_credentials' => true,
            'oauth2.grant_type.refresh_token' => true,
            'oauth2.grant_type.user_credentials' => true,
            'oauth2.request' => true,
            'oauth2.response' => true,
            'oauth2.scope_manager' => true,
            'oauth2.server' => true,
            'oauth2.storage.access_token' => true,
            'oauth2.storage.authorization_code' => true,
            'oauth2.storage.client_credentials' => true,
            'oauth2.storage.public_key' => true,
            'oauth2.storage.refresh_token' => true,
            'oauth2.storage.scope' => true,
            'oauth2.storage.user_claims' => true,
            'oauth2.storage.user_credentials' => true,
            'oauth2.user_provider' => true,
            'permission.admin_voter' => true,
            'permission.twig.permission_extension' => true,
            'profiler_listener' => true,
            'property_accessor' => true,
            'request' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'routing.loader.yml' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.role_hierarchy_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.anonymous.main' => true,
            'security.authentication.listener.form.main' => true,
            'security.authentication.listener.rememberme.main' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.provider.dao.main' => true,
            'security.authentication.provider.rememberme.main' => true,
            'security.authentication.rememberme.services.simplehash.main' => true,
            'security.authentication.session_strategy.main' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.command.user_password_encoder' => true,
            'security.context_listener.0' => true,
            'security.csrf.token_storage' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map' => true,
            'security.firewall.map.context.dev' => true,
            'security.firewall.map.context.disabled' => true,
            'security.firewall.map.context.main' => true,
            'security.http_utils' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.mw0s1ky' => true,
            'security.request_matcher.olatxmb' => true,
            'security.request_matcher.zfhj2lw' => true,
            'security.role_hierarchy' => true,
            'security.user_checker' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_distribution.security_checker' => true,
            'sensio_distribution.security_checker.command' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.routing.loader.annot_class' => true,
            'sensio_framework_extra.routing.loader.annot_dir' => true,
            'sensio_framework_extra.routing.loader.annot_file' => true,
            'sensio_framework_extra.security.listener' => true,
            'sensio_framework_extra.view.listener' => true,
            'session.handler.pdo' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'streamed_response_listener' => true,
            'swiftmailer.email_sender.listener' => true,
            'templating.cache_warmer.template_paths' => true,
            'templating.filename_parser' => true,
            'templating.finder' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.security' => true,
            'templating.name_parser' => true,
            'topxia.twig.cache_extension' => true,
            'topxia.twig.cache_provider' => true,
            'topxia.twig.cache_strategy' => true,
            'topxia.twig.file_cache' => true,
            'topxia.user_provider' => true,
            'translation.dumper.csv' => true,
            'translation.dumper.ini' => true,
            'translation.dumper.json' => true,
            'translation.dumper.mo' => true,
            'translation.dumper.php' => true,
            'translation.dumper.po' => true,
            'translation.dumper.qt' => true,
            'translation.dumper.res' => true,
            'translation.dumper.xliff' => true,
            'translation.dumper.yml' => true,
            'translation.extractor' => true,
            'translation.extractor.php' => true,
            'translation.loader' => true,
            'translation.loader.csv' => true,
            'translation.loader.dat' => true,
            'translation.loader.ini' => true,
            'translation.loader.json' => true,
            'translation.loader.mo' => true,
            'translation.loader.php' => true,
            'translation.loader.po' => true,
            'translation.loader.qt' => true,
            'translation.loader.res' => true,
            'translation.loader.xliff' => true,
            'translation.loader.yml' => true,
            'translation.reader' => true,
            'translation.warmer' => true,
            'translation.writer' => true,
            'translator.default' => true,
            'translator_listener' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'user.login_generate_notification_handler' => true,
            'user.login_listener' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'web_profiler.csp.handler' => true,
            'web_profiler.debug_toolbar' => true,
            'web_server.command.server_log' => true,
            'web_server.command.server_run' => true,
            'web_server.command.server_start' => true,
            'web_server.command.server_status' => true,
            'web_server.command.server_stop' => true,
        ];
        $this->aliases = [
            'cache.app_clearer' => 'cache.default_clearer',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'session.handler' => 'session.handler.pdo',
            'session.handler.redis' => 'session.handler.pdo',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'templating.helper.assets' => 'assets.packages',
            'templating.locator' => 'codeages_plugin.theme.templating.locator',
        ];
    }

    public function getRemovedIds()
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.'removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $this->containerDir.\DIRECTORY_SEPARATOR.$file;
    }

    /**
     * Gets the public 'biz' shared service.
     *
     * @return \Codeages\Biz\Framework\Context\Biz
     */
    protected function getBizService()
    {
        return $this->services['biz'] = new \Codeages\Biz\Framework\Context\Biz($this->getParameter('biz_config'));
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('VCn+xtNyea', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('8T3wRTx-QJ', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'codeages_plugin.dict_twig_extension' shared service.
     *
     * @return \Codeages\PluginBundle\Twig\DictExtension
     */
    protected function getCodeagesPlugin_DictTwigExtensionService()
    {
        return $this->services['codeages_plugin.dict_twig_extension'] = new \Codeages\PluginBundle\Twig\DictExtension(${($_ = isset($this->services['codeages_plugin.dict_collector']) ? $this->services['codeages_plugin.dict_collector'] : $this->getCodeagesPlugin_DictCollectorService()) && false ?: '_'}, $this);
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->getDebug_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->getMonolog_Logger_ProfilerService()) && false ?: '_'};

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};
        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->getCache_AppService()) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->getCache_SystemService()) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});
        $d = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $d->setKernel($b);
        }

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : ($this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector())) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->getDataCollector_FormService()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : ($this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())) && false ?: '_'});
        $instance->add($c);
        $instance->add(${($_ = isset($this->services['data_collector.translation']) ? $this->services['data_collector.translation'] : $this->getDataCollector_TranslationService()) && false ?: '_'});
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : ($this->services['twig.profile'] = new \Twig\Profiler\Profile())) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['app.cloud_api_collector']) ? $this->services['app.cloud_api_collector'] : $this->getApp_CloudApiCollectorService()) && false ?: '_'});
        $instance->add($d);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[0].'/assetic/routing.yml'), ['cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'AppBundle\\SfExtend\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true, 'resource_type' => 'yaml'], ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollectorTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\DataCollectorTranslator(${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, ['debug' => true, 'strict_variables' => true, 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8']);

        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'};
        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $d->setDisplayOptions(['maxStringLength' => 4096, 'fileLinkFormat' => $b]);
        $e = new \Symfony\Bridge\Twig\AppVariable();
        $e->setEnvironment('dev');
        $e->setDebug(true);
        if ($this->has('security.token_storage')) {
            $e->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $e->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : ($this->services['twig.profile'] = new \Twig\Profiler\Profile())) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, $this->targetDirs[3], 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension([0 => $this, 1 => 'twig.form.renderer']));
        $instance->addExtension(${($_ = isset($this->services['topxia.twig.cache_extension']) ? $this->services['topxia.twig.cache_extension'] : $this->getTopxia_Twig_CacheExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['permission.twig.permission_extension']) ? $this->services['permission.twig.permission_extension'] : ($this->services['permission.twig.permission_extension'] = new \AppBundle\Twig\PermissionExtension($this))) && false ?: '_'});
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(${($_ = isset($this->services['endroid.qrcode.twig.extension']) ? $this->services['endroid.qrcode.twig.extension'] : $this->getEndroid_Qrcode_Twig_ExtensionService()) && false ?: '_'});
        $instance->addExtension(new \Codeages\PluginBundle\Twig\HtmlExtension());
        $instance->addExtension(new \Codeages\PluginBundle\Twig\SlotExtension(${($_ = isset($this->services['codeages_plugin.slot_manager']) ? $this->services['codeages_plugin.slot_manager'] : $this->getCodeagesPlugin_SlotManagerService()) && false ?: '_'}));
        $instance->addExtension(${($_ = isset($this->services['codeages_plugin.dict_twig_extension']) ? $this->services['codeages_plugin.dict_twig_extension'] : $this->getCodeagesPlugin_DictTwigExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.question_type_extension']) ? $this->services['web.twig.question_type_extension'] : $this->getWeb_Twig_QuestionTypeExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.question_extension']) ? $this->services['web.twig.question_extension'] : $this->getWeb_Twig_QuestionExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.testpaper_extension']) ? $this->services['web.twig.testpaper_extension'] : $this->getWeb_Twig_TestpaperExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.material_extension']) ? $this->services['web.twig.material_extension'] : $this->getWeb_Twig_MaterialExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.app_extension']) ? $this->services['web.twig.app_extension'] : ($this->services['web.twig.app_extension'] = new \AppBundle\Twig\AppExtension($this))) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.activity_extension']) ? $this->services['web.twig.activity_extension'] : $this->getWeb_Twig_ActivityExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.live_extension']) ? $this->services['web.twig.live_extension'] : $this->getWeb_Twig_LiveExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.extension']) ? $this->services['web.twig.extension'] : $this->getWeb_Twig_ExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.html_extension']) ? $this->services['web.twig.html_extension'] : $this->getWeb_Twig_HtmlExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.dictionary_extension']) ? $this->services['web.twig.dictionary_extension'] : $this->getWeb_Twig_DictionaryExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.face_inspection_extension']) ? $this->services['web.twig.face_inspection_extension'] : $this->getWeb_Twig_FaceInspectionExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.data_extension']) ? $this->services['web.twig.data_extension'] : $this->getWeb_Twig_DataExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.block_extension']) ? $this->services['web.twig.block_extension'] : $this->getWeb_Twig_BlockExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.uploader_extension']) ? $this->services['web.twig.uploader_extension'] : ($this->services['web.twig.uploader_extension'] = new \AppBundle\Twig\UploaderExtension($this))) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.theme_extension']) ? $this->services['web.twig.theme_extension'] : $this->getWeb_Twig_ThemeExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.order_extension']) ? $this->services['web.twig.order_extension'] : $this->getWeb_Twig_OrderExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.course_extension']) ? $this->services['web.twig.course_extension'] : $this->getWeb_Twig_CourseExtensionService()) && false ?: '_'});
        $instance->addExtension(${($_ = isset($this->services['web.twig.search_extension']) ? $this->services['web.twig.search_extension'] : $this->getWeb_Twig_SearchExtensionService()) && false ?: '_'});
        $instance->addExtension(new \Symfony\Bundle\AsseticBundle\Twig\AsseticExtension(${($_ = isset($this->services['assetic.asset_factory']) ? $this->services['assetic.asset_factory'] : $this->getAssetic_AssetFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : ($this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, true, [], $this->parameters['assetic.bundles'], new \Symfony\Bundle\AsseticBundle\DefaultValueSupplier($this)));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($d));
        $instance->addGlobal('app', $e);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(['Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load('getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load('getTwig_Form_RendererService.php')) && false ?: '_'};
        }])));
        $instance->addGlobal('site_tracking', false);
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->getValidator_BuilderService()) && false ?: '_'}->getValidator());
    }

    /**
     * Gets the public 'web.twig.activity_extension' shared service.
     *
     * @return \AppBundle\Twig\ActivityExtension
     */
    protected function getWeb_Twig_ActivityExtensionService()
    {
        return $this->services['web.twig.activity_extension'] = new \AppBundle\Twig\ActivityExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.app_extension' shared service.
     *
     * @return \AppBundle\Twig\AppExtension
     */
    protected function getWeb_Twig_AppExtensionService()
    {
        return $this->services['web.twig.app_extension'] = new \AppBundle\Twig\AppExtension($this);
    }

    /**
     * Gets the public 'web.twig.block_extension' shared service.
     *
     * @return \AppBundle\Twig\BlockExtension
     */
    protected function getWeb_Twig_BlockExtensionService()
    {
        return $this->services['web.twig.block_extension'] = new \AppBundle\Twig\BlockExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.course_extension' shared service.
     *
     * @return \AppBundle\Twig\CourseExtension
     */
    protected function getWeb_Twig_CourseExtensionService()
    {
        return $this->services['web.twig.course_extension'] = new \AppBundle\Twig\CourseExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.data_extension' shared service.
     *
     * @return \AppBundle\Twig\DataExtension
     */
    protected function getWeb_Twig_DataExtensionService()
    {
        return $this->services['web.twig.data_extension'] = new \AppBundle\Twig\DataExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.dictionary_extension' shared service.
     *
     * @return \AppBundle\Twig\DictionaryExtension
     */
    protected function getWeb_Twig_DictionaryExtensionService()
    {
        return $this->services['web.twig.dictionary_extension'] = new \AppBundle\Twig\DictionaryExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.extension' shared service.
     *
     * @return \AppBundle\Twig\WebExtension
     */
    protected function getWeb_Twig_ExtensionService()
    {
        return $this->services['web.twig.extension'] = new \AppBundle\Twig\WebExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.face_inspection_extension' shared service.
     *
     * @return \AppBundle\Twig\FaceInspectionExtension
     */
    protected function getWeb_Twig_FaceInspectionExtensionService()
    {
        return $this->services['web.twig.face_inspection_extension'] = new \AppBundle\Twig\FaceInspectionExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.html_extension' shared service.
     *
     * @return \AppBundle\Twig\HtmlExtension
     */
    protected function getWeb_Twig_HtmlExtensionService()
    {
        return $this->services['web.twig.html_extension'] = new \AppBundle\Twig\HtmlExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.live_extension' shared service.
     *
     * @return \AppBundle\Twig\LiveExtension
     */
    protected function getWeb_Twig_LiveExtensionService()
    {
        return $this->services['web.twig.live_extension'] = new \AppBundle\Twig\LiveExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.material_extension' shared service.
     *
     * @return \AppBundle\Twig\MaterialExtension
     */
    protected function getWeb_Twig_MaterialExtensionService()
    {
        return $this->services['web.twig.material_extension'] = new \AppBundle\Twig\MaterialExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.order_extension' shared service.
     *
     * @return \AppBundle\Twig\OrderExtension
     */
    protected function getWeb_Twig_OrderExtensionService()
    {
        return $this->services['web.twig.order_extension'] = new \AppBundle\Twig\OrderExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.question_extension' shared service.
     *
     * @return \AppBundle\Twig\QuestionExtension
     */
    protected function getWeb_Twig_QuestionExtensionService()
    {
        return $this->services['web.twig.question_extension'] = new \AppBundle\Twig\QuestionExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.question_type_extension' shared service.
     *
     * @return \AppBundle\Twig\QuestionTypeExtension
     */
    protected function getWeb_Twig_QuestionTypeExtensionService()
    {
        return $this->services['web.twig.question_type_extension'] = new \AppBundle\Twig\QuestionTypeExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.search_extension' shared service.
     *
     * @return \AppBundle\Twig\SearchExtension
     */
    protected function getWeb_Twig_SearchExtensionService()
    {
        return $this->services['web.twig.search_extension'] = new \AppBundle\Twig\SearchExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.testpaper_extension' shared service.
     *
     * @return \AppBundle\Twig\TestpaperExtension
     */
    protected function getWeb_Twig_TestpaperExtensionService()
    {
        return $this->services['web.twig.testpaper_extension'] = new \AppBundle\Twig\TestpaperExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.theme_extension' shared service.
     *
     * @return \AppBundle\Twig\ThemeExtension
     */
    protected function getWeb_Twig_ThemeExtensionService()
    {
        return $this->services['web.twig.theme_extension'] = new \AppBundle\Twig\ThemeExtension($this, ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the public 'web.twig.uploader_extension' shared service.
     *
     * @return \AppBundle\Twig\UploaderExtension
     */
    protected function getWeb_Twig_UploaderExtensionService()
    {
        return $this->services['web.twig.uploader_extension'] = new \AppBundle\Twig\UploaderExtension($this);
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, ${($_ = isset($this->services['annotations.cache']) ? $this->services['annotations.cache'] : $this->load('getAnnotations_CacheService.php')) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'app.cloud_api_collector' shared service.
     *
     * @return \AppBundle\DataCollector\CloudApiDataCollector
     */
    protected function getApp_CloudApiCollectorService()
    {
        return $this->services['app.cloud_api_collector'] = new \AppBundle\DataCollector\CloudApiDataCollector(${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the private 'app.locale_listener' shared service.
     *
     * @return \AppBundle\Listener\LocaleListener
     */
    protected function getApp_LocaleListenerService()
    {
        return $this->services['app.locale_listener'] = new \AppBundle\Listener\LocaleListener($this, 'zh_CN');
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'assetic.asset_factory' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\Factory\AssetFactory
     */
    protected function getAssetic_AssetFactoryService()
    {
        $this->services['assetic.asset_factory'] = $instance = new \Symfony\Bundle\AsseticBundle\Factory\AssetFactory(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, $this, $this->getParameterBag(), ($this->targetDirs[3].'/../web'), true);

        $instance->addWorker(new \Symfony\Bundle\AsseticBundle\Factory\Worker\UseControllerWorker());

        return $instance;
    }

    /**
     * Gets the private 'assetic.request_listener' shared service.
     *
     * @return \Symfony\Bundle\AsseticBundle\EventListener\RequestListener
     */
    protected function getAssetic_RequestListenerService()
    {
        return $this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener();
    }

    /**
     * Gets the private 'assets._version__default' shared service.
     *
     * @return \AppBundle\Twig\Asset\VersionStrategy\StaticVersionStrategy
     */
    protected function getAssets_VersionDefaultService()
    {
        return $this->services['assets._version__default'] = new \AppBundle\Twig\Asset\VersionStrategy\StaticVersionStrategy('8.7.15', '%s?version=%s', ${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'});
    }

    /**
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, '', false);
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \AppBundle\Twig\Asset\PathPackage('', ${($_ = isset($this->services['assets._version__default']) ? $this->services['assets._version__default'] : $this->getAssets_VersionDefaultService()) && false ?: '_'}, ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), []);
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('XRqmqaYSCF', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('brkIw7+qdO', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('7U0LNTLukr', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'codeages_plugin.dict_collector' shared service.
     *
     * @return \Codeages\PluginBundle\System\DictCollector
     */
    protected function getCodeagesPlugin_DictCollectorService()
    {
        return $this->services['codeages_plugin.dict_collector'] = new \Codeages\PluginBundle\System\DictCollector([0 => ($this->targetDirs[4].'/src/AppBundle/Resources/config/dict.zh_CN.yml'), 1 => ($this->targetDirs[4].'/src/AppBundle/Resources/config/dict.en.yml')], $this->targetDirs[0], true, 'zh_CN');
    }

    /**
     * Gets the private 'codeages_plugin.slot_collector' shared service.
     *
     * @return \Codeages\PluginBundle\System\Slot\SlotInjectionCollector
     */
    protected function getCodeagesPlugin_SlotCollectorService()
    {
        return $this->services['codeages_plugin.slot_collector'] = new \Codeages\PluginBundle\System\Slot\SlotInjectionCollector([], $this->targetDirs[0], true);
    }

    /**
     * Gets the private 'codeages_plugin.slot_manager' shared service.
     *
     * @return \Codeages\PluginBundle\System\Slot\SlotManager
     */
    protected function getCodeagesPlugin_SlotManagerService()
    {
        return $this->services['codeages_plugin.slot_manager'] = new \Codeages\PluginBundle\System\Slot\SlotManager(${($_ = isset($this->services['codeages_plugin.slot_collector']) ? $this->services['codeages_plugin.slot_collector'] : ($this->services['codeages_plugin.slot_collector'] = new \Codeages\PluginBundle\System\Slot\SlotInjectionCollector([], $this->targetDirs[0], true))) && false ?: '_'}, $this);
    }

    /**
     * Gets the private 'codeages_plugin.theme.file_locator' shared service.
     *
     * @return \Codeages\PluginBundle\Locator\ThemeFileLocator
     */
    protected function getCodeagesPlugin_Theme_FileLocatorService()
    {
        return $this->services['codeages_plugin.theme.file_locator'] = new \Codeages\PluginBundle\Locator\ThemeFileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'/Resources'));
    }

    /**
     * Gets the private 'codeages_plugin.theme.templating.locator' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator
     */
    protected function getCodeagesPlugin_Theme_Templating_LocatorService()
    {
        return $this->services['codeages_plugin.theme.templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(${($_ = isset($this->services['codeages_plugin.theme.file_locator']) ? $this->services['codeages_plugin.theme.file_locator'] : ($this->services['codeages_plugin.theme.file_locator'] = new \Codeages\PluginBundle\Locator\ThemeFileLocator(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}, ($this->targetDirs[3].'/Resources')))) && false ?: '_'}, $this->targetDirs[0]);
    }

    /**
     * Gets the private 'codeages_plugin.theme.twig_loader' shared service.
     *
     * @return \Codeages\PluginBundle\Loader\ThemeTwigLoader
     */
    protected function getCodeagesPlugin_Theme_TwigLoaderService()
    {
        return $this->services['codeages_plugin.theme.twig_loader'] = new \Codeages\PluginBundle\Loader\ThemeTwigLoader(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['dependency_injection.config.container_parameters_resource_checker']) ? $this->services['dependency_injection.config.container_parameters_resource_checker'] : ($this->services['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this))) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['config.resource.self_checking_resource_checker']) ? $this->services['config.resource.self_checking_resource_checker'] : ($this->services['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker())) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : ($this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor())) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'data_collector.translation' shared service.
     *
     * @return \Symfony\Component\Translation\DataCollector\TranslationDataCollector
     */
    protected function getDataCollector_TranslationService()
    {
        return $this->services['data_collector.translation'] = new \Symfony\Component\Translation\DataCollector\TranslationDataCollector(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : ($this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())) && false ?: '_'}, new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : ($this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver())) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : ($this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver())) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : ($this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver())) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load('getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load('getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : ($this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver())) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : ($this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver())) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : ($this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->getMonolog_Logger_EventService()) && false ?: '_'});

        $instance->addListener('security.interactive_login', [0 => function () {
            return ${($_ = isset($this->services['user.login_listener']) ? $this->services['user.login_listener'] : $this->load('getUser_LoginListenerService.php')) && false ?: '_'};
        }, 1 => 'onSecurityInteractivelogin'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ${($_ = isset($this->services['user.login_generate_notification_handler']) ? $this->services['user.login_generate_notification_handler'] : ($this->services['user.login_generate_notification_handler'] = new \AppBundle\Handler\GenerateNotificationHandler($this))) && false ?: '_'};
        }, 1 => 'onSecurityInteractivelogin'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['kernel.listener.exception_listener']) ? $this->services['kernel.listener.exception_listener'] : ($this->services['kernel.listener.exception_listener'] = new \AppBundle\Listener\ExceptionListener($this))) && false ?: '_'};
        }, 1 => 'onKernelException'], 255);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['kernel.listener.kernel_request_listener']) ? $this->services['kernel.listener.kernel_request_listener'] : ($this->services['kernel.listener.kernel_request_listener'] = new \AppBundle\Listener\KernelRequestListener($this))) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 255);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['kernel.listener.kernel_h5_request_listener']) ? $this->services['kernel.listener.kernel_h5_request_listener'] : ($this->services['kernel.listener.kernel_h5_request_listener'] = new \AppBundle\Listener\KernelH5RequestListener($this))) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 254);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['kernel.listener.kernel_response_listener']) ? $this->services['kernel.listener.kernel_response_listener'] : ($this->services['kernel.listener.kernel_response_listener'] = new \AppBundle\Listener\KernelResponseListener($this))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 255);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['kernel.controller.permission_listener']) ? $this->services['kernel.controller.permission_listener'] : $this->getKernel_Controller_PermissionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], 255);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['kernel.response.permission_listener']) ? $this->services['kernel.response.permission_listener'] : ($this->services['kernel.response.permission_listener'] = new \AppBundle\Listener\PermissionKernelResponseListener($this))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 255);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['kernel.listener.user_login_token_listener']) ? $this->services['kernel.listener.user_login_token_listener'] : ($this->services['kernel.listener.user_login_token_listener'] = new \AppBundle\Listener\UserLoginTokenListener($this))) && false ?: '_'};
        }, 1 => 'onGetUserLoginListener'], 0);
        $instance->addListener('security.interactive_login', [0 => function () {
            return ${($_ = isset($this->services['app.user_locale_listener']) ? $this->services['app.user_locale_listener'] : $this->load('getApp_UserLocaleListenerService.php')) && false ?: '_'};
        }, 1 => 'onInteractiveLogin'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['kernel.listener.kernel_admin_request_intercept_listener']) ? $this->services['kernel.listener.kernel_admin_request_intercept_listener'] : ($this->services['kernel.listener.kernel_admin_request_intercept_listener'] = new \AppBundle\Listener\AdminRequestInterceptListener($this))) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 255);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : ($this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector())) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['monolog.handler.firephp']) ? $this->services['monolog.handler.firephp'] : $this->getMonolog_Handler_FirephpService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['api_exception_listener']) ? $this->services['api_exception_listener'] : ($this->services['api_exception_listener'] = new \ApiBundle\EventListener\ExceptionListener($this))) && false ?: '_'};
        }, 1 => 'onKernelException'], 1024);
        $instance->addListener('api.before_authenticate', [0 => function () {
            return ${($_ = isset($this->services['api_authenticate_listener']) ? $this->services['api_authenticate_listener'] : ($this->services['api_authenticate_listener'] = new \ApiBundle\EventListener\AuthenticateListener($this))) && false ?: '_'};
        }, 1 => 'onAuthenticate'], 1024);
        $instance->addListener('api.after_authenticate', [0 => function () {
            return ${($_ = isset($this->services['api_biz_ratelimit_listener']) ? $this->services['api_biz_ratelimit_listener'] : $this->load('getApiBizRatelimitListenerService.php')) && false ?: '_'};
        }, 1 => 'handle'], 1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['assetic.request_listener']) ? $this->services['assetic.request_listener'] : ($this->services['assetic.request_listener'] = new \Symfony\Bundle\AsseticBundle\EventListener\RequestListener())) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['app.locale_listener']) ? $this->services['app.locale_listener'] : ($this->services['app.locale_listener'] = new \AppBundle\Listener\LocaleListener($this, 'zh_CN'))) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 15);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : ($this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8'))) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : ($this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1024);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 16);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : ($this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener())) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 256);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 24);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'], -128);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load('getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'], -128);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 128);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : ($this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -1000);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->getFragment_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 48);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 10);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['translator_listener']) ? $this->services['translator_listener'] : $this->getTranslatorListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -100);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelTerminate'], -1024);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : ($this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector())) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : ($this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'], 2048);
        $instance->addListener('console.command', [0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'], 2048);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 32);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'], -64);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : ($this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.request', [0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'], 8);
        $instance->addListener('kernel.finish_request', [0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'], 0);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load('getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'], -128);
        $instance->addListener('kernel.exception', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'], 0);
        $instance->addListener('kernel.terminate', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('console.error', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'], 0);
        $instance->addListener('console.terminate', [0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load('getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'], -128);
        $instance->addListener('kernel.view', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelView'], 0);
        $instance->addListener('kernel.controller', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : ($this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener())) && false ?: '_'};
        }, 1 => 'onKernelController'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : ($this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener())) && false ?: '_'};
        }, 1 => 'onKernelResponse'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->getSensioFrameworkExtra_Security_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.controller_arguments', [0 => function () {
            return ${($_ = isset($this->services['framework_extra_bundle.event.is_granted']) ? $this->services['framework_extra_bundle.event.is_granted'] : $this->getFrameworkExtraBundle_Event_IsGrantedService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'], 0);
        $instance->addListener('kernel.response', [0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->getWebProfiler_DebugToolbarService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'], -128);

        return $instance;
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, $this->targetDirs[4], function () {
            return ${($_ = isset($this->services['debug.file_link_formatter.url_format']) ? $this->services['debug.file_link_formatter.url_format'] : $this->load('getDebug_FileLinkFormatter_UrlFormatService.php')) && false ?: '_'};
        });
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load('getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.role_hierarchy_voter']) ? $this->services['security.access.role_hierarchy_voter'] : $this->load('getSecurity_Access_RoleHierarchyVoterService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load('getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['permission.admin_voter']) ? $this->services['permission.admin_voter'] : ($this->services['permission.admin_voter'] = new \AppBundle\SfExtend\AdminVoter())) && false ?: '_'};
        }, 4), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'endroid.qrcode.twig.extension' shared service.
     *
     * @return \Endroid\QrCode\Bundle\Twig\Extension\QrCodeExtension
     */
    protected function getEndroid_Qrcode_Twig_ExtensionService()
    {
        $this->services['endroid.qrcode.twig.extension'] = $instance = new \Endroid\QrCode\Bundle\Twig\Extension\QrCodeExtension();

        $instance->setContainer($this);

        return $instance;
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : ($this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt'))) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->services['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : ($this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory())) && false ?: '_'});
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->services['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'json_formatter' shared service.
     *
     * @return \Codeages\Biz\Framework\Util\ReadableJsonFormatter
     */
    protected function getJsonFormatterService()
    {
        return $this->services['json_formatter'] = new \Codeages\Biz\Framework\Util\ReadableJsonFormatter();
    }

    /**
     * Gets the private 'kernel.controller.permission_listener' shared service.
     *
     * @return \AppBundle\Listener\PermissionKernelControllerListener
     */
    protected function getKernel_Controller_PermissionListenerService()
    {
        return $this->services['kernel.controller.permission_listener'] = new \AppBundle\Listener\PermissionKernelControllerListener($this, $this->parameters['permission.path_regular_expression']);
    }

    /**
     * Gets the private 'kernel.listener.kernel_admin_request_intercept_listener' shared service.
     *
     * @return \AppBundle\Listener\AdminRequestInterceptListener
     */
    protected function getKernel_Listener_KernelAdminRequestInterceptListenerService()
    {
        return $this->services['kernel.listener.kernel_admin_request_intercept_listener'] = new \AppBundle\Listener\AdminRequestInterceptListener($this);
    }

    /**
     * Gets the private 'kernel.listener.kernel_h5_request_listener' shared service.
     *
     * @return \AppBundle\Listener\KernelH5RequestListener
     */
    protected function getKernel_Listener_KernelH5RequestListenerService()
    {
        return $this->services['kernel.listener.kernel_h5_request_listener'] = new \AppBundle\Listener\KernelH5RequestListener($this);
    }

    /**
     * Gets the private 'kernel.listener.kernel_request_listener' shared service.
     *
     * @return \AppBundle\Listener\KernelRequestListener
     */
    protected function getKernel_Listener_KernelRequestListenerService()
    {
        return $this->services['kernel.listener.kernel_request_listener'] = new \AppBundle\Listener\KernelRequestListener($this);
    }

    /**
     * Gets the private 'kernel.listener.kernel_response_listener' shared service.
     *
     * @return \AppBundle\Listener\KernelResponseListener
     */
    protected function getKernel_Listener_KernelResponseListenerService()
    {
        return $this->services['kernel.listener.kernel_response_listener'] = new \AppBundle\Listener\KernelResponseListener($this);
    }

    /**
     * Gets the private 'kernel.listener.user_login_token_listener' shared service.
     *
     * @return \AppBundle\Listener\UserLoginTokenListener
     */
    protected function getKernel_Listener_UserLoginTokenListenerService()
    {
        return $this->services['kernel.listener.user_login_token_listener'] = new \AppBundle\Listener\UserLoginTokenListener($this);
    }

    /**
     * Gets the private 'kernel.response.permission_listener' shared service.
     *
     * @return \AppBundle\Listener\PermissionKernelResponseListener
     */
    protected function getKernel_Response_PermissionListenerService()
    {
        return $this->services['kernel.response.permission_listener'] = new \AppBundle\Listener\PermissionKernelResponseListener($this);
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, 'zh_CN', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.trace_processor']) ? $this->services['monolog.processor.trace_processor'] : ($this->services['monolog.processor.trace_processor'] = new \AppBundle\Processor\TraceProcessor())) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.firephp']) ? $this->services['monolog.handler.firephp'] : $this->getMonolog_Handler_FirephpService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.firephp' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\FirePHPHandler
     */
    protected function getMonolog_Handler_FirephpService()
    {
        $this->services['monolog.handler.firephp'] = $instance = new \Symfony\Bridge\Monolog\Handler\FirePHPHandler(200, true);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : ($this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[3].'/logs/dev.log'), 300, true, NULL);

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.psr_log_message']) ? $this->services['monolog.processor.psr_log_message'] : ($this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor())) && false ?: '_'});
        $instance->setFormatter(${($_ = isset($this->services['json_formatter']) ? $this->services['json_formatter'] : ($this->services['json_formatter'] = new \Codeages\Biz\Framework\Util\ReadableJsonFormatter())) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.trace_processor']) ? $this->services['monolog.processor.trace_processor'] : ($this->services['monolog.processor.trace_processor'] = new \AppBundle\Processor\TraceProcessor())) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.firephp']) ? $this->services['monolog.handler.firephp'] : $this->getMonolog_Handler_FirephpService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.trace_processor']) ? $this->services['monolog.processor.trace_processor'] : ($this->services['monolog.processor.trace_processor'] = new \AppBundle\Processor\TraceProcessor())) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.firephp']) ? $this->services['monolog.handler.firephp'] : $this->getMonolog_Handler_FirephpService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.trace_processor']) ? $this->services['monolog.processor.trace_processor'] : ($this->services['monolog.processor.trace_processor'] = new \AppBundle\Processor\TraceProcessor())) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.firephp']) ? $this->services['monolog.handler.firephp'] : $this->getMonolog_Handler_FirephpService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.trace_processor']) ? $this->services['monolog.processor.trace_processor'] : ($this->services['monolog.processor.trace_processor'] = new \AppBundle\Processor\TraceProcessor())) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.firephp']) ? $this->services['monolog.handler.firephp'] : $this->getMonolog_Handler_FirephpService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['monolog.processor.trace_processor']) ? $this->services['monolog.processor.trace_processor'] : ($this->services['monolog.processor.trace_processor'] = new \AppBundle\Processor\TraceProcessor())) && false ?: '_'});
        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : ($this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.firephp']) ? $this->services['monolog.handler.firephp'] : $this->getMonolog_Handler_FirephpService()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.processor.psr_log_message' shared service.
     *
     * @return \Monolog\Processor\PsrLogMessageProcessor
     */
    protected function getMonolog_Processor_PsrLogMessageService()
    {
        return $this->services['monolog.processor.psr_log_message'] = new \Monolog\Processor\PsrLogMessageProcessor();
    }

    /**
     * Gets the private 'monolog.processor.trace_processor' shared service.
     *
     * @return \AppBundle\Processor\TraceProcessor
     */
    protected function getMonolog_Processor_TraceProcessorService()
    {
        return $this->services['monolog.processor.trace_processor'] = new \AppBundle\Processor\TraceProcessor();
    }

    /**
     * Gets the private 'permission.twig.permission_extension' shared service.
     *
     * @return \AppBundle\Twig\PermissionExtension
     */
    protected function getPermission_Twig_PermissionExtensionService()
    {
        return $this->services['permission.twig.permission_extension'] = new \AppBundle\Twig\PermissionExtension($this);
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->getProfilerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : ($this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, $this->targetDirs[4], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.dao.main']) ? $this->services['security.authentication.provider.dao.main'] : $this->load('getSecurity_Authentication_Provider_Dao_MainService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.authentication.provider.rememberme.main']) ? $this->services['security.authentication.provider.rememberme.main'] : $this->load('getSecurity_Authentication_Provider_Rememberme_MainService.php')) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : ($this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash')))) && false ?: '_'};
        }, 3), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(['security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->load('getSecurity_Firewall_Map_Context_DevService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.disabled' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.disabled']) ? $this->services['security.firewall.map.context.disabled'] : $this->load('getSecurity_Firewall_Map_Context_DisabledService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->load('getSecurity_Firewall_Map_Context_MainService.php')) && false ?: '_'};
        }]), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.zfhj2lw']) ? $this->services['security.request_matcher.zfhj2lw'] : ($this->services['security.request_matcher.zfhj2lw'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/'))) && false ?: '_'};
            yield 'security.firewall.map.context.disabled' => ${($_ = isset($this->services['security.request_matcher.mw0s1ky']) ? $this->services['security.request_matcher.mw0s1ky'] : ($this->services['security.request_matcher.mw0s1ky'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(anon|callback|api)/'))) && false ?: '_'};
            yield 'security.firewall.map.context.main' => ${($_ = isset($this->services['security.request_matcher.olatxmb']) ? $this->services['security.request_matcher.olatxmb'] : ($this->services['security.request_matcher.olatxmb'] = new \Symfony\Component\HttpFoundation\RequestMatcher('/.*'))) && false ?: '_'};
        }, 3));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        $this->services['security.logout_url_generator'] = $instance = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'});

        $instance->registerListener('main', 'logout', 'logout', '_csrf_token', NULL, NULL);

        return $instance;
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy($this->parameters['security.role_hierarchy.roles']);
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(NULL, new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : ($this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken'))) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->getSecurity_RoleHierarchyService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : ($this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage())) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(['session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load('getSessionService.php')) && false ?: '_'};
        }]));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'templating.name_parser' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser
     */
    protected function getTemplating_NameParserService()
    {
        return $this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'});
    }

    /**
     * Gets the private 'topxia.twig.cache_extension' shared service.
     *
     * @return \Asm89\Twig\CacheExtension\Extension
     */
    protected function getTopxia_Twig_CacheExtensionService()
    {
        return $this->services['topxia.twig.cache_extension'] = new \Asm89\Twig\CacheExtension\Extension(${($_ = isset($this->services['topxia.twig.cache_strategy']) ? $this->services['topxia.twig.cache_strategy'] : $this->getTopxia_Twig_CacheStrategyService()) && false ?: '_'});
    }

    /**
     * Gets the private 'topxia.twig.cache_provider' shared service.
     *
     * @return \Asm89\Twig\CacheExtension\CacheProvider\DoctrineCacheAdapter
     */
    protected function getTopxia_Twig_CacheProviderService()
    {
        return $this->services['topxia.twig.cache_provider'] = new \Asm89\Twig\CacheExtension\CacheProvider\DoctrineCacheAdapter(${($_ = isset($this->services['topxia.twig.file_cache']) ? $this->services['topxia.twig.file_cache'] : ($this->services['topxia.twig.file_cache'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/twig_cache')))) && false ?: '_'});
    }

    /**
     * Gets the private 'topxia.twig.cache_strategy' shared service.
     *
     * @return \AppBundle\Twig\LifetimeCacheStrategy
     */
    protected function getTopxia_Twig_CacheStrategyService()
    {
        return $this->services['topxia.twig.cache_strategy'] = new \AppBundle\Twig\LifetimeCacheStrategy(${($_ = isset($this->services['biz']) ? $this->services['biz'] : $this->getBizService()) && false ?: '_'}, ${($_ = isset($this->services['topxia.twig.cache_provider']) ? $this->services['topxia.twig.cache_provider'] : $this->getTopxia_Twig_CacheProviderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'topxia.twig.file_cache' shared service.
     *
     * @return \Doctrine\Common\Cache\FilesystemCache
     */
    protected function getTopxia_Twig_FileCacheService()
    {
        return $this->services['topxia.twig.file_cache'] = new \Doctrine\Common\Cache\FilesystemCache(($this->targetDirs[0].'/twig_cache'));
    }

    /**
     * Gets the private 'translator.default' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Translation\Translator
     */
    protected function getTranslator_DefaultService()
    {
        $this->services['translator.default'] = $instance = new \Symfony\Bundle\FrameworkBundle\Translation\Translator(new \Symfony\Component\DependencyInjection\ServiceLocator(['translation.loader.csv' => function () {
            return ${($_ = isset($this->services['translation.loader.csv']) ? $this->services['translation.loader.csv'] : ($this->services['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())) && false ?: '_'};
        }, 'translation.loader.dat' => function () {
            return ${($_ = isset($this->services['translation.loader.dat']) ? $this->services['translation.loader.dat'] : ($this->services['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())) && false ?: '_'};
        }, 'translation.loader.ini' => function () {
            return ${($_ = isset($this->services['translation.loader.ini']) ? $this->services['translation.loader.ini'] : ($this->services['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())) && false ?: '_'};
        }, 'translation.loader.json' => function () {
            return ${($_ = isset($this->services['translation.loader.json']) ? $this->services['translation.loader.json'] : ($this->services['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())) && false ?: '_'};
        }, 'translation.loader.mo' => function () {
            return ${($_ = isset($this->services['translation.loader.mo']) ? $this->services['translation.loader.mo'] : ($this->services['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())) && false ?: '_'};
        }, 'translation.loader.php' => function () {
            return ${($_ = isset($this->services['translation.loader.php']) ? $this->services['translation.loader.php'] : ($this->services['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())) && false ?: '_'};
        }, 'translation.loader.po' => function () {
            return ${($_ = isset($this->services['translation.loader.po']) ? $this->services['translation.loader.po'] : ($this->services['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())) && false ?: '_'};
        }, 'translation.loader.qt' => function () {
            return ${($_ = isset($this->services['translation.loader.qt']) ? $this->services['translation.loader.qt'] : ($this->services['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())) && false ?: '_'};
        }, 'translation.loader.res' => function () {
            return ${($_ = isset($this->services['translation.loader.res']) ? $this->services['translation.loader.res'] : ($this->services['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())) && false ?: '_'};
        }, 'translation.loader.xliff' => function () {
            return ${($_ = isset($this->services['translation.loader.xliff']) ? $this->services['translation.loader.xliff'] : ($this->services['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader())) && false ?: '_'};
        }, 'translation.loader.yml' => function () {
            return ${($_ = isset($this->services['translation.loader.yml']) ? $this->services['translation.loader.yml'] : ($this->services['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader())) && false ?: '_'};
        }]), new \Symfony\Component\Translation\Formatter\MessageFormatter(new \Symfony\Component\Translation\MessageSelector()), 'zh_CN', ['translation.loader.php' => [0 => 'php'], 'translation.loader.yml' => [0 => 'yaml', 1 => 'yml'], 'translation.loader.xliff' => [0 => 'xlf', 1 => 'xliff'], 'translation.loader.po' => [0 => 'po'], 'translation.loader.mo' => [0 => 'mo'], 'translation.loader.qt' => [0 => 'ts'], 'translation.loader.csv' => [0 => 'csv'], 'translation.loader.res' => [0 => 'res'], 'translation.loader.dat' => [0 => 'dat'], 'translation.loader.ini' => [0 => 'ini'], 'translation.loader.json' => [0 => 'json']], ['cache_dir' => ($this->targetDirs[0].'/translations'), 'debug' => true, 'resource_files' => ['af' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.af.xlf')], 'ar' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ar.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ar.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ar.xlf')], 'az' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.az.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.az.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.az.xlf')], 'be' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.be.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.be.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.be.xlf')], 'bg' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.bg.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.bg.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.bg.xlf')], 'ca' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ca.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ca.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ca.xlf')], 'cs' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cs.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.cs.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.cs.xlf')], 'cy' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.cy.xlf')], 'da' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.da.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.da.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.da.xlf')], 'de' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.de.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.de.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.de.xlf')], 'el' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.el.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.el.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.el.xlf')], 'en' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.en.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.en.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.en.xlf'), 3 => ($this->targetDirs[4].'/src/AppBundle/Resources/translations/messages.en.yml'), 4 => ($this->targetDirs[4].'/src/ApiBundle/Resources/translations/messages.en.yml'), 5 => ($this->targetDirs[3].'/Resources/translations/js.en.yml'), 6 => ($this->targetDirs[3].'/Resources/translations/menu.en.yml'), 7 => ($this->targetDirs[3].'/Resources/translations/messages.en.yml'), 8 => ($this->targetDirs[4].'/web/activities/audio/resources/translations/messages.en.yml')], 'es' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.es.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.es.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.es.xlf')], 'et' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.et.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.et.xlf')], 'eu' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.eu.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.eu.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.eu.xlf')], 'fa' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fa.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fa.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fa.xlf')], 'fi' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fi.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fi.xlf')], 'fr' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.fr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.fr.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.fr.xlf')], 'gl' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.gl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.gl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.gl.xlf')], 'he' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.he.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.he.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.he.xlf')], 'hr' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hr.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hr.xlf')], 'hu' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hu.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hu.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.hu.xlf')], 'hy' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.hy.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.hy.xlf')], 'id' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.id.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.id.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.id.xlf')], 'it' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.it.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.it.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.it.xlf')], 'ja' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ja.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ja.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ja.xlf')], 'lb' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lb.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lb.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lb.xlf')], 'lt' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lt.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lt.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lt.xlf')], 'lv' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.lv.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.lv.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.lv.xlf')], 'mn' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.mn.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.mn.xlf')], 'nb' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nb.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nb.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nb.xlf')], 'nl' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nl.xlf')], 'nn' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.nn.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.nn.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.nn.xlf')], 'no' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.no.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.no.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.no.xlf')], 'pl' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pl.xlf')], 'pt' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt.xlf')], 'pt_BR' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.pt_BR.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.pt_BR.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_BR.xlf')], 'ro' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ro.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ro.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ro.xlf')], 'ru' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.ru.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.ru.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.ru.xlf')], 'sk' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sk.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sk.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sk.xlf')], 'sl' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sl.xlf')], 'sq' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sq.xlf')], 'sr_Cyrl' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Cyrl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Cyrl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Cyrl.xlf')], 'sr_Latn' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sr_Latn.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sr_Latn.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sr_Latn.xlf')], 'sv' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.sv.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.sv.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.sv.xlf')], 'th' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.th.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.th.xlf')], 'tl' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tl.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tl.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tl.xlf')], 'tr' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.tr.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.tr.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.tr.xlf')], 'uk' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.uk.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.uk.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.uk.xlf')], 'vi' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.vi.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.vi.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.vi.xlf')], 'zh_CN' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_CN.xlf'), 1 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/translations/validators.zh_CN.xlf'), 2 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.zh_CN.xlf'), 3 => ($this->targetDirs[4].'/src/ApiBundle/Resources/translations/messages.zh_CN.yml'), 4 => ($this->targetDirs[3].'/Resources/translations/js.zh_CN.yml'), 5 => ($this->targetDirs[3].'/Resources/translations/menu.zh_CN.yml'), 6 => ($this->targetDirs[3].'/Resources/translations/messages.zh_CN.yml'), 7 => ($this->targetDirs[4].'/web/activities/audio/resources/translations/messages.zh_CN.yml')], 'zh_TW' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Resources/translations/validators.zh_TW.xlf')], 'pt_PT' => [0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Resources/translations/security.pt_PT.xlf')], 'html' => [0 => ($this->targetDirs[4].'/web/themes/jianmo/views/script/script-custom.html.twig')]]]);

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});
        $instance->setFallbackLocales([0 => 'zh_CN']);

        return $instance;
    }

    /**
     * Gets the private 'translator_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\TranslatorListener
     */
    protected function getTranslatorListenerService()
    {
        return $this->services['translator_listener'] = new \Symfony\Component\HttpKernel\EventListener\TranslatorListener(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())) && false ?: '_'});
    }

    /**
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Twig\Loader\ChainLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Twig\Loader\ChainLoader();

        $a = new \Symfony\Bundle\TwigBundle\Loader\FilesystemLoader(${($_ = isset($this->services['codeages_plugin.theme.templating.locator']) ? $this->services['codeages_plugin.theme.templating.locator'] : $this->getCodeagesPlugin_Theme_Templating_LocatorService()) && false ?: '_'}, ${($_ = isset($this->services['templating.name_parser']) ? $this->services['templating.name_parser'] : ($this->services['templating.name_parser'] = new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'}, $this->targetDirs[4]);
        $a->addPath(($this->targetDirs[3].'/../web/customize'), 'customize');
        $a->addPath(($this->targetDirs[3].'/../src/Topxia/WebBundle/Resources/views'), 'topxiaweb');
        $a->addPath(($this->targetDirs[3].'/../web/themes'), 'theme');
        $a->addPath(($this->targetDirs[3].'/../plugins'), 'plugins');
        $a->addPath(($this->targetDirs[3].'/../'), 'root');
        $a->addPath(($this->targetDirs[3].'/../web/activities'), 'activity');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '!Framework');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '!Security');
        $a->addPath(($this->targetDirs[3].'/Resources/TwigBundle/views'), 'Twig');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '!Twig');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $a->addPath(($this->targetDirs[4].'/src/Topxia/WebBundle/Resources/views'), 'TopxiaWeb');
        $a->addPath(($this->targetDirs[4].'/src/Topxia/WebBundle/Resources/views'), '!TopxiaWeb');
        $a->addPath(($this->targetDirs[4].'/src/Topxia/MobileBundleV2/Resources/views'), 'TopxiaMobileBundleV2');
        $a->addPath(($this->targetDirs[4].'/src/Topxia/MobileBundleV2/Resources/views'), '!TopxiaMobileBundleV2');
        $a->addPath(($this->targetDirs[4].'/vendor/willdurand/js-translation-bundle/Resources/views'), 'BazingaJsTranslation');
        $a->addPath(($this->targetDirs[4].'/vendor/willdurand/js-translation-bundle/Resources/views'), '!BazingaJsTranslation');
        $a->addPath(($this->targetDirs[4].'/vendor/bshaffer/oauth2-server-bundle/OAuth2/ServerBundle/Resources/views'), 'OAuth2Server');
        $a->addPath(($this->targetDirs[4].'/vendor/bshaffer/oauth2-server-bundle/OAuth2/ServerBundle/Resources/views'), '!OAuth2Server');
        $a->addPath(($this->targetDirs[4].'/src/CustomBundle/Resources/views'), 'App');
        $a->addPath(($this->targetDirs[4].'/src/CustomBundle/Resources/views'), 'Custom');
        $a->addPath(($this->targetDirs[4].'/src/ApiBundle/Resources/views'), 'Api');
        $a->addPath(($this->targetDirs[4].'/src/ApiBundle/Resources/views'), '!Api');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '!WebProfiler');
        $a->addPath(($this->targetDirs[3].'/Resources/views'));
        $a->addPath(($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        $instance->addLoader(${($_ = isset($this->services['codeages_plugin.theme.twig_loader']) ? $this->services['codeages_plugin.theme.twig_loader'] : ($this->services['codeages_plugin.theme.twig_loader'] = new \Codeages\PluginBundle\Loader\ThemeTwigLoader(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel', 1)) && false ?: '_'}))) && false ?: '_'});
        $instance->addLoader($a);

        return $instance;
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(['Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : ($this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false))) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : ($this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator())) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load('getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : ($this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator())) && false ?: '_'};
        }])));
        if ($this->has('translator')) {
            $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
        }
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings([0 => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')]);
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers([]);

        return $instance;
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, '^/((index|app(_[\\w]+)?)\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = [
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'biz_config' => false,
        'doctrine.config_paths' => false,
        'edusoho.activities_dir' => false,
        'topxia.disk.local_directory' => false,
        'topxia.disk.upgrade_dir' => false,
        'topxia.disk.update_dir' => false,
        'topxia.disk.backup_dir' => false,
        'topxia.upload.public_directory' => false,
        'topxia.upload.private_directory' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'translator.default_path' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'router.resource' => false,
        'twig.default_path' => false,
        'assetic.cache_dir' => false,
        'assetic.read_from' => false,
        'assetic.write_to' => false,
    ];
    private $dynamicParameters = [];

    /**
     * Computes a dynamic parameter.
     *
     * @param string $name The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.project_dir': $value = $this->targetDirs[4]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[3].'/logs'); break;
            case 'kernel.bundles_metadata': $value = [
                'FrameworkBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ],
                'SecurityBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ],
                'TwigBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ],
                'MonologBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ],
                'SwiftmailerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ],
                'SensioFrameworkExtraBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ],
                'EndroidQrCodeBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/endroid/qrcode/src/Bundle'),
                    'namespace' => 'Endroid\\QrCode\\Bundle',
                ],
                'TopxiaWebBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/Topxia/WebBundle'),
                    'namespace' => 'Topxia\\WebBundle',
                ],
                'TopxiaAdminBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/Topxia/AdminBundle'),
                    'namespace' => 'Topxia\\AdminBundle',
                ],
                'TopxiaMobileBundleV2' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/Topxia/MobileBundleV2'),
                    'namespace' => 'Topxia\\MobileBundleV2',
                ],
                'BazingaJsTranslationBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/willdurand/js-translation-bundle'),
                    'namespace' => 'Bazinga\\Bundle\\JsTranslationBundle',
                ],
                'OAuth2ServerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/bshaffer/oauth2-server-bundle/OAuth2/ServerBundle'),
                    'namespace' => 'OAuth2\\ServerBundle',
                ],
                'CodeagesPluginBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/codeages/plugin-bundle'),
                    'namespace' => 'Codeages\\PluginBundle',
                ],
                'AppBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ],
                'CustomBundle' => [
                    'parent' => 'AppBundle',
                    'path' => ($this->targetDirs[4].'/src/CustomBundle'),
                    'namespace' => 'CustomBundle',
                ],
                'ApiBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/src/ApiBundle'),
                    'namespace' => 'ApiBundle',
                ],
                'AsseticBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/assetic-bundle'),
                    'namespace' => 'Symfony\\Bundle\\AsseticBundle',
                ],
                'WebProfilerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ],
                'WebServerBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/symfony/symfony/src/Symfony/Bundle/WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ],
                'SensioDistributionBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ],
                'SensioGeneratorBundle' => [
                    'parent' => NULL,
                    'path' => ($this->targetDirs[4].'/vendor/sensio/generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ],
            ]; break;
            case 'biz_config': $value = [
                'debug' => true,
                'db.options' => [
                    'dbname' => 'edusoho',
                    'user' => 'root',
                    'password' => 123456,
                    'host' => '127.0.0.1',
                    'port' => 3306,
                    'driver' => 'pdo_mysql',
                    'charset' => 'UTF8',
                ],
                'root_directory' => ($this->targetDirs[3].'/../'),
                'cache_directory' => $this->targetDirs[0],
                'log_directory' => ($this->targetDirs[3].'/logs'),
                'kernel.root_dir' => $this->targetDirs[3],
                'plugin.directory' => ($this->targetDirs[3].'/../plugins'),
                'theme.directory' => ($this->targetDirs[3].'/../web/themes'),
                'topxia.upload.public_url_path' => '/files',
                'topxia.web_themes_url_path' => '/themes',
                'front_end.web_static_dist_url_path' => '/static-dist',
                'topxia.web_assets_url_path' => '/assets',
                'topxia.web_bundles_url_path' => '/bundles',
                'topxia.disk.local_directory' => ($this->targetDirs[3].'/data/udisk'),
                'topxia.disk.backup_dir' => ($this->targetDirs[3].'/data/backup'),
                'topxia.disk.update_dir' => ($this->targetDirs[3].'/data/upgrade'),
                'topxia.upload.public_directory' => ($this->targetDirs[3].'/../web/files'),
                'topxia.upload.private_directory' => ($this->targetDirs[3].'/data/private_files'),
                'plugin.config_file' => ($this->targetDirs[3].'/config/plugin_installed.php'),
                'service_proxy_enabled' => true,
                'run_dir' => ($this->targetDirs[3].'/run'),
                'cache_dir' => $this->targetDirs[0],
            ]; break;
            case 'doctrine.config_paths': $value = [
                ($this->targetDirs[3].'/../vendor/bshaffer/oauth2-server-bundle/OAuth2/ServerBundle/Resources/config/doctrine') => 'OAuth2\\ServerBundle\\Entity',
            ]; break;
            case 'edusoho.activities_dir': $value = ($this->targetDirs[3].'/../web/activities'); break;
            case 'topxia.disk.local_directory': $value = ($this->targetDirs[3].'/data/udisk'); break;
            case 'topxia.disk.upgrade_dir': $value = ($this->targetDirs[3].'/data/upgrade'); break;
            case 'topxia.disk.update_dir': $value = ($this->targetDirs[3].'/data/upgrade'); break;
            case 'topxia.disk.backup_dir': $value = ($this->targetDirs[3].'/data/backup'); break;
            case 'topxia.upload.public_directory': $value = ($this->targetDirs[3].'/../web/files'); break;
            case 'topxia.upload.private_directory': $value = ($this->targetDirs[3].'/data/private_files'); break;
            case 'session.save_path': $value = ($this->targetDirs[0].'/sessions'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'translator.default_path': $value = ($this->targetDirs[4].'/translations'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/appDevDebugProjectContainer.xml'); break;
            case 'router.resource': $value = ($this->targetDirs[0].'/assetic/routing.yml'); break;
            case 'twig.default_path': $value = ($this->targetDirs[4].'/templates'); break;
            case 'assetic.cache_dir': $value = ($this->targetDirs[0].'/assetic'); break;
            case 'assetic.read_from': $value = ($this->targetDirs[3].'/../web'); break;
            case 'assetic.write_to': $value = ($this->targetDirs[3].'/../web'); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = [];

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return [
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.bundles' => [
                'FrameworkBundle' => 'Codeages\\PluginBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'EndroidQrCodeBundle' => 'Endroid\\QrCode\\Bundle\\EndroidQrCodeBundle',
                'TopxiaWebBundle' => 'Topxia\\WebBundle\\TopxiaWebBundle',
                'TopxiaAdminBundle' => 'Topxia\\AdminBundle\\TopxiaAdminBundle',
                'TopxiaMobileBundleV2' => 'Topxia\\MobileBundleV2\\TopxiaMobileBundleV2',
                'BazingaJsTranslationBundle' => 'Bazinga\\Bundle\\JsTranslationBundle\\BazingaJsTranslationBundle',
                'OAuth2ServerBundle' => 'OAuth2\\ServerBundle\\OAuth2ServerBundle',
                'CodeagesPluginBundle' => 'Codeages\\PluginBundle\\CodeagesPluginBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'CustomBundle' => 'CustomBundle\\CustomBundle',
                'ApiBundle' => 'ApiBundle\\ApiBundle',
                'AsseticBundle' => 'Symfony\\Bundle\\AsseticBundle\\AsseticBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
            ],
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'biz_db_options' => [
                'dbname' => 'edusoho',
                'user' => 'root',
                'password' => 123456,
                'host' => '127.0.0.1',
                'port' => 3306,
                'driver' => 'pdo_mysql',
                'charset' => 'UTF8',
            ],
            'session.service_id' => 'session.handler.pdo',
            'cookie_domain' => NULL,
            'role_hierarchy' => [
                'ROLE_TEACHER' => 'ROLE_USER',
                'ROLE_BACKEND' => 'ROLE_USER',
                'ROLE_ADMIN' => [
                    0 => 'ROLE_TEACHER',
                    1 => 'ROLE_BACKEND',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ],
            ],
            'security_disabled_uri_prefixs' => [
                0 => 'anon',
                1 => 'callback',
                2 => 'api',
            ],
            'route_white_list' => [
                0 => '/crontab',
                1 => '/passport/notify',
                2 => '/oauth/v2/token',
                3 => '/oauth/token',
                4 => '/login/oauth/access_token',
                5 => '/uploader/upload_callback',
                6 => '/uploader/process_callback',
                7 => '/coin/pay/return/alipay',
                8 => '/coin/pay/notify/alipay',
                9 => '/coin/pay/notify/wxpay',
                10 => '/pay/center/pay/alipay/return',
                11 => '/pay/center/pay/wxpay/notify',
                12 => '/pay/center/pay/alipay/notify',
                13 => '/live/verify',
                14 => '/course/order/pay/alipay/notify',
                15 => '/vip/pay_notify/alipay',
                16 => '/uploadfile/upload',
                17 => '/disk/upload',
                18 => '/file/upload',
                19 => '/editor/upload',
                20 => '/disk/convert/callback',
                21 => '/partner/discuz/api/notify',
                22 => '/live/auth',
                23 => '/edu_cloud/sms_callback',
                24 => '/bddServer/callback',
                25 => '/pay/center/pay/llpay/return',
                26 => '/pay/center/pay/llpay/notify',
                27 => '/cashier/wechat/notify',
            ],
            'qrcode_protocol_whitelist_default' => [
                0 => 'weixin',
                1 => 'alipays',
            ],
            'app_version' => '8.7.15',
            'database_driver' => 'pdo_mysql',
            'database_host' => '127.0.0.1',
            'database_port' => 3306,
            'database_name' => 'edusoho',
            'database_user' => 'root',
            'database_password' => 123456,
            'locale' => 'zh_CN',
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'theme_jianmo_name' => '简墨',
            'theme_jianmo_default' => [
                'maincolor' => 'default',
                'navigationcolor' => 'default',
                'blocks' => [
                    'left' => [
                        0 => [
                            'title' => '',
                            'count' => '12',
                            'orderBy' => 'latest',
                            'background' => '',
                            'categoryId' => 0,
                            'code' => 'course-grid-with-condition-index',
                            'categoryCount' => '4',
                            'defaultTitle' => '网校课程',
                            'subTitle' => '',
                            'defaultSubTitle' => '精选网校课程，满足你的学习兴趣。',
                            'id' => 'latestCourse',
                        ],
                        1 => [
                            'title' => '',
                            'count' => '4',
                            'categoryId' => '',
                            'code' => 'live-course',
                            'defaultTitle' => '近期直播',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '实时跟踪直播课程，避免课程遗漏。',
                            'id' => 'RecentLiveCourses',
                        ],
                        2 => [
                            'title' => '',
                            'count' => '',
                            'code' => 'middle-banner',
                            'defaultTitle' => '首页中部.横幅',
                            'id' => 'middle-banner',
                        ],
                        3 => [
                            'title' => '',
                            'count' => '4',
                            'code' => 'recommend-classroom',
                            'defaultTitle' => '推荐班级',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '班级化学习体系，给你更多的课程相关服务。',
                            'id' => 'RecommendClassrooms',
                        ],
                        4 => [
                            'title' => '',
                            'count' => '6',
                            'code' => 'groups',
                            'defaultTitle' => '动态',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '参与小组，结交更多同学，关注课程动态。',
                            'select1' => 'checked',
                            'select2' => 'checked',
                            'select3' => '',
                            'select4' => '',
                            'id' => 'hotGroups',
                        ],
                        5 => [
                            'title' => '',
                            'count' => '4',
                            'categoryId' => '',
                            'code' => 'recommend-teacher',
                            'defaultTitle' => '推荐教师',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '名师汇集，保证教学质量与学习效果。',
                            'id' => 'RecommendTeachers',
                        ],
                        6 => [
                            'title' => '',
                            'count' => '',
                            'code' => 'friend-link',
                            'defaultTitle' => '友情链接',
                            'id' => 'friendLink',
                        ],
                        7 => [
                            'title' => '',
                            'count' => '',
                            'code' => 'footer-link',
                            'defaultTitle' => '底部链接',
                            'id' => 'footerLink',
                        ],
                    ],
                ],
                'bottom' => 'simple',
            ],
            'theme_jianmo_all' => [
                'maincolor' => 'default',
                'navigationcolor' => 'default',
                'blocks' => [
                    'left' => [
                        0 => [
                            'title' => '',
                            'count' => '12',
                            'orderBy' => 'latest',
                            'background' => '',
                            'categoryId' => 0,
                            'code' => 'course-grid-with-condition-index',
                            'categoryCount' => '4',
                            'defaultTitle' => '网校课程',
                            'subTitle' => '',
                            'defaultSubTitle' => '精选网校课程，满足你的学习兴趣。',
                            'id' => 'latestCourse',
                        ],
                        1 => [
                            'title' => '',
                            'count' => '12',
                            'orderBy' => 'latest',
                            'background' => '',
                            'categoryId' => 0,
                            'code' => 'open-course',
                            'categoryCount' => '4',
                            'defaultTitle' => '公开课',
                            'subTitle' => '',
                            'defaultSubTitle' => '公开课。',
                            'id' => 'latestOpenCourse',
                        ],
                        2 => [
                            'title' => '',
                            'count' => '4',
                            'categoryId' => '',
                            'code' => 'live-course',
                            'defaultTitle' => '近期直播',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '实时跟踪直播课程，避免课程遗漏。',
                            'id' => 'RecentLiveCourses',
                        ],
                        3 => [
                            'title' => '',
                            'count' => '',
                            'code' => 'middle-banner',
                            'defaultTitle' => '首页中部.横幅',
                            'id' => 'middle-banner',
                        ],
                        4 => [
                            'title' => '',
                            'count' => '4',
                            'code' => 'recommend-classroom',
                            'defaultTitle' => '推荐班级',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '班级化学习体系，给你更多的课程相关服务。',
                            'id' => 'RecommendClassrooms',
                        ],
                        5 => [
                            'title' => '',
                            'count' => '',
                            'code' => 'advertisement-banner',
                            'defaultTitle' => '中部广告',
                            'id' => 'advertisement-banner',
                        ],
                        6 => [
                            'title' => '',
                            'count' => '6',
                            'code' => 'groups',
                            'defaultTitle' => '动态',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '参与小组，结交更多同学，关注课程动态。',
                            'select1' => 'checked',
                            'select2' => 'checked',
                            'select3' => '',
                            'select4' => '',
                            'id' => 'hotGroups',
                        ],
                        7 => [
                            'title' => '',
                            'count' => '4',
                            'categoryId' => '',
                            'code' => 'recommend-teacher',
                            'defaultTitle' => '推荐教师',
                            'subTitle' => '',
                            'background' => '',
                            'defaultSubTitle' => '名师汇集，保证教学质量与学习效果。',
                            'id' => 'RecommendTeachers',
                        ],
                        8 => [
                            'title' => '',
                            'count' => '',
                            'code' => 'friend-link',
                            'defaultTitle' => '友情链接',
                            'id' => 'friendLink',
                        ],
                        9 => [
                            'title' => '',
                            'count' => '',
                            'code' => 'footer-link',
                            'defaultTitle' => '底部链接',
                            'id' => 'footerLink',
                        ],
                    ],
                ],
                'bottom' => 'simple',
            ],
            'app.locales' => 'en|zh_CN',
            'topxia.upload.public_url_path' => '/files',
            'topxia.web_themes_url_path' => '/themes',
            'topxia.web_assets_url_path' => '/assets',
            'topxia.web_bundles_url_path' => '/bundles',
            'front_end.web_static_dist_url_path' => '/static-dist',
            'permission.path_regular_expression' => [
                0 => '/^\\/admin/',
            ],
            'router.options.matcher_dumper_class' => 'AppBundle\\SfExtend\\PhpMatcherDumper',
            'security.authentication.provider.dao.class' => 'AppBundle\\Handler\\AuthenticationProvider',
            'service_proxy_enabled' => true,
            'fragment.renderer.hinclude.global_template' => NULL,
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => [

            ],
            'kernel.default_locale' => 'zh_CN',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => [
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
            ],
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'templating.loader.cache.path' => NULL,
            'templating.engines' => [
                0 => 'twig',
            ],
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'translator.logging' => false,
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => [
                'ROLE_TEACHER' => [
                    0 => 'ROLE_USER',
                ],
                'ROLE_BACKEND' => [
                    0 => 'ROLE_USER',
                ],
                'ROLE_ADMIN' => [
                    0 => 'ROLE_TEACHER',
                    1 => 'ROLE_BACKEND',
                ],
                'ROLE_SUPER_ADMIN' => [
                    0 => 'ROLE_ADMIN',
                    1 => 'ROLE_ALLOWED_TO_SWITCH',
                ],
            ],
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => [
                0 => 'form_div_layout.html.twig',
            ],
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => [

            ],
            'monolog.handlers_to_channels' => [
                'monolog.handler.firephp' => NULL,
                'monolog.handler.main' => NULL,
            ],
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => 'localhost',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => false,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => false,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => [
                'default' => 'swiftmailer.mailer.default',
            ],
            'swiftmailer.default_mailer' => 'default',
            'bazinga.jstranslation.translation_finder.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Finder\\TranslationFinder',
            'bazinga.jstranslation.translation_dumper.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Dumper\\TranslationDumper',
            'bazinga.jstranslation.controller.class' => 'Bazinga\\Bundle\\JsTranslationBundle\\Controller\\Controller',
            'oauth2.server.class' => 'OAuth2\\Server',
            'oauth2.request.class' => 'OAuth2\\HttpFoundationBridge\\Request',
            'oauth2.request_factory.class' => 'OAuth2\\HttpFoundationBridge\\Request',
            'oauth2.response.class' => 'OAuth2\\HttpFoundationBridge\\Response',
            'oauth2.storage.client_credentials.class' => 'OAuth2\\ServerBundle\\Storage\\ClientCredentials',
            'oauth2.storage.access_token.class' => 'OAuth2\\ServerBundle\\Storage\\AccessToken',
            'oauth2.storage.authorization_code.class' => 'OAuth2\\ServerBundle\\Storage\\AuthorizationCode',
            'oauth2.storage.user_credentials.class' => 'OAuth2\\ServerBundle\\Storage\\UserCredentials',
            'oauth2.storage.refresh_token.class' => 'OAuth2\\ServerBundle\\Storage\\RefreshToken',
            'oauth2.storage.scope.class' => 'OAuth2\\ServerBundle\\Storage\\Scope',
            'oauth2.storage.public_key.class' => 'OAuth2\\Storage\\Memory',
            'oauth2.storage.user_claims.class' => 'OAuth2\\Storage\\Memory',
            'oauth2.grant_type.client_credentials.class' => 'OAuth2\\GrantType\\ClientCredentials',
            'oauth2.grant_type.authorization_code.class' => 'OAuth2\\GrantType\\AuthorizationCode',
            'oauth2.grant_type.refresh_token.class' => 'OAuth2\\GrantType\\RefreshToken',
            'oauth2.grant_type.user_credentials.class' => 'OAuth2\\GrantType\\UserCredentials',
            'oauth2.user_provider.class' => 'Biz\\User\\UserProvider',
            'oauth2.client_manager.class' => 'OAuth2\\ServerBundle\\Manager\\ClientManager',
            'oauth2.scope_manager.class' => 'OAuth2\\ServerBundle\\Manager\\ScopeManager',
            'oauth2.server.config' => [

            ],
            'assetic.asset_factory.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\AssetFactory',
            'assetic.asset_manager.class' => 'Assetic\\Factory\\LazyAssetManager',
            'assetic.asset_manager_cache_warmer.class' => 'Symfony\\Bundle\\AsseticBundle\\CacheWarmer\\AssetManagerCacheWarmer',
            'assetic.cached_formula_loader.class' => 'Assetic\\Factory\\Loader\\CachedFormulaLoader',
            'assetic.config_cache.class' => 'Assetic\\Cache\\ConfigCache',
            'assetic.config_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\ConfigurationLoader',
            'assetic.config_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\ConfigurationResource',
            'assetic.coalescing_directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\CoalescingDirectoryResource',
            'assetic.directory_resource.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Resource\\DirectoryResource',
            'assetic.filter_manager.class' => 'Symfony\\Bundle\\AsseticBundle\\FilterManager',
            'assetic.worker.ensure_filter.class' => 'Assetic\\Factory\\Worker\\EnsureFilterWorker',
            'assetic.worker.cache_busting.class' => 'Assetic\\Factory\\Worker\\CacheBustingWorker',
            'assetic.value_supplier.class' => 'Symfony\\Bundle\\AsseticBundle\\DefaultValueSupplier',
            'assetic.node.paths' => [

            ],
            'assetic.bundles' => [
                0 => 'FrameworkBundle',
                1 => 'SecurityBundle',
                2 => 'TwigBundle',
                3 => 'MonologBundle',
                4 => 'SwiftmailerBundle',
                5 => 'SensioFrameworkExtraBundle',
                6 => 'EndroidQrCodeBundle',
                7 => 'TopxiaWebBundle',
                8 => 'TopxiaAdminBundle',
                9 => 'TopxiaMobileBundleV2',
                10 => 'BazingaJsTranslationBundle',
                11 => 'OAuth2ServerBundle',
                12 => 'CodeagesPluginBundle',
                13 => 'AppBundle',
                14 => 'CustomBundle',
                15 => 'ApiBundle',
                16 => 'AsseticBundle',
                17 => 'WebProfilerBundle',
                18 => 'WebServerBundle',
                19 => 'SensioDistributionBundle',
                20 => 'SensioGeneratorBundle',
            ],
            'assetic.twig_extension.class' => 'Symfony\\Bundle\\AsseticBundle\\Twig\\AsseticExtension',
            'assetic.twig_formula_loader.class' => 'Assetic\\Extension\\Twig\\TwigFormulaLoader',
            'assetic.helper.dynamic.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\DynamicAsseticHelper',
            'assetic.helper.static.class' => 'Symfony\\Bundle\\AsseticBundle\\Templating\\StaticAsseticHelper',
            'assetic.php_formula_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Loader\\AsseticHelperFormulaLoader',
            'assetic.debug' => true,
            'assetic.use_controller' => true,
            'assetic.enable_profiler' => false,
            'assetic.variables' => [

            ],
            'assetic.java.bin' => '/usr/bin/java',
            'assetic.node.bin' => '/usr/bin/node',
            'assetic.ruby.bin' => '/usr/bin/ruby',
            'assetic.sass.bin' => '/usr/bin/sass',
            'assetic.reactjsx.bin' => '/usr/bin/jsx',
            'assetic.twig_extension.functions' => [

            ],
            'assetic.controller.class' => 'Symfony\\Bundle\\AsseticBundle\\Controller\\AsseticController',
            'assetic.routing_loader.class' => 'Symfony\\Bundle\\AsseticBundle\\Routing\\AsseticLoader',
            'assetic.cache.class' => 'Assetic\\Cache\\FilesystemCache',
            'assetic.use_controller_worker.class' => 'Symfony\\Bundle\\AsseticBundle\\Factory\\Worker\\UseControllerWorker',
            'assetic.request_listener.class' => 'Symfony\\Bundle\\AsseticBundle\\EventListener\\RequestListener',
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => [
                'data_collector.request' => [
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ],
                'data_collector.time' => [
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ],
                'data_collector.memory' => [
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ],
                'data_collector.validator' => [
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ],
                'data_collector.ajax' => [
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ],
                'data_collector.form' => [
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ],
                'data_collector.exception' => [
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ],
                'data_collector.logger' => [
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ],
                'data_collector.events' => [
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ],
                'data_collector.router' => [
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ],
                'data_collector.cache' => [
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ],
                'data_collector.translation' => [
                    0 => 'translation',
                    1 => '@WebProfiler/Collector/translation.html.twig',
                ],
                'data_collector.security' => [
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ],
                'data_collector.twig' => [
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ],
                'swiftmailer.data_collector' => [
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ],
                'app.cloud_api_collector' => [
                    0 => 'app.cloud_api_collector',
                    1 => 'webprofiler/cloud-api.html.twig',
                ],
                'data_collector.config' => [
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ],
            ],
            'console.command.ids' => [
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_translationdebugcommand' => 'console.command.translation_debug',
                'console.command.symfony_bundle_frameworkbundle_command_translationupdatecommand' => 'console.command.translation_update',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.bazinga_bundle_jstranslationbundle_command_dumpcommand' => 'bazinga.jstranslation.dump_command',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'web_server.command.server_run',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'web_server.command.server_start',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'web_server.command.server_stop',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'web_server.command.server_status',
                'console.command.symfony_bundle_webserverbundle_command_serverlogcommand' => 'web_server.command.server_log',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            ],
            'console.lazy_command.ids' => [
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.translation_debug' => true,
                'console.command.translation_update' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'security.command.user_password_encoder' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'bazinga.jstranslation.dump_command' => true,
                'web_server.command.server_run' => true,
                'web_server.command.server_start' => true,
                'web_server.command.server_stop' => true,
                'web_server.command.server_status' => true,
                'web_server.command.server_log' => true,
                'sensio_distribution.security_checker.command' => true,
            ],
        ];
    }
}
