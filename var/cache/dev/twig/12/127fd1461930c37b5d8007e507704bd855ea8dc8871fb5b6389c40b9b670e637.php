<?php

/* @EasyAdmin/default/menu.html.twig */
class __TwigTemplate_4d7fa4c96fa4f65b28d4ef4a1884b72512e2103c5a7b6add0ee1b4413c9e030b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'main_menu_before' => array($this, 'block_main_menu_before'),
            'main_menu' => array($this, 'block_main_menu'),
            'main_menu_after' => array($this, 'block_main_menu_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3edb55b1b9c038634bb87a46b7a0e6e3bba8b10befa3f857fd5cfd247918df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3edb55b1b9c038634bb87a46b7a0e6e3bba8b10befa3f857fd5cfd247918df2->enter($__internal_c3edb55b1b9c038634bb87a46b7a0e6e3bba8b10befa3f857fd5cfd247918df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/menu.html.twig"));

        $__internal_a4d546379bd7af42cfb853446ed9b649927ebfe115a8452a37a303cfbd8dd3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4d546379bd7af42cfb853446ed9b649927ebfe115a8452a37a303cfbd8dd3a6->enter($__internal_a4d546379bd7af42cfb853446ed9b649927ebfe115a8452a37a303cfbd8dd3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/menu.html.twig"));

        // line 28
        echo "
";
        // line 29
        $context["helper"] = $this;
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('main_menu_before', $context, $blocks);
        // line 32
        echo "
<ul class=\"sidebar-menu\">
    ";
        // line 34
        $this->displayBlock('main_menu', $context, $blocks);
        // line 51
        echo "</ul>

";
        // line 53
        $this->displayBlock('main_menu_after', $context, $blocks);
        
        $__internal_c3edb55b1b9c038634bb87a46b7a0e6e3bba8b10befa3f857fd5cfd247918df2->leave($__internal_c3edb55b1b9c038634bb87a46b7a0e6e3bba8b10befa3f857fd5cfd247918df2_prof);

        
        $__internal_a4d546379bd7af42cfb853446ed9b649927ebfe115a8452a37a303cfbd8dd3a6->leave($__internal_a4d546379bd7af42cfb853446ed9b649927ebfe115a8452a37a303cfbd8dd3a6_prof);

    }

    // line 31
    public function block_main_menu_before($context, array $blocks = array())
    {
        $__internal_1c072e7a42d3c6d1db517ecc39eb59f0f6e4a01b939bf53ffe2413ea9a23c76c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c072e7a42d3c6d1db517ecc39eb59f0f6e4a01b939bf53ffe2413ea9a23c76c->enter($__internal_1c072e7a42d3c6d1db517ecc39eb59f0f6e4a01b939bf53ffe2413ea9a23c76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        $__internal_6fa52cde3acab4f44842cdc044caa7f24afcf9323ecd9790275b71c4a170fa02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa52cde3acab4f44842cdc044caa7f24afcf9323ecd9790275b71c4a170fa02->enter($__internal_6fa52cde3acab4f44842cdc044caa7f24afcf9323ecd9790275b71c4a170fa02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_before"));

        
        $__internal_6fa52cde3acab4f44842cdc044caa7f24afcf9323ecd9790275b71c4a170fa02->leave($__internal_6fa52cde3acab4f44842cdc044caa7f24afcf9323ecd9790275b71c4a170fa02_prof);

        
        $__internal_1c072e7a42d3c6d1db517ecc39eb59f0f6e4a01b939bf53ffe2413ea9a23c76c->leave($__internal_1c072e7a42d3c6d1db517ecc39eb59f0f6e4a01b939bf53ffe2413ea9a23c76c_prof);

    }

    // line 34
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_773e3aae4df2bc3ff004a7fbef74793ddcc57b629bb737434b3a99d883994c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_773e3aae4df2bc3ff004a7fbef74793ddcc57b629bb737434b3a99d883994c06->enter($__internal_773e3aae4df2bc3ff004a7fbef74793ddcc57b629bb737434b3a99d883994c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        $__internal_827d4ad6ff5daeab6222cc6381f0c9ace4e3d88c62f3a65f404562c63a4a2a56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827d4ad6ff5daeab6222cc6381f0c9ace4e3d88c62f3a65f404562c63a4a2a56->enter($__internal_827d4ad6ff5daeab6222cc6381f0c9ace4e3d88c62f3a65f404562c63a4a2a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 35
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.menu"));
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
            // line 36
            echo "            <li class=\"";
            echo ((($this->getAttribute($context["item"], "type", array()) == "divider")) ? ("header") : (""));
            echo " ";
            echo (( !twig_test_empty($this->getAttribute($context["item"], "children", array()))) ? ("treeview") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array()))) ? ("active") : (""));
            echo " ";
            echo ((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) !=  -1)) ? ("submenu-active") : (""));
            echo "\">
                ";
            // line 37
            echo $context["helper"]->getrender_menu_item($context["item"], (($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
            echo "

                ";
            // line 39
            if ( !twig_test_empty((($this->getAttribute($context["item"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "children", array()), array())) : (array())))) {
                // line 40
                echo "                    <ul class=\"treeview-menu\">
                        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "children", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                    // line 42
                    echo "                            <li class=\"";
                    echo ((($this->getAttribute($context["subitem"], "type", array()) == "divider")) ? ("header") : (""));
                    echo " ";
                    echo (((((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "menuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($this->getAttribute($this->getAttribute($context["loop"], "parent", array()), "loop", array()), "index0", array())) && ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array(), "any", false, true), "query", array(), "any", false, true), "get", array(0 => "submenuIndex"), "method"),  -1)) : ( -1)) == $this->getAttribute($context["loop"], "index0", array())))) ? ("active") : (""));
                    echo "\">
                                ";
                    // line 43
                    echo $context["helper"]->getrender_menu_item($context["subitem"], (($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["_entity_config"] ?? null), "translation_domain", array()), "messages")) : ("messages")));
                    echo "
                            </li>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    </ul>
                ";
            }
            // line 48
            echo "            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "    ";
        
        $__internal_827d4ad6ff5daeab6222cc6381f0c9ace4e3d88c62f3a65f404562c63a4a2a56->leave($__internal_827d4ad6ff5daeab6222cc6381f0c9ace4e3d88c62f3a65f404562c63a4a2a56_prof);

        
        $__internal_773e3aae4df2bc3ff004a7fbef74793ddcc57b629bb737434b3a99d883994c06->leave($__internal_773e3aae4df2bc3ff004a7fbef74793ddcc57b629bb737434b3a99d883994c06_prof);

    }

    // line 53
    public function block_main_menu_after($context, array $blocks = array())
    {
        $__internal_d1a23138611efd233ea15d18c078d4de82b3d7343573fe3a41f779795e9bb295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a23138611efd233ea15d18c078d4de82b3d7343573fe3a41f779795e9bb295->enter($__internal_d1a23138611efd233ea15d18c078d4de82b3d7343573fe3a41f779795e9bb295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        $__internal_70c03770927549fe64c15bf52752b1a87cdb395b7a8390fe0261b638de22d45d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c03770927549fe64c15bf52752b1a87cdb395b7a8390fe0261b638de22d45d->enter($__internal_70c03770927549fe64c15bf52752b1a87cdb395b7a8390fe0261b638de22d45d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_after"));

        
        $__internal_70c03770927549fe64c15bf52752b1a87cdb395b7a8390fe0261b638de22d45d->leave($__internal_70c03770927549fe64c15bf52752b1a87cdb395b7a8390fe0261b638de22d45d_prof);

        
        $__internal_d1a23138611efd233ea15d18c078d4de82b3d7343573fe3a41f779795e9bb295->leave($__internal_d1a23138611efd233ea15d18c078d4de82b3d7343573fe3a41f779795e9bb295_prof);

    }

    // line 1
    public function getrender_menu_item($__item__ = null, $__translation_domain__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "item" => $__item__,
            "translation_domain" => $__translation_domain__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_04a4ab04bf8074c730c6d2f4c1650cc0a1769953526acfbb911d77e1a909f454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_04a4ab04bf8074c730c6d2f4c1650cc0a1769953526acfbb911d77e1a909f454->enter($__internal_04a4ab04bf8074c730c6d2f4c1650cc0a1769953526acfbb911d77e1a909f454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            $__internal_5c0758225777e350fc16339ee3eb58acec176765b969d3a69534d82069248f8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5c0758225777e350fc16339ee3eb58acec176765b969d3a69534d82069248f8e->enter($__internal_5c0758225777e350fc16339ee3eb58acec176765b969d3a69534d82069248f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_menu_item"));

            // line 2
            echo "    ";
            if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "divider")) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                $context["menu_params"] = array("menuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "menu_index", array()), "submenuIndex" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "submenu_index", array()));
                // line 6
                echo "        ";
                $context["path"] = ((($this->getAttribute(                // line 7
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "link")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "url", array())) : (((($this->getAttribute(                // line 8
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array()))) : (((($this->getAttribute(                // line 9
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "entity")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(twig_array_merge(array("entity" => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "entity", array()), "action" => "list"), ($context["menu_params"] ?? $this->getContext($context, "menu_params"))), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array())))) : (((($this->getAttribute(                // line 10
($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "empty")) ? ("#") : (""))))))));
                // line 12
                echo "
        ";
                // line 17
                echo "        ";
                if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "type", array()) == "route") && (is_string($__internal_05d8b89e4cea3aa1daabb1731a60b769b5f46ddc610d47605ed3533eb1605d78 = ($context["path"] ?? $this->getContext($context, "path"))) && is_string($__internal_2f3499941c50cd2724f51337f5d2b81daf2cadded2f4fb843a8f199a9302a8ef = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin")) && ('' === $__internal_2f3499941c50cd2724f51337f5d2b81daf2cadded2f4fb843a8f199a9302a8ef || 0 === strpos($__internal_05d8b89e4cea3aa1daabb1731a60b769b5f46ddc610d47605ed3533eb1605d78, $__internal_2f3499941c50cd2724f51337f5d2b81daf2cadded2f4fb843a8f199a9302a8ef))))) {
                    // line 18
                    echo "            ";
                    $context["path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "route", array()), twig_array_merge(($context["menu_params"] ?? $this->getContext($context, "menu_params")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "params", array())));
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "
        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, ($context["path"] ?? $this->getContext($context, "path")), "html", null, true);
                echo "\" ";
                if ((($this->getAttribute(($context["item"] ?? null), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "target", array()), false)) : (false))) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "target", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
            ";
                // line 22
                if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()))) {
                    echo "<i class=\"fa ";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "icon", array()), "html", null, true);
                    echo "\"></i>";
                }
                // line 23
                echo "            <span>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "</span>
            ";
                // line 24
                if ( !twig_test_empty((($this->getAttribute(($context["item"] ?? null), "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "children", array()), array())) : (array())))) {
                    echo "<i class=\"fa fa-angle-left pull-right\"></i>";
                }
                // line 25
                echo "        </a>
    ";
            }
            
            $__internal_5c0758225777e350fc16339ee3eb58acec176765b969d3a69534d82069248f8e->leave($__internal_5c0758225777e350fc16339ee3eb58acec176765b969d3a69534d82069248f8e_prof);

            
            $__internal_04a4ab04bf8074c730c6d2f4c1650cc0a1769953526acfbb911d77e1a909f454->leave($__internal_04a4ab04bf8074c730c6d2f4c1650cc0a1769953526acfbb911d77e1a909f454_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 25,  284 => 24,  279 => 23,  273 => 22,  263 => 21,  260 => 20,  257 => 19,  254 => 18,  251 => 17,  248 => 12,  246 => 10,  245 => 9,  244 => 8,  243 => 7,  241 => 6,  238 => 5,  232 => 3,  229 => 2,  210 => 1,  193 => 53,  183 => 50,  168 => 48,  164 => 46,  147 => 43,  140 => 42,  123 => 41,  120 => 40,  118 => 39,  113 => 37,  102 => 36,  84 => 35,  75 => 34,  58 => 31,  48 => 53,  44 => 51,  42 => 34,  38 => 32,  36 => 31,  33 => 30,  31 => 29,  28 => 28,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro render_menu_item(item, translation_domain) %}
    {% if item.type == 'divider' %}
        {{ item.label|trans(domain = translation_domain) }}
    {% else %}
        {% set menu_params = { menuIndex: item.menu_index, submenuIndex: item.submenu_index } %}
        {% set path =
            item.type == 'link' ? item.url :
            item.type == 'route' ? path(item.route, item.params) :
            item.type == 'entity' ? path('easyadmin', { entity: item.entity, action: 'list' }|merge(menu_params)|merge(item.params)) :
            item.type == 'empty' ? '#' : ''
        %}

        {# if the URL generated for the route belongs to the backend, regenerate
           the URL to include the menu_params to display the selected menu item
           (this is checked comparing the beginning of the route URL with the backend homepage URL)
        #}
        {% if item.type == 'route' and (path starts with path('easyadmin')) %}
            {% set path = path(item.route, menu_params|merge(item.params)) %}
        {% endif %}

        <a href=\"{{ path }}\" {% if item.target|default(false) %}target=\"{{ item.target }}\"{% endif %}>
            {% if item.icon is not empty %}<i class=\"fa {{ item.icon }}\"></i>{% endif %}
            <span>{{ item.label|trans(domain = translation_domain) }}</span>
            {% if item.children|default([]) is not empty %}<i class=\"fa fa-angle-left pull-right\"></i>{% endif %}
        </a>
    {% endif %}
{% endmacro %}

{% import _self as helper %}

{% block main_menu_before %}{% endblock %}

<ul class=\"sidebar-menu\">
    {% block main_menu %}
        {% for item in easyadmin_config('design.menu') %}
            <li class=\"{{ item.type == 'divider' ? 'header' }} {{ item.children is not empty ? 'treeview' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.index0 ? 'active' }} {{ app.request.query.get('submenuIndex')|default(-1) != -1 ? 'submenu-active' }}\">
                {{ helper.render_menu_item(item, _entity_config.translation_domain|default('messages')) }}

                {% if item.children|default([]) is not empty %}
                    <ul class=\"treeview-menu\">
                        {% for subitem in item.children %}
                            <li class=\"{{ subitem.type == 'divider' ? 'header' }} {{ app.request.query.get('menuIndex')|default(-1) == loop.parent.loop.index0 and app.request.query.get('submenuIndex')|default(-1) == loop.index0 ? 'active' }}\">
                                {{ helper.render_menu_item(subitem, _entity_config.translation_domain|default('messages')) }}
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </li>
        {% endfor %}
    {% endblock main_menu %}
</ul>

{% block main_menu_after %}{% endblock %}
", "@EasyAdmin/default/menu.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\menu.html.twig");
    }
}
