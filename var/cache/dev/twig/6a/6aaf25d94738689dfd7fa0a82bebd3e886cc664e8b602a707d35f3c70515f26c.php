<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_c67127d1fc092b46d749a61ffa969c83f3bf167e3d256edebefb2cba5c387149 extends Twig_Template
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
        $__internal_e3afa57dae9b35206314252f5f08e740faa70fbfe2001a3f751cfafa3962bbe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3afa57dae9b35206314252f5f08e740faa70fbfe2001a3f751cfafa3962bbe6->enter($__internal_e3afa57dae9b35206314252f5f08e740faa70fbfe2001a3f751cfafa3962bbe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_905c52556253af9688eac0022c1aba33a4f475931cf867f2e1902f9bc8e5b9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905c52556253af9688eac0022c1aba33a4f475931cf867f2e1902f9bc8e5b9f7->enter($__internal_905c52556253af9688eac0022c1aba33a4f475931cf867f2e1902f9bc8e5b9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e3afa57dae9b35206314252f5f08e740faa70fbfe2001a3f751cfafa3962bbe6->leave($__internal_e3afa57dae9b35206314252f5f08e740faa70fbfe2001a3f751cfafa3962bbe6_prof);

        
        $__internal_905c52556253af9688eac0022c1aba33a4f475931cf867f2e1902f9bc8e5b9f7->leave($__internal_905c52556253af9688eac0022c1aba33a4f475931cf867f2e1902f9bc8e5b9f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
