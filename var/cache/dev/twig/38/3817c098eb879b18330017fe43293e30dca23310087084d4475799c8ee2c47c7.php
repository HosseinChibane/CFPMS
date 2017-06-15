<?php

/* @EasyAdmin/default/field_id.html.twig */
class __TwigTemplate_804cf1cdd8a9ec98029b87eed7f3e60e27fc14610e0856cbc80727aefc3f7aea extends Twig_Template
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
        $__internal_742d8dc87dc170350b26e128f5d915278eac8198cf4423cab502574b027844e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_742d8dc87dc170350b26e128f5d915278eac8198cf4423cab502574b027844e2->enter($__internal_742d8dc87dc170350b26e128f5d915278eac8198cf4423cab502574b027844e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        $__internal_4d9f49537e70d049fd32a62ede45e62a487c6f3a95d48b09f898e67180c65c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9f49537e70d049fd32a62ede45e62a487c6f3a95d48b09f898e67180c65c74->enter($__internal_4d9f49537e70d049fd32a62ede45e62a487c6f3a95d48b09f898e67180c65c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_742d8dc87dc170350b26e128f5d915278eac8198cf4423cab502574b027844e2->leave($__internal_742d8dc87dc170350b26e128f5d915278eac8198cf4423cab502574b027844e2_prof);

        
        $__internal_4d9f49537e70d049fd32a62ede45e62a487c6f3a95d48b09f898e67180c65c74->leave($__internal_4d9f49537e70d049fd32a62ede45e62a487c6f3a95d48b09f898e67180c65c74_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "@EasyAdmin/default/field_id.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_id.html.twig");
    }
}
