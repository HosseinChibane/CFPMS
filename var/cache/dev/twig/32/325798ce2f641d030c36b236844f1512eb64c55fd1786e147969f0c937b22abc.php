<?php

/* @DUDEEGOPlatform/front/detailscomparateur.html.twig */
class __TwigTemplate_a196ccc98fc571a6dda39bf3a77126ab9425d06d8026ca5b8b8ae941eb99f373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "@DUDEEGOPlatform/front/detailscomparateur.html.twig", 2);
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
        $__internal_bf02cfef533862651b8d8c78d07d0f82365e3df8314a94666ebe5fd01e585d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf02cfef533862651b8d8c78d07d0f82365e3df8314a94666ebe5fd01e585d92->enter($__internal_bf02cfef533862651b8d8c78d07d0f82365e3df8314a94666ebe5fd01e585d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/detailscomparateur.html.twig"));

        $__internal_853a9e9ea5fca8ce61b0e47c492a3ec0782a0103f9ee3a5d8d9a90cda244fdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_853a9e9ea5fca8ce61b0e47c492a3ec0782a0103f9ee3a5d8d9a90cda244fdd0->enter($__internal_853a9e9ea5fca8ce61b0e47c492a3ec0782a0103f9ee3a5d8d9a90cda244fdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/detailscomparateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf02cfef533862651b8d8c78d07d0f82365e3df8314a94666ebe5fd01e585d92->leave($__internal_bf02cfef533862651b8d8c78d07d0f82365e3df8314a94666ebe5fd01e585d92_prof);

        
        $__internal_853a9e9ea5fca8ce61b0e47c492a3ec0782a0103f9ee3a5d8d9a90cda244fdd0->leave($__internal_853a9e9ea5fca8ce61b0e47c492a3ec0782a0103f9ee3a5d8d9a90cda244fdd0_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc058885baec6084b7fb00c42e4680fb4192815da8f5c2718fae3cbe4d556bb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc058885baec6084b7fb00c42e4680fb4192815da8f5c2718fae3cbe4d556bb8->enter($__internal_dc058885baec6084b7fb00c42e4680fb4192815da8f5c2718fae3cbe4d556bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e722b8bbd18c73dc2b8149d1c82c3237148cb51c73b7a1588de1665f621d834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e722b8bbd18c73dc2b8149d1c82c3237148cb51c73b7a1588de1665f621d834->enter($__internal_2e722b8bbd18c73dc2b8149d1c82c3237148cb51c73b7a1588de1665f621d834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "\tDetails - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2e722b8bbd18c73dc2b8149d1c82c3237148cb51c73b7a1588de1665f621d834->leave($__internal_2e722b8bbd18c73dc2b8149d1c82c3237148cb51c73b7a1588de1665f621d834_prof);

        
        $__internal_dc058885baec6084b7fb00c42e4680fb4192815da8f5c2718fae3cbe4d556bb8->leave($__internal_dc058885baec6084b7fb00c42e4680fb4192815da8f5c2718fae3cbe4d556bb8_prof);

    }

    // line 8
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_758edd9b64304613df2ea4e073ccc237a519209dfae7bfb0fc2821ab5bca6bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758edd9b64304613df2ea4e073ccc237a519209dfae7bfb0fc2821ab5bca6bf6->enter($__internal_758edd9b64304613df2ea4e073ccc237a519209dfae7bfb0fc2821ab5bca6bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_5ca919cd4d82a2f78f79bee406c957f87293f2bbea58eece868db31b400214e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca919cd4d82a2f78f79bee406c957f87293f2bbea58eece868db31b400214e3->enter($__internal_5ca919cd4d82a2f78f79bee406c957f87293f2bbea58eece868db31b400214e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

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
        
        $__internal_5ca919cd4d82a2f78f79bee406c957f87293f2bbea58eece868db31b400214e3->leave($__internal_5ca919cd4d82a2f78f79bee406c957f87293f2bbea58eece868db31b400214e3_prof);

        
        $__internal_758edd9b64304613df2ea4e073ccc237a519209dfae7bfb0fc2821ab5bca6bf6->leave($__internal_758edd9b64304613df2ea4e073ccc237a519209dfae7bfb0fc2821ab5bca6bf6_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/front/detailscomparateur.html.twig";
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

{% endblock %}\t", "@DUDEEGOPlatform/front/detailscomparateur.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\detailscomparateur.html.twig");
    }
}
