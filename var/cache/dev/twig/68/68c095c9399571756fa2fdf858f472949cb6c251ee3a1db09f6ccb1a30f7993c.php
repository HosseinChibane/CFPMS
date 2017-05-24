<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_102259c6e61c05d7ed195b049ab5b2f021a3fd0bba99f80375a494cdc7310129 extends Twig_Template
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
        $__internal_d77fbfefe5ad4b46b379cff3ace2d3d3d416b42a5282e4a8e275ab32d806964d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d77fbfefe5ad4b46b379cff3ace2d3d3d416b42a5282e4a8e275ab32d806964d->enter($__internal_d77fbfefe5ad4b46b379cff3ace2d3d3d416b42a5282e4a8e275ab32d806964d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_93fdee88da6dbdc25c91f97b12ed7e501a8ad8c9ff8d218c681422e8a41c934e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fdee88da6dbdc25c91f97b12ed7e501a8ad8c9ff8d218c681422e8a41c934e->enter($__internal_93fdee88da6dbdc25c91f97b12ed7e501a8ad8c9ff8d218c681422e8a41c934e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_d77fbfefe5ad4b46b379cff3ace2d3d3d416b42a5282e4a8e275ab32d806964d->leave($__internal_d77fbfefe5ad4b46b379cff3ace2d3d3d416b42a5282e4a8e275ab32d806964d_prof);

        
        $__internal_93fdee88da6dbdc25c91f97b12ed7e501a8ad8c9ff8d218c681422e8a41c934e->leave($__internal_93fdee88da6dbdc25c91f97b12ed7e501a8ad8c9ff8d218c681422e8a41c934e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_boolean.html.twig");
    }
}
