<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_f5c1b1e7430916ca0913151c45558bf7b085b32e112cf7270b5cd968871b23f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_13f27ad28c490f29ba580d154b2ab385c8cca0227d44a95131aed4d96b1de083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f27ad28c490f29ba580d154b2ab385c8cca0227d44a95131aed4d96b1de083->enter($__internal_13f27ad28c490f29ba580d154b2ab385c8cca0227d44a95131aed4d96b1de083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_1f5c9c27d5996a32d063144247bff1f5668e8e0f37ec0c164a8b200bf393772a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5c9c27d5996a32d063144247bff1f5668e8e0f37ec0c164a8b200bf393772a->enter($__internal_1f5c9c27d5996a32d063144247bff1f5668e8e0f37ec0c164a8b200bf393772a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13f27ad28c490f29ba580d154b2ab385c8cca0227d44a95131aed4d96b1de083->leave($__internal_13f27ad28c490f29ba580d154b2ab385c8cca0227d44a95131aed4d96b1de083_prof);

        
        $__internal_1f5c9c27d5996a32d063144247bff1f5668e8e0f37ec0c164a8b200bf393772a->leave($__internal_1f5c9c27d5996a32d063144247bff1f5668e8e0f37ec0c164a8b200bf393772a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7b236f4eee23052cfb5d38a40ec644252763ed22140c22f68d2a2f16d4aac0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b236f4eee23052cfb5d38a40ec644252763ed22140c22f68d2a2f16d4aac0b->enter($__internal_e7b236f4eee23052cfb5d38a40ec644252763ed22140c22f68d2a2f16d4aac0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e35edb4d9471951f0a629bbfd1e644420a8781fff0f0ac0ab0ddf0c7e674ffd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e35edb4d9471951f0a629bbfd1e644420a8781fff0f0ac0ab0ddf0c7e674ffd3->enter($__internal_e35edb4d9471951f0a629bbfd1e644420a8781fff0f0ac0ab0ddf0c7e674ffd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_e35edb4d9471951f0a629bbfd1e644420a8781fff0f0ac0ab0ddf0c7e674ffd3->leave($__internal_e35edb4d9471951f0a629bbfd1e644420a8781fff0f0ac0ab0ddf0c7e674ffd3_prof);

        
        $__internal_e7b236f4eee23052cfb5d38a40ec644252763ed22140c22f68d2a2f16d4aac0b->leave($__internal_e7b236f4eee23052cfb5d38a40ec644252763ed22140c22f68d2a2f16d4aac0b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Registration\\register.html.twig");
    }
}
