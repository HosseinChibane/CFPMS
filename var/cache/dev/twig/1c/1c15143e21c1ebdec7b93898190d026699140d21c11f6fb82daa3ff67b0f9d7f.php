<?php

/* EasyAdminBundle:default:field_id.html.twig */
class __TwigTemplate_b4f691cb2159b8f648c81a7085f0e70e483fbe8ea28f5c9e1cb3f365345c5115 extends Twig_Template
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
        $__internal_8e5c0b5441f5639c962821fd3384dd3e346f61029aa811b8c712592fdc53ba09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5c0b5441f5639c962821fd3384dd3e346f61029aa811b8c712592fdc53ba09->enter($__internal_8e5c0b5441f5639c962821fd3384dd3e346f61029aa811b8c712592fdc53ba09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        $__internal_60d24a4a34b1519e973c01b3dd918ba05790f539323e7d56d2dd328777e9cd30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60d24a4a34b1519e973c01b3dd918ba05790f539323e7d56d2dd328777e9cd30->enter($__internal_60d24a4a34b1519e973c01b3dd918ba05790f539323e7d56d2dd328777e9cd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_id.html.twig"));

        // line 2
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "
";
        
        $__internal_8e5c0b5441f5639c962821fd3384dd3e346f61029aa811b8c712592fdc53ba09->leave($__internal_8e5c0b5441f5639c962821fd3384dd3e346f61029aa811b8c712592fdc53ba09_prof);

        
        $__internal_60d24a4a34b1519e973c01b3dd918ba05790f539323e7d56d2dd328777e9cd30->leave($__internal_60d24a4a34b1519e973c01b3dd918ba05790f539323e7d56d2dd328777e9cd30_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_id.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this field template is used to avoid formatting the special ID attribute as a number #}
{{ value }}
", "EasyAdminBundle:default:field_id.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_id.html.twig");
    }
}
