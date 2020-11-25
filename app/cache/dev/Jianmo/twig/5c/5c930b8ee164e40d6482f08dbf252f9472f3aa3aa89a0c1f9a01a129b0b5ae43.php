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

/* register/index.html.twig */
class __TwigTemplate_1d4dbf7ef54e515a24b323d34ab467f24dc0438e5ef0ba6b8a6a08db43be1c54 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register/index.html.twig"));

        // line 3
        $context["bodyClass"] = "register";
        // line 4
        $context["parameter"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->getParametersFromUrl($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "uri", []));
        // line 5
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script([0 => "libs/bootstrap-datetimepicker.js", 1 => "libs/jquery-validation.js", 2 => "app/js/auth/register/index.js"]);
        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "register/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register"), "html", null, true);
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
        echo "\t<div class=\"es-section login-section\">
\t\t<div class=\"logon-tab clearfix\">
\t\t\t<a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", ["goto" => ($context["_target_path"] ?? $this->getContext($context, "_target_path"))]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.login_account"), "html", null, true);
        echo "</a>
\t\t\t<a class=\"active\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.register_account"), "html", null, true);
        echo "</a>
\t\t</div>
\t\t<div class=\"login-main\">
\t\t\t";
        // line 14
        if (($context["isRegisterEnabled"] ?? $this->getContext($context, "isRegisterEnabled"))) {
            // line 15
            echo "\t\t\t\t<form id=\"register-form\" method=\"post\" action=\"\">
\t\t\t\t\t";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? $this->getContext($context, "web_macro")), "flash_messages", [], "method"), "html", null, true);
            echo "

\t\t\t\t\t";
            // line 18
            if (($context["inviteUser"] ?? $this->getContext($context, "inviteUser"))) {
                // line 19
                echo "\t\t\t\t\t\t<div class=\"alert alert-info alert-sm\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.register_through_inviter", ["%inviteUser%" => $this->getAttribute(($context["inviteUser"] ?? $this->getContext($context, "inviteUser")), "nickname", [])]);
                echo "</div>
\t\t\t\t\t";
            }
            // line 21
            echo "
\t\t\t\t\t";
            // line 22
            if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "email")) {
                // line 23
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_email\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.password_reset.email"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"email\" id=\"register_email\" name=\"email\"  class=\"form-control input-lg\" data-url=\"";
                // line 26
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.account_with_email_placeholder"), "html", null, true);
                echo "\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile")) {
                // line 31
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_mobile\">";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.password_reset.mobile"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"register_mobile\" name=\"verifiedMobile\"  class=\"form-control input-lg\" data-url=\"";
                // line 34
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.account_with_mobile_placeholder"), "html", null, true);
                echo "\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 39
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_emailOrmobile\">";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.account_with_mobile_or_email_label"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"register_emailOrMobile\" name=\"emailOrMobile\"  class=\"form-control input-lg\" data-url=\"";
                // line 42
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_email_or_mobile_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.account_with_mobile_or_email_placeholder"), "html", null, true);
                echo "\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 47
            echo "
\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_nickname\">";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.username_label"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control input-lg\" data-url=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register_nickname_check");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.username_label_placeholder"), "html", null, true);
            echo "\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_password\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.password_label"), "html", null, true);
            echo "</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control input-lg ";
            // line 59
            if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.password_level"), "low") != "low")) {
                echo "cd-text-sm";
            }
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("user.register.password_label_placeholder." . _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.password_level"), "low"))), "html", null, true);
            echo "\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
          ";
            // line 63
            if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.captcha_enabled"), 0) == 1)) {
                // line 64
                echo "            <div class=\"form-group cd-mb32 js-drag-jigsaw ";
                if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile")) {
                    echo "hidden";
                }
                echo "\">
              ";
                // line 65
                $this->loadTemplate("common/drag.html.twig", "register/index.html.twig", 65)->display(twig_array_merge($context, ["auth" => true]));
                // line 66
                echo "            </div>
          ";
            }
            // line 68
            echo "\t\t\t\t\t";
            if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "email_or_mobile") || ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") == "mobile"))) {
                // line 69
                echo "\t\t\t\t\t\t<div class=\"form-group mbl ";
                if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.register_mode") != "mobile")) {
                    echo "hidden";
                }
                echo " email_mobile_msg\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"sms_code\">";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.sms_code"), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t<div class=\"controls cd-row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" maxlength=\"6\" class=\"form-control input-lg\" id=\"sms_code\" name=\"sms_code\" placeholder=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.input_sms_code"), "html", null, true);
                echo "\" data-url=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_check", ["type" => "sms_registration"]);
                echo "\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t\t\t<p class=\"help-block\"> </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-default sms-send-btn js-sms-send-btn disabled\" data-sms-url=\"";
                // line 77
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edu_cloud_sms_send_registration");
                echo "\">
\t\t\t\t\t\t\t\t\t\t<span id=\"js-time-left\"></span>
\t\t\t\t\t\t\t\t\t\t<span id=\"js-fetch-btn-text\">";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.settings.security.get_sms_code_btn"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 85
            echo "
\t\t\t\t\t";
            // line 86
            if (((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("invite.invite_code_setting"), 0) == 1) &&  !($context["inviteUser"] ?? $this->getContext($context, "inviteUser")))) {
                // line 87
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"invitedCode\">";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.invite_code_label"), "html", null, true);
                echo "<span class=\"color-success\">（";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.field.optional"), "html", null, true);
                echo "）</span></label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invitedCode\" class=\"form-control input-lg invitecode\" data-url=\"";
                // line 90
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("invitecode_check");
                echo "\" placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.invite_code_placeholder"), "html", null, true);
                echo "\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 94
            echo "        
\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"register-btn\" data-submiting-text=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit.submiting"), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.register"), "html", null, true);
            echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
            // line 101
            if ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.user_terms") == "opened") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.privacy_policy") == "opened"))) {
                // line 102
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree_policy\" checked=\"checked\"> ";
                // line 104
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.read_agree"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a href=\"";
                // line 105
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_terms");
                echo "\" target=\"_blank\">《";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.user_service_protocol"), "html", null, true);
                echo "》</a>
\t\t\t\t\t\t\t\t";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.and"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a href=\"";
                // line 107
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("privacy_policy");
                echo "\" target=\"_blank\">《";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.privacy_policy"), "html", null, true);
                echo "》</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.user_terms") == "opened")) {
                // line 111
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree_policy\" checked=\"checked\"> ";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.read_agree"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a href=\"";
                // line 114
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_terms");
                echo "\" target=\"_blank\">《";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.user_service_protocol"), "html", null, true);
                echo "》</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.privacy_policy") == "opened")) {
                // line 118
                echo "\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree_policy\" checked=\"checked\"> ";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.read_agree"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t<a href=\"";
                // line 121
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("privacy_policy");
                echo "\" target=\"_blank\">《";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.privacy_policy"), "html", null, true);
                echo "》</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 125
            echo "
          <input type=\"hidden\" id=\"password_level\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.password_level"), "low"), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"captcha_enabled\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("auth.captcha_enabled"), "html", null, true);
            echo "\" />
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("site"), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"registerVisitId\" value=\"\">
\t\t\t\t</form>

\t\t\t\t";
            // line 132
            if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("login_bind.enabled")) {
                // line 133
                echo "\t\t\t\t\t<div class=\"social-login\">

            <span>
              ";
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AppBundle:Login:oauth2LoginsBlock", ["targetPath" => ($context["_target_path"] ?? $this->getContext($context, "_target_path"))]));
                echo "
            </span>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 141
            echo "\t\t\t";
        } else {
            // line 142
            echo "\t\t\t\t<div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.system_close_tips"), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 144
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_bottom($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bottom"));

        // line 149
        echo "\t";
        $this->loadTemplate("mobile/footer-tool-bar.html.twig", "register/index.html.twig", 149)->display(twig_array_merge($context, ["mobile_tool_bar" => "register"]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "register/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 149,  427 => 148,  415 => 144,  409 => 142,  406 => 141,  398 => 136,  393 => 133,  391 => 132,  384 => 128,  380 => 127,  376 => 126,  373 => 125,  364 => 121,  360 => 120,  356 => 118,  347 => 114,  343 => 113,  339 => 111,  330 => 107,  326 => 106,  320 => 105,  316 => 104,  312 => 102,  310 => 101,  301 => 97,  296 => 94,  287 => 90,  280 => 88,  277 => 87,  275 => 86,  272 => 85,  263 => 79,  258 => 77,  249 => 73,  243 => 70,  236 => 69,  233 => 68,  229 => 66,  227 => 65,  220 => 64,  218 => 63,  207 => 59,  202 => 57,  191 => 51,  186 => 49,  182 => 47,  172 => 42,  167 => 40,  164 => 39,  154 => 34,  149 => 32,  146 => 31,  136 => 26,  131 => 24,  128 => 23,  126 => 22,  123 => 21,  117 => 19,  115 => 18,  110 => 16,  107 => 15,  105 => 14,  99 => 11,  93 => 10,  89 => 8,  80 => 7,  60 => 2,  49 => 1,  47 => 5,  45 => 4,  43 => 3,  31 => 1,);
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
{% block title %}{{'user.register'|trans}} - {{ parent() }}{% endblock %}
{% set bodyClass = 'register' %}
{% set parameter = get_parameters_from_url(app.request.uri) %}
{% do script(['libs/bootstrap-datetimepicker.js','libs/jquery-validation.js','app/js/auth/register/index.js'])%}

{% block content %}
\t<div class=\"es-section login-section\">
\t\t<div class=\"logon-tab clearfix\">
\t\t\t<a href=\"{{ path('login', {goto:_target_path}) }}\">{{'user.register.login_account'|trans}}</a>
\t\t\t<a class=\"active\">{{'user.register.register_account'|trans}}</a>
\t\t</div>
\t\t<div class=\"login-main\">
\t\t\t{% if isRegisterEnabled %}
\t\t\t\t<form id=\"register-form\" method=\"post\" action=\"\">
\t\t\t\t\t{{ web_macro.flash_messages() }}

\t\t\t\t\t{% if inviteUser %}
\t\t\t\t\t\t<div class=\"alert alert-info alert-sm\">{{'user.register.register_through_inviter'|trans({'%inviteUser%': inviteUser.nickname})|raw}}</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if setting('auth.register_mode') == 'email' %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_email\">{{'user.settings.security.password_reset.email'|trans}}</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"email\" id=\"register_email\" name=\"email\"  class=\"form-control input-lg\" data-url=\"{{path('register_email_check')}}\" placeholder=\"{{'user.register.account_with_email_placeholder'|trans}}\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif setting('auth.register_mode') == 'mobile' %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_mobile\">{{'user.settings.security.password_reset.mobile'|trans}}</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"tel\" id=\"register_mobile\" name=\"verifiedMobile\"  class=\"form-control input-lg\" data-url=\"{{path('register_mobile_check')}}\" placeholder=\"{{'user.register.account_with_mobile_placeholder'|trans}}\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_emailOrmobile\">{{'user.register.account_with_mobile_or_email_label'|trans}}</label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"register_emailOrMobile\" name=\"emailOrMobile\"  class=\"form-control input-lg\" data-url=\"{{path('register_email_or_mobile_check')}}\" placeholder=\"{{'user.register.account_with_mobile_or_email_placeholder'|trans}}\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_nickname\">{{'user.register.username_label'|trans}}</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"register_nickname\" name=\"nickname\" required=\"required\" class=\"form-control input-lg\" data-url=\"{{path('register_nickname_check')}}\" placeholder=\"{{'user.register.username_label_placeholder'|trans}}\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<label class=\"control-label required\" for=\"register_password\">{{'user.register.password_label'|trans}}</label>
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"password\" id=\"register_password\" name=\"password\" required=\"required\" class=\"form-control input-lg {% if setting('auth.password_level')|default('low') != 'low' %}cd-text-sm{% endif %}\" placeholder=\"{{('user.register.password_label_placeholder.'~setting('auth.password_level')|default('low'))|trans}}\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t<p class=\"help-block\"></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
          {% if (setting('auth.captcha_enabled')|default(0)) == 1 %}
            <div class=\"form-group cd-mb32 js-drag-jigsaw {% if setting('auth.register_mode') == 'mobile' %}hidden{% endif%}\">
              {% include 'common/drag.html.twig' with { auth: true } %}
            </div>
          {% endif %}
\t\t\t\t\t{% if setting('auth.register_mode') == 'email_or_mobile' or setting('auth.register_mode') == 'mobile' %}
\t\t\t\t\t\t<div class=\"form-group mbl {% if setting('auth.register_mode') != 'mobile' %}hidden{% endif %} email_mobile_msg\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"sms_code\">{{'user.settings.security.sms_code'|trans}}</label>
\t\t\t\t\t\t\t<div class=\"controls cd-row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" maxlength=\"6\" class=\"form-control input-lg\" id=\"sms_code\" name=\"sms_code\" placeholder=\"{{'user.settings.security.input_sms_code'|trans}}\" data-url=\"{{path('edu_cloud_sms_check',{type:'sms_registration'})}}\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t\t\t<p class=\"help-block\"> </p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"btn btn-default sms-send-btn js-sms-send-btn disabled\" data-sms-url=\"{{ path('edu_cloud_sms_send_registration') }}\">
\t\t\t\t\t\t\t\t\t\t<span id=\"js-time-left\"></span>
\t\t\t\t\t\t\t\t\t\t<span id=\"js-fetch-btn-text\">{{'user.settings.security.get_sms_code_btn'|trans}}</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if (setting('invite.invite_code_setting')|default(0) == 1) and not inviteUser %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<label class=\"control-label required\" for=\"invitedCode\">{{'user.register.invite_code_label'|trans}}<span class=\"color-success\">（{{'form.field.optional'|trans}}）</span></label>
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"invitedCode\" class=\"form-control input-lg invitecode\" data-url=\"{{path('invitecode_check')}}\" placeholder=\"{{'user.register.invite_code_placeholder'|trans}}\" onkeydown=\"if(event.keyCode==13) return false;\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
        
\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<button type=\"submit\" id=\"register-btn\" data-submiting-text=\"{{'form.btn.submit.submiting'|trans}}\" class=\"btn btn-primary btn-lg btn-block\">{{'form.btn.register'|trans}}</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t{% if setting('auth.user_terms') == 'opened' and setting('auth.privacy_policy') == 'opened' %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree_policy\" checked=\"checked\"> {{ 'user.register.read_agree'|trans }}
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_terms') }}\" target=\"_blank\">《{{'user.register.user_service_protocol'|trans}}》</a>
\t\t\t\t\t\t\t\t{{ 'site.default.and'|trans }}
\t\t\t\t\t\t\t\t<a href=\"{{ path('privacy_policy') }}\" target=\"_blank\">《{{'user.register.privacy_policy'|trans}}》</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif setting('auth.user_terms') == 'opened' %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree_policy\" checked=\"checked\"> {{ 'user.register.read_agree'|trans }}
\t\t\t\t\t\t\t\t<a href=\"{{ path('user_terms') }}\" target=\"_blank\">《{{'user.register.user_service_protocol'|trans}}》</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif setting('auth.privacy_policy') == 'opened' %}
\t\t\t\t\t\t<div class=\"form-group mbl\">
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree_policy\" checked=\"checked\"> {{ 'user.register.read_agree'|trans }}
\t\t\t\t\t\t\t\t<a href=\"{{ path('privacy_policy') }}\" target=\"_blank\">《{{'user.register.privacy_policy'|trans}}》</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

          <input type=\"hidden\" id=\"password_level\" value=\"{{ setting('auth.password_level')|default('low') }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"captcha_enabled\" value=\"{{ setting('auth.captcha_enabled') }}\" />
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"registerVisitId\" value=\"\">
\t\t\t\t</form>

\t\t\t\t{% if setting('login_bind.enabled') %}
\t\t\t\t\t<div class=\"social-login\">

            <span>
              {{ render(controller('AppBundle:Login:oauth2LoginsBlock', {targetPath:_target_path})) }}
            </span>
\t\t\t\t\t\t<div class=\"line\"></div>
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t{% else %}
\t\t\t\t<div class=\"empty\">{{'user.register.system_close_tips'|trans}}</div>
\t\t\t{% endif %}
\t\t</div>
\t</div>
{% endblock %}

{% block bottom %}
\t{% include 'mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'register' } %}
{% endblock %}
", "register/index.html.twig", "/var/www/bootcamp/chenlong/project-it-migrant-workers/app/Resources/views/register/index.html.twig");
    }
}
