<?php

/* DUDEEGOPlatformBundle:back:mesParametresMAIL.html.twig */
class __TwigTemplate_c70926296e604381e17af9cf20956257b02d518414dfa10ba8dc80b4f26bc4be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:mesParametresMAIL.html.twig", 1);
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
        $__internal_f686599abf27a4506afa053ff0fac6304edc486752a0524edacfba3616e09c9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f686599abf27a4506afa053ff0fac6304edc486752a0524edacfba3616e09c9c->enter($__internal_f686599abf27a4506afa053ff0fac6304edc486752a0524edacfba3616e09c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mesParametresMAIL.html.twig"));

        $__internal_80f431fc2e27979ccda440659b938c0b093567c114e2e18aa93dc4fd5b02db3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f431fc2e27979ccda440659b938c0b093567c114e2e18aa93dc4fd5b02db3a->enter($__internal_80f431fc2e27979ccda440659b938c0b093567c114e2e18aa93dc4fd5b02db3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f686599abf27a4506afa053ff0fac6304edc486752a0524edacfba3616e09c9c->leave($__internal_f686599abf27a4506afa053ff0fac6304edc486752a0524edacfba3616e09c9c_prof);

        
        $__internal_80f431fc2e27979ccda440659b938c0b093567c114e2e18aa93dc4fd5b02db3a->leave($__internal_80f431fc2e27979ccda440659b938c0b093567c114e2e18aa93dc4fd5b02db3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b17601cdd38463d966baec882b7aa59504a451b06b251b9eec352ca1f45cca9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b17601cdd38463d966baec882b7aa59504a451b06b251b9eec352ca1f45cca9->enter($__internal_2b17601cdd38463d966baec882b7aa59504a451b06b251b9eec352ca1f45cca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e32b6d51a6d310bc74c7e0423ebf3a4c5a35fd06832e7e9e521df20ffdfe6a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32b6d51a6d310bc74c7e0423ebf3a4c5a35fd06832e7e9e521df20ffdfe6a2b->enter($__internal_e32b6d51a6d310bc74c7e0423ebf3a4c5a35fd06832e7e9e521df20ffdfe6a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_e32b6d51a6d310bc74c7e0423ebf3a4c5a35fd06832e7e9e521df20ffdfe6a2b->leave($__internal_e32b6d51a6d310bc74c7e0423ebf3a4c5a35fd06832e7e9e521df20ffdfe6a2b_prof);

        
        $__internal_2b17601cdd38463d966baec882b7aa59504a451b06b251b9eec352ca1f45cca9->leave($__internal_2b17601cdd38463d966baec882b7aa59504a451b06b251b9eec352ca1f45cca9_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_faaeadbf93a1878fd428bb6b179ab404da28a680af4418d0c2fc432ea74b6a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_faaeadbf93a1878fd428bb6b179ab404da28a680af4418d0c2fc432ea74b6a88->enter($__internal_faaeadbf93a1878fd428bb6b179ab404da28a680af4418d0c2fc432ea74b6a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_01a88762bfb64e3de776e800737e8f5e01b5064662ce663ed5538fa5fbe7f0c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01a88762bfb64e3de776e800737e8f5e01b5064662ce663ed5538fa5fbe7f0c3->enter($__internal_01a88762bfb64e3de776e800737e8f5e01b5064662ce663ed5538fa5fbe7f0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_01a88762bfb64e3de776e800737e8f5e01b5064662ce663ed5538fa5fbe7f0c3->leave($__internal_01a88762bfb64e3de776e800737e8f5e01b5064662ce663ed5538fa5fbe7f0c3_prof);

        
        $__internal_faaeadbf93a1878fd428bb6b179ab404da28a680af4418d0c2fc432ea74b6a88->leave($__internal_faaeadbf93a1878fd428bb6b179ab404da28a680af4418d0c2fc432ea74b6a88_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_d0bd5486f30cc1e3ab71a895440fa2e5b214500c920c3dfd5dc601bd0d861494 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0bd5486f30cc1e3ab71a895440fa2e5b214500c920c3dfd5dc601bd0d861494->enter($__internal_d0bd5486f30cc1e3ab71a895440fa2e5b214500c920c3dfd5dc601bd0d861494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_24adeef8e57b43259e226db9259646280ab7e6a832378adf7ba944c9287a5438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24adeef8e57b43259e226db9259646280ab7e6a832378adf7ba944c9287a5438->enter($__internal_24adeef8e57b43259e226db9259646280ab7e6a832378adf7ba944c9287a5438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 


<!-- Mes Parametres -->
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
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
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> ";
        // line 31
        echo "    </div>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>

";
        
        $__internal_24adeef8e57b43259e226db9259646280ab7e6a832378adf7ba944c9287a5438->leave($__internal_24adeef8e57b43259e226db9259646280ab7e6a832378adf7ba944c9287a5438_prof);

        
        $__internal_d0bd5486f30cc1e3ab71a895440fa2e5b214500c920c3dfd5dc601bd0d861494->leave($__internal_d0bd5486f30cc1e3ab71a895440fa2e5b214500c920c3dfd5dc601bd0d861494_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:mesParametresMAIL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  130 => 31,  125 => 28,  120 => 25,  114 => 22,  111 => 21,  109 => 20,  104 => 18,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}

{% if not form.vars.valid %}
  <div class=\"alert alert-error\">
    {{ form_errors(form) }}
  </div>
{% endif %}

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"Enregistrer\" /> {#value=\"{{ 'profile.edit.submit'|trans }}\" #}
    </div>
    {{ form_end(form) }}
  </div>
</div>

{% endblock %}", "DUDEEGOPlatformBundle:back:mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/mesParametresMAIL.html.twig");
    }
}
