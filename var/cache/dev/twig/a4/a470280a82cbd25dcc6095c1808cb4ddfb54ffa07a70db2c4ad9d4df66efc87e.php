<?php

/* EasyAdminBundle:default:field_object.html.twig */
class __TwigTemplate_d8babafd50fa8d886adae6136172790c0df1564952f6d7d486961fb180f57078 extends Twig_Template
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
        $__internal_e64166ebebd65415fedc7baa5722e3c9714690183363614e12af488d92480de4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64166ebebd65415fedc7baa5722e3c9714690183363614e12af488d92480de4->enter($__internal_e64166ebebd65415fedc7baa5722e3c9714690183363614e12af488d92480de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        $__internal_a28b3230f1cf52fc95e4f25153326f7b183563d9dd599de110799e57d626ab3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28b3230f1cf52fc95e4f25153326f7b183563d9dd599de110799e57d626ab3d->enter($__internal_a28b3230f1cf52fc95e4f25153326f7b183563d9dd599de110799e57d626ab3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_e64166ebebd65415fedc7baa5722e3c9714690183363614e12af488d92480de4->leave($__internal_e64166ebebd65415fedc7baa5722e3c9714690183363614e12af488d92480de4_prof);

        
        $__internal_a28b3230f1cf52fc95e4f25153326f7b183563d9dd599de110799e57d626ab3d->leave($__internal_a28b3230f1cf52fc95e4f25153326f7b183563d9dd599de110799e57d626ab3d_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_object.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:field_object.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_object.html.twig");
    }
}
