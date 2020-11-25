<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin-v2/script_boot.html.twig */
class __TwigTemplate_2289cf074d84e48ee0a3951f346b5e12c55b18427c4617b5ddd617890434267e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/script_boot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/script_boot.html.twig"));

        // line 1
        echo "<script>
  if (typeof app === 'undefined') {
    var app = {};
  }
  app.version = '";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("/"), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getSchemeAndHttpHost", [], "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->basePath(), "html", null, true);
        echo "';
  app.theme = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';

  ";
        // line 10
        $context["crontabNextExecutedTime"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getNextExecutedTime();
        // line 11
        echo "  ";
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.disable_web_crontab", 0) && (($context["crontabNextExecutedTime"] ?? $this->getContext($context, "crontabNextExecutedTime")) > 0))) {
            // line 12
            echo "    ";
            if ((twig_date_converter($this->env, twig_date_format_filter($this->env, ($context["crontabNextExecutedTime"] ?? $this->getContext($context, "crontabNextExecutedTime")), "Y-m-d H:i:s")) < twig_date_converter($this->env))) {
                // line 13
                echo "      app.scheduleCrontab = '";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("crontab_web");
                echo "';
    ";
            }
            // line 15
            echo "  ";
        }
        // line 16
        echo "
  var CLOUD_FILE_SERVER = \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_file_server", ""), "html", null, true);
        echo "\";

  app.config = ";
        // line 19
        echo twig_jsonencode_filter(["api" => ["weibo" => ["key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.weibo_key", "")], "qq" => ["key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.qq_key", "")], "douban" => ["key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.douban_key", "")], "renren" => ["key" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.renren_key", "")]], "loading_img_path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/loading.gif")]);
        // line 29
        echo ";

  app.arguments = {};
  ";
        // line 32
        if ((isset($context["script_controller"]) || array_key_exists("script_controller", $context))) {
            // line 33
            echo "    app.controller = '";
            echo twig_escape_filter($this->env, ($context["script_controller"] ?? $this->getContext($context, "script_controller")), "html", null, true);
            echo "';
  ";
        }
        // line 35
        echo "  ";
        if ((isset($context["script_arguments"]) || array_key_exists("script_arguments", $context))) {
            // line 36
            echo "    app.arguments = ";
            echo twig_jsonencode_filter(($context["script_arguments"] ?? $this->getContext($context, "script_arguments")));
            echo ";
  ";
        }
        // line 38
        echo "
  app.scripts = ";
        // line 39
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->exportScripts(), null));
        echo ";
  app.fileSingleSizeLimit = ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.file_single_size_limit", 10), "html", null, true);
        echo ";
  app.uploadUrl = '";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_upload");
        echo "';
  app.imgCropUrl = '";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_img_crop");
        echo "';
  app.lessonCopyEnabled = '";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.copy_enabled", "0"), "html", null, true);
        echo "';
  app.cloudPlayerSdkUrl = '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("player"), "html", null, true);
        echo "';
  app.cloudPlayServer = '";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_play_server", ""), "html", null, true);
        echo "';
  app.cloudVideoPlayerSdkUrl = '";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("video"), "html", null, true);
        echo "';
  app.cloudOldUploaderSdkUrl = '";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("old_uploader"), "html", null, true);
        echo "';
  app.cloudOldDocumentSdkUrl = '";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("old_document"), "html", null, true);
        echo "';
  app.lang = '";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "html", null, true);
        echo "';
</script>
";
        // line 51
        if (($context["state"] ?? $this->getContext($context, "state"))) {
            // line 52
            echo "  ";
            $this->loadTemplate("admin-v2/script/translation.html.twig", "admin-v2/script_boot.html.twig", 52)->display($context);
        }
        // line 54
        $this->loadTemplate("admin-v2/js_loader.html.twig", "admin-v2/script_boot.html.twig", 54)->display($context);
        // line 55
        echo "
<script type=\"text/javascript\">
  window.seajsBoot && window.seajsBoot();
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 55,  162 => 54,  158 => 52,  156 => 51,  151 => 49,  147 => 48,  143 => 47,  139 => 46,  135 => 45,  131 => 44,  127 => 43,  123 => 42,  119 => 41,  115 => 40,  111 => 39,  108 => 38,  102 => 36,  99 => 35,  93 => 33,  91 => 32,  86 => 29,  84 => 19,  79 => 17,  76 => 16,  73 => 15,  67 => 13,  64 => 12,  61 => 11,  59 => 10,  54 => 8,  50 => 7,  46 => 6,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<script>
  if (typeof app === 'undefined') {
    var app = {};
  }
  app.version = '{{ asset_version('/') }}';
  app.httpHost = '{{ app.request.getSchemeAndHttpHost() }}';
  app.basePath = '{{ base_path() }}';
  app.theme = '{{ setting(\"theme.uri\"|default(\"default\")) }}';

  {% set crontabNextExecutedTime = crontab_next_executed_time() %}
  {% if not setting('magic.disable_web_crontab', 0) and crontabNextExecutedTime > 0  %}
    {% if date(crontabNextExecutedTime|date('Y-m-d H:i:s')) < date() %}
      app.scheduleCrontab = '{{ path('crontab_web') }}';
    {% endif %}
  {% endif %}

  var CLOUD_FILE_SERVER = \"{{ setting('developer.cloud_file_server', '') }}\";

  app.config = {{
  {
    api:{
      weibo:{key:setting('login_bind.weibo_key', '')},
      qq:{key:setting('login_bind.qq_key', '')},
      douban:{key:setting('login_bind.douban_key', '')},
      renren:{key:setting('login_bind.renren_key', '')}
    },
      loading_img_path: asset('assets/img/default/loading.gif'),
    }|json_encode|raw
  }};

  app.arguments = {};
  {% if script_controller is defined %}
    app.controller = '{{ script_controller }}';
  {% endif %}
  {% if script_arguments is defined %}
    app.arguments = {{ script_arguments|json_encode|raw }};
  {% endif %}

  app.scripts = {{ export_scripts()|default(null)|json_encode|raw }};
  app.fileSingleSizeLimit = {{ setting(\"magic.file_single_size_limit\", 10) }};
  app.uploadUrl = '{{ path(\"file_upload\") }}';
  app.imgCropUrl = '{{ path(\"file_img_crop\") }}';
  app.lessonCopyEnabled = '{{ setting(\"course.copy_enabled\",\"0\") }}';
  app.cloudPlayerSdkUrl = '{{ cloud_sdk_url(\"player\") }}';
  app.cloudPlayServer = '{{ setting(\"developer.cloud_play_server\", \"\") }}';
  app.cloudVideoPlayerSdkUrl = '{{ cloud_sdk_url(\"video\") }}';
  app.cloudOldUploaderSdkUrl = '{{ cloud_sdk_url(\"old_uploader\") }}';
  app.cloudOldDocumentSdkUrl = '{{ cloud_sdk_url(\"old_document\") }}';
  app.lang = '{{ app.request.locale }}';
</script>
{% if state %}
  {% include 'admin-v2/script/translation.html.twig' %}
{% endif %}
{% include 'admin-v2/js_loader.html.twig' %}

<script type=\"text/javascript\">
  window.seajsBoot && window.seajsBoot();
</script>
", "admin-v2/script_boot.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/script_boot.html.twig");
    }
}
