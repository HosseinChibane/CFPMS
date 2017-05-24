<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_af2fd56826b466bff679afa92b42c549ba3c9ab5b7009987ce03b0c1cc3d17f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_fd744c72dc02f1a92e47c44eaee534307d035a033cc7effc2beb37d1f9558446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd744c72dc02f1a92e47c44eaee534307d035a033cc7effc2beb37d1f9558446->enter($__internal_fd744c72dc02f1a92e47c44eaee534307d035a033cc7effc2beb37d1f9558446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_8b5b22a56cfd4d0c6170431dd4c0d14851860073eb45e8110bad7cb22ba91bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5b22a56cfd4d0c6170431dd4c0d14851860073eb45e8110bad7cb22ba91bca->enter($__internal_8b5b22a56cfd4d0c6170431dd4c0d14851860073eb45e8110bad7cb22ba91bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd744c72dc02f1a92e47c44eaee534307d035a033cc7effc2beb37d1f9558446->leave($__internal_fd744c72dc02f1a92e47c44eaee534307d035a033cc7effc2beb37d1f9558446_prof);

        
        $__internal_8b5b22a56cfd4d0c6170431dd4c0d14851860073eb45e8110bad7cb22ba91bca->leave($__internal_8b5b22a56cfd4d0c6170431dd4c0d14851860073eb45e8110bad7cb22ba91bca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24a8bd595ae809d6d0a04c53aead293b720bc69fdfbac618bc5f76c3c05f06cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a8bd595ae809d6d0a04c53aead293b720bc69fdfbac618bc5f76c3c05f06cc->enter($__internal_24a8bd595ae809d6d0a04c53aead293b720bc69fdfbac618bc5f76c3c05f06cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_db3eed13e559e9514182a6aee042ab11126e96b0900ce132caa8875f14a6c12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db3eed13e559e9514182a6aee042ab11126e96b0900ce132caa8875f14a6c12f->enter($__internal_db3eed13e559e9514182a6aee042ab11126e96b0900ce132caa8875f14a6c12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_db3eed13e559e9514182a6aee042ab11126e96b0900ce132caa8875f14a6c12f->leave($__internal_db3eed13e559e9514182a6aee042ab11126e96b0900ce132caa8875f14a6c12f_prof);

        
        $__internal_24a8bd595ae809d6d0a04c53aead293b720bc69fdfbac618bc5f76c3c05f06cc->leave($__internal_24a8bd595ae809d6d0a04c53aead293b720bc69fdfbac618bc5f76c3c05f06cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
