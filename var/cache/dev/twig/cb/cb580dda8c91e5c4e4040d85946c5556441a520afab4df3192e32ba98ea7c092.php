<?php

/* DUDEEGOPlatformBundle:front:filtercomparateur.html.twig */
class __TwigTemplate_7d644d0397f5ef1201dd18c9ea9300cf15aa35d37c70fe54ea18279143550ccf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_909967576b7606f17df520720d5a6247f8f62c6184a38d6a213257a01a3ffe52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_909967576b7606f17df520720d5a6247f8f62c6184a38d6a213257a01a3ffe52->enter($__internal_909967576b7606f17df520720d5a6247f8f62c6184a38d6a213257a01a3ffe52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:filtercomparateur.html.twig"));

        $__internal_f9734167bec30b6869f84f3db799990683f215f70f5cce84129826915c96f730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9734167bec30b6869f84f3db799990683f215f70f5cce84129826915c96f730->enter($__internal_f9734167bec30b6869f84f3db799990683f215f70f5cce84129826915c96f730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:filtercomparateur.html.twig"));

        // line 1
        if (array_key_exists("listUniversite", $context)) {
            // line 2
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listUniversite"] ?? $this->getContext($context, "listUniversite")));
            foreach ($context['_seq'] as $context["_key"] => $context["rowUniversite"]) {
                // line 3
                echo "    <tr>
      <td>
        ";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "id", array()), "html", null, true);
                echo "
      </td>
      <td>
        ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["rowUniversite"], "images", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["itemimage"]) {
                    // line 9
                    echo "          <img class=\"media-object img-rounded img-responsive\"  src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["itemimage"], "url", array()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["itemimage"], "alt", array()), "html", null, true);
                    echo "\">
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemimage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "nometablissement", array()), "html", null, true);
                echo "
      </td>
      <td>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rowUniversite"], "adresse", array()), "ville", array()), "commune", array()), "html", null, true);
                echo "</td>
      <td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowUniversite"], "adresse", array()), "ville", array()), "pays", array()), "pays", array()), "html", null, true);
                echo "</td>
      <td>1 €</td>
      <td>Oui</td>
      <td>
        <a href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_detailsComparateur", array("id" => $this->getAttribute($context["rowUniversite"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-cog\"></span>Détails</a>
        <a  class=\"add_comparateur\" href=\"#\" data-id=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "id", array()), "html", null, true);
                echo "\"> <span class=\"glyphicon glyphicon-plus\"></span>Favoris</a>
      </td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rowUniversite'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_909967576b7606f17df520720d5a6247f8f62c6184a38d6a213257a01a3ffe52->leave($__internal_909967576b7606f17df520720d5a6247f8f62c6184a38d6a213257a01a3ffe52_prof);

        
        $__internal_f9734167bec30b6869f84f3db799990683f215f70f5cce84129826915c96f730->leave($__internal_f9734167bec30b6869f84f3db799990683f215f70f5cce84129826915c96f730_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:filtercomparateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  74 => 18,  67 => 14,  63 => 13,  57 => 11,  46 => 9,  42 => 8,  36 => 5,  32 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if listUniversite is defined %}
  {% for rowUniversite in listUniversite %}
    <tr>
      <td>
        {{ rowUniversite.id }}
      </td>
      <td>
        {% for itemimage in rowUniversite.images %}
          <img class=\"media-object img-rounded img-responsive\"  src=\"{{ itemimage.url }}\" alt=\"{{ itemimage.alt }}\">
        {% endfor %}
        {{ rowUniversite.nometablissement }}
      </td>
      <td>{{ rowUniversite.adresse.ville.commune }}</td>
      <td>{{ rowUniversite.adresse.ville.pays.pays }}</td>
      <td>1 €</td>
      <td>Oui</td>
      <td>
        <a href=\"{{ path('dudeego_platform_detailsComparateur', { 'id' : rowUniversite.id } ) }}\" ><span class=\"glyphicon glyphicon-cog\"></span>Détails</a>
        <a  class=\"add_comparateur\" href=\"#\" data-id=\"{{ rowUniversite.id }}\"> <span class=\"glyphicon glyphicon-plus\"></span>Favoris</a>
      </td>
    </tr>
  {% endfor %}
{% endif %}", "DUDEEGOPlatformBundle:front:filtercomparateur.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/filtercomparateur.html.twig");
    }
}
