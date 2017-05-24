<?php

/* @EasyAdmin/default/field_boolean.html.twig */
class __TwigTemplate_46ecc9f95ac50ebee71aa2c721bbce3b534f3104938d8d33e1b5993b6e84b00e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9afc79206409c3a027ee5c2902884117fae98759c88929ef8cad362a6b8a37bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afc79206409c3a027ee5c2902884117fae98759c88929ef8cad362a6b8a37bc->enter($__internal_9afc79206409c3a027ee5c2902884117fae98759c88929ef8cad362a6b8a37bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_boolean.html.twig"));

        $__internal_5de37f0732fd7425918310214b95700c15562a7cd19780b9e637ca1a69cd14ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de37f0732fd7425918310214b95700c15562a7cd19780b9e637ca1a69cd14ce->enter($__internal_5de37f0732fd7425918310214b95700c15562a7cd19780b9e637ca1a69cd14ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_9afc79206409c3a027ee5c2902884117fae98759c88929ef8cad362a6b8a37bc->leave($__internal_9afc79206409c3a027ee5c2902884117fae98759c88929ef8cad362a6b8a37bc_prof);

        
        $__internal_5de37f0732fd7425918310214b95700c15562a7cd19780b9e637ca1a69cd14ce->leave($__internal_5de37f0732fd7425918310214b95700c15562a7cd19780b9e637ca1a69cd14ce_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "@EasyAdmin/default/field_boolean.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_boolean.html.twig");
    }
}
