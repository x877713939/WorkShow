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

/* admin-v2/default/business-advice.html.twig */
class __TwigTemplate_68834c3a0325bfc687bbc9ef69b29a162aedcde640749cb8174592c4ff105b28 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/business-advice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/business-advice.html.twig"));

        // line 1
        echo "<div class=\"row\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 3
            echo "    <div class=\"col-md-3\">
      ";
            // line 4
            if ($this->getAttribute($this->getAttribute(($context["advice"] ?? null), "details", [], "any", false, true), $context["i"], [], "array", true, true)) {
                // line 5
                echo "        ";
                $context["item"] = $this->getAttribute($this->getAttribute(($context["advice"] ?? $this->getContext($context, "advice")), "details", []), $context["i"], [], "array");
                // line 6
                echo "        <a class=\"admin-advice__item\" href=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "url", []))) : ("")), "html", null, true);
                echo "\" target=\"_blank\">
          <img src=\"";
                // line 7
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "image", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "image", []))) : ("")), "html", null, true);
                echo "\"/>
        </a>
      ";
            } else {
                // line 10
                echo "        <div class=\" admin-advice__item\">
          <div class=\"admin-advice__placeholder\"><i class=\"es-icon es-icon-placeholder\"></i></div>
        </div>
      ";
            }
            // line 14
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/business-advice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  68 => 14,  62 => 10,  56 => 7,  51 => 6,  48 => 5,  46 => 4,  43 => 3,  39 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
  {% for i in 0..3 %}
    <div class=\"col-md-3\">
      {% if advice.details[i] is defined %}
        {% set item = advice.details[i] %}
        <a class=\"admin-advice__item\" href=\"{{ item.url|default() }}\" target=\"_blank\">
          <img src=\"{{ item.image|default() }}\"/>
        </a>
      {% else %}
        <div class=\" admin-advice__item\">
          <div class=\"admin-advice__placeholder\"><i class=\"es-icon es-icon-placeholder\"></i></div>
        </div>
      {% endif %}
    </div>
  {% endfor %}
</div>
", "admin-v2/default/business-advice.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/business-advice.html.twig");
    }
}
