<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d6a2b9b0da19486a1181f93b657f2edb09bb7e4d06ba0619fd03fc65730bdaf6 extends Twig_Template
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
        $__internal_8a2c8b6eb0bcf8d7f5ab0f4a9a3d574b90266a81947569b652fd1390cb5a03ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2c8b6eb0bcf8d7f5ab0f4a9a3d574b90266a81947569b652fd1390cb5a03ad->enter($__internal_8a2c8b6eb0bcf8d7f5ab0f4a9a3d574b90266a81947569b652fd1390cb5a03ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f8973782f91a19b03c45fa91796c6fc3c8b819a60bdb993161dd29cc9371741a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8973782f91a19b03c45fa91796c6fc3c8b819a60bdb993161dd29cc9371741a->enter($__internal_f8973782f91a19b03c45fa91796c6fc3c8b819a60bdb993161dd29cc9371741a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_8a2c8b6eb0bcf8d7f5ab0f4a9a3d574b90266a81947569b652fd1390cb5a03ad->leave($__internal_8a2c8b6eb0bcf8d7f5ab0f4a9a3d574b90266a81947569b652fd1390cb5a03ad_prof);

        
        $__internal_f8973782f91a19b03c45fa91796c6fc3c8b819a60bdb993161dd29cc9371741a->leave($__internal_f8973782f91a19b03c45fa91796c6fc3c8b819a60bdb993161dd29cc9371741a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
