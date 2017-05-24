<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_f25166beceb6255e1a1b6ed197ebee624ddcd43c700162ce50dcc4d9da03b679 extends Twig_Template
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
        $__internal_4954142771bb861e7cb66079433e89bbd50c26622956e3f6a17a81cd2d00d8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4954142771bb861e7cb66079433e89bbd50c26622956e3f6a17a81cd2d00d8af->enter($__internal_4954142771bb861e7cb66079433e89bbd50c26622956e3f6a17a81cd2d00d8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_d0b382f1ba5763315eb0055f39426e84b08d4fe5c255e86eee92ebc795007ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b382f1ba5763315eb0055f39426e84b08d4fe5c255e86eee92ebc795007ee7->enter($__internal_d0b382f1ba5763315eb0055f39426e84b08d4fe5c255e86eee92ebc795007ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4954142771bb861e7cb66079433e89bbd50c26622956e3f6a17a81cd2d00d8af->leave($__internal_4954142771bb861e7cb66079433e89bbd50c26622956e3f6a17a81cd2d00d8af_prof);

        
        $__internal_d0b382f1ba5763315eb0055f39426e84b08d4fe5c255e86eee92ebc795007ee7->leave($__internal_d0b382f1ba5763315eb0055f39426e84b08d4fe5c255e86eee92ebc795007ee7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
