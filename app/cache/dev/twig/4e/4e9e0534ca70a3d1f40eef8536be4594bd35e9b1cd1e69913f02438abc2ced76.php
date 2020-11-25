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

/* default/footer.html.twig */
class __TwigTemplate_68b9c1109da401e54be5463d3a5954241a49480afe4a4b4afd333945d9210768 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/footer.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", [], "any", false, true), "left", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["themeConfig"] ?? null), "blocks", [], "any", false, true), "left", []), [])) : ([])));
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
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 2
            echo "    ";
            $context["code"] = $this->getAttribute($context["config"], "code", []);
            // line 3
            echo "    ";
            if ((($context["code"] ?? $this->getContext($context, "code")) == "footer-link")) {
                // line 4
                echo "      ";
                $context["category"] = (((($this->getAttribute($context["config"], "categoryId", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", []), 0)) : (0))) ? ($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Category", ["categoryId" => $this->getAttribute($context["config"], "categoryId", [])])) : (null));
                // line 5
                echo "      ";
                $this->loadTemplate((("default/" . ($context["code"] ?? $this->getContext($context, "code"))) . ".html.twig"), "default/footer.html.twig", 5)->display(twig_array_merge($context, ["config" => $context["config"], "category" => ($context["category"] ?? $this->getContext($context, "category"))]));
                // line 6
                echo "    ";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "
<footer class=\"es-footer\">
  <div class=\"copyright\">
    <div class=\"container\">
      ";
        // line 12
        $this->loadTemplate("powered-by.html.twig", "default/footer.html.twig", 12)->display($context);
        // line 13
        echo "
      ";
        // line 14
        echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.analytics");
        echo "

      ";
        // line 16
        if (_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.enabled"), false)) {
            // line 17
            echo "        ";
            echo $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("siteTrace.script");
            echo "
      ";
        }
        // line 19
        echo "
      <a class=\"mlm\" href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_set_archive");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.archive"), "html", null, true);
        echo "</a>
      <div class=\"mts\">
        ";
        // line 22
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright")) {
            // line 23
            echo "          ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.footer.course_copyright", ["%copyRightUrl%" => $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.copyright")]);
            echo "
        ";
        }
        // line 25
        echo "        ";
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp")) {
            // line 26
            echo "          <a class=\"mlm\" href=";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icpUrl"), "http://www.beian.miit.gov.cn"), "html", null, true);
            echo " target=\"_blank\">
            ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("site.icp"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 30
        echo "      </div>
    </div>
  </div>
</footer>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 30,  130 => 27,  125 => 26,  122 => 25,  116 => 23,  114 => 22,  107 => 20,  104 => 19,  98 => 17,  96 => 16,  91 => 14,  88 => 13,  86 => 12,  80 => 8,  65 => 6,  62 => 5,  59 => 4,  56 => 3,  53 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% for config in themeConfig.blocks.left|default([]) %}
    {% set code = config.code %}
    {% if code == 'footer-link' %}
      {% set category = config.categoryId|default(0) ? data('Category', {categoryId: config.categoryId})  : null %}
      {% include 'default/' ~ code ~ '.html.twig' with {config:config, category: category} %}
    {% endif %}
{% endfor %}

<footer class=\"es-footer\">
  <div class=\"copyright\">
    <div class=\"container\">
      {% include \"powered-by.html.twig\" %}

      {{ setting('site.analytics')|raw }}

      {% if setting('siteTrace.enabled')|default(false) %}
        {{ setting('siteTrace.script')|raw }}
      {% endif %}

      <a class=\"mlm\" href=\"{{ path('course_set_archive') }}\">{{'homepage.footer.archive'|trans}}</a>
      <div class=\"mts\">
        {% if setting('site.copyright') %}
          {{ 'homepage.footer.course_copyright'|trans({'%copyRightUrl%':setting('site.copyright')})|raw }}
        {% endif %}
        {% if setting('site.icp') %}
          <a class=\"mlm\" href={{ setting('site.icpUrl')|default('http://www.beian.miit.gov.cn') }} target=\"_blank\">
            {{ setting('site.icp') }}
          </a>
        {% endif %}
      </div>
    </div>
  </div>
</footer>
", "default/footer.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/default/footer.html.twig");
    }
}
