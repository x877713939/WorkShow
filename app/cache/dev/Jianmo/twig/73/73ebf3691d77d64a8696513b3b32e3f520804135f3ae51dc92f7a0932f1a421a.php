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

/* admin-v2/operating/block/affix-nav.html.twig */
class __TwigTemplate_31cffadc34bdf2413d653af69c6094b77b4bd71bd2c48bbfa2e812e78338bffd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/affix-nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/affix-nav.html.twig"));

        // line 1
        echo "<nav class=\"block-affix-nav hidden-print hidden-xs hidden-sm affix\" id=\"block-nav-affix\">
  <ul class=\"nav bs-docs-sidenav\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["block"] ?? null), "meta", [], "any", false, true), "items", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["block"] ?? null), "meta", [], "any", false, true), "items", []), null)) : (null)));
        foreach ($context['_seq'] as $context["code"] => $context["item"]) {
            echo "       
    <li>
      <a href=\"#js-affix-";
            // line 5
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\" style=\"padding:5px;\">
      ";
            // line 6
            if ((($this->getAttribute($context["item"], "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "title", []), null)) : (null))) {
                // line 7
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "
      ";
            } else {
                // line 9
                echo "        ";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "
      ";
            }
            // line 11
            echo "      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <li>
      <a class=\"back-to-top\" href=\"#top\" style=\"padding:5px;\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.goto_top"), "html", null, true);
        echo "
      </a>
    </li>
  </ul>

  
</nav>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/operating/block/affix-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 16,  73 => 14,  65 => 11,  59 => 9,  53 => 7,  51 => 6,  47 => 5,  40 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"block-affix-nav hidden-print hidden-xs hidden-sm affix\" id=\"block-nav-affix\">
  <ul class=\"nav bs-docs-sidenav\">
  {% for code,item in block.meta.items|default(null) %}       
    <li>
      <a href=\"#js-affix-{{ code }}\" style=\"padding:5px;\">
      {% if item.title|default(null) %}
        {{ item.title }}
      {% else %}
        {{ code }}
      {% endif %}
      </a>
    </li>
  {% endfor %}
    <li>
      <a class=\"back-to-top\" href=\"#top\" style=\"padding:5px;\">
        {{'admin.block_manage.visual_edit.goto_top'|trans}}
      </a>
    </li>
  </ul>

  
</nav>
", "admin-v2/operating/block/affix-nav.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/operating/block/affix-nav.html.twig");
    }
}
