<?php

/* @EasyAdmin/default/field_url.html.twig */
class __TwigTemplate_4863cd074ee1d54a0ff2e4e8f3c70b25e2349c4560cc6934f9a58b453b6e394d extends Twig_Template
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
        $__internal_a4b5c4fe3482a6ed5d7bea60cc38d874dcd41770b6c0c48a7e258a1f99dbf8ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b5c4fe3482a6ed5d7bea60cc38d874dcd41770b6c0c48a7e258a1f99dbf8ef->enter($__internal_a4b5c4fe3482a6ed5d7bea60cc38d874dcd41770b6c0c48a7e258a1f99dbf8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_url.html.twig"));

        $__internal_c9e91792f865508cb8055a329ce3395ce54fd1bf5fd3e82adc2992b95b3f80ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e91792f865508cb8055a329ce3395ce54fd1bf5fd3e82adc2992b95b3f80ea->enter($__internal_c9e91792f865508cb8055a329ce3395ce54fd1bf5fd3e82adc2992b95b3f80ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_url.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, twig_replace_filter(($context["value"] ?? $this->getContext($context, "value")), array("https://" => "", "http://" => ""))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_a4b5c4fe3482a6ed5d7bea60cc38d874dcd41770b6c0c48a7e258a1f99dbf8ef->leave($__internal_a4b5c4fe3482a6ed5d7bea60cc38d874dcd41770b6c0c48a7e258a1f99dbf8ef_prof);

        
        $__internal_c9e91792f865508cb8055a329ce3395ce54fd1bf5fd3e82adc2992b95b3f80ea->leave($__internal_c9e91792f865508cb8055a329ce3395ce54fd1bf5fd3e82adc2992b95b3f80ea_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    <a target=\"_blank\" href=\"{{ value }}\">{{ value }}</a>
{% else %}
    <a target=\"_blank\" href=\"{{ value }}\">{{ value|replace({ 'https://': '', 'http://': '' })|easyadmin_truncate }}</a>
{% endif %}
", "@EasyAdmin/default/field_url.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_url.html.twig");
    }
}
