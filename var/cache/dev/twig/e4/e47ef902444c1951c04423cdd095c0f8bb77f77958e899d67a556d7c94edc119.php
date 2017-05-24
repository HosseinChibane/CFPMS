<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_17dbac356a7299356a56930dbbc0f340c0b1034844214f250876b890f495e609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_648ff4cbae89658a7db771f62e1aed45e78c5245cde765f8f6b4210345d9c46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_648ff4cbae89658a7db771f62e1aed45e78c5245cde765f8f6b4210345d9c46b->enter($__internal_648ff4cbae89658a7db771f62e1aed45e78c5245cde765f8f6b4210345d9c46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_5fe594b8267341aa00b602e4156737ac0c26523e961a4d5ac7ecc8355bbd95a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe594b8267341aa00b602e4156737ac0c26523e961a4d5ac7ecc8355bbd95a2->enter($__internal_5fe594b8267341aa00b602e4156737ac0c26523e961a4d5ac7ecc8355bbd95a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_648ff4cbae89658a7db771f62e1aed45e78c5245cde765f8f6b4210345d9c46b->leave($__internal_648ff4cbae89658a7db771f62e1aed45e78c5245cde765f8f6b4210345d9c46b_prof);

        
        $__internal_5fe594b8267341aa00b602e4156737ac0c26523e961a4d5ac7ecc8355bbd95a2->leave($__internal_5fe594b8267341aa00b602e4156737ac0c26523e961a4d5ac7ecc8355bbd95a2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c21ca1e9ce47bdcacd18f4ed18f07de591d42c73f82a39140b0b143459e7c652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c21ca1e9ce47bdcacd18f4ed18f07de591d42c73f82a39140b0b143459e7c652->enter($__internal_c21ca1e9ce47bdcacd18f4ed18f07de591d42c73f82a39140b0b143459e7c652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_813eb5511c89753d8fc94127b01f27b9c6e4ad76c8dfb527f3bdace51b88660d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813eb5511c89753d8fc94127b01f27b9c6e4ad76c8dfb527f3bdace51b88660d->enter($__internal_813eb5511c89753d8fc94127b01f27b9c6e4ad76c8dfb527f3bdace51b88660d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_813eb5511c89753d8fc94127b01f27b9c6e4ad76c8dfb527f3bdace51b88660d->leave($__internal_813eb5511c89753d8fc94127b01f27b9c6e4ad76c8dfb527f3bdace51b88660d_prof);

        
        $__internal_c21ca1e9ce47bdcacd18f4ed18f07de591d42c73f82a39140b0b143459e7c652->leave($__internal_c21ca1e9ce47bdcacd18f4ed18f07de591d42c73f82a39140b0b143459e7c652_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Registration\\confirmed.html.twig");
    }
}
