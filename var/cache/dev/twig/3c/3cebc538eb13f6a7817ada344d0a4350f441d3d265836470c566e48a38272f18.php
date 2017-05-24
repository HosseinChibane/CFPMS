<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_61b84cdde4511a5c3b0f5216646cdf49751b1d2cc3990dd7af14598a87a4449c extends Twig_Template
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
        $__internal_c38ebfb3b3c086f36eecc3a5ffb098eaa1230a1f800ef02aec89a05e1f0eaea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c38ebfb3b3c086f36eecc3a5ffb098eaa1230a1f800ef02aec89a05e1f0eaea5->enter($__internal_c38ebfb3b3c086f36eecc3a5ffb098eaa1230a1f800ef02aec89a05e1f0eaea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_afaa842c0a1392b6849054aaf28f09de8589957c44e3be554f099f981b6dc165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afaa842c0a1392b6849054aaf28f09de8589957c44e3be554f099f981b6dc165->enter($__internal_afaa842c0a1392b6849054aaf28f09de8589957c44e3be554f099f981b6dc165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c38ebfb3b3c086f36eecc3a5ffb098eaa1230a1f800ef02aec89a05e1f0eaea5->leave($__internal_c38ebfb3b3c086f36eecc3a5ffb098eaa1230a1f800ef02aec89a05e1f0eaea5_prof);

        
        $__internal_afaa842c0a1392b6849054aaf28f09de8589957c44e3be554f099f981b6dc165->leave($__internal_afaa842c0a1392b6849054aaf28f09de8589957c44e3be554f099f981b6dc165_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
