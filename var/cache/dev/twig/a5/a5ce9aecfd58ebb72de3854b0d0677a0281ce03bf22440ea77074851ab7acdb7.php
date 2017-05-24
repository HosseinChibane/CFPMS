<?php

/* DUDEEGOPlatformBundle:back:detailsdemandes.html.twig */
class __TwigTemplate_fb6941ffc86f7cdd2442f7acc5fa34597a0770e2d8e40f134a78b1b25f6dfa6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:detailsdemandes.html.twig", 1);
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
        $__internal_2e42e955dc10e3d642baad7176c5f6ebf78bb47e34c219f1ad282e18f99e0181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e42e955dc10e3d642baad7176c5f6ebf78bb47e34c219f1ad282e18f99e0181->enter($__internal_2e42e955dc10e3d642baad7176c5f6ebf78bb47e34c219f1ad282e18f99e0181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:detailsdemandes.html.twig"));

        $__internal_437d2af1bfa64f0cefa325e4dd3e5675840f859f4beecf2cfd20246db5f330e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437d2af1bfa64f0cefa325e4dd3e5675840f859f4beecf2cfd20246db5f330e7->enter($__internal_437d2af1bfa64f0cefa325e4dd3e5675840f859f4beecf2cfd20246db5f330e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e42e955dc10e3d642baad7176c5f6ebf78bb47e34c219f1ad282e18f99e0181->leave($__internal_2e42e955dc10e3d642baad7176c5f6ebf78bb47e34c219f1ad282e18f99e0181_prof);

        
        $__internal_437d2af1bfa64f0cefa325e4dd3e5675840f859f4beecf2cfd20246db5f330e7->leave($__internal_437d2af1bfa64f0cefa325e4dd3e5675840f859f4beecf2cfd20246db5f330e7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3764783797ace29cb027f8b38bca53cf83b0b693260a39d7b686d668f1c1a964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3764783797ace29cb027f8b38bca53cf83b0b693260a39d7b686d668f1c1a964->enter($__internal_3764783797ace29cb027f8b38bca53cf83b0b693260a39d7b686d668f1c1a964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17f6dfe66fc6c60c51c75bfed87df9c1d94a7dfcd31dba3a0f3a01d648f71dbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17f6dfe66fc6c60c51c75bfed87df9c1d94a7dfcd31dba3a0f3a01d648f71dbb->enter($__internal_17f6dfe66fc6c60c51c75bfed87df9c1d94a7dfcd31dba3a0f3a01d648f71dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_17f6dfe66fc6c60c51c75bfed87df9c1d94a7dfcd31dba3a0f3a01d648f71dbb->leave($__internal_17f6dfe66fc6c60c51c75bfed87df9c1d94a7dfcd31dba3a0f3a01d648f71dbb_prof);

        
        $__internal_3764783797ace29cb027f8b38bca53cf83b0b693260a39d7b686d668f1c1a964->leave($__internal_3764783797ace29cb027f8b38bca53cf83b0b693260a39d7b686d668f1c1a964_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_03830ad9432b56c12ff62c6f907658364913e3a0609fd960f64de7652fa27ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03830ad9432b56c12ff62c6f907658364913e3a0609fd960f64de7652fa27ea4->enter($__internal_03830ad9432b56c12ff62c6f907658364913e3a0609fd960f64de7652fa27ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_f6273ec87482b1d1d87ef5ca2eebb66ff047d801f63d5b3ec84305b839884646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6273ec87482b1d1d87ef5ca2eebb66ff047d801f63d5b3ec84305b839884646->enter($__internal_f6273ec87482b1d1d87ef5ca2eebb66ff047d801f63d5b3ec84305b839884646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li ><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mesDemandes");
        echo "\">Mes Demandes</a></li>
        <li class=\"active\">Détails</li>
    </ol>
";
        
        $__internal_f6273ec87482b1d1d87ef5ca2eebb66ff047d801f63d5b3ec84305b839884646->leave($__internal_f6273ec87482b1d1d87ef5ca2eebb66ff047d801f63d5b3ec84305b839884646_prof);

        
        $__internal_03830ad9432b56c12ff62c6f907658364913e3a0609fd960f64de7652fa27ea4->leave($__internal_03830ad9432b56c12ff62c6f907658364913e3a0609fd960f64de7652fa27ea4_prof);

    }

    // line 15
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_d27378c43196472cdd44d6f57bcb5ef795e13ce8bd427327b99d85dddffe9c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d27378c43196472cdd44d6f57bcb5ef795e13ce8bd427327b99d85dddffe9c1f->enter($__internal_d27378c43196472cdd44d6f57bcb5ef795e13ce8bd427327b99d85dddffe9c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_2a9c82bbc584937d263a7b253d2a73388eb48e8874193ed188609b40afed14ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9c82bbc584937d263a7b253d2a73388eb48e8874193ed188609b40afed14ab->enter($__internal_2a9c82bbc584937d263a7b253d2a73388eb48e8874193ed188609b40afed14ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
    <!-- Modifier Demandes -->
    <div class=\"col-md-12\">
        <h1>Détail de la demande n°";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()), "html", null, true);
        echo " :</h1>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4>Inscription à ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "type", array()), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"panel-body\">                                        
                Votre demande est : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "etat", array()), "html", null, true);
        echo "
            </div>
            <div class=\"panel-footer\">
                <a class=\"btn btn-info\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mesDemandes");
        echo "\" role=\"button\">Retour à la liste des demandes</a>
                ";
        // line 31
        echo "            </div>
        </div>
    </div>

";
        
        $__internal_2a9c82bbc584937d263a7b253d2a73388eb48e8874193ed188609b40afed14ab->leave($__internal_2a9c82bbc584937d263a7b253d2a73388eb48e8874193ed188609b40afed14ab_prof);

        
        $__internal_d27378c43196472cdd44d6f57bcb5ef795e13ce8bd427327b99d85dddffe9c1f->leave($__internal_d27378c43196472cdd44d6f57bcb5ef795e13ce8bd427327b99d85dddffe9c1f_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:detailsdemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  125 => 27,  119 => 24,  113 => 21,  107 => 18,  94 => 15,  80 => 10,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Détails Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Home</a></li>
        <li ><a href=\"{{ path('dudeego_platform_abonne_mesDemandes') }}\">Mes Demandes</a></li>
        <li class=\"active\">Détails</li>
    </ol>
{% endblock %}

{% block BackContent %} 
    <!-- Modifier Demandes -->
    <div class=\"col-md-12\">
        <h1>Détail de la demande n°{{ eA_Demande_Inscription.id }} :</h1>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4>Inscription à {{ eA_Demande_Inscription.type }}</h4>
            </div>
            <div class=\"panel-body\">                                        
                Votre demande est : {{ eA_Demande_Inscription.etat }}
            </div>
            <div class=\"panel-footer\">
                <a class=\"btn btn-info\" href=\"{{ path('dudeego_platform_abonne_mesDemandes') }}\" role=\"button\">Retour à la liste des demandes</a>
                {#
                <a class=\"btn btn-primary\" href=\"{{ path('dudeego_platform_abonne_modifierDemandes', { 'id': eA_Demande_Inscription.id }) }}\">Modifier</a>
                #}
            </div>
        </div>
    </div>

{% endblock %}", "DUDEEGOPlatformBundle:back:detailsdemandes.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/detailsdemandes.html.twig");
    }
}
