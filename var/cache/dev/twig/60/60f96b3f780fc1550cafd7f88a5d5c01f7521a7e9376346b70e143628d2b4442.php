<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_c8051abb057faea040c0c6bb7cd339a8c57fd55ed0d6ffed33a8aa26aaf0c164 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_262f5b5b23c6884cb69b339e3873697a639e513c76a2f8d953972731e52e57d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_262f5b5b23c6884cb69b339e3873697a639e513c76a2f8d953972731e52e57d9->enter($__internal_262f5b5b23c6884cb69b339e3873697a639e513c76a2f8d953972731e52e57d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_62dbba832c7440a273b12181a7d2e0703ac31f6e85dc6136867204a9ad3ccc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62dbba832c7440a273b12181a7d2e0703ac31f6e85dc6136867204a9ad3ccc8d->enter($__internal_62dbba832c7440a273b12181a7d2e0703ac31f6e85dc6136867204a9ad3ccc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_262f5b5b23c6884cb69b339e3873697a639e513c76a2f8d953972731e52e57d9->leave($__internal_262f5b5b23c6884cb69b339e3873697a639e513c76a2f8d953972731e52e57d9_prof);

        
        $__internal_62dbba832c7440a273b12181a7d2e0703ac31f6e85dc6136867204a9ad3ccc8d->leave($__internal_62dbba832c7440a273b12181a7d2e0703ac31f6e85dc6136867204a9ad3ccc8d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b3de90466b268da4b872f2d40589ac65afb9ae0f57ec172d4d60b927af1b381d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3de90466b268da4b872f2d40589ac65afb9ae0f57ec172d4d60b927af1b381d->enter($__internal_b3de90466b268da4b872f2d40589ac65afb9ae0f57ec172d4d60b927af1b381d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_80f9ad07532b861a3e0125659b92b00795572fd7e7e7a1c0ee2bb42497b54265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f9ad07532b861a3e0125659b92b00795572fd7e7e7a1c0ee2bb42497b54265->enter($__internal_80f9ad07532b861a3e0125659b92b00795572fd7e7e7a1c0ee2bb42497b54265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_80f9ad07532b861a3e0125659b92b00795572fd7e7e7a1c0ee2bb42497b54265->leave($__internal_80f9ad07532b861a3e0125659b92b00795572fd7e7e7a1c0ee2bb42497b54265_prof);

        
        $__internal_b3de90466b268da4b872f2d40589ac65afb9ae0f57ec172d4d60b927af1b381d->leave($__internal_b3de90466b268da4b872f2d40589ac65afb9ae0f57ec172d4d60b927af1b381d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
