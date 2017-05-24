<?php

/* DUDEEGOPlatformBundle:front:blog.html.twig */
class __TwigTemplate_ee52468cac2b3e6e3752810fc9b8753e2524808e8accf36642650a483cf4e450 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:blog.html.twig", 3);
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
        $__internal_cfbe0f9e769f19648aec96be603944e825677a98866bda65b9fedbe89a80dd62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfbe0f9e769f19648aec96be603944e825677a98866bda65b9fedbe89a80dd62->enter($__internal_cfbe0f9e769f19648aec96be603944e825677a98866bda65b9fedbe89a80dd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:blog.html.twig"));

        $__internal_c588daf5ad39f87ae3c4205f5d9a17fd18d2f6fac3a5f84e5857e1ca704041f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c588daf5ad39f87ae3c4205f5d9a17fd18d2f6fac3a5f84e5857e1ca704041f5->enter($__internal_c588daf5ad39f87ae3c4205f5d9a17fd18d2f6fac3a5f84e5857e1ca704041f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfbe0f9e769f19648aec96be603944e825677a98866bda65b9fedbe89a80dd62->leave($__internal_cfbe0f9e769f19648aec96be603944e825677a98866bda65b9fedbe89a80dd62_prof);

        
        $__internal_c588daf5ad39f87ae3c4205f5d9a17fd18d2f6fac3a5f84e5857e1ca704041f5->leave($__internal_c588daf5ad39f87ae3c4205f5d9a17fd18d2f6fac3a5f84e5857e1ca704041f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd98f2e6bba574b90a46b5bc5d7d6f2b978bccb816a9c3224b2c02658696dede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd98f2e6bba574b90a46b5bc5d7d6f2b978bccb816a9c3224b2c02658696dede->enter($__internal_cd98f2e6bba574b90a46b5bc5d7d6f2b978bccb816a9c3224b2c02658696dede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6af5e2d4dde1771d67c2e2901bda1cabfc38201b6d125d5ddef4ab196a139cdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6af5e2d4dde1771d67c2e2901bda1cabfc38201b6d125d5ddef4ab196a139cdf->enter($__internal_6af5e2d4dde1771d67c2e2901bda1cabfc38201b6d125d5ddef4ab196a139cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6af5e2d4dde1771d67c2e2901bda1cabfc38201b6d125d5ddef4ab196a139cdf->leave($__internal_6af5e2d4dde1771d67c2e2901bda1cabfc38201b6d125d5ddef4ab196a139cdf_prof);

        
        $__internal_cd98f2e6bba574b90a46b5bc5d7d6f2b978bccb816a9c3224b2c02658696dede->leave($__internal_cd98f2e6bba574b90a46b5bc5d7d6f2b978bccb816a9c3224b2c02658696dede_prof);

    }

    // line 9
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_eb9be26b6f4a4e582f6ae5b849fa8627a5fdda7b088b7f411a2669b492c3ac75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9be26b6f4a4e582f6ae5b849fa8627a5fdda7b088b7f411a2669b492c3ac75->enter($__internal_eb9be26b6f4a4e582f6ae5b849fa8627a5fdda7b088b7f411a2669b492c3ac75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_92b1a2376400a33034ab8bfc18801941c81a972110bc2ade284042fb6a0e5ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b1a2376400a33034ab8bfc18801941c81a972110bc2ade284042fb6a0e5ec2->enter($__internal_92b1a2376400a33034ab8bfc18801941c81a972110bc2ade284042fb6a0e5ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

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
        
        $__internal_92b1a2376400a33034ab8bfc18801941c81a972110bc2ade284042fb6a0e5ec2->leave($__internal_92b1a2376400a33034ab8bfc18801941c81a972110bc2ade284042fb6a0e5ec2_prof);

        
        $__internal_eb9be26b6f4a4e582f6ae5b849fa8627a5fdda7b088b7f411a2669b492c3ac75->leave($__internal_eb9be26b6f4a4e582f6ae5b849fa8627a5fdda7b088b7f411a2669b492c3ac75_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:blog.html.twig";
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
{% endblock %}", "DUDEEGOPlatformBundle:front:blog.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/blog.html.twig");
    }
}
