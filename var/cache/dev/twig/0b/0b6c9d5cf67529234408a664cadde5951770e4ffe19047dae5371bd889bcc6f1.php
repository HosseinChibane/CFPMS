<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_b2f04e72224123de36c92a76c2fcb5dc054a17aebb580fae2b5a1c92725241c5 extends Twig_Template
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
        $__internal_fd697decb5b38b97153e7df7d2c04c3419a579e72e4274e21d8a9828a6095fbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd697decb5b38b97153e7df7d2c04c3419a579e72e4274e21d8a9828a6095fbd->enter($__internal_fd697decb5b38b97153e7df7d2c04c3419a579e72e4274e21d8a9828a6095fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_a1df7ec747087b237675282d9a149d77175392f2ce91529368b7956ebac0d194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1df7ec747087b237675282d9a149d77175392f2ce91529368b7956ebac0d194->enter($__internal_a1df7ec747087b237675282d9a149d77175392f2ce91529368b7956ebac0d194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fd697decb5b38b97153e7df7d2c04c3419a579e72e4274e21d8a9828a6095fbd->leave($__internal_fd697decb5b38b97153e7df7d2c04c3419a579e72e4274e21d8a9828a6095fbd_prof);

        
        $__internal_a1df7ec747087b237675282d9a149d77175392f2ce91529368b7956ebac0d194->leave($__internal_a1df7ec747087b237675282d9a149d77175392f2ce91529368b7956ebac0d194_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
