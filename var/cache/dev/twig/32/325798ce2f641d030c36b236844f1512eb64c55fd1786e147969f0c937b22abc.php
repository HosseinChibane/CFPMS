<?php

/* DUDEEGOPlatformBundle:front:detailscomparateur.html.twig */
class __TwigTemplate_a196ccc98fc571a6dda39bf3a77126ab9425d06d8026ca5b8b8ae941eb99f373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:detailscomparateur.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'FrontContent' => array($this, 'block_FrontContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DUDEEGOPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ad04fb270298d37c690b894b49fd92ea2b0e4fa7872a4ccea27c2d4f7f2e6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ad04fb270298d37c690b894b49fd92ea2b0e4fa7872a4ccea27c2d4f7f2e6b8->enter($__internal_1ad04fb270298d37c690b894b49fd92ea2b0e4fa7872a4ccea27c2d4f7f2e6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:detailscomparateur.html.twig"));

        $__internal_c4ffdd456d7a79681c7c1c781f3991d7a21a1e2cc99a7c72d57dd217e9bca5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ffdd456d7a79681c7c1c781f3991d7a21a1e2cc99a7c72d57dd217e9bca5ca->enter($__internal_c4ffdd456d7a79681c7c1c781f3991d7a21a1e2cc99a7c72d57dd217e9bca5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:detailscomparateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ad04fb270298d37c690b894b49fd92ea2b0e4fa7872a4ccea27c2d4f7f2e6b8->leave($__internal_1ad04fb270298d37c690b894b49fd92ea2b0e4fa7872a4ccea27c2d4f7f2e6b8_prof);

        
        $__internal_c4ffdd456d7a79681c7c1c781f3991d7a21a1e2cc99a7c72d57dd217e9bca5ca->leave($__internal_c4ffdd456d7a79681c7c1c781f3991d7a21a1e2cc99a7c72d57dd217e9bca5ca_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ae12a8a78f885a30d2f30bc641d60bef1263b187c843b911b3f0bf61330243e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ae12a8a78f885a30d2f30bc641d60bef1263b187c843b911b3f0bf61330243e->enter($__internal_0ae12a8a78f885a30d2f30bc641d60bef1263b187c843b911b3f0bf61330243e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a55f5cd7cff95a7cab2991573fe8fb6958fc0df33fd6e543e9f29cd30d9a4efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55f5cd7cff95a7cab2991573fe8fb6958fc0df33fd6e543e9f29cd30d9a4efe->enter($__internal_a55f5cd7cff95a7cab2991573fe8fb6958fc0df33fd6e543e9f29cd30d9a4efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\tDetails - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a55f5cd7cff95a7cab2991573fe8fb6958fc0df33fd6e543e9f29cd30d9a4efe->leave($__internal_a55f5cd7cff95a7cab2991573fe8fb6958fc0df33fd6e543e9f29cd30d9a4efe_prof);

        
        $__internal_0ae12a8a78f885a30d2f30bc641d60bef1263b187c843b911b3f0bf61330243e->leave($__internal_0ae12a8a78f885a30d2f30bc641d60bef1263b187c843b911b3f0bf61330243e_prof);

    }

    // line 8
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_21152f68970d6ab3a48ee3a992c1afe674ff4bdc0c0df61ec5e8c178f171a9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21152f68970d6ab3a48ee3a992c1afe674ff4bdc0c0df61ec5e8c178f171a9c0->enter($__internal_21152f68970d6ab3a48ee3a992c1afe674ff4bdc0c0df61ec5e8c178f171a9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_56cff783300786549b5ece2677a59c95bb59c297810f8b03772ffbbf022cc8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56cff783300786549b5ece2677a59c95bb59c297810f8b03772ffbbf022cc8f7->enter($__internal_56cff783300786549b5ece2677a59c95bb59c297810f8b03772ffbbf022cc8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        // line 9
        echo "\t<!-- Page Heading/Breadcrumbs -->
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1 class=\"page-header\">
\t\t\t\tDétails 
\t\t\t\t<small>";
        // line 14
        if (array_key_exists("listUniversite", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["listUniversite"] ?? $this->getContext($context, "listUniversite")), "nometablissement", array()), "html", null, true);
            echo " ";
        }
        echo "</small>
\t\t\t</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_home");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_showComparateur");
        echo "\">Comparateur</a></li>
\t\t\t\t<li class=\"active\">Détails</li>
\t\t\t</ol>
\t\t</div>
\t</div>
\t<!-- /.row -->

\t<!-- Content Row -->
\t<div class=\"row\">
\t\t<!-- Sidebar Column -->
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"list-group\">
\t\t\t\t<a href=\"#section1\" class=\"list-group-item\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Informations</a>
\t\t\t\t<a href=\"#section2\" class=\"list-group-item\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Formations</a>
\t\t\t\t<a href=\"#section3\" class=\"list-group-item\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Langues</a>
\t\t\t\t<a href=\"#sectionInscription\" class=\"list-group-item\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Inscription</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- Content Column -->

\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"row\">
\t\t\t\t";
        // line 40
        if (array_key_exists("listUniversite", $context)) {
            // line 41
            echo "\t\t\t\t\t<div id=\"#section1\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4>Informations</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute(($context["listUniversite"] ?? $this->getContext($context, "listUniversite")), "description", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"#section2\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4>Formations</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["listUniversite"] ?? $this->getContext($context, "listUniversite")), "formations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["itemformation"]) {
                // line 58
                echo "\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($context["itemformation"], "formation", array()), "html", null, true);
                echo " 
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemformation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"#section3\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4>Langues</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["listUniversite"] ?? $this->getContext($context, "listUniversite")), "formations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["itemformation"]) {
                // line 70
                echo "\t\t\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["itemformation"], "langues", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["itemlangue"]) {
                    // line 71
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["itemlangue"], "langue", array()), "html", null, true);
                    echo " 
\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemlangue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemformation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"#sectionInscription\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4>Inscription</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSi vous souhaitez vous inscrire à une universite, vous devez avoir un compte utilisateur sur notre plateforme. Pour la création d'un compte, suivez le guide <a href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">ici</a>.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        // line 91
        echo "

\t\t</div>
\t\t<div class=\"col-sm-2 col-md-2 col-lg-2 col-xl-2\">
\t\t</div>\t
\t</div>

";
        
        $__internal_56cff783300786549b5ece2677a59c95bb59c297810f8b03772ffbbf022cc8f7->leave($__internal_56cff783300786549b5ece2677a59c95bb59c297810f8b03772ffbbf022cc8f7_prof);

        
        $__internal_21152f68970d6ab3a48ee3a992c1afe674ff4bdc0c0df61ec5e8c178f171a9c0->leave($__internal_21152f68970d6ab3a48ee3a992c1afe674ff4bdc0c0df61ec5e8c178f171a9c0_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:detailscomparateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 91,  201 => 84,  189 => 74,  183 => 73,  174 => 71,  169 => 70,  165 => 69,  154 => 60,  145 => 58,  141 => 57,  128 => 47,  120 => 41,  118 => 40,  93 => 18,  89 => 17,  79 => 14,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
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
{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}

{% block title %}
\tDetails - {{ parent() }}
{% endblock %}

{% block FrontContent %}
\t<!-- Page Heading/Breadcrumbs -->
\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<h1 class=\"page-header\">
\t\t\t\tDétails 
\t\t\t\t<small>{% if listUniversite is defined %} {{ listUniversite.nometablissement }} {% endif %}</small>
\t\t\t</h1>
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t<li><a href=\"{{ path('dudeego_platform_home') }}\">Accueil</a></li>
\t\t\t\t<li><a href=\"{{ path('dudeego_platform_showComparateur') }}\">Comparateur</a></li>
\t\t\t\t<li class=\"active\">Détails</li>
\t\t\t</ol>
\t\t</div>
\t</div>
\t<!-- /.row -->

\t<!-- Content Row -->
\t<div class=\"row\">
\t\t<!-- Sidebar Column -->
\t\t<div class=\"col-md-3\">
\t\t\t<div class=\"list-group\">
\t\t\t\t<a href=\"#section1\" class=\"list-group-item\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Informations</a>
\t\t\t\t<a href=\"#section2\" class=\"list-group-item\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Formations</a>
\t\t\t\t<a href=\"#section3\" class=\"list-group-item\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Langues</a>
\t\t\t\t<a href=\"#sectionInscription\" class=\"list-group-item\"><i class=\"glyphicon glyphicon-chevron-right\"></i> Inscription</a>
\t\t\t</div>
\t\t</div>
\t\t<!-- Content Column -->

\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"row\">
\t\t\t\t{% if listUniversite is defined %}
\t\t\t\t\t<div id=\"#section1\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4>Informations</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{{ listUniversite.description }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"#section2\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4>Formations</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t{% for itemformation in listUniversite.formations %}
\t\t\t\t\t\t\t\t\t{{ itemformation.formation }} 
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"#section3\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4>Langues</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t{% for itemformation in listUniversite.formations %}
\t\t\t\t\t\t\t\t\t{% for itemlangue in itemformation.langues %}
\t\t\t\t\t\t\t\t\t\t{{ itemlangue.langue }} 
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"#sectionInscription\">
\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t<h4>Inscription</h4>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tSi vous souhaitez vous inscrire à une universite, vous devez avoir un compte utilisateur sur notre plateforme. Pour la création d'un compte, suivez le guide <a href=\"{{ path('fos_user_registration_register') }}\">ici</a>.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endif %}


\t\t</div>
\t\t<div class=\"col-sm-2 col-md-2 col-lg-2 col-xl-2\">
\t\t</div>\t
\t</div>

{% endblock %}\t", "DUDEEGOPlatformBundle:front:detailscomparateur.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\detailscomparateur.html.twig");
    }
}
