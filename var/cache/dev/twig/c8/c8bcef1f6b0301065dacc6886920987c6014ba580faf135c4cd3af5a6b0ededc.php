<?php

/* DUDEEGOPlatformBundle:back:preparationTwo.html.twig */
class __TwigTemplate_f5c543566c1c8aa288f9802f08d1d507323f7a29839a71201e893a53feb98c13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:preparationTwo.html.twig", 1);
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
        $__internal_a4f7bce19c4e05287ed1b25d9d0843033b715cbd825b239676b98785b06b5cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4f7bce19c4e05287ed1b25d9d0843033b715cbd825b239676b98785b06b5cdd->enter($__internal_a4f7bce19c4e05287ed1b25d9d0843033b715cbd825b239676b98785b06b5cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:preparationTwo.html.twig"));

        $__internal_4d1fac1c95598983257c7ee78e4756cb272859d7278035eef0e66ca9e869a2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1fac1c95598983257c7ee78e4756cb272859d7278035eef0e66ca9e869a2e2->enter($__internal_4d1fac1c95598983257c7ee78e4756cb272859d7278035eef0e66ca9e869a2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4f7bce19c4e05287ed1b25d9d0843033b715cbd825b239676b98785b06b5cdd->leave($__internal_a4f7bce19c4e05287ed1b25d9d0843033b715cbd825b239676b98785b06b5cdd_prof);

        
        $__internal_4d1fac1c95598983257c7ee78e4756cb272859d7278035eef0e66ca9e869a2e2->leave($__internal_4d1fac1c95598983257c7ee78e4756cb272859d7278035eef0e66ca9e869a2e2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_17d34bde4cc170760e5b20e80ff064973e0478820c3d37f12c61f5b7973213a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d34bde4cc170760e5b20e80ff064973e0478820c3d37f12c61f5b7973213a2->enter($__internal_17d34bde4cc170760e5b20e80ff064973e0478820c3d37f12c61f5b7973213a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f95eb03b113d47ddc99542f4cd8f0460b3dc4165e241c885eab0212a8aa0179b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f95eb03b113d47ddc99542f4cd8f0460b3dc4165e241c885eab0212a8aa0179b->enter($__internal_f95eb03b113d47ddc99542f4cd8f0460b3dc4165e241c885eab0212a8aa0179b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f95eb03b113d47ddc99542f4cd8f0460b3dc4165e241c885eab0212a8aa0179b->leave($__internal_f95eb03b113d47ddc99542f4cd8f0460b3dc4165e241c885eab0212a8aa0179b_prof);

        
        $__internal_17d34bde4cc170760e5b20e80ff064973e0478820c3d37f12c61f5b7973213a2->leave($__internal_17d34bde4cc170760e5b20e80ff064973e0478820c3d37f12c61f5b7973213a2_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_c55c388f2f40adbb8f2724f33cb12dee79033fbbb92855b978c2866ce46b15d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55c388f2f40adbb8f2724f33cb12dee79033fbbb92855b978c2866ce46b15d7->enter($__internal_c55c388f2f40adbb8f2724f33cb12dee79033fbbb92855b978c2866ce46b15d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_f683820ebddce3078bdbdc6c30d31a1d5469f8c3e3e86a06f906b0c59cfc9b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f683820ebddce3078bdbdc6c30d31a1d5469f8c3e3e86a06f906b0c59cfc9b7d->enter($__internal_f683820ebddce3078bdbdc6c30d31a1d5469f8c3e3e86a06f906b0c59cfc9b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 10
        if (array_key_exists("document", $context)) {
            echo "        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["document"] ?? $this->getContext($context, "document")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                            <tr>
                                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pdfName", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("universites/pdf/" . $this->getAttribute($context["item"], "pdfName", array())) . ".pdf")), "html", null, true);
                echo "\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_preparationStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_preparationStepsTwo");
            echo "\">Suivant</a>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
";
        
        $__internal_f683820ebddce3078bdbdc6c30d31a1d5469f8c3e3e86a06f906b0c59cfc9b7d->leave($__internal_f683820ebddce3078bdbdc6c30d31a1d5469f8c3e3e86a06f906b0c59cfc9b7d_prof);

        
        $__internal_c55c388f2f40adbb8f2724f33cb12dee79033fbbb92855b978c2866ce46b15d7->leave($__internal_c55c388f2f40adbb8f2724f33cb12dee79033fbbb92855b978c2866ce46b15d7_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:preparationTwo.html.twig";
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
    Inscription Préparation - {{ parent() }}
{% endblock %}

{% block BackContent %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% if document is defined %}        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in document %}
                            <tr>
                                <td>{{ item.pdfName }}</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"{{ asset('universites/pdf/' ~ item.pdfName ~ \".pdf\") }}\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"{{ path('dudeego_platform_abonne_preparationStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('dudeego_platform_abonne_preparationStepsTwo') }}\">Suivant</a>
            {% endif %}
        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
{% endblock %}

{#                OK mais moche                
<img src=\"{{ vich_uploader_asset(item, 'pdfFile') }}\" alt=\"{{ item.pdfName }}\" />
#}", "DUDEEGOPlatformBundle:back:preparationTwo.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/preparationTwo.html.twig");
    }
}
