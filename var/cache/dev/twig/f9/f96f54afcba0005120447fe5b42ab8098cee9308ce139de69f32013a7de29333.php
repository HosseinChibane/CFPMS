<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_e17f1fbee5be881abd38ecc69270994b65c0e027d3d8c9a07de0de8820623eff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17a093f218c6d05ccc5625126bbbfd972ac49e487a7a6cab6317193c27d40321 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17a093f218c6d05ccc5625126bbbfd972ac49e487a7a6cab6317193c27d40321->enter($__internal_17a093f218c6d05ccc5625126bbbfd972ac49e487a7a6cab6317193c27d40321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_7fe9f46411ea4d02d45403d0e57abb10abe6415244c765aba618faf8c571891e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe9f46411ea4d02d45403d0e57abb10abe6415244c765aba618faf8c571891e->enter($__internal_7fe9f46411ea4d02d45403d0e57abb10abe6415244c765aba618faf8c571891e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a093f218c6d05ccc5625126bbbfd972ac49e487a7a6cab6317193c27d40321->leave($__internal_17a093f218c6d05ccc5625126bbbfd972ac49e487a7a6cab6317193c27d40321_prof);

        
        $__internal_7fe9f46411ea4d02d45403d0e57abb10abe6415244c765aba618faf8c571891e->leave($__internal_7fe9f46411ea4d02d45403d0e57abb10abe6415244c765aba618faf8c571891e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_560538c39e1458a7bd8106118d84d886a9bfa573936a595c492cd785997b0f9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_560538c39e1458a7bd8106118d84d886a9bfa573936a595c492cd785997b0f9a->enter($__internal_560538c39e1458a7bd8106118d84d886a9bfa573936a595c492cd785997b0f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_304c815bd8242c0fcdfe481fc12c0bf5e4c02879d8ad9b5e622b63a43e181be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304c815bd8242c0fcdfe481fc12c0bf5e4c02879d8ad9b5e622b63a43e181be2->enter($__internal_304c815bd8242c0fcdfe481fc12c0bf5e4c02879d8ad9b5e622b63a43e181be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_304c815bd8242c0fcdfe481fc12c0bf5e4c02879d8ad9b5e622b63a43e181be2->leave($__internal_304c815bd8242c0fcdfe481fc12c0bf5e4c02879d8ad9b5e622b63a43e181be2_prof);

        
        $__internal_560538c39e1458a7bd8106118d84d886a9bfa573936a595c492cd785997b0f9a->leave($__internal_560538c39e1458a7bd8106118d84d886a9bfa573936a595c492cd785997b0f9a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
