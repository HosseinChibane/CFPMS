<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_b4efac1e47ecfc3119870ec2bcfabd133e5190f2d37fc4dd63a4054e65ec9cd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b857d859204dea6625944047b9604b92d35115c24ac216957e95324119c083dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b857d859204dea6625944047b9604b92d35115c24ac216957e95324119c083dc->enter($__internal_b857d859204dea6625944047b9604b92d35115c24ac216957e95324119c083dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_e071829bffdda329e9f04b1667262427ff4c2d5858e9f860268371b6d3dbeaef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e071829bffdda329e9f04b1667262427ff4c2d5858e9f860268371b6d3dbeaef->enter($__internal_e071829bffdda329e9f04b1667262427ff4c2d5858e9f860268371b6d3dbeaef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        // line 2
        echo "\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Page Heading/Breadcrumbs -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Création d'un compte
\t\t\t\t\t<small></small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">Inscription</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>

\t\t<!-- /.row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t<!-- BEGIN REGISTRATION FORM -->
\t\t\t\t\t<form action=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" method=\"POST\">

\t\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t\t\t";
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 28
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t";
            // line 29
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 32
        echo "
\t\t\t\t\t\t<h2 class=\"form-signin-heading\">Création d'un compte</h2>

\t\t\t\t\t\t<div id=\"fos_user_registration_form\">\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "nom", array()), 'label', array("label" => "Nom"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "nom", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "prenom", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom d'utilisateur"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "courriel", array()), 'label', array("label" => "Email"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "courriel", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Confirmer votre email"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label" => "Mot de passe"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label" => "Répéter le mot de  passe"));
        echo "
\t\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget');
        echo "

\t\t\t\t\t\t\t\t";
        // line 59
        echo "\t\t\t\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 66
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
\t\t\t\t\t\t<!-- END REGISTRATION FORM -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.container -->

\t";
        
        $__internal_b857d859204dea6625944047b9604b92d35115c24ac216957e95324119c083dc->leave($__internal_b857d859204dea6625944047b9604b92d35115c24ac216957e95324119c083dc_prof);

        
        $__internal_e071829bffdda329e9f04b1667262427ff4c2d5858e9f860268371b6d3dbeaef->leave($__internal_e071829bffdda329e9f04b1667262427ff4c2d5858e9f860268371b6d3dbeaef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 66,  143 => 62,  136 => 59,  131 => 56,  127 => 55,  122 => 53,  118 => 52,  113 => 50,  109 => 49,  104 => 47,  100 => 46,  95 => 44,  91 => 43,  86 => 41,  82 => 40,  77 => 38,  73 => 37,  66 => 32,  60 => 29,  57 => 28,  54 => 27,  49 => 24,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Page Heading/Breadcrumbs -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<h1 class=\"page-header\">Création d'un compte
\t\t\t\t\t<small></small>
\t\t\t\t</h1>
\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"\">Accueil</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"active\">Inscription</li>
\t\t\t\t</ol>
\t\t\t</div>
\t\t</div>

\t\t<!-- /.row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-12\">
\t\t\t\t<div class=\"jumbotron\">

\t\t\t\t\t<!-- BEGIN REGISTRATION FORM -->
\t\t\t\t\t<form action=\"{{ path('fos_user_registration_register') }}\" method=\"POST\">

\t\t\t\t\t\t{# Les erreurs générales du formulaire. #}
\t\t\t\t\t\t{% if form_errors(form) %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t\t\t{{ form_errors(form) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t<h2 class=\"form-signin-heading\">Création d'un compte</h2>

\t\t\t\t\t\t<div id=\"fos_user_registration_form\">\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t{{ form_label(form.physique.nom, 'Nom') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.physique.nom) }}

\t\t\t\t\t\t\t\t{{ form_label(form.physique.prenom, 'Prénom') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.physique.prenom) }}

\t\t\t\t\t\t\t\t{{ form_label(form.username, 'Nom d\\'utilisateur') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.username) }}

\t\t\t\t\t\t\t\t{{ form_label(form.physique.personne.courriel, 'Email') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.physique.personne.courriel) }}

\t\t\t\t\t\t\t\t{{ form_label(form.email, 'Confirmer votre email') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.email) }}

\t\t\t\t\t\t\t\t{{ form_label(form.plainPassword.first, 'Mot de passe') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.plainPassword.first) }}

\t\t\t\t\t\t\t\t{{ form_label(form.plainPassword.second, 'Répéter le mot de  passe') }}
\t\t\t\t\t\t\t\t{{ form_widget(form.plainPassword.second) }}

\t\t\t\t\t\t\t\t{# Token CSRF #}
\t\t\t\t\t\t\t\t{{ form_widget(form._token) }}
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<input class=\"btn btn-primary\" type=\"submit\" value=\"{{ 'registration.submit'|trans }}\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{{ form_end(form, {'render_rest': false}) }}
\t\t\t\t\t\t<!-- END REGISTRATION FORM -->

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- /.container -->

\t{#
\t<h1>Formulaire d'inscription</h1>

\t{{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
\t{{ form_widget(form) }}
\t<div>
\t\t<input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
\t</div>
\t{{ form_end(form) }}
\t#}", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
