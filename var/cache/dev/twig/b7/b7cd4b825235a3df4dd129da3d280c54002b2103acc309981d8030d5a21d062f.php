<?php

/* DUDEEGOPlatformBundle:front:comparateur.html.twig */
class __TwigTemplate_89076af3df063b041635926034da05fe0e014244017ee98102f5c2946814cee1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:comparateur.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'FrontContent' => array($this, 'block_FrontContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DUDEEGOPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3de715680540c904eb8993f2be0ed3deaeb19c2a7461eb3af380110e824a217e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3de715680540c904eb8993f2be0ed3deaeb19c2a7461eb3af380110e824a217e->enter($__internal_3de715680540c904eb8993f2be0ed3deaeb19c2a7461eb3af380110e824a217e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:comparateur.html.twig"));

        $__internal_f79b828b7e0d78a9f5a06fecdf8bfd762832b437093e27c9c2b256c96080d754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79b828b7e0d78a9f5a06fecdf8bfd762832b437093e27c9c2b256c96080d754->enter($__internal_f79b828b7e0d78a9f5a06fecdf8bfd762832b437093e27c9c2b256c96080d754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:comparateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3de715680540c904eb8993f2be0ed3deaeb19c2a7461eb3af380110e824a217e->leave($__internal_3de715680540c904eb8993f2be0ed3deaeb19c2a7461eb3af380110e824a217e_prof);

        
        $__internal_f79b828b7e0d78a9f5a06fecdf8bfd762832b437093e27c9c2b256c96080d754->leave($__internal_f79b828b7e0d78a9f5a06fecdf8bfd762832b437093e27c9c2b256c96080d754_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_10fea7853495ebbdf946722f3d18c339835c7f91531090a12db113407caca95d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10fea7853495ebbdf946722f3d18c339835c7f91531090a12db113407caca95d->enter($__internal_10fea7853495ebbdf946722f3d18c339835c7f91531090a12db113407caca95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91269372860bcda1f43b1a5791470aeafe9bdb567db9130410630e57f19cf8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91269372860bcda1f43b1a5791470aeafe9bdb567db9130410630e57f19cf8b0->enter($__internal_91269372860bcda1f43b1a5791470aeafe9bdb567db9130410630e57f19cf8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Comparateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_91269372860bcda1f43b1a5791470aeafe9bdb567db9130410630e57f19cf8b0->leave($__internal_91269372860bcda1f43b1a5791470aeafe9bdb567db9130410630e57f19cf8b0_prof);

        
        $__internal_10fea7853495ebbdf946722f3d18c339835c7f91531090a12db113407caca95d->leave($__internal_10fea7853495ebbdf946722f3d18c339835c7f91531090a12db113407caca95d_prof);

    }

    // line 7
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_7b6d1201edc965b839cd967a9548327b0fd88fddc103ea7bfbe13b3df72a6d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b6d1201edc965b839cd967a9548327b0fd88fddc103ea7bfbe13b3df72a6d4f->enter($__internal_7b6d1201edc965b839cd967a9548327b0fd88fddc103ea7bfbe13b3df72a6d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_e63ba318b92dce651f07badfb5fdae7130deaa914324fa4beb236a550d78da10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63ba318b92dce651f07badfb5fdae7130deaa914324fa4beb236a550d78da10->enter($__internal_e63ba318b92dce651f07badfb5fdae7130deaa914324fa4beb236a550d78da10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        // line 8
        echo "
 <!-- Page Heading/Breadcrumbs -->
 <div class=\"row\">
  <div class=\"col-lg-12\">
    <h1 class=\"page-header\">DUDEE'GO
      <small>Simplifiez vos démarches et optimisez vos chances d'intégrer une Université</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Accueil</a>
      </li>
      <li class=\"active\">Comparateur</li>
    </ol>
  </div>
</div>
<!-- /.row -->

<div class=\"row\">
  <div class=\"col-sm-2 col-md-2 col-lg-2 col-xl-2\">
    <div class=\"well\">

      ";
        // line 29
        echo "      ";
        // line 30
        echo "      ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_filterComparateur"), "method" => "POST"));
        echo "
      ";
        // line 32
        echo "      ";
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 33
            echo "        <div class=\"alert alert-danger\" role=\"alert\">
          ";
            // line 34
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
      ";
        }
        // line 37
        echo "
      <div class=\"form-group\">
       <i class=\"fa fa-search\"></i>
       ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomuniversite", array()), 'label', array("label" => "Rechercher"));
        echo "
       ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomuniversite", array()), 'widget');
        echo "

       ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formations", array()), 'label');
        echo "
       ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formations", array()), 'widget');
        echo "

       ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langues", array()), 'label');
        echo "
       ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langues", array()), 'widget');
        echo "

       ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "villes", array()), 'label');
        echo "
       ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "villes", array()), 'widget');
        echo "

       ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'label');
        echo "
       ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "

     </div>
     <div class=\"form-group\">
       ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo " 
       ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comparez", array()), 'widget');
        echo "
     </div>


     ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

   </div>
 </div>
 <div id=\"center_block\" class=\"col-sm-8 col-md-8 col-lg-8 col-xl-8\">
  <table id=\"tableUniversite\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\" data-order='[[ 1, \"asc\" ]]' data-page-length='10'>
    <thead>
      <tr>
        <th>Classement</th>
        <th>Nom de l'établissement</th>
        <th>Ville</th>
        <th>Pays</th>
        <th>Bourse</th>
        <th>Montant</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id=\"content_result\">
      ";
        // line 80
        if (array_key_exists("listUniversite", $context)) {
            // line 81
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listUniversite"] ?? $this->getContext($context, "listUniversite")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowUniversite"]) {
                // line 82
                echo "          <tr>
            <td>
              ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "classement", array()), "html", null, true);
                echo "
            </td>
            <td>
             <div id=\"nom-etablissement-";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "id", array()), "html", null, true);
                echo "\">
              ";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "nometablissement", array()), "html", null, true);
                echo "
            </div>  
          </td>
          <td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rowUniversite"], "adresse", array()), "ville", array()), "commune", array()), "html", null, true);
                echo "</td>
          <td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowUniversite"], "adresse", array()), "ville", array()), "pays", array()), "pays", array()), "html", null, true);
                echo "</td>
          ";
                // line 93
                if ($this->getAttribute($context["rowUniversite"], "bourse", array())) {
                    // line 94
                    echo "            <td>Oui</td>
          ";
                } else {
                    // line 96
                    echo "           <td>Non</td>
         ";
                }
                // line 98
                echo "         <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "montantbourse", array()), "html", null, true);
                echo "</td>
         <td>
          <a href=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_detailsComparateur", array("id" => $this->getAttribute($context["rowUniversite"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-cog\"></span>Détails</a>
          <a  class=\"add_comparateur\" href=\"#\" data-id=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "id", array()), "html", null, true);
                echo "\"> <span class=\"glyphicon glyphicon-plus\"></span>Favoris</a>
        </td>
      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowUniversite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "  ";
        }
        // line 106
        echo "</tbody>
</table>
</div>
<div class=\"col-sm-2 col-md-2 col-lg-2 col-xl-2\">
  <div class=\"well\">
    ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 112
            echo "      <div class=\"flash-notice\">
        ";
            // line 113
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "    ";
        if (array_key_exists("listFavUniversite", $context)) {
            // line 117
            echo "      <table id=\"favoris\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
        <thead>
          <tr>
            <th>Etablissement</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 125
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listFavUniversite"] ?? $this->getContext($context, "listFavUniversite")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 126
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["item"]);
                foreach ($context['_seq'] as $context["_key"] => $context["subItem"]) {
                    // line 127
                    echo "              <tr>
                <td>
                  ";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subItem"], "nometablissement", array()), "html", null, true);
                    echo "
                </td>
                <td>
                  <!-- trigger favorite -->                      
                  <a href=\"";
                    // line 133
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_PanierComparateur", array("id" => $this->getAttribute($context["subItem"], "id", array()))), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-remove\"></span>Remove</a>
                </td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "     
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "        </tbody>
      </table>
      <a href=\"";
            // line 140
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_comparerComparateur");
            echo "\">Comparer</a>
    ";
        } else {
            // line 142
            echo "     ";
            // line 143
            echo "     <table id=\"favoris\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
      <thead>
        <tr>
          <th>Etablissement</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id=\"comparateur-universites\">
      </tbody>
    </table>

    <input type=\"hidden\" id=\"nbItems\" name=\"nbItems\" value=\"\">
    <form id=\"form-item-comparateur\" action=\"";
            // line 155
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_itemsComparateur");
            echo "\" method=\"POST\">
      <input id =\"id0\" type=\"hidden\" name=\"id0\" value=\"\">
      <input id =\"id1\" type=\"hidden\" name=\"id1\" value=\"\">
      <input id =\"id2\" type=\"hidden\" name=\"id2\" value=\"\">
      <input id =\"id3\" type=\"hidden\" name=\"id3\" value=\"\">
      <input id =\"id4\" type=\"hidden\" name=\"id4\" value=\"\">
      <input id =\"id5\" type=\"hidden\" name=\"id5\" value=\"\">
      <input id =\"id6\" type=\"hidden\" name=\"id6\" value=\"\">
      <input id =\"id7\" type=\"hidden\" name=\"id7\" value=\"\">
      <input id =\"id8\" type=\"hidden\" name=\"id8\" value=\"\">
      <input id =\"id9\" type=\"hidden\" name=\"id9\" value=\"\">
      <button id=\"comparateur_btn\" type=\"submit\" class=\"btn btn-primary\" disabled=\"disabled\">Comparez Favoris</button>
    </form>  
    ";
            // line 169
            echo "
  ";
        }
        // line 171
        echo "</div>
</div>
</div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
    }
  });
  var table = \$('#tableUniversite').DataTable({
    language: {
      emptyTable: \"Pas de données\"
    },
    responsive: true,
    retrieve: true,
    paging: true,
    searching: false,
    ordering:  true,
    info: false
  });
} );
</script>

";
        // line 197
        echo "<script type=\"text/javascript\">

</script>
";
        // line 201
        echo "<script  src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/js/comparateur.js"), "html", null, true);
        echo "\" defer></script>
";
        
        $__internal_e63ba318b92dce651f07badfb5fdae7130deaa914324fa4beb236a550d78da10->leave($__internal_e63ba318b92dce651f07badfb5fdae7130deaa914324fa4beb236a550d78da10_prof);

        
        $__internal_7b6d1201edc965b839cd967a9548327b0fd88fddc103ea7bfbe13b3df72a6d4f->leave($__internal_7b6d1201edc965b839cd967a9548327b0fd88fddc103ea7bfbe13b3df72a6d4f_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:comparateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 201,  410 => 197,  383 => 171,  379 => 169,  363 => 155,  349 => 143,  347 => 142,  342 => 140,  338 => 138,  331 => 136,  321 => 133,  314 => 129,  310 => 127,  305 => 126,  301 => 125,  291 => 117,  288 => 116,  279 => 113,  276 => 112,  272 => 111,  265 => 106,  262 => 105,  252 => 101,  248 => 100,  242 => 98,  238 => 96,  234 => 94,  232 => 93,  228 => 92,  224 => 91,  218 => 88,  214 => 87,  208 => 84,  204 => 82,  199 => 81,  197 => 80,  176 => 62,  169 => 58,  165 => 57,  158 => 53,  154 => 52,  149 => 50,  145 => 49,  140 => 47,  136 => 46,  131 => 44,  127 => 43,  122 => 41,  118 => 40,  113 => 37,  107 => 34,  104 => 33,  101 => 32,  96 => 30,  94 => 29,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}

{% block title %}
  Comparateur - {{ parent() }}
{% endblock %}

{% block FrontContent %}

 <!-- Page Heading/Breadcrumbs -->
 <div class=\"row\">
  <div class=\"col-lg-12\">
    <h1 class=\"page-header\">DUDEE'GO
      <small>Simplifiez vos démarches et optimisez vos chances d'intégrer une Université</small>
    </h1>
    <ol class=\"breadcrumb\">
      <li><a href=\"#\">Accueil</a>
      </li>
      <li class=\"active\">Comparateur</li>
    </ol>
  </div>
</div>
<!-- /.row -->

<div class=\"row\">
  <div class=\"col-sm-2 col-md-2 col-lg-2 col-xl-2\">
    <div class=\"well\">

      {#Formulaire de recherche#}
      {#{{form_start(form)}}#}
      {{ form_start(form, {'action': path('dudeego_platform_filterComparateur'), 'method': 'POST'}) }}
      {# Les erreurs générales du formulaire. #}
      {% if form_errors(form) %}
        <div class=\"alert alert-danger\" role=\"alert\">
          {{ form_errors(form) }}
        </div>
      {% endif %}

      <div class=\"form-group\">
       <i class=\"fa fa-search\"></i>
       {{ form_label(form.nomuniversite, 'Rechercher') }}
       {{ form_widget(form.nomuniversite) }}

       {{ form_label(form.formations) }}
       {{ form_widget(form.formations) }}

       {{ form_label(form.langues) }}
       {{ form_widget(form.langues) }}

       {{ form_label(form.villes) }}
       {{ form_widget(form.villes) }}

       {{ form_label(form.pays) }}
       {{ form_widget(form.pays) }}

     </div>
     <div class=\"form-group\">
       {{ form_widget(form.reinitialiser) }} 
       {{ form_widget(form.comparez) }}
     </div>


     {{ form_end(form) }}

   </div>
 </div>
 <div id=\"center_block\" class=\"col-sm-8 col-md-8 col-lg-8 col-xl-8\">
  <table id=\"tableUniversite\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\" data-order='[[ 1, \"asc\" ]]' data-page-length='10'>
    <thead>
      <tr>
        <th>Classement</th>
        <th>Nom de l'établissement</th>
        <th>Ville</th>
        <th>Pays</th>
        <th>Bourse</th>
        <th>Montant</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody id=\"content_result\">
      {% if listUniversite is defined %}
        {% for rowUniversite in listUniversite %}
          <tr>
            <td>
              {{ rowUniversite.classement }}
            </td>
            <td>
             <div id=\"nom-etablissement-{{ rowUniversite.id}}\">
              {{ rowUniversite.nometablissement }}
            </div>  
          </td>
          <td>{{ rowUniversite.adresse.ville.commune }}</td>
          <td>{{ rowUniversite.adresse.ville.pays.pays }}</td>
          {% if rowUniversite.bourse %}
            <td>Oui</td>
          {% else %}
           <td>Non</td>
         {% endif %}
         <td>{{ rowUniversite.montantbourse }}</td>
         <td>
          <a href=\"{{ path('dudeego_platform_detailsComparateur', { 'id' : rowUniversite.id } ) }}\" ><span class=\"glyphicon glyphicon-cog\"></span>Détails</a>
          <a  class=\"add_comparateur\" href=\"#\" data-id=\"{{ rowUniversite.id }}\"> <span class=\"glyphicon glyphicon-plus\"></span>Favoris</a>
        </td>
      </tr>
    {% endfor %}
  {% endif %}
</tbody>
</table>
</div>
<div class=\"col-sm-2 col-md-2 col-lg-2 col-xl-2\">
  <div class=\"well\">
    {% for flash_message in app.session.flashBag.get('notice') %}
      <div class=\"flash-notice\">
        {{ flash_message }}
      </div>
    {% endfor %}
    {% if listFavUniversite is defined %}
      <table id=\"favoris\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
        <thead>
          <tr>
            <th>Etablissement</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for key, item in listFavUniversite %}
            {% for subItem in item %}
              <tr>
                <td>
                  {{subItem.nometablissement}}
                </td>
                <td>
                  <!-- trigger favorite -->                      
                  <a href=\"{{ path('dudeego_platform_PanierComparateur', {'id': subItem.id } ) }}\"><span class=\"glyphicon glyphicon-remove\"></span>Remove</a>
                </td>
              </tr>
            {% endfor %}     
          {% endfor %}
        </tbody>
      </table>
      <a href=\"{{ path('dudeego_platform_comparerComparateur') }}\">Comparer</a>
    {% else %}
     {# Saifi change DEBUT #}
     <table id=\"favoris\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
      <thead>
        <tr>
          <th>Etablissement</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody id=\"comparateur-universites\">
      </tbody>
    </table>

    <input type=\"hidden\" id=\"nbItems\" name=\"nbItems\" value=\"\">
    <form id=\"form-item-comparateur\" action=\"{{ path('dudeego_platform_itemsComparateur') }}\" method=\"POST\">
      <input id =\"id0\" type=\"hidden\" name=\"id0\" value=\"\">
      <input id =\"id1\" type=\"hidden\" name=\"id1\" value=\"\">
      <input id =\"id2\" type=\"hidden\" name=\"id2\" value=\"\">
      <input id =\"id3\" type=\"hidden\" name=\"id3\" value=\"\">
      <input id =\"id4\" type=\"hidden\" name=\"id4\" value=\"\">
      <input id =\"id5\" type=\"hidden\" name=\"id5\" value=\"\">
      <input id =\"id6\" type=\"hidden\" name=\"id6\" value=\"\">
      <input id =\"id7\" type=\"hidden\" name=\"id7\" value=\"\">
      <input id =\"id8\" type=\"hidden\" name=\"id8\" value=\"\">
      <input id =\"id9\" type=\"hidden\" name=\"id9\" value=\"\">
      <button id=\"comparateur_btn\" type=\"submit\" class=\"btn btn-primary\" disabled=\"disabled\">Comparez Favoris</button>
    </form>  
    {# Saifi change FIN #}

  {% endif %}
</div>
</div>
</div>

<script type=\"text/javascript\" class=\"init\">
 \$(document).ready( function () {
  \$.extend( true, \$.fn.dataTable.defaults, {
    language: {
      url: \"//cdn.datatables.net/plug-ins/1.10.10/i18n/French.json\"
    }
  });
  var table = \$('#tableUniversite').DataTable({
    language: {
      emptyTable: \"Pas de données\"
    },
    responsive: true,
    retrieve: true,
    paging: true,
    searching: false,
    ordering:  true,
    info: false
  });
} );
</script>

{# Saifi change DEBUT #}
<script type=\"text/javascript\">

</script>
{# Script Saifi #}
<script  src=\"{{ asset('bundles/dudeegoplatform/js/comparateur.js') }}\" defer></script>
{# Saifi change FIN #}
{% endblock %}
", "DUDEEGOPlatformBundle:front:comparateur.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/comparateur.html.twig");
    }
}
