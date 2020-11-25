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

/* admin-v2/default/qr-code.html.twig */
class __TwigTemplate_3f66a0c016e64825bf97a5e1ff969ceebfd5052e480ad547685617360a4e7608 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/qr-code.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/qr-code.html.twig"));

        // line 1
        echo "
<div class=\"admin-sidebar-section__header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.wechat_official_account.title"), "html", null, true);
        echo "</div>
<div class=\"admin-sidebar-section__body admin-wechat\">
  ";
        // line 4
        if ($this->getAttribute(($context["qrCode"] ?? null), "image", [], "any", true, true)) {
            // line 5
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["qrCode"] ?? $this->getContext($context, "qrCode")), "image", []), "html", null, true);
            echo "\">
    <div class=\"admin-wechat__text\">";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.wechat_official_account.text"), "html", null, true);
            echo "</div>
  ";
        } else {
            // line 8
            echo "    <div class=\"admin-wechat__placeholder\"></div>
  ";
        }
        // line 10
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/qr-code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 10,  56 => 8,  51 => 6,  46 => 5,  44 => 4,  39 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"admin-sidebar-section__header\">{{ 'admin_v2.wechat_official_account.title'|trans }}</div>
<div class=\"admin-sidebar-section__body admin-wechat\">
  {% if qrCode.image is defined %}
    <img src=\"{{ qrCode.image }}\">
    <div class=\"admin-wechat__text\">{{ 'admin_v2.wechat_official_account.text'|trans }}</div>
  {% else %}
    <div class=\"admin-wechat__placeholder\"></div>
  {% endif %}
</div>
", "admin-v2/default/qr-code.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/qr-code.html.twig");
    }
}
