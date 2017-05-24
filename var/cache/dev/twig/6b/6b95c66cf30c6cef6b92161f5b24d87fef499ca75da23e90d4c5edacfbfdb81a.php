<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_43cc8892b73bed8a5c52b9f541815704be015211c6b29fc7ed44b4f427922138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37708ca92a80556e012c9a3e29232b4b9f640e829e52a9bf5f67b372e948f358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37708ca92a80556e012c9a3e29232b4b9f640e829e52a9bf5f67b372e948f358->enter($__internal_37708ca92a80556e012c9a3e29232b4b9f640e829e52a9bf5f67b372e948f358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_5345af1a605aa06250f59ff4016f4903036bbf1cde5b74ee4f5c8f54ce4674cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5345af1a605aa06250f59ff4016f4903036bbf1cde5b74ee4f5c8f54ce4674cb->enter($__internal_5345af1a605aa06250f59ff4016f4903036bbf1cde5b74ee4f5c8f54ce4674cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37708ca92a80556e012c9a3e29232b4b9f640e829e52a9bf5f67b372e948f358->leave($__internal_37708ca92a80556e012c9a3e29232b4b9f640e829e52a9bf5f67b372e948f358_prof);

        
        $__internal_5345af1a605aa06250f59ff4016f4903036bbf1cde5b74ee4f5c8f54ce4674cb->leave($__internal_5345af1a605aa06250f59ff4016f4903036bbf1cde5b74ee4f5c8f54ce4674cb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d5c4d163dde608d89c531e5fc7b9c5b121afcccf759b75dda04dc47632d309e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d5c4d163dde608d89c531e5fc7b9c5b121afcccf759b75dda04dc47632d309e->enter($__internal_3d5c4d163dde608d89c531e5fc7b9c5b121afcccf759b75dda04dc47632d309e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f8469f7d374a8590425ce07b378514d58247b13367d5172d86e51d18b795a986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8469f7d374a8590425ce07b378514d58247b13367d5172d86e51d18b795a986->enter($__internal_f8469f7d374a8590425ce07b378514d58247b13367d5172d86e51d18b795a986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "\t\t<div class=\"container\">
\t\t\t<!-- Page Heading/Breadcrumbs -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"page-header\">Connexion d'un compte
\t\t\t\t\t\t<small></small>
\t\t\t\t\t</h1>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Mot de passe oublié</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t";
        // line 25
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_f8469f7d374a8590425ce07b378514d58247b13367d5172d86e51d18b795a986->leave($__internal_f8469f7d374a8590425ce07b378514d58247b13367d5172d86e51d18b795a986_prof);

        
        $__internal_3d5c4d163dde608d89c531e5fc7b9c5b121afcccf759b75dda04dc47632d309e->leave($__internal_3d5c4d163dde608d89c531e5fc7b9c5b121afcccf759b75dda04dc47632d309e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 25,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

\t{% block fos_user_content %}
\t\t<div class=\"container\">
\t\t\t<!-- Page Heading/Breadcrumbs -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<h1 class=\"page-header\">Connexion d'un compte
\t\t\t\t\t\t<small></small>
\t\t\t\t\t</h1>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Mot de passe oublié</li>
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- /.row -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
