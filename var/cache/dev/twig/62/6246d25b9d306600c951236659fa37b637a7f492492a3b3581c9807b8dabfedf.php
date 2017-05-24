<?php

/* @DUDEEGOPlatform/back/mutuelle.html.twig */
class __TwigTemplate_7547f4d08c6a8c96af5568988c720ba48735d0dc915ac78257ea61a49072457b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/mutuelle.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'BackContent' => array($this, 'block_BackContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35502739d476c466537805ac20a5996f1d77dae039bb46be14c8b3af9cc447d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35502739d476c466537805ac20a5996f1d77dae039bb46be14c8b3af9cc447d7->enter($__internal_35502739d476c466537805ac20a5996f1d77dae039bb46be14c8b3af9cc447d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/mutuelle.html.twig"));

        $__internal_e3b55507c90b573b976c85d6af730f14fe153eb8a1ce52251e241fc3bb91a217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b55507c90b573b976c85d6af730f14fe153eb8a1ce52251e241fc3bb91a217->enter($__internal_e3b55507c90b573b976c85d6af730f14fe153eb8a1ce52251e241fc3bb91a217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35502739d476c466537805ac20a5996f1d77dae039bb46be14c8b3af9cc447d7->leave($__internal_35502739d476c466537805ac20a5996f1d77dae039bb46be14c8b3af9cc447d7_prof);

        
        $__internal_e3b55507c90b573b976c85d6af730f14fe153eb8a1ce52251e241fc3bb91a217->leave($__internal_e3b55507c90b573b976c85d6af730f14fe153eb8a1ce52251e241fc3bb91a217_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e511b35f3548f7839835d44d2c94b18b71bb44a6b7d8cf2df3c835aff5837e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e511b35f3548f7839835d44d2c94b18b71bb44a6b7d8cf2df3c835aff5837e9->enter($__internal_5e511b35f3548f7839835d44d2c94b18b71bb44a6b7d8cf2df3c835aff5837e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6c43c85477d3c60f5d1819faaa0b00098a3963da12fe681ca5d7b4cb39fdc71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c43c85477d3c60f5d1819faaa0b00098a3963da12fe681ca5d7b4cb39fdc71->enter($__internal_a6c43c85477d3c60f5d1819faaa0b00098a3963da12fe681ca5d7b4cb39fdc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a6c43c85477d3c60f5d1819faaa0b00098a3963da12fe681ca5d7b4cb39fdc71->leave($__internal_a6c43c85477d3c60f5d1819faaa0b00098a3963da12fe681ca5d7b4cb39fdc71_prof);

        
        $__internal_5e511b35f3548f7839835d44d2c94b18b71bb44a6b7d8cf2df3c835aff5837e9->leave($__internal_5e511b35f3548f7839835d44d2c94b18b71bb44a6b7d8cf2df3c835aff5837e9_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3a9591794cd94224032a868bb187712dfb21e24b69f73fef77148e3e80cc6b55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9591794cd94224032a868bb187712dfb21e24b69f73fef77148e3e80cc6b55->enter($__internal_3a9591794cd94224032a868bb187712dfb21e24b69f73fef77148e3e80cc6b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_abf2f17e47a70b93177b15f3b13f43507dd205451c9a12b2721730051a3618a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abf2f17e47a70b93177b15f3b13f43507dd205451c9a12b2721730051a3618a7->enter($__internal_abf2f17e47a70b93177b15f3b13f43507dd205451c9a12b2721730051a3618a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_abf2f17e47a70b93177b15f3b13f43507dd205451c9a12b2721730051a3618a7->leave($__internal_abf2f17e47a70b93177b15f3b13f43507dd205451c9a12b2721730051a3618a7_prof);

        
        $__internal_3a9591794cd94224032a868bb187712dfb21e24b69f73fef77148e3e80cc6b55->leave($__internal_3a9591794cd94224032a868bb187712dfb21e24b69f73fef77148e3e80cc6b55_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_09ff90baa11d3949f48d24fa58aee97f63bc911a70ed6c882215218113f6ecbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ff90baa11d3949f48d24fa58aee97f63bc911a70ed6c882215218113f6ecbd->enter($__internal_09ff90baa11d3949f48d24fa58aee97f63bc911a70ed6c882215218113f6ecbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_cbfe5035d014e8f1c857affe3ec95af29a4707647875915df9c32ec981a23749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbfe5035d014e8f1c857affe3ec95af29a4707647875915df9c32ec981a23749->enter($__internal_cbfe5035d014e8f1c857affe3ec95af29a4707647875915df9c32ec981a23749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h4>Inscription à la mutuelle étudiante AVA</h4>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div align=\"center\">
\t\t\t\t\t<a class=\"btn btn-info\" href=\"https://www.ava.fr/blog/produit/plan-sante-studies/\" role=\"button\" target=\"_blank\">Cliquez Ici</a>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_cbfe5035d014e8f1c857affe3ec95af29a4707647875915df9c32ec981a23749->leave($__internal_cbfe5035d014e8f1c857affe3ec95af29a4707647875915df9c32ec981a23749_prof);

        
        $__internal_09ff90baa11d3949f48d24fa58aee97f63bc911a70ed6c882215218113f6ecbd->leave($__internal_09ff90baa11d3949f48d24fa58aee97f63bc911a70ed6c882215218113f6ecbd_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/mutuelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
\tInscription Université - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
{% endblock %}

{% block BackContent %} 
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h4>Inscription à la mutuelle étudiante AVA</h4>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t</div>
\t\t\t<div class=\"panel-footer\">
\t\t\t\t<div align=\"center\">
\t\t\t\t\t<a class=\"btn btn-info\" href=\"https://www.ava.fr/blog/produit/plan-sante-studies/\" role=\"button\" target=\"_blank\">Cliquez Ici</a>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}", "@DUDEEGOPlatform/back/mutuelle.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\mutuelle.html.twig");
    }
}
