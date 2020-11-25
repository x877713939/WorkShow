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

/* default/recommend-teacher.html.twig */
class __TwigTemplate_1e1b606873ab3d3400e3270855514810648b378934c124f0021d27214a5908df extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/recommend-teacher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/recommend-teacher.html.twig"));

        // line 1
        $context["teachers"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendTeachers", ["count" => (($this->getAttribute(($context["config"] ?? null), "count", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "count", []), 4)) : (4))]);
        // line 2
        if (($context["teachers"] ?? $this->getContext($context, "teachers"))) {
            // line 3
            echo "  <section class=\"recommend-teacher ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", []), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5><span>";
            // line 6
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", []), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", []))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", []))), "html", null, true);
            echo "</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", []), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", []))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", []))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"row\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? $this->getContext($context, "teachers")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 11
                echo "        ";
                $context["profile"] = $this->getAttribute($context["teacher"], "profile", []);
                // line 12
                echo "        ";
                $context["isFollowed"] = $this->getAttribute($context["teacher"], "isFollowed", []);
                // line 13
                echo "          <div class=\"col-md-3 col-xs-6\">
            ";
                // line 14
                $this->loadTemplate("teacher/teacher-item.html.twig", "default/recommend-teacher.html.twig", 14)->display($context);
                // line 15
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.recommend_teacher.more"), "html", null, true);
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
        return "default/recommend-teacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 20,  104 => 19,  100 => 17,  85 => 15,  83 => 14,  80 => 13,  77 => 12,  74 => 11,  57 => 10,  51 => 7,  47 => 6,  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set teachers = data('RecommendTeachers',{'count': config.count|default(4)}) %}
{% if teachers %}
  <section class=\"recommend-teacher {{config.background|default(\"\")}}\">
    <div class=\"container\">
      <div class=\"text-line\">
        <h5><span>{{ config.title|default(config.defaultTitle) }}</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
      </div>
      <div class=\"row\">
        {% for teacher in teachers %}
        {% set profile = teacher.profile %}
        {% set isFollowed = teacher.isFollowed %}
          <div class=\"col-md-3 col-xs-6\">
            {% include 'teacher/teacher-item.html.twig' %}
          </div>
        {% endfor %}
      </div>
      <div class=\"section-more-btn\">
        <a href=\"{{ path('teacher') }}\" class=\"btn btn-default btn-lg\">
          {{'homepage.recommend_teacher.more'|trans}} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
{% endif %}
", "default/recommend-teacher.html.twig", "/var/www/bootcamp/chenlong/EduSoho/app/Resources/views/default/recommend-teacher.html.twig");
    }
}
