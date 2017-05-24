<?php

/* @DUDEEGOPlatform/back/preparationOne.html.twig */
class __TwigTemplate_6d1bd6625f3c1507c89ad12bc2fee8f3eddae8b33e193a15ef6498ed303bcbf0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/preparationOne.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'BackContent' => array($this, 'block_BackContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ffcc8415fc3172b14365c0e70133dc128f87cf6ea2c44cf304dc4de49d48432e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcc8415fc3172b14365c0e70133dc128f87cf6ea2c44cf304dc4de49d48432e->enter($__internal_ffcc8415fc3172b14365c0e70133dc128f87cf6ea2c44cf304dc4de49d48432e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/preparationOne.html.twig"));

        $__internal_f821badc81a92e77a00fb899decdebc9285580889cf1598e51938a8d3e79874a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f821badc81a92e77a00fb899decdebc9285580889cf1598e51938a8d3e79874a->enter($__internal_f821badc81a92e77a00fb899decdebc9285580889cf1598e51938a8d3e79874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffcc8415fc3172b14365c0e70133dc128f87cf6ea2c44cf304dc4de49d48432e->leave($__internal_ffcc8415fc3172b14365c0e70133dc128f87cf6ea2c44cf304dc4de49d48432e_prof);

        
        $__internal_f821badc81a92e77a00fb899decdebc9285580889cf1598e51938a8d3e79874a->leave($__internal_f821badc81a92e77a00fb899decdebc9285580889cf1598e51938a8d3e79874a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_194dc457074888c62c70f89a00d866300027cd046901b6aaf65b581420e39d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_194dc457074888c62c70f89a00d866300027cd046901b6aaf65b581420e39d68->enter($__internal_194dc457074888c62c70f89a00d866300027cd046901b6aaf65b581420e39d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b1c342a7cd233a9dd586e0f5843fa0d5ed91c28cf654d6e92811302407b64a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c342a7cd233a9dd586e0f5843fa0d5ed91c28cf654d6e92811302407b64a5d->enter($__internal_b1c342a7cd233a9dd586e0f5843fa0d5ed91c28cf654d6e92811302407b64a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b1c342a7cd233a9dd586e0f5843fa0d5ed91c28cf654d6e92811302407b64a5d->leave($__internal_b1c342a7cd233a9dd586e0f5843fa0d5ed91c28cf654d6e92811302407b64a5d_prof);

        
        $__internal_194dc457074888c62c70f89a00d866300027cd046901b6aaf65b581420e39d68->leave($__internal_194dc457074888c62c70f89a00d866300027cd046901b6aaf65b581420e39d68_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_0ac4d52678c8b03412edae6ca27030a3247cc6738ee170b24c7c9ce6bea55f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac4d52678c8b03412edae6ca27030a3247cc6738ee170b24c7c9ce6bea55f8c->enter($__internal_0ac4d52678c8b03412edae6ca27030a3247cc6738ee170b24c7c9ce6bea55f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_5ce4f2a56530c8d20cd1dcd84f90568db7b25b8720908a6d879836959b274ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce4f2a56530c8d20cd1dcd84f90568db7b25b8720908a6d879836959b274ea9->enter($__internal_5ce4f2a56530c8d20cd1dcd84f90568db7b25b8720908a6d879836959b274ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_5ce4f2a56530c8d20cd1dcd84f90568db7b25b8720908a6d879836959b274ea9->leave($__internal_5ce4f2a56530c8d20cd1dcd84f90568db7b25b8720908a6d879836959b274ea9_prof);

        
        $__internal_0ac4d52678c8b03412edae6ca27030a3247cc6738ee170b24c7c9ce6bea55f8c->leave($__internal_0ac4d52678c8b03412edae6ca27030a3247cc6738ee170b24c7c9ce6bea55f8c_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_22476db9a0ef970b95d432a5f439b05d25e35c269d37a64cf90ca40480cdbfd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22476db9a0ef970b95d432a5f439b05d25e35c269d37a64cf90ca40480cdbfd2->enter($__internal_22476db9a0ef970b95d432a5f439b05d25e35c269d37a64cf90ca40480cdbfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_7df5c1766731754510abb2477e4bd75e70587904180f04a1a5d1ece0560727eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df5c1766731754510abb2477e4bd75e70587904180f04a1a5d1ece0560727eb->enter($__internal_7df5c1766731754510abb2477e4bd75e70587904180f04a1a5d1ece0560727eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 1</h2>
\t\t\t<p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
\t\t\t";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 25
        echo "\t\t\t<div class=\"form-group\">

\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typePreparation", array()), 'label', array("label" => "Type de préparation"));
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typePreparation", array()), 'errors');
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typePreparation", array()), 'widget');
        echo "

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t\t";
        // line 41
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t
\t\t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_7df5c1766731754510abb2477e4bd75e70587904180f04a1a5d1ece0560727eb->leave($__internal_7df5c1766731754510abb2477e4bd75e70587904180f04a1a5d1ece0560727eb_prof);

        
        $__internal_22476db9a0ef970b95d432a5f439b05d25e35c269d37a64cf90ca40480cdbfd2->leave($__internal_22476db9a0ef970b95d432a5f439b05d25e35c269d37a64cf90ca40480cdbfd2_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/preparationOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 43,  152 => 41,  145 => 36,  141 => 35,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\tInscription Préparation - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
{% endblock %}

{% block BackContent %} 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t<h2>Etape 1</h2>
\t\t\t<p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
\t\t\t{{ form_start(form) }}
\t\t\t{% if not form.vars.valid %}
\t\t\t\t<div class=\"alert alert-error\">
\t\t\t\t\t{{ form_errors(form) }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t<div class=\"form-group\">

\t\t\t\t{{ form_label(form.typePreparation, 'Type de préparation') }}
\t\t\t\t{{ form_errors(form.typePreparation) }}
\t\t\t\t{{ form_widget(form.typePreparation) }}

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.reinitialiser) }}
\t\t\t\t\t\t{{ form_widget(form.rechercher) }}
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t
\t\t\t</div>
\t\t\t{# Token CSRF #}
\t\t\t{{ form_widget(form._token) }}
\t\t\t
\t\t\t{{ form_end(form,{'render_rest': false}) }}
\t\t</div>
\t</div>
{% endblock %}
", "@DUDEEGOPlatform/back/preparationOne.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\preparationOne.html.twig");
    }
}
