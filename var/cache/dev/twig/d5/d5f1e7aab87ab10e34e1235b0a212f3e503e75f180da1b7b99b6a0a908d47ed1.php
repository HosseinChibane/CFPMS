<?php

/* DUDEEGOPlatformBundle:back:modifierdemandes.html.twig */
class __TwigTemplate_41d324a03dc3638d9db456bd85c9596e14706fd085e3983770ffdfdee509373d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:modifierdemandes.html.twig", 1);
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
        $__internal_b1dc064fec111c69af714fe779f54919621f78737ac98723eec40890fde129c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1dc064fec111c69af714fe779f54919621f78737ac98723eec40890fde129c6->enter($__internal_b1dc064fec111c69af714fe779f54919621f78737ac98723eec40890fde129c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:modifierdemandes.html.twig"));

        $__internal_191030afb580171f9f9b8a8cd66ca22dc7b5499972284aca8c491403d40783c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191030afb580171f9f9b8a8cd66ca22dc7b5499972284aca8c491403d40783c4->enter($__internal_191030afb580171f9f9b8a8cd66ca22dc7b5499972284aca8c491403d40783c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:modifierdemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1dc064fec111c69af714fe779f54919621f78737ac98723eec40890fde129c6->leave($__internal_b1dc064fec111c69af714fe779f54919621f78737ac98723eec40890fde129c6_prof);

        
        $__internal_191030afb580171f9f9b8a8cd66ca22dc7b5499972284aca8c491403d40783c4->leave($__internal_191030afb580171f9f9b8a8cd66ca22dc7b5499972284aca8c491403d40783c4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac7fcf5d86edad3182424ae83bc2fa376c1aed463238fc57ce16ef79725b617f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7fcf5d86edad3182424ae83bc2fa376c1aed463238fc57ce16ef79725b617f->enter($__internal_ac7fcf5d86edad3182424ae83bc2fa376c1aed463238fc57ce16ef79725b617f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc74f6f5de0953fad150e73efd412989835bd1d1b14babff82e561a9c7d553fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc74f6f5de0953fad150e73efd412989835bd1d1b14babff82e561a9c7d553fa->enter($__internal_bc74f6f5de0953fad150e73efd412989835bd1d1b14babff82e561a9c7d553fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Modifier Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bc74f6f5de0953fad150e73efd412989835bd1d1b14babff82e561a9c7d553fa->leave($__internal_bc74f6f5de0953fad150e73efd412989835bd1d1b14babff82e561a9c7d553fa_prof);

        
        $__internal_ac7fcf5d86edad3182424ae83bc2fa376c1aed463238fc57ce16ef79725b617f->leave($__internal_ac7fcf5d86edad3182424ae83bc2fa376c1aed463238fc57ce16ef79725b617f_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2dcb7c8340657dff2d51c7e0abe4de1d2bccc2a3a08f70323c780e08e2183b95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcb7c8340657dff2d51c7e0abe4de1d2bccc2a3a08f70323c780e08e2183b95->enter($__internal_2dcb7c8340657dff2d51c7e0abe4de1d2bccc2a3a08f70323c780e08e2183b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ae8e1b7abc1cb7a754055764c17d32b7b12a18837da499f6b0ae1be28d20666a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8e1b7abc1cb7a754055764c17d32b7b12a18837da499f6b0ae1be28d20666a->enter($__internal_ae8e1b7abc1cb7a754055764c17d32b7b12a18837da499f6b0ae1be28d20666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_ae8e1b7abc1cb7a754055764c17d32b7b12a18837da499f6b0ae1be28d20666a->leave($__internal_ae8e1b7abc1cb7a754055764c17d32b7b12a18837da499f6b0ae1be28d20666a_prof);

        
        $__internal_2dcb7c8340657dff2d51c7e0abe4de1d2bccc2a3a08f70323c780e08e2183b95->leave($__internal_2dcb7c8340657dff2d51c7e0abe4de1d2bccc2a3a08f70323c780e08e2183b95_prof);

    }

    // line 15
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_3c21f6aed027030b8f5288a49f166e074d066f2aa7938810b6a10b04fdedde9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c21f6aed027030b8f5288a49f166e074d066f2aa7938810b6a10b04fdedde9e->enter($__internal_3c21f6aed027030b8f5288a49f166e074d066f2aa7938810b6a10b04fdedde9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_d3edc0daea2a6cc7c94f2e24ec1fd0b5f6c2387d19ce8b582005e57e76f41c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3edc0daea2a6cc7c94f2e24ec1fd0b5f6c2387d19ce8b582005e57e76f41c14->enter($__internal_d3edc0daea2a6cc7c94f2e24ec1fd0b5f6c2387d19ce8b582005e57e76f41c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_d3edc0daea2a6cc7c94f2e24ec1fd0b5f6c2387d19ce8b582005e57e76f41c14->leave($__internal_d3edc0daea2a6cc7c94f2e24ec1fd0b5f6c2387d19ce8b582005e57e76f41c14_prof);

        
        $__internal_3c21f6aed027030b8f5288a49f166e074d066f2aa7938810b6a10b04fdedde9e->leave($__internal_3c21f6aed027030b8f5288a49f166e074d066f2aa7938810b6a10b04fdedde9e_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:modifierdemandes.html.twig";
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
{% endblock %}", "DUDEEGOPlatformBundle:back:modifierdemandes.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/modifierdemandes.html.twig");
    }
}
