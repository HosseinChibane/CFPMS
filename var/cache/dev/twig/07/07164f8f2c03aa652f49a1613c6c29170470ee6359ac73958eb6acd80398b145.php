<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_57b77a5a925e88acf95dcae5a46b65ff7afe7e5aed31c1026f48a1cd2a4520bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_b8f8275225cc44841638a70c3ad0fa76d3fa1593ce490a39737b40e632a2afc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f8275225cc44841638a70c3ad0fa76d3fa1593ce490a39737b40e632a2afc6->enter($__internal_b8f8275225cc44841638a70c3ad0fa76d3fa1593ce490a39737b40e632a2afc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_733f8330bfc87f5d146786bf43f9320f111cf7f601065da924ece3eee8d631d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733f8330bfc87f5d146786bf43f9320f111cf7f601065da924ece3eee8d631d9->enter($__internal_733f8330bfc87f5d146786bf43f9320f111cf7f601065da924ece3eee8d631d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8f8275225cc44841638a70c3ad0fa76d3fa1593ce490a39737b40e632a2afc6->leave($__internal_b8f8275225cc44841638a70c3ad0fa76d3fa1593ce490a39737b40e632a2afc6_prof);

        
        $__internal_733f8330bfc87f5d146786bf43f9320f111cf7f601065da924ece3eee8d631d9->leave($__internal_733f8330bfc87f5d146786bf43f9320f111cf7f601065da924ece3eee8d631d9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5f060c055fe901fe6998801d5cdf03a09ff34ddb8a8cfed99bde656bfafef6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f060c055fe901fe6998801d5cdf03a09ff34ddb8a8cfed99bde656bfafef6dc->enter($__internal_5f060c055fe901fe6998801d5cdf03a09ff34ddb8a8cfed99bde656bfafef6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_62e207568ea6d260fbe74de8585b6f4ab22a96201fd517986231f1a6e172797d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e207568ea6d260fbe74de8585b6f4ab22a96201fd517986231f1a6e172797d->enter($__internal_62e207568ea6d260fbe74de8585b6f4ab22a96201fd517986231f1a6e172797d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_62e207568ea6d260fbe74de8585b6f4ab22a96201fd517986231f1a6e172797d->leave($__internal_62e207568ea6d260fbe74de8585b6f4ab22a96201fd517986231f1a6e172797d_prof);

        
        $__internal_5f060c055fe901fe6998801d5cdf03a09ff34ddb8a8cfed99bde656bfafef6dc->leave($__internal_5f060c055fe901fe6998801d5cdf03a09ff34ddb8a8cfed99bde656bfafef6dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
