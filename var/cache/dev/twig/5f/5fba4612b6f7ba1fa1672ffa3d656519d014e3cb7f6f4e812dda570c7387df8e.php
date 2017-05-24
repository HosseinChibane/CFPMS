<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_90d3f9a79a00455d0f291f7b321e1b9b50172a154971ed38aa304c55c5b0461f extends Twig_Template
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
        $__internal_52de95ac69f048c565fb83e00c658d75872ba684f9c12b566548a1ec0fdd4a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52de95ac69f048c565fb83e00c658d75872ba684f9c12b566548a1ec0fdd4a6e->enter($__internal_52de95ac69f048c565fb83e00c658d75872ba684f9c12b566548a1ec0fdd4a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_bbc16be2c0bab2932d065734ef321380b0868a5a2e3e1be72b12a371834eaa14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc16be2c0bab2932d065734ef321380b0868a5a2e3e1be72b12a371834eaa14->enter($__internal_bbc16be2c0bab2932d065734ef321380b0868a5a2e3e1be72b12a371834eaa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_52de95ac69f048c565fb83e00c658d75872ba684f9c12b566548a1ec0fdd4a6e->leave($__internal_52de95ac69f048c565fb83e00c658d75872ba684f9c12b566548a1ec0fdd4a6e_prof);

        
        $__internal_bbc16be2c0bab2932d065734ef321380b0868a5a2e3e1be72b12a371834eaa14->leave($__internal_bbc16be2c0bab2932d065734ef321380b0868a5a2e3e1be72b12a371834eaa14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
