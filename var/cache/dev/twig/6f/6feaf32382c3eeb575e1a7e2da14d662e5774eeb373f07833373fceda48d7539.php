<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_0a7653b7fd4cca3f8151150f3b8e66a8e77479de373200a7b2a36f874de6d9b3 extends Twig_Template
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
        $__internal_c1a46a501f957897ee227122f9f015790c8146051d5d05513f3d681f60dd3d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a46a501f957897ee227122f9f015790c8146051d5d05513f3d681f60dd3d01->enter($__internal_c1a46a501f957897ee227122f9f015790c8146051d5d05513f3d681f60dd3d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_de38d243939b3f5f4fe16b6b4c244c346ca3f30270f11ec7eadb0fa40a6b6ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de38d243939b3f5f4fe16b6b4c244c346ca3f30270f11ec7eadb0fa40a6b6ace->enter($__internal_de38d243939b3f5f4fe16b6b4c244c346ca3f30270f11ec7eadb0fa40a6b6ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c1a46a501f957897ee227122f9f015790c8146051d5d05513f3d681f60dd3d01->leave($__internal_c1a46a501f957897ee227122f9f015790c8146051d5d05513f3d681f60dd3d01_prof);

        
        $__internal_de38d243939b3f5f4fe16b6b4c244c346ca3f30270f11ec7eadb0fa40a6b6ace->leave($__internal_de38d243939b3f5f4fe16b6b4c244c346ca3f30270f11ec7eadb0fa40a6b6ace_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
