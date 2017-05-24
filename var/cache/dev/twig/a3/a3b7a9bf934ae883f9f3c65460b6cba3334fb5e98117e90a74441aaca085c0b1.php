<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_8ecdd8c0ae70019976e230cd108437cbf511d047b523463dbd89f5aee92d4364 extends Twig_Template
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
        $__internal_b72393cba92d9e45e8ffd364dfd24994445bf644a0b08a4612c35e81a498ae06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b72393cba92d9e45e8ffd364dfd24994445bf644a0b08a4612c35e81a498ae06->enter($__internal_b72393cba92d9e45e8ffd364dfd24994445bf644a0b08a4612c35e81a498ae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b53cba26e551ade5b403a00e075960482a0f9f8a9a075a5cba06a805cae1e594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b53cba26e551ade5b403a00e075960482a0f9f8a9a075a5cba06a805cae1e594->enter($__internal_b53cba26e551ade5b403a00e075960482a0f9f8a9a075a5cba06a805cae1e594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b72393cba92d9e45e8ffd364dfd24994445bf644a0b08a4612c35e81a498ae06->leave($__internal_b72393cba92d9e45e8ffd364dfd24994445bf644a0b08a4612c35e81a498ae06_prof);

        
        $__internal_b53cba26e551ade5b403a00e075960482a0f9f8a9a075a5cba06a805cae1e594->leave($__internal_b53cba26e551ade5b403a00e075960482a0f9f8a9a075a5cba06a805cae1e594_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
