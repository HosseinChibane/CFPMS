<?php

/* DUDEEGOPlatformBundle:front:comparateur.html.twig */
class __TwigTemplate_680125a98bb563fe3f463c8cdc89230bf441790421f0ece368730753cde7f9d1 extends Twig_Template
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
        $__internal_6d99c205cb480377d34521110f3df5fb917cfe1c0ffc415abd36ee4c8056e3b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d99c205cb480377d34521110f3df5fb917cfe1c0ffc415abd36ee4c8056e3b6->enter($__internal_6d99c205cb480377d34521110f3df5fb917cfe1c0ffc415abd36ee4c8056e3b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:comparateur.html.twig"));

        $__internal_e6f8ce9c93378a2dc063602cc4276be9686be52551d167bc9c1a3f3da8919d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f8ce9c93378a2dc063602cc4276be9686be52551d167bc9c1a3f3da8919d53->enter($__internal_e6f8ce9c93378a2dc063602cc4276be9686be52551d167bc9c1a3f3da8919d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:comparateur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d99c205cb480377d34521110f3df5fb917cfe1c0ffc415abd36ee4c8056e3b6->leave($__internal_6d99c205cb480377d34521110f3df5fb917cfe1c0ffc415abd36ee4c8056e3b6_prof);

        
        $__internal_e6f8ce9c93378a2dc063602cc4276be9686be52551d167bc9c1a3f3da8919d53->leave($__internal_e6f8ce9c93378a2dc063602cc4276be9686be52551d167bc9c1a3f3da8919d53_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_39e569f8de601f44596d358569e83e3caedb2ca5242e112df6768715765ebe71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e569f8de601f44596d358569e83e3caedb2ca5242e112df6768715765ebe71->enter($__internal_39e569f8de601f44596d358569e83e3caedb2ca5242e112df6768715765ebe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_182d799ca13843ee2377e2b3ff98dfbdde24b213ba3e7d45d5bbe2eca95da51b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182d799ca13843ee2377e2b3ff98dfbdde24b213ba3e7d45d5bbe2eca95da51b->enter($__internal_182d799ca13843ee2377e2b3ff98dfbdde24b213ba3e7d45d5bbe2eca95da51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Comparateur - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_182d799ca13843ee2377e2b3ff98dfbdde24b213ba3e7d45d5bbe2eca95da51b->leave($__internal_182d799ca13843ee2377e2b3ff98dfbdde24b213ba3e7d45d5bbe2eca95da51b_prof);

        
        $__internal_39e569f8de601f44596d358569e83e3caedb2ca5242e112df6768715765ebe71->leave($__internal_39e569f8de601f44596d358569e83e3caedb2ca5242e112df6768715765ebe71_prof);

    }

    // line 7
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_2291c70158ee7e1fdb7b949bdbd83c3e60856faae6e5e5dd6769c829cfcbb5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2291c70158ee7e1fdb7b949bdbd83c3e60856faae6e5e5dd6769c829cfcbb5a6->enter($__internal_2291c70158ee7e1fdb7b949bdbd83c3e60856faae6e5e5dd6769c829cfcbb5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_6f7878d8c820eb3a3787649e7aaa89b0f8580dfb96134d65f09cb947fec7205f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7878d8c820eb3a3787649e7aaa89b0f8580dfb96134d65f09cb947fec7205f->enter($__internal_6f7878d8c820eb3a3787649e7aaa89b0f8580dfb96134d65f09cb947fec7205f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

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
        // line 28
        echo "        ";
        // line 29
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_filterComparateur"), "method" => "POST"));
        echo "
        ";
        // line 31
        echo "        ";
        if ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors')) {
            // line 32
            echo "          <div class=\"alert alert-danger\" role=\"alert\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
          </div>
        ";
        }
        // line 36
        echo "        <div class=\"form-group\">
          <i class=\"fa fa-search\"></i>
          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomuniversite", array()), 'label', array("label" => "Rechercher"));
        echo "
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomuniversite", array()), 'widget');
        echo "

          ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formations", array()), 'label');
        echo "
          ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "formations", array()), 'widget');
        echo "

          ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langues", array()), 'label');
        echo "
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "langues", array()), 'widget');
        echo "

          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "villes", array()), 'label');
        echo "
          ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "villes", array()), 'widget');
        echo "

          ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'label');
        echo "
          ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "
        </div>
        <div class=\"form-group\">
          ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "reinitialiser", array()), 'widget');
        echo " 
          ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "comparez", array()), 'widget');
        echo "
        </div>
        ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>
    ";
        // line 61
        echo "
    ";
        // line 63
        echo "    <div id=\"center_block\" class=\"col-sm-8 col-md-8 col-lg-8 col-xl-8\">
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
        // line 77
        if (array_key_exists("listUniversite", $context)) {
            // line 78
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listUniversite"] ?? $this->getContext($context, "listUniversite")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowUniversite"]) {
                // line 79
                echo "              <tr>
                <td>
                  ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "classement", array()), "html", null, true);
                echo "
                </td>
                <td>
                  <div id=\"nom-etablissement-";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "id", array()), "html", null, true);
                echo "\">
                    ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "nometablissement", array()), "html", null, true);
                echo "
                  </div>  
                </td>
                <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rowUniversite"], "adresse", array()), "ville", array()), "commune", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowUniversite"], "adresse", array()), "ville", array()), "pays", array()), "pays", array()), "html", null, true);
                echo "</td>
                ";
                // line 90
                if ($this->getAttribute($context["rowUniversite"], "bourse", array())) {
                    // line 91
                    echo "                  <td>Oui</td>
                ";
                } else {
                    // line 93
                    echo "                  <td>Non</td>
                ";
                }
                // line 95
                echo "                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "montantbourse", array()), "html", null, true);
                echo "</td>
                <td>
                  <a href=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_detailsComparateur", array("id" => $this->getAttribute($context["rowUniversite"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-cog\"></span>Détails</a>
                  <a  class=\"add_comparateur\" href=\"#\" data-id=\"";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "id", array()), "html", null, true);
                echo "\"> <span class=\"glyphicon glyphicon-plus\"></span>Favoris</a>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowUniversite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "          ";
        }
        // line 103
        echo "        </tbody>
      </table>
    </div>
    ";
        // line 107
        echo "
    ";
        // line 109
        echo "    <div class=\"col-sm-2 col-md-2 col-lg-2 col-xl-2\">
      <div class=\"well\">
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 112
            echo "          <div class=\"flash-notice\">
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
        echo "
        ";
        // line 117
        if (array_key_exists("listFavUniversite", $context)) {
            // line 118
            echo "          <table id=\"favoris\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
            <thead>
              <tr>
                <th>Etablissement</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listFavUniversite"] ?? $this->getContext($context, "listFavUniversite")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 127
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["item"]);
                foreach ($context['_seq'] as $context["_key"] => $context["subItem"]) {
                    // line 128
                    echo "                  <tr>
                    <td>
                      ";
                    // line 130
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subItem"], "nometablissement", array()), "html", null, true);
                    echo "
                    </td>
                    <td>
                      <!-- trigger favorite -->                      
                      <a href=\"";
                    // line 134
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_PanierComparateur", array("id" => $this->getAttribute($context["subItem"], "id", array()))), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-remove\"></span>Remove</a>
                    </td>
                  </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "     
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 139
            echo "            </tbody>
          </table>
          <a href=\"";
            // line 141
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_comparerComparateur");
            echo "\">Comparer</a>
        ";
        } else {
            // line 142
            echo "      
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
          <form id=\"form-item-comparateur\" action=\"";
            // line 154
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
        }
        // line 168
        echo "      </div>
    </div>
  </div>
  ";
        // line 172
        echo "
 ";
        // line 195
        echo "  
";
        
        $__internal_6f7878d8c820eb3a3787649e7aaa89b0f8580dfb96134d65f09cb947fec7205f->leave($__internal_6f7878d8c820eb3a3787649e7aaa89b0f8580dfb96134d65f09cb947fec7205f_prof);

        
        $__internal_2291c70158ee7e1fdb7b949bdbd83c3e60856faae6e5e5dd6769c829cfcbb5a6->leave($__internal_2291c70158ee7e1fdb7b949bdbd83c3e60856faae6e5e5dd6769c829cfcbb5a6_prof);

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
        return array (  392 => 195,  389 => 172,  384 => 168,  367 => 154,  353 => 142,  348 => 141,  344 => 139,  337 => 137,  327 => 134,  320 => 130,  316 => 128,  311 => 127,  307 => 126,  297 => 118,  295 => 117,  292 => 116,  283 => 113,  280 => 112,  276 => 111,  272 => 109,  269 => 107,  264 => 103,  261 => 102,  251 => 98,  247 => 97,  241 => 95,  237 => 93,  233 => 91,  231 => 90,  227 => 89,  223 => 88,  217 => 85,  213 => 84,  207 => 81,  203 => 79,  198 => 78,  196 => 77,  180 => 63,  177 => 61,  171 => 57,  166 => 55,  162 => 54,  156 => 51,  152 => 50,  147 => 48,  143 => 47,  138 => 45,  134 => 44,  129 => 42,  125 => 41,  120 => 39,  116 => 38,  112 => 36,  106 => 33,  103 => 32,  100 => 31,  95 => 29,  93 => 28,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
        {# DEBUT : Tableau filtrer  #}
        {#{{ form_start(form, {'action': path('dudeego_platform_filterAjaxComparateur'), 'method': 'POST'}) }}#}
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
    {# FIN : Tableau filtrer  #}

    {# DEBUT : Tableau résultat  #}
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
    {# FIN : Tableau résultat  #}

    {# DEBUT : Comparateur Favoris  #}
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
        {% endif %}
      </div>
    </div>
  </div>
  {# FIN : Comparateur Favoris #}

 {# <script type=\"text/javascript\" class=\"init\">
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
  
  <script  src=\"{{ asset('bundles/dudeegoplatform/js/comparateur.js') }}\" defer></script>#}
  
{% endblock %}
", "DUDEEGOPlatformBundle:front:comparateur.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\comparateur.html.twig");
    }
}
