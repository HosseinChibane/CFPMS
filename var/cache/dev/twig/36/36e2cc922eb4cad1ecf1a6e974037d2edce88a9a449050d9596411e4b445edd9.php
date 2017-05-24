<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_6ead62daef5ce82d8cc0518db7a78053ac261bcb14ef33339466f55c88473a8c extends Twig_Template
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
        $__internal_aaa7fdb6bcc8860f5da9e5be4e6406fe1c28f144223ade31abf3a05d89a6731b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaa7fdb6bcc8860f5da9e5be4e6406fe1c28f144223ade31abf3a05d89a6731b->enter($__internal_aaa7fdb6bcc8860f5da9e5be4e6406fe1c28f144223ade31abf3a05d89a6731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_643e2aab1325bcb0703384bf66b716fdeaee9d609e3c69d05ed94f9faca0aec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_643e2aab1325bcb0703384bf66b716fdeaee9d609e3c69d05ed94f9faca0aec1->enter($__internal_643e2aab1325bcb0703384bf66b716fdeaee9d609e3c69d05ed94f9faca0aec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_aaa7fdb6bcc8860f5da9e5be4e6406fe1c28f144223ade31abf3a05d89a6731b->leave($__internal_aaa7fdb6bcc8860f5da9e5be4e6406fe1c28f144223ade31abf3a05d89a6731b_prof);

        
        $__internal_643e2aab1325bcb0703384bf66b716fdeaee9d609e3c69d05ed94f9faca0aec1->leave($__internal_643e2aab1325bcb0703384bf66b716fdeaee9d609e3c69d05ed94f9faca0aec1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
