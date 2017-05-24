<?php

/* @EasyAdmin/default/field_toggle.html.twig */
class __TwigTemplate_96a35c186ea92b27f5d7c847b8c60f4506d23c10ee633ae2c0b6ae9c8dab42b8 extends Twig_Template
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
        $__internal_95151da788b3eee799b6b2c9ff867cdd87aee5673bf95a2e341b13ac05c41bd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95151da788b3eee799b6b2c9ff867cdd87aee5673bf95a2e341b13ac05c41bd8->enter($__internal_95151da788b3eee799b6b2c9ff867cdd87aee5673bf95a2e341b13ac05c41bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_toggle.html.twig"));

        $__internal_159815f5e736bf315ccbae7728a8bcc9bf1db0c99c2d8c65a200d6e16b57cbc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159815f5e736bf315ccbae7728a8bcc9bf1db0c99c2d8c65a200d6e16b57cbc4->enter($__internal_159815f5e736bf315ccbae7728a8bcc9bf1db0c99c2d8c65a200d6e16b57cbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_toggle.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["view"] ?? $this->getContext($context, "view")) == "show")) {
            // line 4
            echo "    ";
            if ((($context["value"] ?? $this->getContext($context, "value")) == true)) {
                // line 5
                echo "        <span class=\"label label-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 7
                echo "        <span class=\"label label-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
                echo "</span>
    ";
            }
        } else {
            // line 10
            echo "    <input type=\"checkbox\" ";
            echo (((($context["value"] ?? $this->getContext($context, "value")) == true)) ? ("checked") : (""));
            echo "
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "\" data-off=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "\">
";
        }
        
        $__internal_95151da788b3eee799b6b2c9ff867cdd87aee5673bf95a2e341b13ac05c41bd8->leave($__internal_95151da788b3eee799b6b2c9ff867cdd87aee5673bf95a2e341b13ac05c41bd8_prof);

        
        $__internal_159815f5e736bf315ccbae7728a8bcc9bf1db0c99c2d8c65a200d6e16b57cbc4->leave($__internal_159815f5e736bf315ccbae7728a8bcc9bf1db0c99c2d8c65a200d6e16b57cbc4_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  46 => 10,  39 => 7,  33 => 5,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if view == 'show' %}
    {% if value == true %}
        <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
    {% else %}
        <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
    {% endif %}
{% else %}
    <input type=\"checkbox\" {{ value == true ? 'checked' : '' }}
       data-toggle=\"toggle\" data-size=\"mini\"
       data-onstyle=\"success\" data-offstyle=\"danger\"
       data-on=\"{{ 'label.true'|trans }}\" data-off=\"{{ 'label.false'|trans }}\">
{% endif %}
", "@EasyAdmin/default/field_toggle.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_toggle.html.twig");
    }
}
