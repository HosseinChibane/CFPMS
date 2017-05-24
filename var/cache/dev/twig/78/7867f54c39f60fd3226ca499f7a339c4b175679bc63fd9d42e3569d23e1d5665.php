<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_64aec4eca490b35f240a69802f44192750888fe3abdb104361ae96318abe7549 extends Twig_Template
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
        $__internal_251b1b1d6ce98afcd42db60f1d9a98c21c8d0a999bf0e665c9e288f08a867eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_251b1b1d6ce98afcd42db60f1d9a98c21c8d0a999bf0e665c9e288f08a867eb9->enter($__internal_251b1b1d6ce98afcd42db60f1d9a98c21c8d0a999bf0e665c9e288f08a867eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_0ea1868f59b0ac0a8eea8a9e3fdcc28dd5806d02878f02f8e47108d1028ce182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea1868f59b0ac0a8eea8a9e3fdcc28dd5806d02878f02f8e47108d1028ce182->enter($__internal_0ea1868f59b0ac0a8eea8a9e3fdcc28dd5806d02878f02f8e47108d1028ce182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "
  <!-- Page Content -->
  <div class=\"container\">
    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Connexion
          <small></small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"\">Accueil</a>
          </li>
          <li class=\"active\">Connexion</li>
        </ol>
      </div>
    </div>

    <!-- /.row -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"jumbotron\">

          ";
        // line 24
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 25
            echo "            <div class=\"alert alert-danger\" role=\"alert\">
              ";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 29
        echo "
          <form class=\"form-signin\" action=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">

            ";
        // line 32
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 33
            echo "              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 34
        echo "   

            <h2 class=\"form-signin-heading\">Se connecter</h2>
            
            <label for=\"username\" class=\"sr-only\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">

            <label for=\"password\" class=\"sr-only\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\">

            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
              </label>    
            </div>  

            <input class=\"btn btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
            <br>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_request");
        echo "\" class=\"forgot-password\">
              Mot de passe oublié ?
            </a>

          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->

<!-- Ancien CSS
  <style type=\"text/css\">
    body {
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #eee;
    }

    .form-signin {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 10px;
    }
    .form-signin .checkbox {
      font-weight: normal;
    }
    .form-signin .form-control {
      position: relative;
      height: auto;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type=\"email\"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type=\"password\"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style> -->";
        
        $__internal_251b1b1d6ce98afcd42db60f1d9a98c21c8d0a999bf0e665c9e288f08a867eb9->leave($__internal_251b1b1d6ce98afcd42db60f1d9a98c21c8d0a999bf0e665c9e288f08a867eb9_prof);

        
        $__internal_0ea1868f59b0ac0a8eea8a9e3fdcc28dd5806d02878f02f8e47108d1028ce182->leave($__internal_0ea1868f59b0ac0a8eea8a9e3fdcc28dd5806d02878f02f8e47108d1028ce182_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 53,  107 => 51,  100 => 47,  91 => 41,  86 => 39,  82 => 38,  76 => 34,  70 => 33,  68 => 32,  63 => 30,  60 => 29,  54 => 26,  51 => 25,  49 => 24,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

  <!-- Page Content -->
  <div class=\"container\">
    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Connexion
          <small></small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"\">Accueil</a>
          </li>
          <li class=\"active\">Connexion</li>
        </ol>
      </div>
    </div>

    <!-- /.row -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"jumbotron\">

          {% if error %}
            <div class=\"alert alert-danger\" role=\"alert\">
              {{ error.messageKey|trans(error.messageData, 'security') }}
            </div>
          {% endif %}

          <form class=\"form-signin\" action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">

            {% if csrf_token %}
              <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}   

            <h2 class=\"form-signin-heading\">Se connecter</h2>
            
            <label for=\"username\" class=\"sr-only\">{{ 'security.login.username'|trans }}</label>
            <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" value=\"{{ last_username }}\" required=\"required\">

            <label for=\"password\" class=\"sr-only\">{{ 'security.login.remember_me'|trans }}</label>
            <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\">

            <div class=\"checkbox\">
              <label>
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
              </label>    
            </div>  

            <input class=\"btn btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"/>
            <br>
            <a href=\"{{ path(\"fos_user_resetting_request\") }}\" class=\"forgot-password\">
              Mot de passe oublié ?
            </a>

          </form>

        </div>
      </div>
    </div>
  </div>
  <!-- /.container -->

<!-- Ancien CSS
  <style type=\"text/css\">
    body {
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #eee;
    }

    .form-signin {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 10px;
    }
    .form-signin .checkbox {
      font-weight: normal;
    }
    .form-signin .form-control {
      position: relative;
      height: auto;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type=\"email\"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type=\"password\"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style> -->", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
