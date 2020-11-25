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

/* default/exception.html.twig */
class __TwigTemplate_b2dc33392bd529a148055d67ebee6a278bc6e7bfd9a7603ebb91502a2add83cd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/exception.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/exception.html.twig"));

        // line 1
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "flashBag", [], "any", false, true), "has", [0 => "currentThrowedException"], "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", [], "any", false, true), "flashBag", [], "any", false, true), "has", [0 => "currentThrowedException"], "method"))) : (""))) {
            // line 2
            echo "  <div class=\"js-hidden-exception hidden\">
    ";
            // line 3
            $context["currentThrowedException"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "currentThrowedException"], "method"), 0, [], "array");
            // line 4
            echo "    {
      \"statusCode\": \"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentThrowedException"] ?? $this->getContext($context, "currentThrowedException")), "statusCode", [], "array"), "html", null, true);
            echo "\",
      \"code\": \"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute(($context["currentThrowedException"] ?? $this->getContext($context, "currentThrowedException")), "code", [], "array"), "html", null, true);
            echo "\",
      \"message\": \"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["currentThrowedException"] ?? $this->getContext($context, "currentThrowedException")), "message", [], "array")), "html", null, true);
            echo "\"
    }
  </div>

  ";
            // line 11
            if (("dev" == $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", []))) {
                // line 12
                echo "    <div class=\"js-hidden-exception-trace hidden\">
        ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute(($context["currentThrowedException"] ?? $this->getContext($context, "currentThrowedException")), "trace", [], "array"), "html", null, true);
                echo "
    </div>
  ";
            }
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 13,  63 => 12,  61 => 11,  54 => 7,  50 => 6,  46 => 5,  43 => 4,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if app.session.flashBag.has('currentThrowedException')|default() %}
  <div class=\"js-hidden-exception hidden\">
    {% set currentThrowedException = app.session.flashBag.get('currentThrowedException')[0] %}
    {
      \"statusCode\": \"{{ currentThrowedException['statusCode'] }}\",
      \"code\": \"{{ currentThrowedException['code'] }}\",
      \"message\": \"{{ currentThrowedException['message']|trans }}\"
    }
  </div>

  {% if 'dev' == app.environment %}
    <div class=\"js-hidden-exception-trace hidden\">
        {{ currentThrowedException['trace'] }}
    </div>
  {% endif %}
{% endif %}", "default/exception.html.twig", "/var/www/bootcamp/chenlong/EduSoho/app/Resources/views/default/exception.html.twig");
    }
}
