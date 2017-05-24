<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_fb1b3fc955b8e247288d7f0f6a3023be090c2833de096eb4c0d01bb82ddb4a75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aad042db195ba6cb3d5e2572d1817e5226de965c656fa134449fe3f8be41847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aad042db195ba6cb3d5e2572d1817e5226de965c656fa134449fe3f8be41847->enter($__internal_1aad042db195ba6cb3d5e2572d1817e5226de965c656fa134449fe3f8be41847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_aecd4113482a36b8c13c0d0f77e1b32ee4b2813a4bc40a9582785da4e2a31a60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecd4113482a36b8c13c0d0f77e1b32ee4b2813a4bc40a9582785da4e2a31a60->enter($__internal_aecd4113482a36b8c13c0d0f77e1b32ee4b2813a4bc40a9582785da4e2a31a60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 109
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 133
        echo "
";
        // line 134
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 155
        echo "
";
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('form_label', $context, $blocks);
        // line 162
        echo "
";
        // line 163
        $this->displayBlock('choice_label', $context, $blocks);
        // line 168
        echo "
";
        // line 169
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 172
        echo "
";
        // line 173
        $this->displayBlock('radio_label', $context, $blocks);
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 201
        echo "
";
        // line 203
        echo "
";
        // line 204
        $this->displayBlock('form_row', $context, $blocks);
        // line 211
        echo "
";
        // line 212
        $this->displayBlock('button_row', $context, $blocks);
        // line 217
        echo "
";
        // line 218
        $this->displayBlock('choice_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('date_row', $context, $blocks);
        // line 227
        echo "
";
        // line 228
        $this->displayBlock('time_row', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 237
        echo "
";
        // line 238
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 244
        echo "
";
        // line 245
        $this->displayBlock('radio_row', $context, $blocks);
        // line 251
        echo "
";
        // line 253
        echo "
";
        // line 254
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_1aad042db195ba6cb3d5e2572d1817e5226de965c656fa134449fe3f8be41847->leave($__internal_1aad042db195ba6cb3d5e2572d1817e5226de965c656fa134449fe3f8be41847_prof);

        
        $__internal_aecd4113482a36b8c13c0d0f77e1b32ee4b2813a4bc40a9582785da4e2a31a60->leave($__internal_aecd4113482a36b8c13c0d0f77e1b32ee4b2813a4bc40a9582785da4e2a31a60_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_818056080d883ffa724161e0d81a2cd67a53010ea20c3d204504f4630d5f8d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818056080d883ffa724161e0d81a2cd67a53010ea20c3d204504f4630d5f8d29->enter($__internal_818056080d883ffa724161e0d81a2cd67a53010ea20c3d204504f4630d5f8d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_b345e0dcf7d58a46367360ea044aa73703fd2408649c0ab584bfdce90df89fd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b345e0dcf7d58a46367360ea044aa73703fd2408649c0ab584bfdce90df89fd2->enter($__internal_b345e0dcf7d58a46367360ea044aa73703fd2408649c0ab584bfdce90df89fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b345e0dcf7d58a46367360ea044aa73703fd2408649c0ab584bfdce90df89fd2->leave($__internal_b345e0dcf7d58a46367360ea044aa73703fd2408649c0ab584bfdce90df89fd2_prof);

        
        $__internal_818056080d883ffa724161e0d81a2cd67a53010ea20c3d204504f4630d5f8d29->leave($__internal_818056080d883ffa724161e0d81a2cd67a53010ea20c3d204504f4630d5f8d29_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_f443d9b67d54eb4b94cd3242912723a2e60feb59bcf3437d59e23e3611a866f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f443d9b67d54eb4b94cd3242912723a2e60feb59bcf3437d59e23e3611a866f2->enter($__internal_f443d9b67d54eb4b94cd3242912723a2e60feb59bcf3437d59e23e3611a866f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_62d945ab8f5f1fcc75a2a47d37c3a7dbdb38e7819f1c59f7ff21c1b90dcf3c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d945ab8f5f1fcc75a2a47d37c3a7dbdb38e7819f1c59f7ff21c1b90dcf3c81->enter($__internal_62d945ab8f5f1fcc75a2a47d37c3a7dbdb38e7819f1c59f7ff21c1b90dcf3c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_62d945ab8f5f1fcc75a2a47d37c3a7dbdb38e7819f1c59f7ff21c1b90dcf3c81->leave($__internal_62d945ab8f5f1fcc75a2a47d37c3a7dbdb38e7819f1c59f7ff21c1b90dcf3c81_prof);

        
        $__internal_f443d9b67d54eb4b94cd3242912723a2e60feb59bcf3437d59e23e3611a866f2->leave($__internal_f443d9b67d54eb4b94cd3242912723a2e60feb59bcf3437d59e23e3611a866f2_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_3ee14892dfd5f008d6ddb1b1a9dd0a54541b22670fb18d5e9a9b2e915fbf0095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee14892dfd5f008d6ddb1b1a9dd0a54541b22670fb18d5e9a9b2e915fbf0095->enter($__internal_3ee14892dfd5f008d6ddb1b1a9dd0a54541b22670fb18d5e9a9b2e915fbf0095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f46e8f37f52237c3dbbc09e1bcdad9976eaaf8d6731fa3da42c0242858fcc7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46e8f37f52237c3dbbc09e1bcdad9976eaaf8d6731fa3da42c0242858fcc7d0->enter($__internal_f46e8f37f52237c3dbbc09e1bcdad9976eaaf8d6731fa3da42c0242858fcc7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_f46e8f37f52237c3dbbc09e1bcdad9976eaaf8d6731fa3da42c0242858fcc7d0->leave($__internal_f46e8f37f52237c3dbbc09e1bcdad9976eaaf8d6731fa3da42c0242858fcc7d0_prof);

        
        $__internal_3ee14892dfd5f008d6ddb1b1a9dd0a54541b22670fb18d5e9a9b2e915fbf0095->leave($__internal_3ee14892dfd5f008d6ddb1b1a9dd0a54541b22670fb18d5e9a9b2e915fbf0095_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b072adb9406a2941a25907c944a9087f51ec19dfdced292a36d21bceea3c8326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b072adb9406a2941a25907c944a9087f51ec19dfdced292a36d21bceea3c8326->enter($__internal_b072adb9406a2941a25907c944a9087f51ec19dfdced292a36d21bceea3c8326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_72b38fb483b4a7dadc7ed19ff55d532f55fd2a8ddc3700da30ea0b6b169fe6f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b38fb483b4a7dadc7ed19ff55d532f55fd2a8ddc3700da30ea0b6b169fe6f5->enter($__internal_72b38fb483b4a7dadc7ed19ff55d532f55fd2a8ddc3700da30ea0b6b169fe6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_e26ac84217bc1162b6a061cfe62883c88599916a049e49187a9f371a9825d583 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_01d8184e3d658d8c94e4b42689cfee8c16d1aba6ab17555b31cf6a61a30ace24 = "{{") && ('' === $__internal_01d8184e3d658d8c94e4b42689cfee8c16d1aba6ab17555b31cf6a61a30ace24 || 0 === strpos($__internal_e26ac84217bc1162b6a061cfe62883c88599916a049e49187a9f371a9825d583, $__internal_01d8184e3d658d8c94e4b42689cfee8c16d1aba6ab17555b31cf6a61a30ace24)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_72b38fb483b4a7dadc7ed19ff55d532f55fd2a8ddc3700da30ea0b6b169fe6f5->leave($__internal_72b38fb483b4a7dadc7ed19ff55d532f55fd2a8ddc3700da30ea0b6b169fe6f5_prof);

        
        $__internal_b072adb9406a2941a25907c944a9087f51ec19dfdced292a36d21bceea3c8326->leave($__internal_b072adb9406a2941a25907c944a9087f51ec19dfdced292a36d21bceea3c8326_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0f85cf584b1720337cec5fc5a351e16a5c45a428fffc45fd21e4535564ef6665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f85cf584b1720337cec5fc5a351e16a5c45a428fffc45fd21e4535564ef6665->enter($__internal_0f85cf584b1720337cec5fc5a351e16a5c45a428fffc45fd21e4535564ef6665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_082e8374ed4592c13ec8b32e7bb4adf1c2bb21343617e08346b7d5e0e3ccafb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082e8374ed4592c13ec8b32e7bb4adf1c2bb21343617e08346b7d5e0e3ccafb3->enter($__internal_082e8374ed4592c13ec8b32e7bb4adf1c2bb21343617e08346b7d5e0e3ccafb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_082e8374ed4592c13ec8b32e7bb4adf1c2bb21343617e08346b7d5e0e3ccafb3->leave($__internal_082e8374ed4592c13ec8b32e7bb4adf1c2bb21343617e08346b7d5e0e3ccafb3_prof);

        
        $__internal_0f85cf584b1720337cec5fc5a351e16a5c45a428fffc45fd21e4535564ef6665->leave($__internal_0f85cf584b1720337cec5fc5a351e16a5c45a428fffc45fd21e4535564ef6665_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_952d0e0159be8749a267538671025851fbf2a3286cb1340c44fcd817133c639b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_952d0e0159be8749a267538671025851fbf2a3286cb1340c44fcd817133c639b->enter($__internal_952d0e0159be8749a267538671025851fbf2a3286cb1340c44fcd817133c639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_5b8077af33b9b94f083e590d6fb1bb6d5f3c3d69685c185d6a1650a9356b5d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b8077af33b9b94f083e590d6fb1bb6d5f3c3d69685c185d6a1650a9356b5d4e->enter($__internal_5b8077af33b9b94f083e590d6fb1bb6d5f3c3d69685c185d6a1650a9356b5d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_5b8077af33b9b94f083e590d6fb1bb6d5f3c3d69685c185d6a1650a9356b5d4e->leave($__internal_5b8077af33b9b94f083e590d6fb1bb6d5f3c3d69685c185d6a1650a9356b5d4e_prof);

        
        $__internal_952d0e0159be8749a267538671025851fbf2a3286cb1340c44fcd817133c639b->leave($__internal_952d0e0159be8749a267538671025851fbf2a3286cb1340c44fcd817133c639b_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_86da8f686691660612469b829bbbde3049c015bd5e1dacc24c161534da8f5300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86da8f686691660612469b829bbbde3049c015bd5e1dacc24c161534da8f5300->enter($__internal_86da8f686691660612469b829bbbde3049c015bd5e1dacc24c161534da8f5300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_4bf7240b89668424c0d5311479c4912933206a4a88926c0b8700c8b259638f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bf7240b89668424c0d5311479c4912933206a4a88926c0b8700c8b259638f13->enter($__internal_4bf7240b89668424c0d5311479c4912933206a4a88926c0b8700c8b259638f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_4bf7240b89668424c0d5311479c4912933206a4a88926c0b8700c8b259638f13->leave($__internal_4bf7240b89668424c0d5311479c4912933206a4a88926c0b8700c8b259638f13_prof);

        
        $__internal_86da8f686691660612469b829bbbde3049c015bd5e1dacc24c161534da8f5300->leave($__internal_86da8f686691660612469b829bbbde3049c015bd5e1dacc24c161534da8f5300_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_77713d2252e6fa1ed5214250a9d72d6667c8dce8bf97f86ba1f64fdbef1112d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77713d2252e6fa1ed5214250a9d72d6667c8dce8bf97f86ba1f64fdbef1112d0->enter($__internal_77713d2252e6fa1ed5214250a9d72d6667c8dce8bf97f86ba1f64fdbef1112d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8c2cee42239392916e5303672d739f83053f8b28afbf9947c1ab32d0b85f20cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c2cee42239392916e5303672d739f83053f8b28afbf9947c1ab32d0b85f20cb->enter($__internal_8c2cee42239392916e5303672d739f83053f8b28afbf9947c1ab32d0b85f20cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_8c2cee42239392916e5303672d739f83053f8b28afbf9947c1ab32d0b85f20cb->leave($__internal_8c2cee42239392916e5303672d739f83053f8b28afbf9947c1ab32d0b85f20cb_prof);

        
        $__internal_77713d2252e6fa1ed5214250a9d72d6667c8dce8bf97f86ba1f64fdbef1112d0->leave($__internal_77713d2252e6fa1ed5214250a9d72d6667c8dce8bf97f86ba1f64fdbef1112d0_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_97e7e5b2c91be91a90a76d43d7cdeb84d8a98378e0b9dc3853588f50d2802131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97e7e5b2c91be91a90a76d43d7cdeb84d8a98378e0b9dc3853588f50d2802131->enter($__internal_97e7e5b2c91be91a90a76d43d7cdeb84d8a98378e0b9dc3853588f50d2802131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_c7110963da7c26d8bcedb74d86ea8c4629e85965399f33016a6b69c4a0d3eb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7110963da7c26d8bcedb74d86ea8c4629e85965399f33016a6b69c4a0d3eb88->enter($__internal_c7110963da7c26d8bcedb74d86ea8c4629e85965399f33016a6b69c4a0d3eb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
            }
            // line 98
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
            }
            // line 99
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
            }
            // line 100
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
            }
            // line 101
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
            }
            // line 102
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
            }
            // line 103
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
            }
            // line 104
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 105
            echo "</div>";
        }
        
        $__internal_c7110963da7c26d8bcedb74d86ea8c4629e85965399f33016a6b69c4a0d3eb88->leave($__internal_c7110963da7c26d8bcedb74d86ea8c4629e85965399f33016a6b69c4a0d3eb88_prof);

        
        $__internal_97e7e5b2c91be91a90a76d43d7cdeb84d8a98378e0b9dc3853588f50d2802131->leave($__internal_97e7e5b2c91be91a90a76d43d7cdeb84d8a98378e0b9dc3853588f50d2802131_prof);

    }

    // line 109
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_311fef30b95365e808bb32ca2d3c6520ab943acce45255a855f69e9f09e47333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311fef30b95365e808bb32ca2d3c6520ab943acce45255a855f69e9f09e47333->enter($__internal_311fef30b95365e808bb32ca2d3c6520ab943acce45255a855f69e9f09e47333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_52aa42d68c343ea3aa622686c3d4e7ccca47874e1b7360386fef1ea01d0cbc42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52aa42d68c343ea3aa622686c3d4e7ccca47874e1b7360386fef1ea01d0cbc42->enter($__internal_52aa42d68c343ea3aa622686c3d4e7ccca47874e1b7360386fef1ea01d0cbc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 110
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 111
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_52aa42d68c343ea3aa622686c3d4e7ccca47874e1b7360386fef1ea01d0cbc42->leave($__internal_52aa42d68c343ea3aa622686c3d4e7ccca47874e1b7360386fef1ea01d0cbc42_prof);

        
        $__internal_311fef30b95365e808bb32ca2d3c6520ab943acce45255a855f69e9f09e47333->leave($__internal_311fef30b95365e808bb32ca2d3c6520ab943acce45255a855f69e9f09e47333_prof);

    }

    // line 114
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c1ff6487b5ec26a937d7364fab41cbd958abb35ceb764492d10bc9a6a4baaa42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ff6487b5ec26a937d7364fab41cbd958abb35ceb764492d10bc9a6a4baaa42->enter($__internal_c1ff6487b5ec26a937d7364fab41cbd958abb35ceb764492d10bc9a6a4baaa42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_9c2a52145c286a643e0546f7fb3cad802ba61399d5506c04e780154dade44619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c2a52145c286a643e0546f7fb3cad802ba61399d5506c04e780154dade44619->enter($__internal_9c2a52145c286a643e0546f7fb3cad802ba61399d5506c04e780154dade44619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 115
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 117
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 118
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 119
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 123
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 124
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 125
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 126
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 127
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "</div>";
        }
        
        $__internal_9c2a52145c286a643e0546f7fb3cad802ba61399d5506c04e780154dade44619->leave($__internal_9c2a52145c286a643e0546f7fb3cad802ba61399d5506c04e780154dade44619_prof);

        
        $__internal_c1ff6487b5ec26a937d7364fab41cbd958abb35ceb764492d10bc9a6a4baaa42->leave($__internal_c1ff6487b5ec26a937d7364fab41cbd958abb35ceb764492d10bc9a6a4baaa42_prof);

    }

    // line 134
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_f1406c557dedb0c2e91f8bd70c44c12dace37287343dfdc49efc40362ff5c226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1406c557dedb0c2e91f8bd70c44c12dace37287343dfdc49efc40362ff5c226->enter($__internal_f1406c557dedb0c2e91f8bd70c44c12dace37287343dfdc49efc40362ff5c226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_59ba46926ca9563e8b7ab4eabc2dc3ce020f39697ad5c76cb1220980f65cb21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59ba46926ca9563e8b7ab4eabc2dc3ce020f39697ad5c76cb1220980f65cb21e->enter($__internal_59ba46926ca9563e8b7ab4eabc2dc3ce020f39697ad5c76cb1220980f65cb21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 135
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 136
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 137
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 139
            echo "<div class=\"checkbox\">";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 141
            echo "</div>";
        }
        
        $__internal_59ba46926ca9563e8b7ab4eabc2dc3ce020f39697ad5c76cb1220980f65cb21e->leave($__internal_59ba46926ca9563e8b7ab4eabc2dc3ce020f39697ad5c76cb1220980f65cb21e_prof);

        
        $__internal_f1406c557dedb0c2e91f8bd70c44c12dace37287343dfdc49efc40362ff5c226->leave($__internal_f1406c557dedb0c2e91f8bd70c44c12dace37287343dfdc49efc40362ff5c226_prof);

    }

    // line 145
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_6fecdcdf68d5f7557a8d7b79487b2111728bac9ef5a9494f237b0c1f12907abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fecdcdf68d5f7557a8d7b79487b2111728bac9ef5a9494f237b0c1f12907abc->enter($__internal_6fecdcdf68d5f7557a8d7b79487b2111728bac9ef5a9494f237b0c1f12907abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_de1f463c369d262510d5ce9c07c2c9af2462f7d885aec06cf50debef14d90611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1f463c369d262510d5ce9c07c2c9af2462f7d885aec06cf50debef14d90611->enter($__internal_de1f463c369d262510d5ce9c07c2c9af2462f7d885aec06cf50debef14d90611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 146
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 147
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 150
            echo "<div class=\"radio\">";
            // line 151
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 152
            echo "</div>";
        }
        
        $__internal_de1f463c369d262510d5ce9c07c2c9af2462f7d885aec06cf50debef14d90611->leave($__internal_de1f463c369d262510d5ce9c07c2c9af2462f7d885aec06cf50debef14d90611_prof);

        
        $__internal_6fecdcdf68d5f7557a8d7b79487b2111728bac9ef5a9494f237b0c1f12907abc->leave($__internal_6fecdcdf68d5f7557a8d7b79487b2111728bac9ef5a9494f237b0c1f12907abc_prof);

    }

    // line 158
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_8d200154d20477f370619c40daffc17e2db76c5045ef33235035be32a6517211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d200154d20477f370619c40daffc17e2db76c5045ef33235035be32a6517211->enter($__internal_8d200154d20477f370619c40daffc17e2db76c5045ef33235035be32a6517211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9815ec06647935239dcc01bc7d38b08312dfd2b5d9599dba63a189f5b6061d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9815ec06647935239dcc01bc7d38b08312dfd2b5d9599dba63a189f5b6061d3e->enter($__internal_9815ec06647935239dcc01bc7d38b08312dfd2b5d9599dba63a189f5b6061d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 159
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 160
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_9815ec06647935239dcc01bc7d38b08312dfd2b5d9599dba63a189f5b6061d3e->leave($__internal_9815ec06647935239dcc01bc7d38b08312dfd2b5d9599dba63a189f5b6061d3e_prof);

        
        $__internal_8d200154d20477f370619c40daffc17e2db76c5045ef33235035be32a6517211->leave($__internal_8d200154d20477f370619c40daffc17e2db76c5045ef33235035be32a6517211_prof);

    }

    // line 163
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_546595f0176a34872d05a2805ea27784977851d74139a25df252d1177b081dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546595f0176a34872d05a2805ea27784977851d74139a25df252d1177b081dc6->enter($__internal_546595f0176a34872d05a2805ea27784977851d74139a25df252d1177b081dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_1851d6280fb0adfaaebdff508fa0065a00f4b8e46c811a1338a8d55980aac9d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1851d6280fb0adfaaebdff508fa0065a00f4b8e46c811a1338a8d55980aac9d5->enter($__internal_1851d6280fb0adfaaebdff508fa0065a00f4b8e46c811a1338a8d55980aac9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 165
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 166
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_1851d6280fb0adfaaebdff508fa0065a00f4b8e46c811a1338a8d55980aac9d5->leave($__internal_1851d6280fb0adfaaebdff508fa0065a00f4b8e46c811a1338a8d55980aac9d5_prof);

        
        $__internal_546595f0176a34872d05a2805ea27784977851d74139a25df252d1177b081dc6->leave($__internal_546595f0176a34872d05a2805ea27784977851d74139a25df252d1177b081dc6_prof);

    }

    // line 169
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_dfa30cc35c504561f5d2a9440d60550bcc2d514be72502ed46151d96d439ec6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa30cc35c504561f5d2a9440d60550bcc2d514be72502ed46151d96d439ec6c->enter($__internal_dfa30cc35c504561f5d2a9440d60550bcc2d514be72502ed46151d96d439ec6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_491e483d4d434a1b90411bd42e7c3e05739e85ebd775121791bb4fbed9b5ad8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491e483d4d434a1b90411bd42e7c3e05739e85ebd775121791bb4fbed9b5ad8c->enter($__internal_491e483d4d434a1b90411bd42e7c3e05739e85ebd775121791bb4fbed9b5ad8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 170
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_491e483d4d434a1b90411bd42e7c3e05739e85ebd775121791bb4fbed9b5ad8c->leave($__internal_491e483d4d434a1b90411bd42e7c3e05739e85ebd775121791bb4fbed9b5ad8c_prof);

        
        $__internal_dfa30cc35c504561f5d2a9440d60550bcc2d514be72502ed46151d96d439ec6c->leave($__internal_dfa30cc35c504561f5d2a9440d60550bcc2d514be72502ed46151d96d439ec6c_prof);

    }

    // line 173
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_57a084e923863027649645ad3a86c480a211fd2d46d6e9d7b0c0ee6d53157336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a084e923863027649645ad3a86c480a211fd2d46d6e9d7b0c0ee6d53157336->enter($__internal_57a084e923863027649645ad3a86c480a211fd2d46d6e9d7b0c0ee6d53157336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_21fff8a5a04d72af4562989954851c5f8aee012ef68e3ffe31de2a50441d88d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21fff8a5a04d72af4562989954851c5f8aee012ef68e3ffe31de2a50441d88d1->enter($__internal_21fff8a5a04d72af4562989954851c5f8aee012ef68e3ffe31de2a50441d88d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_21fff8a5a04d72af4562989954851c5f8aee012ef68e3ffe31de2a50441d88d1->leave($__internal_21fff8a5a04d72af4562989954851c5f8aee012ef68e3ffe31de2a50441d88d1_prof);

        
        $__internal_57a084e923863027649645ad3a86c480a211fd2d46d6e9d7b0c0ee6d53157336->leave($__internal_57a084e923863027649645ad3a86c480a211fd2d46d6e9d7b0c0ee6d53157336_prof);

    }

    // line 177
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_d7d606b63f15ef3ab1b3f49d4d5a393c16113a3eb8dc33cfd793e1e61642bd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d606b63f15ef3ab1b3f49d4d5a393c16113a3eb8dc33cfd793e1e61642bd27->enter($__internal_d7d606b63f15ef3ab1b3f49d4d5a393c16113a3eb8dc33cfd793e1e61642bd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_97c5333aadcda3491623dbd1a669788d57f8f0e19043514e255fba77be592071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c5333aadcda3491623dbd1a669788d57f8f0e19043514e255fba77be592071->enter($__internal_97c5333aadcda3491623dbd1a669788d57f8f0e19043514e255fba77be592071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 178
        echo "    ";
        // line 179
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 180
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 181
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 182
                echo "        ";
            }
            // line 183
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 184
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 185
                echo "        ";
            }
            // line 186
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 187
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 188
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 189
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 190
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 193
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 196
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
            // line 197
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 198
            echo "</label>
    ";
        }
        
        $__internal_97c5333aadcda3491623dbd1a669788d57f8f0e19043514e255fba77be592071->leave($__internal_97c5333aadcda3491623dbd1a669788d57f8f0e19043514e255fba77be592071_prof);

        
        $__internal_d7d606b63f15ef3ab1b3f49d4d5a393c16113a3eb8dc33cfd793e1e61642bd27->leave($__internal_d7d606b63f15ef3ab1b3f49d4d5a393c16113a3eb8dc33cfd793e1e61642bd27_prof);

    }

    // line 204
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d2b8f34a1706786a1b802464f94574992cfcd31aca5ffa68f9d0c4485b04db04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b8f34a1706786a1b802464f94574992cfcd31aca5ffa68f9d0c4485b04db04->enter($__internal_d2b8f34a1706786a1b802464f94574992cfcd31aca5ffa68f9d0c4485b04db04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_9cab1bfb11d1c42f1d2b3883a0aa036ea404260930a53e4f427f188b6cebaf71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cab1bfb11d1c42f1d2b3883a0aa036ea404260930a53e4f427f188b6cebaf71->enter($__internal_9cab1bfb11d1c42f1d2b3883a0aa036ea404260930a53e4f427f188b6cebaf71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 205
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 209
        echo "</div>";
        
        $__internal_9cab1bfb11d1c42f1d2b3883a0aa036ea404260930a53e4f427f188b6cebaf71->leave($__internal_9cab1bfb11d1c42f1d2b3883a0aa036ea404260930a53e4f427f188b6cebaf71_prof);

        
        $__internal_d2b8f34a1706786a1b802464f94574992cfcd31aca5ffa68f9d0c4485b04db04->leave($__internal_d2b8f34a1706786a1b802464f94574992cfcd31aca5ffa68f9d0c4485b04db04_prof);

    }

    // line 212
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_7af4e26439380bbd2276e3ac47cbd8f8c33d9b5207f0382ec20cf79baa80d939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af4e26439380bbd2276e3ac47cbd8f8c33d9b5207f0382ec20cf79baa80d939->enter($__internal_7af4e26439380bbd2276e3ac47cbd8f8c33d9b5207f0382ec20cf79baa80d939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6febe2ccd794e2c5cb85eb021178f86bb80fd82848d8648e24b74e4ddcd21642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6febe2ccd794e2c5cb85eb021178f86bb80fd82848d8648e24b74e4ddcd21642->enter($__internal_6febe2ccd794e2c5cb85eb021178f86bb80fd82848d8648e24b74e4ddcd21642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 213
        echo "<div class=\"form-group\">";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 215
        echo "</div>";
        
        $__internal_6febe2ccd794e2c5cb85eb021178f86bb80fd82848d8648e24b74e4ddcd21642->leave($__internal_6febe2ccd794e2c5cb85eb021178f86bb80fd82848d8648e24b74e4ddcd21642_prof);

        
        $__internal_7af4e26439380bbd2276e3ac47cbd8f8c33d9b5207f0382ec20cf79baa80d939->leave($__internal_7af4e26439380bbd2276e3ac47cbd8f8c33d9b5207f0382ec20cf79baa80d939_prof);

    }

    // line 218
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_38bb5f4d4144bc9e78497f80e6d7c0a4f291dadeec8e21670e31ad2d07400b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38bb5f4d4144bc9e78497f80e6d7c0a4f291dadeec8e21670e31ad2d07400b1d->enter($__internal_38bb5f4d4144bc9e78497f80e6d7c0a4f291dadeec8e21670e31ad2d07400b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_b7d0d16b3a49b29f1bd14cad404e17d9a19e512068b7046c7e3b2162fcb8e288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7d0d16b3a49b29f1bd14cad404e17d9a19e512068b7046c7e3b2162fcb8e288->enter($__internal_b7d0d16b3a49b29f1bd14cad404e17d9a19e512068b7046c7e3b2162fcb8e288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 219
        $context["force_error"] = true;
        // line 220
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b7d0d16b3a49b29f1bd14cad404e17d9a19e512068b7046c7e3b2162fcb8e288->leave($__internal_b7d0d16b3a49b29f1bd14cad404e17d9a19e512068b7046c7e3b2162fcb8e288_prof);

        
        $__internal_38bb5f4d4144bc9e78497f80e6d7c0a4f291dadeec8e21670e31ad2d07400b1d->leave($__internal_38bb5f4d4144bc9e78497f80e6d7c0a4f291dadeec8e21670e31ad2d07400b1d_prof);

    }

    // line 223
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_286565e51fa715258566299070eaca19f4737e1adb1058d70d0e72a0540d6bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286565e51fa715258566299070eaca19f4737e1adb1058d70d0e72a0540d6bac->enter($__internal_286565e51fa715258566299070eaca19f4737e1adb1058d70d0e72a0540d6bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_14c1c750c89c4a4c3167d17d115abaa7291ebce4460a462646fdd50449824425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c1c750c89c4a4c3167d17d115abaa7291ebce4460a462646fdd50449824425->enter($__internal_14c1c750c89c4a4c3167d17d115abaa7291ebce4460a462646fdd50449824425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 224
        $context["force_error"] = true;
        // line 225
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_14c1c750c89c4a4c3167d17d115abaa7291ebce4460a462646fdd50449824425->leave($__internal_14c1c750c89c4a4c3167d17d115abaa7291ebce4460a462646fdd50449824425_prof);

        
        $__internal_286565e51fa715258566299070eaca19f4737e1adb1058d70d0e72a0540d6bac->leave($__internal_286565e51fa715258566299070eaca19f4737e1adb1058d70d0e72a0540d6bac_prof);

    }

    // line 228
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_fada29e465deb3d95f46d3bb3f99172e09d060cea5fc750310f4ae16eecec21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fada29e465deb3d95f46d3bb3f99172e09d060cea5fc750310f4ae16eecec21a->enter($__internal_fada29e465deb3d95f46d3bb3f99172e09d060cea5fc750310f4ae16eecec21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_02a84539644369f84f29d3141081b1e7b55c52c125b6df54da3377ed209d4ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a84539644369f84f29d3141081b1e7b55c52c125b6df54da3377ed209d4ee2->enter($__internal_02a84539644369f84f29d3141081b1e7b55c52c125b6df54da3377ed209d4ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 229
        $context["force_error"] = true;
        // line 230
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_02a84539644369f84f29d3141081b1e7b55c52c125b6df54da3377ed209d4ee2->leave($__internal_02a84539644369f84f29d3141081b1e7b55c52c125b6df54da3377ed209d4ee2_prof);

        
        $__internal_fada29e465deb3d95f46d3bb3f99172e09d060cea5fc750310f4ae16eecec21a->leave($__internal_fada29e465deb3d95f46d3bb3f99172e09d060cea5fc750310f4ae16eecec21a_prof);

    }

    // line 233
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_ade02f9bfbcb96440405e08ceb00dcf50cd356260034501ec1af14de484e0cd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade02f9bfbcb96440405e08ceb00dcf50cd356260034501ec1af14de484e0cd6->enter($__internal_ade02f9bfbcb96440405e08ceb00dcf50cd356260034501ec1af14de484e0cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_141458af76b4cee4b84f09639231085d64cc6f55e240bd1776456d9f401b6781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_141458af76b4cee4b84f09639231085d64cc6f55e240bd1776456d9f401b6781->enter($__internal_141458af76b4cee4b84f09639231085d64cc6f55e240bd1776456d9f401b6781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 234
        $context["force_error"] = true;
        // line 235
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_141458af76b4cee4b84f09639231085d64cc6f55e240bd1776456d9f401b6781->leave($__internal_141458af76b4cee4b84f09639231085d64cc6f55e240bd1776456d9f401b6781_prof);

        
        $__internal_ade02f9bfbcb96440405e08ceb00dcf50cd356260034501ec1af14de484e0cd6->leave($__internal_ade02f9bfbcb96440405e08ceb00dcf50cd356260034501ec1af14de484e0cd6_prof);

    }

    // line 238
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_caf1c27d18940281a121c5326ff1eef501db51db564377dd578ba8f3df04161c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf1c27d18940281a121c5326ff1eef501db51db564377dd578ba8f3df04161c->enter($__internal_caf1c27d18940281a121c5326ff1eef501db51db564377dd578ba8f3df04161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d5f14edea43a93bcbb714e6e3003c7895eac0651c905ce06fc6b50320bb5821d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f14edea43a93bcbb714e6e3003c7895eac0651c905ce06fc6b50320bb5821d->enter($__internal_d5f14edea43a93bcbb714e6e3003c7895eac0651c905ce06fc6b50320bb5821d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 239
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 242
        echo "</div>";
        
        $__internal_d5f14edea43a93bcbb714e6e3003c7895eac0651c905ce06fc6b50320bb5821d->leave($__internal_d5f14edea43a93bcbb714e6e3003c7895eac0651c905ce06fc6b50320bb5821d_prof);

        
        $__internal_caf1c27d18940281a121c5326ff1eef501db51db564377dd578ba8f3df04161c->leave($__internal_caf1c27d18940281a121c5326ff1eef501db51db564377dd578ba8f3df04161c_prof);

    }

    // line 245
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_f38b928c1ca4fb2da5f7ab871e256e2bb403564296ae809a417ecb2663f293c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38b928c1ca4fb2da5f7ab871e256e2bb403564296ae809a417ecb2663f293c0->enter($__internal_f38b928c1ca4fb2da5f7ab871e256e2bb403564296ae809a417ecb2663f293c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_49571543847989429c2551149125c910c57589b3c15a6538321533ed5a514d49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49571543847989429c2551149125c910c57589b3c15a6538321533ed5a514d49->enter($__internal_49571543847989429c2551149125c910c57589b3c15a6538321533ed5a514d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 246
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 249
        echo "</div>";
        
        $__internal_49571543847989429c2551149125c910c57589b3c15a6538321533ed5a514d49->leave($__internal_49571543847989429c2551149125c910c57589b3c15a6538321533ed5a514d49_prof);

        
        $__internal_f38b928c1ca4fb2da5f7ab871e256e2bb403564296ae809a417ecb2663f293c0->leave($__internal_f38b928c1ca4fb2da5f7ab871e256e2bb403564296ae809a417ecb2663f293c0_prof);

    }

    // line 254
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_59816d82e4de0c261dabdab7278fa2826ff5489895126bd316dea3621e8b9761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59816d82e4de0c261dabdab7278fa2826ff5489895126bd316dea3621e8b9761->enter($__internal_59816d82e4de0c261dabdab7278fa2826ff5489895126bd316dea3621e8b9761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_fa0033e27658b8856ae0699fe652f1e82d43b02247d709ffcb0e5095ecee49b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0033e27658b8856ae0699fe652f1e82d43b02247d709ffcb0e5095ecee49b6->enter($__internal_fa0033e27658b8856ae0699fe652f1e82d43b02247d709ffcb0e5095ecee49b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 255
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 256
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 257
            echo "    <ul class=\"list-unstyled\">";
            // line 258
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 259
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "</ul>
    ";
            // line 262
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_fa0033e27658b8856ae0699fe652f1e82d43b02247d709ffcb0e5095ecee49b6->leave($__internal_fa0033e27658b8856ae0699fe652f1e82d43b02247d709ffcb0e5095ecee49b6_prof);

        
        $__internal_59816d82e4de0c261dabdab7278fa2826ff5489895126bd316dea3621e8b9761->leave($__internal_59816d82e4de0c261dabdab7278fa2826ff5489895126bd316dea3621e8b9761_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1061 => 262,  1058 => 261,  1050 => 259,  1046 => 258,  1044 => 257,  1038 => 256,  1036 => 255,  1027 => 254,  1017 => 249,  1015 => 248,  1013 => 247,  1007 => 246,  998 => 245,  988 => 242,  986 => 241,  984 => 240,  978 => 239,  969 => 238,  959 => 235,  957 => 234,  948 => 233,  938 => 230,  936 => 229,  927 => 228,  917 => 225,  915 => 224,  906 => 223,  896 => 220,  894 => 219,  885 => 218,  875 => 215,  873 => 214,  871 => 213,  862 => 212,  852 => 209,  850 => 208,  848 => 207,  846 => 206,  840 => 205,  831 => 204,  819 => 198,  815 => 197,  800 => 196,  796 => 193,  793 => 190,  792 => 189,  791 => 188,  789 => 187,  786 => 186,  783 => 185,  780 => 184,  777 => 183,  774 => 182,  771 => 181,  768 => 180,  765 => 179,  763 => 178,  754 => 177,  744 => 174,  735 => 173,  725 => 170,  716 => 169,  706 => 166,  704 => 165,  695 => 163,  685 => 160,  683 => 159,  674 => 158,  663 => 152,  661 => 151,  659 => 150,  656 => 148,  654 => 147,  652 => 146,  643 => 145,  632 => 141,  630 => 140,  628 => 139,  625 => 137,  623 => 136,  621 => 135,  612 => 134,  601 => 130,  595 => 127,  594 => 126,  593 => 125,  589 => 124,  585 => 123,  578 => 119,  577 => 118,  576 => 117,  572 => 116,  570 => 115,  561 => 114,  551 => 111,  549 => 110,  540 => 109,  529 => 105,  525 => 104,  521 => 103,  517 => 102,  513 => 101,  509 => 100,  505 => 99,  501 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 254,  200 => 253,  197 => 251,  195 => 245,  192 => 244,  190 => 238,  187 => 237,  185 => 233,  182 => 232,  180 => 228,  177 => 227,  175 => 223,  172 => 222,  170 => 218,  167 => 217,  165 => 212,  162 => 211,  160 => 204,  157 => 203,  154 => 201,  152 => 177,  149 => 176,  147 => 173,  144 => 172,  142 => 169,  139 => 168,  137 => 163,  134 => 162,  132 => 158,  129 => 157,  126 => 155,  124 => 145,  121 => 144,  119 => 134,  116 => 133,  114 => 114,  111 => 113,  109 => 109,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

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
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
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
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            {%- if with_years %}{{ form_widget(form.years) }}{% endif -%}
            {%- if with_months %}{{ form_widget(form.months) }}{% endif -%}
            {%- if with_weeks %}{{ form_widget(form.weeks) }}{% endif -%}
            {%- if with_days %}{{ form_widget(form.days) }}{% endif -%}
            {%- if with_hours %}{{ form_widget(form.hours) }}{% endif -%}
            {%- if with_minutes %}{{ form_widget(form.minutes) }}{% endif -%}
            {%- if with_seconds %}{{ form_widget(form.seconds) }}{% endif -%}
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
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
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
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
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
