<?php

/* DUDEEGOPlatformBundle:back:logementThree.html.twig */
class __TwigTemplate_a0292501f34c7b5eb42be08a5b841d9a81b518ad4c7b38c26f809047f48104bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:logementThree.html.twig", 1);
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
        $__internal_67e67bac2286d32652573bfa67b02d38cc2bc1f9d40eee38b43a24d4639e777f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e67bac2286d32652573bfa67b02d38cc2bc1f9d40eee38b43a24d4639e777f->enter($__internal_67e67bac2286d32652573bfa67b02d38cc2bc1f9d40eee38b43a24d4639e777f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:logementThree.html.twig"));

        $__internal_941d82f127d47db574676dc3c79aaa9aa4872820162a2f5cc6767a641796183b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_941d82f127d47db574676dc3c79aaa9aa4872820162a2f5cc6767a641796183b->enter($__internal_941d82f127d47db574676dc3c79aaa9aa4872820162a2f5cc6767a641796183b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:logementThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e67bac2286d32652573bfa67b02d38cc2bc1f9d40eee38b43a24d4639e777f->leave($__internal_67e67bac2286d32652573bfa67b02d38cc2bc1f9d40eee38b43a24d4639e777f_prof);

        
        $__internal_941d82f127d47db574676dc3c79aaa9aa4872820162a2f5cc6767a641796183b->leave($__internal_941d82f127d47db574676dc3c79aaa9aa4872820162a2f5cc6767a641796183b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b8591366d5f47db10afdcf990d47a14c7f583a7243dbaac31143ed8d520d93c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b8591366d5f47db10afdcf990d47a14c7f583a7243dbaac31143ed8d520d93c->enter($__internal_4b8591366d5f47db10afdcf990d47a14c7f583a7243dbaac31143ed8d520d93c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17998810e7f9934e7e721fee492ce0afa67483525e9bbcc0bfebbc4d434363c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17998810e7f9934e7e721fee492ce0afa67483525e9bbcc0bfebbc4d434363c7->enter($__internal_17998810e7f9934e7e721fee492ce0afa67483525e9bbcc0bfebbc4d434363c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_17998810e7f9934e7e721fee492ce0afa67483525e9bbcc0bfebbc4d434363c7->leave($__internal_17998810e7f9934e7e721fee492ce0afa67483525e9bbcc0bfebbc4d434363c7_prof);

        
        $__internal_4b8591366d5f47db10afdcf990d47a14c7f583a7243dbaac31143ed8d520d93c->leave($__internal_4b8591366d5f47db10afdcf990d47a14c7f583a7243dbaac31143ed8d520d93c_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_4ceedf395e2f09be4b2479c24c9b7caf8d9a99c03d6863c9dc999f7e6dd5afe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ceedf395e2f09be4b2479c24c9b7caf8d9a99c03d6863c9dc999f7e6dd5afe4->enter($__internal_4ceedf395e2f09be4b2479c24c9b7caf8d9a99c03d6863c9dc999f7e6dd5afe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_2187b650923e05122f79f402d910f9176b0b0cc79910598bbbe2d8d6a8afef22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2187b650923e05122f79f402d910f9176b0b0cc79910598bbbe2d8d6a8afef22->enter($__internal_2187b650923e05122f79f402d910f9176b0b0cc79910598bbbe2d8d6a8afef22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_2187b650923e05122f79f402d910f9176b0b0cc79910598bbbe2d8d6a8afef22->leave($__internal_2187b650923e05122f79f402d910f9176b0b0cc79910598bbbe2d8d6a8afef22_prof);

        
        $__internal_4ceedf395e2f09be4b2479c24c9b7caf8d9a99c03d6863c9dc999f7e6dd5afe4->leave($__internal_4ceedf395e2f09be4b2479c24c9b7caf8d9a99c03d6863c9dc999f7e6dd5afe4_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:logementThree.html.twig";
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

{% endblock %}", "DUDEEGOPlatformBundle:back:logementThree.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/logementThree.html.twig");
    }
}
