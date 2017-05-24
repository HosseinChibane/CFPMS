<?php

/* @DUDEEGOPlatform/back/langueThree.html.twig */
class __TwigTemplate_f0e24ab5757b331d934f3313ed59181ebb6caee120339318d6add3646af2a23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/langueThree.html.twig", 1);
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
        $__internal_2a6ac3598ba841482d3e03b3599c7f0d4898aa681bd9bd59520c1d4060343911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a6ac3598ba841482d3e03b3599c7f0d4898aa681bd9bd59520c1d4060343911->enter($__internal_2a6ac3598ba841482d3e03b3599c7f0d4898aa681bd9bd59520c1d4060343911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/langueThree.html.twig"));

        $__internal_1c8008b04710ee96586e32fa925715ab107b0bdfa4364bc6b91e76e26562a54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8008b04710ee96586e32fa925715ab107b0bdfa4364bc6b91e76e26562a54d->enter($__internal_1c8008b04710ee96586e32fa925715ab107b0bdfa4364bc6b91e76e26562a54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/langueThree.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a6ac3598ba841482d3e03b3599c7f0d4898aa681bd9bd59520c1d4060343911->leave($__internal_2a6ac3598ba841482d3e03b3599c7f0d4898aa681bd9bd59520c1d4060343911_prof);

        
        $__internal_1c8008b04710ee96586e32fa925715ab107b0bdfa4364bc6b91e76e26562a54d->leave($__internal_1c8008b04710ee96586e32fa925715ab107b0bdfa4364bc6b91e76e26562a54d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbec82d957f141d38fe931ea1933acad55084fa4e637dac81f5b2fea42f1bb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbec82d957f141d38fe931ea1933acad55084fa4e637dac81f5b2fea42f1bb25->enter($__internal_cbec82d957f141d38fe931ea1933acad55084fa4e637dac81f5b2fea42f1bb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c146ce67b167d8227b034bbde8b6a4ac9f29652e3582af2b440cd1c99f76339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c146ce67b167d8227b034bbde8b6a4ac9f29652e3582af2b440cd1c99f76339->enter($__internal_4c146ce67b167d8227b034bbde8b6a4ac9f29652e3582af2b440cd1c99f76339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4c146ce67b167d8227b034bbde8b6a4ac9f29652e3582af2b440cd1c99f76339->leave($__internal_4c146ce67b167d8227b034bbde8b6a4ac9f29652e3582af2b440cd1c99f76339_prof);

        
        $__internal_cbec82d957f141d38fe931ea1933acad55084fa4e637dac81f5b2fea42f1bb25->leave($__internal_cbec82d957f141d38fe931ea1933acad55084fa4e637dac81f5b2fea42f1bb25_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_51a2a85c07949d58e6ad3cf096709d968e697ae0819a98c68be5bd23d0fb4104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a2a85c07949d58e6ad3cf096709d968e697ae0819a98c68be5bd23d0fb4104->enter($__internal_51a2a85c07949d58e6ad3cf096709d968e697ae0819a98c68be5bd23d0fb4104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_bf727b76ceb4f5fded8b2ac463b3661be002d6de5149ca541671d814b42840a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf727b76ceb4f5fded8b2ac463b3661be002d6de5149ca541671d814b42840a1->enter($__internal_bf727b76ceb4f5fded8b2ac463b3661be002d6de5149ca541671d814b42840a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_bf727b76ceb4f5fded8b2ac463b3661be002d6de5149ca541671d814b42840a1->leave($__internal_bf727b76ceb4f5fded8b2ac463b3661be002d6de5149ca541671d814b42840a1_prof);

        
        $__internal_51a2a85c07949d58e6ad3cf096709d968e697ae0819a98c68be5bd23d0fb4104->leave($__internal_51a2a85c07949d58e6ad3cf096709d968e697ae0819a98c68be5bd23d0fb4104_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/langueThree.html.twig";
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
", "@DUDEEGOPlatform/back/langueThree.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\langueThree.html.twig");
    }
}
