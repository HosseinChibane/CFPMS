<?php

/* DUDEEGOPlatformBundle:back:mutuelle.html.twig */
class __TwigTemplate_7547f4d08c6a8c96af5568988c720ba48735d0dc915ac78257ea61a49072457b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:mutuelle.html.twig", 1);
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
        $__internal_084fd00bab2a1b02a839fd08bd6a298ffb571e1d950af6db80a041578774287a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084fd00bab2a1b02a839fd08bd6a298ffb571e1d950af6db80a041578774287a->enter($__internal_084fd00bab2a1b02a839fd08bd6a298ffb571e1d950af6db80a041578774287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mutuelle.html.twig"));

        $__internal_f56601dff1b79f34b101228569c15914fc5f987af18daad35e3dc7b24969a125 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f56601dff1b79f34b101228569c15914fc5f987af18daad35e3dc7b24969a125->enter($__internal_f56601dff1b79f34b101228569c15914fc5f987af18daad35e3dc7b24969a125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mutuelle.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_084fd00bab2a1b02a839fd08bd6a298ffb571e1d950af6db80a041578774287a->leave($__internal_084fd00bab2a1b02a839fd08bd6a298ffb571e1d950af6db80a041578774287a_prof);

        
        $__internal_f56601dff1b79f34b101228569c15914fc5f987af18daad35e3dc7b24969a125->leave($__internal_f56601dff1b79f34b101228569c15914fc5f987af18daad35e3dc7b24969a125_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f5dd1e37ca3f0f09aef19cad84e0b96e56dc690fa32fa0283313a831205b3ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f5dd1e37ca3f0f09aef19cad84e0b96e56dc690fa32fa0283313a831205b3ac->enter($__internal_1f5dd1e37ca3f0f09aef19cad84e0b96e56dc690fa32fa0283313a831205b3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4464e50ac062ad624e94dcede774810a084b50f5d001e1ca523798b4faa8eb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4464e50ac062ad624e94dcede774810a084b50f5d001e1ca523798b4faa8eb99->enter($__internal_4464e50ac062ad624e94dcede774810a084b50f5d001e1ca523798b4faa8eb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4464e50ac062ad624e94dcede774810a084b50f5d001e1ca523798b4faa8eb99->leave($__internal_4464e50ac062ad624e94dcede774810a084b50f5d001e1ca523798b4faa8eb99_prof);

        
        $__internal_1f5dd1e37ca3f0f09aef19cad84e0b96e56dc690fa32fa0283313a831205b3ac->leave($__internal_1f5dd1e37ca3f0f09aef19cad84e0b96e56dc690fa32fa0283313a831205b3ac_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_026098fe3bf52f6b148c9a385b4e065840a603607d9161c0ed103f9dfcce4076 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_026098fe3bf52f6b148c9a385b4e065840a603607d9161c0ed103f9dfcce4076->enter($__internal_026098fe3bf52f6b148c9a385b4e065840a603607d9161c0ed103f9dfcce4076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_c76979bf5bd07c4da08e896467e45046561d1ebba3fca372831cad5f4abdceff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76979bf5bd07c4da08e896467e45046561d1ebba3fca372831cad5f4abdceff->enter($__internal_c76979bf5bd07c4da08e896467e45046561d1ebba3fca372831cad5f4abdceff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
";
        
        $__internal_c76979bf5bd07c4da08e896467e45046561d1ebba3fca372831cad5f4abdceff->leave($__internal_c76979bf5bd07c4da08e896467e45046561d1ebba3fca372831cad5f4abdceff_prof);

        
        $__internal_026098fe3bf52f6b148c9a385b4e065840a603607d9161c0ed103f9dfcce4076->leave($__internal_026098fe3bf52f6b148c9a385b4e065840a603607d9161c0ed103f9dfcce4076_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_33d28f2143710ed83e82ece643995ce1f9576cf620a4a917ab66d210940823ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33d28f2143710ed83e82ece643995ce1f9576cf620a4a917ab66d210940823ae->enter($__internal_33d28f2143710ed83e82ece643995ce1f9576cf620a4a917ab66d210940823ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_1890a8f18d202fb9961c576e43d66910b784b3c6446b527a6d6ce7ccb31770de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1890a8f18d202fb9961c576e43d66910b784b3c6446b527a6d6ce7ccb31770de->enter($__internal_1890a8f18d202fb9961c576e43d66910b784b3c6446b527a6d6ce7ccb31770de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
\t";
        // line 15
        if (array_key_exists("morale", $context)) {
            // line 16
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["morale"] ?? $this->getContext($context, "morale")));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 17
                echo "\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4>Inscription à la mutuelle étudiante ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "raisonsocial", array()), "html", null, true);
                echo "</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "url", array()), "html", null, true);
                echo "\" role=\"button\" target=\"_blank\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "alt", array()), "html", null, true);
                echo "\">Cliquez Ici</a>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t";
        }
        
        $__internal_1890a8f18d202fb9961c576e43d66910b784b3c6446b527a6d6ce7ccb31770de->leave($__internal_1890a8f18d202fb9961c576e43d66910b784b3c6446b527a6d6ce7ccb31770de_prof);

        
        $__internal_33d28f2143710ed83e82ece643995ce1f9576cf620a4a917ab66d210940823ae->leave($__internal_33d28f2143710ed83e82ece643995ce1f9576cf620a4a917ab66d210940823ae_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:mutuelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  123 => 27,  113 => 20,  108 => 17,  103 => 16,  101 => 15,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
\tInscription Université - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
\t<ol class=\"breadcrumb\">
\t\t<li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Home</a></li>
\t\t<li class=\"active\">Inscription</li>
\t</ol>
{% endblock %}

{% block BackContent %} 
\t{% if morale is defined %}
\t\t{% for row in morale %}
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4>Inscription à la mutuelle étudiante {{ row.raisonsocial }}</h4>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-body\">                                        
\t\t\t\t\t\t<p> Suspendisse ut lacinia sem. Praesent bibendum suscipit neque, vitae consequat nisi commodo et. Integer rhoncus dapibus nisl, quis maximus magna pharetra id. Nulla sit amet elit volutpat, sagittis neque vitae, dictum dolor. Ut finibus velit nec libero cursus, vel sollicitudin erat luctus. Morbi euismod ex quis leo pellentesque, sit amet tempus leo vehicula. Curabitur tellus dui, sodales eget ornare sit amet, molestie vel lacus. Mauris suscipit risus sollicitudin, rhoncus libero vitae, iaculis sapien. In fringilla augue eget mollis interdum. Donec erat quam, imperdiet consectetur malesuada ac, dictum id velit. Vivamus varius ultrices lectus, quis maximus dolor laoreet vel. </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"panel-footer\">
\t\t\t\t\t\t<div align=\"center\">
\t\t\t\t\t\t\t<a class=\"btn btn-info\" href=\"{{ row.url }}\" role=\"button\" target=\"_blank\" alt=\"{{ row.alt }}\">Cliquez Ici</a>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endfor %}
\t{% endif %}
{% endblock %}", "DUDEEGOPlatformBundle:back:mutuelle.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\mutuelle.html.twig");
    }
}
