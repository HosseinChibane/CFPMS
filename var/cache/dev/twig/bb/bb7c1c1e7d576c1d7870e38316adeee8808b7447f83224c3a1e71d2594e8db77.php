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
        $__internal_58936ba8881f591274d6b3dd4d60c1b5e4fce747e1d3f157a91c98dd32f36467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58936ba8881f591274d6b3dd4d60c1b5e4fce747e1d3f157a91c98dd32f36467->enter($__internal_58936ba8881f591274d6b3dd4d60c1b5e4fce747e1d3f157a91c98dd32f36467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_d3332bc4af7ea5e75bcb5e8ae5b567a45a70268da514e2bf8fb0f120374fb4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3332bc4af7ea5e75bcb5e8ae5b567a45a70268da514e2bf8fb0f120374fb4ac->enter($__internal_d3332bc4af7ea5e75bcb5e8ae5b567a45a70268da514e2bf8fb0f120374fb4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58936ba8881f591274d6b3dd4d60c1b5e4fce747e1d3f157a91c98dd32f36467->leave($__internal_58936ba8881f591274d6b3dd4d60c1b5e4fce747e1d3f157a91c98dd32f36467_prof);

        
        $__internal_d3332bc4af7ea5e75bcb5e8ae5b567a45a70268da514e2bf8fb0f120374fb4ac->leave($__internal_d3332bc4af7ea5e75bcb5e8ae5b567a45a70268da514e2bf8fb0f120374fb4ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_202a38f80fe928e82b8a7f7ae9a15eb7666c09ecfb889a24742b21f363bd6959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202a38f80fe928e82b8a7f7ae9a15eb7666c09ecfb889a24742b21f363bd6959->enter($__internal_202a38f80fe928e82b8a7f7ae9a15eb7666c09ecfb889a24742b21f363bd6959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cabcb732724c8dc99f2cf2fa0a99c8903b13674fd76219d45319c84af99068dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabcb732724c8dc99f2cf2fa0a99c8903b13674fd76219d45319c84af99068dd->enter($__internal_cabcb732724c8dc99f2cf2fa0a99c8903b13674fd76219d45319c84af99068dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_cabcb732724c8dc99f2cf2fa0a99c8903b13674fd76219d45319c84af99068dd->leave($__internal_cabcb732724c8dc99f2cf2fa0a99c8903b13674fd76219d45319c84af99068dd_prof);

        
        $__internal_202a38f80fe928e82b8a7f7ae9a15eb7666c09ecfb889a24742b21f363bd6959->leave($__internal_202a38f80fe928e82b8a7f7ae9a15eb7666c09ecfb889a24742b21f363bd6959_prof);

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
