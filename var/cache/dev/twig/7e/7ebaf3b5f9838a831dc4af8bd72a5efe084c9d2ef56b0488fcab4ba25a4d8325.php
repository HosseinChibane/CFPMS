<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_17d0495fd927384d7281abef4e25dbaf4502f571013563b0ad6845c171d1ba30 extends Twig_Template
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
        $__internal_079d8bc0649a33838cb3bc4b8a9d04251142d0906d44242de8e5f1af88d8131d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_079d8bc0649a33838cb3bc4b8a9d04251142d0906d44242de8e5f1af88d8131d->enter($__internal_079d8bc0649a33838cb3bc4b8a9d04251142d0906d44242de8e5f1af88d8131d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_4520b646c19240979929c1777fe1d001e2bcd023cd8fa549765889061f2feeda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4520b646c19240979929c1777fe1d001e2bcd023cd8fa549765889061f2feeda->enter($__internal_4520b646c19240979929c1777fe1d001e2bcd023cd8fa549765889061f2feeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_079d8bc0649a33838cb3bc4b8a9d04251142d0906d44242de8e5f1af88d8131d->leave($__internal_079d8bc0649a33838cb3bc4b8a9d04251142d0906d44242de8e5f1af88d8131d_prof);

        
        $__internal_4520b646c19240979929c1777fe1d001e2bcd023cd8fa549765889061f2feeda->leave($__internal_4520b646c19240979929c1777fe1d001e2bcd023cd8fa549765889061f2feeda_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
