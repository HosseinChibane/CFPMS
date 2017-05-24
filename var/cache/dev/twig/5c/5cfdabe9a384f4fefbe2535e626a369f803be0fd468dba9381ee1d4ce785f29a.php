<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_609d79ac078cacaf2f30c9655be31693a805f658929884902c343259f01081aa extends Twig_Template
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
        $__internal_25c3618370686b91f20a6c9c80f98d68d8a0084a6fd6adee57639e9cafe965b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25c3618370686b91f20a6c9c80f98d68d8a0084a6fd6adee57639e9cafe965b9->enter($__internal_25c3618370686b91f20a6c9c80f98d68d8a0084a6fd6adee57639e9cafe965b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_4aed25f47837a7de9c5026896c59d05111409a81daf52eae7669f34517c3578f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aed25f47837a7de9c5026896c59d05111409a81daf52eae7669f34517c3578f->enter($__internal_4aed25f47837a7de9c5026896c59d05111409a81daf52eae7669f34517c3578f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_25c3618370686b91f20a6c9c80f98d68d8a0084a6fd6adee57639e9cafe965b9->leave($__internal_25c3618370686b91f20a6c9c80f98d68d8a0084a6fd6adee57639e9cafe965b9_prof);

        
        $__internal_4aed25f47837a7de9c5026896c59d05111409a81daf52eae7669f34517c3578f->leave($__internal_4aed25f47837a7de9c5026896c59d05111409a81daf52eae7669f34517c3578f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_float.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_float.html.twig");
    }
}
