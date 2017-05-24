<?php

/* EasyAdminBundle:form:bootstrap_3_layout.html.twig */
class __TwigTemplate_07aea5543eee84ab81b283cd7b760236ee53e75cd55bbd020d70fbae1ae459d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", 1);
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
        $__internal_3bd434961e7363251413cfca5c773d6a792976f695c48230f436f19ce8d77128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd434961e7363251413cfca5c773d6a792976f695c48230f436f19ce8d77128->enter($__internal_3bd434961e7363251413cfca5c773d6a792976f695c48230f436f19ce8d77128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_layout.html.twig"));

        $__internal_500547d07415f1785f6998d42cf74613bf95230155c7aa5bab9eca00f35b171e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500547d07415f1785f6998d42cf74613bf95230155c7aa5bab9eca00f35b171e->enter($__internal_500547d07415f1785f6998d42cf74613bf95230155c7aa5bab9eca00f35b171e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:form:bootstrap_3_layout.html.twig"));

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
        
        $__internal_3bd434961e7363251413cfca5c773d6a792976f695c48230f436f19ce8d77128->leave($__internal_3bd434961e7363251413cfca5c773d6a792976f695c48230f436f19ce8d77128_prof);

        
        $__internal_500547d07415f1785f6998d42cf74613bf95230155c7aa5bab9eca00f35b171e->leave($__internal_500547d07415f1785f6998d42cf74613bf95230155c7aa5bab9eca00f35b171e_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_426ec24fbf326531eda7fa7b55ab5ba88247e8ea6820145f1aeb3202c0467684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426ec24fbf326531eda7fa7b55ab5ba88247e8ea6820145f1aeb3202c0467684->enter($__internal_426ec24fbf326531eda7fa7b55ab5ba88247e8ea6820145f1aeb3202c0467684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_d7f6acd1d80ede3966c54a79fde47c20b90f76b2f196a1a32c1a1ae7a5cb156b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f6acd1d80ede3966c54a79fde47c20b90f76b2f196a1a32c1a1ae7a5cb156b->enter($__internal_d7f6acd1d80ede3966c54a79fde47c20b90f76b2f196a1a32c1a1ae7a5cb156b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_d7f6acd1d80ede3966c54a79fde47c20b90f76b2f196a1a32c1a1ae7a5cb156b->leave($__internal_d7f6acd1d80ede3966c54a79fde47c20b90f76b2f196a1a32c1a1ae7a5cb156b_prof);

        
        $__internal_426ec24fbf326531eda7fa7b55ab5ba88247e8ea6820145f1aeb3202c0467684->leave($__internal_426ec24fbf326531eda7fa7b55ab5ba88247e8ea6820145f1aeb3202c0467684_prof);

    }

    // line 22
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_208323f33edf540b37cb247b4c77985f4056f254b601ada4a9dbe60a7a22f074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208323f33edf540b37cb247b4c77985f4056f254b601ada4a9dbe60a7a22f074->enter($__internal_208323f33edf540b37cb247b4c77985f4056f254b601ada4a9dbe60a7a22f074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_e744474b011d097924ab5f1a5e2f4065d5a7bbcde40050c39bb0ba41defa3021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e744474b011d097924ab5f1a5e2f4065d5a7bbcde40050c39bb0ba41defa3021->enter($__internal_e744474b011d097924ab5f1a5e2f4065d5a7bbcde40050c39bb0ba41defa3021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

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
        
        $__internal_e744474b011d097924ab5f1a5e2f4065d5a7bbcde40050c39bb0ba41defa3021->leave($__internal_e744474b011d097924ab5f1a5e2f4065d5a7bbcde40050c39bb0ba41defa3021_prof);

        
        $__internal_208323f33edf540b37cb247b4c77985f4056f254b601ada4a9dbe60a7a22f074->leave($__internal_208323f33edf540b37cb247b4c77985f4056f254b601ada4a9dbe60a7a22f074_prof);

    }

    // line 50
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_50e87f2a8ce9d2ce4f35b7458d81396f68bef3fddb9e76d4f273572c21650b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e87f2a8ce9d2ce4f35b7458d81396f68bef3fddb9e76d4f273572c21650b7b->enter($__internal_50e87f2a8ce9d2ce4f35b7458d81396f68bef3fddb9e76d4f273572c21650b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_816587269c556f4442bc32d36e7ddcc7548f03b1d82c68be013f02a32b774315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816587269c556f4442bc32d36e7ddcc7548f03b1d82c68be013f02a32b774315->enter($__internal_816587269c556f4442bc32d36e7ddcc7548f03b1d82c68be013f02a32b774315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 51
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 52
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 54
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_816587269c556f4442bc32d36e7ddcc7548f03b1d82c68be013f02a32b774315->leave($__internal_816587269c556f4442bc32d36e7ddcc7548f03b1d82c68be013f02a32b774315_prof);

        
        $__internal_50e87f2a8ce9d2ce4f35b7458d81396f68bef3fddb9e76d4f273572c21650b7b->leave($__internal_50e87f2a8ce9d2ce4f35b7458d81396f68bef3fddb9e76d4f273572c21650b7b_prof);

    }

    // line 57
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_8e9f644c8702451867f0275f67845b0b8cb808c22c29a7438cb39974599b5d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9f644c8702451867f0275f67845b0b8cb808c22c29a7438cb39974599b5d4d->enter($__internal_8e9f644c8702451867f0275f67845b0b8cb808c22c29a7438cb39974599b5d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_567c192d3796ef1cc5262b2615c47c59a529aa725c5cca7aa45a6f7db67bbca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567c192d3796ef1cc5262b2615c47c59a529aa725c5cca7aa45a6f7db67bbca2->enter($__internal_567c192d3796ef1cc5262b2615c47c59a529aa725c5cca7aa45a6f7db67bbca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 58
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 59
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_567c192d3796ef1cc5262b2615c47c59a529aa725c5cca7aa45a6f7db67bbca2->leave($__internal_567c192d3796ef1cc5262b2615c47c59a529aa725c5cca7aa45a6f7db67bbca2_prof);

        
        $__internal_8e9f644c8702451867f0275f67845b0b8cb808c22c29a7438cb39974599b5d4d->leave($__internal_8e9f644c8702451867f0275f67845b0b8cb808c22c29a7438cb39974599b5d4d_prof);

    }

    // line 62
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_a69b94da740fabb6cd2d9da2a1261077bb72234014eb07eed5ae971ef8fd5afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69b94da740fabb6cd2d9da2a1261077bb72234014eb07eed5ae971ef8fd5afd->enter($__internal_a69b94da740fabb6cd2d9da2a1261077bb72234014eb07eed5ae971ef8fd5afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_60b233d9b1bf61d1ab55560da2adb02ce1661728ec1590c109b29b1a153c30f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b233d9b1bf61d1ab55560da2adb02ce1661728ec1590c109b29b1a153c30f9->enter($__internal_60b233d9b1bf61d1ab55560da2adb02ce1661728ec1590c109b29b1a153c30f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 63
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 64
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_60b233d9b1bf61d1ab55560da2adb02ce1661728ec1590c109b29b1a153c30f9->leave($__internal_60b233d9b1bf61d1ab55560da2adb02ce1661728ec1590c109b29b1a153c30f9_prof);

        
        $__internal_a69b94da740fabb6cd2d9da2a1261077bb72234014eb07eed5ae971ef8fd5afd->leave($__internal_a69b94da740fabb6cd2d9da2a1261077bb72234014eb07eed5ae971ef8fd5afd_prof);

    }

    // line 67
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_f41cb7afa58080c10e34d62708a6eb3e377679d7928a58b18a6fb173a50f9cf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41cb7afa58080c10e34d62708a6eb3e377679d7928a58b18a6fb173a50f9cf5->enter($__internal_f41cb7afa58080c10e34d62708a6eb3e377679d7928a58b18a6fb173a50f9cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_cd58d5b5cd88d9fb40315e3a873c5972030a299bc2b49dc1049198d192ed80c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd58d5b5cd88d9fb40315e3a873c5972030a299bc2b49dc1049198d192ed80c2->enter($__internal_cd58d5b5cd88d9fb40315e3a873c5972030a299bc2b49dc1049198d192ed80c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_cd58d5b5cd88d9fb40315e3a873c5972030a299bc2b49dc1049198d192ed80c2->leave($__internal_cd58d5b5cd88d9fb40315e3a873c5972030a299bc2b49dc1049198d192ed80c2_prof);

        
        $__internal_f41cb7afa58080c10e34d62708a6eb3e377679d7928a58b18a6fb173a50f9cf5->leave($__internal_f41cb7afa58080c10e34d62708a6eb3e377679d7928a58b18a6fb173a50f9cf5_prof);

    }

    // line 80
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_24c835999a3593bb694b4e8616995021becc45bdd5522368aa8a66af507d58e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24c835999a3593bb694b4e8616995021becc45bdd5522368aa8a66af507d58e2->enter($__internal_24c835999a3593bb694b4e8616995021becc45bdd5522368aa8a66af507d58e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_71cdd98496c4da4c8b507ab378e0389690316b9f99e666c346c5e6beafcd87c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cdd98496c4da4c8b507ab378e0389690316b9f99e666c346c5e6beafcd87c8->enter($__internal_71cdd98496c4da4c8b507ab378e0389690316b9f99e666c346c5e6beafcd87c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 81
        echo "<div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_71cdd98496c4da4c8b507ab378e0389690316b9f99e666c346c5e6beafcd87c8->leave($__internal_71cdd98496c4da4c8b507ab378e0389690316b9f99e666c346c5e6beafcd87c8_prof);

        
        $__internal_24c835999a3593bb694b4e8616995021becc45bdd5522368aa8a66af507d58e2->leave($__internal_24c835999a3593bb694b4e8616995021becc45bdd5522368aa8a66af507d58e2_prof);

    }

    // line 87
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_25ae492f3c5c3007a8485efb5193392e266febedf4a19f5a6b64ec0975ef9c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ae492f3c5c3007a8485efb5193392e266febedf4a19f5a6b64ec0975ef9c44->enter($__internal_25ae492f3c5c3007a8485efb5193392e266febedf4a19f5a6b64ec0975ef9c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_dfb98f821effe0961201c74cc8a1411629441178cbca361f92e5966f9fc40e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb98f821effe0961201c74cc8a1411629441178cbca361f92e5966f9fc40e15->enter($__internal_dfb98f821effe0961201c74cc8a1411629441178cbca361f92e5966f9fc40e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_dfb98f821effe0961201c74cc8a1411629441178cbca361f92e5966f9fc40e15->leave($__internal_dfb98f821effe0961201c74cc8a1411629441178cbca361f92e5966f9fc40e15_prof);

        
        $__internal_25ae492f3c5c3007a8485efb5193392e266febedf4a19f5a6b64ec0975ef9c44->leave($__internal_25ae492f3c5c3007a8485efb5193392e266febedf4a19f5a6b64ec0975ef9c44_prof);

    }

    // line 101
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4ccfbd579505c76b74d23eb5e740ddadbb41b4ad5c04658bb50ecc9a4640c89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ccfbd579505c76b74d23eb5e740ddadbb41b4ad5c04658bb50ecc9a4640c89c->enter($__internal_4ccfbd579505c76b74d23eb5e740ddadbb41b4ad5c04658bb50ecc9a4640c89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_9f536a45d64fa7543c2aaa172221a5c3892f4092a5513480e9d0061640d0316a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f536a45d64fa7543c2aaa172221a5c3892f4092a5513480e9d0061640d0316a->enter($__internal_9f536a45d64fa7543c2aaa172221a5c3892f4092a5513480e9d0061640d0316a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_9f536a45d64fa7543c2aaa172221a5c3892f4092a5513480e9d0061640d0316a->leave($__internal_9f536a45d64fa7543c2aaa172221a5c3892f4092a5513480e9d0061640d0316a_prof);

        
        $__internal_4ccfbd579505c76b74d23eb5e740ddadbb41b4ad5c04658bb50ecc9a4640c89c->leave($__internal_4ccfbd579505c76b74d23eb5e740ddadbb41b4ad5c04658bb50ecc9a4640c89c_prof);

    }

    // line 120
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_694a0a802a1468281d248a08c2735460f397093e167c1aec6b1e162a37999a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_694a0a802a1468281d248a08c2735460f397093e167c1aec6b1e162a37999a21->enter($__internal_694a0a802a1468281d248a08c2735460f397093e167c1aec6b1e162a37999a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_3914750c0397ec59541c3025239e5fa833026073393c69100abc489807ce297e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3914750c0397ec59541c3025239e5fa833026073393c69100abc489807ce297e->enter($__internal_3914750c0397ec59541c3025239e5fa833026073393c69100abc489807ce297e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_3914750c0397ec59541c3025239e5fa833026073393c69100abc489807ce297e->leave($__internal_3914750c0397ec59541c3025239e5fa833026073393c69100abc489807ce297e_prof);

        
        $__internal_694a0a802a1468281d248a08c2735460f397093e167c1aec6b1e162a37999a21->leave($__internal_694a0a802a1468281d248a08c2735460f397093e167c1aec6b1e162a37999a21_prof);

    }

    // line 135
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_dad9a5f4f0577f6f5f7b2d3b994993de26e6b12c5db5d12e5e71cbafcd7991f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad9a5f4f0577f6f5f7b2d3b994993de26e6b12c5db5d12e5e71cbafcd7991f6->enter($__internal_dad9a5f4f0577f6f5f7b2d3b994993de26e6b12c5db5d12e5e71cbafcd7991f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f6174b77db367aa473ec87fedceca9cafb49bc6e6004f3aca8a08d8630f5c7ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6174b77db367aa473ec87fedceca9cafb49bc6e6004f3aca8a08d8630f5c7ca->enter($__internal_f6174b77db367aa473ec87fedceca9cafb49bc6e6004f3aca8a08d8630f5c7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_f6174b77db367aa473ec87fedceca9cafb49bc6e6004f3aca8a08d8630f5c7ca->leave($__internal_f6174b77db367aa473ec87fedceca9cafb49bc6e6004f3aca8a08d8630f5c7ca_prof);

        
        $__internal_dad9a5f4f0577f6f5f7b2d3b994993de26e6b12c5db5d12e5e71cbafcd7991f6->leave($__internal_dad9a5f4f0577f6f5f7b2d3b994993de26e6b12c5db5d12e5e71cbafcd7991f6_prof);

    }

    // line 163
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b7d293e4ef800334a5485e6dff19569b7142c3c6b7de83199f99203261f39341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d293e4ef800334a5485e6dff19569b7142c3c6b7de83199f99203261f39341->enter($__internal_b7d293e4ef800334a5485e6dff19569b7142c3c6b7de83199f99203261f39341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_363a6403782bb684deaacf80ba18805e4a4c5d8a54811e6946780846a20a9bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_363a6403782bb684deaacf80ba18805e4a4c5d8a54811e6946780846a20a9bc1->enter($__internal_363a6403782bb684deaacf80ba18805e4a4c5d8a54811e6946780846a20a9bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_363a6403782bb684deaacf80ba18805e4a4c5d8a54811e6946780846a20a9bc1->leave($__internal_363a6403782bb684deaacf80ba18805e4a4c5d8a54811e6946780846a20a9bc1_prof);

        
        $__internal_b7d293e4ef800334a5485e6dff19569b7142c3c6b7de83199f99203261f39341->leave($__internal_b7d293e4ef800334a5485e6dff19569b7142c3c6b7de83199f99203261f39341_prof);

    }

    // line 183
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_6ae54160ed0e82349ce31fceec72eeb0737565b82a0ab79715d6c99617181534 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ae54160ed0e82349ce31fceec72eeb0737565b82a0ab79715d6c99617181534->enter($__internal_6ae54160ed0e82349ce31fceec72eeb0737565b82a0ab79715d6c99617181534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_50505adc2382afd02eab96ff6986ca54dc621457fca24c596087ffb1318ed106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50505adc2382afd02eab96ff6986ca54dc621457fca24c596087ffb1318ed106->enter($__internal_50505adc2382afd02eab96ff6986ca54dc621457fca24c596087ffb1318ed106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_50505adc2382afd02eab96ff6986ca54dc621457fca24c596087ffb1318ed106->leave($__internal_50505adc2382afd02eab96ff6986ca54dc621457fca24c596087ffb1318ed106_prof);

        
        $__internal_6ae54160ed0e82349ce31fceec72eeb0737565b82a0ab79715d6c99617181534->leave($__internal_6ae54160ed0e82349ce31fceec72eeb0737565b82a0ab79715d6c99617181534_prof);

    }

    // line 194
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a8db664d5bf1d42704751b16f1e863ab6dbea6554cb092e16e426c010e8c5314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8db664d5bf1d42704751b16f1e863ab6dbea6554cb092e16e426c010e8c5314->enter($__internal_a8db664d5bf1d42704751b16f1e863ab6dbea6554cb092e16e426c010e8c5314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_9840097849bea806ba2f6fd4b2ccdb79ff4dfd7edb69abb22241678dcbb277e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9840097849bea806ba2f6fd4b2ccdb79ff4dfd7edb69abb22241678dcbb277e9->enter($__internal_9840097849bea806ba2f6fd4b2ccdb79ff4dfd7edb69abb22241678dcbb277e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_9840097849bea806ba2f6fd4b2ccdb79ff4dfd7edb69abb22241678dcbb277e9->leave($__internal_9840097849bea806ba2f6fd4b2ccdb79ff4dfd7edb69abb22241678dcbb277e9_prof);

        
        $__internal_a8db664d5bf1d42704751b16f1e863ab6dbea6554cb092e16e426c010e8c5314->leave($__internal_a8db664d5bf1d42704751b16f1e863ab6dbea6554cb092e16e426c010e8c5314_prof);

    }

    // line 207
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d28491527a6daa6fb896681836cdc28db65720a984181bbcae12af001deefada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28491527a6daa6fb896681836cdc28db65720a984181bbcae12af001deefada->enter($__internal_d28491527a6daa6fb896681836cdc28db65720a984181bbcae12af001deefada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6fa5e21324a137708437413c6baef23c6e18955a6cf1f8a69e42a12f772cb070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa5e21324a137708437413c6baef23c6e18955a6cf1f8a69e42a12f772cb070->enter($__internal_6fa5e21324a137708437413c6baef23c6e18955a6cf1f8a69e42a12f772cb070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 208
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 209
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_6fa5e21324a137708437413c6baef23c6e18955a6cf1f8a69e42a12f772cb070->leave($__internal_6fa5e21324a137708437413c6baef23c6e18955a6cf1f8a69e42a12f772cb070_prof);

        
        $__internal_d28491527a6daa6fb896681836cdc28db65720a984181bbcae12af001deefada->leave($__internal_d28491527a6daa6fb896681836cdc28db65720a984181bbcae12af001deefada_prof);

    }

    // line 212
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_93b75c9b78885c30a87d1b11fef0c066653d50469fb96c7a55e06afa9507df9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b75c9b78885c30a87d1b11fef0c066653d50469fb96c7a55e06afa9507df9a->enter($__internal_93b75c9b78885c30a87d1b11fef0c066653d50469fb96c7a55e06afa9507df9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6ff187db946cf23decff34e2134c1dd8b5bf06f06b74b1ba0aeb1a4eba6d9622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff187db946cf23decff34e2134c1dd8b5bf06f06b74b1ba0aeb1a4eba6d9622->enter($__internal_6ff187db946cf23decff34e2134c1dd8b5bf06f06b74b1ba0aeb1a4eba6d9622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 214
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 215
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6ff187db946cf23decff34e2134c1dd8b5bf06f06b74b1ba0aeb1a4eba6d9622->leave($__internal_6ff187db946cf23decff34e2134c1dd8b5bf06f06b74b1ba0aeb1a4eba6d9622_prof);

        
        $__internal_93b75c9b78885c30a87d1b11fef0c066653d50469fb96c7a55e06afa9507df9a->leave($__internal_93b75c9b78885c30a87d1b11fef0c066653d50469fb96c7a55e06afa9507df9a_prof);

    }

    // line 218
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_ae30090e5eee0dfba167d032756d201830258a7daddcb4e1592c9ca52004f551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae30090e5eee0dfba167d032756d201830258a7daddcb4e1592c9ca52004f551->enter($__internal_ae30090e5eee0dfba167d032756d201830258a7daddcb4e1592c9ca52004f551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c00b7c07b003e9df543e8eaf7f9a0775f7fe3bc9991ac108c1232b239a45f2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00b7c07b003e9df543e8eaf7f9a0775f7fe3bc9991ac108c1232b239a45f2f6->enter($__internal_c00b7c07b003e9df543e8eaf7f9a0775f7fe3bc9991ac108c1232b239a45f2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 219
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c00b7c07b003e9df543e8eaf7f9a0775f7fe3bc9991ac108c1232b239a45f2f6->leave($__internal_c00b7c07b003e9df543e8eaf7f9a0775f7fe3bc9991ac108c1232b239a45f2f6_prof);

        
        $__internal_ae30090e5eee0dfba167d032756d201830258a7daddcb4e1592c9ca52004f551->leave($__internal_ae30090e5eee0dfba167d032756d201830258a7daddcb4e1592c9ca52004f551_prof);

    }

    // line 222
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_b7500466d12df30da1724ed81498426387ad5e4d0d88523f6a3b5970bb978ac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7500466d12df30da1724ed81498426387ad5e4d0d88523f6a3b5970bb978ac5->enter($__internal_b7500466d12df30da1724ed81498426387ad5e4d0d88523f6a3b5970bb978ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_5d4df5628c90c1a4b4e67ae7008f67d4b80b959c62b9c2085fa21fb381dadf7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4df5628c90c1a4b4e67ae7008f67d4b80b959c62b9c2085fa21fb381dadf7a->enter($__internal_5d4df5628c90c1a4b4e67ae7008f67d4b80b959c62b9c2085fa21fb381dadf7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 223
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5d4df5628c90c1a4b4e67ae7008f67d4b80b959c62b9c2085fa21fb381dadf7a->leave($__internal_5d4df5628c90c1a4b4e67ae7008f67d4b80b959c62b9c2085fa21fb381dadf7a_prof);

        
        $__internal_b7500466d12df30da1724ed81498426387ad5e4d0d88523f6a3b5970bb978ac5->leave($__internal_b7500466d12df30da1724ed81498426387ad5e4d0d88523f6a3b5970bb978ac5_prof);

    }

    // line 226
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6c416c3ab83bd8eaaf738cf2098aa644b52f4e34ef4f068fcd43353d44d61247 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c416c3ab83bd8eaaf738cf2098aa644b52f4e34ef4f068fcd43353d44d61247->enter($__internal_6c416c3ab83bd8eaaf738cf2098aa644b52f4e34ef4f068fcd43353d44d61247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_cfabc8033a288e1ab9d72fc76d650eb6d4d3ce96fb745e72f8b387f87b6471af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfabc8033a288e1ab9d72fc76d650eb6d4d3ce96fb745e72f8b387f87b6471af->enter($__internal_cfabc8033a288e1ab9d72fc76d650eb6d4d3ce96fb745e72f8b387f87b6471af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_cfabc8033a288e1ab9d72fc76d650eb6d4d3ce96fb745e72f8b387f87b6471af->leave($__internal_cfabc8033a288e1ab9d72fc76d650eb6d4d3ce96fb745e72f8b387f87b6471af_prof);

        
        $__internal_6c416c3ab83bd8eaaf738cf2098aa644b52f4e34ef4f068fcd43353d44d61247->leave($__internal_6c416c3ab83bd8eaaf738cf2098aa644b52f4e34ef4f068fcd43353d44d61247_prof);

    }

    // line 247
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9110bd551e85a9b4dd0872d04ac0b548612a3390e48ef6cc721c7a266df350a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9110bd551e85a9b4dd0872d04ac0b548612a3390e48ef6cc721c7a266df350a5->enter($__internal_9110bd551e85a9b4dd0872d04ac0b548612a3390e48ef6cc721c7a266df350a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b94264e0d81bbcb1c374e2aae8442e76906e2b58dc33e712a3fa0aef0f43dfd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b94264e0d81bbcb1c374e2aae8442e76906e2b58dc33e712a3fa0aef0f43dfd6->enter($__internal_b94264e0d81bbcb1c374e2aae8442e76906e2b58dc33e712a3fa0aef0f43dfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b94264e0d81bbcb1c374e2aae8442e76906e2b58dc33e712a3fa0aef0f43dfd6->leave($__internal_b94264e0d81bbcb1c374e2aae8442e76906e2b58dc33e712a3fa0aef0f43dfd6_prof);

        
        $__internal_9110bd551e85a9b4dd0872d04ac0b548612a3390e48ef6cc721c7a266df350a5->leave($__internal_9110bd551e85a9b4dd0872d04ac0b548612a3390e48ef6cc721c7a266df350a5_prof);

    }

    // line 271
    public function block_collection_row($context, array $blocks = array())
    {
        $__internal_e5d0e41f23d432abbaf15547b9d3b3974a8f37b4d0f4f8bd7b5ac13466e2c59a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5d0e41f23d432abbaf15547b9d3b3974a8f37b4d0f4f8bd7b5ac13466e2c59a->enter($__internal_e5d0e41f23d432abbaf15547b9d3b3974a8f37b4d0f4f8bd7b5ac13466e2c59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

        $__internal_7b927ed0fe5bac6b66d1b6b52a70fb2e910c2d9db5b9cc7619e805708490cc9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b927ed0fe5bac6b66d1b6b52a70fb2e910c2d9db5b9cc7619e805708490cc9f->enter($__internal_7b927ed0fe5bac6b66d1b6b52a70fb2e910c2d9db5b9cc7619e805708490cc9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_row"));

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
        
        $__internal_7b927ed0fe5bac6b66d1b6b52a70fb2e910c2d9db5b9cc7619e805708490cc9f->leave($__internal_7b927ed0fe5bac6b66d1b6b52a70fb2e910c2d9db5b9cc7619e805708490cc9f_prof);

        
        $__internal_e5d0e41f23d432abbaf15547b9d3b3974a8f37b4d0f4f8bd7b5ac13466e2c59a->leave($__internal_e5d0e41f23d432abbaf15547b9d3b3974a8f37b4d0f4f8bd7b5ac13466e2c59a_prof);

    }

    // line 307
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_978912f14b0deca7e9ede07f444e932b597427ad009cc34d8fc5d20d2940ccca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978912f14b0deca7e9ede07f444e932b597427ad009cc34d8fc5d20d2940ccca->enter($__internal_978912f14b0deca7e9ede07f444e932b597427ad009cc34d8fc5d20d2940ccca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_701279829d55b56dd8e651071f52ae538e3d3da65f63a57297265e8c50ebbbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701279829d55b56dd8e651071f52ae538e3d3da65f63a57297265e8c50ebbbf3->enter($__internal_701279829d55b56dd8e651071f52ae538e3d3da65f63a57297265e8c50ebbbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

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
        
        $__internal_701279829d55b56dd8e651071f52ae538e3d3da65f63a57297265e8c50ebbbf3->leave($__internal_701279829d55b56dd8e651071f52ae538e3d3da65f63a57297265e8c50ebbbf3_prof);

        
        $__internal_978912f14b0deca7e9ede07f444e932b597427ad009cc34d8fc5d20d2940ccca->leave($__internal_978912f14b0deca7e9ede07f444e932b597427ad009cc34d8fc5d20d2940ccca_prof);

    }

    // line 313
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_871013e2e9fc937005519148aab7148a7990d908f1c7d4d18a7c7f692e626347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_871013e2e9fc937005519148aab7148a7990d908f1c7d4d18a7c7f692e626347->enter($__internal_871013e2e9fc937005519148aab7148a7990d908f1c7d4d18a7c7f692e626347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_d01fc042f62d264703055fd048498291f1b79a7c29c7295557a71db10bd7577d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01fc042f62d264703055fd048498291f1b79a7c29c7295557a71db10bd7577d->enter($__internal_d01fc042f62d264703055fd048498291f1b79a7c29c7295557a71db10bd7577d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 314
        $context["force_error"] = true;
        // line 315
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d01fc042f62d264703055fd048498291f1b79a7c29c7295557a71db10bd7577d->leave($__internal_d01fc042f62d264703055fd048498291f1b79a7c29c7295557a71db10bd7577d_prof);

        
        $__internal_871013e2e9fc937005519148aab7148a7990d908f1c7d4d18a7c7f692e626347->leave($__internal_871013e2e9fc937005519148aab7148a7990d908f1c7d4d18a7c7f692e626347_prof);

    }

    // line 318
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_59631191b3cfe5ee32248995b291dc14d46032faa8f2c67c82d96772f677c819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59631191b3cfe5ee32248995b291dc14d46032faa8f2c67c82d96772f677c819->enter($__internal_59631191b3cfe5ee32248995b291dc14d46032faa8f2c67c82d96772f677c819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_36cb22d927f953b3203427273b98f03d4416f08a05ee3950177d4c7b4354e20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cb22d927f953b3203427273b98f03d4416f08a05ee3950177d4c7b4354e20d->enter($__internal_36cb22d927f953b3203427273b98f03d4416f08a05ee3950177d4c7b4354e20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 319
        $context["force_error"] = true;
        // line 320
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_36cb22d927f953b3203427273b98f03d4416f08a05ee3950177d4c7b4354e20d->leave($__internal_36cb22d927f953b3203427273b98f03d4416f08a05ee3950177d4c7b4354e20d_prof);

        
        $__internal_59631191b3cfe5ee32248995b291dc14d46032faa8f2c67c82d96772f677c819->leave($__internal_59631191b3cfe5ee32248995b291dc14d46032faa8f2c67c82d96772f677c819_prof);

    }

    // line 323
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b2015657982bf15e9af03f5cae9a9a7f1057ab3c2736fb5053b6969acaf210f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2015657982bf15e9af03f5cae9a9a7f1057ab3c2736fb5053b6969acaf210f4->enter($__internal_b2015657982bf15e9af03f5cae9a9a7f1057ab3c2736fb5053b6969acaf210f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0478881d7265ca509dc9ab55b697c336d4627e1526e8f9e6e5320a387ba966d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0478881d7265ca509dc9ab55b697c336d4627e1526e8f9e6e5320a387ba966d1->enter($__internal_0478881d7265ca509dc9ab55b697c336d4627e1526e8f9e6e5320a387ba966d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 324
        $context["force_error"] = true;
        // line 325
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0478881d7265ca509dc9ab55b697c336d4627e1526e8f9e6e5320a387ba966d1->leave($__internal_0478881d7265ca509dc9ab55b697c336d4627e1526e8f9e6e5320a387ba966d1_prof);

        
        $__internal_b2015657982bf15e9af03f5cae9a9a7f1057ab3c2736fb5053b6969acaf210f4->leave($__internal_b2015657982bf15e9af03f5cae9a9a7f1057ab3c2736fb5053b6969acaf210f4_prof);

    }

    // line 328
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_bf43f0b3443b103028336818841c5c3e8ca719c81abe5da55359d744c546adee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf43f0b3443b103028336818841c5c3e8ca719c81abe5da55359d744c546adee->enter($__internal_bf43f0b3443b103028336818841c5c3e8ca719c81abe5da55359d744c546adee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_77e42d26bd54e5d42f42f49bbac82e1bdd417fc91307911dfff8cb04f2be1d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e42d26bd54e5d42f42f49bbac82e1bdd417fc91307911dfff8cb04f2be1d51->enter($__internal_77e42d26bd54e5d42f42f49bbac82e1bdd417fc91307911dfff8cb04f2be1d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 329
        $context["force_error"] = true;
        // line 330
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_77e42d26bd54e5d42f42f49bbac82e1bdd417fc91307911dfff8cb04f2be1d51->leave($__internal_77e42d26bd54e5d42f42f49bbac82e1bdd417fc91307911dfff8cb04f2be1d51_prof);

        
        $__internal_bf43f0b3443b103028336818841c5c3e8ca719c81abe5da55359d744c546adee->leave($__internal_bf43f0b3443b103028336818841c5c3e8ca719c81abe5da55359d744c546adee_prof);

    }

    // line 333
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_c5d57306d5ed1f7da0d82522e10dc02ad3f31be4d045136dcb11710131b60fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5d57306d5ed1f7da0d82522e10dc02ad3f31be4d045136dcb11710131b60fdb->enter($__internal_c5d57306d5ed1f7da0d82522e10dc02ad3f31be4d045136dcb11710131b60fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_af61180c51dfdb47591ba62577f0e15ac6b6d5f3fc253e560ad59e7259ea3765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af61180c51dfdb47591ba62577f0e15ac6b6d5f3fc253e560ad59e7259ea3765->enter($__internal_af61180c51dfdb47591ba62577f0e15ac6b6d5f3fc253e560ad59e7259ea3765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_af61180c51dfdb47591ba62577f0e15ac6b6d5f3fc253e560ad59e7259ea3765->leave($__internal_af61180c51dfdb47591ba62577f0e15ac6b6d5f3fc253e560ad59e7259ea3765_prof);

        
        $__internal_c5d57306d5ed1f7da0d82522e10dc02ad3f31be4d045136dcb11710131b60fdb->leave($__internal_c5d57306d5ed1f7da0d82522e10dc02ad3f31be4d045136dcb11710131b60fdb_prof);

    }

    // line 340
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_80d58c29f7af0900ebbb869aa983654dd69e8574796ed229b0b8f8dfab2954bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d58c29f7af0900ebbb869aa983654dd69e8574796ed229b0b8f8dfab2954bb->enter($__internal_80d58c29f7af0900ebbb869aa983654dd69e8574796ed229b0b8f8dfab2954bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_d5d119a9eb92b086714f06369e58df5a58e51f2b2a610b7dbdbf2d14a326f4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d119a9eb92b086714f06369e58df5a58e51f2b2a610b7dbdbf2d14a326f4d1->enter($__internal_d5d119a9eb92b086714f06369e58df5a58e51f2b2a610b7dbdbf2d14a326f4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_d5d119a9eb92b086714f06369e58df5a58e51f2b2a610b7dbdbf2d14a326f4d1->leave($__internal_d5d119a9eb92b086714f06369e58df5a58e51f2b2a610b7dbdbf2d14a326f4d1_prof);

        
        $__internal_80d58c29f7af0900ebbb869aa983654dd69e8574796ed229b0b8f8dfab2954bb->leave($__internal_80d58c29f7af0900ebbb869aa983654dd69e8574796ed229b0b8f8dfab2954bb_prof);

    }

    // line 348
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f4f59df2d200cbbccbc4caab22156f1db2ec42114cbec92878133efd72d99b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f59df2d200cbbccbc4caab22156f1db2ec42114cbec92878133efd72d99b9e->enter($__internal_f4f59df2d200cbbccbc4caab22156f1db2ec42114cbec92878133efd72d99b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_e5fac5434de7a064bfb3e4599b71e3097160dfdbf1b0cbea652444c2926800bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fac5434de7a064bfb3e4599b71e3097160dfdbf1b0cbea652444c2926800bc->enter($__internal_e5fac5434de7a064bfb3e4599b71e3097160dfdbf1b0cbea652444c2926800bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_e5fac5434de7a064bfb3e4599b71e3097160dfdbf1b0cbea652444c2926800bc->leave($__internal_e5fac5434de7a064bfb3e4599b71e3097160dfdbf1b0cbea652444c2926800bc_prof);

        
        $__internal_f4f59df2d200cbbccbc4caab22156f1db2ec42114cbec92878133efd72d99b9e->leave($__internal_f4f59df2d200cbbccbc4caab22156f1db2ec42114cbec92878133efd72d99b9e_prof);

    }

    // line 366
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_81f0c54807d87d27b6ebc4fd6263b1971ca69d5f20962f719b72113c5d35ef7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81f0c54807d87d27b6ebc4fd6263b1971ca69d5f20962f719b72113c5d35ef7c->enter($__internal_81f0c54807d87d27b6ebc4fd6263b1971ca69d5f20962f719b72113c5d35ef7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_f030c3bf033bde940f81cf8ab6ef5ece52e99ea72824febfa81897e89a71896a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f030c3bf033bde940f81cf8ab6ef5ece52e99ea72824febfa81897e89a71896a->enter($__internal_f030c3bf033bde940f81cf8ab6ef5ece52e99ea72824febfa81897e89a71896a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_f030c3bf033bde940f81cf8ab6ef5ece52e99ea72824febfa81897e89a71896a->leave($__internal_f030c3bf033bde940f81cf8ab6ef5ece52e99ea72824febfa81897e89a71896a_prof);

        
        $__internal_81f0c54807d87d27b6ebc4fd6263b1971ca69d5f20962f719b72113c5d35ef7c->leave($__internal_81f0c54807d87d27b6ebc4fd6263b1971ca69d5f20962f719b72113c5d35ef7c_prof);

    }

    // line 377
    public function block_empty_collection($context, array $blocks = array())
    {
        $__internal_bc03a390fd6c040bce5e78129f38ad83ce752582c26555941548f67a8711ba67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc03a390fd6c040bce5e78129f38ad83ce752582c26555941548f67a8711ba67->enter($__internal_bc03a390fd6c040bce5e78129f38ad83ce752582c26555941548f67a8711ba67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        $__internal_4d35b5f2869a2c1e3dea0cb1db71b78d685f607b39ac63dc0a6f5130107be4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d35b5f2869a2c1e3dea0cb1db71b78d685f607b39ac63dc0a6f5130107be4f1->enter($__internal_4d35b5f2869a2c1e3dea0cb1db71b78d685f607b39ac63dc0a6f5130107be4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "empty_collection"));

        // line 378
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 379
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
        
        $__internal_4d35b5f2869a2c1e3dea0cb1db71b78d685f607b39ac63dc0a6f5130107be4f1->leave($__internal_4d35b5f2869a2c1e3dea0cb1db71b78d685f607b39ac63dc0a6f5130107be4f1_prof);

        
        $__internal_bc03a390fd6c040bce5e78129f38ad83ce752582c26555941548f67a8711ba67->leave($__internal_bc03a390fd6c040bce5e78129f38ad83ce752582c26555941548f67a8711ba67_prof);

    }

    // line 383
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_eed77365b79fc2ab578419d62693829870a434e10be586b99db92696f03ed10c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed77365b79fc2ab578419d62693829870a434e10be586b99db92696f03ed10c->enter($__internal_eed77365b79fc2ab578419d62693829870a434e10be586b99db92696f03ed10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_c1c960af0cfd1192f6aecb925630664bb734fda161fd7106845d699f70127977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1c960af0cfd1192f6aecb925630664bb734fda161fd7106845d699f70127977->enter($__internal_c1c960af0cfd1192f6aecb925630664bb734fda161fd7106845d699f70127977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 384
        echo "    ";
        $context["force_error"] = true;
        // line 385
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_c1c960af0cfd1192f6aecb925630664bb734fda161fd7106845d699f70127977->leave($__internal_c1c960af0cfd1192f6aecb925630664bb734fda161fd7106845d699f70127977_prof);

        
        $__internal_eed77365b79fc2ab578419d62693829870a434e10be586b99db92696f03ed10c->leave($__internal_eed77365b79fc2ab578419d62693829870a434e10be586b99db92696f03ed10c_prof);

    }

    // line 388
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_ba2a96b0be4a9d06dce75aa71f084a402c513303e0a97a01d733702631a454ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba2a96b0be4a9d06dce75aa71f084a402c513303e0a97a01d733702631a454ad->enter($__internal_ba2a96b0be4a9d06dce75aa71f084a402c513303e0a97a01d733702631a454ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_ad99464e5dafb2ace66e38725b0a9008c96002de819d464713d7d788d2a90303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad99464e5dafb2ace66e38725b0a9008c96002de819d464713d7d788d2a90303->enter($__internal_ad99464e5dafb2ace66e38725b0a9008c96002de819d464713d7d788d2a90303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_ad99464e5dafb2ace66e38725b0a9008c96002de819d464713d7d788d2a90303->leave($__internal_ad99464e5dafb2ace66e38725b0a9008c96002de819d464713d7d788d2a90303_prof);

        
        $__internal_ba2a96b0be4a9d06dce75aa71f084a402c513303e0a97a01d733702631a454ad->leave($__internal_ba2a96b0be4a9d06dce75aa71f084a402c513303e0a97a01d733702631a454ad_prof);

    }

    // line 410
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_22417d71c21e45a297cdc010a823d3de17e77cf1ee1014b9de8bf690f2459154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22417d71c21e45a297cdc010a823d3de17e77cf1ee1014b9de8bf690f2459154->enter($__internal_22417d71c21e45a297cdc010a823d3de17e77cf1ee1014b9de8bf690f2459154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_dc99e66ce8ca5425719eb180635eb04cc953b2bcdc0a19991bcacb3745a72697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc99e66ce8ca5425719eb180635eb04cc953b2bcdc0a19991bcacb3745a72697->enter($__internal_dc99e66ce8ca5425719eb180635eb04cc953b2bcdc0a19991bcacb3745a72697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 411
        echo "    ";
        $context["force_error"] = true;
        // line 412
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_dc99e66ce8ca5425719eb180635eb04cc953b2bcdc0a19991bcacb3745a72697->leave($__internal_dc99e66ce8ca5425719eb180635eb04cc953b2bcdc0a19991bcacb3745a72697_prof);

        
        $__internal_22417d71c21e45a297cdc010a823d3de17e77cf1ee1014b9de8bf690f2459154->leave($__internal_22417d71c21e45a297cdc010a823d3de17e77cf1ee1014b9de8bf690f2459154_prof);

    }

    // line 415
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_a64059fc98e7f3184c7068dd70aa6e9efd5a4a6c20f95a199c3c0d9c4533132c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64059fc98e7f3184c7068dd70aa6e9efd5a4a6c20f95a199c3c0d9c4533132c->enter($__internal_a64059fc98e7f3184c7068dd70aa6e9efd5a4a6c20f95a199c3c0d9c4533132c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_a21c83416a35f7d0436f17d12667d8cb66870086effec6ad9a7fe3c8831a651e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21c83416a35f7d0436f17d12667d8cb66870086effec6ad9a7fe3c8831a651e->enter($__internal_a21c83416a35f7d0436f17d12667d8cb66870086effec6ad9a7fe3c8831a651e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_a21c83416a35f7d0436f17d12667d8cb66870086effec6ad9a7fe3c8831a651e->leave($__internal_a21c83416a35f7d0436f17d12667d8cb66870086effec6ad9a7fe3c8831a651e_prof);

        
        $__internal_a64059fc98e7f3184c7068dd70aa6e9efd5a4a6c20f95a199c3c0d9c4533132c->leave($__internal_a64059fc98e7f3184c7068dd70aa6e9efd5a4a6c20f95a199c3c0d9c4533132c_prof);

    }

    // line 439
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        $__internal_931cd8cbd57fe5d2cb36659657077dc6dcc1f6465ccc5b8504136521c6faeecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_931cd8cbd57fe5d2cb36659657077dc6dcc1f6465ccc5b8504136521c6faeecd->enter($__internal_931cd8cbd57fe5d2cb36659657077dc6dcc1f6465ccc5b8504136521c6faeecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

        $__internal_21b7926749b790eafa1528df2e480070abf247c49a2b7a0616a0c928415d268e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b7926749b790eafa1528df2e480070abf247c49a2b7a0616a0c928415d268e->enter($__internal_21b7926749b790eafa1528df2e480070abf247c49a2b7a0616a0c928415d268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_widget"));

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
        
        $__internal_21b7926749b790eafa1528df2e480070abf247c49a2b7a0616a0c928415d268e->leave($__internal_21b7926749b790eafa1528df2e480070abf247c49a2b7a0616a0c928415d268e_prof);

        
        $__internal_931cd8cbd57fe5d2cb36659657077dc6dcc1f6465ccc5b8504136521c6faeecd->leave($__internal_931cd8cbd57fe5d2cb36659657077dc6dcc1f6465ccc5b8504136521c6faeecd_prof);

    }

    // line 492
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_ec0d8711441bcd7861844848ca851a6087d5723ccb2dc218eba5cc5a8ee2bb31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0d8711441bcd7861844848ca851a6087d5723ccb2dc218eba5cc5a8ee2bb31->enter($__internal_ec0d8711441bcd7861844848ca851a6087d5723ccb2dc218eba5cc5a8ee2bb31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_fd615b5e1138990c27cd7015f1e5e54a301eb40d1cb8d02ef9b900af32d2c9c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd615b5e1138990c27cd7015f1e5e54a301eb40d1cb8d02ef9b900af32d2c9c6->enter($__internal_fd615b5e1138990c27cd7015f1e5e54a301eb40d1cb8d02ef9b900af32d2c9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

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
        
        $__internal_fd615b5e1138990c27cd7015f1e5e54a301eb40d1cb8d02ef9b900af32d2c9c6->leave($__internal_fd615b5e1138990c27cd7015f1e5e54a301eb40d1cb8d02ef9b900af32d2c9c6_prof);

        
        $__internal_ec0d8711441bcd7861844848ca851a6087d5723ccb2dc218eba5cc5a8ee2bb31->leave($__internal_ec0d8711441bcd7861844848ca851a6087d5723ccb2dc218eba5cc5a8ee2bb31_prof);

    }

    // line 523
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        $__internal_f77c16cc908e04f526deb23c784d2bb62bdfd87a7ec6753aa5e9a3d121b6a9c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77c16cc908e04f526deb23c784d2bb62bdfd87a7ec6753aa5e9a3d121b6a9c0->enter($__internal_f77c16cc908e04f526deb23c784d2bb62bdfd87a7ec6753aa5e9a3d121b6a9c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        $__internal_6bd6b1687af2c8c64f9a37dcacb7d11b1ba44ba213cbca2c38706408e17521e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd6b1687af2c8c64f9a37dcacb7d11b1ba44ba213cbca2c38706408e17521e9->enter($__internal_6bd6b1687af2c8c64f9a37dcacb7d11b1ba44ba213cbca2c38706408e17521e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_widget"));

        // line 524
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 525
($context["attr"] ?? $this->getContext($context, "attr")), array("data-easyadmin-autocomplete-max-results" => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("show.max_results"), "data-easyadmin-autocomplete-url" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 529
($context["autocomplete_entity_name"] ?? $this->getContext($context, "autocomplete_entity_name"))))))));
        // line 532
        echo "
";
        
        $__internal_6bd6b1687af2c8c64f9a37dcacb7d11b1ba44ba213cbca2c38706408e17521e9->leave($__internal_6bd6b1687af2c8c64f9a37dcacb7d11b1ba44ba213cbca2c38706408e17521e9_prof);

        
        $__internal_f77c16cc908e04f526deb23c784d2bb62bdfd87a7ec6753aa5e9a3d121b6a9c0->leave($__internal_f77c16cc908e04f526deb23c784d2bb62bdfd87a7ec6753aa5e9a3d121b6a9c0_prof);

    }

    // line 535
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        $__internal_ef10bbef867d14b155a8b7a8315cf902c126d7d6420733946ea8082abadb32f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef10bbef867d14b155a8b7a8315cf902c126d7d6420733946ea8082abadb32f7->enter($__internal_ef10bbef867d14b155a8b7a8315cf902c126d7d6420733946ea8082abadb32f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        $__internal_56d370ac8a8a0ccbba37e91ed961deb1f9b7b946e70ba574087ded1500cce4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d370ac8a8a0ccbba37e91ed961deb1f9b7b946e70ba574087ded1500cce4d1->enter($__internal_56d370ac8a8a0ccbba37e91ed961deb1f9b7b946e70ba574087ded1500cce4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_autocomplete_inner_label"));

        // line 536
        echo "    ";
        $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array());
        // line 537
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_56d370ac8a8a0ccbba37e91ed961deb1f9b7b946e70ba574087ded1500cce4d1->leave($__internal_56d370ac8a8a0ccbba37e91ed961deb1f9b7b946e70ba574087ded1500cce4d1_prof);

        
        $__internal_ef10bbef867d14b155a8b7a8315cf902c126d7d6420733946ea8082abadb32f7->leave($__internal_ef10bbef867d14b155a8b7a8315cf902c126d7d6420733946ea8082abadb32f7_prof);

    }

    // line 541
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        $__internal_5f4f6a104a1d45c9301b43c02d2ad73b995f24bd77fa4a82746577ed72023430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f4f6a104a1d45c9301b43c02d2ad73b995f24bd77fa4a82746577ed72023430->enter($__internal_5f4f6a104a1d45c9301b43c02d2ad73b995f24bd77fa4a82746577ed72023430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        $__internal_bfa1d798c0e3d9e68b46d7fb9309eaa533b2958660c40450f1a27a9bcbe2fb01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa1d798c0e3d9e68b46d7fb9309eaa533b2958660c40450f1a27a9bcbe2fb01->enter($__internal_bfa1d798c0e3d9e68b46d7fb9309eaa533b2958660c40450f1a27a9bcbe2fb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_divider_row"));

        // line 542
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
        
        $__internal_bfa1d798c0e3d9e68b46d7fb9309eaa533b2958660c40450f1a27a9bcbe2fb01->leave($__internal_bfa1d798c0e3d9e68b46d7fb9309eaa533b2958660c40450f1a27a9bcbe2fb01_prof);

        
        $__internal_5f4f6a104a1d45c9301b43c02d2ad73b995f24bd77fa4a82746577ed72023430->leave($__internal_5f4f6a104a1d45c9301b43c02d2ad73b995f24bd77fa4a82746577ed72023430_prof);

    }

    // line 548
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        $__internal_54b8d6325b2931a394ec9129d8e79bd0394c630d0863f763012be97c7e2436e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54b8d6325b2931a394ec9129d8e79bd0394c630d0863f763012be97c7e2436e2->enter($__internal_54b8d6325b2931a394ec9129d8e79bd0394c630d0863f763012be97c7e2436e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

        $__internal_4ecdd780c036459530f2d50d313446ab70164db576274c7c89f56c0d143fd930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecdd780c036459530f2d50d313446ab70164db576274c7c89f56c0d143fd930->enter($__internal_4ecdd780c036459530f2d50d313446ab70164db576274c7c89f56c0d143fd930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "easyadmin_section_row"));

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
        
        $__internal_4ecdd780c036459530f2d50d313446ab70164db576274c7c89f56c0d143fd930->leave($__internal_4ecdd780c036459530f2d50d313446ab70164db576274c7c89f56c0d143fd930_prof);

        
        $__internal_54b8d6325b2931a394ec9129d8e79bd0394c630d0863f763012be97c7e2436e2->leave($__internal_54b8d6325b2931a394ec9129d8e79bd0394c630d0863f763012be97c7e2436e2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:form:bootstrap_3_layout.html.twig";
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
", "EasyAdminBundle:form:bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}
