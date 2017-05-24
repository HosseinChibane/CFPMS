<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f688f2e419f9e77c25506f50fed0b45998c747298ae96f2fc028e9f9e724e98a extends Twig_Template
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
        $__internal_f094a962148ea8baf582667921178dd52da52e9f61b88ae3201adcc443bab74d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f094a962148ea8baf582667921178dd52da52e9f61b88ae3201adcc443bab74d->enter($__internal_f094a962148ea8baf582667921178dd52da52e9f61b88ae3201adcc443bab74d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_53f9fc0ad51ebef5ea39c3ed6fc32f81ca54190e887b0cc92b8fa438b65cc9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53f9fc0ad51ebef5ea39c3ed6fc32f81ca54190e887b0cc92b8fa438b65cc9fe->enter($__internal_53f9fc0ad51ebef5ea39c3ed6fc32f81ca54190e887b0cc92b8fa438b65cc9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_f094a962148ea8baf582667921178dd52da52e9f61b88ae3201adcc443bab74d->leave($__internal_f094a962148ea8baf582667921178dd52da52e9f61b88ae3201adcc443bab74d_prof);

        
        $__internal_53f9fc0ad51ebef5ea39c3ed6fc32f81ca54190e887b0cc92b8fa438b65cc9fe->leave($__internal_53f9fc0ad51ebef5ea39c3ed6fc32f81ca54190e887b0cc92b8fa438b65cc9fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
