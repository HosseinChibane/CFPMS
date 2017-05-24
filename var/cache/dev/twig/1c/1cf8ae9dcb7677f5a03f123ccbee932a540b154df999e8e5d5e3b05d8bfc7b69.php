<?php

/* @EasyAdmin/default/field_float.html.twig */
class __TwigTemplate_ed68c5c81f73a7689211885813593f78d04915255b1162e4c169b418470ac099 extends Twig_Template
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
        $__internal_3215a31fb9bb1188c119731cbf0f14879dc150d8862303ea01c6f888ab142e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3215a31fb9bb1188c119731cbf0f14879dc150d8862303ea01c6f888ab142e6d->enter($__internal_3215a31fb9bb1188c119731cbf0f14879dc150d8862303ea01c6f888ab142e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_float.html.twig"));

        $__internal_7f47db9fd8b34ad682a380ebec9ae53ba3b6b727cda24ea42415a1243eee4d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f47db9fd8b34ad682a380ebec9ae53ba3b6b727cda24ea42415a1243eee4d2d->enter($__internal_7f47db9fd8b34ad682a380ebec9ae53ba3b6b727cda24ea42415a1243eee4d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_float.html.twig"));

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
        
        $__internal_3215a31fb9bb1188c119731cbf0f14879dc150d8862303ea01c6f888ab142e6d->leave($__internal_3215a31fb9bb1188c119731cbf0f14879dc150d8862303ea01c6f888ab142e6d_prof);

        
        $__internal_7f47db9fd8b34ad682a380ebec9ae53ba3b6b727cda24ea42415a1243eee4d2d->leave($__internal_7f47db9fd8b34ad682a380ebec9ae53ba3b6b727cda24ea42415a1243eee4d2d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_float.html.twig";
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
", "@EasyAdmin/default/field_float.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_float.html.twig");
    }
}
