<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_35cd5f8904817226da0d61efe9ee0df0b71c389c6218ba8ce9b3a07e29655fa6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_438b9923f0e86e26c31012a1e7f3a15dfc280c6e407fde64823076a7b491ac22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438b9923f0e86e26c31012a1e7f3a15dfc280c6e407fde64823076a7b491ac22->enter($__internal_438b9923f0e86e26c31012a1e7f3a15dfc280c6e407fde64823076a7b491ac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_9701d594cf077fa65caa3d026909a1becf7ff797d801d71f23a709691620f1af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9701d594cf077fa65caa3d026909a1becf7ff797d801d71f23a709691620f1af->enter($__internal_9701d594cf077fa65caa3d026909a1becf7ff797d801d71f23a709691620f1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_438b9923f0e86e26c31012a1e7f3a15dfc280c6e407fde64823076a7b491ac22->leave($__internal_438b9923f0e86e26c31012a1e7f3a15dfc280c6e407fde64823076a7b491ac22_prof);

        
        $__internal_9701d594cf077fa65caa3d026909a1becf7ff797d801d71f23a709691620f1af->leave($__internal_9701d594cf077fa65caa3d026909a1becf7ff797d801d71f23a709691620f1af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e0e94b3a24fa114b2caa514371a698cdfa87fc307596f9d67f47a92ad626c00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e0e94b3a24fa114b2caa514371a698cdfa87fc307596f9d67f47a92ad626c00->enter($__internal_5e0e94b3a24fa114b2caa514371a698cdfa87fc307596f9d67f47a92ad626c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d9a656d3e48b7511ae92e3ca896feafd5d4704ce13dac6833833fdb8e3cf52e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9a656d3e48b7511ae92e3ca896feafd5d4704ce13dac6833833fdb8e3cf52e7->enter($__internal_d9a656d3e48b7511ae92e3ca896feafd5d4704ce13dac6833833fdb8e3cf52e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d9a656d3e48b7511ae92e3ca896feafd5d4704ce13dac6833833fdb8e3cf52e7->leave($__internal_d9a656d3e48b7511ae92e3ca896feafd5d4704ce13dac6833833fdb8e3cf52e7_prof);

        
        $__internal_5e0e94b3a24fa114b2caa514371a698cdfa87fc307596f9d67f47a92ad626c00->leave($__internal_5e0e94b3a24fa114b2caa514371a698cdfa87fc307596f9d67f47a92ad626c00_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3849549aa9e49c61fa318ad80065038915a9be8187d3ca57cdb60d9e2cca20f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3849549aa9e49c61fa318ad80065038915a9be8187d3ca57cdb60d9e2cca20f0->enter($__internal_3849549aa9e49c61fa318ad80065038915a9be8187d3ca57cdb60d9e2cca20f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e319254f0d40adf76d4c683f423b2150e6f64127641f2867814a3c1f605440ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e319254f0d40adf76d4c683f423b2150e6f64127641f2867814a3c1f605440ed->enter($__internal_e319254f0d40adf76d4c683f423b2150e6f64127641f2867814a3c1f605440ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e319254f0d40adf76d4c683f423b2150e6f64127641f2867814a3c1f605440ed->leave($__internal_e319254f0d40adf76d4c683f423b2150e6f64127641f2867814a3c1f605440ed_prof);

        
        $__internal_3849549aa9e49c61fa318ad80065038915a9be8187d3ca57cdb60d9e2cca20f0->leave($__internal_3849549aa9e49c61fa318ad80065038915a9be8187d3ca57cdb60d9e2cca20f0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af18c8cf3df7be1f78e202b8026b5f467db246dfcdf502cf1ab5634b3cf7cd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af18c8cf3df7be1f78e202b8026b5f467db246dfcdf502cf1ab5634b3cf7cd15->enter($__internal_af18c8cf3df7be1f78e202b8026b5f467db246dfcdf502cf1ab5634b3cf7cd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_534a7821309827a49bc3bd24a75cfa215ab448c9911e3e701ce80609af2792f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534a7821309827a49bc3bd24a75cfa215ab448c9911e3e701ce80609af2792f5->enter($__internal_534a7821309827a49bc3bd24a75cfa215ab448c9911e3e701ce80609af2792f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_534a7821309827a49bc3bd24a75cfa215ab448c9911e3e701ce80609af2792f5->leave($__internal_534a7821309827a49bc3bd24a75cfa215ab448c9911e3e701ce80609af2792f5_prof);

        
        $__internal_af18c8cf3df7be1f78e202b8026b5f467db246dfcdf502cf1ab5634b3cf7cd15->leave($__internal_af18c8cf3df7be1f78e202b8026b5f467db246dfcdf502cf1ab5634b3cf7cd15_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
