<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_847c5c50997a97f0b38f308b42373c139dfaaf4b55950ff7ff2ddf0e0b316d98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_3b7779f4f304ee7f8107453dcf2c71083ef2160302a3e775e0921e7e87b50f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b7779f4f304ee7f8107453dcf2c71083ef2160302a3e775e0921e7e87b50f3f->enter($__internal_3b7779f4f304ee7f8107453dcf2c71083ef2160302a3e775e0921e7e87b50f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_dda6698c58751149c7734c8b234e24216072025e70561d51411c69e18b48c0da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda6698c58751149c7734c8b234e24216072025e70561d51411c69e18b48c0da->enter($__internal_dda6698c58751149c7734c8b234e24216072025e70561d51411c69e18b48c0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b7779f4f304ee7f8107453dcf2c71083ef2160302a3e775e0921e7e87b50f3f->leave($__internal_3b7779f4f304ee7f8107453dcf2c71083ef2160302a3e775e0921e7e87b50f3f_prof);

        
        $__internal_dda6698c58751149c7734c8b234e24216072025e70561d51411c69e18b48c0da->leave($__internal_dda6698c58751149c7734c8b234e24216072025e70561d51411c69e18b48c0da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89e3b1a049341708db495ea33c7b0cc521cc61a2b5229a37a00f06bbc995d54b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e3b1a049341708db495ea33c7b0cc521cc61a2b5229a37a00f06bbc995d54b->enter($__internal_89e3b1a049341708db495ea33c7b0cc521cc61a2b5229a37a00f06bbc995d54b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e73a7cb9bcc2987425f07f51be81a42803e2cd6518204e554b59b050b1778ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73a7cb9bcc2987425f07f51be81a42803e2cd6518204e554b59b050b1778ba4->enter($__internal_e73a7cb9bcc2987425f07f51be81a42803e2cd6518204e554b59b050b1778ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e73a7cb9bcc2987425f07f51be81a42803e2cd6518204e554b59b050b1778ba4->leave($__internal_e73a7cb9bcc2987425f07f51be81a42803e2cd6518204e554b59b050b1778ba4_prof);

        
        $__internal_89e3b1a049341708db495ea33c7b0cc521cc61a2b5229a37a00f06bbc995d54b->leave($__internal_89e3b1a049341708db495ea33c7b0cc521cc61a2b5229a37a00f06bbc995d54b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
