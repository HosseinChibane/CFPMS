<?php

/* @EasyAdmin/default/field_smallint.html.twig */
class __TwigTemplate_ec5d60369a4ea25907881e760b7bb3e6245ea133b2d1335ee0c5fac52ae23687 extends Twig_Template
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
        $__internal_b953ac76406492105fd63c3c1995cf177f17fcd73e650c57559a7734a27238ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b953ac76406492105fd63c3c1995cf177f17fcd73e650c57559a7734a27238ba->enter($__internal_b953ac76406492105fd63c3c1995cf177f17fcd73e650c57559a7734a27238ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_smallint.html.twig"));

        $__internal_aa5b0bdee9c67f94da5304f77737c130a6abfeede8f5b26064b6065ef188c772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5b0bdee9c67f94da5304f77737c130a6abfeede8f5b26064b6065ef188c772->enter($__internal_aa5b0bdee9c67f94da5304f77737c130a6abfeede8f5b26064b6065ef188c772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_smallint.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_b953ac76406492105fd63c3c1995cf177f17fcd73e650c57559a7734a27238ba->leave($__internal_b953ac76406492105fd63c3c1995cf177f17fcd73e650c57559a7734a27238ba_prof);

        
        $__internal_aa5b0bdee9c67f94da5304f77737c130a6abfeede8f5b26064b6065ef188c772->leave($__internal_aa5b0bdee9c67f94da5304f77737c130a6abfeede8f5b26064b6065ef188c772_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_smallint.html.twig";
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
    {{ value|number_format }}
{% endif %}
", "@EasyAdmin/default/field_smallint.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_smallint.html.twig");
    }
}
