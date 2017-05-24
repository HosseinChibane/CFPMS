<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_f02411ca3592284d7b8ffa58f803414ec7ea0d6342c18269eecbf648598ef731 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_08e01baba588d38a201adb21408343f53e732437515fa5be9c91c6e22a0f16d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e01baba588d38a201adb21408343f53e732437515fa5be9c91c6e22a0f16d8->enter($__internal_08e01baba588d38a201adb21408343f53e732437515fa5be9c91c6e22a0f16d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_a9e8599d631ccd0ec9b7182a7e6e13e3eae3ae39c36d8690b711503bb6fab42c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9e8599d631ccd0ec9b7182a7e6e13e3eae3ae39c36d8690b711503bb6fab42c->enter($__internal_a9e8599d631ccd0ec9b7182a7e6e13e3eae3ae39c36d8690b711503bb6fab42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e01baba588d38a201adb21408343f53e732437515fa5be9c91c6e22a0f16d8->leave($__internal_08e01baba588d38a201adb21408343f53e732437515fa5be9c91c6e22a0f16d8_prof);

        
        $__internal_a9e8599d631ccd0ec9b7182a7e6e13e3eae3ae39c36d8690b711503bb6fab42c->leave($__internal_a9e8599d631ccd0ec9b7182a7e6e13e3eae3ae39c36d8690b711503bb6fab42c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b81245e962c5cd58e721630de4918ca6c17d66c6a4b645f44b596fff90beed86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b81245e962c5cd58e721630de4918ca6c17d66c6a4b645f44b596fff90beed86->enter($__internal_b81245e962c5cd58e721630de4918ca6c17d66c6a4b645f44b596fff90beed86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_424e824583d1993a1d1699ec3c4d823cc2f2930607af7636fca5e6e5768257ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424e824583d1993a1d1699ec3c4d823cc2f2930607af7636fca5e6e5768257ad->enter($__internal_424e824583d1993a1d1699ec3c4d823cc2f2930607af7636fca5e6e5768257ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_424e824583d1993a1d1699ec3c4d823cc2f2930607af7636fca5e6e5768257ad->leave($__internal_424e824583d1993a1d1699ec3c4d823cc2f2930607af7636fca5e6e5768257ad_prof);

        
        $__internal_b81245e962c5cd58e721630de4918ca6c17d66c6a4b645f44b596fff90beed86->leave($__internal_b81245e962c5cd58e721630de4918ca6c17d66c6a4b645f44b596fff90beed86_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
