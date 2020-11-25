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

/* default/header/part/user-inform.html.twig */
class __TwigTemplate_9bb5d7a8bfefe300ad98102b7cd20f134e19d493d9132c056fa4598b6fdc140e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/part/user-inform.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/part/user-inform.html.twig"));

        // line 1
        $context["messageSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("message");
        // line 2
        $context["newMessageNum"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "newMessageNum", []);
        // line 3
        if (((($this->getAttribute(($context["messageSetting"] ?? null), "showable", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["messageSetting"] ?? null), "showable", []), "1")) : ("1")) == 0)) {
            // line 4
            echo "  ";
            $context["newMessageNum"] = 0;
        }
        // line 6
        echo "<li class=\"user-inform-li js-user-inform hidden-xs hidden-sm cd-ml24 cd-dropdown\" data-toggle=\"cd-dropdown\">
  <a class=\"inform-dropdown-toggle\"><i class=\"cd-icon cd-icon-bell\"></i>";
        // line 7
        if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "newNotificationNum", []) > 0) || (($context["newMessageNum"] ?? $this->getContext($context, "newMessageNum")) > 0))) {
            echo "<span class=\"inform-dropdown-toggle__num cd-badge cd-badge-danger ";
            if ((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "newNotificationNum", []) + ($context["newMessageNum"] ?? $this->getContext($context, "newMessageNum"))) > 9)) {
                echo " inform-dropdown-toggle__num--big ";
            }
            echo "\">";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "newNotificationNum", []) + ($context["newMessageNum"] ?? $this->getContext($context, "newMessageNum"))), "html", null, true);
            echo "</span>";
        }
        echo "</a>
  <div class=\"dropdown-menu inform-dropdown js-user-nav-dropdown\" role=\"menu\">
    <div class=\"clearfix inform-dropdown-head\" role=\"tablist\">
      <a class=\"";
        // line 10
        if (((($this->getAttribute(($context["messageSetting"] ?? null), "showable", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["messageSetting"] ?? null), "showable", []), "1")) : ("1")) != 0)) {
            echo "inform-dropdown-head__tab active";
        } else {
            echo "inform-dropdown-head__one_tab";
        }
        echo " js-inform-tab\" href=\"#notification\" role=\"tab\" data-toggle=\"tab\" data-type=\"newNotification\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("notification.user_notification"), "html", null, true);
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "newNotificationNum", []) > 0)) {
            echo "<span class=\"inform-dropdown-dot\"></span>";
        }
        echo "</a>
      ";
        // line 11
        if (((($this->getAttribute(($context["messageSetting"] ?? null), "showable", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["messageSetting"] ?? null), "showable", []), "1")) : ("1")) != 0)) {
            // line 12
            echo "        <a class=\"inform-dropdown-head__tab js-inform-tab\" href=\"#message\" role=\"tab\" data-toggle=\"tab\" data-type=\"conversation\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.btn.send_message"), "html", null, true);
            if ((($context["newMessageNum"] ?? $this->getContext($context, "newMessageNum")) > 0)) {
                echo "<span class=\"inform-dropdown-dot\"></span>";
            }
            echo "</a>
      ";
        }
        // line 14
        echo "    </div>
    <div class=\"tab-content\">
      <div class=\"notification-content tab-pane active\" role=\"tabpanel\" id=\"notification\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          ";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "newNotificationNum", []) > 0)) {
            // line 19
            echo "            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-newNotification\"></div>
          ";
        } else {
            // line 22
            echo "            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice.png"), "html", null, true);
            echo "\"
            srcset=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice.png"), "html", null, true);
            echo " 1x, ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-notice@2x.png"), "html", null, true);
            echo " 2x\"/>
              <div class=\"inform-empty-status__tip\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.no_new_notifications"), "html", null, true);
            echo "</div>
            </div>
          ";
        }
        // line 28
        echo "        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.check_all_notifications"), "html", null, true);
        echo "</a>
        </div>
      </div>
      <div class=\"message-content tab-pane\" role=\"tabpanel\" id=\"message\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          ";
        // line 35
        if ((($context["newMessageNum"] ?? $this->getContext($context, "newMessageNum")) > 0)) {
            // line 36
            echo "            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-conversation\"></div>
          ";
        } else {
            // line 39
            echo "            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message.png"), "html", null, true);
            echo "\"
          srcset=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message.png"), "html", null, true);
            echo " 1x, ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/notice/null-message@2x.png"), "html", null, true);
            echo " 2x\"/>
              <div class=\"inform-empty-status__tip\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.no_new_messages"), "html", null, true);
            echo "</div>
            </div>
          ";
        }
        // line 45
        echo "        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.check_all_messages"), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>
  </div>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/header/part/user-inform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 47,  159 => 45,  153 => 42,  147 => 41,  143 => 40,  140 => 39,  135 => 36,  133 => 35,  123 => 30,  119 => 28,  113 => 25,  107 => 24,  103 => 23,  100 => 22,  95 => 19,  93 => 18,  87 => 14,  78 => 12,  76 => 11,  63 => 10,  49 => 7,  46 => 6,  42 => 4,  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set messageSetting = setting('message') %}
{% set newMessageNum = app.user.newMessageNum %}
{% if messageSetting.showable|default('1') == 0 %}
  {% set newMessageNum = 0 %}
{% endif %}
<li class=\"user-inform-li js-user-inform hidden-xs hidden-sm cd-ml24 cd-dropdown\" data-toggle=\"cd-dropdown\">
  <a class=\"inform-dropdown-toggle\"><i class=\"cd-icon cd-icon-bell\"></i>{% if app.user.newNotificationNum > 0 or newMessageNum > 0 %}<span class=\"inform-dropdown-toggle__num cd-badge cd-badge-danger {% if app.user.newNotificationNum + newMessageNum > 9 %} inform-dropdown-toggle__num--big {% endif %}\">{{ app.user.newNotificationNum + newMessageNum }}</span>{% endif %}</a>
  <div class=\"dropdown-menu inform-dropdown js-user-nav-dropdown\" role=\"menu\">
    <div class=\"clearfix inform-dropdown-head\" role=\"tablist\">
      <a class=\"{% if messageSetting.showable|default('1') != 0 %}inform-dropdown-head__tab active{% else %}inform-dropdown-head__one_tab{% endif %} js-inform-tab\" href=\"#notification\" role=\"tab\" data-toggle=\"tab\" data-type=\"newNotification\">{{ 'notification.user_notification'|trans }}{% if app.user.newNotificationNum > 0 %}<span class=\"inform-dropdown-dot\"></span>{% endif %}</a>
      {% if messageSetting.showable|default('1') != 0 %}
        <a class=\"inform-dropdown-head__tab js-inform-tab\" href=\"#message\" role=\"tab\" data-toggle=\"tab\" data-type=\"conversation\">{{ 'user.btn.send_message'|trans }}{% if newMessageNum > 0 %}<span class=\"inform-dropdown-dot\"></span>{% endif %}</a>
      {% endif %}
    </div>
    <div class=\"tab-content\">
      <div class=\"notification-content tab-pane active\" role=\"tabpanel\" id=\"notification\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          {% if app.user.newNotificationNum > 0 %}
            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-newNotification\"></div>
          {% else %}
            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"{{ asset('static-dist/app/img/notice/null-notice.png') }}\"
            srcset=\"{{ asset('static-dist/app/img/notice/null-notice.png') }} 1x, {{ asset('static-dist/app/img/notice/null-notice@2x.png') }} 2x\"/>
              <div class=\"inform-empty-status__tip\">{{ 'homepage.header.no_new_notifications'|trans }}</div>
            </div>
          {% endif %}
        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"{{ path('notification') }}\">{{ 'homepage.header.check_all_notifications'|trans }}</a>
        </div>
      </div>
      <div class=\"message-content tab-pane\" role=\"tabpanel\" id=\"message\">
        <div class=\"inform-dropdown-body js-inform-dropdown-body\">
          {% if newMessageNum > 0 %}
            <div class=\"inform-loading js-inform-loading\"></div>
            <div class=\"js-inform-conversation\"></div>
          {% else %}
            <div class=\"inform-empty-status js-inform-empty\">
              <img class=\"cd-mb24\" src=\"{{ asset('static-dist/app/img/notice/null-message.png') }}\"
          srcset=\"{{ asset('static-dist/app/img/notice/null-message.png') }} 1x, {{ asset('static-dist/app/img/notice/null-message@2x.png') }} 2x\"/>
              <div class=\"inform-empty-status__tip\">{{ 'homepage.header.no_new_messages'|trans }}</div>
            </div>
          {% endif %}
        </div>
        <div class=\"inform-dropdown-foot\">
          <a class=\"cd-link-minor\" href=\"{{ path('message') }}\">{{ 'homepage.header.check_all_messages'|trans }}</a>
        </div>
      </div>
    </div>
  </div>
</li>", "default/header/part/user-inform.html.twig", "/var/www/bootcamp/chenlong/project-it-migrant-workers/app/Resources/views/default/header/part/user-inform.html.twig");
    }
}
