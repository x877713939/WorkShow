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

/* default/course-grid-with-condition-index.html.twig */
class __TwigTemplate_d10d927259a459555245dfb716c2a660a2508238f3a2006446ea7bee3fa4dc71 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/course-grid-with-condition-index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/course-grid-with-condition-index.html.twig"));

        // line 1
        echo "<section class=\"course-list-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", []), "")) : ("")), "html", null, true);
        echo "\" id=\"course-list-section\">

  ";
        // line 3
        $context["count"] = (($this->getAttribute(($context["config"] ?? null), "count", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "count", []), 12)) : (12));
        // line 4
        echo "  ";
        $context["categoryId"] = (($this->getAttribute(($context["config"] ?? null), "categoryId", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryId", []), 0)) : (0));
        // line 5
        echo "  ";
        $context["orderBy"] = (($this->getAttribute(($context["config"] ?? null), "orderBy", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "orderBy", []), "latest")) : ("latest"));
        // line 6
        echo "  ";
        if ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "latest")) {
            // line 7
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestCourseSets", ["count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId"))]);
            // line 8
            echo "  ";
        } elseif ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "recommendedSeq")) {
            // line 9
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("RecommendCourseSets", ["count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId"))]);
            // line 10
            echo "  ";
        } elseif ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "studentNum")) {
            // line 11
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PopularCourseSets", ["count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId")), "type" => "studentNum"]);
            // line 12
            echo "  ";
        } elseif ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == "hotSeq")) {
            // line 13
            echo "    ";
            $context["courseSets"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("PopularCourseSets", ["count" => ($context["count"] ?? $this->getContext($context, "count")), "categoryId" => ($context["categoryId"] ?? $this->getContext($context, "categoryId")), "type" => "hotSeq"]);
            // line 14
            echo "  ";
        }
        // line 15
        echo "  ";
        $context["categoriesFirst"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Categories", ["group" => "course", "parentId" => 0]);
        // line 16
        echo "  ";
        $context["moreCategories"] = twig_slice($this->env, ($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst")), (($this->getAttribute(($context["config"] ?? null), "categoryCount", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", []), 4)) : (4)), null);
        // line 17
        echo "  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", []), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", []))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", []))), "html", null, true);
        echo "</span>
        <div class=\"line\"></div>
      </h5>
      <div class=\"subtitle\">";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", []), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", []))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", []))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"";
        // line 26
        if (((((isset($context["categoryId"]) || array_key_exists("categoryId", $context))) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo " js-course-filter\"
            data-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", ["orderBy" => (((isset($context["orderBy"]) || array_key_exists("orderBy", $context))) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest"))]), "html", null, true);
        echo "\" data-type=\"course\"><a
              href=\"javascript:;\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.all_course"), "html", null, true);
        echo "</a></li>
        ";
        // line 29
        if (($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst"))) {
            // line 30
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 31
                echo "            ";
                if (($this->getAttribute($context["loop"], "index0", []) < (($this->getAttribute(($context["config"] ?? null), "categoryCount", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", []), 4)) : (4)))) {
                    // line 32
                    echo "              <li role=\"presentation\"
                  class=\"";
                    // line 33
                    if (((((isset($context["categoryId"]) || array_key_exists("categoryId", $context))) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", []))) {
                        echo "active ";
                    }
                    echo " js-course-filter\"
                  data-url=\"";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", ["categoryId" => $this->getAttribute($context["category"], "id", []), "orderBy" => (((isset($context["orderBy"]) || array_key_exists("orderBy", $context))) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest"))]), "html", null, true);
                    echo "\"
                  data-type=\"course\"><a href=\"javascript:;\">";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 37
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "          ";
            if (($context["moreCategories"] ?? $this->getContext($context, "moreCategories"))) {
                // line 39
                echo "            <li class=\"dropdown nav-hover\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:;\">
                <i class=\"es-icon es-icon-morehoriz\"></i>
              </a>
              <ul class=\"dropdown-menu\">
                ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["moreCategories"] ?? $this->getContext($context, "moreCategories")));
                foreach ($context['_seq'] as $context["_key"] => $context["moreCategory"]) {
                    // line 45
                    echo "                  <li role=\"presentation\"
                      class=\"";
                    // line 46
                    if (((((isset($context["categoryId"]) || array_key_exists("categoryId", $context))) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["moreCategory"], "id", []))) {
                        echo "active ";
                    }
                    echo " js-course-filter\"
                      data-url=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", ["categoryId" => $this->getAttribute($context["moreCategory"], "id", []), "orderBy" => (((isset($context["orderBy"]) || array_key_exists("orderBy", $context))) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest"))]), "html", null, true);
                    echo "\"
                      data-type=\"course\"><a href=\"javascript:;\">";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moreCategory"], "name", []), "html", null, true);
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moreCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "              </ul>
            </li>
          ";
            }
            // line 53
            echo "        ";
        }
        // line 54
        echo "      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"
                aria-expanded=\"false\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.all_course"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter ";
        // line 59
        if (((((isset($context["categoryId"]) || array_key_exists("categoryId", $context))) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo "\"
              data-url=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", ["orderBy" => (((isset($context["orderBy"]) || array_key_exists("orderBy", $context))) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest"))]), "html", null, true);
        echo "\" data-type=\"course\"><a
                href=\"javascript:;\">";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.all_course"), "html", null, true);
        echo "</a></li>
          ";
        // line 62
        if (($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst"))) {
            // line 63
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categoriesFirst"] ?? $this->getContext($context, "categoriesFirst")));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", []) == 0)) {
                    // line 64
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index0", []) < (($this->getAttribute(($context["config"] ?? null), "categoryCount", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "categoryCount", []), 4)) : (4)))) {
                        // line 65
                        echo "                <li role=\"presentation\"
                    class=\"js-course-filter ";
                        // line 66
                        if (((((isset($context["categoryId"]) || array_key_exists("categoryId", $context))) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", []))) {
                            echo "active ";
                        }
                        echo "\"
                    data-url=\"";
                        // line 67
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", ["categoryId" => $this->getAttribute($context["category"], "id", []), "orderBy" => (((isset($context["orderBy"]) || array_key_exists("orderBy", $context))) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "latest")) : ("latest"))]), "html", null, true);
                        echo "\"
                    data-type=\"course\"><a href=\"javascript:;\">";
                        // line 68
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                        echo "</a></li>
              ";
                    }
                    // line 70
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            ";
            if (($context["moreCategories"] ?? $this->getContext($context, "moreCategories"))) {
                // line 72
                echo "              <li role=\"presentation\" class=\"js-course-filteractive\" data-type=\"course\"><a
                    href=\"";
                // line 73
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.category_more"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 75
            echo "          ";
        }
        // line 76
        echo "        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 80
        if (((((isset($context["orderBy"]) || array_key_exists("orderBy", $context))) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "latest")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", ["categoryId" => (((isset($context["categoryId"]) || array_key_exists("categoryId", $context))) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "latest"]), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.latest"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 86
        if (((((isset($context["orderBy"]) || array_key_exists("orderBy", $context))) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "hotSeq")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", ["categoryId" => (((isset($context["categoryId"]) || array_key_exists("categoryId", $context))) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "hotSeq"]), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.hotest"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default ";
        // line 92
        if (((((isset($context["orderBy"]) || array_key_exists("orderBy", $context))) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "recommendedSeq")) {
            echo " active ";
        }
        echo "js-course-filter\"
           data-url=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", ["categoryId" => (((isset($context["categoryId"]) || array_key_exists("categoryId", $context))) ? (_twig_default_filter(($context["categoryId"] ?? $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "recommendedSeq"]), "html", null, true);
        echo "\"
           data-type='course'>
          ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.recommended"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
    <div class=\"course-list course-list-new\">
      <div class=\"row\">
        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courseSets"] ?? $this->getContext($context, "courseSets")));
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
            // line 102
            echo "          <div class=\"col-lg-3 col-md-4 col-xs-6 course-item-wrap\">
            ";
            // line 103
            $this->loadTemplate("course/widgets/course-grid-new.html.twig", "default/course-grid-with-condition-index.html.twig", 103)->display(twig_array_merge($context, ["courseSet" => $context["courseSet"]]));
            // line 104
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['courseSet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.filter.course_more"), "html", null, true);
        echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/course-grid-with-condition-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  403 => 110,  399 => 109,  394 => 106,  379 => 104,  377 => 103,  374 => 102,  357 => 101,  348 => 95,  343 => 93,  337 => 92,  331 => 89,  326 => 87,  320 => 86,  314 => 83,  309 => 81,  303 => 80,  297 => 76,  294 => 75,  287 => 73,  284 => 72,  281 => 71,  271 => 70,  266 => 68,  262 => 67,  256 => 66,  253 => 65,  250 => 64,  238 => 63,  236 => 62,  232 => 61,  228 => 60,  222 => 59,  217 => 57,  212 => 54,  209 => 53,  204 => 50,  196 => 48,  192 => 47,  186 => 46,  183 => 45,  179 => 44,  172 => 39,  169 => 38,  155 => 37,  150 => 35,  146 => 34,  140 => 33,  137 => 32,  134 => 31,  116 => 30,  114 => 29,  110 => 28,  106 => 27,  100 => 26,  93 => 22,  87 => 19,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  56 => 8,  53 => 7,  50 => 6,  47 => 5,  44 => 4,  42 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"course-list-section {{ config.background|default(\"\") }}\" id=\"course-list-section\">

  {% set count = config.count|default(12) %}
  {% set categoryId = config.categoryId|default(0) %}
  {% set orderBy = config.orderBy|default('latest') %}
  {% if orderBy == 'latest' %}
    {% set courseSets = data('LatestCourseSets',{'count':count, 'categoryId':categoryId}) %}
  {% elseif orderBy == 'recommendedSeq' %}
    {% set courseSets = data('RecommendCourseSets',{'count':count, 'categoryId':categoryId}) %}
  {% elseif orderBy == 'studentNum' %}
    {% set courseSets = data('PopularCourseSets',{'count':count, 'categoryId':categoryId,'type':'studentNum'}) %}
  {% elseif orderBy == 'hotSeq' %}
    {% set courseSets = data('PopularCourseSets',{'count':count, 'categoryId':categoryId,'type':'hotSeq'}) %}
  {% endif %}
  {% set categoriesFirst = data('Categories',{'group':'course', 'parentId':0}) %}
  {% set moreCategories =  categoriesFirst[config.categoryCount|default(4):] %}
  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>{{ config.title|default(config.defaultTitle) }}</span>
        <div class=\"line\"></div>
      </h5>
      <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"{% if (categoryId|default(0) == 0) %}active {% endif %} js-course-filter\"
            data-url=\"{{ path('homepage_category',{orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a
              href=\"javascript:;\">{{ 'site.datagrid.filter.all_course'|trans }}</a></li>
        {% if categoriesFirst %}
          {% for category in categoriesFirst %}
            {% if ( loop.index0 < config.categoryCount|default(4) ) %}
              <li role=\"presentation\"
                  class=\"{% if (categoryId|default(0) == category.id) %}active {% endif %} js-course-filter\"
                  data-url=\"{{ path('homepage_category',{categoryId : category.id, orderBy : orderBy|default('latest')}) }}\"
                  data-type=\"course\"><a href=\"javascript:;\">{{ category.name }}</a></li>
            {% endif %}
          {% endfor %}
          {% if  moreCategories %}
            <li class=\"dropdown nav-hover\">
              <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:;\">
                <i class=\"es-icon es-icon-morehoriz\"></i>
              </a>
              <ul class=\"dropdown-menu\">
                {% for moreCategory in moreCategories %}
                  <li role=\"presentation\"
                      class=\"{% if (categoryId|default(0) == moreCategory.id) %}active {% endif %} js-course-filter\"
                      data-url=\"{{ path('homepage_category',{categoryId : moreCategory.id, orderBy : orderBy|default('latest')}) }}\"
                      data-type=\"course\"><a href=\"javascript:;\">{{ moreCategory.name }}</a></li>
                {% endfor %}
              </ul>
            </li>
          {% endif %}
        {% endif %}
      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\"
                aria-expanded=\"false\">{{ 'site.datagrid.filter.all_course'|trans }} <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter {% if (categoryId|default(0) == 0) %}active {% endif %}\"
              data-url=\"{{ path('homepage_category',{orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a
                href=\"javascript:;\">{{ 'site.datagrid.filter.all_course'|trans }}</a></li>
          {% if categoriesFirst %}
            {% for category in categoriesFirst  if (category.parentId == 0) %}
              {% if ( loop.index0 < config.categoryCount|default(4) ) %}
                <li role=\"presentation\"
                    class=\"js-course-filter {% if (categoryId|default(0) == category.id) %}active {% endif %}\"
                    data-url=\"{{ path('homepage_category',{categoryId : category.id, orderBy : orderBy|default('latest')}) }}\"
                    data-type=\"course\"><a href=\"javascript:;\">{{ category.name }}</a></li>
              {% endif %}
            {% endfor %}
            {% if  moreCategories %}
              <li role=\"presentation\" class=\"js-course-filteractive\" data-type=\"course\"><a
                    href=\"{{ path('course_set_explore') }}\">{{ 'site.datagrid.filter.category_more'|trans }}</a></li>
            {% endif %}
          {% endif %}
        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\"
           class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'latest') %} active {% endif %}js-course-filter\"
           data-url=\"{{ path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'latest'}) }}\"
           data-type='course'>
          {{ 'site.datagrid.filter.latest'|trans }}
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'hotSeq') %} active {% endif %}js-course-filter\"
           data-url=\"{{ path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'hotSeq'}) }}\"
           data-type='course'>
          {{ 'site.datagrid.filter.hotest'|trans }}
        </a>
        <a href=\"javascript:;\"
           class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'recommendedSeq') %} active {% endif %}js-course-filter\"
           data-url=\"{{ path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'recommendedSeq'}) }}\"
           data-type='course'>
          {{ 'site.datagrid.filter.recommended'|trans }}
        </a>
      </div>
    </div>
    <div class=\"course-list course-list-new\">
      <div class=\"row\">
        {% for courseSet in courseSets %}
          <div class=\"col-lg-3 col-md-4 col-xs-6 course-item-wrap\">
            {% include 'course/widgets/course-grid-new.html.twig' with {courseSet: courseSet} %}
          </div>
        {% endfor %}
      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"{{ path('course_set_explore') }}\" class=\"btn btn-default btn-lg\">
        {{ 'site.datagrid.filter.course_more'|trans }} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>
", "default/course-grid-with-condition-index.html.twig", "/var/www/bootcamp/chenlong/EduSoho/app/Resources/views/default/course-grid-with-condition-index.html.twig");
    }
}
