<?php

/* DUDEEGOPlatformBundle:front:logement.html.twig */
class __TwigTemplate_b73e19a2b34ae4679e1138b106540b9d909ddef111bc39f4b46c063440de7664 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:logement.html.twig", 3);
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
        $__internal_8abc3be94d17259c2485440ea296e0ce070c4c1c0c77ee9e2f68b4358fb8decc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abc3be94d17259c2485440ea296e0ce070c4c1c0c77ee9e2f68b4358fb8decc->enter($__internal_8abc3be94d17259c2485440ea296e0ce070c4c1c0c77ee9e2f68b4358fb8decc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:logement.html.twig"));

        $__internal_2d9144d7cd574c6053a056e1f739659e6cefa2bd693e322d18b8bc66b5f5d486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9144d7cd574c6053a056e1f739659e6cefa2bd693e322d18b8bc66b5f5d486->enter($__internal_2d9144d7cd574c6053a056e1f739659e6cefa2bd693e322d18b8bc66b5f5d486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:logement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abc3be94d17259c2485440ea296e0ce070c4c1c0c77ee9e2f68b4358fb8decc->leave($__internal_8abc3be94d17259c2485440ea296e0ce070c4c1c0c77ee9e2f68b4358fb8decc_prof);

        
        $__internal_2d9144d7cd574c6053a056e1f739659e6cefa2bd693e322d18b8bc66b5f5d486->leave($__internal_2d9144d7cd574c6053a056e1f739659e6cefa2bd693e322d18b8bc66b5f5d486_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf8c11d004c5275a7f7a93b4313fed1831e79b0a7f7028253440eef8e30c6b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8c11d004c5275a7f7a93b4313fed1831e79b0a7f7028253440eef8e30c6b3b->enter($__internal_bf8c11d004c5275a7f7a93b4313fed1831e79b0a7f7028253440eef8e30c6b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ad19bbea283aa85a19e1258a9a164a72fd6362eda71136479c6f45286c787411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad19bbea283aa85a19e1258a9a164a72fd6362eda71136479c6f45286c787411->enter($__internal_ad19bbea283aa85a19e1258a9a164a72fd6362eda71136479c6f45286c787411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Logement - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ad19bbea283aa85a19e1258a9a164a72fd6362eda71136479c6f45286c787411->leave($__internal_ad19bbea283aa85a19e1258a9a164a72fd6362eda71136479c6f45286c787411_prof);

        
        $__internal_bf8c11d004c5275a7f7a93b4313fed1831e79b0a7f7028253440eef8e30c6b3b->leave($__internal_bf8c11d004c5275a7f7a93b4313fed1831e79b0a7f7028253440eef8e30c6b3b_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_3b8263d59d5875897f0ff479001403d591220e1e4176d6389302537592092924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8263d59d5875897f0ff479001403d591220e1e4176d6389302537592092924->enter($__internal_3b8263d59d5875897f0ff479001403d591220e1e4176d6389302537592092924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_c9b36f29a59323f430acff2414d8db70eadc4fc44e1448eb4f3fafd23356e5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9b36f29a59323f430acff2414d8db70eadc4fc44e1448eb4f3fafd23356e5d5->enter($__internal_c9b36f29a59323f430acff2414d8db70eadc4fc44e1448eb4f3fafd23356e5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

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
        
        $__internal_c9b36f29a59323f430acff2414d8db70eadc4fc44e1448eb4f3fafd23356e5d5->leave($__internal_c9b36f29a59323f430acff2414d8db70eadc4fc44e1448eb4f3fafd23356e5d5_prof);

        
        $__internal_3b8263d59d5875897f0ff479001403d591220e1e4176d6389302537592092924->leave($__internal_3b8263d59d5875897f0ff479001403d591220e1e4176d6389302537592092924_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:logement.html.twig";
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

{% endblock %}", "DUDEEGOPlatformBundle:front:logement.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/logement.html.twig");
    }
}
