<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_804cf1cdd8a9ec98029b87eed7f3e60e27fc14610e0856cbc80727aefc3f7aea extends Twig_Template
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
        $__internal_d079cd7f3d286a0a2b297c269e0b660d14d3abdd7b59bc29ea3c545140d3eb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d079cd7f3d286a0a2b297c269e0b660d14d3abdd7b59bc29ea3c545140d3eb47->enter($__internal_d079cd7f3d286a0a2b297c269e0b660d14d3abdd7b59bc29ea3c545140d3eb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_a828f10aaddc8dc7a40d4e139e3779623a1a6a3f159801f6c93da89554fb5206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a828f10aaddc8dc7a40d4e139e3779623a1a6a3f159801f6c93da89554fb5206->enter($__internal_a828f10aaddc8dc7a40d4e139e3779623a1a6a3f159801f6c93da89554fb5206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_d079cd7f3d286a0a2b297c269e0b660d14d3abdd7b59bc29ea3c545140d3eb47->leave($__internal_d079cd7f3d286a0a2b297c269e0b660d14d3abdd7b59bc29ea3c545140d3eb47_prof);

        
        $__internal_a828f10aaddc8dc7a40d4e139e3779623a1a6a3f159801f6c93da89554fb5206->leave($__internal_a828f10aaddc8dc7a40d4e139e3779623a1a6a3f159801f6c93da89554fb5206_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_id.html.twig");
    }
}
