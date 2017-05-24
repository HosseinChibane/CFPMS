<?php

/* @DUDEEGOPlatform/back/mesParametresMAIL.html.twig */
class __TwigTemplate_809d4a5332571bd9d6148832162af13757057678c903393eb781f47eef65d507 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/mesParametresMAIL.html.twig", 1);
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
        $__internal_8f06b2c9f9a350b73f47be76e4060de0f940ebba6fee16b9360088d6832b692e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f06b2c9f9a350b73f47be76e4060de0f940ebba6fee16b9360088d6832b692e->enter($__internal_8f06b2c9f9a350b73f47be76e4060de0f940ebba6fee16b9360088d6832b692e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/mesParametresMAIL.html.twig"));

        $__internal_9e7ea1ea08533ff1eecf000ee4718f715f6aa1a58db4b77a5d422a3d722a3d2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7ea1ea08533ff1eecf000ee4718f715f6aa1a58db4b77a5d422a3d722a3d2c->enter($__internal_9e7ea1ea08533ff1eecf000ee4718f715f6aa1a58db4b77a5d422a3d722a3d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/mesParametresMAIL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f06b2c9f9a350b73f47be76e4060de0f940ebba6fee16b9360088d6832b692e->leave($__internal_8f06b2c9f9a350b73f47be76e4060de0f940ebba6fee16b9360088d6832b692e_prof);

        
        $__internal_9e7ea1ea08533ff1eecf000ee4718f715f6aa1a58db4b77a5d422a3d722a3d2c->leave($__internal_9e7ea1ea08533ff1eecf000ee4718f715f6aa1a58db4b77a5d422a3d722a3d2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d89f72cf2fb57f7e220f1a53532a4b08df6990a4af04bce34cfc620df338d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d89f72cf2fb57f7e220f1a53532a4b08df6990a4af04bce34cfc620df338d11->enter($__internal_2d89f72cf2fb57f7e220f1a53532a4b08df6990a4af04bce34cfc620df338d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b88dc464972f7071dd66f0678d36b8f44fddb8cc3acc653473e150d2770477c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88dc464972f7071dd66f0678d36b8f44fddb8cc3acc653473e150d2770477c7->enter($__internal_b88dc464972f7071dd66f0678d36b8f44fddb8cc3acc653473e150d2770477c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_b88dc464972f7071dd66f0678d36b8f44fddb8cc3acc653473e150d2770477c7->leave($__internal_b88dc464972f7071dd66f0678d36b8f44fddb8cc3acc653473e150d2770477c7_prof);

        
        $__internal_2d89f72cf2fb57f7e220f1a53532a4b08df6990a4af04bce34cfc620df338d11->leave($__internal_2d89f72cf2fb57f7e220f1a53532a4b08df6990a4af04bce34cfc620df338d11_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_2fca042cd4657f0b739a0c48375e663b6442da0a1b0cf5ec6d876c2a47729eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fca042cd4657f0b739a0c48375e663b6442da0a1b0cf5ec6d876c2a47729eed->enter($__internal_2fca042cd4657f0b739a0c48375e663b6442da0a1b0cf5ec6d876c2a47729eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_369e9abf6429110b31f1b34147ff928dfd730fca4e18d8f269a01f3db383a658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369e9abf6429110b31f1b34147ff928dfd730fca4e18d8f269a01f3db383a658->enter($__internal_369e9abf6429110b31f1b34147ff928dfd730fca4e18d8f269a01f3db383a658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_369e9abf6429110b31f1b34147ff928dfd730fca4e18d8f269a01f3db383a658->leave($__internal_369e9abf6429110b31f1b34147ff928dfd730fca4e18d8f269a01f3db383a658_prof);

        
        $__internal_2fca042cd4657f0b739a0c48375e663b6442da0a1b0cf5ec6d876c2a47729eed->leave($__internal_2fca042cd4657f0b739a0c48375e663b6442da0a1b0cf5ec6d876c2a47729eed_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_73451802a1cb1f729bab416094429ad7d009062ba2cc92c994278b4f43c9569e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73451802a1cb1f729bab416094429ad7d009062ba2cc92c994278b4f43c9569e->enter($__internal_73451802a1cb1f729bab416094429ad7d009062ba2cc92c994278b4f43c9569e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_f77b09e03294a252ed270a73ac871a52830d4d84a34cc9b98c2d369fbb10f256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77b09e03294a252ed270a73ac871a52830d4d84a34cc9b98c2d369fbb10f256->enter($__internal_f77b09e03294a252ed270a73ac871a52830d4d84a34cc9b98c2d369fbb10f256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_f77b09e03294a252ed270a73ac871a52830d4d84a34cc9b98c2d369fbb10f256->leave($__internal_f77b09e03294a252ed270a73ac871a52830d4d84a34cc9b98c2d369fbb10f256_prof);

        
        $__internal_73451802a1cb1f729bab416094429ad7d009062ba2cc92c994278b4f43c9569e->leave($__internal_73451802a1cb1f729bab416094429ad7d009062ba2cc92c994278b4f43c9569e_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/mesParametresMAIL.html.twig";
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

{% endblock %}", "@DUDEEGOPlatform/back/mesParametresMAIL.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\mesParametresMAIL.html.twig");
    }
}
