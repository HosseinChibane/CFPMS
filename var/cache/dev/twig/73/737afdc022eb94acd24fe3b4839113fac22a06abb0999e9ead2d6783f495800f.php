<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_5163a068b6492bd134f6fcb825dccec1af88342c261494f23a6cc0feda402ce9 extends Twig_Template
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
        $__internal_729c7f03a0a1cc61f162af56edbdc82f1e5f3c7527d90d6e3c00c39926b8f0c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_729c7f03a0a1cc61f162af56edbdc82f1e5f3c7527d90d6e3c00c39926b8f0c9->enter($__internal_729c7f03a0a1cc61f162af56edbdc82f1e5f3c7527d90d6e3c00c39926b8f0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f57ff7913b21e23e701d940b8b6bbb26a97c72d2412e576c2bf6d3d5506a5104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57ff7913b21e23e701d940b8b6bbb26a97c72d2412e576c2bf6d3d5506a5104->enter($__internal_f57ff7913b21e23e701d940b8b6bbb26a97c72d2412e576c2bf6d3d5506a5104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_729c7f03a0a1cc61f162af56edbdc82f1e5f3c7527d90d6e3c00c39926b8f0c9->leave($__internal_729c7f03a0a1cc61f162af56edbdc82f1e5f3c7527d90d6e3c00c39926b8f0c9_prof);

        
        $__internal_f57ff7913b21e23e701d940b8b6bbb26a97c72d2412e576c2bf6d3d5506a5104->leave($__internal_f57ff7913b21e23e701d940b8b6bbb26a97c72d2412e576c2bf6d3d5506a5104_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
