<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_870b5b7aac031ec8400a84e7b8f94e1436050dafdd69d2edb27e5395bb57ee2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c80a155c5fe1b60484602397791a0b4037ce5e6ea97d94e57222dfc0271a6059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80a155c5fe1b60484602397791a0b4037ce5e6ea97d94e57222dfc0271a6059->enter($__internal_c80a155c5fe1b60484602397791a0b4037ce5e6ea97d94e57222dfc0271a6059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        $__internal_17faa8447cb745e11475d3d1dee7cfb3f8ea7bc430f446d9cc204fa54c60bf00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17faa8447cb745e11475d3d1dee7cfb3f8ea7bc430f446d9cc204fa54c60bf00->enter($__internal_17faa8447cb745e11475d3d1dee7cfb3f8ea7bc430f446d9cc204fa54c60bf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 19
        echo "
";
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('form_widget', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('button_widget', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('money_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('date_widget', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 182
        echo "
";
        // line 183
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 204
        echo "
";
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('form_label', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('choice_label', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('radio_label', $context, $blocks);
        // line 225
        echo "
";
        // line 226
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 244
        echo "
";
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('form_row', $context, $blocks);
        // line 270
        echo "
";
        // line 271
        $this->displayBlock('collection_row', $context, $blocks);
        // line 306
        echo "
";
        // line 307
        $this->displayBlock('button_row', $context, $blocks);
        // line 312
        echo "
";
        // line 313
        $this->displayBlock('choice_row', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('date_row', $context, $blocks);
        // line 322
        echo "
";
        // line 323
        $this->displayBlock('time_row', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 332
        echo "
";
        // line 333
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 339
        echo "
";
        // line 340
        $this->displayBlock('radio_row', $context, $blocks);
        // line 346
        echo "
";
        // line 348
        $this->displayBlock('form_errors', $context, $blocks);
        // line 366
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 377
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 382
        echo "
";
        // line 383
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 387
        echo "
";
        // line 388
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 414
        echo "
";
        // line 415
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 437
        echo "
";
        // line 439
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 521
        echo "
";
        // line 523
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 534
        echo "
";
        // line 535
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 539
        echo "
";
        // line 541
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 546
        echo "
";
        // line 548
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
        
        $__internal_c80a155c5fe1b60484602397791a0b4037ce5e6ea97d94e57222dfc0271a6059->leave($__internal_c80a155c5fe1b60484602397791a0b4037ce5e6ea97d94e57222dfc0271a6059_prof);

        
        $__internal_17faa8447cb745e11475d3d1dee7cfb3f8ea7bc430f446d9cc204fa54c60bf00->leave($__internal_17faa8447cb745e11475d3d1dee7cfb3f8ea7bc430f446d9cc204fa54c60bf00_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_6b42ed4c3317e42eae253539c1cb7f68936fa89c303b10379ac48f0fba4f5616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b42ed4c3317e42eae253539c1cb7f68936fa89c303b10379ac48f0fba4f5616->enter($__internal_6b42ed4c3317e42eae253539c1cb7f68936fa89c303b10379ac48f0fba4f5616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_5c01fab730f798726fbe7b9d6697971e84f70285ef8135cd0a6235252463a0ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c01fab730f798726fbe7b9d6697971e84f70285ef8135cd0a6235252463a0ac->enter($__internal_5c01fab730f798726fbe7b9d6697971e84f70285ef8135cd0a6235252463a0ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_join_filter(array(0 => (((((            // line 7
array_key_exists("_easyadmin_form_type", $context)) ? (_twig_default_filter(($context["_easyadmin_form_type"] ?? $this->getContext($context, "_easyadmin_form_type")), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => (($this->getAttribute(            // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => ($this->getAttribute(            // line 9
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) . "-form")), " "), "data-view" => $this->getAttribute(            // line 11
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()), "data-entity" => $this->getAttribute($this->getAttribute(            // line 12
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "data-entity-id" => $this->getAttribute(            // line 13
($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_5c01fab730f798726fbe7b9d6697971e84f70285ef8135cd0a6235252463a0ac->leave($__internal_5c01fab730f798726fbe7b9d6697971e84f70285ef8135cd0a6235252463a0ac_prof);

        
        $__internal_6b42ed4c3317e42eae253539c1cb7f68936fa89c303b10379ac48f0fba4f5616->leave($__internal_6b42ed4c3317e42eae253539c1cb7f68936fa89c303b10379ac48f0fba4f5616_prof);

    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_5fdd73f430398c0c0731f1f57c7c02482ba74a4403113f23123f7d36856ebfc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fdd73f430398c0c0731f1f57c7c02482ba74a4403113f23123f7d36856ebfc6->enter($__internal_5fdd73f430398c0c0731f1f57c7c02482ba74a4403113f23123f7d36856ebfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_6a1e7ec3a43137a8e2a9a8b290e199dbf9c696d0e729335bad3d895e63ddc292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1e7ec3a43137a8e2a9a8b290e199dbf9c696d0e729335bad3d895e63ddc292->enter($__internal_6a1e7ec3a43137a8e2a9a8b290e199dbf9c696d0e729335bad3d895e63ddc292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 23
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 25
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 26
            echo "        ";
            ob_start();
            // line 27
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 30
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 42
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_6a1e7ec3a43137a8e2a9a8b290e199dbf9c696d0e729335bad3d895e63ddc292->leave($__internal_6a1e7ec3a43137a8e2a9a8b290e199dbf9c696d0e729335bad3d895e63ddc292_prof);

        
        $__internal_5fdd73f430398c0c0731f1f57c7c02482ba74a4403113f23123f7d36856ebfc6->leave($__internal_5fdd73f430398c0c0731f1f57c7c02482ba74a4403113f23123f7d36856ebfc6_prof);

    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_aa9887600650b7b78432ca332d8bab20ebe2e2c657f64c54949cc2dd94e07071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa9887600650b7b78432ca332d8bab20ebe2e2c657f64c54949cc2dd94e07071->enter($__internal_aa9887600650b7b78432ca332d8bab20ebe2e2c657f64c54949cc2dd94e07071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_5d99170ca50da046b92dcec1f8af0b5ed721442033651249d389d7731e57c5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d99170ca50da046b92dcec1f8af0b5ed721442033651249d389d7731e57c5eb->enter($__internal_5d99170ca50da046b92dcec1f8af0b5ed721442033651249d389d7731e57c5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5d99170ca50da046b92dcec1f8af0b5ed721442033651249d389d7731e57c5eb->leave($__internal_5d99170ca50da046b92dcec1f8af0b5ed721442033651249d389d7731e57c5eb_prof);

        
        $__internal_aa9887600650b7b78432ca332d8bab20ebe2e2c657f64c54949cc2dd94e07071->leave($__internal_aa9887600650b7b78432ca332d8bab20ebe2e2c657f64c54949cc2dd94e07071_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ebf8f9260ca8fb1f7823f248e8659a042c4d285ee8153a55f2629803a8665779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf8f9260ca8fb1f7823f248e8659a042c4d285ee8153a55f2629803a8665779->enter($__internal_ebf8f9260ca8fb1f7823f248e8659a042c4d285ee8153a55f2629803a8665779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_c1c1a5d4f3879300fd9b3e21dfff14bb85195c99bdf638a2dc2ad2c31d0f3544 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c1a5d4f3879300fd9b3e21dfff14bb85195c99bdf638a2dc2ad2c31d0f3544->enter($__internal_c1c1a5d4f3879300fd9b3e21dfff14bb85195c99bdf638a2dc2ad2c31d0f3544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_c1c1a5d4f3879300fd9b3e21dfff14bb85195c99bdf638a2dc2ad2c31d0f3544->leave($__internal_c1c1a5d4f3879300fd9b3e21dfff14bb85195c99bdf638a2dc2ad2c31d0f3544_prof);

        
        $__internal_ebf8f9260ca8fb1f7823f248e8659a042c4d285ee8153a55f2629803a8665779->leave($__internal_ebf8f9260ca8fb1f7823f248e8659a042c4d285ee8153a55f2629803a8665779_prof);

    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_06d9237eb1ac22b2ce94645d11e248b164f911289bdfcb5fcb6cef4356739a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d9237eb1ac22b2ce94645d11e248b164f911289bdfcb5fcb6cef4356739a8b->enter($__internal_06d9237eb1ac22b2ce94645d11e248b164f911289bdfcb5fcb6cef4356739a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1d806cc6c7f5df5e47b2ecffd1c72d80fc66acdeaf91e23ba426965c3700d712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d806cc6c7f5df5e47b2ecffd1c72d80fc66acdeaf91e23ba426965c3700d712->enter($__internal_1d806cc6c7f5df5e47b2ecffd1c72d80fc66acdeaf91e23ba426965c3700d712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 63
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1d806cc6c7f5df5e47b2ecffd1c72d80fc66acdeaf91e23ba426965c3700d712->leave($__internal_1d806cc6c7f5df5e47b2ecffd1c72d80fc66acdeaf91e23ba426965c3700d712_prof);

        
        $__internal_06d9237eb1ac22b2ce94645d11e248b164f911289bdfcb5fcb6cef4356739a8b->leave($__internal_06d9237eb1ac22b2ce94645d11e248b164f911289bdfcb5fcb6cef4356739a8b_prof);

    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_5de970598be89f2ad7d193e92921b8594bae3fa1c7110ef898ee5a3b680d394a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de970598be89f2ad7d193e92921b8594bae3fa1c7110ef898ee5a3b680d394a->enter($__internal_5de970598be89f2ad7d193e92921b8594bae3fa1c7110ef898ee5a3b680d394a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_7da1eb8ee5a3bc04eed293d48260669169903719ec1bbc4fe9bc56b3e34a9ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da1eb8ee5a3bc04eed293d48260669169903719ec1bbc4fe9bc56b3e34a9ed2->enter($__internal_7da1eb8ee5a3bc04eed293d48260669169903719ec1bbc4fe9bc56b3e34a9ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 68
        echo "<div class=\"input-group\">
        ";
        // line 69
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 70
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 71
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 73
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 74
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 75
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 77
        echo "    </div>";
        
        $__internal_7da1eb8ee5a3bc04eed293d48260669169903719ec1bbc4fe9bc56b3e34a9ed2->leave($__internal_7da1eb8ee5a3bc04eed293d48260669169903719ec1bbc4fe9bc56b3e34a9ed2_prof);

        
        $__internal_5de970598be89f2ad7d193e92921b8594bae3fa1c7110ef898ee5a3b680d394a->leave($__internal_5de970598be89f2ad7d193e92921b8594bae3fa1c7110ef898ee5a3b680d394a_prof);

    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_3225e3a7e0f5a8f03543eabd0cd50729cda64ed71221b03906e4821c8e057c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3225e3a7e0f5a8f03543eabd0cd50729cda64ed71221b03906e4821c8e057c44->enter($__internal_3225e3a7e0f5a8f03543eabd0cd50729cda64ed71221b03906e4821c8e057c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_614fc8633390d8a17d54dc94d2a18c9cbb344963c0d7aa4e54d9c410f73ff997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614fc8633390d8a17d54dc94d2a18c9cbb344963c0d7aa4e54d9c410f73ff997->enter($__internal_614fc8633390d8a17d54dc94d2a18c9cbb344963c0d7aa4e54d9c410f73ff997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_614fc8633390d8a17d54dc94d2a18c9cbb344963c0d7aa4e54d9c410f73ff997->leave($__internal_614fc8633390d8a17d54dc94d2a18c9cbb344963c0d7aa4e54d9c410f73ff997_prof);

        
        $__internal_3225e3a7e0f5a8f03543eabd0cd50729cda64ed71221b03906e4821c8e057c44->leave($__internal_3225e3a7e0f5a8f03543eabd0cd50729cda64ed71221b03906e4821c8e057c44_prof);

    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7b51302aadba4beffacf12895ef83eaefc46f3cd7aa80126b801ff235d88a0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b51302aadba4beffacf12895ef83eaefc46f3cd7aa80126b801ff235d88a0b2->enter($__internal_7b51302aadba4beffacf12895ef83eaefc46f3cd7aa80126b801ff235d88a0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_350a530a612d6575029422aa04b73023260e4a04a8f89d4c359c7e5fbaecf8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_350a530a612d6575029422aa04b73023260e4a04a8f89d4c359c7e5fbaecf8c9->enter($__internal_350a530a612d6575029422aa04b73023260e4a04a8f89d4c359c7e5fbaecf8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 88
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 93
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 94
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 97
            echo "</div>";
        }
        
        $__internal_350a530a612d6575029422aa04b73023260e4a04a8f89d4c359c7e5fbaecf8c9->leave($__internal_350a530a612d6575029422aa04b73023260e4a04a8f89d4c359c7e5fbaecf8c9_prof);

        
        $__internal_7b51302aadba4beffacf12895ef83eaefc46f3cd7aa80126b801ff235d88a0b2->leave($__internal_7b51302aadba4beffacf12895ef83eaefc46f3cd7aa80126b801ff235d88a0b2_prof);

    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_7766886d841d279e6b13ad48ff45807da8b65300731f597c37d71e57858e2067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7766886d841d279e6b13ad48ff45807da8b65300731f597c37d71e57858e2067->enter($__internal_7766886d841d279e6b13ad48ff45807da8b65300731f597c37d71e57858e2067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_98e6484942a8546f3ac3af88fdf104e22c9bb5acb334c2348b0f4452fd9702a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e6484942a8546f3ac3af88fdf104e22c9bb5acb334c2348b0f4452fd9702a5->enter($__internal_98e6484942a8546f3ac3af88fdf104e22c9bb5acb334c2348b0f4452fd9702a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 102
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 103
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 105
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 106
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 107
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 109
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 110
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 111
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 112
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 114
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 115
                echo "</div>";
            }
        }
        
        $__internal_98e6484942a8546f3ac3af88fdf104e22c9bb5acb334c2348b0f4452fd9702a5->leave($__internal_98e6484942a8546f3ac3af88fdf104e22c9bb5acb334c2348b0f4452fd9702a5_prof);

        
        $__internal_7766886d841d279e6b13ad48ff45807da8b65300731f597c37d71e57858e2067->leave($__internal_7766886d841d279e6b13ad48ff45807da8b65300731f597c37d71e57858e2067_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_33edae788a58577630c08761f3a093953f3d00400ba1fc542c0728ff0a46e169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33edae788a58577630c08761f3a093953f3d00400ba1fc542c0728ff0a46e169->enter($__internal_33edae788a58577630c08761f3a093953f3d00400ba1fc542c0728ff0a46e169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_cb7b71d090094cdd9bb273d3172c9b36b599cbba3df47a50961147a26c0d8368 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7b71d090094cdd9bb273d3172c9b36b599cbba3df47a50961147a26c0d8368->enter($__internal_cb7b71d090094cdd9bb273d3172c9b36b599cbba3df47a50961147a26c0d8368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 121
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 122
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 124
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 125
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 126
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 128
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 129
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 130
                echo "</div>";
            }
        }
        
        $__internal_cb7b71d090094cdd9bb273d3172c9b36b599cbba3df47a50961147a26c0d8368->leave($__internal_cb7b71d090094cdd9bb273d3172c9b36b599cbba3df47a50961147a26c0d8368_prof);

        
        $__internal_33edae788a58577630c08761f3a093953f3d00400ba1fc542c0728ff0a46e169->leave($__internal_33edae788a58577630c08761f3a093953f3d00400ba1fc542c0728ff0a46e169_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_e4385dcd5bab1b70b9ada30add0fe40f85f21edc0ed310bf8d222c2c2b3962ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4385dcd5bab1b70b9ada30add0fe40f85f21edc0ed310bf8d222c2c2b3962ce->enter($__internal_e4385dcd5bab1b70b9ada30add0fe40f85f21edc0ed310bf8d222c2c2b3962ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_27a8e9d567f7b7da625f803de1930f4a67d5fbba2dce23a0bea0b6e0dac6342a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a8e9d567f7b7da625f803de1930f4a67d5fbba2dce23a0bea0b6e0dac6342a->enter($__internal_27a8e9d567f7b7da625f803de1930f4a67d5fbba2dce23a0bea0b6e0dac6342a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 136
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 137
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 138
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 139
            echo "        ";
            ob_start();
            // line 140
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 143
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 153
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 155
            echo ($context["remove_item_javascript"] ?? $this->getContext($context, "remove_item_javascript"));
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 157
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_27a8e9d567f7b7da625f803de1930f4a67d5fbba2dce23a0bea0b6e0dac6342a->leave($__internal_27a8e9d567f7b7da625f803de1930f4a67d5fbba2dce23a0bea0b6e0dac6342a_prof);

        
        $__internal_e4385dcd5bab1b70b9ada30add0fe40f85f21edc0ed310bf8d222c2c2b3962ce->leave($__internal_e4385dcd5bab1b70b9ada30add0fe40f85f21edc0ed310bf8d222c2c2b3962ce_prof);

    }

    // line 163
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_ddbcc0b523f19f43636d9e77f3e82b69188b506227651781673d336ab651956f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddbcc0b523f19f43636d9e77f3e82b69188b506227651781673d336ab651956f->enter($__internal_ddbcc0b523f19f43636d9e77f3e82b69188b506227651781673d336ab651956f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_36701fb47999fbe09e9035e12756914ac3cd8ef15fa498c3627117a72250e1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36701fb47999fbe09e9035e12756914ac3cd8ef15fa498c3627117a72250e1fb->enter($__internal_36701fb47999fbe09e9035e12756914ac3cd8ef15fa498c3627117a72250e1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 164
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 165
            echo "<div class=\"control-group\">";
            // line 166
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 167
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 168
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "</div>";
        } else {
            // line 173
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 174
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 175
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 176
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "</div>";
        }
        
        $__internal_36701fb47999fbe09e9035e12756914ac3cd8ef15fa498c3627117a72250e1fb->leave($__internal_36701fb47999fbe09e9035e12756914ac3cd8ef15fa498c3627117a72250e1fb_prof);

        
        $__internal_ddbcc0b523f19f43636d9e77f3e82b69188b506227651781673d336ab651956f->leave($__internal_ddbcc0b523f19f43636d9e77f3e82b69188b506227651781673d336ab651956f_prof);

    }

    // line 183
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_554137c35b4b150092e0b057411cc4af0b0ac5305bb4f1c8b87fc6100ff3b388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554137c35b4b150092e0b057411cc4af0b0ac5305bb4f1c8b87fc6100ff3b388->enter($__internal_554137c35b4b150092e0b057411cc4af0b0ac5305bb4f1c8b87fc6100ff3b388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_236945713f0988baf73ae4bd0e7644b86cad3b5161a6b1ec7337fad270630c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236945713f0988baf73ae4bd0e7644b86cad3b5161a6b1ec7337fad270630c4d->enter($__internal_236945713f0988baf73ae4bd0e7644b86cad3b5161a6b1ec7337fad270630c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 184
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 185
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 186
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 188
            echo "<div class=\"checkbox\">";
            // line 189
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 190
            echo "</div>";
        }
        
        $__internal_236945713f0988baf73ae4bd0e7644b86cad3b5161a6b1ec7337fad270630c4d->leave($__internal_236945713f0988baf73ae4bd0e7644b86cad3b5161a6b1ec7337fad270630c4d_prof);

        
        $__internal_554137c35b4b150092e0b057411cc4af0b0ac5305bb4f1c8b87fc6100ff3b388->leave($__internal_554137c35b4b150092e0b057411cc4af0b0ac5305bb4f1c8b87fc6100ff3b388_prof);

    }

    // line 194
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_68a55862456625c2546ddc8516695d170430ba2e768fa2a2ec48bfa2826825a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a55862456625c2546ddc8516695d170430ba2e768fa2a2ec48bfa2826825a5->enter($__internal_68a55862456625c2546ddc8516695d170430ba2e768fa2a2ec48bfa2826825a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_5058c1c13bcfadc0eb401edce35180c3b719946f6bd5c7b52cd3291c9f453be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5058c1c13bcfadc0eb401edce35180c3b719946f6bd5c7b52cd3291c9f453be2->enter($__internal_5058c1c13bcfadc0eb401edce35180c3b719946f6bd5c7b52cd3291c9f453be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 195
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 196
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 197
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 199
            echo "<div class=\"radio\">";
            // line 200
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 201
            echo "</div>";
        }
        
        $__internal_5058c1c13bcfadc0eb401edce35180c3b719946f6bd5c7b52cd3291c9f453be2->leave($__internal_5058c1c13bcfadc0eb401edce35180c3b719946f6bd5c7b52cd3291c9f453be2_prof);

        
        $__internal_68a55862456625c2546ddc8516695d170430ba2e768fa2a2ec48bfa2826825a5->leave($__internal_68a55862456625c2546ddc8516695d170430ba2e768fa2a2ec48bfa2826825a5_prof);

    }

    // line 207
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ee3fb5b674d39e2f2e237d8ecf7870bda36bbccacd4f5995731df52a3a39631b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee3fb5b674d39e2f2e237d8ecf7870bda36bbccacd4f5995731df52a3a39631b->enter($__internal_ee3fb5b674d39e2f2e237d8ecf7870bda36bbccacd4f5995731df52a3a39631b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c3308ebcaeeece11dd77b9035450d97e05a6d85f5151e864e49f2937057ce793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3308ebcaeeece11dd77b9035450d97e05a6d85f5151e864e49f2937057ce793->enter($__internal_c3308ebcaeeece11dd77b9035450d97e05a6d85f5151e864e49f2937057ce793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 208
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 209
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c3308ebcaeeece11dd77b9035450d97e05a6d85f5151e864e49f2937057ce793->leave($__internal_c3308ebcaeeece11dd77b9035450d97e05a6d85f5151e864e49f2937057ce793_prof);

        
        $__internal_ee3fb5b674d39e2f2e237d8ecf7870bda36bbccacd4f5995731df52a3a39631b->leave($__internal_ee3fb5b674d39e2f2e237d8ecf7870bda36bbccacd4f5995731df52a3a39631b_prof);

    }

    // line 212
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_d04f722ad05b0d13b20f1ca6388d135c88a82307895470d73a9b67f738b4f390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04f722ad05b0d13b20f1ca6388d135c88a82307895470d73a9b67f738b4f390->enter($__internal_d04f722ad05b0d13b20f1ca6388d135c88a82307895470d73a9b67f738b4f390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_9d5f6faba89ec8ec7b00c2037f4e5f03265a4849739145b41bb23dc9b501ec0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5f6faba89ec8ec7b00c2037f4e5f03265a4849739145b41bb23dc9b501ec0a->enter($__internal_9d5f6faba89ec8ec7b00c2037f4e5f03265a4849739145b41bb23dc9b501ec0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 214
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 215
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_9d5f6faba89ec8ec7b00c2037f4e5f03265a4849739145b41bb23dc9b501ec0a->leave($__internal_9d5f6faba89ec8ec7b00c2037f4e5f03265a4849739145b41bb23dc9b501ec0a_prof);

        
        $__internal_d04f722ad05b0d13b20f1ca6388d135c88a82307895470d73a9b67f738b4f390->leave($__internal_d04f722ad05b0d13b20f1ca6388d135c88a82307895470d73a9b67f738b4f390_prof);

    }

    // line 218
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_e2d367a384739950fce2cf20a6f83a997040b85385c5a2e38202c49175f99148 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2d367a384739950fce2cf20a6f83a997040b85385c5a2e38202c49175f99148->enter($__internal_e2d367a384739950fce2cf20a6f83a997040b85385c5a2e38202c49175f99148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_3c853d054335405ead13dfe0616afdd344ed70f670b5f21e50fe14cd42ef25c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c853d054335405ead13dfe0616afdd344ed70f670b5f21e50fe14cd42ef25c4->enter($__internal_3c853d054335405ead13dfe0616afdd344ed70f670b5f21e50fe14cd42ef25c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 219
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_3c853d054335405ead13dfe0616afdd344ed70f670b5f21e50fe14cd42ef25c4->leave($__internal_3c853d054335405ead13dfe0616afdd344ed70f670b5f21e50fe14cd42ef25c4_prof);

        
        $__internal_e2d367a384739950fce2cf20a6f83a997040b85385c5a2e38202c49175f99148->leave($__internal_e2d367a384739950fce2cf20a6f83a997040b85385c5a2e38202c49175f99148_prof);

    }

    // line 222
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_d6dd39faeb0a66f9863fd0693083714057fa067a8c4d06c79c03046213c349f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6dd39faeb0a66f9863fd0693083714057fa067a8c4d06c79c03046213c349f9->enter($__internal_d6dd39faeb0a66f9863fd0693083714057fa067a8c4d06c79c03046213c349f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_54ce0c32658ebb6ea763badc38a32461d5fdb6628209250eba50122abb5c3c03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ce0c32658ebb6ea763badc38a32461d5fdb6628209250eba50122abb5c3c03->enter($__internal_54ce0c32658ebb6ea763badc38a32461d5fdb6628209250eba50122abb5c3c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 223
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_54ce0c32658ebb6ea763badc38a32461d5fdb6628209250eba50122abb5c3c03->leave($__internal_54ce0c32658ebb6ea763badc38a32461d5fdb6628209250eba50122abb5c3c03_prof);

        
        $__internal_d6dd39faeb0a66f9863fd0693083714057fa067a8c4d06c79c03046213c349f9->leave($__internal_d6dd39faeb0a66f9863fd0693083714057fa067a8c4d06c79c03046213c349f9_prof);

    }

    // line 226
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_fff37ba3a472f0a11260f20fe0133e01b4a3aa24c58dbca6745d8058e14c9233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fff37ba3a472f0a11260f20fe0133e01b4a3aa24c58dbca6745d8058e14c9233->enter($__internal_fff37ba3a472f0a11260f20fe0133e01b4a3aa24c58dbca6745d8058e14c9233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_662218c98c8cae17caaa5c2a0e47979d33f604456ea9e550163d9b8af4f1217f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662218c98c8cae17caaa5c2a0e47979d33f604456ea9e550163d9b8af4f1217f->enter($__internal_662218c98c8cae17caaa5c2a0e47979d33f604456ea9e550163d9b8af4f1217f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 227
        echo "    ";
        // line 228
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 229
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 230
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 231
                echo "        ";
            }
            // line 232
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 233
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 234
                echo "        ";
            }
            // line 235
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 236
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                // line 237
                echo "        ";
            }
            // line 238
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 239
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 240
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()))) : ("")), "html", null, true);
            // line 241
            echo "</label>
    ";
        }
        
        $__internal_662218c98c8cae17caaa5c2a0e47979d33f604456ea9e550163d9b8af4f1217f->leave($__internal_662218c98c8cae17caaa5c2a0e47979d33f604456ea9e550163d9b8af4f1217f_prof);

        
        $__internal_fff37ba3a472f0a11260f20fe0133e01b4a3aa24c58dbca6745d8058e14c9233->leave($__internal_fff37ba3a472f0a11260f20fe0133e01b4a3aa24c58dbca6745d8058e14c9233_prof);

    }

    // line 247
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_4cf2e0ad7c2fffaed154d05e8ba6ce28c821723498370ad732d7f93e6cab33c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cf2e0ad7c2fffaed154d05e8ba6ce28c821723498370ad732d7f93e6cab33c4->enter($__internal_4cf2e0ad7c2fffaed154d05e8ba6ce28c821723498370ad732d7f93e6cab33c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0413f21dbfea845717a0d0106e530a6bcb1f486706772293ba1573846c5e361f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0413f21dbfea845717a0d0106e530a6bcb1f486706772293ba1573846c5e361f->enter($__internal_0413f21dbfea845717a0d0106e530a6bcb1f486706772293ba1573846c5e361f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 248
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 249
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 250
        $context["_field_label"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 251
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("translation_domain" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array())) + (twig_test_empty($_label_ = ($context["_field_label"] ?? $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        // line 252
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 254
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 255
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 257
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 258
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 266
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 268
        echo "    </div>";
        
        $__internal_0413f21dbfea845717a0d0106e530a6bcb1f486706772293ba1573846c5e361f->leave($__internal_0413f21dbfea845717a0d0106e530a6bcb1f486706772293ba1573846c5e361f_prof);

        
        $__internal_4cf2e0ad7c2fffaed154d05e8ba6ce28c821723498370ad732d7f93e6cab33c4->leave($__internal_4cf2e0ad7c2fffaed154d05e8ba6ce28c821723498370ad732d7f93e6cab33c4_prof);

    }

    // line 271
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_6e2ff049c9b03b4e971dc85ad3ef30db1d523ce73dfbda1405c0ca9480402a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2ff049c9b03b4e971dc85ad3ef30db1d523ce73dfbda1405c0ca9480402a0b->enter($__internal_6e2ff049c9b03b4e971dc85ad3ef30db1d523ce73dfbda1405c0ca9480402a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_04dcab172162432866f4ea55357233106ec78e15b117cedba05b7cc7bce322d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04dcab172162432866f4ea55357233106ec78e15b117cedba05b7cc7bce322d8->enter($__internal_04dcab172162432866f4ea55357233106ec78e15b117cedba05b7cc7bce322d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        // line 272
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 274
        if (((array_key_exists("allow_add", $context)) ? (_twig_default_filter(($context["allow_add"] ?? $this->getContext($context, "allow_add")), false)) : (false))) {
            // line 275
            echo "        ";
            ob_start();
            // line 276
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 279
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 287
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 288
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 297
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 299
            echo ($context["js_add_item"] ?? $this->getContext($context, "js_add_item"));
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 301
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        
        $__internal_04dcab172162432866f4ea55357233106ec78e15b117cedba05b7cc7bce322d8->leave($__internal_04dcab172162432866f4ea55357233106ec78e15b117cedba05b7cc7bce322d8_prof);

        
        $__internal_6e2ff049c9b03b4e971dc85ad3ef30db1d523ce73dfbda1405c0ca9480402a0b->leave($__internal_6e2ff049c9b03b4e971dc85ad3ef30db1d523ce73dfbda1405c0ca9480402a0b_prof);

    }

    // line 307
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_c206fee019c881eed37ed2eec1162b3c1593645bbc6c18c392537987ae189122 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c206fee019c881eed37ed2eec1162b3c1593645bbc6c18c392537987ae189122->enter($__internal_c206fee019c881eed37ed2eec1162b3c1593645bbc6c18c392537987ae189122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6c5366772245a64a365ef5dd9226ec8056d72fc407c5fea16520bc017aa82654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5366772245a64a365ef5dd9226ec8056d72fc407c5fea16520bc017aa82654->enter($__internal_6c5366772245a64a365ef5dd9226ec8056d72fc407c5fea16520bc017aa82654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 308
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 309
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 310
        echo "</div>";
        
        $__internal_6c5366772245a64a365ef5dd9226ec8056d72fc407c5fea16520bc017aa82654->leave($__internal_6c5366772245a64a365ef5dd9226ec8056d72fc407c5fea16520bc017aa82654_prof);

        
        $__internal_c206fee019c881eed37ed2eec1162b3c1593645bbc6c18c392537987ae189122->leave($__internal_c206fee019c881eed37ed2eec1162b3c1593645bbc6c18c392537987ae189122_prof);

    }

    // line 313
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_1f4cef84e2772b4a9456d2dbc1cde382b87b54bf99a64537bf6b5cd9235243df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4cef84e2772b4a9456d2dbc1cde382b87b54bf99a64537bf6b5cd9235243df->enter($__internal_1f4cef84e2772b4a9456d2dbc1cde382b87b54bf99a64537bf6b5cd9235243df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_398a3deb104dca70ec21a7abfcb4b9eacdb51f6df9babbb0a4693175141ba3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398a3deb104dca70ec21a7abfcb4b9eacdb51f6df9babbb0a4693175141ba3ad->enter($__internal_398a3deb104dca70ec21a7abfcb4b9eacdb51f6df9babbb0a4693175141ba3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 314
        $context["force_error"] = true;
        // line 315
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_398a3deb104dca70ec21a7abfcb4b9eacdb51f6df9babbb0a4693175141ba3ad->leave($__internal_398a3deb104dca70ec21a7abfcb4b9eacdb51f6df9babbb0a4693175141ba3ad_prof);

        
        $__internal_1f4cef84e2772b4a9456d2dbc1cde382b87b54bf99a64537bf6b5cd9235243df->leave($__internal_1f4cef84e2772b4a9456d2dbc1cde382b87b54bf99a64537bf6b5cd9235243df_prof);

    }

    // line 318
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_9fda070da3011d0a8bc0adc0a28ffe833ea9f42aa3a32b3181de67a2dfc89ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fda070da3011d0a8bc0adc0a28ffe833ea9f42aa3a32b3181de67a2dfc89ffd->enter($__internal_9fda070da3011d0a8bc0adc0a28ffe833ea9f42aa3a32b3181de67a2dfc89ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_3bf04c20c98612b152480bccd075a2dd43732d55a18de6c55ef79fd6b1a4a308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf04c20c98612b152480bccd075a2dd43732d55a18de6c55ef79fd6b1a4a308->enter($__internal_3bf04c20c98612b152480bccd075a2dd43732d55a18de6c55ef79fd6b1a4a308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 319
        $context["force_error"] = true;
        // line 320
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3bf04c20c98612b152480bccd075a2dd43732d55a18de6c55ef79fd6b1a4a308->leave($__internal_3bf04c20c98612b152480bccd075a2dd43732d55a18de6c55ef79fd6b1a4a308_prof);

        
        $__internal_9fda070da3011d0a8bc0adc0a28ffe833ea9f42aa3a32b3181de67a2dfc89ffd->leave($__internal_9fda070da3011d0a8bc0adc0a28ffe833ea9f42aa3a32b3181de67a2dfc89ffd_prof);

    }

    // line 323
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_cabebdcd850c1e8cec0d605cf42ff63f2676616b390e5c512a283e814b9ae19e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cabebdcd850c1e8cec0d605cf42ff63f2676616b390e5c512a283e814b9ae19e->enter($__internal_cabebdcd850c1e8cec0d605cf42ff63f2676616b390e5c512a283e814b9ae19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_e28cd6d381a43275b8ee9a154c4da1368968c9bc6768d8126ddcf0cfed4402c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28cd6d381a43275b8ee9a154c4da1368968c9bc6768d8126ddcf0cfed4402c5->enter($__internal_e28cd6d381a43275b8ee9a154c4da1368968c9bc6768d8126ddcf0cfed4402c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 324
        $context["force_error"] = true;
        // line 325
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_e28cd6d381a43275b8ee9a154c4da1368968c9bc6768d8126ddcf0cfed4402c5->leave($__internal_e28cd6d381a43275b8ee9a154c4da1368968c9bc6768d8126ddcf0cfed4402c5_prof);

        
        $__internal_cabebdcd850c1e8cec0d605cf42ff63f2676616b390e5c512a283e814b9ae19e->leave($__internal_cabebdcd850c1e8cec0d605cf42ff63f2676616b390e5c512a283e814b9ae19e_prof);

    }

    // line 328
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_195e5a125958f43e1c990fe29d9c7d9ac1d4b86feb6344910a19d24293ec747b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195e5a125958f43e1c990fe29d9c7d9ac1d4b86feb6344910a19d24293ec747b->enter($__internal_195e5a125958f43e1c990fe29d9c7d9ac1d4b86feb6344910a19d24293ec747b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_7a46f9ae01981ed6817e7d59acb8ee3fa84b4d2d31682cb928453f308fa8df81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a46f9ae01981ed6817e7d59acb8ee3fa84b4d2d31682cb928453f308fa8df81->enter($__internal_7a46f9ae01981ed6817e7d59acb8ee3fa84b4d2d31682cb928453f308fa8df81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 329
        $context["force_error"] = true;
        // line 330
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7a46f9ae01981ed6817e7d59acb8ee3fa84b4d2d31682cb928453f308fa8df81->leave($__internal_7a46f9ae01981ed6817e7d59acb8ee3fa84b4d2d31682cb928453f308fa8df81_prof);

        
        $__internal_195e5a125958f43e1c990fe29d9c7d9ac1d4b86feb6344910a19d24293ec747b->leave($__internal_195e5a125958f43e1c990fe29d9c7d9ac1d4b86feb6344910a19d24293ec747b_prof);

    }

    // line 333
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_afecc2a604da86c4ea15f03d33ecde1f830d5d565063296ef3ad48176d7d04aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afecc2a604da86c4ea15f03d33ecde1f830d5d565063296ef3ad48176d7d04aa->enter($__internal_afecc2a604da86c4ea15f03d33ecde1f830d5d565063296ef3ad48176d7d04aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_60e15c7b9ed16ce9f11f929f342b031d355a012853dd6919642621fdee7c74e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e15c7b9ed16ce9f11f929f342b031d355a012853dd6919642621fdee7c74e8->enter($__internal_60e15c7b9ed16ce9f11f929f342b031d355a012853dd6919642621fdee7c74e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 334
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 335
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 336
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 337
        echo "</div>";
        
        $__internal_60e15c7b9ed16ce9f11f929f342b031d355a012853dd6919642621fdee7c74e8->leave($__internal_60e15c7b9ed16ce9f11f929f342b031d355a012853dd6919642621fdee7c74e8_prof);

        
        $__internal_afecc2a604da86c4ea15f03d33ecde1f830d5d565063296ef3ad48176d7d04aa->leave($__internal_afecc2a604da86c4ea15f03d33ecde1f830d5d565063296ef3ad48176d7d04aa_prof);

    }

    // line 340
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_431f8f84d80ba3d7a2b0da45249c48f19052c103a24e5953694ddf7ff8d37adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_431f8f84d80ba3d7a2b0da45249c48f19052c103a24e5953694ddf7ff8d37adc->enter($__internal_431f8f84d80ba3d7a2b0da45249c48f19052c103a24e5953694ddf7ff8d37adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_ad5b6a02c1cab9c8bed8cacc29ddb367aa7f07d24ef342975c6cd07f21709ecc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad5b6a02c1cab9c8bed8cacc29ddb367aa7f07d24ef342975c6cd07f21709ecc->enter($__internal_ad5b6a02c1cab9c8bed8cacc29ddb367aa7f07d24ef342975c6cd07f21709ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 341
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">";
        // line 342
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 344
        echo "</div>";
        
        $__internal_ad5b6a02c1cab9c8bed8cacc29ddb367aa7f07d24ef342975c6cd07f21709ecc->leave($__internal_ad5b6a02c1cab9c8bed8cacc29ddb367aa7f07d24ef342975c6cd07f21709ecc_prof);

        
        $__internal_431f8f84d80ba3d7a2b0da45249c48f19052c103a24e5953694ddf7ff8d37adc->leave($__internal_431f8f84d80ba3d7a2b0da45249c48f19052c103a24e5953694ddf7ff8d37adc_prof);

    }

    // line 348
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_0c144b04dcfa4de9965e2a3947c6b0d79850c965c01f66df2963b996aef084a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c144b04dcfa4de9965e2a3947c6b0d79850c965c01f66df2963b996aef084a1->enter($__internal_0c144b04dcfa4de9965e2a3947c6b0d79850c965c01f66df2963b996aef084a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_89e53e08f8368075cf0c913ee5522cd3ae01a5a95e79abc2da609b01d9a8c48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e53e08f8368075cf0c913ee5522cd3ae01a5a95e79abc2da609b01d9a8c48c->enter($__internal_89e53e08f8368075cf0c913ee5522cd3ae01a5a95e79abc2da609b01d9a8c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 349
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors")));
        // line 350
        echo "    ";
        if ((($context["error_count"] ?? $this->getContext($context, "error_count")) >= 1)) {
            // line 351
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 352
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", ($context["error_count"] ?? $this->getContext($context, "error_count")), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 353
            if ((($context["error_count"] ?? $this->getContext($context, "error_count")) == 1)) {
                // line 354
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 356
                echo "                <ul>
                    ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 358
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "                </ul>
            ";
            }
            // line 362
            echo "        </div>
    ";
        }
        
        $__internal_89e53e08f8368075cf0c913ee5522cd3ae01a5a95e79abc2da609b01d9a8c48c->leave($__internal_89e53e08f8368075cf0c913ee5522cd3ae01a5a95e79abc2da609b01d9a8c48c_prof);

        
        $__internal_0c144b04dcfa4de9965e2a3947c6b0d79850c965c01f66df2963b996aef084a1->leave($__internal_0c144b04dcfa4de9965e2a3947c6b0d79850c965c01f66df2963b996aef084a1_prof);

    }

    // line 366
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_bf5f0b68e0daf9fdf1dd9cbec135a6521f306e044499f72c9ffc56996cc285e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5f0b68e0daf9fdf1dd9cbec135a6521f306e044499f72c9ffc56996cc285e0->enter($__internal_bf5f0b68e0daf9fdf1dd9cbec135a6521f306e044499f72c9ffc56996cc285e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_48dcb4b0faa744f4d45191b80ee2349bb1817af53b36e520939633fdafb1516e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dcb4b0faa744f4d45191b80ee2349bb1817af53b36e520939633fdafb1516e->enter($__internal_48dcb4b0faa744f4d45191b80ee2349bb1817af53b36e520939633fdafb1516e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 367
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 368
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 370
        echo "    ";
        if ((twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))) || $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 371
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 372
            echo "    ";
        }
        // line 373
        echo "
    ";
        // line 374
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
        
        $__internal_48dcb4b0faa744f4d45191b80ee2349bb1817af53b36e520939633fdafb1516e->leave($__internal_48dcb4b0faa744f4d45191b80ee2349bb1817af53b36e520939633fdafb1516e_prof);

        
        $__internal_bf5f0b68e0daf9fdf1dd9cbec135a6521f306e044499f72c9ffc56996cc285e0->leave($__internal_bf5f0b68e0daf9fdf1dd9cbec135a6521f306e044499f72c9ffc56996cc285e0_prof);

    }

    // line 377
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_457ca113016c31258b79bf2899b0646634706ff86cebbe099bc1cc78b37d87d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457ca113016c31258b79bf2899b0646634706ff86cebbe099bc1cc78b37d87d7->enter($__internal_457ca113016c31258b79bf2899b0646634706ff86cebbe099bc1cc78b37d87d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_307aec11db54b57cf95877a448351ede65a080a3c5052a113cf6087ab1b0823b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307aec11db54b57cf95877a448351ede65a080a3c5052a113cf6087ab1b0823b->enter($__internal_307aec11db54b57cf95877a448351ede65a080a3c5052a113cf6087ab1b0823b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 378
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 379
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_307aec11db54b57cf95877a448351ede65a080a3c5052a113cf6087ab1b0823b->leave($__internal_307aec11db54b57cf95877a448351ede65a080a3c5052a113cf6087ab1b0823b_prof);

        
        $__internal_457ca113016c31258b79bf2899b0646634706ff86cebbe099bc1cc78b37d87d7->leave($__internal_457ca113016c31258b79bf2899b0646634706ff86cebbe099bc1cc78b37d87d7_prof);

    }

    // line 383
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_8e7a2b0aad81ba6aab15e52cfaf026f9c9e6c663e4f882f39540524884feaf77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7a2b0aad81ba6aab15e52cfaf026f9c9e6c663e4f882f39540524884feaf77->enter($__internal_8e7a2b0aad81ba6aab15e52cfaf026f9c9e6c663e4f882f39540524884feaf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_52be1d9b3d4de6ce91549db1274c016e75d2080df02bade4b0864e1a6234db64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52be1d9b3d4de6ce91549db1274c016e75d2080df02bade4b0864e1a6234db64->enter($__internal_52be1d9b3d4de6ce91549db1274c016e75d2080df02bade4b0864e1a6234db64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 384
        echo "    ";
        $context["force_error"] = true;
        // line 385
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_52be1d9b3d4de6ce91549db1274c016e75d2080df02bade4b0864e1a6234db64->leave($__internal_52be1d9b3d4de6ce91549db1274c016e75d2080df02bade4b0864e1a6234db64_prof);

        
        $__internal_8e7a2b0aad81ba6aab15e52cfaf026f9c9e6c663e4f882f39540524884feaf77->leave($__internal_8e7a2b0aad81ba6aab15e52cfaf026f9c9e6c663e4f882f39540524884feaf77_prof);

    }

    // line 388
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_708523798c63cdb43a0e9b2b1a71efaeff78f06025c2f824cb343327392ab3f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708523798c63cdb43a0e9b2b1a71efaeff78f06025c2f824cb343327392ab3f3->enter($__internal_708523798c63cdb43a0e9b2b1a71efaeff78f06025c2f824cb343327392ab3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_14a614ee2ca760914f251d638ce9654a5611cb9a4f6fbdd5ebe91a9615f13c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a614ee2ca760914f251d638ce9654a5611cb9a4f6fbdd5ebe91a9615f13c05->enter($__internal_14a614ee2ca760914f251d638ce9654a5611cb9a4f6fbdd5ebe91a9615f13c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 389
        ob_start();
        // line 390
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 391
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 392
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "/"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle")));
            // line 393
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["download_title"] ?? $this->getContext($context, "download_title")), "html", null, true);
            echo "</a>
        ";
        }
        // line 395
        echo "
        <div class=\"row\">
            ";
        // line 397
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 398
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 399
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 402
        echo "            <div class=\"";
        echo (($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 403
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_14a614ee2ca760914f251d638ce9654a5611cb9a4f6fbdd5ebe91a9615f13c05->leave($__internal_14a614ee2ca760914f251d638ce9654a5611cb9a4f6fbdd5ebe91a9615f13c05_prof);

        
        $__internal_708523798c63cdb43a0e9b2b1a71efaeff78f06025c2f824cb343327392ab3f3->leave($__internal_708523798c63cdb43a0e9b2b1a71efaeff78f06025c2f824cb343327392ab3f3_prof);

    }

    // line 410
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_b056edcaeb357af0f8d19948fa83a82c239f68b11f2fdfc0a16652e757a8fced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b056edcaeb357af0f8d19948fa83a82c239f68b11f2fdfc0a16652e757a8fced->enter($__internal_b056edcaeb357af0f8d19948fa83a82c239f68b11f2fdfc0a16652e757a8fced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_a89d32435a68018521d465cb4c5b6fd4203089154224869bf9281fa9525b0389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89d32435a68018521d465cb4c5b6fd4203089154224869bf9281fa9525b0389->enter($__internal_a89d32435a68018521d465cb4c5b6fd4203089154224869bf9281fa9525b0389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 411
        echo "    ";
        $context["force_error"] = true;
        // line 412
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_a89d32435a68018521d465cb4c5b6fd4203089154224869bf9281fa9525b0389->leave($__internal_a89d32435a68018521d465cb4c5b6fd4203089154224869bf9281fa9525b0389_prof);

        
        $__internal_b056edcaeb357af0f8d19948fa83a82c239f68b11f2fdfc0a16652e757a8fced->leave($__internal_b056edcaeb357af0f8d19948fa83a82c239f68b11f2fdfc0a16652e757a8fced_prof);

    }

    // line 415
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_3aad706304da670cb12af385daf21f524a333c182a0c542cfdb6c5a63d97d015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aad706304da670cb12af385daf21f524a333c182a0c542cfdb6c5a63d97d015->enter($__internal_3aad706304da670cb12af385daf21f524a333c182a0c542cfdb6c5a63d97d015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_3dfeb6b9360889e4fc3755073a8449a8587dd62c78e9f1ebee8e948d0454a596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dfeb6b9360889e4fc3755073a8449a8587dd62c78e9f1ebee8e948d0454a596->enter($__internal_3dfeb6b9360889e4fc3755073a8449a8587dd62c78e9f1ebee8e948d0454a596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 416
        ob_start();
        // line 417
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 418
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 419
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 420
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 422
        echo "
        ";
        // line 423
        if ( !twig_test_empty(((array_key_exists("download_uri", $context)) ? (_twig_default_filter(($context["download_uri"] ?? $this->getContext($context, "download_uri")), "")) : ("")))) {
            // line 424
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? $this->getContext($context, "id")));
            // line 425
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 426
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 427
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 430
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? $this->getContext($context, "_lightbox_id")), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 431
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["download_uri"] ?? $this->getContext($context, "download_uri"))), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 434
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3dfeb6b9360889e4fc3755073a8449a8587dd62c78e9f1ebee8e948d0454a596->leave($__internal_3dfeb6b9360889e4fc3755073a8449a8587dd62c78e9f1ebee8e948d0454a596_prof);

        
        $__internal_3aad706304da670cb12af385daf21f524a333c182a0c542cfdb6c5a63d97d015->leave($__internal_3aad706304da670cb12af385daf21f524a333c182a0c542cfdb6c5a63d97d015_prof);

    }

    // line 439
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_02ba73544a819e68427f46d149e36abb9fd2f77e4ecd2cf73281f8dd8ee0ebc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ba73544a819e68427f46d149e36abb9fd2f77e4ecd2cf73281f8dd8ee0ebc9->enter($__internal_02ba73544a819e68427f46d149e36abb9fd2f77e4ecd2cf73281f8dd8ee0ebc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_609a4621003d69addf94cb3671ac5f1c07a81fa2795217a104d4e0b2543adc92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_609a4621003d69addf94cb3671ac5f1c07a81fa2795217a104d4e0b2543adc92->enter($__internal_609a4621003d69addf94cb3671ac5f1c07a81fa2795217a104d4e0b2543adc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        // line 440
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 441
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array())), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "label", array())));
        // line 442
        echo "
    ";
        // line 443
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "errors", array())) > 0)) {
            // line 444
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    ";
        }
        // line 446
        echo "
    <input type=\"hidden\" name=\"referer\" value=\"";
        // line 447
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>

    <div class=\"row\">
        ";
        // line 450
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? $this->getContext($context, "easyadmin_form_groups")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            // line 451
            echo "            <div class=\"field-group col-xs-12 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <div class=\"box box-default\">
                    ";
            // line 453
            if (((($this->getAttribute($context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "label", array()), false)) : (false)) || (($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false)))) {
                // line 454
                echo "                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                ";
                // line 456
                if ((($this->getAttribute($context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "icon", array()), false)) : (false))) {
                    // line 457
                    echo "                                    <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                ";
                }
                // line 459
                echo "                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "label", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
                echo "
                            </h3>
                        </div>
                    ";
            }
            // line 463
            echo "
                    <div class=\"box-body\">
                        ";
            // line 465
            if ((($this->getAttribute($context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group_config"], "help", array()), false)) : (false))) {
                // line 466
                echo "                            <p class=\"help-block\">";
                echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["group_config"], "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
                echo "</p>
                        ";
            }
            // line 468
            echo "
                        <div class=\"row\">
                            ";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array())) && ($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                    // line 471
                    echo "                                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                                    ";
                    // line 472
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                                </div>
                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 480
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if (!twig_in_filter("hidden", $this->getAttribute($this->getAttribute($context["field"], "vars", array()), "block_prefixes", array()))) {
                    // line 481
                    echo "                <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 482
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
                </div>
            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 485
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 486
        echo "    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    ";
        // line 492
        $this->displayBlock('item_actions', $context, $blocks);
        // line 516
        echo "                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_609a4621003d69addf94cb3671ac5f1c07a81fa2795217a104d4e0b2543adc92->leave($__internal_609a4621003d69addf94cb3671ac5f1c07a81fa2795217a104d4e0b2543adc92_prof);

        
        $__internal_02ba73544a819e68427f46d149e36abb9fd2f77e4ecd2cf73281f8dd8ee0ebc9->leave($__internal_02ba73544a819e68427f46d149e36abb9fd2f77e4ecd2cf73281f8dd8ee0ebc9_prof);

    }

    // line 492
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_c01c8727476d8de6b70d49863087beb4d3967630d794099610398cb37465d48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c01c8727476d8de6b70d49863087beb4d3967630d794099610398cb37465d48d->enter($__internal_c01c8727476d8de6b70d49863087beb4d3967630d794099610398cb37465d48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_716352a423436e1ca6553377e3cd63cfc8cdb4e4b5a56a5ae9848fd912688004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716352a423436e1ca6553377e3cd63cfc8cdb4e4b5a56a5ae9848fd912688004->enter($__internal_716352a423436e1ca6553377e3cd63cfc8cdb4e4b5a56a5ae9848fd912688004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 493
        echo "                        ";
        // line 494
        echo "                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> ";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.save", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true);
        echo "
                        </button>

                        ";
        // line 498
        $context["_entity_actions"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("new", $this->getAttribute($this->getAttribute(        // line 499
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))) : ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("edit", $this->getAttribute($this->getAttribute(        // line 500
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()))));
        // line 501
        echo "
                        ";
        // line 502
        $context["_entity_id"] = ((($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "view", array()) == "new")) ? (null) : ($this->getAttribute($this->getAttribute(        // line 504
($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "item", array()), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "primary_key_field_name", array()))));
        // line 505
        echo "
                        ";
        // line 506
        $context["_request_parameters"] = array("entity" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 507
        echo "
                        ";
        // line 508
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 509
($context["_entity_actions"] ?? $this->getContext($context, "_entity_actions")), "request_parameters" =>         // line 510
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" =>         // line 511
($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")), "trans_parameters" =>         // line 512
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 513
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 514
        echo "
                    ";
        
        $__internal_716352a423436e1ca6553377e3cd63cfc8cdb4e4b5a56a5ae9848fd912688004->leave($__internal_716352a423436e1ca6553377e3cd63cfc8cdb4e4b5a56a5ae9848fd912688004_prof);

        
        $__internal_c01c8727476d8de6b70d49863087beb4d3967630d794099610398cb37465d48d->leave($__internal_c01c8727476d8de6b70d49863087beb4d3967630d794099610398cb37465d48d_prof);

    }

    // line 523
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_e699ced823fdb858bd57179741363df95cc8dbc2ed488ecb5335b6b11fe68175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e699ced823fdb858bd57179741363df95cc8dbc2ed488ecb5335b6b11fe68175->enter($__internal_e699ced823fdb858bd57179741363df95cc8dbc2ed488ecb5335b6b11fe68175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_687ef42c816301c5778211f5a70355b70d3439f0416d7e458972eec7026137a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687ef42c816301c5778211f5a70355b70d3439f0416d7e458972eec7026137a0->enter($__internal_687ef42c816301c5778211f5a70355b70d3439f0416d7e458972eec7026137a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 524
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 525
($context["attr"] ?? $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-max-results" => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results"), "data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 529
($context["autocomplete_entity_name"] ?? $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 532
        echo "
";
        
        $__internal_687ef42c816301c5778211f5a70355b70d3439f0416d7e458972eec7026137a0->leave($__internal_687ef42c816301c5778211f5a70355b70d3439f0416d7e458972eec7026137a0_prof);

        
        $__internal_e699ced823fdb858bd57179741363df95cc8dbc2ed488ecb5335b6b11fe68175->leave($__internal_e699ced823fdb858bd57179741363df95cc8dbc2ed488ecb5335b6b11fe68175_prof);

    }

    // line 535
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_38cbd0e674b1970640dbfe8154ed17fdba6567d62c8f7177e27f6126173e730a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38cbd0e674b1970640dbfe8154ed17fdba6567d62c8f7177e27f6126173e730a->enter($__internal_38cbd0e674b1970640dbfe8154ed17fdba6567d62c8f7177e27f6126173e730a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_88027f3ffddf18315bb2ea3eea0a5faa80777d061a8f86a6a6deec89c21cd6c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88027f3ffddf18315bb2ea3eea0a5faa80777d061a8f86a6a6deec89c21cd6c3->enter($__internal_88027f3ffddf18315bb2ea3eea0a5faa80777d061a8f86a6a6deec89c21cd6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 536
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 537
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_88027f3ffddf18315bb2ea3eea0a5faa80777d061a8f86a6a6deec89c21cd6c3->leave($__internal_88027f3ffddf18315bb2ea3eea0a5faa80777d061a8f86a6a6deec89c21cd6c3_prof);

        
        $__internal_38cbd0e674b1970640dbfe8154ed17fdba6567d62c8f7177e27f6126173e730a->leave($__internal_38cbd0e674b1970640dbfe8154ed17fdba6567d62c8f7177e27f6126173e730a_prof);

    }

    // line 541
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_ef499af9ca27f42111e8291ec7cce00385f83c87b5059218a80f0c9be1770756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef499af9ca27f42111e8291ec7cce00385f83c87b5059218a80f0c9be1770756->enter($__internal_ef499af9ca27f42111e8291ec7cce00385f83c87b5059218a80f0c9be1770756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_d79ba7fb9b5ee75a610dd545a2b930406877805cbed90ec4f6a9849d66d3da29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79ba7fb9b5ee75a610dd545a2b930406877805cbed90ec4f6a9849d66d3da29->enter($__internal_d79ba7fb9b5ee75a610dd545a2b930406877805cbed90ec4f6a9849d66d3da29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 542
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_d79ba7fb9b5ee75a610dd545a2b930406877805cbed90ec4f6a9849d66d3da29->leave($__internal_d79ba7fb9b5ee75a610dd545a2b930406877805cbed90ec4f6a9849d66d3da29_prof);

        
        $__internal_ef499af9ca27f42111e8291ec7cce00385f83c87b5059218a80f0c9be1770756->leave($__internal_ef499af9ca27f42111e8291ec7cce00385f83c87b5059218a80f0c9be1770756_prof);

    }

    // line 548
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_6d03f6248b1539e60d33431787eb7f1f01781914ea47d76db06b5ccb07e8353f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d03f6248b1539e60d33431787eb7f1f01781914ea47d76db06b5ccb07e8353f->enter($__internal_6d03f6248b1539e60d33431787eb7f1f01781914ea47d76db06b5ccb07e8353f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_be07e585e46c20c661d8d2b58dbfa91c56527fe953d272996a21e73675b62893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be07e585e46c20c661d8d2b58dbfa91c56527fe953d272996a21e73675b62893->enter($__internal_be07e585e46c20c661d8d2b58dbfa91c56527fe953d272996a21e73675b62893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        // line 549
        echo "    ";
        $context["_translation_domain"] = $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array());
        // line 550
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 551
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 552
            echo "            <h2>
                ";
            // line 553
            if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 554
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain")));
            echo "
            </h2>
        ";
        }
        // line 557
        echo "
        ";
        // line 558
        if ((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 559
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), ($context["_translation_domain"] ?? $this->getContext($context, "_translation_domain"))), "html", null, true));
            echo "</p>
        ";
        }
        // line 561
        echo "    </div>
";
        
        $__internal_be07e585e46c20c661d8d2b58dbfa91c56527fe953d272996a21e73675b62893->leave($__internal_be07e585e46c20c661d8d2b58dbfa91c56527fe953d272996a21e73675b62893_prof);

        
        $__internal_6d03f6248b1539e60d33431787eb7f1f01781914ea47d76db06b5ccb07e8353f->leave($__internal_6d03f6248b1539e60d33431787eb7f1f01781914ea47d76db06b5ccb07e8353f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1928 => 561,  1922 => 559,  1920 => 558,  1917 => 557,  1910 => 554,  1904 => 553,  1901 => 552,  1899 => 551,  1894 => 550,  1891 => 549,  1882 => 548,  1869 => 542,  1860 => 541,  1850 => 537,  1847 => 536,  1838 => 535,  1827 => 532,  1825 => 529,  1824 => 525,  1822 => 524,  1813 => 523,  1802 => 514,  1800 => 513,  1799 => 512,  1798 => 511,  1797 => 510,  1796 => 509,  1795 => 508,  1792 => 507,  1790 => 506,  1787 => 505,  1785 => 504,  1784 => 502,  1781 => 501,  1779 => 500,  1778 => 499,  1777 => 498,  1771 => 495,  1768 => 494,  1766 => 493,  1757 => 492,  1743 => 516,  1741 => 492,  1733 => 486,  1727 => 485,  1717 => 482,  1712 => 481,  1706 => 480,  1697 => 475,  1687 => 472,  1682 => 471,  1677 => 470,  1673 => 468,  1667 => 466,  1665 => 465,  1661 => 463,  1653 => 459,  1647 => 457,  1645 => 456,  1641 => 454,  1639 => 453,  1633 => 451,  1628 => 450,  1622 => 447,  1619 => 446,  1613 => 444,  1611 => 443,  1608 => 442,  1605 => 441,  1602 => 440,  1593 => 439,  1581 => 434,  1575 => 431,  1571 => 430,  1565 => 427,  1561 => 426,  1558 => 425,  1555 => 424,  1553 => 423,  1550 => 422,  1544 => 420,  1542 => 419,  1538 => 418,  1535 => 417,  1533 => 416,  1524 => 415,  1511 => 412,  1508 => 411,  1499 => 410,  1483 => 403,  1478 => 402,  1472 => 399,  1469 => 398,  1467 => 397,  1463 => 395,  1455 => 393,  1452 => 392,  1450 => 391,  1447 => 390,  1445 => 389,  1436 => 388,  1423 => 385,  1420 => 384,  1411 => 383,  1398 => 379,  1395 => 378,  1386 => 377,  1376 => 374,  1373 => 373,  1370 => 372,  1367 => 371,  1364 => 370,  1358 => 368,  1356 => 367,  1347 => 366,  1335 => 362,  1331 => 360,  1322 => 358,  1318 => 357,  1315 => 356,  1309 => 354,  1307 => 353,  1303 => 352,  1300 => 351,  1297 => 350,  1294 => 349,  1285 => 348,  1275 => 344,  1273 => 343,  1271 => 342,  1263 => 341,  1254 => 340,  1244 => 337,  1242 => 336,  1240 => 335,  1232 => 334,  1223 => 333,  1213 => 330,  1211 => 329,  1202 => 328,  1192 => 325,  1190 => 324,  1181 => 323,  1171 => 320,  1169 => 319,  1160 => 318,  1150 => 315,  1148 => 314,  1139 => 313,  1129 => 310,  1127 => 309,  1121 => 308,  1112 => 307,  1097 => 301,  1092 => 299,  1088 => 297,  1074 => 288,  1068 => 287,  1057 => 279,  1052 => 276,  1049 => 275,  1047 => 274,  1041 => 272,  1032 => 271,  1022 => 268,  1016 => 266,  1014 => 265,  1012 => 263,  1005 => 258,  999 => 257,  995 => 255,  993 => 254,  991 => 252,  989 => 251,  987 => 250,  978 => 249,  976 => 248,  967 => 247,  955 => 241,  953 => 240,  951 => 239,  936 => 238,  933 => 237,  930 => 236,  927 => 235,  924 => 234,  921 => 233,  918 => 232,  915 => 231,  912 => 230,  909 => 229,  906 => 228,  904 => 227,  895 => 226,  885 => 223,  876 => 222,  866 => 219,  857 => 218,  847 => 215,  845 => 214,  836 => 212,  826 => 209,  824 => 208,  815 => 207,  804 => 201,  802 => 200,  800 => 199,  797 => 197,  795 => 196,  793 => 195,  784 => 194,  773 => 190,  771 => 189,  769 => 188,  766 => 186,  764 => 185,  762 => 184,  753 => 183,  742 => 179,  736 => 176,  735 => 175,  731 => 174,  727 => 173,  724 => 171,  718 => 168,  717 => 167,  713 => 166,  711 => 165,  709 => 164,  700 => 163,  685 => 157,  680 => 155,  676 => 153,  663 => 143,  658 => 140,  655 => 139,  653 => 138,  651 => 137,  649 => 136,  640 => 135,  628 => 130,  625 => 129,  617 => 128,  612 => 126,  610 => 125,  608 => 124,  605 => 122,  603 => 121,  594 => 120,  582 => 115,  580 => 114,  578 => 112,  577 => 111,  576 => 110,  575 => 109,  570 => 107,  568 => 106,  566 => 105,  563 => 103,  561 => 102,  552 => 101,  541 => 97,  539 => 96,  537 => 95,  535 => 94,  533 => 93,  529 => 92,  527 => 91,  524 => 89,  522 => 88,  513 => 87,  502 => 83,  500 => 82,  498 => 81,  489 => 80,  479 => 77,  473 => 75,  471 => 74,  469 => 73,  463 => 71,  460 => 70,  458 => 69,  455 => 68,  446 => 67,  436 => 64,  434 => 63,  425 => 62,  415 => 59,  413 => 58,  404 => 57,  394 => 54,  391 => 52,  389 => 51,  380 => 50,  365 => 44,  360 => 42,  356 => 40,  343 => 30,  338 => 27,  335 => 26,  333 => 25,  331 => 23,  322 => 22,  312 => 17,  309 => 15,  307 => 13,  306 => 12,  305 => 11,  304 => 9,  303 => 8,  302 => 7,  300 => 5,  298 => 4,  289 => 3,  279 => 548,  276 => 546,  274 => 541,  271 => 539,  269 => 535,  266 => 534,  264 => 523,  261 => 521,  259 => 439,  256 => 437,  254 => 415,  251 => 414,  249 => 410,  246 => 409,  244 => 388,  241 => 387,  239 => 383,  236 => 382,  234 => 377,  232 => 366,  230 => 348,  227 => 346,  225 => 340,  222 => 339,  220 => 333,  217 => 332,  215 => 328,  212 => 327,  210 => 323,  207 => 322,  205 => 318,  202 => 317,  200 => 313,  197 => 312,  195 => 307,  192 => 306,  190 => 271,  187 => 270,  185 => 247,  182 => 246,  179 => 244,  177 => 226,  174 => 225,  172 => 222,  169 => 221,  167 => 218,  164 => 217,  162 => 212,  159 => 211,  157 => 207,  154 => 206,  151 => 204,  149 => 194,  146 => 193,  144 => 183,  141 => 182,  139 => 163,  136 => 162,  134 => 135,  131 => 134,  129 => 120,  126 => 119,  124 => 101,  121 => 100,  119 => 87,  116 => 86,  114 => 80,  111 => 79,  109 => 67,  106 => 66,  104 => 62,  101 => 61,  99 => 57,  96 => 56,  94 => 50,  91 => 49,  89 => 22,  86 => 21,  83 => 19,  81 => 3,  78 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use 'form_div_layout.html.twig' %}

{% block form_start -%}
    {% if 'easyadmin' == block_prefixes|slice(-2)|first %}
        {% set attr = attr|merge({
            'class': [
                _easyadmin_form_type|default('') == 'horizontal' ? 'form-horizontal' : 'form-vertical',
                attr.class|default(''),
                easyadmin.view ~ '-form'
            ]|join(' '),
            'data-view': easyadmin.view,
            'data-entity': easyadmin.entity.name,
            'data-entity-id': attribute(value, easyadmin.entity.primary_key_field_name),
        }) %}
    {% endif %}

    {{- parent() -}}
{%- endblock form_start %}

{# Widgets #}

{% block form_widget %}
    {{- parent() -}}

    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock form_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
    {% if form.parent.vars.allow_delete|default(false) %}
        {% set remove_item_javascript %}
            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#{{ id }}').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        {% endset %}

        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"{{ remove_item_javascript|raw }}\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                {{ 'action.remove_item'|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do no display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {% set label = name|humanize %}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? label|trans({}, easyadmin.entity.translation_domain) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {% set _field_label = easyadmin.field['label']|default(null) %}
        {{- form_label(form, _field_label, { translation_domain: easyadmin.entity.translation_domain }) -}}
        {{- form_widget(form) -}}

        {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                    {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                </label>
            </div>
        {% endif %}

        {{- form_errors(form) -}}

        {% if easyadmin.field.help|default('') != '' %}
            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
        {% endif %}
    </div>
{%- endblock form_row %}

{% block collection_row %}
    {{ block('form_row') }}

    {% if allow_add|default(false) %}
        {% set js_add_item %}
            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#{{ id }}');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_{{ name }}___name__/g, '_{{ name }}_' + numItems)
                    .replace(/{{ name }}\\]\\[__name__\\]/g, '{{ name }}][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        {% endset %}

        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"{{ js_add_item|raw }}\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                {{ (form|length == 0 ? 'action.add_new_item' : 'action.add_another_item')|trans({}, 'EasyAdminBundle') }}
            </a>
        </div>
    {% endif %}
{% endblock collection_row %}

{% block button_row -%}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }} {{ easyadmin.field.css_class|default('') }}\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}
{% block form_errors %}
    {% set error_count = errors|length %}
    {% if error_count >= 1 %}
        <div class=\"error-block\">
            <span class=\"label label-danger\">{{ 'errors'|transchoice(error_count, {}, 'EasyAdminBundle') }}</span>
            {% if error_count == 1 %}
                {{ errors|first.message }}
            {% else %}
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            {% endif %}
        </div>
    {% endif %}
{% endblock form_errors %}

{%- block form_widget_compound -%}
    {% if value is empty %}
        {{ block('empty_collection') }}
    {% endif %}
    {% if value is empty or form.vars.prototype is defined %}
        {% set attr = attr|merge({'data-empty-collection': block('empty_collection') }) %}
    {% endif %}

    {{ parent() }}
{%- endblock form_widget_compound -%}

{% block empty_collection %}
    <div class=\"empty collection-empty\">
        {{ include(easyadmin.entity.templates.label_empty) }}
    </div>
{% endblock empty_collection %}

{% block vich_file_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-file\">
        {% if download_uri|default('') is not empty %}
            {% set download_title = download_uri|split('/')|last ?: 'download'|trans({}, 'VichUploaderBundle') %}
            <a href=\"{{ asset(download_uri) }}\">{{ download_title }}</a>
        {% endif %}

        <div class=\"row\">
            {% if form.delete is defined %}
            <div class=\"col-sm-3 col-md-2\">
                {{ form_row(form.delete, { label: 'action.delete' }) }}
            </div>
            {% endif %}
            <div class=\"{{ form.delete is defined ? 'col-sm-9 col-md-10' : 'col-sm-12' }}\">
                {{ form_widget(form.file) }}
            </div>
        </div>
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row %}
    {% set force_error = true %}
    {{ block('form_row') }}
{% endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"easyadmin-vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
            {{ form_row(form.delete, { label: 'action.delete' }) }}
        {% endif %}

        {% if download_uri|default('') is not empty %}
            {% set _lightbox_id = 'easyadmin-lightbox-' ~ id %}

            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#{{ _lightbox_id }}\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"{{ asset(download_uri) }}\">
            </a>

            <div id=\"{{ _lightbox_id }}\" class=\"easyadmin-lightbox\">
                <img src=\"{{ asset(download_uri) }}\">
            </div>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{# EasyAdmin form type #}
{% block easyadmin_widget %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    {% set _trans_parameters = { '%entity_name%':  easyadmin.entity.name|trans, '%entity_label%': easyadmin.entity.label|trans } %}

    {% if form.vars.errors|length > 0 %}
        {{ form_errors(form) }}
    {% endif %}

    <input type=\"hidden\" name=\"referer\" value=\"{{ app.request.query.get('referer', '') }}\"/>

    <div class=\"row\">
        {% for group_name, group_config in easyadmin_form_groups %}
            <div class=\"field-group col-xs-12 {{ group_config.css_class|default('') }}\">
                <div class=\"box box-default\">
                    {% if group_config.label|default(false) or group_config.icon|default(false) %}
                        <div class=\"box-header with-border\">
                            <h3 class=\"box-title\">
                                {% if group_config.icon|default(false) %}
                                    <i class=\"fa fa-{{ group_config.icon }}\"></i>
                                {% endif %}
                                {{ group_config.label|trans(domain = _translation_domain)|raw }}
                            </h3>
                        </div>
                    {% endif %}

                    <div class=\"box-body\">
                        {% if group_config.help|default(false) %}
                            <p class=\"help-block\">{{ group_config.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
                        {% endif %}

                        <div class=\"row\">
                            {% for field in form.children if 'hidden' not in field.vars.block_prefixes and field.vars.easyadmin.form_group == group_name %}
                                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                                    {{ form_row(field) }}
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            {% for field in form.children if 'hidden' not in field.vars.block_prefixes %}
                <div class=\"col-xs-12 {{ field.vars.easyadmin.field.css_class|default('') }}\">
                    {{ form_row(field) }}
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">
                    {% block item_actions %}
                        {# the 'save' action is hardcoded for the 'edit' and 'new' views #}
                        <button type=\"submit\" class=\"btn btn-primary action-save\">
                            <i class=\"fa fa-save\"></i> {{ 'action.save'|trans(_trans_parameters, _translation_domain) }}
                        </button>

                        {% set _entity_actions = (easyadmin.view == 'new')
                            ? easyadmin_get_actions_for_new_item(easyadmin.entity.name)
                            : easyadmin_get_actions_for_edit_item(easyadmin.entity.name) %}

                        {% set _entity_id = (easyadmin.view == 'new')
                            ? null
                            : attribute(easyadmin.item, easyadmin.entity.primary_key_field_name) %}

                        {% set _request_parameters = { entity: easyadmin.entity.name, referer: app.request.query.get('referer') } %}

                        {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                            actions: _entity_actions,
                            request_parameters: _request_parameters,
                            translation_domain: _translation_domain,
                            trans_parameters: _trans_parameters,
                            item_id: _entity_id
                        }, with_context = false) }}
                    {% endblock item_actions %}
                </div>
            </div>
        </div>
    </div>
{% endblock easyadmin_widget %}

{# EasyAdminAutocomplete form type #}
{% block easyadmin_autocomplete_widget %}
    {{ form_widget(form.autocomplete, {
        attr: attr|merge({
            'data-easyadmin-autocomplete-max-results': easyadmin_config('show.max_results'),
            'data-easyadmin-autocomplete-url' : path('easyadmin', {
                action: 'autocomplete',
                entity: autocomplete_entity_name,
            })|raw })
        })
    }}
{% endblock easyadmin_autocomplete_widget %}

{% block easyadmin_autocomplete_inner_label %}
    {% set name = form.parent.vars.name %}
    {{- block('form_label') -}}
{% endblock easyadmin_autocomplete_inner_label %}

{# EasyAdminDivider form type #}
{% block easyadmin_divider_row %}
    <div class=\"field-divider\">
        <hr>
    </div>
{% endblock easyadmin_divider_row %}

{# EasyAdminSection form type #}
{% block easyadmin_section_row %}
    {% set _translation_domain = easyadmin.entity.translation_domain %}
    <div class=\"field-section {{ easyadmin.field.css_class|default('') }}\">
        {% if easyadmin.field.label|default(false) or easyadmin.field.icon|default(false) %}
            <h2>
                {% if easyadmin.field.icon|default(false) %}<i class=\"fa fa-{{ easyadmin.field.icon }}\"></i>{% endif %}
                {{ easyadmin.field.label|default('')|trans(domain = _translation_domain)|raw }}
            </h2>
        {% endif %}

        {% if easyadmin.field.help|default(false) %}
            <p class=\"help-block\">{{ easyadmin.field.help|trans(domain = _translation_domain)|nl2br|raw }}</p>
        {% endif %}
    </div>
{% endblock easyadmin_section_row %}
", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\form\\bootstrap_3_layout.html.twig");
    }
}
