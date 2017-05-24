<?php

/* EasyAdminBundle:default:field_bigint.html.twig */
class __TwigTemplate_b6e724ea73ba272a7ba946996549648fbba535fa8ed89bd0f487e2c06de8c480 extends Twig_Template
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
        $__internal_75f5126afd16c54f65282c7b5176e2373f8238e28d3bbd77143c44b1f1907eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f5126afd16c54f65282c7b5176e2373f8238e28d3bbd77143c44b1f1907eed->enter($__internal_75f5126afd16c54f65282c7b5176e2373f8238e28d3bbd77143c44b1f1907eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        $__internal_40f5d1572bb0b92431e2fa8f8c388479aa8b85cc290ac9fd4d2f05e1320a00a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40f5d1572bb0b92431e2fa8f8c388479aa8b85cc290ac9fd4d2f05e1320a00a3->enter($__internal_40f5d1572bb0b92431e2fa8f8c388479aa8b85cc290ac9fd4d2f05e1320a00a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_bigint.html.twig"));

        // line 1
        if ($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array()), ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_75f5126afd16c54f65282c7b5176e2373f8238e28d3bbd77143c44b1f1907eed->leave($__internal_75f5126afd16c54f65282c7b5176e2373f8238e28d3bbd77143c44b1f1907eed_prof);

        
        $__internal_40f5d1572bb0b92431e2fa8f8c388479aa8b85cc290ac9fd4d2f05e1320a00a3->leave($__internal_40f5d1572bb0b92431e2fa8f8c388479aa8b85cc290ac9fd4d2f05e1320a00a3_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_bigint.html.twig";
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
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_bigint.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_bigint.html.twig");
    }
}
