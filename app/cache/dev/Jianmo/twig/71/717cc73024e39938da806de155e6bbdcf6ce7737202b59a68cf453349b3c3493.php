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

/* WorkshowPlugin:index:gallery.html.twig */
class __TwigTemplate_1c3aec674c8c5f774bd15f82f5596e88d11613aaeeb0ae8ab41c6438ae5ccc91 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "WorkshowPlugin:Base:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WorkshowPlugin:index:gallery.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "WorkshowPlugin:index:gallery.html.twig"));

        $this->parent = $this->loadTemplate("WorkshowPlugin:Base:base.html.twig", "WorkshowPlugin:index:gallery.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
  <div class=\"gallery-box1\">
    <div class=\"gallery-top\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-sm-8\">
            <div class=\"gallery-title\">
              <div>
                <div class=\"gallery-title-name\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "title", []), "html", null, true);
        echo "</div>
                <div class=\"gallery-title-viewers\">
                  <img src=\"/static-dist/workshowplugin/img/gallery/viewers.svg\">
                  <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "visit", []), "html", null, true);
        echo "</span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"gallery-author\">
              <img src=\"/static-dist/workshowplugin/img/header/";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "smallAvatar", []), "html", null, true);
        echo "\">
              <div class=\"gallery-author-information\">
                <span><b>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nickname", []), "html", null, true);
        echo "</b></span>
                <br>
                  <span>除了打游戏，其他什么都不会......</span>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-8\">
            <div class=\"gallery-cover\">
              <img src=\"/static-dist/workshowplugin/img/gallery/";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "cover", []), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"gallery-work\">
              <div class=\"gallery-work-name\">
                作品简介：
              </div>
              <div class=\"gallery-work-introduction\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "article", []), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <div class=\"gallery-box2\">
    <div style=\"font-size: 24px;font-weight: bold;\">
      推荐作品
    </div>
    <div class=\"container-fluid\">
      <div class=\"row\">
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (($context["rcmCount"] ?? $this->getContext($context, "rcmCount")) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 58
            echo "        <div class=\"col-sm-2\">
          <a href=\"/gallery/";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rcm"] ?? $this->getContext($context, "rcm")), $context["i"], [], "array"), "id", [], "array"), "html", null, true);
            echo "\">
            <div class=\"gallery-recommend\">
              <img src=\"/static-dist/workshowplugin/img/gallery/";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rcm"] ?? $this->getContext($context, "rcm")), $context["i"], [], "array"), "cover", [], "array"), "html", null, true);
            echo "\">
              <b>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rcm"] ?? $this->getContext($context, "rcm")), $context["i"], [], "array"), "title", [], "array"), "html", null, true);
            echo "</b><br>
              <div class=\"gallery-rcm\"  style=\"margin-top:-80px; height: 25px\">
                <img src=\"/static-dist/workshowplugin/img/gallery/1.svg\">暂无
                <img src=\"/static-dist/workshowplugin/img/gallery/viewers.svg\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rcm"] ?? $this->getContext($context, "rcm")), $context["i"], [], "array"), "visit", [], "array"), "html", null, true);
            echo "
                <img src=\"/static-dist/workshowplugin/img/gallery/2.svg\" style=\"float: right\">
              </div>
            </div>
          </a>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "      </div>
    </div>
    <div class=\"\"></div>
  </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "WorkshowPlugin:index:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 72,  156 => 65,  150 => 62,  146 => 61,  141 => 59,  138 => 58,  134 => 57,  116 => 42,  104 => 33,  91 => 23,  86 => 21,  76 => 14,  70 => 11,  60 => 3,  51 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'WorkshowPlugin:Base:base.html.twig' %}
{% block content %}

  <div class=\"gallery-box1\">
    <div class=\"gallery-top\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-sm-8\">
            <div class=\"gallery-title\">
              <div>
                <div class=\"gallery-title-name\">{{ data.title }}</div>
                <div class=\"gallery-title-viewers\">
                  <img src=\"/static-dist/workshowplugin/img/gallery/viewers.svg\">
                  <span>{{ data.visit }}</span>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"gallery-author\">
              <img src=\"/static-dist/workshowplugin/img/header/{{ user.smallAvatar }}\">
              <div class=\"gallery-author-information\">
                <span><b>{{ user.nickname }}</b></span>
                <br>
                  <span>除了打游戏，其他什么都不会......</span>
              </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-8\">
            <div class=\"gallery-cover\">
              <img src=\"/static-dist/workshowplugin/img/gallery/{{ data.cover }}\">
            </div>
          </div>
          <div class=\"col-sm-4\">
            <div class=\"gallery-work\">
              <div class=\"gallery-work-name\">
                作品简介：
              </div>
              <div class=\"gallery-work-introduction\">
                {{ data.article }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <div class=\"gallery-box2\">
    <div style=\"font-size: 24px;font-weight: bold;\">
      推荐作品
    </div>
    <div class=\"container-fluid\">
      <div class=\"row\">
        {% for i in 0..rcmCount - 1 %}
        <div class=\"col-sm-2\">
          <a href=\"/gallery/{{ rcm[i]['id'] }}\">
            <div class=\"gallery-recommend\">
              <img src=\"/static-dist/workshowplugin/img/gallery/{{ rcm[i]['cover'] }}\">
              <b>{{ rcm[i]['title'] }}</b><br>
              <div class=\"gallery-rcm\"  style=\"margin-top:-80px; height: 25px\">
                <img src=\"/static-dist/workshowplugin/img/gallery/1.svg\">暂无
                <img src=\"/static-dist/workshowplugin/img/gallery/viewers.svg\">{{ rcm[i]['visit'] }}
                <img src=\"/static-dist/workshowplugin/img/gallery/2.svg\" style=\"float: right\">
              </div>
            </div>
          </a>
        </div>
        {% endfor %}
      </div>
    </div>
    <div class=\"\"></div>
  </div>
{% endblock %}", "WorkshowPlugin:index:gallery.html.twig", "/var/www/bootcamp/chenlong/project-it-migrant-workers/plugins/WorkshowPlugin/Resources/views/index/gallery.html.twig");
    }
}
