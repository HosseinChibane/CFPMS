<?php

/* :easy_admin:contract.html.twig */
class __TwigTemplate_78237cf207ddf75197ac910ba9cd63fd7c29c4b6f57249781aceecce89bf6ea1 extends Twig_Template
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
        $__internal_e2729812cb374bd3312889bebc3a2592479d32b05fa57557224d1d5312c3d001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2729812cb374bd3312889bebc3a2592479d32b05fa57557224d1d5312c3d001->enter($__internal_e2729812cb374bd3312889bebc3a2592479d32b05fa57557224d1d5312c3d001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":easy_admin:contract.html.twig"));

        $__internal_7d81c6666ece61966da92708b457f244401432b5cdf67be21c324f7322f62038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d81c6666ece61966da92708b457f244401432b5cdf67be21c324f7322f62038->enter($__internal_7d81c6666ece61966da92708b457f244401432b5cdf67be21c324f7322f62038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":easy_admin:contract.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "base_path", array()) . "/") . ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\" target=\"_blank\">Voir PDF</a>";
        
        $__internal_e2729812cb374bd3312889bebc3a2592479d32b05fa57557224d1d5312c3d001->leave($__internal_e2729812cb374bd3312889bebc3a2592479d32b05fa57557224d1d5312c3d001_prof);

        
        $__internal_7d81c6666ece61966da92708b457f244401432b5cdf67be21c324f7322f62038->leave($__internal_7d81c6666ece61966da92708b457f244401432b5cdf67be21c324f7322f62038_prof);

    }

    public function getTemplateName()
    {
        return ":easy_admin:contract.html.twig";
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
        return new Twig_Source("<a href=\"{{ field_options.base_path ~ '/' ~ value }}\" target=\"_blank\">Voir PDF</a>", ":easy_admin:contract.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources\\views/easy_admin/contract.html.twig");
    }
}
