<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_cf40f484cfaa0bba1b53cd1566aa8e412e2b40614374c124b3f87af57244efb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d8ed849626d7f4d009d62e8c98e327a823dec5f633c72293fdfe7c909668442a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8ed849626d7f4d009d62e8c98e327a823dec5f633c72293fdfe7c909668442a->enter($__internal_d8ed849626d7f4d009d62e8c98e327a823dec5f633c72293fdfe7c909668442a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_22ec76ca4f1a2114a93846e831c8a33b3109a9eb9887524037eff4a4fad22397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ec76ca4f1a2114a93846e831c8a33b3109a9eb9887524037eff4a4fad22397->enter($__internal_22ec76ca4f1a2114a93846e831c8a33b3109a9eb9887524037eff4a4fad22397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8ed849626d7f4d009d62e8c98e327a823dec5f633c72293fdfe7c909668442a->leave($__internal_d8ed849626d7f4d009d62e8c98e327a823dec5f633c72293fdfe7c909668442a_prof);

        
        $__internal_22ec76ca4f1a2114a93846e831c8a33b3109a9eb9887524037eff4a4fad22397->leave($__internal_22ec76ca4f1a2114a93846e831c8a33b3109a9eb9887524037eff4a4fad22397_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1965ea060b1dde967864e8658058853d44da939cec03091ad1dc73c4810fd71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1965ea060b1dde967864e8658058853d44da939cec03091ad1dc73c4810fd71->enter($__internal_b1965ea060b1dde967864e8658058853d44da939cec03091ad1dc73c4810fd71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dd13516005c99119cb30d034775e848f8b27acee9ecf923c71c058216684ee1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd13516005c99119cb30d034775e848f8b27acee9ecf923c71c058216684ee1c->enter($__internal_dd13516005c99119cb30d034775e848f8b27acee9ecf923c71c058216684ee1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_dd13516005c99119cb30d034775e848f8b27acee9ecf923c71c058216684ee1c->leave($__internal_dd13516005c99119cb30d034775e848f8b27acee9ecf923c71c058216684ee1c_prof);

        
        $__internal_b1965ea060b1dde967864e8658058853d44da939cec03091ad1dc73c4810fd71->leave($__internal_b1965ea060b1dde967864e8658058853d44da939cec03091ad1dc73c4810fd71_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Profile\\show.html.twig");
    }
}
