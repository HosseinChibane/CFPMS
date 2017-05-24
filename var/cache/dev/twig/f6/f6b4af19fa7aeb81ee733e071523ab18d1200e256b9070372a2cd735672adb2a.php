<?php

/* @EasyAdmin/default/field_object.html.twig */
class __TwigTemplate_d59cc9ea4155264687ea4f2f3dd081c5fdf8380c9acae50580a126e9b84df194 extends Twig_Template
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
        $__internal_8e7ce18cd5ce93a3d7f2f8b014cd1dd8c9f34e9f00b898b9c3081d00bc806975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e7ce18cd5ce93a3d7f2f8b014cd1dd8c9f34e9f00b898b9c3081d00bc806975->enter($__internal_8e7ce18cd5ce93a3d7f2f8b014cd1dd8c9f34e9f00b898b9c3081d00bc806975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_object.html.twig"));

        $__internal_d1f6d1332c3a55f7e9ae5686de9e2b6428c3aa828bb0ac3c6f8de64f60994ea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f6d1332c3a55f7e9ae5686de9e2b6428c3aa828bb0ac3c6f8de64f60994ea2->enter($__internal_d1f6d1332c3a55f7e9ae5686de9e2b6428c3aa828bb0ac3c6f8de64f60994ea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_object.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.object", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_8e7ce18cd5ce93a3d7f2f8b014cd1dd8c9f34e9f00b898b9c3081d00bc806975->leave($__internal_8e7ce18cd5ce93a3d7f2f8b014cd1dd8c9f34e9f00b898b9c3081d00bc806975_prof);

        
        $__internal_d1f6d1332c3a55f7e9ae5686de9e2b6428c3aa828bb0ac3c6f8de64f60994ea2->leave($__internal_d1f6d1332c3a55f7e9ae5686de9e2b6428c3aa828bb0ac3c6f8de64f60994ea2_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_object.html.twig";
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
        return new Twig_Source("<span class=\"label\">{{ 'label.object'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/field_object.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\field_object.html.twig");
    }
}
