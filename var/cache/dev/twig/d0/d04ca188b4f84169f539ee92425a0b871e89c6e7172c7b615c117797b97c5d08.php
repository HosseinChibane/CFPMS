<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_e4866d575b7c5a1bf69023265de5b51be2651246a6a10db8ae9c00179e39295f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e68c6bcab5e28db4b228f6a0365ed8267f7e5a9355b6f6206c8ec0c54d6334f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e68c6bcab5e28db4b228f6a0365ed8267f7e5a9355b6f6206c8ec0c54d6334f->enter($__internal_5e68c6bcab5e28db4b228f6a0365ed8267f7e5a9355b6f6206c8ec0c54d6334f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        $__internal_c3d55b6af11f03dbe9de908a6a55654f38ed46a7270d8c961c8267b2475e04f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d55b6af11f03dbe9de908a6a55654f38ed46a7270d8c961c8267b2475e04f8->enter($__internal_c3d55b6af11f03dbe9de908a6a55654f38ed46a7270d8c961c8267b2475e04f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_59b512490b4be6ca84f38aa92079158a1c6b578b851c4ac7dffb46a3a0512631"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_59b512490b4be6ca84f38aa92079158a1c6b578b851c4ac7dffb46a3a0512631"] ?? $this->getContext($context, "__internal_59b512490b4be6ca84f38aa92079158a1c6b578b851c4ac7dffb46a3a0512631"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_59b512490b4be6ca84f38aa92079158a1c6b578b851c4ac7dffb46a3a0512631"] ?? $this->getContext($context, "__internal_59b512490b4be6ca84f38aa92079158a1c6b578b851c4ac7dffb46a3a0512631"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e68c6bcab5e28db4b228f6a0365ed8267f7e5a9355b6f6206c8ec0c54d6334f->leave($__internal_5e68c6bcab5e28db4b228f6a0365ed8267f7e5a9355b6f6206c8ec0c54d6334f_prof);

        
        $__internal_c3d55b6af11f03dbe9de908a6a55654f38ed46a7270d8c961c8267b2475e04f8->leave($__internal_c3d55b6af11f03dbe9de908a6a55654f38ed46a7270d8c961c8267b2475e04f8_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_24614e1d3a4f2b84f8e342ccaab55981bc0a3123fd4f35db70f9ae3e54245fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24614e1d3a4f2b84f8e342ccaab55981bc0a3123fd4f35db70f9ae3e54245fec->enter($__internal_24614e1d3a4f2b84f8e342ccaab55981bc0a3123fd4f35db70f9ae3e54245fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_097ba0aa3f0b2667d31964cc028229fc7006413f60fa4d623e29e5e0ddf99809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_097ba0aa3f0b2667d31964cc028229fc7006413f60fa4d623e29e5e0ddf99809->enter($__internal_097ba0aa3f0b2667d31964cc028229fc7006413f60fa4d623e29e5e0ddf99809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_097ba0aa3f0b2667d31964cc028229fc7006413f60fa4d623e29e5e0ddf99809->leave($__internal_097ba0aa3f0b2667d31964cc028229fc7006413f60fa4d623e29e5e0ddf99809_prof);

        
        $__internal_24614e1d3a4f2b84f8e342ccaab55981bc0a3123fd4f35db70f9ae3e54245fec->leave($__internal_24614e1d3a4f2b84f8e342ccaab55981bc0a3123fd4f35db70f9ae3e54245fec_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_e68b41206b5f6b60f5de5ea73e8db06a76bf3baa5fd1ff97d7190a8ada4d9688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e68b41206b5f6b60f5de5ea73e8db06a76bf3baa5fd1ff97d7190a8ada4d9688->enter($__internal_e68b41206b5f6b60f5de5ea73e8db06a76bf3baa5fd1ff97d7190a8ada4d9688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_0da8b1d452faa96da3611cbe12a934a67128ede0d0e0dcc0f33726e39b61d651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da8b1d452faa96da3611cbe12a934a67128ede0d0e0dcc0f33726e39b61d651->enter($__internal_0da8b1d452faa96da3611cbe12a934a67128ede0d0e0dcc0f33726e39b61d651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_0da8b1d452faa96da3611cbe12a934a67128ede0d0e0dcc0f33726e39b61d651->leave($__internal_0da8b1d452faa96da3611cbe12a934a67128ede0d0e0dcc0f33726e39b61d651_prof);

        
        $__internal_e68b41206b5f6b60f5de5ea73e8db06a76bf3baa5fd1ff97d7190a8ada4d9688->leave($__internal_e68b41206b5f6b60f5de5ea73e8db06a76bf3baa5fd1ff97d7190a8ada4d9688_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_232dc0438b79b44814f888e42b6ba7671b2e6427a2682c632ac9177bdeff5300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232dc0438b79b44814f888e42b6ba7671b2e6427a2682c632ac9177bdeff5300->enter($__internal_232dc0438b79b44814f888e42b6ba7671b2e6427a2682c632ac9177bdeff5300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_3e9a61cde473a6d8a67574911499a38c6b86b659b1364e6cd5661bb454f54b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e9a61cde473a6d8a67574911499a38c6b86b659b1364e6cd5661bb454f54b45->enter($__internal_3e9a61cde473a6d8a67574911499a38c6b86b659b1364e6cd5661bb454f54b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_59b512490b4be6ca84f38aa92079158a1c6b578b851c4ac7dffb46a3a0512631"] ?? $this->getContext($context, "__internal_59b512490b4be6ca84f38aa92079158a1c6b578b851c4ac7dffb46a3a0512631")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3e9a61cde473a6d8a67574911499a38c6b86b659b1364e6cd5661bb454f54b45->leave($__internal_3e9a61cde473a6d8a67574911499a38c6b86b659b1364e6cd5661bb454f54b45_prof);

        
        $__internal_232dc0438b79b44814f888e42b6ba7671b2e6427a2682c632ac9177bdeff5300->leave($__internal_232dc0438b79b44814f888e42b6ba7671b2e6427a2682c632ac9177bdeff5300_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_1a3a3dc39c1e25f1e09f74ef0b3a8d73211bcad33dd6c7688b6b159c20fdcc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3a3dc39c1e25f1e09f74ef0b3a8d73211bcad33dd6c7688b6b159c20fdcc42->enter($__internal_1a3a3dc39c1e25f1e09f74ef0b3a8d73211bcad33dd6c7688b6b159c20fdcc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1d7781dea2f1e82ac087bd818fa7430f228abb87885740da0ddc3787bb539a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7781dea2f1e82ac087bd818fa7430f228abb87885740da0ddc3787bb539a9e->enter($__internal_1d7781dea2f1e82ac087bd818fa7430f228abb87885740da0ddc3787bb539a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_1d7781dea2f1e82ac087bd818fa7430f228abb87885740da0ddc3787bb539a9e->leave($__internal_1d7781dea2f1e82ac087bd818fa7430f228abb87885740da0ddc3787bb539a9e_prof);

        
        $__internal_1a3a3dc39c1e25f1e09f74ef0b3a8d73211bcad33dd6c7688b6b159c20fdcc42->leave($__internal_1a3a3dc39c1e25f1e09f74ef0b3a8d73211bcad33dd6c7688b6b159c20fdcc42_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_d0e11d0966f00d23dd3d2f44a0a1ff837b8274a865bba5cd9c4fedb73f0bb6be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e11d0966f00d23dd3d2f44a0a1ff837b8274a865bba5cd9c4fedb73f0bb6be->enter($__internal_d0e11d0966f00d23dd3d2f44a0a1ff837b8274a865bba5cd9c4fedb73f0bb6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_bcac22c1e03d3a5dc7e2360e556889e4fe362036f69686b75a57ba99f39ed050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcac22c1e03d3a5dc7e2360e556889e4fe362036f69686b75a57ba99f39ed050->enter($__internal_bcac22c1e03d3a5dc7e2360e556889e4fe362036f69686b75a57ba99f39ed050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_bcac22c1e03d3a5dc7e2360e556889e4fe362036f69686b75a57ba99f39ed050->leave($__internal_bcac22c1e03d3a5dc7e2360e556889e4fe362036f69686b75a57ba99f39ed050_prof);

        
        $__internal_d0e11d0966f00d23dd3d2f44a0a1ff837b8274a865bba5cd9c4fedb73f0bb6be->leave($__internal_d0e11d0966f00d23dd3d2f44a0a1ff837b8274a865bba5cd9c4fedb73f0bb6be_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_6438406234819f7a3100c088367198ad12a47c0ef4f33ec7de75cad277d75a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6438406234819f7a3100c088367198ad12a47c0ef4f33ec7de75cad277d75a28->enter($__internal_6438406234819f7a3100c088367198ad12a47c0ef4f33ec7de75cad277d75a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_e95be734c08ec44f3da71e1da23f6e01cc144f0c000f4105cb57dc9208c77e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95be734c08ec44f3da71e1da23f6e01cc144f0c000f4105cb57dc9208c77e0a->enter($__internal_e95be734c08ec44f3da71e1da23f6e01cc144f0c000f4105cb57dc9208c77e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_e95be734c08ec44f3da71e1da23f6e01cc144f0c000f4105cb57dc9208c77e0a->leave($__internal_e95be734c08ec44f3da71e1da23f6e01cc144f0c000f4105cb57dc9208c77e0a_prof);

        
        $__internal_6438406234819f7a3100c088367198ad12a47c0ef4f33ec7de75cad277d75a28->leave($__internal_6438406234819f7a3100c088367198ad12a47c0ef4f33ec7de75cad277d75a28_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 36,  180 => 30,  172 => 26,  163 => 25,  150 => 21,  131 => 20,  122 => 19,  109 => 15,  108 => 4,  106 => 15,  103 => 14,  101 => 13,  92 => 12,  74 => 10,  56 => 9,  46 => 7,  44 => 4,  43 => 5,  42 => 4,  41 => 5,  39 => 4,  37 => 3,  35 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\new.html.twig");
    }
}
