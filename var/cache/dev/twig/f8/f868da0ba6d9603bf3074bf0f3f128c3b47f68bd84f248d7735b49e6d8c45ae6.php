<?php

/* EasyAdminBundle:default:field_string.html.twig */
class __TwigTemplate_bea5782dd249f98bcb99de1ec12acb19a784ffa39908d7b88527d951f9784a9d extends Twig_Template
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
        $__internal_b51f62efc340c966347318f31828b65b789175f6426042b6d52a45f8a1cfa489 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51f62efc340c966347318f31828b65b789175f6426042b6d52a45f8a1cfa489->enter($__internal_b51f62efc340c966347318f31828b65b789175f6426042b6d52a45f8a1cfa489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

        $__internal_9a66b9ce97d44d45cea9b308d6a0f7a3bd8a246394da1adab83257c06b0d847e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a66b9ce97d44d45cea9b308d6a0f7a3bd8a246394da1adab83257c06b0d847e->enter($__internal_9a66b9ce97d44d45cea9b308d6a0f7a3bd8a246394da1adab83257c06b0d847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_string.html.twig"));

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
        
        $__internal_b51f62efc340c966347318f31828b65b789175f6426042b6d52a45f8a1cfa489->leave($__internal_b51f62efc340c966347318f31828b65b789175f6426042b6d52a45f8a1cfa489_prof);

        
        $__internal_9a66b9ce97d44d45cea9b308d6a0f7a3bd8a246394da1adab83257c06b0d847e->leave($__internal_9a66b9ce97d44d45cea9b308d6a0f7a3bd8a246394da1adab83257c06b0d847e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_string.html.twig";
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
", "EasyAdminBundle:default:field_string.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/field_string.html.twig");
    }
}
