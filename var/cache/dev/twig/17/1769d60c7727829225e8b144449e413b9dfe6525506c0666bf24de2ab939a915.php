<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3b28605c2b1e6193d05b85fe01c4c403282ef286073d69099be8e847970d2d94 extends Twig_Template
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
        $__internal_35712e7957111d77d7fd79421397445726a9b94613009270bc5eef1bc5a15d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35712e7957111d77d7fd79421397445726a9b94613009270bc5eef1bc5a15d6e->enter($__internal_35712e7957111d77d7fd79421397445726a9b94613009270bc5eef1bc5a15d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_badcf0e881e0eefdeb799445ac27f8e0d34fac58733b5f4032ea004fd3e110e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badcf0e881e0eefdeb799445ac27f8e0d34fac58733b5f4032ea004fd3e110e0->enter($__internal_badcf0e881e0eefdeb799445ac27f8e0d34fac58733b5f4032ea004fd3e110e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_35712e7957111d77d7fd79421397445726a9b94613009270bc5eef1bc5a15d6e->leave($__internal_35712e7957111d77d7fd79421397445726a9b94613009270bc5eef1bc5a15d6e_prof);

        
        $__internal_badcf0e881e0eefdeb799445ac27f8e0d34fac58733b5f4032ea004fd3e110e0->leave($__internal_badcf0e881e0eefdeb799445ac27f8e0d34fac58733b5f4032ea004fd3e110e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
