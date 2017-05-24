<?php

/* @DUDEEGOPlatform/admin/adminPanel.html.twig */
class __TwigTemplate_565ec4de5b797fd18d72a0006eee949ec0eeb98806588103cc6fe0a5b74f2822 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "@DUDEEGOPlatform/admin/adminPanel.html.twig", 2);
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
        $__internal_c24246cf6133c66b8210b056520f4115bd422398a51328fae361fe78637317e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24246cf6133c66b8210b056520f4115bd422398a51328fae361fe78637317e7->enter($__internal_c24246cf6133c66b8210b056520f4115bd422398a51328fae361fe78637317e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/admin/adminPanel.html.twig"));

        $__internal_d06bd79ae5c66d9244090f702892f339d7980a3a854dd1d6190736e65b9d80ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d06bd79ae5c66d9244090f702892f339d7980a3a854dd1d6190736e65b9d80ca->enter($__internal_d06bd79ae5c66d9244090f702892f339d7980a3a854dd1d6190736e65b9d80ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/admin/adminPanel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24246cf6133c66b8210b056520f4115bd422398a51328fae361fe78637317e7->leave($__internal_c24246cf6133c66b8210b056520f4115bd422398a51328fae361fe78637317e7_prof);

        
        $__internal_d06bd79ae5c66d9244090f702892f339d7980a3a854dd1d6190736e65b9d80ca->leave($__internal_d06bd79ae5c66d9244090f702892f339d7980a3a854dd1d6190736e65b9d80ca_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ddd74e361eeecccb3b5db5b9ba8cd4ddf70cd0dafba12ee68cd93288e492da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ddd74e361eeecccb3b5db5b9ba8cd4ddf70cd0dafba12ee68cd93288e492da4->enter($__internal_6ddd74e361eeecccb3b5db5b9ba8cd4ddf70cd0dafba12ee68cd93288e492da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4cad33dc4a542c91dbed02ea396c882493b0b77c0dc6c570fde21de2646a86da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cad33dc4a542c91dbed02ea396c882493b0b77c0dc6c570fde21de2646a86da->enter($__internal_4cad33dc4a542c91dbed02ea396c882493b0b77c0dc6c570fde21de2646a86da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Admin Panel - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4cad33dc4a542c91dbed02ea396c882493b0b77c0dc6c570fde21de2646a86da->leave($__internal_4cad33dc4a542c91dbed02ea396c882493b0b77c0dc6c570fde21de2646a86da_prof);

        
        $__internal_6ddd74e361eeecccb3b5db5b9ba8cd4ddf70cd0dafba12ee68cd93288e492da4->leave($__internal_6ddd74e361eeecccb3b5db5b9ba8cd4ddf70cd0dafba12ee68cd93288e492da4_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/admin/adminPanel.html.twig";
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
", "@DUDEEGOPlatform/admin/adminPanel.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\admin\\adminPanel.html.twig");
    }
}
