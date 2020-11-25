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

/* default/header/logo.html.twig */
class __TwigTemplate_d29df52ff74d1a7df34c8dd9aadd9f280146af52e4fc2c03382a84b1ee6bce08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/logo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/logo.html.twig"));

        // line 1
        echo "<div class=\"navbar-header\">
  <div class=\"visible-xs  navbar-mobile\">
    <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
      <i class=\"es-icon es-icon-menu\"></i>
    </a>
    <div class=\"html-mask\"></div>
    <div class=\"nav-mobile\">
      <form class=\"navbar-form\" action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control\" placeholder=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.search"), "html", null, true);
        echo "\" name=\"q\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>

      <ul class=\"nav navbar-nav\">
        ";
        // line 16
        $this->loadTemplate("default/top-navigation.html.twig", "default/header/logo.html.twig", 16)->display(twig_array_merge($context, ["navigations" => ($context["navigations"] ?? $this->getContext($context, "navigations")), "siteNav" => (((isset($context["siteNav"]) || array_key_exists("siteNav", $context))) ? (_twig_default_filter(($context["siteNav"] ?? $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => true]));
        // line 17
        echo "      </ul>
    </div>
  </div>
  ";
        // line 20
        if (($context["mobile"] ?? $this->getContext($context, "mobile"))) {
            // line 21
            echo "    <div class=\"M_header-back js-back\">
      <a><i class=\"es-icon es-icon-chevronleft\"></i></a>
    </div>
  ";
        }
        // line 25
        echo "  <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
    ";
        // line 26
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")) {
            // line 27
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")), "html", null, true);
            echo "\">
    ";
        } else {
            // line 29
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "
    ";
        }
        // line 31
        echo "  </a>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/header/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  87 => 29,  81 => 27,  79 => 26,  74 => 25,  68 => 21,  66 => 20,  61 => 17,  59 => 16,  50 => 10,  45 => 8,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-header\">
  <div class=\"visible-xs  navbar-mobile\">
    <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
      <i class=\"es-icon es-icon-menu\"></i>
    </a>
    <div class=\"html-mask\"></div>
    <div class=\"nav-mobile\">
      <form class=\"navbar-form\" action=\"{{ path('search') }}\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control\" placeholder=\"{{'homepage.header.search'|trans}}\" name=\"q\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>

      <ul class=\"nav navbar-nav\">
        {% include 'default/top-navigation.html.twig' with {navigations: navigations,siteNav: siteNav|default(null), isMobile: true} %}
      </ul>
    </div>
  </div>
  {% if mobile %}
    <div class=\"M_header-back js-back\">
      <a><i class=\"es-icon es-icon-chevronleft\"></i></a>
    </div>
  {% endif %}
  <a href=\"{{ path('homepage') }}\" class=\"navbar-brand\">
    {% if setting('site.logo') %}
      <img src=\"{{ asset(setting('site.logo')) }}\">
    {% else %}
      {{ setting('site.name', 'EDUSOHO') }}
    {% endif %}
  </a>
</div>", "default/header/logo.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/default/header/logo.html.twig");
    }
}
