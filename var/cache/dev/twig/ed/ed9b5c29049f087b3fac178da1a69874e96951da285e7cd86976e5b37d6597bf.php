<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_ef9c072bc697221bff6e03360882df651bbf7931461d717f88e8e3f5ed3ce48d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_40c5e7be87f7a312525df88b4fae1bf8ec9d50beadf2c516d0e6c45a6794581b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40c5e7be87f7a312525df88b4fae1bf8ec9d50beadf2c516d0e6c45a6794581b->enter($__internal_40c5e7be87f7a312525df88b4fae1bf8ec9d50beadf2c516d0e6c45a6794581b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_70ca8eb504e2373ff5686c03adf8570c71156987def0c471035eb1b2f1f6ea99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ca8eb504e2373ff5686c03adf8570c71156987def0c471035eb1b2f1f6ea99->enter($__internal_70ca8eb504e2373ff5686c03adf8570c71156987def0c471035eb1b2f1f6ea99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40c5e7be87f7a312525df88b4fae1bf8ec9d50beadf2c516d0e6c45a6794581b->leave($__internal_40c5e7be87f7a312525df88b4fae1bf8ec9d50beadf2c516d0e6c45a6794581b_prof);

        
        $__internal_70ca8eb504e2373ff5686c03adf8570c71156987def0c471035eb1b2f1f6ea99->leave($__internal_70ca8eb504e2373ff5686c03adf8570c71156987def0c471035eb1b2f1f6ea99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7d86a12b778ef06654407f605426f09bdc3de38c71f5a2cb91c893de16fa632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d86a12b778ef06654407f605426f09bdc3de38c71f5a2cb91c893de16fa632->enter($__internal_a7d86a12b778ef06654407f605426f09bdc3de38c71f5a2cb91c893de16fa632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d0c0254e4e4d95b4242c3e0159f9296f76eaffd0b177b018a44c95f879195fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c0254e4e4d95b4242c3e0159f9296f76eaffd0b177b018a44c95f879195fd7->enter($__internal_d0c0254e4e4d95b4242c3e0159f9296f76eaffd0b177b018a44c95f879195fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_d0c0254e4e4d95b4242c3e0159f9296f76eaffd0b177b018a44c95f879195fd7->leave($__internal_d0c0254e4e4d95b4242c3e0159f9296f76eaffd0b177b018a44c95f879195fd7_prof);

        
        $__internal_a7d86a12b778ef06654407f605426f09bdc3de38c71f5a2cb91c893de16fa632->leave($__internal_a7d86a12b778ef06654407f605426f09bdc3de38c71f5a2cb91c893de16fa632_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
