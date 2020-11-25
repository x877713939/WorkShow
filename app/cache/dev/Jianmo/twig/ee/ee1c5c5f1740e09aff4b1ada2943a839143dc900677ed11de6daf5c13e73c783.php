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

/* admin-v2/layout.html.twig */
class __TwigTemplate_5796e7188a7e8b428e91e79d90525b7bcbaa026c9abeb2f1252c18de83fc1193 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'container' => [$this, 'block_container'],
            'content' => [$this, 'block_content'],
            'page_flash_message' => [$this, 'block_page_flash_message'],
            'page_title' => [$this, 'block_page_title'],
            'page_buttons' => [$this, 'block_page_buttons'],
            'content_header' => [$this, 'block_content_header'],
            'tabs' => [$this, 'block_tabs'],
            'capsule' => [$this, 'block_capsule'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
            'scriptBoot' => [$this, 'block_scriptBoot'],
            'faqSDK' => [$this, 'block_faqSDK'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/layout.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "admin-v2/layout.html.twig", 1)->unwrap();
        // line 2
        $context["admin_macro"] = $this->loadTemplate("admin-v2/macro.html.twig", "admin-v2/layout.html.twig", 2)->unwrap();
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
";
        // line 5
        $context["menu"] = (((isset($context["menu"]) || array_key_exists("menu", $context))) ? (_twig_default_filter(($context["menu"] ?? $this->getContext($context, "menu")), null)) : (null));
        // line 6
        $context["currentMenu"] = $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode(($context["menu"] ?? $this->getContext($context, "menu")));
        // line 7
        $context["cloudSmsInfo"] = _twig_default_filter($this->env->getExtension('AppBundle\Twig\DataExtension')->getOldSmsUserStatus(), false);
        // line 8
        $context["lang"] = $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getLocale", [], "method");
        // line 9
        $context["isSafari"] = (preg_match("/Safari/", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "User-Agent"], "method")) &&  !preg_match("/Chrome/", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "headers", []), "get", [0 => "User-Agent"], "method")));
        // line 10
        echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<html lang=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["lang"] ?? $this->getContext($context, "lang")), "html", null, true);
        echo "\" class=\"";
        if ((($context["lang"] ?? $this->getContext($context, "lang")) == "en")) {
            echo "es-en-admin";
        }
        echo "\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>

    ";
        // line 25
        $this->displayBlock('title', $context, $blocks);
        // line 30
        echo "    ";
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo " | EduSoho";
        }
        // line 31
        echo "  </title>

  ";
        // line 33
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")) {
            // line 34
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 37
        echo "
  ";
        // line 38
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 43
        echo "
  ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
    <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/jquery/1.11.2/jquery-admin-v2.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/gallery2/bootstrap/bootstrap.js"), "html", null, true);
        echo "\"></script>
</head>
";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 195
        echo "</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 26
        echo "      ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["currentMenu"] ?? $this->getContext($context, "currentMenu")), "name", []), [], "menu"), "html", null, true);
        echo "
      - ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "name", []), [], "menu"), "html", null, true);
        echo " -
        ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission(($context["menu"] ?? $this->getContext($context, "menu"))), "code", [])), "name", []), [], "menu"), "html", null, true);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 39
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/admin-v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "  <body ";
        if ((((isset($context["bodyClass"]) || array_key_exists("bodyClass", $context))) ? (_twig_default_filter(($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, ($context["bodyClass"] ?? $this->getContext($context, "bodyClass")), "html", null, true);
            echo "\"";
        }
        echo ">
    <!--[if lt IE 9]>
      ";
        // line 55
        $this->loadTemplate("default/ie8-alert.html.twig", "admin-v2/layout.html.twig", 55)->display($context);
        // line 56
        echo "    <![endif]-->
    <div class=\"ct-layout-container admin-layout-container\">
      <div class=\"cd-fixed-top\">
        <div class=\"ct-top-logo hidden-xs\">
          <a class=\"admin-navbar-brand\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_v2");
        echo "\">";
        if ( !$this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.owned")) {
            echo "EduSoho";
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.navbar.header.console_btn"), "html", null, true);
        echo "</a>
        </div>
        <div class=\"navbar-header navbar-header--mobile visible-xs\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <i class=\"es-icon es-icon-menu\"></i>
          </button>
          <a class=\"navbar-mobile-title\" href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_v2");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.navbar.header.console_btn"), "html", null, true);
        echo "</a>
        </div>
        <div class=\"ct-layout-navbar navbar-collapse navbar-collapse--mobile collapse\">
          ";
        // line 69
        $this->loadTemplate("admin-v2/widget/navigation.html.twig", "admin-v2/layout.html.twig", 69)->display($context);
        // line 70
        echo "        </div>
        <div class=\"ct-layout-person hidden-xs\">
          <ul class=\"cd-clearfix ct-layout-person__ul mb0\">
            <li class=\"ct-layout-person_center cd-dropdown\" data-toggle=\"cd-dropdown\">
                <a class=\"user-avatar-toggle\" href=\"javascript:;\">
                  <img class=\"cd-avatar cd-avatar-xs\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "smallAvatar", []), "avatar.png"), "html", null, true);
        echo "\">
                  <span class=\"cd-ml8\">";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "nickname", []), "html", null, true);
        echo "</span>
                </a>
                <div class=\"dropdown-menu user-dropdown\">
                  <div class=\"text-center ptl\">
                    <div class=\"dropdown-arrow\"></div>
                    <a class=\"user-operate-link\" href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"es-icon es-icon-logout cd-mr8\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.logout"), "html", null, true);
        echo "</a>
                  </div>
                </div>
            </li>
          </ul>
        </div>
        <div class=\"pull-right change-version-btn\">
          ";
        // line 88
        $context["canAccess"] = (twig_in_filter("ROLE_SUPER_ADMIN", (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", [], "any", false, true), "roles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", [], "any", false, true), "roles", []), [])) : ([]))) || twig_in_filter("ROLE_ADMIN", (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", [], "any", false, true), "roles", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", [], "any", false, true), "roles", []), [])) : ([]))));
        // line 89
        echo "          ";
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("backstage.allow_show_switch_btn"), 0)) {
            // line 90
            echo "            <li class=\"ct-layout-person_center cd-dropdown visible-lg cd-ml24\"  data-toggle=\"cd-dropdown\">
              <a href=\"javascript:;\"><i class=\"es-icon es-icon-site icon-home\"></i>";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.access_web"), "html", null, true);
            echo "<i class=\"cd-icon cd-icon-arrow-down\"></i></a>
              <ul class=\"dropdown-menu user-manage-dropdown\" role=\"menu\">
                <div class=\"dropdown-arrow\"></div>
                <li><a class=\"user-operate-link\" href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-site cd-mr8\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.access_web"), "html", null, true);
            echo "</a></li>
                <li>
                  ";
            // line 96
            if (($context["canAccess"] ?? $this->getContext($context, "canAccess"))) {
                // line 97
                echo "                    ";
                if (($context["isSafari"] ?? $this->getContext($context, "isSafari"))) {
                    // line 98
                    echo "                      <a class=\"js-safari-modal-click user-operate-link\"><i class=\"es-icon es-icon-switch cd-mr8\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.switch_old_version.setting_btn"), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 100
                    echo "                      <a class=\"user-operate-link\" href=\"#modal\" data-toggle=\"modal\" data-loading-text=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.switch_version.btn_loading"), "html", null, true);
                    echo "\" data-url=\"";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_switch_old_version");
                    echo "\"><i class=\"es-icon es-icon-switch cd-mr8\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.switch_old_version.setting_btn"), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 102
                echo "                  ";
            } else {
                // line 103
                echo "                    <a class=\"js-no-permission-btn user-operate-link\" href=\"javascript:;\"><i class=\"es-icon es-icon-switch cd-mr8\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.switch_old_version.setting_btn"), "html", null, true);
                echo "</a>
                  ";
            }
            // line 105
            echo "                </li>
              </ul>
            </li>
          ";
        } else {
            // line 109
            echo "            <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-site icon-home\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.homepage.school_info.access_web"), "html", null, true);
            echo "</a>
          ";
        }
        // line 111
        echo "        </div>
      </div>
      <div class=\"cd-layout-main\">
        ";
        // line 114
        if (($context["isSafari"] ?? $this->getContext($context, "isSafari"))) {
            // line 115
            echo "          ";
            $this->loadTemplate("admin-v2/default/safari-notify-modal.html.twig", "admin-v2/layout.html.twig", 115)->display($context);
            // line 116
            echo "        ";
        }
        // line 117
        echo "        ";
        $this->displayBlock('container', $context, $blocks);
        // line 158
        echo "      </div>
    </div>


    ";
        // line 162
        $this->displayBlock('footer', $context, $blocks);
        // line 171
        echo "

    <div id=\"modal\" class=\"modal\" ></div>
    <div id=\"attachment-modal\" class=\"modal\" ></div>
    ";
        // line 175
        if (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 176
            echo "      <div class=\"fixed-bar\">
        <a href=\"";
            // line 177
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
          <i class=\"es-icon es-icon-help\"></i>
          <span>";
            // line 179
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.fixed_bar.product_feedback");
            echo "</span>
        </a>
      </div>
    ";
        }
        // line 183
        echo "
    ";
        // line 184
        $this->displayBlock('scriptBoot', $context, $blocks);
        // line 189
        echo "
    ";
        // line 190
        $this->displayBlock('faqSDK', $context, $blocks);
        // line 193
        echo "  </body>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_container($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 118
        echo "          ";
        $this->displayBlock('content', $context, $blocks);
        // line 157
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 119
        echo "            ";
        $this->loadTemplate("admin-v2/widget/side-bar.html.twig", "admin-v2/layout.html.twig", 119)->display($context);
        // line 120
        echo "            <div class=\"cd-layout-aside\">
              <div class=\"cd-layout-aside_bread\"></div>
              <div class=\"cd-layout-adside_content\">
                <div class=\"page-header clearfix pvm\">
                  ";
        // line 124
        $this->displayBlock('page_flash_message', $context, $blocks);
        // line 125
        echo "                  <h1 class=\"pull-left\">
                      ";
        // line 126
        $this->displayBlock('page_title', $context, $blocks);
        // line 129
        echo "                  </h1>
                  <div class=\"pull-right\">

                      ";
        // line 132
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 146
        echo "
                  </div>
                </div>
                ";
        // line 149
        $this->displayBlock('content_header', $context, $blocks);
        // line 150
        echo "                ";
        $this->displayBlock('tabs', $context, $blocks);
        // line 151
        echo "                ";
        $this->displayBlock('capsule', $context, $blocks);
        // line 152
        echo "                ";
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "              </div>
            </div>
          ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_page_flash_message($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_flash_message"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_flash_message"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 126
    public function block_page_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_title"));

        // line 127
        echo "                          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getParentPermission($this->getAttribute(($context["currentMenu"] ?? $this->getContext($context, "currentMenu")), "code", [])), "name", []), [], "menu"), "html", null, true);
        echo "
                      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_page_buttons($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_buttons"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_buttons"));

        // line 133
        echo "

                        ";
        // line 135
        if ((((($this->getAttribute(($context["currentMenu"] ?? null), "mode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["currentMenu"] ?? null), "mode", []), "")) : ("")) == "capsules") && (((isset($context["capsule"]) || array_key_exists("capsule", $context))) ? (_twig_default_filter(($context["capsule"] ?? $this->getContext($context, "capsule")), false)) : (false)))) {
            // line 136
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionByCode(($context["capsule"] ?? $this->getContext($context, "capsule"))), "code", []), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visible", [], "any", true, true) || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visible", [])))) {
                    // line 137
                    echo "                            ";
                    echo $this->getAttribute(($context["self_macro"] ?? $this->getContext($context, "self_macro")), "menu_link_html", [0 => $context, 1 => $context["m"], 2 => "btn btn-success btn-sm"], "method");
                    echo "
                          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "                        ";
        } else {
            // line 140
            echo "                          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('AppBundle\Twig\PermissionExtension')->getSubPermissions($this->getAttribute(($context["currentMenu"] ?? $this->getContext($context, "currentMenu")), "code", []), "topBtn"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visible", [], "any", true, true) || $this->env->getExtension('AppBundle\Twig\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visible", [])))) {
                    // line 141
                    echo "                            ";
                    $context["class"] = (((($this->getAttribute($context["m"], "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", []))) : (""))) ? (("btn btn-sm " . $this->getAttribute($context["m"], "class", []))) : ("btn btn-success btn-sm"));
                    // line 142
                    echo "                            ";
                    echo $this->getAttribute(($context["self_macro"] ?? $this->getContext($context, "self_macro")), "menu_link_html", [0 => $context, 1 => $context["m"], 2 => ($context["class"] ?? $this->getContext($context, "class"))], "method");
                    echo "
                          ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "                        ";
        }
        // line 145
        echo "                      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_tabs($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabs"));

        $this->loadTemplate("admin-v2/widget/tabs.html.twig", "admin-v2/layout.html.twig", 150)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_capsule($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "capsule"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "capsule"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 152
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 153
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 162
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 163
        echo "      <div class=\"site-analytics-section\">
        ";
        // line 164
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo "
      </div>

      ";
        // line 167
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.enabled"), false)) {
            // line 168
            echo "        ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.script");
            echo "
      ";
        }
        // line 170
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 184
    public function block_scriptBoot($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scriptBoot"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scriptBoot"));

        // line 185
        echo "      ";
        $this->loadTemplate("old-script_boot.html.twig", "admin-v2/layout.html.twig", 185)->display(twig_array_merge($context, ["script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaadmin/js/admin-app-v2.js")]));
        // line 186
        echo "      ";
        $this->loadTemplate("admin-v2/default/script-webpack.html.twig", "admin-v2/layout.html.twig", 186)->display($context);
        // line 187
        echo "      ";
        $this->loadTemplate("admin-v2/script_boot.html.twig", "admin-v2/layout.html.twig", 187)->display(twig_array_merge($context, ["state" => 0]));
        // line 188
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 190
    public function block_faqSDK($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "faqSDK"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "faqSDK"));

        // line 191
        echo "      ";
        $this->loadTemplate("admin-v2/faq/sdk.html.twig", "admin-v2/layout.html.twig", 191)->display($context);
        // line 192
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 197
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_link_html"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "menu_link_html"));

            // line 198
            echo "  <a
  ";
            // line 199
            if (($context["class"] ?? $this->getContext($context, "class"))) {
                // line 200
                echo "    class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\"
  ";
            }
            // line 202
            echo "  ";
            if (((($this->getAttribute(($context["menu"] ?? null), "mode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["menu"] ?? null), "mode", []), null)) : (null)) == "modal")) {
                // line 203
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["menu"] ?? $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 207
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\PermissionExtension')->getPermissionPath($this->env, $context, ($context["menu"] ?? $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
  ";
            }
            // line 209
            echo "  ";
            if ((($this->getAttribute(($context["menu"] ?? null), "blank", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["menu"] ?? null), "blank", []), false)) : (false))) {
                // line 210
                echo "    target=\"blank\"
  ";
            }
            // line 212
            echo "  >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["menu"] ?? $this->getContext($context, "menu")), "name", []), [], "menu"), "html", null, true);
            echo "</a>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin-v2/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 212,  853 => 210,  850 => 209,  844 => 207,  836 => 203,  833 => 202,  827 => 200,  825 => 199,  822 => 198,  802 => 197,  792 => 192,  789 => 191,  780 => 190,  770 => 188,  767 => 187,  764 => 186,  761 => 185,  752 => 184,  742 => 170,  736 => 168,  734 => 167,  728 => 164,  725 => 163,  716 => 162,  706 => 153,  697 => 152,  680 => 151,  662 => 150,  645 => 149,  635 => 145,  632 => 144,  622 => 142,  619 => 141,  613 => 140,  610 => 139,  600 => 137,  594 => 136,  592 => 135,  588 => 133,  579 => 132,  566 => 127,  557 => 126,  540 => 124,  528 => 154,  525 => 152,  522 => 151,  519 => 150,  517 => 149,  512 => 146,  510 => 132,  505 => 129,  503 => 126,  500 => 125,  498 => 124,  492 => 120,  489 => 119,  480 => 118,  470 => 157,  467 => 118,  458 => 117,  447 => 193,  445 => 190,  442 => 189,  440 => 184,  437 => 183,  430 => 179,  425 => 177,  422 => 176,  420 => 175,  414 => 171,  412 => 162,  406 => 158,  403 => 117,  400 => 116,  397 => 115,  395 => 114,  390 => 111,  382 => 109,  376 => 105,  370 => 103,  367 => 102,  357 => 100,  351 => 98,  348 => 97,  346 => 96,  339 => 94,  333 => 91,  330 => 90,  327 => 89,  325 => 88,  313 => 81,  305 => 76,  301 => 75,  294 => 70,  292 => 69,  284 => 66,  270 => 60,  264 => 56,  262 => 55,  252 => 53,  243 => 52,  226 => 44,  214 => 41,  210 => 40,  205 => 39,  196 => 38,  184 => 28,  180 => 27,  175 => 26,  166 => 25,  154 => 195,  152 => 52,  147 => 50,  143 => 49,  138 => 47,  134 => 46,  131 => 45,  129 => 44,  126 => 43,  124 => 38,  121 => 37,  116 => 35,  111 => 34,  109 => 33,  105 => 31,  100 => 30,  98 => 25,  92 => 22,  79 => 16,  71 => 10,  69 => 9,  67 => 8,  65 => 7,  63 => 6,  61 => 5,  58 => 4,  56 => 3,  54 => 2,  52 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import \"macro.html.twig\" as web_macro %}
{% import \"admin-v2/macro.html.twig\" as admin_macro %}
{% import _self as self_macro %}

{% set menu = menu|default(null) %}
{% set currentMenu = permission(menu) %}
{% set cloudSmsInfo = isOldSmsUser()|default(false) %}
{% set lang = app.request.getLocale() %}
{% set isSafari = (app.request.headers.get('User-Agent') matches '/Safari/') and (not (app.request.headers.get('User-Agent') matches '/Chrome/')) %}

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<html lang=\"{{ lang }}\" class=\"{% if lang == 'en' %}es-en-admin{% endif %}\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"{{ csrf_token('site') }}\" name=\"csrf-token\" />
  <title>

    {% block title %}
      {{ currentMenu.name|trans({}, 'menu') }}
      - {{ menu|parent_permission.name|trans({}, 'menu') }} -
        {{ menu|parent_permission.code|parent_permission.name|trans({}, 'menu')  }}
    {% endblock %}
    {% if not setting('copyright.owned') %} | EduSoho{% endif %}
  </title>

  {% if setting('site.favicon') %}
    <link rel=\"icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" />
    <link href=\"{{ asset(setting('site.favicon')) }}\" rel=\"shortcut icon\" />
  {% endif %}

  {% block stylesheets %}
  <link href=\"{{ asset('assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('static-dist/app/css/admin.css') }}\" rel=\"stylesheet\" />
  <link href=\"{{ asset('static-dist/app/css/admin-v2.css') }}\" rel=\"stylesheet\" />
  {% endblock %}

  {% block javascripts %}{% endblock %}
  <!--[if lt IE 9]>
    <script src=\"{{ asset('assets/libs/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('assets/libs/respond.min.js') }}\"></script>
  <![endif]-->
    <script src=\"{{ asset('assets/libs/jquery/1.11.2/jquery-admin-v2.js') }}\"></script>
    <script src=\"{{ asset('assets/libs/gallery2/bootstrap/bootstrap.js') }}\"></script>
</head>
{% block body %}
  <body {% if bodyClass|default('') %}class=\"{{ bodyClass }}\"{% endif %}>
    <!--[if lt IE 9]>
      {% include 'default/ie8-alert.html.twig' %}
    <![endif]-->
    <div class=\"ct-layout-container admin-layout-container\">
      <div class=\"cd-fixed-top\">
        <div class=\"ct-top-logo hidden-xs\">
          <a class=\"admin-navbar-brand\" href=\"{{ url('admin_v2') }}\">{% if not setting('copyright.owned') %}EduSoho{% endif %}{{'admin.navbar.header.console_btn'|trans}}</a>
        </div>
        <div class=\"navbar-header navbar-header--mobile visible-xs\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <i class=\"es-icon es-icon-menu\"></i>
          </button>
          <a class=\"navbar-mobile-title\" href=\"{{ url('admin_v2') }}\">{{'admin.navbar.header.console_btn'|trans}}</a>
        </div>
        <div class=\"ct-layout-navbar navbar-collapse navbar-collapse--mobile collapse\">
          {% include 'admin-v2/widget/navigation.html.twig' %}
        </div>
        <div class=\"ct-layout-person hidden-xs\">
          <ul class=\"cd-clearfix ct-layout-person__ul mb0\">
            <li class=\"ct-layout-person_center cd-dropdown\" data-toggle=\"cd-dropdown\">
                <a class=\"user-avatar-toggle\" href=\"javascript:;\">
                  <img class=\"cd-avatar cd-avatar-xs\" src=\"{{ filepath(app.user.smallAvatar, 'avatar.png') }}\">
                  <span class=\"cd-ml8\">{{ app.user.nickname }}</span>
                </a>
                <div class=\"dropdown-menu user-dropdown\">
                  <div class=\"text-center ptl\">
                    <div class=\"dropdown-arrow\"></div>
                    <a class=\"user-operate-link\" href=\"{{ path('logout') }}\"><i class=\"es-icon es-icon-logout cd-mr8\"></i>{{ 'homepage.header.logout'|trans }}</a>
                  </div>
                </div>
            </li>
          </ul>
        </div>
        <div class=\"pull-right change-version-btn\">
          {% set canAccess = 'ROLE_SUPER_ADMIN' in app.user.roles|default([]) or 'ROLE_ADMIN' in app.user.roles|default([]) %}
          {% if setting('backstage.allow_show_switch_btn')|default(0) %}
            <li class=\"ct-layout-person_center cd-dropdown visible-lg cd-ml24\"  data-toggle=\"cd-dropdown\">
              <a href=\"javascript:;\"><i class=\"es-icon es-icon-site icon-home\"></i>{{ 'admin_v2.homepage.school_info.access_web'|trans }}<i class=\"cd-icon cd-icon-arrow-down\"></i></a>
              <ul class=\"dropdown-menu user-manage-dropdown\" role=\"menu\">
                <div class=\"dropdown-arrow\"></div>
                <li><a class=\"user-operate-link\" href=\"{{ path('homepage') }}\" target=\"_blank\"><i class=\"es-icon es-icon-site cd-mr8\"></i>{{ 'admin_v2.homepage.school_info.access_web'|trans }}</a></li>
                <li>
                  {% if canAccess %}
                    {% if isSafari %}
                      <a class=\"js-safari-modal-click user-operate-link\"><i class=\"es-icon es-icon-switch cd-mr8\"></i>{{ 'admin_v2.switch_old_version.setting_btn'|trans }}</a>
                    {% else %}
                      <a class=\"user-operate-link\" href=\"#modal\" data-toggle=\"modal\" data-loading-text=\"{{ 'admin_v2.switch_version.btn_loading'|trans }}\" data-url=\"{{ path('admin_v2_switch_old_version') }}\"><i class=\"es-icon es-icon-switch cd-mr8\"></i>{{ 'admin_v2.switch_old_version.setting_btn'|trans }}</a>
                    {% endif %}
                  {% else %}
                    <a class=\"js-no-permission-btn user-operate-link\" href=\"javascript:;\"><i class=\"es-icon es-icon-switch cd-mr8\"></i>{{ 'admin_v2.switch_old_version.setting_btn'|trans }}</a>
                  {% endif %}
                </li>
              </ul>
            </li>
          {% else %}
            <a href=\"{{ path('homepage') }}\" target=\"_blank\"><i class=\"es-icon es-icon-site icon-home\"></i>{{ 'admin_v2.homepage.school_info.access_web'|trans }}</a>
          {% endif %}
        </div>
      </div>
      <div class=\"cd-layout-main\">
        {% if isSafari %}
          {% include 'admin-v2/default/safari-notify-modal.html.twig' %}
        {% endif %}
        {% block container %}
          {% block content %}
            {% include 'admin-v2/widget/side-bar.html.twig' %}
            <div class=\"cd-layout-aside\">
              <div class=\"cd-layout-aside_bread\"></div>
              <div class=\"cd-layout-adside_content\">
                <div class=\"page-header clearfix pvm\">
                  {% block page_flash_message %}{% endblock %}
                  <h1 class=\"pull-left\">
                      {% block page_title %}
                          {{ currentMenu.code|parent_permission.name|trans({}, 'menu') }}
                      {% endblock %}
                  </h1>
                  <div class=\"pull-right\">

                      {% block page_buttons %}


                        {% if currentMenu.mode|default('') == 'capsules' and capsule|default(false) %}
                          {% for m in sub_permissions(permission(capsule).code,'topBtn') if m.visible is not defined or eval_expression(m.visible) %}
                            {{ self_macro.menu_link_html(_context, m, 'btn btn-success btn-sm') }}
                          {% endfor %}
                        {% else %}
                          {% for m in sub_permissions(currentMenu.code,'topBtn') if m.visible is not defined or eval_expression(m.visible) %}
                            {% set class = m.class|default() ? \"btn btn-sm \" ~  m.class : 'btn btn-success btn-sm' %}
                            {{ self_macro.menu_link_html(_context, m, class) }}
                          {% endfor %}
                        {% endif %}
                      {% endblock %}

                  </div>
                </div>
                {% block content_header %}{% endblock %}
                {% block tabs %}{% include 'admin-v2/widget/tabs.html.twig' %}{% endblock %}
                {% block capsule %}{% endblock %}
                {% block main %}
                {% endblock %}
              </div>
            </div>
          {% endblock %}
        {% endblock %}
      </div>
    </div>


    {% block footer %}
      <div class=\"site-analytics-section\">
        {{ setting('site.analytics')|raw }}
      </div>

      {% if setting('siteTrace.enabled')|default(false) %}
        {{ setting('siteTrace.script')|raw }}
      {% endif %}
    {% endblock %}


    <div id=\"modal\" class=\"modal\" ></div>
    <div id=\"attachment-modal\" class=\"modal\" ></div>
    {% if setting('copyright.thirdCopyright') != 1 %}
      <div class=\"fixed-bar\">
        <a href=\"{{path('admin_v2_feedback')}}\"  target='_blank' class=\"icon-question-text feedback\">
          <i class=\"es-icon es-icon-help\"></i>
          <span>{{ 'admin.fixed_bar.product_feedback'|trans|raw }}</span>
        </a>
      </div>
    {% endif %}

    {% block scriptBoot %}
      {% include 'old-script_boot.html.twig' with {script_main: asset('bundles/topxiaadmin/js/admin-app-v2.js')} %}
      {% include 'admin-v2/default/script-webpack.html.twig' %}
      {% include 'admin-v2/script_boot.html.twig'  with {state :0} %}
    {% endblock %}

    {% block faqSDK %}
      {% include 'admin-v2/faq/sdk.html.twig' %}
    {% endblock %}
  </body>
{% endblock %}
</html>

{% macro menu_link_html(_context, menu, class) %}
  <a
  {% if class %}
    class=\"{{ class }}\"
  {% endif %}
  {% if menu.mode|default(null) == 'modal' %}
    data-url=\"{{ permission_path(menu) }}\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  {% else %}
    href=\"{{ permission_path(menu) }}\"
  {% endif %}
  {% if menu.blank|default(false) %}
    target=\"blank\"
  {% endif %}
  >{{ menu.name|trans({}, 'menu') }}</a>
{% endmacro %}", "admin-v2/layout.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/layout.html.twig");
    }
}
