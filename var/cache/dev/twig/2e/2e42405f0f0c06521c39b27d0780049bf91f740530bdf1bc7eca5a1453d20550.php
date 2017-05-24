<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_baad40093549dced31b9b3e4f5507ea2caf628dede93e271128a517ffc035726 extends Twig_Template
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
        $__internal_7d56418aadce61b4ff919bee81abb939e008f279c023c35367bc553b617c94ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d56418aadce61b4ff919bee81abb939e008f279c023c35367bc553b617c94ce->enter($__internal_7d56418aadce61b4ff919bee81abb939e008f279c023c35367bc553b617c94ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_090f3a1d8a201026fe4411844eec6234e972e3ed0e459ea2f721b1f7c379465a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090f3a1d8a201026fe4411844eec6234e972e3ed0e459ea2f721b1f7c379465a->enter($__internal_090f3a1d8a201026fe4411844eec6234e972e3ed0e459ea2f721b1f7c379465a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_7d56418aadce61b4ff919bee81abb939e008f279c023c35367bc553b617c94ce->leave($__internal_7d56418aadce61b4ff919bee81abb939e008f279c023c35367bc553b617c94ce_prof);

        
        $__internal_090f3a1d8a201026fe4411844eec6234e972e3ed0e459ea2f721b1f7c379465a->leave($__internal_090f3a1d8a201026fe4411844eec6234e972e3ed0e459ea2f721b1f7c379465a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
", "EasyAdminBundle:default:field_smallint.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_smallint.html.twig");
    }
}
