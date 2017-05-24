<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e6afd907208c31e99b5507992b92d4447349f5c5b51d0fd0b124e38aad1fda06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_68610c5cf9967e17733745043be11940e82a1e9b2268a52feee43d8b0d4b7d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68610c5cf9967e17733745043be11940e82a1e9b2268a52feee43d8b0d4b7d2a->enter($__internal_68610c5cf9967e17733745043be11940e82a1e9b2268a52feee43d8b0d4b7d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d9251ae5057c75498f6d8e277bb3a6cbc78668ead860ae714f8ce60bdc198e98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9251ae5057c75498f6d8e277bb3a6cbc78668ead860ae714f8ce60bdc198e98->enter($__internal_d9251ae5057c75498f6d8e277bb3a6cbc78668ead860ae714f8ce60bdc198e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68610c5cf9967e17733745043be11940e82a1e9b2268a52feee43d8b0d4b7d2a->leave($__internal_68610c5cf9967e17733745043be11940e82a1e9b2268a52feee43d8b0d4b7d2a_prof);

        
        $__internal_d9251ae5057c75498f6d8e277bb3a6cbc78668ead860ae714f8ce60bdc198e98->leave($__internal_d9251ae5057c75498f6d8e277bb3a6cbc78668ead860ae714f8ce60bdc198e98_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d79c19ffea466767d4f5ae4b35d35b3241fa2b3ed2eee1cfcd68ff916519ccc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d79c19ffea466767d4f5ae4b35d35b3241fa2b3ed2eee1cfcd68ff916519ccc1->enter($__internal_d79c19ffea466767d4f5ae4b35d35b3241fa2b3ed2eee1cfcd68ff916519ccc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_96d2fceb824ade2b1bd1a918829d7efeaacf6fb60b398e35f2dbda5472da292f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d2fceb824ade2b1bd1a918829d7efeaacf6fb60b398e35f2dbda5472da292f->enter($__internal_96d2fceb824ade2b1bd1a918829d7efeaacf6fb60b398e35f2dbda5472da292f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_96d2fceb824ade2b1bd1a918829d7efeaacf6fb60b398e35f2dbda5472da292f->leave($__internal_96d2fceb824ade2b1bd1a918829d7efeaacf6fb60b398e35f2dbda5472da292f_prof);

        
        $__internal_d79c19ffea466767d4f5ae4b35d35b3241fa2b3ed2eee1cfcd68ff916519ccc1->leave($__internal_d79c19ffea466767d4f5ae4b35d35b3241fa2b3ed2eee1cfcd68ff916519ccc1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_59ade2a1e9ed38e82d7d692ad774e7902843db45a007fb5fd2450f5c80d9132f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ade2a1e9ed38e82d7d692ad774e7902843db45a007fb5fd2450f5c80d9132f->enter($__internal_59ade2a1e9ed38e82d7d692ad774e7902843db45a007fb5fd2450f5c80d9132f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d596a8c7df399400ba5878212390eb6cc210181527ff485ada9ca90b1b6a18d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d596a8c7df399400ba5878212390eb6cc210181527ff485ada9ca90b1b6a18d1->enter($__internal_d596a8c7df399400ba5878212390eb6cc210181527ff485ada9ca90b1b6a18d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d596a8c7df399400ba5878212390eb6cc210181527ff485ada9ca90b1b6a18d1->leave($__internal_d596a8c7df399400ba5878212390eb6cc210181527ff485ada9ca90b1b6a18d1_prof);

        
        $__internal_59ade2a1e9ed38e82d7d692ad774e7902843db45a007fb5fd2450f5c80d9132f->leave($__internal_59ade2a1e9ed38e82d7d692ad774e7902843db45a007fb5fd2450f5c80d9132f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d7df0809742f81a31f2569ff5d03c129453116d7f571d3c0d15d9a0bd072370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7df0809742f81a31f2569ff5d03c129453116d7f571d3c0d15d9a0bd072370->enter($__internal_4d7df0809742f81a31f2569ff5d03c129453116d7f571d3c0d15d9a0bd072370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_724f63f7ac024e6c5bf2eef575eff8ec1ce07cca0b28a252e27d81dce7a805e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724f63f7ac024e6c5bf2eef575eff8ec1ce07cca0b28a252e27d81dce7a805e3->enter($__internal_724f63f7ac024e6c5bf2eef575eff8ec1ce07cca0b28a252e27d81dce7a805e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_724f63f7ac024e6c5bf2eef575eff8ec1ce07cca0b28a252e27d81dce7a805e3->leave($__internal_724f63f7ac024e6c5bf2eef575eff8ec1ce07cca0b28a252e27d81dce7a805e3_prof);

        
        $__internal_4d7df0809742f81a31f2569ff5d03c129453116d7f571d3c0d15d9a0bd072370->leave($__internal_4d7df0809742f81a31f2569ff5d03c129453116d7f571d3c0d15d9a0bd072370_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
