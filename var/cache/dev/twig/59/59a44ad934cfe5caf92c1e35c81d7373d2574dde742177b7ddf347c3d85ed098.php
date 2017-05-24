<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_002fb311ddc11413f307d927c72027b2043ff3e9f128f9981a0b557f640c9d0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5f88ae6473bc13b079c9ad72060b404e979a317e0db6c338e6d98750e64803d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f88ae6473bc13b079c9ad72060b404e979a317e0db6c338e6d98750e64803d->enter($__internal_b5f88ae6473bc13b079c9ad72060b404e979a317e0db6c338e6d98750e64803d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0376f420ce3965d4946535efbc446a718e30300d99fa64a207391b9e50824095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0376f420ce3965d4946535efbc446a718e30300d99fa64a207391b9e50824095->enter($__internal_0376f420ce3965d4946535efbc446a718e30300d99fa64a207391b9e50824095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b5f88ae6473bc13b079c9ad72060b404e979a317e0db6c338e6d98750e64803d->leave($__internal_b5f88ae6473bc13b079c9ad72060b404e979a317e0db6c338e6d98750e64803d_prof);

        
        $__internal_0376f420ce3965d4946535efbc446a718e30300d99fa64a207391b9e50824095->leave($__internal_0376f420ce3965d4946535efbc446a718e30300d99fa64a207391b9e50824095_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_085ffbdaa4bdb9b86af3a364165660c178bb03e76c1bfffaf0f9ba44598aecd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085ffbdaa4bdb9b86af3a364165660c178bb03e76c1bfffaf0f9ba44598aecd0->enter($__internal_085ffbdaa4bdb9b86af3a364165660c178bb03e76c1bfffaf0f9ba44598aecd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_41cef99f174d6c4a0388729d9566e36a50d11e1eee5e36768055dd47def0b651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41cef99f174d6c4a0388729d9566e36a50d11e1eee5e36768055dd47def0b651->enter($__internal_41cef99f174d6c4a0388729d9566e36a50d11e1eee5e36768055dd47def0b651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_41cef99f174d6c4a0388729d9566e36a50d11e1eee5e36768055dd47def0b651->leave($__internal_41cef99f174d6c4a0388729d9566e36a50d11e1eee5e36768055dd47def0b651_prof);

        
        $__internal_085ffbdaa4bdb9b86af3a364165660c178bb03e76c1bfffaf0f9ba44598aecd0->leave($__internal_085ffbdaa4bdb9b86af3a364165660c178bb03e76c1bfffaf0f9ba44598aecd0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
