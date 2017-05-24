<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_901d9fa6d8ea3c50a3fc84eb8cf3f47a9c53e851a5475954afa25c62d1010c03 extends Twig_Template
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
        $__internal_449274fed9e4a75c89b71af9e19d0361c2588dc348e2e128ea0593928c3b8ebe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449274fed9e4a75c89b71af9e19d0361c2588dc348e2e128ea0593928c3b8ebe->enter($__internal_449274fed9e4a75c89b71af9e19d0361c2588dc348e2e128ea0593928c3b8ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9ed4fa20932a045d34069bd420247651a58a4653ae414b4a91ba39525c09d822 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed4fa20932a045d34069bd420247651a58a4653ae414b4a91ba39525c09d822->enter($__internal_9ed4fa20932a045d34069bd420247651a58a4653ae414b4a91ba39525c09d822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_449274fed9e4a75c89b71af9e19d0361c2588dc348e2e128ea0593928c3b8ebe->leave($__internal_449274fed9e4a75c89b71af9e19d0361c2588dc348e2e128ea0593928c3b8ebe_prof);

        
        $__internal_9ed4fa20932a045d34069bd420247651a58a4653ae414b4a91ba39525c09d822->leave($__internal_9ed4fa20932a045d34069bd420247651a58a4653ae414b4a91ba39525c09d822_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
