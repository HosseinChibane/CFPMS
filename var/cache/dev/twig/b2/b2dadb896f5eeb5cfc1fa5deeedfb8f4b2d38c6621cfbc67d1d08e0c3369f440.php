<?php

/* EasyAdminBundle:default:exception.html.twig */
class __TwigTemplate_49f6feab4466d282960ddf731fe2419b8cfa617298804c2cfcd459e3ecc59bb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "EasyAdminBundle:default:exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e750f6851e1a30aa1a770b78c9a4c36cda3ada4049a9ba45ac1662107355b71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e750f6851e1a30aa1a770b78c9a4c36cda3ada4049a9ba45ac1662107355b71e->enter($__internal_e750f6851e1a30aa1a770b78c9a4c36cda3ada4049a9ba45ac1662107355b71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        $__internal_b81d798cecaeecb7992f5473694bf4e783698872e449bc2b66c20a05d84e3f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81d798cecaeecb7992f5473694bf4e783698872e449bc2b66c20a05d84e3f44->enter($__internal_b81d798cecaeecb7992f5473694bf4e783698872e449bc2b66c20a05d84e3f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e750f6851e1a30aa1a770b78c9a4c36cda3ada4049a9ba45ac1662107355b71e->leave($__internal_e750f6851e1a30aa1a770b78c9a4c36cda3ada4049a9ba45ac1662107355b71e_prof);

        
        $__internal_b81d798cecaeecb7992f5473694bf4e783698872e449bc2b66c20a05d84e3f44->leave($__internal_b81d798cecaeecb7992f5473694bf4e783698872e449bc2b66c20a05d84e3f44_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_e393ebc1728dc14277ba52670048abca3b0467d64deb8f27209ee9a7d798813d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e393ebc1728dc14277ba52670048abca3b0467d64deb8f27209ee9a7d798813d->enter($__internal_e393ebc1728dc14277ba52670048abca3b0467d64deb8f27209ee9a7d798813d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_16e8882b460cedf3b975b2405a52ab5190895469f2afd00d099aab14f9ca70e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e8882b460cedf3b975b2405a52ab5190895469f2afd00d099aab14f9ca70e4->enter($__internal_16e8882b460cedf3b975b2405a52ab5190895469f2afd00d099aab14f9ca70e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_16e8882b460cedf3b975b2405a52ab5190895469f2afd00d099aab14f9ca70e4->leave($__internal_16e8882b460cedf3b975b2405a52ab5190895469f2afd00d099aab14f9ca70e4_prof);

        
        $__internal_e393ebc1728dc14277ba52670048abca3b0467d64deb8f27209ee9a7d798813d->leave($__internal_e393ebc1728dc14277ba52670048abca3b0467d64deb8f27209ee9a7d798813d_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_50ba00fd27185650c39c2e1670b7920e8e09c6d8580bd0c002e9b5237e5b4afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ba00fd27185650c39c2e1670b7920e8e09c6d8580bd0c002e9b5237e5b4afa->enter($__internal_50ba00fd27185650c39c2e1670b7920e8e09c6d8580bd0c002e9b5237e5b4afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_fe1b5b840a5d712b01842bc3e0b00a55145c4b8a183c5f1183aa227c0192c169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1b5b840a5d712b01842bc3e0b00a55145c4b8a183c5f1183aa227c0192c169->enter($__internal_fe1b5b840a5d712b01842bc3e0b00a55145c4b8a183c5f1183aa227c0192c169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_fe1b5b840a5d712b01842bc3e0b00a55145c4b8a183c5f1183aa227c0192c169->leave($__internal_fe1b5b840a5d712b01842bc3e0b00a55145c4b8a183c5f1183aa227c0192c169_prof);

        
        $__internal_50ba00fd27185650c39c2e1670b7920e8e09c6d8580bd0c002e9b5237e5b4afa->leave($__internal_50ba00fd27185650c39c2e1670b7920e8e09c6d8580bd0c002e9b5237e5b4afa_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_a06abf334dee3c09eda86590771daca4a598b61bfd88e028f83b97b1adbb9caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06abf334dee3c09eda86590771daca4a598b61bfd88e028f83b97b1adbb9caa->enter($__internal_a06abf334dee3c09eda86590771daca4a598b61bfd88e028f83b97b1adbb9caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_192c2435aebd7a1020f01802b6a391249ce8eef87f9bd8077f14d04240f485b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_192c2435aebd7a1020f01802b6a391249ce8eef87f9bd8077f14d04240f485b9->enter($__internal_192c2435aebd7a1020f01802b6a391249ce8eef87f9bd8077f14d04240f485b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> ";
        // line 14
        $this->displayBlock("page_title", $context, $blocks);
        echo "</h1>

            <div class=\"error-message\">
                ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "publicMessage", array()), $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "translationParameters", array()), "EasyAdminBundle"), "html", null, true);
        echo "
            </div>
        </div>
    </section>
";
        
        $__internal_192c2435aebd7a1020f01802b6a391249ce8eef87f9bd8077f14d04240f485b9->leave($__internal_192c2435aebd7a1020f01802b6a391249ce8eef87f9bd8077f14d04240f485b9_prof);

        
        $__internal_a06abf334dee3c09eda86590771daca4a598b61bfd88e028f83b97b1adbb9caa->leave($__internal_a06abf334dee3c09eda86590771daca4a598b61bfd88e028f83b97b1adbb9caa_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 17,  93 => 14,  89 => 12,  80 => 11,  62 => 9,  44 => 8,  34 => 3,  32 => 1,  20 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% extends [
    _entity_config.templates.layout|default(''),
    easyadmin_config('design.templates.layout'),
    '@EasyAdmin/default/layout.html.twig'
] %}

{% block body_class 'error' %}
{% block page_title %}{{ 'errors'|transchoice(1, {}, 'EasyAdminBundle') }}{% endblock %}

{% block content %}
    <section id=\"main\" class=\"content\">
        <div class=\"error-description\">
            <h1><i class=\"fa fa-exclamation-circle\"></i> {{ block('page_title') }}</h1>

            <div class=\"error-message\">
                {{ exception.publicMessage|trans(exception.translationParameters, 'EasyAdminBundle') }}
            </div>
        </div>
    </section>
{% endblock %}
", "EasyAdminBundle:default:exception.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/exception.html.twig");
    }
}
