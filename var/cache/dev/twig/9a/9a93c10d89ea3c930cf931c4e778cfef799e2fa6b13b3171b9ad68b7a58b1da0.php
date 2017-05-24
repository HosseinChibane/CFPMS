<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_ae5ca93475001416ef738d41de2080524dd7ae6f1dca4268b281ec112ef7a30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03d8d05f1b29b2fca5f41c452742ce85fa83d34ba7f83c26feb581b418d78d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d8d05f1b29b2fca5f41c452742ce85fa83d34ba7f83c26feb581b418d78d55->enter($__internal_03d8d05f1b29b2fca5f41c452742ce85fa83d34ba7f83c26feb581b418d78d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        $__internal_90772c2813f1375b35d2c73cb5631e9ff9dd0cb58326d2273f5314c07608299c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90772c2813f1375b35d2c73cb5631e9ff9dd0cb58326d2273f5314c07608299c->enter($__internal_90772c2813f1375b35d2c73cb5631e9ff9dd0cb58326d2273f5314c07608299c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9"] ?? $this->getContext($context, "__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9"] ?? $this->getContext($context, "__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03d8d05f1b29b2fca5f41c452742ce85fa83d34ba7f83c26feb581b418d78d55->leave($__internal_03d8d05f1b29b2fca5f41c452742ce85fa83d34ba7f83c26feb581b418d78d55_prof);

        
        $__internal_90772c2813f1375b35d2c73cb5631e9ff9dd0cb58326d2273f5314c07608299c->leave($__internal_90772c2813f1375b35d2c73cb5631e9ff9dd0cb58326d2273f5314c07608299c_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ca2d124aaa6210836b7e315095bed294285b9a2d40a5b13164546e5fa43e23ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2d124aaa6210836b7e315095bed294285b9a2d40a5b13164546e5fa43e23ce->enter($__internal_ca2d124aaa6210836b7e315095bed294285b9a2d40a5b13164546e5fa43e23ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_1b45717e6271f916066bff7bb43b4edf844a4c6fc9e2c53e5254adde2757ffe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b45717e6271f916066bff7bb43b4edf844a4c6fc9e2c53e5254adde2757ffe0->enter($__internal_1b45717e6271f916066bff7bb43b4edf844a4c6fc9e2c53e5254adde2757ffe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_1b45717e6271f916066bff7bb43b4edf844a4c6fc9e2c53e5254adde2757ffe0->leave($__internal_1b45717e6271f916066bff7bb43b4edf844a4c6fc9e2c53e5254adde2757ffe0_prof);

        
        $__internal_ca2d124aaa6210836b7e315095bed294285b9a2d40a5b13164546e5fa43e23ce->leave($__internal_ca2d124aaa6210836b7e315095bed294285b9a2d40a5b13164546e5fa43e23ce_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a3424f5a9c9d0d698d84b50289ba5901ae608b5ba13959a3f118fb304247111b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3424f5a9c9d0d698d84b50289ba5901ae608b5ba13959a3f118fb304247111b->enter($__internal_a3424f5a9c9d0d698d84b50289ba5901ae608b5ba13959a3f118fb304247111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_be02f3891d37059fd903a4127f70b39c0e6399757491ac46721c6479b8ef0451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be02f3891d37059fd903a4127f70b39c0e6399757491ac46721c6479b8ef0451->enter($__internal_be02f3891d37059fd903a4127f70b39c0e6399757491ac46721c6479b8ef0451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_be02f3891d37059fd903a4127f70b39c0e6399757491ac46721c6479b8ef0451->leave($__internal_be02f3891d37059fd903a4127f70b39c0e6399757491ac46721c6479b8ef0451_prof);

        
        $__internal_a3424f5a9c9d0d698d84b50289ba5901ae608b5ba13959a3f118fb304247111b->leave($__internal_a3424f5a9c9d0d698d84b50289ba5901ae608b5ba13959a3f118fb304247111b_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_1e4d7453c2497855afa18c980f7acabed6bc346379fc4761c754c8ae81a2559b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4d7453c2497855afa18c980f7acabed6bc346379fc4761c754c8ae81a2559b->enter($__internal_1e4d7453c2497855afa18c980f7acabed6bc346379fc4761c754c8ae81a2559b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_a35db10c900c0300d4a7a726d9f47bf7802fa52bee54ca39c919da276d1ce190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a35db10c900c0300d4a7a726d9f47bf7802fa52bee54ca39c919da276d1ce190->enter($__internal_a35db10c900c0300d4a7a726d9f47bf7802fa52bee54ca39c919da276d1ce190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9"] ?? $this->getContext($context, "__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a35db10c900c0300d4a7a726d9f47bf7802fa52bee54ca39c919da276d1ce190->leave($__internal_a35db10c900c0300d4a7a726d9f47bf7802fa52bee54ca39c919da276d1ce190_prof);

        
        $__internal_1e4d7453c2497855afa18c980f7acabed6bc346379fc4761c754c8ae81a2559b->leave($__internal_1e4d7453c2497855afa18c980f7acabed6bc346379fc4761c754c8ae81a2559b_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_776b533d04c65c14e8cdd1fa090d0e298bdeddac3d78236e8607f745192eb07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_776b533d04c65c14e8cdd1fa090d0e298bdeddac3d78236e8607f745192eb07b->enter($__internal_776b533d04c65c14e8cdd1fa090d0e298bdeddac3d78236e8607f745192eb07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_79442e4a6d78a3bb91cdd0e200961c9cd2f4a9841a4597f3cb4c46b6d3a595c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79442e4a6d78a3bb91cdd0e200961c9cd2f4a9841a4597f3cb4c46b6d3a595c8->enter($__internal_79442e4a6d78a3bb91cdd0e200961c9cd2f4a9841a4597f3cb4c46b6d3a595c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 4
($context["__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9"] ?? $this->getContext($context, "__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9")));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 4
($context["__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9"] ?? $this->getContext($context, "__internal_cc3a5d3b8017539a35c9b2edab269d400ffb8299e4aad23f593c5a2775df3ff9")));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_79442e4a6d78a3bb91cdd0e200961c9cd2f4a9841a4597f3cb4c46b6d3a595c8->leave($__internal_79442e4a6d78a3bb91cdd0e200961c9cd2f4a9841a4597f3cb4c46b6d3a595c8_prof);

        
        $__internal_776b533d04c65c14e8cdd1fa090d0e298bdeddac3d78236e8607f745192eb07b->leave($__internal_776b533d04c65c14e8cdd1fa090d0e298bdeddac3d78236e8607f745192eb07b_prof);

    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_53890625857b374d7a09c7c179895c2a5c5b07515a5c2981750e3ed200fe75ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53890625857b374d7a09c7c179895c2a5c5b07515a5c2981750e3ed200fe75ec->enter($__internal_53890625857b374d7a09c7c179895c2a5c5b07515a5c2981750e3ed200fe75ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_73e3904326c7a04f4883bbdfadb39b9314678461dd1f6de73996787d69ecb51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e3904326c7a04f4883bbdfadb39b9314678461dd1f6de73996787d69ecb51d->enter($__internal_73e3904326c7a04f4883bbdfadb39b9314678461dd1f6de73996787d69ecb51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 46
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 47
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 48
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 49
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 50
        echo "
            ";
        
        $__internal_73e3904326c7a04f4883bbdfadb39b9314678461dd1f6de73996787d69ecb51d->leave($__internal_73e3904326c7a04f4883bbdfadb39b9314678461dd1f6de73996787d69ecb51d_prof);

        
        $__internal_53890625857b374d7a09c7c179895c2a5c5b07515a5c2981750e3ed200fe75ec->leave($__internal_53890625857b374d7a09c7c179895c2a5c5b07515a5c2981750e3ed200fe75ec_prof);

    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_95508dc0763d8b31fd64f34886e2fda7e1779a5871098bc635f020c52d9adef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95508dc0763d8b31fd64f34886e2fda7e1779a5871098bc635f020c52d9adef4->enter($__internal_95508dc0763d8b31fd64f34886e2fda7e1779a5871098bc635f020c52d9adef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_10aca39841ed0cb9e59fbe527f1879ef286d1b5568fb86789994823bad13f97f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10aca39841ed0cb9e59fbe527f1879ef286d1b5568fb86789994823bad13f97f->enter($__internal_10aca39841ed0cb9e59fbe527f1879ef286d1b5568fb86789994823bad13f97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 59
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 61
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 62
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 63
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 64
        echo "
    ";
        
        $__internal_10aca39841ed0cb9e59fbe527f1879ef286d1b5568fb86789994823bad13f97f->leave($__internal_10aca39841ed0cb9e59fbe527f1879ef286d1b5568fb86789994823bad13f97f_prof);

        
        $__internal_95508dc0763d8b31fd64f34886e2fda7e1779a5871098bc635f020c52d9adef4->leave($__internal_95508dc0763d8b31fd64f34886e2fda7e1779a5871098bc635f020c52d9adef4_prof);

    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_bb262d03a32d5f795d75d6849d7743d990d5df790c41e248a21c81bcc7508213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb262d03a32d5f795d75d6849d7743d990d5df790c41e248a21c81bcc7508213->enter($__internal_bb262d03a32d5f795d75d6849d7743d990d5df790c41e248a21c81bcc7508213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_b5df7ee5b49e6f54e9e721bd5ae86aae3ca3d518c3c6b13850cb52d741a4bc1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5df7ee5b49e6f54e9e721bd5ae86aae3ca3d518c3c6b13850cb52d741a4bc1f->enter($__internal_b5df7ee5b49e6f54e9e721bd5ae86aae3ca3d518c3c6b13850cb52d741a4bc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
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
        
        $__internal_b5df7ee5b49e6f54e9e721bd5ae86aae3ca3d518c3c6b13850cb52d741a4bc1f->leave($__internal_b5df7ee5b49e6f54e9e721bd5ae86aae3ca3d518c3c6b13850cb52d741a4bc1f_prof);

        
        $__internal_bb262d03a32d5f795d75d6849d7743d990d5df790c41e248a21c81bcc7508213->leave($__internal_bb262d03a32d5f795d75d6849d7743d990d5df790c41e248a21c81bcc7508213_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 69,  268 => 68,  257 => 64,  255 => 63,  254 => 62,  253 => 61,  252 => 60,  251 => 59,  249 => 57,  240 => 56,  229 => 50,  227 => 49,  226 => 48,  225 => 47,  224 => 46,  223 => 45,  222 => 44,  219 => 43,  216 => 42,  213 => 41,  204 => 40,  194 => 56,  188 => 52,  186 => 40,  181 => 37,  173 => 34,  169 => 32,  167 => 4,  165 => 32,  163 => 31,  157 => 28,  151 => 24,  149 => 4,  148 => 24,  140 => 22,  136 => 21,  133 => 20,  124 => 19,  111 => 15,  110 => 4,  108 => 15,  105 => 14,  103 => 13,  94 => 12,  76 => 10,  58 => 9,  48 => 7,  46 => 5,  45 => 4,  44 => 5,  43 => 4,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 7,);
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
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
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
{% endblock %}
", "@EasyAdmin/default/show.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\show.html.twig");
    }
}
