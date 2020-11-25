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

/* admin-v2/widget/side-bar.html.twig */
class __TwigTemplate_66e8c19dab6dfe068a5bcbdf875eb23615730f7a39713bf98a2b6ca132691be5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/widget/side-bar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/widget/side-bar.html.twig"));

        // line 1
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script([0 => "app/js/admin-v2/sidebar/index.js"]);
        // line 2
        $context["data"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSideBar(($context["menu"] ?? $this->getContext($context, "menu")));
        // line 3
        echo "<input id=\"js-side-bar-data\" class=\"hidden js-side-bar-data\" data-value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["data"] ?? $this->getContext($context, "data"))), "html", null, true);
        echo "\">
<div class=\"cd-layout-sidebar\">
  <ul class=\"cd-sidebar-container js-sidebar-container cd-mt24 pl0\" data-code=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentMenu"] ?? $this->getContext($context, "currentMenu")), "parent", []), "html", null, true);
        echo "\"></ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/widget/side-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% do script(['app/js/admin-v2/sidebar/index.js']) %}
{% set data = side_bar_permission(menu) %}
<input id=\"js-side-bar-data\" class=\"hidden js-side-bar-data\" data-value=\"{{ data|json_encode }}\">
<div class=\"cd-layout-sidebar\">
  <ul class=\"cd-sidebar-container js-sidebar-container cd-mt24 pl0\" data-code=\"{{ currentMenu.parent }}\"></ul>
</div>
", "admin-v2/widget/side-bar.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/widget/side-bar.html.twig");
    }
}
