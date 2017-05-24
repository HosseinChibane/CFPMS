<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_b2278724086cf62fc9c350f1f5aefa76a18014d83ced8ed1db2cac47cc5b315f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_46b563ae80942f5e99494dd5bdd0d5be2912d909b4bbd205e7d78f3cc069049b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46b563ae80942f5e99494dd5bdd0d5be2912d909b4bbd205e7d78f3cc069049b->enter($__internal_46b563ae80942f5e99494dd5bdd0d5be2912d909b4bbd205e7d78f3cc069049b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_7b9fad477f0d61841fe45281a5dfdc3617f6609aad089d71e579748958d68f2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b9fad477f0d61841fe45281a5dfdc3617f6609aad089d71e579748958d68f2d->enter($__internal_7b9fad477f0d61841fe45281a5dfdc3617f6609aad089d71e579748958d68f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46b563ae80942f5e99494dd5bdd0d5be2912d909b4bbd205e7d78f3cc069049b->leave($__internal_46b563ae80942f5e99494dd5bdd0d5be2912d909b4bbd205e7d78f3cc069049b_prof);

        
        $__internal_7b9fad477f0d61841fe45281a5dfdc3617f6609aad089d71e579748958d68f2d->leave($__internal_7b9fad477f0d61841fe45281a5dfdc3617f6609aad089d71e579748958d68f2d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8000a36748daec85fb8a551930b82c475df880be9fb5125527be7e89e67e77e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8000a36748daec85fb8a551930b82c475df880be9fb5125527be7e89e67e77e->enter($__internal_b8000a36748daec85fb8a551930b82c475df880be9fb5125527be7e89e67e77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_19dbfaceb8b6fa734a441d92880fd7060e7c47016302fdc03f272e5e28eb6650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19dbfaceb8b6fa734a441d92880fd7060e7c47016302fdc03f272e5e28eb6650->enter($__internal_19dbfaceb8b6fa734a441d92880fd7060e7c47016302fdc03f272e5e28eb6650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_19dbfaceb8b6fa734a441d92880fd7060e7c47016302fdc03f272e5e28eb6650->leave($__internal_19dbfaceb8b6fa734a441d92880fd7060e7c47016302fdc03f272e5e28eb6650_prof);

        
        $__internal_b8000a36748daec85fb8a551930b82c475df880be9fb5125527be7e89e67e77e->leave($__internal_b8000a36748daec85fb8a551930b82c475df880be9fb5125527be7e89e67e77e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
