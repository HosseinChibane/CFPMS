<?php

/* @DUDEEGOPlatform/front/stage.html.twig */
class __TwigTemplate_3d662687dccaf080ee9d7b00b43699fb053f2c202260d0b74914924b62bf5305 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "@DUDEEGOPlatform/front/stage.html.twig", 3);
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
        $__internal_0213b55d8dd2b4bd03effbdc894a434e114f8e4d33b3c2a223c0ed7d6df364f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0213b55d8dd2b4bd03effbdc894a434e114f8e4d33b3c2a223c0ed7d6df364f3->enter($__internal_0213b55d8dd2b4bd03effbdc894a434e114f8e4d33b3c2a223c0ed7d6df364f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/stage.html.twig"));

        $__internal_3915815e3938f27b3b19852f1dacc885c12a8565ad95f723995d45edf1cd8a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3915815e3938f27b3b19852f1dacc885c12a8565ad95f723995d45edf1cd8a76->enter($__internal_3915815e3938f27b3b19852f1dacc885c12a8565ad95f723995d45edf1cd8a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/stage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0213b55d8dd2b4bd03effbdc894a434e114f8e4d33b3c2a223c0ed7d6df364f3->leave($__internal_0213b55d8dd2b4bd03effbdc894a434e114f8e4d33b3c2a223c0ed7d6df364f3_prof);

        
        $__internal_3915815e3938f27b3b19852f1dacc885c12a8565ad95f723995d45edf1cd8a76->leave($__internal_3915815e3938f27b3b19852f1dacc885c12a8565ad95f723995d45edf1cd8a76_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_08e0878cc8fa50d6a4d546cd39488202a30c49abee93b23050a18850b1bc1c22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e0878cc8fa50d6a4d546cd39488202a30c49abee93b23050a18850b1bc1c22->enter($__internal_08e0878cc8fa50d6a4d546cd39488202a30c49abee93b23050a18850b1bc1c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff1982f95f0b2d2b3dc0b2db8493f0d1ef1bc765a258aeb8cc2a68cbd6668bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff1982f95f0b2d2b3dc0b2db8493f0d1ef1bc765a258aeb8cc2a68cbd6668bc0->enter($__internal_ff1982f95f0b2d2b3dc0b2db8493f0d1ef1bc765a258aeb8cc2a68cbd6668bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Stage - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ff1982f95f0b2d2b3dc0b2db8493f0d1ef1bc765a258aeb8cc2a68cbd6668bc0->leave($__internal_ff1982f95f0b2d2b3dc0b2db8493f0d1ef1bc765a258aeb8cc2a68cbd6668bc0_prof);

        
        $__internal_08e0878cc8fa50d6a4d546cd39488202a30c49abee93b23050a18850b1bc1c22->leave($__internal_08e0878cc8fa50d6a4d546cd39488202a30c49abee93b23050a18850b1bc1c22_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_b42950e9afc589e05113240e6d8673f7efdd0d773606e710ac72e1db5ce8fe5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b42950e9afc589e05113240e6d8673f7efdd0d773606e710ac72e1db5ce8fe5a->enter($__internal_b42950e9afc589e05113240e6d8673f7efdd0d773606e710ac72e1db5ce8fe5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_adc63a2eb288a64af18dcba8f120012022938a3d910a0b4fa7c2fad62279b7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc63a2eb288a64af18dcba8f120012022938a3d910a0b4fa7c2fad62279b7ba->enter($__internal_adc63a2eb288a64af18dcba8f120012022938a3d910a0b4fa7c2fad62279b7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

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
        
        $__internal_adc63a2eb288a64af18dcba8f120012022938a3d910a0b4fa7c2fad62279b7ba->leave($__internal_adc63a2eb288a64af18dcba8f120012022938a3d910a0b4fa7c2fad62279b7ba_prof);

        
        $__internal_b42950e9afc589e05113240e6d8673f7efdd0d773606e710ac72e1db5ce8fe5a->leave($__internal_b42950e9afc589e05113240e6d8673f7efdd0d773606e710ac72e1db5ce8fe5a_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/front/stage.html.twig";
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

{% endblock %}", "@DUDEEGOPlatform/front/stage.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\stage.html.twig");
    }
}
