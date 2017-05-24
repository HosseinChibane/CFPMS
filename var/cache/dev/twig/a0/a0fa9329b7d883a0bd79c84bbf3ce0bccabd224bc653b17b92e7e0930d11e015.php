<?php

/* :frontend:navigation.html.twig */
class __TwigTemplate_85285393bb49989fd2cb8dcfbfb11b9d9d4f097a5ef5e1fb1456bfb9e4f8c2ff extends Twig_Template
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
        $__internal_24d93ffce76c06e7f452901d5f32f81d286f65fab099645c6cbb5e608fb45669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d93ffce76c06e7f452901d5f32f81d286f65fab099645c6cbb5e608fb45669->enter($__internal_24d93ffce76c06e7f452901d5f32f81d286f65fab099645c6cbb5e608fb45669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":frontend:navigation.html.twig"));

        $__internal_80e5dd393bebe77f79161200e5d54b8bf37e633f39f66f20093b05d2c296bcfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80e5dd393bebe77f79161200e5d54b8bf37e633f39f66f20093b05d2c296bcfe->enter($__internal_80e5dd393bebe77f79161200e5d54b8bf37e633f39f66f20093b05d2c296bcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":frontend:navigation.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_showComparateur");
        echo "\">Dudee'Go</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_accueil");
        echo "\">Accueil</a></li>
        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_about");
        echo "\">A Propos</a></li>       
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Services <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
           <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_voirJob");
        echo "\">Trouver un job</a></li>
           <li><a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_voirStage");
        echo "\">Trouver un stage</a></li>
           <li><a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_voirLogement");
        echo "\">Trouver un logement</a></li>
           <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_voirLangue");
        echo "\">Trouver un cours de langue</a></li>
           <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_voirOrientation");
        echo "\">Conseil d'orientation</a></li>
         </ul>
       </li>
       <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_voirBlog");
        echo "\">Blog</a></li>

       ";
        // line 31
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 32
            echo "        <p class=\"navbar-text\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |</p>
        <li><a href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
      ";
        } else {
            // line 35
            echo "        <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></li>
        <li><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
      ";
        }
        // line 37
        echo "  

    </ul>
  </div>
  <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>";
        
        $__internal_24d93ffce76c06e7f452901d5f32f81d286f65fab099645c6cbb5e608fb45669->leave($__internal_24d93ffce76c06e7f452901d5f32f81d286f65fab099645c6cbb5e608fb45669_prof);

        
        $__internal_80e5dd393bebe77f79161200e5d54b8bf37e633f39f66f20093b05d2c296bcfe->leave($__internal_80e5dd393bebe77f79161200e5d54b8bf37e633f39f66f20093b05d2c296bcfe_prof);

    }

    public function getTemplateName()
    {
        return ":frontend:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  105 => 36,  98 => 35,  91 => 33,  86 => 32,  84 => 31,  79 => 29,  73 => 26,  69 => 25,  65 => 24,  61 => 23,  57 => 22,  50 => 18,  46 => 17,  38 => 12,  25 => 1,);
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
      <a class=\"navbar-brand\" href=\"{{ path('dudeego_platform_showComparateur') }}\">Dudee'Go</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav navbar-right\">
        <li><a href=\"{{ path('dudeego_platform_accueil') }}\">Accueil</a></li>
        <li><a href=\"{{ path('dudeego_platform_about') }}\">A Propos</a></li>       
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Services <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
           <li><a href=\"{{ path('dudeego_platform_voirJob') }}\">Trouver un job</a></li>
           <li><a href=\"{{ path('dudeego_platform_voirStage') }}\">Trouver un stage</a></li>
           <li><a href=\"{{ path('dudeego_platform_voirLogement') }}\">Trouver un logement</a></li>
           <li><a href=\"{{ path('dudeego_platform_voirLangue') }}\">Trouver un cours de langue</a></li>
           <li><a href=\"{{ path('dudeego_platform_voirOrientation') }}\">Conseil d'orientation</a></li>
         </ul>
       </li>
       <li><a href=\"{{ path('dudeego_platform_voirBlog') }}\">Blog</a></li>

       {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        <p class=\"navbar-text\">{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |</p>
        <li><a href=\"{{ path('fos_user_security_logout') }}\">{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}</a></li>
      {% else %}
        <li><a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a></li>
        <li><a href=\"{{ path('fos_user_registration_register') }}\">Inscription</a></li>
      {% endif %}  

    </ul>
  </div>
  <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>", ":frontend:navigation.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\views\\frontend\\navigation.html.twig");
    }
}
