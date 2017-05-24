<?php

/* :backend:navigation.html.twig */
class __TwigTemplate_99eb24b5176eb880b2234b83d6dbdc0840197f9dacf53593c68ebec0e7bbb2ea extends Twig_Template
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
        $__internal_84be664a6dee42086e74b05f30735d263fee4eebf00d64c385fdb7772fa1ad9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84be664a6dee42086e74b05f30735d263fee4eebf00d64c385fdb7772fa1ad9e->enter($__internal_84be664a6dee42086e74b05f30735d263fee4eebf00d64c385fdb7772fa1ad9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:navigation.html.twig"));

        $__internal_c3edc845a098e420dbde9aa7471b645745b4c2743c4175db27b83b8229b9c69a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3edc845a098e420dbde9aa7471b645745b4c2743c4175db27b83b8229b9c69a->enter($__internal_c3edc845a098e420dbde9aa7471b645745b4c2743c4175db27b83b8229b9c69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:navigation.html.twig"));

        // line 1
        echo "<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
  <div class=\"container\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_home");
        echo "\">Dudee'Go</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">

       ";
        // line 18
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 19
            echo "         <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_admin_panel");
            echo "\">Admin Panel</a></li>
       ";
        }
        // line 21
        echo "
       ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "         <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
           <li><a href=\"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_monProfil");
            echo "\">Mon Compte</a></li>
           <li><a href=\"";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mesDemandes");
            echo "\">Suivi de mes candidatures</a></li>
           <li class=\"divider\"></li>
           <li class=\"dropdown-header\">Inscription</li>
           <li><a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_universiteStepsOne");
            echo "\">Universitaires</a></li>
           <li><a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_langueStepsOne");
            echo "\">Cours de langues</a></li>
           <li><a href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_logementStepsOne");
            echo "\">Logements étudiants</a></li>
           <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_preparationStepsOne");
            echo "\">Cours préparatoires</a></li>
           <li><a href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_mutuelle");
            echo "\">Mutuelle étudiante</a></li>
           <li class=\"divider\"></li>
           <li class=\"dropdown-header\">Aide</li>
           <li><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_aide");
            echo "\">Aide</a></li>
           <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_abonne_contact");
            echo "\">Contact</a></li>
           <li class=\"divider\"></li>
           <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
         </ul>
       </li>     
     ";
        } else {
            // line 44
            echo "      <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 45
        echo "  

  </ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
";
        
        $__internal_84be664a6dee42086e74b05f30735d263fee4eebf00d64c385fdb7772fa1ad9e->leave($__internal_84be664a6dee42086e74b05f30735d263fee4eebf00d64c385fdb7772fa1ad9e_prof);

        
        $__internal_c3edc845a098e420dbde9aa7471b645745b4c2743c4175db27b83b8229b9c69a->leave($__internal_c3edc845a098e420dbde9aa7471b645745b4c2743c4175db27b83b8229b9c69a_prof);

    }

    public function getTemplateName()
    {
        return ":backend:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 45,  118 => 44,  109 => 40,  104 => 38,  100 => 37,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  78 => 30,  72 => 27,  68 => 26,  63 => 24,  60 => 23,  58 => 22,  55 => 21,  49 => 19,  47 => 18,  38 => 12,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Navigation -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
  <div class=\"container\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"{{ path('dudeego_platform_home') }}\">Dudee'Go</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">

       {% if is_granted(\"ROLE_SUPER_ADMIN\") %}
         <li><a href=\"{{ path('dudeego_platform_admin_panel') }}\">Admin Panel</a></li>
       {% endif %}

       {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
         <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
           <li><a href=\"{{ path('dudeego_platform_abonne_monProfil') }}\">Mon Compte</a></li>
           <li><a href=\"{{ path('dudeego_platform_abonne_mesDemandes') }}\">Suivi de mes candidatures</a></li>
           <li class=\"divider\"></li>
           <li class=\"dropdown-header\">Inscription</li>
           <li><a href=\"{{ path('dudeego_platform_abonne_universiteStepsOne') }}\">Universitaires</a></li>
           <li><a href=\"{{ path('dudeego_platform_abonne_langueStepsOne') }}\">Cours de langues</a></li>
           <li><a href=\"{{ path('dudeego_platform_abonne_logementStepsOne') }}\">Logements étudiants</a></li>
           <li><a href=\"{{ path('dudeego_platform_abonne_preparationStepsOne') }}\">Cours préparatoires</a></li>
           <li><a href=\"{{ path('dudeego_platform_abonne_mutuelle') }}\">Mutuelle étudiante</a></li>
           <li class=\"divider\"></li>
           <li class=\"dropdown-header\">Aide</li>
           <li><a href=\"{{ path('dudeego_platform_abonne_aide') }}\">Aide</a></li>
           <li><a href=\"{{ path('dudeego_platform_abonne_contact') }}\">Contact</a></li>
           <li class=\"divider\"></li>
           <li><a href=\"{{ path('fos_user_security_logout') }}\">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a></li>
         </ul>
       </li>     
     {% else %}
      <li><a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></li>
    {% endif %}  

  </ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
{# Exemple de menu
<style>
  .dropdown-submenu{position:relative;}
  .dropdown-submenu>.dropdown-menu{top:0;left:100%;margin-top:-6px;margin-left:-1px;-webkit-border-radius:0 6px 6px 6px;-moz-border-radius:0 6px 6px 6px;border-radius:0 6px 6px 6px;}
  .dropdown-submenu:hover>.dropdown-menu{display:block;}
  .dropdown-submenu>a:after{display:block;content:\" \";float:right;width:0;height:0;border-color:transparent;border-style:solid;border-width:5px 0 5px 5px;border-left-color:#cccccc;margin-top:5px;margin-right:-10px;}
  .dropdown-submenu.pull-left{float:none;}.dropdown-submenu.pull-left>.dropdown-menu{left:-100%;margin-left:10px;-webkit-border-radius:6px 0 6px 6px;-moz-border-radius:6px 0 6px 6px;border-radius:6px 0 6px 6px;}
  .blue{color:#1D38FC}
  .green{color:#0EC929}
  .red{color:#FF0000}
  .orange{color:#ffe100}
</style>


<nav class=\"navbar navbar-inverse\">
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu\">
      <span class=\"sr-only\">Toggle navigation</span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand hidden-md hidden-lg\" href=\"#\">Menu</a>
  </div>

  <div class=\"collapse navbar-collapse\" id=\"main-menu\" style=\"margin-bottom: 0px;\">
    <ul class=\"nav navbar-nav\">
      <li class=\"dropdown\"> 
        <a data-toggle=\"dropdown\" href=\"#\">Accueil<b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu jqueryFadeIn\">
          <li><a href=\"#\"><span class=\"fa fa-bar-chart-o\"></span> Tableau de bord</a></li>
          <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Pr&eacute;sentation</a></li>
          <li class=\"dropdown-submenu\">
            <a data-toggle=\"dropdown\"tabindex=\"-1\" href=\"#\"><span class=\"fa fa-cogs\"></span> Param&eacute;trage</a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\"><span class=\"fa fa-bar-chart-o\"></span> Liste des soci&eacute;t&eacute;s</a></li>  
              <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Creer une soci&eacute;t&eacute;</a></li>
              <li><a href=\"#\"><span class=\"fa fa-cogs\"></span> Modifier une soci&eacute;t&eacute;</a></li>
              <li><a href=\"#\"><span class=\"fa fa-cogs\"></span> Supprimer une soci&eacute;t&eacute;</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=\"dropdown\"> 
        <a data-toggle=\"dropdown\" href=\"#\">Tiers<b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu jqueryFadeIn\">
          <li class=\"dropdown-header\">Société</li>
          <li><a href=\"#\"><span class=\"fa fa-bank blue\"></span> Liste des Soci&eacute;t&eacute;s</a></li>
          <li><a href=\"#\"><span class=\"fa fa-plus-square red\"></span> Cr&eacute;er une Soci&eacute;t&eacute;</a></li>        
          <li class=\"divider\"></li>
          <li class=\"dropdown-header\">Contact</li>
          <li><a href=\"#\"><span class=\"glyphicon glyphicon-user blue\"></span> Liste des Contacts</a></li>
          <li><a href=\"#\"><span class=\"fa fa-plus-square red\"></span> Cr&eacute;er un contact</a></li>
          <li class=\"dropdown-submenu\">
            <a data-toggle=\"dropdown\"tabindex=\"-1\" href=\"#\"><span class=\"fa fa-cogs\"></span> Sous menu niveau 1</a>
            <ul class=\"dropdown-menu\">
              <li><a href=\"#\"><span class=\"fa fa-bar-chart-o\"></span> Acion niveau 2</a></li>  
              <li><a href=\"#\"><span class=\"fa fa-bar-chart-o\"></span> Autre acion niveau 2</a></li>  
              <li class=\"dropdown-submenu\">
                <a data-toggle=\"dropdown\"tabindex=\"-1\" href=\"#\"><span class=\"fa fa-cogs\"></span> Sous menu niveau 3</a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"#\"><span class=\"fa fa-bar-chart-o\"></span> Acion niveau 3</a></li>  
                  <li><a href=\"#\"><span class=\"fa fa-bar-chart-o\"></span> Autre acion niveau 3</a></li>  

                </ul>
              </li>                     
            </ul>
          </li>
        </ul>
      </li>      

      <li class=\"dropdown\"> 
        <a data-toggle=\"dropdown\" href=\"#\">Articles<b class=\"caret\"></b></a>
        <ul class=\"dropdown-menu jqueryFadeIn\">
          <li class=\"dropdown-header\">Produits</li>
          <li><a href=\"#\"><span class=\"fa fa-bank blue\"></span> Liste des produits</a></li>
          <li><a href=\"#\"><span class=\"fa fa-plus-square red\"></span> Cr&eacute;er un produit</a></li>
          <li class=\"dropdown-header\">Nomenclature</li>
          <li><a href=\"#\"><span class=\"fa fa-bank blue\"></span> Liste des nomenclatures</a></li>
          <li><a href=\"#\"><span class=\"fa fa-plus-square red\"></span> Cr&eacute;er une nomenclatures</a></li>
        </ul>
      </li>

    </ul>

    <form class=\"navbar-form pull-right\">
      <input type=\"text\" style=\"width:150px\" class=\"input-sm form-control\" placeholder=\"Recherche\">
      <button type=\"submit\" class=\"btn btn-primary btn-sm\"><span class=\"glyphicon glyphicon-search\"></span> </button>
    </form>
  </div>
</nav>


<script>
  \$(function() {
      // Affichage du sous menu en douceur
      jQuery('ul.nav li.dropdown').hover(function() {
        jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeIn();
      }, function() {
        jQuery(this).find('.jqueryFadeIn').stop(true, true).delay(200).fadeOut();
      });

    });   
</script>

#}", ":backend:navigation.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources\\views/backend/navigation.html.twig");
    }
}
