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

/* script_boot.html.twig */
class __TwigTemplate_2b25755f27b70665fc7c3ec194d72aa276dc32e945ec1a55ceac11387a3ee6fc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'translation' => [$this, 'block_translation'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "script_boot.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "script_boot.html.twig"));

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
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.file_single_size_limit", 10), "html", null, true);
        echo ";
  app.uploadUrl = '";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_upload");
        echo "';
  app.imgCropUrl = '";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_img_crop");
        echo "';
  app.lessonCopyEnabled = '";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("course.copy_enabled", "0"), "html", null, true);
        echo "';
  app.cloudSdkBaseUri = '";
        // line 45
        (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_sdk_cdn", "")) ? (print (twig_escape_filter($this->env, ("//" . $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_sdk_cdn", "")), "html", null, true))) : (print ("")));
        echo "';
  app.cloudDisableLogReport = ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.disable_log_report", 0), "html", null, true);
        echo ";
  app.cloudPlayerSdkUrl = '";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("player"), "html", null, true);
        echo "';
  app.cloudPlayServer = '";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.cloud_play_server", ""), "html", null, true);
        echo "';
  app.cloudVideoPlayerSdkUrl = '";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("video"), "html", null, true);
        echo "';
  app.cloudOldUploaderSdkUrl = '";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("old_uploader"), "html", null, true);
        echo "';
  app.cloudOldDocumentSdkUrl = '";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("old_document"), "html", null, true);
        echo "';
  app.lang = '";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "html", null, true);
        echo "';
</script>

";
        // line 55
        $this->loadTemplate("script/translation.html.twig", "script_boot.html.twig", 55)->display($context);
        // line 56
        $this->displayBlock('translation', $context, $blocks);
        // line 58
        $this->loadTemplate("js_loader.html.twig", "script_boot.html.twig", 58)->display($context);
        // line 59
        echo "
<script type=\"text/javascript\">
  window.seajsBoot && window.seajsBoot();
</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_translation($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translation"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translation"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 56,  173 => 59,  171 => 58,  169 => 56,  167 => 55,  161 => 52,  157 => 51,  153 => 50,  149 => 49,  145 => 48,  141 => 47,  137 => 46,  133 => 45,  129 => 44,  125 => 43,  121 => 42,  117 => 41,  112 => 39,  109 => 38,  103 => 36,  100 => 35,  94 => 33,  92 => 32,  87 => 29,  85 => 19,  80 => 17,  77 => 16,  74 => 15,  68 => 13,  65 => 12,  62 => 11,  60 => 10,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
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
  app.cloudSdkBaseUri = '{{ setting(\"developer.cloud_sdk_cdn\", \"\") ? \"//\"~setting(\"developer.cloud_sdk_cdn\", \"\") : \"\" }}';
  app.cloudDisableLogReport = {{ setting(\"developer.disable_log_report\", 0) }};
  app.cloudPlayerSdkUrl = '{{ cloud_sdk_url(\"player\") }}';
  app.cloudPlayServer = '{{ setting(\"developer.cloud_play_server\", \"\") }}';
  app.cloudVideoPlayerSdkUrl = '{{ cloud_sdk_url(\"video\") }}';
  app.cloudOldUploaderSdkUrl = '{{ cloud_sdk_url(\"old_uploader\") }}';
  app.cloudOldDocumentSdkUrl = '{{ cloud_sdk_url(\"old_document\") }}';
  app.lang = '{{ app.request.locale }}';
</script>

{% include 'script/translation.html.twig' %}
{% block translation %}
{% endblock %}
{% include 'js_loader.html.twig' %}

<script type=\"text/javascript\">
  window.seajsBoot && window.seajsBoot();
</script>
", "script_boot.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/script_boot.html.twig");
    }
}
