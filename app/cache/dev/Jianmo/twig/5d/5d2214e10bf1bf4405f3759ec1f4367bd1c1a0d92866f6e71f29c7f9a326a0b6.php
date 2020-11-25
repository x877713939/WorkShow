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

/* macro.html.twig */
class __TwigTemplate_2589ca9d57f6d65386f03dbab47db80798f78694873ef85db08b57e6897bcec0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "macro.html.twig"));

        // line 83
        echo "
";
        // line 106
        echo "
";
        // line 127
        echo "
";
        // line 149
        echo "
";
        // line 172
        echo "
";
        // line 176
        echo "
";
        // line 193
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function getuser_avatar($__user__ = null, $__class__ = null, $__imgClass__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "class" => $__class__,
            "imgClass" => $__imgClass__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_avatar"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_avatar"));

            // line 3
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 4
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo " ";
                if ((($context["card"] ?? $this->getContext($context, "card")) &&  !(($this->getAttribute(($context["user"] ?? null), "destroyed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), "destroyed", []), 0)) : (0)))) {
                    echo "js-user-card";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", ["userId" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", []), "html", null, true);
                echo "\">
      ";
                // line 5
                if ((($context["imgClass"] ?? $this->getContext($context, "imgClass")) == "avatar-md")) {
                    // line 6
                    echo "        ";
                    $context["avatarType"] = "medium";
                    // line 7
                    echo "      ";
                } elseif ((($context["imgClass"] ?? $this->getContext($context, "imgClass")) == "avatar-lg")) {
                    // line 8
                    echo "        ";
                    $context["avatarType"] = "large";
                    // line 9
                    echo "      ";
                } else {
                    // line 10
                    echo "        ";
                    $context["avatarType"] = "small";
                    // line 11
                    echo "      ";
                }
                // line 12
                echo "    <img class=\"";
                echo twig_escape_filter($this->env, (((isset($context["imgClass"]) || array_key_exists("imgClass", $context))) ? (_twig_default_filter(($context["imgClass"] ?? $this->getContext($context, "imgClass")), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath(($context["user"] ?? $this->getContext($context, "user")), ($context["avatarType"] ?? $this->getContext($context, "avatarType"))), "html", null, true);
                echo "\">

  </a>
  ";
            } else {
                // line 16
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"javascript:;\">
      <img class=\"";
                // line 17
                echo twig_escape_filter($this->env, (((isset($context["imgClass"]) || array_key_exists("imgClass", $context))) ? (_twig_default_filter(($context["imgClass"] ?? $this->getContext($context, "imgClass")), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath("", "small"), "html", null, true);
                echo "\">
    </a>
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

    // line 23
    public function getuser_avatar_link($__user__ = null, $__size__ = null, $__options__ = [], ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "size" => $__size__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_avatar_link"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_avatar_link"));

            // line 24
            $context["size"] = (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter(($context["size"] ?? $this->getContext($context, "size")), "small")) : ("small"));
            // line 25
            echo "  ";
            if ((($context["user"] ?? $this->getContext($context, "user")) &&  !(($this->getAttribute(($context["user"] ?? null), "destroyed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), "destroyed", []), 0)) : (0)))) {
                // line 26
                echo "    <a
      class=\"avatar-link-";
                // line 27
                echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
                echo " ";
                if (twig_in_filter("card", ($context["options"] ?? $this->getContext($context, "options")))) {
                    echo "js-user-card";
                }
                echo "\"
      ";
                // line 28
                if (twig_in_filter("_blank", ($context["options"] ?? $this->getContext($context, "options")))) {
                    // line 29
                    echo "        target=\"_blank\"
      ";
                }
                // line 31
                echo "      href=\"";
                if (twig_in_filter("null_link", ($context["options"] ?? $this->getContext($context, "options")))) {
                    echo "javascript:;";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
                }
                echo "\"
      data-card-url=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", ["userId" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
                echo "\"
      data-user-id=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", []), "html", null, true);
                echo "\">
      ";
                // line 34
                echo $this->getAttribute($this, "user_avater_img", [0 => ($context["user"] ?? $this->getContext($context, "user")), 1 => ($context["size"] ?? $this->getContext($context, "size"))], "method");
                echo "
    </a>
  ";
            } else {
                // line 37
                echo "    <a class=\"avatar-link-";
                echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
                echo "\" href=\"javascript:;\">
      ";
                // line 38
                echo $this->getAttribute($this, "user_avater_img", [0 => ($context["user"] ?? $this->getContext($context, "user")), 1 => ($context["size"] ?? $this->getContext($context, "size"))], "method");
                echo "
    </a>
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

    // line 43
    public function getuser_avater_img($__user__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_avater_img"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_avater_img"));

            // line 44
            echo "<img class=\"avatar-";
            echo twig_escape_filter($this->env, ($context["size"] ?? $this->getContext($context, "size")), "html", null, true);
            echo "\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->avatarPath(($context["user"] ?? $this->getContext($context, "user")), ($context["size"] ?? $this->getContext($context, "size"))), "html", null, true);
            echo "\">";
            
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

    // line 58
    public function getuser_link($__user__ = null, $__class__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "user" => $__user__,
            "class" => $__class__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_link"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "user_link"));

            // line 59
            if (($context["user"] ?? $this->getContext($context, "user"))) {
                // line 60
                echo "    ";
                if ( !(($this->getAttribute(($context["user"] ?? null), "destroyed", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["user"] ?? null), "destroyed", []), 0)) : (0))) {
                    // line 61
                    echo "      <a class=\"link-dark ";
                    echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", ["id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", [])]), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "nickname", []), "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 63
                    echo "      ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.user_had_destroyed"), "html", null, true);
                    echo "
    ";
                }
                // line 65
                echo "  ";
            } else {
                // line 66
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"javascript:;\"><del>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.not_exist"), "html", null, true);
                echo "</del></a>
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

    // line 70
    public function getflash_messages($__isUseNew__ = false, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "isUseNew" => $__isUseNew__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "flash_messages"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "flash_messages"));

            // line 71
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashbag", []), "all", [], "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 72
                echo "    ";
                if (("currentThrowedException" != $context["type"])) {
                    // line 73
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                        // line 74
                        echo "        ";
                        if (($context["isUseNew"] ?? $this->getContext($context, "isUseNew"))) {
                            // line 75
                            echo "          <div class=\"alert cd-alert cd-alert-";
                            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                            echo "\">";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]);
                            echo "</div>
        ";
                        } else {
                            // line 77
                            echo "          <div class=\"alert alert-";
                            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                            echo "\">";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["flashMessage"]);
                            echo "</div>
        ";
                        }
                        // line 79
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 80
                    echo "    ";
                }
                // line 81
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
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

    // line 84
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

            // line 85
            echo "  ";
            ob_start();
            // line 86
            echo "
      ";
            // line 87
            $context["kilobyte"] = 1024;
            // line 88
            echo "      ";
            $context["megabyte"] = (($context["kilobyte"] ?? $this->getContext($context, "kilobyte")) * 1024);
            // line 89
            echo "      ";
            $context["gigabyte"] = (($context["megabyte"] ?? $this->getContext($context, "megabyte")) * 1024);
            // line 90
            echo "      ";
            $context["terabyte"] = (($context["gigabyte"] ?? $this->getContext($context, "gigabyte")) * 1024);
            // line 91
            echo "
      ";
            // line 92
            if ((($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["kilobyte"] ?? $this->getContext($context, "kilobyte")))) {
                // line 93
                echo "          ";
                echo twig_escape_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) . " B"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 94
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["megabyte"] ?? $this->getContext($context, "megabyte")))) {
                // line 95
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["kilobyte"] ?? $this->getContext($context, "kilobyte"))), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 96
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["gigabyte"] ?? $this->getContext($context, "gigabyte")))) {
                // line 97
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["megabyte"] ?? $this->getContext($context, "megabyte"))), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 98
($context["bytes"] ?? $this->getContext($context, "bytes")) < ($context["terabyte"] ?? $this->getContext($context, "terabyte")))) {
                // line 99
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["gigabyte"] ?? $this->getContext($context, "gigabyte"))), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 101
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, (($context["bytes"] ?? $this->getContext($context, "bytes")) / ($context["terabyte"] ?? $this->getContext($context, "terabyte"))), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 103
            echo "
  ";
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

    // line 107
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

            // line 108
            echo "  ";
            if (((((isset($context["paginator"]) || array_key_exists("paginator", $context))) ? (_twig_default_filter(($context["paginator"] ?? $this->getContext($context, "paginator")))) : ("")) && ($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", []) > 1))) {
                // line 109
                echo "    <nav class=\" ";
                echo twig_escape_filter($this->env, (((isset($context["class"]) || array_key_exists("class", $context))) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination cd-pagination\">
        ";
                // line 111
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", []))) {
                    // line 112
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", [])], "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li><a  href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", [])], "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        ";
                }
                // line 115
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "pages", []));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 116
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
                // line 118
                echo "
        ";
                // line 119
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", []))) {
                    // line 120
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", [])], "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li><a  href=\"";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", [], "method")], "method"), "html", null, true);
                    echo "\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        ";
                }
                // line 123
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

    // line 128
    public function getstar($__score__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "score" => $__score__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "star"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "star"));

            // line 129
            echo "  ";
            $context["floorScore"] = twig_round(($context["score"] ?? $this->getContext($context, "score")), 0, "floor");
            // line 130
            echo "  ";
            $context["emptyNum"] = (5 - ($context["floorScore"] ?? $this->getContext($context, "floorScore")));
            // line 131
            echo "
  ";
            // line 132
            if ((($context["floorScore"] ?? $this->getContext($context, "floorScore")) > 0)) {
                // line 133
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["floorScore"] ?? $this->getContext($context, "floorScore"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 134
                    echo "      <i class=\"es-icon es-icon-star color-warning\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "  ";
            }
            // line 137
            echo "
  ";
            // line 138
            if (((($context["score"] ?? $this->getContext($context, "score")) - ($context["floorScore"] ?? $this->getContext($context, "floorScore"))) >= 0.5)) {
                // line 139
                echo "    ";
                $context["emptyNum"] = (($context["emptyNum"] ?? $this->getContext($context, "emptyNum")) - 1);
                // line 140
                echo "    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  ";
            }
            // line 142
            echo "
  ";
            // line 143
            if ((($context["emptyNum"] ?? $this->getContext($context, "emptyNum")) > 0)) {
                // line 144
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($context["emptyNum"] ?? $this->getContext($context, "emptyNum"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 145
                    echo "      <i class=\"es-icon es-icon-staroutline\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "  ";
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

    // line 150
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

            // line 151
            echo "  <input class=\"js-page\" type=\"hidden\" name=\"page\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["paginator"] ?? null), "currentPage", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["paginator"] ?? null), "currentPage", []), 1)) : (1)), "html", null, true);
            echo "\">

  ";
            // line 153
            if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", []) > 1)) {
                // line 154
                echo "    <nav class=\"";
                echo twig_escape_filter($this->env, (((isset($context["class"]) || array_key_exists("class", $context))) ? (_twig_default_filter(($context["class"] ?? $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination cd-pagination\">
        ";
                // line 156
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", []))) {
                    // line 157
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", [])], "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "firstPage", []), "html", null, true);
                    echo "\"><a href=\"javascript:;\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li data-url=\"";
                    // line 158
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", [])], "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "previousPage", []), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        ";
                }
                // line 160
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "pages", []));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 161
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []))) {
                        echo "class=\"active\"";
                    }
                    echo " data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $context["page"]], "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "\"><a href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 163
                echo "
        ";
                // line 164
                if (($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", []) != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "lastPage", []))) {
                    // line 165
                    echo "          <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", [])], "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nextPage", []), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li data-url=\"";
                    // line 166
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getPageUrl", [0 => $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", [])], "method"), "html", null, true);
                    echo "\" data-page=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "getLastPage", []), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        ";
                }
                // line 168
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

    // line 173
    public function getlink($__name__ = null, $__url__ = null, $__title__ = "", $__target__ = "_blnak", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "url" => $__url__,
            "title" => $__title__,
            "target" => $__target__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "link"));

            // line 174
            echo "  <a href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
            echo "\" title= \"";
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, ($context["target"] ?? $this->getContext($context, "target")), "html", null, true);
            echo "\"><strong>";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "</strong></a>
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

    // line 177
    public function gettable_filter($__header__ = null, $__choices__ = null, $__key__ = null, $__dataTarget__ = null, $__selectedChoice__ = null, $__default__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "header" => $__header__,
            "choices" => $__choices__,
            "key" => $__key__,
            "dataTarget" => $__dataTarget__,
            "selectedChoice" => $__selectedChoice__,
            "default" => $__default__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_filter"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "table_filter"));

            // line 178
            echo "  <div class=\"cd-dropdown cd-dropdown-filter\" data-toggle=\"cd-dropdown\">
    ";
            // line 179
            echo twig_escape_filter($this->env, ($context["header"] ?? $this->getContext($context, "header")), "html", null, true);
            echo "
    <a href=\"javascript:;\" class=\"";
            // line 180
            if ((($context["selectedChoice"] ?? $this->getContext($context, "selectedChoice")) == "")) {
                echo "cd-link-assist";
            } else {
                echo "cd-link-primary";
            }
            echo "\">
      <i class=\"cd-icon cd-icon-filter cd-text-sm\"></i>
    </a>
    <ul class=\"dropdown-menu\">
      ";
            // line 184
            if (($context["default"] ?? $this->getContext($context, "default"))) {
                // line 185
                echo "        <li class=\"";
                if ((($context["selectedChoice"] ?? $this->getContext($context, "selectedChoice")) == "")) {
                    echo "active";
                }
                echo "\"><a href=\"javascript:;\" data-toggle=\"cd-table-filter\" data-target=\"";
                echo twig_escape_filter($this->env, ($context["dataTarget"] ?? $this->getContext($context, "dataTarget")), "html", null, true);
                echo "\" data-filter-key=\"";
                echo twig_escape_filter($this->env, ($context["key"] ?? $this->getContext($context, "key")), "html", null, true);
                echo "\" data-filter-value=\"\">";
                echo twig_escape_filter($this->env, ($context["default"] ?? $this->getContext($context, "default")), "html", null, true);
                echo "</a></li>
      ";
            }
            // line 187
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["choiceKey"] => $context["choice"]) {
                // line 188
                echo "        <li class=\"";
                if ((($context["selectedChoice"] ?? $this->getContext($context, "selectedChoice")) == $context["choiceKey"])) {
                    echo "active";
                }
                echo "\"><a href=\"javascript:;\" data-toggle=\"cd-table-filter\" data-target=\"";
                echo twig_escape_filter($this->env, ($context["dataTarget"] ?? $this->getContext($context, "dataTarget")), "html", null, true);
                echo "\" data-filter-key=\"";
                echo twig_escape_filter($this->env, ($context["key"] ?? $this->getContext($context, "key")), "html", null, true);
                echo "\"  data-filter-value=\"";
                echo twig_escape_filter($this->env, $context["choiceKey"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["choice"], "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['choiceKey'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "    </ul>
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

    // line 194
    public function getcd_select($__options__ = null, $__checkedOption__ = null, $__name__ = null, $__className__ = "", $__id__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "checkedOption" => $__checkedOption__,
            "name" => $__name__,
            "className" => $__className__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "cd_select"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "cd_select"));

            // line 195
            echo "  <div class=\"cd-select ";
            echo twig_escape_filter($this->env, ($context["className"] ?? $this->getContext($context, "className")), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\">
    <input type=\"hidden\" value=\"";
            // line 196
            echo twig_escape_filter($this->env, ($context["checkedOption"] ?? $this->getContext($context, "checkedOption")), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\" />
    <div class=\"select-value\">";
            // line 197
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["options"] ?? null), ($context["checkedOption"] ?? $this->getContext($context, "checkedOption")), [], "array", true, true)) ? (_twig_default_filter($this->getAttribute(($context["options"] ?? null), ($context["checkedOption"] ?? $this->getContext($context, "checkedOption")), [], "array"), "")) : ("")), "html", null, true);
            echo "</div>
    <ul class=\"select-options\">
      ";
            // line 199
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
            foreach ($context['_seq'] as $context["optionKey"] => $context["option"]) {
                // line 200
                echo "        <li class=\"";
                if (($context["optionKey"] == ($context["checkedOption"] ?? $this->getContext($context, "checkedOption")))) {
                    echo "checked";
                }
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, $context["optionKey"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['optionKey'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "    </ul>
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
        return "macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1077 => 202,  1062 => 200,  1058 => 199,  1053 => 197,  1047 => 196,  1040 => 195,  1018 => 194,  995 => 190,  976 => 188,  971 => 187,  957 => 185,  955 => 184,  944 => 180,  940 => 179,  937 => 178,  914 => 177,  884 => 174,  863 => 173,  839 => 168,  832 => 166,  825 => 165,  823 => 164,  820 => 163,  803 => 161,  798 => 160,  791 => 158,  784 => 157,  782 => 156,  776 => 154,  774 => 153,  768 => 151,  749 => 150,  727 => 147,  720 => 145,  715 => 144,  713 => 143,  710 => 142,  706 => 140,  703 => 139,  701 => 138,  698 => 137,  695 => 136,  688 => 134,  683 => 133,  681 => 132,  678 => 131,  675 => 130,  672 => 129,  654 => 128,  630 => 123,  625 => 121,  620 => 120,  618 => 119,  615 => 118,  600 => 116,  595 => 115,  590 => 113,  585 => 112,  583 => 111,  577 => 109,  574 => 108,  555 => 107,  532 => 103,  526 => 101,  520 => 99,  518 => 98,  513 => 97,  511 => 96,  506 => 95,  504 => 94,  499 => 93,  497 => 92,  494 => 91,  491 => 90,  488 => 89,  485 => 88,  483 => 87,  480 => 86,  477 => 85,  459 => 84,  434 => 81,  431 => 80,  425 => 79,  417 => 77,  409 => 75,  406 => 74,  401 => 73,  398 => 72,  393 => 71,  375 => 70,  348 => 66,  345 => 65,  339 => 63,  329 => 61,  326 => 60,  324 => 59,  304 => 58,  279 => 44,  260 => 43,  235 => 38,  230 => 37,  224 => 34,  220 => 33,  216 => 32,  207 => 31,  203 => 29,  201 => 28,  193 => 27,  190 => 26,  187 => 25,  185 => 24,  165 => 23,  138 => 17,  133 => 16,  123 => 12,  120 => 11,  117 => 10,  114 => 9,  111 => 8,  108 => 7,  105 => 6,  103 => 5,  88 => 4,  86 => 3,  65 => 2,  54 => 193,  51 => 176,  48 => 172,  45 => 149,  42 => 127,  39 => 106,  36 => 83,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# user_avater 已废弃，请勿使用 #}
{%- macro user_avatar(user, class, imgClass, card = true) -%}
  {% if user %}
    <a class=\"{{ class }} {% if card and not user.destroyed|default(0) %}js-user-card{% endif %}\" href=\"{{ path('user_show', {id:user.id}) }}\" data-card-url=\"{{ path('user_card_show', {userId:user.id}) }}\" data-user-id=\"{{ user.id }}\">
      {% if imgClass == 'avatar-md' %}
        {% set avatarType = 'medium' %}
      {% elseif imgClass == 'avatar-lg' %}
        {% set avatarType = 'large' %}
      {% else %}
        {% set avatarType = 'small' %}
      {% endif %}
    <img class=\"{{ imgClass|default('avatar-sm') }}\" src=\"{{ avatar_path(user, avatarType) }}\">

  </a>
  {% else %}
    <a class=\"{{ class }}\" href=\"javascript:;\">
      <img class=\"{{ imgClass|default('avatar-sm') }}\"  src=\"{{ avatar_path('', 'small') }}\">
    </a>
  {% endif %}
{%- endmacro -%}

{# options 可以传card(显示卡片), _blank(新开窗口), null_link(空链接) #}
{%- macro user_avatar_link(user, size, options = []) -%}
  {% set size = size|default('small') %}
  {% if user and not user.destroyed|default(0) %}
    <a
      class=\"avatar-link-{{ size }} {% if 'card' in options %}js-user-card{% endif %}\"
      {% if '_blank' in options %}
        target=\"_blank\"
      {% endif %}
      href=\"{% if 'null_link' in options %}javascript:;{% else %}{{ path('user_show', {id:user.id}) }}{% endif %}\"
      data-card-url=\"{{ path('user_card_show', {userId:user.id}) }}\"
      data-user-id=\"{{ user.id }}\">
      {{ _self.user_avater_img(user, size) }}
    </a>
  {% else %}
    <a class=\"avatar-link-{{ size }}\" href=\"javascript:;\">
      {{ _self.user_avater_img(user, size) }}
    </a>
  {% endif %}
{%- endmacro -%}

{%- macro user_avater_img(user, size) -%}
  <img class=\"avatar-{{ size }}\"  src=\"{{ avatar_path(user, size) }}\">
{%- endmacro -%}


{# {%- macro user_link(user, class, options = []) -%}
  {% if user %}
    <a
      class=\"{{ class }} {% if 'card' in options %}js-user-card{% endif %}\" {% if '_blank' in options %} target=\"_blank\" {% endif %}href=\"{{ path('user_show', {id:user.id}) }}\">{{ user.nickname }}
    </a>
  {% else %}
    <a class=\"{{ class }}\" href=\"javascript:;\"><del>用户不存在</del></a>
  {% endif %}
{%- endmacro -%} #}

{%- macro user_link(user, class, card = true) -%}
  {% if user %}
    {% if not user.destroyed|default(0) %}
      <a class=\"link-dark {{ class }}\" href=\"{{ path('user_show', {id:user.id}) }}\" target=\"_blank\">{{ user.nickname }}</a>
    {% else %}
      {{ 'user.user_had_destroyed'|trans }}
    {% endif %}
  {% else %}
    <a class=\"link-dark {{ class }}\" href=\"javascript:;\"><del>{{'user.not_exist'|trans}}</del></a>
  {% endif %}
{%- endmacro -%}

{% macro flash_messages(isUseNew = false) %}
  {% for type, flashMessages in app.session.flashbag.all() %}
    {% if 'currentThrowedException' != type %}
      {% for flashMessage in flashMessages %}
        {% if isUseNew %}
          <div class=\"alert cd-alert cd-alert-{{ type }}\">{{ flashMessage|trans|raw }}</div>
        {% else %}
          <div class=\"alert alert-{{ type }}\">{{ flashMessage|trans|raw }}</div>
        {% endif %}
      {% endfor %}
    {% endif %}
  {% endfor %}
{% endmacro %}

{% macro bytesToSize(bytes) %}
  {% spaceless %}

      {% set kilobyte = 1024 %}
      {% set megabyte = kilobyte * 1024 %}
      {% set gigabyte = megabyte * 1024 %}
      {% set terabyte = gigabyte * 1024 %}

      {% if bytes < kilobyte %}
          {{ bytes ~ ' B' }}
      {% elseif bytes < megabyte %}
          {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
      {% elseif bytes < gigabyte %}
          {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
      {% elseif bytes < terabyte %}
          {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
      {% else %}
          {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
      {% endif %}

  {% endspaceless %}
{% endmacro %}

{% macro paginator(paginator, class) %}
  {% if paginator|default() and paginator.lastPage > 1 %}
    <nav class=\" {{ class|default('text-center') }}\">
      <ul class=\"pagination cd-pagination\">
        {% if paginator.currentPage != paginator.firstPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.firstPage) }}\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.previousPage) }}\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        {% endif %}
        {% for page in paginator.pages %}
          <li {% if page == paginator.currentPage %}class=\"active\"{% endif %}><a href=\"{{ paginator.getPageUrl(page) }}\">{{ page }}</a></li>
        {% endfor %}

        {% if paginator.currentPage != paginator.lastPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.nextPage) }}\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.getLastPage()) }}\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        {% endif %}
      </ul>
    </nav>
  {% endif %}
{% endmacro %}

{% macro star(score) %}
  {% set floorScore = score|round(0, 'floor') %}
  {% set emptyNum = 5 - floorScore %}

  {% if floorScore > 0 %}
    {% for i in range(1, floorScore) %}
      <i class=\"es-icon es-icon-star color-warning\"></i>
    {% endfor %}
  {% endif %}

  {% if (score - floorScore) >= 0.5 %}
    {% set emptyNum = emptyNum - 1 %}
    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  {% endif %}

  {% if emptyNum > 0 %}
    {% for i in range(1, emptyNum) %}
      <i class=\"es-icon es-icon-staroutline\"></i>
    {% endfor %}
  {% endif %}
{% endmacro %}

{% macro ajax_paginator(paginator, class)  %}
  <input class=\"js-page\" type=\"hidden\" name=\"page\" value=\"{{ paginator.currentPage|default(1) }}\">

  {% if paginator.lastPage > 1 %}
    <nav class=\"{{ class|default('text-center') }}\">
      <ul class=\"pagination cd-pagination\">
        {% if paginator.currentPage != paginator.firstPage %}
          <li data-url=\"{{ paginator.getPageUrl(paginator.firstPage) }}\" data-page=\"{{paginator.firstPage}}\"><a href=\"javascript:;\"><i class=\"cd-icon cd-icon-first-page\"></i></a></li>
          <li data-url=\"{{ paginator.getPageUrl(paginator.previousPage) }}\" data-page=\"{{paginator.previousPage}}\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-left\"></i></a></li>
        {% endif %}
        {% for page in paginator.pages %}
          <li {% if page == paginator.currentPage %}class=\"active\"{% endif %} data-url=\"{{ paginator.getPageUrl(page) }}\" data-page=\"{{page}}\"><a href=\"javascript:;\">{{ page }}</a></li>
        {% endfor %}

        {% if paginator.currentPage != paginator.lastPage %}
          <li data-url=\"{{ paginator.getPageUrl(paginator.nextPage) }}\" data-page=\"{{paginator.nextPage}}\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-arrow-right\"></i></a></li>
          <li data-url=\"{{ paginator.getPageUrl(paginator.getLastPage) }}\" data-page=\"{{paginator.getLastPage}}\"><a  href=\"javascript:;\"><i class=\"cd-icon cd-icon-last-page\"></i></a></li>
        {% endif %}
      </ul>
    </nav>
  {% endif %}
{% endmacro %}

{% macro link(name, url, title = '', target = '_blnak') %}
  <a href=\"{{ url }}\" title= \"{{ title }}\" target=\"{{ target }}\"><strong>{{ name }}</strong></a>
{% endmacro %}

{% macro table_filter(header, choices, key, dataTarget, selectedChoice, default = '') %}
  <div class=\"cd-dropdown cd-dropdown-filter\" data-toggle=\"cd-dropdown\">
    {{ header }}
    <a href=\"javascript:;\" class=\"{% if selectedChoice == '' %}cd-link-assist{% else %}cd-link-primary{% endif %}\">
      <i class=\"cd-icon cd-icon-filter cd-text-sm\"></i>
    </a>
    <ul class=\"dropdown-menu\">
      {% if default %}
        <li class=\"{% if selectedChoice == '' %}active{% endif %}\"><a href=\"javascript:;\" data-toggle=\"cd-table-filter\" data-target=\"{{ dataTarget }}\" data-filter-key=\"{{ key }}\" data-filter-value=\"\">{{ default }}</a></li>
      {% endif %}
      {% for choiceKey,choice in choices %}
        <li class=\"{% if selectedChoice == choiceKey %}active{% endif %}\"><a href=\"javascript:;\" data-toggle=\"cd-table-filter\" data-target=\"{{ dataTarget }}\" data-filter-key=\"{{ key }}\"  data-filter-value=\"{{ choiceKey }}\">{{ choice }}</a></li>
      {% endfor %}
    </ul>
  </div>
{% endmacro %}

{% macro cd_select(options, checkedOption, name, className = '', id = '') %}
  <div class=\"cd-select {{ className }}\" id=\"{{ id }}\">
    <input type=\"hidden\" value=\"{{ checkedOption }}\" name=\"{{name}}\" />
    <div class=\"select-value\">{{ options[checkedOption]|default('') }}</div>
    <ul class=\"select-options\">
      {% for optionKey, option in options %}
        <li class=\"{% if optionKey == checkedOption %}checked{% endif %}\" data-value=\"{{optionKey}}\">{{ option }}</li>
      {% endfor %}
    </ul>
  </div>
{% endmacro %}", "macro.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/macro.html.twig");
    }
}
