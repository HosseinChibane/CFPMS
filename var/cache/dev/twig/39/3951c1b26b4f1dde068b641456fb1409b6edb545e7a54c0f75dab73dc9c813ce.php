<?php

/* @EasyAdmin/default/edit.html.twig */
class __TwigTemplate_965561b51a123226f877c111777d987d0acab8a875dc54a2a8430da136f9bdc3 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87311fbf7a0722f98532e127d3cd74b96380c653c7c79bc8777201232cdcecae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87311fbf7a0722f98532e127d3cd74b96380c653c7c79bc8777201232cdcecae->enter($__internal_87311fbf7a0722f98532e127d3cd74b96380c653c7c79bc8777201232cdcecae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        $__internal_df57c6e93b49b8242d0080869b54a60260bc4c1c7140823a67423d2055b8bf44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df57c6e93b49b8242d0080869b54a60260bc4c1c7140823a67423d2055b8bf44->enter($__internal_df57c6e93b49b8242d0080869b54a60260bc4c1c7140823a67423d2055b8bf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_e9c0deb78b8712a68ca6d8633fe1d8ba9d2a0603b88173ab9f5434a05166f863"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_e9c0deb78b8712a68ca6d8633fe1d8ba9d2a0603b88173ab9f5434a05166f863"] ?? $this->getContext($context, "__internal_e9c0deb78b8712a68ca6d8633fe1d8ba9d2a0603b88173ab9f5434a05166f863"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_e9c0deb78b8712a68ca6d8633fe1d8ba9d2a0603b88173ab9f5434a05166f863"] ?? $this->getContext($context, "__internal_e9c0deb78b8712a68ca6d8633fe1d8ba9d2a0603b88173ab9f5434a05166f863"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87311fbf7a0722f98532e127d3cd74b96380c653c7c79bc8777201232cdcecae->leave($__internal_87311fbf7a0722f98532e127d3cd74b96380c653c7c79bc8777201232cdcecae_prof);

        
        $__internal_df57c6e93b49b8242d0080869b54a60260bc4c1c7140823a67423d2055b8bf44->leave($__internal_df57c6e93b49b8242d0080869b54a60260bc4c1c7140823a67423d2055b8bf44_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f3044393a8e3cc6d692aa9c789ff5b33728277b93cdb54275cfd7ca79e45ff08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3044393a8e3cc6d692aa9c789ff5b33728277b93cdb54275cfd7ca79e45ff08->enter($__internal_f3044393a8e3cc6d692aa9c789ff5b33728277b93cdb54275cfd7ca79e45ff08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_501b6522cd2432bc5a189025b6b0297686f3ea98a2ac07741829b233dd470ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501b6522cd2432bc5a189025b6b0297686f3ea98a2ac07741829b233dd470ec4->enter($__internal_501b6522cd2432bc5a189025b6b0297686f3ea98a2ac07741829b233dd470ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_501b6522cd2432bc5a189025b6b0297686f3ea98a2ac07741829b233dd470ec4->leave($__internal_501b6522cd2432bc5a189025b6b0297686f3ea98a2ac07741829b233dd470ec4_prof);

        
        $__internal_f3044393a8e3cc6d692aa9c789ff5b33728277b93cdb54275cfd7ca79e45ff08->leave($__internal_f3044393a8e3cc6d692aa9c789ff5b33728277b93cdb54275cfd7ca79e45ff08_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_da34cd730408250de24ff64720d7ff179f139c5b10e6a565e687a4fc85c3848f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da34cd730408250de24ff64720d7ff179f139c5b10e6a565e687a4fc85c3848f->enter($__internal_da34cd730408250de24ff64720d7ff179f139c5b10e6a565e687a4fc85c3848f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_e187b561bdbf26f7545f3972cbac4d71ade7c423ddb96194ae83c77240275abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e187b561bdbf26f7545f3972cbac4d71ade7c423ddb96194ae83c77240275abd->enter($__internal_e187b561bdbf26f7545f3972cbac4d71ade7c423ddb96194ae83c77240275abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_e187b561bdbf26f7545f3972cbac4d71ade7c423ddb96194ae83c77240275abd->leave($__internal_e187b561bdbf26f7545f3972cbac4d71ade7c423ddb96194ae83c77240275abd_prof);

        
        $__internal_da34cd730408250de24ff64720d7ff179f139c5b10e6a565e687a4fc85c3848f->leave($__internal_da34cd730408250de24ff64720d7ff179f139c5b10e6a565e687a4fc85c3848f_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_e24746723a548b815afe1668f1c3994c30ae0e367744ef7dd9772f4409c86dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e24746723a548b815afe1668f1c3994c30ae0e367744ef7dd9772f4409c86dba->enter($__internal_e24746723a548b815afe1668f1c3994c30ae0e367744ef7dd9772f4409c86dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_da5993fb8a0908213b9cf7634dbfc741637f4c36ff6ffafcad56172f19dcf6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5993fb8a0908213b9cf7634dbfc741637f4c36ff6ffafcad56172f19dcf6f1->enter($__internal_da5993fb8a0908213b9cf7634dbfc741637f4c36ff6ffafcad56172f19dcf6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_e9c0deb78b8712a68ca6d8633fe1d8ba9d2a0603b88173ab9f5434a05166f863"] ?? $this->getContext($context, "__internal_e9c0deb78b8712a68ca6d8633fe1d8ba9d2a0603b88173ab9f5434a05166f863")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_da5993fb8a0908213b9cf7634dbfc741637f4c36ff6ffafcad56172f19dcf6f1->leave($__internal_da5993fb8a0908213b9cf7634dbfc741637f4c36ff6ffafcad56172f19dcf6f1_prof);

        
        $__internal_e24746723a548b815afe1668f1c3994c30ae0e367744ef7dd9772f4409c86dba->leave($__internal_e24746723a548b815afe1668f1c3994c30ae0e367744ef7dd9772f4409c86dba_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_7c13c73641ee74139d101e59b097f0c0db347988a190c20dbc430d0398735cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c13c73641ee74139d101e59b097f0c0db347988a190c20dbc430d0398735cde->enter($__internal_7c13c73641ee74139d101e59b097f0c0db347988a190c20dbc430d0398735cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1aa72b378af2c6704a2d9faf45224d1ef409524358d18b5573370641db8ffcb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa72b378af2c6704a2d9faf45224d1ef409524358d18b5573370641db8ffcb8->enter($__internal_1aa72b378af2c6704a2d9faf45224d1ef409524358d18b5573370641db8ffcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_1aa72b378af2c6704a2d9faf45224d1ef409524358d18b5573370641db8ffcb8->leave($__internal_1aa72b378af2c6704a2d9faf45224d1ef409524358d18b5573370641db8ffcb8_prof);

        
        $__internal_7c13c73641ee74139d101e59b097f0c0db347988a190c20dbc430d0398735cde->leave($__internal_7c13c73641ee74139d101e59b097f0c0db347988a190c20dbc430d0398735cde_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_3d8b8ce878a883c68d64423b68ef81083f5bd72f57a189d3f8166667f8d4ad45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8b8ce878a883c68d64423b68ef81083f5bd72f57a189d3f8166667f8d4ad45->enter($__internal_3d8b8ce878a883c68d64423b68ef81083f5bd72f57a189d3f8166667f8d4ad45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_97153d5ee510d817469404606d2865c9d3a2aca4db986cfbfdcceac7c62ed303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97153d5ee510d817469404606d2865c9d3a2aca4db986cfbfdcceac7c62ed303->enter($__internal_97153d5ee510d817469404606d2865c9d3a2aca4db986cfbfdcceac7c62ed303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_97153d5ee510d817469404606d2865c9d3a2aca4db986cfbfdcceac7c62ed303->leave($__internal_97153d5ee510d817469404606d2865c9d3a2aca4db986cfbfdcceac7c62ed303_prof);

        
        $__internal_3d8b8ce878a883c68d64423b68ef81083f5bd72f57a189d3f8166667f8d4ad45->leave($__internal_3d8b8ce878a883c68d64423b68ef81083f5bd72f57a189d3f8166667f8d4ad45_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_4b5238c20af3aabe41ed296033642a467320f4c39ddb9ac4cb76bf0f2f2de783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5238c20af3aabe41ed296033642a467320f4c39ddb9ac4cb76bf0f2f2de783->enter($__internal_4b5238c20af3aabe41ed296033642a467320f4c39ddb9ac4cb76bf0f2f2de783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_1d4bbd40b6e3a2feebba3dad672126d6f731517b3d1aef3e90685f11d1f5ccf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4bbd40b6e3a2feebba3dad672126d6f731517b3d1aef3e90685f11d1f5ccf1->enter($__internal_1d4bbd40b6e3a2feebba3dad672126d6f731517b3d1aef3e90685f11d1f5ccf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_1d4bbd40b6e3a2feebba3dad672126d6f731517b3d1aef3e90685f11d1f5ccf1->leave($__internal_1d4bbd40b6e3a2feebba3dad672126d6f731517b3d1aef3e90685f11d1f5ccf1_prof);

        
        $__internal_4b5238c20af3aabe41ed296033642a467320f4c39ddb9ac4cb76bf0f2f2de783->leave($__internal_4b5238c20af3aabe41ed296033642a467320f4c39ddb9ac4cb76bf0f2f2de783_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_b38369dc5fb2b81ef250f0e419eaf0d6a5b9fcccc72dfdae18e69df7ccbc3b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b38369dc5fb2b81ef250f0e419eaf0d6a5b9fcccc72dfdae18e69df7ccbc3b7b->enter($__internal_b38369dc5fb2b81ef250f0e419eaf0d6a5b9fcccc72dfdae18e69df7ccbc3b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_e2f24b07ef1d62d0c180e1464963e2c30f3fbd46479574c2ecb13bfad583d032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f24b07ef1d62d0c180e1464963e2c30f3fbd46479574c2ecb13bfad583d032->enter($__internal_e2f24b07ef1d62d0c180e1464963e2c30f3fbd46479574c2ecb13bfad583d032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_e2f24b07ef1d62d0c180e1464963e2c30f3fbd46479574c2ecb13bfad583d032->leave($__internal_e2f24b07ef1d62d0c180e1464963e2c30f3fbd46479574c2ecb13bfad583d032_prof);

        
        $__internal_b38369dc5fb2b81ef250f0e419eaf0d6a5b9fcccc72dfdae18e69df7ccbc3b7b->leave($__internal_b38369dc5fb2b81ef250f0e419eaf0d6a5b9fcccc72dfdae18e69df7ccbc3b7b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 58,  218 => 42,  210 => 38,  201 => 37,  190 => 33,  188 => 32,  187 => 31,  186 => 30,  185 => 29,  184 => 28,  182 => 26,  173 => 25,  160 => 22,  151 => 21,  141 => 25,  138 => 24,  135 => 21,  126 => 20,  113 => 16,  112 => 5,  110 => 16,  107 => 15,  105 => 14,  96 => 13,  78 => 11,  60 => 10,  50 => 8,  48 => 6,  47 => 5,  46 => 6,  45 => 5,  44 => 6,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/edit.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\edit.html.twig");
    }
}
