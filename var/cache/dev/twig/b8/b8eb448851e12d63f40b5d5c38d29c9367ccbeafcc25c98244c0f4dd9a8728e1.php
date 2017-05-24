<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_d174bfed18fe1243ded45c00639e841654cf79167bcdb5575c358427e75ef988 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
            'ckeditor_javascript' => array($this, 'block_ckeditor_javascript'),
            '_ckeditor_javascript' => array($this, 'block__ckeditor_javascript'),
            'ckeditor_widget_extra' => array($this, 'block_ckeditor_widget_extra'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97b9d8f537283942879c9764a9788613228bff90cd06ee616597fb9cb5293ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97b9d8f537283942879c9764a9788613228bff90cd06ee616597fb9cb5293ab5->enter($__internal_97b9d8f537283942879c9764a9788613228bff90cd06ee616597fb9cb5293ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        $__internal_6d874da6fa1f2c9d12caa5f984892f8f3370f11cb6c8176c9fb6965a897e8c51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d874da6fa1f2c9d12caa5f984892f8f3370f11cb6c8176c9fb6965a897e8c51->enter($__internal_6d874da6fa1f2c9d12caa5f984892f8f3370f11cb6c8176c9fb6965a897e8c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig"));

        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('ckeditor_javascript', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('_ckeditor_javascript', $context, $blocks);
        
        $__internal_97b9d8f537283942879c9764a9788613228bff90cd06ee616597fb9cb5293ab5->leave($__internal_97b9d8f537283942879c9764a9788613228bff90cd06ee616597fb9cb5293ab5_prof);

        
        $__internal_6d874da6fa1f2c9d12caa5f984892f8f3370f11cb6c8176c9fb6965a897e8c51->leave($__internal_6d874da6fa1f2c9d12caa5f984892f8f3370f11cb6c8176c9fb6965a897e8c51_prof);

    }

    // line 1
    public function block_ckeditor_widget($context, array $blocks = array())
    {
        $__internal_7a3c9a77e1171c97daec936080ab186dd7a0d5d80de880a4461ba4dc6d6954dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3c9a77e1171c97daec936080ab186dd7a0d5d80de880a4461ba4dc6d6954dd->enter($__internal_7a3c9a77e1171c97daec936080ab186dd7a0d5d80de880a4461ba4dc6d6954dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        $__internal_bf39a08c5ab54db9d58b353b4807e50d306d949ad2d75e24fefc48ee07fd7bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf39a08c5ab54db9d58b353b4807e50d306d949ad2d75e24fefc48ee07fd7bce->enter($__internal_bf39a08c5ab54db9d58b353b4807e50d306d949ad2d75e24fefc48ee07fd7bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget"));

        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>

    ";
        // line 4
        if ((($context["enable"] ?? $this->getContext($context, "enable")) &&  !($context["async"] ?? $this->getContext($context, "async")))) {
            // line 5
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_bf39a08c5ab54db9d58b353b4807e50d306d949ad2d75e24fefc48ee07fd7bce->leave($__internal_bf39a08c5ab54db9d58b353b4807e50d306d949ad2d75e24fefc48ee07fd7bce_prof);

        
        $__internal_7a3c9a77e1171c97daec936080ab186dd7a0d5d80de880a4461ba4dc6d6954dd->leave($__internal_7a3c9a77e1171c97daec936080ab186dd7a0d5d80de880a4461ba4dc6d6954dd_prof);

    }

    // line 9
    public function block_ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_f594bd1b42b834f5027a69a1da7d33d87e1d21798e7c524a57d3af2f9deeb323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f594bd1b42b834f5027a69a1da7d33d87e1d21798e7c524a57d3af2f9deeb323->enter($__internal_f594bd1b42b834f5027a69a1da7d33d87e1d21798e7c524a57d3af2f9deeb323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        $__internal_98212adcfe5fa101de9794242bd07a6660c8ce4dadcef16506862f7445318ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98212adcfe5fa101de9794242bd07a6660c8ce4dadcef16506862f7445318ace->enter($__internal_98212adcfe5fa101de9794242bd07a6660c8ce4dadcef16506862f7445318ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_javascript"));

        // line 10
        echo "    ";
        if ((($context["enable"] ?? $this->getContext($context, "enable")) && ($context["async"] ?? $this->getContext($context, "async")))) {
            // line 11
            echo "        ";
            $this->displayBlock("_ckeditor_javascript", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_98212adcfe5fa101de9794242bd07a6660c8ce4dadcef16506862f7445318ace->leave($__internal_98212adcfe5fa101de9794242bd07a6660c8ce4dadcef16506862f7445318ace_prof);

        
        $__internal_f594bd1b42b834f5027a69a1da7d33d87e1d21798e7c524a57d3af2f9deeb323->leave($__internal_f594bd1b42b834f5027a69a1da7d33d87e1d21798e7c524a57d3af2f9deeb323_prof);

    }

    // line 15
    public function block__ckeditor_javascript($context, array $blocks = array())
    {
        $__internal_d06acfb478e7da3af5c93e4fb723c7cdfa89dbe2ca04fe0c148ccf3c46477797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06acfb478e7da3af5c93e4fb723c7cdfa89dbe2ca04fe0c148ccf3c46477797->enter($__internal_d06acfb478e7da3af5c93e4fb723c7cdfa89dbe2ca04fe0c148ccf3c46477797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        $__internal_1e5bf77f3ba4d7f312fe44ea86f1907eabdab42cca02d89117c4aff922539bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5bf77f3ba4d7f312fe44ea86f1907eabdab42cca02d89117c4aff922539bcc->enter($__internal_1e5bf77f3ba4d7f312fe44ea86f1907eabdab42cca02d89117c4aff922539bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_ckeditor_javascript"));

        // line 16
        echo "    ";
        if (($context["autoload"] ?? $this->getContext($context, "autoload"))) {
            // line 17
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"";
            // line 18
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderBasePath(($context["base_path"] ?? $this->getContext($context, "base_path")));
            echo "\";
        </script>
        <script type=\"text/javascript\" src=\"";
            // line 20
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath(($context["js_path"] ?? $this->getContext($context, "js_path")));
            echo "\"></script>
        ";
            // line 21
            if (($context["jquery"] ?? $this->getContext($context, "jquery"))) {
                // line 22
                echo "            <script type=\"text/javascript\" src=\"";
                echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderJsPath(($context["jquery_path"] ?? $this->getContext($context, "jquery_path")));
                echo "\"></script>
        ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "    <script type=\"text/javascript\">
        ";
        // line 26
        if (($context["jquery"] ?? $this->getContext($context, "jquery"))) {
            // line 27
            echo "            \$(function () {
        ";
        }
        // line 29
        echo "
        ";
        // line 30
        if (($context["require_js"] ?? $this->getContext($context, "require_js"))) {
            // line 31
            echo "            require(['ckeditor'], function() {
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderDestroy(($context["id"] ?? $this->getContext($context, "id")));
        echo "

        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["plugins"] ?? $this->getContext($context, "plugins")));
        foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
            // line 37
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderPlugin($context["plugin_name"], $context["plugin"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? $this->getContext($context, "styles")));
        foreach ($context['_seq'] as $context["style_name"] => $context["style"]) {
            // line 41
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderStylesSet($context["style_name"], $context["style"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['style_name'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["templates"] ?? $this->getContext($context, "templates")));
        foreach ($context['_seq'] as $context["template_name"] => $context["template"]) {
            // line 45
            echo "            ";
            echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderTemplate($context["template_name"], $context["template"]);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['template_name'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        ";
        // line 48
        $this->displayBlock('ckeditor_widget_extra', $context, $blocks);
        // line 49
        echo "
        ";
        // line 50
        echo $this->env->getExtension('Ivory\CKEditorBundle\Twig\CKEditorExtension')->renderWidget(($context["id"] ?? $this->getContext($context, "id")), ($context["config"] ?? $this->getContext($context, "config")), array("auto_inline" =>         // line 51
($context["auto_inline"] ?? $this->getContext($context, "auto_inline")), "inline" =>         // line 52
($context["inline"] ?? $this->getContext($context, "inline")), "input_sync" =>         // line 53
($context["input_sync"] ?? $this->getContext($context, "input_sync")), "filebrowsers" =>         // line 54
($context["filebrowsers"] ?? $this->getContext($context, "filebrowsers"))));
        // line 55
        echo "

        ";
        // line 57
        if (($context["require_js"] ?? $this->getContext($context, "require_js"))) {
            // line 58
            echo "            });
        ";
        }
        // line 60
        echo "
        ";
        // line 61
        if (($context["jquery"] ?? $this->getContext($context, "jquery"))) {
            // line 62
            echo "            });
        ";
        }
        // line 64
        echo "    </script>
";
        
        $__internal_1e5bf77f3ba4d7f312fe44ea86f1907eabdab42cca02d89117c4aff922539bcc->leave($__internal_1e5bf77f3ba4d7f312fe44ea86f1907eabdab42cca02d89117c4aff922539bcc_prof);

        
        $__internal_d06acfb478e7da3af5c93e4fb723c7cdfa89dbe2ca04fe0c148ccf3c46477797->leave($__internal_d06acfb478e7da3af5c93e4fb723c7cdfa89dbe2ca04fe0c148ccf3c46477797_prof);

    }

    // line 48
    public function block_ckeditor_widget_extra($context, array $blocks = array())
    {
        $__internal_2b7392c9f0efbe8c9046fbab02d8aff8b235f4985b277653c7e0cf7e6b465691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b7392c9f0efbe8c9046fbab02d8aff8b235f4985b277653c7e0cf7e6b465691->enter($__internal_2b7392c9f0efbe8c9046fbab02d8aff8b235f4985b277653c7e0cf7e6b465691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        $__internal_3152cc648c4a6178d6c1e6430f63607be833bdb30c04aa235bcc54268f22a80d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3152cc648c4a6178d6c1e6430f63607be833bdb30c04aa235bcc54268f22a80d->enter($__internal_3152cc648c4a6178d6c1e6430f63607be833bdb30c04aa235bcc54268f22a80d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ckeditor_widget_extra"));

        
        $__internal_3152cc648c4a6178d6c1e6430f63607be833bdb30c04aa235bcc54268f22a80d->leave($__internal_3152cc648c4a6178d6c1e6430f63607be833bdb30c04aa235bcc54268f22a80d_prof);

        
        $__internal_2b7392c9f0efbe8c9046fbab02d8aff8b235f4985b277653c7e0cf7e6b465691->leave($__internal_2b7392c9f0efbe8c9046fbab02d8aff8b235f4985b277653c7e0cf7e6b465691_prof);

    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 48,  247 => 64,  243 => 62,  241 => 61,  238 => 60,  234 => 58,  232 => 57,  228 => 55,  226 => 54,  225 => 53,  224 => 52,  223 => 51,  222 => 50,  219 => 49,  217 => 48,  214 => 47,  205 => 45,  201 => 44,  198 => 43,  189 => 41,  185 => 40,  182 => 39,  173 => 37,  169 => 36,  164 => 34,  161 => 33,  157 => 31,  155 => 30,  152 => 29,  148 => 27,  146 => 26,  143 => 25,  140 => 24,  134 => 22,  132 => 21,  128 => 20,  123 => 18,  120 => 17,  117 => 16,  108 => 15,  94 => 11,  91 => 10,  82 => 9,  68 => 5,  66 => 4,  58 => 2,  49 => 1,  39 => 15,  36 => 14,  34 => 9,  31 => 8,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block ckeditor_widget %}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>

    {% if enable and not async %}
        {{ block('_ckeditor_javascript') }}
    {% endif %}
{% endblock %}

{% block ckeditor_javascript %}
    {% if enable and async %}
        {{ block('_ckeditor_javascript') }}
    {% endif %}
{% endblock %}

{% block _ckeditor_javascript %}
    {% if autoload %}
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"{{ ckeditor_base_path(base_path) }}\";
        </script>
        <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(js_path) }}\"></script>
        {% if jquery %}
            <script type=\"text/javascript\" src=\"{{ ckeditor_js_path(jquery_path) }}\"></script>
        {% endif %}
    {% endif %}
    <script type=\"text/javascript\">
        {% if jquery %}
            \$(function () {
        {% endif %}

        {% if require_js %}
            require(['ckeditor'], function() {
        {% endif %}

        {{ ckeditor_destroy(id) }}

        {% for plugin_name, plugin in plugins %}
            {{ ckeditor_plugin(plugin_name, plugin) }}
        {% endfor %}

        {% for style_name, style in styles %}
            {{ ckeditor_styles_set(style_name, style) }}
        {% endfor %}

        {% for template_name, template in templates %}
            {{ ckeditor_template(template_name, template) }}
        {% endfor %}

        {% block ckeditor_widget_extra %}{% endblock ckeditor_widget_extra %}

        {{ ckeditor_widget(id, config, {
            auto_inline: auto_inline,
            inline: inline,
            input_sync: input_sync,
            filebrowsers: filebrowsers
        }) }}

        {% if require_js %}
            });
        {% endif %}

        {% if jquery %}
            });
        {% endif %}
    </script>
{% endblock %}
", "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\egeloen\\ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.twig");
    }
}
