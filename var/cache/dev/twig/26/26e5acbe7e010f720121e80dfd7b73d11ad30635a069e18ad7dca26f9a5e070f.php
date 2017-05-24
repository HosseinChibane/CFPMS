<?php

/* @DUDEEGOPlatform/back/mesParametres.html.twig */
class __TwigTemplate_ad0adf92fc33e99a71f80ba8ea867caaa79ef235fde5f1986e739db5d6d55533 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/mesParametres.html.twig", 1);
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
        $__internal_e003f10fc70ac0f43d261e81af9daaab54fb382f369a0dba015feb21094188f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e003f10fc70ac0f43d261e81af9daaab54fb382f369a0dba015feb21094188f1->enter($__internal_e003f10fc70ac0f43d261e81af9daaab54fb382f369a0dba015feb21094188f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/mesParametres.html.twig"));

        $__internal_6265a17bbebf8e902d37ada8d2e4da2e1b7916ebe54478ab7f7de8a0eb1a306c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6265a17bbebf8e902d37ada8d2e4da2e1b7916ebe54478ab7f7de8a0eb1a306c->enter($__internal_6265a17bbebf8e902d37ada8d2e4da2e1b7916ebe54478ab7f7de8a0eb1a306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/mesParametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e003f10fc70ac0f43d261e81af9daaab54fb382f369a0dba015feb21094188f1->leave($__internal_e003f10fc70ac0f43d261e81af9daaab54fb382f369a0dba015feb21094188f1_prof);

        
        $__internal_6265a17bbebf8e902d37ada8d2e4da2e1b7916ebe54478ab7f7de8a0eb1a306c->leave($__internal_6265a17bbebf8e902d37ada8d2e4da2e1b7916ebe54478ab7f7de8a0eb1a306c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd647fe7ddd1b6ed366c241c326e7c8dc2f9bb86d232cf357007835156922e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd647fe7ddd1b6ed366c241c326e7c8dc2f9bb86d232cf357007835156922e64->enter($__internal_dd647fe7ddd1b6ed366c241c326e7c8dc2f9bb86d232cf357007835156922e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d47f19d660a493ae934ba2b6466f20d1a41c5323776443f1a31896e6e4b6a325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47f19d660a493ae934ba2b6466f20d1a41c5323776443f1a31896e6e4b6a325->enter($__internal_d47f19d660a493ae934ba2b6466f20d1a41c5323776443f1a31896e6e4b6a325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d47f19d660a493ae934ba2b6466f20d1a41c5323776443f1a31896e6e4b6a325->leave($__internal_d47f19d660a493ae934ba2b6466f20d1a41c5323776443f1a31896e6e4b6a325_prof);

        
        $__internal_dd647fe7ddd1b6ed366c241c326e7c8dc2f9bb86d232cf357007835156922e64->leave($__internal_dd647fe7ddd1b6ed366c241c326e7c8dc2f9bb86d232cf357007835156922e64_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_fa99f97308dface69b19985460d833aa697d8082ca1675d49d01976290d5e17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa99f97308dface69b19985460d833aa697d8082ca1675d49d01976290d5e17e->enter($__internal_fa99f97308dface69b19985460d833aa697d8082ca1675d49d01976290d5e17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_e695ea31aff517af69ba6de31f4589a0a721f06614b31543240830617455d683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e695ea31aff517af69ba6de31f4589a0a721f06614b31543240830617455d683->enter($__internal_e695ea31aff517af69ba6de31f4589a0a721f06614b31543240830617455d683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_e695ea31aff517af69ba6de31f4589a0a721f06614b31543240830617455d683->leave($__internal_e695ea31aff517af69ba6de31f4589a0a721f06614b31543240830617455d683_prof);

        
        $__internal_fa99f97308dface69b19985460d833aa697d8082ca1675d49d01976290d5e17e->leave($__internal_fa99f97308dface69b19985460d833aa697d8082ca1675d49d01976290d5e17e_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/mesParametres.html.twig";
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
{% endblock %}", "@DUDEEGOPlatform/back/mesParametres.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\mesParametres.html.twig");
    }
}
