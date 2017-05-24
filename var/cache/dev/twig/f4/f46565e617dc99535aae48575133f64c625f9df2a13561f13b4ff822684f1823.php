<?php

/* easy_admin/contract.html.twig */
class __TwigTemplate_4d1eb93b4086d6ffd4dc9f551154e57cad724848eace284aed8e2f3ecafebdc6 extends Twig_Template
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
        $__internal_f80fcd98ec41932ecac6467870197cf0121aa7d4c38a2d7b1cc8433982add85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f80fcd98ec41932ecac6467870197cf0121aa7d4c38a2d7b1cc8433982add85f->enter($__internal_f80fcd98ec41932ecac6467870197cf0121aa7d4c38a2d7b1cc8433982add85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "easy_admin/contract.html.twig"));

        $__internal_829e8c3abdad940ed454d47a855a379ba310257e6d1e2be248728348d2f686da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829e8c3abdad940ed454d47a855a379ba310257e6d1e2be248728348d2f686da->enter($__internal_829e8c3abdad940ed454d47a855a379ba310257e6d1e2be248728348d2f686da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "easy_admin/contract.html.twig"));

        // line 1
        echo "<a href=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "base_path", array()) . "/") . ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\" target=\"_blank\">Voir PDF</a>";
        
        $__internal_f80fcd98ec41932ecac6467870197cf0121aa7d4c38a2d7b1cc8433982add85f->leave($__internal_f80fcd98ec41932ecac6467870197cf0121aa7d4c38a2d7b1cc8433982add85f_prof);

        
        $__internal_829e8c3abdad940ed454d47a855a379ba310257e6d1e2be248728348d2f686da->leave($__internal_829e8c3abdad940ed454d47a855a379ba310257e6d1e2be248728348d2f686da_prof);

    }

    public function getTemplateName()
    {
        return "easy_admin/contract.html.twig";
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
        return new Twig_Source("<a href=\"{{ field_options.base_path ~ '/' ~ value }}\" target=\"_blank\">Voir PDF</a>", "easy_admin/contract.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\views\\easy_admin\\contract.html.twig");
    }
}
