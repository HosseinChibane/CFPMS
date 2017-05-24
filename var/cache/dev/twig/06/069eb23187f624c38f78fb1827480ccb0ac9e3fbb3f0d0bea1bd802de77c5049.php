<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_b1678a3929293b94da9acae29a143864beaac79902bed2c8d8dacee8c261da2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_f1b7fbc5e0e3511c1ab15d38a16e5616887128ec000ff58814b38878063db980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1b7fbc5e0e3511c1ab15d38a16e5616887128ec000ff58814b38878063db980->enter($__internal_f1b7fbc5e0e3511c1ab15d38a16e5616887128ec000ff58814b38878063db980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_c6f25b72c645dad0a70a5bdb2aee9073c11cf480099b86fe0890fcb64ec66bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f25b72c645dad0a70a5bdb2aee9073c11cf480099b86fe0890fcb64ec66bce->enter($__internal_c6f25b72c645dad0a70a5bdb2aee9073c11cf480099b86fe0890fcb64ec66bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b7fbc5e0e3511c1ab15d38a16e5616887128ec000ff58814b38878063db980->leave($__internal_f1b7fbc5e0e3511c1ab15d38a16e5616887128ec000ff58814b38878063db980_prof);

        
        $__internal_c6f25b72c645dad0a70a5bdb2aee9073c11cf480099b86fe0890fcb64ec66bce->leave($__internal_c6f25b72c645dad0a70a5bdb2aee9073c11cf480099b86fe0890fcb64ec66bce_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6950b91015cc78f3ee9d5bc935a3ef54debf6709e1e7da3d9fbe6f46bade0d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6950b91015cc78f3ee9d5bc935a3ef54debf6709e1e7da3d9fbe6f46bade0d3a->enter($__internal_6950b91015cc78f3ee9d5bc935a3ef54debf6709e1e7da3d9fbe6f46bade0d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_90dc17f2f6c61f8d16788151f270a515b087eb67527e55c1be75f7f6b2c85691 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90dc17f2f6c61f8d16788151f270a515b087eb67527e55c1be75f7f6b2c85691->enter($__internal_90dc17f2f6c61f8d16788151f270a515b087eb67527e55c1be75f7f6b2c85691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_90dc17f2f6c61f8d16788151f270a515b087eb67527e55c1be75f7f6b2c85691->leave($__internal_90dc17f2f6c61f8d16788151f270a515b087eb67527e55c1be75f7f6b2c85691_prof);

        
        $__internal_6950b91015cc78f3ee9d5bc935a3ef54debf6709e1e7da3d9fbe6f46bade0d3a->leave($__internal_6950b91015cc78f3ee9d5bc935a3ef54debf6709e1e7da3d9fbe6f46bade0d3a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Registration\\check_email.html.twig");
    }
}
