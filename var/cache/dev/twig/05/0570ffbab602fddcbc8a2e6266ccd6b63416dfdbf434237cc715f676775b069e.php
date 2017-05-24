<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_2aece30912180f97744f50075836542c512ff891a1edaf80b3b3f0f6cdbab7f0 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3e76bc05e2e2395dab84b4ec2404413c8b44c747bc4b2e0209d41539ef19879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e76bc05e2e2395dab84b4ec2404413c8b44c747bc4b2e0209d41539ef19879->enter($__internal_c3e76bc05e2e2395dab84b4ec2404413c8b44c747bc4b2e0209d41539ef19879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        $__internal_97d3997cf1836243d427b43c1c99aed6874ff4df6001f677c60f2822bdbcb034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d3997cf1836243d427b43c1c99aed6874ff4df6001f677c60f2822bdbcb034->enter($__internal_97d3997cf1836243d427b43c1c99aed6874ff4df6001f677c60f2822bdbcb034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_baa33593a5021c6558a959af4999ae5ac1b2aaa4eddf687fad77d2a013fa8f6e"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_baa33593a5021c6558a959af4999ae5ac1b2aaa4eddf687fad77d2a013fa8f6e"] ?? $this->getContext($context, "__internal_baa33593a5021c6558a959af4999ae5ac1b2aaa4eddf687fad77d2a013fa8f6e"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_baa33593a5021c6558a959af4999ae5ac1b2aaa4eddf687fad77d2a013fa8f6e"] ?? $this->getContext($context, "__internal_baa33593a5021c6558a959af4999ae5ac1b2aaa4eddf687fad77d2a013fa8f6e"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3e76bc05e2e2395dab84b4ec2404413c8b44c747bc4b2e0209d41539ef19879->leave($__internal_c3e76bc05e2e2395dab84b4ec2404413c8b44c747bc4b2e0209d41539ef19879_prof);

        
        $__internal_97d3997cf1836243d427b43c1c99aed6874ff4df6001f677c60f2822bdbcb034->leave($__internal_97d3997cf1836243d427b43c1c99aed6874ff4df6001f677c60f2822bdbcb034_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8751a022ba302541a511a880ca68c2162f0af2944d8f165929136525d841c299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8751a022ba302541a511a880ca68c2162f0af2944d8f165929136525d841c299->enter($__internal_8751a022ba302541a511a880ca68c2162f0af2944d8f165929136525d841c299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_68dca3e155c427eb6011bed99a5d3571606a492525c83201d7d3b1a85a360803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68dca3e155c427eb6011bed99a5d3571606a492525c83201d7d3b1a85a360803->enter($__internal_68dca3e155c427eb6011bed99a5d3571606a492525c83201d7d3b1a85a360803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_68dca3e155c427eb6011bed99a5d3571606a492525c83201d7d3b1a85a360803->leave($__internal_68dca3e155c427eb6011bed99a5d3571606a492525c83201d7d3b1a85a360803_prof);

        
        $__internal_8751a022ba302541a511a880ca68c2162f0af2944d8f165929136525d841c299->leave($__internal_8751a022ba302541a511a880ca68c2162f0af2944d8f165929136525d841c299_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_4771eeed6fb8ce6cf3873dee3887888af3f50cf51c076e3b2cae6e8c96966b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4771eeed6fb8ce6cf3873dee3887888af3f50cf51c076e3b2cae6e8c96966b53->enter($__internal_4771eeed6fb8ce6cf3873dee3887888af3f50cf51c076e3b2cae6e8c96966b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_fbd0ccd1635a3dcac6f11de325c3d907030793f76f5aad632e8001a4aec9525d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbd0ccd1635a3dcac6f11de325c3d907030793f76f5aad632e8001a4aec9525d->enter($__internal_fbd0ccd1635a3dcac6f11de325c3d907030793f76f5aad632e8001a4aec9525d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_fbd0ccd1635a3dcac6f11de325c3d907030793f76f5aad632e8001a4aec9525d->leave($__internal_fbd0ccd1635a3dcac6f11de325c3d907030793f76f5aad632e8001a4aec9525d_prof);

        
        $__internal_4771eeed6fb8ce6cf3873dee3887888af3f50cf51c076e3b2cae6e8c96966b53->leave($__internal_4771eeed6fb8ce6cf3873dee3887888af3f50cf51c076e3b2cae6e8c96966b53_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_cc33ffcfed08c0db0c69b685795999a63173dc216efac5d6e281c17d6e093b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc33ffcfed08c0db0c69b685795999a63173dc216efac5d6e281c17d6e093b36->enter($__internal_cc33ffcfed08c0db0c69b685795999a63173dc216efac5d6e281c17d6e093b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_ae59d7e953f7089d62ac1c020c8ad599acc4918f0785a4c72bf5001f1f379568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae59d7e953f7089d62ac1c020c8ad599acc4918f0785a4c72bf5001f1f379568->enter($__internal_ae59d7e953f7089d62ac1c020c8ad599acc4918f0785a4c72bf5001f1f379568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_baa33593a5021c6558a959af4999ae5ac1b2aaa4eddf687fad77d2a013fa8f6e"] ?? $this->getContext($context, "__internal_baa33593a5021c6558a959af4999ae5ac1b2aaa4eddf687fad77d2a013fa8f6e")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ae59d7e953f7089d62ac1c020c8ad599acc4918f0785a4c72bf5001f1f379568->leave($__internal_ae59d7e953f7089d62ac1c020c8ad599acc4918f0785a4c72bf5001f1f379568_prof);

        
        $__internal_cc33ffcfed08c0db0c69b685795999a63173dc216efac5d6e281c17d6e093b36->leave($__internal_cc33ffcfed08c0db0c69b685795999a63173dc216efac5d6e281c17d6e093b36_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_7b2b89e0b1dd4fa4400942adefe12e255c41db22a57137e5dd8a94a1d559a071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2b89e0b1dd4fa4400942adefe12e255c41db22a57137e5dd8a94a1d559a071->enter($__internal_7b2b89e0b1dd4fa4400942adefe12e255c41db22a57137e5dd8a94a1d559a071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3f5d47feecfec4f0fe68614147f08c0359579c0295d09dbb08195354bbeda1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f5d47feecfec4f0fe68614147f08c0359579c0295d09dbb08195354bbeda1bf->enter($__internal_3f5d47feecfec4f0fe68614147f08c0359579c0295d09dbb08195354bbeda1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_3f5d47feecfec4f0fe68614147f08c0359579c0295d09dbb08195354bbeda1bf->leave($__internal_3f5d47feecfec4f0fe68614147f08c0359579c0295d09dbb08195354bbeda1bf_prof);

        
        $__internal_7b2b89e0b1dd4fa4400942adefe12e255c41db22a57137e5dd8a94a1d559a071->leave($__internal_7b2b89e0b1dd4fa4400942adefe12e255c41db22a57137e5dd8a94a1d559a071_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_e8e0665d165db03a4a2e22bba836c1d7dc98f000c4b0aaede7d4df4b0725da9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e0665d165db03a4a2e22bba836c1d7dc98f000c4b0aaede7d4df4b0725da9c->enter($__internal_e8e0665d165db03a4a2e22bba836c1d7dc98f000c4b0aaede7d4df4b0725da9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        $__internal_f958e116e6e172e77c0f1a2ef01b8876ed55c48c2c95e86536a82c82fe29dfb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f958e116e6e172e77c0f1a2ef01b8876ed55c48c2c95e86536a82c82fe29dfb4->enter($__internal_f958e116e6e172e77c0f1a2ef01b8876ed55c48c2c95e86536a82c82fe29dfb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_f958e116e6e172e77c0f1a2ef01b8876ed55c48c2c95e86536a82c82fe29dfb4->leave($__internal_f958e116e6e172e77c0f1a2ef01b8876ed55c48c2c95e86536a82c82fe29dfb4_prof);

        
        $__internal_e8e0665d165db03a4a2e22bba836c1d7dc98f000c4b0aaede7d4df4b0725da9c->leave($__internal_e8e0665d165db03a4a2e22bba836c1d7dc98f000c4b0aaede7d4df4b0725da9c_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_46647e655d322f3303bd03d277a77dea87262ca8c4a3ae522775af17566db6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46647e655d322f3303bd03d277a77dea87262ca8c4a3ae522775af17566db6dd->enter($__internal_46647e655d322f3303bd03d277a77dea87262ca8c4a3ae522775af17566db6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_c5142528553a930d63ec23737714f697b23cd045ee7b71cf11084327919f142c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5142528553a930d63ec23737714f697b23cd045ee7b71cf11084327919f142c->enter($__internal_c5142528553a930d63ec23737714f697b23cd045ee7b71cf11084327919f142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

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
        
        $__internal_c5142528553a930d63ec23737714f697b23cd045ee7b71cf11084327919f142c->leave($__internal_c5142528553a930d63ec23737714f697b23cd045ee7b71cf11084327919f142c_prof);

        
        $__internal_46647e655d322f3303bd03d277a77dea87262ca8c4a3ae522775af17566db6dd->leave($__internal_46647e655d322f3303bd03d277a77dea87262ca8c4a3ae522775af17566db6dd_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_e321938fe148214ce96d2e9da4d27892153da79132afb30c940bf63579c236c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e321938fe148214ce96d2e9da4d27892153da79132afb30c940bf63579c236c5->enter($__internal_e321938fe148214ce96d2e9da4d27892153da79132afb30c940bf63579c236c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_1e63625a86d63b441256b8bd380b6f21dc22d5895aa9faf7a85e73f68d90d14c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e63625a86d63b441256b8bd380b6f21dc22d5895aa9faf7a85e73f68d90d14c->enter($__internal_1e63625a86d63b441256b8bd380b6f21dc22d5895aa9faf7a85e73f68d90d14c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_1e63625a86d63b441256b8bd380b6f21dc22d5895aa9faf7a85e73f68d90d14c->leave($__internal_1e63625a86d63b441256b8bd380b6f21dc22d5895aa9faf7a85e73f68d90d14c_prof);

        
        $__internal_e321938fe148214ce96d2e9da4d27892153da79132afb30c940bf63579c236c5->leave($__internal_e321938fe148214ce96d2e9da4d27892153da79132afb30c940bf63579c236c5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
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
", "EasyAdminBundle:default:edit.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/edit.html.twig");
    }
}
