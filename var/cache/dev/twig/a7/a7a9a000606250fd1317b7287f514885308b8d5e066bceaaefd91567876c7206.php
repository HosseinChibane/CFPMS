<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_579620bcb378aac998e6891f10c56cdd275c9474ff0aa4080330bd33cd99c7e6 extends Twig_Template
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
        $__internal_aebf70da8bd1d536981e193e4113da4081b93ce2f737bdcbeb083790fe8b3658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebf70da8bd1d536981e193e4113da4081b93ce2f737bdcbeb083790fe8b3658->enter($__internal_aebf70da8bd1d536981e193e4113da4081b93ce2f737bdcbeb083790fe8b3658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        $__internal_f93cd98a18c1c989fedf34f926c600b8c7d6439714aab6c9dfd7d08a8e0cdd4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93cd98a18c1c989fedf34f926c600b8c7d6439714aab6c9dfd7d08a8e0cdd4c->enter($__internal_f93cd98a18c1c989fedf34f926c600b8c7d6439714aab6c9dfd7d08a8e0cdd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_aebf70da8bd1d536981e193e4113da4081b93ce2f737bdcbeb083790fe8b3658->leave($__internal_aebf70da8bd1d536981e193e4113da4081b93ce2f737bdcbeb083790fe8b3658_prof);

        
        $__internal_f93cd98a18c1c989fedf34f926c600b8c7d6439714aab6c9dfd7d08a8e0cdd4c->leave($__internal_f93cd98a18c1c989fedf34f926c600b8c7d6439714aab6c9dfd7d08a8e0cdd4c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("<span class=\"label label-empty\">{{ 'label.empty'|trans(domain = 'EasyAdminBundle') }}</span>
", "EasyAdminBundle:default:label_empty.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/label_empty.html.twig");
    }
}
