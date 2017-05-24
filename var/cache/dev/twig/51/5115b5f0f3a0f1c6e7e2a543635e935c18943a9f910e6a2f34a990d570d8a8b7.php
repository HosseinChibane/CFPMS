<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_cea0c195e8d97055c9a0fa582886a4193aca04cb32312eefb6174c91d9daa295 extends Twig_Template
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
        $__internal_2f5ad3b6247e1ebbeb0c58f49b0315478c687b37f60c9c18dc474ca1a73c9a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5ad3b6247e1ebbeb0c58f49b0315478c687b37f60c9c18dc474ca1a73c9a23->enter($__internal_2f5ad3b6247e1ebbeb0c58f49b0315478c687b37f60c9c18dc474ca1a73c9a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e7b884b8ad3bacbe64d4fb4d39c65181869a7484b5ffe04ed0813a187dca5952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b884b8ad3bacbe64d4fb4d39c65181869a7484b5ffe04ed0813a187dca5952->enter($__internal_e7b884b8ad3bacbe64d4fb4d39c65181869a7484b5ffe04ed0813a187dca5952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2f5ad3b6247e1ebbeb0c58f49b0315478c687b37f60c9c18dc474ca1a73c9a23->leave($__internal_2f5ad3b6247e1ebbeb0c58f49b0315478c687b37f60c9c18dc474ca1a73c9a23_prof);

        
        $__internal_e7b884b8ad3bacbe64d4fb4d39c65181869a7484b5ffe04ed0813a187dca5952->leave($__internal_e7b884b8ad3bacbe64d4fb4d39c65181869a7484b5ffe04ed0813a187dca5952_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
