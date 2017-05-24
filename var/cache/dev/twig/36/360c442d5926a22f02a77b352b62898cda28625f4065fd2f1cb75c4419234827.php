<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_39f279d07a7206954e27e29c75a870fd0b8b61a1c8d4494952c7f095bf013ef2 extends Twig_Template
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
        $__internal_40142cb3c40b40967c2b6495187ffdfe4ac708ce3068cbd8fc2ee28665cd7df7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40142cb3c40b40967c2b6495187ffdfe4ac708ce3068cbd8fc2ee28665cd7df7->enter($__internal_40142cb3c40b40967c2b6495187ffdfe4ac708ce3068cbd8fc2ee28665cd7df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a035a6f7d3f6f59da592c50260bcd68f8307197fa52465c27fad856e8032139f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a035a6f7d3f6f59da592c50260bcd68f8307197fa52465c27fad856e8032139f->enter($__internal_a035a6f7d3f6f59da592c50260bcd68f8307197fa52465c27fad856e8032139f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_40142cb3c40b40967c2b6495187ffdfe4ac708ce3068cbd8fc2ee28665cd7df7->leave($__internal_40142cb3c40b40967c2b6495187ffdfe4ac708ce3068cbd8fc2ee28665cd7df7_prof);

        
        $__internal_a035a6f7d3f6f59da592c50260bcd68f8307197fa52465c27fad856e8032139f->leave($__internal_a035a6f7d3f6f59da592c50260bcd68f8307197fa52465c27fad856e8032139f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
