<?php

/* DUDEEGOPlatformBundle:front:orientation.html.twig */
class __TwigTemplate_4e75890c81676659882edc2090b4760b6cdbbe611a46c68dbfc058b24fed6312 extends Twig_Template
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
        $__internal_b2b811c2442e9bf5b61eafa03196d63cce11ef742436c398f957599b08dc6fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b811c2442e9bf5b61eafa03196d63cce11ef742436c398f957599b08dc6fca->enter($__internal_b2b811c2442e9bf5b61eafa03196d63cce11ef742436c398f957599b08dc6fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:orientation.html.twig"));

        $__internal_741b5fbc1a2a3748f22b8be0bcce55b7891d24005a00ad1e33b0f74f23b556cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741b5fbc1a2a3748f22b8be0bcce55b7891d24005a00ad1e33b0f74f23b556cd->enter($__internal_741b5fbc1a2a3748f22b8be0bcce55b7891d24005a00ad1e33b0f74f23b556cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:orientation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b811c2442e9bf5b61eafa03196d63cce11ef742436c398f957599b08dc6fca->leave($__internal_b2b811c2442e9bf5b61eafa03196d63cce11ef742436c398f957599b08dc6fca_prof);

        
        $__internal_741b5fbc1a2a3748f22b8be0bcce55b7891d24005a00ad1e33b0f74f23b556cd->leave($__internal_741b5fbc1a2a3748f22b8be0bcce55b7891d24005a00ad1e33b0f74f23b556cd_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_95f4154b0c4fb4dd5687057eacfd2f4b8a900d26ef7f7b34882e2234482e1934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f4154b0c4fb4dd5687057eacfd2f4b8a900d26ef7f7b34882e2234482e1934->enter($__internal_95f4154b0c4fb4dd5687057eacfd2f4b8a900d26ef7f7b34882e2234482e1934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe38e1a29cacf19b9e0d45a5d4d1710e66c947cdb4b6052fa794b15716536d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe38e1a29cacf19b9e0d45a5d4d1710e66c947cdb4b6052fa794b15716536d70->enter($__internal_fe38e1a29cacf19b9e0d45a5d4d1710e66c947cdb4b6052fa794b15716536d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Orientation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fe38e1a29cacf19b9e0d45a5d4d1710e66c947cdb4b6052fa794b15716536d70->leave($__internal_fe38e1a29cacf19b9e0d45a5d4d1710e66c947cdb4b6052fa794b15716536d70_prof);

        
        $__internal_95f4154b0c4fb4dd5687057eacfd2f4b8a900d26ef7f7b34882e2234482e1934->leave($__internal_95f4154b0c4fb4dd5687057eacfd2f4b8a900d26ef7f7b34882e2234482e1934_prof);

    }

    // line 8
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_2255833c5fdd8ac5d63e97a84cd45c519b75ea469ba1cdeaa39300efdb17975d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2255833c5fdd8ac5d63e97a84cd45c519b75ea469ba1cdeaa39300efdb17975d->enter($__internal_2255833c5fdd8ac5d63e97a84cd45c519b75ea469ba1cdeaa39300efdb17975d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_764b9c43d60cbb38f8f2d385d9c70d90ea5c433fb9731af8b5f151b748a94534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764b9c43d60cbb38f8f2d385d9c70d90ea5c433fb9731af8b5f151b748a94534->enter($__internal_764b9c43d60cbb38f8f2d385d9c70d90ea5c433fb9731af8b5f151b748a94534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

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
        
        $__internal_764b9c43d60cbb38f8f2d385d9c70d90ea5c433fb9731af8b5f151b748a94534->leave($__internal_764b9c43d60cbb38f8f2d385d9c70d90ea5c433fb9731af8b5f151b748a94534_prof);

        
        $__internal_2255833c5fdd8ac5d63e97a84cd45c519b75ea469ba1cdeaa39300efdb17975d->leave($__internal_2255833c5fdd8ac5d63e97a84cd45c519b75ea469ba1cdeaa39300efdb17975d_prof);

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

{% endblock %}", "DUDEEGOPlatformBundle:front:orientation.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\orientation.html.twig");
    }
}
