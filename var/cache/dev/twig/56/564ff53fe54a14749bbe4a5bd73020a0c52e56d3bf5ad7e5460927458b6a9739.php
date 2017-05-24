<?php

/* @DUDEEGOPlatform/back/detailsdemandes.html.twig */
class __TwigTemplate_33c767c27b8feae4a10dd9534724604dda9e8dfe2df716426c06b8141769f598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/detailsdemandes.html.twig", 1);
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
        $__internal_b6a0043db6a0feff3330036a44a2618472d3eff17dfc17fd1ded13d68a612760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a0043db6a0feff3330036a44a2618472d3eff17dfc17fd1ded13d68a612760->enter($__internal_b6a0043db6a0feff3330036a44a2618472d3eff17dfc17fd1ded13d68a612760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/detailsdemandes.html.twig"));

        $__internal_1d01d453f8c4adcb4908e00c11289c72648293a9df78b5f8475671c278209459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d01d453f8c4adcb4908e00c11289c72648293a9df78b5f8475671c278209459->enter($__internal_1d01d453f8c4adcb4908e00c11289c72648293a9df78b5f8475671c278209459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/detailsdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6a0043db6a0feff3330036a44a2618472d3eff17dfc17fd1ded13d68a612760->leave($__internal_b6a0043db6a0feff3330036a44a2618472d3eff17dfc17fd1ded13d68a612760_prof);

        
        $__internal_1d01d453f8c4adcb4908e00c11289c72648293a9df78b5f8475671c278209459->leave($__internal_1d01d453f8c4adcb4908e00c11289c72648293a9df78b5f8475671c278209459_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58876e95e3d3094c24af432d6550eed180d27f133cdddccf4315e3e7ac42f3c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58876e95e3d3094c24af432d6550eed180d27f133cdddccf4315e3e7ac42f3c6->enter($__internal_58876e95e3d3094c24af432d6550eed180d27f133cdddccf4315e3e7ac42f3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_231bb9c120e185c44968ecabf8c2f2ffcf3f2b5f235f970a8243452c3172516f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_231bb9c120e185c44968ecabf8c2f2ffcf3f2b5f235f970a8243452c3172516f->enter($__internal_231bb9c120e185c44968ecabf8c2f2ffcf3f2b5f235f970a8243452c3172516f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Détails Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_231bb9c120e185c44968ecabf8c2f2ffcf3f2b5f235f970a8243452c3172516f->leave($__internal_231bb9c120e185c44968ecabf8c2f2ffcf3f2b5f235f970a8243452c3172516f_prof);

        
        $__internal_58876e95e3d3094c24af432d6550eed180d27f133cdddccf4315e3e7ac42f3c6->leave($__internal_58876e95e3d3094c24af432d6550eed180d27f133cdddccf4315e3e7ac42f3c6_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_fa07ff0e0c8e1d70c2033728431667d47bea960762fdd37e5462a1a7905a16de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa07ff0e0c8e1d70c2033728431667d47bea960762fdd37e5462a1a7905a16de->enter($__internal_fa07ff0e0c8e1d70c2033728431667d47bea960762fdd37e5462a1a7905a16de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_5662887726c290911da699b0f63323147500cf49453378fe2293811503c98302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5662887726c290911da699b0f63323147500cf49453378fe2293811503c98302->enter($__internal_5662887726c290911da699b0f63323147500cf49453378fe2293811503c98302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_5662887726c290911da699b0f63323147500cf49453378fe2293811503c98302->leave($__internal_5662887726c290911da699b0f63323147500cf49453378fe2293811503c98302_prof);

        
        $__internal_fa07ff0e0c8e1d70c2033728431667d47bea960762fdd37e5462a1a7905a16de->leave($__internal_fa07ff0e0c8e1d70c2033728431667d47bea960762fdd37e5462a1a7905a16de_prof);

    }

    // line 15
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_cd4f2c20454b1a7cc90c5571fae72c553080b27ad097b90b82689a4fc1057e71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd4f2c20454b1a7cc90c5571fae72c553080b27ad097b90b82689a4fc1057e71->enter($__internal_cd4f2c20454b1a7cc90c5571fae72c553080b27ad097b90b82689a4fc1057e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_6521d4e1f6dcc28605d0688d8f40397849bf7623c75242674cecafbdf831922a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6521d4e1f6dcc28605d0688d8f40397849bf7623c75242674cecafbdf831922a->enter($__internal_6521d4e1f6dcc28605d0688d8f40397849bf7623c75242674cecafbdf831922a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_6521d4e1f6dcc28605d0688d8f40397849bf7623c75242674cecafbdf831922a->leave($__internal_6521d4e1f6dcc28605d0688d8f40397849bf7623c75242674cecafbdf831922a_prof);

        
        $__internal_cd4f2c20454b1a7cc90c5571fae72c553080b27ad097b90b82689a4fc1057e71->leave($__internal_cd4f2c20454b1a7cc90c5571fae72c553080b27ad097b90b82689a4fc1057e71_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/detailsdemandes.html.twig";
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

{% endblock %}", "@DUDEEGOPlatform/back/detailsdemandes.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\detailsdemandes.html.twig");
    }
}
