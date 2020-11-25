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

/* admin-v2/default/quick-entrance/index.html.twig */
class __TwigTemplate_59a32d265ec4442bc082a12a1f571be5603168cdb47a4b3e02e27a87e3f3c516 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/quick-entrance/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/quick-entrance/index.html.twig"));

        // line 1
        echo "<div class=\"row\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userQuickEntrances"] ?? $this->getContext($context, "userQuickEntrances")));
        foreach ($context['_seq'] as $context["_key"] => $context["entrance"]) {
            // line 3
            echo "    ";
            $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChildByCode($this->getAttribute($context["entrance"], "code", []), false);
            // line 4
            echo "    ";
            if (((($this->getAttribute(($context["tabMenu"] ?? null), "mode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tabMenu"] ?? null), "mode", []), "")) : ("")) == "capsules")) {
                // line 5
                echo "      ";
                $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild(($context["tabMenu"] ?? $this->getContext($context, "tabMenu")));
                // line 6
                echo "    ";
            }
            // line 7
            echo "    <div class=\"col-md-3\">
      <a class=\"";
            // line 8
            echo twig_escape_filter($this->env, ("text-center admin-function " . $this->getAttribute($context["entrance"], "class", [])), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["tabMenu"] ?? $this->getContext($context, "tabMenu"))), "html", null, true);
            echo "\"
         target=\"";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute($context["entrance"], "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["entrance"], "target", []), "_self")) : ("_self")), "html", null, true);
            echo "\">
        <div class=\"admin-function__icon\"><i class=\"";
            // line 10
            echo twig_escape_filter($this->env, ("es-icon es-icon-entry-" . $this->getAttribute($context["entrance"], "icon", [])), "html", null, true);
            echo "\"></i></div>
        <div class=\"admin-function__name\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrance"], "text", []), "html", null, true);
            echo "</div>
      </a>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  <div class=\"col-md-3\">
    <div class=\"admin-function-choose\">
      <a class=\"admin-function-btn\" data-toggle=\"modal\" data-target=\"#functionModal\">
        <i class=\"es-icon es-icon-add\"></i><span>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.edit_quick_entrance.btn"), "html", null, true);
        echo "</span>
      </a>
    </div>
  </div>
  ";
        // line 22
        $this->loadTemplate("admin-v2/default/quick-entrance/modal.html.twig", "admin-v2/default/quick-entrance/index.html.twig", 22)->display($context);
        // line 23
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/quick-entrance/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  94 => 22,  87 => 18,  82 => 15,  72 => 11,  68 => 10,  64 => 9,  58 => 8,  55 => 7,  52 => 6,  49 => 5,  46 => 4,  43 => 3,  39 => 2,  36 => 1,);
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
  {% for entrance in userQuickEntrances %}
    {% set tabMenu = first_child_permission_by_code(entrance.code, false) %}
    {% if tabMenu.mode|default('') == 'capsules' %}
      {% set tabMenu = first_child_permission(tabMenu) %}
    {% endif %}
    <div class=\"col-md-3\">
      <a class=\"{{ 'text-center admin-function ' ~ entrance.class }}\" href=\"{{ permission_path(tabMenu) }}\"
         target=\"{{ entrance.target|default('_self') }}\">
        <div class=\"admin-function__icon\"><i class=\"{{ 'es-icon es-icon-entry-' ~ entrance.icon }}\"></i></div>
        <div class=\"admin-function__name\">{{ entrance.text }}</div>
      </a>
    </div>
  {% endfor %}
  <div class=\"col-md-3\">
    <div class=\"admin-function-choose\">
      <a class=\"admin-function-btn\" data-toggle=\"modal\" data-target=\"#functionModal\">
        <i class=\"es-icon es-icon-add\"></i><span>{{ 'admin_v2.edit_quick_entrance.btn'|trans }}</span>
      </a>
    </div>
  </div>
  {% include 'admin-v2/default/quick-entrance/modal.html.twig' %}
</div>
", "admin-v2/default/quick-entrance/index.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/quick-entrance/index.html.twig");
    }
}
