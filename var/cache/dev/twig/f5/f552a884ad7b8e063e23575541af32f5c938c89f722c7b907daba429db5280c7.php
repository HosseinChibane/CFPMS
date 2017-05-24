<?php

/* DUDEEGOPlatformBundle:back:aide.html.twig */
class __TwigTemplate_7a8add6f72e7524f70d92bc8fd0df05b4281bf8d7bea689ffc53a41286004f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:aide.html.twig", 1);
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
        $__internal_fd9e1e54c21371e10c6e36b6f8b19bfd144ca9d2d0ddf969958efcd7c3d06a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9e1e54c21371e10c6e36b6f8b19bfd144ca9d2d0ddf969958efcd7c3d06a14->enter($__internal_fd9e1e54c21371e10c6e36b6f8b19bfd144ca9d2d0ddf969958efcd7c3d06a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:aide.html.twig"));

        $__internal_d1ea8b96fd24728b1e512dbd473f7fbbc1bbc6a6fa22f368563b924d6d5eac29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1ea8b96fd24728b1e512dbd473f7fbbc1bbc6a6fa22f368563b924d6d5eac29->enter($__internal_d1ea8b96fd24728b1e512dbd473f7fbbc1bbc6a6fa22f368563b924d6d5eac29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd9e1e54c21371e10c6e36b6f8b19bfd144ca9d2d0ddf969958efcd7c3d06a14->leave($__internal_fd9e1e54c21371e10c6e36b6f8b19bfd144ca9d2d0ddf969958efcd7c3d06a14_prof);

        
        $__internal_d1ea8b96fd24728b1e512dbd473f7fbbc1bbc6a6fa22f368563b924d6d5eac29->leave($__internal_d1ea8b96fd24728b1e512dbd473f7fbbc1bbc6a6fa22f368563b924d6d5eac29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a9a97191aad63dcab6b1149a6e52d97f02d766dd64b6c098b000cf407a2e74f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a97191aad63dcab6b1149a6e52d97f02d766dd64b6c098b000cf407a2e74f7->enter($__internal_a9a97191aad63dcab6b1149a6e52d97f02d766dd64b6c098b000cf407a2e74f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_25a3c088b2518d18e3c4b1b75e6755ec1695aa5fe6cb3e4451ac99305b99ce19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a3c088b2518d18e3c4b1b75e6755ec1695aa5fe6cb3e4451ac99305b99ce19->enter($__internal_25a3c088b2518d18e3c4b1b75e6755ec1695aa5fe6cb3e4451ac99305b99ce19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_25a3c088b2518d18e3c4b1b75e6755ec1695aa5fe6cb3e4451ac99305b99ce19->leave($__internal_25a3c088b2518d18e3c4b1b75e6755ec1695aa5fe6cb3e4451ac99305b99ce19_prof);

        
        $__internal_a9a97191aad63dcab6b1149a6e52d97f02d766dd64b6c098b000cf407a2e74f7->leave($__internal_a9a97191aad63dcab6b1149a6e52d97f02d766dd64b6c098b000cf407a2e74f7_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b7e8343eeb99f4cd49bde51271d013140363a4e5efb518d7c398277c7536db28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e8343eeb99f4cd49bde51271d013140363a4e5efb518d7c398277c7536db28->enter($__internal_b7e8343eeb99f4cd49bde51271d013140363a4e5efb518d7c398277c7536db28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_975c0996ddd20da7f5b817ea2020ecf0d2394f0553a1f3dd6f5bb712627e37ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975c0996ddd20da7f5b817ea2020ecf0d2394f0553a1f3dd6f5bb712627e37ed->enter($__internal_975c0996ddd20da7f5b817ea2020ecf0d2394f0553a1f3dd6f5bb712627e37ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 7
        echo "
    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">FAQ</li>
    </ol>
";
        
        $__internal_975c0996ddd20da7f5b817ea2020ecf0d2394f0553a1f3dd6f5bb712627e37ed->leave($__internal_975c0996ddd20da7f5b817ea2020ecf0d2394f0553a1f3dd6f5bb712627e37ed_prof);

        
        $__internal_b7e8343eeb99f4cd49bde51271d013140363a4e5efb518d7c398277c7536db28->leave($__internal_b7e8343eeb99f4cd49bde51271d013140363a4e5efb518d7c398277c7536db28_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_c2038c1c56201306314745a10da6be745b2e9c36d550e594f5619f7826bcee6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2038c1c56201306314745a10da6be745b2e9c36d550e594f5619f7826bcee6d->enter($__internal_c2038c1c56201306314745a10da6be745b2e9c36d550e594f5619f7826bcee6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_7dcef49462504edf92b6cc23640cd549e56b0b1dffc4c674158bef17d7d7728e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcef49462504edf92b6cc23640cd549e56b0b1dffc4c674158bef17d7d7728e->enter($__internal_7dcef49462504edf92b6cc23640cd549e56b0b1dffc4c674158bef17d7d7728e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        // line 15
        echo "\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Content Row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t";
        // line 21
        if (array_key_exists("listFAQ", $context)) {
            // line 22
            echo "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listFAQ"] ?? $this->getContext($context, "listFAQ")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowFAQ"]) {
                // line 23
                echo "\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "question", array()), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "id", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowFAQ"], "reponse", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowFAQ'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t</div>
\t\t\t\t<!-- /.panel-group -->
\t\t\t</div>
\t\t\t<!-- /.col-lg-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
";
        
        $__internal_7dcef49462504edf92b6cc23640cd549e56b0b1dffc4c674158bef17d7d7728e->leave($__internal_7dcef49462504edf92b6cc23640cd549e56b0b1dffc4c674158bef17d7d7728e_prof);

        
        $__internal_c2038c1c56201306314745a10da6be745b2e9c36d550e594f5619f7826bcee6d->leave($__internal_c2038c1c56201306314745a10da6be745b2e9c36d550e594f5619f7826bcee6d_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:aide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 39,  146 => 38,  134 => 32,  129 => 30,  121 => 27,  115 => 23,  110 => 22,  108 => 21,  100 => 15,  91 => 14,  77 => 9,  73 => 7,  64 => 6,  51 => 4,  42 => 3,  11 => 1,);
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
\tAide - {{ parent() }}
{% endblock %}
{% block breadcrumb %}

    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">FAQ</li>
    </ol>
{% endblock %}

{% block BackContent %}
\t<!-- Page Content -->
\t<div class=\"container\">
\t\t<!-- Content Row -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10\">
\t\t\t\t<div class=\"panel-group\" id=\"accordion\">
\t\t\t\t\t{% if listFAQ is defined %}
\t\t\t\t\t\t{% for rowFAQ in listFAQ %}
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">
\t\t\t\t\t\t\t\t\t\t<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#{{ rowFAQ.id }}\">{{ rowFAQ.question}}</a>
\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"{{ rowFAQ.id }}\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t{{ rowFAQ.reponse }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /.panel -->
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<!-- /.panel-group -->
\t\t\t</div>
\t\t\t<!-- /.col-lg-12 -->
\t\t</div>
\t\t<!-- /.row -->
\t</div>
{% endblock %}", "DUDEEGOPlatformBundle:back:aide.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/aide.html.twig");
    }
}
