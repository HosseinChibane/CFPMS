<?php

/* EasyAdminBundle:default:field_datetime.html.twig */
class __TwigTemplate_66ce2db0c54465f79939203df48f57657007d1de49f9244986f6bc9710621fef extends Twig_Template
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
        $__internal_c079eeb34508e45af958569346eb315b1c00cf0192fc62ac1e1b54447076e4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c079eeb34508e45af958569346eb315b1c00cf0192fc62ac1e1b54447076e4cb->enter($__internal_c079eeb34508e45af958569346eb315b1c00cf0192fc62ac1e1b54447076e4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        $__internal_e01ec5ef55b52ad03d9eca47d83864bc5346404c8392f19715565a873fc393d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01ec5ef55b52ad03d9eca47d83864bc5346404c8392f19715565a873fc393d2->enter($__internal_e01ec5ef55b52ad03d9eca47d83864bc5346404c8392f19715565a873fc393d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_c079eeb34508e45af958569346eb315b1c00cf0192fc62ac1e1b54447076e4cb->leave($__internal_c079eeb34508e45af958569346eb315b1c00cf0192fc62ac1e1b54447076e4cb_prof);

        
        $__internal_e01ec5ef55b52ad03d9eca47d83864bc5346404c8392f19715565a873fc393d2->leave($__internal_e01ec5ef55b52ad03d9eca47d83864bc5346404c8392f19715565a873fc393d2_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_datetime.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_datetime.html.twig");
    }
}
