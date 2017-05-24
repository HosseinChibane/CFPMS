<?php

/* DUDEEGOPlatformBundle:back:logementOne.html.twig */
class __TwigTemplate_4825a694999187bc5cee621817bb0c4f1dc454d169865efc170aa91575804864 extends Twig_Template
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
        $__internal_e94610c1620dbcf1b2701bef840fa8b5b27897444dd35612ce5a313f4a7aa75b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e94610c1620dbcf1b2701bef840fa8b5b27897444dd35612ce5a313f4a7aa75b->enter($__internal_e94610c1620dbcf1b2701bef840fa8b5b27897444dd35612ce5a313f4a7aa75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:logementOne.html.twig"));

        $__internal_6209c5da4af3bccb75ce27791c814a87b7de986f45426b329076f239fde8b5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6209c5da4af3bccb75ce27791c814a87b7de986f45426b329076f239fde8b5d5->enter($__internal_6209c5da4af3bccb75ce27791c814a87b7de986f45426b329076f239fde8b5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:logementOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e94610c1620dbcf1b2701bef840fa8b5b27897444dd35612ce5a313f4a7aa75b->leave($__internal_e94610c1620dbcf1b2701bef840fa8b5b27897444dd35612ce5a313f4a7aa75b_prof);

        
        $__internal_6209c5da4af3bccb75ce27791c814a87b7de986f45426b329076f239fde8b5d5->leave($__internal_6209c5da4af3bccb75ce27791c814a87b7de986f45426b329076f239fde8b5d5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95b3747aff2bb0892db0374c185ec1f1637c0f3e3c01127d1a5939cc414dc3e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b3747aff2bb0892db0374c185ec1f1637c0f3e3c01127d1a5939cc414dc3e2->enter($__internal_95b3747aff2bb0892db0374c185ec1f1637c0f3e3c01127d1a5939cc414dc3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e075f74c0c3b90eb53957216665529d3fe5643a9789cd5c7d85a8d103eee850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e075f74c0c3b90eb53957216665529d3fe5643a9789cd5c7d85a8d103eee850->enter($__internal_7e075f74c0c3b90eb53957216665529d3fe5643a9789cd5c7d85a8d103eee850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7e075f74c0c3b90eb53957216665529d3fe5643a9789cd5c7d85a8d103eee850->leave($__internal_7e075f74c0c3b90eb53957216665529d3fe5643a9789cd5c7d85a8d103eee850_prof);

        
        $__internal_95b3747aff2bb0892db0374c185ec1f1637c0f3e3c01127d1a5939cc414dc3e2->leave($__internal_95b3747aff2bb0892db0374c185ec1f1637c0f3e3c01127d1a5939cc414dc3e2_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d7fa17d1f45fa9a6343d0c648597adf7e42b22fb3d2b21d5bfed61bced947527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fa17d1f45fa9a6343d0c648597adf7e42b22fb3d2b21d5bfed61bced947527->enter($__internal_d7fa17d1f45fa9a6343d0c648597adf7e42b22fb3d2b21d5bfed61bced947527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_8076ebffcc3423b97fd75723bdc001bcb09f47c61411b62c55e9d6ffa85ff944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8076ebffcc3423b97fd75723bdc001bcb09f47c61411b62c55e9d6ffa85ff944->enter($__internal_8076ebffcc3423b97fd75723bdc001bcb09f47c61411b62c55e9d6ffa85ff944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_8076ebffcc3423b97fd75723bdc001bcb09f47c61411b62c55e9d6ffa85ff944->leave($__internal_8076ebffcc3423b97fd75723bdc001bcb09f47c61411b62c55e9d6ffa85ff944_prof);

        
        $__internal_d7fa17d1f45fa9a6343d0c648597adf7e42b22fb3d2b21d5bfed61bced947527->leave($__internal_d7fa17d1f45fa9a6343d0c648597adf7e42b22fb3d2b21d5bfed61bced947527_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_8dcb4a56da3dc678e9c4d2819342c1ce5be6a673eb4a91078e151480ab7f1b1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dcb4a56da3dc678e9c4d2819342c1ce5be6a673eb4a91078e151480ab7f1b1d->enter($__internal_8dcb4a56da3dc678e9c4d2819342c1ce5be6a673eb4a91078e151480ab7f1b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_4b6ff3ceae239d9664d4435edcfb2291c25b5a24e4647a01544f159f02067049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6ff3ceae239d9664d4435edcfb2291c25b5a24e4647a01544f159f02067049->enter($__internal_4b6ff3ceae239d9664d4435edcfb2291c25b5a24e4647a01544f159f02067049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_4b6ff3ceae239d9664d4435edcfb2291c25b5a24e4647a01544f159f02067049->leave($__internal_4b6ff3ceae239d9664d4435edcfb2291c25b5a24e4647a01544f159f02067049_prof);

        
        $__internal_8dcb4a56da3dc678e9c4d2819342c1ce5be6a673eb4a91078e151480ab7f1b1d->leave($__internal_8dcb4a56da3dc678e9c4d2819342c1ce5be6a673eb4a91078e151480ab7f1b1d_prof);

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
{% endblock %}", "DUDEEGOPlatformBundle:back:logementOne.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\logementOne.html.twig");
    }
}
