<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_2b7ffbeac5d676efec796a7b60ec6c3fdf37ba50d7600d8b4c72b12e0e25625e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_f59901ef2af5777603fabc6576eae982e84c5dfb9b5a9618bb8946fe65de1f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f59901ef2af5777603fabc6576eae982e84c5dfb9b5a9618bb8946fe65de1f02->enter($__internal_f59901ef2af5777603fabc6576eae982e84c5dfb9b5a9618bb8946fe65de1f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_03c56171b98e7e6cc5cf64ef07e6a77317aa72adf44ed3fde90bd6fedc7712e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c56171b98e7e6cc5cf64ef07e6a77317aa72adf44ed3fde90bd6fedc7712e5->enter($__internal_03c56171b98e7e6cc5cf64ef07e6a77317aa72adf44ed3fde90bd6fedc7712e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f59901ef2af5777603fabc6576eae982e84c5dfb9b5a9618bb8946fe65de1f02->leave($__internal_f59901ef2af5777603fabc6576eae982e84c5dfb9b5a9618bb8946fe65de1f02_prof);

        
        $__internal_03c56171b98e7e6cc5cf64ef07e6a77317aa72adf44ed3fde90bd6fedc7712e5->leave($__internal_03c56171b98e7e6cc5cf64ef07e6a77317aa72adf44ed3fde90bd6fedc7712e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed2b052a5e4fb3f8c340d7e7564c3e7c2ffa557e618eac36456d41fc4f7e5b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed2b052a5e4fb3f8c340d7e7564c3e7c2ffa557e618eac36456d41fc4f7e5b9e->enter($__internal_ed2b052a5e4fb3f8c340d7e7564c3e7c2ffa557e618eac36456d41fc4f7e5b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7a88cef2f7f834eccea13b436fc3e7fad00a403a6eef8cbd37631d427ba58759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a88cef2f7f834eccea13b436fc3e7fad00a403a6eef8cbd37631d427ba58759->enter($__internal_7a88cef2f7f834eccea13b436fc3e7fad00a403a6eef8cbd37631d427ba58759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7a88cef2f7f834eccea13b436fc3e7fad00a403a6eef8cbd37631d427ba58759->leave($__internal_7a88cef2f7f834eccea13b436fc3e7fad00a403a6eef8cbd37631d427ba58759_prof);

        
        $__internal_ed2b052a5e4fb3f8c340d7e7564c3e7c2ffa557e618eac36456d41fc4f7e5b9e->leave($__internal_ed2b052a5e4fb3f8c340d7e7564c3e7c2ffa557e618eac36456d41fc4f7e5b9e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Security\\login.html.twig");
    }
}
