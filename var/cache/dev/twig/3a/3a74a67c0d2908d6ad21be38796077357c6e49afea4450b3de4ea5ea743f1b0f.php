<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_2b0298a3b90850554dbe10abd475ade2a9ee9ffdf45c1976f21f58d91d4a5e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b1584322a7f6cd81b96141b31c94bcbb130312f69b59b178679f0d34921107a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1584322a7f6cd81b96141b31c94bcbb130312f69b59b178679f0d34921107a4->enter($__internal_b1584322a7f6cd81b96141b31c94bcbb130312f69b59b178679f0d34921107a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_66a4b54891385569bd1bbd6b83cf65cd8a6afe434e97aa013c16eff0380cf3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a4b54891385569bd1bbd6b83cf65cd8a6afe434e97aa013c16eff0380cf3e5->enter($__internal_66a4b54891385569bd1bbd6b83cf65cd8a6afe434e97aa013c16eff0380cf3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1584322a7f6cd81b96141b31c94bcbb130312f69b59b178679f0d34921107a4->leave($__internal_b1584322a7f6cd81b96141b31c94bcbb130312f69b59b178679f0d34921107a4_prof);

        
        $__internal_66a4b54891385569bd1bbd6b83cf65cd8a6afe434e97aa013c16eff0380cf3e5->leave($__internal_66a4b54891385569bd1bbd6b83cf65cd8a6afe434e97aa013c16eff0380cf3e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e299c09758d470f6533fad1e200061a6708c4c6eee0562d3e243414591bf4f13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e299c09758d470f6533fad1e200061a6708c4c6eee0562d3e243414591bf4f13->enter($__internal_e299c09758d470f6533fad1e200061a6708c4c6eee0562d3e243414591bf4f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc2d42259c26b4a6627844a91dac6d1b928c26aaeb5d3b669a4716241e1e814e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2d42259c26b4a6627844a91dac6d1b928c26aaeb5d3b669a4716241e1e814e->enter($__internal_cc2d42259c26b4a6627844a91dac6d1b928c26aaeb5d3b669a4716241e1e814e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_cc2d42259c26b4a6627844a91dac6d1b928c26aaeb5d3b669a4716241e1e814e->leave($__internal_cc2d42259c26b4a6627844a91dac6d1b928c26aaeb5d3b669a4716241e1e814e_prof);

        
        $__internal_e299c09758d470f6533fad1e200061a6708c4c6eee0562d3e243414591bf4f13->leave($__internal_e299c09758d470f6533fad1e200061a6708c4c6eee0562d3e243414591bf4f13_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
