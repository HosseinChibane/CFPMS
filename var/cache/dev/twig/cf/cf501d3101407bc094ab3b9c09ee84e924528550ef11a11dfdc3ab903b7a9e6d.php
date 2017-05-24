<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_d95bff57eeae5ef9e408835a26ca192b615fa55bdde47cdd86198a27b125055b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_614351693c3bdb0a887922fbb69cce7423b49267a5c47a1129bf97bd0a3b2e90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614351693c3bdb0a887922fbb69cce7423b49267a5c47a1129bf97bd0a3b2e90->enter($__internal_614351693c3bdb0a887922fbb69cce7423b49267a5c47a1129bf97bd0a3b2e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_c9dd88c750096bcdeab101a4b4cbd21343fb90ae5da47b9469315d0f40381ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9dd88c750096bcdeab101a4b4cbd21343fb90ae5da47b9469315d0f40381ac3->enter($__internal_c9dd88c750096bcdeab101a4b4cbd21343fb90ae5da47b9469315d0f40381ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_614351693c3bdb0a887922fbb69cce7423b49267a5c47a1129bf97bd0a3b2e90->leave($__internal_614351693c3bdb0a887922fbb69cce7423b49267a5c47a1129bf97bd0a3b2e90_prof);

        
        $__internal_c9dd88c750096bcdeab101a4b4cbd21343fb90ae5da47b9469315d0f40381ac3->leave($__internal_c9dd88c750096bcdeab101a4b4cbd21343fb90ae5da47b9469315d0f40381ac3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a987a1f969c25fbb15d474e11a7e10dd53dcee8eafed4a703a167d2778b8aa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a987a1f969c25fbb15d474e11a7e10dd53dcee8eafed4a703a167d2778b8aa4->enter($__internal_7a987a1f969c25fbb15d474e11a7e10dd53dcee8eafed4a703a167d2778b8aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_40e6483db2c86a06f575439a52ce3b9291147200ab873e0976a22d20b1a6e58a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40e6483db2c86a06f575439a52ce3b9291147200ab873e0976a22d20b1a6e58a->enter($__internal_40e6483db2c86a06f575439a52ce3b9291147200ab873e0976a22d20b1a6e58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_40e6483db2c86a06f575439a52ce3b9291147200ab873e0976a22d20b1a6e58a->leave($__internal_40e6483db2c86a06f575439a52ce3b9291147200ab873e0976a22d20b1a6e58a_prof);

        
        $__internal_7a987a1f969c25fbb15d474e11a7e10dd53dcee8eafed4a703a167d2778b8aa4->leave($__internal_7a987a1f969c25fbb15d474e11a7e10dd53dcee8eafed4a703a167d2778b8aa4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Resetting\\reset.html.twig");
    }
}
