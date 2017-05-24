<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_80e7e4cc7b7a5ad3726c7dc35ac1d8c378510f2c532b415e287d05882b07bde9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_2ef7149f1c39b52537baedcb79ae3dab411a057775d6584e2183db03900e5b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ef7149f1c39b52537baedcb79ae3dab411a057775d6584e2183db03900e5b70->enter($__internal_2ef7149f1c39b52537baedcb79ae3dab411a057775d6584e2183db03900e5b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_d8a1f5682629e78b08978eed7a5cf3390ed64c730707556f1201337def4ffb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a1f5682629e78b08978eed7a5cf3390ed64c730707556f1201337def4ffb60->enter($__internal_d8a1f5682629e78b08978eed7a5cf3390ed64c730707556f1201337def4ffb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ef7149f1c39b52537baedcb79ae3dab411a057775d6584e2183db03900e5b70->leave($__internal_2ef7149f1c39b52537baedcb79ae3dab411a057775d6584e2183db03900e5b70_prof);

        
        $__internal_d8a1f5682629e78b08978eed7a5cf3390ed64c730707556f1201337def4ffb60->leave($__internal_d8a1f5682629e78b08978eed7a5cf3390ed64c730707556f1201337def4ffb60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee9348dcdf70c00a4e6af3589813c6992701be84d5ac8768304f4c5f82cee68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee9348dcdf70c00a4e6af3589813c6992701be84d5ac8768304f4c5f82cee68c->enter($__internal_ee9348dcdf70c00a4e6af3589813c6992701be84d5ac8768304f4c5f82cee68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3037a39f0eb8e76d8ff234c73416c2b1ba22d49e78d925ca44af908027240ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3037a39f0eb8e76d8ff234c73416c2b1ba22d49e78d925ca44af908027240ee0->enter($__internal_3037a39f0eb8e76d8ff234c73416c2b1ba22d49e78d925ca44af908027240ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_3037a39f0eb8e76d8ff234c73416c2b1ba22d49e78d925ca44af908027240ee0->leave($__internal_3037a39f0eb8e76d8ff234c73416c2b1ba22d49e78d925ca44af908027240ee0_prof);

        
        $__internal_ee9348dcdf70c00a4e6af3589813c6992701be84d5ac8768304f4c5f82cee68c->leave($__internal_ee9348dcdf70c00a4e6af3589813c6992701be84d5ac8768304f4c5f82cee68c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Group\\edit.html.twig");
    }
}
