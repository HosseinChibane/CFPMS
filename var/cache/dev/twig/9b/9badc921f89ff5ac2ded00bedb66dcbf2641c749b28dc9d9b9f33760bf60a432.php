<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_1952df5f350b780ccd7bc1e0994d5f68963df8ee89373a62b3207713dba10db2 extends Twig_Template
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
        $__internal_e0c9b5a1de55b4c7ca61318618f2ce5435609772df70efc34ddc6e01e2d98dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c9b5a1de55b4c7ca61318618f2ce5435609772df70efc34ddc6e01e2d98dd3->enter($__internal_e0c9b5a1de55b4c7ca61318618f2ce5435609772df70efc34ddc6e01e2d98dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_1144d9402064d9fa5ca41fd4d2f699c5551e54bc43fa8365d69d37fbdeb53e34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1144d9402064d9fa5ca41fd4d2f699c5551e54bc43fa8365d69d37fbdeb53e34->enter($__internal_1144d9402064d9fa5ca41fd4d2f699c5551e54bc43fa8365d69d37fbdeb53e34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e0c9b5a1de55b4c7ca61318618f2ce5435609772df70efc34ddc6e01e2d98dd3->leave($__internal_e0c9b5a1de55b4c7ca61318618f2ce5435609772df70efc34ddc6e01e2d98dd3_prof);

        
        $__internal_1144d9402064d9fa5ca41fd4d2f699c5551e54bc43fa8365d69d37fbdeb53e34->leave($__internal_1144d9402064d9fa5ca41fd4d2f699c5551e54bc43fa8365d69d37fbdeb53e34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
