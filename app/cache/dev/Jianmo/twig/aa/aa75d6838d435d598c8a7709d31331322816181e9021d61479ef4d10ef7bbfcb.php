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

/* admin-v2/default/daily-statistics.html.twig */
class __TwigTemplate_5fe9f74b123d6ccdfd004244062c7af671695ed64a7f1c7c2b4e5ab0699aa4fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/daily-statistics.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/daily-statistics.html.twig"));

        // line 1
        echo "<div class=\"row\">
  <div class=\"col-md-3 text-center\">
    <div class=\"admin-data__value\">";
        // line 3
        echo twig_escape_filter($this->env, (((isset($context["loginCount"]) || array_key_exists("loginCount", $context))) ? (_twig_default_filter(($context["loginCount"] ?? $this->getContext($context, "loginCount")), "0")) : ("0")), "html", null, true);
        echo "</div>
    <div class=\"admin-data__explain\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.today_login_user"), "html", null, true);
        echo "</div>
  </div>
  <div class=\"col-md-3 text-center\">
    <div class=\"admin-data__value\">";
        // line 7
        echo twig_escape_filter($this->env, (((isset($context["registerNum"]) || array_key_exists("registerNum", $context))) ? (_twig_default_filter(($context["registerNum"] ?? $this->getContext($context, "registerNum")), "0")) : ("0")), "html", null, true);
        echo "</div>
    <div class=\"admin-data__explain\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.today_register_user"), "html", null, true);
        echo "</div>
  </div>
  <div class=\"col-md-3 text-center\">
    <div class=\"admin-data__value\">";
        // line 11
        echo twig_escape_filter($this->env, (((isset($context["newPaidOrderCount"]) || array_key_exists("newPaidOrderCount", $context))) ? (_twig_default_filter(($context["newPaidOrderCount"] ?? $this->getContext($context, "newPaidOrderCount")), "0")) : ("0")), "html", null, true);
        echo "</div>
    <div class=\"admin-data__explain\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.today_new_paid_order"), "html", null, true);
        echo "</div>
  </div>
  <div class=\"col-md-3 text-center\">
    <div class=\"admin-data__value\">";
        // line 15
        echo twig_escape_filter($this->env, (((isset($context["newOrderCount"]) || array_key_exists("newOrderCount", $context))) ? (_twig_default_filter(($context["newOrderCount"] ?? $this->getContext($context, "newOrderCount")), "0")) : ("0")), "html", null, true);
        echo "</div>
    <div class=\"admin-data__explain\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.today_new_order"), "html", null, true);
        echo "</div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/daily-statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  70 => 15,  64 => 12,  60 => 11,  54 => 8,  50 => 7,  44 => 4,  40 => 3,  36 => 1,);
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
  <div class=\"col-md-3 text-center\">
    <div class=\"admin-data__value\">{{ loginCount|default('0') }}</div>
    <div class=\"admin-data__explain\">{{ 'admin_v2.homepage.today_login_user'|trans }}</div>
  </div>
  <div class=\"col-md-3 text-center\">
    <div class=\"admin-data__value\">{{ registerNum|default('0') }}</div>
    <div class=\"admin-data__explain\">{{ 'admin_v2.homepage.today_register_user'|trans }}</div>
  </div>
  <div class=\"col-md-3 text-center\">
    <div class=\"admin-data__value\">{{ newPaidOrderCount|default('0') }}</div>
    <div class=\"admin-data__explain\">{{ 'admin_v2.homepage.today_new_paid_order'|trans }}</div>
  </div>
  <div class=\"col-md-3 text-center\">
    <div class=\"admin-data__value\">{{ newOrderCount|default('0') }}</div>
    <div class=\"admin-data__explain\">{{ 'admin_v2.homepage.today_new_order'|trans }}</div>
  </div>
</div>
", "admin-v2/default/daily-statistics.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/daily-statistics.html.twig");
    }
}
