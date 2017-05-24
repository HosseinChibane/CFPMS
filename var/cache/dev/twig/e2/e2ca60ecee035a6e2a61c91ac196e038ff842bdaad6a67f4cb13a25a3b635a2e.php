<?php

/* DUDEEGOPlatformBundle:back:universiteTwo.html.twig */
class __TwigTemplate_192cb4bef63c2b9182c4aad64fdd523b1592ac1a4579b285a9a876412f9be4ca extends Twig_Template
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
        $__internal_05eeec65759a1b1aa282141f26183400baf6a716f6698b8f96863f404a75e4ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05eeec65759a1b1aa282141f26183400baf6a716f6698b8f96863f404a75e4ce->enter($__internal_05eeec65759a1b1aa282141f26183400baf6a716f6698b8f96863f404a75e4ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteTwo.html.twig"));

        $__internal_46da7956a1083b2d98e3e72dbb978ebef39e5a129473e8a9faa9bbe641f83c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46da7956a1083b2d98e3e72dbb978ebef39e5a129473e8a9faa9bbe641f83c34->enter($__internal_46da7956a1083b2d98e3e72dbb978ebef39e5a129473e8a9faa9bbe641f83c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:universiteTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05eeec65759a1b1aa282141f26183400baf6a716f6698b8f96863f404a75e4ce->leave($__internal_05eeec65759a1b1aa282141f26183400baf6a716f6698b8f96863f404a75e4ce_prof);

        
        $__internal_46da7956a1083b2d98e3e72dbb978ebef39e5a129473e8a9faa9bbe641f83c34->leave($__internal_46da7956a1083b2d98e3e72dbb978ebef39e5a129473e8a9faa9bbe641f83c34_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa901aa2b2f3a9792a9a02928389f99f8fb8be0452a47fffead95761b875983e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa901aa2b2f3a9792a9a02928389f99f8fb8be0452a47fffead95761b875983e->enter($__internal_aa901aa2b2f3a9792a9a02928389f99f8fb8be0452a47fffead95761b875983e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a56e4f9993776adcc3d9cf282e70be287be49bc7d50543d0fb59237db8877d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56e4f9993776adcc3d9cf282e70be287be49bc7d50543d0fb59237db8877d00->enter($__internal_a56e4f9993776adcc3d9cf282e70be287be49bc7d50543d0fb59237db8877d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Université - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a56e4f9993776adcc3d9cf282e70be287be49bc7d50543d0fb59237db8877d00->leave($__internal_a56e4f9993776adcc3d9cf282e70be287be49bc7d50543d0fb59237db8877d00_prof);

        
        $__internal_aa901aa2b2f3a9792a9a02928389f99f8fb8be0452a47fffead95761b875983e->leave($__internal_aa901aa2b2f3a9792a9a02928389f99f8fb8be0452a47fffead95761b875983e_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_351e736cff4051bf7551c5c5a733622bc9e66cb2c36c364d1c69696534097816 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351e736cff4051bf7551c5c5a733622bc9e66cb2c36c364d1c69696534097816->enter($__internal_351e736cff4051bf7551c5c5a733622bc9e66cb2c36c364d1c69696534097816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_212aa809e8d55de73002cec106374e4f04ab5d56419870ba6c3158c00d474a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212aa809e8d55de73002cec106374e4f04ab5d56419870ba6c3158c00d474a75->enter($__internal_212aa809e8d55de73002cec106374e4f04ab5d56419870ba6c3158c00d474a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_212aa809e8d55de73002cec106374e4f04ab5d56419870ba6c3158c00d474a75->leave($__internal_212aa809e8d55de73002cec106374e4f04ab5d56419870ba6c3158c00d474a75_prof);

        
        $__internal_351e736cff4051bf7551c5c5a733622bc9e66cb2c36c364d1c69696534097816->leave($__internal_351e736cff4051bf7551c5c5a733622bc9e66cb2c36c364d1c69696534097816_prof);

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
#}", "DUDEEGOPlatformBundle:back:universiteTwo.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/universiteTwo.html.twig");
    }
}
