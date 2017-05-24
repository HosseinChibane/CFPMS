<?php

/* DUDEEGOPlatformBundle:front:filtercomparateur.html.twig */
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
        $__internal_e58dacf77aa6920021bf4b991f33d7f8176a3d8453b6212e6f72f787b9c267b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58dacf77aa6920021bf4b991f33d7f8176a3d8453b6212e6f72f787b9c267b4->enter($__internal_e58dacf77aa6920021bf4b991f33d7f8176a3d8453b6212e6f72f787b9c267b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:filtercomparateur.html.twig"));

        $__internal_29b754cb538daae3da992e3710f94a7cfb71219387db397e43ed24902ff91040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b754cb538daae3da992e3710f94a7cfb71219387db397e43ed24902ff91040->enter($__internal_29b754cb538daae3da992e3710f94a7cfb71219387db397e43ed24902ff91040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:filtercomparateur.html.twig"));

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
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "classement", array()), "html", null, true);
                echo "
      </td>
      <td>
       <div id=\"nom-etablissement-";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "id", array()), "html", null, true);
                echo "\">
        ";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "nometablissement", array()), "html", null, true);
                echo "
      </div>  
    </td>
    <td>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["rowUniversite"], "adresse", array()), "ville", array()), "commune", array()), "html", null, true);
                echo "</td>
    <td>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["rowUniversite"], "adresse", array()), "ville", array()), "pays", array()), "pays", array()), "html", null, true);
                echo "</td>
    ";
                // line 14
                if ($this->getAttribute($context["rowUniversite"], "bourse", array())) {
                    // line 15
                    echo "      <td>Oui</td>
    ";
                } else {
                    // line 17
                    echo "     <td>Non</td>
   ";
                }
                // line 19
                echo "   <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["rowUniversite"], "montantbourse", array()), "html", null, true);
                echo "</td>
   <td>
    <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_detailsComparateur", array("id" => $this->getAttribute($context["rowUniversite"], "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-cog\"></span>Détails</a>
    <a  class=\"add_comparateur\" href=\"#\" data-id=\"";
                // line 22
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
        
        $__internal_e58dacf77aa6920021bf4b991f33d7f8176a3d8453b6212e6f72f787b9c267b4->leave($__internal_e58dacf77aa6920021bf4b991f33d7f8176a3d8453b6212e6f72f787b9c267b4_prof);

        
        $__internal_29b754cb538daae3da992e3710f94a7cfb71219387db397e43ed24902ff91040->leave($__internal_29b754cb538daae3da992e3710f94a7cfb71219387db397e43ed24902ff91040_prof);

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
        return array (  80 => 22,  76 => 21,  70 => 19,  66 => 17,  62 => 15,  60 => 14,  56 => 13,  52 => 12,  46 => 9,  42 => 8,  36 => 5,  32 => 3,  27 => 2,  25 => 1,);
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
        {{ rowUniversite.classement }}
      </td>
      <td>
       <div id=\"nom-etablissement-{{ rowUniversite.id }}\">
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
{% endif %}", "DUDEEGOPlatformBundle:front:filtercomparateur.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\filtercomparateur.html.twig");
    }
}
