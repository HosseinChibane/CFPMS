<?php

/* EasyAdminBundle:default:label_inaccessible.html.twig */
class __TwigTemplate_620966b5df84e06acd0c2a89797e5192c7ac3d3e1462cf691188e6b20116c8dc extends Twig_Template
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
        $__internal_0f157ca40320c55f63f1df3892d2dcd428675cb45ed176b19527e6dbdfd62ae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f157ca40320c55f63f1df3892d2dcd428675cb45ed176b19527e6dbdfd62ae9->enter($__internal_0f157ca40320c55f63f1df3892d2dcd428675cb45ed176b19527e6dbdfd62ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        $__internal_67bc188636fa6cc7329e1d3b8d5389bc37c490d9f5e27b12c4acafba633268fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67bc188636fa6cc7329e1d3b8d5389bc37c490d9f5e27b12c4acafba633268fc->enter($__internal_67bc188636fa6cc7329e1d3b8d5389bc37c490d9f5e27b12c4acafba633268fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_0f157ca40320c55f63f1df3892d2dcd428675cb45ed176b19527e6dbdfd62ae9->leave($__internal_0f157ca40320c55f63f1df3892d2dcd428675cb45ed176b19527e6dbdfd62ae9_prof);

        
        $__internal_67bc188636fa6cc7329e1d3b8d5389bc37c490d9f5e27b12c4acafba633268fc->leave($__internal_67bc188636fa6cc7329e1d3b8d5389bc37c490d9f5e27b12c4acafba633268fc_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
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

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "EasyAdminBundle:default:label_inaccessible.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/label_inaccessible.html.twig");
    }
}
