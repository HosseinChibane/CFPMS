<?php

/* @EasyAdmin/default/field_time.html.twig */
class __TwigTemplate_a032091638640a5ab5c0ed42b8f672e75cb133d6bdd8fa5671eb03f94170f19d extends Twig_Template
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
        $__internal_5a57b4d8622888f51b1ea7e616afb83b2bbfef62cb0fcb6e11fe4d19245ac18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a57b4d8622888f51b1ea7e616afb83b2bbfef62cb0fcb6e11fe4d19245ac18a->enter($__internal_5a57b4d8622888f51b1ea7e616afb83b2bbfef62cb0fcb6e11fe4d19245ac18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_time.html.twig"));

        $__internal_af5f409566f69abf12b3649d64621e5dc148f177f4b0057ff504a1f56e98d5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af5f409566f69abf12b3649d64621e5dc148f177f4b0057ff504a1f56e98d5f7->enter($__internal_af5f409566f69abf12b3649d64621e5dc148f177f4b0057ff504a1f56e98d5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_5a57b4d8622888f51b1ea7e616afb83b2bbfef62cb0fcb6e11fe4d19245ac18a->leave($__internal_5a57b4d8622888f51b1ea7e616afb83b2bbfef62cb0fcb6e11fe4d19245ac18a_prof);

        
        $__internal_af5f409566f69abf12b3649d64621e5dc148f177f4b0057ff504a1f56e98d5f7->leave($__internal_af5f409566f69abf12b3649d64621e5dc148f177f4b0057ff504a1f56e98d5f7_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_time.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_time.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_time.html.twig");
    }
}
