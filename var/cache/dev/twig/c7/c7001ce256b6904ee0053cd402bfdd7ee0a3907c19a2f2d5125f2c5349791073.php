<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e927ec3a5a819cffaf3d3a7c08331e259cf5188f29e8f137dddc99f50360534f extends Twig_Template
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
        $__internal_f4a5785ff7fb8d77ff9ce116ee15e8f927fa9b37fc6175a613d55024852c8b97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a5785ff7fb8d77ff9ce116ee15e8f927fa9b37fc6175a613d55024852c8b97->enter($__internal_f4a5785ff7fb8d77ff9ce116ee15e8f927fa9b37fc6175a613d55024852c8b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_8ed6672002538e44dd0e61b68612a532868821951208768fb50b26e7ec5682d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed6672002538e44dd0e61b68612a532868821951208768fb50b26e7ec5682d1->enter($__internal_8ed6672002538e44dd0e61b68612a532868821951208768fb50b26e7ec5682d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f4a5785ff7fb8d77ff9ce116ee15e8f927fa9b37fc6175a613d55024852c8b97->leave($__internal_f4a5785ff7fb8d77ff9ce116ee15e8f927fa9b37fc6175a613d55024852c8b97_prof);

        
        $__internal_8ed6672002538e44dd0e61b68612a532868821951208768fb50b26e7ec5682d1->leave($__internal_8ed6672002538e44dd0e61b68612a532868821951208768fb50b26e7ec5682d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
