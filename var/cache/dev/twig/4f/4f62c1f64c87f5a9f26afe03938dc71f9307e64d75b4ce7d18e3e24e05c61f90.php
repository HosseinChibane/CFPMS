<?php

/* frontend/about.html.twig */
class __TwigTemplate_341489bc1d56d2bb06d1133186f5e0f946e32ab5b9bbae5a289d69c88b6b39e0 extends Twig_Template
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
        $__internal_5ac91e8facf5623271d002928fe5618b6ee52e40f0dc771f4a249f3c15c5b39f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ac91e8facf5623271d002928fe5618b6ee52e40f0dc771f4a249f3c15c5b39f->enter($__internal_5ac91e8facf5623271d002928fe5618b6ee52e40f0dc771f4a249f3c15c5b39f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/about.html.twig"));

        $__internal_bccb594704d785015f904605372c1e13012a89fd56ecc812ffad67f6ab16919b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bccb594704d785015f904605372c1e13012a89fd56ecc812ffad67f6ab16919b->enter($__internal_bccb594704d785015f904605372c1e13012a89fd56ecc812ffad67f6ab16919b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "frontend/about.html.twig"));

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
        
        $__internal_5ac91e8facf5623271d002928fe5618b6ee52e40f0dc771f4a249f3c15c5b39f->leave($__internal_5ac91e8facf5623271d002928fe5618b6ee52e40f0dc771f4a249f3c15c5b39f_prof);

        
        $__internal_bccb594704d785015f904605372c1e13012a89fd56ecc812ffad67f6ab16919b->leave($__internal_bccb594704d785015f904605372c1e13012a89fd56ecc812ffad67f6ab16919b_prof);

    }

    public function getTemplateName()
    {
        return "frontend/about.html.twig";
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
</div>", "frontend/about.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\views\\frontend\\about.html.twig");
    }
}
