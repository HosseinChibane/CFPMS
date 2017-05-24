<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f2384adac8b77ead390a22ff989a67cae5ccb766efd0d11e8450efbf1162f56c extends Twig_Template
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
        $__internal_78860aba5b75bc03659af2d4584e468bb5ca58c352e5c7c0c2c52669e5e9716f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78860aba5b75bc03659af2d4584e468bb5ca58c352e5c7c0c2c52669e5e9716f->enter($__internal_78860aba5b75bc03659af2d4584e468bb5ca58c352e5c7c0c2c52669e5e9716f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_7f5b2049f851fe4900d95777a89574075ef34c52dd0a9689aff693f46bdd9abe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5b2049f851fe4900d95777a89574075ef34c52dd0a9689aff693f46bdd9abe->enter($__internal_7f5b2049f851fe4900d95777a89574075ef34c52dd0a9689aff693f46bdd9abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_78860aba5b75bc03659af2d4584e468bb5ca58c352e5c7c0c2c52669e5e9716f->leave($__internal_78860aba5b75bc03659af2d4584e468bb5ca58c352e5c7c0c2c52669e5e9716f_prof);

        
        $__internal_7f5b2049f851fe4900d95777a89574075ef34c52dd0a9689aff693f46bdd9abe->leave($__internal_7f5b2049f851fe4900d95777a89574075ef34c52dd0a9689aff693f46bdd9abe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
