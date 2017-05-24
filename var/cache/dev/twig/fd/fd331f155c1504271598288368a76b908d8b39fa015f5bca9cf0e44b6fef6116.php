<?php

/* @DUDEEGOPlatform/back/mesDemandes.html.twig */
class __TwigTemplate_1311944c4225b9c65a75a94eb2230e5a0ebf9e59748220084a1d0b68e2040de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@DUDEEGOPlatform/back/mesDemandes.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'BackContent' => array($this, 'block_BackContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_173fd740d99b17d9c7671bfbb2c1477863378f34253572a998d0e1b0985e428f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_173fd740d99b17d9c7671bfbb2c1477863378f34253572a998d0e1b0985e428f->enter($__internal_173fd740d99b17d9c7671bfbb2c1477863378f34253572a998d0e1b0985e428f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/mesDemandes.html.twig"));

        $__internal_ca724bf431790cf489fb254199ec8cd35bb1b22b0f517e4472b167f201b7bba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca724bf431790cf489fb254199ec8cd35bb1b22b0f517e4472b167f201b7bba3->enter($__internal_ca724bf431790cf489fb254199ec8cd35bb1b22b0f517e4472b167f201b7bba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/back/mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_173fd740d99b17d9c7671bfbb2c1477863378f34253572a998d0e1b0985e428f->leave($__internal_173fd740d99b17d9c7671bfbb2c1477863378f34253572a998d0e1b0985e428f_prof);

        
        $__internal_ca724bf431790cf489fb254199ec8cd35bb1b22b0f517e4472b167f201b7bba3->leave($__internal_ca724bf431790cf489fb254199ec8cd35bb1b22b0f517e4472b167f201b7bba3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_865d33524e8b9104fed6aa0e7fd5cecac4346c23635696496374de3a2aa6cbdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865d33524e8b9104fed6aa0e7fd5cecac4346c23635696496374de3a2aa6cbdb->enter($__internal_865d33524e8b9104fed6aa0e7fd5cecac4346c23635696496374de3a2aa6cbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d8a26915b2a50f89699314017191bcdbf14389c4d3f8826274e210855e95488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8a26915b2a50f89699314017191bcdbf14389c4d3f8826274e210855e95488->enter($__internal_5d8a26915b2a50f89699314017191bcdbf14389c4d3f8826274e210855e95488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5d8a26915b2a50f89699314017191bcdbf14389c4d3f8826274e210855e95488->leave($__internal_5d8a26915b2a50f89699314017191bcdbf14389c4d3f8826274e210855e95488_prof);

        
        $__internal_865d33524e8b9104fed6aa0e7fd5cecac4346c23635696496374de3a2aa6cbdb->leave($__internal_865d33524e8b9104fed6aa0e7fd5cecac4346c23635696496374de3a2aa6cbdb_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f065be91f04b4628e7a0b61bc84b9fcb10d7fb4596b04ef419550b14714175c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f065be91f04b4628e7a0b61bc84b9fcb10d7fb4596b04ef419550b14714175c7->enter($__internal_f065be91f04b4628e7a0b61bc84b9fcb10d7fb4596b04ef419550b14714175c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_ed4f4c2f50c349e18c78e9d7866c4bd2b7289166cc4ec56955b053b106c89197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed4f4c2f50c349e18c78e9d7866c4bd2b7289166cc4ec56955b053b106c89197->enter($__internal_ed4f4c2f50c349e18c78e9d7866c4bd2b7289166cc4ec56955b053b106c89197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_ed4f4c2f50c349e18c78e9d7866c4bd2b7289166cc4ec56955b053b106c89197->leave($__internal_ed4f4c2f50c349e18c78e9d7866c4bd2b7289166cc4ec56955b053b106c89197_prof);

        
        $__internal_f065be91f04b4628e7a0b61bc84b9fcb10d7fb4596b04ef419550b14714175c7->leave($__internal_f065be91f04b4628e7a0b61bc84b9fcb10d7fb4596b04ef419550b14714175c7_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_a6ed12ed93318da1050f389fd9e34c1f8d9eb5af089787339ad5d787ad651fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6ed12ed93318da1050f389fd9e34c1f8d9eb5af089787339ad5d787ad651fe6->enter($__internal_a6ed12ed93318da1050f389fd9e34c1f8d9eb5af089787339ad5d787ad651fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_85691c0fa796fad07035ea95a1bb70428607f25349533a26f621781d3eda57e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85691c0fa796fad07035ea95a1bb70428607f25349533a26f621781d3eda57e4->enter($__internal_85691c0fa796fad07035ea95a1bb70428607f25349533a26f621781d3eda57e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        echo " 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 27
        if (array_key_exists("listDemandeInscription", $context)) {
            // line 28
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listDemandeInscription"] ?? $this->getContext($context, "listDemandeInscription")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowDemande"]) {
                // line 29
                echo "                        <tr>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "id", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "type", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowDemande"], "etat", array()), "html", null, true);
                echo "</td>
                            <td>           
                                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_detailsDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_modifierDemandes", array("id" => $this->getAttribute($context["rowDemande"], "id", array()))), "html", null, true);
                echo "\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowDemande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                ";
        }
        // line 44
        echo "            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
";
        
        $__internal_85691c0fa796fad07035ea95a1bb70428607f25349533a26f621781d3eda57e4->leave($__internal_85691c0fa796fad07035ea95a1bb70428607f25349533a26f621781d3eda57e4_prof);

        
        $__internal_a6ed12ed93318da1050f389fd9e34c1f8d9eb5af089787339ad5d787ad651fe6->leave($__internal_a6ed12ed93318da1050f389fd9e34c1f8d9eb5af089787339ad5d787ad651fe6_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/back/mesDemandes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 44,  154 => 43,  142 => 37,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  120 => 29,  115 => 28,  113 => 27,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
    Mes Demandes - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
{% endblock %}

{% block BackContent %} 
    <!-- Mes Demandes -->
    <div class=\"col-md-12\">
        <table id=\"demandeInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Demande</th>
                    <th>Etat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {% if listDemandeInscription is defined %}
                    {% for rowDemande in listDemandeInscription %}
                        <tr>
                            <td>{{rowDemande.id}}</td>
                            <td>{{rowDemande.type}}</td>
                            <td>{{rowDemande.etat}}</td>
                            <td>           
                                <a href=\"{{ path('dudeego_platform_abonne_detailsDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-list-alt\"></span> Détails
                                </a>
                                <a href=\"{{ path('dudeego_platform_abonne_modifierDemandes', { 'id' : rowDemande.id } ) }}\" >
                                    <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                {% endif %}
            </tbody>
        </table>
    </div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
  }
});
  var table = \$('#demandeInsciption').DataTable({
    language: {
        emptyTable: \"Pas encore de demande\"
    },
    retrieve: true,
    paging: true,
    searching: true,
    ordering:  true,
    info: false
});
} );
</script>
{% endblock %}", "@DUDEEGOPlatform/back/mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\back\\mesDemandes.html.twig");
    }
}
