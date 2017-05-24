<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_91b87b966e0b919943514a92ba25f081bf1dabbae8879ff8d2271e274ead5383 extends Twig_Template
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
        $__internal_e1683cb1ff70f902da572a261239a0e2ad20a0d7138717f5d9e52b6af47c5474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1683cb1ff70f902da572a261239a0e2ad20a0d7138717f5d9e52b6af47c5474->enter($__internal_e1683cb1ff70f902da572a261239a0e2ad20a0d7138717f5d9e52b6af47c5474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        $__internal_b3f69608674236f3b81a49ed1e3dc68746c817f398b634d9a5fed0047374a35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f69608674236f3b81a49ed1e3dc68746c817f398b634d9a5fed0047374a35b->enter($__internal_b3f69608674236f3b81a49ed1e3dc68746c817f398b634d9a5fed0047374a35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_e1683cb1ff70f902da572a261239a0e2ad20a0d7138717f5d9e52b6af47c5474->leave($__internal_e1683cb1ff70f902da572a261239a0e2ad20a0d7138717f5d9e52b6af47c5474_prof);

        
        $__internal_b3f69608674236f3b81a49ed1e3dc68746c817f398b634d9a5fed0047374a35b->leave($__internal_b3f69608674236f3b81a49ed1e3dc68746c817f398b634d9a5fed0047374a35b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
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
", "@EasyAdmin/default/field_date.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_date.html.twig");
    }
}
