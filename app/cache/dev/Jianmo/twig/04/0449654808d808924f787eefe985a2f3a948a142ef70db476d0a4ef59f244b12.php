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

/* wechat-inform.html.twig */
class __TwigTemplate_de2cb142903243ca5dc378bf3128ea0e73bb780f911262ad23b221f4aaeeb9b9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wechat-inform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "wechat-inform.html.twig"));

        // line 1
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wechat.wechat_notification_enabled"), false)) {
            // line 2
            echo "  ";
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script([0 => "app/js/wechat-inform/index.js"]);
            // line 3
            echo "  ";
            $context["switchLanguage"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("developer.show_switch_locale"), 0);
            // line 4
            echo "  ";
            $context["weChatUser"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("WeChatUser", ["userId" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", [], "any", false, true), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", [], "any", false, true), "id", []), null)) : (null))]);
            // line 5
            echo "
  ";
            // line 6
            if ( !(($this->getAttribute(($context["weChatUser"] ?? null), "isSubscribe", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["weChatUser"] ?? null), "isSubscribe", []), false)) : (false))) {
                // line 7
                echo "    <div class=\"js-wechat-inform hidden ";
                if ((($context["switchLanguage"] ?? $this->getContext($context, "switchLanguage")) == 1)) {
                    echo "js-switch-language";
                }
                echo "\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings_binds");
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", [], "any", false, true), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", [], "any", false, true), "id", []), null)) : (null)), "html", null, true);
                echo "\">
      <div class=\"wechat-pendant js-wechat-pendant\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-container=\".wechat-pendant\" title=\"开启课程通知\"
           ";
                // line 9
                if ( !($context["weChatUser"] ?? $this->getContext($context, "weChatUser"))) {
                    echo "data-url=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_wechat_qrcode");
                    echo "\"";
                }
                echo ">
        <div class=\"wechat-pendant__outer\">
          <div class=\"wechat-pendant__inner\">
            <i class=\"es-icon es-icon-qr-code\"></i>
          </div>
        </div>
        <i class=\"cd-icon cd-icon-close wechat-pendant__close js-wechat-close-btn\"></i>
      </div>

      <div class=\"wechat-inform-qrcode js-wechat-qrcode hidden\">
        <div class=\"wechat-inform-qrcode__close js-wechat-close-btn\"><i class=\"cd-icon cd-icon-close\"></i></div>
        ";
                // line 20
                if ((($context["weChatUser"] ?? $this->getContext($context, "weChatUser")) && ($this->getAttribute(($context["weChatUser"] ?? $this->getContext($context, "weChatUser")), "isSubscribe", []) != 1))) {
                    // line 21
                    echo "          <div class=\"wechat-inform-qrcode__tip\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("wechat.notification.open_notification_tip"), "html", null, true);
                    echo "</div>
          <img class=\"wechat-inform-qrcode__img\" src=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wechat.account_code"), "html", null, true);
                    echo "\">
        ";
                } elseif ( !                // line 23
($context["weChatUser"] ?? $this->getContext($context, "weChatUser"))) {
                    // line 24
                    echo "          <div class=\"wechat-inform-qrcode__tip text-left\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("wechat.notification.scan_and_bind"), "html", null, true);
                    echo "</div>
          <img class=\"wechat-inform-qrcode__img\" src=\"\">
        ";
                }
                // line 27
                echo "      </div>
      <div class=\"wechat-inform-qrcode-mask js-wechat-mask\"></div>
    </div>
  ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "wechat-inform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 27,  95 => 24,  93 => 23,  89 => 22,  84 => 21,  82 => 20,  64 => 9,  52 => 7,  50 => 6,  47 => 5,  44 => 4,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if setting('wechat.wechat_notification_enabled')|default(false) %}
  {% do script(['app/js/wechat-inform/index.js']) %}
  {% set switchLanguage = setting('developer.show_switch_locale')|default(0) %}
  {% set weChatUser = data('WeChatUser', {userId: app.user.id|default(null)}) %}

  {% if not weChatUser.isSubscribe|default(false) %}
    <div class=\"js-wechat-inform hidden {% if switchLanguage  == 1 %}js-switch-language{% endif %}\" data-url=\"{{ path('settings_binds')}}\" data-user-id=\"{{ app.user.id|default(null) }}\">
      <div class=\"wechat-pendant js-wechat-pendant\" data-toggle=\"tooltip\" data-placement=\"bottom\" data-container=\".wechat-pendant\" title=\"开启课程通知\"
           {% if not weChatUser %}data-url=\"{{ path('login_wechat_qrcode') }}\"{% endif %}>
        <div class=\"wechat-pendant__outer\">
          <div class=\"wechat-pendant__inner\">
            <i class=\"es-icon es-icon-qr-code\"></i>
          </div>
        </div>
        <i class=\"cd-icon cd-icon-close wechat-pendant__close js-wechat-close-btn\"></i>
      </div>

      <div class=\"wechat-inform-qrcode js-wechat-qrcode hidden\">
        <div class=\"wechat-inform-qrcode__close js-wechat-close-btn\"><i class=\"cd-icon cd-icon-close\"></i></div>
        {% if weChatUser and weChatUser.isSubscribe != 1 %}
          <div class=\"wechat-inform-qrcode__tip\">{{'wechat.notification.open_notification_tip'|trans}}</div>
          <img class=\"wechat-inform-qrcode__img\" src=\"{{ setting('wechat.account_code') }}\">
        {% elseif not weChatUser %}
          <div class=\"wechat-inform-qrcode__tip text-left\">{{'wechat.notification.scan_and_bind'|trans}}</div>
          <img class=\"wechat-inform-qrcode__img\" src=\"\">
        {% endif %}
      </div>
      <div class=\"wechat-inform-qrcode-mask js-wechat-mask\"></div>
    </div>
  {% endif %}
{% endif %}", "wechat-inform.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/wechat-inform.html.twig");
    }
}
