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

/* admin-v2/default/index.html.twig */
class __TwigTemplate_934104a24b68a8aa2694c121e1ee4773d645c384e2cc569b83f428da86173907 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'container' => [$this, 'block_container'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/index.html.twig"));

        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["adminV2Homepage"] = 1;
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script([0 => "app/js/admin-v2/default/index.js", 1 => "app/js/admin-v2/default/quick-entrance/index.js"]);
        // line 7
        $context["bodyClass"] = "admin-v2-page";
        // line 1
        $this->parent = $this->loadTemplate("admin-v2/layout.html.twig", "admin-v2/default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.hompage.html_head_title"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "  <div class=\"container admin-v2-container\">
    ";
        // line 12
        echo "    ";
        $this->loadTemplate("admin-v2/default/s2b2c-notice.html.twig", "admin-v2/default/index.html.twig", 12)->display($context);
        // line 13
        echo "    <div class=\"alert-list\">
      ";
        // line 15
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:AdminV2/Default:validateUpgrade"));
        echo "
      ";
        // line 16
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->isS2B2CEnabled()) {
            // line 17
            echo "        ";
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:AdminV2/Default:validateDomain"));
            echo "
      ";
        }
        // line 20
        echo "      ";
        if (( !(_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isTrial())) {
            // line 21
            echo "        ";
            // line 22
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:AdminV2/Default:getCloudNotices"));
            echo "
      ";
        }
        // line 24
        echo "    </div>

    <div class=\"row cd-mt24\">
      <div class=\"col-md-9\">
        ";
        // line 29
        echo "        ";
        if ( !($context["isNewcomerTaskAllDone"] ?? $this->getContext($context, "isNewcomerTaskAllDone"))) {
            // line 30
            echo "        <div class=\"admin-v2-section admin-v2-section--step\">
          <div class=\"admin-v2-section__header\">";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.newcomer_task.helper"), "html", null, true);
            echo "<span class=\"admin-v2-section__tip\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.newcomer_task.helper_tip"), "html", null, true);
            echo "</span><span class=\"admin-v2-section__more js-show-toggle\"><span class=\"js-toggle-text\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.newcomer_task.collapse"), "html", null, true);
            echo "</span><i class=\"es-icon es-icon-keyboardarrowup\"></i></span></div>
          <div class=\"admin-v2-section__body js-steps\" data-url=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_homepage_newcomer_task");
            echo "\">
            <div class=\"row text-center\" style=\"line-height: 160px;\">
              ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.loading_data_tips"), "html", null, true);
            echo "
            </div>
          </div>
        </div>
        ";
        }
        // line 39
        echo "
        ";
        // line 41
        echo "        <div class=\"admin-v2-section cd-pb24\">
          <div class=\"admin-v2-section__header cd-mb16\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.data_overview"), "html", null, true);
        echo "<a class=\"admin-v2-section__more\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_data_statistics_overview");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.more_btn"), "html", null, true);
        echo "<i class=\"es-icon es-icon-chevronright\"></i></a></div>
          <div class=\"admin-v2-section__body admin-data js-data-overview\" data-url=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_homepage_daily_statistics");
        echo "\">
            <div class=\"row text-center\" style=\"line-height: 56px;\">
              ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.loading_data_tips"), "html", null, true);
        echo "
            </div>
          </div>
        </div>

        ";
        // line 51
        echo "        <div class=\"admin-v2-section cd-pb16\">
          <div class=\"admin-v2-section__header cd-mb16\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.quick_entrance"), "html", null, true);
        echo "</div>
          <div class=\"admin-v2-section__body js-quick-entrance\" data-url=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_quick_entrance");
        echo "\">
            <div class=\"row text-center\" style=\"line-height: 192px\" >
              ";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.loading_data_tips"), "html", null, true);
        echo "
            </div>
          </div>
        </div>

        ";
        // line 61
        echo "        ";
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright", false) == 1)) {
            // line 62
            echo "        <div class=\"admin-v2-section cd-pb24 application-intro js-application-intro\"
             ";
            // line 63
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->isWithoutNetwork()) {
                echo "data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_homepage_application_intro");
                echo "\" ";
            }
            echo ">
          <div class=\"admin-v2-section__header cd-mb16\">";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.application_intro"), "html", null, true);
            echo "
            <a class=\"admin-v2-section__more js-no-network\"
               href=\"javascript:;\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.application_intro.more_btn"), "html", null, true);
            echo "</a>
          </div>
          <div class=\"admin-v2-section__body\">
            <div class=\"row\">
              ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 71
                echo "                <div class=\"col-md-3\">
                  <div class=\"text-center admin-application\">
                    <i class=\"es-icon es-icon-entry-application\"></i>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </div>
          </div>
        </div>
        ";
        }
        // line 81
        echo "
        ";
        // line 83
        echo "        ";
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright", false) == 1)) {
            // line 84
            echo "        <div class=\"admin-v2-section cd-pb16 cd-mb0\">
          <div class=\"admin-v2-section__header cd-mb16\">";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.business_advice.title"), "html", null, true);
            echo "<a ";
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isWithoutNetwork()) {
                echo "class=\"admin-v2-section__more js-no-network\" href=\"javascript:;\" ";
            } else {
                echo "class=\"admin-v2-section__more\" href=\"http://www.qiqiuyu.com\" target=\"_blank\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.buiness_advice.goto_qiqiuyu"), "html", null, true);
            echo "</a></div>
          <div class=\"admin-v2-section__body admin-advice js-admin-advice\" data-url=\"";
            // line 86
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_homepage_business_advice");
            echo "\">
            <div class=\"row text-center\" style=\"line-height: 120px\">
              ";
            // line 88
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 89
                echo "                <div class=\"col-md-3\">
                  <div class=\" admin-advice__item\">
                    <div class=\"admin-advice__placeholder\"><i class=\"es-icon es-icon-placeholder\"></i></div>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "            </div>
          </div>
        </div>
        ";
        }
        // line 99
        echo "      </div>

      <div class=\"col-md-3\">
        ";
        // line 103
        echo "        <div class=\"admin-info-section js-admin-info\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_homepage_school_info");
        echo "\">
          <div class=\"text-center\" style=\"line-height: 400px\">
            ";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.loading_data_tips"), "html", null, true);
        echo "
          </div>
        </div>

        ";
        // line 110
        echo "        ";
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright", false) == 1)) {
            // line 111
            echo "        <div class=\"admin-sidebar-section cd-pb16\">
          <div class=\"admin-sidebar-section__header\">";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.announcement_from_platform"), "html", null, true);
            echo "</div>
          <div class=\"announcement-from-platform js-announcement\"";
            // line 113
            if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->isWithoutNetwork()) {
                echo " data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_announcement_from_platform");
                echo "\"";
            }
            echo ">
            <div class=\"admin-notice\">
              <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin-v2/announcement-from-platform.png"), "html", null, true);
            echo "\">
            </div>
          </div>
        </div>
        ";
        }
        // line 120
        echo "
        ";
        // line 122
        echo "        <div class=\"admin-sidebar-section js-admin-changelog\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_homepage_changelog");
        echo "\">
          <div class=\"admin-sidebar-section__header\">";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.default_page.changelog_title"), "html", null, true);
        echo "<a class=\"admin-sidebar-section__more\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("changelog_list");
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.category_more"), "html", null, true);
        echo "<i class=\"es-icon es-icon-chevronright\"></i></a></div>
          <div class=\"admin-sidebar-section__body\">
            <div class=\"text-center\" style=\"line-height: 100px\">
              ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.loading_data_tips"), "html", null, true);
        echo "
            </div>
          </div>
        </div>

        ";
        // line 132
        echo "        ";
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright", false) == 1)) {
            // line 133
            echo "        <div class=\"admin-sidebar-section js-admin-qrcode\" data-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_homepage_qrcode");
            echo "\">
          <div class=\"admin-sidebar-section__header\">";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.wechat_official_account.title"), "html", null, true);
            echo "</div>
          <div class=\"admin-sidebar-section__body\">
            <div class=\"text-center\" style=\"line-height: 120px\">
              ";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.loading_data_tips"), "html", null, true);
            echo "
            </div>
          </div>
        </div>
        ";
        }
        // line 142
        echo "      </div>
    </div>

    <div  id=\"cloud-ad\" class=\"admin-cloud-ad modal fade text-center\" aria-hidden=\"true\" data-backdrop=\"static\"  tabindex=\"-1\" role=\"dialog\" data-url =\"";
        // line 145
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_cloud_ad");
        echo "\">
      <div class=\"modal-dialog\">
          <a href=\"\" target=\"_blank\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
          </a>
      </div>
    </div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  395 => 145,  390 => 142,  382 => 137,  376 => 134,  371 => 133,  368 => 132,  360 => 126,  350 => 123,  345 => 122,  342 => 120,  334 => 115,  325 => 113,  321 => 112,  318 => 111,  315 => 110,  308 => 105,  302 => 103,  297 => 99,  291 => 95,  280 => 89,  276 => 88,  271 => 86,  259 => 85,  256 => 84,  253 => 83,  250 => 81,  244 => 77,  233 => 71,  229 => 70,  222 => 66,  217 => 64,  209 => 63,  206 => 62,  203 => 61,  195 => 55,  190 => 53,  186 => 52,  183 => 51,  175 => 45,  170 => 43,  162 => 42,  159 => 41,  156 => 39,  148 => 34,  143 => 32,  135 => 31,  132 => 30,  129 => 29,  123 => 24,  117 => 22,  115 => 21,  112 => 20,  106 => 18,  104 => 17,  102 => 16,  97 => 15,  94 => 13,  91 => 12,  88 => 10,  79 => 9,  61 => 2,  50 => 1,  48 => 7,  46 => 5,  44 => 4,  42 => 3,  30 => 1,);
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
{% block title %}{{ 'admin.hompage.html_head_title'|trans }}{% endblock %}
{% set panel = 'dashboard' %}
{% set adminV2Homepage = 1 %}
{% do script(['app/js/admin-v2/default/index.js', 'app/js/admin-v2/default/quick-entrance/index.js']) %}

{% set bodyClass = \"admin-v2-page\" %}

{% block container %}
  <div class=\"container admin-v2-container\">
    {# S2B2C 通知提示 #}
    {% include 'admin-v2/default/s2b2c-notice.html.twig' %}
    <div class=\"alert-list\">
      {# 插件、主题升级提示 #}
      {{ render(controller('AppBundle:AdminV2/Default:validateUpgrade')) }}
      {% if not is_s2b2c_enabled() %}{#S2B2C#}
        {# 域名检查提示,分课模式下不需要提示域名不一致的问题 #}
        {{ render(controller('AppBundle:AdminV2/Default:validateDomain')) }}
      {% endif %}
      {% if not (setting('copyright.thirdCopyright')|default(0) == 1) and is_trial() %}
        {# 教育云推送通知 #}
        {{ render(controller('AppBundle:AdminV2/Default:getCloudNotices')) }}
      {% endif %}
    </div>

    <div class=\"row cd-mt24\">
      <div class=\"col-md-9\">
        {# 任务助手 #}
        {% if not isNewcomerTaskAllDone %}
        <div class=\"admin-v2-section admin-v2-section--step\">
          <div class=\"admin-v2-section__header\">{{ 'admin_v2.newcomer_task.helper'|trans }}<span class=\"admin-v2-section__tip\">{{ 'admin_v2.newcomer_task.helper_tip'|trans }}</span><span class=\"admin-v2-section__more js-show-toggle\"><span class=\"js-toggle-text\">{{ 'admin_v2.newcomer_task.collapse'|trans }}</span><i class=\"es-icon es-icon-keyboardarrowup\"></i></span></div>
          <div class=\"admin-v2-section__body js-steps\" data-url=\"{{ path('admin_v2_homepage_newcomer_task') }}\">
            <div class=\"row text-center\" style=\"line-height: 160px;\">
              {{ 'admin_v2.homepage.loading_data_tips'|trans }}
            </div>
          </div>
        </div>
        {% endif %}

        {# 数据概览 #}
        <div class=\"admin-v2-section cd-pb24\">
          <div class=\"admin-v2-section__header cd-mb16\">{{ 'admin_v2.homepage.data_overview'|trans }}<a class=\"admin-v2-section__more\" href=\"{{ path('admin_v2_data_statistics_overview') }}\">{{ 'admin_v2.homepage.more_btn'|trans }}<i class=\"es-icon es-icon-chevronright\"></i></a></div>
          <div class=\"admin-v2-section__body admin-data js-data-overview\" data-url=\"{{ path('admin_v2_homepage_daily_statistics') }}\">
            <div class=\"row text-center\" style=\"line-height: 56px;\">
              {{ 'admin_v2.homepage.loading_data_tips'|trans }}
            </div>
          </div>
        </div>

        {# 常用入口 #}
        <div class=\"admin-v2-section cd-pb16\">
          <div class=\"admin-v2-section__header cd-mb16\">{{ 'admin_v2.homepage.quick_entrance'|trans }}</div>
          <div class=\"admin-v2-section__body js-quick-entrance\" data-url=\"{{ path('admin_v2_quick_entrance') }}\">
            <div class=\"row text-center\" style=\"line-height: 192px\" >
              {{ 'admin_v2.homepage.loading_data_tips'|trans }}
            </div>
          </div>
        </div>

        {# 应用推荐（高级去版权不显示） #}
        {% if not setting('copyright.thirdCopyright', false) == 1 %}
        <div class=\"admin-v2-section cd-pb24 application-intro js-application-intro\"
             {% if not is_without_network() %}data-url=\"{{ path('admin_v2_homepage_application_intro') }}\" {% endif %}>
          <div class=\"admin-v2-section__header cd-mb16\">{{ 'admin_v2.homepage.application_intro'|trans }}
            <a class=\"admin-v2-section__more js-no-network\"
               href=\"javascript:;\">{{ 'admin_v2.homepage.application_intro.more_btn'|trans }}</a>
          </div>
          <div class=\"admin-v2-section__body\">
            <div class=\"row\">
              {% for i in 0..3 %}
                <div class=\"col-md-3\">
                  <div class=\"text-center admin-application\">
                    <i class=\"es-icon es-icon-entry-application\"></i>
                  </div>
                </div>
              {% endfor %}
            </div>
          </div>
        </div>
        {% endif %}

        {# 经营建议（高级去版权不显示）#}
        {% if not setting('copyright.thirdCopyright', false) == 1 %}
        <div class=\"admin-v2-section cd-pb16 cd-mb0\">
          <div class=\"admin-v2-section__header cd-mb16\">{{ 'admin_v2.business_advice.title'|trans }}<a {% if is_without_network() %}class=\"admin-v2-section__more js-no-network\" href=\"javascript:;\" {% else %}class=\"admin-v2-section__more\" href=\"http://www.qiqiuyu.com\" target=\"_blank\"{% endif %}>{{ 'admin_v2.buiness_advice.goto_qiqiuyu'|trans }}</a></div>
          <div class=\"admin-v2-section__body admin-advice js-admin-advice\" data-url=\"{{ path('admin_v2_homepage_business_advice') }}\">
            <div class=\"row text-center\" style=\"line-height: 120px\">
              {% for i in 0..3 %}
                <div class=\"col-md-3\">
                  <div class=\" admin-advice__item\">
                    <div class=\"admin-advice__placeholder\"><i class=\"es-icon es-icon-placeholder\"></i></div>
                  </div>
                </div>
              {% endfor %}
            </div>
          </div>
        </div>
        {% endif %}
      </div>

      <div class=\"col-md-3\">
        {# 网校信息 #}
        <div class=\"admin-info-section js-admin-info\" data-url=\"{{ path('admin_v2_homepage_school_info') }}\">
          <div class=\"text-center\" style=\"line-height: 400px\">
            {{ 'admin_v2.homepage.loading_data_tips'|trans }}
          </div>
        </div>

        {# 网校公告（高级去版权不显示） #}
        {% if not setting('copyright.thirdCopyright', false) == 1 %}
        <div class=\"admin-sidebar-section cd-pb16\">
          <div class=\"admin-sidebar-section__header\">{{ 'admin_v2.homepage.announcement_from_platform'|trans }}</div>
          <div class=\"announcement-from-platform js-announcement\"{% if not is_without_network() %} data-url=\"{{ path('admin_v2_announcement_from_platform') }}\"{% endif %}>
            <div class=\"admin-notice\">
              <img src=\"{{ asset('static-dist/app/img/admin-v2/announcement-from-platform.png') }}\">
            </div>
          </div>
        </div>
        {% endif %}

        {# changelog #}
        <div class=\"admin-sidebar-section js-admin-changelog\" data-url=\"{{ path('admin_v2_homepage_changelog') }}\">
          <div class=\"admin-sidebar-section__header\">{{ 'admin_v2.default_page.changelog_title'|trans }}<a class=\"admin-sidebar-section__more\" href=\"{{ path('changelog_list') }}\" target=\"_blank\">{{ 'site.datagrid.filter.category_more'|trans }}<i class=\"es-icon es-icon-chevronright\"></i></a></div>
          <div class=\"admin-sidebar-section__body\">
            <div class=\"text-center\" style=\"line-height: 100px\">
              {{ 'admin_v2.homepage.loading_data_tips'|trans }}
            </div>
          </div>
        </div>

        {# 公众号（高级去版权不显示） #}
        {% if not setting('copyright.thirdCopyright', false) == 1 %}
        <div class=\"admin-sidebar-section js-admin-qrcode\" data-url=\"{{ path('admin_v2_homepage_qrcode') }}\">
          <div class=\"admin-sidebar-section__header\">{{ 'admin_v2.wechat_official_account.title'|trans }}</div>
          <div class=\"admin-sidebar-section__body\">
            <div class=\"text-center\" style=\"line-height: 120px\">
              {{ 'admin_v2.homepage.loading_data_tips'|trans }}
            </div>
          </div>
        </div>
        {% endif %}
      </div>
    </div>

    <div  id=\"cloud-ad\" class=\"admin-cloud-ad modal fade text-center\" aria-hidden=\"true\" data-backdrop=\"static\"  tabindex=\"-1\" role=\"dialog\" data-url =\"{{ path('admin_v2_cloud_ad') }}\">
      <div class=\"modal-dialog\">
          <a href=\"\" target=\"_blank\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
          </a>
      </div>
    </div>
  </div>
{% endblock %}
", "admin-v2/default/index.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/index.html.twig");
    }
}
