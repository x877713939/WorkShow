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

/* admin-v2/default/domain.html.twig */
class __TwigTemplate_4a93aedaa8ce025f3df582ffae98e80c92e1ac4e034ccd409e4f6bd63b612d81 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/domain.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/domain.html.twig"));

        // line 1
        if (($context["inspectList"] ?? $this->getContext($context, "inspectList"))) {
            // line 2
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    <span>";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["inspectList"] ?? $this->getContext($context, "inspectList")), "value", []), "errorMessage", []), "html", null, true);
            echo "</span>
    <a class=\"alert-link\" href='";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["inspectList"] ?? $this->getContext($context, "inspectList")), "value", []), "settingUrl", []), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.setting_domain_btn"), "html", null, true);
            echo "<i class=\"es-icon es-icon-guide\"></i></a>
  </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/domain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if inspectList %}
  <div class=\"alert alert-warning\" role=\"alert\">
    <span>{{ inspectList.value.errorMessage }}</span>
    <a class=\"alert-link\" href='{{ inspectList.value.settingUrl }}'>{{ 'admin_v2.homepage.setting_domain_btn'|trans }}<i class=\"es-icon es-icon-guide\"></i></a>
  </div>
{% endif %}", "admin-v2/default/domain.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/domain.html.twig");
    }
}
