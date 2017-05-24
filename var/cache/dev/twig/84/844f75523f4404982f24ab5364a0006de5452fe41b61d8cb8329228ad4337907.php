<?php

/* DUDEEGOPlatformBundle:back:universiteOne.html.twig */
class __TwigTemplate_ae53a18e3255a574ae515f4150e10999f5662f6786703af855ce593da634f71a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:universiteOne.html.twig", 1);
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
        $__internal_7dcd1ba3c21587c49dc5d46ea12840b9d0d1af7fcfcb3a54b50d351e16449b43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dcd1ba3c21587c49dc5d46ea12840b9d0d1af7fcfcb3a54b50d351e16449b43->enter($__internal_7dcd1ba3c21587c49dc5d46ea12840b9d0d1af7fcfcb3a54b50d351e16449b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteOne.html.twig"));

        $__internal_3db5f737036fc1dc4a76d8b6a72078e79015b212b6e15bead5f079a42fb0c5cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db5f737036fc1dc4a76d8b6a72078e79015b212b6e15bead5f079a42fb0c5cf->enter($__internal_3db5f737036fc1dc4a76d8b6a72078e79015b212b6e15bead5f079a42fb0c5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dcd1ba3c21587c49dc5d46ea12840b9d0d1af7fcfcb3a54b50d351e16449b43->leave($__internal_7dcd1ba3c21587c49dc5d46ea12840b9d0d1af7fcfcb3a54b50d351e16449b43_prof);

        
        $__internal_3db5f737036fc1dc4a76d8b6a72078e79015b212b6e15bead5f079a42fb0c5cf->leave($__internal_3db5f737036fc1dc4a76d8b6a72078e79015b212b6e15bead5f079a42fb0c5cf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0e4783d396fa4886920ae4795a5b6f38b55c9fdc606de5f68e6530a25296f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e4783d396fa4886920ae4795a5b6f38b55c9fdc606de5f68e6530a25296f7a->enter($__internal_f0e4783d396fa4886920ae4795a5b6f38b55c9fdc606de5f68e6530a25296f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ce2c181b927bdb102458acfbff74180a5e0deace5de37677a663bda3f91da0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce2c181b927bdb102458acfbff74180a5e0deace5de37677a663bda3f91da0b->enter($__internal_6ce2c181b927bdb102458acfbff74180a5e0deace5de37677a663bda3f91da0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6ce2c181b927bdb102458acfbff74180a5e0deace5de37677a663bda3f91da0b->leave($__internal_6ce2c181b927bdb102458acfbff74180a5e0deace5de37677a663bda3f91da0b_prof);

        
        $__internal_f0e4783d396fa4886920ae4795a5b6f38b55c9fdc606de5f68e6530a25296f7a->leave($__internal_f0e4783d396fa4886920ae4795a5b6f38b55c9fdc606de5f68e6530a25296f7a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3aee9f7b036be2065835adc948f72c4531d05257574bf0fa4fa46f4d8bba577d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aee9f7b036be2065835adc948f72c4531d05257574bf0fa4fa46f4d8bba577d->enter($__internal_3aee9f7b036be2065835adc948f72c4531d05257574bf0fa4fa46f4d8bba577d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_136c2bd460b5179d1c907e15a4d5f0d0d0c25c55d1d63d04d30d033ec7069532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_136c2bd460b5179d1c907e15a4d5f0d0d0c25c55d1d63d04d30d033ec7069532->enter($__internal_136c2bd460b5179d1c907e15a4d5f0d0d0c25c55d1d63d04d30d033ec7069532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_136c2bd460b5179d1c907e15a4d5f0d0d0c25c55d1d63d04d30d033ec7069532->leave($__internal_136c2bd460b5179d1c907e15a4d5f0d0d0c25c55d1d63d04d30d033ec7069532_prof);

        
        $__internal_3aee9f7b036be2065835adc948f72c4531d05257574bf0fa4fa46f4d8bba577d->leave($__internal_3aee9f7b036be2065835adc948f72c4531d05257574bf0fa4fa46f4d8bba577d_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_e7009a76f8bc4515bbe301aca18290c0765bffadc9a4d7949c29dd93c80b46bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7009a76f8bc4515bbe301aca18290c0765bffadc9a4d7949c29dd93c80b46bc->enter($__internal_e7009a76f8bc4515bbe301aca18290c0765bffadc9a4d7949c29dd93c80b46bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_e89f4d535e301ccf61c11daeaba3cd7224dd1b66670a781bf220937d34cc0531 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e89f4d535e301ccf61c11daeaba3cd7224dd1b66670a781bf220937d34cc0531->enter($__internal_e89f4d535e301ccf61c11daeaba3cd7224dd1b66670a781bf220937d34cc0531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2>Etape 1</h2>
            <p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "                <div class=\"alert alert-error\">
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>
            ";
        }
        // line 25
        echo "            <div class=\"form-group\">

                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'label', array("label" => "Formation"));
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'widget');
        echo "

                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'label', array("label" => "Langue"));
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'widget');
        echo "

                ";
        // line 38
        echo "
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo "
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "rechercher", array()), 'widget');
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 49
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 51
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_e89f4d535e301ccf61c11daeaba3cd7224dd1b66670a781bf220937d34cc0531->leave($__internal_e89f4d535e301ccf61c11daeaba3cd7224dd1b66670a781bf220937d34cc0531_prof);

        
        $__internal_e7009a76f8bc4515bbe301aca18290c0765bffadc9a4d7949c29dd93c80b46bc->leave($__internal_e7009a76f8bc4515bbe301aca18290c0765bffadc9a4d7949c29dd93c80b46bc_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:universiteOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 51,  168 => 49,  161 => 44,  157 => 43,  150 => 38,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Inscription Université - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
{% endblock %}

{% block BackContent %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h2>Etape 1</h2>
            <p>Veuillez sélectionner les champs ci-dessous et rechercher afin de passer à l'étape suivante.</p>
            {{ form_start(form) }}
            {% if not form.vars.valid %}
                <div class=\"alert alert-error\">
                    {{ form_errors(form) }}
                </div>
            {% endif %}
            <div class=\"form-group\">

                {{ form_label(form.formation, 'Formation') }}
                {{ form_errors(form.formation) }}
                {{ form_widget(form.formation) }}

                {{ form_label(form.langue, 'Langue') }}
                {{ form_errors(form.langue) }}
                {{ form_widget(form.langue) }}

                {#{{ form_label(form.nometablissement, 'Université') }}
                {{ form_errors(form.nometablissement) }}
                {{ form_widget(form.nometablissement) }}#}

            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        {{ form_widget(form.reinitialiser) }}
                        {{ form_widget(form.rechercher) }}
                    </div>
                </div>
            </div>
            {# Token CSRF #}
            {{ form_widget(form._token) }}
            {# , {'render_rest': false} #}
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "DUDEEGOPlatformBundle:back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/universiteOne.html.twig");
    }
}
