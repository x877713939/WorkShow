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

/* admin-v2/default/newcomer-task.html.twig */
class __TwigTemplate_94508c852f41e29e79cb0816b9d8e94a17edaa86c3f979c16e206e68b87f9e27 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/newcomer-task.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/newcomer-task.html.twig"));

        // line 1
        echo "<div class=\"row\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newcomerTasks"] ?? $this->getContext($context, "newcomerTasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["newcomerTask"]) {
            // line 3
            echo "    <div class=\"col-md-2\">
      <div class=\"task-step";
            // line 4
            if ($this->getAttribute($context["newcomerTask"], "status", [])) {
                echo " task-step--done";
            }
            echo "\">
          ";
            // line 5
            if ($this->getAttribute($context["newcomerTask"], "status", [])) {
                echo "<span class=\"task-step__tag\"></span>";
            }
            // line 6
            echo "        <div class=\"task-step__title\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["newcomerTask"], "name", [])), "html", null, true);
            echo "</div>
        <div class=\"task-step__tip\">";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["newcomerTask"], "description", [])), "html", null, true);
            echo "</div>
        <a class=\"task-step__btn\"
           ";
            // line 9
            if ($this->getAttribute($context["newcomerTask"], "status", [])) {
                echo "href=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["newcomerTask"], "doneUrl", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["newcomerTask"], "doneUrl", []), $this->getAttribute($context["newcomerTask"], "url", []))) : ($this->getAttribute($context["newcomerTask"], "url", []))), "html", null, true);
                echo "\"";
            } else {
                echo "href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["newcomerTask"], "url", []), "html", null, true);
                echo "\"";
            }
            echo ">";
            if ($this->getAttribute($context["newcomerTask"], "status", [])) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.newcomer_task.done"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.newcomer_task.todo"), "html", null, true);
            }
            echo "</a>
        <a class=\"task-step__link\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["newcomerTask"], "guideUrl", []), "html", null, true);
            echo "\"
           target=\"_blank\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.newcomer_task.check_guide"), "html", null, true);
            echo "</a>
      </div>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newcomerTask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/newcomer-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 15,  88 => 11,  84 => 10,  66 => 9,  61 => 7,  56 => 6,  52 => 5,  46 => 4,  43 => 3,  39 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
  {% for newcomerTask in newcomerTasks %}
    <div class=\"col-md-2\">
      <div class=\"task-step{% if newcomerTask.status %} task-step--done{% endif %}\">
          {% if newcomerTask.status %}<span class=\"task-step__tag\"></span>{% endif %}
        <div class=\"task-step__title\">{{ newcomerTask.name|trans }}</div>
        <div class=\"task-step__tip\">{{ newcomerTask.description|trans }}</div>
        <a class=\"task-step__btn\"
           {% if newcomerTask.status %}href=\"{{ newcomerTask.doneUrl|default(newcomerTask.url) }}\"{% else %}href=\"{{ newcomerTask.url }}\"{% endif %}>{% if newcomerTask.status %}{{ 'admin_v2.newcomer_task.done'|trans }}{% else %}{{ 'admin_v2.newcomer_task.todo'|trans }}{% endif %}</a>
        <a class=\"task-step__link\" href=\"{{ newcomerTask.guideUrl }}\"
           target=\"_blank\">{{ 'admin_v2.newcomer_task.check_guide'|trans }}</a>
      </div>
    </div>
  {% endfor %}
</div>
", "admin-v2/default/newcomer-task.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/newcomer-task.html.twig");
    }
}
