<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_5ac158b681b65a1ac3af162679939485ba1f56535cb9b8e1797e26cfff0e6701 extends Twig_Template
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
        $__internal_01c73c4b1d91ec5651ae3ea1f70d13083613aaa3e18a7a053099b43dab1bf759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01c73c4b1d91ec5651ae3ea1f70d13083613aaa3e18a7a053099b43dab1bf759->enter($__internal_01c73c4b1d91ec5651ae3ea1f70d13083613aaa3e18a7a053099b43dab1bf759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_2079dfdcddcde1076b94015fa03d6b811535a76aec2097b5a41a4ca9dabfdafd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2079dfdcddcde1076b94015fa03d6b811535a76aec2097b5a41a4ca9dabfdafd->enter($__internal_2079dfdcddcde1076b94015fa03d6b811535a76aec2097b5a41a4ca9dabfdafd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_01c73c4b1d91ec5651ae3ea1f70d13083613aaa3e18a7a053099b43dab1bf759->leave($__internal_01c73c4b1d91ec5651ae3ea1f70d13083613aaa3e18a7a053099b43dab1bf759_prof);

        
        $__internal_2079dfdcddcde1076b94015fa03d6b811535a76aec2097b5a41a4ca9dabfdafd->leave($__internal_2079dfdcddcde1076b94015fa03d6b811535a76aec2097b5a41a4ca9dabfdafd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
