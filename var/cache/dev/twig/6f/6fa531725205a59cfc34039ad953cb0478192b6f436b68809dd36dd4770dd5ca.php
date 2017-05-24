<?php

/* DUDEEGOPlatformBundle:back:mutuelle.html.twig */
class __TwigTemplate_f26d73cab0f3b74a15e61a66125e667e5b98167e2453e3e422040b0e406a598c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:mutuelle.html.twig", 1);
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
        $__internal_eb30355c51cb6bbe02324d1d9519890e2e204131f70fedf14b9f9d31faa250b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb30355c51cb6bbe02324d1d9519890e2e204131f70fedf14b9f9d31faa250b1->enter($__internal_eb30355c51cb6bbe02324d1d9519890e2e204131f70fedf14b9f9d31faa250b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mutuelle.html.twig"));

        $__internal_b46479d4c80a376c4bab101d0ebd416055664203279761633a7b984eab5aa9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46479d4c80a376c4bab101d0ebd416055664203279761633a7b984eab5aa9cb->enter($__internal_b46479d4c80a376c4bab101d0ebd416055664203279761633a7b984eab5aa9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb30355c51cb6bbe02324d1d9519890e2e204131f70fedf14b9f9d31faa250b1->leave($__internal_eb30355c51cb6bbe02324d1d9519890e2e204131f70fedf14b9f9d31faa250b1_prof);

        
        $__internal_b46479d4c80a376c4bab101d0ebd416055664203279761633a7b984eab5aa9cb->leave($__internal_b46479d4c80a376c4bab101d0ebd416055664203279761633a7b984eab5aa9cb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15798e79520daa76916a8dd3517091c8e6cdf253a22d4cb767a5318347ce566e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15798e79520daa76916a8dd3517091c8e6cdf253a22d4cb767a5318347ce566e->enter($__internal_15798e79520daa76916a8dd3517091c8e6cdf253a22d4cb767a5318347ce566e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_335b6e9e1e1769d8656e0684507c2c5c070a25a6d1ee1f40bdbbc92c15161933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335b6e9e1e1769d8656e0684507c2c5c070a25a6d1ee1f40bdbbc92c15161933->enter($__internal_335b6e9e1e1769d8656e0684507c2c5c070a25a6d1ee1f40bdbbc92c15161933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_335b6e9e1e1769d8656e0684507c2c5c070a25a6d1ee1f40bdbbc92c15161933->leave($__internal_335b6e9e1e1769d8656e0684507c2c5c070a25a6d1ee1f40bdbbc92c15161933_prof);

        
        $__internal_15798e79520daa76916a8dd3517091c8e6cdf253a22d4cb767a5318347ce566e->leave($__internal_15798e79520daa76916a8dd3517091c8e6cdf253a22d4cb767a5318347ce566e_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d19d69d02347f202b367e77248c09d0b5b98e44d65b29edd8a3649db221125b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19d69d02347f202b367e77248c09d0b5b98e44d65b29edd8a3649db221125b7->enter($__internal_d19d69d02347f202b367e77248c09d0b5b98e44d65b29edd8a3649db221125b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_efd71e49f514c90738d661a51e5c3859399ba99330c1de1ded1e9d3bae0ca9dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd71e49f514c90738d661a51e5c3859399ba99330c1de1ded1e9d3bae0ca9dc->enter($__internal_efd71e49f514c90738d661a51e5c3859399ba99330c1de1ded1e9d3bae0ca9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_efd71e49f514c90738d661a51e5c3859399ba99330c1de1ded1e9d3bae0ca9dc->leave($__internal_efd71e49f514c90738d661a51e5c3859399ba99330c1de1ded1e9d3bae0ca9dc_prof);

        
        $__internal_d19d69d02347f202b367e77248c09d0b5b98e44d65b29edd8a3649db221125b7->leave($__internal_d19d69d02347f202b367e77248c09d0b5b98e44d65b29edd8a3649db221125b7_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_20c6c02eea2f4aa7f7707b2d4d16b43d1742493c8587a305d9d8935673974d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20c6c02eea2f4aa7f7707b2d4d16b43d1742493c8587a305d9d8935673974d23->enter($__internal_20c6c02eea2f4aa7f7707b2d4d16b43d1742493c8587a305d9d8935673974d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_2fef93345f83e4def4a6760fde60bc1704b55327dd29a394a58b9b0f411e34b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fef93345f83e4def4a6760fde60bc1704b55327dd29a394a58b9b0f411e34b9->enter($__internal_2fef93345f83e4def4a6760fde60bc1704b55327dd29a394a58b9b0f411e34b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_2fef93345f83e4def4a6760fde60bc1704b55327dd29a394a58b9b0f411e34b9->leave($__internal_2fef93345f83e4def4a6760fde60bc1704b55327dd29a394a58b9b0f411e34b9_prof);

        
        $__internal_20c6c02eea2f4aa7f7707b2d4d16b43d1742493c8587a305d9d8935673974d23->leave($__internal_20c6c02eea2f4aa7f7707b2d4d16b43d1742493c8587a305d9d8935673974d23_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:mutuelle.html.twig";
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

{% endblock %}", "DUDEEGOPlatformBundle:back:mutuelle.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/mutuelle.html.twig");
    }
}
