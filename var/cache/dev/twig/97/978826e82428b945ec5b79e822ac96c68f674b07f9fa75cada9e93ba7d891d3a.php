<?php

/* EasyAdminBundle:default:field_email.html.twig */
class __TwigTemplate_10f2087f47038e2dc2394cffb55195668b9092dfc019b98a1d9df57bb93901fe extends Twig_Template
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
        $__internal_6532578e338216007605b78cf1a9fb1364cd74818e59c0b48656eb5ecc2114cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6532578e338216007605b78cf1a9fb1364cd74818e59c0b48656eb5ecc2114cb->enter($__internal_6532578e338216007605b78cf1a9fb1364cd74818e59c0b48656eb5ecc2114cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        $__internal_236f3a84c3fed602a2833fcc262e912b1ff438ee2b7006214610e952de2c0beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236f3a84c3fed602a2833fcc262e912b1ff438ee2b7006214610e952de2c0beb->enter($__internal_236f3a84c3fed602a2833fcc262e912b1ff438ee2b7006214610e952de2c0beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_email.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_6532578e338216007605b78cf1a9fb1364cd74818e59c0b48656eb5ecc2114cb->leave($__internal_6532578e338216007605b78cf1a9fb1364cd74818e59c0b48656eb5ecc2114cb_prof);

        
        $__internal_236f3a84c3fed602a2833fcc262e912b1ff438ee2b7006214610e952de2c0beb->leave($__internal_236f3a84c3fed602a2833fcc262e912b1ff438ee2b7006214610e952de2c0beb_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
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
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "EasyAdminBundle:default:field_email.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_email.html.twig");
    }
}
