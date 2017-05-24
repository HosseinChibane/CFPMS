<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_f79020dcca968400e7ba11876dd6735f73e4345e5a20c871c7b9e589cdf36d62 extends Twig_Template
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
        $__internal_65eb2708f0bc62fc807890f091cd532d6b0a474ad4cb9c4315c8349a05931891 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65eb2708f0bc62fc807890f091cd532d6b0a474ad4cb9c4315c8349a05931891->enter($__internal_65eb2708f0bc62fc807890f091cd532d6b0a474ad4cb9c4315c8349a05931891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e1092a502bbcd4a36a8455e5169887023536e9fc6a7c490f77a23b49f9eb7110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1092a502bbcd4a36a8455e5169887023536e9fc6a7c490f77a23b49f9eb7110->enter($__internal_e1092a502bbcd4a36a8455e5169887023536e9fc6a7c490f77a23b49f9eb7110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_65eb2708f0bc62fc807890f091cd532d6b0a474ad4cb9c4315c8349a05931891->leave($__internal_65eb2708f0bc62fc807890f091cd532d6b0a474ad4cb9c4315c8349a05931891_prof);

        
        $__internal_e1092a502bbcd4a36a8455e5169887023536e9fc6a7c490f77a23b49f9eb7110->leave($__internal_e1092a502bbcd4a36a8455e5169887023536e9fc6a7c490f77a23b49f9eb7110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
