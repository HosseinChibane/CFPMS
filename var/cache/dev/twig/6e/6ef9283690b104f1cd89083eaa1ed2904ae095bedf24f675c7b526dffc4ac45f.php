<?php

/* @FOSUser/Group/edit_content.html.twig */
class __TwigTemplate_f0a32eb8614cce76d1750a47a7eec439c48e39c3a995e09f2d99409d7fa226c7 extends Twig_Template
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
        $__internal_972a7dbc4d8ad4d68a0cc2151c766d9d0326e37cd2e76b238835f6ecf9514955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_972a7dbc4d8ad4d68a0cc2151c766d9d0326e37cd2e76b238835f6ecf9514955->enter($__internal_972a7dbc4d8ad4d68a0cc2151c766d9d0326e37cd2e76b238835f6ecf9514955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        $__internal_48c6a95cdc7dc2bfa2323fc5c7c8ac3f85bea59a54693d082094fb009c039ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c6a95cdc7dc2bfa2323fc5c7c8ac3f85bea59a54693d082094fb009c039ae4->enter($__internal_48c6a95cdc7dc2bfa2323fc5c7c8ac3f85bea59a54693d082094fb009c039ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => ($context["group_name"] ?? $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_972a7dbc4d8ad4d68a0cc2151c766d9d0326e37cd2e76b238835f6ecf9514955->leave($__internal_972a7dbc4d8ad4d68a0cc2151c766d9d0326e37cd2e76b238835f6ecf9514955_prof);

        
        $__internal_48c6a95cdc7dc2bfa2323fc5c7c8ac3f85bea59a54693d082094fb009c039ae4->leave($__internal_48c6a95cdc7dc2bfa2323fc5c7c8ac3f85bea59a54693d082094fb009c039ae4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/edit_content.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Group\\edit_content.html.twig");
    }
}
