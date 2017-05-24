<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_4bd937d1ef2b7588b651480a4bb749a3b7bd7755cefa2bec4fea4986a6f89dfc extends Twig_Template
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
        $__internal_769ffa6d742a0ffab690eed22b21d44115879965ad45cbfb00f39861fe705268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769ffa6d742a0ffab690eed22b21d44115879965ad45cbfb00f39861fe705268->enter($__internal_769ffa6d742a0ffab690eed22b21d44115879965ad45cbfb00f39861fe705268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_85ead24869b72983b62b1e7273f41fa55c1cb5de0a31685599057d45fbbd5952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85ead24869b72983b62b1e7273f41fa55c1cb5de0a31685599057d45fbbd5952->enter($__internal_85ead24869b72983b62b1e7273f41fa55c1cb5de0a31685599057d45fbbd5952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_769ffa6d742a0ffab690eed22b21d44115879965ad45cbfb00f39861fe705268->leave($__internal_769ffa6d742a0ffab690eed22b21d44115879965ad45cbfb00f39861fe705268_prof);

        
        $__internal_85ead24869b72983b62b1e7273f41fa55c1cb5de0a31685599057d45fbbd5952->leave($__internal_85ead24869b72983b62b1e7273f41fa55c1cb5de0a31685599057d45fbbd5952_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bfe4c28c983b41dc1276056d750fae54e6aeb9678ef9f97729a62ad64bbad5cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe4c28c983b41dc1276056d750fae54e6aeb9678ef9f97729a62ad64bbad5cc->enter($__internal_bfe4c28c983b41dc1276056d750fae54e6aeb9678ef9f97729a62ad64bbad5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c0b67f4020c1c8f6f0587f65057ea639abe62e968b4622a6a633a646f5747942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0b67f4020c1c8f6f0587f65057ea639abe62e968b4622a6a633a646f5747942->enter($__internal_c0b67f4020c1c8f6f0587f65057ea639abe62e968b4622a6a633a646f5747942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c0b67f4020c1c8f6f0587f65057ea639abe62e968b4622a6a633a646f5747942->leave($__internal_c0b67f4020c1c8f6f0587f65057ea639abe62e968b4622a6a633a646f5747942_prof);

        
        $__internal_bfe4c28c983b41dc1276056d750fae54e6aeb9678ef9f97729a62ad64bbad5cc->leave($__internal_bfe4c28c983b41dc1276056d750fae54e6aeb9678ef9f97729a62ad64bbad5cc_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_1d9e9b53370eda1885bfd08edbaa6f990b3c8e43389c599348df1ef6498a9df5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9e9b53370eda1885bfd08edbaa6f990b3c8e43389c599348df1ef6498a9df5->enter($__internal_1d9e9b53370eda1885bfd08edbaa6f990b3c8e43389c599348df1ef6498a9df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_aea29a666e0ae705a2e3308dda0ffc8b36e899c816e83d015f5265e945e0fd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aea29a666e0ae705a2e3308dda0ffc8b36e899c816e83d015f5265e945e0fd6e->enter($__internal_aea29a666e0ae705a2e3308dda0ffc8b36e899c816e83d015f5265e945e0fd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_aea29a666e0ae705a2e3308dda0ffc8b36e899c816e83d015f5265e945e0fd6e->leave($__internal_aea29a666e0ae705a2e3308dda0ffc8b36e899c816e83d015f5265e945e0fd6e_prof);

        
        $__internal_1d9e9b53370eda1885bfd08edbaa6f990b3c8e43389c599348df1ef6498a9df5->leave($__internal_1d9e9b53370eda1885bfd08edbaa6f990b3c8e43389c599348df1ef6498a9df5_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b05af3f3f54b97359614b6a50e03b27373e33932415a93c4095eae70dc812c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b05af3f3f54b97359614b6a50e03b27373e33932415a93c4095eae70dc812c22->enter($__internal_b05af3f3f54b97359614b6a50e03b27373e33932415a93c4095eae70dc812c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_574d0fc88691aaa48f4d90ed98048c8e481df2857cc6139699450ccd83a377b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574d0fc88691aaa48f4d90ed98048c8e481df2857cc6139699450ccd83a377b7->enter($__internal_574d0fc88691aaa48f4d90ed98048c8e481df2857cc6139699450ccd83a377b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_574d0fc88691aaa48f4d90ed98048c8e481df2857cc6139699450ccd83a377b7->leave($__internal_574d0fc88691aaa48f4d90ed98048c8e481df2857cc6139699450ccd83a377b7_prof);

        
        $__internal_b05af3f3f54b97359614b6a50e03b27373e33932415a93c4095eae70dc812c22->leave($__internal_b05af3f3f54b97359614b6a50e03b27373e33932415a93c4095eae70dc812c22_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Resetting\\email.txt.twig");
    }
}
