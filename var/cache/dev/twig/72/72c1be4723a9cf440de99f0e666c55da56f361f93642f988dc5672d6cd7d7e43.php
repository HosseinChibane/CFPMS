<?php

/* :backend:sidebar.html.twig */
class __TwigTemplate_fad36ac1f66e629660780fddc7d6f79ce02c775bd5003e6b97970571ceb142f6 extends Twig_Template
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
        $__internal_8e780237dda20e6f75addfd9af3cbaab77e9779322e4cda647141356e7c0912d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e780237dda20e6f75addfd9af3cbaab77e9779322e4cda647141356e7c0912d->enter($__internal_8e780237dda20e6f75addfd9af3cbaab77e9779322e4cda647141356e7c0912d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        $__internal_96e982fed12e75f0114f1fd831ba8ef680cbed0aae81d09513bb487b948e709c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e982fed12e75f0114f1fd831ba8ef680cbed0aae81d09513bb487b948e709c->enter($__internal_96e982fed12e75f0114f1fd831ba8ef680cbed0aae81d09513bb487b948e709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:sidebar.html.twig"));

        // line 7
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e780237dda20e6f75addfd9af3cbaab77e9779322e4cda647141356e7c0912d->leave($__internal_8e780237dda20e6f75addfd9af3cbaab77e9779322e4cda647141356e7c0912d_prof);

        
        $__internal_96e982fed12e75f0114f1fd831ba8ef680cbed0aae81d09513bb487b948e709c->leave($__internal_96e982fed12e75f0114f1fd831ba8ef680cbed0aae81d09513bb487b948e709c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e24d66c8b6f80313c166e0143460ef2b492716106f3f35a4fe57e53c323bafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e24d66c8b6f80313c166e0143460ef2b492716106f3f35a4fe57e53c323bafe->enter($__internal_3e24d66c8b6f80313c166e0143460ef2b492716106f3f35a4fe57e53c323bafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_618590115e087540c583160530e937c1f88ad0717b8607e5a715eef3a2bc347b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_618590115e087540c583160530e937c1f88ad0717b8607e5a715eef3a2bc347b->enter($__internal_618590115e087540c583160530e937c1f88ad0717b8607e5a715eef3a2bc347b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_618590115e087540c583160530e937c1f88ad0717b8607e5a715eef3a2bc347b->leave($__internal_618590115e087540c583160530e937c1f88ad0717b8607e5a715eef3a2bc347b_prof);

        
        $__internal_3e24d66c8b6f80313c166e0143460ef2b492716106f3f35a4fe57e53c323bafe->leave($__internal_3e24d66c8b6f80313c166e0143460ef2b492716106f3f35a4fe57e53c323bafe_prof);

    }

    // line 9
    public function block_BackBody($context, array $blocks = array())
    {
        $__internal_aef86f0e580315cb59a8158799d5486db260c6ff4d22aed4554bef18564b05d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef86f0e580315cb59a8158799d5486db260c6ff4d22aed4554bef18564b05d8->enter($__internal_aef86f0e580315cb59a8158799d5486db260c6ff4d22aed4554bef18564b05d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBody"));

        $__internal_e7e7eeb75657c65ccec80e83f4a5efd2699f680e552f03253f86a6e4eee6323c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e7eeb75657c65ccec80e83f4a5efd2699f680e552f03253f86a6e4eee6323c->enter($__internal_e7e7eeb75657c65ccec80e83f4a5efd2699f680e552f03253f86a6e4eee6323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBody"));

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
        
        $__internal_e7e7eeb75657c65ccec80e83f4a5efd2699f680e552f03253f86a6e4eee6323c->leave($__internal_e7e7eeb75657c65ccec80e83f4a5efd2699f680e552f03253f86a6e4eee6323c_prof);

        
        $__internal_aef86f0e580315cb59a8158799d5486db260c6ff4d22aed4554bef18564b05d8->leave($__internal_aef86f0e580315cb59a8158799d5486db260c6ff4d22aed4554bef18564b05d8_prof);

    }

    // line 19
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_03864f5e1f88bd17f43ff0a23a793ff577c9ca6cb0dcb1dcf4f6b85d899f9156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03864f5e1f88bd17f43ff0a23a793ff577c9ca6cb0dcb1dcf4f6b85d899f9156->enter($__internal_03864f5e1f88bd17f43ff0a23a793ff577c9ca6cb0dcb1dcf4f6b85d899f9156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_45eaf95a2130d3bfd9d6a220122feb37c439916dd26f6b79baf5ff2c09a242b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45eaf95a2130d3bfd9d6a220122feb37c439916dd26f6b79baf5ff2c09a242b1->enter($__internal_45eaf95a2130d3bfd9d6a220122feb37c439916dd26f6b79baf5ff2c09a242b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 20
        echo "                        <ol class=\"breadcrumb\">
                            <li class=\"active\">Home
                        </li>
                        <li></li>
                    </ol>
                ";
        
        $__internal_45eaf95a2130d3bfd9d6a220122feb37c439916dd26f6b79baf5ff2c09a242b1->leave($__internal_45eaf95a2130d3bfd9d6a220122feb37c439916dd26f6b79baf5ff2c09a242b1_prof);

        
        $__internal_03864f5e1f88bd17f43ff0a23a793ff577c9ca6cb0dcb1dcf4f6b85d899f9156->leave($__internal_03864f5e1f88bd17f43ff0a23a793ff577c9ca6cb0dcb1dcf4f6b85d899f9156_prof);

    }

    // line 62
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_a1092e81d723d3ec208b1929220904f806391e5475225ea62cbf787c51e2e8b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1092e81d723d3ec208b1929220904f806391e5475225ea62cbf787c51e2e8b4->enter($__internal_a1092e81d723d3ec208b1929220904f806391e5475225ea62cbf787c51e2e8b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_b563c0bb626f27386cd6ac8a24cd59e71125d476a10d56c8a642d6212147d867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b563c0bb626f27386cd6ac8a24cd59e71125d476a10d56c8a642d6212147d867->enter($__internal_b563c0bb626f27386cd6ac8a24cd59e71125d476a10d56c8a642d6212147d867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 

                ";
        
        $__internal_b563c0bb626f27386cd6ac8a24cd59e71125d476a10d56c8a642d6212147d867->leave($__internal_b563c0bb626f27386cd6ac8a24cd59e71125d476a10d56c8a642d6212147d867_prof);

        
        $__internal_a1092e81d723d3ec208b1929220904f806391e5475225ea62cbf787c51e2e8b4->leave($__internal_a1092e81d723d3ec208b1929220904f806391e5475225ea62cbf787c51e2e8b4_prof);

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
{% endblock %}#}", ":backend:sidebar.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\views\\backend\\sidebar.html.twig");
    }
}
