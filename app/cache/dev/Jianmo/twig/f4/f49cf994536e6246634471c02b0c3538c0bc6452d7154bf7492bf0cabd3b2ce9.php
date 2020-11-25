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

/* admin-v2/default/announcement.html.twig */
class __TwigTemplate_a5f65dbe45aa690243babb3b04ceeee4efc2fdbfd7815688a55596612879638e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/announcement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/announcement.html.twig"));

        // line 1
        if ((((isset($context["announcement"]) || array_key_exists("announcement", $context))) ? (_twig_default_filter(($context["announcement"] ?? $this->getContext($context, "announcement")), "")) : (""))) {
            // line 2
            echo "<a class=\"admin-sidebar-section__body admin-notice\" href=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["announcement"] ?? null), "url", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["announcement"] ?? null), "url", []), "")) : ("")), "html", null, true);
            echo "\" target=\"_blank\">
  <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["announcement"] ?? null), "image", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["announcement"] ?? null), "image", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin-v2/announcement-from-platform.png"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin-v2/announcement-from-platform.png"))), "html", null, true);
            echo "\">
  <div class=\"admin-notice__text\">";
            // line 4
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["announcement"] ?? null), "subtitle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["announcement"] ?? null), "subtitle", []), "")) : ("")), "html", null, true);
            echo "</div>
</a>
";
        } else {
            // line 7
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("static-dist/app/img/admin-v2/announcement-from-platform.png"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/announcement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 4,  43 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if announcement|default('') %}
<a class=\"admin-sidebar-section__body admin-notice\" href=\"{{ announcement.url|default('') }}\" target=\"_blank\">
  <img src=\"{{ announcement.image|default(asset('static-dist/app/img/admin-v2/announcement-from-platform.png')) }}\">
  <div class=\"admin-notice__text\">{{ announcement.subtitle|default('') }}</div>
</a>
{% else %}
<img src=\"{{ asset('static-dist/app/img/admin-v2/announcement-from-platform.png') }}\">
{% endif %}", "admin-v2/default/announcement.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/announcement.html.twig");
    }
}
