<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_29e8a34a2b8571cc55f3d4e86f93c6796802cf36a485327c31e3215e667555ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_14d83fd18eb56b8ca90f571e1ad01faa6bb53a68e5eefbf9c62ba267ba608b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d83fd18eb56b8ca90f571e1ad01faa6bb53a68e5eefbf9c62ba267ba608b1e->enter($__internal_14d83fd18eb56b8ca90f571e1ad01faa6bb53a68e5eefbf9c62ba267ba608b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_34b9781b0ea3cffc50ffe806cc6b37e3e3d4130c5e37ee6478dffc57bacc9301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34b9781b0ea3cffc50ffe806cc6b37e3e3d4130c5e37ee6478dffc57bacc9301->enter($__internal_34b9781b0ea3cffc50ffe806cc6b37e3e3d4130c5e37ee6478dffc57bacc9301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14d83fd18eb56b8ca90f571e1ad01faa6bb53a68e5eefbf9c62ba267ba608b1e->leave($__internal_14d83fd18eb56b8ca90f571e1ad01faa6bb53a68e5eefbf9c62ba267ba608b1e_prof);

        
        $__internal_34b9781b0ea3cffc50ffe806cc6b37e3e3d4130c5e37ee6478dffc57bacc9301->leave($__internal_34b9781b0ea3cffc50ffe806cc6b37e3e3d4130c5e37ee6478dffc57bacc9301_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fdb5becac1ae37a47b853ce3f863748e254007ab919c06efec99e6fd170c0649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb5becac1ae37a47b853ce3f863748e254007ab919c06efec99e6fd170c0649->enter($__internal_fdb5becac1ae37a47b853ce3f863748e254007ab919c06efec99e6fd170c0649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_00a5efcc6338344b1ca074f3557f0a4103d0ab6df87bfd2fef0a0b7b71fad98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a5efcc6338344b1ca074f3557f0a4103d0ab6df87bfd2fef0a0b7b71fad98f->enter($__internal_00a5efcc6338344b1ca074f3557f0a4103d0ab6df87bfd2fef0a0b7b71fad98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_00a5efcc6338344b1ca074f3557f0a4103d0ab6df87bfd2fef0a0b7b71fad98f->leave($__internal_00a5efcc6338344b1ca074f3557f0a4103d0ab6df87bfd2fef0a0b7b71fad98f_prof);

        
        $__internal_fdb5becac1ae37a47b853ce3f863748e254007ab919c06efec99e6fd170c0649->leave($__internal_fdb5becac1ae37a47b853ce3f863748e254007ab919c06efec99e6fd170c0649_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Group\\show.html.twig");
    }
}
