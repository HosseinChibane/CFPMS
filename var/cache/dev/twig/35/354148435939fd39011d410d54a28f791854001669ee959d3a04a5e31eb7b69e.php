<?php

/* DUDEEGOPlatformBundle:back:langueOne.html.twig */
class __TwigTemplate_dc3c301c4e947b429843be35c1a40fcdcee39f577d87cd69a2ed7a1c22f48995 extends Twig_Template
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
        $__internal_db59f131f3c883304fe3244cd546131d5821cebe8e268734b7d2b9e887b2124b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db59f131f3c883304fe3244cd546131d5821cebe8e268734b7d2b9e887b2124b->enter($__internal_db59f131f3c883304fe3244cd546131d5821cebe8e268734b7d2b9e887b2124b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:langueOne.html.twig"));

        $__internal_612389bd6678ca0fc65429d13abf95c273ad9abf0b649c160c3650a855ad73f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612389bd6678ca0fc65429d13abf95c273ad9abf0b649c160c3650a855ad73f8->enter($__internal_612389bd6678ca0fc65429d13abf95c273ad9abf0b649c160c3650a855ad73f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:langueOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db59f131f3c883304fe3244cd546131d5821cebe8e268734b7d2b9e887b2124b->leave($__internal_db59f131f3c883304fe3244cd546131d5821cebe8e268734b7d2b9e887b2124b_prof);

        
        $__internal_612389bd6678ca0fc65429d13abf95c273ad9abf0b649c160c3650a855ad73f8->leave($__internal_612389bd6678ca0fc65429d13abf95c273ad9abf0b649c160c3650a855ad73f8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57eed84ea31395bbe8f37aa1b40aa757ad9d86f62c12172a40eb87bacf2398bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57eed84ea31395bbe8f37aa1b40aa757ad9d86f62c12172a40eb87bacf2398bf->enter($__internal_57eed84ea31395bbe8f37aa1b40aa757ad9d86f62c12172a40eb87bacf2398bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f8b5c3e816821d27399c9b8b9d487c29e4926931ab8f0a003ad390d729f54698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8b5c3e816821d27399c9b8b9d487c29e4926931ab8f0a003ad390d729f54698->enter($__internal_f8b5c3e816821d27399c9b8b9d487c29e4926931ab8f0a003ad390d729f54698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f8b5c3e816821d27399c9b8b9d487c29e4926931ab8f0a003ad390d729f54698->leave($__internal_f8b5c3e816821d27399c9b8b9d487c29e4926931ab8f0a003ad390d729f54698_prof);

        
        $__internal_57eed84ea31395bbe8f37aa1b40aa757ad9d86f62c12172a40eb87bacf2398bf->leave($__internal_57eed84ea31395bbe8f37aa1b40aa757ad9d86f62c12172a40eb87bacf2398bf_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2b245ff931ea9c9d0ca10ebddfd02fb4bc378fa9b735ad9ef89218b52469835e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b245ff931ea9c9d0ca10ebddfd02fb4bc378fa9b735ad9ef89218b52469835e->enter($__internal_2b245ff931ea9c9d0ca10ebddfd02fb4bc378fa9b735ad9ef89218b52469835e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_5418db5de157fdc3aea266e4b5d5d5d267054ae15c62acfe322de4469492353a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5418db5de157fdc3aea266e4b5d5d5d267054ae15c62acfe322de4469492353a->enter($__internal_5418db5de157fdc3aea266e4b5d5d5d267054ae15c62acfe322de4469492353a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_5418db5de157fdc3aea266e4b5d5d5d267054ae15c62acfe322de4469492353a->leave($__internal_5418db5de157fdc3aea266e4b5d5d5d267054ae15c62acfe322de4469492353a_prof);

        
        $__internal_2b245ff931ea9c9d0ca10ebddfd02fb4bc378fa9b735ad9ef89218b52469835e->leave($__internal_2b245ff931ea9c9d0ca10ebddfd02fb4bc378fa9b735ad9ef89218b52469835e_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_c35e15814ad6007f5072205ed740fd5585e17daad097d37beb306c25a92dbda4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c35e15814ad6007f5072205ed740fd5585e17daad097d37beb306c25a92dbda4->enter($__internal_c35e15814ad6007f5072205ed740fd5585e17daad097d37beb306c25a92dbda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_2d1afd4ba2c28bc5e6c82ec8e1321bf0be22cbf1d8f24a4eb65e14ad549132e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1afd4ba2c28bc5e6c82ec8e1321bf0be22cbf1d8f24a4eb65e14ad549132e9->enter($__internal_2d1afd4ba2c28bc5e6c82ec8e1321bf0be22cbf1d8f24a4eb65e14ad549132e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_2d1afd4ba2c28bc5e6c82ec8e1321bf0be22cbf1d8f24a4eb65e14ad549132e9->leave($__internal_2d1afd4ba2c28bc5e6c82ec8e1321bf0be22cbf1d8f24a4eb65e14ad549132e9_prof);

        
        $__internal_c35e15814ad6007f5072205ed740fd5585e17daad097d37beb306c25a92dbda4->leave($__internal_c35e15814ad6007f5072205ed740fd5585e17daad097d37beb306c25a92dbda4_prof);

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
{% endblock %}", "DUDEEGOPlatformBundle:back:langueOne.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\langueOne.html.twig");
    }
}
