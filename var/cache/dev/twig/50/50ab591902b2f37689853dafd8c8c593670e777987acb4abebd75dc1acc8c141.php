<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_b429f78dc0bb769f38158e662a555586a7a18753e1cd1282d922974f1ff37d38 extends Twig_Template
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
        $__internal_622a66c7f4f738d4b21c522e608e9717f0a886073bba7f1ffce823ba2144e22f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622a66c7f4f738d4b21c522e608e9717f0a886073bba7f1ffce823ba2144e22f->enter($__internal_622a66c7f4f738d4b21c522e608e9717f0a886073bba7f1ffce823ba2144e22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        $__internal_12540aef0c59d57c6bee2c5f3be7f1ab4264e4ce25fb7aad4f848eea4f128a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12540aef0c59d57c6bee2c5f3be7f1ab4264e4ce25fb7aad4f848eea4f128a68->enter($__internal_12540aef0c59d57c6bee2c5f3be7f1ab4264e4ce25fb7aad4f848eea4f128a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_tel.html.twig"));

        // line 1
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</a>
";
        
        $__internal_622a66c7f4f738d4b21c522e608e9717f0a886073bba7f1ffce823ba2144e22f->leave($__internal_622a66c7f4f738d4b21c522e608e9717f0a886073bba7f1ffce823ba2144e22f_prof);

        
        $__internal_12540aef0c59d57c6bee2c5f3be7f1ab4264e4ce25fb7aad4f848eea4f128a68->leave($__internal_12540aef0c59d57c6bee2c5f3be7f1ab4264e4ce25fb7aad4f848eea4f128a68_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
", "EasyAdminBundle:default:field_tel.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_tel.html.twig");
    }
}
