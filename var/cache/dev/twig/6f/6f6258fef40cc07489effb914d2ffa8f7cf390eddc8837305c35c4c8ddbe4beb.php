<?php

/* DUDEEGOPlatformBundle:back:universiteOne.html.twig */
class __TwigTemplate_55f06f60a3cd5c959f9087a192d0c7caac607d6437e3e904dc67b393ff85bb80 extends Twig_Template
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
        $__internal_80177a62ac109910385085675f078929b76dadef722d20abf1dd169198cbfe41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80177a62ac109910385085675f078929b76dadef722d20abf1dd169198cbfe41->enter($__internal_80177a62ac109910385085675f078929b76dadef722d20abf1dd169198cbfe41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteOne.html.twig"));

        $__internal_9370f560c887f08b0deba70387678d688e8a5019e751c21d95c5c1ce07c79da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9370f560c887f08b0deba70387678d688e8a5019e751c21d95c5c1ce07c79da7->enter($__internal_9370f560c887f08b0deba70387678d688e8a5019e751c21d95c5c1ce07c79da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80177a62ac109910385085675f078929b76dadef722d20abf1dd169198cbfe41->leave($__internal_80177a62ac109910385085675f078929b76dadef722d20abf1dd169198cbfe41_prof);

        
        $__internal_9370f560c887f08b0deba70387678d688e8a5019e751c21d95c5c1ce07c79da7->leave($__internal_9370f560c887f08b0deba70387678d688e8a5019e751c21d95c5c1ce07c79da7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1b955e0c1e2eadabf29c9e636dc40dbb6342ce6219565676b075ff5d7fcb28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b955e0c1e2eadabf29c9e636dc40dbb6342ce6219565676b075ff5d7fcb28b->enter($__internal_c1b955e0c1e2eadabf29c9e636dc40dbb6342ce6219565676b075ff5d7fcb28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_aa721a5920c4ab7f7f9cd456b39b29a69766013b3bf1fce3b2e7ad7d391b6aa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa721a5920c4ab7f7f9cd456b39b29a69766013b3bf1fce3b2e7ad7d391b6aa8->enter($__internal_aa721a5920c4ab7f7f9cd456b39b29a69766013b3bf1fce3b2e7ad7d391b6aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_aa721a5920c4ab7f7f9cd456b39b29a69766013b3bf1fce3b2e7ad7d391b6aa8->leave($__internal_aa721a5920c4ab7f7f9cd456b39b29a69766013b3bf1fce3b2e7ad7d391b6aa8_prof);

        
        $__internal_c1b955e0c1e2eadabf29c9e636dc40dbb6342ce6219565676b075ff5d7fcb28b->leave($__internal_c1b955e0c1e2eadabf29c9e636dc40dbb6342ce6219565676b075ff5d7fcb28b_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_03a24d3f631bc09236a44be83bb9235f7691ba605af32aaf7c7ac5e77fa7cb09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03a24d3f631bc09236a44be83bb9235f7691ba605af32aaf7c7ac5e77fa7cb09->enter($__internal_03a24d3f631bc09236a44be83bb9235f7691ba605af32aaf7c7ac5e77fa7cb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_8dbec1e4b12684facc26baf2beb0f861573a2048656a33cbb09867627503691e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dbec1e4b12684facc26baf2beb0f861573a2048656a33cbb09867627503691e->enter($__internal_8dbec1e4b12684facc26baf2beb0f861573a2048656a33cbb09867627503691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_8dbec1e4b12684facc26baf2beb0f861573a2048656a33cbb09867627503691e->leave($__internal_8dbec1e4b12684facc26baf2beb0f861573a2048656a33cbb09867627503691e_prof);

        
        $__internal_03a24d3f631bc09236a44be83bb9235f7691ba605af32aaf7c7ac5e77fa7cb09->leave($__internal_03a24d3f631bc09236a44be83bb9235f7691ba605af32aaf7c7ac5e77fa7cb09_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_2367dc54829d86cf7752be642def10c83a4f15e1cde90925763a178a7b0bf4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2367dc54829d86cf7752be642def10c83a4f15e1cde90925763a178a7b0bf4e8->enter($__internal_2367dc54829d86cf7752be642def10c83a4f15e1cde90925763a178a7b0bf4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_5d871c269540c02ef7be727f468bef15d4c2240e25cae6806c39a14a603cb00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d871c269540c02ef7be727f468bef15d4c2240e25cae6806c39a14a603cb00e->enter($__internal_5d871c269540c02ef7be727f468bef15d4c2240e25cae6806c39a14a603cb00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'label', array("label" => "Langue"));
        echo "
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'errors');
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langue", array()), 'widget');
        echo "

                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'label', array("label" => "Formation"));
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formation", array()), 'widget');
        echo "

                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'label', array("label" => "Université"));
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'errors');
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nometablissement", array()), 'widget');
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
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>

<script>
    var \$langue = \$('#dudeego_platformbundle_t_universite_langue');

    \$langue.change(function() {
        var \$form = \$(this).closest('form');
        var data = {};
        data[\$langue.attr('name')] = \$langue.val();
        \$.ajax({
            beforeSend: function(){
                \$(\"#dudeego_platformbundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
            },
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
                \$('#dudeego_platformbundle_t_universite_formation').replaceWith(
                    \$(html).find('#dudeego_platformbundle_t_universite_formation')
                    );
                var \$formation = \$('#dudeego_platformbundle_t_universite_formation');
                
                \$formation.change(function() {
                    var \$form = \$(this).closest('form');
                    var data = {};
                    data[\$formation.attr('name')] = \$formation.val();
                    \$.ajax({
                        beforeSend: function(){
                            \$(\"#dudeego_platformbundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                        },
                        url : \$form.attr('action'),
                        type: \$form.attr('method'),
                        data : data,
                        success: function(html) {
                            \$('#dudeego_platformbundle_t_universite_nometablissement').replaceWith(
                                \$(html).find('#dudeego_platformbundle_t_universite_nometablissement')
                                );
                        }
                    });
                });
            }
        });
    });
</script>

";
        
        $__internal_5d871c269540c02ef7be727f468bef15d4c2240e25cae6806c39a14a603cb00e->leave($__internal_5d871c269540c02ef7be727f468bef15d4c2240e25cae6806c39a14a603cb00e_prof);

        
        $__internal_2367dc54829d86cf7752be642def10c83a4f15e1cde90925763a178a7b0bf4e8->leave($__internal_2367dc54829d86cf7752be642def10c83a4f15e1cde90925763a178a7b0bf4e8_prof);

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
        return array (  180 => 51,  178 => 50,  171 => 44,  167 => 43,  158 => 37,  154 => 36,  150 => 35,  145 => 33,  141 => 32,  137 => 31,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

                {{ form_label(form.langue, 'Langue') }}
                {{ form_errors(form.langue) }}
                {{ form_widget(form.langue) }}

                {{ form_label(form.formation, 'Formation') }}
                {{ form_errors(form.formation) }}
                {{ form_widget(form.formation) }}

                {{ form_label(form.nometablissement, 'Université') }}
                {{ form_errors(form.nometablissement) }}
                {{ form_widget(form.nometablissement) }}

            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"form-group\">
                        {{ form_widget(form.reinitialiser) }}
                        {{ form_widget(form.rechercher) }}
                    </div>
                </div>
            </div>
{# Token CSRF
    {{ form_widget(form._token) }} #}
    {# , {'render_rest': false} #}
    {{ form_end(form) }}
</div>
</div>

<script>
    var \$langue = \$('#dudeego_platformbundle_t_universite_langue');

    \$langue.change(function() {
        var \$form = \$(this).closest('form');
        var data = {};
        data[\$langue.attr('name')] = \$langue.val();
        \$.ajax({
            beforeSend: function(){
                \$(\"#dudeego_platformbundle_t_universite_formation\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
            },
            url : \$form.attr('action'),
            type: \$form.attr('method'),
            data : data,
            success: function(html) {
                \$('#dudeego_platformbundle_t_universite_formation').replaceWith(
                    \$(html).find('#dudeego_platformbundle_t_universite_formation')
                    );
                var \$formation = \$('#dudeego_platformbundle_t_universite_formation');
                
                \$formation.change(function() {
                    var \$form = \$(this).closest('form');
                    var data = {};
                    data[\$formation.attr('name')] = \$formation.val();
                    \$.ajax({
                        beforeSend: function(){
                            \$(\"#dudeego_platformbundle_t_universite_nometablissement\").html('<option value=\"\" selected=\"selected\">Chargement en cours...</option>');
                        },
                        url : \$form.attr('action'),
                        type: \$form.attr('method'),
                        data : data,
                        success: function(html) {
                            \$('#dudeego_platformbundle_t_universite_nometablissement').replaceWith(
                                \$(html).find('#dudeego_platformbundle_t_universite_nometablissement')
                                );
                        }
                    });
                });
            }
        });
    });
</script>

{% endblock %}
", "DUDEEGOPlatformBundle:back:universiteOne.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\universiteOne.html.twig");
    }
}
