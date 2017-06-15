<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_6b0e74731fc398dedae8aae96363e6bb1d9224035a953ec2293513825414467e extends Twig_Template
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
        $__internal_17fb2eef46100a349cdf68e8febfe2b978ee521d408ac6f4aff43dc464c6f185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17fb2eef46100a349cdf68e8febfe2b978ee521d408ac6f4aff43dc464c6f185->enter($__internal_17fb2eef46100a349cdf68e8febfe2b978ee521d408ac6f4aff43dc464c6f185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_079428cc0d63dbc685ef05adec91a14e8214f3c7183ea98355c61c0b1246c85e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079428cc0d63dbc685ef05adec91a14e8214f3c7183ea98355c61c0b1246c85e->enter($__internal_079428cc0d63dbc685ef05adec91a14e8214f3c7183ea98355c61c0b1246c85e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_17fb2eef46100a349cdf68e8febfe2b978ee521d408ac6f4aff43dc464c6f185->leave($__internal_17fb2eef46100a349cdf68e8febfe2b978ee521d408ac6f4aff43dc464c6f185_prof);

        
        $__internal_079428cc0d63dbc685ef05adec91a14e8214f3c7183ea98355c61c0b1246c85e->leave($__internal_079428cc0d63dbc685ef05adec91a14e8214f3c7183ea98355c61c0b1246c85e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_datetime.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_datetime.html.twig");
    }
}
