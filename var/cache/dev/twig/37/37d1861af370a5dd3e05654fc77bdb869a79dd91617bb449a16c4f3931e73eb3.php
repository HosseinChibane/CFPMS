<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_7d29b556e5efc55c2aed4fc788215e70460ac29056018c65e326a393a5496d94 extends Twig_Template
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
        $__internal_323adb32530909a91b1cecc1999c23f59494421d5082fd6fb48a1c04925f638d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_323adb32530909a91b1cecc1999c23f59494421d5082fd6fb48a1c04925f638d->enter($__internal_323adb32530909a91b1cecc1999c23f59494421d5082fd6fb48a1c04925f638d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7cac68ce7ddc374d8eeaa1a22f04067a8095f5c50bc400a39058f88421f2bd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cac68ce7ddc374d8eeaa1a22f04067a8095f5c50bc400a39058f88421f2bd6e->enter($__internal_7cac68ce7ddc374d8eeaa1a22f04067a8095f5c50bc400a39058f88421f2bd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_323adb32530909a91b1cecc1999c23f59494421d5082fd6fb48a1c04925f638d->leave($__internal_323adb32530909a91b1cecc1999c23f59494421d5082fd6fb48a1c04925f638d_prof);

        
        $__internal_7cac68ce7ddc374d8eeaa1a22f04067a8095f5c50bc400a39058f88421f2bd6e->leave($__internal_7cac68ce7ddc374d8eeaa1a22f04067a8095f5c50bc400a39058f88421f2bd6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
