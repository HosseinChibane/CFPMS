<?php

/* @EasyAdmin/default/field_tel.html.twig */
class __TwigTemplate_aec92c1c14799c7f56e09f48cf06881a9895ecb771d4639538a67d6de2ef690c extends Twig_Template
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
        $__internal_4341dcd9ae426e5bda0e65ac672e45d0bd5cfa3eafd151d0476be3c4d8488de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4341dcd9ae426e5bda0e65ac672e45d0bd5cfa3eafd151d0476be3c4d8488de1->enter($__internal_4341dcd9ae426e5bda0e65ac672e45d0bd5cfa3eafd151d0476be3c4d8488de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_tel.html.twig"));

        $__internal_173e88534c6471eb16c3d5ea80a3169328ca8a8c1fc7d438dae3e1da28c855cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_173e88534c6471eb16c3d5ea80a3169328ca8a8c1fc7d438dae3e1da28c855cc->enter($__internal_173e88534c6471eb16c3d5ea80a3169328ca8a8c1fc7d438dae3e1da28c855cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_4341dcd9ae426e5bda0e65ac672e45d0bd5cfa3eafd151d0476be3c4d8488de1->leave($__internal_4341dcd9ae426e5bda0e65ac672e45d0bd5cfa3eafd151d0476be3c4d8488de1_prof);

        
        $__internal_173e88534c6471eb16c3d5ea80a3169328ca8a8c1fc7d438dae3e1da28c855cc->leave($__internal_173e88534c6471eb16c3d5ea80a3169328ca8a8c1fc7d438dae3e1da28c855cc_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_tel.html.twig";
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
        return new Twig_Source("<a href=\"tel:{{ value }}\">{{ value }}</a>
", "@EasyAdmin/default/field_tel.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_tel.html.twig");
    }
}
