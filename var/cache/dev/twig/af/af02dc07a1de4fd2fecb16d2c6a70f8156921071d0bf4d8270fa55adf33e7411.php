<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_7ca631d3702ea0df826c181c7cf1646ae15601147d68238fff27a48f39a11326 extends Twig_Template
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
        $__internal_7a8e6405f33abb6b7f82a12d326907d4a86b9adc757f401b6050a86d6850c343 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8e6405f33abb6b7f82a12d326907d4a86b9adc757f401b6050a86d6850c343->enter($__internal_7a8e6405f33abb6b7f82a12d326907d4a86b9adc757f401b6050a86d6850c343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_efda5d4b738176d7b752017c8a1d3230c5e4dfa410a6d629a6c8219d08b7bab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efda5d4b738176d7b752017c8a1d3230c5e4dfa410a6d629a6c8219d08b7bab3->enter($__internal_efda5d4b738176d7b752017c8a1d3230c5e4dfa410a6d629a6c8219d08b7bab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_7a8e6405f33abb6b7f82a12d326907d4a86b9adc757f401b6050a86d6850c343->leave($__internal_7a8e6405f33abb6b7f82a12d326907d4a86b9adc757f401b6050a86d6850c343_prof);

        
        $__internal_efda5d4b738176d7b752017c8a1d3230c5e4dfa410a6d629a6c8219d08b7bab3->leave($__internal_efda5d4b738176d7b752017c8a1d3230c5e4dfa410a6d629a6c8219d08b7bab3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_decimal.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_decimal.html.twig");
    }
}
