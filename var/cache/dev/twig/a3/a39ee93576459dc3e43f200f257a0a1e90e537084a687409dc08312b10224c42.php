<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5501077b758dfb04243e34038f5ddc1427f71414ca2047e70c25dd37ca533678 extends Twig_Template
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
        $__internal_aec7dba50e3050bd326b1b814a6fc9c670acbd8bb56969779d049dfa22c04c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aec7dba50e3050bd326b1b814a6fc9c670acbd8bb56969779d049dfa22c04c34->enter($__internal_aec7dba50e3050bd326b1b814a6fc9c670acbd8bb56969779d049dfa22c04c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6ce892359911b1738dbe560096f532c8970a8feb7fa93ac3a2592b6f537b8358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce892359911b1738dbe560096f532c8970a8feb7fa93ac3a2592b6f537b8358->enter($__internal_6ce892359911b1738dbe560096f532c8970a8feb7fa93ac3a2592b6f537b8358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_aec7dba50e3050bd326b1b814a6fc9c670acbd8bb56969779d049dfa22c04c34->leave($__internal_aec7dba50e3050bd326b1b814a6fc9c670acbd8bb56969779d049dfa22c04c34_prof);

        
        $__internal_6ce892359911b1738dbe560096f532c8970a8feb7fa93ac3a2592b6f537b8358->leave($__internal_6ce892359911b1738dbe560096f532c8970a8feb7fa93ac3a2592b6f537b8358_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
