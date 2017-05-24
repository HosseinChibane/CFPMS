<?php

/* :frontend:content.html.twig */
class __TwigTemplate_60d2e371f443d0dfd3a173e39fc0ff7967388617feabaedef150e66a9dc3253f extends Twig_Template
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
        $__internal_82e021a448d1a91d963406bfc838940df0da237e8e348e4a28d843d5485da861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e021a448d1a91d963406bfc838940df0da237e8e348e4a28d843d5485da861->enter($__internal_82e021a448d1a91d963406bfc838940df0da237e8e348e4a28d843d5485da861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":frontend:content.html.twig"));

        $__internal_b58941cccce8565df3ddd8b40d74280b7c7d5d4fe0fff250530b4060b6dba2ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58941cccce8565df3ddd8b40d74280b7c7d5d4fe0fff250530b4060b6dba2ec->enter($__internal_b58941cccce8565df3ddd8b40d74280b7c7d5d4fe0fff250530b4060b6dba2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":frontend:content.html.twig"));

        // line 2
        $this->loadTemplate(":frontend:carousel.html.twig", ":frontend:content.html.twig", 2)->display($context);
        // line 3
        echo "<div class=\"container\">
\t";
        // line 5
        echo "\t";
        $this->loadTemplate(":frontend:welcome.html.twig", ":frontend:content.html.twig", 5)->display($context);
        // line 6
        echo "\t";
        // line 7
        echo "\t";
        $this->loadTemplate(":frontend:formation.html.twig", ":frontend:content.html.twig", 7)->display($context);
        // line 8
        echo "\t<hr>
\t";
        // line 10
        echo "\t";
        $this->loadTemplate(":frontend:temoignage.html.twig", ":frontend:content.html.twig", 10)->display($context);
        // line 11
        echo "\t<hr>
\t";
        // line 13
        echo "\t";
        $this->loadTemplate(":frontend:about.html.twig", ":frontend:content.html.twig", 13)->display($context);
        // line 14
        echo "</div>";
        
        $__internal_82e021a448d1a91d963406bfc838940df0da237e8e348e4a28d843d5485da861->leave($__internal_82e021a448d1a91d963406bfc838940df0da237e8e348e4a28d843d5485da861_prof);

        
        $__internal_b58941cccce8565df3ddd8b40d74280b7c7d5d4fe0fff250530b4060b6dba2ec->leave($__internal_b58941cccce8565df3ddd8b40d74280b7c7d5d4fe0fff250530b4060b6dba2ec_prof);

    }

    public function getTemplateName()
    {
        return ":frontend:content.html.twig";
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
</div>", ":frontend:content.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources\\views/frontend/content.html.twig");
    }
}
