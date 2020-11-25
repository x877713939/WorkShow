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

/* teacher/teacher-item.html.twig */
class __TwigTemplate_0fd8f74a889b0eb8678973670c608179be1f1c745b3f3677c98f9a5602677b6f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/teacher-item.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "teacher/teacher-item.html.twig"));

        // line 1
        echo "<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", [])]), "html", null, true);
        echo "\">
      <img class=\"avatar-lg\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "largeAvatar", []), "avatar.png"), "html", null, true);
        echo "\" alt=\"\">
    </a>
    <h3 class=\"title\">
      ";
        // line 7
        if ( !(($this->getAttribute(($context["teacher"] ?? null), "destroyed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["teacher"] ?? null), "destroyed", []), 0)) : (0))) {
            // line 8
            echo "      <a class=\"link-dark\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "nickname", []), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 10
            echo "        <a class=\"link-dark\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.user_had_destroyed"), "html", null, true);
            echo "</a>
      ";
        }
        // line 12
        echo "    </h3>
    <div class=\"position\">
      ";
        // line 14
        if ($this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "title", [])) {
            // line 15
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "title", []), "html", null, true);
            echo "
      ";
        } else {
            // line 17
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.no_title"), "html", null, true);
            echo "
      ";
        }
        // line 19
        echo "    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      ";
        // line 23
        if ($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "about", [])) {
            // line 24
            echo "        ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "about", []), 30);
            echo "
      ";
        } else {
            // line 26
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.fields.no_introduction"), "html", null, true);
            echo "
      ";
        }
        // line 28
        echo "    </div>
    <div class=\"metas\">
      ";
        // line 30
        if (( !$this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) || ($this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", []) != $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "id", [])))) {
            // line 31
            echo "        ";
            $context["messageSetting"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("message");
            // line 32
            echo "        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follow", ["id" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", [])]), "html", null, true);
            echo "\" ";
            if (($context["isFollowed"] ?? $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "isLogin", [], "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.btn.following"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_unfollow", ["id" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", [])]), "html", null, true);
            echo "\" ";
            if ( !($context["isFollowed"] ?? $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.btn.followed"), "html", null, true);
            echo "</a>
        ";
            // line 34
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->canSendMessage($this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", [])) && ((($this->getAttribute(($context["messageSetting"] ?? null), "showable", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["messageSetting"] ?? null), "showable", []), "1")) : ("1")) != 0))) {
                // line 35
                echo "          <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", ["toId" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.btn.send_message"), "html", null, true);
                echo "</a>
        ";
            }
            // line 37
            echo "      ";
        }
        // line 38
        echo "    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "teacher/teacher-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 38,  150 => 37,  142 => 35,  140 => 34,  130 => 33,  113 => 32,  110 => 31,  108 => 30,  104 => 28,  98 => 26,  92 => 24,  90 => 23,  84 => 19,  78 => 17,  72 => 15,  70 => 14,  66 => 12,  60 => 10,  52 => 8,  50 => 7,  44 => 4,  40 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"{{ path('user_show', {id:teacher.id}) }}\">
      <img class=\"avatar-lg\" src=\"{{ filepath(teacher.largeAvatar, 'avatar.png') }}\" alt=\"\">
    </a>
    <h3 class=\"title\">
      {% if not teacher.destroyed|default(0) %}
      <a class=\"link-dark\" href=\"{{ path('user_show', {id:teacher.id}) }}\">{{ teacher.nickname }}</a>
      {% else %}
        <a class=\"link-dark\">{{ 'user.user_had_destroyed'|trans }}</a>
      {% endif %}
    </h3>
    <div class=\"position\">
      {% if teacher.title %}
        {{ teacher.title }}
      {% else %}
        {{'user.fields.no_title'|trans}}
      {% endif %}
    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      {% if profile.about %}
        {{ profile.about|plain_text(30) }}
      {% else %}
        {{'user.fields.no_introduction'|trans}}
      {% endif %}
    </div>
    <div class=\"metas\">
      {% if not app.user or (teacher.id != app.user.id) %}
        {% set messageSetting = setting('message') %}
        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"{{ path('user_follow', {id:teacher.id}) }}\" {% if isFollowed %} style=\"display:none;\"{% endif %} data-loggedin={% if app.user and app.user.isLogin() %}\"1\"{% else %}\"0\"{% endif %}>{{'user.btn.following'|trans}}</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"{{ path('user_unfollow', {id:teacher.id}) }}\" {% if not isFollowed %} style=\"display:none;\" {% endif %}>{{'user.btn.followed'|trans}}</a>
        {% if can_send_message(teacher.id) and messageSetting.showable|default('1') != 0 %}
          <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"{{path('message_create', {toId:teacher.id})}}\">{{'user.btn.send_message'|trans}}</a>
        {% endif %}
      {% endif %}
    </div>
  </div>
</div>
", "teacher/teacher-item.html.twig", "/var/www/bootcamp/chenlong/EduSoho/app/Resources/views/teacher/teacher-item.html.twig");
    }
}
