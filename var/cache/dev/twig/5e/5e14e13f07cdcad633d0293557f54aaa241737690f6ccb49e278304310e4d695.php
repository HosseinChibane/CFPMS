<?php

/* @DUDEEGOPlatform/front/accueil.html.twig */
class __TwigTemplate_4ae27407c8abf2df29f1d995d8886e863ce6984e847768d388befacfb5a7a640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "@DUDEEGOPlatform/front/accueil.html.twig", 3);
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
        $__internal_495d641633f49d68c8988c843e59e57abff2df796f11ad82a81154b18d4b811b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_495d641633f49d68c8988c843e59e57abff2df796f11ad82a81154b18d4b811b->enter($__internal_495d641633f49d68c8988c843e59e57abff2df796f11ad82a81154b18d4b811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/accueil.html.twig"));

        $__internal_20282576ce3c9699f6b246970a0fd57ac6bb84d6e1cc72559136590fe0444cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20282576ce3c9699f6b246970a0fd57ac6bb84d6e1cc72559136590fe0444cfb->enter($__internal_20282576ce3c9699f6b246970a0fd57ac6bb84d6e1cc72559136590fe0444cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_495d641633f49d68c8988c843e59e57abff2df796f11ad82a81154b18d4b811b->leave($__internal_495d641633f49d68c8988c843e59e57abff2df796f11ad82a81154b18d4b811b_prof);

        
        $__internal_20282576ce3c9699f6b246970a0fd57ac6bb84d6e1cc72559136590fe0444cfb->leave($__internal_20282576ce3c9699f6b246970a0fd57ac6bb84d6e1cc72559136590fe0444cfb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ba99db5a102ad912a0b9d2f319e1ffd8d9833754042b945b7397a825184fe41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba99db5a102ad912a0b9d2f319e1ffd8d9833754042b945b7397a825184fe41->enter($__internal_5ba99db5a102ad912a0b9d2f319e1ffd8d9833754042b945b7397a825184fe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f5452c922c78ac43e814c33d9e7f0ce8809a1af2604b7f4616d4af2ff01f5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5452c922c78ac43e814c33d9e7f0ce8809a1af2604b7f4616d4af2ff01f5c5->enter($__internal_6f5452c922c78ac43e814c33d9e7f0ce8809a1af2604b7f4616d4af2ff01f5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tAccueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6f5452c922c78ac43e814c33d9e7f0ce8809a1af2604b7f4616d4af2ff01f5c5->leave($__internal_6f5452c922c78ac43e814c33d9e7f0ce8809a1af2604b7f4616d4af2ff01f5c5_prof);

        
        $__internal_5ba99db5a102ad912a0b9d2f319e1ffd8d9833754042b945b7397a825184fe41->leave($__internal_5ba99db5a102ad912a0b9d2f319e1ffd8d9833754042b945b7397a825184fe41_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_64be79f0e16ee4af15fb57f1445929e6bb8b0aed61c4e4e896684086a5e345f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64be79f0e16ee4af15fb57f1445929e6bb8b0aed61c4e4e896684086a5e345f9->enter($__internal_64be79f0e16ee4af15fb57f1445929e6bb8b0aed61c4e4e896684086a5e345f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_a1806615d8bd749b5ce394ca06a9c0030968c2fe3d8530dcd265f64e1639f7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1806615d8bd749b5ce394ca06a9c0030968c2fe3d8530dcd265f64e1639f7b8->enter($__internal_a1806615d8bd749b5ce394ca06a9c0030968c2fe3d8530dcd265f64e1639f7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        echo " 
  ";
        // line 11
        echo "  ";
        $this->loadTemplate(":frontend:content.html.twig", "@DUDEEGOPlatform/front/accueil.html.twig", 11)->display($context);
        
        $__internal_a1806615d8bd749b5ce394ca06a9c0030968c2fe3d8530dcd265f64e1639f7b8->leave($__internal_a1806615d8bd749b5ce394ca06a9c0030968c2fe3d8530dcd265f64e1639f7b8_prof);

        
        $__internal_64be79f0e16ee4af15fb57f1445929e6bb8b0aed61c4e4e896684086a5e345f9->leave($__internal_64be79f0e16ee4af15fb57f1445929e6bb8b0aed61c4e4e896684086a5e345f9_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/front/accueil.html.twig";
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
{% endblock %}", "@DUDEEGOPlatform/front/accueil.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\accueil.html.twig");
    }
}
