<?php

/* EasyAdminBundle:default:field_text.html.twig */
class __TwigTemplate_8e7207eae5aa289288599988b471ce3e922770db9b4314ddad493caf942e922c extends Twig_Template
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
        $__internal_e522561c63482e49df72f9e72ad3a9d1f1afb8128963aa16a8b721f5ff66dc7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e522561c63482e49df72f9e72ad3a9d1f1afb8128963aa16a8b721f5ff66dc7f->enter($__internal_e522561c63482e49df72f9e72ad3a9d1f1afb8128963aa16a8b721f5ff66dc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        $__internal_9c502a87514b1eaf09581e5126bb7f713f83304248b3c2203a0f758ef82b2b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c502a87514b1eaf09581e5126bb7f713f83304248b3c2203a0f758ef82b2b4f->enter($__internal_9c502a87514b1eaf09581e5126bb7f713f83304248b3c2203a0f758ef82b2b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_text.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    ";
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_e522561c63482e49df72f9e72ad3a9d1f1afb8128963aa16a8b721f5ff66dc7f->leave($__internal_e522561c63482e49df72f9e72ad3a9d1f1afb8128963aa16a8b721f5ff66dc7f_prof);

        
        $__internal_9c502a87514b1eaf09581e5126bb7f713f83304248b3c2203a0f758ef82b2b4f->leave($__internal_9c502a87514b1eaf09581e5126bb7f713f83304248b3c2203a0f758ef82b2b4f_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if view == 'show' %}
    {{ value|nl2br }}
{% else %}
    {{ value|easyadmin_truncate }}
{% endif %}
", "EasyAdminBundle:default:field_text.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_text.html.twig");
    }
}
