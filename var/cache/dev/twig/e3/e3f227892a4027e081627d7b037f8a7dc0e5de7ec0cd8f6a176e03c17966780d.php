<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_11459e289a351aa3a777c6920f3d8f18a825fd45bde864121e99f1ec2fa5058a extends Twig_Template
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
        $__internal_50494ce500441d1c82fdfbf3fc461782f3db5a18b12030f401425e6f888804e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50494ce500441d1c82fdfbf3fc461782f3db5a18b12030f401425e6f888804e0->enter($__internal_50494ce500441d1c82fdfbf3fc461782f3db5a18b12030f401425e6f888804e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a23785cfe5ff23bb880dec263ae7ea39dd30a5c1bead4d4b00e27ecb757125f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23785cfe5ff23bb880dec263ae7ea39dd30a5c1bead4d4b00e27ecb757125f0->enter($__internal_a23785cfe5ff23bb880dec263ae7ea39dd30a5c1bead4d4b00e27ecb757125f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_50494ce500441d1c82fdfbf3fc461782f3db5a18b12030f401425e6f888804e0->leave($__internal_50494ce500441d1c82fdfbf3fc461782f3db5a18b12030f401425e6f888804e0_prof);

        
        $__internal_a23785cfe5ff23bb880dec263ae7ea39dd30a5c1bead4d4b00e27ecb757125f0->leave($__internal_a23785cfe5ff23bb880dec263ae7ea39dd30a5c1bead4d4b00e27ecb757125f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
