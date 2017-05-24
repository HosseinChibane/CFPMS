<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_89ff3e3530ee69c9da04e760084407c03189c69c38f1cd40a46277debc52be5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_fed2124f8f4bda88f2a8162d95ee4323f2af227f97ecf0c40f01e6814ee0653d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed2124f8f4bda88f2a8162d95ee4323f2af227f97ecf0c40f01e6814ee0653d->enter($__internal_fed2124f8f4bda88f2a8162d95ee4323f2af227f97ecf0c40f01e6814ee0653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_8279984ace64669079e257d2de3b744730b45d0bc0008bfe18be35063ca93926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8279984ace64669079e257d2de3b744730b45d0bc0008bfe18be35063ca93926->enter($__internal_8279984ace64669079e257d2de3b744730b45d0bc0008bfe18be35063ca93926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fed2124f8f4bda88f2a8162d95ee4323f2af227f97ecf0c40f01e6814ee0653d->leave($__internal_fed2124f8f4bda88f2a8162d95ee4323f2af227f97ecf0c40f01e6814ee0653d_prof);

        
        $__internal_8279984ace64669079e257d2de3b744730b45d0bc0008bfe18be35063ca93926->leave($__internal_8279984ace64669079e257d2de3b744730b45d0bc0008bfe18be35063ca93926_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c03c627d027ce737613987549567ec08c3287974bd10a0b58a2b11d2bc101bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c03c627d027ce737613987549567ec08c3287974bd10a0b58a2b11d2bc101bac->enter($__internal_c03c627d027ce737613987549567ec08c3287974bd10a0b58a2b11d2bc101bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2c11f5cc1e44cb1b3481b46654241b12b5ada87d9adeaa770fc413de357dfca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c11f5cc1e44cb1b3481b46654241b12b5ada87d9adeaa770fc413de357dfca8->enter($__internal_2c11f5cc1e44cb1b3481b46654241b12b5ada87d9adeaa770fc413de357dfca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_2c11f5cc1e44cb1b3481b46654241b12b5ada87d9adeaa770fc413de357dfca8->leave($__internal_2c11f5cc1e44cb1b3481b46654241b12b5ada87d9adeaa770fc413de357dfca8_prof);

        
        $__internal_c03c627d027ce737613987549567ec08c3287974bd10a0b58a2b11d2bc101bac->leave($__internal_c03c627d027ce737613987549567ec08c3287974bd10a0b58a2b11d2bc101bac_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\ChangePassword\\change_password.html.twig");
    }
}
