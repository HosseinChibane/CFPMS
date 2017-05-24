<?php

/* DUDEEGOPlatformBundle:back:langueThree.html.twig */
class __TwigTemplate_4a25532c3a027e395ec61c98f2f049b1a65c161ae97cd923bce3df1d26c6e41e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:langueThree.html.twig", 1);
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
        $__internal_96ff6257995e48612f2edee2510eddf9afb432b5dbedf96e87eddc914707576a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96ff6257995e48612f2edee2510eddf9afb432b5dbedf96e87eddc914707576a->enter($__internal_96ff6257995e48612f2edee2510eddf9afb432b5dbedf96e87eddc914707576a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:langueThree.html.twig"));

        $__internal_219933dac99e5951c93f0cf7108e5bb8d65e8be86503f9c3e5683cbf6ace9b2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219933dac99e5951c93f0cf7108e5bb8d65e8be86503f9c3e5683cbf6ace9b2e->enter($__internal_219933dac99e5951c93f0cf7108e5bb8d65e8be86503f9c3e5683cbf6ace9b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96ff6257995e48612f2edee2510eddf9afb432b5dbedf96e87eddc914707576a->leave($__internal_96ff6257995e48612f2edee2510eddf9afb432b5dbedf96e87eddc914707576a_prof);

        
        $__internal_219933dac99e5951c93f0cf7108e5bb8d65e8be86503f9c3e5683cbf6ace9b2e->leave($__internal_219933dac99e5951c93f0cf7108e5bb8d65e8be86503f9c3e5683cbf6ace9b2e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_702e0afb344936d7cdfec72769f20ec6b4cc12727e59429ffe53f8718ffa8160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702e0afb344936d7cdfec72769f20ec6b4cc12727e59429ffe53f8718ffa8160->enter($__internal_702e0afb344936d7cdfec72769f20ec6b4cc12727e59429ffe53f8718ffa8160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7cfb9a27d6beb326017b49a3200e7102aefb2971c44cc255da485d64ec017d86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfb9a27d6beb326017b49a3200e7102aefb2971c44cc255da485d64ec017d86->enter($__internal_7cfb9a27d6beb326017b49a3200e7102aefb2971c44cc255da485d64ec017d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7cfb9a27d6beb326017b49a3200e7102aefb2971c44cc255da485d64ec017d86->leave($__internal_7cfb9a27d6beb326017b49a3200e7102aefb2971c44cc255da485d64ec017d86_prof);

        
        $__internal_702e0afb344936d7cdfec72769f20ec6b4cc12727e59429ffe53f8718ffa8160->leave($__internal_702e0afb344936d7cdfec72769f20ec6b4cc12727e59429ffe53f8718ffa8160_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_fd2d01a447a2ba4050dd007a3d56c477523e3a318201e338ae80c4b4f5038f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd2d01a447a2ba4050dd007a3d56c477523e3a318201e338ae80c4b4f5038f2c->enter($__internal_fd2d01a447a2ba4050dd007a3d56c477523e3a318201e338ae80c4b4f5038f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_3beb87da29139c02e37607285c714bbbe8394b65c412c5d657db00a67dcacfb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3beb87da29139c02e37607285c714bbbe8394b65c412c5d657db00a67dcacfb8->enter($__internal_3beb87da29139c02e37607285c714bbbe8394b65c412c5d657db00a67dcacfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_langueStepsOne");
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
        
        $__internal_3beb87da29139c02e37607285c714bbbe8394b65c412c5d657db00a67dcacfb8->leave($__internal_3beb87da29139c02e37607285c714bbbe8394b65c412c5d657db00a67dcacfb8_prof);

        
        $__internal_fd2d01a447a2ba4050dd007a3d56c477523e3a318201e338ae80c4b4f5038f2c->leave($__internal_fd2d01a447a2ba4050dd007a3d56c477523e3a318201e338ae80c4b4f5038f2c_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:langueThree.html.twig";
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
  Inscription Langue - {{ parent() }}
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
           <a class=\"btn btn-danger\" href=\"{{ path('dudeego_platform_abonne_langueStepsOne') }}\">Retour à l'étape 1</a>
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
", "DUDEEGOPlatformBundle:back:langueThree.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/langueThree.html.twig");
    }
}
