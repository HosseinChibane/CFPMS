<?php

/* DUDEEGOPlatformBundle:front:langue.html.twig */
class __TwigTemplate_9064d7e52fdf2c42e7e9ac1ac6ff7dca3156a4d957e858b58ec47e38d990cabd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:langue.html.twig", 3);
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
        $__internal_fd27816952c43d3f3a48870e3bde21fe72e912d5dccf776a41812122ff01efa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd27816952c43d3f3a48870e3bde21fe72e912d5dccf776a41812122ff01efa5->enter($__internal_fd27816952c43d3f3a48870e3bde21fe72e912d5dccf776a41812122ff01efa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:langue.html.twig"));

        $__internal_f84dc802536829b892f049f737c0dd50cbfcc39048d34168e837ba5ac6374d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f84dc802536829b892f049f737c0dd50cbfcc39048d34168e837ba5ac6374d75->enter($__internal_f84dc802536829b892f049f737c0dd50cbfcc39048d34168e837ba5ac6374d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:langue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd27816952c43d3f3a48870e3bde21fe72e912d5dccf776a41812122ff01efa5->leave($__internal_fd27816952c43d3f3a48870e3bde21fe72e912d5dccf776a41812122ff01efa5_prof);

        
        $__internal_f84dc802536829b892f049f737c0dd50cbfcc39048d34168e837ba5ac6374d75->leave($__internal_f84dc802536829b892f049f737c0dd50cbfcc39048d34168e837ba5ac6374d75_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_05d2dc504621f72fff089f8554143a378ee9ad495ff61d96e5c0a0f732cbf15a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05d2dc504621f72fff089f8554143a378ee9ad495ff61d96e5c0a0f732cbf15a->enter($__internal_05d2dc504621f72fff089f8554143a378ee9ad495ff61d96e5c0a0f732cbf15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9db78ed142d016c12e042e67306bcea63a23e70a9127b6d02d428bbbc9cb4543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db78ed142d016c12e042e67306bcea63a23e70a9127b6d02d428bbbc9cb4543->enter($__internal_9db78ed142d016c12e042e67306bcea63a23e70a9127b6d02d428bbbc9cb4543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_9db78ed142d016c12e042e67306bcea63a23e70a9127b6d02d428bbbc9cb4543->leave($__internal_9db78ed142d016c12e042e67306bcea63a23e70a9127b6d02d428bbbc9cb4543_prof);

        
        $__internal_05d2dc504621f72fff089f8554143a378ee9ad495ff61d96e5c0a0f732cbf15a->leave($__internal_05d2dc504621f72fff089f8554143a378ee9ad495ff61d96e5c0a0f732cbf15a_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_a9d72200f52e22f8e003ed1b6b9bee4ef505b0c83d5e621167cbad9da749fe84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d72200f52e22f8e003ed1b6b9bee4ef505b0c83d5e621167cbad9da749fe84->enter($__internal_a9d72200f52e22f8e003ed1b6b9bee4ef505b0c83d5e621167cbad9da749fe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_0b4320ed04f6aebbd39ecb9493f0b6fef990ceeccaa34b9e783cab8aac6d4d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4320ed04f6aebbd39ecb9493f0b6fef990ceeccaa34b9e783cab8aac6d4d58->enter($__internal_0b4320ed04f6aebbd39ecb9493f0b6fef990ceeccaa34b9e783cab8aac6d4d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        // line 10
        echo "\t
\t<!-- Page Content -->
  <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Portfolio Item
          <small>Subheading</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"\">Accueil</a>
          </li>
          <li class=\"active\">Cours de langue</li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class=\"row\">

      <div class=\"col-md-8\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
          <!-- Indicators -->
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class=\"carousel-inner\">
            <div class=\"item active\">
              <img class=\"img-responsive\" src=\"http://placehold.it/750x500\" alt=\"\">
            </div>
            <div class=\"item\">
              <img class=\"img-responsive\" src=\"http://placehold.it/750x500\" alt=\"\">
            </div>
            <div class=\"item\">
              <img class=\"img-responsive\" src=\"http://placehold.it/750x500\" alt=\"\">
            </div>
          </div>

          <!-- Controls -->
          <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
          </a>
          <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
          </a>
        </div>
      </div>

      <div class=\"col-md-4\">
        <h3>Description</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
        <h3>Details</h3>
        <ul>
          <li>Anglais</li>
          <li>Visite de musée</li>
          <li>Déjeuner typique</li>
          <li>Adipiscing Elit</li>
        </ul>
      </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <div class=\"row\">

      <div class=\"col-lg-12\">
        <h3 class=\"page-header\">Autres cours de langue</h3>
      </div>

      <div class=\"col-sm-3 col-xs-6\">
        <a href=\"#\">
          <img class=\"img-responsive img-hover img-related\" src=\"http://placehold.it/500x300\" alt=\"\">
        </a>
      </div>

      <div class=\"col-sm-3 col-xs-6\">
        <a href=\"#\">
          <img class=\"img-responsive img-hover img-related\" src=\"http://placehold.it/500x300\" alt=\"\">
        </a>
      </div>

      <div class=\"col-sm-3 col-xs-6\">
        <a href=\"#\">
          <img class=\"img-responsive img-hover img-related\" src=\"http://placehold.it/500x300\" alt=\"\">
        </a>
      </div>

      <div class=\"col-sm-3 col-xs-6\">
        <a href=\"#\">
          <img class=\"img-responsive img-hover img-related\" src=\"http://placehold.it/500x300\" alt=\"\">
        </a>
      </div>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

";
        
        $__internal_0b4320ed04f6aebbd39ecb9493f0b6fef990ceeccaa34b9e783cab8aac6d4d58->leave($__internal_0b4320ed04f6aebbd39ecb9493f0b6fef990ceeccaa34b9e783cab8aac6d4d58_prof);

        
        $__internal_a9d72200f52e22f8e003ed1b6b9bee4ef505b0c83d5e621167cbad9da749fe84->leave($__internal_a9d72200f52e22f8e003ed1b6b9bee4ef505b0c83d5e621167cbad9da749fe84_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:langue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/DUDEEGO/PlatformBundle/Resources/views/Advert/langue.html.twig #}

{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}

{% block title %}
  Langue - {{ parent() }}
{% endblock %}

{% block FrontContent %}
\t
\t<!-- Page Content -->
  <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Portfolio Item
          <small>Subheading</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"\">Accueil</a>
          </li>
          <li class=\"active\">Cours de langue</li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <!-- Portfolio Item Row -->
    <div class=\"row\">

      <div class=\"col-md-8\">
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
          <!-- Indicators -->
          <ol class=\"carousel-indicators\">
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
            <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class=\"carousel-inner\">
            <div class=\"item active\">
              <img class=\"img-responsive\" src=\"http://placehold.it/750x500\" alt=\"\">
            </div>
            <div class=\"item\">
              <img class=\"img-responsive\" src=\"http://placehold.it/750x500\" alt=\"\">
            </div>
            <div class=\"item\">
              <img class=\"img-responsive\" src=\"http://placehold.it/750x500\" alt=\"\">
            </div>
          </div>

          <!-- Controls -->
          <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
            <span class=\"glyphicon glyphicon-chevron-left\"></span>
          </a>
          <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
            <span class=\"glyphicon glyphicon-chevron-right\"></span>
          </a>
        </div>
      </div>

      <div class=\"col-md-4\">
        <h3>Description</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
        <h3>Details</h3>
        <ul>
          <li>Anglais</li>
          <li>Visite de musée</li>
          <li>Déjeuner typique</li>
          <li>Adipiscing Elit</li>
        </ul>
      </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <div class=\"row\">

      <div class=\"col-lg-12\">
        <h3 class=\"page-header\">Autres cours de langue</h3>
      </div>

      <div class=\"col-sm-3 col-xs-6\">
        <a href=\"#\">
          <img class=\"img-responsive img-hover img-related\" src=\"http://placehold.it/500x300\" alt=\"\">
        </a>
      </div>

      <div class=\"col-sm-3 col-xs-6\">
        <a href=\"#\">
          <img class=\"img-responsive img-hover img-related\" src=\"http://placehold.it/500x300\" alt=\"\">
        </a>
      </div>

      <div class=\"col-sm-3 col-xs-6\">
        <a href=\"#\">
          <img class=\"img-responsive img-hover img-related\" src=\"http://placehold.it/500x300\" alt=\"\">
        </a>
      </div>

      <div class=\"col-sm-3 col-xs-6\">
        <a href=\"#\">
          <img class=\"img-responsive img-hover img-related\" src=\"http://placehold.it/500x300\" alt=\"\">
        </a>
      </div>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

{% endblock %}", "DUDEEGOPlatformBundle:front:langue.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/langue.html.twig");
    }
}
