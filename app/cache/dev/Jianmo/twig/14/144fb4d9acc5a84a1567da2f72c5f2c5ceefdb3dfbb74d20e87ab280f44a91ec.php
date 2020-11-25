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

/* default/live-course.html.twig */
class __TwigTemplate_06613bdef8c6c13007b9a766296c1a19249bf885e19fa0fa3a0d28a33fc2ebc5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/live-course.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/live-course.html.twig"));

        // line 1
        $context["RecentLiveCourseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecentLiveCourseSets", ["count" => 4]);
        // line 2
        if (($context["RecentLiveCourseSets"] ?? $this->getContext($context, "RecentLiveCourseSets"))) {
            // line 3
            echo "  <section class=\"live-course-section ";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", []), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line gray\">
        <h5><span>";
            // line 6
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", []), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", []))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", []))), "html", null, true);
            echo "</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", []), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", []))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", []))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"course-list course-list-new\">
        <div class=\"row\">
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["RecentLiveCourseSets"] ?? $this->getContext($context, "RecentLiveCourseSets")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["courseSet"]) {
                // line 12
                echo "            <div class=\"col-lg-3 col-md-4 col-xs-6 course-item-wrap\">
              ";
                // line 13
                $this->loadTemplate("course/widgets/course-grid-new.html.twig", "default/live-course.html.twig", 13)->display(twig_array_merge($context, ["courseSet" => $context["courseSet"]]));
                // line 14
                echo "              ";
                $context["task"] = (($this->getAttribute($context["courseSet"], "task", [], "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["courseSet"], "task", [], "array"), null)) : (null));
                // line 15
                echo "              ";
                if (((($context["task"] ?? $this->getContext($context, "task")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "startTime", []))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "endTime", [])))) {
                    // line 16
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-live  btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.live_course.living"), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                } else {
                    // line 25
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 30
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "startTime", []), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.date_format")), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                }
                // line 34
                echo "
            </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
          ";
            // line 38
            $context["emptyCourseNum"] = (4 - twig_length_filter($this->env, ($context["RecentLiveCourseSets"] ?? $this->getContext($context, "RecentLiveCourseSets"))));
            // line 39
            echo "          ";
            if ((($context["emptyCourseNum"] ?? $this->getContext($context, "emptyCourseNum")) > 0)) {
                // line 40
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["emptyCourseNum"] ?? $this->getContext($context, "emptyCourseNum"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 41
                    echo "              <div class=\"col-lg-3 col-md-4 col-sm-6 visible-lg\">
                <div class=\"course-item course-default\">
                  <i class=\"es-icon es-icon-videocam\"></i>
                  <br>
                  ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.live_course.expect"), "html", null, true);
                    echo "
                </div>
                <div class=\"course-date\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-accesstime\"></i>
                  </div>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "          ";
            }
            // line 55
            echo "        </div>
      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_course_set_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.live_course.more"), "html", null, true);
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
        return "default/live-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 59,  172 => 58,  167 => 55,  164 => 54,  149 => 45,  143 => 41,  138 => 40,  135 => 39,  133 => 38,  130 => 37,  114 => 34,  107 => 30,  100 => 25,  93 => 21,  86 => 16,  83 => 15,  80 => 14,  78 => 13,  75 => 12,  58 => 11,  51 => 7,  47 => 6,  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set RecentLiveCourseSets = data('RecentLiveCourseSets',{ 'count':4}) %}
{% if RecentLiveCourseSets %}
  <section class=\"live-course-section {{config.background|default(\"\")}}\">
    <div class=\"container\">
      <div class=\"text-line gray\">
        <h5><span>{{ config.title|default(config.defaultTitle) }}</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
      </div>
      <div class=\"course-list course-list-new\">
        <div class=\"row\">
          {% for courseSet in RecentLiveCourseSets %}
            <div class=\"col-lg-3 col-md-4 col-xs-6 course-item-wrap\">
              {% include 'course/widgets/course-grid-new.html.twig' with {courseSet: courseSet} %}
              {% set task = courseSet['task']|default(null) %}
              {% if task and \"now\"|date(\"U\") >= task.startTime and \"now\"|date(\"U\") <= task.endTime %}
                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-live  btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    {{'homepage.live_course.living'|trans}}
                  </div>
                </div>
              {% else %}
                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    {{ task.startTime|date('site.date_format'|trans) }}
                  </div>
                </div>
              {% endif %}

            </div>
          {% endfor %}

          {% set emptyCourseNum = 4 - RecentLiveCourseSets|length %}
          {% if emptyCourseNum > 0 %}
            {% for i in range(1, emptyCourseNum) %}
              <div class=\"col-lg-3 col-md-4 col-sm-6 visible-lg\">
                <div class=\"course-item course-default\">
                  <i class=\"es-icon es-icon-videocam\"></i>
                  <br>
                  {{'homepage.live_course.expect'|trans}}
                </div>
                <div class=\"course-date\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-accesstime\"></i>
                  </div>
                </div>
              </div>
            {% endfor %}
          {% endif %}
        </div>
      </div>
      <div class=\"section-more-btn\">
        <a href=\"{{  path('live_course_set_explore') }}\" class=\"btn btn-default btn-lg\">
          {{'homepage.live_course.more'|trans}} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
{% endif %}
", "default/live-course.html.twig", "/var/www/bootcamp/chenlong/EduSoho/app/Resources/views/default/live-course.html.twig");
    }
}
