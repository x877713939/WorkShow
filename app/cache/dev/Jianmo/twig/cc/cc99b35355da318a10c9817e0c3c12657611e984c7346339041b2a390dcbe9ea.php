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

/* announcement/announcement.html.twig */
class __TwigTemplate_cdae2418e54faaca19c943ea302395379f5022a9b10a36ea242b337701663b74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/announcement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "announcement/announcement.html.twig"));

        // line 1
        $context["announcements"] = $this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Announcement", ["count" => 3]);
        // line 2
        if ((($context["announcements"] ?? $this->getContext($context, "announcements")) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "cookies", []), "get", [0 => "close_announcements_alert"], "method"))) {
            // line 3
            echo "<div class=\"alert cd-alert cd-alert-warning alert-notice hidden-xs\" id=\"announcements-alert\" role=\"alert\">
  <div class=\"container swiper-container\">
    <div class=\"swiper-wrapper\">
      ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["announcements"] ?? $this->getContext($context, "announcements")));
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 7
                echo "        ";
                if ($this->getAttribute($context["announcement"], "url", [])) {
                    // line 8
                    echo "        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          <a style=\"color:#ffa51f\" class=\"alert-link\" href=\"";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "url", []), "html", null, true);
                    echo "\" target=\"_blank\">
            ";
                    // line 11
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", []), 50);
                    echo "
          </a>
        </div>
        ";
                } else {
                    // line 15
                    echo "          <div class=\"swiper-slide\">
            <i class=\"es-icon es-icon-infooutline\"></i>
            <a style=\"color:#ffa51f\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("announcement_global_show", ["id" => $this->getAttribute($context["announcement"], "id", [])]), "html", null, true);
                    echo "\" >
              ";
                    // line 18
                    echo $this->env->getExtension('AppBundle\Twig\WebExtension')->subTextFilter($this->getAttribute($context["announcement"], "content", []), 50);
                    echo "
            </a>
          </div>
        ";
                }
                // line 22
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" data-cookie=\"close_announcements_alert\">
      <span aria-hidden=\"true\">×</span>
    </button> 
  </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "announcement/announcement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 23,  82 => 22,  75 => 18,  71 => 17,  67 => 15,  60 => 11,  56 => 10,  52 => 8,  49 => 7,  45 => 6,  40 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% set announcements = data('Announcement',{ count:3 }) %}
{% if announcements and not app.request.cookies.get('close_announcements_alert') %}
<div class=\"alert cd-alert cd-alert-warning alert-notice hidden-xs\" id=\"announcements-alert\" role=\"alert\">
  <div class=\"container swiper-container\">
    <div class=\"swiper-wrapper\">
      {% for announcement in announcements %}
        {% if announcement.url %}
        <div class=\"swiper-slide\">
          <i class=\"es-icon es-icon-infooutline mrm\"></i>
          <a style=\"color:#ffa51f\" class=\"alert-link\" href=\"{{announcement.url}}\" target=\"_blank\">
            {{announcement.content|sub_text(50)}}
          </a>
        </div>
        {% else %}
          <div class=\"swiper-slide\">
            <i class=\"es-icon es-icon-infooutline\"></i>
            <a style=\"color:#ffa51f\" class=\"alert-link\" href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('announcement_global_show', {id:announcement.id}) }}\" >
              {{announcement.content|sub_text(50)}}
            </a>
          </div>
        {% endif %}
      {% endfor %}

    </div>
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" data-cookie=\"close_announcements_alert\">
      <span aria-hidden=\"true\">×</span>
    </button> 
  </div>
</div>
{% endif %}
", "announcement/announcement.html.twig", "/var/www/bootcamp/chenlong/EduSoho/app/Resources/views/announcement/announcement.html.twig");
    }
}
