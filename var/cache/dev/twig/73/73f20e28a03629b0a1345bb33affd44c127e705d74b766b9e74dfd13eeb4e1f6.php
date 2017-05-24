<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_23baf2e0f1de22783c4310428e486c97a0174b586602261cb26ddd13440ca758 extends Twig_Template
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
        $__internal_4ff5779862b44d1f68668ed4c28b8110f63c49ea180f37d67ce64baf92739f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff5779862b44d1f68668ed4c28b8110f63c49ea180f37d67ce64baf92739f7a->enter($__internal_4ff5779862b44d1f68668ed4c28b8110f63c49ea180f37d67ce64baf92739f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a0b5447e8dc86b9f8969b985a2e40bb8ff0ae05303c363032ac5167a9cf0cf2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0b5447e8dc86b9f8969b985a2e40bb8ff0ae05303c363032ac5167a9cf0cf2e->enter($__internal_a0b5447e8dc86b9f8969b985a2e40bb8ff0ae05303c363032ac5167a9cf0cf2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4ff5779862b44d1f68668ed4c28b8110f63c49ea180f37d67ce64baf92739f7a->leave($__internal_4ff5779862b44d1f68668ed4c28b8110f63c49ea180f37d67ce64baf92739f7a_prof);

        
        $__internal_a0b5447e8dc86b9f8969b985a2e40bb8ff0ae05303c363032ac5167a9cf0cf2e->leave($__internal_a0b5447e8dc86b9f8969b985a2e40bb8ff0ae05303c363032ac5167a9cf0cf2e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_252ad26396be84244e76000b38ae7059b4289fd46160d9c74c4c9540b979c46c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252ad26396be84244e76000b38ae7059b4289fd46160d9c74c4c9540b979c46c->enter($__internal_252ad26396be84244e76000b38ae7059b4289fd46160d9c74c4c9540b979c46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cf350196ee429b64938fbbbdfc40ec2423bc627c93d4718e418c8f7a564cc468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf350196ee429b64938fbbbdfc40ec2423bc627c93d4718e418c8f7a564cc468->enter($__internal_cf350196ee429b64938fbbbdfc40ec2423bc627c93d4718e418c8f7a564cc468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cf350196ee429b64938fbbbdfc40ec2423bc627c93d4718e418c8f7a564cc468->leave($__internal_cf350196ee429b64938fbbbdfc40ec2423bc627c93d4718e418c8f7a564cc468_prof);

        
        $__internal_252ad26396be84244e76000b38ae7059b4289fd46160d9c74c4c9540b979c46c->leave($__internal_252ad26396be84244e76000b38ae7059b4289fd46160d9c74c4c9540b979c46c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
