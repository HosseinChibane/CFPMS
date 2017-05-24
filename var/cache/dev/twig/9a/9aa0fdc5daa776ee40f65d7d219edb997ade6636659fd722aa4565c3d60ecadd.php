<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_92ede7f623f2f692b67116ec6d2f663695c19d1c3e9275bf78be2f956632732c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_f83e0f686208c934dfdccdc7ffe05ab1c338976535bdb58dfc2f6a2f68cede68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83e0f686208c934dfdccdc7ffe05ab1c338976535bdb58dfc2f6a2f68cede68->enter($__internal_f83e0f686208c934dfdccdc7ffe05ab1c338976535bdb58dfc2f6a2f68cede68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_fc69aa73502dd478c4687be7acecad2cfef2b4b0cc8314737582c75ab59fb0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc69aa73502dd478c4687be7acecad2cfef2b4b0cc8314737582c75ab59fb0bf->enter($__internal_fc69aa73502dd478c4687be7acecad2cfef2b4b0cc8314737582c75ab59fb0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f83e0f686208c934dfdccdc7ffe05ab1c338976535bdb58dfc2f6a2f68cede68->leave($__internal_f83e0f686208c934dfdccdc7ffe05ab1c338976535bdb58dfc2f6a2f68cede68_prof);

        
        $__internal_fc69aa73502dd478c4687be7acecad2cfef2b4b0cc8314737582c75ab59fb0bf->leave($__internal_fc69aa73502dd478c4687be7acecad2cfef2b4b0cc8314737582c75ab59fb0bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1a7020f9c98894b02d7560e81fddf4db0f582c622c183881eca59f02c9d9d22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1a7020f9c98894b02d7560e81fddf4db0f582c622c183881eca59f02c9d9d22->enter($__internal_f1a7020f9c98894b02d7560e81fddf4db0f582c622c183881eca59f02c9d9d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac4554c189c9dc330eab5d58c52bbabfa02d6b5b61a5e7d704bc39214d05a354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4554c189c9dc330eab5d58c52bbabfa02d6b5b61a5e7d704bc39214d05a354->enter($__internal_ac4554c189c9dc330eab5d58c52bbabfa02d6b5b61a5e7d704bc39214d05a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ac4554c189c9dc330eab5d58c52bbabfa02d6b5b61a5e7d704bc39214d05a354->leave($__internal_ac4554c189c9dc330eab5d58c52bbabfa02d6b5b61a5e7d704bc39214d05a354_prof);

        
        $__internal_f1a7020f9c98894b02d7560e81fddf4db0f582c622c183881eca59f02c9d9d22->leave($__internal_f1a7020f9c98894b02d7560e81fddf4db0f582c622c183881eca59f02c9d9d22_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
