<?php

/* DUDEEGOPlatformBundle:back:mesDemandes.html.twig */
class __TwigTemplate_97e26ad1be59d59cb009bc6f27b6e42ca5883ce22c47788bad137f9ddaafe9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "DUDEEGOPlatformBundle:back:mesDemandes.html.twig", 1);
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
        $__internal_a4658580cbd538c8dcb5fe25d7fec303ba6c1c824fd2f4e6b1072afe0492115a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4658580cbd538c8dcb5fe25d7fec303ba6c1c824fd2f4e6b1072afe0492115a->enter($__internal_a4658580cbd538c8dcb5fe25d7fec303ba6c1c824fd2f4e6b1072afe0492115a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mesDemandes.html.twig"));

        $__internal_9e9a06ceed9c59735651f8cefdb4138cb12058cfd83827cba8330bae5c8904f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e9a06ceed9c59735651f8cefdb4138cb12058cfd83827cba8330bae5c8904f3->enter($__internal_9e9a06ceed9c59735651f8cefdb4138cb12058cfd83827cba8330bae5c8904f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:back:mesDemandes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4658580cbd538c8dcb5fe25d7fec303ba6c1c824fd2f4e6b1072afe0492115a->leave($__internal_a4658580cbd538c8dcb5fe25d7fec303ba6c1c824fd2f4e6b1072afe0492115a_prof);

        
        $__internal_9e9a06ceed9c59735651f8cefdb4138cb12058cfd83827cba8330bae5c8904f3->leave($__internal_9e9a06ceed9c59735651f8cefdb4138cb12058cfd83827cba8330bae5c8904f3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb558c65fb41edef74eb01e58081208e317626b3f7fce55c842aada10bed88c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb558c65fb41edef74eb01e58081208e317626b3f7fce55c842aada10bed88c0->enter($__internal_eb558c65fb41edef74eb01e58081208e317626b3f7fce55c842aada10bed88c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_291cb540e85e3c36fc77789f6e83473222e3f702e8ae17aa1c520a65c53f2d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_291cb540e85e3c36fc77789f6e83473222e3f702e8ae17aa1c520a65c53f2d21->enter($__internal_291cb540e85e3c36fc77789f6e83473222e3f702e8ae17aa1c520a65c53f2d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Demandes - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_291cb540e85e3c36fc77789f6e83473222e3f702e8ae17aa1c520a65c53f2d21->leave($__internal_291cb540e85e3c36fc77789f6e83473222e3f702e8ae17aa1c520a65c53f2d21_prof);

        
        $__internal_eb558c65fb41edef74eb01e58081208e317626b3f7fce55c842aada10bed88c0->leave($__internal_eb558c65fb41edef74eb01e58081208e317626b3f7fce55c842aada10bed88c0_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_12ccab5a6a21aaf8aeda784419bfa8311219d27f5f87a6230e34bc26a14b997e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ccab5a6a21aaf8aeda784419bfa8311219d27f5f87a6230e34bc26a14b997e->enter($__internal_12ccab5a6a21aaf8aeda784419bfa8311219d27f5f87a6230e34bc26a14b997e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_b7807e8c1f906dfc8d994b1d9cb27e32e55a8d9a4bfc2a19e468e892b2c5b4d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7807e8c1f906dfc8d994b1d9cb27e32e55a8d9a4bfc2a19e468e892b2c5b4d1->enter($__internal_b7807e8c1f906dfc8d994b1d9cb27e32e55a8d9a4bfc2a19e468e892b2c5b4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Demandes</li>
    </ol>
";
        
        $__internal_b7807e8c1f906dfc8d994b1d9cb27e32e55a8d9a4bfc2a19e468e892b2c5b4d1->leave($__internal_b7807e8c1f906dfc8d994b1d9cb27e32e55a8d9a4bfc2a19e468e892b2c5b4d1_prof);

        
        $__internal_12ccab5a6a21aaf8aeda784419bfa8311219d27f5f87a6230e34bc26a14b997e->leave($__internal_12ccab5a6a21aaf8aeda784419bfa8311219d27f5f87a6230e34bc26a14b997e_prof);

    }

    // line 14
    public function block_BackContent($context, array $blocks = array())
    {
        $__internal_40e581ebf7db51ef4aee8568a383d562e56b11c1ac2e39a33e99e3b3de5b2fb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40e581ebf7db51ef4aee8568a383d562e56b11c1ac2e39a33e99e3b3de5b2fb8->enter($__internal_40e581ebf7db51ef4aee8568a383d562e56b11c1ac2e39a33e99e3b3de5b2fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

        $__internal_a5caa1b85b525f8a6a616cf7b8a6f0862dfbfd2441d25e64a0050d5c7a7174a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5caa1b85b525f8a6a616cf7b8a6f0862dfbfd2441d25e64a0050d5c7a7174a1->enter($__internal_a5caa1b85b525f8a6a616cf7b8a6f0862dfbfd2441d25e64a0050d5c7a7174a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackContent"));

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
        
        $__internal_a5caa1b85b525f8a6a616cf7b8a6f0862dfbfd2441d25e64a0050d5c7a7174a1->leave($__internal_a5caa1b85b525f8a6a616cf7b8a6f0862dfbfd2441d25e64a0050d5c7a7174a1_prof);

        
        $__internal_40e581ebf7db51ef4aee8568a383d562e56b11c1ac2e39a33e99e3b3de5b2fb8->leave($__internal_40e581ebf7db51ef4aee8568a383d562e56b11c1ac2e39a33e99e3b3de5b2fb8_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:back:mesDemandes.html.twig";
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
{% endblock %}", "DUDEEGOPlatformBundle:back:mesDemandes.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/back/mesDemandes.html.twig");
    }
}
