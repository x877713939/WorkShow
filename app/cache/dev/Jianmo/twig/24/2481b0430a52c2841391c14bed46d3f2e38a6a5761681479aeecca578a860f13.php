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

/* default/stylesheet-webpack.html.twig */
class __TwigTemplate_902544b4653f765f6d6cda7706d3d4099a3cf1a270a2d917619bb76e6c3cb0e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/stylesheet-webpack.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/stylesheet-webpack.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/main-v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

";
        // line 5
        if (($context["mobile"] ?? $this->getContext($context, "mobile"))) {
            // line 6
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/css/mobile.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 8
        if (((($context["maincolor"] ?? $this->getContext($context, "maincolor")) != "default") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("theme.code", "jianmo") == "jianmo"))) {
            // line 9
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("static-dist/app/css/main-" . ($context["maincolor"] ?? $this->getContext($context, "maincolor"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 11
        if (((($context["navigationcolor"] ?? $this->getContext($context, "navigationcolor")) != "default") && ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("theme.code", "jianmo") == "jianmo"))) {
            // line 12
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("static-dist/app/css/header-" . ($context["navigationcolor"] ?? $this->getContext($context, "navigationcolor"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 14
        echo $this->env->getExtension('Codeages\PluginBundle\Twig\SlotExtension')->slot("stylesheet.webpack.extension", ["maincolor" => ($context["maincolor"] ?? $this->getContext($context, "maincolor"))]);
        echo "

";
        // line 16
        $this->loadTemplate("stylesheet/stylesheet-custom.html.twig", "default/stylesheet-webpack.html.twig", 16)->display(twig_array_merge($context, ["config" =>         // line 17
($context["currentTheme"] ?? $this->getContext($context, "currentTheme")), "mobile" =>         // line 18
($context["mobile"] ?? $this->getContext($context, "mobile")), "maincolor" =>         // line 19
($context["maincolor"] ?? $this->getContext($context, "maincolor")), "navigationcolor" =>         // line 20
($context["navigationcolor"] ?? $this->getContext($context, "navigationcolor"))]));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/stylesheet-webpack.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 20,  82 => 19,  81 => 18,  80 => 17,  79 => 16,  74 => 14,  68 => 12,  66 => 11,  60 => 9,  58 => 8,  52 => 6,  50 => 5,  45 => 3,  41 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ asset('static-dist/app/css/bootstrap.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('static-dist/app/css/main.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('static-dist/app/css/main-v2.css') }}\" rel=\"stylesheet\" />

{% if mobile %}
  <link href=\"{{ asset('static-dist/app/css/mobile.css') }}\" rel=\"stylesheet\" />
{% endif %}
{% if maincolor != 'default' and setting('theme.code', 'jianmo') == 'jianmo' %}
  <link href=\"{{ asset('static-dist/app/css/main-' ~ maincolor ~ '.css') }}\" rel=\"stylesheet\" />
{% endif %}
{% if navigationcolor != 'default' and setting('theme.code', 'jianmo') == 'jianmo' %}
  <link href=\"{{ asset('static-dist/app/css/header-' ~ navigationcolor ~ '.css') }}\" rel=\"stylesheet\" />
{% endif %}
{{ slot('stylesheet.webpack.extension', {maincolor: maincolor}) }}

{% include 'stylesheet/stylesheet-custom.html.twig' with {
    config: currentTheme,
    mobile: mobile,
    maincolor: maincolor,
    navigationcolor: navigationcolor,
    } 
  %}
", "default/stylesheet-webpack.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/default/stylesheet-webpack.html.twig");
    }
}
