<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_c8e2a27b8c4b7e89438082638c3e32c7212714949fa1649004041c8d22e583fc extends Twig_Template
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
        $__internal_138dd45fca3e0301695c16a9fb8e04cf0d8967136610940616cb6d806b2a565f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_138dd45fca3e0301695c16a9fb8e04cf0d8967136610940616cb6d806b2a565f->enter($__internal_138dd45fca3e0301695c16a9fb8e04cf0d8967136610940616cb6d806b2a565f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_051fa51dae0dea2382632857e1d72474addf5f8a58f6c15c413405b1bc1d9892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051fa51dae0dea2382632857e1d72474addf5f8a58f6c15c413405b1bc1d9892->enter($__internal_051fa51dae0dea2382632857e1d72474addf5f8a58f6c15c413405b1bc1d9892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_138dd45fca3e0301695c16a9fb8e04cf0d8967136610940616cb6d806b2a565f->leave($__internal_138dd45fca3e0301695c16a9fb8e04cf0d8967136610940616cb6d806b2a565f_prof);

        
        $__internal_051fa51dae0dea2382632857e1d72474addf5f8a58f6c15c413405b1bc1d9892->leave($__internal_051fa51dae0dea2382632857e1d72474addf5f8a58f6c15c413405b1bc1d9892_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
