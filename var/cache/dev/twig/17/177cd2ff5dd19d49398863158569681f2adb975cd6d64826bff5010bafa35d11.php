<?php

/* @DUDEEGOPlatform/back/langueTwo.html.twig */
class __TwigTemplate_24dc6dfb68d99e66e7870457d7c2af4ac5e8e471870e3cafcbb4867e4b2196d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/langueTwo.html.twig", 1);
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
        $__internal_9fa6bdd1f5722703588206a19777049b762be380452579af0d97b92f8590453f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fa6bdd1f5722703588206a19777049b762be380452579af0d97b92f8590453f->enter($__internal_9fa6bdd1f5722703588206a19777049b762be380452579af0d97b92f8590453f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/langueTwo.html.twig"));

        $__internal_f15e9f0913b3bc3356795a9b8710dca42b24cdd596cb40097832be878d38491b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f15e9f0913b3bc3356795a9b8710dca42b24cdd596cb40097832be878d38491b->enter($__internal_f15e9f0913b3bc3356795a9b8710dca42b24cdd596cb40097832be878d38491b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fa6bdd1f5722703588206a19777049b762be380452579af0d97b92f8590453f->leave($__internal_9fa6bdd1f5722703588206a19777049b762be380452579af0d97b92f8590453f_prof);

        
        $__internal_f15e9f0913b3bc3356795a9b8710dca42b24cdd596cb40097832be878d38491b->leave($__internal_f15e9f0913b3bc3356795a9b8710dca42b24cdd596cb40097832be878d38491b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e525e9a5fda41140b5bddf18cd64fc93b89079dd93a8c12c9f4fecd2c4deca31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e525e9a5fda41140b5bddf18cd64fc93b89079dd93a8c12c9f4fecd2c4deca31->enter($__internal_e525e9a5fda41140b5bddf18cd64fc93b89079dd93a8c12c9f4fecd2c4deca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f577864506ab83ab283756856852cfb42fd441a20962b9947f617dcd6b1df592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f577864506ab83ab283756856852cfb42fd441a20962b9947f617dcd6b1df592->enter($__internal_f577864506ab83ab283756856852cfb42fd441a20962b9947f617dcd6b1df592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f577864506ab83ab283756856852cfb42fd441a20962b9947f617dcd6b1df592->leave($__internal_f577864506ab83ab283756856852cfb42fd441a20962b9947f617dcd6b1df592_prof);

        
        $__internal_e525e9a5fda41140b5bddf18cd64fc93b89079dd93a8c12c9f4fecd2c4deca31->leave($__internal_e525e9a5fda41140b5bddf18cd64fc93b89079dd93a8c12c9f4fecd2c4deca31_prof);

    }

    // line 7
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_7085574c89f3d71451c25d21cbdeb28d181d5cf7d9e8f98b0f7cb55cf9665a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7085574c89f3d71451c25d21cbdeb28d181d5cf7d9e8f98b0f7cb55cf9665a16->enter($__internal_7085574c89f3d71451c25d21cbdeb28d181d5cf7d9e8f98b0f7cb55cf9665a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_b1c390c910b42b377fdb8701fe8dd706e9ec1c7725324e70d14a2bd6bac595b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1c390c910b42b377fdb8701fe8dd706e9ec1c7725324e70d14a2bd6bac595b5->enter($__internal_b1c390c910b42b377fdb8701fe8dd706e9ec1c7725324e70d14a2bd6bac595b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_b1c390c910b42b377fdb8701fe8dd706e9ec1c7725324e70d14a2bd6bac595b5->leave($__internal_b1c390c910b42b377fdb8701fe8dd706e9ec1c7725324e70d14a2bd6bac595b5_prof);

        
        $__internal_7085574c89f3d71451c25d21cbdeb28d181d5cf7d9e8f98b0f7cb55cf9665a16->leave($__internal_7085574c89f3d71451c25d21cbdeb28d181d5cf7d9e8f98b0f7cb55cf9665a16_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/langueTwo.html.twig";
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
#}", "@DUDEEGOPlatform/back/langueTwo.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\langueTwo.html.twig");
    }
}
