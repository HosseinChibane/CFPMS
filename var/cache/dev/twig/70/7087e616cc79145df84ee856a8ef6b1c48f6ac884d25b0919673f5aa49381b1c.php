<?php

/* DUDEEGOPlatformBundle:front:orientation.html.twig */
class __TwigTemplate_2fcde430e6c29440156b7880046ca84f33205c4d1aeccf524a391e98cb91b799 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:orientation.html.twig", 2);
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
        $__internal_6c3feccf49c0f3d804717b0e9bd8a68d1369d67cdfed783861e7e26fe98cf25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3feccf49c0f3d804717b0e9bd8a68d1369d67cdfed783861e7e26fe98cf25f->enter($__internal_6c3feccf49c0f3d804717b0e9bd8a68d1369d67cdfed783861e7e26fe98cf25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:orientation.html.twig"));

        $__internal_8eab09247be0849864873ac0621ee8e12ec65f94ac9ebfbfebc89da2c0604656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eab09247be0849864873ac0621ee8e12ec65f94ac9ebfbfebc89da2c0604656->enter($__internal_8eab09247be0849864873ac0621ee8e12ec65f94ac9ebfbfebc89da2c0604656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:orientation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c3feccf49c0f3d804717b0e9bd8a68d1369d67cdfed783861e7e26fe98cf25f->leave($__internal_6c3feccf49c0f3d804717b0e9bd8a68d1369d67cdfed783861e7e26fe98cf25f_prof);

        
        $__internal_8eab09247be0849864873ac0621ee8e12ec65f94ac9ebfbfebc89da2c0604656->leave($__internal_8eab09247be0849864873ac0621ee8e12ec65f94ac9ebfbfebc89da2c0604656_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bc5bda03dca6ede96c07a1b7da32d2cbbe159f6d620d08b7032fb5625861a61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bc5bda03dca6ede96c07a1b7da32d2cbbe159f6d620d08b7032fb5625861a61->enter($__internal_2bc5bda03dca6ede96c07a1b7da32d2cbbe159f6d620d08b7032fb5625861a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22a1a402d3c9508003c10371996bc2d33843e0f4787d1330c7b67cbf18af7404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a1a402d3c9508003c10371996bc2d33843e0f4787d1330c7b67cbf18af7404->enter($__internal_22a1a402d3c9508003c10371996bc2d33843e0f4787d1330c7b67cbf18af7404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Orientation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_22a1a402d3c9508003c10371996bc2d33843e0f4787d1330c7b67cbf18af7404->leave($__internal_22a1a402d3c9508003c10371996bc2d33843e0f4787d1330c7b67cbf18af7404_prof);

        
        $__internal_2bc5bda03dca6ede96c07a1b7da32d2cbbe159f6d620d08b7032fb5625861a61->leave($__internal_2bc5bda03dca6ede96c07a1b7da32d2cbbe159f6d620d08b7032fb5625861a61_prof);

    }

    // line 8
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_fede15cbd74d3b19d2072d4983ebe59f2125770aba8c2fa08a84fffeb4607600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fede15cbd74d3b19d2072d4983ebe59f2125770aba8c2fa08a84fffeb4607600->enter($__internal_fede15cbd74d3b19d2072d4983ebe59f2125770aba8c2fa08a84fffeb4607600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_f81b8022c9e66833c9cda4f6132c7f37b11dfe670b6d25d0be77405b51661786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81b8022c9e66833c9cda4f6132c7f37b11dfe670b6d25d0be77405b51661786->enter($__internal_f81b8022c9e66833c9cda4f6132c7f37b11dfe670b6d25d0be77405b51661786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        // line 9
        echo "    <div class=\"container\">
        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Conseil d'orientation
                    <small>tips and tricks !</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_accueil");
        echo "\">Accueil</a></li>
                    <li class=\"active\">Conseil orientation</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        
        <div class=\"row\">

          <!-- Blog Entries Column -->
          <div class=\"col-md-8\">

            <!-- First Blog Post -->
            <h2>
              <a href=\"#\">Blog Post Title</a>
          </h2>
          <p class=\"lead\">
              by <a href=\"index.php\">Start Bootstrap</a>
          </p>
          <p><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2013 at 10:00 PM</p>
          <hr>
          <a href=\"blog-post.html\">
              <img class=\"img-responsive img-hover\" src=\"http://placehold.it/900x300\" alt=\"\">
          </a>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
          <a class=\"btn btn-primary\" href=\"#\">Read More <i class=\"fa fa-angle-right\"></i></a>

          <hr>

          <!-- Second Blog Post -->
          <h2>
              <a href=\"#\">Blog Post Title</a>
          </h2>
          <p class=\"lead\">
              by <a href=\"index.php\">Start Bootstrap</a>
          </p>
          <p><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2013 at 10:45 PM</p>
          <hr>
          <a href=\"blog-post.html\">
              <img class=\"img-responsive img-hover\" src=\"http://placehold.it/900x300\" alt=\"\">
          </a>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
          <a class=\"btn btn-primary\" href=\"#\">Read More <i class=\"fa fa-angle-right\"></i></a>

          <hr>

          <!-- Third Blog Post -->
          <h2>
              <a href=\"#\">Blog Post Title</a>
          </h2>
          <p class=\"lead\">
              by <a href=\"index.php\">Start Bootstrap</a>
          </p>
          <p><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2013 at 10:45 PM</p>
          <hr>
          <a href=\"blog-post.html\">
              <img class=\"img-responsive img-hover\" src=\"http://placehold.it/900x300\" alt=\"\">
          </a>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
          <a class=\"btn btn-primary\" href=\"#\">Read More <i class=\"fa fa-angle-right\"></i></a>

          <hr>

          <!-- Pager -->
          <ul class=\"pager\">
              <li class=\"previous\">
                <a href=\"#\">&larr; Older</a>
            </li>
            <li class=\"next\">
                <a href=\"#\">Newer &rarr;</a>
            </li>
        </ul>

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class=\"col-md-4\">
        <!-- Blog Search Well -->
        <div class=\"well\">
          <h4>Blog Search</h4>
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button>
          </span>
      </div>
      <!-- /.input-group -->
  </div>

  <!-- Blog Categories Well -->
  <div class=\"well\">
      <h4>Blog Categories</h4>
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <ul class=\"list-unstyled\">
            <li><a href=\"#\">Category Name</a>
            </li>
            <li><a href=\"#\">Category Name</a>
            </li>
            <li><a href=\"#\">Category Name</a>
            </li>
            <li><a href=\"#\">Category Name</a>
            </li>
        </ul>
    </div>
    <!-- /.col-lg-6 -->
    <div class=\"col-lg-6\">
      <ul class=\"list-unstyled\">
        <li><a href=\"#\">Category Name</a>
        </li>
        <li><a href=\"#\">Category Name</a>
        </li>
        <li><a href=\"#\">Category Name</a>
        </li>
        <li><a href=\"#\">Category Name</a>
        </li>
    </ul>
</div>
<!-- /.col-lg-6 -->
</div>
<!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class=\"well\">
  <h4>Side Widget Well</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>

</div>

</div>
<!-- /.row -->
</div>
<!-- /.container -->

";
        
        $__internal_f81b8022c9e66833c9cda4f6132c7f37b11dfe670b6d25d0be77405b51661786->leave($__internal_f81b8022c9e66833c9cda4f6132c7f37b11dfe670b6d25d0be77405b51661786_prof);

        
        $__internal_fede15cbd74d3b19d2072d4983ebe59f2125770aba8c2fa08a84fffeb4607600->leave($__internal_fede15cbd74d3b19d2072d4983ebe59f2125770aba8c2fa08a84fffeb4607600_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:orientation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}

{% block title %}
    Orientation - {{ parent() }}
{% endblock %}

{% block FrontContent %}
    <div class=\"container\">
        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Conseil d'orientation
                    <small>tips and tricks !</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('dudeego_platform_accueil') }}\">Accueil</a></li>
                    <li class=\"active\">Conseil orientation</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        
        <div class=\"row\">

          <!-- Blog Entries Column -->
          <div class=\"col-md-8\">

            <!-- First Blog Post -->
            <h2>
              <a href=\"#\">Blog Post Title</a>
          </h2>
          <p class=\"lead\">
              by <a href=\"index.php\">Start Bootstrap</a>
          </p>
          <p><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2013 at 10:00 PM</p>
          <hr>
          <a href=\"blog-post.html\">
              <img class=\"img-responsive img-hover\" src=\"http://placehold.it/900x300\" alt=\"\">
          </a>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
          <a class=\"btn btn-primary\" href=\"#\">Read More <i class=\"fa fa-angle-right\"></i></a>

          <hr>

          <!-- Second Blog Post -->
          <h2>
              <a href=\"#\">Blog Post Title</a>
          </h2>
          <p class=\"lead\">
              by <a href=\"index.php\">Start Bootstrap</a>
          </p>
          <p><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2013 at 10:45 PM</p>
          <hr>
          <a href=\"blog-post.html\">
              <img class=\"img-responsive img-hover\" src=\"http://placehold.it/900x300\" alt=\"\">
          </a>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
          <a class=\"btn btn-primary\" href=\"#\">Read More <i class=\"fa fa-angle-right\"></i></a>

          <hr>

          <!-- Third Blog Post -->
          <h2>
              <a href=\"#\">Blog Post Title</a>
          </h2>
          <p class=\"lead\">
              by <a href=\"index.php\">Start Bootstrap</a>
          </p>
          <p><i class=\"fa fa-clock-o\"></i> Posted on August 28, 2013 at 10:45 PM</p>
          <hr>
          <a href=\"blog-post.html\">
              <img class=\"img-responsive img-hover\" src=\"http://placehold.it/900x300\" alt=\"\">
          </a>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
          <a class=\"btn btn-primary\" href=\"#\">Read More <i class=\"fa fa-angle-right\"></i></a>

          <hr>

          <!-- Pager -->
          <ul class=\"pager\">
              <li class=\"previous\">
                <a href=\"#\">&larr; Older</a>
            </li>
            <li class=\"next\">
                <a href=\"#\">Newer &rarr;</a>
            </li>
        </ul>

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class=\"col-md-4\">
        <!-- Blog Search Well -->
        <div class=\"well\">
          <h4>Blog Search</h4>
          <div class=\"input-group\">
            <input type=\"text\" class=\"form-control\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-search\"></i></button>
          </span>
      </div>
      <!-- /.input-group -->
  </div>

  <!-- Blog Categories Well -->
  <div class=\"well\">
      <h4>Blog Categories</h4>
      <div class=\"row\">
        <div class=\"col-lg-6\">
          <ul class=\"list-unstyled\">
            <li><a href=\"#\">Category Name</a>
            </li>
            <li><a href=\"#\">Category Name</a>
            </li>
            <li><a href=\"#\">Category Name</a>
            </li>
            <li><a href=\"#\">Category Name</a>
            </li>
        </ul>
    </div>
    <!-- /.col-lg-6 -->
    <div class=\"col-lg-6\">
      <ul class=\"list-unstyled\">
        <li><a href=\"#\">Category Name</a>
        </li>
        <li><a href=\"#\">Category Name</a>
        </li>
        <li><a href=\"#\">Category Name</a>
        </li>
        <li><a href=\"#\">Category Name</a>
        </li>
    </ul>
</div>
<!-- /.col-lg-6 -->
</div>
<!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class=\"well\">
  <h4>Side Widget Well</h4>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>

</div>

</div>
<!-- /.row -->
</div>
<!-- /.container -->

{% endblock %}", "DUDEEGOPlatformBundle:front:orientation.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/orientation.html.twig");
    }
}
