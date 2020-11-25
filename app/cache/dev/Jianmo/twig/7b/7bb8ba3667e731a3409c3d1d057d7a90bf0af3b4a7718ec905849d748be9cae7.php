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

/* admin-v2/default/school-info.html.twig */
class __TwigTemplate_b3979a3e7053134a02c38bef1c5aecb4a28b49f64218fbe3f4b6ccbec8055c36 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/school-info.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/school-info.html.twig"));

        // line 1
        $context["currentTheme"] = $this->env->getExtension('AppBundle\Twig\ThemeExtension')->getCurrentTheme();
        // line 2
        $context["mobileEnabled"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("mobile.enabled", 0);
        // line 3
        $context["isWithoutNetwork"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isWithoutNetwork();
        // line 4
        echo "
<div class=\"admin-info-section\">
  <div class=\"admin-website text-center\">
    ";
        // line 7
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")) {
            // line 8
            echo "      <a class=\"admin-website__logo\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_school_information");
            echo "\">
        <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.logo")), "html", null, true);
            echo "\">
      </a>
    ";
        }
        // line 12
        echo "    <div class=\"admin-website__name\"><a class=\"admin-website__text text-overflow\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_school_information");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.name"), "html", null, true);
        echo "</a></div>
    ";
        // line 14
        echo "    <div class=\"\">
      <div class=\"rank-tag ";
        // line 15
        if ((($context["schoolLevel"] ?? $this->getContext($context, "schoolLevel")) == "saas")) {
            echo "rank-tag--yellow";
        } elseif ((($context["schoolLevel"] ?? $this->getContext($context, "schoolLevel")) == "license")) {
        } elseif ((($context["schoolLevel"] ?? $this->getContext($context, "schoolLevel")) == "none")) {
            echo "rank-tag--green";
        }
        echo "\">
        <span class=\"rank-tag__icon\"><i class=\"cd-icon cd-icon-star\"></i></span><div class=\"rank-tag__text\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("admin_v2.homepage.school_info.level." . ($context["schoolLevel"] ?? $this->getContext($context, "schoolLevel")))), "html", null, true);
        echo "</div>
      </div>
      <div class=\"theme-tag\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "name", []), "html", null, true);
        echo "</div>
    </div>
  </div>
</div>
";
        // line 23
        if (( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright", false) == 1)) {
            // line 24
            echo "<div class=\"admin-update clearfix\">
  <div class=\"admin-update__cell clearfix\">
    <div class=\"admin-update__label pull-left\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.cloud_service"), "html", null, true);
            echo "：</div>
    ";
            // line 27
            if (($context["isWithoutNetwork"] ?? $this->getContext($context, "isWithoutNetwork"))) {
                // line 28
                echo "      <div class=\"cdv2-light-minor pull-right\"><div class=\"admin-update__number\"></div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.cloud_service_status.not_open"), "html", null, true);
                echo "<i class=\"es-icon es-icon-tip admin-update__icon v2-color-gray\"></i></div>
    ";
            } elseif ((            // line 29
($context["disabledCloudServiceCount"] ?? $this->getContext($context, "disabledCloudServiceCount")) == 0)) {
                // line 30
                echo "      <div class=\"cdv2-light-minor pull-right\"><div class=\"admin-update__number\"></div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.cloud_service_status.open"), "html", null, true);
                echo "<i class=\"es-icon es-icon-markdown admin-update__icon v2-color-success\"></i></div>
    ";
            } else {
                // line 32
                echo "      <div class=\"admin-update__link pull-right\"><div class=\"admin-update__number\">";
                echo twig_escape_filter($this->env, ($context["disabledCloudServiceCount"] ?? $this->getContext($context, "disabledCloudServiceCount")), "html", null, true);
                echo "个</div><a class=\"admin-update__link\"  href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_my_cloud_overview");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.cloud_service_status.not_open"), "html", null, true);
                echo "</a><i class=\"es-icon es-icon-tip admin-update__icon v2-color-warning\"></i></div>
    ";
            }
            // line 34
            echo "  </div>
  <div class=\"admin-update__cell clearfix\">
    <div class=\"admin-update__label pull-left\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.app_center"), "html", null, true);
            echo "：</div>
    ";
            // line 37
            if (((($context["upgradeAppCount"] ?? $this->getContext($context, "upgradeAppCount")) == 0) || ($context["isWithoutNetwork"] ?? $this->getContext($context, "isWithoutNetwork")))) {
                // line 38
                echo "      <div class=\"cdv2-light-minor pull-right\"><div class=\"admin-update__number\"></div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.app_status.upgraded"), "html", null, true);
                echo "<i class=\"es-icon es-icon-markdone admin-update__icon v2-color-success\"></i></div>
    ";
            } else {
                // line 40
                echo "      <div class=\"admin-update__link pull-right\"><div class=\"admin-update__number\">";
                echo twig_escape_filter($this->env, ($context["upgradeAppCount"] ?? $this->getContext($context, "upgradeAppCount")), "html", null, true);
                echo "个</div><a class=\"admin-update__link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_app_upgrades");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.app_status.has_upgrade"), "html", null, true);
                echo "</a><i class=\"es-icon es-icon-tip admin-update__icon v2-color-warning\"></i></div>
    ";
            }
            // line 42
            echo "  </div>
  <div class=\"admin-update__cell clearfix\">
    <div class=\"admin-update__label pull-left\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.system_upgrade"), "html", null, true);
            echo "：</div>
    ";
            // line 45
            if ((($context["mainAppUpgrade"] ?? $this->getContext($context, "mainAppUpgrade")) &&  !($context["isWithoutNetwork"] ?? $this->getContext($context, "isWithoutNetwork")))) {
                // line 46
                echo "      <div class=\"admin-update__link pull-right\"><div class=\"admin-update__version\">";
                echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
                echo "</div><a class=\"admin-update__link\" href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_app_upgrades");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.system_status.has_upgrade"), "html", null, true);
                echo "</a><i class=\"es-icon es-icon-tip admin-update__icon v2-color-warning\"></i></div>
    ";
            } else {
                // line 48
                echo "      <div class=\"cdv2-light-minor pull-right\"><div class=\"admin-update__version\">";
                echo twig_escape_filter($this->env, ($context["version"] ?? $this->getContext($context, "version")), "html", null, true);
                echo "</div>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.system_status.upgraded"), "html", null, true);
                echo "<i class=\"es-icon es-icon-markdone admin-update__icon v2-color-success\"></i></div>
    ";
            }
            // line 50
            echo "  </div>
</div>
";
        }
        // line 53
        echo "<div class=\"admin-link\">
  <a class=\"admin-link__btn\" href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" target=\"_blank\"><i class=\"es-icon es-icon-site\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.access_web"), "html", null, true);
        echo "</a>
  <a ";
        // line 55
        if (($context["mobileEnabled"] ?? $this->getContext($context, "mobileEnabled"))) {
            echo "class=\"admin-link__btn\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"_blank\" ";
        } else {
            echo "class=\"admin-link__btn admin-link__btn--disabled\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_setting_mobile");
            echo "\"";
        }
        echo ">";
        if ( !($context["mobileEnabled"] ?? $this->getContext($context, "mobileEnabled"))) {
            echo "<span class=\"closed-tag\"></span>";
        }
        echo "<i class=\"es-icon es-icon-app\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.access_mobile_app"), "html", null, true);
        echo "</a>
  <a ";
        // line 56
        if ((($this->getAttribute(($context["wechatAppStatus"] ?? null), "installed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["wechatAppStatus"] ?? null), "installed", []), false)) : (false))) {
            echo "class=\"admin-link__btn js-mini-program mb0\" href=\"javascript:;\" data-src=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["miniProgramCodeImg"] ?? null), "img_url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["miniProgramCodeImg"] ?? null), "img_url", []))) : ("")), "html", null, true);
            echo "\" ";
        } else {
            echo "class=\"admin-link__btn admin-link__btn--disabled\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_wechat_app");
            echo "\"";
        }
        echo ">";
        if ( !$this->getAttribute(($context["wechatAppStatus"] ?? $this->getContext($context, "wechatAppStatus")), "installed", [])) {
            echo "<span class=\"closed-tag\"></span>";
        }
        echo "<i class=\"es-icon es-icon-entry-miniprogram\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.access_wechat_app"), "html", null, true);
        echo "</a>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/school-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 56,  194 => 55,  188 => 54,  185 => 53,  180 => 50,  172 => 48,  162 => 46,  160 => 45,  156 => 44,  152 => 42,  142 => 40,  136 => 38,  134 => 37,  130 => 36,  126 => 34,  116 => 32,  110 => 30,  108 => 29,  103 => 28,  101 => 27,  97 => 26,  93 => 24,  91 => 23,  84 => 18,  79 => 16,  70 => 15,  67 => 14,  60 => 12,  54 => 9,  49 => 8,  47 => 7,  42 => 4,  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set currentTheme = current_theme() %}
{% set mobileEnabled = setting('mobile.enabled', 0) %}
{% set isWithoutNetwork = is_without_network() %}

<div class=\"admin-info-section\">
  <div class=\"admin-website text-center\">
    {% if setting('site.logo') %}
      <a class=\"admin-website__logo\" href=\"{{ path('admin_v2_school_information') }}\">
        <img src=\"{{ asset(setting('site.logo')) }}\">
      </a>
    {% endif %}
    <div class=\"admin-website__name\"><a class=\"admin-website__text text-overflow\" href=\"{{ path('admin_v2_school_information') }}\">{{ setting('site.name') }}</a></div>
    {# 三种颜色的客户等级 #}
    <div class=\"\">
      <div class=\"rank-tag {% if schoolLevel == 'saas' %}rank-tag--yellow{% elseif schoolLevel == 'license' %}{% elseif schoolLevel == 'none' %}rank-tag--green{% endif %}\">
        <span class=\"rank-tag__icon\"><i class=\"cd-icon cd-icon-star\"></i></span><div class=\"rank-tag__text\">{{ ('admin_v2.homepage.school_info.level.'~schoolLevel)|trans }}</div>
      </div>
      <div class=\"theme-tag\">{{ currentTheme.name }}</div>
    </div>
  </div>
</div>
{# 网校版本信息、云服务开启情况（高级去版权不显示）#}
{% if not setting('copyright.thirdCopyright', false) == 1 %}
<div class=\"admin-update clearfix\">
  <div class=\"admin-update__cell clearfix\">
    <div class=\"admin-update__label pull-left\">{{ 'admin_v2.homepage.school_info.cloud_service'|trans }}：</div>
    {% if isWithoutNetwork %}
      <div class=\"cdv2-light-minor pull-right\"><div class=\"admin-update__number\"></div>{{ 'admin_v2.homepage.school_info.cloud_service_status.not_open'|trans }}<i class=\"es-icon es-icon-tip admin-update__icon v2-color-gray\"></i></div>
    {% elseif disabledCloudServiceCount == 0 %}
      <div class=\"cdv2-light-minor pull-right\"><div class=\"admin-update__number\"></div>{{ 'admin_v2.homepage.school_info.cloud_service_status.open'|trans }}<i class=\"es-icon es-icon-markdown admin-update__icon v2-color-success\"></i></div>
    {% else %}
      <div class=\"admin-update__link pull-right\"><div class=\"admin-update__number\">{{ disabledCloudServiceCount }}个</div><a class=\"admin-update__link\"  href=\"{{ path('admin_v2_my_cloud_overview') }}\">{{ 'admin_v2.homepage.school_info.cloud_service_status.not_open'|trans }}</a><i class=\"es-icon es-icon-tip admin-update__icon v2-color-warning\"></i></div>
    {% endif %}
  </div>
  <div class=\"admin-update__cell clearfix\">
    <div class=\"admin-update__label pull-left\">{{ 'admin_v2.homepage.school_info.app_center'|trans }}：</div>
    {% if upgradeAppCount == 0 or isWithoutNetwork %}
      <div class=\"cdv2-light-minor pull-right\"><div class=\"admin-update__number\"></div>{{ 'admin_v2.homepage.school_info.app_status.upgraded'|trans }}<i class=\"es-icon es-icon-markdone admin-update__icon v2-color-success\"></i></div>
    {% else %}
      <div class=\"admin-update__link pull-right\"><div class=\"admin-update__number\">{{ upgradeAppCount }}个</div><a class=\"admin-update__link\" href=\"{{ path('admin_v2_app_upgrades') }}\">{{ 'admin_v2.homepage.school_info.app_status.has_upgrade'|trans }}</a><i class=\"es-icon es-icon-tip admin-update__icon v2-color-warning\"></i></div>
    {% endif %}
  </div>
  <div class=\"admin-update__cell clearfix\">
    <div class=\"admin-update__label pull-left\">{{ 'admin_v2.homepage.school_info.system_upgrade'|trans }}：</div>
    {% if mainAppUpgrade and not isWithoutNetwork %}
      <div class=\"admin-update__link pull-right\"><div class=\"admin-update__version\">{{ version }}</div><a class=\"admin-update__link\" href=\"{{ path('admin_v2_app_upgrades') }}\">{{ 'admin_v2.homepage.school_info.system_status.has_upgrade'|trans }}</a><i class=\"es-icon es-icon-tip admin-update__icon v2-color-warning\"></i></div>
    {% else %}
      <div class=\"cdv2-light-minor pull-right\"><div class=\"admin-update__version\">{{ version }}</div>{{ 'admin_v2.homepage.school_info.system_status.upgraded'|trans }}<i class=\"es-icon es-icon-markdone admin-update__icon v2-color-success\"></i></div>
    {% endif %}
  </div>
</div>
{% endif %}
<div class=\"admin-link\">
  <a class=\"admin-link__btn\" href=\"{{ path('homepage') }}\" target=\"_blank\"><i class=\"es-icon es-icon-site\"></i>{{ 'admin_v2.homepage.school_info.access_web'|trans }}</a>
  <a {% if mobileEnabled %}class=\"admin-link__btn\" href=\"{{ path('mobile') }}\" target=\"_blank\" {% else %}class=\"admin-link__btn admin-link__btn--disabled\" href=\"{{ path('admin_v2_setting_mobile') }}\"{% endif %}>{% if not mobileEnabled %}<span class=\"closed-tag\"></span>{% endif %}<i class=\"es-icon es-icon-app\"></i>{{ 'admin_v2.homepage.school_info.access_mobile_app'|trans }}</a>
  <a {% if wechatAppStatus.installed|default(false) %}class=\"admin-link__btn js-mini-program mb0\" href=\"javascript:;\" data-src=\"{{ miniProgramCodeImg.img_url|default() }}\" {% else %}class=\"admin-link__btn admin-link__btn--disabled\" href=\"{{ path('admin_v2_wechat_app') }}\"{% endif %}>{% if not wechatAppStatus.installed %}<span class=\"closed-tag\"></span>{% endif %}<i class=\"es-icon es-icon-entry-miniprogram\"></i>{{ 'admin_v2.homepage.school_info.access_wechat_app'|trans }}</a>
</div>
", "admin-v2/default/school-info.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/school-info.html.twig");
    }
}
