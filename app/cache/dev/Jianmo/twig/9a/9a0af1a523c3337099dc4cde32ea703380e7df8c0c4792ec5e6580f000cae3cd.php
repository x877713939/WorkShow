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

/* default/header/part/user-role-manage.html.twig */
class __TwigTemplate_1dafd6e264acd73d08584e12a77da21d4e14e8950b97beaf8572675b737072da extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/part/user-role-manage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/part/user-role-manage.html.twig"));

        // line 2
        if ((($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_v2")) || twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "roles", [])))) {
            // line 3
            echo "  <li class=\"user-manage-li cd-dropdown cd-dropdown-right visible-lg cd-ml24\"  data-toggle=\"cd-dropdown\">
    <a class=\"btn cd-btn user-manage-toggle\" href=\"javascript:;\">";
            // line 4
            if (($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_v2"))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.admin_menu"), "html", null, true);
            } elseif (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "roles", []))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_course"), "html", null, true);
            }
            echo "<i class=\"cd-icon cd-icon-arrow-down cd-text-sm\"></i></a>
    <ul class=\"dropdown-menu user-manage-dropdown\" role=\"menu\">
      ";
            // line 7
            echo "      ";
            if (($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_v2"))) {
                // line 8
                echo "        <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.admin_menu"), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 10
            echo "      ";
            if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "isTeacher", [], "method")) {
                // line 11
                echo "        <li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_course"), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 13
            echo "      <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning"), "html", null, true);
            echo "</a></li>
    </ul>
  </li>
";
        } else {
            // line 17
            echo "  <li class=\"user-manage-li visible-lg cd-ml24\">
    <a class=\"btn cd-btn user-manage-toggle\" href=\"";
            // line 18
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning"), "html", null, true);
            echo "</a>
  </li>
";
        }
        // line 21
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/header/part/user-role-manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 21,  85 => 18,  82 => 17,  72 => 13,  64 => 11,  61 => 10,  53 => 8,  50 => 7,  41 => 4,  38 => 3,  36 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#添加admin_v2#}
{% if has_permission('admin') or has_permission('admin_v2') or 'ROLE_TEACHER' in app.user.roles %}
  <li class=\"user-manage-li cd-dropdown cd-dropdown-right visible-lg cd-ml24\"  data-toggle=\"cd-dropdown\">
    <a class=\"btn cd-btn user-manage-toggle\" href=\"javascript:;\">{% if has_permission('admin') or has_permission('admin_v2') %}{{'homepage.header.admin_menu'|trans}}{% elseif 'ROLE_TEACHER' in app.user.roles %}{{ 'homepage.header.my_course'|trans }}{% endif %}<i class=\"cd-icon cd-icon-arrow-down cd-text-sm\"></i></a>
    <ul class=\"dropdown-menu user-manage-dropdown\" role=\"menu\">
      {#添加admin_v2#}
      {% if has_permission('admin') or has_permission('admin_v2')%}
        <li><a href=\"{{ path('admin') }}\">{{'homepage.header.admin_menu'|trans}}</a></li>
      {% endif %}
      {% if app.user.isTeacher() %}
        <li><a href=\"{{ path('my') }}\">{{ 'homepage.header.my_course'|trans }}</a></li>
      {% endif %}
      <li><a href=\"{{ path('my_courses_learning') }}\">{{ 'homepage.header.my_learning'|trans }}</a></li>
    </ul>
  </li>
{% else %}
  <li class=\"user-manage-li visible-lg cd-ml24\">
    <a class=\"btn cd-btn user-manage-toggle\" href=\"{{ path('my_courses_learning') }}\">{{ 'homepage.header.my_learning'|trans }}</a>
  </li>
{% endif %}


", "default/header/part/user-role-manage.html.twig", "/var/www/bootcamp/chenlong/project-it-migrant-workers/app/Resources/views/default/header/part/user-role-manage.html.twig");
    }
}
