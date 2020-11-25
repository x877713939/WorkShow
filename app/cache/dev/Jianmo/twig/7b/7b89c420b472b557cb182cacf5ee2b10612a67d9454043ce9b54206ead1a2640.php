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

/* login/index.html.twig */
class __TwigTemplate_cb325484f15bb0586e0d4215e4c18c0ab9095d9824c8fce6c3432fbe5bffb1d0 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'bottom' => [$this, 'block_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script([0 => "libs/jquery-validation.js", 1 => "app/js/auth/login/index.js"]);
        // line 3
        $context["bodyClass"] = "login";
        // line 4
        $context["ai_face_enabled"] = ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("feature.face_enabled"), 0) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("face.login.enabled"), 0)) && _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("face.login.pc_enabled"), 0));
        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.content_title"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "cookies", []), "get", [0 => "modalOpened"], "method") == 1)) {
            // line 9
            echo "    <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\"
      data-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("card_info", ["cardType" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "cardType"], "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "cardId"], "method")]), "html", null, true);
            echo "\" class=\"hidden\"><span
        class=\"receive-modal\"></span></a>
  ";
        }
        // line 13
        echo "  <div class=\"es-section login-section\">
    <div class=\"logon-tab clearfix\">
      <a class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.login_account"), "html", null, true);
        echo "</a>
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", ["goto" => ($context["_target_path"] ?? $this->getContext($context, "_target_path"))]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.register_account"), "html", null, true);
        echo "</a>
    </div>
    <div class=\"login-main js-login-main\">
      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\">

        ";
        // line 21
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 22
            echo "          <div class=\"alert alert-danger\">
            ";
            // line 23
            if (($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", []) == "Bad credentials.")) {
                // line 24
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.user_password.error_tips"), "html", null, true);
                echo "
            ";
            } elseif (($this->getAttribute(            // line 25
($context["error"] ?? $this->getContext($context, "error")), "message", []) == "User account is locked.")) {
                // line 26
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("exception.user_lock"), "html", null, true);
                echo "
            ";
            } else {
                // line 28
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", [])), "html", null, true);
                echo "
            ";
            }
            // line 30
            echo "          </div>
        ";
        }
        // line 32
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? $this->getContext($context, "web_macro")), "flash_messages", [], "method"), "html", null, true);
        echo "
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_username\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.account_label"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"";
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "account"], "method")) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "account"], "method"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        }
        echo "\" required
              placeholder='";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.account_placeholder"), "html", null, true);
        echo "'/>
            <div class=\"help-block\"></div>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_password\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.password_label"), "html", null, true);
        echo "</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.password_placeholder"), "html", null, true);
        echo "'/>
          </div>
        </div>

        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.remember_me"), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"form-group mbl\">
          <button type=\"button\" class=\"btn btn-primary btn-lg btn-block js-btn-login\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.submit_button"), "html", null, true);
        echo "</button>
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["_target_path"] ?? $this->getContext($context, "_target_path")), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

      <div class=\"mbl\">
        <a class=\"link-primary\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("password_reset");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.find_password"), "html", null, true);
        echo "</a>
        <span class=\"color-gray mhs\">|</span>
        <span class=\"color-gray\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.ask_register"), "html", null, true);
        echo "</span>
        <a class=\"link-primary\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", ["goto" => ($context["_target_path"] ?? $this->getContext($context, "_target_path"))]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.go_register"), "html", null, true);
        echo "</a>
      </div>

      ";
        // line 68
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.enabled") || ($context["ai_face_enabled"] ?? $this->getContext($context, "ai_face_enabled")))) {
            // line 69
            echo "        <div class=\"social-login\">
            <span>
              ";
            // line 71
            if (($context["ai_face_enabled"] ?? $this->getContext($context, "ai_face_enabled"))) {
                // line 72
                echo "                <a class=\"sts-login-link js-sts-login-link\" href=\"javascript:;\">
                  <img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face.png"), "html", null, true);
                echo "\"
                    srcset=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face.png"), "html", null, true);
                echo " 1x, ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/face@2x.png"), "html", null, true);
                echo " 2x\" alt=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.login.sts_discovery"), "html", null, true);
                echo "\"/>
                </a>
              ";
            }
            // line 77
            echo "              ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Login:oauth2LoginsBlock", ["targetPath" => ($context["_target_path"] ?? $this->getContext($context, "_target_path"))]));
            echo "
            </span>
          <div class=\"line\"></div>
        </div>
      ";
        }
        // line 82
        echo "    </div>

    ";
        // line 84
        if (($context["ai_face_enabled"] ?? $this->getContext($context, "ai_face_enabled"))) {
            // line 85
            echo "      ";
            $context["type"] = "page";
            // line 86
            echo "      ";
            $this->loadTemplate("login/sts-logins-block.htm.twig", "login/index.html.twig", 86)->display(twig_array_merge($context, ["type" => ($context["type"] ?? $this->getContext($context, "type")), "goto" => ($context["_target_path"] ?? $this->getContext($context, "_target_path"))]));
            // line 87
            echo "    ";
        }
        // line 88
        echo "  </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_bottom($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 93
        echo "  ";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "login/index.html.twig", 93)->display(twig_array_merge($context, ["mobile_tool_bar" => "login"]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 93,  297 => 92,  285 => 88,  282 => 87,  279 => 86,  276 => 85,  274 => 84,  270 => 82,  261 => 77,  251 => 74,  247 => 73,  244 => 72,  242 => 71,  238 => 69,  236 => 68,  228 => 65,  224 => 64,  217 => 62,  210 => 58,  206 => 57,  200 => 54,  193 => 50,  184 => 44,  179 => 42,  171 => 37,  163 => 36,  158 => 34,  152 => 32,  148 => 30,  142 => 28,  136 => 26,  134 => 25,  129 => 24,  127 => 23,  124 => 22,  122 => 21,  117 => 19,  109 => 16,  105 => 15,  101 => 13,  95 => 10,  92 => 9,  89 => 8,  80 => 7,  60 => 5,  49 => 1,  47 => 4,  45 => 3,  43 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% do script(['libs/jquery-validation.js','app/js/auth/login/index.js']) %}
{% set bodyClass = 'login' %}
{% set ai_face_enabled = (setting('feature.face_enabled')|default(0) and setting('face.login.enabled')|default(0) and setting('face.login.pc_enabled')|default(0)) %}
{% block title %}{{ 'user.login.content_title'|trans }} - {{ parent() }}{% endblock %}

{% block content %}
  {% if app.request.cookies.get('modalOpened') == 1 %}
    <a href=\"#modal\" class=\" hidden\" data-toggle=\"modal\"
      data-url=\"{{ path('card_info',{'cardType':app.request.query.get('cardType'),'cardId':app.request.query.get('cardId')}) }}\" class=\"hidden\"><span
        class=\"receive-modal\"></span></a>
  {% endif %}
  <div class=\"es-section login-section\">
    <div class=\"logon-tab clearfix\">
      <a class=\"active\">{{ 'user.login.login_account'|trans }}</a>
      <a href=\"{{ path('register', {goto:_target_path}) }}\">{{ 'user.register.register_account'|trans }}</a>
    </div>
    <div class=\"login-main js-login-main\">
      <form id=\"login-form\" class=\"form-vertical\" method=\"post\" action=\"{{ path('login_check') }}\">

        {% if error %}
          <div class=\"alert alert-danger\">
            {% if error.message == 'Bad credentials.' %}
              {{ 'site.user_password.error_tips'|trans }}
            {% elseif error.message == 'User account is locked.' %}
              {{ 'exception.user_lock'|trans }}
            {% else %}
              {{ error.message|trans }}
            {% endif %}
          </div>
        {% endif %}
        {{ web_macro.flash_messages() }}
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_username\">{{ 'user.login.account_label'|trans }}</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_username\" type=\"text\" name=\"_username\" value=\"{% if app.request.query.get('account') %}{{ app.request.query.get('account') }}{% else %}{{ last_username }}{% endif %}\" required
              placeholder='{{ 'user.login.account_placeholder'|trans }}'/>
            <div class=\"help-block\"></div>
          </div>
        </div>
        <div class=\"form-group mbl\">
          <label class=\"control-label\" for=\"login_password\">{{ 'user.login.password_label'|trans }}</label>
          <div class=\"controls\">
            <input class=\"form-control input-lg\" id=\"login_password\" type=\"password\" name=\"_password\" required placeholder='{{ 'user.login.password_placeholder'|trans }}'/>
          </div>
        </div>

        <div class=\"form-group mbl\">
          <div class=\"controls\">
            <input type=\"checkbox\" name=\"_remember_me\" checked=\"checked\"> {{ 'user.login.remember_me'|trans }}
          </div>
        </div>
        <div class=\"form-group mbl\">
          <button type=\"button\" class=\"btn btn-primary btn-lg btn-block js-btn-login\">{{ 'user.login.submit_button'|trans }}</button>
        </div>

        <input type=\"hidden\" name=\"_target_path\" value=\"{{ _target_path }}\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
      </form>

      <div class=\"mbl\">
        <a class=\"link-primary\" href=\"{{ path('password_reset') }}\">{{ 'user.login.find_password'|trans }}</a>
        <span class=\"color-gray mhs\">|</span>
        <span class=\"color-gray\">{{ 'user.login.ask_register'|trans }}</span>
        <a class=\"link-primary\" href=\"{{ path('register', {goto:_target_path}) }}\">{{ 'user.login.go_register'|trans }}</a>
      </div>

      {% if setting('login_bind.enabled') or ai_face_enabled %}
        <div class=\"social-login\">
            <span>
              {% if ai_face_enabled %}
                <a class=\"sts-login-link js-sts-login-link\" href=\"javascript:;\">
                  <img src=\"{{ asset('static-dist/app/img/face.png') }}\"
                    srcset=\"{{ asset('static-dist/app/img/face.png') }} 1x, {{ asset('static-dist/app/img/face@2x.png') }} 2x\" alt=\"{{'user.login.sts_discovery'|trans}}\"/>
                </a>
              {% endif %}
              {{ render(controller('AppBundle:Login:oauth2LoginsBlock', {targetPath:_target_path})) }}
            </span>
          <div class=\"line\"></div>
        </div>
      {% endif %}
    </div>

    {% if ai_face_enabled %}
      {% set type = 'page' %}
      {% include 'login/sts-logins-block.htm.twig'  with { type: type, goto: _target_path } %}
    {% endif %}
  </div>

{% endblock %}

{% block bottom %}
  {% include 'mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'login' } %}
{% endblock %}
", "login/index.html.twig", "/var/www/bootcamp/chenlong/project-it-migrant-workers/app/Resources/views/login/index.html.twig");
    }
}
