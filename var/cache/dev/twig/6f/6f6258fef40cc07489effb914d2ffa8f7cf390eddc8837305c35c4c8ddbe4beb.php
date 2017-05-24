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
        $__internal_c7081205cae13ba0bba247fe05d84525917796d916e5891b53f8c1dcc6732ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7081205cae13ba0bba247fe05d84525917796d916e5891b53f8c1dcc6732ff8->enter($__internal_c7081205cae13ba0bba247fe05d84525917796d916e5891b53f8c1dcc6732ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteOne.html.twig"));

        $__internal_d73c7b11f416be430d9f2e668e284c465cc7f6c747aab187cda65113650b79b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73c7b11f416be430d9f2e668e284c465cc7f6c747aab187cda65113650b79b1->enter($__internal_d73c7b11f416be430d9f2e668e284c465cc7f6c747aab187cda65113650b79b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7081205cae13ba0bba247fe05d84525917796d916e5891b53f8c1dcc6732ff8->leave($__internal_c7081205cae13ba0bba247fe05d84525917796d916e5891b53f8c1dcc6732ff8_prof);

        
        $__internal_d73c7b11f416be430d9f2e668e284c465cc7f6c747aab187cda65113650b79b1->leave($__internal_d73c7b11f416be430d9f2e668e284c465cc7f6c747aab187cda65113650b79b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2892ab3fc09ba94890733a821f005e64589e6501cd56fcfb75f13caba5a1c43c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2892ab3fc09ba94890733a821f005e64589e6501cd56fcfb75f13caba5a1c43c->enter($__internal_2892ab3fc09ba94890733a821f005e64589e6501cd56fcfb75f13caba5a1c43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60b7df38104ee20012ba1bc93ec25454d26c265bc220165e56e4a1d178c5239b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b7df38104ee20012ba1bc93ec25454d26c265bc220165e56e4a1d178c5239b->enter($__internal_60b7df38104ee20012ba1bc93ec25454d26c265bc220165e56e4a1d178c5239b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_60b7df38104ee20012ba1bc93ec25454d26c265bc220165e56e4a1d178c5239b->leave($__internal_60b7df38104ee20012ba1bc93ec25454d26c265bc220165e56e4a1d178c5239b_prof);

        
        $__internal_2892ab3fc09ba94890733a821f005e64589e6501cd56fcfb75f13caba5a1c43c->leave($__internal_2892ab3fc09ba94890733a821f005e64589e6501cd56fcfb75f13caba5a1c43c_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_eadd3b6d3ce5b1689d11d2041142f3838adf231bbd4a936e8d9ed4c77d25f1be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadd3b6d3ce5b1689d11d2041142f3838adf231bbd4a936e8d9ed4c77d25f1be->enter($__internal_eadd3b6d3ce5b1689d11d2041142f3838adf231bbd4a936e8d9ed4c77d25f1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_15266fbf77dd92a016615ec1c2d1ccad0efdb47a35c4dbb4d5bcc276d03dae0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15266fbf77dd92a016615ec1c2d1ccad0efdb47a35c4dbb4d5bcc276d03dae0f->enter($__internal_15266fbf77dd92a016615ec1c2d1ccad0efdb47a35c4dbb4d5bcc276d03dae0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Inscription</li>
    </ol>
";
        
        $__internal_15266fbf77dd92a016615ec1c2d1ccad0efdb47a35c4dbb4d5bcc276d03dae0f->leave($__internal_15266fbf77dd92a016615ec1c2d1ccad0efdb47a35c4dbb4d5bcc276d03dae0f_prof);

        
        $__internal_eadd3b6d3ce5b1689d11d2041142f3838adf231bbd4a936e8d9ed4c77d25f1be->leave($__internal_eadd3b6d3ce5b1689d11d2041142f3838adf231bbd4a936e8d9ed4c77d25f1be_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_ee9ef3883789d763edaab098d513666c0d78b77bf66181ef71cc9732b27df01f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9ef3883789d763edaab098d513666c0d78b77bf66181ef71cc9732b27df01f->enter($__internal_ee9ef3883789d763edaab098d513666c0d78b77bf66181ef71cc9732b27df01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_25434312b1639a17a212d6160f806a8653e5e9b6c4586c9e50b8701453b8caa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25434312b1639a17a212d6160f806a8653e5e9b6c4586c9e50b8701453b8caa8->enter($__internal_25434312b1639a17a212d6160f806a8653e5e9b6c4586c9e50b8701453b8caa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
</div>

<script>
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
</script>

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
        
        $__internal_25434312b1639a17a212d6160f806a8653e5e9b6c4586c9e50b8701453b8caa8->leave($__internal_25434312b1639a17a212d6160f806a8653e5e9b6c4586c9e50b8701453b8caa8_prof);

        
        $__internal_ee9ef3883789d763edaab098d513666c0d78b77bf66181ef71cc9732b27df01f->leave($__internal_ee9ef3883789d763edaab098d513666c0d78b77bf66181ef71cc9732b27df01f_prof);

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
        return array (  157 => 51,  155 => 50,  148 => 44,  144 => 43,  137 => 38,  132 => 29,  128 => 28,  124 => 27,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  105 => 19,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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

                {#{{ form_label(form.formation, 'Formation') }}
                {{ form_errors(form.formation) }}
                {{ form_widget(form.formation) }}

                {{ form_label(form.nometablissement, 'Université') }}
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
{# Token CSRF
    {{ form_widget(form._token) }} #}
    {# , {'render_rest': false} #}
    {{ form_end(form) }}
</div>
</div>

<script>
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
</script>

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
