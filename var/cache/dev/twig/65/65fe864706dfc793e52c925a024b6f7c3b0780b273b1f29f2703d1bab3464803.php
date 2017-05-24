<?php

/* @DUDEEGOPlatform/front/blog.html.twig */
class __TwigTemplate_1b77f77f9da2adfd104d273351a494db2418d7ef877cb1a91d32a231e24da9cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "@DUDEEGOPlatform/front/blog.html.twig", 3);
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
        $__internal_ee4810ea2bdd05afee1c5c1c5f17b62e4e2525aea8820a79546cb74d219bed0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4810ea2bdd05afee1c5c1c5f17b62e4e2525aea8820a79546cb74d219bed0c->enter($__internal_ee4810ea2bdd05afee1c5c1c5f17b62e4e2525aea8820a79546cb74d219bed0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/blog.html.twig"));

        $__internal_aba9037f7c5161ac28cd870eae6390db2f96bc0c2c9f4eec9391672c9d2936aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aba9037f7c5161ac28cd870eae6390db2f96bc0c2c9f4eec9391672c9d2936aa->enter($__internal_aba9037f7c5161ac28cd870eae6390db2f96bc0c2c9f4eec9391672c9d2936aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee4810ea2bdd05afee1c5c1c5f17b62e4e2525aea8820a79546cb74d219bed0c->leave($__internal_ee4810ea2bdd05afee1c5c1c5f17b62e4e2525aea8820a79546cb74d219bed0c_prof);

        
        $__internal_aba9037f7c5161ac28cd870eae6390db2f96bc0c2c9f4eec9391672c9d2936aa->leave($__internal_aba9037f7c5161ac28cd870eae6390db2f96bc0c2c9f4eec9391672c9d2936aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b0ee93f0470ca28aa7fe339b0a9e4c610942710022b86f4f7d5a026f2291033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b0ee93f0470ca28aa7fe339b0a9e4c610942710022b86f4f7d5a026f2291033->enter($__internal_5b0ee93f0470ca28aa7fe339b0a9e4c610942710022b86f4f7d5a026f2291033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cff155075b8722850cf1c80b27b83a4ab637749ae496b590790cb935c0ede343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff155075b8722850cf1c80b27b83a4ab637749ae496b590790cb935c0ede343->enter($__internal_cff155075b8722850cf1c80b27b83a4ab637749ae496b590790cb935c0ede343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_cff155075b8722850cf1c80b27b83a4ab637749ae496b590790cb935c0ede343->leave($__internal_cff155075b8722850cf1c80b27b83a4ab637749ae496b590790cb935c0ede343_prof);

        
        $__internal_5b0ee93f0470ca28aa7fe339b0a9e4c610942710022b86f4f7d5a026f2291033->leave($__internal_5b0ee93f0470ca28aa7fe339b0a9e4c610942710022b86f4f7d5a026f2291033_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_c0983b97faa75ccf86e9c20179917cba293ae2508af8aa175beae8edad5beba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0983b97faa75ccf86e9c20179917cba293ae2508af8aa175beae8edad5beba1->enter($__internal_c0983b97faa75ccf86e9c20179917cba293ae2508af8aa175beae8edad5beba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_51bbad70717d814156138610b0228ae941e0e08316a23652509dbb6b9732dbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bbad70717d814156138610b0228ae941e0e08316a23652509dbb6b9732dbae->enter($__internal_51bbad70717d814156138610b0228ae941e0e08316a23652509dbb6b9732dbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        // line 10
        echo "  <!-- Page Content -->
  <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Blog Home One
          <small>Subheading</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"index.html\">Home</a>
          </li>
          <li class=\"active\">Blog Home One</li>
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
        
        $__internal_51bbad70717d814156138610b0228ae941e0e08316a23652509dbb6b9732dbae->leave($__internal_51bbad70717d814156138610b0228ae941e0e08316a23652509dbb6b9732dbae_prof);

        
        $__internal_c0983b97faa75ccf86e9c20179917cba293ae2508af8aa175beae8edad5beba1->leave($__internal_c0983b97faa75ccf86e9c20179917cba293ae2508af8aa175beae8edad5beba1_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/front/blog.html.twig";
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
        return new Twig_Source("{# src/DUDEEGO/PlatformBundle/Resources/views/Advert/blog.html.twig #}

{% extends \"DUDEEGOPlatformBundle::layout.html.twig\" %}

{% block title %}
  Blog - {{ parent() }}
{% endblock %}

{% block FrontContent %}
  <!-- Page Content -->
  <div class=\"container\">

    <!-- Page Heading/Breadcrumbs -->
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <h1 class=\"page-header\">Blog Home One
          <small>Subheading</small>
        </h1>
        <ol class=\"breadcrumb\">
          <li><a href=\"index.html\">Home</a>
          </li>
          <li class=\"active\">Blog Home One</li>
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
{% endblock %}", "@DUDEEGOPlatform/front/blog.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\blog.html.twig");
    }
}
