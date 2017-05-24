<?php

/* DUDEEGOPlatformBundle:back:universiteThree.html.twig */
class __TwigTemplate_9cd26a9c2446f063b6aa55570cf262a12b056e0c086095ecca5586f335c9fdec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:universiteThree.html.twig", 1);
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
        $__internal_4a4ab3f6bfed4eda6bfd0e4fc4675f4f00d625d5c36fe52943b40ee70793b436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4ab3f6bfed4eda6bfd0e4fc4675f4f00d625d5c36fe52943b40ee70793b436->enter($__internal_4a4ab3f6bfed4eda6bfd0e4fc4675f4f00d625d5c36fe52943b40ee70793b436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteThree.html.twig"));

        $__internal_225bbd8c867a0c011aa7b9a7b2193a67a4b21de9b5305e707374ae5f847c242c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_225bbd8c867a0c011aa7b9a7b2193a67a4b21de9b5305e707374ae5f847c242c->enter($__internal_225bbd8c867a0c011aa7b9a7b2193a67a4b21de9b5305e707374ae5f847c242c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a4ab3f6bfed4eda6bfd0e4fc4675f4f00d625d5c36fe52943b40ee70793b436->leave($__internal_4a4ab3f6bfed4eda6bfd0e4fc4675f4f00d625d5c36fe52943b40ee70793b436_prof);

        
        $__internal_225bbd8c867a0c011aa7b9a7b2193a67a4b21de9b5305e707374ae5f847c242c->leave($__internal_225bbd8c867a0c011aa7b9a7b2193a67a4b21de9b5305e707374ae5f847c242c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ccbf0440e580205d6976262704a8aaf0e0ee9e3925ec41eccf21a8ec95f329dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbf0440e580205d6976262704a8aaf0e0ee9e3925ec41eccf21a8ec95f329dd->enter($__internal_ccbf0440e580205d6976262704a8aaf0e0ee9e3925ec41eccf21a8ec95f329dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52f85fbf90892840a0a37fcfd386def2f5cbe6608d2c523a007f0483e41dd6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52f85fbf90892840a0a37fcfd386def2f5cbe6608d2c523a007f0483e41dd6d2->enter($__internal_52f85fbf90892840a0a37fcfd386def2f5cbe6608d2c523a007f0483e41dd6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_52f85fbf90892840a0a37fcfd386def2f5cbe6608d2c523a007f0483e41dd6d2->leave($__internal_52f85fbf90892840a0a37fcfd386def2f5cbe6608d2c523a007f0483e41dd6d2_prof);

        
        $__internal_ccbf0440e580205d6976262704a8aaf0e0ee9e3925ec41eccf21a8ec95f329dd->leave($__internal_ccbf0440e580205d6976262704a8aaf0e0ee9e3925ec41eccf21a8ec95f329dd_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_857ef63443c31771af801ebabc0704a0e0c3d776fb43db84f8ac16a1c0d8d290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_857ef63443c31771af801ebabc0704a0e0c3d776fb43db84f8ac16a1c0d8d290->enter($__internal_857ef63443c31771af801ebabc0704a0e0c3d776fb43db84f8ac16a1c0d8d290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_6098ee294007c12cd245f2d14d39e91e125db9059306061b674c6065234289bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6098ee294007c12cd245f2d14d39e91e125db9059306061b674c6065234289bb->enter($__internal_6098ee294007c12cd245f2d14d39e91e125db9059306061b674c6065234289bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_universiteStepsOne");
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
        
        $__internal_6098ee294007c12cd245f2d14d39e91e125db9059306061b674c6065234289bb->leave($__internal_6098ee294007c12cd245f2d14d39e91e125db9059306061b674c6065234289bb_prof);

        
        $__internal_857ef63443c31771af801ebabc0704a0e0c3d776fb43db84f8ac16a1c0d8d290->leave($__internal_857ef63443c31771af801ebabc0704a0e0c3d776fb43db84f8ac16a1c0d8d290_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:universiteThree.html.twig";
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
  Inscription Université - {{ parent() }}
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
           <a class=\"btn btn-danger\" href=\"{{ path('dudeego_platform_abonne_universiteStepsOne') }}\">Retour à l'étape 1</a>
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
", "DUDEEGOPlatformBundle:back:universiteThree.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\universiteThree.html.twig");
    }
}
