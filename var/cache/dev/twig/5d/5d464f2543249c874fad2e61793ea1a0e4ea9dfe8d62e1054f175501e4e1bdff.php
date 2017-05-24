<?php

/* @DUDEEGOPlatform/front/logement.html.twig */
class __TwigTemplate_b8ea6610f51394ac99e5f1f6985e264d89feca43ccc1a7d277aa7f9b8b77ef34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "@DUDEEGOPlatform/front/logement.html.twig", 3);
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
        $__internal_2df10fc400709997de03f44fb9d9d3c9a1b006c2ddff8ade8aa19ab77a0da1ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df10fc400709997de03f44fb9d9d3c9a1b006c2ddff8ade8aa19ab77a0da1ea->enter($__internal_2df10fc400709997de03f44fb9d9d3c9a1b006c2ddff8ade8aa19ab77a0da1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/logement.html.twig"));

        $__internal_7062789a55190437c0c6fca43ad74b3153ae839f8c50f61a8092343a5c083cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7062789a55190437c0c6fca43ad74b3153ae839f8c50f61a8092343a5c083cf1->enter($__internal_7062789a55190437c0c6fca43ad74b3153ae839f8c50f61a8092343a5c083cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/logement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2df10fc400709997de03f44fb9d9d3c9a1b006c2ddff8ade8aa19ab77a0da1ea->leave($__internal_2df10fc400709997de03f44fb9d9d3c9a1b006c2ddff8ade8aa19ab77a0da1ea_prof);

        
        $__internal_7062789a55190437c0c6fca43ad74b3153ae839f8c50f61a8092343a5c083cf1->leave($__internal_7062789a55190437c0c6fca43ad74b3153ae839f8c50f61a8092343a5c083cf1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d0c57bb40be183a39f5c23b7f39146e3746f7a19d8a2c83b5480dadccff0206 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d0c57bb40be183a39f5c23b7f39146e3746f7a19d8a2c83b5480dadccff0206->enter($__internal_6d0c57bb40be183a39f5c23b7f39146e3746f7a19d8a2c83b5480dadccff0206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f072dc85f9dffd63c6c16901e9e163e111699e8456b1c407a5d29790de642b69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f072dc85f9dffd63c6c16901e9e163e111699e8456b1c407a5d29790de642b69->enter($__internal_f072dc85f9dffd63c6c16901e9e163e111699e8456b1c407a5d29790de642b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f072dc85f9dffd63c6c16901e9e163e111699e8456b1c407a5d29790de642b69->leave($__internal_f072dc85f9dffd63c6c16901e9e163e111699e8456b1c407a5d29790de642b69_prof);

        
        $__internal_6d0c57bb40be183a39f5c23b7f39146e3746f7a19d8a2c83b5480dadccff0206->leave($__internal_6d0c57bb40be183a39f5c23b7f39146e3746f7a19d8a2c83b5480dadccff0206_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_94a789f4006ae7d16c50669d31bb124d0e0bf967ea3f851079ad19e7eccbc586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a789f4006ae7d16c50669d31bb124d0e0bf967ea3f851079ad19e7eccbc586->enter($__internal_94a789f4006ae7d16c50669d31bb124d0e0bf967ea3f851079ad19e7eccbc586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_90c0f4d9d1ca3aa11e83402ede787fd9d349af45a0ea09fe87c8a60856a75f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c0f4d9d1ca3aa11e83402ede787fd9d349af45a0ea09fe87c8a60856a75f8c->enter($__internal_90c0f4d9d1ca3aa11e83402ede787fd9d349af45a0ea09fe87c8a60856a75f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        // line 10
        echo "
  <!-- Page Content -->
  <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Four Column Portfolio
          <small>Subheading</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"index.html\">Home</a>
          </li>
          <li class=\"active\">Four Column Portfolio</li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
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
        
        $__internal_90c0f4d9d1ca3aa11e83402ede787fd9d349af45a0ea09fe87c8a60856a75f8c->leave($__internal_90c0f4d9d1ca3aa11e83402ede787fd9d349af45a0ea09fe87c8a60856a75f8c_prof);

        
        $__internal_94a789f4006ae7d16c50669d31bb124d0e0bf967ea3f851079ad19e7eccbc586->leave($__internal_94a789f4006ae7d16c50669d31bb124d0e0bf967ea3f851079ad19e7eccbc586_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/front/logement.html.twig";
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
        return new Twig_Source("{# src/DUDEEGO/PlatformBundle/Resources/views/Advert/logement.html.twig #}

{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}

{% block title %}
  Logement - {{ parent() }}
{% endblock %}

{% block FrontContent %}

  <!-- Page Content -->
  <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Four Column Portfolio
          <small>Subheading</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"index.html\">Home</a>
          </li>
          <li class=\"active\">Four Column Portfolio</li>
        </ol>
      </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class=\"row\">
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
      </div>
      <div class=\"col-md-3 img-portfolio\">
        <a href=\"portfolio-item.html\">
          <img class=\"img-responsive img-hover\" src=\"http://placehold.it/750x450\" alt=\"\">
        </a>
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

{% endblock %}", "@DUDEEGOPlatform/front/logement.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\logement.html.twig");
    }
}
