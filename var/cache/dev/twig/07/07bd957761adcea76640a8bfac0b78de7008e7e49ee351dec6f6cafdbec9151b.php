<?php

/* EasyAdminBundle:default:layout.html.twig */
class __TwigTemplate_b53d61ce7591d01abf995d1870079d411b758ef95fb3b7229bb51b134c247520 extends Twig_Template
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
        $__internal_a5ed8c0b62c37e79109300b2c935656ac2ad989bea77073b8f1b730c46bb0dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ed8c0b62c37e79109300b2c935656ac2ad989bea77073b8f1b730c46bb0dd0->enter($__internal_a5ed8c0b62c37e79109300b2c935656ac2ad989bea77073b8f1b730c46bb0dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

        $__internal_96b5993b8085795d79240e26f54c5564b4018c152b4fc33756725b7e2b181259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b5993b8085795d79240e26f54c5564b4018c152b4fc33756725b7e2b181259->enter($__internal_96b5993b8085795d79240e26f54c5564b4018c152b4fc33756725b7e2b181259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:layout.html.twig"));

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
        
        $__internal_a5ed8c0b62c37e79109300b2c935656ac2ad989bea77073b8f1b730c46bb0dd0->leave($__internal_a5ed8c0b62c37e79109300b2c935656ac2ad989bea77073b8f1b730c46bb0dd0_prof);

        
        $__internal_96b5993b8085795d79240e26f54c5564b4018c152b4fc33756725b7e2b181259->leave($__internal_96b5993b8085795d79240e26f54c5564b4018c152b4fc33756725b7e2b181259_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b68c37e845219d178eb3fa70e83238469772e4d8f6f2cfcd79c795f383c3844c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b68c37e845219d178eb3fa70e83238469772e4d8f6f2cfcd79c795f383c3844c->enter($__internal_b68c37e845219d178eb3fa70e83238469772e4d8f6f2cfcd79c795f383c3844c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_ea3289c975cdefbd3f23ed8ce076f318b789fdebcf97084d01970b479e0dbc3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3289c975cdefbd3f23ed8ce076f318b789fdebcf97084d01970b479e0dbc3d->enter($__internal_ea3289c975cdefbd3f23ed8ce076f318b789fdebcf97084d01970b479e0dbc3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_ea3289c975cdefbd3f23ed8ce076f318b789fdebcf97084d01970b479e0dbc3d->leave($__internal_ea3289c975cdefbd3f23ed8ce076f318b789fdebcf97084d01970b479e0dbc3d_prof);

        
        $__internal_b68c37e845219d178eb3fa70e83238469772e4d8f6f2cfcd79c795f383c3844c->leave($__internal_b68c37e845219d178eb3fa70e83238469772e4d8f6f2cfcd79c795f383c3844c_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_6e1a04b53011b70e224d7ab138b4bdec638f32a0910743600268963ba9bbb80c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1a04b53011b70e224d7ab138b4bdec638f32a0910743600268963ba9bbb80c->enter($__internal_6e1a04b53011b70e224d7ab138b4bdec638f32a0910743600268963ba9bbb80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_23192f5aee68db50dace50da80665297e43fa32d5a3aeb415341d40fa5dfa923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23192f5aee68db50dace50da80665297e43fa32d5a3aeb415341d40fa5dfa923->enter($__internal_23192f5aee68db50dace50da80665297e43fa32d5a3aeb415341d40fa5dfa923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_23192f5aee68db50dace50da80665297e43fa32d5a3aeb415341d40fa5dfa923->leave($__internal_23192f5aee68db50dace50da80665297e43fa32d5a3aeb415341d40fa5dfa923_prof);

        
        $__internal_6e1a04b53011b70e224d7ab138b4bdec638f32a0910743600268963ba9bbb80c->leave($__internal_6e1a04b53011b70e224d7ab138b4bdec638f32a0910743600268963ba9bbb80c_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_63d7412910f057323845fcf2b93e4ed72323e65690ad7624b5c9b6000bb78261 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63d7412910f057323845fcf2b93e4ed72323e65690ad7624b5c9b6000bb78261->enter($__internal_63d7412910f057323845fcf2b93e4ed72323e65690ad7624b5c9b6000bb78261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_7b2cbcd944d732b3f2ccd09fc46396e9761b7393b2c9471c579f203c02b5c9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2cbcd944d732b3f2ccd09fc46396e9761b7393b2c9471c579f203c02b5c9e1->enter($__internal_7b2cbcd944d732b3f2ccd09fc46396e9761b7393b2c9471c579f203c02b5c9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_7b2cbcd944d732b3f2ccd09fc46396e9761b7393b2c9471c579f203c02b5c9e1->leave($__internal_7b2cbcd944d732b3f2ccd09fc46396e9761b7393b2c9471c579f203c02b5c9e1_prof);

        
        $__internal_63d7412910f057323845fcf2b93e4ed72323e65690ad7624b5c9b6000bb78261->leave($__internal_63d7412910f057323845fcf2b93e4ed72323e65690ad7624b5c9b6000bb78261_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_a83e9654990a2d8cd38eb08c9bbc6d53f33da6c1978e9292cf52ba6e36f7fe25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83e9654990a2d8cd38eb08c9bbc6d53f33da6c1978e9292cf52ba6e36f7fe25->enter($__internal_a83e9654990a2d8cd38eb08c9bbc6d53f33da6c1978e9292cf52ba6e36f7fe25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_7d34cc71f8242992511bb2ef0fe2bc48e9cb3e4845515c4179f33f66c020f351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d34cc71f8242992511bb2ef0fe2bc48e9cb3e4845515c4179f33f66c020f351->enter($__internal_7d34cc71f8242992511bb2ef0fe2bc48e9cb3e4845515c4179f33f66c020f351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_7d34cc71f8242992511bb2ef0fe2bc48e9cb3e4845515c4179f33f66c020f351->leave($__internal_7d34cc71f8242992511bb2ef0fe2bc48e9cb3e4845515c4179f33f66c020f351_prof);

        
        $__internal_a83e9654990a2d8cd38eb08c9bbc6d53f33da6c1978e9292cf52ba6e36f7fe25->leave($__internal_a83e9654990a2d8cd38eb08c9bbc6d53f33da6c1978e9292cf52ba6e36f7fe25_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_ce0372793d53cab40d026f4db87bb48d222a8fb3e4112fd7bd72a58947703f2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0372793d53cab40d026f4db87bb48d222a8fb3e4112fd7bd72a58947703f2f->enter($__internal_ce0372793d53cab40d026f4db87bb48d222a8fb3e4112fd7bd72a58947703f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_4320e136ef1d6a39be7514d385c96ef301dcd880cad89c62c3c095d03e902f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4320e136ef1d6a39be7514d385c96ef301dcd880cad89c62c3c095d03e902f30->enter($__internal_4320e136ef1d6a39be7514d385c96ef301dcd880cad89c62c3c095d03e902f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_4320e136ef1d6a39be7514d385c96ef301dcd880cad89c62c3c095d03e902f30->leave($__internal_4320e136ef1d6a39be7514d385c96ef301dcd880cad89c62c3c095d03e902f30_prof);

        
        $__internal_ce0372793d53cab40d026f4db87bb48d222a8fb3e4112fd7bd72a58947703f2f->leave($__internal_ce0372793d53cab40d026f4db87bb48d222a8fb3e4112fd7bd72a58947703f2f_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_106d7a2f742e13c6f97bbb6a20de69b9c0a9867953bdb2a9e55aa81c335351cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_106d7a2f742e13c6f97bbb6a20de69b9c0a9867953bdb2a9e55aa81c335351cb->enter($__internal_106d7a2f742e13c6f97bbb6a20de69b9c0a9867953bdb2a9e55aa81c335351cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e81dad16101d9219a1de0131f43e2924f23f0aaab7caf953009bda5d00a3757 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e81dad16101d9219a1de0131f43e2924f23f0aaab7caf953009bda5d00a3757->enter($__internal_5e81dad16101d9219a1de0131f43e2924f23f0aaab7caf953009bda5d00a3757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e81dad16101d9219a1de0131f43e2924f23f0aaab7caf953009bda5d00a3757->leave($__internal_5e81dad16101d9219a1de0131f43e2924f23f0aaab7caf953009bda5d00a3757_prof);

        
        $__internal_106d7a2f742e13c6f97bbb6a20de69b9c0a9867953bdb2a9e55aa81c335351cb->leave($__internal_106d7a2f742e13c6f97bbb6a20de69b9c0a9867953bdb2a9e55aa81c335351cb_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8aac8ca47000b21fba5eb9f990790e321326b31fa1845b87dd0be31428d96bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aac8ca47000b21fba5eb9f990790e321326b31fa1845b87dd0be31428d96bbc->enter($__internal_8aac8ca47000b21fba5eb9f990790e321326b31fa1845b87dd0be31428d96bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_37135f5a648b1b7dbe5b539d51f46c5dfa38f46ac4a0d6b2446c4b000a3b943b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37135f5a648b1b7dbe5b539d51f46c5dfa38f46ac4a0d6b2446c4b000a3b943b->enter($__internal_37135f5a648b1b7dbe5b539d51f46c5dfa38f46ac4a0d6b2446c4b000a3b943b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_37135f5a648b1b7dbe5b539d51f46c5dfa38f46ac4a0d6b2446c4b000a3b943b->leave($__internal_37135f5a648b1b7dbe5b539d51f46c5dfa38f46ac4a0d6b2446c4b000a3b943b_prof);

        
        $__internal_8aac8ca47000b21fba5eb9f990790e321326b31fa1845b87dd0be31428d96bbc->leave($__internal_8aac8ca47000b21fba5eb9f990790e321326b31fa1845b87dd0be31428d96bbc_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_81d44c79b41230ecf53798873777293a0ce09d377dbafcbe475813c33810c8f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81d44c79b41230ecf53798873777293a0ce09d377dbafcbe475813c33810c8f2->enter($__internal_81d44c79b41230ecf53798873777293a0ce09d377dbafcbe475813c33810c8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_37075a4abed4f103c13dbf748cb23ddeabc5a43afa81c80590539fa9e3c5bdcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37075a4abed4f103c13dbf748cb23ddeabc5a43afa81c80590539fa9e3c5bdcc->enter($__internal_37075a4abed4f103c13dbf748cb23ddeabc5a43afa81c80590539fa9e3c5bdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_37075a4abed4f103c13dbf748cb23ddeabc5a43afa81c80590539fa9e3c5bdcc->leave($__internal_37075a4abed4f103c13dbf748cb23ddeabc5a43afa81c80590539fa9e3c5bdcc_prof);

        
        $__internal_81d44c79b41230ecf53798873777293a0ce09d377dbafcbe475813c33810c8f2->leave($__internal_81d44c79b41230ecf53798873777293a0ce09d377dbafcbe475813c33810c8f2_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_108a4c422593841581da9c328ea37353d05bc850e97bcd17cff4df630085115c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108a4c422593841581da9c328ea37353d05bc850e97bcd17cff4df630085115c->enter($__internal_108a4c422593841581da9c328ea37353d05bc850e97bcd17cff4df630085115c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_29d5eac7ae1bf315d9dc991627b333bd085701dde3146d1bb1e5391759dd1c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d5eac7ae1bf315d9dc991627b333bd085701dde3146d1bb1e5391759dd1c1b->enter($__internal_29d5eac7ae1bf315d9dc991627b333bd085701dde3146d1bb1e5391759dd1c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_29d5eac7ae1bf315d9dc991627b333bd085701dde3146d1bb1e5391759dd1c1b->leave($__internal_29d5eac7ae1bf315d9dc991627b333bd085701dde3146d1bb1e5391759dd1c1b_prof);

        
        $__internal_108a4c422593841581da9c328ea37353d05bc850e97bcd17cff4df630085115c->leave($__internal_108a4c422593841581da9c328ea37353d05bc850e97bcd17cff4df630085115c_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_d7cd2355f44257ddae7406ec029cf4cea402ae274b303744501eaec0967d3742 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7cd2355f44257ddae7406ec029cf4cea402ae274b303744501eaec0967d3742->enter($__internal_d7cd2355f44257ddae7406ec029cf4cea402ae274b303744501eaec0967d3742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_da7c49024bdc125a0d13857e49a32df9086f869afcc20477192eea42107cb25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da7c49024bdc125a0d13857e49a32df9086f869afcc20477192eea42107cb25e->enter($__internal_da7c49024bdc125a0d13857e49a32df9086f869afcc20477192eea42107cb25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_da7c49024bdc125a0d13857e49a32df9086f869afcc20477192eea42107cb25e->leave($__internal_da7c49024bdc125a0d13857e49a32df9086f869afcc20477192eea42107cb25e_prof);

        
        $__internal_d7cd2355f44257ddae7406ec029cf4cea402ae274b303744501eaec0967d3742->leave($__internal_d7cd2355f44257ddae7406ec029cf4cea402ae274b303744501eaec0967d3742_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_e92b041bdee8e316933bff053f2b2be872f3b6bce9942f6bc26737380b481e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92b041bdee8e316933bff053f2b2be872f3b6bce9942f6bc26737380b481e1d->enter($__internal_e92b041bdee8e316933bff053f2b2be872f3b6bce9942f6bc26737380b481e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_0388f9fb47dc427dd939a627211cf4632dfb51df5e8888927e7d546b0e814d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0388f9fb47dc427dd939a627211cf4632dfb51df5e8888927e7d546b0e814d54->enter($__internal_0388f9fb47dc427dd939a627211cf4632dfb51df5e8888927e7d546b0e814d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_0388f9fb47dc427dd939a627211cf4632dfb51df5e8888927e7d546b0e814d54->leave($__internal_0388f9fb47dc427dd939a627211cf4632dfb51df5e8888927e7d546b0e814d54_prof);

        
        $__internal_e92b041bdee8e316933bff053f2b2be872f3b6bce9942f6bc26737380b481e1d->leave($__internal_e92b041bdee8e316933bff053f2b2be872f3b6bce9942f6bc26737380b481e1d_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_d3056b094d1d5157c64ed63634745205bf5c45db386dffc6367cd234801c64db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3056b094d1d5157c64ed63634745205bf5c45db386dffc6367cd234801c64db->enter($__internal_d3056b094d1d5157c64ed63634745205bf5c45db386dffc6367cd234801c64db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_92de155a4c3708e2df12972fa54069622023955271a60c4d7e00553febc7ab30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92de155a4c3708e2df12972fa54069622023955271a60c4d7e00553febc7ab30->enter($__internal_92de155a4c3708e2df12972fa54069622023955271a60c4d7e00553febc7ab30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_92de155a4c3708e2df12972fa54069622023955271a60c4d7e00553febc7ab30->leave($__internal_92de155a4c3708e2df12972fa54069622023955271a60c4d7e00553febc7ab30_prof);

        
        $__internal_d3056b094d1d5157c64ed63634745205bf5c45db386dffc6367cd234801c64db->leave($__internal_d3056b094d1d5157c64ed63634745205bf5c45db386dffc6367cd234801c64db_prof);

    }

    // line 81
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_c992c9da8dc870d9c3cf5a803727805e152fbdd5e920e27459779b1408320740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c992c9da8dc870d9c3cf5a803727805e152fbdd5e920e27459779b1408320740->enter($__internal_c992c9da8dc870d9c3cf5a803727805e152fbdd5e920e27459779b1408320740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_0607194336d750fc6a3739f70fd75b2553e979e87c914e701d95b0cc6d9ff0a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0607194336d750fc6a3739f70fd75b2553e979e87c914e701d95b0cc6d9ff0a7->enter($__internal_0607194336d750fc6a3739f70fd75b2553e979e87c914e701d95b0cc6d9ff0a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_0607194336d750fc6a3739f70fd75b2553e979e87c914e701d95b0cc6d9ff0a7->leave($__internal_0607194336d750fc6a3739f70fd75b2553e979e87c914e701d95b0cc6d9ff0a7_prof);

        
        $__internal_c992c9da8dc870d9c3cf5a803727805e152fbdd5e920e27459779b1408320740->leave($__internal_c992c9da8dc870d9c3cf5a803727805e152fbdd5e920e27459779b1408320740_prof);

    }

    // line 100
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_b043c66ff540adbce90113076edbd5e931540bc6ec94516b7c710d2b1e5bab21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b043c66ff540adbce90113076edbd5e931540bc6ec94516b7c710d2b1e5bab21->enter($__internal_b043c66ff540adbce90113076edbd5e931540bc6ec94516b7c710d2b1e5bab21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_822473d9a122c441dc7df356c78612641cec2d460892007c8ccf87a5638c5339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822473d9a122c441dc7df356c78612641cec2d460892007c8ccf87a5638c5339->enter($__internal_822473d9a122c441dc7df356c78612641cec2d460892007c8ccf87a5638c5339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_822473d9a122c441dc7df356c78612641cec2d460892007c8ccf87a5638c5339->leave($__internal_822473d9a122c441dc7df356c78612641cec2d460892007c8ccf87a5638c5339_prof);

        
        $__internal_b043c66ff540adbce90113076edbd5e931540bc6ec94516b7c710d2b1e5bab21->leave($__internal_b043c66ff540adbce90113076edbd5e931540bc6ec94516b7c710d2b1e5bab21_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1540a83b211f39ff6ee6d16db274f094fc04fe59c46116c18ddbca60e618c3e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1540a83b211f39ff6ee6d16db274f094fc04fe59c46116c18ddbca60e618c3e1->enter($__internal_1540a83b211f39ff6ee6d16db274f094fc04fe59c46116c18ddbca60e618c3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_36b4ce5914744f1264dc6fc0fd0a3a644c6ac9b8c821b0f48c0bb38a6056d36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b4ce5914744f1264dc6fc0fd0a3a644c6ac9b8c821b0f48c0bb38a6056d36b->enter($__internal_36b4ce5914744f1264dc6fc0fd0a3a644c6ac9b8c821b0f48c0bb38a6056d36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_36b4ce5914744f1264dc6fc0fd0a3a644c6ac9b8c821b0f48c0bb38a6056d36b->leave($__internal_36b4ce5914744f1264dc6fc0fd0a3a644c6ac9b8c821b0f48c0bb38a6056d36b_prof);

        
        $__internal_1540a83b211f39ff6ee6d16db274f094fc04fe59c46116c18ddbca60e618c3e1->leave($__internal_1540a83b211f39ff6ee6d16db274f094fc04fe59c46116c18ddbca60e618c3e1_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_db4a61ed74bd94912a8db0e836d60c70eda1f7e7fccaa289418d56fe426fc4e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db4a61ed74bd94912a8db0e836d60c70eda1f7e7fccaa289418d56fe426fc4e0->enter($__internal_db4a61ed74bd94912a8db0e836d60c70eda1f7e7fccaa289418d56fe426fc4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_ef866766dffaf1d90197cae6aea3a9672e9d5f0ab86e60cf5c4acbea304df40e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef866766dffaf1d90197cae6aea3a9672e9d5f0ab86e60cf5c4acbea304df40e->enter($__internal_ef866766dffaf1d90197cae6aea3a9672e9d5f0ab86e60cf5c4acbea304df40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_ef866766dffaf1d90197cae6aea3a9672e9d5f0ab86e60cf5c4acbea304df40e->leave($__internal_ef866766dffaf1d90197cae6aea3a9672e9d5f0ab86e60cf5c4acbea304df40e_prof);

        
        $__internal_db4a61ed74bd94912a8db0e836d60c70eda1f7e7fccaa289418d56fe426fc4e0->leave($__internal_db4a61ed74bd94912a8db0e836d60c70eda1f7e7fccaa289418d56fe426fc4e0_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_80f52b73714e236e7fa2e03317ecbbda14478f28705b818b820a4135b144718f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f52b73714e236e7fa2e03317ecbbda14478f28705b818b820a4135b144718f->enter($__internal_80f52b73714e236e7fa2e03317ecbbda14478f28705b818b820a4135b144718f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ec75171ca9269d1e976dd9292051abedb7bf22828cdf1e37df686808390db4a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec75171ca9269d1e976dd9292051abedb7bf22828cdf1e37df686808390db4a3->enter($__internal_ec75171ca9269d1e976dd9292051abedb7bf22828cdf1e37df686808390db4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_ec75171ca9269d1e976dd9292051abedb7bf22828cdf1e37df686808390db4a3->leave($__internal_ec75171ca9269d1e976dd9292051abedb7bf22828cdf1e37df686808390db4a3_prof);

        
        $__internal_80f52b73714e236e7fa2e03317ecbbda14478f28705b818b820a4135b144718f->leave($__internal_80f52b73714e236e7fa2e03317ecbbda14478f28705b818b820a4135b144718f_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_c3cfa22f24eb569cd9a0126469612ad727472c89dfbb24d51b9159a89d7063fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3cfa22f24eb569cd9a0126469612ad727472c89dfbb24d51b9159a89d7063fe->enter($__internal_c3cfa22f24eb569cd9a0126469612ad727472c89dfbb24d51b9159a89d7063fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_bc4d81b00fbd735733972de3c30daf1c0b81f5a0400616fc6b8651a0a2584d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4d81b00fbd735733972de3c30daf1c0b81f5a0400616fc6b8651a0a2584d40->enter($__internal_bc4d81b00fbd735733972de3c30daf1c0b81f5a0400616fc6b8651a0a2584d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_bc4d81b00fbd735733972de3c30daf1c0b81f5a0400616fc6b8651a0a2584d40->leave($__internal_bc4d81b00fbd735733972de3c30daf1c0b81f5a0400616fc6b8651a0a2584d40_prof);

        
        $__internal_c3cfa22f24eb569cd9a0126469612ad727472c89dfbb24d51b9159a89d7063fe->leave($__internal_c3cfa22f24eb569cd9a0126469612ad727472c89dfbb24d51b9159a89d7063fe_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_1863526d41223f9c24d6f8bc9949d3318c996567230665de37482b82c063803d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1863526d41223f9c24d6f8bc9949d3318c996567230665de37482b82c063803d->enter($__internal_1863526d41223f9c24d6f8bc9949d3318c996567230665de37482b82c063803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_59aa47f00ce8022029be162e0fa574324aa266281001eaa9089ca81a9bef36bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59aa47f00ce8022029be162e0fa574324aa266281001eaa9089ca81a9bef36bc->enter($__internal_59aa47f00ce8022029be162e0fa574324aa266281001eaa9089ca81a9bef36bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_59aa47f00ce8022029be162e0fa574324aa266281001eaa9089ca81a9bef36bc->leave($__internal_59aa47f00ce8022029be162e0fa574324aa266281001eaa9089ca81a9bef36bc_prof);

        
        $__internal_1863526d41223f9c24d6f8bc9949d3318c996567230665de37482b82c063803d->leave($__internal_1863526d41223f9c24d6f8bc9949d3318c996567230665de37482b82c063803d_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8c10173b1ec0882f5b2c4a9edf411c54298c01fd8839dd568b9cdc17e9b9981b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c10173b1ec0882f5b2c4a9edf411c54298c01fd8839dd568b9cdc17e9b9981b->enter($__internal_8c10173b1ec0882f5b2c4a9edf411c54298c01fd8839dd568b9cdc17e9b9981b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_7de89881ada97a3168ea8bbf93e104b09af933eabcdc16ce419daa0025f1fbf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de89881ada97a3168ea8bbf93e104b09af933eabcdc16ce419daa0025f1fbf1->enter($__internal_7de89881ada97a3168ea8bbf93e104b09af933eabcdc16ce419daa0025f1fbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_7de89881ada97a3168ea8bbf93e104b09af933eabcdc16ce419daa0025f1fbf1->leave($__internal_7de89881ada97a3168ea8bbf93e104b09af933eabcdc16ce419daa0025f1fbf1_prof);

        
        $__internal_8c10173b1ec0882f5b2c4a9edf411c54298c01fd8839dd568b9cdc17e9b9981b->leave($__internal_8c10173b1ec0882f5b2c4a9edf411c54298c01fd8839dd568b9cdc17e9b9981b_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_5bdcd27383bf743974befa661a87931e0cd191ecb434de7773378d7cf27e7c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bdcd27383bf743974befa661a87931e0cd191ecb434de7773378d7cf27e7c49->enter($__internal_5bdcd27383bf743974befa661a87931e0cd191ecb434de7773378d7cf27e7c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_cc3f9ce74806482287b02a98a5105cd8a4efaa95babaefc0683c3bd1389331a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3f9ce74806482287b02a98a5105cd8a4efaa95babaefc0683c3bd1389331a2->enter($__internal_cc3f9ce74806482287b02a98a5105cd8a4efaa95babaefc0683c3bd1389331a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_cc3f9ce74806482287b02a98a5105cd8a4efaa95babaefc0683c3bd1389331a2->leave($__internal_cc3f9ce74806482287b02a98a5105cd8a4efaa95babaefc0683c3bd1389331a2_prof);

        
        $__internal_5bdcd27383bf743974befa661a87931e0cd191ecb434de7773378d7cf27e7c49->leave($__internal_5bdcd27383bf743974befa661a87931e0cd191ecb434de7773378d7cf27e7c49_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_2eb6dfa24892a9ee359835cd0769cbf2c276e898a6d22d107e089c5b183583d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2eb6dfa24892a9ee359835cd0769cbf2c276e898a6d22d107e089c5b183583d4->enter($__internal_2eb6dfa24892a9ee359835cd0769cbf2c276e898a6d22d107e089c5b183583d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1927a2f749113a1b252eed7f220b37e88ca6c14253198aef9f3ef231ba5adfe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1927a2f749113a1b252eed7f220b37e88ca6c14253198aef9f3ef231ba5adfe8->enter($__internal_1927a2f749113a1b252eed7f220b37e88ca6c14253198aef9f3ef231ba5adfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_1927a2f749113a1b252eed7f220b37e88ca6c14253198aef9f3ef231ba5adfe8->leave($__internal_1927a2f749113a1b252eed7f220b37e88ca6c14253198aef9f3ef231ba5adfe8_prof);

        
        $__internal_2eb6dfa24892a9ee359835cd0769cbf2c276e898a6d22d107e089c5b183583d4->leave($__internal_2eb6dfa24892a9ee359835cd0769cbf2c276e898a6d22d107e089c5b183583d4_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_59ca730dd95174829887dff2af91861002bbe48b917340bc378f818b0f148bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ca730dd95174829887dff2af91861002bbe48b917340bc378f818b0f148bce->enter($__internal_59ca730dd95174829887dff2af91861002bbe48b917340bc378f818b0f148bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_1723fc78a3da25447b737840e02b7efd9bdb3dde3c9969699492cb0275f07040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1723fc78a3da25447b737840e02b7efd9bdb3dde3c9969699492cb0275f07040->enter($__internal_1723fc78a3da25447b737840e02b7efd9bdb3dde3c9969699492cb0275f07040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_1723fc78a3da25447b737840e02b7efd9bdb3dde3c9969699492cb0275f07040->leave($__internal_1723fc78a3da25447b737840e02b7efd9bdb3dde3c9969699492cb0275f07040_prof);

        
        $__internal_59ca730dd95174829887dff2af91861002bbe48b917340bc378f818b0f148bce->leave($__internal_59ca730dd95174829887dff2af91861002bbe48b917340bc378f818b0f148bce_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:layout.html.twig";
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
", "EasyAdminBundle:default:layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/layout.html.twig");
    }
}
