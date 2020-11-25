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

/* default/index.html.twig */
class __TwigTemplate_cc244967ffaadee3367009d608e73bc5df27e4ac946de76895d9712c5077e151 extends \Twig\Template
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
        return "default/base-index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        // line 2
        $this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script([0 => "app/js/index/index.js"]);
        // line 1
        $this->parent = $this->loadTemplate("default/base-index.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        $asm89CacheStrategy1 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("jianmo/home/top/banner", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 5
                echo "    ";
                echo $this->env->getExtension('AppBundle\Twig\BlockExtension')->showBlock("jianmo:home_top_banner");
                echo "
    ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 7
        echo "    ";
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
            // line 8
            echo "        ";
            $context["code"] = $this->getAttribute($context["config"], "code", []);
            // line 9
            echo "        ";
            if ((((($this->getAttribute($context["config"], "sortName", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "sortName", []), "")) : ("")) == "recommended") && (($context["code"] ?? $this->getContext($context, "code")) == "category-course"))) {
                // line 10
                echo "            ";
                $context["code"] = "recommend-course";
                // line 11
                echo "        ";
            }
            // line 12
            echo "        ";
            $context["isPlugin"] = (($this->getAttribute($context["config"], "isPlugin", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "isPlugin", []), 0)) : (0));
            // line 13
            echo "
        ";
            // line 14
            $context["category"] = (((($this->getAttribute($context["config"], "categoryId", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", []), 0)) : (0))) ? ($this->env->getExtension('AppBundle\Twig\DataExtension')->getData("Category", ["categoryId" => $this->getAttribute($context["config"], "categoryId", [])])) : (null));
            // line 15
            echo "
        ";
            // line 16
            if ((($context["isPlugin"] ?? $this->getContext($context, "isPlugin")) && $this->env->getExtension('AppBundle\Twig\WebExtension')->isPluginInstalled($this->getAttribute($context["config"], "pluginName", [])))) {
                // line 17
                echo "          ";
                $this->loadTemplate($this->getAttribute($context["config"], "show", []), "default/index.html.twig", 17)->display(twig_array_merge($context, ["config" => $context["config"], "category" => ($context["category"] ?? $this->getContext($context, "category"))]));
                // line 18
                echo "        ";
            } elseif ( !($context["isPlugin"] ?? $this->getContext($context, "isPlugin"))) {
                // line 19
                echo "          ";
                if ((($context["code"] ?? $this->getContext($context, "code")) == "friend-link")) {
                    // line 20
                    echo "              ";
                    $this->loadTemplate((("default/" . ($context["code"] ?? $this->getContext($context, "code"))) . ".html.twig"), "default/index.html.twig", 20)->display(twig_array_merge($context, ["friendlyLinks" => ($context["friendlyLinks"] ?? $this->getContext($context, "friendlyLinks"))]));
                    // line 21
                    echo "          ";
                } elseif ((($context["code"] ?? $this->getContext($context, "code")) != "footer-link")) {
                    // line 22
                    echo "              ";
                    if ((($context["code"] ?? $this->getContext($context, "code")) != "course-grid-with-condition-index")) {
                        // line 23
                        echo "                  ";
                        $asm89CacheStrategy2 = $this->env->getExtension('Asm89\Twig\CacheExtension\Extension')->getCacheStrategy();
                        $asm89Key2 = $asm89CacheStrategy2->generateKey(("jianmo/default/" . ($context["code"] ?? $this->getContext($context, "code"))), 600                        );
                        $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
                        if ($asm89CacheBody2 === false) {
                            ob_start();
                                // line 24
                                echo "                  ";
                                $this->loadTemplate((("default/" . ($context["code"] ?? $this->getContext($context, "code"))) . ".html.twig"), "default/index.html.twig", 24)->display(twig_array_merge($context, ["config" => $context["config"], "category" => ($context["category"] ?? $this->getContext($context, "category"))]));
                                // line 25
                                echo "                  ";
                            
                            $asm89CacheBody2 = ob_get_clean();
                            $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
                        }
                        echo $asm89CacheBody2;
                        // line 26
                        echo "              ";
                    } else {
                        // line 27
                        echo "                  ";
                        $this->loadTemplate((("default/" . ($context["code"] ?? $this->getContext($context, "code"))) . ".html.twig"), "default/index.html.twig", 27)->display(twig_array_merge($context, ["config" => $context["config"], "category" => ($context["category"] ?? $this->getContext($context, "category"))]));
                        // line 28
                        echo "              ";
                    }
                    // line 29
                    echo "          ";
                }
                // line 30
                echo "        ";
            }
            // line 31
            echo "    ";
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 31,  170 => 30,  167 => 29,  164 => 28,  161 => 27,  158 => 26,  151 => 25,  148 => 24,  141 => 23,  138 => 22,  135 => 21,  132 => 20,  129 => 19,  126 => 18,  123 => 17,  121 => 16,  118 => 15,  116 => 14,  113 => 13,  110 => 12,  107 => 11,  104 => 10,  101 => 9,  98 => 8,  80 => 7,  70 => 5,  63 => 4,  54 => 3,  43 => 1,  41 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'default/base-index.html.twig' %}
{% do script(['app/js/index/index.js']) %}
{% block content %}
    {% cache 'jianmo/home/top/banner' 600 %}
    {{ block_show('jianmo:home_top_banner') }}
    {% endcache %}
    {% for config in themeConfig.blocks.left|default([]) %}
        {% set code = config.code %}
        {% if config.sortName|default('') == 'recommended' and code == 'category-course' %}
            {% set code = 'recommend-course' %}
        {% endif %}
        {% set isPlugin = config.isPlugin|default(0) %}

        {% set category = config.categoryId|default(0) ? data('Category', {categoryId: config.categoryId})  : null %}

        {% if isPlugin and is_plugin_installed(config.pluginName) %}
          {% include config.show with {config:config, category: category} %}
        {% elseif not isPlugin %}
          {% if code == 'friend-link' %}
              {% include 'default/' ~ code ~ '.html.twig' with {friendlyLinks:friendlyLinks} %}
          {% elseif code != 'footer-link' %}
              {% if code != 'course-grid-with-condition-index' %}
                  {% cache 'jianmo/default/' ~ code 600 %}
                  {% include 'default/' ~ code ~ '.html.twig' with {config:config, category: category} %}
                  {% endcache %}
              {% else %}
                  {% include 'default/' ~ code ~ '.html.twig' with {config:config, category: category} %}
              {% endif %}
          {% endif %}
        {% endif %}
    {% endfor %}
{% endblock %}", "default/index.html.twig", "/var/www/bootcamp/chenlong/project-it-migrant-workers/app/Resources/views/default/index.html.twig");
    }
}
