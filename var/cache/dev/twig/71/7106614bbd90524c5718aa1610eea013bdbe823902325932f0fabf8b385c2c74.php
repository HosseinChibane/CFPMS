<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_06e934ddeea4cb006fe3ecd49cfcae4993660a865757765a54be460856e86e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_57cf21e832dcf39034015da25f95fa95673f66288e87fc853d260e9913c06604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57cf21e832dcf39034015da25f95fa95673f66288e87fc853d260e9913c06604->enter($__internal_57cf21e832dcf39034015da25f95fa95673f66288e87fc853d260e9913c06604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_7e6186af188f1fa019d1e5f7e7fa8be6be613bc560a914a7d859c8a0058f2ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6186af188f1fa019d1e5f7e7fa8be6be613bc560a914a7d859c8a0058f2ced->enter($__internal_7e6186af188f1fa019d1e5f7e7fa8be6be613bc560a914a7d859c8a0058f2ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57cf21e832dcf39034015da25f95fa95673f66288e87fc853d260e9913c06604->leave($__internal_57cf21e832dcf39034015da25f95fa95673f66288e87fc853d260e9913c06604_prof);

        
        $__internal_7e6186af188f1fa019d1e5f7e7fa8be6be613bc560a914a7d859c8a0058f2ced->leave($__internal_7e6186af188f1fa019d1e5f7e7fa8be6be613bc560a914a7d859c8a0058f2ced_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_93f025745006127803259c495d7960e16cddb60cb5a97a0b542ebdb376d225f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f025745006127803259c495d7960e16cddb60cb5a97a0b542ebdb376d225f6->enter($__internal_93f025745006127803259c495d7960e16cddb60cb5a97a0b542ebdb376d225f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3b47ff403fa85bc3fa9ae92339535d513d4681e6588b21d0bf0c19e77cf5b541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b47ff403fa85bc3fa9ae92339535d513d4681e6588b21d0bf0c19e77cf5b541->enter($__internal_3b47ff403fa85bc3fa9ae92339535d513d4681e6588b21d0bf0c19e77cf5b541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_3b47ff403fa85bc3fa9ae92339535d513d4681e6588b21d0bf0c19e77cf5b541->leave($__internal_3b47ff403fa85bc3fa9ae92339535d513d4681e6588b21d0bf0c19e77cf5b541_prof);

        
        $__internal_93f025745006127803259c495d7960e16cddb60cb5a97a0b542ebdb376d225f6->leave($__internal_93f025745006127803259c495d7960e16cddb60cb5a97a0b542ebdb376d225f6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Profile\\edit.html.twig");
    }
}
