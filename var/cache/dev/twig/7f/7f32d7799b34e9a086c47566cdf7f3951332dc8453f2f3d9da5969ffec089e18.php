<?php

/* @EasyAdmin/default/label_inaccessible.html.twig */
class __TwigTemplate_b8fc24c0b2e07545d39e9620073f85e3b1867af9681e283c6ecf565c4d5e2c0d extends Twig_Template
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
        $__internal_c36e3767af03a29eef2b54196172d732a9542331fc08d005c2459e55b476b9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36e3767af03a29eef2b54196172d732a9542331fc08d005c2459e55b476b9a1->enter($__internal_c36e3767af03a29eef2b54196172d732a9542331fc08d005c2459e55b476b9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        $__internal_766590119e813809da8b9259eaf14ac65d42a10f91935635d5e05254a39a1039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_766590119e813809da8b9259eaf14ac65d42a10f91935635d5e05254a39a1039->enter($__internal_766590119e813809da8b9259eaf14ac65d42a10f91935635d5e05254a39a1039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_inaccessible.html.twig"));

        // line 2
        echo "
<span class=\"label label-danger\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible.explanation", array(), "EasyAdminBundle"), "html", null, true);
        echo "\">
    ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.inaccessible", array(), "EasyAdminBundle"), "html", null, true);
        echo "
</span>
";
        
        $__internal_c36e3767af03a29eef2b54196172d732a9542331fc08d005c2459e55b476b9a1->leave($__internal_c36e3767af03a29eef2b54196172d732a9542331fc08d005c2459e55b476b9a1_prof);

        
        $__internal_766590119e813809da8b9259eaf14ac65d42a10f91935635d5e05254a39a1039->leave($__internal_766590119e813809da8b9259eaf14ac65d42a10f91935635d5e05254a39a1039_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_inaccessible.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

<span class=\"label label-danger\" title=\"{{ 'label.inaccessible.explanation'|trans }}\">
    {{ 'label.inaccessible'|trans }}
</span>
", "@EasyAdmin/default/label_inaccessible.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\label_inaccessible.html.twig");
    }
}
