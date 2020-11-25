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

/* admin-v2/marketing/invite/records.html.twig */
class __TwigTemplate_0f25b30468d7a11981977b7d9b0a0db06c922f2dda8172f86ef9d29fc924f8ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/marketing/invite/records.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin-v2/marketing/invite/records.html.twig"));

        // line 3
        $context["menu"] = "admin_v2_operation_invite_record";
        // line 4
        $context["script_controller"] = "invite/record";
        // line 1
        $this->parent = $this->loadTemplate("admin-v2/layout.html.twig", "admin-v2/marketing/invite/records.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    <form id=\"invite-record\" class=\"form-inline well well-sm\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_v2_invite_record");
        echo "\" method=\"get\" novalidate>
        <input id=\"nickname\" class=\"form-control\" type=\"text\" name=\"nickname\" placeholder=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_invite.nickname.placeholer"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "nickname"], "method"), "html", null, true);
        echo "\">
        <div class=\"form-group \">
            <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
                   value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "startDate"], "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.form.input_placeholder.startDate"), "html", null, true);
        echo "\" autocomplete=\"off\">
            -
            <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
                   value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "query", []), "get", [0 => "endDate"], "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.user.form.input_placeholder.endDate"), "html", null, true);
        echo "\" autocomplete=\"off\">
        </div>
        <button class=\"btn btn-primary\" type=\"submit\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.btn.search"), "html", null, true);
        echo "</button>
        ";
        // line 17
        $this->loadTemplate("export/export-btn.html.twig", "admin-v2/marketing/invite/records.html.twig", 17)->display(twig_array_merge($context, ["exportFileName" => "invite-records", "targetFormId" => "invite-record"]));
        // line 22
        echo "    </form>

    <table class=\"table table-hover table-striped\" >
        <thead>
        <tr>
            <th width=\"10%\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_invite.invite_code_owner"), "html", null, true);
        echo "</th>
            <th width=\"10%\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_invite.register_user"), "html", null, true);
        echo "</th>
            <th width=\"15%\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_invite.payingUserTotalPrice_th"), "html", null, true);
        echo "</th>
            <th width=\"15%\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_invite.coinAmountPrice_th"), "html", null, true);
        echo "</th>
            <th width=\"15%\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("admin.operation_invite.amountPrice_th"), "html", null, true);
        echo "</th>
            <th width=\"10%\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.register.invite_code_label"), "html", null, true);
        echo "</th>
            <th width=\"15%\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.account.my_invite_code.invite_time"), "html", null, true);
        echo "</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 37
        if ((((isset($context["records"]) || array_key_exists("records", $context))) ? (_twig_default_filter(($context["records"] ?? $this->getContext($context, "records")))) : (""))) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((((isset($context["records"]) || array_key_exists("records", $context))) ? (_twig_default_filter(($context["records"] ?? $this->getContext($context, "records")))) : ("")));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 39
                echo "                ";
                $context["inviteUser"] = $this->getAttribute(($context["users"] ?? $this->getContext($context, "users")), $this->getAttribute($context["record"], "inviteUserId", []), [], "array");
                // line 40
                echo "                ";
                $context["invitedUser"] = $this->getAttribute(($context["users"] ?? $this->getContext($context, "users")), $this->getAttribute($context["record"], "invitedUserId", []), [], "array");
                // line 41
                echo "               <tr>
                   <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute(($context["inviteUser"] ?? $this->getContext($context, "inviteUser")), "nickname", []), "html", null, true);
                echo "</td>
                   <td>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute(($context["invitedUser"] ?? $this->getContext($context, "invitedUser")), "nickname", []), "html", null, true);
                echo "</td>
                   <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "amount", []), "html", null, true);
                echo "</td>
                   <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "coinAmount", []), "html", null, true);
                echo "</td>
                   <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["record"], "cashAmount", []), "html", null, true);
                echo "</td>
                   <td>";
                // line 47
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["inviteUser"] ?? null), "inviteCode", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["inviteUser"] ?? null), "inviteCode", []), "-")) : ("-")), "html", null, true);
                echo "</td>
                   <td width=\"10%\">";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["record"], "inviteTime", []), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
               </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
        } else {
            // line 52
            echo "            <tr>
                <td colspan=\"20\">
                    <div class=\"empty\">
                        ";
            // line 55
            if ((((isset($context["error"]) || array_key_exists("error", $context))) ? (_twig_default_filter(($context["error"] ?? $this->getContext($context, "error")))) : (""))) {
                // line 56
                echo "                            ";
                echo twig_escape_filter($this->env, (((isset($context["error"]) || array_key_exists("error", $context))) ? (_twig_default_filter(($context["error"] ?? $this->getContext($context, "error")))) : ("")), "html", null, true);
                echo "
                        ";
            } else {
                // line 58
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("site.datagrid.empty"), "html", null, true);
                echo "
                        ";
            }
            // line 60
            echo "                    </div>
                </td>
            </tr>
        ";
        }
        // line 64
        echo "        </tbody>
    </table>

    ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin_macro"] ?? $this->getContext($context, "admin_macro")), "paginator", [0 => (((isset($context["paginator"]) || array_key_exists("paginator", $context))) ? (_twig_default_filter(($context["paginator"] ?? $this->getContext($context, "paginator")))) : (""))], "method"), "html", null, true);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin-v2/marketing/invite/records.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 67,  214 => 64,  208 => 60,  202 => 58,  196 => 56,  194 => 55,  189 => 52,  186 => 51,  177 => 48,  173 => 47,  169 => 46,  165 => 45,  161 => 44,  157 => 43,  153 => 42,  150 => 41,  147 => 40,  144 => 39,  139 => 38,  137 => 37,  130 => 33,  126 => 32,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  99 => 22,  97 => 17,  93 => 16,  86 => 14,  78 => 11,  70 => 8,  65 => 7,  56 => 6,  45 => 1,  43 => 4,  41 => 3,  29 => 1,);
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

{% set menu = 'admin_v2_operation_invite_record' %}
{% set script_controller = 'invite/record' %}

{% block main %}
    <form id=\"invite-record\" class=\"form-inline well well-sm\" action=\"{{path('admin_v2_invite_record')}}\" method=\"get\" novalidate>
        <input id=\"nickname\" class=\"form-control\" type=\"text\" name=\"nickname\" placeholder=\"{{'admin.operation_invite.nickname.placeholer'|trans}}\" value=\"{{ app.request.query.get('nickname')}}\">
        <div class=\"form-group \">
            <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\"
                   value=\"{{ app.request.query.get('startDate') }}\" placeholder=\"{{ 'admin.user.form.input_placeholder.startDate'|trans }}\" autocomplete=\"off\">
            -
            <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\"
                   value=\"{{ app.request.query.get('endDate') }}\" placeholder=\"{{ 'admin.user.form.input_placeholder.endDate'|trans }}\" autocomplete=\"off\">
        </div>
        <button class=\"btn btn-primary\" type=\"submit\">{{'form.btn.search'|trans}}</button>
        {% include 'export/export-btn.html.twig' with
        {
            'exportFileName' : 'invite-records',
            'targetFormId' : 'invite-record',
        } %}
    </form>

    <table class=\"table table-hover table-striped\" >
        <thead>
        <tr>
            <th width=\"10%\">{{'admin.operation_invite.invite_code_owner'|trans}}</th>
            <th width=\"10%\">{{'admin.operation_invite.register_user'|trans}}</th>
            <th width=\"15%\">{{ 'admin.operation_invite.payingUserTotalPrice_th'|trans }}</th>
            <th width=\"15%\">{{ 'admin.operation_invite.coinAmountPrice_th'|trans }}</th>
            <th width=\"15%\">{{ 'admin.operation_invite.amountPrice_th'|trans }}</th>
            <th width=\"10%\">{{ 'user.register.invite_code_label'|trans }}</th>
            <th width=\"15%\">{{'user.account.my_invite_code.invite_time'|trans}}</th>
        </tr>
        </thead>
        <tbody>
        {% if records|default() %}
            {% for record in records|default() %}
                {% set inviteUser = users[record.inviteUserId] %}
                {% set invitedUser = users[record.invitedUserId] %}
               <tr>
                   <td>{{ inviteUser.nickname }}</td>
                   <td>{{ invitedUser.nickname }}</td>
                   <td>{{ record.amount }}</td>
                   <td>{{ record.coinAmount }}</td>
                   <td>{{ record.cashAmount }}</td>
                   <td>{{ inviteUser.inviteCode|default('-') }}</td>
                   <td width=\"10%\">{{ record.inviteTime|date('Y-m-d H:i:s') }}</td>
               </tr>
            {% endfor %}
        {% else %}
            <tr>
                <td colspan=\"20\">
                    <div class=\"empty\">
                        {% if error|default() %}
                            {{ error|default() }}
                        {% else %}
                            {{'site.datagrid.empty'|trans}}
                        {% endif %}
                    </div>
                </td>
            </tr>
        {% endif %}
        </tbody>
    </table>

    {{ admin_macro.paginator(paginator|default()) }}
{% endblock %}", "admin-v2/marketing/invite/records.html.twig", "/home/zl/project-it-migrant-workers/app/Resources/views/admin-v2/marketing/invite/records.html.twig");
    }
}
