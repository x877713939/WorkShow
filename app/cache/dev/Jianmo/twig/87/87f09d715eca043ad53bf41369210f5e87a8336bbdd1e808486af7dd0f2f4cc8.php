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

/* admin-v2/faq/sdk.html.twig */
class __TwigTemplate_abd2481800f51d6c99ede7e0c812ead4a6416aea3ee5bd6076289622b52e1ebb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/faq/sdk.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/faq/sdk.html.twig"));

        // line 1
        if ((_twig_default_filter($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("copyright.thirdCopyright"), 0) != 1)) {
            // line 2
            echo "  <script aysnc=\"aysnc\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\WebExtension')->getCloudSdkUrl("faq"), "html", null, true);
            echo "\"></script>
  <script aysnc=\"aysnc\">
    ";
            // line 4
            $context["faqApiServer"] = ((($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.faq_api_server", "") != "")) ? ($this->env->getExtension('AppBundle\Twig\WebExtension')->getSetting("magic.faq_api_server")) : (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getScheme", [], "method") . "://www.qiqiuyu.com")));
            // line 5
            echo "    try {
      new FaqSDK({
        id: 'faq-sdk',
        apiUrl: '";
            // line 8
            echo twig_escape_filter($this->env, ($context["faqApiServer"] ?? $this->getContext($context, "faqApiServer")), "html", null, true);
            echo "/faq/api/hotlist?version=";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetVersion("/"), "html", null, true);
            echo "&host=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getHost", [], "method"), "html", null, true);
            echo "&url=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "getRequestUri", [], "method"), "html", null, true);
            echo "',
        color: '#43bc60',
      });
    }
    catch(err){
      console.log(err);
    }
  </script>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/faq/sdk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  46 => 5,  44 => 4,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if setting('copyright.thirdCopyright')|default(0) != 1 %}
  <script aysnc=\"aysnc\" src=\"{{ cloud_sdk_url('faq') }}\"></script>
  <script aysnc=\"aysnc\">
    {% set faqApiServer = setting(\"magic.faq_api_server\", '') != '' ? setting(\"magic.faq_api_server\") : app.request.getScheme() ~ '://www.qiqiuyu.com' %}
    try {
      new FaqSDK({
        id: 'faq-sdk',
        apiUrl: '{{ faqApiServer }}/faq/api/hotlist?version={{ asset_version('/') }}&host={{ app.request.getHost() }}&url={{ app.request.getRequestUri() }}',
        color: '#43bc60',
      });
    }
    catch(err){
      console.log(err);
    }
  </script>
{% endif %}", "admin-v2/faq/sdk.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/faq/sdk.html.twig");
    }
}
