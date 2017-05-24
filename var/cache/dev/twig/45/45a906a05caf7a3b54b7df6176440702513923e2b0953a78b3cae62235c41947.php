<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_56803f511556a815599e30118ac4dbd984986d57bb6e5c5408ac8329c922d97c extends Twig_Template
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
        $__internal_29c08b7bc799dd7730eb5c770921fbfc38867a54cc5a3ac5dd09c569ee3f2f9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c08b7bc799dd7730eb5c770921fbfc38867a54cc5a3ac5dd09c569ee3f2f9b->enter($__internal_29c08b7bc799dd7730eb5c770921fbfc38867a54cc5a3ac5dd09c569ee3f2f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        $__internal_661025e806141fa227a949b830dc79b42329665d4f84554c9da4822452d012e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661025e806141fa227a949b830dc79b42329665d4f84554c9da4822452d012e5->enter($__internal_661025e806141fa227a949b830dc79b42329665d4f84554c9da4822452d012e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_29c08b7bc799dd7730eb5c770921fbfc38867a54cc5a3ac5dd09c569ee3f2f9b->leave($__internal_29c08b7bc799dd7730eb5c770921fbfc38867a54cc5a3ac5dd09c569ee3f2f9b_prof);

        
        $__internal_661025e806141fa227a949b830dc79b42329665d4f84554c9da4822452d012e5->leave($__internal_661025e806141fa227a949b830dc79b42329665d4f84554c9da4822452d012e5_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_null.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/label_null.html.twig");
    }
}
