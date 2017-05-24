<?php

/* :backend:sidebar.html.twig */
class __TwigTemplate_5ba557f508b1ca2c0037694102d263f3a03f6f422d4afc1358e50f1b022e4ccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":backend:sidebar.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'BackBody' => array($this, 'block_BackBody'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'BackContent' => array($this, 'block_BackContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea2426914fd09504a07b189b00f4d464eb6509fd1df5d6d03544bde4c1a01323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea2426914fd09504a07b189b00f4d464eb6509fd1df5d6d03544bde4c1a01323->enter($__internal_ea2426914fd09504a07b189b00f4d464eb6509fd1df5d6d03544bde4c1a01323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_a4fb18ac4afcfe8267f8a8e4d48235754e60eb17aec39c7cf5cd427a4764e7b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fb18ac4afcfe8267f8a8e4d48235754e60eb17aec39c7cf5cd427a4764e7b1->enter($__internal_a4fb18ac4afcfe8267f8a8e4d48235754e60eb17aec39c7cf5cd427a4764e7b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2426914fd09504a07b189b00f4d464eb6509fd1df5d6d03544bde4c1a01323->leave($__internal_ea2426914fd09504a07b189b00f4d464eb6509fd1df5d6d03544bde4c1a01323_prof);

        
        $__internal_a4fb18ac4afcfe8267f8a8e4d48235754e60eb17aec39c7cf5cd427a4764e7b1->leave($__internal_a4fb18ac4afcfe8267f8a8e4d48235754e60eb17aec39c7cf5cd427a4764e7b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5b77b131cd1945397b15a19e1d79e7a9a7396aa4276cd5d017d096b70dcafdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b77b131cd1945397b15a19e1d79e7a9a7396aa4276cd5d017d096b70dcafdf->enter($__internal_d5b77b131cd1945397b15a19e1d79e7a9a7396aa4276cd5d017d096b70dcafdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9354560d11ad446f2d1d4cd70ee7f75b47c2fd96760abdbb34b87f47a2234d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9354560d11ad446f2d1d4cd70ee7f75b47c2fd96760abdbb34b87f47a2234d7->enter($__internal_e9354560d11ad446f2d1d4cd70ee7f75b47c2fd96760abdbb34b87f47a2234d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e9354560d11ad446f2d1d4cd70ee7f75b47c2fd96760abdbb34b87f47a2234d7->leave($__internal_e9354560d11ad446f2d1d4cd70ee7f75b47c2fd96760abdbb34b87f47a2234d7_prof);

        
        $__internal_d5b77b131cd1945397b15a19e1d79e7a9a7396aa4276cd5d017d096b70dcafdf->leave($__internal_d5b77b131cd1945397b15a19e1d79e7a9a7396aa4276cd5d017d096b70dcafdf_prof);

    }

    // line 9
    public function block_BackBody($context, array $blocks = array())
    {
        $__internal_03f8632efca4bb3d5783bee05a0a206480d948c1a7095105f19779fce01cc8da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f8632efca4bb3d5783bee05a0a206480d948c1a7095105f19779fce01cc8da->enter($__internal_03f8632efca4bb3d5783bee05a0a206480d948c1a7095105f19779fce01cc8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBody"));

        $__internal_80cfdead9cafb29e969dfdc26e2635825e7bd0c97aa828ba6ca220614f0849f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80cfdead9cafb29e969dfdc26e2635825e7bd0c97aa828ba6ca220614f0849f2->enter($__internal_80cfdead9cafb29e969dfdc26e2635825e7bd0c97aa828ba6ca220614f0849f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBody"));

        echo "   
        <!-- Page Content -->
        <div class=\"container\">

            <!-- Page Heading/Breadcrumbs -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Espace Abonné
                        <small></small>
                    </h1>
                    ";
        // line 19
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 26
        echo "            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class=\"row\">
            <!-- Sidebar Column -->
            <div class=\"col-md-3\">
                <div class=\"list-group\">
                    <a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\" class=\"list-group-item\">Mon Profil</a>
                    <a href=\"#\" class=\"list-group-item\" data-toggle=\"collapse\" data-target=\"#sl\" data-parent=\"#menu\">Mes Paramètres</a>
                    <div id=\"sl\" class=\"sublinks collapse\">
                        <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mesParametresMAIL");
        echo "\" class=\"list-group-item small\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Changer d'email</a>
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mesParametresMDP");
        echo "\" class=\"list-group-item small\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Changer de mot de passe</a>
                    </div>
                    <a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mesDocuments");
        echo "\" class=\"list-group-item\">Mes Documents</a>
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mesDemandes");
        echo "\" class=\"list-group-item\">Mes Demandes</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_universiteStepsOne");
        echo "\" class=\"list-group-item\">Inscription Universitaire</a>
                    <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_langueStepsOne");
        echo "\" class=\"list-group-item\">Inscription cours de langue</a>
                    <a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_logementStepsOne");
        echo "\" class=\"list-group-item\">Inscription logement</a>
                    <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_preparationStepsOne");
        echo "\" class=\"list-group-item\">Inscription cours préparation</a>
                    <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mutuelle");
        echo "\" class=\"list-group-item\">Inscription mutuelle</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_aide");
        echo "\" class=\"list-group-item\">Aide</a>
                    <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_contact");
        echo "\" class=\"list-group-item\">Contact</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"list-group-item\">Déconnexion</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class=\"col-md-9\">
                ";
        // line 62
        echo "                ";
        $this->displayBlock('BackContent', $context, $blocks);
        // line 65
        echo "            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
";
        
        $__internal_80cfdead9cafb29e969dfdc26e2635825e7bd0c97aa828ba6ca220614f0849f2->leave($__internal_80cfdead9cafb29e969dfdc26e2635825e7bd0c97aa828ba6ca220614f0849f2_prof);

        
        $__internal_03f8632efca4bb3d5783bee05a0a206480d948c1a7095105f19779fce01cc8da->leave($__internal_03f8632efca4bb3d5783bee05a0a206480d948c1a7095105f19779fce01cc8da_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_73c8dadac7730aac371b7f9b421f5a14609955be2ffae66ded74e2eb30aa6ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c8dadac7730aac371b7f9b421f5a14609955be2ffae66ded74e2eb30aa6ffa->enter($__internal_73c8dadac7730aac371b7f9b421f5a14609955be2ffae66ded74e2eb30aa6ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_2ca312bb2aaa7aa49154d23f35362b7dc3576f53adc3eb152ab72e7647191229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca312bb2aaa7aa49154d23f35362b7dc3576f53adc3eb152ab72e7647191229->enter($__internal_2ca312bb2aaa7aa49154d23f35362b7dc3576f53adc3eb152ab72e7647191229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_2ca312bb2aaa7aa49154d23f35362b7dc3576f53adc3eb152ab72e7647191229->leave($__internal_2ca312bb2aaa7aa49154d23f35362b7dc3576f53adc3eb152ab72e7647191229_prof);

        
        $__internal_73c8dadac7730aac371b7f9b421f5a14609955be2ffae66ded74e2eb30aa6ffa->leave($__internal_73c8dadac7730aac371b7f9b421f5a14609955be2ffae66ded74e2eb30aa6ffa_prof);

    }

    // line 62
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_60394a7aad2187b1ac8d142378f29946e8afd1c69a2fd3526eb2c690648c7218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60394a7aad2187b1ac8d142378f29946e8afd1c69a2fd3526eb2c690648c7218->enter($__internal_60394a7aad2187b1ac8d142378f29946e8afd1c69a2fd3526eb2c690648c7218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_cba6be1e9c863f950282f107e1154089f77e7520a63034ceb846089e97cdf3dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cba6be1e9c863f950282f107e1154089f77e7520a63034ceb846089e97cdf3dd->enter($__internal_cba6be1e9c863f950282f107e1154089f77e7520a63034ceb846089e97cdf3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 

                ";
        
        $__internal_cba6be1e9c863f950282f107e1154089f77e7520a63034ceb846089e97cdf3dd->leave($__internal_cba6be1e9c863f950282f107e1154089f77e7520a63034ceb846089e97cdf3dd_prof);

        
        $__internal_60394a7aad2187b1ac8d142378f29946e8afd1c69a2fd3526eb2c690648c7218->leave($__internal_60394a7aad2187b1ac8d142378f29946e8afd1c69a2fd3526eb2c690648c7218_prof);

    }

    public function getTemplateName()
    {
        return ":backend:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 62,  194 => 20,  185 => 19,  170 => 65,  167 => 62,  159 => 56,  153 => 53,  149 => 52,  143 => 49,  139 => 48,  135 => 47,  131 => 46,  127 => 45,  121 => 42,  117 => 41,  112 => 39,  108 => 38,  102 => 35,  91 => 26,  89 => 19,  69 => 9,  56 => 4,  47 => 3,  37 => 1,  34 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}
    {{ parent() }}
{% endblock %}

{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}  

    {% block BackBody %}   
        <!-- Page Content -->
        <div class=\"container\">

            <!-- Page Heading/Breadcrumbs -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Espace Abonné
                        <small></small>
                    </h1>
                    {% block breadcrumb %}
                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                {% endblock %}
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class=\"row\">
            <!-- Sidebar Column -->
            <div class=\"col-md-3\">
                <div class=\"list-group\">
                    <a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\" class=\"list-group-item\">Mon Profil</a>
                    <a href=\"#\" class=\"list-group-item\" data-toggle=\"collapse\" data-target=\"#sl\" data-parent=\"#menu\">Mes Paramètres</a>
                    <div id=\"sl\" class=\"sublinks collapse\">
                        <a href=\"{{ path('dudeego_platform_abonne_mesParametresMAIL') }}\" class=\"list-group-item small\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Changer d'email</a>
                        <a href=\"{{ path('dudeego_platform_abonne_mesParametresMDP') }}\" class=\"list-group-item small\"><span class=\"glyphicon glyphicon-chevron-right\"></span> Changer de mot de passe</a>
                    </div>
                    <a href=\"{{ path('dudeego_platform_abonne_mesDocuments') }}\" class=\"list-group-item\">Mes Documents</a>
                    <a href=\"{{ path('dudeego_platform_abonne_mesDemandes') }}\" class=\"list-group-item\">Mes Demandes</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"{{ path('dudeego_platform_abonne_universiteStepsOne') }}\" class=\"list-group-item\">Inscription Universitaire</a>
                    <a href=\"{{ path('dudeego_platform_abonne_langueStepsOne') }}\" class=\"list-group-item\">Inscription cours de langue</a>
                    <a href=\"{{ path('dudeego_platform_abonne_logementStepsOne') }}\" class=\"list-group-item\">Inscription logement</a>
                    <a href=\"{{ path('dudeego_platform_abonne_preparationStepsOne') }}\" class=\"list-group-item\">Inscription cours préparation</a>
                    <a href=\"{{ path('dudeego_platform_abonne_mutuelle') }}\" class=\"list-group-item\">Inscription mutuelle</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"{{ path('dudeego_platform_abonne_aide') }}\" class=\"list-group-item\">Aide</a>
                    <a href=\"{{ path('dudeego_platform_abonne_contact') }}\" class=\"list-group-item\">Contact</a>
                </div>
                <div class=\"list-group\">
                    <a href=\"{{ path('fos_user_security_logout') }}\" class=\"list-group-item\">Déconnexion</a>
                </div>
            </div>
            <!-- Content Column -->
            <div class=\"col-md-9\">
                {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
                {% block BackContent %} 

                {% endblock %}
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
{% endblock %}
{% endif %}

{#{% block BackPills %} 
{% include ':backend:pills.html.twig' %}
{% endblock %}#}", ":backend:sidebar.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources\\views/backend/sidebar.html.twig");
    }
}
