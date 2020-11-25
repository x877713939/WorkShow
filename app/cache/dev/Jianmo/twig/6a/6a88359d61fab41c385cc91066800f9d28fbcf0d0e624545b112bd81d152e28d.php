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

/* default/groups.html.twig */
class __TwigTemplate_b3c74afd4f4420327b36a5f6d3e1978b25ac91f3c2d1e1082dc061d9099d6b6e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/groups.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/groups.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("macro.html.twig", "default/groups.html.twig", 1)->unwrap();
        // line 2
        echo "<!-- 小组动态 -->
";
        // line 3
        $context["groups"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("HotGroup", ["count" => 6]);
        // line 4
        $context["reviews"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestCourseReviews", ["count" => 4]);
        // line 5
        echo "
<section class=\"dynamic-section ";
        // line 6
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "background", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "background", []), "")) : ("")), "html", null, true);
        echo "\">
  <div class=\"container\">
    <div class=\"text-line gray\">
      <h5><span>";
        // line 9
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "title", []), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", []))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultTitle", []))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 10
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["config"] ?? null), "subTitle", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["config"] ?? null), "subTitle", []), $this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", []))) : ($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "defaultSubTitle", []))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"dynamic-section-main row\">
      ";
        // line 13
        if (($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "select1", []) == "checked")) {
            // line 14
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-group\">
          <div class=\"panel-heading\">
            <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group");
            echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            <h3 class=\"panel-title\"><i class=\"es-icon es-icon-whatshot pull-left\"></i>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.hot_group.content_title"), "html", null, true);
            echo "</h3>
          </div>
          <div class=\"panel-body row\">
            <div class=\"media-group-list\">
              ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "                <div class=\"media media-group col-md-6 col-sm-4\">
                  <div class=\"media-left\">
                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", ["id" => $this->getAttribute($context["group"], "id", [])]), "html", null, true);
                echo "\">
                      ";
                // line 26
                echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["group"], "logo", []), "group.png"), "avatar-square-md", $this->getAttribute($context["group"], "title", []), "group.png");
                echo "
                    </a>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"title\">
                      <a class=\"link-dark\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("group_show", ["id" => $this->getAttribute($context["group"], "id", [])]), "html", null, true);
                echo "\">
                        ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "title", []), "html", null, true);
                echo "
                      </a>
                    </div>
                    <div class=\"metas\">
                      <span><i class=\"es-icon es-icon-people\"></i>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "memberNum", []), "html", null, true);
                echo "</span>
                      <span><i class=\"es-icon es-icon-textsms\"></i>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "threadNum", []), "html", null, true);
                echo "</span>
                    </div>
                  </div>
                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            </div>
          </div>
        </div>
      </div>
      ";
        }
        // line 47
        echo "      ";
        if (($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "select2", []) == "checked")) {
            // line 48
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-article\">
          <div class=\"panel-heading\">
            <a class=\"more\" href=\"";
            // line 51
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_show");
            echo "\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            <h3 class=\"panel-title\">
              ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.article.content_title", ["%article_name%" => _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("article.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("article"))]), "html", null, true);
            echo "
            </h3>
          </div>
          <div class=\"panel-body clearfix\">
            ";
            // line 57
            $context["featuredArticles"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestArticles", ["type" => "featured", "count" => 2]);
            // line 58
            echo "            ";
            if (($context["featuredArticles"] ?? $this->getContext($context, "featuredArticles"))) {
                // line 59
                echo "            <ul class=\"index-recommend-aricle clearfix\">
              ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["featuredArticles"] ?? $this->getContext($context, "featuredArticles")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 61
                    echo "                <li class=\"";
                    if (($this->getAttribute($context["loop"], "index", []) == 2)) {
                        echo "last";
                    }
                    echo "\">
                  <a href=\"";
                    // line 62
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
                    echo "\">
                    ";
                    // line 63
                    $context["defaultImg"] = (("../../v2/img/article/article_banner_" . $this->getAttribute($context["loop"], "index", [])) . ".jpg");
                    // line 64
                    echo "                    ";
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->makeLazyImg($this->env->getExtension('AppBundle\Twig\WebExtension')->getFpath($this->getAttribute($context["article"], "thumb", []), ($context["defaultImg"] ?? $this->getContext($context, "defaultImg"))), "img-responsive", $this->getAttribute($context["article"], "title", []), ($context["defaultImg"] ?? $this->getContext($context, "defaultImg")));
                    echo "
                    <div class=\"image-overlay\"></div>
                    <div class=\"title\">";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", []), "html", null, true);
                    echo "</div>
                  </a>
                </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "            </ul>
            ";
            }
            // line 72
            echo "            <ul class=\"index-new-article ";
            if ( !(((isset($context["featuredArticles"]) || array_key_exists("featuredArticles", $context))) ? (_twig_default_filter(($context["featuredArticles"] ?? $this->getContext($context, "featuredArticles")), false)) : (false))) {
                echo "full";
            }
            echo "\">
              ";
            // line 73
            $context["articles"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestArticles", ["count" => 5]);
            // line 74
            echo "              ";
            if (($context["articles"] ?? $this->getContext($context, "articles"))) {
                // line 75
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 76
                    echo "                  <li class=\"";
                    if (($this->getAttribute($context["loop"], "index", []) == 5)) {
                        echo "last";
                    }
                    echo " clearfix\"><i class=\"es-icon es-icon-dot color-primary mrs\"></i><a class=\"link-dark\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", []), "html", null, true);
                    echo "</a> <span class=\"date\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute($context["article"], "createdTime", [])), "html", null, true);
                    echo "</span></li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "              ";
            }
            // line 79
            echo "            </ul>
          </div>
        </div>
      </div>
      ";
        }
        // line 84
        echo "      ";
        if (($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "select3", []) == "checked")) {
            // line 85
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-evaluate\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              ";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.student_comment.content_title"), "html", null, true);
            echo "
            </h3>
          </div>
          <div class=\"panel-body\">
            ";
            // line 93
            if (($context["reviews"] ?? $this->getContext($context, "reviews"))) {
                // line 94
                echo "              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? $this->getContext($context, "reviews")));
                foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                    // line 95
                    echo "              ";
                    $context["author"] = (($this->getAttribute($context["review"], "User", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["review"], "User", []), null)) : (null));
                    // line 96
                    echo "              ";
                    $context["course"] = (($this->getAttribute($context["review"], "course", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["review"], "course", []), null)) : (null));
                    // line 97
                    echo "              ";
                    if ((($context["author"] ?? $this->getContext($context, "author")) && ($context["course"] ?? $this->getContext($context, "course")))) {
                        // line 98
                        echo "            <div class=\"media media-dynamic\">
              <div class=\"media-left\">
              ";
                        // line 100
                        echo $context["web_macro"]->getuser_avatar(($context["author"] ?? $this->getContext($context, "author")), "", "avatar-sm", true);
                        echo "
              </div>
              <div class=\"media-body\">
                <div class=\"title text-sm\">
                  ";
                        // line 104
                        echo $context["web_macro"]->getuser_link(($context["author"] ?? $this->getContext($context, "author")), "link-dark");
                        echo "
                  <span class=\"score\">";
                        // line 105
                        echo $context["web_macro"]->getstar($this->getAttribute($context["review"], "rating", []));
                        echo "</span>
                    ";
                        // line 106
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.student_comment.from", ["%courseUrl%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", ["id" => $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "id", [])]), "%courseTitle%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter((($this->getAttribute(($context["course"] ?? null), "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["course"] ?? null), "title", []), $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseSetTitle", []))) : ($this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseSetTitle", []))), 10)]);
                        echo "
                </div>
                <div class=\"content gray-darker\">
                  ";
                        // line 109
                        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->plainTextFilter($this->getAttribute($context["review"], "content", []), 30);
                        echo "
                </div>
                <span class=\"date\">";
                        // line 111
                        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute($context["review"], "createdTime", [])), "html", null, true);
                        echo "</span>
              </div>
            </div>
            ";
                    }
                    // line 115
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 116
                echo "            ";
            } else {
                // line 117
                echo "              <div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.student_comment.empty"), "html", null, true);
                echo "</div>
            ";
            }
            // line 119
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 123
        echo "      ";
        if (($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "select4", []) == "checked")) {
            // line 124
            echo "      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-dynamic\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              ";
            // line 128
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.student_dynamic.content_title"), "html", null, true);
            echo "
            </h3>
          </div>
          <div class=\"panel-body\">
            ";
            // line 132
            $context["statuses"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("LatestStatuses", ["mode" => "simple", "count" => 4, "private" => 0]);
            // line 133
            echo "
            ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["statuses"] ?? $this->getContext($context, "statuses")));
            foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                // line 135
                echo "              <div class=\"media media-dynamic\">
                <div class=\"media-left\">
                  ";
                // line 137
                echo $context["web_macro"]->getuser_avatar($this->getAttribute($context["status"], "user", []), "", "avatar-sm");
                echo "
                </div>
                <div class=\"media-body\">
                  <div class=\"title\">
                    ";
                // line 141
                echo $context["web_macro"]->getuser_link($this->getAttribute($context["status"], "user", []));
                echo "
                  </div>
                  <div class=\"content\">
                    ";
                // line 144
                echo $this->getAttribute($context["status"], "message", []);
                echo "
                  </div>
                  <span class=\"date\">";
                // line 146
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->smarttimeFilter($this->getAttribute($context["status"], "createdTime", [])), "html", null, true);
                echo "</span>
                </div>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "          </div>
        </div>
      </div>
      ";
        }
        // line 154
        echo "    </div>
  </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/groups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  441 => 154,  435 => 150,  425 => 146,  420 => 144,  414 => 141,  407 => 137,  403 => 135,  399 => 134,  396 => 133,  394 => 132,  387 => 128,  381 => 124,  378 => 123,  372 => 119,  366 => 117,  363 => 116,  357 => 115,  350 => 111,  345 => 109,  339 => 106,  335 => 105,  331 => 104,  324 => 100,  320 => 98,  317 => 97,  314 => 96,  311 => 95,  306 => 94,  304 => 93,  297 => 89,  291 => 85,  288 => 84,  281 => 79,  278 => 78,  251 => 76,  233 => 75,  230 => 74,  228 => 73,  221 => 72,  217 => 70,  199 => 66,  193 => 64,  191 => 63,  187 => 62,  180 => 61,  163 => 60,  160 => 59,  157 => 58,  155 => 57,  148 => 53,  143 => 51,  138 => 48,  135 => 47,  128 => 42,  117 => 37,  113 => 36,  106 => 32,  102 => 31,  94 => 26,  90 => 25,  86 => 23,  82 => 22,  75 => 18,  71 => 17,  66 => 14,  64 => 13,  58 => 10,  54 => 9,  48 => 6,  45 => 5,  43 => 4,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import \"macro.html.twig\" as web_macro %}
<!-- 小组动态 -->
{% set groups = data('HotGroup',{'count':6}) %}
{% set reviews = data('LatestCourseReviews',{'count':4}) %}

<section class=\"dynamic-section {{config.background|default(\"\")}}\">
  <div class=\"container\">
    <div class=\"text-line gray\">
      <h5><span>{{ config.title|default(config.defaultTitle) }}</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
    </div>
    <div class=\"dynamic-section-main row\">
      {% if config.select1 =='checked'%}
      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-group\">
          <div class=\"panel-heading\">
            <a href=\"{{ path('group') }}\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            <h3 class=\"panel-title\"><i class=\"es-icon es-icon-whatshot pull-left\"></i>{{ 'group.hot_group.content_title'|trans }}</h3>
          </div>
          <div class=\"panel-body row\">
            <div class=\"media-group-list\">
              {% for group in groups %}
                <div class=\"media media-group col-md-6 col-sm-4\">
                  <div class=\"media-left\">
                    <a href=\"{{ path('group_show',{id:group.id}) }}\">
                      {{ lazy_img(filepath(group.logo, 'group.png'), 'avatar-square-md', group.title, 'group.png') }}
                    </a>
                  </div>
                  <div class=\"media-body\">
                    <div class=\"title\">
                      <a class=\"link-dark\" href=\"{{ path('group_show',{id:group.id}) }}\">
                        {{ group.title }}
                      </a>
                    </div>
                    <div class=\"metas\">
                      <span><i class=\"es-icon es-icon-people\"></i>{{ group.memberNum }}</span>
                      <span><i class=\"es-icon es-icon-textsms\"></i>{{ group.threadNum }}</span>
                    </div>
                  </div>
                </div>
              {% endfor %}
            </div>
          </div>
        </div>
      </div>
      {% endif %}
      {% if config.select2 =='checked'%}
      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-article\">
          <div class=\"panel-heading\">
            <a class=\"more\" href=\"{{ path('article_show') }}\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
            <h3 class=\"panel-title\">
              {{ 'homepage.article.content_title'|trans({'%article_name%': setting('article.name')|default('article'|trans)}) }}
            </h3>
          </div>
          <div class=\"panel-body clearfix\">
            {% set featuredArticles = data('LatestArticles',{'type':'featured','count':2}) %}
            {% if featuredArticles %}
            <ul class=\"index-recommend-aricle clearfix\">
              {% for article in featuredArticles %}
                <li class=\"{% if loop.index == 2 %}last{% endif %}\">
                  <a href=\"{{ path('article_detail', {id:article.id}) }}\">
                    {% set defaultImg = '../../v2/img/article/article_banner_' ~ loop.index ~ '.jpg' %}
                    {{ lazy_img(filepath(article.thumb,defaultImg), 'img-responsive', article.title, defaultImg) }}
                    <div class=\"image-overlay\"></div>
                    <div class=\"title\">{{ article.title }}</div>
                  </a>
                </li>
              {% endfor %}
            </ul>
            {% endif %}
            <ul class=\"index-new-article {% if not featuredArticles|default(false) %}full{% endif %}\">
              {% set articles = data('LatestArticles',{'count':5}) %}
              {% if articles %}
                {% for article in articles %}
                  <li class=\"{% if loop.index == 5 %}last{% endif %} clearfix\"><i class=\"es-icon es-icon-dot color-primary mrs\"></i><a class=\"link-dark\" href=\"{{ path('article_detail', {id:article.id}) }}\" title=\"{{ article.title }}\">{{ article.title }}</a> <span class=\"date\">{{ article.createdTime|smart_time }}</span></li>
                {% endfor %}
              {% endif %}
            </ul>
          </div>
        </div>
      </div>
      {% endif %}
      {% if config.select3 =='checked'%}
      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-evaluate\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              {{ 'homepage.student_comment.content_title'|trans }}
            </h3>
          </div>
          <div class=\"panel-body\">
            {% if reviews %}
              {% for review in reviews %}
              {% set author = review.User|default(null) %}
              {% set course = review.course|default(null) %}
              {% if author and course %}
            <div class=\"media media-dynamic\">
              <div class=\"media-left\">
              {{ web_macro.user_avatar(author,'','avatar-sm',true) }}
              </div>
              <div class=\"media-body\">
                <div class=\"title text-sm\">
                  {{ web_macro.user_link(author,'link-dark') }}
                  <span class=\"score\">{{web_macro.star(review.rating) }}</span>
                    {{ 'homepage.student_comment.from'|trans({'%courseUrl%':path('course_show', {id: course.id }),'%courseTitle%':course.title|default(course.courseSetTitle)|plain_text(10) })|raw }}
                </div>
                <div class=\"content gray-darker\">
                  {{ review.content|plain_text(30) }}
                </div>
                <span class=\"date\">{{review.createdTime|smart_time}}</span>
              </div>
            </div>
            {% endif %}
            {% endfor %}
            {% else %}
              <div class=\"empty\">{{ 'homepage.student_comment.empty'|trans }}</div>
            {% endif %}
          </div>
        </div>
      </div>
      {% endif %}
      {% if config.select4 =='checked'%}
      <div class=\"col-md-6\">
        <div class=\"panel panel-default index-dynamic\">
          <div class=\"panel-heading\">
            <h3 class=\"panel-title\">
              {{ 'homepage.student_dynamic.content_title'|trans }}
            </h3>
          </div>
          <div class=\"panel-body\">
            {% set statuses = data('LatestStatuses', {mode:'simple', count: 4,private:0}) %}

            {% for status in statuses %}
              <div class=\"media media-dynamic\">
                <div class=\"media-left\">
                  {{ web_macro.user_avatar(status.user, '', 'avatar-sm') }}
                </div>
                <div class=\"media-body\">
                  <div class=\"title\">
                    {{ web_macro.user_link(status.user) }}
                  </div>
                  <div class=\"content\">
                    {{ status.message|raw }}
                  </div>
                  <span class=\"date\">{{status.createdTime | smart_time}}</span>
                </div>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
      {% endif %}
    </div>
  </div>
</section>
", "default/groups.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/default/groups.html.twig");
    }
}
