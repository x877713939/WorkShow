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

/* admin-v2/operating/block/index.html.twig */
class __TwigTemplate_f345d87a85798e627f2d2be3f9e93d0a1ff71b553566750113af40745aa22a75 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page_buttons' => [$this, 'block_page_buttons'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin-v2/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/index.html.twig"));

        // line 3
        $context["menu"] = ("admin_v2_block_" . (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "theme")) : ("theme")));
        // line 5
        $context["script_controller"] = "block/list";
        // line 1
        $this->parent = $this->loadTemplate("admin-v2/layout.html.twig", "admin-v2/operating/block/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_page_buttons($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_buttons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_buttons"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "    ";
        $context["url"] = ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_block_match", ["type" => ($context["type"] ?? $this->getContext($context, "type"))]) . "?q={{query}}");
        // line 10
        echo "    <input class=\"pull-left form-control quicksearch\" id=\"block-input\"  data-role=\"item-input\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.search_block_placeholder"), "html", null, true);
        echo "\" data-url='";
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "'>

    <table id=\"block-table\" class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"50%\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.title"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.latest_update"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.operation"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 21
        if (($context["blockTemplates"] ?? $this->getContext($context, "blockTemplates"))) {
            // line 22
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blockTemplates"] ?? $this->getContext($context, "blockTemplates")));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["blockTemplate"]) {
                // line 23
                echo "        ";
                $context["latestHistory"] = (($this->getAttribute(($context["latestHistories"] ?? null), $this->getAttribute($context["blockTemplate"], "id", []), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["latestHistories"] ?? null), $this->getAttribute($context["blockTemplate"], "id", []), [], "array"), null)) : (null));
                // line 24
                echo "        ";
                $context["latestUpdateUser"] = (($this->getAttribute(($context["users"] ?? null), (($this->getAttribute(($context["latestHistory"] ?? null), "userId", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["latestHistory"] ?? null), "userId", []), null)) : (null)), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["users"] ?? null), (($this->getAttribute(($context["latestHistory"] ?? null), "userId", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["latestHistory"] ?? null), "userId", []), null)) : (null)), [], "array"), null)) : (null));
                // line 25
                echo "        ";
                $this->loadTemplate("admin-v2/operating/block/list-tr.html.twig", "admin-v2/operating/block/index.html.twig", 25)->display($context);
                // line 26
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockTemplate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "  ";
        } else {
            // line 28
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.empty"), "html", null, true);
            echo "</div></td></tr>
  ";
        }
        // line 30
        echo "   </tbody>
</table>
 ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? $this->getContext($context, "admin_macro")), "paginator", [0 => ($context["paginator"] ?? $this->getContext($context, "paginator"))], "method"), "html", null, true);
        echo " 
 <style>
.form-control.quicksearch{
  display:inline;
  float:right;
  width:auto;
  padding:4px 12px;
}

.price{

  color: #e57259;
  font-size: 16px;

}

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/operating/block/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 32,  164 => 30,  158 => 28,  155 => 27,  141 => 26,  138 => 25,  135 => 24,  132 => 23,  114 => 22,  112 => 21,  105 => 17,  101 => 16,  97 => 15,  86 => 10,  83 => 9,  74 => 8,  57 => 6,  46 => 1,  44 => 5,  42 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin-v2/layout.html.twig' %}

{% set menu = 'admin_v2_block_'~type|default('theme') %}

{% set script_controller = 'block/list' %}
{% block page_buttons %}
{% endblock %}
{% block main %}
    {% set url = path('admin_v2_block_match',{type: type}) ~ '?q={{query}}' %}
    <input class=\"pull-left form-control quicksearch\" id=\"block-input\"  data-role=\"item-input\" placeholder=\"{{'admin.block_manage.search_block_placeholder'|trans}}\" data-url='{{url}}'>

    <table id=\"block-table\" class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"50%\">{{'admin.block_manage.title'|trans}}</th>
      <th width=\"25%\">{{'admin.block_manage.latest_update'|trans}}</th>
      <th width=\"25%\">{{'admin.block_manage.operation'|trans}}</th>
    </tr>
  </thead>
  <tbody>
    {% if blockTemplates %}
      {% for blockTemplate in blockTemplates %}
        {% set latestHistory = latestHistories[blockTemplate.id]|default(null) %}
        {% set latestUpdateUser = users[latestHistory.userId|default(null)]|default(null) %}
        {% include 'admin-v2/operating/block/list-tr.html.twig' %}
      {% endfor %}
  {% else %}
        <tr><td colspan=\"20\"><div class=\"empty\">{{'admin.block_manage.empty'|trans}}</div></td></tr>
  {% endif %}
   </tbody>
</table>
 {{ admin_macro.paginator(paginator) }} 
 <style>
.form-control.quicksearch{
  display:inline;
  float:right;
  width:auto;
  padding:4px 12px;
}

.price{

  color: #e57259;
  font-size: 16px;

}

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}
</style>
{% endblock %}
", "admin-v2/operating/block/index.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/operating/block/index.html.twig");
    }
}
