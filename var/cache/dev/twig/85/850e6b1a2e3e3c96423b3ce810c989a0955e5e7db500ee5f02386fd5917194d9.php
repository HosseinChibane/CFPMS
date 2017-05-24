<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_77d4fc3e52e299699b66d6177cba6846e6ac91b334ca013670a6c419cf3e8e62 extends Twig_Template
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
        $__internal_4f39ecb78b98e04ab337117573e65f8dbb28bcb36b47a4a65d92e6e39f55ae66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f39ecb78b98e04ab337117573e65f8dbb28bcb36b47a4a65d92e6e39f55ae66->enter($__internal_4f39ecb78b98e04ab337117573e65f8dbb28bcb36b47a4a65d92e6e39f55ae66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_f977928d1f84fb5aad95d5dc0fce559979894ca41cf29eb8c1fd74cd0ed0670f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f977928d1f84fb5aad95d5dc0fce559979894ca41cf29eb8c1fd74cd0ed0670f->enter($__internal_f977928d1f84fb5aad95d5dc0fce559979894ca41cf29eb8c1fd74cd0ed0670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4f39ecb78b98e04ab337117573e65f8dbb28bcb36b47a4a65d92e6e39f55ae66->leave($__internal_4f39ecb78b98e04ab337117573e65f8dbb28bcb36b47a4a65d92e6e39f55ae66_prof);

        
        $__internal_f977928d1f84fb5aad95d5dc0fce559979894ca41cf29eb8c1fd74cd0ed0670f->leave($__internal_f977928d1f84fb5aad95d5dc0fce559979894ca41cf29eb8c1fd74cd0ed0670f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
