<?php

/* @EasyAdmin/default/field_datetimetz.html.twig */
class __TwigTemplate_74a7aa55b6c1e7b4aa3e5231e6110c07a7b84d4876ff16d8d833a6b3dcc58709 extends Twig_Template
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
        $__internal_ee2ea7666319171edba95c03aae1ec9b159f87aa6e3e39fa9d6e068874eeb77a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2ea7666319171edba95c03aae1ec9b159f87aa6e3e39fa9d6e068874eeb77a->enter($__internal_ee2ea7666319171edba95c03aae1ec9b159f87aa6e3e39fa9d6e068874eeb77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetimetz.html.twig"));

        $__internal_b850cd8da4b6cc5ba88679a3e766218dbc5b966699f4b73ff7334e4cd0fbe8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b850cd8da4b6cc5ba88679a3e766218dbc5b966699f4b73ff7334e4cd0fbe8b7->enter($__internal_b850cd8da4b6cc5ba88679a3e766218dbc5b966699f4b73ff7334e4cd0fbe8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetimetz.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_ee2ea7666319171edba95c03aae1ec9b159f87aa6e3e39fa9d6e068874eeb77a->leave($__internal_ee2ea7666319171edba95c03aae1ec9b159f87aa6e3e39fa9d6e068874eeb77a_prof);

        
        $__internal_b850cd8da4b6cc5ba88679a3e766218dbc5b966699f4b73ff7334e4cd0fbe8b7->leave($__internal_b850cd8da4b6cc5ba88679a3e766218dbc5b966699f4b73ff7334e4cd0fbe8b7_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetimetz.html.twig";
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
", "@EasyAdmin/default/field_datetimetz.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_datetimetz.html.twig");
    }
}
