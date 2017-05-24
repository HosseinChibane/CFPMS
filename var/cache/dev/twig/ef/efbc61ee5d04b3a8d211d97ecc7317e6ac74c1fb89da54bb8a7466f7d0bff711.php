<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_54a32775d1a9fbe79d320079ca8964a89936f922c4b8877be8adcf5a1a73735a extends Twig_Template
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
        $__internal_ca2370e599f44951be86298a4058eb3263a2d8c4eab921ebd38f479f829bc288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca2370e599f44951be86298a4058eb3263a2d8c4eab921ebd38f479f829bc288->enter($__internal_ca2370e599f44951be86298a4058eb3263a2d8c4eab921ebd38f479f829bc288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_bdf885d4fbd6712aa5d0faa092de48f2daeadf00c913fc83beaddc96f479af8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf885d4fbd6712aa5d0faa092de48f2daeadf00c913fc83beaddc96f479af8c->enter($__internal_bdf885d4fbd6712aa5d0faa092de48f2daeadf00c913fc83beaddc96f479af8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ca2370e599f44951be86298a4058eb3263a2d8c4eab921ebd38f479f829bc288->leave($__internal_ca2370e599f44951be86298a4058eb3263a2d8c4eab921ebd38f479f829bc288_prof);

        
        $__internal_bdf885d4fbd6712aa5d0faa092de48f2daeadf00c913fc83beaddc96f479af8c->leave($__internal_bdf885d4fbd6712aa5d0faa092de48f2daeadf00c913fc83beaddc96f479af8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
