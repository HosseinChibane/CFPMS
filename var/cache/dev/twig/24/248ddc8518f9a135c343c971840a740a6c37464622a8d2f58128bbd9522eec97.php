<?php

/* @DUDEEGOPlatform/back/mesParametresMDP.html.twig */
class __TwigTemplate_bf1df7dfe0da84cba31bbb826c3fd60630eb968c64f779873611868f8f958350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/mesParametresMDP.html.twig", 1);
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
        $__internal_1e46c25fcf9a96e30bf6025da83144467663921735298c32f64a7fa2f2270404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e46c25fcf9a96e30bf6025da83144467663921735298c32f64a7fa2f2270404->enter($__internal_1e46c25fcf9a96e30bf6025da83144467663921735298c32f64a7fa2f2270404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/mesParametresMDP.html.twig"));

        $__internal_836401c93cf1d7d72adb7ade232af92b083134d18e1fbe5822c4314c00cc05b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836401c93cf1d7d72adb7ade232af92b083134d18e1fbe5822c4314c00cc05b4->enter($__internal_836401c93cf1d7d72adb7ade232af92b083134d18e1fbe5822c4314c00cc05b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/mesParametresMDP.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e46c25fcf9a96e30bf6025da83144467663921735298c32f64a7fa2f2270404->leave($__internal_1e46c25fcf9a96e30bf6025da83144467663921735298c32f64a7fa2f2270404_prof);

        
        $__internal_836401c93cf1d7d72adb7ade232af92b083134d18e1fbe5822c4314c00cc05b4->leave($__internal_836401c93cf1d7d72adb7ade232af92b083134d18e1fbe5822c4314c00cc05b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc9261919d79140d1e5f215ac998c5057587c2944cbf5077668a2e0925a87233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc9261919d79140d1e5f215ac998c5057587c2944cbf5077668a2e0925a87233->enter($__internal_dc9261919d79140d1e5f215ac998c5057587c2944cbf5077668a2e0925a87233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d8f2b3d2e95508c9beea4c6a1790f9884ba7e23f7ff33c822657cd2593da42d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8f2b3d2e95508c9beea4c6a1790f9884ba7e23f7ff33c822657cd2593da42d6->enter($__internal_d8f2b3d2e95508c9beea4c6a1790f9884ba7e23f7ff33c822657cd2593da42d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Mes Parametres - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d8f2b3d2e95508c9beea4c6a1790f9884ba7e23f7ff33c822657cd2593da42d6->leave($__internal_d8f2b3d2e95508c9beea4c6a1790f9884ba7e23f7ff33c822657cd2593da42d6_prof);

        
        $__internal_dc9261919d79140d1e5f215ac998c5057587c2944cbf5077668a2e0925a87233->leave($__internal_dc9261919d79140d1e5f215ac998c5057587c2944cbf5077668a2e0925a87233_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_746cf5592f48c30928f1f5a025c0fadf98aef9d908f59b95785ac727d5c74e69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746cf5592f48c30928f1f5a025c0fadf98aef9d908f59b95785ac727d5c74e69->enter($__internal_746cf5592f48c30928f1f5a025c0fadf98aef9d908f59b95785ac727d5c74e69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_dbddd1c105a7793f88fe5ecc66703eeb554a579b3b1272ce9df5a018eae2dc5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbddd1c105a7793f88fe5ecc66703eeb554a579b3b1272ce9df5a018eae2dc5a->enter($__internal_dbddd1c105a7793f88fe5ecc66703eeb554a579b3b1272ce9df5a018eae2dc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Paramètres</li>
    </ol>
";
        
        $__internal_dbddd1c105a7793f88fe5ecc66703eeb554a579b3b1272ce9df5a018eae2dc5a->leave($__internal_dbddd1c105a7793f88fe5ecc66703eeb554a579b3b1272ce9df5a018eae2dc5a_prof);

        
        $__internal_746cf5592f48c30928f1f5a025c0fadf98aef9d908f59b95785ac727d5c74e69->leave($__internal_746cf5592f48c30928f1f5a025c0fadf98aef9d908f59b95785ac727d5c74e69_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_c8c673aefb1ea022952e672ac3b4338dd7d6a48c40239bf5f72c87ac174c3dbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c673aefb1ea022952e672ac3b4338dd7d6a48c40239bf5f72c87ac174c3dbb->enter($__internal_c8c673aefb1ea022952e672ac3b4338dd7d6a48c40239bf5f72c87ac174c3dbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_48da6e213c74ca23c22e174ffd3cdaaffaa7d552398d209fef8802160446ad61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48da6e213c74ca23c22e174ffd3cdaaffaa7d552398d209fef8802160446ad61->enter($__internal_48da6e213c74ca23c22e174ffd3cdaaffaa7d552398d209fef8802160446ad61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_48da6e213c74ca23c22e174ffd3cdaaffaa7d552398d209fef8802160446ad61->leave($__internal_48da6e213c74ca23c22e174ffd3cdaaffaa7d552398d209fef8802160446ad61_prof);

        
        $__internal_c8c673aefb1ea022952e672ac3b4338dd7d6a48c40239bf5f72c87ac174c3dbb->leave($__internal_c8c673aefb1ea022952e672ac3b4338dd7d6a48c40239bf5f72c87ac174c3dbb_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/mesParametresMDP.html.twig";
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
{% endblock %}", "@DUDEEGOPlatform/back/mesParametresMDP.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\mesParametresMDP.html.twig");
    }
}
