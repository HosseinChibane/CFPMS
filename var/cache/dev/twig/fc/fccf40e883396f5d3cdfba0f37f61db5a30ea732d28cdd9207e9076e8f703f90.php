<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_8458ed84d2e218a7f1915cc5d1e2dac5b3f0f7cd7d877bff18b23b2555ac9f23 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4424f8c4b98fd359d14b5ad872e84a49896ca3926b7527e9b9ac5eaa34458fa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4424f8c4b98fd359d14b5ad872e84a49896ca3926b7527e9b9ac5eaa34458fa1->enter($__internal_4424f8c4b98fd359d14b5ad872e84a49896ca3926b7527e9b9ac5eaa34458fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        $__internal_6df5f1da6677c523faf7eb6b7fc56668ac48db757df2a93d9ab321bc509a5c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6df5f1da6677c523faf7eb6b7fc56668ac48db757df2a93d9ab321bc509a5c63->enter($__internal_6df5f1da6677c523faf7eb6b7fc56668ac48db757df2a93d9ab321bc509a5c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_c49170d99fec815317240d346f149768b9c4ca3bc8e92dbda02342b508cf7cc7"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_c49170d99fec815317240d346f149768b9c4ca3bc8e92dbda02342b508cf7cc7"] ?? $this->getContext($context, "__internal_c49170d99fec815317240d346f149768b9c4ca3bc8e92dbda02342b508cf7cc7"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_c49170d99fec815317240d346f149768b9c4ca3bc8e92dbda02342b508cf7cc7"] ?? $this->getContext($context, "__internal_c49170d99fec815317240d346f149768b9c4ca3bc8e92dbda02342b508cf7cc7"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4424f8c4b98fd359d14b5ad872e84a49896ca3926b7527e9b9ac5eaa34458fa1->leave($__internal_4424f8c4b98fd359d14b5ad872e84a49896ca3926b7527e9b9ac5eaa34458fa1_prof);

        
        $__internal_6df5f1da6677c523faf7eb6b7fc56668ac48db757df2a93d9ab321bc509a5c63->leave($__internal_6df5f1da6677c523faf7eb6b7fc56668ac48db757df2a93d9ab321bc509a5c63_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_94dcfe35dc2ed6ad7dc64f85d43f3c7d2ca292c75c0cd36428974592fb4ca176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94dcfe35dc2ed6ad7dc64f85d43f3c7d2ca292c75c0cd36428974592fb4ca176->enter($__internal_94dcfe35dc2ed6ad7dc64f85d43f3c7d2ca292c75c0cd36428974592fb4ca176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_5989b08ed48e11d21395bd3c6fb5dd0ffe12fa1b8c150e47474f05f868641c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5989b08ed48e11d21395bd3c6fb5dd0ffe12fa1b8c150e47474f05f868641c29->enter($__internal_5989b08ed48e11d21395bd3c6fb5dd0ffe12fa1b8c150e47474f05f868641c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_5989b08ed48e11d21395bd3c6fb5dd0ffe12fa1b8c150e47474f05f868641c29->leave($__internal_5989b08ed48e11d21395bd3c6fb5dd0ffe12fa1b8c150e47474f05f868641c29_prof);

        
        $__internal_94dcfe35dc2ed6ad7dc64f85d43f3c7d2ca292c75c0cd36428974592fb4ca176->leave($__internal_94dcfe35dc2ed6ad7dc64f85d43f3c7d2ca292c75c0cd36428974592fb4ca176_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_d5191579e85997a091b722f8a0f0ccf401528eff77bf53b2d0554b0ff09e52e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5191579e85997a091b722f8a0f0ccf401528eff77bf53b2d0554b0ff09e52e5->enter($__internal_d5191579e85997a091b722f8a0f0ccf401528eff77bf53b2d0554b0ff09e52e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_8ee04b57bb23b4cec119a3d4a4d367b1fb4eb9e99d4d6b0f59c6de1e7472b6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ee04b57bb23b4cec119a3d4a4d367b1fb4eb9e99d4d6b0f59c6de1e7472b6b3->enter($__internal_8ee04b57bb23b4cec119a3d4a4d367b1fb4eb9e99d4d6b0f59c6de1e7472b6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_8ee04b57bb23b4cec119a3d4a4d367b1fb4eb9e99d4d6b0f59c6de1e7472b6b3->leave($__internal_8ee04b57bb23b4cec119a3d4a4d367b1fb4eb9e99d4d6b0f59c6de1e7472b6b3_prof);

        
        $__internal_d5191579e85997a091b722f8a0f0ccf401528eff77bf53b2d0554b0ff09e52e5->leave($__internal_d5191579e85997a091b722f8a0f0ccf401528eff77bf53b2d0554b0ff09e52e5_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_ee0fe778a4f8885e47f30a68e3c4c944b13059665a216639634dc863aa65911f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0fe778a4f8885e47f30a68e3c4c944b13059665a216639634dc863aa65911f->enter($__internal_ee0fe778a4f8885e47f30a68e3c4c944b13059665a216639634dc863aa65911f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_88b3e7a46c9eb1dd417c10189de1567304025852bca973a2ca301003484cc635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88b3e7a46c9eb1dd417c10189de1567304025852bca973a2ca301003484cc635->enter($__internal_88b3e7a46c9eb1dd417c10189de1567304025852bca973a2ca301003484cc635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_c49170d99fec815317240d346f149768b9c4ca3bc8e92dbda02342b508cf7cc7"] ?? $this->getContext($context, "__internal_c49170d99fec815317240d346f149768b9c4ca3bc8e92dbda02342b508cf7cc7")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_88b3e7a46c9eb1dd417c10189de1567304025852bca973a2ca301003484cc635->leave($__internal_88b3e7a46c9eb1dd417c10189de1567304025852bca973a2ca301003484cc635_prof);

        
        $__internal_ee0fe778a4f8885e47f30a68e3c4c944b13059665a216639634dc863aa65911f->leave($__internal_ee0fe778a4f8885e47f30a68e3c4c944b13059665a216639634dc863aa65911f_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_0a7543a19acbbc540bc2a840060d8007f7b7930507293cd92d831d41381639b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7543a19acbbc540bc2a840060d8007f7b7930507293cd92d831d41381639b8->enter($__internal_0a7543a19acbbc540bc2a840060d8007f7b7930507293cd92d831d41381639b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f759e66a40011024c431077b9c9633657e2cf9b72d729c3f544d1c938235d650 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f759e66a40011024c431077b9c9633657e2cf9b72d729c3f544d1c938235d650->enter($__internal_f759e66a40011024c431077b9c9633657e2cf9b72d729c3f544d1c938235d650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_f759e66a40011024c431077b9c9633657e2cf9b72d729c3f544d1c938235d650->leave($__internal_f759e66a40011024c431077b9c9633657e2cf9b72d729c3f544d1c938235d650_prof);

        
        $__internal_0a7543a19acbbc540bc2a840060d8007f7b7930507293cd92d831d41381639b8->leave($__internal_0a7543a19acbbc540bc2a840060d8007f7b7930507293cd92d831d41381639b8_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_4240b0eccfe146770874dc038b2123bf72364623b8f28e7c2308abc8d37f1c63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4240b0eccfe146770874dc038b2123bf72364623b8f28e7c2308abc8d37f1c63->enter($__internal_4240b0eccfe146770874dc038b2123bf72364623b8f28e7c2308abc8d37f1c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_2ebf27b9f79423213698ed456b77eb627ab625e5631febeaaf58c92c71fca2d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ebf27b9f79423213698ed456b77eb627ab625e5631febeaaf58c92c71fca2d7->enter($__internal_2ebf27b9f79423213698ed456b77eb627ab625e5631febeaaf58c92c71fca2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_2ebf27b9f79423213698ed456b77eb627ab625e5631febeaaf58c92c71fca2d7->leave($__internal_2ebf27b9f79423213698ed456b77eb627ab625e5631febeaaf58c92c71fca2d7_prof);

        
        $__internal_4240b0eccfe146770874dc038b2123bf72364623b8f28e7c2308abc8d37f1c63->leave($__internal_4240b0eccfe146770874dc038b2123bf72364623b8f28e7c2308abc8d37f1c63_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_fbbad780089b0d7eae8c3d5dcc175a72981bd325cacc34a49a769e1fa9aefa99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbad780089b0d7eae8c3d5dcc175a72981bd325cacc34a49a769e1fa9aefa99->enter($__internal_fbbad780089b0d7eae8c3d5dcc175a72981bd325cacc34a49a769e1fa9aefa99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_271e222e7802624ab99a2e94a9d3ae6920923e1633b3f04008fc21db1258fcb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_271e222e7802624ab99a2e94a9d3ae6920923e1633b3f04008fc21db1258fcb5->enter($__internal_271e222e7802624ab99a2e94a9d3ae6920923e1633b3f04008fc21db1258fcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_271e222e7802624ab99a2e94a9d3ae6920923e1633b3f04008fc21db1258fcb5->leave($__internal_271e222e7802624ab99a2e94a9d3ae6920923e1633b3f04008fc21db1258fcb5_prof);

        
        $__internal_fbbad780089b0d7eae8c3d5dcc175a72981bd325cacc34a49a769e1fa9aefa99->leave($__internal_fbbad780089b0d7eae8c3d5dcc175a72981bd325cacc34a49a769e1fa9aefa99_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
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
", "EasyAdminBundle:default:new.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/new.html.twig");
    }
}
