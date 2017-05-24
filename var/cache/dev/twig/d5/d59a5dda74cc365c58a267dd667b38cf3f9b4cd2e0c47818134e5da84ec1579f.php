<?php

/* @EasyAdmin/default/label_empty.html.twig */
class __TwigTemplate_35c2a9e6ce4546ab83ff39ff867d2758376fb3df273e98a3d2bb0c4b8a452313 extends Twig_Template
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
        $__internal_0bc1be422d87224232922b9e8996b4db0e2727d9afa3ffbd2f77048ab074285e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc1be422d87224232922b9e8996b4db0e2727d9afa3ffbd2f77048ab074285e->enter($__internal_0bc1be422d87224232922b9e8996b4db0e2727d9afa3ffbd2f77048ab074285e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        $__internal_7df5b13ce7d95fe5d1b5d239704b7af0242ad604c406360ab0ec0a7fda67dc50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df5b13ce7d95fe5d1b5d239704b7af0242ad604c406360ab0ec0a7fda67dc50->enter($__internal_7df5b13ce7d95fe5d1b5d239704b7af0242ad604c406360ab0ec0a7fda67dc50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_empty.html.twig"));

        // line 1
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_0bc1be422d87224232922b9e8996b4db0e2727d9afa3ffbd2f77048ab074285e->leave($__internal_0bc1be422d87224232922b9e8996b4db0e2727d9afa3ffbd2f77048ab074285e_prof);

        
        $__internal_7df5b13ce7d95fe5d1b5d239704b7af0242ad604c406360ab0ec0a7fda67dc50->leave($__internal_7df5b13ce7d95fe5d1b5d239704b7af0242ad604c406360ab0ec0a7fda67dc50_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_empty.html.twig";
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
", "@EasyAdmin/default/label_empty.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\label_empty.html.twig");
    }
}
