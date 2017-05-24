<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_cf472ffee65e1942b1d4da9a06ac40586b7742c98a1817cfab13cd9244b7f8b9 extends Twig_Template
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
        $__internal_3ec9f3802d0b717941982a710e80808b9c84b28034e3c679e50dd6c6c1823983 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec9f3802d0b717941982a710e80808b9c84b28034e3c679e50dd6c6c1823983->enter($__internal_3ec9f3802d0b717941982a710e80808b9c84b28034e3c679e50dd6c6c1823983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e04a367f9f7316d208a36711fc2e2dcfe8c36e5f73356bd3ca79cf939bf35141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04a367f9f7316d208a36711fc2e2dcfe8c36e5f73356bd3ca79cf939bf35141->enter($__internal_e04a367f9f7316d208a36711fc2e2dcfe8c36e5f73356bd3ca79cf939bf35141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3ec9f3802d0b717941982a710e80808b9c84b28034e3c679e50dd6c6c1823983->leave($__internal_3ec9f3802d0b717941982a710e80808b9c84b28034e3c679e50dd6c6c1823983_prof);

        
        $__internal_e04a367f9f7316d208a36711fc2e2dcfe8c36e5f73356bd3ca79cf939bf35141->leave($__internal_e04a367f9f7316d208a36711fc2e2dcfe8c36e5f73356bd3ca79cf939bf35141_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
