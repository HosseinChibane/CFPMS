<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_73a212b2ee30f7d0f87536085ec317461873e9d544ce5169030811d67344498f extends Twig_Template
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
        $__internal_4d12ae9800823cf857b113a245e25cdd01eb9233717509093cd3f0b6ee384eb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d12ae9800823cf857b113a245e25cdd01eb9233717509093cd3f0b6ee384eb2->enter($__internal_4d12ae9800823cf857b113a245e25cdd01eb9233717509093cd3f0b6ee384eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_34a9f4c8cdd021ec0ce38be29686ff2188dbf1e27eee45b4c0f9240649da7323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a9f4c8cdd021ec0ce38be29686ff2188dbf1e27eee45b4c0f9240649da7323->enter($__internal_34a9f4c8cdd021ec0ce38be29686ff2188dbf1e27eee45b4c0f9240649da7323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_4d12ae9800823cf857b113a245e25cdd01eb9233717509093cd3f0b6ee384eb2->leave($__internal_4d12ae9800823cf857b113a245e25cdd01eb9233717509093cd3f0b6ee384eb2_prof);

        
        $__internal_34a9f4c8cdd021ec0ce38be29686ff2188dbf1e27eee45b4c0f9240649da7323->leave($__internal_34a9f4c8cdd021ec0ce38be29686ff2188dbf1e27eee45b4c0f9240649da7323_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
", "FOSUserBundle:Group:show_content.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
