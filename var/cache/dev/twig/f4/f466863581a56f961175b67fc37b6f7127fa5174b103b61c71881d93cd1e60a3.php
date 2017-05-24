<?php

/* :frontend:about.html.twig */
class __TwigTemplate_b752347756122990f87e67a18ca08c4e47121b46a437f3de5972d9ded36cb52f extends Twig_Template
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
        $__internal_f27675c6b7b9fd85c2158cab3da6196fe24290ce041d5a50017e7086f479b492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27675c6b7b9fd85c2158cab3da6196fe24290ce041d5a50017e7086f479b492->enter($__internal_f27675c6b7b9fd85c2158cab3da6196fe24290ce041d5a50017e7086f479b492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":frontend:about.html.twig"));

        $__internal_27df246a5e5c2fd8359ab2f1d8776af21b08ebd71549c0eb95ae6e304cf40a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27df246a5e5c2fd8359ab2f1d8776af21b08ebd71549c0eb95ae6e304cf40a61->enter($__internal_27df246a5e5c2fd8359ab2f1d8776af21b08ebd71549c0eb95ae6e304cf40a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":frontend:about.html.twig"));

        // line 1
        echo "<!-- Call to Action Section -->
<div class=\"well\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class=\"col-md-4\">
            <a class=\"btn btn-lg btn-default btn-block\" href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_about");
        echo "\">A propos de Dudee'Go</a>
        </div>
    </div>
</div>";
        
        $__internal_f27675c6b7b9fd85c2158cab3da6196fe24290ce041d5a50017e7086f479b492->leave($__internal_f27675c6b7b9fd85c2158cab3da6196fe24290ce041d5a50017e7086f479b492_prof);

        
        $__internal_27df246a5e5c2fd8359ab2f1d8776af21b08ebd71549c0eb95ae6e304cf40a61->leave($__internal_27df246a5e5c2fd8359ab2f1d8776af21b08ebd71549c0eb95ae6e304cf40a61_prof);

    }

    public function getTemplateName()
    {
        return ":frontend:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Call to Action Section -->
<div class=\"well\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class=\"col-md-4\">
            <a class=\"btn btn-lg btn-default btn-block\" href=\"{{ path('dudeego_platform_about') }}\">A propos de Dudee'Go</a>
        </div>
    </div>
</div>", ":frontend:about.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources\\views/frontend/about.html.twig");
    }
}
