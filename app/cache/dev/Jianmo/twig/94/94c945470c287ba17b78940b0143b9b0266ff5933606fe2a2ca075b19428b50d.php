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

/* @theme/jianmo/block/bottom_info.template.html.twig */
class __TwigTemplate_b7540321c3ae84f5ead31dd49a52b73f979fa5eed9a3e243520b304131089b99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/jianmo/block/bottom_info.template.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@theme/jianmo/block/bottom_info.template.html.twig"));

        // line 1
        $context["self_macro"] = $this;
        // line 2
        echo "
<div class=\"col-md-8 footer-main clearfix\">
  ";
        // line 4
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, ($context["firstColumnText"] ?? $this->getContext($context, "firstColumnText"))), ($context["firstColumnLinks"] ?? $this->getContext($context, "firstColumnLinks")));
        echo "
  ";
        // line 5
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, ($context["secondColumnText"] ?? $this->getContext($context, "secondColumnText"))), ($context["secondColumnLinks"] ?? $this->getContext($context, "secondColumnLinks")));
        echo "
  ";
        // line 6
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, ($context["thirdColumnText"] ?? $this->getContext($context, "thirdColumnText"))), ($context["thirdColumnLinks"] ?? $this->getContext($context, "thirdColumnLinks")));
        echo "
  ";
        // line 7
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, ($context["fourthColumnText"] ?? $this->getContext($context, "fourthColumnText"))), ($context["fourthColumnLinks"] ?? $this->getContext($context, "fourthColumnLinks")));
        echo "
  ";
        // line 8
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, ($context["fifthColumnText"] ?? $this->getContext($context, "fifthColumnText"))), ($context["fifthColumnLinks"] ?? $this->getContext($context, "fifthColumnLinks")));
        echo "
</div>

<div class=\"col-md-4 footer-logo hidden-sm hidden-xs\">
  <a class=\"\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["bottomLogo"] ?? null), 0, [], "array", false, true), "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["bottomLogo"] ?? null), 0, [], "array", false, true), "href", []), "")) : ("")), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["bottomLogo"] ?? null), 0, [], "array", false, true), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["bottomLogo"] ?? null), 0, [], "array", false, true), "target", []), "")) : ("")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute(($context["bottomLogo"] ?? null), 0, [], "array", false, true), "src", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["bottomLogo"] ?? null), 0, [], "array", false, true), "src", []), "")) : (""))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["bottomLogo"] ?? null), 0, [], "array", false, true), "alt", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["bottomLogo"] ?? null), 0, [], "array", false, true), "alt", []), "")) : ("")), "html", null, true);
        echo "\"></a>
  <div class=\"footer-sns\">
    ";
        // line 14
        if ($this->getAttribute($this->getAttribute(($context["weibo"] ?? $this->getContext($context, "weibo")), 0, [], "array"), "href", [])) {
            // line 15
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["weibo"] ?? null), 0, [], "array", false, true), "href", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["weibo"] ?? null), 0, [], "array", false, true), "href", []), "javascript:;")) : ("javascript:;")), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["weibo"] ?? null), 0, [], "array", false, true), "target", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["weibo"] ?? null), 0, [], "array", false, true), "target", []), "")) : ("")), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-weibo\"></i></a>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["weixin"] ?? $this->getContext($context, "weixin")), 0, [], "array"), "src", [])) {
            // line 18
            echo "    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-weixin\"></i>
      <div class=\"qrcode-content\">
        <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute(($context["weixin"] ?? null), 0, [], "array", false, true), "src", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["weixin"] ?? null), 0, [], "array", false, true), "src", []), "")) : (""))), "html", null, true);
            echo "\" alt=\"\">  
      </div>
    </a>
    ";
        }
        // line 25
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["apple"] ?? $this->getContext($context, "apple")), 0, [], "array"), "src", [])) {
            // line 26
            echo "    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-apple\"></i>
      <div class=\"qrcode-content\">
        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute(($context["apple"] ?? null), 0, [], "array", false, true), "src", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["apple"] ?? null), 0, [], "array", false, true), "src", []), "")) : (""))), "html", null, true);
            echo "\" alt=\"\"> 
      </div>
    </a>
    ";
        }
        // line 33
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["android"] ?? $this->getContext($context, "android")), 0, [], "array"), "src", [])) {
            // line 34
            echo "    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-android\"></i>
      <div class=\"qrcode-content\">
        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute(($context["android"] ?? null), 0, [], "array", false, true), "src", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["android"] ?? null), 0, [], "array", false, true), "src", []), "")) : (""))), "html", null, true);
            echo "\" alt=\"\"> 
      </div>
    </a>
    ";
        }
        // line 41
        echo "  </div>
</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 45
    public function getfooter_div($__title__ = null, $__links__ = null, $__className__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "links" => $__links__,
            "className" => $__className__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "footer_div"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "footer_div"));

            // line 46
            echo "<div class=\"link-item ";
            if (($context["className"] ?? $this->getContext($context, "className"))) {
                echo twig_escape_filter($this->env, ($context["className"] ?? $this->getContext($context, "className")), "html", null, true);
            }
            echo "\">
  <h3>";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["title"] ?? null), "value", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["title"] ?? null), "value", []), "")) : ("")), "html", null, true);
            echo "</h3>
  <ul>
    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((isset($context["links"]) || array_key_exists("links", $context))) ? (_twig_default_filter(($context["links"] ?? $this->getContext($context, "links")), null)) : (null)));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 50
                echo "      <li>
        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "href", []), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "target", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "value", []), "html", null, true);
                echo "</a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "  </ul>
</div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@theme/jianmo/block/bottom_info.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 54,  184 => 51,  181 => 50,  177 => 49,  172 => 47,  165 => 46,  145 => 45,  131 => 41,  124 => 37,  119 => 34,  116 => 33,  109 => 29,  104 => 26,  101 => 25,  94 => 21,  89 => 18,  86 => 17,  78 => 15,  76 => 14,  65 => 12,  58 => 8,  54 => 7,  50 => 6,  46 => 5,  42 => 4,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as self_macro %}

<div class=\"col-md-8 footer-main clearfix\">
  {{ self_macro.footer_div(firstColumnText|first, firstColumnLinks) }}
  {{ self_macro.footer_div(secondColumnText|first, secondColumnLinks) }}
  {{ self_macro.footer_div(thirdColumnText|first, thirdColumnLinks) }}
  {{ self_macro.footer_div(fourthColumnText|first, fourthColumnLinks) }}
  {{ self_macro.footer_div(fifthColumnText|first, fifthColumnLinks) }}
</div>

<div class=\"col-md-4 footer-logo hidden-sm hidden-xs\">
  <a class=\"\" href=\"{{ bottomLogo[0].href|default('') }}\" target=\"{{ bottomLogo[0].target|default('') }}\"><img src=\"{{ asset(bottomLogo[0].src|default('')) }}\" alt=\"{{ bottomLogo[0].alt|default('') }}\"></a>
  <div class=\"footer-sns\">
    {% if (weibo[0].href) %}
    <a href=\"{{ weibo[0].href|default('javascript:;') }}\" target=\"{{ weibo[0].target|default('') }}\"><i class=\"es-icon es-icon-weibo\"></i></a>
    {% endif %}
    {% if (weixin[0].src) %}
    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-weixin\"></i>
      <div class=\"qrcode-content\">
        <img src=\"{{ asset(weixin[0].src|default('')) }}\" alt=\"\">  
      </div>
    </a>
    {% endif %}
    {% if (apple[0].src) %}
    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-apple\"></i>
      <div class=\"qrcode-content\">
        <img src=\"{{ asset(apple[0].src|default('')) }}\" alt=\"\"> 
      </div>
    </a>
    {% endif %}
    {% if (android[0].src) %}
    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-android\"></i>
      <div class=\"qrcode-content\">
        <img src=\"{{ asset(android[0].src|default('')) }}\" alt=\"\"> 
      </div>
    </a>
    {% endif %}
  </div>
</div>


{% macro footer_div(title, links, className) %}
<div class=\"link-item {% if className %}{{className}}{% endif %}\">
  <h3>{{ title.value|default('') }}</h3>
  <ul>
    {% for link in links|default(null) %}
      <li>
        <a href=\"{{ link.href }}\" target=\"{{ link.target }}\">{{ link.value }}</a>
      </li>
    {% endfor %}
  </ul>
</div>
{% endmacro %}", "@theme/jianmo/block/bottom_info.template.html.twig", "/home/zl/project-it-migrant-workers/web/themes/jianmo/block/bottom_info.template.html.twig");
    }
}
