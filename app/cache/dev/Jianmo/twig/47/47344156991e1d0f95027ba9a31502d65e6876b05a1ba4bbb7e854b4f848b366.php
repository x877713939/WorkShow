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

/* default/friend-link.html.twig */
class __TwigTemplate_aaecaacb1ca2d2547a2d7084c0cefad6826c164548ffbf01e1f2e9f864192ca0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/friend-link.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/friend-link.html.twig"));

        // line 1
        if (($context["friendlyLinks"] ?? $this->getContext($context, "friendlyLinks"))) {
            // line 2
            echo "<div class=\"es-friend-link\">
  <div class=\"container\">
    <div class=\"title\">";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage.friend-link.content_title"), "html", null, true);
            echo "</div>
    <ul>
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["friendlyLinks"] ?? $this->getContext($context, "friendlyLinks")));
            foreach ($context['_seq'] as $context["_key"] => $context["friendLink"]) {
                // line 7
                echo "      <li><a class=\"link-dark text-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friendLink"], "url", []), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["friendLink"], "isNewWin", [])) {
                    echo "target=\"_blank\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friendLink"], "name", []), "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friendLink'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </ul>
  </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "default/friend-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 9,  51 => 7,  47 => 6,  42 => 4,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if friendlyLinks %}
<div class=\"es-friend-link\">
  <div class=\"container\">
    <div class=\"title\">{{'homepage.friend-link.content_title'|trans}}</div>
    <ul>
      {% for friendLink in friendlyLinks %}
      <li><a class=\"link-dark text-sm\" href=\"{{ friendLink.url }}\" {% if friendLink.isNewWin%}target=\"_blank\"{% endif %}>{{friendLink.name}}</a></li>
      {% endfor %}
    </ul>
  </div>
</div>
{% endif %}
", "default/friend-link.html.twig", "/var/www/bootcamp/chenlong/EduSoho/app/Resources/views/default/friend-link.html.twig");
    }
}
