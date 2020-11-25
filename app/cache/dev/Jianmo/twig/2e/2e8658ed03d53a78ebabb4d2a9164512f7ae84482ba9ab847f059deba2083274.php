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

/* admin-v2/default/s2b2c-notice.html.twig */
class __TwigTemplate_a4b71102d6faadf15ff7dfaf036c01c3da77c631ab940f34124f13503cb58e59 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/s2b2c-notice.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/s2b2c-notice.html.twig"));

        // line 1
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->isS2B2CEnabled()) {
            // line 2
            echo "  ";
            $context["notice"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("S2B2CNotice", []);
            // line 3
            echo "  ";
            if (($this->getAttribute(($context["notice"] ?? $this->getContext($context, "notice")), "noticeNum", []) > 0)) {
                // line 4
                echo "    <div class=\"notify-container\">
      <input class=\"hidden\" type=\"checkbox\" checked id=\"listUnfold\" />
      ";
                // line 6
                if (($this->getAttribute(($context["notice"] ?? $this->getContext($context, "notice")), "noticeNum", []) > 2)) {
                    // line 7
                    echo "        <label for=\"listUnfold\" class=\"notify-list-toggle\"><i class=\"es-icon\"></i></label>
      ";
                }
                // line 9
                echo "      ";
                if (($this->getAttribute(($context["notice"] ?? $this->getContext($context, "notice")), "noticeNum", []) >= 6)) {
                    // line 10
                    echo "        ";
                    $context["rowNum"] = 6;
                    // line 11
                    echo "      ";
                } else {
                    // line 12
                    echo "        ";
                    $context["rowNum"] = $this->getAttribute(($context["notice"] ?? $this->getContext($context, "notice")), "noticeNum", []);
                    // line 13
                    echo "      ";
                }
                // line 14
                echo "      <div class=\"alert-list notify-List\">
        ";
                // line 15
                if ($this->getAttribute(($context["notice"] ?? $this->getContext($context, "notice")), "notEnoughBalance", [])) {
                    // line 16
                    echo "          <div class=\"alert alert-warning clearfix\" role=\"alert\">
            <span>";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("s2b2c.resource.no_fee_notice_hint", ["%supplierName%" => $this->getAttribute(($context["notice"] ?? $this->getContext($context, "notice")), "supplierName", []), "%balance%" => ((($this->getAttribute(($context["notice"] ?? null), "balance", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["notice"] ?? null), "balance", []), 0)) : (0)) / 100)]), "html", null, true);
                    echo "</span>
          </div>
        ";
                }
                // line 20
                echo "        ";
                if ($this->getAttribute(($context["notice"] ?? $this->getContext($context, "notice")), "hasNewVersionProducts", [])) {
                    // line 21
                    echo "          <div class=\"alert alert-warning clearfix\" role=\"alert\">
            <span>";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("s2b2c.resource.has_new_notice_hint"), "html", null, true);
                    echo "</span>
            <a class=\"alert-link\" href=\"";
                    // line 23
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_content_resource_products_version", ["type" => "courseSet"]);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("前去更新>>"), "html", null, true);
                    echo "</a>
          </div>
        ";
                }
                // line 26
                echo "      </div>
    </div>
  ";
            }
            // line 29
            echo "  <div class=\"notify-container\">
    <div class=\"alert-list notify-List\">
      ";
            // line 31
            $context["notifies"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("S2B2CProductUpdateNotify", []);
            // line 32
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["notifies"] ?? $this->getContext($context, "notifies")));
            foreach ($context['_seq'] as $context["_key"] => $context["notify"]) {
                // line 33
                echo "        <div class=\"alert alert-warning clearfix\" role=\"alert\">
          <span>您采购的 《";
                // line 34
                echo twig_escape_filter($this->env, (($this->getAttribute($context["notify"], "title", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["notify"], "title", []), "")) : ("")), "html", null, true);
                echo "》 ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notify"], "eventName", []), "html", null, true);
                echo "</span>
          <a class=\"alert-link\" href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["notify"], "path", []), $this->getAttribute($context["notify"], "pathParams", [])), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("course.testpaper_manage.transfer_btn"), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notify'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "    </div>
  </div>

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/s2b2c-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  126 => 35,  120 => 34,  117 => 33,  112 => 32,  110 => 31,  106 => 29,  101 => 26,  93 => 23,  89 => 22,  86 => 21,  83 => 20,  77 => 17,  74 => 16,  72 => 15,  69 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  50 => 7,  48 => 6,  44 => 4,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if is_s2b2c_enabled() %}
  {% set notice = data('S2B2CNotice', {}) %}
  {% if notice.noticeNum > 0 %}
    <div class=\"notify-container\">
      <input class=\"hidden\" type=\"checkbox\" checked id=\"listUnfold\" />
      {% if notice.noticeNum > 2 %}
        <label for=\"listUnfold\" class=\"notify-list-toggle\"><i class=\"es-icon\"></i></label>
      {% endif %}
      {% if notice.noticeNum >=6 %}
        {% set rowNum = 6 %}
      {% else %}
        {% set rowNum = notice.noticeNum %}
      {% endif %}
      <div class=\"alert-list notify-List\">
        {% if notice.notEnoughBalance %}
          <div class=\"alert alert-warning clearfix\" role=\"alert\">
            <span>{{ 's2b2c.resource.no_fee_notice_hint'|trans({'%supplierName%':notice.supplierName, '%balance%':notice.balance|default(0) / 100}) }}</span>
          </div>
        {% endif %}
        {% if notice.hasNewVersionProducts %}
          <div class=\"alert alert-warning clearfix\" role=\"alert\">
            <span>{{ 's2b2c.resource.has_new_notice_hint'|trans }}</span>
            <a class=\"alert-link\" href=\"{{ path('admin_v2_content_resource_products_version', {type: 'courseSet'}) }}\" target=\"_blank\">{{ '前去更新>>'|trans }}</a>
          </div>
        {% endif %}
      </div>
    </div>
  {% endif %}
  <div class=\"notify-container\">
    <div class=\"alert-list notify-List\">
      {% set notifies = data('S2B2CProductUpdateNotify', {}) %}
      {% for notify in notifies %}
        <div class=\"alert alert-warning clearfix\" role=\"alert\">
          <span>您采购的 《{{  notify.title |default('') }}》 {{ notify.eventName }}</span>
          <a class=\"alert-link\" href=\"{{ path(notify.path, notify.pathParams) }}\" target=\"_blank\">{{ 'course.testpaper_manage.transfer_btn'|trans }}</a>
        </div>
      {% endfor %}
    </div>
  </div>

{% endif %}
", "admin-v2/default/s2b2c-notice.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/s2b2c-notice.html.twig");
    }
}
