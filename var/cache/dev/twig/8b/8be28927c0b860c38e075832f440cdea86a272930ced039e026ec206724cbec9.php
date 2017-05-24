<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_33e624cb8435983c23019890d136824c71003ebe781a0bcdf192cee4ebfb9857 extends Twig_Template
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
        $__internal_d0d8885fadb72708d6246957e781d0671b7571374e8cab1463a903c16d16c42e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d8885fadb72708d6246957e781d0671b7571374e8cab1463a903c16d16c42e->enter($__internal_d0d8885fadb72708d6246957e781d0671b7571374e8cab1463a903c16d16c42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2602876ca64f3f631c84d038bce790bf624a00f2847cdd86071a0028d15d5682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2602876ca64f3f631c84d038bce790bf624a00f2847cdd86071a0028d15d5682->enter($__internal_2602876ca64f3f631c84d038bce790bf624a00f2847cdd86071a0028d15d5682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d0d8885fadb72708d6246957e781d0671b7571374e8cab1463a903c16d16c42e->leave($__internal_d0d8885fadb72708d6246957e781d0671b7571374e8cab1463a903c16d16c42e_prof);

        
        $__internal_2602876ca64f3f631c84d038bce790bf624a00f2847cdd86071a0028d15d5682->leave($__internal_2602876ca64f3f631c84d038bce790bf624a00f2847cdd86071a0028d15d5682_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
