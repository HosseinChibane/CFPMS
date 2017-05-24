<?php

/* DUDEEGOPlatformBundle:front:comparer.html.twig */
class __TwigTemplate_54f481e6162c1df1cb4c49794a36714b68eadab3859ba54d1fcd0c362b2cb666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:comparer.html.twig", 2);
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
        $__internal_4a7b7b32dae1f3f25ce622220e3b886c86c86a4c677b9b35bbb19f78231a7266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7b7b32dae1f3f25ce622220e3b886c86c86a4c677b9b35bbb19f78231a7266->enter($__internal_4a7b7b32dae1f3f25ce622220e3b886c86c86a4c677b9b35bbb19f78231a7266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:comparer.html.twig"));

        $__internal_97f23ac8b871bcf920e08963c0bb91736aee28fce4826e5e430aacd7d3664267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f23ac8b871bcf920e08963c0bb91736aee28fce4826e5e430aacd7d3664267->enter($__internal_97f23ac8b871bcf920e08963c0bb91736aee28fce4826e5e430aacd7d3664267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:comparer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a7b7b32dae1f3f25ce622220e3b886c86c86a4c677b9b35bbb19f78231a7266->leave($__internal_4a7b7b32dae1f3f25ce622220e3b886c86c86a4c677b9b35bbb19f78231a7266_prof);

        
        $__internal_97f23ac8b871bcf920e08963c0bb91736aee28fce4826e5e430aacd7d3664267->leave($__internal_97f23ac8b871bcf920e08963c0bb91736aee28fce4826e5e430aacd7d3664267_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed8c321ce0ec8987b577533094c88bfdce5c5f1e5fe089399639b0d7af404323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8c321ce0ec8987b577533094c88bfdce5c5f1e5fe089399639b0d7af404323->enter($__internal_ed8c321ce0ec8987b577533094c88bfdce5c5f1e5fe089399639b0d7af404323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08c9def69bfd1890697c64d07d020107bcdf2fc3abfeebf600e7991f6332a1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08c9def69bfd1890697c64d07d020107bcdf2fc3abfeebf600e7991f6332a1fa->enter($__internal_08c9def69bfd1890697c64d07d020107bcdf2fc3abfeebf600e7991f6332a1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Comparer - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_08c9def69bfd1890697c64d07d020107bcdf2fc3abfeebf600e7991f6332a1fa->leave($__internal_08c9def69bfd1890697c64d07d020107bcdf2fc3abfeebf600e7991f6332a1fa_prof);

        
        $__internal_ed8c321ce0ec8987b577533094c88bfdce5c5f1e5fe089399639b0d7af404323->leave($__internal_ed8c321ce0ec8987b577533094c88bfdce5c5f1e5fe089399639b0d7af404323_prof);

    }

    // line 8
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_3ee8465bfdaeddd21eb46d15548f8ea5845eb8320bd29b72fc947fe481a0f242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee8465bfdaeddd21eb46d15548f8ea5845eb8320bd29b72fc947fe481a0f242->enter($__internal_3ee8465bfdaeddd21eb46d15548f8ea5845eb8320bd29b72fc947fe481a0f242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_6ab54802b4cfdef7145c039e88877070c8467ef4eb52cfc7800390f9553c656b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab54802b4cfdef7145c039e88877070c8467ef4eb52cfc7800390f9553c656b->enter($__internal_6ab54802b4cfdef7145c039e88877070c8467ef4eb52cfc7800390f9553c656b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        // line 9
        echo "    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Détails 
                <small>";
        // line 14
        if (array_key_exists("listUniversite", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["listUniversite"] ?? $this->getContext($context, "listUniversite")), "nometablissement", array()), "html", null, true);
            echo " ";
        }
        echo "</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_home");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_showComparateur");
        echo "\">Comparateur</a></li>
                <li class=\"active\">Comparer</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class=\"row\">
        <div class=\"col-sm-3 col-md-3 col-lg-3 col-xl-3\">
            <div class=\"list-group table-of-contents\">
                ";
        // line 28
        if (array_key_exists("listFavUniversite", $context)) {
            // line 29
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listFavUniversite"] ?? $this->getContext($context, "listFavUniversite")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 30
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["item"]);
                foreach ($context['_seq'] as $context["_key"] => $context["subItem"]) {
                    // line 31
                    echo "                            <a class=\"list-group-item\" href=\"#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subItem"], "id", array()), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-chevron-right\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subItem"], "nometablissement", array()), "html", null, true);
                    echo " </a>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "     
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                ";
        }
        // line 35
        echo "            </div>
        </div>
        <div class=\"col-sm-9 col-md-9 col-lg-9 col-xl-9\">
            <div class=\"row\">
                ";
        // line 39
        if (array_key_exists("listFavUniversite", $context)) {
            // line 40
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listFavUniversite"] ?? $this->getContext($context, "listFavUniversite")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 41
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["item"]);
                foreach ($context['_seq'] as $context["_key"] => $context["subItem"]) {
                    // line 42
                    echo "                            <div id=\"#";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subItem"], "id", array()), "html", null, true);
                    echo "\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        ";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subItem"], "nometablissement", array()), "html", null, true);
                    echo " 
                                    </div>
                                    <div class=\"panel-body\">                                        
                                        <br>
                                        ";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subItem"], "description", array()), "html", null, true);
                    echo "
                                        <br>
                                        <p>
                                            Formations :
                                            ";
                    // line 53
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subItem"], "formations", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["itemformation"]) {
                        // line 54
                        echo "                                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["itemformation"], "formation", array()), "html", null, true);
                        echo " 
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemformation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 56
                    echo "                                        </p>
                                        <br>
                                        <p>
                                            Langues :
                                            ";
                    // line 60
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["subItem"], "formations", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["itemformation"]) {
                        // line 61
                        echo "                                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["itemformation"], "langues", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["itemlangue"]) {
                            // line 62
                            echo "                                                    ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["itemlangue"], "langue", array()), "html", null, true);
                            echo " 
                                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemlangue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 64
                        echo "                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemformation'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    echo "                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subItem'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "     
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                ";
        }
        // line 73
        echo "            </div>
            <!-- Button trigger modal -->
            <div style=\"float:right;\">
                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">Inscription</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Inscription à une université</h4>
                </div>
                <div class=\"modal-body\" >
                    <p>
                        Si vous souhaitez vous inscrire à une universite, vous devez avoir un compte utilisateur sur notre plateforme. Pour la création d'un compte, suivez le guide <a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">ici</a>.
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6ab54802b4cfdef7145c039e88877070c8467ef4eb52cfc7800390f9553c656b->leave($__internal_6ab54802b4cfdef7145c039e88877070c8467ef4eb52cfc7800390f9553c656b_prof);

        
        $__internal_3ee8465bfdaeddd21eb46d15548f8ea5845eb8320bd29b72fc947fe481a0f242->leave($__internal_3ee8465bfdaeddd21eb46d15548f8ea5845eb8320bd29b72fc947fe481a0f242_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:comparer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 91,  242 => 73,  239 => 72,  232 => 70,  221 => 65,  215 => 64,  206 => 62,  201 => 61,  197 => 60,  191 => 56,  182 => 54,  178 => 53,  171 => 49,  164 => 45,  157 => 42,  152 => 41,  147 => 40,  145 => 39,  139 => 35,  136 => 34,  129 => 32,  118 => 31,  113 => 30,  108 => 29,  106 => 28,  93 => 18,  89 => 17,  79 => 14,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}

{% block title %}
    Comparer - {{ parent() }}
{% endblock %}

{% block FrontContent %}
    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <h1 class=\"page-header\">
                Détails 
                <small>{% if listUniversite is defined %} {{ listUniversite.nometablissement }} {% endif %}</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('dudeego_platform_home') }}\">Accueil</a></li>
                <li><a href=\"{{ path('dudeego_platform_showComparateur') }}\">Comparateur</a></li>
                <li class=\"active\">Comparer</li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class=\"row\">
        <div class=\"col-sm-3 col-md-3 col-lg-3 col-xl-3\">
            <div class=\"list-group table-of-contents\">
                {% if listFavUniversite is defined %}
                    {% for key, item in listFavUniversite %}
                        {% for subItem in item %}
                            <a class=\"list-group-item\" href=\"#{{ subItem.id }}\"><i class=\"glyphicon glyphicon-chevron-right\"></i> {{ subItem.nometablissement }} </a>
                        {% endfor %}     
                    {% endfor %}
                {% endif %}
            </div>
        </div>
        <div class=\"col-sm-9 col-md-9 col-lg-9 col-xl-9\">
            <div class=\"row\">
                {% if listFavUniversite is defined %}
                    {% for key, item in listFavUniversite %}
                        {% for subItem in item %}
                            <div id=\"#{{ subItem.id }}\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        {{ subItem.nometablissement }} 
                                    </div>
                                    <div class=\"panel-body\">                                        
                                        <br>
                                        {{ subItem.description }}
                                        <br>
                                        <p>
                                            Formations :
                                            {% for itemformation in subItem.formations %}
                                                {{ itemformation.formation }} 
                                            {% endfor %}
                                        </p>
                                        <br>
                                        <p>
                                            Langues :
                                            {% for itemformation in subItem.formations %}
                                                {% for itemlangue in itemformation.langues %}
                                                    {{ itemlangue.langue }} 
                                                {% endfor %}
                                            {% endfor %}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        {% endfor %}     
                    {% endfor %}
                {% endif %}
            </div>
            <!-- Button trigger modal -->
            <div style=\"float:right;\">
                <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">Inscription</button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Inscription à une université</h4>
                </div>
                <div class=\"modal-body\" >
                    <p>
                        Si vous souhaitez vous inscrire à une universite, vous devez avoir un compte utilisateur sur notre plateforme. Pour la création d'un compte, suivez le guide <a href=\"{{ path('fos_user_registration_register') }}\">ici</a>.
                    </p>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}  ", "DUDEEGOPlatformBundle:front:comparer.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/comparer.html.twig");
    }
}
