<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_d160e336d5ca2b854997aca21cf21f8e5bb86f803b5c617c873a9c09d0eac8c3 extends Twig_Template
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
        $__internal_8f82b3b7135e8091b8a8cceb5a8dbeb3bec982a97af0b4a93e50fc31e6fda8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f82b3b7135e8091b8a8cceb5a8dbeb3bec982a97af0b4a93e50fc31e6fda8e8->enter($__internal_8f82b3b7135e8091b8a8cceb5a8dbeb3bec982a97af0b4a93e50fc31e6fda8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_8b8ce4864e0215cc490e495bcbd89200676a2f25b723c5db05aa6b78b87c4d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8ce4864e0215cc490e495bcbd89200676a2f25b723c5db05aa6b78b87c4d9f->enter($__internal_8b8ce4864e0215cc490e495bcbd89200676a2f25b723c5db05aa6b78b87c4d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8f82b3b7135e8091b8a8cceb5a8dbeb3bec982a97af0b4a93e50fc31e6fda8e8->leave($__internal_8f82b3b7135e8091b8a8cceb5a8dbeb3bec982a97af0b4a93e50fc31e6fda8e8_prof);

        
        $__internal_8b8ce4864e0215cc490e495bcbd89200676a2f25b723c5db05aa6b78b87c4d9f->leave($__internal_8b8ce4864e0215cc490e495bcbd89200676a2f25b723c5db05aa6b78b87c4d9f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fc7a55af9192ca78960f461f24824f672c841eb8247671ecd9823b9163ae9d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7a55af9192ca78960f461f24824f672c841eb8247671ecd9823b9163ae9d0f->enter($__internal_fc7a55af9192ca78960f461f24824f672c841eb8247671ecd9823b9163ae9d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_9171d8cddd5aa88a4f6798a195f25f7791c486c6496363370f2f84bcd7ec678d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9171d8cddd5aa88a4f6798a195f25f7791c486c6496363370f2f84bcd7ec678d->enter($__internal_9171d8cddd5aa88a4f6798a195f25f7791c486c6496363370f2f84bcd7ec678d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_9171d8cddd5aa88a4f6798a195f25f7791c486c6496363370f2f84bcd7ec678d->leave($__internal_9171d8cddd5aa88a4f6798a195f25f7791c486c6496363370f2f84bcd7ec678d_prof);

        
        $__internal_fc7a55af9192ca78960f461f24824f672c841eb8247671ecd9823b9163ae9d0f->leave($__internal_fc7a55af9192ca78960f461f24824f672c841eb8247671ecd9823b9163ae9d0f_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9c9fbdc90ff8f4308ebe41add370a3757e9086014b8faa71387feef1dc215a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9fbdc90ff8f4308ebe41add370a3757e9086014b8faa71387feef1dc215a9d->enter($__internal_9c9fbdc90ff8f4308ebe41add370a3757e9086014b8faa71387feef1dc215a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_e4d5cbdfe160200a13454d96a1afcfa4e77ddc11a82a5ea1002177825c7c05b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4d5cbdfe160200a13454d96a1afcfa4e77ddc11a82a5ea1002177825c7c05b9->enter($__internal_e4d5cbdfe160200a13454d96a1afcfa4e77ddc11a82a5ea1002177825c7c05b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e4d5cbdfe160200a13454d96a1afcfa4e77ddc11a82a5ea1002177825c7c05b9->leave($__internal_e4d5cbdfe160200a13454d96a1afcfa4e77ddc11a82a5ea1002177825c7c05b9_prof);

        
        $__internal_9c9fbdc90ff8f4308ebe41add370a3757e9086014b8faa71387feef1dc215a9d->leave($__internal_9c9fbdc90ff8f4308ebe41add370a3757e9086014b8faa71387feef1dc215a9d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_28988ea89374c3baf2cbe9c3f435371e25265ff8bc12b0ff0ad5457cb351fb91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28988ea89374c3baf2cbe9c3f435371e25265ff8bc12b0ff0ad5457cb351fb91->enter($__internal_28988ea89374c3baf2cbe9c3f435371e25265ff8bc12b0ff0ad5457cb351fb91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_512870092462a103552a2b9d972cd8ed5c47f87dd657c7fc7d3b15b357a1f467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512870092462a103552a2b9d972cd8ed5c47f87dd657c7fc7d3b15b357a1f467->enter($__internal_512870092462a103552a2b9d972cd8ed5c47f87dd657c7fc7d3b15b357a1f467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_512870092462a103552a2b9d972cd8ed5c47f87dd657c7fc7d3b15b357a1f467->leave($__internal_512870092462a103552a2b9d972cd8ed5c47f87dd657c7fc7d3b15b357a1f467_prof);

        
        $__internal_28988ea89374c3baf2cbe9c3f435371e25265ff8bc12b0ff0ad5457cb351fb91->leave($__internal_28988ea89374c3baf2cbe9c3f435371e25265ff8bc12b0ff0ad5457cb351fb91_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
