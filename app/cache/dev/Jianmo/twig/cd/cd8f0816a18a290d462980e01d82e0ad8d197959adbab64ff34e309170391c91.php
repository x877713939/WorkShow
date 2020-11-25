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

/* admin-v2/default/application-intro.html.twig */
class __TwigTemplate_0a6fa57fe1edfe8444eb90b7b889716fcdffe0ace9ec2405bd17e97923b3bbcc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/application-intro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/application-intro.html.twig"));

        // line 1
        echo "<div class=\"admin-v2-section__header cd-mb16\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.application_intro"), "html", null, true);
        echo "
  ";
        // line 2
        if ( !$this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_v2_app_center")) {
            // line 3
            echo "    <a class=\"admin-v2-section__more application-intro-not-connected\" href=\"";
            echo twig_escape_filter($this->env, (((isset($context["returnUrl"]) || array_key_exists("returnUrl", $context))) ? (_twig_default_filter(($context["returnUrl"] ?? $this->getContext($context, "returnUrl")), "#")) : ("#")), "html", null, true);
            echo "\"
       target=\"_blank\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.application_intro.more_btn"), "html", null, true);
            echo "</a>
  ";
        } else {
            // line 6
            echo "    <a class=\"admin-v2-section__more application-intro-not-connected\"
       href=\"";
            // line 7
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_app_center");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.application_intro.more_btn"), "html", null, true);
            echo "</a>
  ";
        }
        // line 9
        echo "</div>
<div class=\"admin-v2-section__body\">
  <div class=\"row\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 13
            echo "      <div class=\"col-md-3\">
        ";
            // line 14
            if ($this->getAttribute(($context["applicationData"] ?? null), $context["i"], [], "array", true, true)) {
                // line 15
                echo "          <a class=\"text-center admin-application\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["applicationData"] ?? $this->getContext($context, "applicationData")), $context["i"], [], "array"), "url", []), "html", null, true);
                echo "\" target=\"_blank\">
            <img src=";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["applicationData"] ?? $this->getContext($context, "applicationData")), $context["i"], [], "array"), "image", []), "html", null, true);
                echo ">
            <div class=\"admin-application__name\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["applicationData"] ?? $this->getContext($context, "applicationData")), $context["i"], [], "array"), "title", []), "html", null, true);
                echo "</div>
          </a>
        ";
            } else {
                // line 20
                echo "          <div class=\"text-center admin-application\">
            <i class=\"es-icon es-icon-entry-application\"></i>
          </div>
        ";
            }
            // line 24
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "  </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/application-intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  98 => 24,  92 => 20,  86 => 17,  82 => 16,  77 => 15,  75 => 14,  72 => 13,  68 => 12,  63 => 9,  56 => 7,  53 => 6,  48 => 4,  43 => 3,  41 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"admin-v2-section__header cd-mb16\">{{ 'admin_v2.homepage.application_intro'|trans }}
  {% if not has_permission('admin_v2_app_center') %}
    <a class=\"admin-v2-section__more application-intro-not-connected\" href=\"{{ returnUrl|default('#') }}\"
       target=\"_blank\">{{ 'admin_v2.homepage.application_intro.more_btn'|trans }}</a>
  {% else %}
    <a class=\"admin-v2-section__more application-intro-not-connected\"
       href=\"{{ path('admin_v2_app_center') }}\">{{ 'admin_v2.homepage.application_intro.more_btn'|trans }}</a>
  {% endif %}
</div>
<div class=\"admin-v2-section__body\">
  <div class=\"row\">
    {% for i in 0..3 %}
      <div class=\"col-md-3\">
        {% if applicationData[i] is defined %}
          <a class=\"text-center admin-application\" href=\"{{ applicationData[i].url }}\" target=\"_blank\">
            <img src={{ applicationData[i].image }}>
            <div class=\"admin-application__name\">{{ applicationData[i].title }}</div>
          </a>
        {% else %}
          <div class=\"text-center admin-application\">
            <i class=\"es-icon es-icon-entry-application\"></i>
          </div>
        {% endif %}
      </div>
    {% endfor %}
  </div>
</div>", "admin-v2/default/application-intro.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/application-intro.html.twig");
    }
}
