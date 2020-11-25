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

/* admin-v2/operating/block/tag/poster.html.twig */
class __TwigTemplate_a5a0d2aaf49936cb96b582bb852d42156b120107084a9ab6d524bc28651f6c25 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/tag/poster.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/block/tag/poster.html.twig"));

        // line 1
        $context["first"] = 1;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["block"] ?? null), "data", [], "any", false, true), ($context["code"] ?? $this->getContext($context, "code")), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["block"] ?? null), "data", [], "any", false, true), ($context["code"] ?? $this->getContext($context, "code")), [], "array"), null)) : (null)));
        foreach ($context['_seq'] as $context["dataId"] => $context["data"]) {
            // line 3
            echo "  <div role=\"tabpanel\" class=\"tab-pane ";
            if ((($context["first"] ?? $this->getContext($context, "first")) == 1)) {
                echo "active";
            }
            echo "\" id=\"poster-";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "\">
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_open_btn"), "html", null, true);
            echo "</label>
      <label class=\"checkbox-inline\">
        <input class=\"status-input\" type=\"radio\" value=\"1\" ";
            // line 7
            if (($this->getAttribute($context["data"], "status", []) == 1)) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_open_radio"), "html", null, true);
            echo "
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"status-input\" type=\"radio\" value=\"0\" ";
            // line 10
            if (($this->getAttribute($context["data"], "status", []) == 0)) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_closed_radio"), "html", null, true);
            echo "
      </label>
      <input class=\"status-value\" type=\"hidden\" name=\"data[";
            // line 12
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][status]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "status", []), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_layout_mode"), "html", null, true);
            echo "</label>
      <label class=\"checkbox-inline\">
        <input class=\"layout-input\" type=\"radio\" value=\"limitWide\" ";
            // line 17
            if (($this->getAttribute($context["data"], "layout", []) == "limitWide")) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_width_center_radio"), "html", null, true);
            echo "
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"layout-input\" type=\"radio\" value=\"tile\" ";
            // line 20
            if (($this->getAttribute($context["data"], "layout", []) == "tile")) {
                echo "checked";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_tile_center_radio"), "html", null, true);
            echo "
      </label>
      <input class=\"layout-value\" type=\"hidden\" name=\"data[";
            // line 22
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][layout]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "layout", []), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_edit_mode"), "html", null, true);
            echo "</label>
      <label class=\"checkbox-inline\">
        <input class=\"imgMode\" type=\"radio\" value=\"option1\" ";
            // line 27
            if (($this->getAttribute($context["data"], "mode", []) == "img")) {
                echo "checked=\"checked\"";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_img_mode_radio"), "html", null, true);
            echo "
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"htmlMode\" type=\"radio\" value=\"option2\" ";
            // line 30
            if (($this->getAttribute($context["data"], "mode", []) == "html")) {
                echo "checked=\"checked\"";
            }
            echo "> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_html_mode_radio"), "html", null, true);
            echo "
      </label>
      <input type=\"hidden\" name=\"data[";
            // line 32
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][mode]\" class=\"mode-value\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "mode", []), "html", null, true);
            echo "\">
    </div>
    <div class=\"edit-mode-img\" ";
            // line 34
            if (($this->getAttribute($context["data"], "mode", []) == "html")) {
                echo "style=\"display: none;\"";
            }
            echo ">
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          ";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_select_img"), "html", null, true);
            echo "
        </label>

        <div class=\"col-sm-10\">
          <label class=\"control-label img-mrl\">";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "src", []), "html", null, true);
            echo "</label>
          <a class=\"btn btn-default btn-sm img-mode-upload\" id=\"img-";
            // line 42
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "-uploadId-";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "\" data-upload-token=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUploadToken("system", "image"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_img_upload"), "html", null, true);
            echo "</a>
          <p class=\"text-success\">
            ";
            // line 44
            if (($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "code", []) == "live_top_banner")) {
                // line 45
                echo "              ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_live_top_banner_tips");
                echo "
              <a href=\"http://www.qiqiuyu.com/course/373/tasks\" target=\"_blank\">";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit_img_compress_url"), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 48
                echo "              ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_other_tips");
                echo "
              <a href=\"http://www.qiqiuyu.com/course/373/tasks\" target=\"_blank\">";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit_img_compress_url"), "html", null, true);
                echo "</a>
            ";
            }
            // line 51
            echo "          </p>
          <input class=\"form-control img-value\" type=\"hidden\" name=\"data[";
            // line 52
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][src]\" id=\"data[";
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][src]\" data-role=\"img-url\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["data"], "src", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["data"], "src", []), "")) : ("")), "html", null, true);
            echo "\">
          <img class=\"img-responsive mtm img-mtl\" src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["data"], "src", [])), "html", null, true);
            echo "\" alt=\"\">
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.tag_img_background_color"), "html", null, true);
            echo "
        </label>

        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control colorpicker-input width-input-small\" name=\"data[";
            // line 62
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][background]\" id=\"data[";
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][background]\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "background", []), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "background", []), "html", null, true);
            echo "\">
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          ";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_link_url"), "html", null, true);
            echo "
        </label>

        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control width-input-large\" name=\"data[";
            // line 71
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][href]\" id=\"data[";
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][href]\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getScheme", [], "method"), "html", null, true);
            echo "://\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "href", []), "html", null, true);
            echo "\">
        </div>
      </div>
    </div>
    <div class=\"edit-mode-html\" ";
            // line 75
            if (($this->getAttribute($context["data"], "mode", []) == "img")) {
                echo "style=\"display: none;\"";
            }
            echo ">
      <div class=\"form-group\">
        <div class=\"col-sm-10 col-sm-offset-2\">
          <textarea class=\"form-control mbl\" id=\"data[";
            // line 78
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][html]\" rows=\"15\"
          name=\"data[";
            // line 79
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "][";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "][html]\" data-role=\"editor-field\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "html", []), "html", null, true);
            echo "</textarea>
          <label class=\"control-label html-mrl\"></label><br>
          <a class=\"btn btn-default btn-sm html-mode-upload\" id=\"html-";
            // line 81
            echo twig_escape_filter($this->env, ($context["code"] ?? $this->getContext($context, "code")), "html", null, true);
            echo "-uploadId-";
            echo twig_escape_filter($this->env, $context["dataId"], "html", null, true);
            echo "\" data-upload-token=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUploadToken("system", "image"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.block_manage.visual_edit.poster_img_upload"), "html", null, true);
            echo "</a>
        </div>
      </div>
    </div>
  </div>
  ";
            // line 86
            $context["first"] = 0;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['dataId'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/operating/block/tag/poster.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  314 => 86,  300 => 81,  291 => 79,  285 => 78,  277 => 75,  260 => 71,  253 => 67,  235 => 62,  228 => 58,  220 => 53,  208 => 52,  205 => 51,  200 => 49,  195 => 48,  190 => 46,  185 => 45,  183 => 44,  172 => 42,  168 => 41,  161 => 37,  153 => 34,  144 => 32,  135 => 30,  125 => 27,  120 => 25,  110 => 22,  101 => 20,  91 => 17,  86 => 15,  76 => 12,  67 => 10,  57 => 7,  52 => 5,  42 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set first = 1 %}
{% for dataId,data in  block.data[code]|default(null) %}
  <div role=\"tabpanel\" class=\"tab-pane {% if first == 1 %}active{% endif %}\" id=\"poster-{{ dataId }}\">
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">{{'admin.block_manage.visual_edit.poster_open_btn'|trans}}</label>
      <label class=\"checkbox-inline\">
        <input class=\"status-input\" type=\"radio\" value=\"1\" {% if data.status == 1 %}checked{% endif %}> {{'admin.block_manage.visual_edit.poster_open_radio'|trans}}
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"status-input\" type=\"radio\" value=\"0\" {% if data.status == 0 %}checked{% endif %}> {{'admin.block_manage.visual_edit.poster_closed_radio'|trans}}
      </label>
      <input class=\"status-value\" type=\"hidden\" name=\"data[{{ code }}][{{ dataId }}][status]\" value=\"{{ data.status }}\">
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">{{'admin.block_manage.visual_edit.poster_layout_mode'|trans}}</label>
      <label class=\"checkbox-inline\">
        <input class=\"layout-input\" type=\"radio\" value=\"limitWide\" {% if data.layout == 'limitWide' %}checked{% endif %}> {{'admin.block_manage.visual_edit.poster_width_center_radio'|trans}}
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"layout-input\" type=\"radio\" value=\"tile\" {% if data.layout == 'tile' %}checked{% endif %}> {{'admin.block_manage.visual_edit.poster_tile_center_radio'|trans}}
      </label>
      <input class=\"layout-value\" type=\"hidden\" name=\"data[{{ code }}][{{ dataId }}][layout]\" value=\"{{ data.layout }}\">
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\">{{'admin.block_manage.visual_edit.poster_edit_mode'|trans}}</label>
      <label class=\"checkbox-inline\">
        <input class=\"imgMode\" type=\"radio\" value=\"option1\" {% if data.mode == 'img' %}checked=\"checked\"{% endif %}> {{'admin.block_manage.visual_edit.poster_img_mode_radio'|trans}}
      </label>
      <label class=\"checkbox-inline\">
        <input class=\"htmlMode\" type=\"radio\" value=\"option2\" {% if data.mode == 'html' %}checked=\"checked\"{% endif %}> {{'admin.block_manage.visual_edit.poster_html_mode_radio'|trans}}
      </label>
      <input type=\"hidden\" name=\"data[{{ code }}][{{ dataId }}][mode]\" class=\"mode-value\" value=\"{{ data.mode }}\">
    </div>
    <div class=\"edit-mode-img\" {% if data.mode == 'html' %}style=\"display: none;\"{% endif %}>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          {{'admin.block_manage.visual_edit.poster_select_img'|trans}}
        </label>

        <div class=\"col-sm-10\">
          <label class=\"control-label img-mrl\">{{ data.src }}</label>
          <a class=\"btn btn-default btn-sm img-mode-upload\" id=\"img-{{ code }}-uploadId-{{ dataId }}\" data-upload-token=\"{{ upload_token('system', 'image') }}\">{{'admin.block_manage.visual_edit.poster_img_upload'|trans}}</a>
          <p class=\"text-success\">
            {% if block.code == 'live_top_banner' %}
              {{'admin.block_manage.visual_edit.poster_live_top_banner_tips'|trans|raw}}
              <a href=\"http://www.qiqiuyu.com/course/373/tasks\" target=\"_blank\">{{ 'admin.block_manage.visual_edit_img_compress_url'|trans }}</a>
            {% else %}
              {{'admin.block_manage.visual_edit.poster_other_tips'|trans|raw}}
              <a href=\"http://www.qiqiuyu.com/course/373/tasks\" target=\"_blank\">{{ 'admin.block_manage.visual_edit_img_compress_url'|trans }}</a>
            {% endif %}
          </p>
          <input class=\"form-control img-value\" type=\"hidden\" name=\"data[{{ code }}][{{ dataId }}][src]\" id=\"data[{{ code }}][{{ dataId }}][src]\" data-role=\"img-url\" value=\"{{ data.src|default('') }}\">
          <img class=\"img-responsive mtm img-mtl\" src=\"{{ asset(data.src) }}\" alt=\"\">
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          {{'admin.block_manage.visual_edit.tag_img_background_color'|trans}}
        </label>

        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control colorpicker-input width-input-small\" name=\"data[{{ code }}][{{ dataId }}][background]\" id=\"data[{{ code }}][{{ dataId }}][background]\" placeholder=\"{{ data.background }}\" value=\"{{ data.background }}\">
        </div>
      </div>
      <div class=\"form-group\">
        <label class=\"col-sm-2 control-label\">
          {{'admin.block_manage.visual_edit.poster_link_url'|trans}}
        </label>

        <div class=\"col-sm-10\">
          <input type=\"text\" class=\"form-control width-input-large\" name=\"data[{{ code }}][{{ dataId }}][href]\" id=\"data[{{ code }}][{{ dataId }}][href]\" placeholder=\"{{ app.request.getScheme() }}://\" value=\"{{ data.href }}\">
        </div>
      </div>
    </div>
    <div class=\"edit-mode-html\" {% if data.mode == 'img' %}style=\"display: none;\"{% endif %}>
      <div class=\"form-group\">
        <div class=\"col-sm-10 col-sm-offset-2\">
          <textarea class=\"form-control mbl\" id=\"data[{{ code }}][{{ dataId }}][html]\" rows=\"15\"
          name=\"data[{{ code }}][{{ dataId }}][html]\" data-role=\"editor-field\">{{ data.html }}</textarea>
          <label class=\"control-label html-mrl\"></label><br>
          <a class=\"btn btn-default btn-sm html-mode-upload\" id=\"html-{{ code }}-uploadId-{{ dataId }}\" data-upload-token=\"{{ upload_token('system', 'image') }}\">{{'admin.block_manage.visual_edit.poster_img_upload'|trans}}</a>
        </div>
      </div>
    </div>
  </div>
  {% set first = 0 %}
{% endfor %}", "admin-v2/operating/block/tag/poster.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/operating/block/tag/poster.html.twig");
    }
}
