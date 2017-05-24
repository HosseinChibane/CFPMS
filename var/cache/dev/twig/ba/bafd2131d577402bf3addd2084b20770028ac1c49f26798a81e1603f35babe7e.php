<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_aa4f7f77aa97f880445e7ab8950479f185029bff03fda7a7b4f7ecc9df57cbdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_3c60f982f1a492ed64c8495f514e99fac8ac8d71357e201209e46d96ca795a58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c60f982f1a492ed64c8495f514e99fac8ac8d71357e201209e46d96ca795a58->enter($__internal_3c60f982f1a492ed64c8495f514e99fac8ac8d71357e201209e46d96ca795a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_d6d146089a3cfb4d76955a79efb27a44db1b903c0aeeee84b30ee13feb5f6788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d146089a3cfb4d76955a79efb27a44db1b903c0aeeee84b30ee13feb5f6788->enter($__internal_d6d146089a3cfb4d76955a79efb27a44db1b903c0aeeee84b30ee13feb5f6788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c60f982f1a492ed64c8495f514e99fac8ac8d71357e201209e46d96ca795a58->leave($__internal_3c60f982f1a492ed64c8495f514e99fac8ac8d71357e201209e46d96ca795a58_prof);

        
        $__internal_d6d146089a3cfb4d76955a79efb27a44db1b903c0aeeee84b30ee13feb5f6788->leave($__internal_d6d146089a3cfb4d76955a79efb27a44db1b903c0aeeee84b30ee13feb5f6788_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_63f2ba3025eb713517f165288921650a3c1f226b4e327977e5b59656de1db7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63f2ba3025eb713517f165288921650a3c1f226b4e327977e5b59656de1db7ee->enter($__internal_63f2ba3025eb713517f165288921650a3c1f226b4e327977e5b59656de1db7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c38cc045b638efd70c68fd72ff3395e1b4ffb3a2f4560074b67a7f0e2148ef60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38cc045b638efd70c68fd72ff3395e1b4ffb3a2f4560074b67a7f0e2148ef60->enter($__internal_c38cc045b638efd70c68fd72ff3395e1b4ffb3a2f4560074b67a7f0e2148ef60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_c38cc045b638efd70c68fd72ff3395e1b4ffb3a2f4560074b67a7f0e2148ef60->leave($__internal_c38cc045b638efd70c68fd72ff3395e1b4ffb3a2f4560074b67a7f0e2148ef60_prof);

        
        $__internal_63f2ba3025eb713517f165288921650a3c1f226b4e327977e5b59656de1db7ee->leave($__internal_63f2ba3025eb713517f165288921650a3c1f226b4e327977e5b59656de1db7ee_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
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
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Resetting\\check_email.html.twig");
    }
}
