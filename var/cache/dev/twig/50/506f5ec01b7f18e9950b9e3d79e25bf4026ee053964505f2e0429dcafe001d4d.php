<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a4cd9aa5ff588963dce479dbc0616faeb9fc02cac7c9398775167e68788e688e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_01fa8f9fc1590b1442b2d1d935f70f390bbe1a69ca88f7d1abb713b11c5e1a72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01fa8f9fc1590b1442b2d1d935f70f390bbe1a69ca88f7d1abb713b11c5e1a72->enter($__internal_01fa8f9fc1590b1442b2d1d935f70f390bbe1a69ca88f7d1abb713b11c5e1a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_cb9dd36618583b2ba890f33c7bc8f52fd018abb59815f0ae4a0228cbe22b3166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9dd36618583b2ba890f33c7bc8f52fd018abb59815f0ae4a0228cbe22b3166->enter($__internal_cb9dd36618583b2ba890f33c7bc8f52fd018abb59815f0ae4a0228cbe22b3166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01fa8f9fc1590b1442b2d1d935f70f390bbe1a69ca88f7d1abb713b11c5e1a72->leave($__internal_01fa8f9fc1590b1442b2d1d935f70f390bbe1a69ca88f7d1abb713b11c5e1a72_prof);

        
        $__internal_cb9dd36618583b2ba890f33c7bc8f52fd018abb59815f0ae4a0228cbe22b3166->leave($__internal_cb9dd36618583b2ba890f33c7bc8f52fd018abb59815f0ae4a0228cbe22b3166_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cede103230ad90a51692618def388eec440fe61534aa347d44e25d720dcae9c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cede103230ad90a51692618def388eec440fe61534aa347d44e25d720dcae9c6->enter($__internal_cede103230ad90a51692618def388eec440fe61534aa347d44e25d720dcae9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_32a06bc76fe199bdb0e5fcce21437035eb76a79b16485d9e17acd8849c08d680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a06bc76fe199bdb0e5fcce21437035eb76a79b16485d9e17acd8849c08d680->enter($__internal_32a06bc76fe199bdb0e5fcce21437035eb76a79b16485d9e17acd8849c08d680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_32a06bc76fe199bdb0e5fcce21437035eb76a79b16485d9e17acd8849c08d680->leave($__internal_32a06bc76fe199bdb0e5fcce21437035eb76a79b16485d9e17acd8849c08d680_prof);

        
        $__internal_cede103230ad90a51692618def388eec440fe61534aa347d44e25d720dcae9c6->leave($__internal_cede103230ad90a51692618def388eec440fe61534aa347d44e25d720dcae9c6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c676a9d1227e4a300668d7a5e6aa412f1087b9e99397827783580576e27ce428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c676a9d1227e4a300668d7a5e6aa412f1087b9e99397827783580576e27ce428->enter($__internal_c676a9d1227e4a300668d7a5e6aa412f1087b9e99397827783580576e27ce428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d03b8ba5472c39a7ad8f1f9a80903ae909fbbe0414f63cb6cebd5b48767d7555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03b8ba5472c39a7ad8f1f9a80903ae909fbbe0414f63cb6cebd5b48767d7555->enter($__internal_d03b8ba5472c39a7ad8f1f9a80903ae909fbbe0414f63cb6cebd5b48767d7555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d03b8ba5472c39a7ad8f1f9a80903ae909fbbe0414f63cb6cebd5b48767d7555->leave($__internal_d03b8ba5472c39a7ad8f1f9a80903ae909fbbe0414f63cb6cebd5b48767d7555_prof);

        
        $__internal_c676a9d1227e4a300668d7a5e6aa412f1087b9e99397827783580576e27ce428->leave($__internal_c676a9d1227e4a300668d7a5e6aa412f1087b9e99397827783580576e27ce428_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
