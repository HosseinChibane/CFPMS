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
        $__internal_d4d34a9661fe62d0f653c8caed12971974dad42ed5204453c9b623748b7ed6bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4d34a9661fe62d0f653c8caed12971974dad42ed5204453c9b623748b7ed6bb->enter($__internal_d4d34a9661fe62d0f653c8caed12971974dad42ed5204453c9b623748b7ed6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a8d82c6ecaddac8ec5e6ff4896768f73b3d9df58f75519756b424c10ea22631c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d82c6ecaddac8ec5e6ff4896768f73b3d9df58f75519756b424c10ea22631c->enter($__internal_a8d82c6ecaddac8ec5e6ff4896768f73b3d9df58f75519756b424c10ea22631c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4d34a9661fe62d0f653c8caed12971974dad42ed5204453c9b623748b7ed6bb->leave($__internal_d4d34a9661fe62d0f653c8caed12971974dad42ed5204453c9b623748b7ed6bb_prof);

        
        $__internal_a8d82c6ecaddac8ec5e6ff4896768f73b3d9df58f75519756b424c10ea22631c->leave($__internal_a8d82c6ecaddac8ec5e6ff4896768f73b3d9df58f75519756b424c10ea22631c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c1fa73a3a5e401794f7d67de13d3140635a99bb3d0b6bdd620e7c8241a79a951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1fa73a3a5e401794f7d67de13d3140635a99bb3d0b6bdd620e7c8241a79a951->enter($__internal_c1fa73a3a5e401794f7d67de13d3140635a99bb3d0b6bdd620e7c8241a79a951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c4404835045717ff140634d0daad0701a62cf3dc7187c88438a31a69cc34825a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4404835045717ff140634d0daad0701a62cf3dc7187c88438a31a69cc34825a->enter($__internal_c4404835045717ff140634d0daad0701a62cf3dc7187c88438a31a69cc34825a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c4404835045717ff140634d0daad0701a62cf3dc7187c88438a31a69cc34825a->leave($__internal_c4404835045717ff140634d0daad0701a62cf3dc7187c88438a31a69cc34825a_prof);

        
        $__internal_c1fa73a3a5e401794f7d67de13d3140635a99bb3d0b6bdd620e7c8241a79a951->leave($__internal_c1fa73a3a5e401794f7d67de13d3140635a99bb3d0b6bdd620e7c8241a79a951_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_eff80db2960b036dc75bf642dc4e3699d2f2fc76f2e0c9fdebf64fe17c57f10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff80db2960b036dc75bf642dc4e3699d2f2fc76f2e0c9fdebf64fe17c57f10d->enter($__internal_eff80db2960b036dc75bf642dc4e3699d2f2fc76f2e0c9fdebf64fe17c57f10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88371d2f784532926159a20ec99a4ca96a12c35c0f661751925c9f20ca4fca00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88371d2f784532926159a20ec99a4ca96a12c35c0f661751925c9f20ca4fca00->enter($__internal_88371d2f784532926159a20ec99a4ca96a12c35c0f661751925c9f20ca4fca00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_88371d2f784532926159a20ec99a4ca96a12c35c0f661751925c9f20ca4fca00->leave($__internal_88371d2f784532926159a20ec99a4ca96a12c35c0f661751925c9f20ca4fca00_prof);

        
        $__internal_eff80db2960b036dc75bf642dc4e3699d2f2fc76f2e0c9fdebf64fe17c57f10d->leave($__internal_eff80db2960b036dc75bf642dc4e3699d2f2fc76f2e0c9fdebf64fe17c57f10d_prof);

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
