<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_90e9a6936896a6acd13962c5a9ab86faaf072808064fab5f4e6a609f477432fc extends Twig_Template
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
        $__internal_8fa8c5878477c0a376f5bb3193c40aca98f2a2e78efa79f764d13c34d8a54633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fa8c5878477c0a376f5bb3193c40aca98f2a2e78efa79f764d13c34d8a54633->enter($__internal_8fa8c5878477c0a376f5bb3193c40aca98f2a2e78efa79f764d13c34d8a54633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_95423e5e032f4480a93684829ded085ac0179050c516cf2c56113e27d685d9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95423e5e032f4480a93684829ded085ac0179050c516cf2c56113e27d685d9b9->enter($__internal_95423e5e032f4480a93684829ded085ac0179050c516cf2c56113e27d685d9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8fa8c5878477c0a376f5bb3193c40aca98f2a2e78efa79f764d13c34d8a54633->leave($__internal_8fa8c5878477c0a376f5bb3193c40aca98f2a2e78efa79f764d13c34d8a54633_prof);

        
        $__internal_95423e5e032f4480a93684829ded085ac0179050c516cf2c56113e27d685d9b9->leave($__internal_95423e5e032f4480a93684829ded085ac0179050c516cf2c56113e27d685d9b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
