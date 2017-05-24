<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_e1c8723652932b2b386f84aecfadea164539c85553e2ccc2027e36268f49d383 extends Twig_Template
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
        $__internal_db9c6f07303797b53ad935b42c7e676f7140ab2be2e8a3518d4bd9554b140113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9c6f07303797b53ad935b42c7e676f7140ab2be2e8a3518d4bd9554b140113->enter($__internal_db9c6f07303797b53ad935b42c7e676f7140ab2be2e8a3518d4bd9554b140113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_8a58216d36a0515c9588e75dc326caff60db75cfd94e8936d34815c9ff77f221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a58216d36a0515c9588e75dc326caff60db75cfd94e8936d34815c9ff77f221->enter($__internal_8a58216d36a0515c9588e75dc326caff60db75cfd94e8936d34815c9ff77f221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_db9c6f07303797b53ad935b42c7e676f7140ab2be2e8a3518d4bd9554b140113->leave($__internal_db9c6f07303797b53ad935b42c7e676f7140ab2be2e8a3518d4bd9554b140113_prof);

        
        $__internal_8a58216d36a0515c9588e75dc326caff60db75cfd94e8936d34815c9ff77f221->leave($__internal_8a58216d36a0515c9588e75dc326caff60db75cfd94e8936d34815c9ff77f221_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
