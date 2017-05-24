<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_82a6d03651a98ebeb6dfaaacfbc9f2e4cc9361ecf8da146ddb4de3973a23532d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_6287f0b031ba36514a6fe2bc44510a78f7d5b812b48a6b256be2023074a25589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6287f0b031ba36514a6fe2bc44510a78f7d5b812b48a6b256be2023074a25589->enter($__internal_6287f0b031ba36514a6fe2bc44510a78f7d5b812b48a6b256be2023074a25589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_917a7f470575a220e4549b0378eeca5c90c69e5d09a7a02dd6eeb140e8442fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917a7f470575a220e4549b0378eeca5c90c69e5d09a7a02dd6eeb140e8442fd2->enter($__internal_917a7f470575a220e4549b0378eeca5c90c69e5d09a7a02dd6eeb140e8442fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6287f0b031ba36514a6fe2bc44510a78f7d5b812b48a6b256be2023074a25589->leave($__internal_6287f0b031ba36514a6fe2bc44510a78f7d5b812b48a6b256be2023074a25589_prof);

        
        $__internal_917a7f470575a220e4549b0378eeca5c90c69e5d09a7a02dd6eeb140e8442fd2->leave($__internal_917a7f470575a220e4549b0378eeca5c90c69e5d09a7a02dd6eeb140e8442fd2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6bba779834867d6407ccbce5bd4e11acdf82b3207249f3b6f706bdb8876fde92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bba779834867d6407ccbce5bd4e11acdf82b3207249f3b6f706bdb8876fde92->enter($__internal_6bba779834867d6407ccbce5bd4e11acdf82b3207249f3b6f706bdb8876fde92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f8096b88d9b1bf8d1a722bd9ba4f1b9f5332c3d2729b627a5a602bb805f06a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8096b88d9b1bf8d1a722bd9ba4f1b9f5332c3d2729b627a5a602bb805f06a1d->enter($__internal_f8096b88d9b1bf8d1a722bd9ba4f1b9f5332c3d2729b627a5a602bb805f06a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_f8096b88d9b1bf8d1a722bd9ba4f1b9f5332c3d2729b627a5a602bb805f06a1d->leave($__internal_f8096b88d9b1bf8d1a722bd9ba4f1b9f5332c3d2729b627a5a602bb805f06a1d_prof);

        
        $__internal_6bba779834867d6407ccbce5bd4e11acdf82b3207249f3b6f706bdb8876fde92->leave($__internal_6bba779834867d6407ccbce5bd4e11acdf82b3207249f3b6f706bdb8876fde92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
