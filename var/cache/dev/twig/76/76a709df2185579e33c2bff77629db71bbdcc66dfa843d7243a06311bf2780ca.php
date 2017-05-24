<?php

/* @EasyAdmin/default/field_integer.html.twig */
class __TwigTemplate_020bcdffb78b18025666aad1ea26263fd6a6634ac7fb3cc3103bfc3fafb88b97 extends Twig_Template
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
        $__internal_34a40470d1076c464a46a1c44ae0040d41c9851e82590d22435cc2eaa2642fd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a40470d1076c464a46a1c44ae0040d41c9851e82590d22435cc2eaa2642fd0->enter($__internal_34a40470d1076c464a46a1c44ae0040d41c9851e82590d22435cc2eaa2642fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

        $__internal_a7fba0d739c194389ea641ea85790757bf05d1a9c25eed5120773f705a978bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fba0d739c194389ea641ea85790757bf05d1a9c25eed5120773f705a978bbd->enter($__internal_a7fba0d739c194389ea641ea85790757bf05d1a9c25eed5120773f705a978bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_integer.html.twig"));

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
        
        $__internal_34a40470d1076c464a46a1c44ae0040d41c9851e82590d22435cc2eaa2642fd0->leave($__internal_34a40470d1076c464a46a1c44ae0040d41c9851e82590d22435cc2eaa2642fd0_prof);

        
        $__internal_a7fba0d739c194389ea641ea85790757bf05d1a9c25eed5120773f705a978bbd->leave($__internal_a7fba0d739c194389ea641ea85790757bf05d1a9c25eed5120773f705a978bbd_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_integer.html.twig";
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
", "@EasyAdmin/default/field_integer.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_integer.html.twig");
    }
}
