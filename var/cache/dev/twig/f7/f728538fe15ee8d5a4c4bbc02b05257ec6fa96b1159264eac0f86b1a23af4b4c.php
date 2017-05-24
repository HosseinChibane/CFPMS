<?php

/* DUDEEGOPlatformBundle:back:preparationThree.html.twig */
class __TwigTemplate_c546957e0c15f82274d26f5945607bae443374300da76be0d0b09ee12a837edd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:preparationThree.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'BackContent' => array($this, 'block_BackContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b47ee97e0618383a08a88d1653c4fe1227792d66943b10b3d78e041d2045f991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47ee97e0618383a08a88d1653c4fe1227792d66943b10b3d78e041d2045f991->enter($__internal_b47ee97e0618383a08a88d1653c4fe1227792d66943b10b3d78e041d2045f991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:preparationThree.html.twig"));

        $__internal_d0f70ff1866fdea23412d673a2093ae9d833f836f7d0b4dcaba3c4fb3e05e18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f70ff1866fdea23412d673a2093ae9d833f836f7d0b4dcaba3c4fb3e05e18c->enter($__internal_d0f70ff1866fdea23412d673a2093ae9d833f836f7d0b4dcaba3c4fb3e05e18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:preparationThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47ee97e0618383a08a88d1653c4fe1227792d66943b10b3d78e041d2045f991->leave($__internal_b47ee97e0618383a08a88d1653c4fe1227792d66943b10b3d78e041d2045f991_prof);

        
        $__internal_d0f70ff1866fdea23412d673a2093ae9d833f836f7d0b4dcaba3c4fb3e05e18c->leave($__internal_d0f70ff1866fdea23412d673a2093ae9d833f836f7d0b4dcaba3c4fb3e05e18c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5759d3bdf6472c80fe0ca9ae0f1201c299f69b9093be8e312d4d0fab0fe415d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5759d3bdf6472c80fe0ca9ae0f1201c299f69b9093be8e312d4d0fab0fe415d2->enter($__internal_5759d3bdf6472c80fe0ca9ae0f1201c299f69b9093be8e312d4d0fab0fe415d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fb96a7a628929be316f9d946a4e2b2bf47125ac291201c2cd0bf6b3a768dc668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb96a7a628929be316f9d946a4e2b2bf47125ac291201c2cd0bf6b3a768dc668->enter($__internal_fb96a7a628929be316f9d946a4e2b2bf47125ac291201c2cd0bf6b3a768dc668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fb96a7a628929be316f9d946a4e2b2bf47125ac291201c2cd0bf6b3a768dc668->leave($__internal_fb96a7a628929be316f9d946a4e2b2bf47125ac291201c2cd0bf6b3a768dc668_prof);

        
        $__internal_5759d3bdf6472c80fe0ca9ae0f1201c299f69b9093be8e312d4d0fab0fe415d2->leave($__internal_5759d3bdf6472c80fe0ca9ae0f1201c299f69b9093be8e312d4d0fab0fe415d2_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_d0f0969d76f2e827f4a9afc603e07b92749f319453d31d4089d8ff6a17aa4e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f0969d76f2e827f4a9afc603e07b92749f319453d31d4089d8ff6a17aa4e87->enter($__internal_d0f0969d76f2e827f4a9afc603e07b92749f319453d31d4089d8ff6a17aa4e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_6ccca845862717c35e585e1d4db5f073d7c85e2f47564fce53a0f793fa4d65ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccca845862717c35e585e1d4db5f073d7c85e2f47564fce53a0f793fa4d65ae->enter($__internal_6ccca845862717c35e585e1d4db5f073d7c85e2f47564fce53a0f793fa4d65ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h2>Etape 3</h2>
      <p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         
      
      ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

      ";
        // line 15
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 16
            echo "        <div class=\"alert alert-error\">
          ";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
      ";
        }
        // line 20
        echo "
      <div class=\"form-group\">
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'label', array("label" => "Document d'Inscription"));
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "nom", array()), 'widget');
        echo "
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "pdfFile", array()), 'widget');
        echo "
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
           <a class=\"btn btn-danger\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_preparationStepsOne");
        echo "\">Retour à l'étape 1</a>
           ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "documentinscription", array()), "Enregistrer", array()), 'widget');
        echo "
         </div>
       </div>
     </div>

     ";
        // line 44
        echo "     ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

     ";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
   </div>
 </div>


";
        
        $__internal_6ccca845862717c35e585e1d4db5f073d7c85e2f47564fce53a0f793fa4d65ae->leave($__internal_6ccca845862717c35e585e1d4db5f073d7c85e2f47564fce53a0f793fa4d65ae_prof);

        
        $__internal_d0f0969d76f2e827f4a9afc603e07b92749f319453d31d4089d8ff6a17aa4e87->leave($__internal_d0f0969d76f2e827f4a9afc603e07b92749f319453d31d4089d8ff6a17aa4e87_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:preparationThree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 46,  135 => 44,  127 => 38,  123 => 37,  112 => 29,  103 => 23,  99 => 22,  95 => 20,  89 => 17,  86 => 16,  84 => 15,  79 => 13,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
  Inscription Préparation - {{ parent() }}
{% endblock %}

{% block BackContent %} 
  <div class=\"row\">
    <div class=\"col-md-12\">
      <h2>Etape 3</h2>
      <p>Veuillez joindre le(s) PDF precedent afin de valider votre demande pour que nous puissions la prendre en compte.</p>         
      
      {{ form_start(form) }}

      {% if not form.vars.valid %}
        <div class=\"alert alert-error\">
          {{ form_errors(form) }}
        </div>
      {% endif %}

      <div class=\"form-group\">
        {{ form_label(form.documentinscription.nom, 'Document d\\'Inscription') }}
        {{ form_widget(form.documentinscription.nom) }}
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
            {{ form_widget(form.documentinscription.pdfFile) }}
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"form-group\">
           <a class=\"btn btn-danger\" href=\"{{ path('dudeego_platform_abonne_preparationStepsOne') }}\">Retour à l'étape 1</a>
           {{ form_widget(form.documentinscription.Enregistrer) }}
         </div>
       </div>
     </div>

     {# Token CSRF #}
     {{ form_widget(form._token) }}

     {{ form_end(form, {'render_rest': false }) }}
   </div>
 </div>


{% endblock %}
", "DUDEEGOPlatformBundle:back:preparationThree.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/preparationThree.html.twig");
    }
}
