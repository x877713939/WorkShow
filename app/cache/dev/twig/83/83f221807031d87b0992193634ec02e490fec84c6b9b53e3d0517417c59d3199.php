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

/* @theme/jianmo/block/carousel.template.html.twig */
class __TwigTemplate_5796cb75df00c1951b5dd6fb9c7898e6b8d3f5276504987814ec7a13c08395a4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/jianmo/block/carousel.template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/jianmo/block/carousel.template.html.twig"));

        // line 1
        echo "<section class=\"es-poster swiper-container\">
  <div class=\"swiper-wrapper\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posters"] ?? $this->getContext($context, "posters")));
        foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
            // line 4
            echo "      ";
            if (($this->getAttribute($context["poster"], "status", []) == 1)) {
                // line 5
                echo "        ";
                if (($this->getAttribute($context["poster"], "mode", []) == "img")) {
                    // line 6
                    echo "          <div class=\"swiper-slide swiper-hidden\" style=\"background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["poster"], "background", []), "html", null, true);
                    echo ";\">
            <div ";
                    // line 7
                    if (($this->getAttribute($context["poster"], "layout", []) == "limitWide")) {
                        echo "class=\"container\"";
                    }
                    echo ">
              <a href=\"";
                    // line 8
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["poster"], "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["poster"], "href", []), "")) : ("")), "html", null, true);
                    echo "\" target=\"_blank\" ><img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["poster"], "src", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["poster"], "src", []), "")) : ("")), "html", null, true);
                    echo "\">
              </a>
            </div>
          </div>
        ";
                } elseif (($this->getAttribute(                // line 12
$context["poster"], "mode", []) == "html")) {
                    // line 13
                    echo "            ";
                    echo $this->getAttribute($context["poster"], "html", []);
                    echo "
        ";
                }
                // line 15
                echo "      ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </div>
  <div class=\"swiper-pager\"></div>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@theme/jianmo/block/carousel.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  81 => 16,  78 => 15,  72 => 13,  70 => 12,  61 => 8,  55 => 7,  50 => 6,  47 => 5,  44 => 4,  40 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"es-poster swiper-container\">
  <div class=\"swiper-wrapper\">
    {% for poster in posters %}
      {% if poster.status == 1 %}
        {% if poster.mode == \"img\" %}
          <div class=\"swiper-slide swiper-hidden\" style=\"background: {{poster.background}};\">
            <div {% if poster.layout == 'limitWide' %}class=\"container\"{% endif %}>
              <a href=\"{{ poster.href|default('') }}\" target=\"_blank\" ><img class=\"img-responsive\" src=\"{{ poster.src|default('') }}\">
              </a>
            </div>
          </div>
        {% elseif poster.mode == \"html\"%}
            {{ poster.html|raw }}
        {% endif %}
      {% endif %}
    {% endfor %}
  </div>
  <div class=\"swiper-pager\"></div>
</section>", "@theme/jianmo/block/carousel.template.html.twig", "/home/zl/project-it-migrant-workers/web/themes/jianmo/block/carousel.template.html.twig");
    }
}
