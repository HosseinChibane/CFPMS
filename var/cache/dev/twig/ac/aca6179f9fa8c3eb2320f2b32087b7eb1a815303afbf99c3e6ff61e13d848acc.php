<?php

/* @DUDEEGOPlatform/back/logementThree.html.twig */
class __TwigTemplate_23690fe31e9cb8257ef046448beb4edab46ac15d09095c99fc44fca97b511f3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/logementThree.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'BackContent' => array($this, 'block_BackContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_366f97c0806b9208b8e1bc5d8f004742d3b56e0c7722300b91ac89d06ef2e4b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_366f97c0806b9208b8e1bc5d8f004742d3b56e0c7722300b91ac89d06ef2e4b3->enter($__internal_366f97c0806b9208b8e1bc5d8f004742d3b56e0c7722300b91ac89d06ef2e4b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/logementThree.html.twig"));

        $__internal_ae6575d20629e38755553050c666fc62cf642ffb14f069fad42c742b0b20c5f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6575d20629e38755553050c666fc62cf642ffb14f069fad42c742b0b20c5f4->enter($__internal_ae6575d20629e38755553050c666fc62cf642ffb14f069fad42c742b0b20c5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/logementThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_366f97c0806b9208b8e1bc5d8f004742d3b56e0c7722300b91ac89d06ef2e4b3->leave($__internal_366f97c0806b9208b8e1bc5d8f004742d3b56e0c7722300b91ac89d06ef2e4b3_prof);

        
        $__internal_ae6575d20629e38755553050c666fc62cf642ffb14f069fad42c742b0b20c5f4->leave($__internal_ae6575d20629e38755553050c666fc62cf642ffb14f069fad42c742b0b20c5f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0d50d037ada764dbee38c10b1c35a38f7177774c3684c1b4c0f1d55a6c8fdf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d50d037ada764dbee38c10b1c35a38f7177774c3684c1b4c0f1d55a6c8fdf0->enter($__internal_d0d50d037ada764dbee38c10b1c35a38f7177774c3684c1b4c0f1d55a6c8fdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5cf87eaf8f734464e2502c0fabe2f9dcf1da9071c346e8f624fed8a475327584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf87eaf8f734464e2502c0fabe2f9dcf1da9071c346e8f624fed8a475327584->enter($__internal_5cf87eaf8f734464e2502c0fabe2f9dcf1da9071c346e8f624fed8a475327584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5cf87eaf8f734464e2502c0fabe2f9dcf1da9071c346e8f624fed8a475327584->leave($__internal_5cf87eaf8f734464e2502c0fabe2f9dcf1da9071c346e8f624fed8a475327584_prof);

        
        $__internal_d0d50d037ada764dbee38c10b1c35a38f7177774c3684c1b4c0f1d55a6c8fdf0->leave($__internal_d0d50d037ada764dbee38c10b1c35a38f7177774c3684c1b4c0f1d55a6c8fdf0_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_6f5b0f626ea8c037f84f2ccad77ca0c56400fa331427c42710a56c90cff91125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5b0f626ea8c037f84f2ccad77ca0c56400fa331427c42710a56c90cff91125->enter($__internal_6f5b0f626ea8c037f84f2ccad77ca0c56400fa331427c42710a56c90cff91125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_77fccf0b0e581078f7b8f950178d7bb2834ecb04ce18d32413bacbc40e5287af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fccf0b0e581078f7b8f950178d7bb2834ecb04ce18d32413bacbc40e5287af->enter($__internal_77fccf0b0e581078f7b8f950178d7bb2834ecb04ce18d32413bacbc40e5287af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 3</h2>
\t\t\t<p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         

\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

\t\t\t";
        // line 15
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 16
            echo "\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 20
        echo "
\t\t\t<div class=\"form-group\">
\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'widget');
        echo "
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_logementStepsOne");
        echo "\">Retour à l'étape 1</a>
\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 44
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

\t\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>

";
        
        $__internal_77fccf0b0e581078f7b8f950178d7bb2834ecb04ce18d32413bacbc40e5287af->leave($__internal_77fccf0b0e581078f7b8f950178d7bb2834ecb04ce18d32413bacbc40e5287af_prof);

        
        $__internal_6f5b0f626ea8c037f84f2ccad77ca0c56400fa331427c42710a56c90cff91125->leave($__internal_6f5b0f626ea8c037f84f2ccad77ca0c56400fa331427c42710a56c90cff91125_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/logementThree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  135 => 44,  127 => 38,  123 => 37,  112 => 29,  103 => 23,  99 => 22,  95 => 20,  89 => 17,  86 => 16,  84 => 15,  79 => 13,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
\tInscription logement - {{ parent() }}
{% endblock %}

{% block BackContent %} 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 3</h2>
\t\t\t<p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         

\t\t\t{{ form_start(form) }}

\t\t\t{% if not form.vars.valid %}
\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t{{ form_errors(form) }}
\t\t\t\t</div>
\t\t\t{% endif %}

\t\t\t<div class=\"form-group\">
\t\t\t\t{{ form_label(form.documentinscription.nom, 'Document d\\'Inscription') }}
\t\t\t\t{{ form_widget(form.documentinscription.nom) }}
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.documentinscription.pdfFile) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path('dudeego_platform_abonne_logementStepsOne') }}\">Retour à l'étape 1</a>
\t\t\t\t\t\t{{ form_widget(form.documentinscription.Enregistrer) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{# Token CSRF #}
\t\t\t{{ form_widget(form._token) }}

\t\t\t{{ form_end(form, {'render_rest': false }) }}
\t\t</div>
\t</div>

{% endblock %}", "@DUDEEGOPlatform/back/logementThree.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\logementThree.html.twig");
    }
}
