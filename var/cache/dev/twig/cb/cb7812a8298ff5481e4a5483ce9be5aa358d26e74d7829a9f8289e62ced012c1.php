<?php

/* DUDEEGOPlatformBundle:back:mesParametresMDP.html.twig */
class __TwigTemplate_9ea854a876a3dfc9dd0c8b76200b250dfcbf0669d0424655cc342542f2017482 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:mesParametresMDP.html.twig", 1);
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
        $__internal_75f6e650c83b58d14b0b31c7a7e1e184d9edb6af9a3aad89faec5795fbeb10d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f6e650c83b58d14b0b31c7a7e1e184d9edb6af9a3aad89faec5795fbeb10d4->enter($__internal_75f6e650c83b58d14b0b31c7a7e1e184d9edb6af9a3aad89faec5795fbeb10d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mesParametresMDP.html.twig"));

        $__internal_ec39f4fb569edfb6428faf99b4bbfeff4221eb92e0a7e06df22d17384fa8bfe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec39f4fb569edfb6428faf99b4bbfeff4221eb92e0a7e06df22d17384fa8bfe9->enter($__internal_ec39f4fb569edfb6428faf99b4bbfeff4221eb92e0a7e06df22d17384fa8bfe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75f6e650c83b58d14b0b31c7a7e1e184d9edb6af9a3aad89faec5795fbeb10d4->leave($__internal_75f6e650c83b58d14b0b31c7a7e1e184d9edb6af9a3aad89faec5795fbeb10d4_prof);

        
        $__internal_ec39f4fb569edfb6428faf99b4bbfeff4221eb92e0a7e06df22d17384fa8bfe9->leave($__internal_ec39f4fb569edfb6428faf99b4bbfeff4221eb92e0a7e06df22d17384fa8bfe9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7614a54877c28e82cd8cbb164bc48841e7f42aec92fd2e72681b665d6b2bb70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7614a54877c28e82cd8cbb164bc48841e7f42aec92fd2e72681b665d6b2bb70e->enter($__internal_7614a54877c28e82cd8cbb164bc48841e7f42aec92fd2e72681b665d6b2bb70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bfb3547c4fa662b081b7440ac3233a62ca9d201db9b0d64eea9a6b96e9c68bed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb3547c4fa662b081b7440ac3233a62ca9d201db9b0d64eea9a6b96e9c68bed->enter($__internal_bfb3547c4fa662b081b7440ac3233a62ca9d201db9b0d64eea9a6b96e9c68bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bfb3547c4fa662b081b7440ac3233a62ca9d201db9b0d64eea9a6b96e9c68bed->leave($__internal_bfb3547c4fa662b081b7440ac3233a62ca9d201db9b0d64eea9a6b96e9c68bed_prof);

        
        $__internal_7614a54877c28e82cd8cbb164bc48841e7f42aec92fd2e72681b665d6b2bb70e->leave($__internal_7614a54877c28e82cd8cbb164bc48841e7f42aec92fd2e72681b665d6b2bb70e_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_d3cea2590daa0a3bf98c31eb9ef985337eebcaa0fe3a7d75842a7e46433f724b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3cea2590daa0a3bf98c31eb9ef985337eebcaa0fe3a7d75842a7e46433f724b->enter($__internal_d3cea2590daa0a3bf98c31eb9ef985337eebcaa0fe3a7d75842a7e46433f724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_cd11889a499e8c27d6150574453ee06eab362e1e17d93b0ce0df05331c19bced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd11889a499e8c27d6150574453ee06eab362e1e17d93b0ce0df05331c19bced->enter($__internal_cd11889a499e8c27d6150574453ee06eab362e1e17d93b0ce0df05331c19bced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_cd11889a499e8c27d6150574453ee06eab362e1e17d93b0ce0df05331c19bced->leave($__internal_cd11889a499e8c27d6150574453ee06eab362e1e17d93b0ce0df05331c19bced_prof);

        
        $__internal_d3cea2590daa0a3bf98c31eb9ef985337eebcaa0fe3a7d75842a7e46433f724b->leave($__internal_d3cea2590daa0a3bf98c31eb9ef985337eebcaa0fe3a7d75842a7e46433f724b_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_1740842dc5c48ede46b5756025c54493de0f341c0a02a64b452fbe8252b382b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1740842dc5c48ede46b5756025c54493de0f341c0a02a64b452fbe8252b382b0->enter($__internal_1740842dc5c48ede46b5756025c54493de0f341c0a02a64b452fbe8252b382b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_6fb75750f477f715bd3af24e5344adad2edb77478ccae2184807a0bc8ceb9e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb75750f477f715bd3af24e5344adad2edb77478ccae2184807a0bc8ceb9e70->enter($__internal_6fb75750f477f715bd3af24e5344adad2edb77478ccae2184807a0bc8ceb9e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
 

<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

";
        // line 20
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 21
            echo "  <div class=\"alert alert-error\">
    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
  </div>
";
        }
        // line 25
        echo "
<div class=\"col-md-5\">
  <div class=\"form-group\">
    <div>
     ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
     ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 33
        echo "    </div>
    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>            
</div>      
";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_6fb75750f477f715bd3af24e5344adad2edb77478ccae2184807a0bc8ceb9e70->leave($__internal_6fb75750f477f715bd3af24e5344adad2edb77478ccae2184807a0bc8ceb9e70_prof);

        
        $__internal_1740842dc5c48ede46b5756025c54493de0f341c0a02a64b452fbe8252b382b0->leave($__internal_1740842dc5c48ede46b5756025c54493de0f341c0a02a64b452fbe8252b382b0_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:mesParametresMDP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  138 => 34,  135 => 33,  130 => 30,  126 => 29,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
  Mes Parametres - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
{% endblock %}

{% block BackContent %} 
 

<!-- Mes Parametres -->
{{ form_start(form) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    <div>
     {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
     {{ form_widget(form) }}
     <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'change_password.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>            
</div>      
{{ form_end(form) }}
</div>
{% endblock %}", "DUDEEGOPlatformBundle:back:mesParametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/mesParametresMDP.html.twig");
    }
}
