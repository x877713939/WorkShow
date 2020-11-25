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

/* admin-v2/operating/wap/set.html.twig */
class __TwigTemplate_f3999a085b1d32c14d468434aeb1376c618334bfdcb247c86baebc52f54d2dcf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/wap/set.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/operating/wap/set.html.twig"));

        // line 3
        $context["menu"] = "admin_v2_wap_set";
        // line 5
        $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("h5-admin/index.js");
        // line 1
        $this->parent = $this->loadTemplate("admin-v2/layout.html.twig", "admin-v2/operating/wap/set.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  <div class=\"h5-find-body\">
    <ul class=\"nav nav-tabs setting-nav-tab js-nav-tab\">
      <li class=\"active\"><a href=\"#find-page\" data-toggle=\"tab\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.mini_school"), "html", null, true);
        echo "</a></li>
      <li ><a href=\"#theme-page\" data-toggle=\"tab\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.theme"), "html", null, true);
        echo "</a></li>
      <li ><a href=\"#site-page\" data-toggle=\"tab\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.site"), "html", null, true);
        echo "</a></li>
    </ul>
    <div class=\"tab-content h5-tab-content\">
      ";
        // line 17
        echo "      <div class=\"tab-pane fade in active h5-mtl\" id=\"find-page\">
        ";
        // line 18
        if ((($context["template"] ?? $this->getContext($context, "template")) && (2 == $this->getAttribute(($context["wapSetting"] ?? $this->getContext($context, "wapSetting")), "version", [])))) {
            // line 19
            echo "          <iframe src=\"/h5/admin/index.html?template=";
            echo twig_escape_filter($this->env, ($context["template"] ?? $this->getContext($context, "template")), "html", null, true);
            echo "\" frameborder=\"0\" style=\"width: 100%;height: 700px;border: none;\"></iframe>
        ";
        } else {
            // line 21
            echo "          <div class=\"row h5-clearfix \">
            <div class=\"find-page__left\">
              <img class=\"find-page__left--img\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin/h5/iPhoneX.png"), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.new");
            echo "\" />
              <div class=\"find-page__left--scroll\">
                <iframe src=\"/h5/index.html#/\" frameborder=\"0\" style=\"width: 100%;height:100%;border: none;\"></iframe>
              </div>
            </div>
            <div class=\" find-page__right\">
              <p class=\"find-page__right--text\">
                ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.edit.tip"), "html", null, true);
            echo "
              </p>
              ";
            // line 32
            if ((2 == $this->getAttribute(($context["wapSetting"] ?? $this->getContext($context, "wapSetting")), "version", []))) {
                // line 33
                echo "                <a class=\"btn-h5-open js-site-edit\" href=\"javascript:\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.edit");
                echo "</a>
              ";
            } else {
                // line 35
                echo "                <a class=\"btn-h5-open js-site-set old-site-set\" href=\"#theme-page\" data-toggle=\"tab\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.edit");
                echo "</a>
              ";
            }
            // line 37
            echo "            </div>
          </div>
        ";
        }
        // line 40
        echo "      </div>
      ";
        // line 42
        echo "      <div class=\"tab-pane fade \" id=\"site-page\">
        <div class=\"help-block-container\">
          ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.open.tip");
        echo "
        </div>
      </div>

      ";
        // line 49
        echo "      <div class=\"tab-pane fade h5-mtl\" id=\"theme-page\">
        <form class=\"form-horizontal\" method=\"post\" id=\"wap-setting-form\" novalidate>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"row theme-bg h5-mr5\">
                <div class=\"theme-recomend\"><div><i class=\"es-icon es-icon-thumbup\"></i>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.recommend"), "html", null, true);
        echo "</div></div>
                <div class=\"col-md-5   theme-left\">
                  <img class=\"theme-default-img\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin/h5/new_default_img.png"), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.new");
        echo "\" />
                </div>
                <div class=\"col-md-7 theme-right \">
                  <div class=\"theme-right__title\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.template_name.sail"), "html", null, true);
        echo "</div>
                  <div >
                    <p class=\"mbm theme-right__title\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.template.feature"), "html", null, true);
        echo ":<p>
                    <div class=\"theme-right__content\">
                      ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.template.sail.feature");
        echo "
                    </div>
                  </div>
                  <button type=\"button\" class=\"btn btn-h5-save js-site-save\" data-version=\"2\" data-template=\"sail\">";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.template.use"), "html", null, true);
        echo "</button>
                </div>
              </div>
            </div>
            <div class=\"col-md-6 col-sm-10 col-xs-12\">
              <div class=\"row theme-bg h5-ml5\">
                <div class=\"col-md-5  theme-left\">
                  <img class=\"theme-default-img\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin/h5/old_default_img.png"), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.old");
        echo "\"/>
                </div>
                <div class=\"col-md-7  theme-right\">
                  <div class=\"theme-right__title\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["currentTheme"] ?? null), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["currentTheme"] ?? null), "name", []), "")) : ("")), "html", null, true);
        echo "</div>
                  <div >
                    <p class=\"mbm theme-right__title\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.template.feature"), "html", null, true);
        echo ":<p>
                    <div class=\"theme-right__content\">
                      ";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.template.jane_mo.feature");
        echo "
                    </div>
                  </div>
                  <button type=\"button\" class=\"btn btn-h5-save js-site-save\" data-version=\"1\" data-template=\"jianmoOn\">";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.template.use"), "html", null, true);
        echo "</button>
                </div>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"row theme-bg h5-mr5\">
                <div class=\"col-md-5 theme-left\">
                  <img class=\"theme-default-img\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin/h5/no_default_img.png"), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.old");
        echo "\"/>
                </div>
                <div class=\"col-md-7  theme-right\">
                  <div class=\"theme-right__title\">";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["currentTheme"] ?? null), "name", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["currentTheme"] ?? null), "name", []), "")) : ("")), "html", null, true);
        echo "</div>
                  <div >
                    <p class=\"mbm theme-right__title\">";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.template.feature"), "html", null, true);
        echo ":<p>
                    <div class=\"theme-right__content\">
                      ";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.template.jane_mo_off.feature");
        echo "
                    </div>
                  </div>
                  <button type=\"button\" class=\"btn btn-h5-save js-site-save\" data-version=\"0\" data-template=\"jianmoOff\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.wap_setting.subject_name.template.use"), "html", null, true);
        echo "</button>
                </div>
              </div>
            </div>
            <input type=\"hidden\" name=\"template\" value=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wapSetting"] ?? $this->getContext($context, "wapSetting")), "template", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"version\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute(($context["wapSetting"] ?? $this->getContext($context, "wapSetting")), "version", []), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        </form>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/operating/wap/set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 106,  270 => 105,  266 => 104,  259 => 100,  253 => 97,  248 => 95,  241 => 93,  233 => 90,  223 => 83,  217 => 80,  212 => 78,  205 => 76,  197 => 73,  187 => 66,  181 => 63,  176 => 61,  169 => 59,  161 => 56,  156 => 54,  149 => 49,  142 => 44,  138 => 42,  135 => 40,  130 => 37,  124 => 35,  118 => 33,  116 => 32,  111 => 30,  99 => 23,  95 => 21,  89 => 19,  87 => 18,  84 => 17,  78 => 13,  74 => 12,  70 => 11,  65 => 8,  56 => 7,  45 => 1,  43 => 5,  41 => 3,  29 => 1,);
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

{% set menu = 'admin_v2_wap_set' %}

{% do load_script('h5-admin/index.js') %}

{% block main %}

  <div class=\"h5-find-body\">
    <ul class=\"nav nav-tabs setting-nav-tab js-nav-tab\">
      <li class=\"active\"><a href=\"#find-page\" data-toggle=\"tab\">{{'admin.wap_setting.mini_school'|trans}}</a></li>
      <li ><a href=\"#theme-page\" data-toggle=\"tab\">{{'admin.wap_setting.theme'|trans}}</a></li>
      <li ><a href=\"#site-page\" data-toggle=\"tab\">{{'admin.wap_setting.site'|trans}}</a></li>
    </ul>
    <div class=\"tab-content h5-tab-content\">
      {# 发现页设置 #}
      <div class=\"tab-pane fade in active h5-mtl\" id=\"find-page\">
        {% if template and 2 == wapSetting.version %}
          <iframe src=\"/h5/admin/index.html?template={{ template }}\" frameborder=\"0\" style=\"width: 100%;height: 700px;border: none;\"></iframe>
        {% else %}
          <div class=\"row h5-clearfix \">
            <div class=\"find-page__left\">
              <img class=\"find-page__left--img\" src=\"{{ asset('static-dist/app/img/admin/h5/iPhoneX.png') }}\" alt=\"{{ 'admin.wap_setting.new'|trans|raw }}\" />
              <div class=\"find-page__left--scroll\">
                <iframe src=\"/h5/index.html#/\" frameborder=\"0\" style=\"width: 100%;height:100%;border: none;\"></iframe>
              </div>
            </div>
            <div class=\" find-page__right\">
              <p class=\"find-page__right--text\">
                {{'admin.wap_setting.edit.tip'|trans}}
              </p>
              {% if 2 == wapSetting.version %}
                <a class=\"btn-h5-open js-site-edit\" href=\"javascript:\">{{ 'admin.wap_setting.edit'|trans|raw }}</a>
              {% else %}
                <a class=\"btn-h5-open js-site-set old-site-set\" href=\"#theme-page\" data-toggle=\"tab\">{{ 'admin.wap_setting.edit'|trans|raw }}</a>
              {% endif %}
            </div>
          </div>
        {% endif %}
      </div>
      {# 站点页设置 #}
      <div class=\"tab-pane fade \" id=\"site-page\">
        <div class=\"help-block-container\">
          {{'admin.wap_setting.open.tip'|trans|raw}}
        </div>
      </div>

      {# 装修主题 #}
      <div class=\"tab-pane fade h5-mtl\" id=\"theme-page\">
        <form class=\"form-horizontal\" method=\"post\" id=\"wap-setting-form\" novalidate>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"row theme-bg h5-mr5\">
                <div class=\"theme-recomend\"><div><i class=\"es-icon es-icon-thumbup\"></i>{{ 'admin.wap_setting.subject_name.recommend'|trans }}</div></div>
                <div class=\"col-md-5   theme-left\">
                  <img class=\"theme-default-img\" src=\"{{ asset('static-dist/app/img/admin/h5/new_default_img.png') }}\" alt=\"{{ 'admin.wap_setting.new'|trans|raw }}\" />
                </div>
                <div class=\"col-md-7 theme-right \">
                  <div class=\"theme-right__title\">{{ 'admin.wap_setting.subject_name'|trans }}: {{ 'admin.wap_setting.subject_name.template_name.sail'|trans }}</div>
                  <div >
                    <p class=\"mbm theme-right__title\">{{ 'admin.wap_setting.subject_name.template.feature'|trans }}:<p>
                    <div class=\"theme-right__content\">
                      {{'admin.wap_setting.subject_name.template.sail.feature'|trans|raw}}
                    </div>
                  </div>
                  <button type=\"button\" class=\"btn btn-h5-save js-site-save\" data-version=\"2\" data-template=\"sail\">{{'admin.wap_setting.subject_name.template.use'|trans}}</button>
                </div>
              </div>
            </div>
            <div class=\"col-md-6 col-sm-10 col-xs-12\">
              <div class=\"row theme-bg h5-ml5\">
                <div class=\"col-md-5  theme-left\">
                  <img class=\"theme-default-img\" src=\"{{ asset('static-dist/app/img/admin/h5/old_default_img.png') }}\" alt=\"{{ 'admin.wap_setting.old'|trans|raw }}\"/>
                </div>
                <div class=\"col-md-7  theme-right\">
                  <div class=\"theme-right__title\">{{ 'admin.wap_setting.subject_name'|trans }}: {{ currentTheme.name|default('') }}</div>
                  <div >
                    <p class=\"mbm theme-right__title\">{{ 'admin.wap_setting.subject_name.template.feature'|trans }}:<p>
                    <div class=\"theme-right__content\">
                      {{'admin.wap_setting.subject_name.template.jane_mo.feature'|trans|raw}}
                    </div>
                  </div>
                  <button type=\"button\" class=\"btn btn-h5-save js-site-save\" data-version=\"1\" data-template=\"jianmoOn\">{{'admin.wap_setting.subject_name.template.use'|trans}}</button>
                </div>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"row theme-bg h5-mr5\">
                <div class=\"col-md-5 theme-left\">
                  <img class=\"theme-default-img\" src=\"{{ asset('static-dist/app/img/admin/h5/no_default_img.png') }}\" alt=\"{{ 'admin.wap_setting.old'|trans|raw }}\"/>
                </div>
                <div class=\"col-md-7  theme-right\">
                  <div class=\"theme-right__title\">{{ 'admin.wap_setting.subject_name'|trans }}: {{ currentTheme.name|default('') }}</div>
                  <div >
                    <p class=\"mbm theme-right__title\">{{ 'admin.wap_setting.subject_name.template.feature'|trans }}:<p>
                    <div class=\"theme-right__content\">
                      {{'admin.wap_setting.subject_name.template.jane_mo_off.feature'|trans|raw}}
                    </div>
                  </div>
                  <button type=\"button\" class=\"btn btn-h5-save js-site-save\" data-version=\"0\" data-template=\"jianmoOff\">{{'admin.wap_setting.subject_name.template.use'|trans}}</button>
                </div>
              </div>
            </div>
            <input type=\"hidden\" name=\"template\" value=\"{{ wapSetting.template }}\">
            <input type=\"hidden\" name=\"version\" value=\"{{ wapSetting.version }}\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
        </form>
      </div>
    </div>
  </div>
{% endblock %}", "admin-v2/operating/wap/set.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/operating/wap/set.html.twig");
    }
}
