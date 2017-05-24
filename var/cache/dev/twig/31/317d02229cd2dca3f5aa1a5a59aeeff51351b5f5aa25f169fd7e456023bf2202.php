<?php

/* EasyAdminBundle:default:field_datetimetz.html.twig */
class __TwigTemplate_fbf368e3ee08f6e1518e3aa3e6f9cfb9cb5acbba7b59d428af304f0520c3ef48 extends Twig_Template
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
        $__internal_ca6d093f29639945fdd3a37604a0cfdbc10193e5bf14fe08e2aaf0b10c38c9a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca6d093f29639945fdd3a37604a0cfdbc10193e5bf14fe08e2aaf0b10c38c9a3->enter($__internal_ca6d093f29639945fdd3a37604a0cfdbc10193e5bf14fe08e2aaf0b10c38c9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        $__internal_a4dd3b4e45f96d79c99205f6b1cc78413b7cbda6bec1a2b4c9460525e0aaf49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4dd3b4e45f96d79c99205f6b1cc78413b7cbda6bec1a2b4c9460525e0aaf49a->enter($__internal_a4dd3b4e45f96d79c99205f6b1cc78413b7cbda6bec1a2b4c9460525e0aaf49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_ca6d093f29639945fdd3a37604a0cfdbc10193e5bf14fe08e2aaf0b10c38c9a3->leave($__internal_ca6d093f29639945fdd3a37604a0cfdbc10193e5bf14fe08e2aaf0b10c38c9a3_prof);

        
        $__internal_a4dd3b4e45f96d79c99205f6b1cc78413b7cbda6bec1a2b4c9460525e0aaf49a->leave($__internal_a4dd3b4e45f96d79c99205f6b1cc78413b7cbda6bec1a2b4c9460525e0aaf49a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_datetimetz.html.twig";
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
", "EasyAdminBundle:default:field_datetimetz.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_datetimetz.html.twig");
    }
}
