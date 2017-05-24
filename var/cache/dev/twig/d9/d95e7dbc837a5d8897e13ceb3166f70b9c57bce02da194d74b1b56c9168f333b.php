<?php

/* DUDEEGOPlatformBundle:back:logementOne.html.twig */
class __TwigTemplate_0745b6cc1bd03e3b6c74abee8da81c7babc7ce6cc3e715238ecbc55f9a00ccad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:logementOne.html.twig", 1);
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
        $__internal_4556f4a0042ceb7a52ea7d4781ec4a4ab4db569434b05ce0d75dda6dd5b0b907 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4556f4a0042ceb7a52ea7d4781ec4a4ab4db569434b05ce0d75dda6dd5b0b907->enter($__internal_4556f4a0042ceb7a52ea7d4781ec4a4ab4db569434b05ce0d75dda6dd5b0b907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:logementOne.html.twig"));

        $__internal_cb99de7edd3c69b5e41294c618ba87f8816499ce262e3314728f9b45a4115792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb99de7edd3c69b5e41294c618ba87f8816499ce262e3314728f9b45a4115792->enter($__internal_cb99de7edd3c69b5e41294c618ba87f8816499ce262e3314728f9b45a4115792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4556f4a0042ceb7a52ea7d4781ec4a4ab4db569434b05ce0d75dda6dd5b0b907->leave($__internal_4556f4a0042ceb7a52ea7d4781ec4a4ab4db569434b05ce0d75dda6dd5b0b907_prof);

        
        $__internal_cb99de7edd3c69b5e41294c618ba87f8816499ce262e3314728f9b45a4115792->leave($__internal_cb99de7edd3c69b5e41294c618ba87f8816499ce262e3314728f9b45a4115792_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddbc1d522517b46b954dfabe6c05fc9934d2367dc96bb11140ad11c53b5ca530 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddbc1d522517b46b954dfabe6c05fc9934d2367dc96bb11140ad11c53b5ca530->enter($__internal_ddbc1d522517b46b954dfabe6c05fc9934d2367dc96bb11140ad11c53b5ca530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a548a9e00e7a0e5626f4ff54898178c977f7ceedbd588cc00b930f1c28f09ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a548a9e00e7a0e5626f4ff54898178c977f7ceedbd588cc00b930f1c28f09ec2->enter($__internal_a548a9e00e7a0e5626f4ff54898178c977f7ceedbd588cc00b930f1c28f09ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a548a9e00e7a0e5626f4ff54898178c977f7ceedbd588cc00b930f1c28f09ec2->leave($__internal_a548a9e00e7a0e5626f4ff54898178c977f7ceedbd588cc00b930f1c28f09ec2_prof);

        
        $__internal_ddbc1d522517b46b954dfabe6c05fc9934d2367dc96bb11140ad11c53b5ca530->leave($__internal_ddbc1d522517b46b954dfabe6c05fc9934d2367dc96bb11140ad11c53b5ca530_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_087fc1537301ad909d0014cfa5df9d7528074b624529882fef2ef547dd62491c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_087fc1537301ad909d0014cfa5df9d7528074b624529882fef2ef547dd62491c->enter($__internal_087fc1537301ad909d0014cfa5df9d7528074b624529882fef2ef547dd62491c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_2dcd7419838d4f0006013273ef7dadbfd9948ba7746f4ddb654aab182e7b1165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dcd7419838d4f0006013273ef7dadbfd9948ba7746f4ddb654aab182e7b1165->enter($__internal_2dcd7419838d4f0006013273ef7dadbfd9948ba7746f4ddb654aab182e7b1165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_2dcd7419838d4f0006013273ef7dadbfd9948ba7746f4ddb654aab182e7b1165->leave($__internal_2dcd7419838d4f0006013273ef7dadbfd9948ba7746f4ddb654aab182e7b1165_prof);

        
        $__internal_087fc1537301ad909d0014cfa5df9d7528074b624529882fef2ef547dd62491c->leave($__internal_087fc1537301ad909d0014cfa5df9d7528074b624529882fef2ef547dd62491c_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_9242dd1b9fffef559d6a75bfcdd6ac72a27f77a2a29632ccfdb44ab27556e8aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9242dd1b9fffef559d6a75bfcdd6ac72a27f77a2a29632ccfdb44ab27556e8aa->enter($__internal_9242dd1b9fffef559d6a75bfcdd6ac72a27f77a2a29632ccfdb44ab27556e8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_1a3b1f6166123da6ea1afe9fa922c6013eab95b4da5227386525737e4233e1e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3b1f6166123da6ea1afe9fa922c6013eab95b4da5227386525737e4233e1e5->enter($__internal_1a3b1f6166123da6ea1afe9fa922c6013eab95b4da5227386525737e4233e1e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLogement", array()), 'label', array("label" => "Type de logement"));
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLogement", array()), 'errors');
        echo "
\t\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeLogement", array()), 'widget');
        echo "

\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'label', array("label" => "Université"));
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'errors');
        echo "
\t\t\t\t";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'widget');
        echo "

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 45
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

\t\t\t";
        // line 47
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_1a3b1f6166123da6ea1afe9fa922c6013eab95b4da5227386525737e4233e1e5->leave($__internal_1a3b1f6166123da6ea1afe9fa922c6013eab95b4da5227386525737e4233e1e5_prof);

        
        $__internal_9242dd1b9fffef559d6a75bfcdd6ac72a27f77a2a29632ccfdb44ab27556e8aa->leave($__internal_9242dd1b9fffef559d6a75bfcdd6ac72a27f77a2a29632ccfdb44ab27556e8aa_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:logementOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 47,  165 => 45,  158 => 40,  154 => 39,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
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

\t\t\t\t{{ form_label(form.typeLogement, 'Type de logement') }}
\t\t\t\t{{ form_errors(form.typeLogement) }}
\t\t\t\t{{ form_widget(form.typeLogement) }}

\t\t\t\t{{ form_label(form.nometablissement, 'Université') }}
\t\t\t\t{{ form_errors(form.nometablissement) }}
\t\t\t\t{{ form_widget(form.nometablissement) }}

\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t{{ form_widget(form.reinitialiser) }}
\t\t\t\t\t\t{{ form_widget(form.rechercher) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t{# Token CSRF #}
\t\t\t{{ form_widget(form._token) }}

\t\t\t{{ form_end(form, {'render_rest': false}) }}
\t\t</div>
\t</div>
{% endblock %}", "DUDEEGOPlatformBundle:back:logementOne.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/logementOne.html.twig");
    }
}
