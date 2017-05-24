<?php

/* DUDEEGOPlatformBundle:admin:adminPanel.html.twig */
class __TwigTemplate_80095274b46e7bd69e4ff684cd7c601e71f47a638fef6f11ab89d893c9033773 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "DUDEEGOPlatformBundle:admin:adminPanel.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8df92c3df81ea94e5929ae24fcfb1ad1ada2c4423edb4da3afe9d2500a7143f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8df92c3df81ea94e5929ae24fcfb1ad1ada2c4423edb4da3afe9d2500a7143f->enter($__internal_a8df92c3df81ea94e5929ae24fcfb1ad1ada2c4423edb4da3afe9d2500a7143f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:admin:adminPanel.html.twig"));

        $__internal_1d79cb45dad81d48216a96f198ee9c484c1a01839ef96e6acf5d76938d990282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d79cb45dad81d48216a96f198ee9c484c1a01839ef96e6acf5d76938d990282->enter($__internal_1d79cb45dad81d48216a96f198ee9c484c1a01839ef96e6acf5d76938d990282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:admin:adminPanel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8df92c3df81ea94e5929ae24fcfb1ad1ada2c4423edb4da3afe9d2500a7143f->leave($__internal_a8df92c3df81ea94e5929ae24fcfb1ad1ada2c4423edb4da3afe9d2500a7143f_prof);

        
        $__internal_1d79cb45dad81d48216a96f198ee9c484c1a01839ef96e6acf5d76938d990282->leave($__internal_1d79cb45dad81d48216a96f198ee9c484c1a01839ef96e6acf5d76938d990282_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_31e600091349cfa18accaf9e63ac03343357b79a14fd179b119da7f58ed19b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e600091349cfa18accaf9e63ac03343357b79a14fd179b119da7f58ed19b64->enter($__internal_31e600091349cfa18accaf9e63ac03343357b79a14fd179b119da7f58ed19b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_914da1cf997775c94606e6617f150a13c21eac6bf0b861c172d0d6eaa171a77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_914da1cf997775c94606e6617f150a13c21eac6bf0b861c172d0d6eaa171a77e->enter($__internal_914da1cf997775c94606e6617f150a13c21eac6bf0b861c172d0d6eaa171a77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Admin Panel - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_914da1cf997775c94606e6617f150a13c21eac6bf0b861c172d0d6eaa171a77e->leave($__internal_914da1cf997775c94606e6617f150a13c21eac6bf0b861c172d0d6eaa171a77e_prof);

        
        $__internal_31e600091349cfa18accaf9e63ac03343357b79a14fd179b119da7f58ed19b64->leave($__internal_31e600091349cfa18accaf9e63ac03343357b79a14fd179b119da7f58ed19b64_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:admin:adminPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block title %}
    Admin Panel - {{ parent() }}
{% endblock %}
", "DUDEEGOPlatformBundle:admin:adminPanel.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/admin/adminPanel.html.twig");
    }
}
