<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_98d95d02eb99fe0ee26e36d0d8c5418546b81d6ba03fe234221e6388aa26ebb8 extends Twig_Template
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
        $__internal_bd5e92c97a8c1a7143f3c597d3d25b2c2dbe970c4996610866deaefda3df2e58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5e92c97a8c1a7143f3c597d3d25b2c2dbe970c4996610866deaefda3df2e58->enter($__internal_bd5e92c97a8c1a7143f3c597d3d25b2c2dbe970c4996610866deaefda3df2e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e05812e785a9fb46eb609077130c6c441e5fb51257883d4b193c31214a23105d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05812e785a9fb46eb609077130c6c441e5fb51257883d4b193c31214a23105d->enter($__internal_e05812e785a9fb46eb609077130c6c441e5fb51257883d4b193c31214a23105d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_bd5e92c97a8c1a7143f3c597d3d25b2c2dbe970c4996610866deaefda3df2e58->leave($__internal_bd5e92c97a8c1a7143f3c597d3d25b2c2dbe970c4996610866deaefda3df2e58_prof);

        
        $__internal_e05812e785a9fb46eb609077130c6c441e5fb51257883d4b193c31214a23105d->leave($__internal_e05812e785a9fb46eb609077130c6c441e5fb51257883d4b193c31214a23105d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
