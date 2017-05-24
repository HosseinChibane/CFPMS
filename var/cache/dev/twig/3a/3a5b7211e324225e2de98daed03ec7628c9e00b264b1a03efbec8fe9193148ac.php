<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_e40512cb30499bdeb8a56648c07267f6de8f0e0af27364ad50558e9e30e8c353 extends Twig_Template
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
        $__internal_cbf62aa34d0f1ba8231a7b44ce78745a8c1c54792791003cddec4974e09a9947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf62aa34d0f1ba8231a7b44ce78745a8c1c54792791003cddec4974e09a9947->enter($__internal_cbf62aa34d0f1ba8231a7b44ce78745a8c1c54792791003cddec4974e09a9947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        $__internal_82375fb4e6acf980c20a6eae06ed9633be0e7a10a47a0adf5b3f1101553dcc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82375fb4e6acf980c20a6eae06ed9633be0e7a10a47a0adf5b3f1101553dcc9d->enter($__internal_82375fb4e6acf980c20a6eae06ed9633be0e7a10a47a0adf5b3f1101553dcc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_time.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_cbf62aa34d0f1ba8231a7b44ce78745a8c1c54792791003cddec4974e09a9947->leave($__internal_cbf62aa34d0f1ba8231a7b44ce78745a8c1c54792791003cddec4974e09a9947_prof);

        
        $__internal_82375fb4e6acf980c20a6eae06ed9633be0e7a10a47a0adf5b3f1101553dcc9d->leave($__internal_82375fb4e6acf980c20a6eae06ed9633be0e7a10a47a0adf5b3f1101553dcc9d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
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
        return new Twig_Source("{{ value|date(field_options.format) }}
", "EasyAdminBundle:default:field_time.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_time.html.twig");
    }
}
