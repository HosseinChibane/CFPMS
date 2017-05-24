<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b3e0b981b873900c7976b37c4b2030d084d24e19eddd8fc39f0d767e9e190017 extends Twig_Template
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
        $__internal_407b230c78118bcdb3404fbfc825dc5a709cbdcaa2e2f174839957337afccb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_407b230c78118bcdb3404fbfc825dc5a709cbdcaa2e2f174839957337afccb92->enter($__internal_407b230c78118bcdb3404fbfc825dc5a709cbdcaa2e2f174839957337afccb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_36f892ab6561ad96e721308bc04aa7e471ee7f498906eff530c3ee05e3223e18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f892ab6561ad96e721308bc04aa7e471ee7f498906eff530c3ee05e3223e18->enter($__internal_36f892ab6561ad96e721308bc04aa7e471ee7f498906eff530c3ee05e3223e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_407b230c78118bcdb3404fbfc825dc5a709cbdcaa2e2f174839957337afccb92->leave($__internal_407b230c78118bcdb3404fbfc825dc5a709cbdcaa2e2f174839957337afccb92_prof);

        
        $__internal_36f892ab6561ad96e721308bc04aa7e471ee7f498906eff530c3ee05e3223e18->leave($__internal_36f892ab6561ad96e721308bc04aa7e471ee7f498906eff530c3ee05e3223e18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
