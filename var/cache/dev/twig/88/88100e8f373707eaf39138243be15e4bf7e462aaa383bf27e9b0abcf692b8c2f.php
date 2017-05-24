<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_fe8a3986249e73122dd3ac6ccf6eb935f3891d33d01040b9e5bc3eba97dec5a3 extends Twig_Template
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
        $__internal_b9cc63cfe7bfd4178b288ced8d1054cd5043a65fd55922c80bdac5b7214721a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9cc63cfe7bfd4178b288ced8d1054cd5043a65fd55922c80bdac5b7214721a2->enter($__internal_b9cc63cfe7bfd4178b288ced8d1054cd5043a65fd55922c80bdac5b7214721a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        $__internal_b1b43fe4ce79a2baa24dd6e2daa35cf6ccf842c9a58382b81a9353c2ed25ce78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b43fe4ce79a2baa24dd6e2daa35cf6ccf842c9a58382b81a9353c2ed25ce78->enter($__internal_b1b43fe4ce79a2baa24dd6e2daa35cf6ccf842c9a58382b81a9353c2ed25ce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_b9cc63cfe7bfd4178b288ced8d1054cd5043a65fd55922c80bdac5b7214721a2->leave($__internal_b9cc63cfe7bfd4178b288ced8d1054cd5043a65fd55922c80bdac5b7214721a2_prof);

        
        $__internal_b1b43fe4ce79a2baa24dd6e2daa35cf6ccf842c9a58382b81a9353c2ed25ce78->leave($__internal_b1b43fe4ce79a2baa24dd6e2daa35cf6ccf842c9a58382b81a9353c2ed25ce78_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_javascript.html.php";
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
        return new Twig_Source("<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_javascript.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\egeloen\\ckeditor-bundle\\Resources\\views\\Form\\ckeditor_javascript.html.php");
    }
}
