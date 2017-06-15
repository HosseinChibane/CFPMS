<?php

/* @EasyAdmin/default/field_image.html.twig */
class __TwigTemplate_d503c478d666dfcab07089a76074ed3802db558ddb306d0b8a044a96925af918 extends Twig_Template
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
        $__internal_be6268149a8c3d23ebf018bc8d1c7b4e829ca28b2e45dfa20f767d456e52cf44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6268149a8c3d23ebf018bc8d1c7b4e829ca28b2e45dfa20f767d456e52cf44->enter($__internal_be6268149a8c3d23ebf018bc8d1c7b4e829ca28b2e45dfa20f767d456e52cf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_image.html.twig"));

        $__internal_5e7aa93fc39d7a2a510d0f91591c632ca4212f8b009f3222b1c49feac8464637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7aa93fc39d7a2a510d0f91591c632ca4212f8b009f3222b1c49feac8464637->enter($__internal_5e7aa93fc39d7a2a510d0f91591c632ca4212f8b009f3222b1c49feac8464637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, ($context["uuid"] ?? $this->getContext($context, "uuid")), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 5
        echo twig_escape_filter($this->env, ($context["uuid"] ?? $this->getContext($context, "uuid")), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_be6268149a8c3d23ebf018bc8d1c7b4e829ca28b2e45dfa20f767d456e52cf44->leave($__internal_be6268149a8c3d23ebf018bc8d1c7b4e829ca28b2e45dfa20f767d456e52cf44_prof);

        
        $__internal_5e7aa93fc39d7a2a510d0f91591c632ca4212f8b009f3222b1c49feac8464637->leave($__internal_5e7aa93fc39d7a2a510d0f91591c632ca4212f8b009f3222b1c49feac8464637_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 5,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ uuid }}\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"{{ asset(value) }}\">
</a>

<div id=\"easyadmin-lightbox-{{ uuid }}\" class=\"easyadmin-lightbox\">
    <img src=\"{{ asset(value) }}\">
</div>
", "@EasyAdmin/default/field_image.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_image.html.twig");
    }
}
