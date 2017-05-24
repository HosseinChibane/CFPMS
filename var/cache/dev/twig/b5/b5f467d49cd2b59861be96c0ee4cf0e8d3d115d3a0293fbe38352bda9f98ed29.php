<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_801637cba3da3f7e3f7c5a88e8687500c6483adf16dda376ffe120ea321d8101 extends Twig_Template
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
        $__internal_5f0f89b3b76f3ca69c5df1a700f37bbd6e7ebf4a02adca78912403a584f38939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0f89b3b76f3ca69c5df1a700f37bbd6e7ebf4a02adca78912403a584f38939->enter($__internal_5f0f89b3b76f3ca69c5df1a700f37bbd6e7ebf4a02adca78912403a584f38939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_1dc59cee1ab74b82b89a9bb887f3029ef719fd01aa52cb16b34e9618c3940124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc59cee1ab74b82b89a9bb887f3029ef719fd01aa52cb16b34e9618c3940124->enter($__internal_1dc59cee1ab74b82b89a9bb887f3029ef719fd01aa52cb16b34e9618c3940124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_5f0f89b3b76f3ca69c5df1a700f37bbd6e7ebf4a02adca78912403a584f38939->leave($__internal_5f0f89b3b76f3ca69c5df1a700f37bbd6e7ebf4a02adca78912403a584f38939_prof);

        
        $__internal_1dc59cee1ab74b82b89a9bb887f3029ef719fd01aa52cb16b34e9618c3940124->leave($__internal_1dc59cee1ab74b82b89a9bb887f3029ef719fd01aa52cb16b34e9618c3940124_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
