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

/* webprofiler/cloud-api.html.twig */
class __TwigTemplate_3ea99fb98d6860e7399d5562d49369b925cdf4ec022f597138d59e30f338f326 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "webprofiler/cloud-api.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "webprofiler/cloud-api.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "webprofiler/cloud-api.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "  ";
        ob_start();
        // line 5
        echo "    ";
        // line 6
        echo "    <span class=\"icon\"><img src=\"/assets/img/default/apple.png\" alt=\"\"/></span>
    <span class=\"sf-toolbar-status\">CloudApiLog</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        echo "  ";
        ob_start();
        // line 10
        echo "    ";
        // line 12
        echo "    <div class=\"sf-toolbar-info-piece\">
      <b>Api Count</b>
      <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "count", []), "html", null, true);
        echo "</span>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 17
        echo "  ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 21
        echo "  ";
        // line 22
        echo "  <span class=\"label\">
        <span class=\"icon\"><img src=\"/assets/img/default/apple.png\" alt=\"\"/></span>
        <strong>CloudApi</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 29
        echo "  ";
        // line 30
        echo "  <h2>CloudApi Logs <span style=\"color: brown\">(";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "count", []), "html", null, true);
        echo ")</span></h2>
  ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "logs", []));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 32
            echo "  <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "url", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "method", []), "html", null, true);
            echo "</h4>
  <table>
    <tr>
      <th>RequestId</th><td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "requestId", []), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <th>Method</th><td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "method", []), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <th>Url</th><td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "url", []), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <th>Params</th><td>";
            // line 44
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["log"], "params", [])), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <th>Headers</th><td>";
            // line 47
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["log"], "headers", [])), "html", null, true);
            echo "</td>
    </tr>
    <tr>
      <th>Results</th><td>";
            // line 50
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["log"], "result", [])), "html", null, true);
            echo "</td>
    </tr>
  </table>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "webprofiler/cloud-api.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 50,  178 => 47,  172 => 44,  166 => 41,  160 => 38,  154 => 35,  145 => 32,  141 => 31,  136 => 30,  134 => 29,  125 => 28,  111 => 22,  109 => 21,  100 => 20,  87 => 17,  81 => 14,  77 => 12,  75 => 10,  72 => 9,  67 => 6,  65 => 5,  62 => 4,  53 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
  {% set icon %}
    {# this is the content displayed as a panel in the toolbar #}
    <span class=\"icon\"><img src=\"/assets/img/default/apple.png\" alt=\"\"/></span>
    <span class=\"sf-toolbar-status\">CloudApiLog</span>
  {% endset %}
  {% set text %}
    {# this is the content displayed when hovering the mouse over
       the toolbar panel #}
    <div class=\"sf-toolbar-info-piece\">
      <b>Api Count</b>
      <span>{{ collector.count }}</span>
    </div>
  {% endset %}
  {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block menu %}
  {# This left-hand menu appears when using the full-screen profiler. #}
  <span class=\"label\">
        <span class=\"icon\"><img src=\"/assets/img/default/apple.png\" alt=\"\"/></span>
        <strong>CloudApi</strong>
    </span>
{% endblock %}

{% block panel %}
  {# Optional, for showing the most details. #}
  <h2>CloudApi Logs <span style=\"color: brown\">({{ collector.count }})</span></h2>
  {% for log in collector.logs %}
  <h4>{{ log.url }} {{ log.method }}</h4>
  <table>
    <tr>
      <th>RequestId</th><td>{{ log.requestId }}</td>
    </tr>
    <tr>
      <th>Method</th><td>{{ log.method }}</td>
    </tr>
    <tr>
      <th>Url</th><td>{{ log.url }}</td>
    </tr>
    <tr>
      <th>Params</th><td>{{ log.params|json_encode }}</td>
    </tr>
    <tr>
      <th>Headers</th><td>{{ log.headers|json_encode }}</td>
    </tr>
    <tr>
      <th>Results</th><td>{{ log.result|json_encode }}</td>
    </tr>
  </table>
  {% endfor %}
{% endblock %}", "webprofiler/cloud-api.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/webprofiler/cloud-api.html.twig");
    }
}
