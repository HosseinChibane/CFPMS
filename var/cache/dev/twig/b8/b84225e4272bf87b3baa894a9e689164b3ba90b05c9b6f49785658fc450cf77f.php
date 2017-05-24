<?php

/* DUDEEGOPlatformBundle:back:preparationOne.html.twig */
class __TwigTemplate_98db637ac44895e40bb9643bea008f8dcd4cd22a5d155f4a2044810cda4685c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:preparationOne.html.twig", 1);
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
        $__internal_0126c845bc21945808ee34e0fd78b7393dd2df9e6ae4605411fa04034d7c09c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0126c845bc21945808ee34e0fd78b7393dd2df9e6ae4605411fa04034d7c09c7->enter($__internal_0126c845bc21945808ee34e0fd78b7393dd2df9e6ae4605411fa04034d7c09c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:preparationOne.html.twig"));

        $__internal_4976f496338325d34e91b4e8ca70dcc2bc03237abcf0b09a57759c274ffc0da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4976f496338325d34e91b4e8ca70dcc2bc03237abcf0b09a57759c274ffc0da2->enter($__internal_4976f496338325d34e91b4e8ca70dcc2bc03237abcf0b09a57759c274ffc0da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:preparationOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0126c845bc21945808ee34e0fd78b7393dd2df9e6ae4605411fa04034d7c09c7->leave($__internal_0126c845bc21945808ee34e0fd78b7393dd2df9e6ae4605411fa04034d7c09c7_prof);

        
        $__internal_4976f496338325d34e91b4e8ca70dcc2bc03237abcf0b09a57759c274ffc0da2->leave($__internal_4976f496338325d34e91b4e8ca70dcc2bc03237abcf0b09a57759c274ffc0da2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c7713c9326cc159296c548b6a65884fc207f9eee6907b756260ff3fa610a1da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c7713c9326cc159296c548b6a65884fc207f9eee6907b756260ff3fa610a1da->enter($__internal_8c7713c9326cc159296c548b6a65884fc207f9eee6907b756260ff3fa610a1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72e4f7b27e60bd0661b9409f38c73d3bce75fc023897c49ad6019a5dce78a11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e4f7b27e60bd0661b9409f38c73d3bce75fc023897c49ad6019a5dce78a11c->enter($__internal_72e4f7b27e60bd0661b9409f38c73d3bce75fc023897c49ad6019a5dce78a11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_72e4f7b27e60bd0661b9409f38c73d3bce75fc023897c49ad6019a5dce78a11c->leave($__internal_72e4f7b27e60bd0661b9409f38c73d3bce75fc023897c49ad6019a5dce78a11c_prof);

        
        $__internal_8c7713c9326cc159296c548b6a65884fc207f9eee6907b756260ff3fa610a1da->leave($__internal_8c7713c9326cc159296c548b6a65884fc207f9eee6907b756260ff3fa610a1da_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_19a148368b0c3e2023d73369a5b88d1141495aeed8dd1bca06ddf4298acff5f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a148368b0c3e2023d73369a5b88d1141495aeed8dd1bca06ddf4298acff5f3->enter($__internal_19a148368b0c3e2023d73369a5b88d1141495aeed8dd1bca06ddf4298acff5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_459f12f0afbdbd87ef140a92567b28fd443348d50142d90b7ce51f1e5ef7afaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459f12f0afbdbd87ef140a92567b28fd443348d50142d90b7ce51f1e5ef7afaa->enter($__internal_459f12f0afbdbd87ef140a92567b28fd443348d50142d90b7ce51f1e5ef7afaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_459f12f0afbdbd87ef140a92567b28fd443348d50142d90b7ce51f1e5ef7afaa->leave($__internal_459f12f0afbdbd87ef140a92567b28fd443348d50142d90b7ce51f1e5ef7afaa_prof);

        
        $__internal_19a148368b0c3e2023d73369a5b88d1141495aeed8dd1bca06ddf4298acff5f3->leave($__internal_19a148368b0c3e2023d73369a5b88d1141495aeed8dd1bca06ddf4298acff5f3_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_bea8caffd32a7aeadc7eca58f8485371d821c2ed2bdab164952022111e7f7e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea8caffd32a7aeadc7eca58f8485371d821c2ed2bdab164952022111e7f7e2a->enter($__internal_bea8caffd32a7aeadc7eca58f8485371d821c2ed2bdab164952022111e7f7e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_b917a8d7fa37fdaabec3a9e440a1a7dcf4d1a054eea2fe3f57b299b0a051450d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b917a8d7fa37fdaabec3a9e440a1a7dcf4d1a054eea2fe3f57b299b0a051450d->enter($__internal_b917a8d7fa37fdaabec3a9e440a1a7dcf4d1a054eea2fe3f57b299b0a051450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_b917a8d7fa37fdaabec3a9e440a1a7dcf4d1a054eea2fe3f57b299b0a051450d->leave($__internal_b917a8d7fa37fdaabec3a9e440a1a7dcf4d1a054eea2fe3f57b299b0a051450d_prof);

        
        $__internal_bea8caffd32a7aeadc7eca58f8485371d821c2ed2bdab164952022111e7f7e2a->leave($__internal_bea8caffd32a7aeadc7eca58f8485371d821c2ed2bdab164952022111e7f7e2a_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:preparationOne.html.twig";
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
", "DUDEEGOPlatformBundle:back:preparationOne.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/preparationOne.html.twig");
    }
}
