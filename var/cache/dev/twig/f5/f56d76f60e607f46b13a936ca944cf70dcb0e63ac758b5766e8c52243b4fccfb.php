<?php

/* @DUDEEGOPlatform/back/modifierdemandes.html.twig */
class __TwigTemplate_8ba26c31b8a73bd2b468e220495ab0ba3c41161ad9308dba5a8f5a7d72e8afc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/modifierdemandes.html.twig", 1);
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
        $__internal_a8c539ac74eb49c8df3f8156e129aa95377824474fded352c4b540cb4ae9adc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c539ac74eb49c8df3f8156e129aa95377824474fded352c4b540cb4ae9adc9->enter($__internal_a8c539ac74eb49c8df3f8156e129aa95377824474fded352c4b540cb4ae9adc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/modifierdemandes.html.twig"));

        $__internal_66922dc2a7e630189932ff12cb83eab2a1ad138a359532d775272724d52344ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66922dc2a7e630189932ff12cb83eab2a1ad138a359532d775272724d52344ea->enter($__internal_66922dc2a7e630189932ff12cb83eab2a1ad138a359532d775272724d52344ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/modifierdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8c539ac74eb49c8df3f8156e129aa95377824474fded352c4b540cb4ae9adc9->leave($__internal_a8c539ac74eb49c8df3f8156e129aa95377824474fded352c4b540cb4ae9adc9_prof);

        
        $__internal_66922dc2a7e630189932ff12cb83eab2a1ad138a359532d775272724d52344ea->leave($__internal_66922dc2a7e630189932ff12cb83eab2a1ad138a359532d775272724d52344ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f5d9455748fe09bb3dc9c13a53548239046a7b912cf76a27c108d2f5699595c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5d9455748fe09bb3dc9c13a53548239046a7b912cf76a27c108d2f5699595c->enter($__internal_2f5d9455748fe09bb3dc9c13a53548239046a7b912cf76a27c108d2f5699595c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ffb3402a227b6912ee41366e3bcbdc5b16d69562d9247723658d2d4e62f7c84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb3402a227b6912ee41366e3bcbdc5b16d69562d9247723658d2d4e62f7c84b->enter($__internal_ffb3402a227b6912ee41366e3bcbdc5b16d69562d9247723658d2d4e62f7c84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ffb3402a227b6912ee41366e3bcbdc5b16d69562d9247723658d2d4e62f7c84b->leave($__internal_ffb3402a227b6912ee41366e3bcbdc5b16d69562d9247723658d2d4e62f7c84b_prof);

        
        $__internal_2f5d9455748fe09bb3dc9c13a53548239046a7b912cf76a27c108d2f5699595c->leave($__internal_2f5d9455748fe09bb3dc9c13a53548239046a7b912cf76a27c108d2f5699595c_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6cc81dd613797ecc8d2280e96d0fdee71aeae896ae78139dd6a1b79c7da2a767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc81dd613797ecc8d2280e96d0fdee71aeae896ae78139dd6a1b79c7da2a767->enter($__internal_6cc81dd613797ecc8d2280e96d0fdee71aeae896ae78139dd6a1b79c7da2a767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_07448b3a712489ccd2979ff14e9d0e013e1df9bb2504170d5df4b93b0f602dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07448b3a712489ccd2979ff14e9d0e013e1df9bb2504170d5df4b93b0f602dbd->enter($__internal_07448b3a712489ccd2979ff14e9d0e013e1df9bb2504170d5df4b93b0f602dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li ><a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mesDemandes");
        echo "\">Mes Demandes</a></li>
        <li class=\"active\">Modifier</li>
    </ol>
";
        
        $__internal_07448b3a712489ccd2979ff14e9d0e013e1df9bb2504170d5df4b93b0f602dbd->leave($__internal_07448b3a712489ccd2979ff14e9d0e013e1df9bb2504170d5df4b93b0f602dbd_prof);

        
        $__internal_6cc81dd613797ecc8d2280e96d0fdee71aeae896ae78139dd6a1b79c7da2a767->leave($__internal_6cc81dd613797ecc8d2280e96d0fdee71aeae896ae78139dd6a1b79c7da2a767_prof);

    }

    // line 15
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_cc5d8e0f3492766874a6a88f82f63224f5effdf2148eec69789fbae682719caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5d8e0f3492766874a6a88f82f63224f5effdf2148eec69789fbae682719caf->enter($__internal_cc5d8e0f3492766874a6a88f82f63224f5effdf2148eec69789fbae682719caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_a753ede8546d6b9007def50bff2035fbea4991c7feff4e26d641f0cf0115ad8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a753ede8546d6b9007def50bff2035fbea4991c7feff4e26d641f0cf0115ad8f->enter($__internal_a753ede8546d6b9007def50bff2035fbea4991c7feff4e26d641f0cf0115ad8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
    <!-- Détails Demandes -->
    <div class=\"col-md-12\">
        <h1>Modification de la demande n°";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["eA_Demande_Inscription"] ?? $this->getContext($context, "eA_Demande_Inscription")), "id", array()), "html", null, true);
        echo " :</h1>

        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_start');
        echo "

        ";
        // line 22
        if ( !$this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "vars", array()), "valid", array())) {
            // line 23
            echo "            <div class=\"alert alert-error\">
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 27
        echo "
        <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "type", array()), 'label', array("label" => "Type d'Inscription"));
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "type", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        echo "

            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "etat", array()), 'label', array("label" => "Etat de l'Inscription"));
        echo "
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "etat", array()), 'widget', array("attr" => array("disabled" => "disabled")));
        echo "

            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "documentinscription", array()), "nom", array()), 'widget');
        echo "
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                 ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 51
            echo "                    <div class=\"flash-notice\">
                        ";
            // line 52
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                <a class=\"btn btn-info\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mesDemandes");
        echo "\" role=\"button\">Retour à la liste des demandes</a>
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
            </div>
        </div>
    </div>

    ";
        // line 62
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["edit_form"] ?? $this->getContext($context, "edit_form")), "_token", array()), 'widget');
        echo "

    ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? $this->getContext($context, "edit_form")), 'form_end', array("render_rest" => false));
        echo "
</div>
";
        
        $__internal_a753ede8546d6b9007def50bff2035fbea4991c7feff4e26d641f0cf0115ad8f->leave($__internal_a753ede8546d6b9007def50bff2035fbea4991c7feff4e26d641f0cf0115ad8f_prof);

        
        $__internal_cc5d8e0f3492766874a6a88f82f63224f5effdf2148eec69789fbae682719caf->leave($__internal_cc5d8e0f3492766874a6a88f82f63224f5effdf2148eec69789fbae682719caf_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/modifierdemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 64,  203 => 62,  195 => 56,  190 => 55,  181 => 52,  178 => 51,  174 => 50,  163 => 42,  154 => 36,  150 => 35,  145 => 33,  141 => 32,  136 => 30,  132 => 29,  128 => 27,  122 => 24,  119 => 23,  117 => 22,  112 => 20,  107 => 18,  94 => 15,  80 => 10,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Modifier Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Home</a></li>
        <li ><a href=\"{{ path('dudeego_platform_abonne_mesDemandes') }}\">Mes Demandes</a></li>
        <li class=\"active\">Modifier</li>
    </ol>
{% endblock %}

{% block BackContent %} 
    <!-- Détails Demandes -->
    <div class=\"col-md-12\">
        <h1>Modification de la demande n°{{ eA_Demande_Inscription.id }} :</h1>

        {{ form_start(edit_form) }}

        {% if not edit_form.vars.valid %}
            <div class=\"alert alert-error\">
                {{ form_errors(edit_form) }}
            </div>
        {% endif %}

        <div class=\"form-group\">
            {{ form_label(edit_form.type, 'Type d\\'Inscription') }}
            {{ form_widget(edit_form.type, { 'attr':{'disabled':'disabled'} }) }}

            {{ form_label(edit_form.etat, 'Etat de l\\'Inscription') }}
            {{ form_widget(edit_form.etat, { 'attr':{'disabled':'disabled'} }) }}

            {{ form_label(edit_form.documentinscription.nom, 'Document d\\'Inscription') }}
            {{ form_widget(edit_form.documentinscription.nom) }}
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                    {{ form_widget(edit_form.documentinscription.pdfFile) }}
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"form-group\">
                 {% for flash_message in app.session.flashBag.get('notice') %}
                    <div class=\"flash-notice\">
                        {{ flash_message }}
                    </div>
                {% endfor %}
                <a class=\"btn btn-info\" href=\"{{ path('dudeego_platform_abonne_mesDemandes') }}\" role=\"button\">Retour à la liste des demandes</a>
                {{ form_widget(edit_form.documentinscription.Enregistrer) }}
            </div>
        </div>
    </div>

    {# Token CSRF #}
    {{ form_widget(edit_form._token) }}

    {{ form_end(edit_form, {'render_rest': false }) }}
</div>
{% endblock %}", "@DUDEEGOPlatform/back/modifierdemandes.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\modifierdemandes.html.twig");
    }
}
