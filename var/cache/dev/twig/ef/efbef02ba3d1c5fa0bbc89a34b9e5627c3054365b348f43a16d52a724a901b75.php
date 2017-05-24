<?php

/* DUDEEGOPlatformBundle:back:universiteThree.html.twig */
class __TwigTemplate_938aaf84a877092ef3bd1daee42b765f86db1ccf82ca8ccadf4e4ea4095cd53f extends Twig_Template
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
        $__internal_4aa1b2d1e785e18ac38d54bfef3fc3958bbfe91a001bdd067428b1b453af8932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa1b2d1e785e18ac38d54bfef3fc3958bbfe91a001bdd067428b1b453af8932->enter($__internal_4aa1b2d1e785e18ac38d54bfef3fc3958bbfe91a001bdd067428b1b453af8932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteThree.html.twig"));

        $__internal_6bf1a2f9a1f7fa6d7e0bce3f8af1cb0fb98d95b25b581f92acf959dc63906cb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bf1a2f9a1f7fa6d7e0bce3f8af1cb0fb98d95b25b581f92acf959dc63906cb1->enter($__internal_6bf1a2f9a1f7fa6d7e0bce3f8af1cb0fb98d95b25b581f92acf959dc63906cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aa1b2d1e785e18ac38d54bfef3fc3958bbfe91a001bdd067428b1b453af8932->leave($__internal_4aa1b2d1e785e18ac38d54bfef3fc3958bbfe91a001bdd067428b1b453af8932_prof);

        
        $__internal_6bf1a2f9a1f7fa6d7e0bce3f8af1cb0fb98d95b25b581f92acf959dc63906cb1->leave($__internal_6bf1a2f9a1f7fa6d7e0bce3f8af1cb0fb98d95b25b581f92acf959dc63906cb1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecfca38627937f00ca993eec4eef7b594726540df0a079bafa69a5b9e61ca56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecfca38627937f00ca993eec4eef7b594726540df0a079bafa69a5b9e61ca56c->enter($__internal_ecfca38627937f00ca993eec4eef7b594726540df0a079bafa69a5b9e61ca56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_541dbd2caa8f468ff3b4cc98485f49db79fddabd77d93321b6a96b95c6d090d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_541dbd2caa8f468ff3b4cc98485f49db79fddabd77d93321b6a96b95c6d090d2->enter($__internal_541dbd2caa8f468ff3b4cc98485f49db79fddabd77d93321b6a96b95c6d090d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_541dbd2caa8f468ff3b4cc98485f49db79fddabd77d93321b6a96b95c6d090d2->leave($__internal_541dbd2caa8f468ff3b4cc98485f49db79fddabd77d93321b6a96b95c6d090d2_prof);

        
        $__internal_ecfca38627937f00ca993eec4eef7b594726540df0a079bafa69a5b9e61ca56c->leave($__internal_ecfca38627937f00ca993eec4eef7b594726540df0a079bafa69a5b9e61ca56c_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_b3bd6dcbca224a338811662f27157b330730f9a54311ec0dad91dea8d12f007d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3bd6dcbca224a338811662f27157b330730f9a54311ec0dad91dea8d12f007d->enter($__internal_b3bd6dcbca224a338811662f27157b330730f9a54311ec0dad91dea8d12f007d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_e9e1433cd6481019d228275a39947ae104853ca352661621894c90b499d26d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e1433cd6481019d228275a39947ae104853ca352661621894c90b499d26d09->enter($__internal_e9e1433cd6481019d228275a39947ae104853ca352661621894c90b499d26d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_e9e1433cd6481019d228275a39947ae104853ca352661621894c90b499d26d09->leave($__internal_e9e1433cd6481019d228275a39947ae104853ca352661621894c90b499d26d09_prof);

        
        $__internal_b3bd6dcbca224a338811662f27157b330730f9a54311ec0dad91dea8d12f007d->leave($__internal_b3bd6dcbca224a338811662f27157b330730f9a54311ec0dad91dea8d12f007d_prof);

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
", "DUDEEGOPlatformBundle:back:universiteThree.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/universiteThree.html.twig");
    }
}
