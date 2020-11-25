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

/* admin-v2/operating/block/label/poster.html.twig */
class __TwigTemplate_2b2e6437caf0e463b7fd6a93a22e360e1ec4bd9db05fc313fd3b79e0decca4a7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/label/poster.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/label/poster.html.twig"));

        // line 1
        $context["first"] = 1;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["block"] ?? null), "data", [], "any", false, true), ($context["code"] ?? $this->getContext($context, "code")), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["block"] ?? null), "data", [], "any", false, true), ($context["code"] ?? $this->getContext($context, "code")), [], "array"), null)) : (null)));
        foreach ($context['_seq'] as $context["dataId"] => $context["data"]) {
            // line 3
            echo "  ";
            if ((($context["first"] ?? $this->getContext($context, "first")) == 1)) {
                // line 4
                echo "    <li class=\"poster-table active\">
      <a class=\"poster-btn\" href=\"#poster-";
                // line 5
                echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                echo "\" data-toggle=\"tab\"><span class=\"js-move-icon mrm\"><i class=\"es-icon es-icon-yidong\"></i></span><span class=\"mlm\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "alt", []), "html", null, true);
                echo "</span></a>
      <input type=\"hidden\" name=\"data[";
                // line 6
                echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                echo "][alt]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "alt", []), "html", null, true);
                echo "\">
    </li>
  ";
            } else {
                // line 9
                echo "    <li class=\"poster-table\">
      <a class=\"poster-btn\" href=\"#poster-";
                // line 10
                echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                echo "\" data-toggle=\"tab\"><span class=\"js-move-icon mrm\"><i class=\"es-icon es-icon-yidong\"></i></span><span class=\"mlm\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "alt", []), "html", null, true);
                echo "</span></a>
      <input type=\"hidden\" name=\"data[";
                // line 11
                echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
                echo "][";
                echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                echo "][alt]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "alt", []), "html", null, true);
                echo "\">
    </li>
  ";
            }
            // line 14
            echo "  ";
            $context["first"] = 0;
            // line 15
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['dataId'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/operating/block/label/poster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  83 => 14,  73 => 11,  67 => 10,  64 => 9,  54 => 6,  48 => 5,  45 => 4,  42 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set first = 1 %}
{% for dataId,data in  block.data[code]|default(null) %}
  {% if first == 1 %}
    <li class=\"poster-table active\">
      <a class=\"poster-btn\" href=\"#poster-{{ dataId }}\" data-toggle=\"tab\"><span class=\"js-move-icon mrm\"><i class=\"es-icon es-icon-yidong\"></i></span><span class=\"mlm\">{{ data.alt }}</span></a>
      <input type=\"hidden\" name=\"data[{{ code }}][{{ dataId }}][alt]\" value=\"{{ data.alt }}\">
    </li>
  {% else %}
    <li class=\"poster-table\">
      <a class=\"poster-btn\" href=\"#poster-{{ dataId }}\" data-toggle=\"tab\"><span class=\"js-move-icon mrm\"><i class=\"es-icon es-icon-yidong\"></i></span><span class=\"mlm\">{{ data.alt }}</span></a>
      <input type=\"hidden\" name=\"data[{{ code }}][{{ dataId }}][alt]\" value=\"{{ data.alt }}\">
    </li>
  {% endif %}
  {% set first = 0 %}

{% endfor %}", "admin-v2/operating/block/label/poster.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/operating/block/label/poster.html.twig");
    }
}
