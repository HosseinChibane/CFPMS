<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_02c9d2c03682200f0e0edcad498057670c0fc6c7d1101ba59348cd5336fd99c1 extends Twig_Template
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
        $__internal_f464568df6c52ddee72f03037d42c2da777ef617a428a5fed7927c565d0d8025 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f464568df6c52ddee72f03037d42c2da777ef617a428a5fed7927c565d0d8025->enter($__internal_f464568df6c52ddee72f03037d42c2da777ef617a428a5fed7927c565d0d8025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_60fc5e10f98a48d6cb750bb81d4d4daafecc35d3905b7072c833b3b3c3dbf2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60fc5e10f98a48d6cb750bb81d4d4daafecc35d3905b7072c833b3b3c3dbf2cb->enter($__internal_60fc5e10f98a48d6cb750bb81d4d4daafecc35d3905b7072c833b3b3c3dbf2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_f464568df6c52ddee72f03037d42c2da777ef617a428a5fed7927c565d0d8025->leave($__internal_f464568df6c52ddee72f03037d42c2da777ef617a428a5fed7927c565d0d8025_prof);

        
        $__internal_60fc5e10f98a48d6cb750bb81d4d4daafecc35d3905b7072c833b3b3c3dbf2cb->leave($__internal_60fc5e10f98a48d6cb750bb81d4d4daafecc35d3905b7072c833b3b3c3dbf2cb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_integer.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_integer.html.twig");
    }
}
