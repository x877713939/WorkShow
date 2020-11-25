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

/* default/recommend-classroom.html.twig */
class __TwigTemplate_b6d0cb84e99d598bc1738b2c5f7fbe7adc23bcb6b1aad7a0bce9350c90fe06dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/recommend-classroom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/recommend-classroom.html.twig"));

        // line 1
        echo "
<!-- 推荐班级 -->
";
        // line 3
        $context["classrooms"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendClassrooms", ["count" => (($this->getAttribute(($context["config"] ?? null), "count", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "count", []), 4)) : (4))]);
        // line 4
        if (($context["classrooms"] ?? $this->getContext($context, "classrooms"))) {
            // line 5
            echo "  <section class=\"class-section ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", []), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5>
          <span>";
            // line 9
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.recommend_classroom.content_title"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.recommend_classroom.content_title"))), "html", null, true);
            echo "</span>
          <div class=\"line\"></div>
        </h5>
        <div class=\"subtitle\">";
            // line 12
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", []), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", []))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", []))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"recommend-class-list row\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["classrooms"] ?? $this->getContext($context, "classrooms")));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 16
                echo "          <div class=\"col-md-3 col-xs-6 prm plm\">
             ";
                // line 17
                $this->loadTemplate("classroom/class-grid.html.twig", "default/recommend-classroom.html.twig", 17)->display($context);
                // line 18
                echo "          </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.recommend_classroom.more", ["%moreClassrooms%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.default.classroom"))]), "html", null, true);
            echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/recommend-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 23,  105 => 22,  101 => 20,  86 => 18,  84 => 17,  81 => 16,  64 => 15,  58 => 12,  52 => 9,  44 => 5,  42 => 4,  40 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
<!-- 推荐班级 -->
{% set classrooms = data('RecommendClassrooms',{'count':config.count|default(4)})%}
{% if classrooms %}
  <section class=\"class-section {{config.background|default(\"\")}}\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5>
          <span>{{config.title|default(\"homepage.recommend_classroom.content_title\"|trans)}}</span>
          <div class=\"line\"></div>
        </h5>
        <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
      </div>
      <div class=\"recommend-class-list row\">
        {% for classroom in classrooms %}
          <div class=\"col-md-3 col-xs-6 prm plm\">
             {% include 'classroom/class-grid.html.twig' %}
          </div>
        {% endfor %}
      </div>
      <div class=\"section-more-btn\">
        <a href=\"{{ path('classroom_explore') }}\" class=\"btn btn-default btn-lg\">
          {{ 'homepage.recommend_classroom.more'|trans({'%moreClassrooms%':setting('classroom.name')|default('site.default.classroom'|trans)}) }} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
{% endif %}
", "default/recommend-classroom.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/default/recommend-classroom.html.twig");
    }
}
