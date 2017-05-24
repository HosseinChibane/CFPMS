<?php

/* EasyAdminBundle:data_collector:easyadmin.html.twig */
class __TwigTemplate_1538f778d8dd1fe26b0bc7de9c0c3294463e4e8fdb6f9f9f03d4ab3035a4a7dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "EasyAdminBundle:data_collector:easyadmin.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d246f5097b02adced4d3bfc5874cd3bdf924b52210d73af842deee97ea657920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d246f5097b02adced4d3bfc5874cd3bdf924b52210d73af842deee97ea657920->enter($__internal_d246f5097b02adced4d3bfc5874cd3bdf924b52210d73af842deee97ea657920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:data_collector:easyadmin.html.twig"));

        $__internal_58ac21028820da6bb8684b297ed897b69626b24f95ffefc9fcdc08eb4e682873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ac21028820da6bb8684b297ed897b69626b24f95ffefc9fcdc08eb4e682873->enter($__internal_58ac21028820da6bb8684b297ed897b69626b24f95ffefc9fcdc08eb4e682873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:data_collector:easyadmin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d246f5097b02adced4d3bfc5874cd3bdf924b52210d73af842deee97ea657920->leave($__internal_d246f5097b02adced4d3bfc5874cd3bdf924b52210d73af842deee97ea657920_prof);

        
        $__internal_58ac21028820da6bb8684b297ed897b69626b24f95ffefc9fcdc08eb4e682873->leave($__internal_58ac21028820da6bb8684b297ed897b69626b24f95ffefc9fcdc08eb4e682873_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_135772fe470535e3f8ca55b547fbb726802d319305409267f8a35d74dbe1d668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135772fe470535e3f8ca55b547fbb726802d319305409267f8a35d74dbe1d668->enter($__internal_135772fe470535e3f8ca55b547fbb726802d319305409267f8a35d74dbe1d668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dc17ba50a2dd2acc5eacce058a285ffe44232134c6f1dd29cc212c502e3ecf8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc17ba50a2dd2acc5eacce058a285ffe44232134c6f1dd29cc212c502e3ecf8a->enter($__internal_dc17ba50a2dd2acc5eacce058a285ffe44232134c6f1dd29cc212c502e3ecf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        ob_start();
        // line 7
        echo "        ";
        $context["icon_fill_color"] = (((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) ? ("#222") : ("#AAA"));
        // line 8
        echo "        ";
        $context["icon_height"] = (((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) ? ("28") : ("24"));
        // line 9
        echo "        <span class=\"icon\">";
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("fill_color" => ($context["icon_fill_color"] ?? $this->getContext($context, "icon_fill_color")), "height" => ($context["icon_height"] ?? $this->getContext($context, "icon_height"))));
        echo "</span>
        <span class=\"sf-toolbar-value sf-toolbar-status\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 12
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>EasyAdmin version</b>
        <span class=\"sf-toolbar-status\">";
        // line 16
        echo twig_escape_filter($this->env, twig_constant("JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Managed entities</b>
        <span class=\"sf-toolbar-status\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "numEntities", array()), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 23
        echo "
    ";
        // line 24
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "
";
        
        $__internal_dc17ba50a2dd2acc5eacce058a285ffe44232134c6f1dd29cc212c502e3ecf8a->leave($__internal_dc17ba50a2dd2acc5eacce058a285ffe44232134c6f1dd29cc212c502e3ecf8a_prof);

        
        $__internal_135772fe470535e3f8ca55b547fbb726802d319305409267f8a35d74dbe1d668->leave($__internal_135772fe470535e3f8ca55b547fbb726802d319305409267f8a35d74dbe1d668_prof);

    }

    // line 27
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2660f32ee88d80753e80c1f1e6980685c159fab45e98c8990a7c3c6aec75ca0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2660f32ee88d80753e80c1f1e6980685c159fab45e98c8990a7c3c6aec75ca0c->enter($__internal_2660f32ee88d80753e80c1f1e6980685c159fab45e98c8990a7c3c6aec75ca0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_43038024fb44c90ed4f1e6595eea25987f63453ca6992b24c52b2037955ece71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43038024fb44c90ed4f1e6595eea25987f63453ca6992b24c52b2037955ece71->enter($__internal_43038024fb44c90ed4f1e6595eea25987f63453ca6992b24c52b2037955ece71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 28
        echo "    <span class=\"label status-";
        echo (( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array())) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 29
        echo twig_include($this->env, $context, "@EasyAdmin/data_collector/icon.svg.twig", array("height" => 32));
        echo "</span>
        <strong>EasyAdmin</strong>
    </span>
";
        
        $__internal_43038024fb44c90ed4f1e6595eea25987f63453ca6992b24c52b2037955ece71->leave($__internal_43038024fb44c90ed4f1e6595eea25987f63453ca6992b24c52b2037955ece71_prof);

        
        $__internal_2660f32ee88d80753e80c1f1e6980685c159fab45e98c8990a7c3c6aec75ca0c->leave($__internal_2660f32ee88d80753e80c1f1e6980685c159fab45e98c8990a7c3c6aec75ca0c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bf604aa9cec9e5e9f0012ca48f4abef2b338958ac84bd08dc460584c35c4d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf604aa9cec9e5e9f0012ca48f4abef2b338958ac84bd08dc460584c35c4d0c->enter($__internal_9bf604aa9cec9e5e9f0012ca48f4abef2b338958ac84bd08dc460584c35c4d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f59a7ff7174e751390ad43fbf227e1f3634957569880957a30351973fb5b1043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f59a7ff7174e751390ad43fbf227e1f3634957569880957a30351973fb5b1043->enter($__internal_f59a7ff7174e751390ad43fbf227e1f3634957569880957a30351973fb5b1043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter(($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 36
        echo "
    <h2>EasyAdmin <small>(";
        // line 37
        echo twig_escape_filter($this->env, twig_constant("JavierEguiluz\\Bundle\\EasyAdminBundle\\EasyAdminBundle::VERSION"), "html", null, true);
        echo ")</small></h2>

    ";
        // line 39
        if ((($context["profiler_markup_version"] ?? $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 40
            echo "
        <h3>Request Parameters</h3>
        ";
            // line 42
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", array("data" => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array())));
            echo "

    ";
        } else {
            // line 45
            echo "
        ";
            // line 46
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array())) {
                // line 47
                echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
                // line 49
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "action", array()), "-")) : ("-")), "html", null, true);
                echo "</span>
                <span class=\"label\">Action</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
                // line 54
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "requestParameters", array(), "any", false, true), "entity", array()), "-")) : ("-")), "html", null, true);
                echo "</span>
                <span class=\"label\">Entity Name</span>
            </div>

            ";
                // line 58
                if ($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "id", array())) {
                    // line 59
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "id", array()), "html", null, true);
                    echo "</span>
                    <span class=\"label\">ID</span>
                </div>
            ";
                } elseif ($this->getAttribute($this->getAttribute(                // line 63
($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array())) {
                    // line 64
                    echo "                <div class=\"metric\">
                    <span class=\"value\">";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "sort_field", array()), "html", null, true);
                    echo " <span class=\"unit\">(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "requestParameters", array()), "sort_direction", array()), "html", null, true);
                    echo ")</span></span>
                    <span class=\"label\">Sorting</span>
                </div>
            ";
                }
                // line 69
                echo "        </div>
        ";
            }
            // line 71
            echo "
    ";
        }
        // line 73
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Current Entity Configuration</h3>
            <div class=\"tab-content\">
                ";
        // line 78
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "currentEntityConfig", array())), "method");
        echo "
            </div>

            <br>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Full Backend Configuration</h3>
            <div class=\"tab-content\">

                <h4>Basic Configuration</h4>
                ";
        // line 89
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("site_name" => $this->getAttribute($this->getAttribute(        // line 90
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "site_name", array(), "array"), "formats" => $this->getAttribute($this->getAttribute(        // line 91
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "formats", array(), "array"))), "method");
        // line 92
        echo "

                <h4>Design Configuration</h4>
                ";
        // line 95
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("design" => $this->getAttribute($this->getAttribute(        // line 96
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "design", array(), "array"))), "method");
        // line 97
        echo "

                <h4>Actions Configuration</h4>
                ";
        // line 100
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("disabled_actions" => $this->getAttribute($this->getAttribute(        // line 101
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "disabled_actions", array(), "array"), "list" => $this->getAttribute($this->getAttribute(        // line 102
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "list", array(), "array"), "edit" => $this->getAttribute($this->getAttribute(        // line 103
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "edit", array(), "array"), "new" => $this->getAttribute($this->getAttribute(        // line 104
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "new", array(), "array"), "show" => $this->getAttribute($this->getAttribute(        // line 105
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "show", array(), "array"))), "method");
        // line 106
        echo "

                <h4>Entities Configuration</h4>
                ";
        // line 109
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("entities" => $this->getAttribute($this->getAttribute(        // line 110
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()), "entities", array(), "array"))), "method");
        // line 111
        echo "

                <h4>Full Backend Configuration</h4>
                ";
        // line 114
        echo $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dump", array(0 => array("easy_admin" => $this->getAttribute(        // line 115
($context["collector"] ?? $this->getContext($context, "collector")), "backendConfig", array()))), "method");
        // line 116
        echo "
            </div>
        </div>
    </div>

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

";
        
        $__internal_f59a7ff7174e751390ad43fbf227e1f3634957569880957a30351973fb5b1043->leave($__internal_f59a7ff7174e751390ad43fbf227e1f3634957569880957a30351973fb5b1043_prof);

        
        $__internal_9bf604aa9cec9e5e9f0012ca48f4abef2b338958ac84bd08dc460584c35c4d0c->leave($__internal_9bf604aa9cec9e5e9f0012ca48f4abef2b338958ac84bd08dc460584c35c4d0c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:data_collector:easyadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 116,  288 => 115,  287 => 114,  282 => 111,  280 => 110,  279 => 109,  274 => 106,  272 => 105,  271 => 104,  270 => 103,  269 => 102,  268 => 101,  267 => 100,  262 => 97,  260 => 96,  259 => 95,  254 => 92,  252 => 91,  251 => 90,  250 => 89,  236 => 78,  229 => 73,  225 => 71,  221 => 69,  212 => 65,  209 => 64,  207 => 63,  201 => 60,  198 => 59,  196 => 58,  189 => 54,  181 => 49,  177 => 47,  175 => 46,  172 => 45,  166 => 42,  162 => 40,  160 => 39,  155 => 37,  152 => 36,  149 => 35,  140 => 34,  126 => 29,  121 => 28,  112 => 27,  100 => 24,  97 => 23,  91 => 20,  84 => 16,  80 => 14,  78 => 13,  75 => 12,  70 => 10,  65 => 9,  62 => 8,  59 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% set icon %}
        {% set icon_fill_color = profiler_markup_version == 1 ? '#222' : '#AAA' %}
        {% set icon_height = profiler_markup_version == 1 ? '28' : '24' %}
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { fill_color: icon_fill_color, height: icon_height }) }}</span>
        <span class=\"sf-toolbar-value sf-toolbar-status\">{{ collector.numEntities }}</span>
    {% endset %}

    {% set text %}
    <div class=\"sf-toolbar-info-piece\">
        <b>EasyAdmin version</b>
        <span class=\"sf-toolbar-status\">{{ constant('JavierEguiluz\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Managed entities</b>
        <span class=\"sf-toolbar-status\">{{ collector.numEntities }}</span>
    </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block menu %}
    <span class=\"label status-{{ not collector.requestParameters ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@EasyAdmin/data_collector/icon.svg.twig', { height: 32 }) }}</span>
        <strong>EasyAdmin</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>EasyAdmin <small>({{ constant('JavierEguiluz\\\\Bundle\\\\EasyAdminBundle\\\\EasyAdminBundle::VERSION') }})</small></h2>

    {% if profiler_markup_version == 1 %}

        <h3>Request Parameters</h3>
        {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.requestParameters }) }}

    {% else %}

        {% if collector.requestParameters %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestParameters.action|default('-') }}</span>
                <span class=\"label\">Action</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.requestParameters.entity|default('-') }}</span>
                <span class=\"label\">Entity Name</span>
            </div>

            {% if collector.requestParameters.id %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.id }}</span>
                    <span class=\"label\">ID</span>
                </div>
            {% elseif collector.requestParameters.sort_field %}
                <div class=\"metric\">
                    <span class=\"value\">{{ collector.requestParameters.sort_field }} <span class=\"unit\">({{ collector.requestParameters.sort_direction }})</span></span>
                    <span class=\"label\">Sorting</span>
                </div>
            {% endif %}
        </div>
        {% endif %}

    {% endif %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Current Entity Configuration</h3>
            <div class=\"tab-content\">
                {{ collector.dump(collector.currentEntityConfig)|raw }}
            </div>

            <br>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Full Backend Configuration</h3>
            <div class=\"tab-content\">

                <h4>Basic Configuration</h4>
                {{ collector.dump({
                    'site_name': collector.backendConfig['site_name'],
                    'formats': collector.backendConfig['formats']
                })|raw }}

                <h4>Design Configuration</h4>
                {{ collector.dump({
                    'design': collector.backendConfig['design']
                })|raw }}

                <h4>Actions Configuration</h4>
                {{ collector.dump({
                    'disabled_actions': collector.backendConfig['disabled_actions'],
                    'list': collector.backendConfig['list'],
                    'edit': collector.backendConfig['edit'],
                    'new': collector.backendConfig['new'],
                    'show': collector.backendConfig['show'],
                })|raw }}

                <h4>Entities Configuration</h4>
                {{ collector.dump({
                    'entities': collector.backendConfig['entities']
                })|raw }}

                <h4>Full Backend Configuration</h4>
                {{ collector.dump({
                    'easy_admin': collector.backendConfig
                })|raw }}
            </div>
        </div>
    </div>

    <h3>Additional Resources</h3>

    <ul>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle/issues\">Report an issue</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle#documentation\">Read documentation</a></li>
        <li><a href=\"https://github.com/javiereguiluz/EasyAdminBundle\">Project homepage</a></li>
    </ul>

{% endblock %}
", "EasyAdminBundle:data_collector:easyadmin.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/data_collector/easyadmin.html.twig");
    }
}
