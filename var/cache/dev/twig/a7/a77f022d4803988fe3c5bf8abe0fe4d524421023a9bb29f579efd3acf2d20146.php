<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_e5ecead2e873b2f981be5c5ed2ff14223aaf32262771b9131ac2d70ce9192302 extends Twig_Template
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
        $__internal_19af90498158733e7d349a74f3252ae85c5f3aee95b962f9c9cd4649b11ed63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19af90498158733e7d349a74f3252ae85c5f3aee95b962f9c9cd4649b11ed63c->enter($__internal_19af90498158733e7d349a74f3252ae85c5f3aee95b962f9c9cd4649b11ed63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_4b63b2da2e07bb3f467b846172d2208dd3677d8bf75869702539522c23bedbd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b63b2da2e07bb3f467b846172d2208dd3677d8bf75869702539522c23bedbd1->enter($__internal_4b63b2da2e07bb3f467b846172d2208dd3677d8bf75869702539522c23bedbd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_19af90498158733e7d349a74f3252ae85c5f3aee95b962f9c9cd4649b11ed63c->leave($__internal_19af90498158733e7d349a74f3252ae85c5f3aee95b962f9c9cd4649b11ed63c_prof);

        
        $__internal_4b63b2da2e07bb3f467b846172d2208dd3677d8bf75869702539522c23bedbd1->leave($__internal_4b63b2da2e07bb3f467b846172d2208dd3677d8bf75869702539522c23bedbd1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
