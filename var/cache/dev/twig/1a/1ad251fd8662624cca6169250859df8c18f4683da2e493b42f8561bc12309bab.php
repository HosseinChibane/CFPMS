<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_20abd04c36ea8a4dc5ddbac64cff8f71eddb5518b25d1ea6422e3898d706cb20 extends Twig_Template
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
        $__internal_d4bdb7705639ddfbbf00be22b55c0696072c441b4e97c85a31f7ff13f34f2fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4bdb7705639ddfbbf00be22b55c0696072c441b4e97c85a31f7ff13f34f2fb5->enter($__internal_d4bdb7705639ddfbbf00be22b55c0696072c441b4e97c85a31f7ff13f34f2fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_3843c0b4c375c30670f8bc073aaa84f383a50aa6ffa97774ed60e5a38a197fb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3843c0b4c375c30670f8bc073aaa84f383a50aa6ffa97774ed60e5a38a197fb6->enter($__internal_3843c0b4c375c30670f8bc073aaa84f383a50aa6ffa97774ed60e5a38a197fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_d4bdb7705639ddfbbf00be22b55c0696072c441b4e97c85a31f7ff13f34f2fb5->leave($__internal_d4bdb7705639ddfbbf00be22b55c0696072c441b4e97c85a31f7ff13f34f2fb5_prof);

        
        $__internal_3843c0b4c375c30670f8bc073aaa84f383a50aa6ffa97774ed60e5a38a197fb6->leave($__internal_3843c0b4c375c30670f8bc073aaa84f383a50aa6ffa97774ed60e5a38a197fb6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
