<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4e1237af86f909594eba6a36668f060b9d0099c7659d9a3760f19febc1cb97e0 extends Twig_Template
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
        $__internal_4efbce1e9b4c6ffb58cabd52f2ef429815af381d6d83e7931dfb7749e6de661b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4efbce1e9b4c6ffb58cabd52f2ef429815af381d6d83e7931dfb7749e6de661b->enter($__internal_4efbce1e9b4c6ffb58cabd52f2ef429815af381d6d83e7931dfb7749e6de661b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_99913a2dc7d8abc5ec6c19bdbc993b3cd0fcdb2af16f52efba4beaf581107c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99913a2dc7d8abc5ec6c19bdbc993b3cd0fcdb2af16f52efba4beaf581107c33->enter($__internal_99913a2dc7d8abc5ec6c19bdbc993b3cd0fcdb2af16f52efba4beaf581107c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_4efbce1e9b4c6ffb58cabd52f2ef429815af381d6d83e7931dfb7749e6de661b->leave($__internal_4efbce1e9b4c6ffb58cabd52f2ef429815af381d6d83e7931dfb7749e6de661b_prof);

        
        $__internal_99913a2dc7d8abc5ec6c19bdbc993b3cd0fcdb2af16f52efba4beaf581107c33->leave($__internal_99913a2dc7d8abc5ec6c19bdbc993b3cd0fcdb2af16f52efba4beaf581107c33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
