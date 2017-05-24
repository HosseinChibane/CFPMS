<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_847d182963c9733fe8dec54e7ed3f7e8c052de2af292c2bab644d34f2f3910b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_1e42265cb37341d98ea792030787f90194c94ea3dd1d7cf1b8cfc74c05e12491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e42265cb37341d98ea792030787f90194c94ea3dd1d7cf1b8cfc74c05e12491->enter($__internal_1e42265cb37341d98ea792030787f90194c94ea3dd1d7cf1b8cfc74c05e12491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_4bb57959871ca18ac61e16b74762db9c483a4d0bed95f53a5086eb6fef043b06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb57959871ca18ac61e16b74762db9c483a4d0bed95f53a5086eb6fef043b06->enter($__internal_4bb57959871ca18ac61e16b74762db9c483a4d0bed95f53a5086eb6fef043b06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e42265cb37341d98ea792030787f90194c94ea3dd1d7cf1b8cfc74c05e12491->leave($__internal_1e42265cb37341d98ea792030787f90194c94ea3dd1d7cf1b8cfc74c05e12491_prof);

        
        $__internal_4bb57959871ca18ac61e16b74762db9c483a4d0bed95f53a5086eb6fef043b06->leave($__internal_4bb57959871ca18ac61e16b74762db9c483a4d0bed95f53a5086eb6fef043b06_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed4816166c130d2776464d86dbdb7fee2870fe4d3f78d4282724e88230af532d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed4816166c130d2776464d86dbdb7fee2870fe4d3f78d4282724e88230af532d->enter($__internal_ed4816166c130d2776464d86dbdb7fee2870fe4d3f78d4282724e88230af532d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f8084b8107c6ae1ea5bb8ca51796fa88d527cd914be0e6822a0521dbd8c9b66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8084b8107c6ae1ea5bb8ca51796fa88d527cd914be0e6822a0521dbd8c9b66b->enter($__internal_f8084b8107c6ae1ea5bb8ca51796fa88d527cd914be0e6822a0521dbd8c9b66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f8084b8107c6ae1ea5bb8ca51796fa88d527cd914be0e6822a0521dbd8c9b66b->leave($__internal_f8084b8107c6ae1ea5bb8ca51796fa88d527cd914be0e6822a0521dbd8c9b66b_prof);

        
        $__internal_ed4816166c130d2776464d86dbdb7fee2870fe4d3f78d4282724e88230af532d->leave($__internal_ed4816166c130d2776464d86dbdb7fee2870fe4d3f78d4282724e88230af532d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
