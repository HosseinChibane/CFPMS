<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_ed4b2f396a8240b301c961ac4c7d4a2cc88213a262d0b75edf70516f11b31e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bf9f9166dcabb50e7d96d2c7161346966e13f8772e3e42d28d454aafc3d00cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bf9f9166dcabb50e7d96d2c7161346966e13f8772e3e42d28d454aafc3d00cb->enter($__internal_1bf9f9166dcabb50e7d96d2c7161346966e13f8772e3e42d28d454aafc3d00cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_b3fb4402ca2c570523bae9e8c84a9cc566be0ae74fda760baa7a42efbb454875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3fb4402ca2c570523bae9e8c84a9cc566be0ae74fda760baa7a42efbb454875->enter($__internal_b3fb4402ca2c570523bae9e8c84a9cc566be0ae74fda760baa7a42efbb454875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bf9f9166dcabb50e7d96d2c7161346966e13f8772e3e42d28d454aafc3d00cb->leave($__internal_1bf9f9166dcabb50e7d96d2c7161346966e13f8772e3e42d28d454aafc3d00cb_prof);

        
        $__internal_b3fb4402ca2c570523bae9e8c84a9cc566be0ae74fda760baa7a42efbb454875->leave($__internal_b3fb4402ca2c570523bae9e8c84a9cc566be0ae74fda760baa7a42efbb454875_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c918f5bec2e9fe1153c51a976e18cccf302b661d698a90dc7673c12b74368bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c918f5bec2e9fe1153c51a976e18cccf302b661d698a90dc7673c12b74368bc9->enter($__internal_c918f5bec2e9fe1153c51a976e18cccf302b661d698a90dc7673c12b74368bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0b24b773db03d46a7041c928405f11d36e67d7952d800d35af7f2a616de64eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b24b773db03d46a7041c928405f11d36e67d7952d800d35af7f2a616de64eae->enter($__internal_0b24b773db03d46a7041c928405f11d36e67d7952d800d35af7f2a616de64eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0b24b773db03d46a7041c928405f11d36e67d7952d800d35af7f2a616de64eae->leave($__internal_0b24b773db03d46a7041c928405f11d36e67d7952d800d35af7f2a616de64eae_prof);

        
        $__internal_c918f5bec2e9fe1153c51a976e18cccf302b661d698a90dc7673c12b74368bc9->leave($__internal_c918f5bec2e9fe1153c51a976e18cccf302b661d698a90dc7673c12b74368bc9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d2b003ce32590c9f570376892a1f4b0b6260fad173551c069e95e65c6f4527d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d2b003ce32590c9f570376892a1f4b0b6260fad173551c069e95e65c6f4527d->enter($__internal_0d2b003ce32590c9f570376892a1f4b0b6260fad173551c069e95e65c6f4527d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64cea5533bb407328a6a4bb78c5b2e71cb3337afe10d3a84cdf19d6e38f88721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64cea5533bb407328a6a4bb78c5b2e71cb3337afe10d3a84cdf19d6e38f88721->enter($__internal_64cea5533bb407328a6a4bb78c5b2e71cb3337afe10d3a84cdf19d6e38f88721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_64cea5533bb407328a6a4bb78c5b2e71cb3337afe10d3a84cdf19d6e38f88721->leave($__internal_64cea5533bb407328a6a4bb78c5b2e71cb3337afe10d3a84cdf19d6e38f88721_prof);

        
        $__internal_0d2b003ce32590c9f570376892a1f4b0b6260fad173551c069e95e65c6f4527d->leave($__internal_0d2b003ce32590c9f570376892a1f4b0b6260fad173551c069e95e65c6f4527d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
