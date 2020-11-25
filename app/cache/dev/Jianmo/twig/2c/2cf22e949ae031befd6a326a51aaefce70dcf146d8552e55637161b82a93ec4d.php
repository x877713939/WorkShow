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

/* admin-v2/operating/block/block-visual-edit.html.twig */
class __TwigTemplate_9178016cedaf5466f2020e0ebedf791cde1f9bb364074f0bdb7f26a60337897a extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'page_title' => [$this, 'block_page_title'],
            'blockVisual' => [$this, 'block_blockVisual'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin-v2/operating/block/block-visual-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/block-visual-edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/block-visual-edit.html.twig"));

        // line 3
        $context["menu"] = ("admin_v2_block_" . (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "theme")) : ("theme")));
        // line 5
        $context["currentPage"] = "admin_v2_block_visual_edit";
        // line 9
        $context["script_controller"] = "block/visual-edit";
        // line 1
        $this->parent = $this->loadTemplate("admin-v2/operating/block/block-visual-layout.html.twig", "admin-v2/operating/block/block-visual-edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.title"), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_blockVisual($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blockVisual"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blockVisual"));

        // line 12
        echo "  <style type=\"text/css\">
    .sortable-list .placeholder {
      margin: 10px 0;
      width: 100%;
      height: 40px;
      background: #FCFFC0;
      border: 1px dashed #ccc;
      list-style: none;
    }
    .nav.sortable-list .placeholder {
      width: 80px;
      padding: 10px 15px;
      background: #eee;
      margin: 0;
    }
    .nav.nav-pills .dragged{
      position: absolute!important;
    }
  </style>
  ";
        // line 31
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "debug", [])) {
            // line 32
            echo "    <a class=\"btn btn-default btn-sm pull-right\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_block_visual_view_data", ["blockTemplateId" => $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "blockTemplateId", [])]), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.watch_json_config"), "html", null, true);
            echo "</a>
  ";
        }
        // line 34
        echo "
    <!-- 以下是简墨新版的样式 -->
    <h4>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "title", []), "html", null, true);
        echo "</h4>
    <form id=\"block-edit-form\" class=\"visual-edit-form form-horizontal\" method=\"POST\" action=\"\">
      ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? $this->getContext($context, "web_macro")), "flash_messages", [], "method"), "html", null, true);
        echo "
      ";
        // line 39
        $this->loadTemplate("admin-v2/operating/block/block-visual-items.html.twig", "admin-v2/operating/block/block-visual-edit.html.twig", 39)->display($context);
        // line 40
        echo "    </form>
    <!-- 以上是新版的样式 -->

  <!-- <div class=\"col-md-4\">
    ";
        // line 44
        $this->loadTemplate("admin-v2/operating/block/affix-nav.html.twig", "admin-v2/operating/block/block-visual-edit.html.twig", 44)->display($context);
        // line 45
        echo "  </div> -->

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/operating/block/block-visual-edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 45,  140 => 44,  134 => 40,  132 => 39,  128 => 38,  123 => 36,  119 => 34,  111 => 32,  109 => 31,  88 => 12,  79 => 11,  59 => 7,  48 => 1,  46 => 9,  44 => 5,  42 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin-v2/operating/block/block-visual-layout.html.twig' %}

{% set menu = 'admin_v2_block_'~type|default('theme') %}

{% set currentPage = 'admin_v2_block_visual_edit' %}

{% block page_title %} {{'admin.block_manage.visual_edit.title'|trans}} {% endblock %}

{% set script_controller = 'block/visual-edit' %}

{% block blockVisual %}
  <style type=\"text/css\">
    .sortable-list .placeholder {
      margin: 10px 0;
      width: 100%;
      height: 40px;
      background: #FCFFC0;
      border: 1px dashed #ccc;
      list-style: none;
    }
    .nav.sortable-list .placeholder {
      width: 80px;
      padding: 10px 15px;
      background: #eee;
      margin: 0;
    }
    .nav.nav-pills .dragged{
      position: absolute!important;
    }
  </style>
  {% if app.debug %}
    <a class=\"btn btn-default btn-sm pull-right\" href=\"{{ path('admin_v2_block_visual_view_data', {blockTemplateId:block.blockTemplateId}) }}\" target=\"_blank\">{{'admin.block_manage.visual_edit.watch_json_config'|trans}}</a>
  {% endif %}

    <!-- 以下是简墨新版的样式 -->
    <h4>{{ block.title }}</h4>
    <form id=\"block-edit-form\" class=\"visual-edit-form form-horizontal\" method=\"POST\" action=\"\">
      {{ web_macro.flash_messages() }}
      {% include 'admin-v2/operating/block/block-visual-items.html.twig' %}
    </form>
    <!-- 以上是新版的样式 -->

  <!-- <div class=\"col-md-4\">
    {% include 'admin-v2/operating/block/affix-nav.html.twig' %}
  </div> -->

{% endblock %}
", "admin-v2/operating/block/block-visual-edit.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/operating/block/block-visual-edit.html.twig");
    }
}
