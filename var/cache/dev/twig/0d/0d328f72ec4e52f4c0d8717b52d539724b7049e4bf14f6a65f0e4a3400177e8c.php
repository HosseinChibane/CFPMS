<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b48276207ecb0202f1575c12b0e3d49c29c477e9ec7201685a5bb082ce1988ff extends Twig_Template
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
        $__internal_cdb0d06861d6889a693c94a7dcd7f7233d4a908c66b42f54fc0aab869102dddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdb0d06861d6889a693c94a7dcd7f7233d4a908c66b42f54fc0aab869102dddf->enter($__internal_cdb0d06861d6889a693c94a7dcd7f7233d4a908c66b42f54fc0aab869102dddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_6db00a043e60d39a4ecab40c44951c6a1b33265a62c079b689254a1d365a3bd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db00a043e60d39a4ecab40c44951c6a1b33265a62c079b689254a1d365a3bd7->enter($__internal_6db00a043e60d39a4ecab40c44951c6a1b33265a62c079b689254a1d365a3bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cdb0d06861d6889a693c94a7dcd7f7233d4a908c66b42f54fc0aab869102dddf->leave($__internal_cdb0d06861d6889a693c94a7dcd7f7233d4a908c66b42f54fc0aab869102dddf_prof);

        
        $__internal_6db00a043e60d39a4ecab40c44951c6a1b33265a62c079b689254a1d365a3bd7->leave($__internal_6db00a043e60d39a4ecab40c44951c6a1b33265a62c079b689254a1d365a3bd7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
