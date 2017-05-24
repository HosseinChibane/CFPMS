<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_fbec22a2509e4674c9d1ee77850473cd468cfcb37be965c5efd99f713ff0c5f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'user_menu_dropdown' => array($this, 'block_user_menu_dropdown'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'content_help' => array($this, 'block_content_help'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f044951a40a3845b938766960b62cef979ce03528959576c9ad53448a4b228a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f044951a40a3845b938766960b62cef979ce03528959576c9ad53448a4b228a->enter($__internal_1f044951a40a3845b938766960b62cef979ce03528959576c9ad53448a4b228a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_89723b4ecd9c7b9fe2713466bef74e7a85818fa8b84a1bad2840b06be87a190a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89723b4ecd9c7b9fe2713466bef74e7a85818fa8b84a1bad2840b06be87a190a->enter($__internal_89723b4ecd9c7b9fe2713466bef74e7a85818fa8b84a1bad2840b06be87a190a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 10
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 12
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 18
        echo "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 20
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 27
        echo "
        ";
        // line 28
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 45
        echo "
        ";
        // line 46
        if ($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.rtl")) {
            // line 47
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/bootstrap-rtl.min.css"), "html", null, true);
            echo "\">
            <link rel=\"stylesheet\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/adminlte-rtl.min.css"), "html", null, true);
            echo "\">
        ";
        }
        // line 50
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 167
        echo "</html>
";
        
        $__internal_1f044951a40a3845b938766960b62cef979ce03528959576c9ad53448a4b228a->leave($__internal_1f044951a40a3845b938766960b62cef979ce03528959576c9ad53448a4b228a_prof);

        
        $__internal_89723b4ecd9c7b9fe2713466bef74e7a85818fa8b84a1bad2840b06be87a190a->leave($__internal_89723b4ecd9c7b9fe2713466bef74e7a85818fa8b84a1bad2840b06be87a190a_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8054a03b65f25c76e78184335a387e12398ffdf13d3a1c456477e5dd37e537eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8054a03b65f25c76e78184335a387e12398ffdf13d3a1c456477e5dd37e537eb->enter($__internal_8054a03b65f25c76e78184335a387e12398ffdf13d3a1c456477e5dd37e537eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_87cb58cc978e73f8ffc265b7cf1af12ca1adb50261c4ccff16e3a77c55c064a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87cb58cc978e73f8ffc265b7cf1af12ca1adb50261c4ccff16e3a77c55c064a5->enter($__internal_87cb58cc978e73f8ffc265b7cf1af12ca1adb50261c4ccff16e3a77c55c064a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_87cb58cc978e73f8ffc265b7cf1af12ca1adb50261c4ccff16e3a77c55c064a5->leave($__internal_87cb58cc978e73f8ffc265b7cf1af12ca1adb50261c4ccff16e3a77c55c064a5_prof);

        
        $__internal_8054a03b65f25c76e78184335a387e12398ffdf13d3a1c456477e5dd37e537eb->leave($__internal_8054a03b65f25c76e78184335a387e12398ffdf13d3a1c456477e5dd37e537eb_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_cc75c8524fba828af71929a68351d8b0353735ee2f27d781cdb7fdd8604d0fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc75c8524fba828af71929a68351d8b0353735ee2f27d781cdb7fdd8604d0fe8->enter($__internal_cc75c8524fba828af71929a68351d8b0353735ee2f27d781cdb7fdd8604d0fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_fc3742a93f9c68715c2f9fdfbd8c036372ec41a69ba91a181e539a86b4728bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3742a93f9c68715c2f9fdfbd8c036372ec41a69ba91a181e539a86b4728bc2->enter($__internal_fc3742a93f9c68715c2f9fdfbd8c036372ec41a69ba91a181e539a86b4728bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 13
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 15
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_fc3742a93f9c68715c2f9fdfbd8c036372ec41a69ba91a181e539a86b4728bc2->leave($__internal_fc3742a93f9c68715c2f9fdfbd8c036372ec41a69ba91a181e539a86b4728bc2_prof);

        
        $__internal_cc75c8524fba828af71929a68351d8b0353735ee2f27d781cdb7fdd8604d0fe8->leave($__internal_cc75c8524fba828af71929a68351d8b0353735ee2f27d781cdb7fdd8604d0fe8_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_063550ae478f81e29759cb1c9d7045cb21885c6c2c7716c4c0192cae6287699f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063550ae478f81e29759cb1c9d7045cb21885c6c2c7716c4c0192cae6287699f->enter($__internal_063550ae478f81e29759cb1c9d7045cb21885c6c2c7716c4c0192cae6287699f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_e460b4b5d419a65d5ae4e3918df358a7bb4a1280d60dd035bd7eaed7b6d8e230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e460b4b5d419a65d5ae4e3918df358a7bb4a1280d60dd035bd7eaed7b6d8e230->enter($__internal_e460b4b5d419a65d5ae4e3918df358a7bb4a1280d60dd035bd7eaed7b6d8e230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 24
        echo "            ";
        $context["favicon"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.favicon");
        // line 25
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute(($context["favicon"] ?? $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e460b4b5d419a65d5ae4e3918df358a7bb4a1280d60dd035bd7eaed7b6d8e230->leave($__internal_e460b4b5d419a65d5ae4e3918df358a7bb4a1280d60dd035bd7eaed7b6d8e230_prof);

        
        $__internal_063550ae478f81e29759cb1c9d7045cb21885c6c2c7716c4c0192cae6287699f->leave($__internal_063550ae478f81e29759cb1c9d7045cb21885c6c2c7716c4c0192cae6287699f_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_9714c2445e3bbf3deb96ac5f4e8ef067f3ba2c3cad92bb8315081bcf50a40f0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9714c2445e3bbf3deb96ac5f4e8ef067f3ba2c3cad92bb8315081bcf50a40f0f->enter($__internal_9714c2445e3bbf3deb96ac5f4e8ef067f3ba2c3cad92bb8315081bcf50a40f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_90cef77840e97e9bfd3d1beac0d8e1a8bb5ddf719920330dd93a6bda0b7c88da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90cef77840e97e9bfd3d1beac0d8e1a8bb5ddf719920330dd93a6bda0b7c88da->enter($__internal_90cef77840e97e9bfd3d1beac0d8e1a8bb5ddf719920330dd93a6bda0b7c88da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 29
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 42
        echo "
            <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_90cef77840e97e9bfd3d1beac0d8e1a8bb5ddf719920330dd93a6bda0b7c88da->leave($__internal_90cef77840e97e9bfd3d1beac0d8e1a8bb5ddf719920330dd93a6bda0b7c88da_prof);

        
        $__internal_9714c2445e3bbf3deb96ac5f4e8ef067f3ba2c3cad92bb8315081bcf50a40f0f->leave($__internal_9714c2445e3bbf3deb96ac5f4e8ef067f3ba2c3cad92bb8315081bcf50a40f0f_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_516e2a4268cd1d73f9fd72eca48a33035719df28eef79c5274f7118a84f56ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516e2a4268cd1d73f9fd72eca48a33035719df28eef79c5274f7118a84f56ef7->enter($__internal_516e2a4268cd1d73f9fd72eca48a33035719df28eef79c5274f7118a84f56ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_36e4b34bcc5609e34712117c6696bf354b02d027d0fdee3805e87b628202b33e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e4b34bcc5609e34712117c6696bf354b02d027d0fdee3805e87b628202b33e->enter($__internal_36e4b34bcc5609e34712117c6696bf354b02d027d0fdee3805e87b628202b33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 30
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_36e4b34bcc5609e34712117c6696bf354b02d027d0fdee3805e87b628202b33e->leave($__internal_36e4b34bcc5609e34712117c6696bf354b02d027d0fdee3805e87b628202b33e_prof);

        
        $__internal_516e2a4268cd1d73f9fd72eca48a33035719df28eef79c5274f7118a84f56ef7->leave($__internal_516e2a4268cd1d73f9fd72eca48a33035719df28eef79c5274f7118a84f56ef7_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_44db6c5cf5afbb76e780077c5387ba21598ec6638d596a587581847b08c17e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44db6c5cf5afbb76e780077c5387ba21598ec6638d596a587581847b08c17e2a->enter($__internal_44db6c5cf5afbb76e780077c5387ba21598ec6638d596a587581847b08c17e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d68fc33eb2e7fc806351734acdb4a217eb0d7a96ebee395031f586b12ec1c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d68fc33eb2e7fc806351734acdb4a217eb0d7a96ebee395031f586b12ec1c5a->enter($__internal_6d68fc33eb2e7fc806351734acdb4a217eb0d7a96ebee395031f586b12ec1c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 60
        $this->displayBlock('wrapper', $context, $blocks);
        // line 158
        echo "        </div>

        ";
        // line 160
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 161
        echo "
        ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 163
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "    </body>
    ";
        
        $__internal_6d68fc33eb2e7fc806351734acdb4a217eb0d7a96ebee395031f586b12ec1c5a->leave($__internal_6d68fc33eb2e7fc806351734acdb4a217eb0d7a96ebee395031f586b12ec1c5a_prof);

        
        $__internal_44db6c5cf5afbb76e780077c5387ba21598ec6638d596a587581847b08c17e2a->leave($__internal_44db6c5cf5afbb76e780077c5387ba21598ec6638d596a587581847b08c17e2a_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_93c994872b4c4dce89c1a13a2dd171d76b295aa78987baa239d136b63822e0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c994872b4c4dce89c1a13a2dd171d76b295aa78987baa239d136b63822e0da->enter($__internal_93c994872b4c4dce89c1a13a2dd171d76b295aa78987baa239d136b63822e0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_010767f114e6129a5ec4a68ea10d3be264fc03f2463cd8e45be35cae2b32356e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_010767f114e6129a5ec4a68ea10d3be264fc03f2463cd8e45be35cae2b32356e->enter($__internal_010767f114e6129a5ec4a68ea10d3be264fc03f2463cd8e45be35cae2b32356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_010767f114e6129a5ec4a68ea10d3be264fc03f2463cd8e45be35cae2b32356e->leave($__internal_010767f114e6129a5ec4a68ea10d3be264fc03f2463cd8e45be35cae2b32356e_prof);

        
        $__internal_93c994872b4c4dce89c1a13a2dd171d76b295aa78987baa239d136b63822e0da->leave($__internal_93c994872b4c4dce89c1a13a2dd171d76b295aa78987baa239d136b63822e0da_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_83933cf9e86bee225a87b18c00ef082c1d2718f6607853a2aa4a5b1412c666b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83933cf9e86bee225a87b18c00ef082c1d2718f6607853a2aa4a5b1412c666b6->enter($__internal_83933cf9e86bee225a87b18c00ef082c1d2718f6607853a2aa4a5b1412c666b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_ae7762f87799c725c3dd07c6dd1176bc99ec889546e05e3a31a3c0d95ac80688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae7762f87799c725c3dd07c6dd1176bc99ec889546e05e3a31a3c0d95ac80688->enter($__internal_ae7762f87799c725c3dd07c6dd1176bc99ec889546e05e3a31a3c0d95ac80688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_ae7762f87799c725c3dd07c6dd1176bc99ec889546e05e3a31a3c0d95ac80688->leave($__internal_ae7762f87799c725c3dd07c6dd1176bc99ec889546e05e3a31a3c0d95ac80688_prof);

        
        $__internal_83933cf9e86bee225a87b18c00ef082c1d2718f6607853a2aa4a5b1412c666b6->leave($__internal_83933cf9e86bee225a87b18c00ef082c1d2718f6607853a2aa4a5b1412c666b6_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_8c6f8512ac9e663b205ec9bae9b5077d0b754ea951b65de30cec9c9716bcd714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6f8512ac9e663b205ec9bae9b5077d0b754ea951b65de30cec9c9716bcd714->enter($__internal_8c6f8512ac9e663b205ec9bae9b5077d0b754ea951b65de30cec9c9716bcd714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_293b4d9f222adf673a5f094a7a9e6975e7d5e6af4a3d7ec0177e0fc5dd3175e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_293b4d9f222adf673a5f094a7a9e6975e7d5e6af4a3d7ec0177e0fc5dd3175e1->enter($__internal_293b4d9f222adf673a5f094a7a9e6975e7d5e6af4a3d7ec0177e0fc5dd3175e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 61
        echo "            <header class=\"main-header\">
            ";
        // line 62
        $this->displayBlock('header', $context, $blocks);
        // line 115
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 118
        $this->displayBlock('sidebar', $context, $blocks);
        // line 129
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 132
        $this->displayBlock('content', $context, $blocks);
        // line 156
        echo "            </div>
        ";
        
        $__internal_293b4d9f222adf673a5f094a7a9e6975e7d5e6af4a3d7ec0177e0fc5dd3175e1->leave($__internal_293b4d9f222adf673a5f094a7a9e6975e7d5e6af4a3d7ec0177e0fc5dd3175e1_prof);

        
        $__internal_8c6f8512ac9e663b205ec9bae9b5077d0b754ea951b65de30cec9c9716bcd714->leave($__internal_8c6f8512ac9e663b205ec9bae9b5077d0b754ea951b65de30cec9c9716bcd714_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_24ec86598caa122018f34ab0241e9d9c51e568814cf13bfd4165e87b9dcaa813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ec86598caa122018f34ab0241e9d9c51e568814cf13bfd4165e87b9dcaa813->enter($__internal_24ec86598caa122018f34ab0241e9d9c51e568814cf13bfd4165e87b9dcaa813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_b38955e959fbf37e425bbf9f898482924b013abf647094bc18388325da400f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38955e959fbf37e425bbf9f898482924b013abf647094bc18388325da400f0e->enter($__internal_b38955e959fbf37e425bbf9f898482924b013abf647094bc18388325da400f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 63
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 69
        $this->displayBlock('header_logo', $context, $blocks);
        // line 74
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 77
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 112
        echo "                    </div>
                </nav>
            ";
        
        $__internal_b38955e959fbf37e425bbf9f898482924b013abf647094bc18388325da400f0e->leave($__internal_b38955e959fbf37e425bbf9f898482924b013abf647094bc18388325da400f0e_prof);

        
        $__internal_24ec86598caa122018f34ab0241e9d9c51e568814cf13bfd4165e87b9dcaa813->leave($__internal_24ec86598caa122018f34ab0241e9d9c51e568814cf13bfd4165e87b9dcaa813_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_281dc73b73eead791e8eee054bfda2100c890a931ea454ed017aa8df12ce6048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281dc73b73eead791e8eee054bfda2100c890a931ea454ed017aa8df12ce6048->enter($__internal_281dc73b73eead791e8eee054bfda2100c890a931ea454ed017aa8df12ce6048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_44293796aeda8e47a33b0f88ba29773416f7c4798f548770ad3cdf1f009ed7f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44293796aeda8e47a33b0f88ba29773416f7c4798f548770ad3cdf1f009ed7f3->enter($__internal_44293796aeda8e47a33b0f88ba29773416f7c4798f548770ad3cdf1f009ed7f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 70
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin");
        echo "\">
                                ";
        // line 71
        echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_44293796aeda8e47a33b0f88ba29773416f7c4798f548770ad3cdf1f009ed7f3->leave($__internal_44293796aeda8e47a33b0f88ba29773416f7c4798f548770ad3cdf1f009ed7f3_prof);

        
        $__internal_281dc73b73eead791e8eee054bfda2100c890a931ea454ed017aa8df12ce6048->leave($__internal_281dc73b73eead791e8eee054bfda2100c890a931ea454ed017aa8df12ce6048_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_7b39ab9637d47572fa80780aacdb9fad108b97d437307ae9e94f01483ceac77b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b39ab9637d47572fa80780aacdb9fad108b97d437307ae9e94f01483ceac77b->enter($__internal_7b39ab9637d47572fa80780aacdb9fad108b97d437307ae9e94f01483ceac77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_72d9ac43354f09dc664e4993164a79b4a14e81497cff89dbaed509708559c381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d9ac43354f09dc664e4993164a79b4a14e81497cff89dbaed509708559c381->enter($__internal_72d9ac43354f09dc664e4993164a79b4a14e81497cff89dbaed509708559c381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 78
        echo "                        ";
        $context["_logout_path"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getLogoutPath();
        // line 79
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                ";
        // line 81
        $this->displayBlock('user_menu', $context, $blocks);
        // line 109
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_72d9ac43354f09dc664e4993164a79b4a14e81497cff89dbaed509708559c381->leave($__internal_72d9ac43354f09dc664e4993164a79b4a14e81497cff89dbaed509708559c381_prof);

        
        $__internal_7b39ab9637d47572fa80780aacdb9fad108b97d437307ae9e94f01483ceac77b->leave($__internal_7b39ab9637d47572fa80780aacdb9fad108b97d437307ae9e94f01483ceac77b_prof);

    }

    // line 81
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_db4de6b2050cad7a56264f3666121dcc82adfe60e55ba84302c2397c4574021a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4de6b2050cad7a56264f3666121dcc82adfe60e55ba84302c2397c4574021a->enter($__internal_db4de6b2050cad7a56264f3666121dcc82adfe60e55ba84302c2397c4574021a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_c147c43262c9020a4db86c66d74905b3712108d65e880761d569a0b844fe9bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c147c43262c9020a4db86c66d74905b3712108d65e880761d569a0b844fe9bc1->enter($__internal_c147c43262c9020a4db86c66d74905b3712108d65e880761d569a0b844fe9bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 82
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>

                                    ";
        // line 84
        if (((($this->getAttribute(($context["app"] ?? null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["app"] ?? null), "user", array()), false)) : (false)) == false)) {
            // line 85
            echo "                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        ";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        } elseif ( !        // line 87
($context["_logout_path"] ?? $this->getContext($context, "_logout_path"))) {
            // line 88
            echo "                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        ";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 91
            echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                ";
            // line 94
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                ";
            // line 100
            $this->displayBlock('user_menu_dropdown', $context, $blocks);
            // line 105
            echo "                                            </ul>
                                        </div>
                                    ";
        }
        // line 108
        echo "                                ";
        
        $__internal_c147c43262c9020a4db86c66d74905b3712108d65e880761d569a0b844fe9bc1->leave($__internal_c147c43262c9020a4db86c66d74905b3712108d65e880761d569a0b844fe9bc1_prof);

        
        $__internal_db4de6b2050cad7a56264f3666121dcc82adfe60e55ba84302c2397c4574021a->leave($__internal_db4de6b2050cad7a56264f3666121dcc82adfe60e55ba84302c2397c4574021a_prof);

    }

    // line 100
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_de0efacf2bdcfe727243d7c3a3d0334fc4f32f809b7eda66bc720def504d80ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de0efacf2bdcfe727243d7c3a3d0334fc4f32f809b7eda66bc720def504d80ac->enter($__internal_de0efacf2bdcfe727243d7c3a3d0334fc4f32f809b7eda66bc720def504d80ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_f3670263c1da23231617f22643983d5fcf6aba60f72d5449125dfeda2e478343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3670263c1da23231617f22643983d5fcf6aba60f72d5449125dfeda2e478343->enter($__internal_f3670263c1da23231617f22643983d5fcf6aba60f72d5449125dfeda2e478343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        // line 101
        echo "                                                <li>
                                                    <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["_logout_path"] ?? $this->getContext($context, "_logout_path")), "html", null, true);
        echo "\"><i class=\"fa fa-sign-out\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.signout", array(), "EasyAdminBundle"), "html", null, true);
        echo "</a>
                                                </li>
                                                ";
        
        $__internal_f3670263c1da23231617f22643983d5fcf6aba60f72d5449125dfeda2e478343->leave($__internal_f3670263c1da23231617f22643983d5fcf6aba60f72d5449125dfeda2e478343_prof);

        
        $__internal_de0efacf2bdcfe727243d7c3a3d0334fc4f32f809b7eda66bc720def504d80ac->leave($__internal_de0efacf2bdcfe727243d7c3a3d0334fc4f32f809b7eda66bc720def504d80ac_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f8712c576eee2ba633cd7b886d61ed4c7b80e9287630c8a010747987891b524d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8712c576eee2ba633cd7b886d61ed4c7b80e9287630c8a010747987891b524d->enter($__internal_f8712c576eee2ba633cd7b886d61ed4c7b80e9287630c8a010747987891b524d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_bb75aae3733e14f3cc15f494eb75d8cd6a388bf2212460babfb287163f776b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb75aae3733e14f3cc15f494eb75d8cd6a388bf2212460babfb287163f776b33->enter($__internal_bb75aae3733e14f3cc15f494eb75d8cd6a388bf2212460babfb287163f776b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_bb75aae3733e14f3cc15f494eb75d8cd6a388bf2212460babfb287163f776b33->leave($__internal_bb75aae3733e14f3cc15f494eb75d8cd6a388bf2212460babfb287163f776b33_prof);

        
        $__internal_f8712c576eee2ba633cd7b886d61ed4c7b80e9287630c8a010747987891b524d->leave($__internal_f8712c576eee2ba633cd7b886d61ed4c7b80e9287630c8a010747987891b524d_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_f694a4ca7fd71d3fc8bee0f12f370fe90a4eed3a6cea89d712b4b055e2271597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f694a4ca7fd71d3fc8bee0f12f370fe90a4eed3a6cea89d712b4b055e2271597->enter($__internal_f694a4ca7fd71d3fc8bee0f12f370fe90a4eed3a6cea89d712b4b055e2271597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_a5936cfabb449fc0d33f0ff96ac474be6b7679b49b6a335c0bf31c2684ed33b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5936cfabb449fc0d33f0ff96ac474be6b7679b49b6a335c0bf31c2684ed33b5->enter($__internal_a5936cfabb449fc0d33f0ff96ac474be6b7679b49b6a335c0bf31c2684ed33b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_a5936cfabb449fc0d33f0ff96ac474be6b7679b49b6a335c0bf31c2684ed33b5->leave($__internal_a5936cfabb449fc0d33f0ff96ac474be6b7679b49b6a335c0bf31c2684ed33b5_prof);

        
        $__internal_f694a4ca7fd71d3fc8bee0f12f370fe90a4eed3a6cea89d712b4b055e2271597->leave($__internal_f694a4ca7fd71d3fc8bee0f12f370fe90a4eed3a6cea89d712b4b055e2271597_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_cd242e53faa250dd26cfaf843ef61887b95cfd0af398ae9d63c02831f62a3f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd242e53faa250dd26cfaf843ef61887b95cfd0af398ae9d63c02831f62a3f89->enter($__internal_cd242e53faa250dd26cfaf843ef61887b95cfd0af398ae9d63c02831f62a3f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_11ec852ff5a1d667e945ae4a686e3df172298539ce5d4ee3f6a249fadd1d2f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ec852ff5a1d667e945ae4a686e3df172298539ce5d4ee3f6a249fadd1d2f63->enter($__internal_11ec852ff5a1d667e945ae4a686e3df172298539ce5d4ee3f6a249fadd1d2f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 133
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 136
        echo "
                <section class=\"content-header\">
                ";
        // line 138
        $this->displayBlock('content_header', $context, $blocks);
        // line 141
        echo "                ";
        $this->displayBlock('content_help', $context, $blocks);
        // line 150
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 153
        $this->displayBlock('main', $context, $blocks);
        // line 154
        echo "                </section>
            ";
        
        $__internal_11ec852ff5a1d667e945ae4a686e3df172298539ce5d4ee3f6a249fadd1d2f63->leave($__internal_11ec852ff5a1d667e945ae4a686e3df172298539ce5d4ee3f6a249fadd1d2f63_prof);

        
        $__internal_cd242e53faa250dd26cfaf843ef61887b95cfd0af398ae9d63c02831f62a3f89->leave($__internal_cd242e53faa250dd26cfaf843ef61887b95cfd0af398ae9d63c02831f62a3f89_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_c5ebb66ce4e1357910342eeea4fc5046ba652f9c954a06819ad1feec7b45e1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5ebb66ce4e1357910342eeea4fc5046ba652f9c954a06819ad1feec7b45e1ac->enter($__internal_c5ebb66ce4e1357910342eeea4fc5046ba652f9c954a06819ad1feec7b45e1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_8405ba39f1dde267f360725760f8eab8958d20076d3dcede565ca169302c66d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8405ba39f1dde267f360725760f8eab8958d20076d3dcede565ca169302c66d5->enter($__internal_8405ba39f1dde267f360725760f8eab8958d20076d3dcede565ca169302c66d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_8405ba39f1dde267f360725760f8eab8958d20076d3dcede565ca169302c66d5->leave($__internal_8405ba39f1dde267f360725760f8eab8958d20076d3dcede565ca169302c66d5_prof);

        
        $__internal_c5ebb66ce4e1357910342eeea4fc5046ba652f9c954a06819ad1feec7b45e1ac->leave($__internal_c5ebb66ce4e1357910342eeea4fc5046ba652f9c954a06819ad1feec7b45e1ac_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_039cd02c5bc591d412bb8815e0ff807630f158ca75cfde2fbec398c6f1a433f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_039cd02c5bc591d412bb8815e0ff807630f158ca75cfde2fbec398c6f1a433f2->enter($__internal_039cd02c5bc591d412bb8815e0ff807630f158ca75cfde2fbec398c6f1a433f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_3be13682a670fbff58bf92a03f7bca47b960c207c3a02dcad0cdda125ffe9931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be13682a670fbff58bf92a03f7bca47b960c207c3a02dcad0cdda125ffe9931->enter($__internal_3be13682a670fbff58bf92a03f7bca47b960c207c3a02dcad0cdda125ffe9931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_3be13682a670fbff58bf92a03f7bca47b960c207c3a02dcad0cdda125ffe9931->leave($__internal_3be13682a670fbff58bf92a03f7bca47b960c207c3a02dcad0cdda125ffe9931_prof);

        
        $__internal_039cd02c5bc591d412bb8815e0ff807630f158ca75cfde2fbec398c6f1a433f2->leave($__internal_039cd02c5bc591d412bb8815e0ff807630f158ca75cfde2fbec398c6f1a433f2_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_76715a27a7054aff33c30b2f359e26b7a3f537b9a7971206cc3f2060fd5d2b3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76715a27a7054aff33c30b2f359e26b7a3f537b9a7971206cc3f2060fd5d2b3d->enter($__internal_76715a27a7054aff33c30b2f359e26b7a3f537b9a7971206cc3f2060fd5d2b3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_63d7166c8e46bd31827bea2dfdd111890fbd22ec63c54ebb59e5533f88a44104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d7166c8e46bd31827bea2dfdd111890fbd22ec63c54ebb59e5533f88a44104->enter($__internal_63d7166c8e46bd31827bea2dfdd111890fbd22ec63c54ebb59e5533f88a44104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_63d7166c8e46bd31827bea2dfdd111890fbd22ec63c54ebb59e5533f88a44104->leave($__internal_63d7166c8e46bd31827bea2dfdd111890fbd22ec63c54ebb59e5533f88a44104_prof);

        
        $__internal_76715a27a7054aff33c30b2f359e26b7a3f537b9a7971206cc3f2060fd5d2b3d->leave($__internal_76715a27a7054aff33c30b2f359e26b7a3f537b9a7971206cc3f2060fd5d2b3d_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_d50c06adcc220e8ab07c88a1766ec9d5afd944fd624b2e0f175aee1d8d6aeafc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50c06adcc220e8ab07c88a1766ec9d5afd944fd624b2e0f175aee1d8d6aeafc->enter($__internal_d50c06adcc220e8ab07c88a1766ec9d5afd944fd624b2e0f175aee1d8d6aeafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_4c18f8c99bed275c01ee3cbb2dd0351be3da8c8c7819e1d95db189f99b709a6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c18f8c99bed275c01ee3cbb2dd0351be3da8c8c7819e1d95db189f99b709a6a->enter($__internal_4c18f8c99bed275c01ee3cbb2dd0351be3da8c8c7819e1d95db189f99b709a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        // line 142
        echo "                    ";
        if ((array_key_exists("_entity_config", $context) && (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array", false, true), "help", array(), "array"), false)) : (false)))) {
            // line 143
            echo "                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                ";
            // line 145
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "action"), "method"), array(), "array"), "help", array(), "array"));
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 149
        echo "                ";
        
        $__internal_4c18f8c99bed275c01ee3cbb2dd0351be3da8c8c7819e1d95db189f99b709a6a->leave($__internal_4c18f8c99bed275c01ee3cbb2dd0351be3da8c8c7819e1d95db189f99b709a6a_prof);

        
        $__internal_d50c06adcc220e8ab07c88a1766ec9d5afd944fd624b2e0f175aee1d8d6aeafc->leave($__internal_d50c06adcc220e8ab07c88a1766ec9d5afd944fd624b2e0f175aee1d8d6aeafc_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_76ed2f057e4e36ed4b072fb6a5ec09773a81e203001412e90e9c6c67573901c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ed2f057e4e36ed4b072fb6a5ec09773a81e203001412e90e9c6c67573901c1->enter($__internal_76ed2f057e4e36ed4b072fb6a5ec09773a81e203001412e90e9c6c67573901c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_d8d456a0ab8777751f7baa1df3ce6c47b66ad8cef07540673e3c9f0105d2fab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d456a0ab8777751f7baa1df3ce6c47b66ad8cef07540673e3c9f0105d2fab6->enter($__internal_d8d456a0ab8777751f7baa1df3ce6c47b66ad8cef07540673e3c9f0105d2fab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_d8d456a0ab8777751f7baa1df3ce6c47b66ad8cef07540673e3c9f0105d2fab6->leave($__internal_d8d456a0ab8777751f7baa1df3ce6c47b66ad8cef07540673e3c9f0105d2fab6_prof);

        
        $__internal_76ed2f057e4e36ed4b072fb6a5ec09773a81e203001412e90e9c6c67573901c1->leave($__internal_76ed2f057e4e36ed4b072fb6a5ec09773a81e203001412e90e9c6c67573901c1_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_98632e08aef663812123f1d987b0b30a7b478c36d29474fbe003fbe1f6ba0a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98632e08aef663812123f1d987b0b30a7b478c36d29474fbe003fbe1f6ba0a11->enter($__internal_98632e08aef663812123f1d987b0b30a7b478c36d29474fbe003fbe1f6ba0a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_d3ccd7318a069909fdd19d39020341033f81a45b7554b205d4f89f37863fe2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ccd7318a069909fdd19d39020341033f81a45b7554b205d4f89f37863fe2ba->enter($__internal_d3ccd7318a069909fdd19d39020341033f81a45b7554b205d4f89f37863fe2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_d3ccd7318a069909fdd19d39020341033f81a45b7554b205d4f89f37863fe2ba->leave($__internal_d3ccd7318a069909fdd19d39020341033f81a45b7554b205d4f89f37863fe2ba_prof);

        
        $__internal_98632e08aef663812123f1d987b0b30a7b478c36d29474fbe003fbe1f6ba0a11->leave($__internal_98632e08aef663812123f1d987b0b30a7b478c36d29474fbe003fbe1f6ba0a11_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  786 => 160,  769 => 153,  759 => 149,  752 => 145,  748 => 143,  745 => 142,  736 => 141,  707 => 139,  698 => 138,  685 => 134,  676 => 133,  665 => 154,  663 => 153,  658 => 150,  655 => 141,  653 => 138,  649 => 136,  646 => 133,  637 => 132,  626 => 125,  624 => 122,  622 => 121,  613 => 120,  602 => 127,  600 => 120,  597 => 119,  588 => 118,  573 => 102,  570 => 101,  561 => 100,  551 => 108,  546 => 105,  544 => 100,  535 => 94,  530 => 91,  525 => 89,  522 => 88,  520 => 87,  516 => 86,  513 => 85,  511 => 84,  505 => 82,  496 => 81,  484 => 109,  482 => 81,  478 => 79,  475 => 78,  466 => 77,  453 => 71,  444 => 70,  435 => 69,  423 => 112,  421 => 77,  416 => 74,  414 => 69,  407 => 65,  403 => 63,  394 => 62,  383 => 156,  381 => 132,  376 => 129,  374 => 118,  369 => 115,  367 => 62,  364 => 61,  355 => 60,  322 => 58,  311 => 165,  302 => 163,  298 => 162,  295 => 161,  293 => 160,  289 => 158,  287 => 60,  277 => 58,  268 => 57,  247 => 30,  238 => 29,  226 => 43,  223 => 42,  220 => 29,  211 => 28,  196 => 25,  193 => 24,  184 => 23,  171 => 15,  165 => 13,  156 => 12,  138 => 10,  127 => 167,  125 => 57,  118 => 53,  114 => 52,  110 => 50,  105 => 48,  100 => 47,  98 => 46,  95 => 45,  93 => 28,  90 => 27,  88 => 23,  85 => 22,  76 => 20,  72 => 19,  69 => 18,  67 => 12,  62 => 10,  51 => 2,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        {% if easyadmin_config('design.rtl') %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/bootstrap-rtl.min.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/adminlte-rtl.min.css') }}\">
        {% endif %}

        <!--[if lt IE 9]>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}\"></script>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}\"></script>
        <![endif]-->
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        {% set _logout_path = easyadmin_logout_path() %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"dropdown user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>

                                    {% if app.user|default(false) == false %}
                                        <i class=\"hidden-xs fa fa-user-times\"></i>
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% elseif not _logout_path %}
                                        <i class=\"hidden-xs fa fa-user\"></i>
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn\" data-toggle=\"dropdown\">
                                                <i class=\"hidden-xs fa fa-user\"></i>
                                                {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                            </button>
                                            <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                {% block user_menu_dropdown %}
                                                <li>
                                                    <a href=\"{{ _logout_path }}\"><i class=\"fa fa-sign-out\"></i> {{ 'user.signout'|trans(domain = 'EasyAdminBundle') }}</a>
                                                </li>
                                                {% endblock user_menu_dropdown %}
                                            </ul>
                                        </div>
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                {% block content_help %}
                    {% if _entity_config is defined and _entity_config[app.request.query.get('action')]['help']|default(false) %}
                        <div class=\"box box-widget help-entity\">
                            <div class=\"box-body\">
                                {{ _entity_config[app.request.query.get('action')]['help']|trans|raw }}
                            </div>
                        </div>
                    {% endif %}
                {% endblock content_help %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
", "@EasyAdmin/default/layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\layout.html.twig");
    }
}
