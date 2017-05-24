<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_cb61d961321cfb00b15e57158c2b1967658ba26ad24ff26428310f99aa864952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81da4c937cbef97da2693145c8a56379e5c17b80233b4423106cbd814cd5d016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81da4c937cbef97da2693145c8a56379e5c17b80233b4423106cbd814cd5d016->enter($__internal_81da4c937cbef97da2693145c8a56379e5c17b80233b4423106cbd814cd5d016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_1a8f503ea8458bcb202fd8fee95f64fd0f02b0c178d39fb6d041c36a341fd41e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8f503ea8458bcb202fd8fee95f64fd0f02b0c178d39fb6d041c36a341fd41e->enter($__internal_1a8f503ea8458bcb202fd8fee95f64fd0f02b0c178d39fb6d041c36a341fd41e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81da4c937cbef97da2693145c8a56379e5c17b80233b4423106cbd814cd5d016->leave($__internal_81da4c937cbef97da2693145c8a56379e5c17b80233b4423106cbd814cd5d016_prof);

        
        $__internal_1a8f503ea8458bcb202fd8fee95f64fd0f02b0c178d39fb6d041c36a341fd41e->leave($__internal_1a8f503ea8458bcb202fd8fee95f64fd0f02b0c178d39fb6d041c36a341fd41e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_89e63925a53a8cc0aa9cc0c209c45c0c31aa027b19104e792b43c5a9c9252d03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e63925a53a8cc0aa9cc0c209c45c0c31aa027b19104e792b43c5a9c9252d03->enter($__internal_89e63925a53a8cc0aa9cc0c209c45c0c31aa027b19104e792b43c5a9c9252d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_004e7e17f5f23657bde797efe19e31bba4cd50eddadebe89d7d7f8568e1e0518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004e7e17f5f23657bde797efe19e31bba4cd50eddadebe89d7d7f8568e1e0518->enter($__internal_004e7e17f5f23657bde797efe19e31bba4cd50eddadebe89d7d7f8568e1e0518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_004e7e17f5f23657bde797efe19e31bba4cd50eddadebe89d7d7f8568e1e0518->leave($__internal_004e7e17f5f23657bde797efe19e31bba4cd50eddadebe89d7d7f8568e1e0518_prof);

        
        $__internal_89e63925a53a8cc0aa9cc0c209c45c0c31aa027b19104e792b43c5a9c9252d03->leave($__internal_89e63925a53a8cc0aa9cc0c209c45c0c31aa027b19104e792b43c5a9c9252d03_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ea3c668fdfbeb1aca5c7d3c9f9d9456700f0bd22c793d3430a19b9cb801ffa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea3c668fdfbeb1aca5c7d3c9f9d9456700f0bd22c793d3430a19b9cb801ffa5->enter($__internal_9ea3c668fdfbeb1aca5c7d3c9f9d9456700f0bd22c793d3430a19b9cb801ffa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a45679b65c999d11fb7190ed5b53835e4d2dc769a687bf6078fa4a02d89bf62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a45679b65c999d11fb7190ed5b53835e4d2dc769a687bf6078fa4a02d89bf62->enter($__internal_5a45679b65c999d11fb7190ed5b53835e4d2dc769a687bf6078fa4a02d89bf62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5a45679b65c999d11fb7190ed5b53835e4d2dc769a687bf6078fa4a02d89bf62->leave($__internal_5a45679b65c999d11fb7190ed5b53835e4d2dc769a687bf6078fa4a02d89bf62_prof);

        
        $__internal_9ea3c668fdfbeb1aca5c7d3c9f9d9456700f0bd22c793d3430a19b9cb801ffa5->leave($__internal_9ea3c668fdfbeb1aca5c7d3c9f9d9456700f0bd22c793d3430a19b9cb801ffa5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
