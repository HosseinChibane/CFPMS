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
        $__internal_2169fcfff8dc67c8aa241f37f5b447c4dc72bd861a83c339a76f05d392af6f1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2169fcfff8dc67c8aa241f37f5b447c4dc72bd861a83c339a76f05d392af6f1f->enter($__internal_2169fcfff8dc67c8aa241f37f5b447c4dc72bd861a83c339a76f05d392af6f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        $__internal_877beea5d0c030ce45064740345521029ce9194ebc8db41ccce6a1c1f7f4714f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877beea5d0c030ce45064740345521029ce9194ebc8db41ccce6a1c1f7f4714f->enter($__internal_877beea5d0c030ce45064740345521029ce9194ebc8db41ccce6a1c1f7f4714f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

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
        
        $__internal_2169fcfff8dc67c8aa241f37f5b447c4dc72bd861a83c339a76f05d392af6f1f->leave($__internal_2169fcfff8dc67c8aa241f37f5b447c4dc72bd861a83c339a76f05d392af6f1f_prof);

        
        $__internal_877beea5d0c030ce45064740345521029ce9194ebc8db41ccce6a1c1f7f4714f->leave($__internal_877beea5d0c030ce45064740345521029ce9194ebc8db41ccce6a1c1f7f4714f_prof);

    }

    // line 10
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ed9e92480ee4c84dff7c247abe5c872f7b699e6663fa5cb5551f91ba6946c082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9e92480ee4c84dff7c247abe5c872f7b699e6663fa5cb5551f91ba6946c082->enter($__internal_ed9e92480ee4c84dff7c247abe5c872f7b699e6663fa5cb5551f91ba6946c082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_1d3d0d8f7d8999482f7df1f98ddda9e0ea99cb4fa6e854c379be8a9b4bc22df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3d0d8f7d8999482f7df1f98ddda9e0ea99cb4fa6e854c379be8a9b4bc22df7->enter($__internal_1d3d0d8f7d8999482f7df1f98ddda9e0ea99cb4fa6e854c379be8a9b4bc22df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags(        $this->renderBlock("content_title", $context, $blocks));
        
        $__internal_1d3d0d8f7d8999482f7df1f98ddda9e0ea99cb4fa6e854c379be8a9b4bc22df7->leave($__internal_1d3d0d8f7d8999482f7df1f98ddda9e0ea99cb4fa6e854c379be8a9b4bc22df7_prof);

        
        $__internal_ed9e92480ee4c84dff7c247abe5c872f7b699e6663fa5cb5551f91ba6946c082->leave($__internal_ed9e92480ee4c84dff7c247abe5c872f7b699e6663fa5cb5551f91ba6946c082_prof);

    }

    // line 12
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_26bdf8a5059de9f99efac608cd67923fc5de5345cdb6415e00dea23cda0ba0b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26bdf8a5059de9f99efac608cd67923fc5de5345cdb6415e00dea23cda0ba0b5->enter($__internal_26bdf8a5059de9f99efac608cd67923fc5de5345cdb6415e00dea23cda0ba0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_d8bef3f9af2aebb86a837e7eb6968ec69999f0e88ee9a0544589026ef4dc20ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8bef3f9af2aebb86a837e7eb6968ec69999f0e88ee9a0544589026ef4dc20ec->enter($__internal_d8bef3f9af2aebb86a837e7eb6968ec69999f0e88ee9a0544589026ef4dc20ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

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
        
        $__internal_d8bef3f9af2aebb86a837e7eb6968ec69999f0e88ee9a0544589026ef4dc20ec->leave($__internal_d8bef3f9af2aebb86a837e7eb6968ec69999f0e88ee9a0544589026ef4dc20ec_prof);

        
        $__internal_26bdf8a5059de9f99efac608cd67923fc5de5345cdb6415e00dea23cda0ba0b5->leave($__internal_26bdf8a5059de9f99efac608cd67923fc5de5345cdb6415e00dea23cda0ba0b5_prof);

    }

    // line 23
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_20770a1b14488e02b822c6a11458bb8dbb2982192a4c252e119033f9ec8a8c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20770a1b14488e02b822c6a11458bb8dbb2982192a4c252e119033f9ec8a8c04->enter($__internal_20770a1b14488e02b822c6a11458bb8dbb2982192a4c252e119033f9ec8a8c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        $__internal_2e596208a1c3aafe4c138c165f154a9aa0a48d3a7ea77dd09280de85fc92a15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e596208a1c3aafe4c138c165f154a9aa0a48d3a7ea77dd09280de85fc92a15a->enter($__internal_2e596208a1c3aafe4c138c165f154a9aa0a48d3a7ea77dd09280de85fc92a15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

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
        
        $__internal_2e596208a1c3aafe4c138c165f154a9aa0a48d3a7ea77dd09280de85fc92a15a->leave($__internal_2e596208a1c3aafe4c138c165f154a9aa0a48d3a7ea77dd09280de85fc92a15a_prof);

        
        $__internal_20770a1b14488e02b822c6a11458bb8dbb2982192a4c252e119033f9ec8a8c04->leave($__internal_20770a1b14488e02b822c6a11458bb8dbb2982192a4c252e119033f9ec8a8c04_prof);

    }

    // line 28
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_8faa8fb451ae376015a410ce9f0673d9ad88315ca2596aabf5db3cc585c5dcdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8faa8fb451ae376015a410ce9f0673d9ad88315ca2596aabf5db3cc585c5dcdd->enter($__internal_8faa8fb451ae376015a410ce9f0673d9ad88315ca2596aabf5db3cc585c5dcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        $__internal_4d20dd8f90c5aabe8534a4436011062c9b6084581055bb060bf3d9fca84d6a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d20dd8f90c5aabe8534a4436011062c9b6084581055bb060bf3d9fca84d6a69->enter($__internal_4d20dd8f90c5aabe8534a4436011062c9b6084581055bb060bf3d9fca84d6a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

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
        
        $__internal_4d20dd8f90c5aabe8534a4436011062c9b6084581055bb060bf3d9fca84d6a69->leave($__internal_4d20dd8f90c5aabe8534a4436011062c9b6084581055bb060bf3d9fca84d6a69_prof);

        
        $__internal_8faa8fb451ae376015a410ce9f0673d9ad88315ca2596aabf5db3cc585c5dcdd->leave($__internal_8faa8fb451ae376015a410ce9f0673d9ad88315ca2596aabf5db3cc585c5dcdd_prof);

    }

    // line 29
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_3292c5ca597baf2eea0fc85b954f0d0c0420a9391cfee8b84a509f5e1e921c45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3292c5ca597baf2eea0fc85b954f0d0c0420a9391cfee8b84a509f5e1e921c45->enter($__internal_3292c5ca597baf2eea0fc85b954f0d0c0420a9391cfee8b84a509f5e1e921c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        $__internal_9583175c2692415309f9aa363ed620fedf6206ecc3a819f96f69b8906639746e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9583175c2692415309f9aa363ed620fedf6206ecc3a819f96f69b8906639746e->enter($__internal_9583175c2692415309f9aa363ed620fedf6206ecc3a819f96f69b8906639746e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

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
        
        $__internal_9583175c2692415309f9aa363ed620fedf6206ecc3a819f96f69b8906639746e->leave($__internal_9583175c2692415309f9aa363ed620fedf6206ecc3a819f96f69b8906639746e_prof);

        
        $__internal_3292c5ca597baf2eea0fc85b954f0d0c0420a9391cfee8b84a509f5e1e921c45->leave($__internal_3292c5ca597baf2eea0fc85b954f0d0c0420a9391cfee8b84a509f5e1e921c45_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_747e95cbce85f35c1fc5571fd7d7de8a705ae1305af52a8ff36555079f95b8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747e95cbce85f35c1fc5571fd7d7de8a705ae1305af52a8ff36555079f95b8ca->enter($__internal_747e95cbce85f35c1fc5571fd7d7de8a705ae1305af52a8ff36555079f95b8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a88ad6a0d95e6760a324f20898053e7687e3677870b506e93e1da3f0b384e491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a88ad6a0d95e6760a324f20898053e7687e3677870b506e93e1da3f0b384e491->enter($__internal_a88ad6a0d95e6760a324f20898053e7687e3677870b506e93e1da3f0b384e491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a88ad6a0d95e6760a324f20898053e7687e3677870b506e93e1da3f0b384e491->leave($__internal_a88ad6a0d95e6760a324f20898053e7687e3677870b506e93e1da3f0b384e491_prof);

        
        $__internal_747e95cbce85f35c1fc5571fd7d7de8a705ae1305af52a8ff36555079f95b8ca->leave($__internal_747e95cbce85f35c1fc5571fd7d7de8a705ae1305af52a8ff36555079f95b8ca_prof);

    }

    // line 58
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_787a13bef454ef192fb0547de83c5a8d714843a34b1e918c77cd0c5b8a9f3c3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_787a13bef454ef192fb0547de83c5a8d714843a34b1e918c77cd0c5b8a9f3c3c->enter($__internal_787a13bef454ef192fb0547de83c5a8d714843a34b1e918c77cd0c5b8a9f3c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_d11f7e5673934d31f977be80497f9d6b014914d23c14a1fa73eb614d779ec01e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11f7e5673934d31f977be80497f9d6b014914d23c14a1fa73eb614d779ec01e->enter($__internal_d11f7e5673934d31f977be80497f9d6b014914d23c14a1fa73eb614d779ec01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_d11f7e5673934d31f977be80497f9d6b014914d23c14a1fa73eb614d779ec01e->leave($__internal_d11f7e5673934d31f977be80497f9d6b014914d23c14a1fa73eb614d779ec01e_prof);

        
        $__internal_787a13bef454ef192fb0547de83c5a8d714843a34b1e918c77cd0c5b8a9f3c3c->leave($__internal_787a13bef454ef192fb0547de83c5a8d714843a34b1e918c77cd0c5b8a9f3c3c_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_9e2f1d4b72e79b6beed32cefb36c8d4f5c6cd3fae98cfd80d9b5eafe13818284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2f1d4b72e79b6beed32cefb36c8d4f5c6cd3fae98cfd80d9b5eafe13818284->enter($__internal_9e2f1d4b72e79b6beed32cefb36c8d4f5c6cd3fae98cfd80d9b5eafe13818284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_828c6d26ef99abd3d7506102e3fff24e85cb65a7be7ac1bb34706a26dced0142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828c6d26ef99abd3d7506102e3fff24e85cb65a7be7ac1bb34706a26dced0142->enter($__internal_828c6d26ef99abd3d7506102e3fff24e85cb65a7be7ac1bb34706a26dced0142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_828c6d26ef99abd3d7506102e3fff24e85cb65a7be7ac1bb34706a26dced0142->leave($__internal_828c6d26ef99abd3d7506102e3fff24e85cb65a7be7ac1bb34706a26dced0142_prof);

        
        $__internal_9e2f1d4b72e79b6beed32cefb36c8d4f5c6cd3fae98cfd80d9b5eafe13818284->leave($__internal_9e2f1d4b72e79b6beed32cefb36c8d4f5c6cd3fae98cfd80d9b5eafe13818284_prof);

    }

    // line 60
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_238571d960b6ae79f4cbb500e3a43de0ce2f21ce5103d433243739135bfa6407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238571d960b6ae79f4cbb500e3a43de0ce2f21ce5103d433243739135bfa6407->enter($__internal_238571d960b6ae79f4cbb500e3a43de0ce2f21ce5103d433243739135bfa6407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        $__internal_cc9fe8d9d68f6368ca92222c9cfb9d589b45a67a6ecfa8304e407bfe3dec56a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9fe8d9d68f6368ca92222c9cfb9d589b45a67a6ecfa8304e407bfe3dec56a7->enter($__internal_cc9fe8d9d68f6368ca92222c9cfb9d589b45a67a6ecfa8304e407bfe3dec56a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

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
        
        $__internal_cc9fe8d9d68f6368ca92222c9cfb9d589b45a67a6ecfa8304e407bfe3dec56a7->leave($__internal_cc9fe8d9d68f6368ca92222c9cfb9d589b45a67a6ecfa8304e407bfe3dec56a7_prof);

        
        $__internal_238571d960b6ae79f4cbb500e3a43de0ce2f21ce5103d433243739135bfa6407->leave($__internal_238571d960b6ae79f4cbb500e3a43de0ce2f21ce5103d433243739135bfa6407_prof);

    }

    // line 62
    public function block_header($context, array $blocks = array())
    {
        $__internal_e099b1e8a445b6b016c056d2b84c2abc200fc0ea0b6cab279f92b2c71d17ab0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e099b1e8a445b6b016c056d2b84c2abc200fc0ea0b6cab279f92b2c71d17ab0d->enter($__internal_e099b1e8a445b6b016c056d2b84c2abc200fc0ea0b6cab279f92b2c71d17ab0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_e8a51f42f850642cdbaa4699bd6ef6b9a070d3b6f720acfe2557833dd7e6760f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8a51f42f850642cdbaa4699bd6ef6b9a070d3b6f720acfe2557833dd7e6760f->enter($__internal_e8a51f42f850642cdbaa4699bd6ef6b9a070d3b6f720acfe2557833dd7e6760f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_e8a51f42f850642cdbaa4699bd6ef6b9a070d3b6f720acfe2557833dd7e6760f->leave($__internal_e8a51f42f850642cdbaa4699bd6ef6b9a070d3b6f720acfe2557833dd7e6760f_prof);

        
        $__internal_e099b1e8a445b6b016c056d2b84c2abc200fc0ea0b6cab279f92b2c71d17ab0d->leave($__internal_e099b1e8a445b6b016c056d2b84c2abc200fc0ea0b6cab279f92b2c71d17ab0d_prof);

    }

    // line 69
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_2ed296c69d21121e0ca9b666737d705d60e4ea20fc6c3ba39dd07386f1e65f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ed296c69d21121e0ca9b666737d705d60e4ea20fc6c3ba39dd07386f1e65f70->enter($__internal_2ed296c69d21121e0ca9b666737d705d60e4ea20fc6c3ba39dd07386f1e65f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        $__internal_3c4804a5ab1a2806c39b604cec012aae6a93b385fb87d3139d21813529bd3a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4804a5ab1a2806c39b604cec012aae6a93b385fb87d3139d21813529bd3a84->enter($__internal_3c4804a5ab1a2806c39b604cec012aae6a93b385fb87d3139d21813529bd3a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

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
        
        $__internal_3c4804a5ab1a2806c39b604cec012aae6a93b385fb87d3139d21813529bd3a84->leave($__internal_3c4804a5ab1a2806c39b604cec012aae6a93b385fb87d3139d21813529bd3a84_prof);

        
        $__internal_2ed296c69d21121e0ca9b666737d705d60e4ea20fc6c3ba39dd07386f1e65f70->leave($__internal_2ed296c69d21121e0ca9b666737d705d60e4ea20fc6c3ba39dd07386f1e65f70_prof);

    }

    // line 77
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_4a356f6029a23d8ed15a00aef29584b1f4d8835f9ae833609ee7ea528fc8ee5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a356f6029a23d8ed15a00aef29584b1f4d8835f9ae833609ee7ea528fc8ee5f->enter($__internal_4a356f6029a23d8ed15a00aef29584b1f4d8835f9ae833609ee7ea528fc8ee5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        $__internal_933740aef21f9df10e264d5e90dfebe63b7ce26afece30de98ec72dd39cdefe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933740aef21f9df10e264d5e90dfebe63b7ce26afece30de98ec72dd39cdefe6->enter($__internal_933740aef21f9df10e264d5e90dfebe63b7ce26afece30de98ec72dd39cdefe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

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
        
        $__internal_933740aef21f9df10e264d5e90dfebe63b7ce26afece30de98ec72dd39cdefe6->leave($__internal_933740aef21f9df10e264d5e90dfebe63b7ce26afece30de98ec72dd39cdefe6_prof);

        
        $__internal_4a356f6029a23d8ed15a00aef29584b1f4d8835f9ae833609ee7ea528fc8ee5f->leave($__internal_4a356f6029a23d8ed15a00aef29584b1f4d8835f9ae833609ee7ea528fc8ee5f_prof);

    }

    // line 81
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_6720235c47680c2c1cf7c9edeeb9c83e68648d7c53cb24f8087673c793652101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6720235c47680c2c1cf7c9edeeb9c83e68648d7c53cb24f8087673c793652101->enter($__internal_6720235c47680c2c1cf7c9edeeb9c83e68648d7c53cb24f8087673c793652101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        $__internal_fd874851afa127b55bcf19cce9925a697483aaccd24df737187b80b2023bfc3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd874851afa127b55bcf19cce9925a697483aaccd24df737187b80b2023bfc3f->enter($__internal_fd874851afa127b55bcf19cce9925a697483aaccd24df737187b80b2023bfc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

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
        
        $__internal_fd874851afa127b55bcf19cce9925a697483aaccd24df737187b80b2023bfc3f->leave($__internal_fd874851afa127b55bcf19cce9925a697483aaccd24df737187b80b2023bfc3f_prof);

        
        $__internal_6720235c47680c2c1cf7c9edeeb9c83e68648d7c53cb24f8087673c793652101->leave($__internal_6720235c47680c2c1cf7c9edeeb9c83e68648d7c53cb24f8087673c793652101_prof);

    }

    // line 100
    public function block_user_menu_dropdown($context, array $blocks = array())
    {
        $__internal_5a11e03a31feeddd8e400f1826e2fcb7a74c7f5e6021d975d51b00eff8caedbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a11e03a31feeddd8e400f1826e2fcb7a74c7f5e6021d975d51b00eff8caedbe->enter($__internal_5a11e03a31feeddd8e400f1826e2fcb7a74c7f5e6021d975d51b00eff8caedbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

        $__internal_e387fdbc84e50b152aa7821cb4070df44fc309547684eade26a7e4ddb23f3d08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e387fdbc84e50b152aa7821cb4070df44fc309547684eade26a7e4ddb23f3d08->enter($__internal_e387fdbc84e50b152aa7821cb4070df44fc309547684eade26a7e4ddb23f3d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu_dropdown"));

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
        
        $__internal_e387fdbc84e50b152aa7821cb4070df44fc309547684eade26a7e4ddb23f3d08->leave($__internal_e387fdbc84e50b152aa7821cb4070df44fc309547684eade26a7e4ddb23f3d08_prof);

        
        $__internal_5a11e03a31feeddd8e400f1826e2fcb7a74c7f5e6021d975d51b00eff8caedbe->leave($__internal_5a11e03a31feeddd8e400f1826e2fcb7a74c7f5e6021d975d51b00eff8caedbe_prof);

    }

    // line 118
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4e82e64fdcc2e3d3f418f5669cf05940c472a1cb03f7f91ca47a4c64725a2aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e82e64fdcc2e3d3f418f5669cf05940c472a1cb03f7f91ca47a4c64725a2aaa->enter($__internal_4e82e64fdcc2e3d3f418f5669cf05940c472a1cb03f7f91ca47a4c64725a2aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_d5a131751ea2547073d96ad1de4bc4a1e5dd1fa8ded4d4a8c92490f63bd68f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a131751ea2547073d96ad1de4bc4a1e5dd1fa8ded4d4a8c92490f63bd68f30->enter($__internal_d5a131751ea2547073d96ad1de4bc4a1e5dd1fa8ded4d4a8c92490f63bd68f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 119
        echo "                <section class=\"sidebar\">
                    ";
        // line 120
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 127
        echo "                </section>
            ";
        
        $__internal_d5a131751ea2547073d96ad1de4bc4a1e5dd1fa8ded4d4a8c92490f63bd68f30->leave($__internal_d5a131751ea2547073d96ad1de4bc4a1e5dd1fa8ded4d4a8c92490f63bd68f30_prof);

        
        $__internal_4e82e64fdcc2e3d3f418f5669cf05940c472a1cb03f7f91ca47a4c64725a2aaa->leave($__internal_4e82e64fdcc2e3d3f418f5669cf05940c472a1cb03f7f91ca47a4c64725a2aaa_prof);

    }

    // line 120
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_7732ca94490f23dfa270588a0452cf83b373973e76886fedcdb8303dcec8939b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7732ca94490f23dfa270588a0452cf83b373973e76886fedcdb8303dcec8939b->enter($__internal_7732ca94490f23dfa270588a0452cf83b373973e76886fedcdb8303dcec8939b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        $__internal_70ffe602a009848457b4ff222aef143a212a58cbe8b0da6685eadf07dc8dd695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ffe602a009848457b4ff222aef143a212a58cbe8b0da6685eadf07dc8dd695->enter($__internal_70ffe602a009848457b4ff222aef143a212a58cbe8b0da6685eadf07dc8dd695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 121
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 122
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 125
        echo "
                    ";
        
        $__internal_70ffe602a009848457b4ff222aef143a212a58cbe8b0da6685eadf07dc8dd695->leave($__internal_70ffe602a009848457b4ff222aef143a212a58cbe8b0da6685eadf07dc8dd695_prof);

        
        $__internal_7732ca94490f23dfa270588a0452cf83b373973e76886fedcdb8303dcec8939b->leave($__internal_7732ca94490f23dfa270588a0452cf83b373973e76886fedcdb8303dcec8939b_prof);

    }

    // line 132
    public function block_content($context, array $blocks = array())
    {
        $__internal_9cd093ed401fc986f16bbee1429a168bdbbd38dcc0e2c9f7fbff58e0b78786b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd093ed401fc986f16bbee1429a168bdbbd38dcc0e2c9f7fbff58e0b78786b8->enter($__internal_9cd093ed401fc986f16bbee1429a168bdbbd38dcc0e2c9f7fbff58e0b78786b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a4fb4bfe86535580a6607c00be5e2787ce61562eef1dae9c72d73ec1c41a840e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4fb4bfe86535580a6607c00be5e2787ce61562eef1dae9c72d73ec1c41a840e->enter($__internal_a4fb4bfe86535580a6607c00be5e2787ce61562eef1dae9c72d73ec1c41a840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a4fb4bfe86535580a6607c00be5e2787ce61562eef1dae9c72d73ec1c41a840e->leave($__internal_a4fb4bfe86535580a6607c00be5e2787ce61562eef1dae9c72d73ec1c41a840e_prof);

        
        $__internal_9cd093ed401fc986f16bbee1429a168bdbbd38dcc0e2c9f7fbff58e0b78786b8->leave($__internal_9cd093ed401fc986f16bbee1429a168bdbbd38dcc0e2c9f7fbff58e0b78786b8_prof);

    }

    // line 133
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_79ec27e0f481e59c020bdaded5ccfe8e5e9595f62dfc1eaa81d8b3c74edfda54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ec27e0f481e59c020bdaded5ccfe8e5e9595f62dfc1eaa81d8b3c74edfda54->enter($__internal_79ec27e0f481e59c020bdaded5ccfe8e5e9595f62dfc1eaa81d8b3c74edfda54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        $__internal_170ca74747b8c3e6bcc05f4ee91f95ad69cceafef9af88a2a2d9fa1076f60964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170ca74747b8c3e6bcc05f4ee91f95ad69cceafef9af88a2a2d9fa1076f60964->enter($__internal_170ca74747b8c3e6bcc05f4ee91f95ad69cceafef9af88a2a2d9fa1076f60964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 134
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_170ca74747b8c3e6bcc05f4ee91f95ad69cceafef9af88a2a2d9fa1076f60964->leave($__internal_170ca74747b8c3e6bcc05f4ee91f95ad69cceafef9af88a2a2d9fa1076f60964_prof);

        
        $__internal_79ec27e0f481e59c020bdaded5ccfe8e5e9595f62dfc1eaa81d8b3c74edfda54->leave($__internal_79ec27e0f481e59c020bdaded5ccfe8e5e9595f62dfc1eaa81d8b3c74edfda54_prof);

    }

    // line 138
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_e3727138c11541c8738f17f423a320bc56c91ad9741ad42c967aae9b3ea42946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3727138c11541c8738f17f423a320bc56c91ad9741ad42c967aae9b3ea42946->enter($__internal_e3727138c11541c8738f17f423a320bc56c91ad9741ad42c967aae9b3ea42946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_34cf4e553056b136c61d5dc4398518b181f28080b84f5296c8a81d2fc06064ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34cf4e553056b136c61d5dc4398518b181f28080b84f5296c8a81d2fc06064ed->enter($__internal_34cf4e553056b136c61d5dc4398518b181f28080b84f5296c8a81d2fc06064ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 139
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_34cf4e553056b136c61d5dc4398518b181f28080b84f5296c8a81d2fc06064ed->leave($__internal_34cf4e553056b136c61d5dc4398518b181f28080b84f5296c8a81d2fc06064ed_prof);

        
        $__internal_e3727138c11541c8738f17f423a320bc56c91ad9741ad42c967aae9b3ea42946->leave($__internal_e3727138c11541c8738f17f423a320bc56c91ad9741ad42c967aae9b3ea42946_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_6c305d0f437f993227bfeca8f77a9fecfd5cc6f3e49ee909ad0864fce2331117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c305d0f437f993227bfeca8f77a9fecfd5cc6f3e49ee909ad0864fce2331117->enter($__internal_6c305d0f437f993227bfeca8f77a9fecfd5cc6f3e49ee909ad0864fce2331117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_08329dbcd1a17a5ed6e6f1a7ec1d8661500473c7f80bf464450fbba03a92db57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08329dbcd1a17a5ed6e6f1a7ec1d8661500473c7f80bf464450fbba03a92db57->enter($__internal_08329dbcd1a17a5ed6e6f1a7ec1d8661500473c7f80bf464450fbba03a92db57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_08329dbcd1a17a5ed6e6f1a7ec1d8661500473c7f80bf464450fbba03a92db57->leave($__internal_08329dbcd1a17a5ed6e6f1a7ec1d8661500473c7f80bf464450fbba03a92db57_prof);

        
        $__internal_6c305d0f437f993227bfeca8f77a9fecfd5cc6f3e49ee909ad0864fce2331117->leave($__internal_6c305d0f437f993227bfeca8f77a9fecfd5cc6f3e49ee909ad0864fce2331117_prof);

    }

    // line 141
    public function block_content_help($context, array $blocks = array())
    {
        $__internal_9bf5e976e2ab8dea1188305dc56fca7b3983df162b967ee188baa63689568d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf5e976e2ab8dea1188305dc56fca7b3983df162b967ee188baa63689568d47->enter($__internal_9bf5e976e2ab8dea1188305dc56fca7b3983df162b967ee188baa63689568d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

        $__internal_c44e0898bf4ec76841d7e9ba75d37113aa5ef13adc0c0a3abc04f79a9b5ed4ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44e0898bf4ec76841d7e9ba75d37113aa5ef13adc0c0a3abc04f79a9b5ed4ad->enter($__internal_c44e0898bf4ec76841d7e9ba75d37113aa5ef13adc0c0a3abc04f79a9b5ed4ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_help"));

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
        
        $__internal_c44e0898bf4ec76841d7e9ba75d37113aa5ef13adc0c0a3abc04f79a9b5ed4ad->leave($__internal_c44e0898bf4ec76841d7e9ba75d37113aa5ef13adc0c0a3abc04f79a9b5ed4ad_prof);

        
        $__internal_9bf5e976e2ab8dea1188305dc56fca7b3983df162b967ee188baa63689568d47->leave($__internal_9bf5e976e2ab8dea1188305dc56fca7b3983df162b967ee188baa63689568d47_prof);

    }

    // line 153
    public function block_main($context, array $blocks = array())
    {
        $__internal_f12b31763c4e9bcf00692bde95e7c15d233a8c1b58d9b36bb4c91298b079cce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f12b31763c4e9bcf00692bde95e7c15d233a8c1b58d9b36bb4c91298b079cce9->enter($__internal_f12b31763c4e9bcf00692bde95e7c15d233a8c1b58d9b36bb4c91298b079cce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_2889eee108dbb2ea954c4ab7dfd561e9ded023f99d0c200c4c282c3c74c40d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2889eee108dbb2ea954c4ab7dfd561e9ded023f99d0c200c4c282c3c74c40d4e->enter($__internal_2889eee108dbb2ea954c4ab7dfd561e9ded023f99d0c200c4c282c3c74c40d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_2889eee108dbb2ea954c4ab7dfd561e9ded023f99d0c200c4c282c3c74c40d4e->leave($__internal_2889eee108dbb2ea954c4ab7dfd561e9ded023f99d0c200c4c282c3c74c40d4e_prof);

        
        $__internal_f12b31763c4e9bcf00692bde95e7c15d233a8c1b58d9b36bb4c91298b079cce9->leave($__internal_f12b31763c4e9bcf00692bde95e7c15d233a8c1b58d9b36bb4c91298b079cce9_prof);

    }

    // line 160
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_b8f8719e7cf3b88078667c5647312a83f712e15cdd41804ba2b3bbb5498d9748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f8719e7cf3b88078667c5647312a83f712e15cdd41804ba2b3bbb5498d9748->enter($__internal_b8f8719e7cf3b88078667c5647312a83f712e15cdd41804ba2b3bbb5498d9748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_70dd68dd8b26a315289735a8d6252c86c063109272643db704f6f29a8789cb55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70dd68dd8b26a315289735a8d6252c86c063109272643db704f6f29a8789cb55->enter($__internal_70dd68dd8b26a315289735a8d6252c86c063109272643db704f6f29a8789cb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_70dd68dd8b26a315289735a8d6252c86c063109272643db704f6f29a8789cb55->leave($__internal_70dd68dd8b26a315289735a8d6252c86c063109272643db704f6f29a8789cb55_prof);

        
        $__internal_b8f8719e7cf3b88078667c5647312a83f712e15cdd41804ba2b3bbb5498d9748->leave($__internal_b8f8719e7cf3b88078667c5647312a83f712e15cdd41804ba2b3bbb5498d9748_prof);

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
