<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_efde4155ef090caba5ff41b76802d3b4bbe1f3d7c4d3756d52a52f214bfe0e20 extends Twig_Template
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
        $__internal_7b6da6f20ffae4e9b5728d0a1b9766e51a441d0d8311d335d4fa7c9a400d7a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6da6f20ffae4e9b5728d0a1b9766e51a441d0d8311d335d4fa7c9a400d7a03->enter($__internal_7b6da6f20ffae4e9b5728d0a1b9766e51a441d0d8311d335d4fa7c9a400d7a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f3366baa4e1000b40bd3dd3be0e6143a4dcff9225c570f2b4e06866fe349a119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3366baa4e1000b40bd3dd3be0e6143a4dcff9225c570f2b4e06866fe349a119->enter($__internal_f3366baa4e1000b40bd3dd3be0e6143a4dcff9225c570f2b4e06866fe349a119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_7b6da6f20ffae4e9b5728d0a1b9766e51a441d0d8311d335d4fa7c9a400d7a03->leave($__internal_7b6da6f20ffae4e9b5728d0a1b9766e51a441d0d8311d335d4fa7c9a400d7a03_prof);

        
        $__internal_f3366baa4e1000b40bd3dd3be0e6143a4dcff9225c570f2b4e06866fe349a119->leave($__internal_f3366baa4e1000b40bd3dd3be0e6143a4dcff9225c570f2b4e06866fe349a119_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
