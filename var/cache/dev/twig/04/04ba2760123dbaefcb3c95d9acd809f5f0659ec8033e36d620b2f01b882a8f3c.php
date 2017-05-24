<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_c03f31617db2ddc2b7fed8563537d5595699ffd3a4e3e35318b5171d785544c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e14b21849d55dcc0fb4d773e1d15610f7416279d134efa49035ab6cb2fa6df38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14b21849d55dcc0fb4d773e1d15610f7416279d134efa49035ab6cb2fa6df38->enter($__internal_e14b21849d55dcc0fb4d773e1d15610f7416279d134efa49035ab6cb2fa6df38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_23cb59c59c4b10a177c6029a1df8bbf73b01385efcbfe3869a68f5ce686b9f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cb59c59c4b10a177c6029a1df8bbf73b01385efcbfe3869a68f5ce686b9f8d->enter($__internal_23cb59c59c4b10a177c6029a1df8bbf73b01385efcbfe3869a68f5ce686b9f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14b21849d55dcc0fb4d773e1d15610f7416279d134efa49035ab6cb2fa6df38->leave($__internal_e14b21849d55dcc0fb4d773e1d15610f7416279d134efa49035ab6cb2fa6df38_prof);

        
        $__internal_23cb59c59c4b10a177c6029a1df8bbf73b01385efcbfe3869a68f5ce686b9f8d->leave($__internal_23cb59c59c4b10a177c6029a1df8bbf73b01385efcbfe3869a68f5ce686b9f8d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b8fc591985a8060ed157fd9c66b61f1121e5af75edd60bb87e733418b5725a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fc591985a8060ed157fd9c66b61f1121e5af75edd60bb87e733418b5725a8b->enter($__internal_b8fc591985a8060ed157fd9c66b61f1121e5af75edd60bb87e733418b5725a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ee367734899607edae652db4527e4aec4118985285f26b0e5fdeab5edfcdf819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee367734899607edae652db4527e4aec4118985285f26b0e5fdeab5edfcdf819->enter($__internal_ee367734899607edae652db4527e4aec4118985285f26b0e5fdeab5edfcdf819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ee367734899607edae652db4527e4aec4118985285f26b0e5fdeab5edfcdf819->leave($__internal_ee367734899607edae652db4527e4aec4118985285f26b0e5fdeab5edfcdf819_prof);

        
        $__internal_b8fc591985a8060ed157fd9c66b61f1121e5af75edd60bb87e733418b5725a8b->leave($__internal_b8fc591985a8060ed157fd9c66b61f1121e5af75edd60bb87e733418b5725a8b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08b16d7c340259be7c5a8c5fd0b638aace9083dabcb43ed062ceb6c7ca042216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b16d7c340259be7c5a8c5fd0b638aace9083dabcb43ed062ceb6c7ca042216->enter($__internal_08b16d7c340259be7c5a8c5fd0b638aace9083dabcb43ed062ceb6c7ca042216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be77030d3cbd9f473fafeccdd1aff36ae3096743539991f0409b2df9ddd9131c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be77030d3cbd9f473fafeccdd1aff36ae3096743539991f0409b2df9ddd9131c->enter($__internal_be77030d3cbd9f473fafeccdd1aff36ae3096743539991f0409b2df9ddd9131c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be77030d3cbd9f473fafeccdd1aff36ae3096743539991f0409b2df9ddd9131c->leave($__internal_be77030d3cbd9f473fafeccdd1aff36ae3096743539991f0409b2df9ddd9131c_prof);

        
        $__internal_08b16d7c340259be7c5a8c5fd0b638aace9083dabcb43ed062ceb6c7ca042216->leave($__internal_08b16d7c340259be7c5a8c5fd0b638aace9083dabcb43ed062ceb6c7ca042216_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_36eeb1bd1714b768112ce527a307b58f5fadeae6d8fb4b24485cd0e1b39a3e00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36eeb1bd1714b768112ce527a307b58f5fadeae6d8fb4b24485cd0e1b39a3e00->enter($__internal_36eeb1bd1714b768112ce527a307b58f5fadeae6d8fb4b24485cd0e1b39a3e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3324da23d09a30605c1cdb1379a460d61c4958326310a763ca0d7ac6b8849637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3324da23d09a30605c1cdb1379a460d61c4958326310a763ca0d7ac6b8849637->enter($__internal_3324da23d09a30605c1cdb1379a460d61c4958326310a763ca0d7ac6b8849637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3324da23d09a30605c1cdb1379a460d61c4958326310a763ca0d7ac6b8849637->leave($__internal_3324da23d09a30605c1cdb1379a460d61c4958326310a763ca0d7ac6b8849637_prof);

        
        $__internal_36eeb1bd1714b768112ce527a307b58f5fadeae6d8fb4b24485cd0e1b39a3e00->leave($__internal_36eeb1bd1714b768112ce527a307b58f5fadeae6d8fb4b24485cd0e1b39a3e00_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
