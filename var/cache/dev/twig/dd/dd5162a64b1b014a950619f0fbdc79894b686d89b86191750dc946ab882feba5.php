<?php

/* EasyAdminBundle:default:field_date.html.twig */
class __TwigTemplate_dbf6e6733422b760ae6c284ac6362c7313bf99765868b1a476bad3d682ee718c extends Twig_Template
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
        $__internal_48786df9530339a6320c953a7fb9dc0152e4b3760e7d1b9b3f57ac998121386f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48786df9530339a6320c953a7fb9dc0152e4b3760e7d1b9b3f57ac998121386f->enter($__internal_48786df9530339a6320c953a7fb9dc0152e4b3760e7d1b9b3f57ac998121386f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        $__internal_5bed5a0fdb0bdd76c2f7280ff9848cf8c0559c9109d7ffaf88309baa95bfbd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bed5a0fdb0bdd76c2f7280ff9848cf8c0559c9109d7ffaf88309baa95bfbd25->enter($__internal_5bed5a0fdb0bdd76c2f7280ff9848cf8c0559c9109d7ffaf88309baa95bfbd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute(($context["field_options"] ?? $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_48786df9530339a6320c953a7fb9dc0152e4b3760e7d1b9b3f57ac998121386f->leave($__internal_48786df9530339a6320c953a7fb9dc0152e4b3760e7d1b9b3f57ac998121386f_prof);

        
        $__internal_5bed5a0fdb0bdd76c2f7280ff9848cf8c0559c9109d7ffaf88309baa95bfbd25->leave($__internal_5bed5a0fdb0bdd76c2f7280ff9848cf8c0559c9109d7ffaf88309baa95bfbd25_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_date.html.twig";
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
", "EasyAdminBundle:default:field_date.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_date.html.twig");
    }
}
