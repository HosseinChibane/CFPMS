<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_d23502169bdf53ceb1a88d75437186ffc6b7851dec6b01f1566c338f7317fc75 extends Twig_Template
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
        $__internal_3cfcce21891c92f2a0444777cc8ef0d0b28950e1d5e8ff15d0a64c735bdfa33b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfcce21891c92f2a0444777cc8ef0d0b28950e1d5e8ff15d0a64c735bdfa33b->enter($__internal_3cfcce21891c92f2a0444777cc8ef0d0b28950e1d5e8ff15d0a64c735bdfa33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f3b2d99b15d6d0160ef6e582ca0635181dc0d4fd0c127591319780f3b16c931f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3b2d99b15d6d0160ef6e582ca0635181dc0d4fd0c127591319780f3b16c931f->enter($__internal_f3b2d99b15d6d0160ef6e582ca0635181dc0d4fd0c127591319780f3b16c931f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3cfcce21891c92f2a0444777cc8ef0d0b28950e1d5e8ff15d0a64c735bdfa33b->leave($__internal_3cfcce21891c92f2a0444777cc8ef0d0b28950e1d5e8ff15d0a64c735bdfa33b_prof);

        
        $__internal_f3b2d99b15d6d0160ef6e582ca0635181dc0d4fd0c127591319780f3b16c931f->leave($__internal_f3b2d99b15d6d0160ef6e582ca0635181dc0d4fd0c127591319780f3b16c931f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
