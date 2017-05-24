<?php

/* @EasyAdmin/default/field_bigint.html.twig */
class __TwigTemplate_b6f0c1eaec3bab222f9a47005ec5244c5456007910106470d38c3895de178702 extends Twig_Template
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
        $__internal_e5393b4850791aa182c62b7cb1663205806af32adf74671f0db90edd1942e9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5393b4850791aa182c62b7cb1663205806af32adf74671f0db90edd1942e9d9->enter($__internal_e5393b4850791aa182c62b7cb1663205806af32adf74671f0db90edd1942e9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_bigint.html.twig"));

        $__internal_74a2e371b2d2e20b5b531009bef7d1f40c855875750d428cc1b76672a3df255f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a2e371b2d2e20b5b531009bef7d1f40c855875750d428cc1b76672a3df255f->enter($__internal_74a2e371b2d2e20b5b531009bef7d1f40c855875750d428cc1b76672a3df255f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_bigint.html.twig"));

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
        
        $__internal_e5393b4850791aa182c62b7cb1663205806af32adf74671f0db90edd1942e9d9->leave($__internal_e5393b4850791aa182c62b7cb1663205806af32adf74671f0db90edd1942e9d9_prof);

        
        $__internal_74a2e371b2d2e20b5b531009bef7d1f40c855875750d428cc1b76672a3df255f->leave($__internal_74a2e371b2d2e20b5b531009bef7d1f40c855875750d428cc1b76672a3df255f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_bigint.html.twig";
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
", "@EasyAdmin/default/field_bigint.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_bigint.html.twig");
    }
}
