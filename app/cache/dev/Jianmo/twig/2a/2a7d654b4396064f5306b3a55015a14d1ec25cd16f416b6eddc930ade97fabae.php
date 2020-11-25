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

/* @theme/jianmo/block/middle_banner.template.html.twig */
class __TwigTemplate_156d5e63c7a4816981d279cbeff6794a65831c0df47c546b9550b01b71730fb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/jianmo/block/middle_banner.template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/jianmo/block/middle_banner.template.html.twig"));

        // line 1
        echo "<section class=\"introduction-section hidden-xs\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "        ";
            $context["icon"] = $this->getAttribute($context, ("icon" . $context["i"]), [], "array");
            // line 6
            echo "        ";
            $context["title"] = $this->getAttribute($context, (("icon" . $context["i"]) . "title"), [], "array");
            // line 7
            echo "        ";
            $context["introduction"] = $this->getAttribute($context, (("icon" . $context["i"]) . "introduction"), [], "array");
            // line 8
            echo "        <div class=\"col-xs-4 introduction-item\">
          ";
            // line 9
            if ((($this->getAttribute($this->getAttribute(($context["icon"] ?? null), 0, [], "array", false, true), "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["icon"] ?? null), 0, [], "array", false, true), "href", []), false)) : (false))) {
                // line 10
                echo "           <a href=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["icon"] ?? null), 0, [], "array", false, true), "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["icon"] ?? null), 0, [], "array", false, true), "href", []), "")) : ("")), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["icon"] ?? null), 0, [], "array", false, true), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["icon"] ?? null), 0, [], "array", false, true), "target", []), "")) : ("")), "html", null, true);
                echo "\"> 
          ";
            }
            // line 12
            echo "            <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["icon"] ?? null), 0, [], "array", false, true), "src", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["icon"] ?? null), 0, [], "array", false, true), "src", []), "")) : ("")), "html", null, true);
            echo "\">
          ";
            // line 13
            if ((($this->getAttribute($this->getAttribute(($context["icon"] ?? null), 0, [], "array", false, true), "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["icon"] ?? null), 0, [], "array", false, true), "href", []), false)) : (false))) {
                // line 14
                echo "           </a> 
          ";
            }
            // line 16
            echo "          <h4>";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["title"] ?? null), 0, [], "array", false, true), "value", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["title"] ?? null), 0, [], "array", false, true), "value", []), "")) : ("")), "html", null, true);
            echo "</h4>
          <h5>";
            // line 17
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["introduction"] ?? null), 0, [], "array", false, true), "value", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["introduction"] ?? null), 0, [], "array", false, true), "value", []), "")) : ("")), "html", null, true);
            echo "</h5>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
  </div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@theme/jianmo/block/middle_banner.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  83 => 17,  78 => 16,  74 => 14,  72 => 13,  67 => 12,  59 => 10,  57 => 9,  54 => 8,  51 => 7,  48 => 6,  45 => 5,  41 => 4,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"introduction-section hidden-xs\">
  <div class=\"container\">
    <div class=\"row\">
      {% for i in 1..3 %}
        {% set icon = _context['icon' ~ i]%}
        {% set title =_context['icon' ~ i ~ 'title'] %}
        {% set introduction =_context['icon' ~ i ~ 'introduction'] %}
        <div class=\"col-xs-4 introduction-item\">
          {% if icon[0].href|default(false) %}
           <a href=\"{{ (icon[0].href|default(''))}}\" target=\"{{ icon[0].target|default('')}}\"> 
          {% endif %}
            <img class=\"img-responsive\" src=\"{{ icon[0].src|default('') }}\">
          {% if icon[0].href|default(false) %}
           </a> 
          {% endif %}
          <h4>{{ title[0].value|default('') }}</h4>
          <h5>{{ introduction[0].value|default('') }}</h5>
        </div>
      {% endfor %}
    </div>
  </div>
</section>", "@theme/jianmo/block/middle_banner.template.html.twig", "/home/zl/project-it-migrant-workers/web/themes/jianmo/block/middle_banner.template.html.twig");
    }
}
