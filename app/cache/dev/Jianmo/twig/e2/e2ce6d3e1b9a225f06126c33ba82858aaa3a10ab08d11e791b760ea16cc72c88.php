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

/* mobile/footer-tool-bar.html.twig */
class __TwigTemplate_07605b59d841cfd8d0585f090156502e89d2670eca8f252d3aa96d612bb086a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mobile/footer-tool-bar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "mobile/footer-tool-bar.html.twig"));

        // line 1
        $context["mobile"] = $this->env->getExtension('AppBundle\Twig\WebExtension')->isShowMobilePage();
        // line 2
        if (($context["mobile"] ?? $this->getContext($context, "mobile"))) {
            // line 3
            echo "<div class=\"footer-tool-bar\">
  <div class=\"";
            // line 4
            if ((($context["mobile_tool_bar"] ?? $this->getContext($context, "mobile_tool_bar")) == "index")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 5
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\">
      <i class=\"es-icon es-icon-home1\"></i><br>
      ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage"), "html", null, true);
            echo "
    </a>
  </div>
  <div class=\"";
            // line 10
            if ((($context["mobile_tool_bar"] ?? $this->getContext($context, "mobile_tool_bar")) == "course")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 11
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
            echo "\">
      <i class=\"es-icon es-icon-newshot\"></i><br>
      ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course"), "html", null, true);
            echo "
    </a>
  </div>
  <div class=\"";
            // line 16
            if ((($context["mobile_tool_bar"] ?? $this->getContext($context, "mobile_tool_bar")) == "learning")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
            echo "\">
      <i class=\"es-icon es-icon-write\"></i><br>
      ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.learning"), "html", null, true);
            echo "
    </a>
  </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "mobile/footer-tool-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  83 => 17,  77 => 16,  71 => 13,  66 => 11,  60 => 10,  54 => 7,  49 => 5,  43 => 4,  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set mobile = is_show_mobile_page() %}
{% if mobile %}
<div class=\"footer-tool-bar\">
  <div class=\"{% if mobile_tool_bar == 'index' %}active{% endif %}\">
    <a href=\"{{ path('homepage') }}\">
      <i class=\"es-icon es-icon-home1\"></i><br>
      {{ 'homepage'|trans }}
    </a>
  </div>
  <div class=\"{% if mobile_tool_bar == 'course' %}active{% endif %}\">
    <a href=\"{{ path('course_set_explore') }}\">
      <i class=\"es-icon es-icon-newshot\"></i><br>
      {{ 'course'|trans }}
    </a>
  </div>
  <div class=\"{% if mobile_tool_bar == 'learning' %}active{% endif %}\">
    <a href=\"{{ path('my_courses_learning') }}\">
      <i class=\"es-icon es-icon-write\"></i><br>
      {{ 'homepage.footer.learning'|trans }}
    </a>
  </div>
</div>
{% endif %}
", "mobile/footer-tool-bar.html.twig", "/var/www/bootcamp/chenlong/EduSoho/app/Resources/views/mobile/footer-tool-bar.html.twig");
    }
}
