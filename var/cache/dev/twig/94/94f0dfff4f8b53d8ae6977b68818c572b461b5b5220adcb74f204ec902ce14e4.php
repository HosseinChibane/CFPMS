<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b400863302cc88190c412b38743f7b7946aba9f52999e1ada6abf5f78493556d extends Twig_Template
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
        $__internal_0edb0ac3b8b09f2a5c34bcfb921ab4bf8571341286e16d67a284185669d984f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0edb0ac3b8b09f2a5c34bcfb921ab4bf8571341286e16d67a284185669d984f9->enter($__internal_0edb0ac3b8b09f2a5c34bcfb921ab4bf8571341286e16d67a284185669d984f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_91ecaef6a7b59c31c9dd40a1e594de52712d9fe9c5db0032576f265776225710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91ecaef6a7b59c31c9dd40a1e594de52712d9fe9c5db0032576f265776225710->enter($__internal_91ecaef6a7b59c31c9dd40a1e594de52712d9fe9c5db0032576f265776225710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0edb0ac3b8b09f2a5c34bcfb921ab4bf8571341286e16d67a284185669d984f9->leave($__internal_0edb0ac3b8b09f2a5c34bcfb921ab4bf8571341286e16d67a284185669d984f9_prof);

        
        $__internal_91ecaef6a7b59c31c9dd40a1e594de52712d9fe9c5db0032576f265776225710->leave($__internal_91ecaef6a7b59c31c9dd40a1e594de52712d9fe9c5db0032576f265776225710_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
