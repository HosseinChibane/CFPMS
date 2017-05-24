<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_d76d55bb55f294a942cb5a03a2e2f863458de06824f81c3a93d2091a736761f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_e02b653002f999397fb2c2aa28cd193f3ad2b3ae7811adff118a7c4fd0d9e8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02b653002f999397fb2c2aa28cd193f3ad2b3ae7811adff118a7c4fd0d9e8df->enter($__internal_e02b653002f999397fb2c2aa28cd193f3ad2b3ae7811adff118a7c4fd0d9e8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_e61e13fad6a681f39b4ceecfc4e55f2c1b7c3ded9c5b993926570cb74dbf257f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61e13fad6a681f39b4ceecfc4e55f2c1b7c3ded9c5b993926570cb74dbf257f->enter($__internal_e61e13fad6a681f39b4ceecfc4e55f2c1b7c3ded9c5b993926570cb74dbf257f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e02b653002f999397fb2c2aa28cd193f3ad2b3ae7811adff118a7c4fd0d9e8df->leave($__internal_e02b653002f999397fb2c2aa28cd193f3ad2b3ae7811adff118a7c4fd0d9e8df_prof);

        
        $__internal_e61e13fad6a681f39b4ceecfc4e55f2c1b7c3ded9c5b993926570cb74dbf257f->leave($__internal_e61e13fad6a681f39b4ceecfc4e55f2c1b7c3ded9c5b993926570cb74dbf257f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_646fd86fbdc5aceb22c561a4ac3a9c018dbe8ade87094f2d7674ac75bbbde2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646fd86fbdc5aceb22c561a4ac3a9c018dbe8ade87094f2d7674ac75bbbde2e6->enter($__internal_646fd86fbdc5aceb22c561a4ac3a9c018dbe8ade87094f2d7674ac75bbbde2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0f341b23f38589a7fa310074e15e4c5cefb2bbe6ecf2ff86c9aedfad1ab499bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f341b23f38589a7fa310074e15e4c5cefb2bbe6ecf2ff86c9aedfad1ab499bc->enter($__internal_0f341b23f38589a7fa310074e15e4c5cefb2bbe6ecf2ff86c9aedfad1ab499bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0f341b23f38589a7fa310074e15e4c5cefb2bbe6ecf2ff86c9aedfad1ab499bc->leave($__internal_0f341b23f38589a7fa310074e15e4c5cefb2bbe6ecf2ff86c9aedfad1ab499bc_prof);

        
        $__internal_646fd86fbdc5aceb22c561a4ac3a9c018dbe8ade87094f2d7674ac75bbbde2e6->leave($__internal_646fd86fbdc5aceb22c561a4ac3a9c018dbe8ade87094f2d7674ac75bbbde2e6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
