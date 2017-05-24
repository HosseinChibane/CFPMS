<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_673356637e42bb73cb90c001e168402c723b53eca2e1c74f156ba25c2f52cec5 extends Twig_Template
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
        $__internal_bc9a51c1e18fc1276bbcc28b3a27fc67bf88a00fce0879e7f432d01822106e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9a51c1e18fc1276bbcc28b3a27fc67bf88a00fce0879e7f432d01822106e1d->enter($__internal_bc9a51c1e18fc1276bbcc28b3a27fc67bf88a00fce0879e7f432d01822106e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_c0cf5bef4263a2f5bbc20acf577a5d38dd417e52b3bce14a09b2c39ba813cb22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0cf5bef4263a2f5bbc20acf577a5d38dd417e52b3bce14a09b2c39ba813cb22->enter($__internal_c0cf5bef4263a2f5bbc20acf577a5d38dd417e52b3bce14a09b2c39ba813cb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_bc9a51c1e18fc1276bbcc28b3a27fc67bf88a00fce0879e7f432d01822106e1d->leave($__internal_bc9a51c1e18fc1276bbcc28b3a27fc67bf88a00fce0879e7f432d01822106e1d_prof);

        
        $__internal_c0cf5bef4263a2f5bbc20acf577a5d38dd417e52b3bce14a09b2c39ba813cb22->leave($__internal_c0cf5bef4263a2f5bbc20acf577a5d38dd417e52b3bce14a09b2c39ba813cb22_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
