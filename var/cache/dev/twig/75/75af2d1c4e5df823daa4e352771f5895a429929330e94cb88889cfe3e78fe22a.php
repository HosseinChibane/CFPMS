<?php

/* @EasyAdmin/default/label_null.html.twig */
class __TwigTemplate_2e9964743d7fcf9d0046b471a7e068520b38e422c7d389f64ace9a9e93ec4bbf extends Twig_Template
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
        $__internal_bdb5cd75e6bfe1b1e3da81342a957fa32b29048bbf92700334fb516a1504018d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdb5cd75e6bfe1b1e3da81342a957fa32b29048bbf92700334fb516a1504018d->enter($__internal_bdb5cd75e6bfe1b1e3da81342a957fa32b29048bbf92700334fb516a1504018d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        $__internal_6971922c006f996e0893283946cf2e86575252c0ef934a952adc09359d4a786b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6971922c006f996e0893283946cf2e86575252c0ef934a952adc09359d4a786b->enter($__internal_6971922c006f996e0893283946cf2e86575252c0ef934a952adc09359d4a786b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_null.html.twig"));

        // line 1
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
        
        $__internal_bdb5cd75e6bfe1b1e3da81342a957fa32b29048bbf92700334fb516a1504018d->leave($__internal_bdb5cd75e6bfe1b1e3da81342a957fa32b29048bbf92700334fb516a1504018d_prof);

        
        $__internal_6971922c006f996e0893283946cf2e86575252c0ef934a952adc09359d4a786b->leave($__internal_6971922c006f996e0893283946cf2e86575252c0ef934a952adc09359d4a786b_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_null.html.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<span class=\"label\">{{ 'label.null'|trans(domain = 'EasyAdminBundle') }}</span>
", "@EasyAdmin/default/label_null.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\label_null.html.twig");
    }
}
