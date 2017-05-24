<?php

/* DUDEEGOPlatformBundle:back:mesParametres.html.twig */
class __TwigTemplate_8949b3ba1dc41d832d5aff9ccdd8e1ed853b6e006e26b1a9058c705741799c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:mesParametres.html.twig", 1);
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
        $__internal_a3134059d62eb1075769f3226d5b4302d9479113abac487ff5c8537859d61d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3134059d62eb1075769f3226d5b4302d9479113abac487ff5c8537859d61d8e->enter($__internal_a3134059d62eb1075769f3226d5b4302d9479113abac487ff5c8537859d61d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mesParametres.html.twig"));

        $__internal_ba40356efddc2725261cbf671033426ff9e04a6ab6608ebd13eaf088faa696f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba40356efddc2725261cbf671033426ff9e04a6ab6608ebd13eaf088faa696f4->enter($__internal_ba40356efddc2725261cbf671033426ff9e04a6ab6608ebd13eaf088faa696f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3134059d62eb1075769f3226d5b4302d9479113abac487ff5c8537859d61d8e->leave($__internal_a3134059d62eb1075769f3226d5b4302d9479113abac487ff5c8537859d61d8e_prof);

        
        $__internal_ba40356efddc2725261cbf671033426ff9e04a6ab6608ebd13eaf088faa696f4->leave($__internal_ba40356efddc2725261cbf671033426ff9e04a6ab6608ebd13eaf088faa696f4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2187fe333511f9477f0a87f0de6455d1329f96cdb2a08f04d382871d0251c12e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2187fe333511f9477f0a87f0de6455d1329f96cdb2a08f04d382871d0251c12e->enter($__internal_2187fe333511f9477f0a87f0de6455d1329f96cdb2a08f04d382871d0251c12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ef26f62f35e89cc277af9a28e0dd70d4b4ac4976892ebd47f863cb84a169e7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef26f62f35e89cc277af9a28e0dd70d4b4ac4976892ebd47f863cb84a169e7b5->enter($__internal_ef26f62f35e89cc277af9a28e0dd70d4b4ac4976892ebd47f863cb84a169e7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ef26f62f35e89cc277af9a28e0dd70d4b4ac4976892ebd47f863cb84a169e7b5->leave($__internal_ef26f62f35e89cc277af9a28e0dd70d4b4ac4976892ebd47f863cb84a169e7b5_prof);

        
        $__internal_2187fe333511f9477f0a87f0de6455d1329f96cdb2a08f04d382871d0251c12e->leave($__internal_2187fe333511f9477f0a87f0de6455d1329f96cdb2a08f04d382871d0251c12e_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_3f10e4981dc36275470953e7959fb08ca0924df49d70993afef6103e016cb3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f10e4981dc36275470953e7959fb08ca0924df49d70993afef6103e016cb3c2->enter($__internal_3f10e4981dc36275470953e7959fb08ca0924df49d70993afef6103e016cb3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_77a93c7fc6575c290b29f7a4f35145ef225a1bcdbe3771fc6435117e88dfd2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a93c7fc6575c290b29f7a4f35145ef225a1bcdbe3771fc6435117e88dfd2b1->enter($__internal_77a93c7fc6575c290b29f7a4f35145ef225a1bcdbe3771fc6435117e88dfd2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
  <!-- Mes Parametres -->
  ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  
  ";
        // line 11
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 12
            echo "    <div class=\"alert alert-error\">
      ";
            // line 13
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
    </div>
  ";
        }
        // line 16
        echo "
  <div class=\"col-md-5\">
    <div class=\"form-group\">
      <div>
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
       ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
       ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit"), "html", null, true);
        echo "\" />
      </div>
      ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>            
  </div>      
  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, ($context["form"] ?? $this->getContext($context, "form")));
        echo "
    ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit"), "html", null, true);
        echo "\" />
    </div>
    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

  </div>
</div>
";
        
        $__internal_77a93c7fc6575c290b29f7a4f35145ef225a1bcdbe3771fc6435117e88dfd2b1->leave($__internal_77a93c7fc6575c290b29f7a4f35145ef225a1bcdbe3771fc6435117e88dfd2b1_prof);

        
        $__internal_3f10e4981dc36275470953e7959fb08ca0924df49d70993afef6103e016cb3c2->leave($__internal_3f10e4981dc36275470953e7959fb08ca0924df49d70993afef6103e016cb3c2_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:mesParametres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  142 => 38,  137 => 36,  133 => 35,  129 => 34,  121 => 29,  115 => 26,  110 => 24,  105 => 22,  101 => 21,  97 => 20,  91 => 16,  85 => 13,  82 => 12,  80 => 11,  75 => 9,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
        {{dump(form)}}
       {{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
       {{ form_widget(form) }}
       <div>
        <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'change_password.submit'|trans }}\" />
      </div>
      {{ form_end(form) }}
    </div>            
  </div>      
  {{ form_end(form) }}
</div>

<div class=\"col-md-5\">
  <div class=\"form-group\">
    {{dump(form)}}
    {{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
      <input type=\"submit\" class=\"btn btn-primary\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
    {{ form_end(form) }}

  </div>
</div>
{% endblock %}", "DUDEEGOPlatformBundle:back:mesParametres.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/mesParametres.html.twig");
    }
}
