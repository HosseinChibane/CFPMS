<?php

/* @EasyAdmin/default/field_text.html.twig */
class __TwigTemplate_f2ca3daa64631ef953ce5e8ba9902465f2d83f387d21f0d99e7486809f9384cf extends Twig_Template
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
        $__internal_4b30951ddfe4d337796666215ca4760dd77ccb4af17490d46698cfdb0ef9a032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b30951ddfe4d337796666215ca4760dd77ccb4af17490d46698cfdb0ef9a032->enter($__internal_4b30951ddfe4d337796666215ca4760dd77ccb4af17490d46698cfdb0ef9a032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

        $__internal_f4692011fa71e976dd392ccff414bf6312c53e6493bb35ce4e0d8885ba7d7fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4692011fa71e976dd392ccff414bf6312c53e6493bb35ce4e0d8885ba7d7fcb->enter($__internal_f4692011fa71e976dd392ccff414bf6312c53e6493bb35ce4e0d8885ba7d7fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_text.html.twig"));

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
        
        $__internal_4b30951ddfe4d337796666215ca4760dd77ccb4af17490d46698cfdb0ef9a032->leave($__internal_4b30951ddfe4d337796666215ca4760dd77ccb4af17490d46698cfdb0ef9a032_prof);

        
        $__internal_f4692011fa71e976dd392ccff414bf6312c53e6493bb35ce4e0d8885ba7d7fcb->leave($__internal_f4692011fa71e976dd392ccff414bf6312c53e6493bb35ce4e0d8885ba7d7fcb_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_text.html.twig";
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
", "@EasyAdmin/default/field_text.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_text.html.twig");
    }
}
