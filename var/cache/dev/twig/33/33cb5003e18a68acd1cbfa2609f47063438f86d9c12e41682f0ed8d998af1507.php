<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8d483c5fde44d9e4f980fed67fe868dfe8a880c5d12537a72a19b927057698db extends Twig_Template
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
        $__internal_12c2995507176aedbf4a0232f57b1c20be6aaa3240962d01cc4e6d9bbbcfc771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12c2995507176aedbf4a0232f57b1c20be6aaa3240962d01cc4e6d9bbbcfc771->enter($__internal_12c2995507176aedbf4a0232f57b1c20be6aaa3240962d01cc4e6d9bbbcfc771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_77d34c75785b4e96328d9a83febe6fae8cf0f68fc161a1e941494e48b792ed7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77d34c75785b4e96328d9a83febe6fae8cf0f68fc161a1e941494e48b792ed7c->enter($__internal_77d34c75785b4e96328d9a83febe6fae8cf0f68fc161a1e941494e48b792ed7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_12c2995507176aedbf4a0232f57b1c20be6aaa3240962d01cc4e6d9bbbcfc771->leave($__internal_12c2995507176aedbf4a0232f57b1c20be6aaa3240962d01cc4e6d9bbbcfc771_prof);

        
        $__internal_77d34c75785b4e96328d9a83febe6fae8cf0f68fc161a1e941494e48b792ed7c->leave($__internal_77d34c75785b4e96328d9a83febe6fae8cf0f68fc161a1e941494e48b792ed7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
