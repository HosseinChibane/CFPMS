<?php

/* DUDEEGOPlatformBundle:front:stage.html.twig */
class __TwigTemplate_92e9cdaeadd7f11211f0c53698326c7b7c914f294528aa25115e370de788cc44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:stage.html.twig", 3);
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
        $__internal_e77aa344142f908b32324ba7a3096c9cefc4c22382ab91cded3e4fb5e83cc8f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77aa344142f908b32324ba7a3096c9cefc4c22382ab91cded3e4fb5e83cc8f7->enter($__internal_e77aa344142f908b32324ba7a3096c9cefc4c22382ab91cded3e4fb5e83cc8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:stage.html.twig"));

        $__internal_c13e3e8fad0a9454bd027ea4f5ef623bf190b71cccb727903f18313ded5721a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c13e3e8fad0a9454bd027ea4f5ef623bf190b71cccb727903f18313ded5721a0->enter($__internal_c13e3e8fad0a9454bd027ea4f5ef623bf190b71cccb727903f18313ded5721a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:stage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77aa344142f908b32324ba7a3096c9cefc4c22382ab91cded3e4fb5e83cc8f7->leave($__internal_e77aa344142f908b32324ba7a3096c9cefc4c22382ab91cded3e4fb5e83cc8f7_prof);

        
        $__internal_c13e3e8fad0a9454bd027ea4f5ef623bf190b71cccb727903f18313ded5721a0->leave($__internal_c13e3e8fad0a9454bd027ea4f5ef623bf190b71cccb727903f18313ded5721a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a362d9ef99dd9fcf55e7475404b187d0b858f81c64b09b771916ac6c927097a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a362d9ef99dd9fcf55e7475404b187d0b858f81c64b09b771916ac6c927097a1->enter($__internal_a362d9ef99dd9fcf55e7475404b187d0b858f81c64b09b771916ac6c927097a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e93c514ac588db7f2806bd4671de02e0c6f52297345fff31950ec755dcaaa44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e93c514ac588db7f2806bd4671de02e0c6f52297345fff31950ec755dcaaa44->enter($__internal_3e93c514ac588db7f2806bd4671de02e0c6f52297345fff31950ec755dcaaa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Stage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3e93c514ac588db7f2806bd4671de02e0c6f52297345fff31950ec755dcaaa44->leave($__internal_3e93c514ac588db7f2806bd4671de02e0c6f52297345fff31950ec755dcaaa44_prof);

        
        $__internal_a362d9ef99dd9fcf55e7475404b187d0b858f81c64b09b771916ac6c927097a1->leave($__internal_a362d9ef99dd9fcf55e7475404b187d0b858f81c64b09b771916ac6c927097a1_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_51089cfeca77ac1784808a505d825ff46c5305344f1ff06a0c94d201ecebc090 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51089cfeca77ac1784808a505d825ff46c5305344f1ff06a0c94d201ecebc090->enter($__internal_51089cfeca77ac1784808a505d825ff46c5305344f1ff06a0c94d201ecebc090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_06478e239ab9a11f64804274e14bbbc85e84d5185888d22d624a79e1636bdffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06478e239ab9a11f64804274e14bbbc85e84d5185888d22d624a79e1636bdffd->enter($__internal_06478e239ab9a11f64804274e14bbbc85e84d5185888d22d624a79e1636bdffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        // line 10
        echo "
  <!-- Page Content -->
  <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Three Column Portfolio
          <small>Subheading</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"index.html\">Home</a>
          </li>
          <li class=\"active\">Three Column Portfolio</li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
    </div>

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->
    <div class=\"row text-center\">
      <div class=\"col-lg-12\">
        <ul class=\"pagination\">
          <li>
            <a href=\"#\">&laquo;</a>
          </li>
          <li class=\"active\">
            <a href=\"#\">1</a>
          </li>
          <li>
            <a href=\"#\">2</a>
          </li>
          <li>
            <a href=\"#\">3</a>
          </li>
          <li>
            <a href=\"#\">4</a>
          </li>
          <li>
            <a href=\"#\">5</a>
          </li>
          <li>
            <a href=\"#\">&raquo;</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

";
        
        $__internal_06478e239ab9a11f64804274e14bbbc85e84d5185888d22d624a79e1636bdffd->leave($__internal_06478e239ab9a11f64804274e14bbbc85e84d5185888d22d624a79e1636bdffd_prof);

        
        $__internal_51089cfeca77ac1784808a505d825ff46c5305344f1ff06a0c94d201ecebc090->leave($__internal_51089cfeca77ac1784808a505d825ff46c5305344f1ff06a0c94d201ecebc090_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:stage.html.twig";
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
        return new Twig_Source("{# src/DUDEEGO/PlatformBundle/Resources/views/Advert/stage.html.twig #}

{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}

{% block title %}
  Stage - {{ parent() }}
{% endblock %}

{% block FrontContent %}

  <!-- Page Content -->
  <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Three Column Portfolio
          <small>Subheading</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"index.html\">Home</a>
          </li>
          <li class=\"active\">Three Column Portfolio</li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
    </div>

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
      <div class=\"col-md-4 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/700x400\" alt=\"\">
        </a>
        <h3>
          <a href=\"portfolio-item.html\">Project Name</a>
        </h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Pagination -->
    <div class=\"row text-center\">
      <div class=\"col-lg-12\">
        <ul class=\"pagination\">
          <li>
            <a href=\"#\">&laquo;</a>
          </li>
          <li class=\"active\">
            <a href=\"#\">1</a>
          </li>
          <li>
            <a href=\"#\">2</a>
          </li>
          <li>
            <a href=\"#\">3</a>
          </li>
          <li>
            <a href=\"#\">4</a>
          </li>
          <li>
            <a href=\"#\">5</a>
          </li>
          <li>
            <a href=\"#\">&raquo;</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

{% endblock %}", "DUDEEGOPlatformBundle:front:stage.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/stage.html.twig");
    }
}
