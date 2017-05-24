<?php

/* @DUDEEGOPlatform/back/aide.html.twig */
class __TwigTemplate_66d7139994bc26e684f9d981b4508d4f83815e84d97e97512c28da0a7ae96d9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/aide.html.twig", 1);
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
        $__internal_a754389ac1abf4577d12f7f3cda5cf8dcee489e93a002b2e4d634b20f747bd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a754389ac1abf4577d12f7f3cda5cf8dcee489e93a002b2e4d634b20f747bd38->enter($__internal_a754389ac1abf4577d12f7f3cda5cf8dcee489e93a002b2e4d634b20f747bd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/aide.html.twig"));

        $__internal_911f578bd5a9a73d04a971f6ee59b7efd654ec7a795cad2bd70920679d61ffa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911f578bd5a9a73d04a971f6ee59b7efd654ec7a795cad2bd70920679d61ffa2->enter($__internal_911f578bd5a9a73d04a971f6ee59b7efd654ec7a795cad2bd70920679d61ffa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/aide.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a754389ac1abf4577d12f7f3cda5cf8dcee489e93a002b2e4d634b20f747bd38->leave($__internal_a754389ac1abf4577d12f7f3cda5cf8dcee489e93a002b2e4d634b20f747bd38_prof);

        
        $__internal_911f578bd5a9a73d04a971f6ee59b7efd654ec7a795cad2bd70920679d61ffa2->leave($__internal_911f578bd5a9a73d04a971f6ee59b7efd654ec7a795cad2bd70920679d61ffa2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52e7fb6214ae76c433c8cca16eebc654d5f113ec959b6defc9be19c087f719e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52e7fb6214ae76c433c8cca16eebc654d5f113ec959b6defc9be19c087f719e5->enter($__internal_52e7fb6214ae76c433c8cca16eebc654d5f113ec959b6defc9be19c087f719e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a362db97d9df7ef96ea4fd887cd0b564f7fd0bbd4b95ba932c22ec00dbd085f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a362db97d9df7ef96ea4fd887cd0b564f7fd0bbd4b95ba932c22ec00dbd085f->enter($__internal_3a362db97d9df7ef96ea4fd887cd0b564f7fd0bbd4b95ba932c22ec00dbd085f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tAide - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3a362db97d9df7ef96ea4fd887cd0b564f7fd0bbd4b95ba932c22ec00dbd085f->leave($__internal_3a362db97d9df7ef96ea4fd887cd0b564f7fd0bbd4b95ba932c22ec00dbd085f_prof);

        
        $__internal_52e7fb6214ae76c433c8cca16eebc654d5f113ec959b6defc9be19c087f719e5->leave($__internal_52e7fb6214ae76c433c8cca16eebc654d5f113ec959b6defc9be19c087f719e5_prof);

    }

    // line 6
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_dbcd289480205b8e669f44edad717efe94ae429f05c7bf3b2c53cbd38c492c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcd289480205b8e669f44edad717efe94ae429f05c7bf3b2c53cbd38c492c17->enter($__internal_dbcd289480205b8e669f44edad717efe94ae429f05c7bf3b2c53cbd38c492c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_9cdefa6d312358d618e9a508943759320a08406392f645e40060b96dc5a7556a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cdefa6d312358d618e9a508943759320a08406392f645e40060b96dc5a7556a->enter($__internal_9cdefa6d312358d618e9a508943759320a08406392f645e40060b96dc5a7556a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

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
        
        $__internal_9cdefa6d312358d618e9a508943759320a08406392f645e40060b96dc5a7556a->leave($__internal_9cdefa6d312358d618e9a508943759320a08406392f645e40060b96dc5a7556a_prof);

        
        $__internal_dbcd289480205b8e669f44edad717efe94ae429f05c7bf3b2c53cbd38c492c17->leave($__internal_dbcd289480205b8e669f44edad717efe94ae429f05c7bf3b2c53cbd38c492c17_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_455ea74be419e41a16a5c56ac48d87acab44867f747f148c3c787f0946ed9f27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_455ea74be419e41a16a5c56ac48d87acab44867f747f148c3c787f0946ed9f27->enter($__internal_455ea74be419e41a16a5c56ac48d87acab44867f747f148c3c787f0946ed9f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_f6f88e1d65ad36ab0883f9329cebae48f97209c3580cd950b6d979360bcd81a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6f88e1d65ad36ab0883f9329cebae48f97209c3580cd950b6d979360bcd81a9->enter($__internal_f6f88e1d65ad36ab0883f9329cebae48f97209c3580cd950b6d979360bcd81a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_f6f88e1d65ad36ab0883f9329cebae48f97209c3580cd950b6d979360bcd81a9->leave($__internal_f6f88e1d65ad36ab0883f9329cebae48f97209c3580cd950b6d979360bcd81a9_prof);

        
        $__internal_455ea74be419e41a16a5c56ac48d87acab44867f747f148c3c787f0946ed9f27->leave($__internal_455ea74be419e41a16a5c56ac48d87acab44867f747f148c3c787f0946ed9f27_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/aide.html.twig";
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
{% endblock %}", "@DUDEEGOPlatform/back/aide.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\aide.html.twig");
    }
}
