<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_b824aeaaaae8853f2a41d4fbb4ec241823166aadf63c056bfa8cd5b7c0e89d26 extends Twig_Template
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
        $__internal_2deb655433c46dda8877ebbd74d413df742f293785a36205ae27c41dd649ea4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2deb655433c46dda8877ebbd74d413df742f293785a36205ae27c41dd649ea4a->enter($__internal_2deb655433c46dda8877ebbd74d413df742f293785a36205ae27c41dd649ea4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_9616579a33b1759df04079c059f843cbea5820e03df2cbfffb9ef6b8555338a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9616579a33b1759df04079c059f843cbea5820e03df2cbfffb9ef6b8555338a5->enter($__internal_9616579a33b1759df04079c059f843cbea5820e03df2cbfffb9ef6b8555338a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_2deb655433c46dda8877ebbd74d413df742f293785a36205ae27c41dd649ea4a->leave($__internal_2deb655433c46dda8877ebbd74d413df742f293785a36205ae27c41dd649ea4a_prof);

        
        $__internal_9616579a33b1759df04079c059f843cbea5820e03df2cbfffb9ef6b8555338a5->leave($__internal_9616579a33b1759df04079c059f843cbea5820e03df2cbfffb9ef6b8555338a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
