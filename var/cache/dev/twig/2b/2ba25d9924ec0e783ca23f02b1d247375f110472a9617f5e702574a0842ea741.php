<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_df75d44743057910eb0edfe810685b5128e731d87c549d2c5d008298eac34e0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_ae66993ae814abe7774d679c7a0ee7d6c8d695b922cc1d606afa72866f30cb03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae66993ae814abe7774d679c7a0ee7d6c8d695b922cc1d606afa72866f30cb03->enter($__internal_ae66993ae814abe7774d679c7a0ee7d6c8d695b922cc1d606afa72866f30cb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_696703c9d0b4af5d9fcb8b7c9553193b29b7285f2d6cd78fe931d6b0115c37b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696703c9d0b4af5d9fcb8b7c9553193b29b7285f2d6cd78fe931d6b0115c37b5->enter($__internal_696703c9d0b4af5d9fcb8b7c9553193b29b7285f2d6cd78fe931d6b0115c37b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae66993ae814abe7774d679c7a0ee7d6c8d695b922cc1d606afa72866f30cb03->leave($__internal_ae66993ae814abe7774d679c7a0ee7d6c8d695b922cc1d606afa72866f30cb03_prof);

        
        $__internal_696703c9d0b4af5d9fcb8b7c9553193b29b7285f2d6cd78fe931d6b0115c37b5->leave($__internal_696703c9d0b4af5d9fcb8b7c9553193b29b7285f2d6cd78fe931d6b0115c37b5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67ad543896c26c225a55efdcfe35fc6f9598343fb30418bf59e89a324046a544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ad543896c26c225a55efdcfe35fc6f9598343fb30418bf59e89a324046a544->enter($__internal_67ad543896c26c225a55efdcfe35fc6f9598343fb30418bf59e89a324046a544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a2bee827e5d9c57a071eb85b127f9b827194c6c5867b2bfbecc5974dca660af7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bee827e5d9c57a071eb85b127f9b827194c6c5867b2bfbecc5974dca660af7->enter($__internal_a2bee827e5d9c57a071eb85b127f9b827194c6c5867b2bfbecc5974dca660af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_a2bee827e5d9c57a071eb85b127f9b827194c6c5867b2bfbecc5974dca660af7->leave($__internal_a2bee827e5d9c57a071eb85b127f9b827194c6c5867b2bfbecc5974dca660af7_prof);

        
        $__internal_67ad543896c26c225a55efdcfe35fc6f9598343fb30418bf59e89a324046a544->leave($__internal_67ad543896c26c225a55efdcfe35fc6f9598343fb30418bf59e89a324046a544_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Group\\list.html.twig");
    }
}
