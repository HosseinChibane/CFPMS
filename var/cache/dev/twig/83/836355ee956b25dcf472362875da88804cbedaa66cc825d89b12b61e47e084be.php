<?php

/* @DUDEEGOPlatform/back/logementOne.html.twig */
class __TwigTemplate_4825a694999187bc5cee621817bb0c4f1dc454d169865efc170aa91575804864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/logementOne.html.twig", 1);
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
        $__internal_d3528e5508810049003fc8ae31072ad875d69886ca7606fe680c66c789b6c469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3528e5508810049003fc8ae31072ad875d69886ca7606fe680c66c789b6c469->enter($__internal_d3528e5508810049003fc8ae31072ad875d69886ca7606fe680c66c789b6c469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/logementOne.html.twig"));

        $__internal_a280c2dfdf18da9daeff6f8676a1fe2e67bb124ef8f3fef0d535a789b34cbde0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a280c2dfdf18da9daeff6f8676a1fe2e67bb124ef8f3fef0d535a789b34cbde0->enter($__internal_a280c2dfdf18da9daeff6f8676a1fe2e67bb124ef8f3fef0d535a789b34cbde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3528e5508810049003fc8ae31072ad875d69886ca7606fe680c66c789b6c469->leave($__internal_d3528e5508810049003fc8ae31072ad875d69886ca7606fe680c66c789b6c469_prof);

        
        $__internal_a280c2dfdf18da9daeff6f8676a1fe2e67bb124ef8f3fef0d535a789b34cbde0->leave($__internal_a280c2dfdf18da9daeff6f8676a1fe2e67bb124ef8f3fef0d535a789b34cbde0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b8ae5755844c3bb49306a7f4406ec7dc97def1e9e8d2b9a72fda9a109cd7183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8ae5755844c3bb49306a7f4406ec7dc97def1e9e8d2b9a72fda9a109cd7183->enter($__internal_2b8ae5755844c3bb49306a7f4406ec7dc97def1e9e8d2b9a72fda9a109cd7183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41ecb0b0f7e43809ca9dfbf0094e194f9d8eaab8553def8b584a1bad7baee987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ecb0b0f7e43809ca9dfbf0094e194f9d8eaab8553def8b584a1bad7baee987->enter($__internal_41ecb0b0f7e43809ca9dfbf0094e194f9d8eaab8553def8b584a1bad7baee987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_41ecb0b0f7e43809ca9dfbf0094e194f9d8eaab8553def8b584a1bad7baee987->leave($__internal_41ecb0b0f7e43809ca9dfbf0094e194f9d8eaab8553def8b584a1bad7baee987_prof);

        
        $__internal_2b8ae5755844c3bb49306a7f4406ec7dc97def1e9e8d2b9a72fda9a109cd7183->leave($__internal_2b8ae5755844c3bb49306a7f4406ec7dc97def1e9e8d2b9a72fda9a109cd7183_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_4ef1b5bd2790d95136c3a14ba7609976bef5fdcfa0def4952f3730dd65e2222a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef1b5bd2790d95136c3a14ba7609976bef5fdcfa0def4952f3730dd65e2222a->enter($__internal_4ef1b5bd2790d95136c3a14ba7609976bef5fdcfa0def4952f3730dd65e2222a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_95f1b31017f291aacff8da81e3591fb92875804fc2cadd503a0df9e3bfae1d54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f1b31017f291aacff8da81e3591fb92875804fc2cadd503a0df9e3bfae1d54->enter($__internal_95f1b31017f291aacff8da81e3591fb92875804fc2cadd503a0df9e3bfae1d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_95f1b31017f291aacff8da81e3591fb92875804fc2cadd503a0df9e3bfae1d54->leave($__internal_95f1b31017f291aacff8da81e3591fb92875804fc2cadd503a0df9e3bfae1d54_prof);

        
        $__internal_4ef1b5bd2790d95136c3a14ba7609976bef5fdcfa0def4952f3730dd65e2222a->leave($__internal_4ef1b5bd2790d95136c3a14ba7609976bef5fdcfa0def4952f3730dd65e2222a_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_467743aa288ba2b611e69daf096368a97466d4578f027da76b5510ff97c9b5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467743aa288ba2b611e69daf096368a97466d4578f027da76b5510ff97c9b5ff->enter($__internal_467743aa288ba2b611e69daf096368a97466d4578f027da76b5510ff97c9b5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_04e5d747305eda79de67159283a03f971d56996b3af2f693cbd495948c34ee20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e5d747305eda79de67159283a03f971d56996b3af2f693cbd495948c34ee20->enter($__internal_04e5d747305eda79de67159283a03f971d56996b3af2f693cbd495948c34ee20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_04e5d747305eda79de67159283a03f971d56996b3af2f693cbd495948c34ee20->leave($__internal_04e5d747305eda79de67159283a03f971d56996b3af2f693cbd495948c34ee20_prof);

        
        $__internal_467743aa288ba2b611e69daf096368a97466d4578f027da76b5510ff97c9b5ff->leave($__internal_467743aa288ba2b611e69daf096368a97466d4578f027da76b5510ff97c9b5ff_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/logementOne.html.twig";
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
{% endblock %}", "@DUDEEGOPlatform/back/logementOne.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\logementOne.html.twig");
    }
}
