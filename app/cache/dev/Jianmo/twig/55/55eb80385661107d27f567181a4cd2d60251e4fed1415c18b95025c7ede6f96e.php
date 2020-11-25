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

/* admin-v2/operating/block/block-visual-items.html.twig */
class __TwigTemplate_337cbd7a90826fa926635562383803135a7c0f4eb689a8b8ba587a641d963c7b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/block-visual-items.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/block-visual-items.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["block"] ?? null), "meta", [], "any", false, true), "items", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["block"] ?? null), "meta", [], "any", false, true), "items", []), null)) : (null)));
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
        foreach ($context['_seq'] as $context["code"] => $context["item"]) {
            // line 2
            echo "  ";
            if (($this->getAttribute($context["item"], "type", []) != "poster")) {
                // line 3
                echo "    <section id=\"js-affix-";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\">
      <div class=\"item-title\">
        <strong>";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                echo "</strong>
        <p class=\"text-muted\">";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "desc", []), "html", null, true);
                echo "
          ";
                // line 7
                if (($context["code"] == "carousel")) {
                    // line 8
                    echo "            <a href=\"http://www.qiqiuyu.com/course/373/tasks\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit_img_compress_url"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 10
                echo "        </p>
      </div>

      <div class=\"panel-group sortable-list\" id=\"js-accordion-";
                // line 13
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\" data-code=\"";
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "\"
           data-prefix=\"data[";
                // line 14
                echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                echo "]\" data-count=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "count", []), "html", null, true);
                echo "\" data-role=\"collapse\" role=\"tablist\"
           aria-multiselectable=\"true\">
        ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["block"] ?? null), "data", [], "any", false, true), $context["code"], [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["block"] ?? null), "data", [], "any", false, true), $context["code"], [], "array"), null)) : (null)));
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
                foreach ($context['_seq'] as $context["dataId"] => $context["data"]) {
                    // line 17
                    echo "          <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-heading-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\" data-toggle=\"collapse\"
                 data-parent=\"#js-accordion-";
                    // line 19
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "\" href=\"#";
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-collapse-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\"
                 aria-expanded=\"false\" aria-controls=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-collapse-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\">
              <h4 class=\"panel-title clearfix\">
                <i class=\"js-move-seq glyphicon glyphicon-move pull-left mrs\"></i>
                <span class=\"panel-item-title ellipsis\">";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true);
                    echo "</span>
                <span class=\"pull-left\">&nbsp;-&nbsp;</span>
                ";
                    // line 25
                    $this->loadTemplate((("admin-v2/operating/block/label/" . $this->getAttribute($context["item"], "type", [])) . ".html.twig"), "admin-v2/operating/block/block-visual-items.html.twig", 25)->display($context);
                    // line 26
                    echo "                <i class=\"js-expand-icon glyphicon glyphicon-chevron-down pull-right\" title=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.panel_expand"), "html", null, true);
                    echo "\"></i>
                ";
                    // line 27
                    if (($this->getAttribute($context["item"], "count", []) != 1)) {
                        // line 28
                        echo "                  <i class=\"mrs js-remove-btn glyphicon glyphicon-trash pull-right\" title=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.panel_delete"), "html", null, true);
                        echo "\"></i>
                ";
                    }
                    // line 30
                    echo "              </h4>

            </div>
            <div id=\"";
                    // line 33
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-collapse-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", []), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                 aria-labelledby=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $context["code"], "html", null, true);
                    echo "-heading-";
                    echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
                    echo "\">
              <div class=\"panel-body\">
                ";
                    // line 36
                    $this->loadTemplate((("admin-v2/operating/block/tag/" . $this->getAttribute($context["item"], "type", [])) . ".html.twig"), "admin-v2/operating/block/block-visual-items.html.twig", 36)->display($context);
                    // line 37
                    echo "              </div>
            </div>
          </div>

        ";
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
                unset($context['_seq'], $context['_iterated'], $context['dataId'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "      </div>
      ";
                // line 43
                if (($this->getAttribute($context["item"], "count", []) != 1)) {
                    // line 44
                    echo "        <div class=\"btn btn-default text-center js-add-btn\"
             style=\"width:100%;margin-top:-10px;margin-bottom:20px;\">";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.add_panel"), "html", null, true);
                    echo "</div>
      ";
                }
                // line 47
                echo "
    </section>
  ";
            } else {
                // line 50
                echo "    <ul class=\"nav nav-pills mvl sortable-list\" id=\"btn-tabs\">
      ";
                // line 51
                $this->loadTemplate((("admin-v2/operating/block/label/" . $this->getAttribute($context["item"], "type", [])) . ".html.twig"), "admin-v2/operating/block/block-visual-items.html.twig", 51)->display($context);
                // line 52
                echo "    </ul>
    <div class=\"well\">
      <div class=\"tab-content\">
        ";
                // line 55
                $this->loadTemplate((("admin-v2/operating/block/tag/" . $this->getAttribute($context["item"], "type", [])) . ".html.twig"), "admin-v2/operating/block/block-visual-items.html.twig", 55)->display($context);
                // line 56
                echo "      </div>
    </div>
  ";
            }
            // line 59
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "<div class=\"form-group mtl\">
  <div class=\"col-sm-10 col-sm-offset-2\">
    <input type=\"hidden\" name=\"blockId\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["block"] ?? null), "blockId", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["block"] ?? null), "blockId", []))) : ("")), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"blockTemplateId\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["block"] ?? null), "blockTemplateId", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["block"] ?? null), "blockTemplateId", []))) : ("")), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"templateName\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["block"] ?? null), "templateName", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["block"] ?? null), "templateName", []))) : ("")), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["block"] ?? null), "code", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["block"] ?? null), "code", []))) : ("")), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"mode\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["block"] ?? null), "mode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["block"] ?? null), "mode", []))) : ("")), "html", null, true);
        echo "\">
  </div>
</div>
<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("site"), "html", null, true);
        echo "\">
<button id=\"block-save-btn\" data-submiting-text=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit.submiting"), "html", null, true);
        echo "\" type=\"submit\" class=\"btn btn-primary mrm\"
        data-toggle=\"block-edit-form\" data-target=\"#block-edit-form\">";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.save"), "html", null, true);
        echo "</button>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/operating/block/block-visual-items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 72,  282 => 71,  278 => 70,  272 => 67,  268 => 66,  264 => 65,  260 => 64,  256 => 63,  252 => 61,  237 => 59,  232 => 56,  230 => 55,  225 => 52,  223 => 51,  220 => 50,  215 => 47,  210 => 45,  207 => 44,  205 => 43,  202 => 42,  184 => 37,  182 => 36,  175 => 34,  167 => 33,  162 => 30,  156 => 28,  154 => 27,  149 => 26,  147 => 25,  142 => 23,  132 => 20,  122 => 19,  116 => 18,  113 => 17,  96 => 16,  89 => 14,  83 => 13,  78 => 10,  72 => 8,  70 => 7,  66 => 6,  62 => 5,  56 => 3,  53 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for code,item in block.meta.items|default(null) %}
  {% if item.type != 'poster' %}
    <section id=\"js-affix-{{ code }}\">
      <div class=\"item-title\">
        <strong>{{ item.title }}</strong>
        <p class=\"text-muted\">{{ item.desc }}
          {% if code == 'carousel' %}
            <a href=\"http://www.qiqiuyu.com/course/373/tasks\" target=\"_blank\">{{ 'admin.block_manage.visual_edit_img_compress_url'|trans }}</a>
          {% endif %}
        </p>
      </div>

      <div class=\"panel-group sortable-list\" id=\"js-accordion-{{ code }}\" data-code=\"{{ code }}\"
           data-prefix=\"data[{{ code }}]\" data-count=\"{{ item.count }}\" data-role=\"collapse\" role=\"tablist\"
           aria-multiselectable=\"true\">
        {% for dataId,data in  block.data[code]|default(null) %}
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\" role=\"tab\" id=\"{{ code }}-heading-{{ dataId }}\" data-toggle=\"collapse\"
                 data-parent=\"#js-accordion-{{ code }}\" href=\"#{{ code }}-collapse-{{ loop.index }}-{{ dataId }}\"
                 aria-expanded=\"false\" aria-controls=\"{{ code }}-collapse-{{ loop.index }}-{{ dataId }}\">
              <h4 class=\"panel-title clearfix\">
                <i class=\"js-move-seq glyphicon glyphicon-move pull-left mrs\"></i>
                <span class=\"panel-item-title ellipsis\">{{ item.title }}</span>
                <span class=\"pull-left\">&nbsp;-&nbsp;</span>
                {% include 'admin-v2/operating/block/label/' ~ item.type ~ '.html.twig' %}
                <i class=\"js-expand-icon glyphicon glyphicon-chevron-down pull-right\" title=\"{{ 'admin.block_manage.visual_edit.panel_expand'|trans }}\"></i>
                {% if item.count != 1 %}
                  <i class=\"mrs js-remove-btn glyphicon glyphicon-trash pull-right\" title=\"{{ 'admin.block_manage.visual_edit.panel_delete'|trans }}\"></i>
                {% endif %}
              </h4>

            </div>
            <div id=\"{{ code }}-collapse-{{ loop.index }}-{{ dataId }}\" class=\"panel-collapse collapse\" role=\"tabpanel\"
                 aria-labelledby=\"{{ code }}-heading-{{ dataId }}\">
              <div class=\"panel-body\">
                {% include 'admin-v2/operating/block/tag/' ~ item.type ~ '.html.twig' %}
              </div>
            </div>
          </div>

        {% endfor %}
      </div>
      {% if item.count != 1 %}
        <div class=\"btn btn-default text-center js-add-btn\"
             style=\"width:100%;margin-top:-10px;margin-bottom:20px;\">{{ 'admin.block_manage.visual_edit.add_panel'|trans }}</div>
      {% endif %}

    </section>
  {% else %}
    <ul class=\"nav nav-pills mvl sortable-list\" id=\"btn-tabs\">
      {% include 'admin-v2/operating/block/label/' ~ item.type ~ '.html.twig' %}
    </ul>
    <div class=\"well\">
      <div class=\"tab-content\">
        {% include 'admin-v2/operating/block/tag/' ~ item.type ~ '.html.twig' %}
      </div>
    </div>
  {% endif %}

{% endfor %}
<div class=\"form-group mtl\">
  <div class=\"col-sm-10 col-sm-offset-2\">
    <input type=\"hidden\" name=\"blockId\" value=\"{{ block.blockId|default() }}\">
    <input type=\"hidden\" name=\"blockTemplateId\" value=\"{{ block.blockTemplateId|default() }}\">
    <input type=\"hidden\" name=\"templateName\" value=\"{{ block.templateName|default() }}\">
    <input type=\"hidden\" name=\"code\" value=\"{{ block.code|default() }}\">
    <input type=\"hidden\" name=\"mode\" value=\"{{ block.mode|default() }}\">
  </div>
</div>
<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
<button id=\"block-save-btn\" data-submiting-text=\"{{ 'form.btn.submit.submiting'|trans }}\" type=\"submit\" class=\"btn btn-primary mrm\"
        data-toggle=\"block-edit-form\" data-target=\"#block-edit-form\">{{ 'admin.block_manage.visual_edit.save'|trans }}</button>
", "admin-v2/operating/block/block-visual-items.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/operating/block/block-visual-items.html.twig");
    }
}
