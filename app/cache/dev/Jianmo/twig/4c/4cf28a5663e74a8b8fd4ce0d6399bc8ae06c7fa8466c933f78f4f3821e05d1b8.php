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

/* admin-v2/operating/block/list-tr.html.twig */
class __TwigTemplate_f2126c690cad44828b6227f8095489cd20b2f6f4a77837d2f2d51d9af69b5f36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/list-tr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/list-tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("admin-v2/macro.html.twig", "admin-v2/operating/block/list-tr.html.twig", 1)->unwrap();
        // line 2
        echo "<tr id=\"blockitem";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["blockTemplate"] ?? $this->getContext($context, "blockTemplate")), "id", []), "html", null, true);
        echo "\">
    <td>
        ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["blockTemplate"] ?? $this->getContext($context, "blockTemplate")), "title", []), "html", null, true);
        echo "
        <br>
        <span class=\"text-muted text-sm\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.code", ["%code%" => $this->getAttribute(($context["blockTemplate"] ?? $this->getContext($context, "blockTemplate")), "code", [])]), "html", null, true);
        echo "</span>
    </td>
    <td>
        ";
        // line 9
        if ((($this->getAttribute(($context["latestHistory"] ?? null), "userId", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["latestHistory"] ?? null), "userId", []), null)) : (null))) {
            // line 10
            echo "        ";
            echo $context["admin_macro"]->getuser_link((((isset($context["latestUpdateUser"]) || array_key_exists("latestUpdateUser", $context))) ? (_twig_default_filter(($context["latestUpdateUser"] ?? $this->getContext($context, "latestUpdateUser")), null)) : (null)));
            echo "
        ";
        } else {
            // line 12
            echo "        <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.no_edit"), "html", null, true);
            echo "</span>
        ";
        }
        // line 14
        echo "        <br>
        ";
        // line 15
        if ((($this->getAttribute(($context["latestHistory"] ?? null), "createdTime", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["latestHistory"] ?? null), "createdTime", []), null)) : (null))) {
            // line 16
            echo "        <span class=\"text-muted text-sm\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["latestHistory"] ?? $this->getContext($context, "latestHistory")), "createdTime", []), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
        ";
        }
        // line 18
        echo "    </td>
    <td>
        ";
        // line 20
        if (($this->getAttribute(($context["blockTemplate"] ?? $this->getContext($context, "blockTemplate")), "mode", []) == "html")) {
            // line 21
            echo "            <button class=\"btn btn-sm btn-primary update-btn\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_block_update", ["blockTemplateId" => $this->getAttribute(($context["blockTemplate"] ?? $this->getContext($context, "blockTemplate")), "id", []), "type" => ($context["type"] ?? $this->getContext($context, "type"))]), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.edit_html"), "html", null, true);
            echo "</button>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        if (($this->getAttribute(($context["blockTemplate"] ?? $this->getContext($context, "blockTemplate")), "mode", []) == "template")) {
            // line 25
            echo "            <a class=\"btn btn-sm btn-primary update-btn\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_block_visual_edit", ["blockTemplateId" => $this->getAttribute(($context["blockTemplate"] ?? $this->getContext($context, "blockTemplate")), "id", []), "type" => ($context["type"] ?? $this->getContext($context, "type"))]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.edit_content"), "html", null, true);
            echo "</a>
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.debug")) {
            // line 29
            echo "        
        <button class=\"btn btn-sm btn-default edit-btn hidden\" data-url=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_block_template_edit", ["blockTemplateId" => $this->getAttribute(($context["blockTemplate"] ?? $this->getContext($context, "blockTemplate")), "id", []), "type" => ($context["type"] ?? $this->getContext($context, "type"))]), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.set_up"), "html", null, true);
            echo "</button>
        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_block_delete", ["id" => $this->getAttribute(($context["blockTemplate"] ?? $this->getContext($context, "blockTemplate")), "id", [])]), "html", null, true);
            echo "\" data-target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["blockTemplate"] ?? $this->getContext($context, "blockTemplate")), "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.delete"), "html", null, true);
            echo "</button>
        ";
        }
        // line 33
        echo "    </td>
</tr>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/operating/block/list-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 33,  121 => 31,  115 => 30,  112 => 29,  110 => 28,  107 => 27,  99 => 25,  97 => 24,  94 => 23,  86 => 21,  84 => 20,  80 => 18,  74 => 16,  72 => 15,  69 => 14,  63 => 12,  57 => 10,  55 => 9,  49 => 6,  44 => 4,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import \"admin-v2/macro.html.twig\" as admin_macro %}
<tr id=\"blockitem{{ blockTemplate.id }}\">
    <td>
        {{ blockTemplate.title }}
        <br>
        <span class=\"text-muted text-sm\">{{'admin.block_manage.code'|trans({'%code%': blockTemplate.code})}}</span>
    </td>
    <td>
        {% if latestHistory.userId|default(null) %}
        {{ admin_macro.user_link(latestUpdateUser|default(null)) }}
        {% else %}
        <span class=\"text-muted\">{{'admin.block_manage.no_edit'|trans}}</span>
        {% endif %}
        <br>
        {% if latestHistory.createdTime|default(null) %}
        <span class=\"text-muted text-sm\">{{ latestHistory.createdTime|date('Y-n-d H:i:s') }}</span>
        {% endif %}
    </td>
    <td>
        {% if blockTemplate.mode == 'html' %}
            <button class=\"btn btn-sm btn-primary update-btn\" data-url=\"{{ path('admin_v2_block_update', {blockTemplateId:blockTemplate.id,type:type}) }}\" data-toggle=\"modal\" data-target=\"#modal\">{{'admin.block_manage.edit_html'|trans}}</button>
        {% endif %}

        {% if blockTemplate.mode == 'template' %}
            <a class=\"btn btn-sm btn-primary update-btn\" href=\"{{ path('admin_v2_block_visual_edit', {blockTemplateId:blockTemplate.id,type:type}) }}\">{{'admin.block_manage.edit_content'|trans}}</a>
        {% endif %}

        {% if setting('developer.debug') %}
        
        <button class=\"btn btn-sm btn-default edit-btn hidden\" data-url=\"{{ path('admin_v2_block_template_edit', {blockTemplateId:blockTemplate.id,type:type}) }}\" data-toggle=\"modal\" data-target=\"#modal\" >{{'admin.block_manage.set_up'|trans}}</button>
        <button class=\"btn btn-sm btn-default delete-btn\" data-url=\"{{ path('admin_v2_block_delete', {id:blockTemplate.id}) }}\" data-target=\"{{ blockTemplate.id }}\">{{'admin.block_manage.delete'|trans}}</button>
        {% endif %}
    </td>
</tr>", "admin-v2/operating/block/list-tr.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/operating/block/list-tr.html.twig");
    }
}
