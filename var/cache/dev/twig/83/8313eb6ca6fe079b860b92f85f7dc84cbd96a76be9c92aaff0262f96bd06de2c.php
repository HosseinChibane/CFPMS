<?php

/* DUDEEGOPlatformBundle::layout.html.twig */
class __TwigTemplate_b5dd0787f2e862d95dfd8dea8c79b48f7e6c4a95793c21cfc43bb3fbb48cb0ae extends Twig_Template
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
        $__internal_774d98b5fdd0f28247fef0a64aabf6f5cc09709adc9369e9f5e2c972ed043f46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774d98b5fdd0f28247fef0a64aabf6f5cc09709adc9369e9f5e2c972ed043f46->enter($__internal_774d98b5fdd0f28247fef0a64aabf6f5cc09709adc9369e9f5e2c972ed043f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle::layout.html.twig"));

        $__internal_e4efbe38434824cc0f27a668c14e006f185ec33508231d6cc715edded7e34231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4efbe38434824cc0f27a668c14e006f185ec33508231d6cc715edded7e34231->enter($__internal_e4efbe38434824cc0f27a668c14e006f185ec33508231d6cc715edded7e34231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_774d98b5fdd0f28247fef0a64aabf6f5cc09709adc9369e9f5e2c972ed043f46->leave($__internal_774d98b5fdd0f28247fef0a64aabf6f5cc09709adc9369e9f5e2c972ed043f46_prof);

        
        $__internal_e4efbe38434824cc0f27a668c14e006f185ec33508231d6cc715edded7e34231->leave($__internal_e4efbe38434824cc0f27a668c14e006f185ec33508231d6cc715edded7e34231_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6759bcadcb23d01da03fe0832deb1c4f9bed52c7dbe628026f325e0718350d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6759bcadcb23d01da03fe0832deb1c4f9bed52c7dbe628026f325e0718350d2->enter($__internal_f6759bcadcb23d01da03fe0832deb1c4f9bed52c7dbe628026f325e0718350d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72cc0a04a061daf377dc6fa2ca1e6b88ad53761ac7306ca69fdf90bdde1b9306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72cc0a04a061daf377dc6fa2ca1e6b88ad53761ac7306ca69fdf90bdde1b9306->enter($__internal_72cc0a04a061daf377dc6fa2ca1e6b88ad53761ac7306ca69fdf90bdde1b9306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\t";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_72cc0a04a061daf377dc6fa2ca1e6b88ad53761ac7306ca69fdf90bdde1b9306->leave($__internal_72cc0a04a061daf377dc6fa2ca1e6b88ad53761ac7306ca69fdf90bdde1b9306_prof);

        
        $__internal_f6759bcadcb23d01da03fe0832deb1c4f9bed52c7dbe628026f325e0718350d2->leave($__internal_f6759bcadcb23d01da03fe0832deb1c4f9bed52c7dbe628026f325e0718350d2_prof);

    }

    // line 9
    public function block_FrontBody($context, array $blocks = array())
    {
        $__internal_cbacd0fe9c51351bc1d78b2f60e09514acfdf670cf34596f9e8312df03068009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbacd0fe9c51351bc1d78b2f60e09514acfdf670cf34596f9e8312df03068009->enter($__internal_cbacd0fe9c51351bc1d78b2f60e09514acfdf670cf34596f9e8312df03068009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        $__internal_98be7ec9358bc38254b4463260ff3116f7304d8a123d6d951061c11eff23a86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98be7ec9358bc38254b4463260ff3116f7304d8a123d6d951061c11eff23a86e->enter($__internal_98be7ec9358bc38254b4463260ff3116f7304d8a123d6d951061c11eff23a86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        echo "\t
\t";
        // line 11
        echo "\t";
        $this->displayBlock('FrontContent', $context, $blocks);
        
        $__internal_98be7ec9358bc38254b4463260ff3116f7304d8a123d6d951061c11eff23a86e->leave($__internal_98be7ec9358bc38254b4463260ff3116f7304d8a123d6d951061c11eff23a86e_prof);

        
        $__internal_cbacd0fe9c51351bc1d78b2f60e09514acfdf670cf34596f9e8312df03068009->leave($__internal_cbacd0fe9c51351bc1d78b2f60e09514acfdf670cf34596f9e8312df03068009_prof);

    }

    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_d91ee3e293f71ea90777129a58467ebb0e46a8bdfec82b2fb4102536b42bec1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91ee3e293f71ea90777129a58467ebb0e46a8bdfec82b2fb4102536b42bec1a->enter($__internal_d91ee3e293f71ea90777129a58467ebb0e46a8bdfec82b2fb4102536b42bec1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_84f58851919a54423c1ddc6783e91e0405319a516bcc90835a4d8a4babba8980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f58851919a54423c1ddc6783e91e0405319a516bcc90835a4d8a4babba8980->enter($__internal_84f58851919a54423c1ddc6783e91e0405319a516bcc90835a4d8a4babba8980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        echo " 

\t";
        
        $__internal_84f58851919a54423c1ddc6783e91e0405319a516bcc90835a4d8a4babba8980->leave($__internal_84f58851919a54423c1ddc6783e91e0405319a516bcc90835a4d8a4babba8980_prof);

        
        $__internal_d91ee3e293f71ea90777129a58467ebb0e46a8bdfec82b2fb4102536b42bec1a->leave($__internal_d91ee3e293f71ea90777129a58467ebb0e46a8bdfec82b2fb4102536b42bec1a_prof);

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



", "DUDEEGOPlatformBundle::layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\layout.html.twig");
    }
}
