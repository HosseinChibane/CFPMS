<?php

/* @DUDEEGOPlatform/back/logementTwo.html.twig */
class __TwigTemplate_008723cf3ff0e13e539a3982891c6d4c04e4e2f7f8ea307ce466a9701cc388d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/logementTwo.html.twig", 1);
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
        $__internal_8aa0eb0e3841d9ed6e15c8cff3e2ee9d745e9bfed411f82f6d1d92111438a0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aa0eb0e3841d9ed6e15c8cff3e2ee9d745e9bfed411f82f6d1d92111438a0d7->enter($__internal_8aa0eb0e3841d9ed6e15c8cff3e2ee9d745e9bfed411f82f6d1d92111438a0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/logementTwo.html.twig"));

        $__internal_d7011527d75593d7dadf142c19d7fef8a48a828dcd026c742fe878dc428aafde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7011527d75593d7dadf142c19d7fef8a48a828dcd026c742fe878dc428aafde->enter($__internal_d7011527d75593d7dadf142c19d7fef8a48a828dcd026c742fe878dc428aafde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/logementTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aa0eb0e3841d9ed6e15c8cff3e2ee9d745e9bfed411f82f6d1d92111438a0d7->leave($__internal_8aa0eb0e3841d9ed6e15c8cff3e2ee9d745e9bfed411f82f6d1d92111438a0d7_prof);

        
        $__internal_d7011527d75593d7dadf142c19d7fef8a48a828dcd026c742fe878dc428aafde->leave($__internal_d7011527d75593d7dadf142c19d7fef8a48a828dcd026c742fe878dc428aafde_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8f9ccb9cffd9559e46b43701fa24e49b3685829752f30a87206a670ef589190 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f9ccb9cffd9559e46b43701fa24e49b3685829752f30a87206a670ef589190->enter($__internal_b8f9ccb9cffd9559e46b43701fa24e49b3685829752f30a87206a670ef589190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_39f94c593399f9b8839375ef1ad9550af7567fe8717f1a0c067caea201cee70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f94c593399f9b8839375ef1ad9550af7567fe8717f1a0c067caea201cee70a->enter($__internal_39f94c593399f9b8839375ef1ad9550af7567fe8717f1a0c067caea201cee70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tInscription logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39f94c593399f9b8839375ef1ad9550af7567fe8717f1a0c067caea201cee70a->leave($__internal_39f94c593399f9b8839375ef1ad9550af7567fe8717f1a0c067caea201cee70a_prof);

        
        $__internal_b8f9ccb9cffd9559e46b43701fa24e49b3685829752f30a87206a670ef589190->leave($__internal_b8f9ccb9cffd9559e46b43701fa24e49b3685829752f30a87206a670ef589190_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_5fe9dc7bd9902ec3dbe99a161cd01a7b590b25e8d18d83d31830864dbcc1afca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe9dc7bd9902ec3dbe99a161cd01a7b590b25e8d18d83d31830864dbcc1afca->enter($__internal_5fe9dc7bd9902ec3dbe99a161cd01a7b590b25e8d18d83d31830864dbcc1afca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_99af7f1f88b591cb0feb84337892c4ee0e86afca24561b740af1b96208c57fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99af7f1f88b591cb0feb84337892c4ee0e86afca24561b740af1b96208c57fad->enter($__internal_99af7f1f88b591cb0feb84337892c4ee0e86afca24561b740af1b96208c57fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_99af7f1f88b591cb0feb84337892c4ee0e86afca24561b740af1b96208c57fad->leave($__internal_99af7f1f88b591cb0feb84337892c4ee0e86afca24561b740af1b96208c57fad_prof);

        
        $__internal_5fe9dc7bd9902ec3dbe99a161cd01a7b590b25e8d18d83d31830864dbcc1afca->leave($__internal_5fe9dc7bd9902ec3dbe99a161cd01a7b590b25e8d18d83d31830864dbcc1afca_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/logementTwo.html.twig";
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
{% endblock %}", "@DUDEEGOPlatform/back/logementTwo.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\logementTwo.html.twig");
    }
}
