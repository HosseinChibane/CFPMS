<?php

/* DUDEEGOPlatformBundle:back:langueTwo.html.twig */
class __TwigTemplate_470c6eb20f2826b3d79f249ea906b168b435893a9c1ba08c70373320fca60d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:langueTwo.html.twig", 1);
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
        $__internal_04173167442e3ba239762d7937c990dda25132137171cde95f0ed71ecf4a769b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04173167442e3ba239762d7937c990dda25132137171cde95f0ed71ecf4a769b->enter($__internal_04173167442e3ba239762d7937c990dda25132137171cde95f0ed71ecf4a769b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:langueTwo.html.twig"));

        $__internal_6e677e60931060528899c0cebadca1f71347b9270fc5d88eb686fb6a4fd1c59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e677e60931060528899c0cebadca1f71347b9270fc5d88eb686fb6a4fd1c59e->enter($__internal_6e677e60931060528899c0cebadca1f71347b9270fc5d88eb686fb6a4fd1c59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04173167442e3ba239762d7937c990dda25132137171cde95f0ed71ecf4a769b->leave($__internal_04173167442e3ba239762d7937c990dda25132137171cde95f0ed71ecf4a769b_prof);

        
        $__internal_6e677e60931060528899c0cebadca1f71347b9270fc5d88eb686fb6a4fd1c59e->leave($__internal_6e677e60931060528899c0cebadca1f71347b9270fc5d88eb686fb6a4fd1c59e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfa4a022bed59b4ed524f58b653a24d10e37425f8367a2cb5fa11b0111862d88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa4a022bed59b4ed524f58b653a24d10e37425f8367a2cb5fa11b0111862d88->enter($__internal_dfa4a022bed59b4ed524f58b653a24d10e37425f8367a2cb5fa11b0111862d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3eddd68ab9bbcb668949c2f86f6fa88322b4a8321b95e705381dda1bf46c0c9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eddd68ab9bbcb668949c2f86f6fa88322b4a8321b95e705381dda1bf46c0c9a->enter($__internal_3eddd68ab9bbcb668949c2f86f6fa88322b4a8321b95e705381dda1bf46c0c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3eddd68ab9bbcb668949c2f86f6fa88322b4a8321b95e705381dda1bf46c0c9a->leave($__internal_3eddd68ab9bbcb668949c2f86f6fa88322b4a8321b95e705381dda1bf46c0c9a_prof);

        
        $__internal_dfa4a022bed59b4ed524f58b653a24d10e37425f8367a2cb5fa11b0111862d88->leave($__internal_dfa4a022bed59b4ed524f58b653a24d10e37425f8367a2cb5fa11b0111862d88_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_e8de8d22c191595eb8b6975bd7fb07e80b40c37146ef2989db5837cf2ddc1fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8de8d22c191595eb8b6975bd7fb07e80b40c37146ef2989db5837cf2ddc1fff->enter($__internal_e8de8d22c191595eb8b6975bd7fb07e80b40c37146ef2989db5837cf2ddc1fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_5967e9e0c7601cfe30f21b6779d224abe0245c577b83f1bac202feb64e49f79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5967e9e0c7601cfe30f21b6779d224abe0245c577b83f1bac202feb64e49f79d->enter($__internal_5967e9e0c7601cfe30f21b6779d224abe0245c577b83f1bac202feb64e49f79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_langueStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_langueStepsThree");
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
        
        $__internal_5967e9e0c7601cfe30f21b6779d224abe0245c577b83f1bac202feb64e49f79d->leave($__internal_5967e9e0c7601cfe30f21b6779d224abe0245c577b83f1bac202feb64e49f79d_prof);

        
        $__internal_e8de8d22c191595eb8b6975bd7fb07e80b40c37146ef2989db5837cf2ddc1fff->leave($__internal_e8de8d22c191595eb8b6975bd7fb07e80b40c37146ef2989db5837cf2ddc1fff_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:langueTwo.html.twig";
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
    Inscription Langue - {{ parent() }}
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
                <a class=\"btn btn-danger\" href=\"{{ path('dudeego_platform_abonne_langueStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('dudeego_platform_abonne_langueStepsThree') }}\">Suivant</a>
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
#}", "DUDEEGOPlatformBundle:back:langueTwo.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/langueTwo.html.twig");
    }
}
