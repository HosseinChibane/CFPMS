<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_b1f97f7b820e3649b259dc89b5f046084c249d56bbf67a80670e99de2aadede4 extends Twig_Template
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
        $__internal_05a3bf0aad1c90ee53cbd9aaedd08bd06b3b600b1d031e0574ab3d26a2899696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05a3bf0aad1c90ee53cbd9aaedd08bd06b3b600b1d031e0574ab3d26a2899696->enter($__internal_05a3bf0aad1c90ee53cbd9aaedd08bd06b3b600b1d031e0574ab3d26a2899696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_70a5be5aa966a4fe2f7e6f11f502d8ce11d389521a35d38221e755563f062c7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a5be5aa966a4fe2f7e6f11f502d8ce11d389521a35d38221e755563f062c7d->enter($__internal_70a5be5aa966a4fe2f7e6f11f502d8ce11d389521a35d38221e755563f062c7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_05a3bf0aad1c90ee53cbd9aaedd08bd06b3b600b1d031e0574ab3d26a2899696->leave($__internal_05a3bf0aad1c90ee53cbd9aaedd08bd06b3b600b1d031e0574ab3d26a2899696_prof);

        
        $__internal_70a5be5aa966a4fe2f7e6f11f502d8ce11d389521a35d38221e755563f062c7d->leave($__internal_70a5be5aa966a4fe2f7e6f11f502d8ce11d389521a35d38221e755563f062c7d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
