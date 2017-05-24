<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a54d634ac787b821f0bb9dee5c1e5469830ce84848ffc4d3309d62083a2e38bf extends Twig_Template
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
        $__internal_305feb0ee74d31674f710d53a31c0f3bdd111aab22a24cce256ec74b9a0bc1d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305feb0ee74d31674f710d53a31c0f3bdd111aab22a24cce256ec74b9a0bc1d3->enter($__internal_305feb0ee74d31674f710d53a31c0f3bdd111aab22a24cce256ec74b9a0bc1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0ac2e20288b04d42bd7afac4e1115501ae97f17aadc31a4a42f4ecddad954ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac2e20288b04d42bd7afac4e1115501ae97f17aadc31a4a42f4ecddad954ba4->enter($__internal_0ac2e20288b04d42bd7afac4e1115501ae97f17aadc31a4a42f4ecddad954ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_305feb0ee74d31674f710d53a31c0f3bdd111aab22a24cce256ec74b9a0bc1d3->leave($__internal_305feb0ee74d31674f710d53a31c0f3bdd111aab22a24cce256ec74b9a0bc1d3_prof);

        
        $__internal_0ac2e20288b04d42bd7afac4e1115501ae97f17aadc31a4a42f4ecddad954ba4->leave($__internal_0ac2e20288b04d42bd7afac4e1115501ae97f17aadc31a4a42f4ecddad954ba4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
