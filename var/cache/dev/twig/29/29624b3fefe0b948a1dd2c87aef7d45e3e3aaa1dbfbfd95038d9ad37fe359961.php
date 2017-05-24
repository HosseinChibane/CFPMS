<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bab529a9c17928b46add473dfb9f1d57896cf50af09d57b0ccce45b82c44e6e2 extends Twig_Template
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
        $__internal_ac30bf775aaf02cdafda9feabf65b39c9e95010efb5f9d5de1fb304ade353617 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac30bf775aaf02cdafda9feabf65b39c9e95010efb5f9d5de1fb304ade353617->enter($__internal_ac30bf775aaf02cdafda9feabf65b39c9e95010efb5f9d5de1fb304ade353617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_921882a211f9b8b1c6cfcd5443238a970cc8d1686e9a9208972027010abb22f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921882a211f9b8b1c6cfcd5443238a970cc8d1686e9a9208972027010abb22f3->enter($__internal_921882a211f9b8b1c6cfcd5443238a970cc8d1686e9a9208972027010abb22f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ac30bf775aaf02cdafda9feabf65b39c9e95010efb5f9d5de1fb304ade353617->leave($__internal_ac30bf775aaf02cdafda9feabf65b39c9e95010efb5f9d5de1fb304ade353617_prof);

        
        $__internal_921882a211f9b8b1c6cfcd5443238a970cc8d1686e9a9208972027010abb22f3->leave($__internal_921882a211f9b8b1c6cfcd5443238a970cc8d1686e9a9208972027010abb22f3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
