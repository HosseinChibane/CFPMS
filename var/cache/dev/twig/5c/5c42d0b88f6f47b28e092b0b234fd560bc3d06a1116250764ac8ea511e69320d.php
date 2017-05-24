<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_227f29def9f64ea564195fb61e228c095f87ddfbe46cc9b6ebb9c382ebf8e356 extends Twig_Template
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
        $__internal_1565aee0b24f1722dacb5b377d3949906a0e65f5efe7184fab57e5b6a50c0b60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1565aee0b24f1722dacb5b377d3949906a0e65f5efe7184fab57e5b6a50c0b60->enter($__internal_1565aee0b24f1722dacb5b377d3949906a0e65f5efe7184fab57e5b6a50c0b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f0add0a3d9c8984f6e9ea3e7eb67039f8d0c3adadd3775a0fae7547fbbba8a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0add0a3d9c8984f6e9ea3e7eb67039f8d0c3adadd3775a0fae7547fbbba8a42->enter($__internal_f0add0a3d9c8984f6e9ea3e7eb67039f8d0c3adadd3775a0fae7547fbbba8a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1565aee0b24f1722dacb5b377d3949906a0e65f5efe7184fab57e5b6a50c0b60->leave($__internal_1565aee0b24f1722dacb5b377d3949906a0e65f5efe7184fab57e5b6a50c0b60_prof);

        
        $__internal_f0add0a3d9c8984f6e9ea3e7eb67039f8d0c3adadd3775a0fae7547fbbba8a42->leave($__internal_f0add0a3d9c8984f6e9ea3e7eb67039f8d0c3adadd3775a0fae7547fbbba8a42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
