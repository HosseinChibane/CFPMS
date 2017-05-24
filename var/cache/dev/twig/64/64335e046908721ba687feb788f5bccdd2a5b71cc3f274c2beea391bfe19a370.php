<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6a75e062e2c72d4ab7f9a4db804d4aaa7298ff01f78a958b32e4bc796c9a75a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f22de2d380bcab74a901a43684e05877252abd2d2522b457eb0e76f76be1bda6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22de2d380bcab74a901a43684e05877252abd2d2522b457eb0e76f76be1bda6->enter($__internal_f22de2d380bcab74a901a43684e05877252abd2d2522b457eb0e76f76be1bda6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3c7ba6ea2d7ed391d897bd517965c9280abaeb7f13f495edfa02da2bd815312a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7ba6ea2d7ed391d897bd517965c9280abaeb7f13f495edfa02da2bd815312a->enter($__internal_3c7ba6ea2d7ed391d897bd517965c9280abaeb7f13f495edfa02da2bd815312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f22de2d380bcab74a901a43684e05877252abd2d2522b457eb0e76f76be1bda6->leave($__internal_f22de2d380bcab74a901a43684e05877252abd2d2522b457eb0e76f76be1bda6_prof);

        
        $__internal_3c7ba6ea2d7ed391d897bd517965c9280abaeb7f13f495edfa02da2bd815312a->leave($__internal_3c7ba6ea2d7ed391d897bd517965c9280abaeb7f13f495edfa02da2bd815312a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dc5b9751484f54176f050a31153a4301a72937b9e33cc6794c6d385648315be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc5b9751484f54176f050a31153a4301a72937b9e33cc6794c6d385648315be5->enter($__internal_dc5b9751484f54176f050a31153a4301a72937b9e33cc6794c6d385648315be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8b8478aa4667e2914acdb26296d46c36a204c98ce75c4c18ec663d15716ba16f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b8478aa4667e2914acdb26296d46c36a204c98ce75c4c18ec663d15716ba16f->enter($__internal_8b8478aa4667e2914acdb26296d46c36a204c98ce75c4c18ec663d15716ba16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8b8478aa4667e2914acdb26296d46c36a204c98ce75c4c18ec663d15716ba16f->leave($__internal_8b8478aa4667e2914acdb26296d46c36a204c98ce75c4c18ec663d15716ba16f_prof);

        
        $__internal_dc5b9751484f54176f050a31153a4301a72937b9e33cc6794c6d385648315be5->leave($__internal_dc5b9751484f54176f050a31153a4301a72937b9e33cc6794c6d385648315be5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16c0119e2636675fb7ffc89a64470a34de616600709bcc3b9f89e402485aea5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c0119e2636675fb7ffc89a64470a34de616600709bcc3b9f89e402485aea5e->enter($__internal_16c0119e2636675fb7ffc89a64470a34de616600709bcc3b9f89e402485aea5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f493febc7b93058a81619319122910a2e2ec9aa9d67ae707c8c902f0be8952b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f493febc7b93058a81619319122910a2e2ec9aa9d67ae707c8c902f0be8952b2->enter($__internal_f493febc7b93058a81619319122910a2e2ec9aa9d67ae707c8c902f0be8952b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f493febc7b93058a81619319122910a2e2ec9aa9d67ae707c8c902f0be8952b2->leave($__internal_f493febc7b93058a81619319122910a2e2ec9aa9d67ae707c8c902f0be8952b2_prof);

        
        $__internal_16c0119e2636675fb7ffc89a64470a34de616600709bcc3b9f89e402485aea5e->leave($__internal_16c0119e2636675fb7ffc89a64470a34de616600709bcc3b9f89e402485aea5e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97d7f3e3b93df4e76dba5cdaa9bd754eb1bff4be06cae621f81338ffa7253cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d7f3e3b93df4e76dba5cdaa9bd754eb1bff4be06cae621f81338ffa7253cb0->enter($__internal_97d7f3e3b93df4e76dba5cdaa9bd754eb1bff4be06cae621f81338ffa7253cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f550850da09f34fb123c215f19fa4c7f5b7ac13e3f585c01cc581f34d0f1e92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f550850da09f34fb123c215f19fa4c7f5b7ac13e3f585c01cc581f34d0f1e92a->enter($__internal_f550850da09f34fb123c215f19fa4c7f5b7ac13e3f585c01cc581f34d0f1e92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_f550850da09f34fb123c215f19fa4c7f5b7ac13e3f585c01cc581f34d0f1e92a->leave($__internal_f550850da09f34fb123c215f19fa4c7f5b7ac13e3f585c01cc581f34d0f1e92a_prof);

        
        $__internal_97d7f3e3b93df4e76dba5cdaa9bd754eb1bff4be06cae621f81338ffa7253cb0->leave($__internal_97d7f3e3b93df4e76dba5cdaa9bd754eb1bff4be06cae621f81338ffa7253cb0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
