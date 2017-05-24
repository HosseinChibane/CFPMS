<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_2af25f105d5a6649c0878420e21eba9fc7a1de6c9c657ce2382667c3e6390bee extends Twig_Template
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
        $__internal_cb7c2d2d4462a2921864eedba5e750d4abca15d13f57317418d57082951e29a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7c2d2d4462a2921864eedba5e750d4abca15d13f57317418d57082951e29a7->enter($__internal_cb7c2d2d4462a2921864eedba5e750d4abca15d13f57317418d57082951e29a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_f7da88b89e31d112f98efa3c8bac86a2b4fc4db0e68ceaa00cf60f1f880a5bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7da88b89e31d112f98efa3c8bac86a2b4fc4db0e68ceaa00cf60f1f880a5bb4->enter($__internal_f7da88b89e31d112f98efa3c8bac86a2b4fc4db0e68ceaa00cf60f1f880a5bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_cb7c2d2d4462a2921864eedba5e750d4abca15d13f57317418d57082951e29a7->leave($__internal_cb7c2d2d4462a2921864eedba5e750d4abca15d13f57317418d57082951e29a7_prof);

        
        $__internal_f7da88b89e31d112f98efa3c8bac86a2b4fc4db0e68ceaa00cf60f1f880a5bb4->leave($__internal_f7da88b89e31d112f98efa3c8bac86a2b4fc4db0e68ceaa00cf60f1f880a5bb4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
