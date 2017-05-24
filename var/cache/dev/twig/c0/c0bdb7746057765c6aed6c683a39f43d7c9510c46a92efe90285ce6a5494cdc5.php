<?php

/* @DUDEEGOPlatform/front/filtercomparateur.html.twig */
class __TwigTemplate_76b4944d864d01741a847ad35bfb1d50b8a914392ad82348e1d2324d1cbe44c8 extends Twig_Template
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
        $__internal_b6f3f11352f73a18086f592d6d445b57359a9a063147cb4d8b620caa1c5ef796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6f3f11352f73a18086f592d6d445b57359a9a063147cb4d8b620caa1c5ef796->enter($__internal_b6f3f11352f73a18086f592d6d445b57359a9a063147cb4d8b620caa1c5ef796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/filtercomparateur.html.twig"));

        $__internal_0961b98eaf836ceb308d29b908680b659204a136cf3a39d3e3e03fa4f4baf37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0961b98eaf836ceb308d29b908680b659204a136cf3a39d3e3e03fa4f4baf37e->enter($__internal_0961b98eaf836ceb308d29b908680b659204a136cf3a39d3e3e03fa4f4baf37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/filtercomparateur.html.twig"));

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
        
        $__internal_b6f3f11352f73a18086f592d6d445b57359a9a063147cb4d8b620caa1c5ef796->leave($__internal_b6f3f11352f73a18086f592d6d445b57359a9a063147cb4d8b620caa1c5ef796_prof);

        
        $__internal_0961b98eaf836ceb308d29b908680b659204a136cf3a39d3e3e03fa4f4baf37e->leave($__internal_0961b98eaf836ceb308d29b908680b659204a136cf3a39d3e3e03fa4f4baf37e_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/front/filtercomparateur.html.twig";
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
{% endif %}", "@DUDEEGOPlatform/front/filtercomparateur.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\filtercomparateur.html.twig");
    }
}
