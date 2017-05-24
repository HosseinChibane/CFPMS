<?php

/* EasyAdminBundle:default:list.html.twig */
class __TwigTemplate_3569099efa544c109623a6b880d193fdeb88ea29fcabb7931949ac1192460e67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'page_title' => array($this, 'block_page_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_title_wrapper' => array($this, 'block_content_title_wrapper'),
            'global_actions' => array($this, 'block_global_actions'),
            'search_action' => array($this, 'block_search_action'),
            'search_form' => array($this, 'block_search_form'),
            'new_action' => array($this, 'block_new_action'),
            'main' => array($this, 'block_main'),
            'table_head' => array($this, 'block_table_head'),
            'table_body' => array($this, 'block_table_body'),
            'item_actions' => array($this, 'block_item_actions'),
            'paginator' => array($this, 'block_paginator'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 5
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:list.html.twig", 5);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3c1fa7a831623a1e9ad7b9557367c4ad20590c9373fe41d6f3ecf565ead43d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c1fa7a831623a1e9ad7b9557367c4ad20590c9373fe41d6f3ecf565ead43d4->enter($__internal_c3c1fa7a831623a1e9ad7b9557367c4ad20590c9373fe41d6f3ecf565ead43d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        $__internal_12a20ad725df2d1502393904b2977b1d0159ed69e46a875623048de7775e14fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a20ad725df2d1502393904b2977b1d0159ed69e46a875623048de7775e14fb->enter($__internal_12a20ad725df2d1502393904b2977b1d0159ed69e46a875623048de7775e14fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:list.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 2
        $context["__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 3
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 2
($context["__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"] ?? $this->getContext($context, "__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 3
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 2
($context["__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"] ?? $this->getContext($context, "__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"))));
        // line 7
        $context["_request_parameters"] = twig_array_merge(((array_key_exists("_request_parameters", $context)) ? (_twig_default_filter(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array())) : (array())), array("action" => $this->getAttribute($this->getAttribute(        // line 8
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"), "entity" => $this->getAttribute(        // line 9
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "menuIndex" => $this->getAttribute($this->getAttribute(        // line 10
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "menuIndex"), "method"), "submenuIndex" => $this->getAttribute($this->getAttribute(        // line 11
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "submenuIndex"), "method"), "sortField" => $this->getAttribute($this->getAttribute(        // line 12
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField", 1 => ""), "method"), "sortDirection" => $this->getAttribute($this->getAttribute(        // line 13
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection", 1 => "DESC"), "method"), "page" => $this->getAttribute($this->getAttribute(        // line 14
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "page", 1 => 1), "method")));
        // line 17
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 18
            $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("query" => (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : (""))));
        }
        // line 21
        $context["_request_parameters"] = twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("referer" => twig_urlencode_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", ($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters"))))));
        // line 26
        ob_start();
        // line 27
        ob_start();
        // line 28
        echo "    ";
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 29
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("search.page_title", $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbResults", array()), array(), "EasyAdminBundle");
            echo "
    ";
        } else {
            // line 31
            echo "        ";
            $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
            // line 32
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "list", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "list", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 2
($context["__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"] ?? $this->getContext($context, "__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0")))) : (            // line 32
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["_content_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3c1fa7a831623a1e9ad7b9557367c4ad20590c9373fe41d6f3ecf565ead43d4->leave($__internal_c3c1fa7a831623a1e9ad7b9557367c4ad20590c9373fe41d6f3ecf565ead43d4_prof);

        
        $__internal_12a20ad725df2d1502393904b2977b1d0159ed69e46a875623048de7775e14fb->leave($__internal_12a20ad725df2d1502393904b2977b1d0159ed69e46a875623048de7775e14fb_prof);

    }

    // line 23
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_807a3ecc76f04caa90a16545c4f65172a278e0d507dd8c45e26d891852741e9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807a3ecc76f04caa90a16545c4f65172a278e0d507dd8c45e26d891852741e9e->enter($__internal_807a3ecc76f04caa90a16545c4f65172a278e0d507dd8c45e26d891852741e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_a2ad8c16024ce5963752888053faba538080a465993305600f117d9976c37e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ad8c16024ce5963752888053faba538080a465993305600f117d9976c37e7c->enter($__internal_a2ad8c16024ce5963752888053faba538080a465993305600f117d9976c37e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-list-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_a2ad8c16024ce5963752888053faba538080a465993305600f117d9976c37e7c->leave($__internal_a2ad8c16024ce5963752888053faba538080a465993305600f117d9976c37e7c_prof);

        
        $__internal_807a3ecc76f04caa90a16545c4f65172a278e0d507dd8c45e26d891852741e9e->leave($__internal_807a3ecc76f04caa90a16545c4f65172a278e0d507dd8c45e26d891852741e9e_prof);

    }

    // line 24
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_ad3b7889bdb7871152f318d7a3a6f774244d1a6562094548edd352a920a8caf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3b7889bdb7871152f318d7a3a6f774244d1a6562094548edd352a920a8caf1->enter($__internal_ad3b7889bdb7871152f318d7a3a6f774244d1a6562094548edd352a920a8caf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_f34d5b91affbf38ea45a4b2103436839d5ec5962ede3e7fa8ffa426ae5d26a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34d5b91affbf38ea45a4b2103436839d5ec5962ede3e7fa8ffa426ae5d26a3c->enter($__internal_f34d5b91affbf38ea45a4b2103436839d5ec5962ede3e7fa8ffa426ae5d26a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("list list-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_f34d5b91affbf38ea45a4b2103436839d5ec5962ede3e7fa8ffa426ae5d26a3c->leave($__internal_f34d5b91affbf38ea45a4b2103436839d5ec5962ede3e7fa8ffa426ae5d26a3c_prof);

        
        $__internal_ad3b7889bdb7871152f318d7a3a6f774244d1a6562094548edd352a920a8caf1->leave($__internal_ad3b7889bdb7871152f318d7a3a6f774244d1a6562094548edd352a920a8caf1_prof);

    }

    // line 37
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fb6de3ba2636136d5270f71085fdad33c73ac79704c2f63c4c02deea140a54ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb6de3ba2636136d5270f71085fdad33c73ac79704c2f63c4c02deea140a54ca->enter($__internal_fb6de3ba2636136d5270f71085fdad33c73ac79704c2f63c4c02deea140a54ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_3c01deb26d4844eae4f63add6030be60f1f110bece35ecf906846e43a2fdce53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c01deb26d4844eae4f63add6030be60f1f110bece35ecf906846e43a2fdce53->enter($__internal_3c01deb26d4844eae4f63add6030be60f1f110bece35ecf906846e43a2fdce53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(($context["_content_title"] ?? $this->getContext($context, "_content_title")));
        
        $__internal_3c01deb26d4844eae4f63add6030be60f1f110bece35ecf906846e43a2fdce53->leave($__internal_3c01deb26d4844eae4f63add6030be60f1f110bece35ecf906846e43a2fdce53_prof);

        
        $__internal_fb6de3ba2636136d5270f71085fdad33c73ac79704c2f63c4c02deea140a54ca->leave($__internal_fb6de3ba2636136d5270f71085fdad33c73ac79704c2f63c4c02deea140a54ca_prof);

    }

    // line 39
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_58ef2461fc8587a401f006651abba573724a52dfc5ee7c89006342136fa2d48b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ef2461fc8587a401f006651abba573724a52dfc5ee7c89006342136fa2d48b->enter($__internal_58ef2461fc8587a401f006651abba573724a52dfc5ee7c89006342136fa2d48b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_0ef69027c47c3327312b14ec0255bac0d6754757c96a4e5f209b3fbfe5322457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef69027c47c3327312b14ec0255bac0d6754757c96a4e5f209b3fbfe5322457->enter($__internal_0ef69027c47c3327312b14ec0255bac0d6754757c96a4e5f209b3fbfe5322457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 40
        echo "    <div class=\"row\">
        <div class=\"col-sm-5\">
            ";
        // line 42
        $this->displayBlock('content_title_wrapper', $context, $blocks);
        // line 45
        echo "        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                ";
        // line 49
        $this->displayBlock('global_actions', $context, $blocks);
        // line 90
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_0ef69027c47c3327312b14ec0255bac0d6754757c96a4e5f209b3fbfe5322457->leave($__internal_0ef69027c47c3327312b14ec0255bac0d6754757c96a4e5f209b3fbfe5322457_prof);

        
        $__internal_58ef2461fc8587a401f006651abba573724a52dfc5ee7c89006342136fa2d48b->leave($__internal_58ef2461fc8587a401f006651abba573724a52dfc5ee7c89006342136fa2d48b_prof);

    }

    // line 42
    public function block_content_title_wrapper($context, array $blocks = array())
    {
        $__internal_dabbb6d38ac47e8af045fbb70e8d5c6a81c1db32727c5b58913a841e73e161e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabbb6d38ac47e8af045fbb70e8d5c6a81c1db32727c5b58913a841e73e161e7->enter($__internal_dabbb6d38ac47e8af045fbb70e8d5c6a81c1db32727c5b58913a841e73e161e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        $__internal_a9c23d1ccc766b2bc930451c8b8249eaf3eed481ffac6073f3828c2e458af5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c23d1ccc766b2bc930451c8b8249eaf3eed481ffac6073f3828c2e458af5ec->enter($__internal_a9c23d1ccc766b2bc930451c8b8249eaf3eed481ffac6073f3828c2e458af5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title_wrapper"));

        // line 43
        echo "                <h1 class=\"title\">";
        echo twig_escape_filter($this->env, ($context["_content_title"] ?? $this->getContext($context, "_content_title")), "html", null, true);
        echo "</h1>
            ";
        
        $__internal_a9c23d1ccc766b2bc930451c8b8249eaf3eed481ffac6073f3828c2e458af5ec->leave($__internal_a9c23d1ccc766b2bc930451c8b8249eaf3eed481ffac6073f3828c2e458af5ec_prof);

        
        $__internal_dabbb6d38ac47e8af045fbb70e8d5c6a81c1db32727c5b58913a841e73e161e7->leave($__internal_dabbb6d38ac47e8af045fbb70e8d5c6a81c1db32727c5b58913a841e73e161e7_prof);

    }

    // line 49
    public function block_global_actions($context, array $blocks = array())
    {
        $__internal_fd39f729074da40f1ebc214890ca01aeec072b97467cd44575ba482ea780453b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd39f729074da40f1ebc214890ca01aeec072b97467cd44575ba482ea780453b->enter($__internal_fd39f729074da40f1ebc214890ca01aeec072b97467cd44575ba482ea780453b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        $__internal_0939dbf88f6ca33da3884e9848495eb083d9b168e031fb43c0803177c9d29da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0939dbf88f6ca33da3884e9848495eb083d9b168e031fb43c0803177c9d29da9->enter($__internal_0939dbf88f6ca33da3884e9848495eb083d9b168e031fb43c0803177c9d29da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "global_actions"));

        // line 50
        echo "                    ";
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "search", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 51
            echo "                        ";
            $context["_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "search", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
            // line 52
            echo "
                        ";
            // line 53
            $this->displayBlock('search_action', $context, $blocks);
            // line 76
            echo "                    ";
        }
        // line 77
        echo "
                    ";
        // line 78
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->isActionEnabled("list", "new", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))) {
            // line 79
            echo "                        ";
            $context["_action"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionConfiguration("list", "new", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
            // line 80
            echo "                        ";
            $this->displayBlock('new_action', $context, $blocks);
            // line 88
            echo "                    ";
        }
        // line 89
        echo "                ";
        
        $__internal_0939dbf88f6ca33da3884e9848495eb083d9b168e031fb43c0803177c9d29da9->leave($__internal_0939dbf88f6ca33da3884e9848495eb083d9b168e031fb43c0803177c9d29da9_prof);

        
        $__internal_fd39f729074da40f1ebc214890ca01aeec072b97467cd44575ba482ea780453b->leave($__internal_fd39f729074da40f1ebc214890ca01aeec072b97467cd44575ba482ea780453b_prof);

    }

    // line 53
    public function block_search_action($context, array $blocks = array())
    {
        $__internal_d64922971d7c0e2d6fee795078ebe1abdef610915eff8c25a646e45d485c031b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64922971d7c0e2d6fee795078ebe1abdef610915eff8c25a646e45d485c031b->enter($__internal_d64922971d7c0e2d6fee795078ebe1abdef610915eff8c25a646e45d485c031b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        $__internal_736772f0c0c0fcb842e35990b095ac92a6dee3057c2561f851eda414616b47f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736772f0c0c0fcb842e35990b095ac92a6dee3057c2561f851eda414616b47f2->enter($__internal_736772f0c0c0fcb842e35990b095ac92a6dee3057c2561f851eda414616b47f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_action"));

        // line 54
        echo "                            <div class=\"form-action ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                                <form method=\"get\" action=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                    ";
        // line 56
        $this->displayBlock('search_form', $context, $blocks);
        // line 73
        echo "                                </form>
                            </div>
                        ";
        
        $__internal_736772f0c0c0fcb842e35990b095ac92a6dee3057c2561f851eda414616b47f2->leave($__internal_736772f0c0c0fcb842e35990b095ac92a6dee3057c2561f851eda414616b47f2_prof);

        
        $__internal_d64922971d7c0e2d6fee795078ebe1abdef610915eff8c25a646e45d485c031b->leave($__internal_d64922971d7c0e2d6fee795078ebe1abdef610915eff8c25a646e45d485c031b_prof);

    }

    // line 56
    public function block_search_form($context, array $blocks = array())
    {
        $__internal_085132c58dea5288322cc2d46d75a5182a5af56f2ada089d68eacf354af21a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085132c58dea5288322cc2d46d75a5182a5af56f2ada089d68eacf354af21a41->enter($__internal_085132c58dea5288322cc2d46d75a5182a5af56f2ada089d68eacf354af21a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        $__internal_10647035c8ce6eee109ffec2514a17b9f45290fe58a67b09a8c114582d7f149a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10647035c8ce6eee109ffec2514a17b9f45290fe58a67b09a8c114582d7f149a->enter($__internal_10647035c8ce6eee109ffec2514a17b9f45290fe58a67b09a8c114582d7f149a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_form"));

        // line 57
        echo "                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "entity", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortField", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "sortDirection", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "menuIndex", array()), "html", null, true);
        echo "\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "submenuIndex", array()), "html", null, true);
        echo "\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "html", null, true);
        echo "\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "label", array()), "action.search")) : ("action.search")), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 2
($context["__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"] ?? $this->getContext($context, "__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"))), "html", null, true);
        // line 68
        echo "</span>
                                                </button>
                                            </span>
                                        </div>
                                    ";
        
        $__internal_10647035c8ce6eee109ffec2514a17b9f45290fe58a67b09a8c114582d7f149a->leave($__internal_10647035c8ce6eee109ffec2514a17b9f45290fe58a67b09a8c114582d7f149a_prof);

        
        $__internal_085132c58dea5288322cc2d46d75a5182a5af56f2ada089d68eacf354af21a41->leave($__internal_085132c58dea5288322cc2d46d75a5182a5af56f2ada089d68eacf354af21a41_prof);

    }

    // line 80
    public function block_new_action($context, array $blocks = array())
    {
        $__internal_0267c0b5a34992a892690259b10a2037b1e4a775ccde5e3e4eb11eb40965c1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0267c0b5a34992a892690259b10a2037b1e4a775ccde5e3e4eb11eb40965c1fd->enter($__internal_0267c0b5a34992a892690259b10a2037b1e4a775ccde5e3e4eb11eb40965c1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        $__internal_1426ffc0b3a59665659ec5d9bb56717f6959d693420c3d8c357919a4740ca3d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1426ffc0b3a59665659ec5d9bb56717f6959d693420c3d8c357919a4740ca3d0->enter($__internal_1426ffc0b3a59665659ec5d9bb56717f6959d693420c3d8c357919a4740ca3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "new_action"));

        // line 81
        echo "                            <div class=\"button-action\">
                                <a class=\"";
        // line 82
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["_action"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_action"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("action" => $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "name", array())))), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "target", array()), "html", null, true);
        echo "\">
                                    ";
        // line 83
        if ($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        // line 84
        echo "                                    ";
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["_action"] ?? null), "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "label", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_action"] ?? $this->getContext($context, "_action")), "label", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 2
($context["__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"] ?? $this->getContext($context, "__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0")))) : ("")), "html", null, true);
        // line 84
        echo "
                                </a>
                            </div>
                        ";
        
        $__internal_1426ffc0b3a59665659ec5d9bb56717f6959d693420c3d8c357919a4740ca3d0->leave($__internal_1426ffc0b3a59665659ec5d9bb56717f6959d693420c3d8c357919a4740ca3d0_prof);

        
        $__internal_0267c0b5a34992a892690259b10a2037b1e4a775ccde5e3e4eb11eb40965c1fd->leave($__internal_0267c0b5a34992a892690259b10a2037b1e4a775ccde5e3e4eb11eb40965c1fd_prof);

    }

    // line 95
    public function block_main($context, array $blocks = array())
    {
        $__internal_b4652498ab11a8e17605e965f26ef7b5af5f1a517c1ab8092cb10a28596e61c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4652498ab11a8e17605e965f26ef7b5af5f1a517c1ab8092cb10a28596e61c5->enter($__internal_b4652498ab11a8e17605e965f26ef7b5af5f1a517c1ab8092cb10a28596e61c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_cc0da0556f408bbe21a19874721dbe716417a4b4f578d4a6e0f1d01af6a6ffe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0da0556f408bbe21a19874721dbe716417a4b4f578d4a6e0f1d01af6a6ffe2->enter($__internal_cc0da0556f408bbe21a19874721dbe716417a4b4f578d4a6e0f1d01af6a6ffe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 96
        echo "    ";
        $context["_list_item_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("list", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 97
        echo "
    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        ";
        // line 101
        $this->displayBlock('table_head', $context, $blocks);
        // line 128
        echo "        </thead>

        <tbody>
        ";
        // line 131
        $this->displayBlock('table_body', $context, $blocks);
        // line 168
        echo "        </tbody>
    </table>
    </div>

    ";
        // line 172
        $this->displayBlock('paginator', $context, $blocks);
        // line 175
        echo "
    ";
        // line 176
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_cc0da0556f408bbe21a19874721dbe716417a4b4f578d4a6e0f1d01af6a6ffe2->leave($__internal_cc0da0556f408bbe21a19874721dbe716417a4b4f578d4a6e0f1d01af6a6ffe2_prof);

        
        $__internal_b4652498ab11a8e17605e965f26ef7b5af5f1a517c1ab8092cb10a28596e61c5->leave($__internal_b4652498ab11a8e17605e965f26ef7b5af5f1a517c1ab8092cb10a28596e61c5_prof);

    }

    // line 101
    public function block_table_head($context, array $blocks = array())
    {
        $__internal_02ceb98899110ac0d5dfd994cdc618ee6d1c13835432a900ddb36231b4782bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ceb98899110ac0d5dfd994cdc618ee6d1c13835432a900ddb36231b4782bae->enter($__internal_02ceb98899110ac0d5dfd994cdc618ee6d1c13835432a900ddb36231b4782bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        $__internal_1a6f7d6b8187951f381766e1b9858d2f3f4c1a4c1227755a64480d4c666b38f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6f7d6b8187951f381766e1b9858d2f3f4c1a4c1227755a64480d4c666b38f7->enter($__internal_1a6f7d6b8187951f381766e1b9858d2f3f4c1a4c1227755a64480d4c666b38f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_head"));

        // line 102
        echo "            <tr>
                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 104
            echo "                    ";
            $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"), ".")));
            // line 105
            echo "                    ";
            $context["nextSortDirection"] = ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? (((($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortDirection"), "method") == "DESC")) ? ("ASC") : ("DESC"))) : ("DESC"));
            // line 106
            echo "                    ";
            $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 2
($context["__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"] ?? $this->getContext($context, "__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0")));
            // line 107
            echo "                    ";
            $context["_column_icon"] = ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ((((($context["nextSortDirection"] ?? $this->getContext($context, "nextSortDirection")) == "DESC")) ? ("fa-caret-up") : ("fa-caret-down"))) : ("fa-sort"));
            // line 108
            echo "
                    <th data-property-name=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "property", array()), "html", null, true);
            echo "\" class=\"";
            echo ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
            echo " ";
            echo (($this->getAttribute($context["metadata"], "virtual", array())) ? ("virtual") : (""));
            echo " ";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
            echo "\">
                        ";
            // line 110
            if ($this->getAttribute($context["metadata"], "sortable", array())) {
                // line 111
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), array("sortField" => $this->getAttribute($context["metadata"], "property", array()), "sortDirection" => ($context["nextSortDirection"] ?? $this->getContext($context, "nextSortDirection"))))), "html", null, true);
                echo "\">
                                <i class=\"fa ";
                // line 112
                echo twig_escape_filter($this->env, ($context["_column_icon"] ?? $this->getContext($context, "_column_icon")), "html", null, true);
                echo "\"></i>
                                ";
                // line 113
                echo ($context["_column_label"] ?? $this->getContext($context, "_column_label"));
                echo "
                            </a>
                        ";
            } else {
                // line 116
                echo "                            <span>";
                echo ($context["_column_label"] ?? $this->getContext($context, "_column_label"));
                echo "</span>
                        ";
            }
            // line 118
            echo "                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
                ";
        // line 121
        if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) {
            // line 122
            echo "                    <th>
                        <span>";
            // line 123
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "</span>
                    </th>
                ";
        }
        // line 126
        echo "            </tr>
        ";
        
        $__internal_1a6f7d6b8187951f381766e1b9858d2f3f4c1a4c1227755a64480d4c666b38f7->leave($__internal_1a6f7d6b8187951f381766e1b9858d2f3f4c1a4c1227755a64480d4c666b38f7_prof);

        
        $__internal_02ceb98899110ac0d5dfd994cdc618ee6d1c13835432a900ddb36231b4782bae->leave($__internal_02ceb98899110ac0d5dfd994cdc618ee6d1c13835432a900ddb36231b4782bae_prof);

    }

    // line 131
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_c63fa29b63124a32bb4a6c3900cf3836386a2df4c3bfb4d9f033278ae14faf57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c63fa29b63124a32bb4a6c3900cf3836386a2df4c3bfb4d9f033278ae14faf57->enter($__internal_c63fa29b63124a32bb4a6c3900cf3836386a2df4c3bfb4d9f033278ae14faf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_6d99e7cc6d2c032b8ee468681d0c332403234b2f486fa630ee7a56bacd21740c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d99e7cc6d2c032b8ee468681d0c332403234b2f486fa630ee7a56bacd21740c->enter($__internal_6d99e7cc6d2c032b8ee468681d0c332403234b2f486fa630ee7a56bacd21740c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 132
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPageResults", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 133
            echo "                ";
            // line 134
            echo "                ";
            $context["_item_id"] = ("" . $this->getAttribute($context["item"], $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
            // line 135
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, ($context["_item_id"] ?? $this->getContext($context, "_item_id")), "html", null, true);
            echo "\">
                    ";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
            foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
                // line 137
                echo "                        ";
                $context["isSortingField"] = ($this->getAttribute($context["metadata"], "property", array()) == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "sortField"), "method"));
                // line 138
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),                 // line 2
($context["__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0"] ?? $this->getContext($context, "__internal_fcf1d1c6c7a98d682ef3c3a55cae5ad881513b98609cf5bd9addb1f4238ac8c0")));
                // line 139
                echo "
                        <td data-label=\"";
                // line 140
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"";
                echo ((($context["isSortingField"] ?? $this->getContext($context, "isSortingField"))) ? ("sorted") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($context["metadata"], "dataType", array())), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["metadata"], "css_class", array()), "html", null, true);
                echo "\">
                            ";
                // line 141
                echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "list", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), $context["item"], $context["metadata"]);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "
                    ";
            // line 145
            if ((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) {
                // line 146
                echo "                        ";
                $context["_column_label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list.row_actions", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
                // line 147
                echo "                        <td data-label=\"";
                echo twig_escape_filter($this->env, ($context["_column_label"] ?? $this->getContext($context, "_column_label")), "html", null, true);
                echo "\" class=\"actions\">
                        ";
                // line 148
                $this->displayBlock('item_actions', $context, $blocks);
                // line 157
                echo "                        </td>
                    ";
            }
            // line 159
            echo "                </tr>
            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 161
            echo "                <tr>
                    <td class=\"no-results\" colspan=\"";
            // line 162
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, ($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions"))) > 0)) ? ((twig_length_filter($this->env, ($context["fields"] ?? $this->getContext($context, "fields"))) + 1)) : (twig_length_filter($this->env, ($context["fields"] ?? $this->getContext($context, "fields"))))), "html", null, true);
            echo "\">
                        ";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("search.no_results", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle"), "html", null, true);
            echo "
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        ";
        
        $__internal_6d99e7cc6d2c032b8ee468681d0c332403234b2f486fa630ee7a56bacd21740c->leave($__internal_6d99e7cc6d2c032b8ee468681d0c332403234b2f486fa630ee7a56bacd21740c_prof);

        
        $__internal_c63fa29b63124a32bb4a6c3900cf3836386a2df4c3bfb4d9f033278ae14faf57->leave($__internal_c63fa29b63124a32bb4a6c3900cf3836386a2df4c3bfb4d9f033278ae14faf57_prof);

    }

    // line 148
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_b42f033cd5dd16ec35b1cb6dd084b00ea15125c4fd7608344f74f203882fa26c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42f033cd5dd16ec35b1cb6dd084b00ea15125c4fd7608344f74f203882fa26c->enter($__internal_b42f033cd5dd16ec35b1cb6dd084b00ea15125c4fd7608344f74f203882fa26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_d732e6c6bb45be76f0bfa0b51f86a75228b8048286effa8595e94dd70f2f2b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d732e6c6bb45be76f0bfa0b51f86a75228b8048286effa8595e94dd70f2f2b15->enter($__internal_d732e6c6bb45be76f0bfa0b51f86a75228b8048286effa8595e94dd70f2f2b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 149
        echo "                            ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 150
($context["_list_item_actions"] ?? $this->getContext($context, "_list_item_actions")), "request_parameters" =>         // line 151
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 152
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 153
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 154
($context["_item_id"] ?? $this->getContext($context, "_item_id"))), false);
        // line 155
        echo "
                        ";
        
        $__internal_d732e6c6bb45be76f0bfa0b51f86a75228b8048286effa8595e94dd70f2f2b15->leave($__internal_d732e6c6bb45be76f0bfa0b51f86a75228b8048286effa8595e94dd70f2f2b15_prof);

        
        $__internal_b42f033cd5dd16ec35b1cb6dd084b00ea15125c4fd7608344f74f203882fa26c->leave($__internal_b42f033cd5dd16ec35b1cb6dd084b00ea15125c4fd7608344f74f203882fa26c_prof);

    }

    // line 172
    public function block_paginator($context, array $blocks = array())
    {
        $__internal_002cb91a882544bb30598ca0ffce44dd3d808e5866e08fabb90bd25401fd5553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_002cb91a882544bb30598ca0ffce44dd3d808e5866e08fabb90bd25401fd5553->enter($__internal_002cb91a882544bb30598ca0ffce44dd3d808e5866e08fabb90bd25401fd5553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        $__internal_587a7c46225fe7643e53eb2ec62d1f7f15a128ba77d49a7e7dd3a39e1623638b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_587a7c46225fe7643e53eb2ec62d1f7f15a128ba77d49a7e7dd3a39e1623638b->enter($__internal_587a7c46225fe7643e53eb2ec62d1f7f15a128ba77d49a7e7dd3a39e1623638b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paginator"));

        // line 173
        echo "        ";
        echo twig_include($this->env, $context, $this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "paginator", array()));
        echo "
    ";
        
        $__internal_587a7c46225fe7643e53eb2ec62d1f7f15a128ba77d49a7e7dd3a39e1623638b->leave($__internal_587a7c46225fe7643e53eb2ec62d1f7f15a128ba77d49a7e7dd3a39e1623638b_prof);

        
        $__internal_002cb91a882544bb30598ca0ffce44dd3d808e5866e08fabb90bd25401fd5553->leave($__internal_002cb91a882544bb30598ca0ffce44dd3d808e5866e08fabb90bd25401fd5553_prof);

    }

    // line 176
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_43a69f696565c5a1f899076e27e954b8d18009f1839ed9a9496a9a3b47a9f1c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a69f696565c5a1f899076e27e954b8d18009f1839ed9a9496a9a3b47a9f1c7->enter($__internal_43a69f696565c5a1f899076e27e954b8d18009f1839ed9a9496a9a3b47a9f1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_9c67ee90dd5f2613a78895a87690b0a7a3da1b5710d2a8576665a8530f07c551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c67ee90dd5f2613a78895a87690b0a7a3da1b5710d2a8576665a8530f07c551->enter($__internal_9c67ee90dd5f2613a78895a87690b0a7a3da1b5710d2a8576665a8530f07c551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 177
        echo "        ";
        $context["referer"] = ((((($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "nbPages", array())) && (1 != $this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPage", array()))) && (1 == $this->getAttribute($this->getAttribute(($context["paginator"] ?? $this->getContext($context, "paginator")), "currentPageResults", array()), "count", array())))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge($this->getAttribute($this->getAttribute(        // line 178
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), array("page" => ($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "page"), "method") - 1))))) : ($this->getAttribute($this->getAttribute(        // line 179
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "requestUri", array())));
        // line 181
        echo "
        ";
        // line 182
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "list", "referer" => twig_urlencode_filter(        // line 184
($context["referer"] ?? $this->getContext($context, "referer"))), "delete_form" =>         // line 185
($context["delete_form_template"] ?? $this->getContext($context, "delete_form_template")), "_translation_domain" => $this->getAttribute(        // line 186
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 187
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 188
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 189
        echo "
    ";
        
        $__internal_9c67ee90dd5f2613a78895a87690b0a7a3da1b5710d2a8576665a8530f07c551->leave($__internal_9c67ee90dd5f2613a78895a87690b0a7a3da1b5710d2a8576665a8530f07c551_prof);

        
        $__internal_43a69f696565c5a1f899076e27e954b8d18009f1839ed9a9496a9a3b47a9f1c7->leave($__internal_43a69f696565c5a1f899076e27e954b8d18009f1839ed9a9496a9a3b47a9f1c7_prof);

    }

    // line 193
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_a8abeeba94424e9c26ef6b69d1648ae288eb4e1cb1472ec0c0f30382f7b26d23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8abeeba94424e9c26ef6b69d1648ae288eb4e1cb1472ec0c0f30382f7b26d23->enter($__internal_a8abeeba94424e9c26ef6b69d1648ae288eb4e1cb1472ec0c0f30382f7b26d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_7433894c98f660d77b2210f6da154379eec92ad1292c10952e96bf19381cc9bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7433894c98f660d77b2210f6da154379eec92ad1292c10952e96bf19381cc9bb->enter($__internal_7433894c98f660d77b2210f6da154379eec92ad1292c10952e96bf19381cc9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 194
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", array("action" => "edit", "entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "view" => "list"));
        echo "\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 237
        if (("search" == $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "action"), "method"))) {
            // line 238
            echo "        <script type=\"text/javascript\">
            var _search_query = \"";
            // line 239
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "query"), "method"), "")) : ("")), "js"), "html", null, true);
            echo "\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    ";
        }
        
        $__internal_7433894c98f660d77b2210f6da154379eec92ad1292c10952e96bf19381cc9bb->leave($__internal_7433894c98f660d77b2210f6da154379eec92ad1292c10952e96bf19381cc9bb_prof);

        
        $__internal_a8abeeba94424e9c26ef6b69d1648ae288eb4e1cb1472ec0c0f30382f7b26d23->leave($__internal_a8abeeba94424e9c26ef6b69d1648ae288eb4e1cb1472ec0c0f30382f7b26d23_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  827 => 239,  824 => 238,  822 => 237,  788 => 206,  772 => 194,  763 => 193,  752 => 189,  750 => 188,  749 => 187,  748 => 186,  747 => 185,  746 => 184,  745 => 182,  742 => 181,  740 => 179,  739 => 178,  737 => 177,  728 => 176,  715 => 173,  706 => 172,  695 => 155,  693 => 154,  692 => 153,  691 => 152,  690 => 151,  689 => 150,  687 => 149,  678 => 148,  668 => 167,  658 => 163,  654 => 162,  651 => 161,  637 => 159,  633 => 157,  631 => 148,  626 => 147,  623 => 146,  621 => 145,  618 => 144,  609 => 141,  599 => 140,  596 => 139,  594 => 2,  592 => 138,  589 => 137,  585 => 136,  580 => 135,  577 => 134,  575 => 133,  556 => 132,  547 => 131,  536 => 126,  530 => 123,  527 => 122,  525 => 121,  522 => 120,  515 => 118,  509 => 116,  503 => 113,  499 => 112,  494 => 111,  492 => 110,  480 => 109,  477 => 108,  474 => 107,  472 => 2,  470 => 106,  467 => 105,  464 => 104,  460 => 103,  457 => 102,  448 => 101,  438 => 176,  435 => 175,  433 => 172,  427 => 168,  425 => 131,  420 => 128,  418 => 101,  412 => 97,  409 => 96,  400 => 95,  387 => 84,  385 => 2,  383 => 84,  377 => 83,  369 => 82,  366 => 81,  357 => 80,  343 => 68,  341 => 2,  340 => 68,  335 => 66,  330 => 64,  325 => 62,  321 => 61,  317 => 60,  313 => 59,  309 => 58,  306 => 57,  297 => 56,  285 => 73,  283 => 56,  279 => 55,  274 => 54,  265 => 53,  255 => 89,  252 => 88,  249 => 80,  246 => 79,  244 => 78,  241 => 77,  238 => 76,  236 => 53,  233 => 52,  230 => 51,  227 => 50,  218 => 49,  205 => 43,  196 => 42,  183 => 90,  181 => 49,  175 => 45,  173 => 42,  169 => 40,  160 => 39,  142 => 37,  124 => 24,  106 => 23,  96 => 5,  89 => 32,  88 => 2,  86 => 32,  83 => 31,  77 => 29,  74 => 28,  72 => 27,  70 => 26,  68 => 21,  65 => 18,  63 => 17,  61 => 14,  60 => 13,  59 => 12,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 7,  52 => 2,  51 => 3,  50 => 2,  49 => 3,  47 => 2,  45 => 1,  33 => 5,);
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
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% set _request_parameters = _request_parameters|default({})|merge({
    action: app.request.get('action'),
    entity: _entity_config.name,
    menuIndex: app.request.get('menuIndex'),
    submenuIndex: app.request.get('submenuIndex'),
    sortField: app.request.get('sortField', ''),
    sortDirection: app.request.get('sortDirection', 'DESC'),
    page: app.request.get('page', 1)
}) %}

{% if 'search' == app.request.get('action') %}
    {% set _request_parameters = _request_parameters|merge({ query: app.request.get('query')|default('') }) %}
{% endif %}

{% set _request_parameters = _request_parameters|merge({ referer: path('easyadmin', _request_parameters)|url_encode }) %}

{% block body_id 'easyadmin-list-' ~ _entity_config.name %}
{% block body_class 'list list-' ~ _entity_config.name|lower %}

{% set _content_title %}
{% spaceless %}
    {% if 'search' == app.request.get('action') %}
        {{ 'search.page_title'|transchoice(paginator.nbResults, {}, 'EasyAdminBundle')|raw }}
    {% else %}
        {% set _default_title = 'list.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
        {{ _entity_config.list.title is defined ? _entity_config.list.title|trans(_trans_parameters) : _default_title }}
    {% endif %}
{% endspaceless %}
{% endset %}

{% block page_title %}{{ _content_title|striptags|raw }}{% endblock %}

{% block content_header %}
    <div class=\"row\">
        <div class=\"col-sm-5\">
            {% block content_title_wrapper %}
                <h1 class=\"title\">{{ _content_title }}</h1>
            {% endblock %}
        </div>

        <div class=\"col-sm-7\">
            <div class=\"global-actions\">
                {% block global_actions %}
                    {% if easyadmin_action_is_enabled_for_list_view('search', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('search', _entity_config.name) %}

                        {% block search_action %}
                            <div class=\"form-action {{ _action.css_class|default('') }}\">
                                <form method=\"get\" action=\"{{ path('easyadmin') }}\">
                                    {% block search_form %}
                                        <input type=\"hidden\" name=\"action\" value=\"search\">
                                        <input type=\"hidden\" name=\"entity\" value=\"{{ _request_parameters.entity }}\">
                                        <input type=\"hidden\" name=\"sortField\" value=\"{{ _request_parameters.sortField }}\">
                                        <input type=\"hidden\" name=\"sortDirection\" value=\"{{ _request_parameters.sortDirection }}\">
                                        <input type=\"hidden\" name=\"menuIndex\" value=\"{{ _request_parameters.menuIndex }}\">
                                        <input type=\"hidden\" name=\"submenuIndex\" value=\"{{ _request_parameters.submenuIndex }}\">
                                        <div class=\"input-group\">
                                            <input class=\"form-control\" type=\"search\" name=\"query\" value=\"{{ app.request.get('query')|default('') }}\">
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn\" type=\"submit\" formtarget=\"{{ _action.target }}\">
                                                    <i class=\"fa fa-search\"></i>
                                                    <span class=\"hidden-xs hidden-sm\">{{ _action.label|default('action.search')|trans(_trans_parameters) }}</span>
                                                </button>
                                            </span>
                                        </div>
                                    {% endblock %}
                                </form>
                            </div>
                        {% endblock search_action %}
                    {% endif %}

                    {% if easyadmin_action_is_enabled_for_list_view('new', _entity_config.name) %}
                        {% set _action = easyadmin_get_action_for_list_view('new', _entity_config.name) %}
                        {% block new_action %}
                            <div class=\"button-action\">
                                <a class=\"{{ _action.css_class|default('') }}\" href=\"{{ path('easyadmin', _request_parameters|merge({ action: _action.name })) }}\" target=\"{{ _action.target }}\">
                                    {% if _action.icon %}<i class=\"fa fa-{{ _action.icon }}\"></i>{% endif %}
                                    {{ _action.label is defined and not _action.label is empty ? _action.label|trans(_trans_parameters) }}
                                </a>
                            </div>
                        {% endblock new_action %}
                    {% endif %}
                {% endblock global_actions %}
            </div>
        </div>
    </div>
{% endblock content_header %}

{% block main %}
    {% set _list_item_actions = easyadmin_get_actions_for_list_item(_entity_config.name) %}

    <div class=\"table-responsive\">
    <table class=\"table\">
        <thead>
        {% block table_head %}
            <tr>
                {% for field, metadata in fields %}
                    {% set isSortingField = metadata.property == app.request.get('sortField')|split('.')|first %}
                    {% set nextSortDirection = isSortingField ? (app.request.get('sortDirection') == 'DESC' ? 'ASC' : 'DESC') : 'DESC' %}
                    {% set _column_label = (metadata.label ?: field|humanize)|trans(_trans_parameters) %}
                    {% set _column_icon = isSortingField ? (nextSortDirection == 'DESC' ? 'fa-caret-up' : 'fa-caret-down') : 'fa-sort' %}

                    <th data-property-name=\"{{ metadata.property }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.virtual ? 'virtual' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                        {% if metadata.sortable %}
                            <a href=\"{{ path('easyadmin', _request_parameters|merge({ sortField: metadata.property, sortDirection: nextSortDirection })) }}\">
                                <i class=\"fa {{ _column_icon }}\"></i>
                                {{ _column_label|raw }}
                            </a>
                        {% else %}
                            <span>{{ _column_label|raw }}</span>
                        {% endif %}
                    </th>
                {% endfor %}

                {% if _list_item_actions|length > 0 %}
                    <th>
                        <span>{{ 'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') }}</span>
                    </th>
                {% endif %}
            </tr>
        {% endblock table_head %}
        </thead>

        <tbody>
        {% block table_body %}
            {% for item in paginator.currentPageResults %}
                {# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
                {% set _item_id = '' ~ attribute(item, _entity_config.primary_key_field_name) %}
                <tr data-id=\"{{ _item_id }}\">
                    {% for field, metadata in fields %}
                        {% set isSortingField = metadata.property == app.request.get('sortField') %}
                        {% set _column_label =  (metadata.label ?: field|humanize)|trans(_trans_parameters)  %}

                        <td data-label=\"{{ _column_label }}\" class=\"{{ isSortingField ? 'sorted' }} {{ metadata.dataType|lower }} {{ metadata.css_class }}\">
                            {{ easyadmin_render_field_for_list_view(_entity_config.name, item, metadata) }}
                        </td>
                    {% endfor %}

                    {% if _list_item_actions|length > 0 %}
                        {% set _column_label =  'list.row_actions'|trans(_trans_parameters, 'EasyAdminBundle') %}
                        <td data-label=\"{{ _column_label }}\" class=\"actions\">
                        {% block item_actions %}
                            {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                                actions: _list_item_actions,
                                request_parameters: _request_parameters,
                                translation_domain: _entity_config.translation_domain,
                                trans_parameters: _trans_parameters,
                                item_id: _item_id
                            }, with_context = false) }}
                        {% endblock item_actions %}
                        </td>
                    {% endif %}
                </tr>
            {% else %}
                <tr>
                    <td class=\"no-results\" colspan=\"{{ _list_item_actions|length > 0 ? fields|length + 1 : fields|length }}\">
                        {{ 'search.no_results'|trans(_trans_parameters, 'EasyAdminBundle') }}
                    </td>
                </tr>
            {% endfor %}
        {% endblock table_body %}
        </tbody>
    </table>
    </div>

    {% block paginator %}
        {{ include(_entity_config.templates.paginator) }}
    {% endblock paginator %}

    {% block delete_form %}
        {% set referer = paginator.currentPage == paginator.nbPages and 1 != paginator.currentPage and 1 == paginator.currentPageResults.count
            ? path('easyadmin', app.request.query|merge({ page: app.request.query.get('page') - 1 }))
            : app.request.requestUri
        %}

        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'list',
            referer: referer|url_encode,
            delete_form: delete_form_template,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock main %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('#main').find('table .toggle input[type=\"checkbox\"]').change(function() {
                var toggle = \$(this);
                var newValue = toggle.prop('checked');
                var oldValue = !newValue;

                var columnIndex = \$(this).closest('td').index() + 1;
                var propertyName = \$('table th.toggle:nth-child(' + columnIndex + ')').data('property-name');

                var toggleUrl = \"{{ path('easyadmin', { action: 'edit', entity: _entity_config.name, view: 'list' })|raw }}\"
                              + \"&id=\" + \$(this).closest('tr').data('id')
                              + \"&property=\" + propertyName
                              + \"&newValue=\" + newValue.toString();

                var toggleRequest = \$.ajax({ type: \"GET\", url: toggleUrl, data: {} });

                toggleRequest.done(function(result) {});

                toggleRequest.fail(function() {
                    // in case of error, restore the original value and disable the toggle
                    toggle.bootstrapToggle(oldValue == true ? 'on' : 'off');
                    toggle.bootstrapToggle('disable');
                });
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                var id = \$(this).parents('tr').first().data('id');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        var deleteForm = \$('#delete-form');
                        deleteForm.attr('action', deleteForm.attr('action').replace('__id__', id));
                        deleteForm.trigger('submit');
                    });
            });
        });
    </script>

    {% if 'search' == app.request.get('action') %}
        <script type=\"text/javascript\">
            var _search_query = \"{{ app.request.get('query')|default('')|e('js') }}\";
            // the original query is prepended to allow matching exact phrases in addition to single words
            \$('#main').find('table tbody').highlight(\$.merge([_search_query], _search_query.split(' ')));
        </script>
    {% endif %}
{% endblock %}
", "EasyAdminBundle:default:list.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/list.html.twig");
    }
}
