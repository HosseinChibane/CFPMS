<?php

/* frontend/content.html.twig */
class __TwigTemplate_39d7033ec4cc490feb4126b95868d9475c9cc9e1a3220053b7014f39470a02a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d7bb4d232f8544d2e570eea81d8429b0bead352836bd0b3432c1be0decb6a7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d7bb4d232f8544d2e570eea81d8429b0bead352836bd0b3432c1be0decb6a7f->enter($__internal_3d7bb4d232f8544d2e570eea81d8429b0bead352836bd0b3432c1be0decb6a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/content.html.twig"));

        $__internal_0a136d9aaac24c61cf79fb6569ab5fea70974946de19bde3d4990b7a110cabaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a136d9aaac24c61cf79fb6569ab5fea70974946de19bde3d4990b7a110cabaa->enter($__internal_0a136d9aaac24c61cf79fb6569ab5fea70974946de19bde3d4990b7a110cabaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/content.html.twig"));

        // line 2
        $this->loadTemplate(":frontend:carousel.html.twig", "frontend/content.html.twig", 2)->display($context);
        // line 3
        echo "<div class=\"container\">
\t";
        // line 5
        echo "\t";
        $this->loadTemplate(":frontend:welcome.html.twig", "frontend/content.html.twig", 5)->display($context);
        // line 6
        echo "\t";
        // line 7
        echo "\t";
        $this->loadTemplate(":frontend:formation.html.twig", "frontend/content.html.twig", 7)->display($context);
        // line 8
        echo "\t<hr>
\t";
        // line 10
        echo "\t";
        $this->loadTemplate(":frontend:temoignage.html.twig", "frontend/content.html.twig", 10)->display($context);
        // line 11
        echo "\t<hr>
\t";
        // line 13
        echo "\t";
        $this->loadTemplate(":frontend:about.html.twig", "frontend/content.html.twig", 13)->display($context);
        // line 14
        echo "</div>";
        
        $__internal_3d7bb4d232f8544d2e570eea81d8429b0bead352836bd0b3432c1be0decb6a7f->leave($__internal_3d7bb4d232f8544d2e570eea81d8429b0bead352836bd0b3432c1be0decb6a7f_prof);

        
        $__internal_0a136d9aaac24c61cf79fb6569ab5fea70974946de19bde3d4990b7a110cabaa->leave($__internal_0a136d9aaac24c61cf79fb6569ab5fea70974946de19bde3d4990b7a110cabaa_prof);

    }

    public function getTemplateName()
    {
        return "frontend/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 14,  47 => 13,  44 => 11,  41 => 10,  38 => 8,  35 => 7,  33 => 6,  30 => 5,  27 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Contenu de la balise header / Carrousel #}
{% include ':frontend:carousel.html.twig' %}
<div class=\"container\">
\t{# Contenu : Marketing Icons Section #}
\t{% include ':frontend:welcome.html.twig' %}
\t{# Contenu : Portfolio Section #}
\t{% include ':frontend:formation.html.twig' %}
\t<hr>
\t{# Contenu : Features Section #}
\t{% include ':frontend:temoignage.html.twig' %}
\t<hr>
\t{# Contenu : Action Section #}
\t{% include ':frontend:about.html.twig' %}
</div>", "frontend/content.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\views\\frontend\\content.html.twig");
    }
}
