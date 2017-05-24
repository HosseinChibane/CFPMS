<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_43fecff85baa905e13f4ad712921175de48781cdf5c69e78cb33e03130486d36 extends Twig_Template
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
        $__internal_cadf0aae30e6f91165be1ca32038bcdd86dd73031fcd49bfa433264cf8a4e54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadf0aae30e6f91165be1ca32038bcdd86dd73031fcd49bfa433264cf8a4e54e->enter($__internal_cadf0aae30e6f91165be1ca32038bcdd86dd73031fcd49bfa433264cf8a4e54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6c89162ad20b322d78685082a3997181c0b2aa6d931f8bb749960fce4667a1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c89162ad20b322d78685082a3997181c0b2aa6d931f8bb749960fce4667a1e7->enter($__internal_6c89162ad20b322d78685082a3997181c0b2aa6d931f8bb749960fce4667a1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_cadf0aae30e6f91165be1ca32038bcdd86dd73031fcd49bfa433264cf8a4e54e->leave($__internal_cadf0aae30e6f91165be1ca32038bcdd86dd73031fcd49bfa433264cf8a4e54e_prof);

        
        $__internal_6c89162ad20b322d78685082a3997181c0b2aa6d931f8bb749960fce4667a1e7->leave($__internal_6c89162ad20b322d78685082a3997181c0b2aa6d931f8bb749960fce4667a1e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
