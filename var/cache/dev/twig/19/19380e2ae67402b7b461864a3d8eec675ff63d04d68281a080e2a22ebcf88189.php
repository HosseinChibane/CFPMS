<?php

/* @EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_90045f449c455555cb90c90ac8c1a0bdcb7ba23571505a69736bfd528d8bcaad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("@EasyAdmin/form/bootstrap_3_layout.html.twig", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."@EasyAdmin/form/bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3766f73b42ccd9259f39742ff9a6f6b826e136e1d75899382082e9f592239dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3766f73b42ccd9259f39742ff9a6f6b826e136e1d75899382082e9f592239dc0->enter($__internal_3766f73b42ccd9259f39742ff9a6f6b826e136e1d75899382082e9f592239dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        $__internal_a51a04f53f9130c114513a9230b61258515ca0dc06c0fe55637f6a618fbf9579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51a04f53f9130c114513a9230b61258515ca0dc06c0fe55637f6a618fbf9579->enter($__internal_a51a04f53f9130c114513a9230b61258515ca0dc06c0fe55637f6a618fbf9579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('radio_row', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('submit_row', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('reset_row', $context, $blocks);
        // line 94
        echo "
";
        // line 95
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_3766f73b42ccd9259f39742ff9a6f6b826e136e1d75899382082e9f592239dc0->leave($__internal_3766f73b42ccd9259f39742ff9a6f6b826e136e1d75899382082e9f592239dc0_prof);

        
        $__internal_a51a04f53f9130c114513a9230b61258515ca0dc06c0fe55637f6a618fbf9579->leave($__internal_a51a04f53f9130c114513a9230b61258515ca0dc06c0fe55637f6a618fbf9579_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_e48fbe11f87b818d97511bab4095ee3880498281fe3fca26d11a6653ef3230e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48fbe11f87b818d97511bab4095ee3880498281fe3fca26d11a6653ef3230e6->enter($__internal_e48fbe11f87b818d97511bab4095ee3880498281fe3fca26d11a6653ef3230e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_9c6677c0fb7d0090fc31fa711be75b3fe1276f560aa94b085f7b7a48a86a8d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6677c0fb7d0090fc31fa711be75b3fe1276f560aa94b085f7b7a48a86a8d8a->enter($__internal_9c6677c0fb7d0090fc31fa711be75b3fe1276f560aa94b085f7b7a48a86a8d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["_easyadmin_form_type"] = "horizontal";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_9c6677c0fb7d0090fc31fa711be75b3fe1276f560aa94b085f7b7a48a86a8d8a->leave($__internal_9c6677c0fb7d0090fc31fa711be75b3fe1276f560aa94b085f7b7a48a86a8d8a_prof);

        
        $__internal_e48fbe11f87b818d97511bab4095ee3880498281fe3fca26d11a6653ef3230e6->leave($__internal_e48fbe11f87b818d97511bab4095ee3880498281fe3fca26d11a6653ef3230e6_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_392d4c3b4c98858488efcf4885b09bac0b5df82496da4446e311b6cbcb9c1575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392d4c3b4c98858488efcf4885b09bac0b5df82496da4446e311b6cbcb9c1575->enter($__internal_392d4c3b4c98858488efcf4885b09bac0b5df82496da4446e311b6cbcb9c1575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_95923848ad970e6b6a14e83ce53a9279b3af8dedb57af01c1149050c8d1d0499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95923848ad970e6b6a14e83ce53a9279b3af8dedb57af01c1149050c8d1d0499->enter($__internal_95923848ad970e6b6a14e83ce53a9279b3af8dedb57af01c1149050c8d1d0499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_95923848ad970e6b6a14e83ce53a9279b3af8dedb57af01c1149050c8d1d0499->leave($__internal_95923848ad970e6b6a14e83ce53a9279b3af8dedb57af01c1149050c8d1d0499_prof);

        
        $__internal_392d4c3b4c98858488efcf4885b09bac0b5df82496da4446e311b6cbcb9c1575->leave($__internal_392d4c3b4c98858488efcf4885b09bac0b5df82496da4446e311b6cbcb9c1575_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_f83607a897c74a9d424f26139f2db362b1bdb301126cdfe651285bc3980b8a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83607a897c74a9d424f26139f2db362b1bdb301126cdfe651285bc3980b8a10->enter($__internal_f83607a897c74a9d424f26139f2db362b1bdb301126cdfe651285bc3980b8a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_f17eb88700bb3506f677939262b70aab16c996adae3fcc5bde44d396885c20b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17eb88700bb3506f677939262b70aab16c996adae3fcc5bde44d396885c20b2->enter($__internal_f17eb88700bb3506f677939262b70aab16c996adae3fcc5bde44d396885c20b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        echo "col-sm-2";
        
        $__internal_f17eb88700bb3506f677939262b70aab16c996adae3fcc5bde44d396885c20b2->leave($__internal_f17eb88700bb3506f677939262b70aab16c996adae3fcc5bde44d396885c20b2_prof);

        
        $__internal_f83607a897c74a9d424f26139f2db362b1bdb301126cdfe651285bc3980b8a10->leave($__internal_f83607a897c74a9d424f26139f2db362b1bdb301126cdfe651285bc3980b8a10_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9c477ffd6b3469bc66c10b49196247791244e0e6a725fd4edbf00b0b3a6d9ed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c477ffd6b3469bc66c10b49196247791244e0e6a725fd4edbf00b0b3a6d9ed3->enter($__internal_9c477ffd6b3469bc66c10b49196247791244e0e6a725fd4edbf00b0b3a6d9ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_4148c228f0d7e8fe57b3ebc691abcda7f5841e17e077d67f3365c67eb36972f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4148c228f0d7e8fe57b3ebc691abcda7f5841e17e077d67f3365c67eb36972f8->enter($__internal_4148c228f0d7e8fe57b3ebc691abcda7f5841e17e077d67f3365c67eb36972f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        ob_start();
        // line 27
        echo "    ";
        $context["_field_type"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 28
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        ";
        // line 29
        $context["_field_label"] = (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "array"), null)) : (null));
        // line 30
        echo "        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("translation_domain" => $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array())) + (twig_test_empty($_label_ = ($context["_field_label"] ?? $this->getContext($context, "_field_label"))) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"";
        // line 31
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 34
        if ((twig_in_filter(($context["_field_type"] ?? $this->getContext($context, "_field_type")), array(0 => "datetime", 1 => "date", 2 => "time", 3 => "birthday")) && (($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 35
            echo "                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" ";
            // line 37
            if ((null === ($context["data"] ?? $this->getContext($context, "data")))) {
                echo "checked=\"checked\"";
            }
            echo ">
                        ";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                    </label>
                </div>
            ";
        }
        // line 42
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

            ";
        // line 45
        if (((($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 46
            echo "                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "field", array()), "help", array()), array(), $this->getAttribute($this->getAttribute(($context["easyadmin"] ?? $this->getContext($context, "easyadmin")), "entity", array()), "translation_domain", array()));
            echo "</span>
            ";
        }
        // line 48
        echo "        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4148c228f0d7e8fe57b3ebc691abcda7f5841e17e077d67f3365c67eb36972f8->leave($__internal_4148c228f0d7e8fe57b3ebc691abcda7f5841e17e077d67f3365c67eb36972f8_prof);

        
        $__internal_9c477ffd6b3469bc66c10b49196247791244e0e6a725fd4edbf00b0b3a6d9ed3->leave($__internal_9c477ffd6b3469bc66c10b49196247791244e0e6a725fd4edbf00b0b3a6d9ed3_prof);

    }

    // line 53
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_7d13058481de6d9edab25a5c58638e0db22d9671fef4b202ddc8f0b72838a213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d13058481de6d9edab25a5c58638e0db22d9671fef4b202ddc8f0b72838a213->enter($__internal_7d13058481de6d9edab25a5c58638e0db22d9671fef4b202ddc8f0b72838a213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0d8a6f0ae0c0e2f36c7f0b6fa7740e576825c9334d7963a917adf29052434122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8a6f0ae0c0e2f36c7f0b6fa7740e576825c9334d7963a917adf29052434122->enter($__internal_0d8a6f0ae0c0e2f36c7f0b6fa7740e576825c9334d7963a917adf29052434122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 54
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_0d8a6f0ae0c0e2f36c7f0b6fa7740e576825c9334d7963a917adf29052434122->leave($__internal_0d8a6f0ae0c0e2f36c7f0b6fa7740e576825c9334d7963a917adf29052434122_prof);

        
        $__internal_7d13058481de6d9edab25a5c58638e0db22d9671fef4b202ddc8f0b72838a213->leave($__internal_7d13058481de6d9edab25a5c58638e0db22d9671fef4b202ddc8f0b72838a213_prof);

    }

    // line 57
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_090d315386b069285a9c84b33dd17128c1771741c98e6174a2486ab90fb00326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_090d315386b069285a9c84b33dd17128c1771741c98e6174a2486ab90fb00326->enter($__internal_090d315386b069285a9c84b33dd17128c1771741c98e6174a2486ab90fb00326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7e1413fb2185cc178ec781644ce9446aa0b646520f8f59118750c98f7f8a5d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1413fb2185cc178ec781644ce9446aa0b646520f8f59118750c98f7f8a5d15->enter($__internal_7e1413fb2185cc178ec781644ce9446aa0b646520f8f59118750c98f7f8a5d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 58
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_7e1413fb2185cc178ec781644ce9446aa0b646520f8f59118750c98f7f8a5d15->leave($__internal_7e1413fb2185cc178ec781644ce9446aa0b646520f8f59118750c98f7f8a5d15_prof);

        
        $__internal_090d315386b069285a9c84b33dd17128c1771741c98e6174a2486ab90fb00326->leave($__internal_090d315386b069285a9c84b33dd17128c1771741c98e6174a2486ab90fb00326_prof);

    }

    // line 61
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_0c122814e547bf4aef82628c84caf19d8be957e6304ce358b2d16a49077e99ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c122814e547bf4aef82628c84caf19d8be957e6304ce358b2d16a49077e99ce->enter($__internal_0c122814e547bf4aef82628c84caf19d8be957e6304ce358b2d16a49077e99ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_e0b26e5436bcba7207db9e5d440cc64cc26264ede0e359cf49bc87bbf8ae43d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b26e5436bcba7207db9e5d440cc64cc26264ede0e359cf49bc87bbf8ae43d4->enter($__internal_e0b26e5436bcba7207db9e5d440cc64cc26264ede0e359cf49bc87bbf8ae43d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 62
        ob_start();
        // line 63
        echo "    <div class=\"form-group ";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 64
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 65
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e0b26e5436bcba7207db9e5d440cc64cc26264ede0e359cf49bc87bbf8ae43d4->leave($__internal_e0b26e5436bcba7207db9e5d440cc64cc26264ede0e359cf49bc87bbf8ae43d4_prof);

        
        $__internal_0c122814e547bf4aef82628c84caf19d8be957e6304ce358b2d16a49077e99ce->leave($__internal_0c122814e547bf4aef82628c84caf19d8be957e6304ce358b2d16a49077e99ce_prof);

    }

    // line 73
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4aad7ec5480d403f9284487f636ba1548c668dcdd26cbdfb2db7378d317a28ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aad7ec5480d403f9284487f636ba1548c668dcdd26cbdfb2db7378d317a28ea->enter($__internal_4aad7ec5480d403f9284487f636ba1548c668dcdd26cbdfb2db7378d317a28ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_dcab67fab9c53f619d9831fd9b3b2e2f751accd70fbae9cdd507e5692173627d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcab67fab9c53f619d9831fd9b3b2e2f751accd70fbae9cdd507e5692173627d->enter($__internal_dcab67fab9c53f619d9831fd9b3b2e2f751accd70fbae9cdd507e5692173627d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 74
        ob_start();
        // line 75
        echo "    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? $this->getContext($context, "block_prefixes")),  -2)), "html", null, true);
        echo "\">
        <div class=\"";
        // line 76
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 77
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_dcab67fab9c53f619d9831fd9b3b2e2f751accd70fbae9cdd507e5692173627d->leave($__internal_dcab67fab9c53f619d9831fd9b3b2e2f751accd70fbae9cdd507e5692173627d_prof);

        
        $__internal_4aad7ec5480d403f9284487f636ba1548c668dcdd26cbdfb2db7378d317a28ea->leave($__internal_4aad7ec5480d403f9284487f636ba1548c668dcdd26cbdfb2db7378d317a28ea_prof);

    }

    // line 84
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_9f41f365b3f5dd477e681c1c6000a04e7027df6a5adfbee2623aa1561f7acfb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f41f365b3f5dd477e681c1c6000a04e7027df6a5adfbee2623aa1561f7acfb5->enter($__internal_9f41f365b3f5dd477e681c1c6000a04e7027df6a5adfbee2623aa1561f7acfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_2162a60c4af0c84e32fde9bebd80f4fd4b0b5611e0ac34cb0d832fa01453b776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2162a60c4af0c84e32fde9bebd80f4fd4b0b5611e0ac34cb0d832fa01453b776->enter($__internal_2162a60c4af0c84e32fde9bebd80f4fd4b0b5611e0ac34cb0d832fa01453b776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 85
        ob_start();
        // line 86
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 87
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 88
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2162a60c4af0c84e32fde9bebd80f4fd4b0b5611e0ac34cb0d832fa01453b776->leave($__internal_2162a60c4af0c84e32fde9bebd80f4fd4b0b5611e0ac34cb0d832fa01453b776_prof);

        
        $__internal_9f41f365b3f5dd477e681c1c6000a04e7027df6a5adfbee2623aa1561f7acfb5->leave($__internal_9f41f365b3f5dd477e681c1c6000a04e7027df6a5adfbee2623aa1561f7acfb5_prof);

    }

    // line 95
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_303e835f2b45abbf140cea7c7981244674b6f25032eeb8fcefc5b95aee74d61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_303e835f2b45abbf140cea7c7981244674b6f25032eeb8fcefc5b95aee74d61f->enter($__internal_303e835f2b45abbf140cea7c7981244674b6f25032eeb8fcefc5b95aee74d61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b2dc8c6693db7a3177bce9333f05ebced0c68005fd39cd7d65f423343376c0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dc8c6693db7a3177bce9333f05ebced0c68005fd39cd7d65f423343376c0c2->enter($__internal_b2dc8c6693db7a3177bce9333f05ebced0c68005fd39cd7d65f423343376c0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        echo "col-sm-10";
        
        $__internal_b2dc8c6693db7a3177bce9333f05ebced0c68005fd39cd7d65f423343376c0c2->leave($__internal_b2dc8c6693db7a3177bce9333f05ebced0c68005fd39cd7d65f423343376c0c2_prof);

        
        $__internal_303e835f2b45abbf140cea7c7981244674b6f25032eeb8fcefc5b95aee74d61f->leave($__internal_303e835f2b45abbf140cea7c7981244674b6f25032eeb8fcefc5b95aee74d61f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  433 => 95,  418 => 89,  414 => 88,  410 => 87,  407 => 86,  405 => 85,  396 => 84,  381 => 78,  377 => 77,  373 => 76,  368 => 75,  366 => 74,  357 => 73,  342 => 67,  338 => 66,  334 => 65,  330 => 64,  321 => 63,  319 => 62,  310 => 61,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  259 => 48,  253 => 46,  251 => 45,  246 => 43,  243 => 42,  236 => 38,  230 => 37,  226 => 35,  224 => 34,  219 => 32,  215 => 31,  210 => 30,  208 => 29,  199 => 28,  196 => 27,  194 => 26,  185 => 25,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 95,  98 => 94,  96 => 84,  93 => 83,  91 => 73,  88 => 72,  86 => 61,  83 => 60,  81 => 57,  78 => 56,  76 => 53,  73 => 52,  71 => 25,  68 => 24,  65 => 22,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"@EasyAdmin/form/bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set _easyadmin_form_type = 'horizontal' %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class 'col-sm-2' %}

{# Rows #}

{% block form_row -%}
{% spaceless %}
    {% set _field_type = easyadmin.field.fieldType|default('default') %}
    <div class=\"form-group {% if (not compound or force_error|default(false)) and not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        {% set _field_label = easyadmin.field['label']|default(null) %}
        {{ form_label(form, _field_label, { translation_domain: easyadmin.entity.translation_domain }) }}
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}

            {% if _field_type in ['datetime', 'date', 'time', 'birthday'] and easyadmin.field.nullable|default(false) %}
                <div class=\"nullable-control\">
                    <label>
                        <input type=\"checkbox\" {% if data is null %}checked=\"checked\"{% endif %}>
                        {{ 'label.nullable_field'|trans({}, 'EasyAdminBundle')}}
                    </label>
                </div>
            {% endif %}

            {{ form_errors(form) }}

            {% if easyadmin.field.help|default('') != '' %}
                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ easyadmin.field.help|trans(domain = easyadmin.entity.translation_domain)|raw }}</span>
            {% endif %}
        </div>
    </div>
{% endspaceless %}
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group {% if not valid %}has-error{% endif %} field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group field-{{ block_prefixes|slice(-2)|first }}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class 'col-sm-10' %}
", "@EasyAdmin/form/bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
