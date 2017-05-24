<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_9e5a854cd2d916eaaa2c378dfdce65f3937bde4d86774df1eba9dc568fa60c3a extends Twig_Template
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
        $__internal_231abf91ad7375758bf4b62f76eea7f3fa562a8070c8bfd3d839303816950448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231abf91ad7375758bf4b62f76eea7f3fa562a8070c8bfd3d839303816950448->enter($__internal_231abf91ad7375758bf4b62f76eea7f3fa562a8070c8bfd3d839303816950448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_5f972fe6b787dc75e25f22f93189a8b3be314300e955b666c80eecf16d94d910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f972fe6b787dc75e25f22f93189a8b3be314300e955b666c80eecf16d94d910->enter($__internal_5f972fe6b787dc75e25f22f93189a8b3be314300e955b666c80eecf16d94d910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_231abf91ad7375758bf4b62f76eea7f3fa562a8070c8bfd3d839303816950448->leave($__internal_231abf91ad7375758bf4b62f76eea7f3fa562a8070c8bfd3d839303816950448_prof);

        
        $__internal_5f972fe6b787dc75e25f22f93189a8b3be314300e955b666c80eecf16d94d910->leave($__internal_5f972fe6b787dc75e25f22f93189a8b3be314300e955b666c80eecf16d94d910_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
