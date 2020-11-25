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

/* export/export-btn.html.twig */
class __TwigTemplate_6dc4350b524268a7714d02adb38e51ee08fad9b3a17676857b927798d1221226 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export/export-btn.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "export/export-btn.html.twig"));

        // line 1
        echo "<a class=\"";
        if ( !(((isset($context["showDownLoadText"]) || array_key_exists("showDownLoadText", $context))) ? (_twig_default_filter(($context["showDownLoadText"] ?? $this->getContext($context, "showDownLoadText")), 1)) : (1))) {
            echo "color-primary";
        } else {
            echo " cd-btn ";
        }
        echo " mhs ";
        echo twig_escape_filter($this->env, (((isset($context["exportClass"]) || array_key_exists("exportClass", $context))) ? (_twig_default_filter(($context["exportClass"] ?? $this->getContext($context, "exportClass")), "cd-btn-primary")) : ("cd-btn-primary")), "html", null, true);
        echo " js-export-btn\"
   href=\"javascript:;\"
   data-try-url=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("try_export", ["name" => ($context["exportFileName"] ?? $this->getContext($context, "exportFileName")), "limit" => (((isset($context["exportLimit"]) || array_key_exists("exportLimit", $context))) ? (_twig_default_filter(($context["exportLimit"] ?? $this->getContext($context, "exportLimit")), "")) : (""))]), "html", null, true);
        echo "\"
   data-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("export", ["name" => ($context["exportFileName"] ?? $this->getContext($context, "exportFileName"))]), "html", null, true);
        echo "\"
   data-pre-url=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pre_export", ["name" => ($context["exportFileName"] ?? $this->getContext($context, "exportFileName"))]), "html", null, true);
        echo "\"
   data-loading-text=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.export.submiting"), "html", null, true);
        echo "\"
   data-target-form=\"#";
        // line 7
        echo twig_escape_filter($this->env, ($context["targetFormId"] ?? $this->getContext($context, "targetFormId")), "html", null, true);
        echo "\"
>
    <i class=\"es-icon es-icon-filedownload cd-text-sm\"></i>
    ";
        // line 10
        if ((((isset($context["showDownLoadText"]) || array_key_exists("showDownLoadText", $context))) ? (_twig_default_filter(($context["showDownLoadText"] ?? $this->getContext($context, "showDownLoadText")), 1)) : (1))) {
            // line 11
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter(($context["text"] ?? $this->getContext($context, "text")), "form.btn.export")) : ("form.btn.export"))), "html", null, true);
            echo "
    ";
        }
        // line 13
        echo "</a>

<div id=\"export-modal\" class=\"hide\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 class=\"modal-title\" data-success=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file.download.finish"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("file.download.start"), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"progress progress-striped active\">
                    <div  id=\"progress-bar\" class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 31
        if ((((isset($context["exportWebpack"]) || array_key_exists("exportWebpack", $context))) ? (_twig_default_filter(($context["exportWebpack"] ?? $this->getContext($context, "exportWebpack")))) : (""))) {
            // line 32
            echo "    ";
            $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script([0 => "app/js/exporter/index.js"]);
        } else {
            // line 34
            echo "    ";
            $this->env->getExtension('AppBundle\Twig\WebExtension')->loadScript("topxiaadminbundle/controller/export/export.js");
        }
        // line 36
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "export/export-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 36,  109 => 34,  105 => 32,  103 => 31,  87 => 20,  78 => 13,  72 => 11,  70 => 10,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"{% if not showDownLoadText|default(1)  %}color-primary{% else %} cd-btn {% endif %} mhs {{ exportClass|default('cd-btn-primary') }} js-export-btn\"
   href=\"javascript:;\"
   data-try-url=\"{{ path('try_export', {'name':exportFileName, 'limit': exportLimit|default('')}) }}\"
   data-url=\"{{ path('export',{'name':exportFileName}) }}\"
   data-pre-url=\"{{ path('pre_export',{'name':exportFileName}) }}\"
   data-loading-text=\"{{'form.btn.export.submiting'|trans}}\"
   data-target-form=\"#{{ targetFormId }}\"
>
    <i class=\"es-icon es-icon-filedownload cd-text-sm\"></i>
    {% if showDownLoadText|default(1) %}
      {{ text|default('form.btn.export')|trans }}
    {% endif %}
</a>

<div id=\"export-modal\" class=\"hide\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                <h4 class=\"modal-title\" data-success=\"{{ 'file.download.finish'|trans }}\">{{ 'file.download.start'|trans }}</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"progress progress-striped active\">
                    <div  id=\"progress-bar\" class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
                </div>
            </div>
        </div>
    </div>
</div>

{% if exportWebpack|default() %}
    {% do script(['app/js/exporter/index.js']) %}
{% else %}
    {% do load_script('topxiaadminbundle/controller/export/export.js') %}
{% endif %}

", "export/export-btn.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/export/export-btn.html.twig");
    }
}
