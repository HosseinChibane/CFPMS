<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_fb63f279a3a476d5ca7dc66720968c8ab10fa97980175d5fbe515c4313542a6c extends Twig_Template
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
        $__internal_9539bc3bf2bbf95e925f5f1101a89e359711d6a5d4c98ef51bf8492c87418c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9539bc3bf2bbf95e925f5f1101a89e359711d6a5d4c98ef51bf8492c87418c3d->enter($__internal_9539bc3bf2bbf95e925f5f1101a89e359711d6a5d4c98ef51bf8492c87418c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_abc2a143f527f09b75296934f8a0fcd0f59071c9b3157141b3eea4b1d67756c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abc2a143f527f09b75296934f8a0fcd0f59071c9b3157141b3eea4b1d67756c0->enter($__internal_abc2a143f527f09b75296934f8a0fcd0f59071c9b3157141b3eea4b1d67756c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_9539bc3bf2bbf95e925f5f1101a89e359711d6a5d4c98ef51bf8492c87418c3d->leave($__internal_9539bc3bf2bbf95e925f5f1101a89e359711d6a5d4c98ef51bf8492c87418c3d_prof);

        
        $__internal_abc2a143f527f09b75296934f8a0fcd0f59071c9b3157141b3eea4b1d67756c0->leave($__internal_abc2a143f527f09b75296934f8a0fcd0f59071c9b3157141b3eea4b1d67756c0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Group\\show_content.html.twig");
    }
}
