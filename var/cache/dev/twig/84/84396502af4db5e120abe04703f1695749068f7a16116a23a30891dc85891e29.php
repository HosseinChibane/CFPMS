<?php

/* DUDEEGOPlatformBundle:back:universiteTwo.html.twig */
class __TwigTemplate_66baa33670271699c5b856b27b58089b45c48e8617c0af6b873bdf8a2acf6e3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:universiteTwo.html.twig", 1);
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
        $__internal_6eb0614910327954b3acc002a963801bae1d98e227a99ee7b9924f7258264a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb0614910327954b3acc002a963801bae1d98e227a99ee7b9924f7258264a5c->enter($__internal_6eb0614910327954b3acc002a963801bae1d98e227a99ee7b9924f7258264a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteTwo.html.twig"));

        $__internal_a07c69bb9acfa055a2b0e249561f33455d41c8fb0d8f6b294c8fecd4843381b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07c69bb9acfa055a2b0e249561f33455d41c8fb0d8f6b294c8fecd4843381b4->enter($__internal_a07c69bb9acfa055a2b0e249561f33455d41c8fb0d8f6b294c8fecd4843381b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eb0614910327954b3acc002a963801bae1d98e227a99ee7b9924f7258264a5c->leave($__internal_6eb0614910327954b3acc002a963801bae1d98e227a99ee7b9924f7258264a5c_prof);

        
        $__internal_a07c69bb9acfa055a2b0e249561f33455d41c8fb0d8f6b294c8fecd4843381b4->leave($__internal_a07c69bb9acfa055a2b0e249561f33455d41c8fb0d8f6b294c8fecd4843381b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ace13cbd75cbf47f358c2cca39ae91cd232fb58d99b67ca882a91bbca64fa084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace13cbd75cbf47f358c2cca39ae91cd232fb58d99b67ca882a91bbca64fa084->enter($__internal_ace13cbd75cbf47f358c2cca39ae91cd232fb58d99b67ca882a91bbca64fa084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5053a9ee2a73776c1b42525da9617a62a5537f0ecd50db06c6075c266dfb81e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5053a9ee2a73776c1b42525da9617a62a5537f0ecd50db06c6075c266dfb81e3->enter($__internal_5053a9ee2a73776c1b42525da9617a62a5537f0ecd50db06c6075c266dfb81e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5053a9ee2a73776c1b42525da9617a62a5537f0ecd50db06c6075c266dfb81e3->leave($__internal_5053a9ee2a73776c1b42525da9617a62a5537f0ecd50db06c6075c266dfb81e3_prof);

        
        $__internal_ace13cbd75cbf47f358c2cca39ae91cd232fb58d99b67ca882a91bbca64fa084->leave($__internal_ace13cbd75cbf47f358c2cca39ae91cd232fb58d99b67ca882a91bbca64fa084_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_e054feb8a5f0b1bc967a729357b397f398676679c381fe921a46e21cb53debc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e054feb8a5f0b1bc967a729357b397f398676679c381fe921a46e21cb53debc4->enter($__internal_e054feb8a5f0b1bc967a729357b397f398676679c381fe921a46e21cb53debc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_368ee4108e2c4118395279c6ef36b8705005bbae28c0efa9d7a10ac6dbb26427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368ee4108e2c4118395279c6ef36b8705005bbae28c0efa9d7a10ac6dbb26427->enter($__internal_368ee4108e2c4118395279c6ef36b8705005bbae28c0efa9d7a10ac6dbb26427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_universiteStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_universiteStepsTwo");
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
        
        $__internal_368ee4108e2c4118395279c6ef36b8705005bbae28c0efa9d7a10ac6dbb26427->leave($__internal_368ee4108e2c4118395279c6ef36b8705005bbae28c0efa9d7a10ac6dbb26427_prof);

        
        $__internal_e054feb8a5f0b1bc967a729357b397f398676679c381fe921a46e21cb53debc4->leave($__internal_e054feb8a5f0b1bc967a729357b397f398676679c381fe921a46e21cb53debc4_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:universiteTwo.html.twig";
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
    Inscription Université - {{ parent() }}
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
                <a class=\"btn btn-danger\" href=\"{{ path('dudeego_platform_abonne_universiteStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('dudeego_platform_abonne_universiteStepsTwo') }}\">Suivant</a>
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
#}", "DUDEEGOPlatformBundle:back:universiteTwo.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\universiteTwo.html.twig");
    }
}
