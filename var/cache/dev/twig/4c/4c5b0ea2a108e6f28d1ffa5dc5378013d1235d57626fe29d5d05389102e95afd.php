<?php

/* DUDEEGOPlatformBundle:back:langueOne.html.twig */
class __TwigTemplate_d182b8af4f0053b6db19972a0a7ba2074290d9debdb8c6e918007be421d82198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:langueOne.html.twig", 1);
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
        $__internal_0d1fbc42a8e575befd4badfed9672af7ab63203af58c65e82cdae625ebd8e8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1fbc42a8e575befd4badfed9672af7ab63203af58c65e82cdae625ebd8e8ba->enter($__internal_0d1fbc42a8e575befd4badfed9672af7ab63203af58c65e82cdae625ebd8e8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:langueOne.html.twig"));

        $__internal_21c50b3b7d36102c4f28f11b59bf3dbebd8722e7e33d9f1faa8ef725f0fe50c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c50b3b7d36102c4f28f11b59bf3dbebd8722e7e33d9f1faa8ef725f0fe50c9->enter($__internal_21c50b3b7d36102c4f28f11b59bf3dbebd8722e7e33d9f1faa8ef725f0fe50c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:langueOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d1fbc42a8e575befd4badfed9672af7ab63203af58c65e82cdae625ebd8e8ba->leave($__internal_0d1fbc42a8e575befd4badfed9672af7ab63203af58c65e82cdae625ebd8e8ba_prof);

        
        $__internal_21c50b3b7d36102c4f28f11b59bf3dbebd8722e7e33d9f1faa8ef725f0fe50c9->leave($__internal_21c50b3b7d36102c4f28f11b59bf3dbebd8722e7e33d9f1faa8ef725f0fe50c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd8e1046398d6d795b7dd6ffd7b5e20a5b415c46efa18370bc49b9b3ecdaf7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8e1046398d6d795b7dd6ffd7b5e20a5b415c46efa18370bc49b9b3ecdaf7d3->enter($__internal_fd8e1046398d6d795b7dd6ffd7b5e20a5b415c46efa18370bc49b9b3ecdaf7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d391333da0f427c7538627fdb96ecfc021b21be59c2b5bb144938d87647d945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d391333da0f427c7538627fdb96ecfc021b21be59c2b5bb144938d87647d945->enter($__internal_0d391333da0f427c7538627fdb96ecfc021b21be59c2b5bb144938d87647d945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0d391333da0f427c7538627fdb96ecfc021b21be59c2b5bb144938d87647d945->leave($__internal_0d391333da0f427c7538627fdb96ecfc021b21be59c2b5bb144938d87647d945_prof);

        
        $__internal_fd8e1046398d6d795b7dd6ffd7b5e20a5b415c46efa18370bc49b9b3ecdaf7d3->leave($__internal_fd8e1046398d6d795b7dd6ffd7b5e20a5b415c46efa18370bc49b9b3ecdaf7d3_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d0b957be3f2aee3dd044431515de31363ca87b166a4ea85739a9be198c15570d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0b957be3f2aee3dd044431515de31363ca87b166a4ea85739a9be198c15570d->enter($__internal_d0b957be3f2aee3dd044431515de31363ca87b166a4ea85739a9be198c15570d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_c4116035f5ac70721f0a786bdbd87f250873f634c7d901de15e854fbd3d3d96d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4116035f5ac70721f0a786bdbd87f250873f634c7d901de15e854fbd3d3d96d->enter($__internal_c4116035f5ac70721f0a786bdbd87f250873f634c7d901de15e854fbd3d3d96d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_c4116035f5ac70721f0a786bdbd87f250873f634c7d901de15e854fbd3d3d96d->leave($__internal_c4116035f5ac70721f0a786bdbd87f250873f634c7d901de15e854fbd3d3d96d_prof);

        
        $__internal_d0b957be3f2aee3dd044431515de31363ca87b166a4ea85739a9be198c15570d->leave($__internal_d0b957be3f2aee3dd044431515de31363ca87b166a4ea85739a9be198c15570d_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_717e0c04de6d37fb6b8024f5bbf5fcf237b7794f7b07e906254841d06febf145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717e0c04de6d37fb6b8024f5bbf5fcf237b7794f7b07e906254841d06febf145->enter($__internal_717e0c04de6d37fb6b8024f5bbf5fcf237b7794f7b07e906254841d06febf145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_4ab33bd4646454fb54e1953ddda6c4f79876fd82025a6896a33c17e3a47cb4dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab33bd4646454fb54e1953ddda6c4f79876fd82025a6896a33c17e3a47cb4dc->enter($__internal_4ab33bd4646454fb54e1953ddda6c4f79876fd82025a6896a33c17e3a47cb4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "languePartenaire", array()), 'label', array("label" => "Langue"));
        echo "
\t\t\t\t";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "languePartenaire", array()), 'errors');
        echo "
\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "languePartenaire", array()), 'widget');
        echo "

\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'label', array("label" => "Pays"));
        echo "
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'errors');
        echo "
\t\t\t\t";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "

\t\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonsocial", array()), 'label', array("label" => "Partenaire"));
        echo "
\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonsocial", array()), 'errors');
        echo "
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "raisonsocial", array()), 'widget');
        echo "
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
\t\t\t\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        // line 47
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t
\t\t\t";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t</div>
\t</div>
";
        
        $__internal_4ab33bd4646454fb54e1953ddda6c4f79876fd82025a6896a33c17e3a47cb4dc->leave($__internal_4ab33bd4646454fb54e1953ddda6c4f79876fd82025a6896a33c17e3a47cb4dc_prof);

        
        $__internal_717e0c04de6d37fb6b8024f5bbf5fcf237b7794f7b07e906254841d06febf145->leave($__internal_717e0c04de6d37fb6b8024f5bbf5fcf237b7794f7b07e906254841d06febf145_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:langueOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 49,  176 => 47,  169 => 42,  165 => 41,  157 => 36,  153 => 35,  149 => 34,  144 => 32,  140 => 31,  136 => 30,  131 => 28,  127 => 27,  123 => 26,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\tInscription Langue - {{ parent() }}
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
\t\t\t\t{{ form_label(form.languePartenaire, 'Langue') }}
\t\t\t\t{{ form_errors(form.languePartenaire) }}
\t\t\t\t{{ form_widget(form.languePartenaire) }}

\t\t\t\t{{ form_label(form.pays, 'Pays') }}
\t\t\t\t{{ form_errors(form.pays) }}
\t\t\t\t{{ form_widget(form.pays) }}

\t\t\t\t{{ form_label(form.raisonsocial, 'Partenaire') }}
\t\t\t\t{{ form_errors(form.raisonsocial) }}
\t\t\t\t{{ form_widget(form.raisonsocial) }}
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
\t\t\t
\t\t\t{{ form_end(form,{'render_rest': false}) }}
\t\t</div>
\t</div>
{% endblock %}", "DUDEEGOPlatformBundle:back:langueOne.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/langueOne.html.twig");
    }
}
