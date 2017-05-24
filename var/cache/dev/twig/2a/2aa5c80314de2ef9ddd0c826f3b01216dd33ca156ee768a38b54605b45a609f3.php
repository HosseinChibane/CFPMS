<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ec9c46948aaebcab864e4397e88477a4137561bd57481bfe6602253156f63e0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_f80b135f9699e3af003605534f3ce8d9595892853ff78e7f720e2dfad9487859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80b135f9699e3af003605534f3ce8d9595892853ff78e7f720e2dfad9487859->enter($__internal_f80b135f9699e3af003605534f3ce8d9595892853ff78e7f720e2dfad9487859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_fd9ce8270bd49bc6e31676bf8b3d19d0cc5dadf1ae93d9aa01e3a13a19dbe3ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd9ce8270bd49bc6e31676bf8b3d19d0cc5dadf1ae93d9aa01e3a13a19dbe3ee->enter($__internal_fd9ce8270bd49bc6e31676bf8b3d19d0cc5dadf1ae93d9aa01e3a13a19dbe3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f80b135f9699e3af003605534f3ce8d9595892853ff78e7f720e2dfad9487859->leave($__internal_f80b135f9699e3af003605534f3ce8d9595892853ff78e7f720e2dfad9487859_prof);

        
        $__internal_fd9ce8270bd49bc6e31676bf8b3d19d0cc5dadf1ae93d9aa01e3a13a19dbe3ee->leave($__internal_fd9ce8270bd49bc6e31676bf8b3d19d0cc5dadf1ae93d9aa01e3a13a19dbe3ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2605237fd5f08b0ba581b4122a826e72e5efd464d44da736d7c0a21d05f84c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2605237fd5f08b0ba581b4122a826e72e5efd464d44da736d7c0a21d05f84c8e->enter($__internal_2605237fd5f08b0ba581b4122a826e72e5efd464d44da736d7c0a21d05f84c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac7cc2cecfd6c408beee5a682af4802e7c3f6e1bfec2a3dd5a7f8d2616251228 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7cc2cecfd6c408beee5a682af4802e7c3f6e1bfec2a3dd5a7f8d2616251228->enter($__internal_ac7cc2cecfd6c408beee5a682af4802e7c3f6e1bfec2a3dd5a7f8d2616251228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_ac7cc2cecfd6c408beee5a682af4802e7c3f6e1bfec2a3dd5a7f8d2616251228->leave($__internal_ac7cc2cecfd6c408beee5a682af4802e7c3f6e1bfec2a3dd5a7f8d2616251228_prof);

        
        $__internal_2605237fd5f08b0ba581b4122a826e72e5efd464d44da736d7c0a21d05f84c8e->leave($__internal_2605237fd5f08b0ba581b4122a826e72e5efd464d44da736d7c0a21d05f84c8e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
