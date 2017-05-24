<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_8d7c5b03c577d25549a4f77fc6057dff22817a4f48fec6f55adb67b9c43b14e4 extends Twig_Template
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
        $__internal_101c181405ec702479f6cb8177047c225ad370bcf6f98be2d9d427ee5d8849f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101c181405ec702479f6cb8177047c225ad370bcf6f98be2d9d427ee5d8849f3->enter($__internal_101c181405ec702479f6cb8177047c225ad370bcf6f98be2d9d427ee5d8849f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_5182faabf66df525db872517cc0a84e7927f5067c923881a8751bdb3a76fd895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5182faabf66df525db872517cc0a84e7927f5067c923881a8751bdb3a76fd895->enter($__internal_5182faabf66df525db872517cc0a84e7927f5067c923881a8751bdb3a76fd895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_101c181405ec702479f6cb8177047c225ad370bcf6f98be2d9d427ee5d8849f3->leave($__internal_101c181405ec702479f6cb8177047c225ad370bcf6f98be2d9d427ee5d8849f3_prof);

        
        $__internal_5182faabf66df525db872517cc0a84e7927f5067c923881a8751bdb3a76fd895->leave($__internal_5182faabf66df525db872517cc0a84e7927f5067c923881a8751bdb3a76fd895_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Profile\\show_content.html.twig");
    }
}
