<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_dca89362a7a5d3586f344d4b676941ce9785c8e64721df85421bf787a43bb8e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_7a57143da5225171cd4ae3a3de366a8b46796e452064aac986111c4ca3930b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a57143da5225171cd4ae3a3de366a8b46796e452064aac986111c4ca3930b1c->enter($__internal_7a57143da5225171cd4ae3a3de366a8b46796e452064aac986111c4ca3930b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_17839faebc8640582a701c2aa94f70f5740f9c01b054b0ec9d9ca98ef240c02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17839faebc8640582a701c2aa94f70f5740f9c01b054b0ec9d9ca98ef240c02d->enter($__internal_17839faebc8640582a701c2aa94f70f5740f9c01b054b0ec9d9ca98ef240c02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a57143da5225171cd4ae3a3de366a8b46796e452064aac986111c4ca3930b1c->leave($__internal_7a57143da5225171cd4ae3a3de366a8b46796e452064aac986111c4ca3930b1c_prof);

        
        $__internal_17839faebc8640582a701c2aa94f70f5740f9c01b054b0ec9d9ca98ef240c02d->leave($__internal_17839faebc8640582a701c2aa94f70f5740f9c01b054b0ec9d9ca98ef240c02d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed76cfaddf978c0fddeb9382f266b2f4842e524e0fc63f9e0b55f646d774c66f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed76cfaddf978c0fddeb9382f266b2f4842e524e0fc63f9e0b55f646d774c66f->enter($__internal_ed76cfaddf978c0fddeb9382f266b2f4842e524e0fc63f9e0b55f646d774c66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_98903c8b7c2761a7701c6f687430b645849a0d743fa6c03a07ff8b32049cde23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98903c8b7c2761a7701c6f687430b645849a0d743fa6c03a07ff8b32049cde23->enter($__internal_98903c8b7c2761a7701c6f687430b645849a0d743fa6c03a07ff8b32049cde23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_98903c8b7c2761a7701c6f687430b645849a0d743fa6c03a07ff8b32049cde23->leave($__internal_98903c8b7c2761a7701c6f687430b645849a0d743fa6c03a07ff8b32049cde23_prof);

        
        $__internal_ed76cfaddf978c0fddeb9382f266b2f4842e524e0fc63f9e0b55f646d774c66f->leave($__internal_ed76cfaddf978c0fddeb9382f266b2f4842e524e0fc63f9e0b55f646d774c66f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a92f2d2e527afc721960eca8c590fbfd073581599317210a8ea73451c0c2acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a92f2d2e527afc721960eca8c590fbfd073581599317210a8ea73451c0c2acb->enter($__internal_2a92f2d2e527afc721960eca8c590fbfd073581599317210a8ea73451c0c2acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_033b117da294f8038eb4e21b55b3459ecdff63ff1e047ad7b6178c82653c12a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033b117da294f8038eb4e21b55b3459ecdff63ff1e047ad7b6178c82653c12a7->enter($__internal_033b117da294f8038eb4e21b55b3459ecdff63ff1e047ad7b6178c82653c12a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_033b117da294f8038eb4e21b55b3459ecdff63ff1e047ad7b6178c82653c12a7->leave($__internal_033b117da294f8038eb4e21b55b3459ecdff63ff1e047ad7b6178c82653c12a7_prof);

        
        $__internal_2a92f2d2e527afc721960eca8c590fbfd073581599317210a8ea73451c0c2acb->leave($__internal_2a92f2d2e527afc721960eca8c590fbfd073581599317210a8ea73451c0c2acb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e4a6a636a7b14d32273130112ed098ba07d53247b5459be544d5d4f5d797be9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4a6a636a7b14d32273130112ed098ba07d53247b5459be544d5d4f5d797be9->enter($__internal_4e4a6a636a7b14d32273130112ed098ba07d53247b5459be544d5d4f5d797be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aa2da6b92736b052f954a546f53e9a680f5ebbfdbe5c9c1d029cb9388f7ff3c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2da6b92736b052f954a546f53e9a680f5ebbfdbe5c9c1d029cb9388f7ff3c9->enter($__internal_aa2da6b92736b052f954a546f53e9a680f5ebbfdbe5c9c1d029cb9388f7ff3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_aa2da6b92736b052f954a546f53e9a680f5ebbfdbe5c9c1d029cb9388f7ff3c9->leave($__internal_aa2da6b92736b052f954a546f53e9a680f5ebbfdbe5c9c1d029cb9388f7ff3c9_prof);

        
        $__internal_4e4a6a636a7b14d32273130112ed098ba07d53247b5459be544d5d4f5d797be9->leave($__internal_4e4a6a636a7b14d32273130112ed098ba07d53247b5459be544d5d4f5d797be9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
