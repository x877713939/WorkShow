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

/* admin-v2/default/quick-entrance/modal.html.twig */
class __TwigTemplate_6dc29c5789a5bd5592117b9f9b659bb26901ce8643060ca137e3d2354188b55a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/quick-entrance/modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/default/quick-entrance/modal.html.twig"));

        // line 1
        echo "<div class=\"modal in\" id=\"functionModal\" aria-hidden=\"true\">
  <div class=\"modal-dialog cd-modal-dialog function-modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
          <i class=\"cd-icon cd-icon-close\"></i>
        </button>
        <h4 class=\"modal-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.quick_entrance_setting"), "html", null, true);
        echo "</h4>
      </div>
      <div class=\"modal-body js-function-body\">
        <form id=\"quick-entrance-form\" method=\"post\" action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_quick_entrance");
        echo "\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("site"), "html", null, true);
        echo "\">
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allQuickEntrances"] ?? $this->getContext($context, "allQuickEntrances")));
        foreach ($context['_seq'] as $context["_key"] => $context["typeEntrance"]) {
            if ( !twig_test_empty($this->getAttribute($context["typeEntrance"], "data", []))) {
                // line 14
                echo "            <div class=\"entrance-section\">
              <div class=\"entrance-section__title\">";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($context["typeEntrance"], "title", []), "html", null, true);
                echo "</div>
              <div class=\"";
                // line 16
                echo twig_escape_filter($this->env, ("entrance-section__body js-entrance-list cd-pt16 row " . $this->getAttribute($context["typeEntrance"], "class", [])), "html", null, true);
                echo "\">
                ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["typeEntrance"], "data", []));
                foreach ($context['_seq'] as $context["_key"] => $context["entrance"]) {
                    // line 18
                    echo "                  <div class=\"col-md-3\">
                    <div class=\"text-center admin-function  js-function-choose ";
                    // line 19
                    if (twig_in_filter($this->getAttribute($context["entrance"], "code", []), ($context["selectedEntranceCodes"] ?? $this->getContext($context, "selectedEntranceCodes")))) {
                        echo "active";
                    }
                    echo "\" data-code=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entrance"], "code", []), "html", null, true);
                    echo "\">
                      <div class=\"admin-function__tag\"></div>
                      <div class=\"admin-function__icon\"><i class=\"";
                    // line 21
                    echo twig_escape_filter($this->env, ("es-icon es-icon-entry-" . $this->getAttribute($context["entrance"], "icon", [])), "html", null, true);
                    echo "\"></i></div>
                      <div class=\"admin-function__name\">";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entrance"], "text", []), "html", null, true);
                    echo "</div>
                    </div>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrance'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "              </div>
            </div>
          ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeEntrance'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </form>
      </div>
      <div class=\"modal-footer clearfix\">
        <div class=\"function-modal-tip\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin_v2.quick_entrance_setting.tips"), "html", null, true);
        echo "</div>
        <a class=\"function-modal__link\" data-dismiss=\"modal\" href=\"javascript:;\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.cancel"), "html", null, true);
        echo "</a>
        <button type=\"button\" class=\"btn function-modal__btn js-save-btn\" data-loading-text=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save.submiting"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.save"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/default/quick-entrance/modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 34,  123 => 33,  119 => 32,  114 => 29,  105 => 26,  95 => 22,  91 => 21,  82 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  64 => 14,  59 => 13,  55 => 12,  51 => 11,  45 => 8,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal in\" id=\"functionModal\" aria-hidden=\"true\">
  <div class=\"modal-dialog cd-modal-dialog function-modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
          <i class=\"cd-icon cd-icon-close\"></i>
        </button>
        <h4 class=\"modal-title\">{{ 'admin_v2.quick_entrance_setting'|trans }}</h4>
      </div>
      <div class=\"modal-body js-function-body\">
        <form id=\"quick-entrance-form\" method=\"post\" action=\"{{ path('admin_v2_quick_entrance') }}\">
          <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
          {% for typeEntrance in allQuickEntrances if typeEntrance.data is not empty %}
            <div class=\"entrance-section\">
              <div class=\"entrance-section__title\">{{ typeEntrance.title }}</div>
              <div class=\"{{ 'entrance-section__body js-entrance-list cd-pt16 row ' ~ typeEntrance.class }}\">
                {% for entrance in typeEntrance.data %}
                  <div class=\"col-md-3\">
                    <div class=\"text-center admin-function  js-function-choose {% if entrance.code in selectedEntranceCodes %}active{% endif %}\" data-code=\"{{ entrance.code }}\">
                      <div class=\"admin-function__tag\"></div>
                      <div class=\"admin-function__icon\"><i class=\"{{ 'es-icon es-icon-entry-' ~ entrance.icon }}\"></i></div>
                      <div class=\"admin-function__name\">{{ entrance.text }}</div>
                    </div>
                  </div>
                {% endfor %}
              </div>
            </div>
          {% endfor %}
        </form>
      </div>
      <div class=\"modal-footer clearfix\">
        <div class=\"function-modal-tip\">{{ 'admin_v2.quick_entrance_setting.tips'|trans }}</div>
        <a class=\"function-modal__link\" data-dismiss=\"modal\" href=\"javascript:;\">{{ 'form.btn.cancel'|trans }}</a>
        <button type=\"button\" class=\"btn function-modal__btn js-save-btn\" data-loading-text=\"{{ 'form.btn.save.submiting'|trans }}\">{{ 'form.btn.save'|trans }}</button>
      </div>
    </div>
  </div>
</div>", "admin-v2/default/quick-entrance/modal.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/default/quick-entrance/modal.html.twig");
    }
}
