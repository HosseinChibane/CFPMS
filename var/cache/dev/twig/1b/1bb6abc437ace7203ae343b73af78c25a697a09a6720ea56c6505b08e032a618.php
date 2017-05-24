<?php

/* @EasyAdmin/default/field_decimal.html.twig */
class __TwigTemplate_c0bb917f66613d2e77195d31e2812925201d77c30f98e39a05def7ae99d8aefd extends Twig_Template
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
        $__internal_ca269f8d068f252e9074ce55d9276dce480237cbca1b7fa156d3e299c7ea7dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca269f8d068f252e9074ce55d9276dce480237cbca1b7fa156d3e299c7ea7dd3->enter($__internal_ca269f8d068f252e9074ce55d9276dce480237cbca1b7fa156d3e299c7ea7dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_decimal.html.twig"));

        $__internal_2a2dbd56dcf785ad26eeca9e630a5376d75d2779015095c0270d8ca1e67dc7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2dbd56dcf785ad26eeca9e630a5376d75d2779015095c0270d8ca1e67dc7b5->enter($__internal_2a2dbd56dcf785ad26eeca9e630a5376d75d2779015095c0270d8ca1e67dc7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_decimal.html.twig"));

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
        
        $__internal_ca269f8d068f252e9074ce55d9276dce480237cbca1b7fa156d3e299c7ea7dd3->leave($__internal_ca269f8d068f252e9074ce55d9276dce480237cbca1b7fa156d3e299c7ea7dd3_prof);

        
        $__internal_2a2dbd56dcf785ad26eeca9e630a5376d75d2779015095c0270d8ca1e67dc7b5->leave($__internal_2a2dbd56dcf785ad26eeca9e630a5376d75d2779015095c0270d8ca1e67dc7b5_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_decimal.html.twig";
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
", "@EasyAdmin/default/field_decimal.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_decimal.html.twig");
    }
}
