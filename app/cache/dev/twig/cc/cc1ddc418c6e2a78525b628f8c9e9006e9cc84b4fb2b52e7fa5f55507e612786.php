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

/* default/header/user-operation.html.twig */
class __TwigTemplate_b01ddd608a44061c356805051c987c440bc188bb0f0e7ca9072cb2d93eefce2c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/user-operation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/user-operation.html.twig"));

        // line 1
        echo "<div class=\"navbar-user ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
  <ul class=\"nav user-nav\">
    ";
        // line 3
        $context["show_switch_locale"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.show_switch_locale"), 0);
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
            // line 5
            echo "      ";
            $this->loadTemplate("default/header/part/user-role-manage.html.twig", "default/header/user-operation.html.twig", 5)->display($context);
            // line 6
            echo "      ";
            $this->loadTemplate("default/header/part/user-inform.html.twig", "default/header/user-operation.html.twig", 6)->display($context);
            // line 7
            echo "      ";
            $this->loadTemplate("default/header/part/user-avatar.html.twig", "default/header/user-operation.html.twig", 7)->display($context);
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "      ";
            $this->loadTemplate("default/header/part/visitor-login.html.twig", "default/header/user-operation.html.twig", 9)->display($context);
            // line 10
            echo "    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if ((($context["show_switch_locale"] ?? $this->getContext($context, "show_switch_locale")) == 1)) {
            // line 13
            echo "      ";
            if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])) {
                $context["langClass"] = "visitor-li visible-lg";
            } else {
                $context["langClass"] = "visitor-li hidden-xs";
            }
            // line 14
            echo "      ";
            $this->loadTemplate("default/switch-language.html.twig", "default/header/user-operation.html.twig", 14)->display(twig_array_merge($context, ["langClass" => ($context["langClass"] ?? $this->getContext($context, "langClass"))]));
            // line 15
            echo "    ";
        }
        // line 16
        echo "  </ul>
  <form class=\"navbar-form navbar-right hidden-xs\" action=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
    <div class=\"form-group\">
      <input class=\"form-control js-search\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "get", [0 => "q"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", [], "any", false, true), "get", [0 => "q"], "method"))) : ("")), "html", null, true);
        echo "\" name=\"q\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.search"), "html", null, true);
        echo "\">
      <button class=\"button es-icon es-icon-search\"></button>
    </div>
  </form>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/header/user-operation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  72 => 13,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  46 => 4,  44 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"navbar-user {% if setting('esBar.enabled', 0) %} left {% endif %}\">
  <ul class=\"nav user-nav\">
    {% set show_switch_locale = setting('developer.show_switch_locale')|default(0) %}
    {% if app.user %}
      {% include 'default/header/part/user-role-manage.html.twig' %}
      {% include 'default/header/part/user-inform.html.twig' %}
      {% include 'default/header/part/user-avatar.html.twig' %}
    {% else %}
      {% include 'default/header/part/visitor-login.html.twig' %}
    {% endif %}

    {% if show_switch_locale == 1 %}
      {% if app.user %}{% set langClass = 'visitor-li visible-lg' %}{% else %}{% set langClass = 'visitor-li hidden-xs' %}{% endif %}
      {% include 'default/switch-language.html.twig' with {langClass: langClass} %}
    {% endif %}
  </ul>
  <form class=\"navbar-form navbar-right hidden-xs\" action=\"{{ path('search') }}\" method=\"get\">
    <div class=\"form-group\">
      <input class=\"form-control js-search\" value=\"{{ app.request.get('q')|default() }}\" name=\"q\" placeholder=\"{{ 'homepage.header.search'|trans }}\">
      <button class=\"button es-icon es-icon-search\"></button>
    </div>
  </form>
</div>", "default/header/user-operation.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/default/header/user-operation.html.twig");
    }
}
