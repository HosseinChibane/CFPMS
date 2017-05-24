<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0f6adebc45e96235a3330aaf4059fdef43a9b0911df61bbbbc9b61e18903375c extends Twig_Template
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
        $__internal_f905530b1f5ababa9d2fed2c6beaf9a0754ac56226b92d35304949f6cf2901c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f905530b1f5ababa9d2fed2c6beaf9a0754ac56226b92d35304949f6cf2901c7->enter($__internal_f905530b1f5ababa9d2fed2c6beaf9a0754ac56226b92d35304949f6cf2901c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_3d651792995a25211df035a5c6eda2ee2a85a3fab0a6c16de016c1a1ac9a5b01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d651792995a25211df035a5c6eda2ee2a85a3fab0a6c16de016c1a1ac9a5b01->enter($__internal_3d651792995a25211df035a5c6eda2ee2a85a3fab0a6c16de016c1a1ac9a5b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f905530b1f5ababa9d2fed2c6beaf9a0754ac56226b92d35304949f6cf2901c7->leave($__internal_f905530b1f5ababa9d2fed2c6beaf9a0754ac56226b92d35304949f6cf2901c7_prof);

        
        $__internal_3d651792995a25211df035a5c6eda2ee2a85a3fab0a6c16de016c1a1ac9a5b01->leave($__internal_3d651792995a25211df035a5c6eda2ee2a85a3fab0a6c16de016c1a1ac9a5b01_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
