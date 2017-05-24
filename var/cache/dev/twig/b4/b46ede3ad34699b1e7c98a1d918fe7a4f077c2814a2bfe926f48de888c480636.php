<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a48a4081a8e27be255e0861cbd5c1bff63358b0735a367655b1d1bd9194c365f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_0e2b8f1e18b70c0e79fbeba65340041c30345af86c830db456de754617de1d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2b8f1e18b70c0e79fbeba65340041c30345af86c830db456de754617de1d0b->enter($__internal_0e2b8f1e18b70c0e79fbeba65340041c30345af86c830db456de754617de1d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_704758d0c1e932c2d303eaee2197925c10195ab310cbd24566a0ea305757ebe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_704758d0c1e932c2d303eaee2197925c10195ab310cbd24566a0ea305757ebe2->enter($__internal_704758d0c1e932c2d303eaee2197925c10195ab310cbd24566a0ea305757ebe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e2b8f1e18b70c0e79fbeba65340041c30345af86c830db456de754617de1d0b->leave($__internal_0e2b8f1e18b70c0e79fbeba65340041c30345af86c830db456de754617de1d0b_prof);

        
        $__internal_704758d0c1e932c2d303eaee2197925c10195ab310cbd24566a0ea305757ebe2->leave($__internal_704758d0c1e932c2d303eaee2197925c10195ab310cbd24566a0ea305757ebe2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_16f81990dc617c7b39d5c728ebc5fcbc814f2aa037717825cedb16132f8afefb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16f81990dc617c7b39d5c728ebc5fcbc814f2aa037717825cedb16132f8afefb->enter($__internal_16f81990dc617c7b39d5c728ebc5fcbc814f2aa037717825cedb16132f8afefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fa9a2e0ef8f14023484ba5d20170c840eb2d57cd4a5a944dc1dc9191ebe09bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9a2e0ef8f14023484ba5d20170c840eb2d57cd4a5a944dc1dc9191ebe09bb3->enter($__internal_fa9a2e0ef8f14023484ba5d20170c840eb2d57cd4a5a944dc1dc9191ebe09bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fa9a2e0ef8f14023484ba5d20170c840eb2d57cd4a5a944dc1dc9191ebe09bb3->leave($__internal_fa9a2e0ef8f14023484ba5d20170c840eb2d57cd4a5a944dc1dc9191ebe09bb3_prof);

        
        $__internal_16f81990dc617c7b39d5c728ebc5fcbc814f2aa037717825cedb16132f8afefb->leave($__internal_16f81990dc617c7b39d5c728ebc5fcbc814f2aa037717825cedb16132f8afefb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e76e95a36cecf37cf953b670a5958e5e88832aa1f958191f7af81b7e255f17a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76e95a36cecf37cf953b670a5958e5e88832aa1f958191f7af81b7e255f17a0->enter($__internal_e76e95a36cecf37cf953b670a5958e5e88832aa1f958191f7af81b7e255f17a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fac42a3ce87e973bb79c40f26b54ee675e895e1602e24cfff266f3cd2cece3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac42a3ce87e973bb79c40f26b54ee675e895e1602e24cfff266f3cd2cece3e2->enter($__internal_fac42a3ce87e973bb79c40f26b54ee675e895e1602e24cfff266f3cd2cece3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fac42a3ce87e973bb79c40f26b54ee675e895e1602e24cfff266f3cd2cece3e2->leave($__internal_fac42a3ce87e973bb79c40f26b54ee675e895e1602e24cfff266f3cd2cece3e2_prof);

        
        $__internal_e76e95a36cecf37cf953b670a5958e5e88832aa1f958191f7af81b7e255f17a0->leave($__internal_e76e95a36cecf37cf953b670a5958e5e88832aa1f958191f7af81b7e255f17a0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9620ed618edc02d279932d18f9d49a82ed12478dddfe073dd5634304c0d0c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9620ed618edc02d279932d18f9d49a82ed12478dddfe073dd5634304c0d0c2f->enter($__internal_a9620ed618edc02d279932d18f9d49a82ed12478dddfe073dd5634304c0d0c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ea24073f22c7ee4e146f6ff5f9307ec482177bdecbe503cfa0e7b7fb2fb2119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea24073f22c7ee4e146f6ff5f9307ec482177bdecbe503cfa0e7b7fb2fb2119->enter($__internal_7ea24073f22c7ee4e146f6ff5f9307ec482177bdecbe503cfa0e7b7fb2fb2119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7ea24073f22c7ee4e146f6ff5f9307ec482177bdecbe503cfa0e7b7fb2fb2119->leave($__internal_7ea24073f22c7ee4e146f6ff5f9307ec482177bdecbe503cfa0e7b7fb2fb2119_prof);

        
        $__internal_a9620ed618edc02d279932d18f9d49a82ed12478dddfe073dd5634304c0d0c2f->leave($__internal_a9620ed618edc02d279932d18f9d49a82ed12478dddfe073dd5634304c0d0c2f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
