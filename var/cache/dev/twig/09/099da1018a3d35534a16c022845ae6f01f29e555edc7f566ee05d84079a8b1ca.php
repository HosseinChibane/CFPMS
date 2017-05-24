<?php

/* @DUDEEGOPlatform/front/comparer.html.twig */
class __TwigTemplate_15e3e6a9f27617cc6ca372a17c9d7c86e57eae3b1f9115f4d262e61786c95203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "@DUDEEGOPlatform/front/comparer.html.twig", 2);
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
        $__internal_bcc11bfebc089b028b17ec8c9fe795199963b1f2edaf9eedc7ffa8adec33efff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc11bfebc089b028b17ec8c9fe795199963b1f2edaf9eedc7ffa8adec33efff->enter($__internal_bcc11bfebc089b028b17ec8c9fe795199963b1f2edaf9eedc7ffa8adec33efff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/comparer.html.twig"));

        $__internal_bef7dffdb78501cf1d25809c557dbaf13aae983e5296a1cf09f8afd1fb002caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef7dffdb78501cf1d25809c557dbaf13aae983e5296a1cf09f8afd1fb002caf->enter($__internal_bef7dffdb78501cf1d25809c557dbaf13aae983e5296a1cf09f8afd1fb002caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/comparer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcc11bfebc089b028b17ec8c9fe795199963b1f2edaf9eedc7ffa8adec33efff->leave($__internal_bcc11bfebc089b028b17ec8c9fe795199963b1f2edaf9eedc7ffa8adec33efff_prof);

        
        $__internal_bef7dffdb78501cf1d25809c557dbaf13aae983e5296a1cf09f8afd1fb002caf->leave($__internal_bef7dffdb78501cf1d25809c557dbaf13aae983e5296a1cf09f8afd1fb002caf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac40a1ab8e7081ee0acac45725cb9411bfdbc2ff4f52094f90ca9ce46f9d1814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac40a1ab8e7081ee0acac45725cb9411bfdbc2ff4f52094f90ca9ce46f9d1814->enter($__internal_ac40a1ab8e7081ee0acac45725cb9411bfdbc2ff4f52094f90ca9ce46f9d1814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75959d427dcaf0e64a86bc19b416cd9f3ae9907caef987b251ea8179d3bad96c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75959d427dcaf0e64a86bc19b416cd9f3ae9907caef987b251ea8179d3bad96c->enter($__internal_75959d427dcaf0e64a86bc19b416cd9f3ae9907caef987b251ea8179d3bad96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Comparer - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_75959d427dcaf0e64a86bc19b416cd9f3ae9907caef987b251ea8179d3bad96c->leave($__internal_75959d427dcaf0e64a86bc19b416cd9f3ae9907caef987b251ea8179d3bad96c_prof);

        
        $__internal_ac40a1ab8e7081ee0acac45725cb9411bfdbc2ff4f52094f90ca9ce46f9d1814->leave($__internal_ac40a1ab8e7081ee0acac45725cb9411bfdbc2ff4f52094f90ca9ce46f9d1814_prof);

    }

    // line 8
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_606569f015eae367a09c78c34424afa7ba822cc02e904857ff9c163313e7e298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606569f015eae367a09c78c34424afa7ba822cc02e904857ff9c163313e7e298->enter($__internal_606569f015eae367a09c78c34424afa7ba822cc02e904857ff9c163313e7e298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_0dfe878d943c2a9eb90bbfafa57d5a24ece676aec331e876c2b01cac1ca8757b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dfe878d943c2a9eb90bbfafa57d5a24ece676aec331e876c2b01cac1ca8757b->enter($__internal_0dfe878d943c2a9eb90bbfafa57d5a24ece676aec331e876c2b01cac1ca8757b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

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
        
        $__internal_0dfe878d943c2a9eb90bbfafa57d5a24ece676aec331e876c2b01cac1ca8757b->leave($__internal_0dfe878d943c2a9eb90bbfafa57d5a24ece676aec331e876c2b01cac1ca8757b_prof);

        
        $__internal_606569f015eae367a09c78c34424afa7ba822cc02e904857ff9c163313e7e298->leave($__internal_606569f015eae367a09c78c34424afa7ba822cc02e904857ff9c163313e7e298_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/front/comparer.html.twig";
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
{% endblock %}  ", "@DUDEEGOPlatform/front/comparer.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\comparer.html.twig");
    }
}
