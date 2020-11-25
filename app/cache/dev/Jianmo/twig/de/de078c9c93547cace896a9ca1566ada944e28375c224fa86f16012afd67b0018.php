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

/* default/top-navigation.html.twig */
class __TwigTemplate_00bfd67b46ae3d6a795e7de0f3ea3c713a0ed8526e033dc773a76c67f2e7a8ec extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/top-navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/top-navigation.html.twig"));

        // line 1
        $context["topNavNum"] = (($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "navigation", [], "any", false, true), "topNavNum", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "navigation", [], "any", false, true), "topNavNum", []), 5)) : (5));
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["navigations"] ?? $this->getContext($context, "navigations")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
            if ($this->getAttribute($context["nav"], "isOpen", [])) {
                // line 4
                echo "  ";
                $context["subNavs"] = (($this->getAttribute($context["nav"], "children", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", []), [])) : ([]));
                // line 5
                echo "  ";
                if ((($this->getAttribute($context["loop"], "index", []) == (($context["topNavNum"] ?? $this->getContext($context, "topNavNum")) + 1)) &&  !(((isset($context["isMobile"]) || array_key_exists("isMobile", $context))) ? (_twig_default_filter(($context["isMobile"] ?? $this->getContext($context, "isMobile")), false)) : (false)))) {
                    // line 6
                    echo "    <li class=\"nav-more nav-hover\">
      <a class=\"more\">
        <i class=\"es-icon es-icon-morehoriz\"></i>
      </a>
      <ul class=\"dropdown-menu\" role=\"menu\">
        ";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["navigations"] ?? $this->getContext($context, "navigations")), ($context["topNavNum"] ?? $this->getContext($context, "topNavNum")), null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    foreach ($context['_seq'] as $context["_key"] => $context["nav"]) {
                        if ($this->getAttribute($context["nav"], "isOpen", [])) {
                            // line 12
                            echo "          ";
                            $context["subNavs"] = (($this->getAttribute($context["nav"], "children", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["nav"], "children", []), [])) : ([]));
                            // line 13
                            echo "
          ";
                            // line 14
                            $this->loadTemplate("default/navigation-li.html.twig", "default/top-navigation.html.twig", 14)->display($context);
                            // line 15
                            echo "        ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "      </ul>
    </li>
  ";
                }
                // line 19
                echo "
  ";
                // line 20
                if ((($this->getAttribute($context["loop"], "index", []) <= ($context["topNavNum"] ?? $this->getContext($context, "topNavNum"))) || (((isset($context["isMobile"]) || array_key_exists("isMobile", $context))) ? (_twig_default_filter(($context["isMobile"] ?? $this->getContext($context, "isMobile")), false)) : (false)))) {
                    // line 21
                    echo "    ";
                    $this->loadTemplate("default/navigation-li.html.twig", "default/top-navigation.html.twig", 21)->display($context);
                    // line 22
                    echo "  ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/top-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  104 => 21,  102 => 20,  99 => 19,  94 => 16,  84 => 15,  82 => 14,  79 => 13,  76 => 12,  65 => 11,  58 => 6,  55 => 5,  52 => 4,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set topNavNum = themeConfig.navigation.topNavNum|default(5) %}

{% for nav in navigations if nav.isOpen %}
  {% set subNavs = nav.children|default([]) %}
  {% if (loop.index == (topNavNum + 1)) and not isMobile|default(false) %}
    <li class=\"nav-more nav-hover\">
      <a class=\"more\">
        <i class=\"es-icon es-icon-morehoriz\"></i>
      </a>
      <ul class=\"dropdown-menu\" role=\"menu\">
        {% for nav in navigations[topNavNum:]  if nav.isOpen %}
          {% set subNavs = nav.children|default([]) %}

          {% include 'default/navigation-li.html.twig' %}
        {% endfor %}
      </ul>
    </li>
  {% endif %}

  {% if loop.index <= topNavNum or isMobile|default(false) %}
    {% include 'default/navigation-li.html.twig' %}
  {% endif %}
{% endfor %}
", "default/top-navigation.html.twig", "/var/www/bootcamp/chenlong/EduSoho/app/Resources/views/default/top-navigation.html.twig");
    }
}
