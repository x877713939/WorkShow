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

/* admin-v2/default/upgrade-notice.html.twig */
class __TwigTemplate_14dd31a4abc23c7363f1d62cadd36700c9f6f16d7f680c196a6ab85552931f99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/upgrade-notice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/upgrade-notice.html.twig"));

        // line 1
        if (($context["notice"] ?? $this->getContext($context, "notice"))) {
            // line 2
            echo "<div class=\"alert alert-warning js-upgrade-notice hidden\" role=\"alert\">
  <span>";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.notice.upgrade_notice"), "html", null, true);
            echo "</span>
  <a class=\"alert-link\" href=\"";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_app_upgrades");
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.notice.go_to_upgrade"), "html", null, true);
            echo "<i class=\"es-icon es-icon-guide\"></i></a>
</div>
<input class=\"hidden js-notice\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, ($context["notice"] ?? $this->getContext($context, "notice")), "html", null, true);
            echo "\">
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/upgrade-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  45 => 4,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if notice %}
<div class=\"alert alert-warning js-upgrade-notice hidden\" role=\"alert\">
  <span>{{ 'admin_v2.notice.upgrade_notice'|trans }}</span>
  <a class=\"alert-link\" href=\"{{ path('admin_v2_app_upgrades') }}\" target=\"_blank\">{{ 'admin_v2.notice.go_to_upgrade'|trans }}<i class=\"es-icon es-icon-guide\"></i></a>
</div>
<input class=\"hidden js-notice\" value=\"{{ notice }}\">
{% endif %}", "admin-v2/default/upgrade-notice.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/upgrade-notice.html.twig");
    }
}
