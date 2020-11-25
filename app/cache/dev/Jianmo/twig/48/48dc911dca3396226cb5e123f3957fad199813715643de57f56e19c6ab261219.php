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

/* WorkshowPlugin:component:header.html.twig */
class __TwigTemplate_d1e244b96eec3e61973e71f799f0826efede3dc1fe0c80cab14b746167bf546e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WorkshowPlugin:component:header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WorkshowPlugin:component:header.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "WorkshowPlugin:component:header.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<script src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/workshowplugin/js/main.js"), "html", null, true);
        echo "\"></script>
<html>
<head>
  <title></title>
  <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/workshowplugin/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
    <div class=\"head-header\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"head-logo\">
              <a href=\"/\">
                <img src=\"/static-dist/workshowplugin/img/header/logo.png\">作品秀
              </a>
            </div>
          </div>
          <div class=\"col-md-3\">
            <div class=\"head-search\">
              <form>
                <input type=\"text\" id=\"search\" placeholder=\"美食\"></input>
              </form>
            </div>
          </div>
          <div class=\"col-md-3\">
            <a href=\"\">
              <div class=\"head-start\">
                <span>开始创作</span>
              </div>
            </a>
          </div>
          <div class=\"col-md-3\">
            <div class=\"head-login\">
              ";
        // line 38
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", [], "any", false, true), "id", [], "any", true, true)) {
            // line 39
            echo "                <div>
                  ";
            // line 40
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", [], "any", false, true), "smallAvatar", [], "any", true, true)) {
                // line 41
                echo "                  <img src=\"/static-dist/workshowplugin/img/header/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "smallAvatar", []), "html", null, true);
                echo "\">
                  ";
            } else {
                // line 43
                echo "                  <img src=\"/static-dist/workshowplugin/img/header/head-test.png\">
                  ";
            }
            // line 45
            echo "                </div>
                <a href=\"/logout\"><span>退出登录</span></a>
              ";
        } else {
            // line 48
            echo "                <a href=\"/login\">登录</a>|<a href=\"/register\">注册</a>
              ";
        }
        // line 50
        echo "            </div>
          </div>
        </div>
      </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WorkshowPlugin:component:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 50,  128 => 48,  123 => 45,  119 => 43,  113 => 41,  111 => 40,  108 => 39,  106 => 38,  74 => 9,  67 => 5,  63 => 4,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block body %}

<script src=\"{{ asset('static-dist/libs/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ asset('static-dist/workshowplugin/js/main.js') }}\"></script>
<html>
<head>
  <title></title>
  <link href=\"{{ asset('static-dist/workshowplugin/css/main.css') }}\" rel=\"stylesheet\">
</head>
<body>
    <div class=\"head-header\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"head-logo\">
              <a href=\"/\">
                <img src=\"/static-dist/workshowplugin/img/header/logo.png\">作品秀
              </a>
            </div>
          </div>
          <div class=\"col-md-3\">
            <div class=\"head-search\">
              <form>
                <input type=\"text\" id=\"search\" placeholder=\"美食\"></input>
              </form>
            </div>
          </div>
          <div class=\"col-md-3\">
            <a href=\"\">
              <div class=\"head-start\">
                <span>开始创作</span>
              </div>
            </a>
          </div>
          <div class=\"col-md-3\">
            <div class=\"head-login\">
              {% if app.user.id is defined %}
                <div>
                  {% if app.user.smallAvatar is defined %}
                  <img src=\"/static-dist/workshowplugin/img/header/{{ app.user.smallAvatar }}\">
                  {% else %}
                  <img src=\"/static-dist/workshowplugin/img/header/head-test.png\">
                  {% endif %}
                </div>
                <a href=\"/logout\"><span>退出登录</span></a>
              {% else %}
                <a href=\"/login\">登录</a>|<a href=\"/register\">注册</a>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    </div>
{% endblock %}", "WorkshowPlugin:component:header.html.twig", "/var/www/bootcamp/chenlong/project-it-migrant-workers/plugins/WorkshowPlugin/Resources/views/component/header.html.twig");
    }
}
