<?php

/* @DUDEEGOPlatform/front/job.html.twig */
class __TwigTemplate_0a19e6b1fdb11158c901995914ca00639b74466282d3b8e5b4375a81a2e9203d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "@DUDEEGOPlatform/front/job.html.twig", 3);
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
        $__internal_32bb6e1f000137b8c0e997b8a9ffbdf5e7202b2c340e08f2aa9236f2ec9ef2e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32bb6e1f000137b8c0e997b8a9ffbdf5e7202b2c340e08f2aa9236f2ec9ef2e6->enter($__internal_32bb6e1f000137b8c0e997b8a9ffbdf5e7202b2c340e08f2aa9236f2ec9ef2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/job.html.twig"));

        $__internal_0b3c7579b9ece7a7cab31f2ad140a9eec7ddb587a11ec171226deddfd52a9418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b3c7579b9ece7a7cab31f2ad140a9eec7ddb587a11ec171226deddfd52a9418->enter($__internal_0b3c7579b9ece7a7cab31f2ad140a9eec7ddb587a11ec171226deddfd52a9418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/job.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32bb6e1f000137b8c0e997b8a9ffbdf5e7202b2c340e08f2aa9236f2ec9ef2e6->leave($__internal_32bb6e1f000137b8c0e997b8a9ffbdf5e7202b2c340e08f2aa9236f2ec9ef2e6_prof);

        
        $__internal_0b3c7579b9ece7a7cab31f2ad140a9eec7ddb587a11ec171226deddfd52a9418->leave($__internal_0b3c7579b9ece7a7cab31f2ad140a9eec7ddb587a11ec171226deddfd52a9418_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5033bfd5cb156d7adbac40b2a202fbbd6a71224fbe3af98e85f7fee2535eda8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5033bfd5cb156d7adbac40b2a202fbbd6a71224fbe3af98e85f7fee2535eda8d->enter($__internal_5033bfd5cb156d7adbac40b2a202fbbd6a71224fbe3af98e85f7fee2535eda8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_802797732f943c7358e6b6786fc68e91684c249992a3bb3cf933c1b8829e34bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802797732f943c7358e6b6786fc68e91684c249992a3bb3cf933c1b8829e34bd->enter($__internal_802797732f943c7358e6b6786fc68e91684c249992a3bb3cf933c1b8829e34bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tJob - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_802797732f943c7358e6b6786fc68e91684c249992a3bb3cf933c1b8829e34bd->leave($__internal_802797732f943c7358e6b6786fc68e91684c249992a3bb3cf933c1b8829e34bd_prof);

        
        $__internal_5033bfd5cb156d7adbac40b2a202fbbd6a71224fbe3af98e85f7fee2535eda8d->leave($__internal_5033bfd5cb156d7adbac40b2a202fbbd6a71224fbe3af98e85f7fee2535eda8d_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_35056b81f4d57eb42e58be25a4385873b95abe148a82c5053f1345aec0523451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35056b81f4d57eb42e58be25a4385873b95abe148a82c5053f1345aec0523451->enter($__internal_35056b81f4d57eb42e58be25a4385873b95abe148a82c5053f1345aec0523451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_928ee596120ecf538354cee97c0309e0218bb3f75c1e41e69287a17e308c818f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_928ee596120ecf538354cee97c0309e0218bb3f75c1e41e69287a17e308c818f->enter($__internal_928ee596120ecf538354cee97c0309e0218bb3f75c1e41e69287a17e308c818f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

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
        
        $__internal_928ee596120ecf538354cee97c0309e0218bb3f75c1e41e69287a17e308c818f->leave($__internal_928ee596120ecf538354cee97c0309e0218bb3f75c1e41e69287a17e308c818f_prof);

        
        $__internal_35056b81f4d57eb42e58be25a4385873b95abe148a82c5053f1345aec0523451->leave($__internal_35056b81f4d57eb42e58be25a4385873b95abe148a82c5053f1345aec0523451_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/front/job.html.twig";
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
        return new Twig_Source("{# src/DUDEEGO/PlatformBundle/Resources/views/Advert/job.html.twig #}

{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}

{% block title %}
\tJob - {{ parent() }}
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

{% endblock %}", "@DUDEEGOPlatform/front/job.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\job.html.twig");
    }
}
