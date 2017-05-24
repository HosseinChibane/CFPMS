<?php

/* EasyAdminBundle:default:field_guid.html.twig */
class __TwigTemplate_d7384679827b56dd74f133d739d08e609fae0b4c07ffc40d5518d6ca1a349d97 extends Twig_Template
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
        $__internal_d733d806bdd0b4e45d475c58057cbedc305efb5ee2e639734ba9698d3b43a405 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d733d806bdd0b4e45d475c58057cbedc305efb5ee2e639734ba9698d3b43a405->enter($__internal_d733d806bdd0b4e45d475c58057cbedc305efb5ee2e639734ba9698d3b43a405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        $__internal_6c91e6e483f8007abde30d0d15b9969fa153a594209afb4884f804307d2903d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c91e6e483f8007abde30d0d15b9969fa153a594209afb4884f804307d2903d1->enter($__internal_6c91e6e483f8007abde30d0d15b9969fa153a594209afb4884f804307d2903d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_guid.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value")), 7), "html", null, true);
            echo "
";
        }
        
        $__internal_d733d806bdd0b4e45d475c58057cbedc305efb5ee2e639734ba9698d3b43a405->leave($__internal_d733d806bdd0b4e45d475c58057cbedc305efb5ee2e639734ba9698d3b43a405_prof);

        
        $__internal_6c91e6e483f8007abde30d0d15b9969fa153a594209afb4884f804307d2903d1->leave($__internal_6c91e6e483f8007abde30d0d15b9969fa153a594209afb4884f804307d2903d1_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_guid.html.twig";
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
    {{ value }}
{% else %}
    {{ value|easyadmin_truncate(7) }}
{% endif %}
", "EasyAdminBundle:default:field_guid.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_guid.html.twig");
    }
}
