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

/* default/header/part/visitor-login.html.twig */
class __TwigTemplate_a2719147e6ecdbb7b72398908a9e76e6473122a848a7e577c3d78ede11da0ac2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/part/visitor-login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/header/part/visitor-login.html.twig"));

        // line 1
        echo "<li class=\"user-avatar-li nav-hover visible-xs\">
  <a href=\"javascript:;\" class=\"user-avatar-toggle\">
    <img class=\"cd-avatar cd-avatar-xs\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
        echo "\">
  </a>
  <ul class=\"dropdown-menu\" role=\"menu\">
    <li class=\"user-nav-li-login\">
      <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", ["goto" => (((isset($context["_target_path"]) || array_key_exists("_target_path", $context))) ? (_twig_default_filter(($context["_target_path"] ?? $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "server", []), "get", [0 => "REQUEST_URI"], "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "server", []), "get", [0 => "REQUEST_URI"], "method")))]), "html", null, true);
        echo "\">
        <i class=\"es-icon es-icon-denglu\"></i>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.login"), "html", null, true);
        echo "
      </a>
    </li>
    <li class=\"user-nav-li-register\">
      <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", ["goto" => (((isset($context["_target_path"]) || array_key_exists("_target_path", $context))) ? (_twig_default_filter(($context["_target_path"] ?? $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "server", []), "get", [0 => "REQUEST_URI"], "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "server", []), "get", [0 => "REQUEST_URI"], "method")))]), "html", null, true);
        echo "\">
        <i class=\"es-icon es-icon-zhuce\"></i>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.register"), "html", null, true);
        echo "
      </a>
    </li>
    ";
        // line 16
        if (($context["mobile"] ?? $this->getContext($context, "mobile"))) {
            // line 17
            echo "      <li class=\"mobile-switch js-switch-pc\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_pc"), "html", null, true);
            echo "</a>
      </li>
    ";
        } elseif (($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("wap.version") == 1)) {
            // line 21
            echo "      <li class=\"mobile-switch js-switch-mobile\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.switch_mobile"), "html", null, true);
            echo "</a>
      </li>
     ";
        }
        // line 25
        echo "    ";
        if ((($context["show_switch_locale"] ?? $this->getContext($context, "show_switch_locale")) == 1)) {
            // line 26
            echo "      ";
            $this->loadTemplate("default/switch-language.html.twig", "default/header/part/visitor-login.html.twig", 26)->display(twig_array_merge($context, ["langClass" => "text-center visible-xs"]));
            // line 27
            echo "    ";
        }
        // line 28
        echo "  </ul>
</li>
<li class=\"visitor-li hidden-xs\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", ["goto" => (((isset($context["_target_path"]) || array_key_exists("_target_path", $context))) ? (_twig_default_filter(($context["_target_path"] ?? $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "server", []), "get", [0 => "REQUEST_URI"], "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "server", []), "get", [0 => "REQUEST_URI"], "method")))]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.login"), "html", null, true);
        echo "</a></li>
<li class=\"visitor-li hidden-xs\"><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", ["goto" => (((isset($context["_target_path"]) || array_key_exists("_target_path", $context))) ? (_twig_default_filter(($context["_target_path"] ?? $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "server", []), "get", [0 => "REQUEST_URI"], "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "server", []), "get", [0 => "REQUEST_URI"], "method")))]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.header.register"), "html", null, true);
        echo "</a></li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/header/part/visitor-login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 31,  101 => 30,  97 => 28,  94 => 27,  91 => 26,  88 => 25,  82 => 22,  79 => 21,  73 => 18,  70 => 17,  68 => 16,  62 => 13,  58 => 12,  51 => 8,  47 => 7,  40 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"user-avatar-li nav-hover visible-xs\">
  <a href=\"javascript:;\" class=\"user-avatar-toggle\">
    <img class=\"cd-avatar cd-avatar-xs\" src=\"{{ asset('assets/img/default/avatar.png') }}\">
  </a>
  <ul class=\"dropdown-menu\" role=\"menu\">
    <li class=\"user-nav-li-login\">
      <a href=\"{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">
        <i class=\"es-icon es-icon-denglu\"></i>{{'homepage.header.login'|trans}}
      </a>
    </li>
    <li class=\"user-nav-li-register\">
      <a href=\"{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">
        <i class=\"es-icon es-icon-zhuce\"></i>{{'homepage.header.register'|trans}}
      </a>
    </li>
    {% if mobile %}
      <li class=\"mobile-switch js-switch-pc\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>{{'homepage.header.switch_pc'|trans}}</a>
      </li>
    {% elseif setting('wap.version') == 1  %}
      <li class=\"mobile-switch js-switch-mobile\"><a href=\"javascript:;\">
        <i class=\"es-icon es-icon-qiehuan\"></i>{{'homepage.header.switch_mobile'|trans}}</a>
      </li>
     {% endif %}
    {% if show_switch_locale == 1 %}
      {% include 'default/switch-language.html.twig' with {langClass: 'text-center visible-xs'} %}
    {% endif %}
  </ul>
</li>
<li class=\"visitor-li hidden-xs\"><a href=\"{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'homepage.header.login'|trans}}</a></li>
<li class=\"visitor-li hidden-xs\"><a href=\"{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'homepage.header.register'|trans}}</a></li>", "default/header/part/visitor-login.html.twig", "/var/www/bootcamp/chenlong/project-it-migrant-workers/app/Resources/views/default/header/part/visitor-login.html.twig");
    }
}
