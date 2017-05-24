<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_84099c079a8961b69120ca2dc24a1e0d0a19517a11c9e707ce8819c2ae3ab135 extends Twig_Template
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
        $__internal_f6e0ad3c58c1565525de0649f899ebf29aea7b13f645cfb71cf97d915e7203dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e0ad3c58c1565525de0649f899ebf29aea7b13f645cfb71cf97d915e7203dc->enter($__internal_f6e0ad3c58c1565525de0649f899ebf29aea7b13f645cfb71cf97d915e7203dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_d4997ed08a1b2468a14307484fc76e49a071b0624f94f8b1b860900af1412bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4997ed08a1b2468a14307484fc76e49a071b0624f94f8b1b860900af1412bcb->enter($__internal_d4997ed08a1b2468a14307484fc76e49a071b0624f94f8b1b860900af1412bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f6e0ad3c58c1565525de0649f899ebf29aea7b13f645cfb71cf97d915e7203dc->leave($__internal_f6e0ad3c58c1565525de0649f899ebf29aea7b13f645cfb71cf97d915e7203dc_prof);

        
        $__internal_d4997ed08a1b2468a14307484fc76e49a071b0624f94f8b1b860900af1412bcb->leave($__internal_d4997ed08a1b2468a14307484fc76e49a071b0624f94f8b1b860900af1412bcb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
