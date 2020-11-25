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

/* WorkshowPlugin:Default:index.html.twig */
class __TwigTemplate_f4d343aa13c5c3018dbaf532ebf5145cba89c8a3aee14c1e319335b2f43ed577 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WorkshowPlugin:Default:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WorkshowPlugin:Default:index.html.twig"));

        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script([0 => "app/js/index/index.js"]);
        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "WorkshowPlugin:Default:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <section class=\"es-poster swiper-container\">
        <div class=\"swiper-wrapper\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posters"] ?? $this->getContext($context, "posters")));
        foreach ($context['_seq'] as $context["_key"] => $context["poster"]) {
            // line 7
            echo "                ";
            if (($this->getAttribute($context["poster"], "status", []) == 1)) {
                // line 8
                echo "                    ";
                if (($this->getAttribute($context["poster"], "mode", []) == "img")) {
                    // line 9
                    echo "                        <div class=\"swiper-slide swiper-hidden\" style=\"background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["poster"], "background", []), "html", null, true);
                    echo ";\">
                            <div ";
                    // line 10
                    if (($this->getAttribute($context["poster"], "layout", []) == "limitWide")) {
                        echo "class=\"container\"";
                    }
                    echo ">
                                <a href=\"";
                    // line 11
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["poster"], "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["poster"], "href", []), "")) : ("")), "html", null, true);
                    echo "\" target=\"_blank\" ><img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["poster"], "src", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["poster"], "src", []), "")) : ("")), "html", null, true);
                    echo "\">
                                </a>
                            </div>
                        </div>
                    ";
                } elseif (($this->getAttribute(                // line 15
$context["poster"], "mode", []) == "html")) {
                    // line 16
                    echo "                        ";
                    echo $this->getAttribute($context["poster"], "html", []);
                    echo "
                    ";
                }
                // line 18
                echo "                ";
            }
            // line 19
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poster'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
        <div class=\"swiper-pager\"></div>
    </section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WorkshowPlugin:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 20,  108 => 19,  105 => 18,  99 => 16,  97 => 15,  88 => 11,  82 => 10,  77 => 9,  74 => 8,  71 => 7,  67 => 6,  63 => 4,  54 => 3,  43 => 1,  41 => 2,  29 => 1,);
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
{% do script(['app/js/index/index.js']) %}
{% block body %}
    <section class=\"es-poster swiper-container\">
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
    </section>

{% endblock %}", "WorkshowPlugin:Default:index.html.twig", "/home/zl/project-it-migrant-workers/plugins/WorkshowPlugin/Resources/views/Default/index.html.twig");
    }
}
