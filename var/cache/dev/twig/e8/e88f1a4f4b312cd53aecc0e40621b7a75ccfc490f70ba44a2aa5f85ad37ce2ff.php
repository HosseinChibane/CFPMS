<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a2e269274d571b6fa218b96efa4fc22bd6dd01d22eff725667e0ee87fede3d21 extends Twig_Template
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
        $__internal_4393b2b658059c5e5de4d90416a0ead790818ddc0083d333f85feed5e102b1ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4393b2b658059c5e5de4d90416a0ead790818ddc0083d333f85feed5e102b1ff->enter($__internal_4393b2b658059c5e5de4d90416a0ead790818ddc0083d333f85feed5e102b1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b29d7dcb7df0bbbbaa01f688508cd9f264434d0d6348623976a4d6540a0573c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29d7dcb7df0bbbbaa01f688508cd9f264434d0d6348623976a4d6540a0573c2->enter($__internal_b29d7dcb7df0bbbbaa01f688508cd9f264434d0d6348623976a4d6540a0573c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4393b2b658059c5e5de4d90416a0ead790818ddc0083d333f85feed5e102b1ff->leave($__internal_4393b2b658059c5e5de4d90416a0ead790818ddc0083d333f85feed5e102b1ff_prof);

        
        $__internal_b29d7dcb7df0bbbbaa01f688508cd9f264434d0d6348623976a4d6540a0573c2->leave($__internal_b29d7dcb7df0bbbbaa01f688508cd9f264434d0d6348623976a4d6540a0573c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
