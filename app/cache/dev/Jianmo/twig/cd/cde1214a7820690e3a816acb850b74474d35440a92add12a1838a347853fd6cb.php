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

/* admin-v2/macro.html.twig */
class __TwigTemplate_87950aec0e9540d689ae493e473adf2d4464e3688ec63876c74da2e8b1814656 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/macro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/macro.html.twig"));

        // line 8
        echo "
";
        // line 31
        echo "
";
        // line 63
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function getuser_link($__user__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_link"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_link"));

            // line 2
            echo "  ";
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 3
                echo "\t\t<a ";
                if (($context["class"] ?? $this->getContext($context, "class"))) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                    echo "\"";
                }
                echo " href=\"javascript:;\" role=\"show-user\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_v2_user_show", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nickname", []), "html", null, true);
                echo "</a>
\t";
            } else {
                // line 5
                echo "\t  <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.macro.user_link.user_empty"), "html", null, true);
                echo "</span>
\t";
            }
            
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

    // line 9
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "bytesToSize"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "bytesToSize"));

            // line 10
            echo "\t";
            ob_start();
            // line 11
            echo "\t    
\t    ";
            // line 12
            $context["kilobyte"] = 1024;
            // line 13
            echo "\t    ";
            $context["megabyte"] = (($context["kilobyte"] ?? $this->getContext($context, "kilobyte")) * 1024);
            // line 14
            echo "\t    ";
            $context["gigabyte"] = (($context["megabyte"] ?? $this->getContext($context, "megabyte")) * 1024);
            // line 15
            echo "\t    ";
            $context["terabyte"] = (($context["gigabyte"] ?? $this->getContext($context, "gigabyte")) * 1024);
            // line 16
            echo "
\t    ";
            // line 17
            if ((($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["kilobyte"] ?? $this->getContext($context, "kilobyte")))) {
                // line 18
                echo "\t        ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) . " B"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 19
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["megabyte"] ?? $this->getContext($context, "megabyte")))) {
                // line 20
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["kilobyte"] ?? $this->getContext($context, "kilobyte"))), 2, ".") . " KB"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 21
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["gigabyte"] ?? $this->getContext($context, "gigabyte")))) {
                // line 22
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["megabyte"] ?? $this->getContext($context, "megabyte"))), 2, ".") . " MB"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 23
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["terabyte"] ?? $this->getContext($context, "terabyte")))) {
                // line 24
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["gigabyte"] ?? $this->getContext($context, "gigabyte"))), 2, ".") . " GB"), "html", null, true);
                echo "
\t    ";
            } else {
                // line 26
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["terabyte"] ?? $this->getContext($context, "terabyte"))), 2, ".") . " TB"), "html", null, true);
                echo "
\t    ";
            }
            // line 28
            echo "
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
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

    // line 32
    public function getpaginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "paginator"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "paginator"));

            // line 33
            echo "  ";
            if (((($this->getAttribute(($context["paginator"] ?? null), "lastPage", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["paginator"] ?? null), "lastPage", []))) : ("")) > 1)) {
                // line 34
                echo "    <nav class=\"admin-pagination ";
                echo twig_escape_filter($this->env, (((isset($context["class"]) || array_key_exists("class", $context))) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 36
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", []))) {
                    // line 37
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", [])], "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.firstPage"), "html", null, true);
                    echo "</a></li>
          <li><a  href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", [])], "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        ";
                }
                // line 40
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "pages", []));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 41
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $context["page"]], "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "
        ";
                // line 44
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", []))) {
                    // line 45
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", [])], "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", [], "method")], "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.endPage"), "html", null, true);
                    echo "</a></li>
        ";
                }
                // line 48
                echo "      </ul>
      <span class=\"page-num\">
\t\t\t\t";
                // line 50
                echo twig_escape_filter($this->env, ((($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) - 1) * $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "perPageCount", [])) + 1), "html", null, true);
                echo "
      \t-
\t      ";
                // line 52
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", []))) {
                    // line 53
                    echo "\t        ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "itemCount", []), "html", null, true);
                    echo "
\t      ";
                } else {
                    // line 55
                    echo "\t        ";
                    echo twig_escape_filter($this->env, ($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) * $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "perPageCount", [])), "html", null, true);
                    echo "
\t      ";
                }
                // line 57
                echo "\t      / ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "itemCount", []), "html", null, true);
                echo "
\t    </span>
    </nav>
    
  ";
            }
            
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

    // line 64
    public function getajax_paginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "ajax_paginator"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "ajax_paginator"));

            // line 65
            echo "  ";
            if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", []) > 1)) {
                // line 66
                echo "    <nav class=\"admin-pagination ";
                echo twig_escape_filter($this->env, (((isset($context["class"]) || array_key_exists("class", $context))) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 68
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", []))) {
                    // line 69
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", [])], "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", []), "html", null, true);
                    echo "\"><span style=\"cursor:pointer;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.firstPage"), "html", null, true);
                    echo "</span></li>
          <li data-url=\"";
                    // line 70
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", [])], "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", []), "html", null, true);
                    echo "\"><span style=\"cursor:pointer;\"><i class=\"es-icon es-icon-chevronleft\"></i></span></li>
        ";
                }
                // line 72
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "pages", []));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 73
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []))) {
                        echo "class=\"active\"";
                    }
                    echo " data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $context["page"]], "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "\"><span style=\"cursor:pointer;\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "
        ";
                // line 76
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", []))) {
                    // line 77
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", [])], "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", []), "html", null, true);
                    echo "\"><span style=\"cursor:pointer;\"><i class=\"es-icon es-icon-chevronright\"></i></span></li>
          <li data-url=\"";
                    // line 78
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", [])], "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", []), "html", null, true);
                    echo "\"><span style=\"cursor:pointer;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("paginator.endPage"), "html", null, true);
                    echo "</span></li>
        ";
                }
                // line 80
                echo "      </ul>
    </nav>
  ";
            }
            
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
        return "admin-v2/macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 80,  420 => 78,  413 => 77,  411 => 76,  408 => 75,  391 => 73,  386 => 72,  379 => 70,  370 => 69,  368 => 68,  362 => 66,  359 => 65,  340 => 64,  312 => 57,  306 => 55,  300 => 53,  298 => 52,  293 => 50,  289 => 48,  282 => 46,  277 => 45,  275 => 44,  272 => 43,  257 => 41,  252 => 40,  247 => 38,  240 => 37,  238 => 36,  232 => 34,  229 => 33,  210 => 32,  187 => 28,  181 => 26,  175 => 24,  173 => 23,  168 => 22,  166 => 21,  161 => 20,  159 => 19,  154 => 18,  152 => 17,  149 => 16,  146 => 15,  143 => 14,  140 => 13,  138 => 12,  135 => 11,  132 => 10,  114 => 9,  89 => 5,  75 => 3,  72 => 2,  53 => 1,  42 => 63,  39 => 31,  36 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% macro user_link(user, class) %}
  {% if user %}
\t\t<a {% if class %}class=\"{{ class }}\"{% endif %} href=\"javascript:;\" role=\"show-user\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ url('admin_v2_user_show', {id:user.id}) }}\">{{ user.nickname }}</a>
\t{% else %}
\t  <span class=\"text-muted\">{{'admin.macro.user_link.user_empty'|trans}}</span>
\t{% endif %}
{% endmacro %}

{% macro bytesToSize(bytes) %}
\t{% spaceless %}
\t    
\t    {% set kilobyte = 1024 %}
\t    {% set megabyte = kilobyte * 1024 %}
\t    {% set gigabyte = megabyte * 1024 %}
\t    {% set terabyte = gigabyte * 1024 %}

\t    {% if bytes < kilobyte %}
\t        {{ bytes ~ ' B' }}
\t    {% elseif bytes < megabyte %}
\t        {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
\t    {% elseif bytes < gigabyte %}
\t        {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
\t    {% elseif bytes < terabyte %}
\t        {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
\t    {% else %}
\t        {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
\t    {% endif %}

\t{% endspaceless %}
{% endmacro %}

{% macro paginator(paginator, class) %}
  {% if paginator.lastPage|default() > 1 %}
    <nav class=\"admin-pagination {{ class|default('text-center') }}\">
      <ul class=\"pagination\">
        {% if paginator.currentPage != paginator.firstPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.firstPage) }}\">{{ 'paginator.firstPage'|trans }}</a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.previousPage) }}\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        {% endif %}
        {% for page in paginator.pages %}
          <li {% if page == paginator.currentPage %}class=\"active\"{% endif %}><a href=\"{{ paginator.getPageUrl(page) }}\">{{ page }}</a></li>
        {% endfor %}

        {% if paginator.currentPage != paginator.lastPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.nextPage) }}\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.getLastPage()) }}\">{{ 'paginator.endPage'|trans }}</a></li>
        {% endif %}
      </ul>
      <span class=\"page-num\">
\t\t\t\t{{ (paginator.currentPage - 1) * paginator.perPageCount + 1 }}
      \t-
\t      {% if paginator.currentPage == paginator.lastPage %}
\t        {{ paginator.itemCount }}
\t      {% else %}
\t        {{ paginator.currentPage * paginator.perPageCount }}
\t      {% endif %}
\t      / {{ paginator.itemCount }}
\t    </span>
    </nav>
    
  {% endif %}
{% endmacro %}

{% macro ajax_paginator(paginator, class)  %}
  {% if paginator.lastPage > 1 %}
    <nav class=\"admin-pagination {{ class|default('text-center') }}\">
      <ul class=\"pagination\">
        {% if paginator.currentPage != paginator.firstPage %}
          <li data-url=\"{{ paginator.getPageUrl(paginator.firstPage) }}\" data-page=\"{{paginator.firstPage}}\"><span style=\"cursor:pointer;\">{{ 'paginator.firstPage'|trans }}</span></li>
          <li data-url=\"{{ paginator.getPageUrl(paginator.previousPage) }}\" data-page=\"{{paginator.previousPage}}\"><span style=\"cursor:pointer;\"><i class=\"es-icon es-icon-chevronleft\"></i></span></li>
        {% endif %}
        {% for page in paginator.pages %}
          <li {% if page == paginator.currentPage %}class=\"active\"{% endif %} data-url=\"{{ paginator.getPageUrl(page) }}\" data-page=\"{{page}}\"><span style=\"cursor:pointer;\">{{ page }}</span></li>
        {% endfor %}

        {% if paginator.currentPage != paginator.lastPage %}
          <li data-url=\"{{ paginator.getPageUrl(paginator.nextPage) }}\" data-page=\"{{paginator.nextPage}}\"><span style=\"cursor:pointer;\"><i class=\"es-icon es-icon-chevronright\"></i></span></li>
          <li data-url=\"{{ paginator.getPageUrl(paginator.getLastPage) }}\" data-page=\"{{paginator.getLastPage}}\"><span style=\"cursor:pointer;\">{{ 'paginator.endPage'|trans }}</span></li>
        {% endif %}
      </ul>
    </nav>
  {% endif %}
{% endmacro %}
", "admin-v2/macro.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/macro.html.twig");
    }
}
