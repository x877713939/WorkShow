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

/* default/header.html.twig */
class __TwigTemplate_c7eb84f855121b0b18d259c7b75cb4be62007b414deb95d2042d729e7b02528a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script([0 => "app/js/default/header/index.js"]);
        // line 2
        $context["navigations"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("NavigationsTree", []);
        // line 3
        echo "
<header class=\"es-header navbar\">
  ";
        // line 5
        $this->loadTemplate("default/header/logo.html.twig", "default/header.html.twig", 5)->display($context);
        // line 6
        echo "  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      ";
        // line 8
        $this->loadTemplate("default/top-navigation.html.twig", "default/header.html.twig", 8)->display(twig_array_merge($context, ["navigations" => ($context["navigations"] ?? $this->getContext($context, "navigations")), "siteNav" => (((isset($context["siteNav"]) || array_key_exists("siteNav", $context))) ? (_twig_default_filter(($context["siteNav"] ?? $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => false]));
        // line 9
        echo "    </ul>
    ";
        // line 10
        $this->loadTemplate("default/header/user-operation.html.twig", "default/header.html.twig", 10)->display($context);
        // line 11
        echo "  </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 11,  55 => 10,  52 => 9,  50 => 8,  46 => 6,  44 => 5,  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% do script(['app/js/default/header/index.js']) %}
{% set navigations = data('NavigationsTree', {}) %}

<header class=\"es-header navbar\">
  {% include 'default/header/logo.html.twig' %}
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      {% include 'default/top-navigation.html.twig' with {navigations: navigations,siteNav: siteNav|default(null), isMobile: false} %}
    </ul>
    {% include 'default/header/user-operation.html.twig' %}
  </nav>
</header>", "default/header.html.twig", "/var/www/bootcamp/chenlong/EduSoho/app/Resources/views/default/header.html.twig");
    }
}
