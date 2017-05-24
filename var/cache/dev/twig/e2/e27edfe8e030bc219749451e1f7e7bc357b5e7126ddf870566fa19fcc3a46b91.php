<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_16eee1660d3601080884bd8a0924914b427353410793bbc2e267c57500fab4ae extends Twig_Template
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
        $__internal_03bfe92909c65c0415c38f5012860b1a8857b114d63edf0ece115f0146412131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03bfe92909c65c0415c38f5012860b1a8857b114d63edf0ece115f0146412131->enter($__internal_03bfe92909c65c0415c38f5012860b1a8857b114d63edf0ece115f0146412131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_2aecfa3cbba85bc311c48c418c5fb8afd6b2e836f1094aafcb9c70baa23c4b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aecfa3cbba85bc311c48c418c5fb8afd6b2e836f1094aafcb9c70baa23c4b24->enter($__internal_2aecfa3cbba85bc311c48c418c5fb8afd6b2e836f1094aafcb9c70baa23c4b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_03bfe92909c65c0415c38f5012860b1a8857b114d63edf0ece115f0146412131->leave($__internal_03bfe92909c65c0415c38f5012860b1a8857b114d63edf0ece115f0146412131_prof);

        
        $__internal_2aecfa3cbba85bc311c48c418c5fb8afd6b2e836f1094aafcb9c70baa23c4b24->leave($__internal_2aecfa3cbba85bc311c48c418c5fb8afd6b2e836f1094aafcb9c70baa23c4b24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
