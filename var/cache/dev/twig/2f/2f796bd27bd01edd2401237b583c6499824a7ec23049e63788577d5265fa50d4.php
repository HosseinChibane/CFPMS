<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_154f9716ae5d2bb75af86742e095d425caa14952553de0a633abc944c32c84b1 extends Twig_Template
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
        $__internal_4b5a4e8bd1c3e94e6989d589080edc092dfeb5fd435b9f5e0290b6600fa679ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b5a4e8bd1c3e94e6989d589080edc092dfeb5fd435b9f5e0290b6600fa679ba->enter($__internal_4b5a4e8bd1c3e94e6989d589080edc092dfeb5fd435b9f5e0290b6600fa679ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_028702c3ad074658ad8c839af79c546d47835bd74f36096b99f60efbf72be9e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028702c3ad074658ad8c839af79c546d47835bd74f36096b99f60efbf72be9e2->enter($__internal_028702c3ad074658ad8c839af79c546d47835bd74f36096b99f60efbf72be9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_4b5a4e8bd1c3e94e6989d589080edc092dfeb5fd435b9f5e0290b6600fa679ba->leave($__internal_4b5a4e8bd1c3e94e6989d589080edc092dfeb5fd435b9f5e0290b6600fa679ba_prof);

        
        $__internal_028702c3ad074658ad8c839af79c546d47835bd74f36096b99f60efbf72be9e2->leave($__internal_028702c3ad074658ad8c839af79c546d47835bd74f36096b99f60efbf72be9e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
