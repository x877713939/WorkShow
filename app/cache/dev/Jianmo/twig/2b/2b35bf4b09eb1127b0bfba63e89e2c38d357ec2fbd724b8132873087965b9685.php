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

/* admin-v2/widget/tabs.html.twig */
class __TwigTemplate_2e1d4538b1e6bf9d487ea22843b754bb27268ccefa2794635de2ed773e149a30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/widget/tabs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/widget/tabs.html.twig"));

        // line 2
        echo "  ";
        $context["tabMenus"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getVisibleMenus($this->env->getExtension('AppBundle\Twig\WebExtension')->arraysKeyConvert($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions((($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", []), null)) : (null))), "visable", "visible"));
        // line 4
        echo "
";
        // line 5
        if (((((isset($context["tabMenus"]) || array_key_exists("tabMenus", $context))) ? (_twig_default_filter(($context["tabMenus"] ?? $this->getContext($context, "tabMenus")), null)) : (null)) && (twig_length_filter($this->env, ($context["tabMenus"] ?? $this->getContext($context, "tabMenus"))) > 1))) {
            // line 6
            echo "  <ul class=\"nav nav-tabs mbm\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tabMenus"] ?? $this->getContext($context, "tabMenus")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 8
                echo "      ";
                if (( !(($this->getAttribute($context["m"], "mode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "mode", []), "")) : ("")) == "capsules")) {
                    // line 9
                    echo "        ";
                    $context["path"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, $context["m"]);
                    // line 10
                    echo "      ";
                } else {
                    // line 11
                    echo "        ";
                    $context["path"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"]));
                    // line 12
                    echo "      ";
                }
                // line 13
                echo "
      <li ";
                // line 14
                if (($this->getAttribute($context["m"], "code", []) == (((isset($context["menu"]) || array_key_exists("menu", $context))) ? (_twig_default_filter(($context["menu"] ?? $this->getContext($context, "menu")), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
        <a
          title=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", []), [], "menu"), "html", null, true);
                echo "\"
          class=\"";
                // line 17
                echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", []), "")) : ("")), "html", null, true);
                echo "\"
          href=\"";
                // line 18
                echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                echo "\"
          id=\"";
                // line 19
                echo twig_escape_filter($this->env, ("tab_" . ($context["menu"] ?? $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
        >
          ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", []), [], "menu"), "html", null, true);
                echo "
        </a>
      </li>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "  </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/widget/tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 26,  93 => 21,  88 => 19,  84 => 18,  80 => 17,  76 => 16,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  51 => 8,  47 => 7,  44 => 6,  42 => 5,  39 => 4,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# 兼容菜单配置中单词错误拼写：visable 正确为：visible  等插件全部更新完毕删除此代码 #}
  {% set tabMenus = arrays_key_convert(sub_permissions(menu|parent_permission.code|default(null)), 'visable', 'visible')|visible_menus %}
{# 兼容代码结束 #}

{% if tabMenus|default(null) and tabMenus|length > 1 %}
  <ul class=\"nav nav-tabs mbm\">
    {% for m in tabMenus %}
      {% if not m.mode|default('') == 'capsules' %}
        {% set path = permission_path(m) %}
      {% else %}
        {% set path = permission_path(first_child_permission(m)) %}
      {% endif %}

      <li {% if m.code == menu|default(null) %}class=\"active\"{% endif %}>
        <a
          title=\"{{ m.name|trans({}, 'menu') }}\"
          class=\"{{ m.class|default('') }}\"
          href=\"{{ path }}\"
          id=\"{{ 'tab_'~menu }}\"
        >
          {{ m.name|trans({}, 'menu') }}
        </a>
      </li>

    {% endfor %}
  </ul>
{% endif %}", "admin-v2/widget/tabs.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/widget/tabs.html.twig");
    }
}
