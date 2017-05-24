<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_6b0e74731fc398dedae8aae96363e6bb1d9224035a953ec2293513825414467e extends Twig_Template
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
        $__internal_ceaddcc80dcde6b8898fc6b0008d955167b0d801b9d940281f6d0a177d7f3a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceaddcc80dcde6b8898fc6b0008d955167b0d801b9d940281f6d0a177d7f3a98->enter($__internal_ceaddcc80dcde6b8898fc6b0008d955167b0d801b9d940281f6d0a177d7f3a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        $__internal_4a2b66e287de0a8fd6754934b5e30e3669d593e354267b517f93ee1174a04ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a2b66e287de0a8fd6754934b5e30e3669d593e354267b517f93ee1174a04ce1->enter($__internal_4a2b66e287de0a8fd6754934b5e30e3669d593e354267b517f93ee1174a04ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_ceaddcc80dcde6b8898fc6b0008d955167b0d801b9d940281f6d0a177d7f3a98->leave($__internal_ceaddcc80dcde6b8898fc6b0008d955167b0d801b9d940281f6d0a177d7f3a98_prof);

        
        $__internal_4a2b66e287de0a8fd6754934b5e30e3669d593e354267b517f93ee1174a04ce1->leave($__internal_4a2b66e287de0a8fd6754934b5e30e3669d593e354267b517f93ee1174a04ce1_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
", "@EasyAdmin/default/field_datetime.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_datetime.html.twig");
    }
}
