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

/* admin-v2/widget/navigation.html.twig */
class __TwigTemplate_036c6cc756644394427e3c24ca1f7cdaa0cb91b1eb3f7dfc6bae9d13a152e18f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/widget/navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/widget/navigation.html.twig"));

        // line 1
        $context["permissions"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions("admin_v2");
        // line 2
        echo "
";
        // line 3
        if ((((isset($context["permissions"]) || array_key_exists("permissions", $context))) ? (_twig_default_filter(($context["permissions"] ?? $this->getContext($context, "permissions")), null)) : (null))) {
            // line 4
            echo "  ";
            if ((((isset($context["menu"]) || array_key_exists("menu", $context))) ? (_twig_default_filter(($context["menu"] ?? $this->getContext($context, "menu")), null)) : (null))) {
                // line 5
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getNavPermission(($context["menu"] ?? $this->getContext($context, "menu")));
                // line 6
                echo "  ";
            } else {
                // line 7
                echo "    ";
                $context["rootMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode("admin_v2");
                // line 8
                echo "  ";
            }
            // line 9
            echo "
<ul class=\"cd-tabs ct-layout-navbar_ul\">
  <li ";
            // line 11
            if ((((isset($context["adminV2Homepage"]) || array_key_exists("adminV2Homepage", $context))) ? (_twig_default_filter(($context["adminV2Homepage"] ?? $this->getContext($context, "adminV2Homepage")), null)) : (null))) {
                echo "class=\"active\"";
            }
            echo " id=\"nav_admin_v2\">
    <a title=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.overview"), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.overview"), "html", null, true);
            echo "</a>
  </li>
  ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["permissions"] ?? $this->getContext($context, "permissions")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visible", [], "any", true, true) || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visible", [])))) {
                    // line 15
                    echo "    ";
                    $context["tabMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getFirstChild($context["m"], true, false), true, false), true, false);
                    // line 16
                    echo "    ";
                    if (($context["tabMenu"] ?? $this->getContext($context, "tabMenu"))) {
                        // line 17
                        echo "      <li class=\"";
                        if ((($context["menu"] ?? $this->getContext($context, "menu")) && ($this->getAttribute($context["m"], "code", []) == (($this->getAttribute(($context["rootMenu"] ?? null), "code", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["rootMenu"] ?? null), "code", []), null)) : (null))))) {
                            echo "active";
                        }
                        echo " ";
                        if (($this->getAttribute($context["m"], "code", []) == "admin_v2_cloud_center")) {
                            echo "application-icon";
                        }
                        echo " ";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", []), "")) : ("")), "html", null, true);
                        echo "\" id=\"nav_";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "code", []), "html", null, true);
                        echo "\">
        <a
          title=\"";
                        // line 19
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", []), [], "menu"), "html", null, true);
                        echo "\"
          href=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["tabMenu"] ?? $this->getContext($context, "tabMenu"))), "html", null, true);
                        echo "\"
          ";
                        // line 21
                        if ((($this->getAttribute($context["m"], "blank", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "blank", []), false)) : (false))) {
                            // line 22
                            echo "            target=\"_blank\"
          ";
                        }
                        // line 24
                        echo "        >
          <img src=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin-v2/app.png"), "html", null, true);
                        echo "\" srcset=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin-v2/app.png"), "html", null, true);
                        echo " 1x, ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin-v2/app@2x.png"), "html", null, true);
                        echo " 2x\"><span>";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", []), [], "menu"), "html", null, true);
                        echo "</span>
        </a>
      </li>
    ";
                    }
                    // line 29
                    echo "  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "</ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/widget/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 30,  134 => 29,  121 => 25,  118 => 24,  114 => 22,  112 => 21,  108 => 20,  104 => 19,  88 => 17,  85 => 16,  82 => 15,  77 => 14,  68 => 12,  62 => 11,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set permissions = sub_permissions('admin_v2') %}

{% if permissions|default(null) %}
  {% if menu|default(null) %}
    {% set rootMenu = nav_permission(menu) %}
  {% else %}
    {% set rootMenu = permission('admin_v2') %}
  {% endif %}

<ul class=\"cd-tabs ct-layout-navbar_ul\">
  <li {% if adminV2Homepage|default(null) %}class=\"active\"{% endif %} id=\"nav_admin_v2\">
    <a title=\"{{ 'admin_v2.homepage.overview'|trans }}\" href=\"{{ path('admin_v2') }}\">{{ 'admin_v2.homepage.overview'|trans }}</a>
  </li>
  {% for m in permissions if not m.visible is defined or eval_expression(m.visible) %}
    {% set tabMenu = first_child_permission(first_child_permission(first_child_permission(m, true, false), true, false), true, false) %}
    {% if tabMenu %}
      <li class=\"{% if menu and m.code == rootMenu.code|default(null) %}active{% endif %} {% if m.code == 'admin_v2_cloud_center' %}application-icon{% endif %} {{ m.class|default('') }}\" id=\"nav_{{ m.code }}\">
        <a
          title=\"{{ m.name|trans({}, 'menu') }}\"
          href=\"{{ permission_path(tabMenu) }}\"
          {% if m.blank|default(false)%}
            target=\"_blank\"
          {% endif %}
        >
          <img src=\"{{ asset('static-dist/app/img/admin-v2/app.png') }}\" srcset=\"{{ asset('static-dist/app/img/admin-v2/app.png') }} 1x, {{ asset('static-dist/app/img/admin-v2/app@2x.png') }} 2x\"><span>{{ m.name|trans({}, 'menu') }}</span>
        </a>
      </li>
    {% endif %}
  {% endfor %}
</ul>
{% endif %}
", "admin-v2/widget/navigation.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/widget/navigation.html.twig");
    }
}
