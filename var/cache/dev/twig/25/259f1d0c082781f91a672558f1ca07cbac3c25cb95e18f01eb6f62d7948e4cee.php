<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_38d124c6c39206bb5ed03ef6ace1683d525b039f58d50f972acfcf00dd5d0a77 extends Twig_Template
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
        $__internal_1429f9f087e09737ac908fa5e2d0dc79250b844c7c371ab82c2bc89aeb2fe655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1429f9f087e09737ac908fa5e2d0dc79250b844c7c371ab82c2bc89aeb2fe655->enter($__internal_1429f9f087e09737ac908fa5e2d0dc79250b844c7c371ab82c2bc89aeb2fe655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5d0c2631e3e02134f1ba97233e29e68dbda87199e5082b9df0abcd1a25ca7f40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0c2631e3e02134f1ba97233e29e68dbda87199e5082b9df0abcd1a25ca7f40->enter($__internal_5d0c2631e3e02134f1ba97233e29e68dbda87199e5082b9df0abcd1a25ca7f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_1429f9f087e09737ac908fa5e2d0dc79250b844c7c371ab82c2bc89aeb2fe655->leave($__internal_1429f9f087e09737ac908fa5e2d0dc79250b844c7c371ab82c2bc89aeb2fe655_prof);

        
        $__internal_5d0c2631e3e02134f1ba97233e29e68dbda87199e5082b9df0abcd1a25ca7f40->leave($__internal_5d0c2631e3e02134f1ba97233e29e68dbda87199e5082b9df0abcd1a25ca7f40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
