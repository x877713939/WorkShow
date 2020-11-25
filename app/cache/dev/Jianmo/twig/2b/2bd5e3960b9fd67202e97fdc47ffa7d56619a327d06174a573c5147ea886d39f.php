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

/* admin-v2/system/school-information.html.twig */
class __TwigTemplate_0f1915788c7af03352aadc1d5e7de51ea4c9acf32ac8413c673c8bd30d21848b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin-v2/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/system/school-information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/system/school-information.html.twig"));

        // line 3
        $context["menu"] = "admin_v2_school_information";
        // line 5
        $context["script_controller"] = "setting/site";
        // line 1
        $this->parent = $this->loadTemplate("admin-v2/layout.html.twig", "admin-v2/system/school-information.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["web_macro"] ?? $this->getContext($context, "web_macro")), "flash_messages", [], "method"), "html", null, true);
        echo "

  <form class=\"form-horizontal\" id=\"site-form\" method=\"post\"
        data-save-url=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_school_information_save");
        echo "\">

    <fieldset>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"name\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.name"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          ";
        // line 21
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->s2b2cHasBehaviourPermission("canModifySiteName")) {
            // line 22
            echo "            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "name", []), "html", null, true);
            echo "\">
          ";
        } else {
            // line 24
            echo "            <div class=\"form-control form-control-unset-bg\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "name", []), "html", null, true);
            echo "</div>
          ";
        }
        // line 26
        echo "        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"slogan\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.slogan"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "slogan", []), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"url\">";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.url"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          ";
        // line 43
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->s2b2cHasBehaviourPermission("canModifySiteUrl")) {
            // line 44
            echo "            <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "url", []), "html", null, true);
            echo "\">
            <p class=\"help-block\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.url.help_block", ["%http%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getScheme", [], "method")]), "html", null, true);
            echo "</p>
          ";
        } else {
            // line 47
            echo "            <div class=\"form-control form-control-unset-bg\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "url", []), "html", null, true);
            echo "</div>
          ";
        }
        // line 49
        echo "        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"logo\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.logo"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          ";
        // line 57
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->s2b2cHasBehaviourPermission("canModifySiteLogo")) {
            // line 58
            echo "            <div id=\"site-logo-container\">";
            if ($this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "logo", [])) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "logo", [])), "html", null, true);
                echo "\">";
            }
            echo "</div>
            <a class=\"btn btn-default\" id=\"site-logo-upload\"
               data-upload-token=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUploadToken("system", "image"), "html", null, true);
            echo "\"
               data-goto-url=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_setting_logo_upload");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
            echo "</a>
            <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\"
                    data-url=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_setting_logo_remove");
            echo "\"
                    ";
            // line 64
            if ( !$this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "logo", [])) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
            echo "</button>
            <p class=\"help-block\">";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.logo.help_block");
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
            echo "\"
                                                                                         target=\"_blank\">";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.logo.view_btn"), "html", null, true);
            echo "</a>
            </p>
            <input type=\"hidden\" name=\"logo\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "logo", []), "html", null, true);
            echo "\">
          ";
        } else {
            // line 70
            echo "            <div id=\"site-logo-container\">";
            if ($this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "logo", [])) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "logo", [])), "html", null, true);
                echo "\">";
            }
            echo "</div>
            <a class=\"btn btn-default hidden\" id=\"site-logo-upload\">";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
            echo "</a>
            <button class=\"btn btn-default hidden\" id=\"site-logo-remove\" disabled>";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
            echo "</button>
          ";
        }
        // line 74
        echo "        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"favicon\">";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.favicon"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          ";
        // line 82
        if ($this->env->getExtension('AppBundle\Twig\WebExtension')->s2b2cHasBehaviourPermission("canModifySiteFavicon")) {
            // line 83
            echo "            <div id=\"site-favicon-container\">";
            if ($this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "favicon", [])) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "favicon", [])), "html", null, true);
                echo "\">";
            }
            echo "</div>
            <a class=\"btn btn-default\"
               id=\"site-favicon-upload\"
               data-upload-token=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->makeUploadToken("system", "image"), "html", null, true);
            echo "\"
               data-goto-url=\"";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_setting_favicon_upload");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
            echo "</a>
            <button class=\"btn btn-default\"
                    id=\"site-favicon-remove\"
                    type=\"button\" data-url=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_setting_favicon_remove");
            echo "\"
                    ";
            // line 91
            if ( !$this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "favicon", [])) {
                echo "style=\"display:none;\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
            echo "</button>
            <p class=\"help-block\">";
            // line 92
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.favicon.help_block");
            echo "</p>
            <input type=\"hidden\" name=\"favicon\" value=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "favicon", []), "html", null, true);
            echo "\">
          ";
        } else {
            // line 95
            echo "            <div id=\"site-favicon-container\">";
            if ($this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "favicon", [])) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "favicon", [])), "html", null, true);
                echo "\">";
            }
            echo "</div>
            <a class=\"btn btn-default hidden\" id=\"site-favicon-upload\">";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.upload"), "html", null, true);
            echo "</a>
            <button class=\"btn btn-default hidden\" id=\"site-favicon-remove\" disabled>";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.delete"), "html", null, true);
            echo "</button>
          ";
        }
        // line 99
        echo "        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"seo_keywords\">";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.seo_keywords"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "seo_keywords", []), "html", null, true);
        echo "\">
          <p class=\"help-block\">";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.seo_keywords.help_block"), "html", null, true);
        echo "</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"seo_description\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.seo_description"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\"
                 value=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "seo_description", []), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"copyright\">";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.copyright"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "copyright", []), "html", null, true);
        echo "\">
          <div class=\"help-block\">";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.copyright.help_block"), "html", null, true);
        echo "</div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"icp\">";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.icp"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "icp", []), "html", null, true);
        echo "\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"icpUrl\">";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.icp_url"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"icpUrl\" name=\"icpUrl\" class=\"form-control\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "icpUrl", []), "html", null, true);
        echo "\">
        </div>
      </div>

    </fieldset>

    <br>

    <fieldset>
      <legend>";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_statistics_analysis"), "html", null, true);
        echo "</legend>
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"analytics\">";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.analytics"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">

          <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "analytics", []), "html", null, true);
        echo "</textarea>
          ";
        // line 163
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.analytics.help_block");
        echo "
        </div>
      </div>
    </fieldset>

    <fieldset style=\"display:none;\">
      <legend>";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status"), "html", null, true);
        echo "</legend>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label>";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          ";
        // line 176
        echo $this->env->getExtension('AppBundle\Twig\HtmlExtension')->radios("status", ["open" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status.open"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.website_status.closed")], $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "status", []));
        echo "
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label>";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.closed_note"), "html", null, true);
        echo "</label>
        </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? $this->getContext($context, "site")), "closed_note", []), "html", null, true);
        echo "</textarea>
          <p class=\"help-block\">";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.setting.site.closed_note.help_block"), "html", null, true);
        echo "。</p>
        </div>
      </div>
    </fieldset>

    <div class=\"row form-group\">
      <div class=\"controls col-md-offset-2 col-md-8\">
        <button type=\"button\" class=\"btn btn-primary\" id=\"save-site\">";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.submit"), "html", null, true);
        echo "</button>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/system/school-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 197,  470 => 193,  460 => 186,  456 => 185,  450 => 182,  441 => 176,  435 => 173,  428 => 169,  419 => 163,  415 => 162,  408 => 158,  402 => 155,  390 => 146,  384 => 143,  375 => 137,  369 => 134,  360 => 128,  356 => 127,  350 => 124,  341 => 118,  334 => 114,  325 => 108,  321 => 107,  315 => 104,  308 => 99,  303 => 97,  299 => 96,  290 => 95,  285 => 93,  281 => 92,  273 => 91,  269 => 90,  261 => 87,  257 => 86,  246 => 83,  244 => 82,  238 => 79,  231 => 74,  226 => 72,  222 => 71,  213 => 70,  208 => 68,  203 => 66,  197 => 65,  189 => 64,  185 => 63,  178 => 61,  174 => 60,  164 => 58,  162 => 57,  156 => 54,  149 => 49,  143 => 47,  138 => 45,  133 => 44,  131 => 43,  125 => 40,  116 => 34,  110 => 31,  103 => 26,  97 => 24,  91 => 22,  89 => 21,  83 => 18,  74 => 12,  68 => 9,  65 => 8,  56 => 7,  45 => 1,  43 => 5,  41 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin-v2/layout.html.twig' %}

{% set menu = 'admin_v2_school_information' %}

{% set script_controller = 'setting/site' %}

{% block main %}

  {{ web_macro.flash_messages() }}

  <form class=\"form-horizontal\" id=\"site-form\" method=\"post\"
        data-save-url=\"{{ path('admin_v2_school_information_save') }}\">

    <fieldset>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"name\">{{ 'admin.setting.site.name'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          {% if s2b2c_has_behaviour_permission('canModifySiteName') %}
            <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"{{ site.name }}\">
          {% else %}
            <div class=\"form-control form-control-unset-bg\">{{ site.name }}</div>
          {% endif %}
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"slogan\">{{ 'admin.setting.site.slogan'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"{{ site.slogan }}\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"url\">{{ 'admin.setting.site.url'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          {% if s2b2c_has_behaviour_permission('canModifySiteUrl') %}
            <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"{{ site.url }}\">
            <p class=\"help-block\">{{ 'admin.setting.site.url.help_block'|trans({'%http%':app.request.getScheme()}) }}</p>
          {% else %}
            <div class=\"form-control form-control-unset-bg\">{{ site.url }}</div>
          {% endif %}
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"logo\">{{ 'admin.setting.site.logo'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          {% if s2b2c_has_behaviour_permission('canModifySiteLogo') %}
            <div id=\"site-logo-container\">{% if site.logo %}<img src=\"{{ asset(site.logo) }}\">{% endif %}</div>
            <a class=\"btn btn-default\" id=\"site-logo-upload\"
               data-upload-token=\"{{ upload_token('system', 'image') }}\"
               data-goto-url=\"{{ path('admin_v2_setting_logo_upload') }}\">{{ 'form.btn.upload'|trans }}</a>
            <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\"
                    data-url=\"{{ path('admin_v2_setting_logo_remove') }}\"
                    {% if not site.logo %}style=\"display:none;\"{% endif %}>{{ 'form.btn.delete'|trans }}</button>
            <p class=\"help-block\">{{ 'admin.setting.site.logo.help_block'|trans|raw }}<a href=\"{{ path('homepage') }}\"
                                                                                         target=\"_blank\">{{ 'admin.setting.site.logo.view_btn'|trans }}</a>
            </p>
            <input type=\"hidden\" name=\"logo\" value=\"{{ site.logo }}\">
          {% else %}
            <div id=\"site-logo-container\">{% if site.logo %}<img src=\"{{ asset(site.logo) }}\">{% endif %}</div>
            <a class=\"btn btn-default hidden\" id=\"site-logo-upload\">{{ 'form.btn.upload'|trans }}</a>
            <button class=\"btn btn-default hidden\" id=\"site-logo-remove\" disabled>{{ 'form.btn.delete'|trans }}</button>
          {% endif %}
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"favicon\">{{ 'admin.setting.site.favicon'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          {% if s2b2c_has_behaviour_permission('canModifySiteFavicon') %}
            <div id=\"site-favicon-container\">{% if site.favicon %}<img src=\"{{ asset(site.favicon) }}\">{% endif %}</div>
            <a class=\"btn btn-default\"
               id=\"site-favicon-upload\"
               data-upload-token=\"{{ upload_token('system', 'image') }}\"
               data-goto-url=\"{{ path('admin_v2_setting_favicon_upload') }}\">{{ 'form.btn.upload'|trans }}</a>
            <button class=\"btn btn-default\"
                    id=\"site-favicon-remove\"
                    type=\"button\" data-url=\"{{ path('admin_v2_setting_favicon_remove') }}\"
                    {% if not site.favicon %}style=\"display:none;\"{% endif %}>{{ 'form.btn.delete'|trans }}</button>
            <p class=\"help-block\">{{ 'admin.setting.site.favicon.help_block'|trans|raw }}</p>
            <input type=\"hidden\" name=\"favicon\" value=\"{{ site.favicon }}\">
          {% else %}
            <div id=\"site-favicon-container\">{% if site.favicon %}<img src=\"{{ asset(site.favicon) }}\">{% endif %}</div>
            <a class=\"btn btn-default hidden\" id=\"site-favicon-upload\">{{ 'form.btn.upload'|trans }}</a>
            <button class=\"btn btn-default hidden\" id=\"site-favicon-remove\" disabled>{{ 'form.btn.delete'|trans }}</button>
          {% endif %}
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"seo_keywords\">{{ 'admin.setting.site.seo_keywords'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"{{ site.seo_keywords }}\">
          <p class=\"help-block\">{{ 'admin.setting.site.seo_keywords.help_block'|trans }}</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"seo_description\">{{ 'admin.setting.site.seo_description'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\"
                 value=\"{{ site.seo_description }}\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"copyright\">{{ 'admin.setting.site.copyright'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"{{ site.copyright }}\">
          <div class=\"help-block\">{{ 'admin.setting.site.copyright.help_block'|trans }}</div>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"icp\">{{ 'admin.setting.site.icp'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"{{ site.icp }}\">
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"icpUrl\">{{ 'admin.setting.site.icp_url'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          <input type=\"text\" id=\"icpUrl\" name=\"icpUrl\" class=\"form-control\" value=\"{{ site.icpUrl }}\">
        </div>
      </div>

    </fieldset>

    <br>

    <fieldset>
      <legend>{{ 'admin.setting.site.website_statistics_analysis'|trans }}</legend>
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"analytics\">{{ 'admin.setting.site.analytics'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">

          <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">{{ site.analytics }}</textarea>
          {{ 'admin.setting.site.analytics.help_block'|trans|raw }}
        </div>
      </div>
    </fieldset>

    <fieldset style=\"display:none;\">
      <legend>{{ 'admin.setting.site.website_status'|trans }}</legend>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label>{{ 'admin.setting.site.website_status'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls radios\">
          {{ radios('status', {open:'admin.setting.site.website_status.open'|trans, closed:'admin.setting.site.website_status.closed'|trans}, site.status) }}
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label>{{ 'admin.setting.site.closed_note'|trans }}</label>
        </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">{{ site.closed_note }}</textarea>
          <p class=\"help-block\">{{ 'admin.setting.site.closed_note.help_block'|trans }}。</p>
        </div>
      </div>
    </fieldset>

    <div class=\"row form-group\">
      <div class=\"controls col-md-offset-2 col-md-8\">
        <button type=\"button\" class=\"btn btn-primary\" id=\"save-site\">{{ 'form.btn.submit'|trans }}</button>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

  </form>

{% endblock %}
", "admin-v2/system/school-information.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/system/school-information.html.twig");
    }
}
