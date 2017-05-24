<?php

/* DUDEEGOPlatformBundle:front:job.html.twig */
class __TwigTemplate_693783374dc6404e3c70187c6d2ef1020ae577864a2b940e909925a2ed2a4b51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:job.html.twig", 3);
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
        $__internal_01cd696cffa2e6e32ab47b2dccca4ba8c4c752e294572d1dacd2175f04a59445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cd696cffa2e6e32ab47b2dccca4ba8c4c752e294572d1dacd2175f04a59445->enter($__internal_01cd696cffa2e6e32ab47b2dccca4ba8c4c752e294572d1dacd2175f04a59445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:job.html.twig"));

        $__internal_726e614a297857096a5dbdd33f0597ddd1bf4cb7cf3308bbd24e23326dab82fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726e614a297857096a5dbdd33f0597ddd1bf4cb7cf3308bbd24e23326dab82fa->enter($__internal_726e614a297857096a5dbdd33f0597ddd1bf4cb7cf3308bbd24e23326dab82fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:job.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01cd696cffa2e6e32ab47b2dccca4ba8c4c752e294572d1dacd2175f04a59445->leave($__internal_01cd696cffa2e6e32ab47b2dccca4ba8c4c752e294572d1dacd2175f04a59445_prof);

        
        $__internal_726e614a297857096a5dbdd33f0597ddd1bf4cb7cf3308bbd24e23326dab82fa->leave($__internal_726e614a297857096a5dbdd33f0597ddd1bf4cb7cf3308bbd24e23326dab82fa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc6b845bb4c4c8d38c3465d4235475f7e33a0c2fa635ff03810f3e772c0db7bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6b845bb4c4c8d38c3465d4235475f7e33a0c2fa635ff03810f3e772c0db7bf->enter($__internal_bc6b845bb4c4c8d38c3465d4235475f7e33a0c2fa635ff03810f3e772c0db7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6036c26ae21ac264c9d3a211ddf2bab092c4771f6128dd21c046cb811b14d8ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6036c26ae21ac264c9d3a211ddf2bab092c4771f6128dd21c046cb811b14d8ac->enter($__internal_6036c26ae21ac264c9d3a211ddf2bab092c4771f6128dd21c046cb811b14d8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "\tJob - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6036c26ae21ac264c9d3a211ddf2bab092c4771f6128dd21c046cb811b14d8ac->leave($__internal_6036c26ae21ac264c9d3a211ddf2bab092c4771f6128dd21c046cb811b14d8ac_prof);

        
        $__internal_bc6b845bb4c4c8d38c3465d4235475f7e33a0c2fa635ff03810f3e772c0db7bf->leave($__internal_bc6b845bb4c4c8d38c3465d4235475f7e33a0c2fa635ff03810f3e772c0db7bf_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_fd48634eabeb3290c4d6c7b3d7032b56d1c948775fb7030b47f1c269c229c5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd48634eabeb3290c4d6c7b3d7032b56d1c948775fb7030b47f1c269c229c5d9->enter($__internal_fd48634eabeb3290c4d6c7b3d7032b56d1c948775fb7030b47f1c269c229c5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_84170830e89463ac31f88d3566f6367fe90b3c8ac7e27ef02b72f6ad94bbf619 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84170830e89463ac31f88d3566f6367fe90b3c8ac7e27ef02b72f6ad94bbf619->enter($__internal_84170830e89463ac31f88d3566f6367fe90b3c8ac7e27ef02b72f6ad94bbf619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

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
        
        $__internal_84170830e89463ac31f88d3566f6367fe90b3c8ac7e27ef02b72f6ad94bbf619->leave($__internal_84170830e89463ac31f88d3566f6367fe90b3c8ac7e27ef02b72f6ad94bbf619_prof);

        
        $__internal_fd48634eabeb3290c4d6c7b3d7032b56d1c948775fb7030b47f1c269c229c5d9->leave($__internal_fd48634eabeb3290c4d6c7b3d7032b56d1c948775fb7030b47f1c269c229c5d9_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:job.html.twig";
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

{% endblock %}", "DUDEEGOPlatformBundle:front:job.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/job.html.twig");
    }
}
