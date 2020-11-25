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

/* default/header/part/user-avatar.html.twig */
class __TwigTemplate_95401958f5fc3e8ce240c4359009651d8b52b11b205598d08e9adf4cf62d57b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/part/user-avatar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/part/user-avatar.html.twig"));

        // line 1
        echo "<li class=\"user-avatar-li cd-dropdown cd-ml24\"  data-toggle=\"cd-dropdown\">
  <a class=\"user-avatar-toggle\" href=\"javascript:;\">
    <img class=\"cd-avatar cd-avatar-xs\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "smallAvatar", []), "avatar.png"), "html", null, true);
        echo "\">
  </a>
  <div class=\"dropdown-menu user-dropdown hidden-sm hidden-xs hidden-md js-user-nav-dropdown\">
    <div class=\"user-dropdown-info cd-mb24\">
      <a class=\"user-dropdown-info__avatar cd-mr24\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
        echo "\">
        <img class=\"cd-avatar\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "largeAvatar", []), "avatar.png"), "html", null, true);
        echo "\">
        ";
        // line 9
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("header.user.logo", ["user" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])]);
        echo "
      </a>
      <div class=\"user-dropdown-profile\">
        <div class=\"user-dropdown-profile__nickname\">
          <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "nickname", []), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 15
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("header.user.info", ["user" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", [])]);
        echo "
      </div>
    </div>
    <div class=\"user-dropdown__link cd-mb24\">
      <a class=\"cd-link-minor\" href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_orders");
        echo "\"><i class=\"cd-icon cd-icon-payment\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.account_menu"), "html", null, true);
        echo "</a>
      <a class=\"cd-link-minor\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
        echo "\"><i class=\"es-icon es-icon-setting\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.settings_menu"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"user-dropdown__logout\"><a class=\"cd-link-minor\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.logout"), "html", null, true);
        echo "</a></div>
  </div>
  <ul class=\"dropdown-menu hidden-lg\" role=\"menu\">
    <div class=\"dropdown-header\"><a class=\"cd-link-minor\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "nickname", []), "html", null, true);
        echo "</a></div>
    <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_orders");
        echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.account_menu"), "html", null, true);
        echo "</a></li>
    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
        echo "\"><i class=\"es-icon es-icon-setting\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.settings_menu"), "html", null, true);
        echo "</a></li>

    ";
        // line 29
        if (($this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin") || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->hasPermission("admin_v2"))) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\"><i class=\"es-icon es-icon-dashboard\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.admin_menu"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 31
        echo "    ";
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "roles", []))) {
            echo "<li class=\"user-nav-li-my\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\"><i class=\"es-icon es-icon-event\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_teaching_menu"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 33
        echo "    <li class=\"user-nav-li-my\">
      <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">
        <i class=\"es-icon es-icon-book\"></i>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.my_learning_menu"), "html", null, true);
        echo "
      </a>
    </li>
    ";
        // line 38
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("user.nav.menu.extension", ["mobile" => ($context["mobile"] ?? $this->getContext($context, "mobile"))]);
        echo "
    <li class=\"hidden-md\"><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
        echo "\"><span class=\"pull-right num\">";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "newNotificationNum", []) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "newNotificationNum", []), "html", null, true);
        }
        echo "</span><i class=\"es-icon es-icon-notificationson\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.notice"), "html", null, true);
        echo "</a></li>
    <li class=\"hidden-md\"><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
        echo "\"><span class=\"pull-right num\">";
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "newMessageNum", []) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "newMessageNum", []), "html", null, true);
        }
        echo "</span><i class=\"es-icon es-icon-mail\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.message"), "html", null, true);
        echo "</a></li>
    ";
        // line 41
        if (($context["mobile"] ?? $this->getContext($context, "mobile"))) {
            // line 42
            echo "      <li class=\"mobile-switch js-switch-pc visible-xs\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_pc"), "html", null, true);
            echo "</a></li>
    ";
        } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wap.version") == 1)) {
            // line 45
            echo "      <li class=\"mobile-switch js-switch-mobile visible-xs\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_mobile"), "html", null, true);
            echo "</a>
      </li>
    ";
        }
        // line 49
        echo "    ";
        if ((($context["show_switch_locale"] ?? $this->getContext($context, "show_switch_locale")) == 1)) {
            // line 50
            echo "      ";
            $this->loadTemplate("default/switch-language.html.twig", "default/header/part/user-avatar.html.twig", 50)->display(twig_array_merge($context, ["langClass" => "text-center user-nav-li-logout"]));
            // line 51
            echo "    ";
        }
        // line 52
        echo "    <li class=\"user-nav-li-logout\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"es-icon es-icon-power\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.logout"), "html", null, true);
        echo "</a></li>
  </ul>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/header/part/user-avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 52,  195 => 51,  192 => 50,  189 => 49,  183 => 46,  180 => 45,  175 => 43,  172 => 42,  170 => 41,  160 => 40,  150 => 39,  146 => 38,  140 => 35,  136 => 34,  133 => 33,  123 => 31,  114 => 29,  107 => 27,  101 => 26,  95 => 25,  87 => 22,  80 => 20,  74 => 19,  67 => 15,  62 => 13,  55 => 9,  51 => 8,  47 => 7,  40 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"user-avatar-li cd-dropdown cd-ml24\"  data-toggle=\"cd-dropdown\">
  <a class=\"user-avatar-toggle\" href=\"javascript:;\">
    <img class=\"cd-avatar cd-avatar-xs\" src=\"{{ filepath(app.user.smallAvatar, 'avatar.png') }}\">
  </a>
  <div class=\"dropdown-menu user-dropdown hidden-sm hidden-xs hidden-md js-user-nav-dropdown\">
    <div class=\"user-dropdown-info cd-mb24\">
      <a class=\"user-dropdown-info__avatar cd-mr24\" href=\"{{ path('user_show', {id:app.user.id}) }}\">
        <img class=\"cd-avatar\" src=\"{{ filepath(app.user.largeAvatar, 'avatar.png') }}\">
        {{ slot('header.user.logo', {user: app.user}) }}
      </a>
      <div class=\"user-dropdown-profile\">
        <div class=\"user-dropdown-profile__nickname\">
          <span>{{ app.user.nickname }}</span>
        </div>
        {{ slot('header.user.info', {user: app.user}) }}
      </div>
    </div>
    <div class=\"user-dropdown__link cd-mb24\">
      <a class=\"cd-link-minor\" href=\"{{ path('my_orders') }}\"><i class=\"cd-icon cd-icon-payment\"></i>{{ 'homepage.header.account_menu'|trans }}</a>
      <a class=\"cd-link-minor\" href=\"{{ path('settings') }}\"><i class=\"es-icon es-icon-setting\"></i>{{ 'homepage.header.settings_menu'|trans }}</a>
    </div>
    <div class=\"user-dropdown__logout\"><a class=\"cd-link-minor\" href=\"{{ path('logout') }}\">{{ 'homepage.header.logout'|trans }}</a></div>
  </div>
  <ul class=\"dropdown-menu hidden-lg\" role=\"menu\">
    <div class=\"dropdown-header\"><a class=\"cd-link-minor\" href=\"{{ path('user_show', {id:app.user.id}) }}\">{{ app.user.nickname }}</a></div>
    <li><a href=\"{{path('my_orders')}}\"><i class=\"es-icon es-icon-accountwallet\"></i>{{'homepage.header.account_menu'|trans}}</a></li>
    <li><a href=\"{{ path('settings') }}\"><i class=\"es-icon es-icon-setting\"></i>{{'homepage.header.settings_menu'|trans}}</a></li>

    {% if has_permission('admin') or has_permission('admin_v2') %}<li><a href=\"{{ path('admin') }}\"><i class=\"es-icon es-icon-dashboard\"></i>{{'homepage.header.admin_menu'|trans}}</a></li>
    {% endif %}
    {% if 'ROLE_TEACHER' in app.user.roles %}<li class=\"user-nav-li-my\"><a href=\"{{ path('my') }}\"><i class=\"es-icon es-icon-event\"></i>{{'homepage.header.my_teaching_menu'|trans}}</a></li>
    {% endif %}
    <li class=\"user-nav-li-my\">
      <a href=\"{{ path('my_courses_learning') }}\">
        <i class=\"es-icon es-icon-book\"></i>{{'homepage.header.my_learning_menu'|trans}}
      </a>
    </li>
    {{ slot('user.nav.menu.extension', {mobile: mobile}) }}
    <li class=\"hidden-md\"><a href=\"{{ path('notification') }}\"><span class=\"pull-right num\">{% if app.user.newNotificationNum > 0 %}{{ app.user.newNotificationNum }}{% endif %}</span><i class=\"es-icon es-icon-notificationson\"></i>{{'homepage.header.notice'|trans}}</a></li>
    <li class=\"hidden-md\"><a href=\"{{ path('message') }}\"><span class=\"pull-right num\">{% if app.user.newMessageNum > 0 %}{{ app.user.newMessageNum }}{% endif %}</span><i class=\"es-icon es-icon-mail\"></i>{{'homepage.header.message'|trans}}</a></li>
    {% if mobile %}
      <li class=\"mobile-switch js-switch-pc visible-xs\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>{{'homepage.header.switch_pc'|trans}}</a></li>
    {% elseif setting('wap.version') == 1  %}
      <li class=\"mobile-switch js-switch-mobile visible-xs\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>{{'homepage.header.switch_mobile'|trans}}</a>
      </li>
    {% endif %}
    {% if show_switch_locale == 1 %}
      {% include 'default/switch-language.html.twig' with { langClass: 'text-center user-nav-li-logout' } %}
    {% endif %}
    <li class=\"user-nav-li-logout\"><a href=\"{{ path('logout') }}\"><i class=\"es-icon es-icon-power\"></i>{{'homepage.header.logout'|trans}}</a></li>
  </ul>
</li>", "default/header/part/user-avatar.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/default/header/part/user-avatar.html.twig");
    }
}
