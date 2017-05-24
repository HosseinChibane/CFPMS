<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_063a0430bbe258cc2c25275c8d2f1a24462259433b02cf9fd2f73d607f9691c7 extends Twig_Template
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
        $__internal_d038c3f3a1f69bafa84fa1da33d26addecaa54820905c1a7d83b21bab340ebd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d038c3f3a1f69bafa84fa1da33d26addecaa54820905c1a7d83b21bab340ebd4->enter($__internal_d038c3f3a1f69bafa84fa1da33d26addecaa54820905c1a7d83b21bab340ebd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_036de8265f80afc19b03d34dce97bc2e0e5657d7a839f269cf7360aba4d9bd1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036de8265f80afc19b03d34dce97bc2e0e5657d7a839f269cf7360aba4d9bd1c->enter($__internal_036de8265f80afc19b03d34dce97bc2e0e5657d7a839f269cf7360aba4d9bd1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d038c3f3a1f69bafa84fa1da33d26addecaa54820905c1a7d83b21bab340ebd4->leave($__internal_d038c3f3a1f69bafa84fa1da33d26addecaa54820905c1a7d83b21bab340ebd4_prof);

        
        $__internal_036de8265f80afc19b03d34dce97bc2e0e5657d7a839f269cf7360aba4d9bd1c->leave($__internal_036de8265f80afc19b03d34dce97bc2e0e5657d7a839f269cf7360aba4d9bd1c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6dcdf091fe8d3e2fbf5d57559178536873b5d5028024d218e387ca9cf111d873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dcdf091fe8d3e2fbf5d57559178536873b5d5028024d218e387ca9cf111d873->enter($__internal_6dcdf091fe8d3e2fbf5d57559178536873b5d5028024d218e387ca9cf111d873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3f7603bf213da28857c2a94a4672d8afb3e1e993e73e6b3387b29fa73ec2c0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7603bf213da28857c2a94a4672d8afb3e1e993e73e6b3387b29fa73ec2c0ca->enter($__internal_3f7603bf213da28857c2a94a4672d8afb3e1e993e73e6b3387b29fa73ec2c0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_3f7603bf213da28857c2a94a4672d8afb3e1e993e73e6b3387b29fa73ec2c0ca->leave($__internal_3f7603bf213da28857c2a94a4672d8afb3e1e993e73e6b3387b29fa73ec2c0ca_prof);

        
        $__internal_6dcdf091fe8d3e2fbf5d57559178536873b5d5028024d218e387ca9cf111d873->leave($__internal_6dcdf091fe8d3e2fbf5d57559178536873b5d5028024d218e387ca9cf111d873_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9e361eaf1351c64ef025705f8fc757339a6934710f12a212f1945788fc9ca967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e361eaf1351c64ef025705f8fc757339a6934710f12a212f1945788fc9ca967->enter($__internal_9e361eaf1351c64ef025705f8fc757339a6934710f12a212f1945788fc9ca967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_57fb0a8cbf6f441545ce82aefbd6525153a21625fbdf2a7159d175b52a7b873e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fb0a8cbf6f441545ce82aefbd6525153a21625fbdf2a7159d175b52a7b873e->enter($__internal_57fb0a8cbf6f441545ce82aefbd6525153a21625fbdf2a7159d175b52a7b873e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_57fb0a8cbf6f441545ce82aefbd6525153a21625fbdf2a7159d175b52a7b873e->leave($__internal_57fb0a8cbf6f441545ce82aefbd6525153a21625fbdf2a7159d175b52a7b873e_prof);

        
        $__internal_9e361eaf1351c64ef025705f8fc757339a6934710f12a212f1945788fc9ca967->leave($__internal_9e361eaf1351c64ef025705f8fc757339a6934710f12a212f1945788fc9ca967_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_94fa2a5444e5ea22a18c5f09b2c5c7dc563f5ba9f3d27d6263c7d35c4ca274bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94fa2a5444e5ea22a18c5f09b2c5c7dc563f5ba9f3d27d6263c7d35c4ca274bd->enter($__internal_94fa2a5444e5ea22a18c5f09b2c5c7dc563f5ba9f3d27d6263c7d35c4ca274bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_c697fb746ce1eacc7c488da058ab8e872fcd5fb05e3aaf1bc96635cc81558575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c697fb746ce1eacc7c488da058ab8e872fcd5fb05e3aaf1bc96635cc81558575->enter($__internal_c697fb746ce1eacc7c488da058ab8e872fcd5fb05e3aaf1bc96635cc81558575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c697fb746ce1eacc7c488da058ab8e872fcd5fb05e3aaf1bc96635cc81558575->leave($__internal_c697fb746ce1eacc7c488da058ab8e872fcd5fb05e3aaf1bc96635cc81558575_prof);

        
        $__internal_94fa2a5444e5ea22a18c5f09b2c5c7dc563f5ba9f3d27d6263c7d35c4ca274bd->leave($__internal_94fa2a5444e5ea22a18c5f09b2c5c7dc563f5ba9f3d27d6263c7d35c4ca274bd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
