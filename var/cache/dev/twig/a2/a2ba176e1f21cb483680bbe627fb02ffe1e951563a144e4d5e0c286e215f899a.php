<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_0c39b825166e32d50bc439fb4a2823b5577cefa40b3e91275889eb624b16b7dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_92cacca9a3eab100d83416622bbfbe9060ca82290c6af43067c48d17b34b9eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cacca9a3eab100d83416622bbfbe9060ca82290c6af43067c48d17b34b9eda->enter($__internal_92cacca9a3eab100d83416622bbfbe9060ca82290c6af43067c48d17b34b9eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_6dd2d4394b18cc6805984813a3352f11556fe32f3ed49c052fcafc651cb36435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd2d4394b18cc6805984813a3352f11556fe32f3ed49c052fcafc651cb36435->enter($__internal_6dd2d4394b18cc6805984813a3352f11556fe32f3ed49c052fcafc651cb36435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92cacca9a3eab100d83416622bbfbe9060ca82290c6af43067c48d17b34b9eda->leave($__internal_92cacca9a3eab100d83416622bbfbe9060ca82290c6af43067c48d17b34b9eda_prof);

        
        $__internal_6dd2d4394b18cc6805984813a3352f11556fe32f3ed49c052fcafc651cb36435->leave($__internal_6dd2d4394b18cc6805984813a3352f11556fe32f3ed49c052fcafc651cb36435_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_af2f7986b0753c42e4a120899ba09c7466db4913ff797130eda3c60daae76a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2f7986b0753c42e4a120899ba09c7466db4913ff797130eda3c60daae76a27->enter($__internal_af2f7986b0753c42e4a120899ba09c7466db4913ff797130eda3c60daae76a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_71f703b289da1191cf0f68246d7f6de2ce5f9bf93e67359969f252d0f318efc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f703b289da1191cf0f68246d7f6de2ce5f9bf93e67359969f252d0f318efc5->enter($__internal_71f703b289da1191cf0f68246d7f6de2ce5f9bf93e67359969f252d0f318efc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_71f703b289da1191cf0f68246d7f6de2ce5f9bf93e67359969f252d0f318efc5->leave($__internal_71f703b289da1191cf0f68246d7f6de2ce5f9bf93e67359969f252d0f318efc5_prof);

        
        $__internal_af2f7986b0753c42e4a120899ba09c7466db4913ff797130eda3c60daae76a27->leave($__internal_af2f7986b0753c42e4a120899ba09c7466db4913ff797130eda3c60daae76a27_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Resetting\\request.html.twig");
    }
}
