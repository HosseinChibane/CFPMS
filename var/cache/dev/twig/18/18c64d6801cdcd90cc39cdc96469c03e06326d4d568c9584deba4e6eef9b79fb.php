<?php

/* DUDEEGOPlatformBundle::layout.html.twig */
class __TwigTemplate_4ae76663b8e83b124480770496e7f5ab1b9006297a6eaac6204e4e1efc0e116f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::base.html.twig", "DUDEEGOPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'FrontBody' => array($this, 'block_FrontBody'),
            'FrontContent' => array($this, 'block_FrontContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_521583124b4aa479fc38db1b11bc90db79551bcd02849c8b0e1792537687f453 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_521583124b4aa479fc38db1b11bc90db79551bcd02849c8b0e1792537687f453->enter($__internal_521583124b4aa479fc38db1b11bc90db79551bcd02849c8b0e1792537687f453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle::layout.html.twig"));

        $__internal_3eedc4df32ae70ee1abbf52f0b4dd03e513cf0d4ae6f25164e348cc6def3ee14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eedc4df32ae70ee1abbf52f0b4dd03e513cf0d4ae6f25164e348cc6def3ee14->enter($__internal_3eedc4df32ae70ee1abbf52f0b4dd03e513cf0d4ae6f25164e348cc6def3ee14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_521583124b4aa479fc38db1b11bc90db79551bcd02849c8b0e1792537687f453->leave($__internal_521583124b4aa479fc38db1b11bc90db79551bcd02849c8b0e1792537687f453_prof);

        
        $__internal_3eedc4df32ae70ee1abbf52f0b4dd03e513cf0d4ae6f25164e348cc6def3ee14->leave($__internal_3eedc4df32ae70ee1abbf52f0b4dd03e513cf0d4ae6f25164e348cc6def3ee14_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_70d2e87e4091697daf3f666f9374ea58eaec6da06f6709305374c83e4c531c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d2e87e4091697daf3f666f9374ea58eaec6da06f6709305374c83e4c531c09->enter($__internal_70d2e87e4091697daf3f666f9374ea58eaec6da06f6709305374c83e4c531c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a168530bf3f66bcd7f8b8edb26d6ce49633a38535e8d59db61af518f88d0bcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a168530bf3f66bcd7f8b8edb26d6ce49633a38535e8d59db61af518f88d0bcb->enter($__internal_2a168530bf3f66bcd7f8b8edb26d6ce49633a38535e8d59db61af518f88d0bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2a168530bf3f66bcd7f8b8edb26d6ce49633a38535e8d59db61af518f88d0bcb->leave($__internal_2a168530bf3f66bcd7f8b8edb26d6ce49633a38535e8d59db61af518f88d0bcb_prof);

        
        $__internal_70d2e87e4091697daf3f666f9374ea58eaec6da06f6709305374c83e4c531c09->leave($__internal_70d2e87e4091697daf3f666f9374ea58eaec6da06f6709305374c83e4c531c09_prof);

    }

    // line 9
    public function block_FrontBody($context, array $blocks = array())
    {
        $__internal_17d569cefab05367a472221b6eef05c4d5f389bf934a6e67536ffee704f2dfc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d569cefab05367a472221b6eef05c4d5f389bf934a6e67536ffee704f2dfc3->enter($__internal_17d569cefab05367a472221b6eef05c4d5f389bf934a6e67536ffee704f2dfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        $__internal_491b3b621b758a080867bea39d7f2d61865515d8d7a6984b63adc4a3868a2402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_491b3b621b758a080867bea39d7f2d61865515d8d7a6984b63adc4a3868a2402->enter($__internal_491b3b621b758a080867bea39d7f2d61865515d8d7a6984b63adc4a3868a2402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        echo "\t
\t";
        // line 11
        echo "\t";
        $this->displayBlock('FrontContent', $context, $blocks);
        
        $__internal_491b3b621b758a080867bea39d7f2d61865515d8d7a6984b63adc4a3868a2402->leave($__internal_491b3b621b758a080867bea39d7f2d61865515d8d7a6984b63adc4a3868a2402_prof);

        
        $__internal_17d569cefab05367a472221b6eef05c4d5f389bf934a6e67536ffee704f2dfc3->leave($__internal_17d569cefab05367a472221b6eef05c4d5f389bf934a6e67536ffee704f2dfc3_prof);

    }

    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_2edf229a5ab3f2fbc07e68c9c49a6c50dd62785ec5dd57a17c04b845637ec35b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edf229a5ab3f2fbc07e68c9c49a6c50dd62785ec5dd57a17c04b845637ec35b->enter($__internal_2edf229a5ab3f2fbc07e68c9c49a6c50dd62785ec5dd57a17c04b845637ec35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_55c90a19c053c536105e1b7bb3daec1db583467b2985f5a010a8aad3022c0f01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c90a19c053c536105e1b7bb3daec1db583467b2985f5a010a8aad3022c0f01->enter($__internal_55c90a19c053c536105e1b7bb3daec1db583467b2985f5a010a8aad3022c0f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        echo " 

\t";
        
        $__internal_55c90a19c053c536105e1b7bb3daec1db583467b2985f5a010a8aad3022c0f01->leave($__internal_55c90a19c053c536105e1b7bb3daec1db583467b2985f5a010a8aad3022c0f01_prof);

        
        $__internal_2edf229a5ab3f2fbc07e68c9c49a6c50dd62785ec5dd57a17c04b845637ec35b->leave($__internal_2edf229a5ab3f2fbc07e68c9c49a6c50dd62785ec5dd57a17c04b845637ec35b_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 11,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/DUDEEGO/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::base.html.twig\" %}

{% block title %}
\t{{ parent() }}
{% endblock %}

{% block FrontBody %}\t
\t{# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
\t{% block FrontContent %} 

\t{% endblock %}
{% endblock %}



", "DUDEEGOPlatformBundle::layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
