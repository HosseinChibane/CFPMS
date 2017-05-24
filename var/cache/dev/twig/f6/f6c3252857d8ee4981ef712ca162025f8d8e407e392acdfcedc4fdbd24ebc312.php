<?php

/* @EasyAdmin/default/field_guid.html.twig */
class __TwigTemplate_893b7f4ee8cdb7b51c9c92eb9f204d3670745dd6a6d7c9713467c81628def317 extends Twig_Template
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
        $__internal_504b6d49e28387c9870fc4d73411654b71f546f40c96ad20c9d2a838fb04fb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504b6d49e28387c9870fc4d73411654b71f546f40c96ad20c9d2a838fb04fb25->enter($__internal_504b6d49e28387c9870fc4d73411654b71f546f40c96ad20c9d2a838fb04fb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_guid.html.twig"));

        $__internal_39c6232fc1310fd42234205990d651c6771abb12c24b469d83f0442f021b090d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c6232fc1310fd42234205990d651c6771abb12c24b469d83f0442f021b090d->enter($__internal_39c6232fc1310fd42234205990d651c6771abb12c24b469d83f0442f021b090d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_guid.html.twig"));

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
        
        $__internal_504b6d49e28387c9870fc4d73411654b71f546f40c96ad20c9d2a838fb04fb25->leave($__internal_504b6d49e28387c9870fc4d73411654b71f546f40c96ad20c9d2a838fb04fb25_prof);

        
        $__internal_39c6232fc1310fd42234205990d651c6771abb12c24b469d83f0442f021b090d->leave($__internal_39c6232fc1310fd42234205990d651c6771abb12c24b469d83f0442f021b090d_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_guid.html.twig";
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
", "@EasyAdmin/default/field_guid.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_guid.html.twig");
    }
}
