<?php

/* @DUDEEGOPlatform/back/preparationTwo.html.twig */
class __TwigTemplate_88faea200db404f3623b51c86579f32f49f7fdf616b339d5c2c5d0553d6a3eb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/preparationTwo.html.twig", 1);
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
        $__internal_b7fda7785b97a4a680da7d90ca5fa5ecd40d063f17f43c194dea28559810f29d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7fda7785b97a4a680da7d90ca5fa5ecd40d063f17f43c194dea28559810f29d->enter($__internal_b7fda7785b97a4a680da7d90ca5fa5ecd40d063f17f43c194dea28559810f29d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/preparationTwo.html.twig"));

        $__internal_a91382f1b67a160a09f2f843e267db7464403060a775857471980f011c91ef26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91382f1b67a160a09f2f843e267db7464403060a775857471980f011c91ef26->enter($__internal_a91382f1b67a160a09f2f843e267db7464403060a775857471980f011c91ef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7fda7785b97a4a680da7d90ca5fa5ecd40d063f17f43c194dea28559810f29d->leave($__internal_b7fda7785b97a4a680da7d90ca5fa5ecd40d063f17f43c194dea28559810f29d_prof);

        
        $__internal_a91382f1b67a160a09f2f843e267db7464403060a775857471980f011c91ef26->leave($__internal_a91382f1b67a160a09f2f843e267db7464403060a775857471980f011c91ef26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c19fe34f55501332ae37aeaca39ff8f0d235eabbfd74770da4398c1ae17d5751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c19fe34f55501332ae37aeaca39ff8f0d235eabbfd74770da4398c1ae17d5751->enter($__internal_c19fe34f55501332ae37aeaca39ff8f0d235eabbfd74770da4398c1ae17d5751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d9b5ad58911531514d4eec1259f32034c53c017077c9e587f35a9b9447fd8c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9b5ad58911531514d4eec1259f32034c53c017077c9e587f35a9b9447fd8c29->enter($__internal_d9b5ad58911531514d4eec1259f32034c53c017077c9e587f35a9b9447fd8c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d9b5ad58911531514d4eec1259f32034c53c017077c9e587f35a9b9447fd8c29->leave($__internal_d9b5ad58911531514d4eec1259f32034c53c017077c9e587f35a9b9447fd8c29_prof);

        
        $__internal_c19fe34f55501332ae37aeaca39ff8f0d235eabbfd74770da4398c1ae17d5751->leave($__internal_c19fe34f55501332ae37aeaca39ff8f0d235eabbfd74770da4398c1ae17d5751_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_0c1188b77fe8928ae42b7770db913765a0d01545d8b93ce324f7cac428c31eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1188b77fe8928ae42b7770db913765a0d01545d8b93ce324f7cac428c31eeb->enter($__internal_0c1188b77fe8928ae42b7770db913765a0d01545d8b93ce324f7cac428c31eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_45719df23cdc6c0b80b3aae4fb0765275629bb1d4cf846a4e35ec34d488f5c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45719df23cdc6c0b80b3aae4fb0765275629bb1d4cf846a4e35ec34d488f5c63->enter($__internal_45719df23cdc6c0b80b3aae4fb0765275629bb1d4cf846a4e35ec34d488f5c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_45719df23cdc6c0b80b3aae4fb0765275629bb1d4cf846a4e35ec34d488f5c63->leave($__internal_45719df23cdc6c0b80b3aae4fb0765275629bb1d4cf846a4e35ec34d488f5c63_prof);

        
        $__internal_0c1188b77fe8928ae42b7770db913765a0d01545d8b93ce324f7cac428c31eeb->leave($__internal_0c1188b77fe8928ae42b7770db913765a0d01545d8b93ce324f7cac428c31eeb_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/preparationTwo.html.twig";
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
#}", "@DUDEEGOPlatform/back/preparationTwo.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\preparationTwo.html.twig");
    }
}
