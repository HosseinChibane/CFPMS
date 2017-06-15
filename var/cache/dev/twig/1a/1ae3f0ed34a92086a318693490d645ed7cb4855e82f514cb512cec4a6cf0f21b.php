<?php

/* @EasyAdmin/default/field_string.html.twig */
class __TwigTemplate_4f855f3bb93c07a601af9b83d1586416d0acb0b45ded2ee6af5c8f887da2f640 extends Twig_Template
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
        $__internal_1fa5401bed639eadb0529cf67324069b890c02fb1f3f7c3575b42954d562c856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa5401bed639eadb0529cf67324069b890c02fb1f3f7c3575b42954d562c856->enter($__internal_1fa5401bed639eadb0529cf67324069b890c02fb1f3f7c3575b42954d562c856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        $__internal_af1215a62931b498549d66ff2378c112bcbd0da9ab7be294646406fc00186890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1215a62931b498549d66ff2378c112bcbd0da9ab7be294646406fc00186890->enter($__internal_af1215a62931b498549d66ff2378c112bcbd0da9ab7be294646406fc00186890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_string.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_1fa5401bed639eadb0529cf67324069b890c02fb1f3f7c3575b42954d562c856->leave($__internal_1fa5401bed639eadb0529cf67324069b890c02fb1f3f7c3575b42954d562c856_prof);

        
        $__internal_af1215a62931b498549d66ff2378c112bcbd0da9ab7be294646406fc00186890->leave($__internal_af1215a62931b498549d66ff2378c112bcbd0da9ab7be294646406fc00186890_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_string.html.twig";
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
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "@EasyAdmin/default/field_string.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_string.html.twig");
    }
}
