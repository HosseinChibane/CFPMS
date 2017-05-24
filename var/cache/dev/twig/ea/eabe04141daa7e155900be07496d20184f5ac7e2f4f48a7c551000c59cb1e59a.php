<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e04ab28dc836aac3ef92f9e83b6a2e6866d55e0d1442dfb62425984a9e7f42f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f162a95aeb237eddb6f70d7fa8853d65ff58eeecf9b0f225b25724df0ebe4506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f162a95aeb237eddb6f70d7fa8853d65ff58eeecf9b0f225b25724df0ebe4506->enter($__internal_f162a95aeb237eddb6f70d7fa8853d65ff58eeecf9b0f225b25724df0ebe4506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_7577a4815f449038ee171950fb2bc3866106271dd07c228110c05901b9092712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7577a4815f449038ee171950fb2bc3866106271dd07c228110c05901b9092712->enter($__internal_7577a4815f449038ee171950fb2bc3866106271dd07c228110c05901b9092712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f162a95aeb237eddb6f70d7fa8853d65ff58eeecf9b0f225b25724df0ebe4506->leave($__internal_f162a95aeb237eddb6f70d7fa8853d65ff58eeecf9b0f225b25724df0ebe4506_prof);

        
        $__internal_7577a4815f449038ee171950fb2bc3866106271dd07c228110c05901b9092712->leave($__internal_7577a4815f449038ee171950fb2bc3866106271dd07c228110c05901b9092712_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a46dfa258058da96955375f9de2c6f8750211d9d67955f515d07964eb2cec8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46dfa258058da96955375f9de2c6f8750211d9d67955f515d07964eb2cec8a3->enter($__internal_a46dfa258058da96955375f9de2c6f8750211d9d67955f515d07964eb2cec8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_83816f480b0bfece850f824b67a2c76989241099894143ece3cf8d6d5a85af51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83816f480b0bfece850f824b67a2c76989241099894143ece3cf8d6d5a85af51->enter($__internal_83816f480b0bfece850f824b67a2c76989241099894143ece3cf8d6d5a85af51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_83816f480b0bfece850f824b67a2c76989241099894143ece3cf8d6d5a85af51->leave($__internal_83816f480b0bfece850f824b67a2c76989241099894143ece3cf8d6d5a85af51_prof);

        
        $__internal_a46dfa258058da96955375f9de2c6f8750211d9d67955f515d07964eb2cec8a3->leave($__internal_a46dfa258058da96955375f9de2c6f8750211d9d67955f515d07964eb2cec8a3_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_32fe9441353121a6b19826aca894152032407b8d019b5c7ebfb363724e1755ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32fe9441353121a6b19826aca894152032407b8d019b5c7ebfb363724e1755ce->enter($__internal_32fe9441353121a6b19826aca894152032407b8d019b5c7ebfb363724e1755ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0ecc525c4e3e4c92bcbaee1cdf78e35b8a321fb4d4025bae86c98de4f562ae4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecc525c4e3e4c92bcbaee1cdf78e35b8a321fb4d4025bae86c98de4f562ae4d->enter($__internal_0ecc525c4e3e4c92bcbaee1cdf78e35b8a321fb4d4025bae86c98de4f562ae4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0ecc525c4e3e4c92bcbaee1cdf78e35b8a321fb4d4025bae86c98de4f562ae4d->leave($__internal_0ecc525c4e3e4c92bcbaee1cdf78e35b8a321fb4d4025bae86c98de4f562ae4d_prof);

        
        $__internal_32fe9441353121a6b19826aca894152032407b8d019b5c7ebfb363724e1755ce->leave($__internal_32fe9441353121a6b19826aca894152032407b8d019b5c7ebfb363724e1755ce_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1b77db2868432260b9110fe34a2ce2da2a8feb4000058b78a78c25571fef33bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b77db2868432260b9110fe34a2ce2da2a8feb4000058b78a78c25571fef33bf->enter($__internal_1b77db2868432260b9110fe34a2ce2da2a8feb4000058b78a78c25571fef33bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_aab8df862ca5e4562153d2f86e0efa9233f6a442200e55f39258f31fdcdf4bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab8df862ca5e4562153d2f86e0efa9233f6a442200e55f39258f31fdcdf4bc5->enter($__internal_aab8df862ca5e4562153d2f86e0efa9233f6a442200e55f39258f31fdcdf4bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aab8df862ca5e4562153d2f86e0efa9233f6a442200e55f39258f31fdcdf4bc5->leave($__internal_aab8df862ca5e4562153d2f86e0efa9233f6a442200e55f39258f31fdcdf4bc5_prof);

        
        $__internal_1b77db2868432260b9110fe34a2ce2da2a8feb4000058b78a78c25571fef33bf->leave($__internal_1b77db2868432260b9110fe34a2ce2da2a8feb4000058b78a78c25571fef33bf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Registration\\email.txt.twig");
    }
}
