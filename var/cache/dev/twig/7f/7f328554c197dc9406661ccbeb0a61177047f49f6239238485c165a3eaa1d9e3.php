<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_c61bd9e9fffe3acf08afa0c916cb5bffae33fdceb3cef3826ccae3e082450489 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2df0cfee78f48e51ee34cf0c1f65cc72c7c41c95ae0806906cc32e9f503eb7b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df0cfee78f48e51ee34cf0c1f65cc72c7c41c95ae0806906cc32e9f503eb7b0->enter($__internal_2df0cfee78f48e51ee34cf0c1f65cc72c7c41c95ae0806906cc32e9f503eb7b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_2062dcfdb9750a4a10c221d39047094f142c6699f6b2c3b0df3d1efe302531fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2062dcfdb9750a4a10c221d39047094f142c6699f6b2c3b0df3d1efe302531fb->enter($__internal_2062dcfdb9750a4a10c221d39047094f142c6699f6b2c3b0df3d1efe302531fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Page Heading/Breadcrumbs -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Création d'un compte
\t\t\t\t\t<small></small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">Inscription</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>

\t\t<!-- /.row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t<form action=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"username\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" required=\"required\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-lg btn-primary btn-block\"  value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
  <!-- /.container -->";
        
        $__internal_2df0cfee78f48e51ee34cf0c1f65cc72c7c41c95ae0806906cc32e9f503eb7b0->leave($__internal_2df0cfee78f48e51ee34cf0c1f65cc72c7c41c95ae0806906cc32e9f503eb7b0_prof);

        
        $__internal_2062dcfdb9750a4a10c221d39047094f142c6699f6b2c3b0df3d1efe302531fb->leave($__internal_2062dcfdb9750a4a10c221d39047094f142c6699f6b2c3b0df3d1efe302531fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 29,  53 => 25,  48 => 23,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Page Heading/Breadcrumbs -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Création d'un compte
\t\t\t\t\t<small></small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">Inscription</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>

\t\t<!-- /.row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"jumbotron\">
\t\t\t\t\t<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" required=\"required\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"submit\" class=\"btn btn-lg btn-primary btn-block\"  value=\"{{ 'resetting.request.submit'|trans }}\" />
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
  <!-- /.container -->", "FOSUserBundle:Resetting:request_content.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
