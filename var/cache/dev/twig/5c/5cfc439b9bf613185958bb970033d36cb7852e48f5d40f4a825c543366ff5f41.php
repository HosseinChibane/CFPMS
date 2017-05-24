<?php

/* @EasyAdmin/default/exception.html.twig */
class __TwigTemplate_6bce2ab0d8590ca1ed3cd695fcfdaa76ce71a68aecf197184ae83f23d85c6281 extends Twig_Template
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
        return $this->loadTemplate(array(0 => (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "templates", array(), "any", false, true), "layout", array()), "")) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.layout"), 2 => "@EasyAdmin/default/layout.html.twig"), "@EasyAdmin/default/exception.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d50ebfbc3e50c80152ac5fe8dade649eee47397e33c7b3a57e89debd1864e2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50ebfbc3e50c80152ac5fe8dade649eee47397e33c7b3a57e89debd1864e2dc->enter($__internal_d50ebfbc3e50c80152ac5fe8dade649eee47397e33c7b3a57e89debd1864e2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/exception.html.twig"));

        $__internal_60ce1b6aa3f2be52ad959f5fc82f3dd1fa2326c9ae48fbf55728f8a11bb6372e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ce1b6aa3f2be52ad959f5fc82f3dd1fa2326c9ae48fbf55728f8a11bb6372e->enter($__internal_60ce1b6aa3f2be52ad959f5fc82f3dd1fa2326c9ae48fbf55728f8a11bb6372e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/exception.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d50ebfbc3e50c80152ac5fe8dade649eee47397e33c7b3a57e89debd1864e2dc->leave($__internal_d50ebfbc3e50c80152ac5fe8dade649eee47397e33c7b3a57e89debd1864e2dc_prof);

        
        $__internal_60ce1b6aa3f2be52ad959f5fc82f3dd1fa2326c9ae48fbf55728f8a11bb6372e->leave($__internal_60ce1b6aa3f2be52ad959f5fc82f3dd1fa2326c9ae48fbf55728f8a11bb6372e_prof);

    }

    // line 8
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_7c4dd49b4cd22651bd7a20d897b545f46a2bc3ec277a03171b9a8956d2deadf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4dd49b4cd22651bd7a20d897b545f46a2bc3ec277a03171b9a8956d2deadf8->enter($__internal_7c4dd49b4cd22651bd7a20d897b545f46a2bc3ec277a03171b9a8956d2deadf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_ee519c59e697de27c4cd49edbd8eff8206e141db1d4326461bdfb237faf136a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee519c59e697de27c4cd49edbd8eff8206e141db1d4326461bdfb237faf136a0->enter($__internal_ee519c59e697de27c4cd49edbd8eff8206e141db1d4326461bdfb237faf136a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "error";
        
        $__internal_ee519c59e697de27c4cd49edbd8eff8206e141db1d4326461bdfb237faf136a0->leave($__internal_ee519c59e697de27c4cd49edbd8eff8206e141db1d4326461bdfb237faf136a0_prof);

        
        $__internal_7c4dd49b4cd22651bd7a20d897b545f46a2bc3ec277a03171b9a8956d2deadf8->leave($__internal_7c4dd49b4cd22651bd7a20d897b545f46a2bc3ec277a03171b9a8956d2deadf8_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_0c2b7f37bb170cc8eefe973224350c388dbece9ce79745745957570ab713ba87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c2b7f37bb170cc8eefe973224350c388dbece9ce79745745957570ab713ba87->enter($__internal_0c2b7f37bb170cc8eefe973224350c388dbece9ce79745745957570ab713ba87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_1527d42b3266c2c4cfacb6ee621be22e7e2c237974d883a1102dbf2d28869127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1527d42b3266c2c4cfacb6ee621be22e7e2c237974d883a1102dbf2d28869127->enter($__internal_1527d42b3266c2c4cfacb6ee621be22e7e2c237974d883a1102dbf2d28869127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
        
        $__internal_1527d42b3266c2c4cfacb6ee621be22e7e2c237974d883a1102dbf2d28869127->leave($__internal_1527d42b3266c2c4cfacb6ee621be22e7e2c237974d883a1102dbf2d28869127_prof);

        
        $__internal_0c2b7f37bb170cc8eefe973224350c388dbece9ce79745745957570ab713ba87->leave($__internal_0c2b7f37bb170cc8eefe973224350c388dbece9ce79745745957570ab713ba87_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_7b00c7c11fe95aeda98b2940affb4a491fcdc348c18a606f8011356d9ae75b7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b00c7c11fe95aeda98b2940affb4a491fcdc348c18a606f8011356d9ae75b7d->enter($__internal_7b00c7c11fe95aeda98b2940affb4a491fcdc348c18a606f8011356d9ae75b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4c001c6df3cebc23ad2b6490d675c0b58ec10a7f59e1d215dd80552bd7f2cab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c001c6df3cebc23ad2b6490d675c0b58ec10a7f59e1d215dd80552bd7f2cab1->enter($__internal_4c001c6df3cebc23ad2b6490d675c0b58ec10a7f59e1d215dd80552bd7f2cab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_4c001c6df3cebc23ad2b6490d675c0b58ec10a7f59e1d215dd80552bd7f2cab1->leave($__internal_4c001c6df3cebc23ad2b6490d675c0b58ec10a7f59e1d215dd80552bd7f2cab1_prof);

        
        $__internal_7b00c7c11fe95aeda98b2940affb4a491fcdc348c18a606f8011356d9ae75b7d->leave($__internal_7b00c7c11fe95aeda98b2940affb4a491fcdc348c18a606f8011356d9ae75b7d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/exception.html.twig";
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
", "@EasyAdmin/default/exception.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\exception.html.twig");
    }
}
