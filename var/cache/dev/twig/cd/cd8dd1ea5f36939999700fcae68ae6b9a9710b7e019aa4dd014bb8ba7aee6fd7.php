<?php

/* DUDEEGOPlatformBundle:front:accueil.html.twig */
class __TwigTemplate_6eaa9ccff49e8b2a39173ac2dab1eb48ee3febd2c0fe43cdf200241895118672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:accueil.html.twig", 3);
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
        $__internal_96c27e8adf1d9a9831bcdbcdf53b110c5aa6872d5899ce6c2d2528db592df876 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c27e8adf1d9a9831bcdbcdf53b110c5aa6872d5899ce6c2d2528db592df876->enter($__internal_96c27e8adf1d9a9831bcdbcdf53b110c5aa6872d5899ce6c2d2528db592df876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:accueil.html.twig"));

        $__internal_be9ff780b2b4890d193f23cf69ed51aca4cea120c756fb8a271eddef64186c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9ff780b2b4890d193f23cf69ed51aca4cea120c756fb8a271eddef64186c1a->enter($__internal_be9ff780b2b4890d193f23cf69ed51aca4cea120c756fb8a271eddef64186c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96c27e8adf1d9a9831bcdbcdf53b110c5aa6872d5899ce6c2d2528db592df876->leave($__internal_96c27e8adf1d9a9831bcdbcdf53b110c5aa6872d5899ce6c2d2528db592df876_prof);

        
        $__internal_be9ff780b2b4890d193f23cf69ed51aca4cea120c756fb8a271eddef64186c1a->leave($__internal_be9ff780b2b4890d193f23cf69ed51aca4cea120c756fb8a271eddef64186c1a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c2e3e6642cdd963f3adf53573aa8be91d22dec386c34d70693740cb86ad5bb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2e3e6642cdd963f3adf53573aa8be91d22dec386c34d70693740cb86ad5bb2->enter($__internal_1c2e3e6642cdd963f3adf53573aa8be91d22dec386c34d70693740cb86ad5bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bfe5b25e8aa5c0b5a9e5ac352567f3bf4411fed6dfc3e8c5dfe4b419d9570c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfe5b25e8aa5c0b5a9e5ac352567f3bf4411fed6dfc3e8c5dfe4b419d9570c2->enter($__internal_7bfe5b25e8aa5c0b5a9e5ac352567f3bf4411fed6dfc3e8c5dfe4b419d9570c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7bfe5b25e8aa5c0b5a9e5ac352567f3bf4411fed6dfc3e8c5dfe4b419d9570c2->leave($__internal_7bfe5b25e8aa5c0b5a9e5ac352567f3bf4411fed6dfc3e8c5dfe4b419d9570c2_prof);

        
        $__internal_1c2e3e6642cdd963f3adf53573aa8be91d22dec386c34d70693740cb86ad5bb2->leave($__internal_1c2e3e6642cdd963f3adf53573aa8be91d22dec386c34d70693740cb86ad5bb2_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_5be76af39f7c1c329cf67b6693f62a8d68262ea957125720b9a7ba3253312cf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be76af39f7c1c329cf67b6693f62a8d68262ea957125720b9a7ba3253312cf1->enter($__internal_5be76af39f7c1c329cf67b6693f62a8d68262ea957125720b9a7ba3253312cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_81b2810f49cccce44c35cb37a2792e703e1ed9de1beb0ae35a52c5a25d674ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81b2810f49cccce44c35cb37a2792e703e1ed9de1beb0ae35a52c5a25d674ca9->enter($__internal_81b2810f49cccce44c35cb37a2792e703e1ed9de1beb0ae35a52c5a25d674ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        echo " 
  ";
        // line 11
        echo "  ";
        $this->loadTemplate(":frontend:content.html.twig", "DUDEEGOPlatformBundle:front:accueil.html.twig", 11)->display($context);
        
        $__internal_81b2810f49cccce44c35cb37a2792e703e1ed9de1beb0ae35a52c5a25d674ca9->leave($__internal_81b2810f49cccce44c35cb37a2792e703e1ed9de1beb0ae35a52c5a25d674ca9_prof);

        
        $__internal_5be76af39f7c1c329cf67b6693f62a8d68262ea957125720b9a7ba3253312cf1->leave($__internal_5be76af39f7c1c329cf67b6693f62a8d68262ea957125720b9a7ba3253312cf1_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 11,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/DUDEEGO/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}

{% block title %}
\tAccueil - {{ parent() }}
{% endblock %}

{% block FrontContent %} 
  {# Contenu de la page Accueil #}
  {% include ':frontend:content.html.twig' %}
{% endblock %}", "DUDEEGOPlatformBundle:front:accueil.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/accueil.html.twig");
    }
}
