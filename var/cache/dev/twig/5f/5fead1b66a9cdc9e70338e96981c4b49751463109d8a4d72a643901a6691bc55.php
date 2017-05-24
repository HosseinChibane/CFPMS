<?php

/* @EasyAdmin/default/field_email.html.twig */
class __TwigTemplate_6a4ccd76c87eb92c9c82bf1dbd9d76205b0da1652c062781ce81a50d02cd88d0 extends Twig_Template
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
        $__internal_6f7d2f6b51cb742357e566b482f2b5dd78052572bc24bcc2530a1a8268b7b2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f7d2f6b51cb742357e566b482f2b5dd78052572bc24bcc2530a1a8268b7b2dc->enter($__internal_6f7d2f6b51cb742357e566b482f2b5dd78052572bc24bcc2530a1a8268b7b2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_email.html.twig"));

        $__internal_544d7e42e7fe93544121c54c16a5d0cfd5dde15913c92f78c855e1d57c7f12a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_544d7e42e7fe93544121c54c16a5d0cfd5dde15913c92f78c855e1d57c7f12a9->enter($__internal_544d7e42e7fe93544121c54c16a5d0cfd5dde15913c92f78c855e1d57c7f12a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_email.html.twig"));

        // line 1
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 2
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
";
        } else {
            // line 4
            echo "    <a href=\"mailto:";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->truncateText($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
            echo "</a>
";
        }
        
        $__internal_6f7d2f6b51cb742357e566b482f2b5dd78052572bc24bcc2530a1a8268b7b2dc->leave($__internal_6f7d2f6b51cb742357e566b482f2b5dd78052572bc24bcc2530a1a8268b7b2dc_prof);

        
        $__internal_544d7e42e7fe93544121c54c16a5d0cfd5dde15913c92f78c855e1d57c7f12a9->leave($__internal_544d7e42e7fe93544121c54c16a5d0cfd5dde15913c92f78c855e1d57c7f12a9_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  27 => 2,  25 => 1,);
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
    <a href=\"mailto:{{ value }}\">{{ value }}</a>
{% else %}
    <a href=\"mailto:{{ value }}\">{{ value|easyadmin_truncate }}</a>
{% endif %}
", "@EasyAdmin/default/field_email.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_email.html.twig");
    }
}
