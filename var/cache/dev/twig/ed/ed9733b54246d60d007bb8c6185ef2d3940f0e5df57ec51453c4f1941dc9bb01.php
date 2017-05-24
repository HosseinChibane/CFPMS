<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_e30cea62a55540f2d54a946e79a96820149752bbf09d761f1a8943d2ba27b50b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b8183e70cd6b26e9fac240d31a2a69d27e73d460a5021fc07dfd80acc7c0c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8183e70cd6b26e9fac240d31a2a69d27e73d460a5021fc07dfd80acc7c0c38->enter($__internal_7b8183e70cd6b26e9fac240d31a2a69d27e73d460a5021fc07dfd80acc7c0c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_10cc6a1ce48c38bff50e61d632a81af3befb6ced2866b7a94f96ab2933d7b690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10cc6a1ce48c38bff50e61d632a81af3befb6ced2866b7a94f96ab2933d7b690->enter($__internal_10cc6a1ce48c38bff50e61d632a81af3befb6ced2866b7a94f96ab2933d7b690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b8183e70cd6b26e9fac240d31a2a69d27e73d460a5021fc07dfd80acc7c0c38->leave($__internal_7b8183e70cd6b26e9fac240d31a2a69d27e73d460a5021fc07dfd80acc7c0c38_prof);

        
        $__internal_10cc6a1ce48c38bff50e61d632a81af3befb6ced2866b7a94f96ab2933d7b690->leave($__internal_10cc6a1ce48c38bff50e61d632a81af3befb6ced2866b7a94f96ab2933d7b690_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eaea21dda2a0e7b182b11494ca7082dd506c3905b32fc0976054618afc630e94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaea21dda2a0e7b182b11494ca7082dd506c3905b32fc0976054618afc630e94->enter($__internal_eaea21dda2a0e7b182b11494ca7082dd506c3905b32fc0976054618afc630e94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1304216e4b3fc0695da664602fe2868871922afe9958486939d03d037e9f9c2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1304216e4b3fc0695da664602fe2868871922afe9958486939d03d037e9f9c2a->enter($__internal_1304216e4b3fc0695da664602fe2868871922afe9958486939d03d037e9f9c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_1304216e4b3fc0695da664602fe2868871922afe9958486939d03d037e9f9c2a->leave($__internal_1304216e4b3fc0695da664602fe2868871922afe9958486939d03d037e9f9c2a_prof);

        
        $__internal_eaea21dda2a0e7b182b11494ca7082dd506c3905b32fc0976054618afc630e94->leave($__internal_eaea21dda2a0e7b182b11494ca7082dd506c3905b32fc0976054618afc630e94_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Group\\new.html.twig");
    }
}
