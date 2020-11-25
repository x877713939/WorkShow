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

/* WorkshowPlugin:Base:top.html.twig */
class __TwigTemplate_ee48549deeaaa2ba7c953cf3b0e172a914e27815b445bd5b4cd76725780f399a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WorkshowPlugin:Base:top.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WorkshowPlugin:Base:top.html.twig"));

        // line 1
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/workshowplugin/js/main.js"), "html", null, true);
        echo "\"></script>
<html>
<head>
  <title></title>
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/workshowplugin/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/libs/bootstrap/dist/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
</head>
<body>
  <div class=\"header\">
    <div class=\"logo\">
      <img src=\"static-dist/workshowplugin/img/header/logo.png\">作品秀
    </div>
    <div class=\"search\">
      <input type=\"text\" id=\"search\" placeholder=\"美食\"></input>
    </div>
    <div class=\"start\">
      <div class=\"start-box\">
        <span>开始创作</span>
      </div>
    </div>
    <div class=\"login\"><a href=\"/login\">登录</a>|<a href=\"/register\">注册</a></div>
  </div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "WorkshowPlugin:Base:top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  48 => 6,  41 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<script src=\"{{ asset('static-dist/libs/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"{{ asset('static-dist/workshowplugin/js/main.js') }}\"></script>
<html>
<head>
  <title></title>
  <link href=\"{{ asset('static-dist/workshowplugin/css/main.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('static-dist/libs/bootstrap/dist/css/bootstrap.css') }}\" rel=\"stylesheet\">
</head>
<body>
  <div class=\"header\">
    <div class=\"logo\">
      <img src=\"static-dist/workshowplugin/img/header/logo.png\">作品秀
    </div>
    <div class=\"search\">
      <input type=\"text\" id=\"search\" placeholder=\"美食\"></input>
    </div>
    <div class=\"start\">
      <div class=\"start-box\">
        <span>开始创作</span>
      </div>
    </div>
    <div class=\"login\"><a href=\"/login\">登录</a>|<a href=\"/register\">注册</a></div>
  </div>
</body>
</html>", "WorkshowPlugin:Base:top.html.twig", "/var/www/bootcamp/chenlong/EduSoho/plugins/WorkshowPlugin/Resources/views/Base/top.html.twig");
    }
}
