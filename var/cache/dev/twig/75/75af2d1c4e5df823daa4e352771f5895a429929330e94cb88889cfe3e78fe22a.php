<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_2e9964743d7fcf9d0046b471a7e068520b38e422c7d389f64ace9a9e93ec4bbf extends Twig_Template
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
        $__internal_a7ebbea0cab1395ed796f946ad3476272ead5d8b1347d4775a149b76cd99711c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ebbea0cab1395ed796f946ad3476272ead5d8b1347d4775a149b76cd99711c->enter($__internal_a7ebbea0cab1395ed796f946ad3476272ead5d8b1347d4775a149b76cd99711c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_e662e8eaab5df507d918590d14685eda4f2c75c0781cfcc44b27afe462ce0d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e662e8eaab5df507d918590d14685eda4f2c75c0781cfcc44b27afe462ce0d88->enter($__internal_e662e8eaab5df507d918590d14685eda4f2c75c0781cfcc44b27afe462ce0d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_a7ebbea0cab1395ed796f946ad3476272ead5d8b1347d4775a149b76cd99711c->leave($__internal_a7ebbea0cab1395ed796f946ad3476272ead5d8b1347d4775a149b76cd99711c_prof);

        
        $__internal_e662e8eaab5df507d918590d14685eda4f2c75c0781cfcc44b27afe462ce0d88->leave($__internal_e662e8eaab5df507d918590d14685eda4f2c75c0781cfcc44b27afe462ce0d88_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\label_null.html.twig");
    }
}
