<?php

/* DUDEEGOPlatformBundle:back:logementTwo.html.twig */
class __TwigTemplate_f5e9c09d6ecb41b0b663f32baafd53143b21ef60c6f9535919fa4058f39be6e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:logementTwo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'BackContent' => array($this, 'block_BackContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b91417bf0ee3078fa0ce9ab9c9937ec3a24ddbb5b4d50d29de038a6ac436e75d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91417bf0ee3078fa0ce9ab9c9937ec3a24ddbb5b4d50d29de038a6ac436e75d->enter($__internal_b91417bf0ee3078fa0ce9ab9c9937ec3a24ddbb5b4d50d29de038a6ac436e75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:logementTwo.html.twig"));

        $__internal_e8b5a57465062fec10295500e9deaaf3cbbc1d454b5a9a58eba1464fe24a2584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b5a57465062fec10295500e9deaaf3cbbc1d454b5a9a58eba1464fe24a2584->enter($__internal_e8b5a57465062fec10295500e9deaaf3cbbc1d454b5a9a58eba1464fe24a2584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:logementTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b91417bf0ee3078fa0ce9ab9c9937ec3a24ddbb5b4d50d29de038a6ac436e75d->leave($__internal_b91417bf0ee3078fa0ce9ab9c9937ec3a24ddbb5b4d50d29de038a6ac436e75d_prof);

        
        $__internal_e8b5a57465062fec10295500e9deaaf3cbbc1d454b5a9a58eba1464fe24a2584->leave($__internal_e8b5a57465062fec10295500e9deaaf3cbbc1d454b5a9a58eba1464fe24a2584_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1ba16b959b2bf2df2e2fae60b346caa9dac9a4fdad064e835225537181ab52b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ba16b959b2bf2df2e2fae60b346caa9dac9a4fdad064e835225537181ab52b->enter($__internal_d1ba16b959b2bf2df2e2fae60b346caa9dac9a4fdad064e835225537181ab52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d0bfc119d9f0735bdb9f44ef5bc821e9d4ae11249f5c9183c6aa214d55637d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d0bfc119d9f0735bdb9f44ef5bc821e9d4ae11249f5c9183c6aa214d55637d9->enter($__internal_0d0bfc119d9f0735bdb9f44ef5bc821e9d4ae11249f5c9183c6aa214d55637d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0d0bfc119d9f0735bdb9f44ef5bc821e9d4ae11249f5c9183c6aa214d55637d9->leave($__internal_0d0bfc119d9f0735bdb9f44ef5bc821e9d4ae11249f5c9183c6aa214d55637d9_prof);

        
        $__internal_d1ba16b959b2bf2df2e2fae60b346caa9dac9a4fdad064e835225537181ab52b->leave($__internal_d1ba16b959b2bf2df2e2fae60b346caa9dac9a4fdad064e835225537181ab52b_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_64559f9667222f88d357a2e58c1a0db28280376a9076d3465cde7b100313c976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64559f9667222f88d357a2e58c1a0db28280376a9076d3465cde7b100313c976->enter($__internal_64559f9667222f88d357a2e58c1a0db28280376a9076d3465cde7b100313c976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_78d0014e76c0fd29f1e40c79a25bd5e0b2ab8a48c68ff1fcd701dd53274faf12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d0014e76c0fd29f1e40c79a25bd5e0b2ab8a48c68ff1fcd701dd53274faf12->enter($__internal_78d0014e76c0fd29f1e40c79a25bd5e0b2ab8a48c68ff1fcd701dd53274faf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t";
        // line 10
        if (array_key_exists("document", $context)) {
            echo "        
\t\t\t\t<h2>Etape 2</h2>
\t\t\t\t<p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
\t\t\t\t<table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom du document</th>
\t\t\t\t\t\t\t<th>Lien de téléchargement</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["document"] ?? $this->getContext($context, "document")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pdfName", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary view-pdf\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("universites/pdf/" . $this->getAttribute($context["item"], "pdfName", array())) . ".pdf")), "html", null, true);
                echo "\" target=\"_blank\">Télécharger</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>    
\t\t\t\t<a class=\"btn btn-danger\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_logementStepsOne");
            echo "\">Precedent</a>
\t\t\t\t<a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_logementStepsTwo");
            echo "\">Suivant</a>
\t\t\t";
        }
        // line 34
        echo "\t\t</div>
\t</div>

\t<script type=\"text/javascript\" class=\"init\">
\t\t\$(document).ready(function() {
\t\t\tvar table = \$('#documentInsciption').DataTable( {
\t\t\t\tpaging: true,
\t\t\t\tresponsive: true,
\t\t\t\tsearching: false,
\t\t\t\t\"lengthChange\": false
\t\t\t} );
\t\t\tnew \$.fn.dataTable.FixedHeader( table );
\t\t} );
\t</script>
";
        
        $__internal_78d0014e76c0fd29f1e40c79a25bd5e0b2ab8a48c68ff1fcd701dd53274faf12->leave($__internal_78d0014e76c0fd29f1e40c79a25bd5e0b2ab8a48c68ff1fcd701dd53274faf12_prof);

        
        $__internal_64559f9667222f88d357a2e58c1a0db28280376a9076d3465cde7b100313c976->leave($__internal_64559f9667222f88d357a2e58c1a0db28280376a9076d3465cde7b100313c976_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:logementTwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  120 => 32,  116 => 31,  112 => 29,  102 => 25,  97 => 23,  94 => 22,  90 => 21,  76 => 10,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
\tInscription logement - {{ parent() }}
{% endblock %}

{% block BackContent %} 
\t<div class=\"row\">
\t\t<div class=\"col-md-12\">
\t\t\t{% if document is defined %}        
\t\t\t\t<h2>Etape 2</h2>
\t\t\t\t<p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
\t\t\t\t<table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom du document</th>
\t\t\t\t\t\t\t<th>Lien de téléchargement</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for item in document %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>{{ item.pdfName }}</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-primary view-pdf\" href=\"{{ asset('universites/pdf/' ~ item.pdfName ~ \".pdf\") }}\" target=\"_blank\">Télécharger</a>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>    
\t\t\t\t<a class=\"btn btn-danger\" href=\"{{ path('dudeego_platform_abonne_logementStepsOne') }}\">Precedent</a>
\t\t\t\t<a class=\"btn btn-primary\" href=\"{{ path('dudeego_platform_abonne_logementStepsTwo') }}\">Suivant</a>
\t\t\t{% endif %}
\t\t</div>
\t</div>

\t<script type=\"text/javascript\" class=\"init\">
\t\t\$(document).ready(function() {
\t\t\tvar table = \$('#documentInsciption').DataTable( {
\t\t\t\tpaging: true,
\t\t\t\tresponsive: true,
\t\t\t\tsearching: false,
\t\t\t\t\"lengthChange\": false
\t\t\t} );
\t\t\tnew \$.fn.dataTable.FixedHeader( table );
\t\t} );
\t</script>
{% endblock %}", "DUDEEGOPlatformBundle:back:logementTwo.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/logementTwo.html.twig");
    }
}
