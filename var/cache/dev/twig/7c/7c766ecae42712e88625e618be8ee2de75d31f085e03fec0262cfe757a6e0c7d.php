<?php

/* @DUDEEGOPlatform/front/about.html.twig */
class __TwigTemplate_7926c702549cea4431a440e9efb60a021b97d0e3d163046b03463a4be4cb9bc5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "@DUDEEGOPlatform/front/about.html.twig", 2);
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
        $__internal_eeb3a255d236c0a502092fa2992865f9c0327b44a3fbe902113f36be286edc6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb3a255d236c0a502092fa2992865f9c0327b44a3fbe902113f36be286edc6e->enter($__internal_eeb3a255d236c0a502092fa2992865f9c0327b44a3fbe902113f36be286edc6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/about.html.twig"));

        $__internal_4c0b176ca66cea00e0673da5c688e267b52fab40d9cbb95aef8e491fdc918192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0b176ca66cea00e0673da5c688e267b52fab40d9cbb95aef8e491fdc918192->enter($__internal_4c0b176ca66cea00e0673da5c688e267b52fab40d9cbb95aef8e491fdc918192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DUDEEGOPlatform/front/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeb3a255d236c0a502092fa2992865f9c0327b44a3fbe902113f36be286edc6e->leave($__internal_eeb3a255d236c0a502092fa2992865f9c0327b44a3fbe902113f36be286edc6e_prof);

        
        $__internal_4c0b176ca66cea00e0673da5c688e267b52fab40d9cbb95aef8e491fdc918192->leave($__internal_4c0b176ca66cea00e0673da5c688e267b52fab40d9cbb95aef8e491fdc918192_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd11467715026f6352c0cfe88cc306fbc9813b846b125227ee14958759df0d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd11467715026f6352c0cfe88cc306fbc9813b846b125227ee14958759df0d20->enter($__internal_cd11467715026f6352c0cfe88cc306fbc9813b846b125227ee14958759df0d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91f6554f9a5567cb476c2f969817b6ae39bb00d7167516675dd780481d1fd907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f6554f9a5567cb476c2f969817b6ae39bb00d7167516675dd780481d1fd907->enter($__internal_91f6554f9a5567cb476c2f969817b6ae39bb00d7167516675dd780481d1fd907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_91f6554f9a5567cb476c2f969817b6ae39bb00d7167516675dd780481d1fd907->leave($__internal_91f6554f9a5567cb476c2f969817b6ae39bb00d7167516675dd780481d1fd907_prof);

        
        $__internal_cd11467715026f6352c0cfe88cc306fbc9813b846b125227ee14958759df0d20->leave($__internal_cd11467715026f6352c0cfe88cc306fbc9813b846b125227ee14958759df0d20_prof);

    }

    // line 8
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_c14cb6d144ba1d55044f8bdf0a6e9aa85c5fb88a729c36cacfd119969e033b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14cb6d144ba1d55044f8bdf0a6e9aa85c5fb88a729c36cacfd119969e033b92->enter($__internal_c14cb6d144ba1d55044f8bdf0a6e9aa85c5fb88a729c36cacfd119969e033b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_3aebb5646458d832b24cbc1f609c8c95d8f80e4f9ff7c9c8585a4eab7e4efab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aebb5646458d832b24cbc1f609c8c95d8f80e4f9ff7c9c8585a4eab7e4efab8->enter($__internal_3aebb5646458d832b24cbc1f609c8c95d8f80e4f9ff7c9c8585a4eab7e4efab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        // line 9
        echo "    <div class=\"container\">
        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Dudee'Go !
                    <small>avec un seul dossier, postulez partout où vous le souhaitez.</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li class=\"active\">Accueil</li>
                    <li></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <img class=\"img-responsive\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/images/site/page-service.jpg"), "html", null, true);
        echo "\" alt=\"\" height=\"300\" width=\"1200\">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Nos Services</h2>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-tree fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">
                        <h4>Logement</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_voirLogement");
        echo "\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-car fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">
                        <h4>Job</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_voirJob");
        echo "\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-support fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">
                        <h4>Stage</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_voirStage");
        echo "\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-database fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">
                        <h4>Langue</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dudeego_platform_voirLangue");
        echo "\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>     

        <!-- Team Members -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Notre Equipe</h2>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Nos Partenaires</h2>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
        </div>
        <!-- /.row -->

    </div>

";
        
        $__internal_3aebb5646458d832b24cbc1f609c8c95d8f80e4f9ff7c9c8585a4eab7e4efab8->leave($__internal_3aebb5646458d832b24cbc1f609c8c95d8f80e4f9ff7c9c8585a4eab7e4efab8_prof);

        
        $__internal_c14cb6d144ba1d55044f8bdf0a6e9aa85c5fb88a729c36cacfd119969e033b92->leave($__internal_c14cb6d144ba1d55044f8bdf0a6e9aa85c5fb88a729c36cacfd119969e033b92_prof);

    }

    public function getTemplateName()
    {
        return "@DUDEEGOPlatform/front/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 94,  153 => 79,  135 => 64,  117 => 49,  92 => 27,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
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
    Blog - {{ parent() }}
{% endblock %}

{% block FrontContent %}
    <div class=\"container\">
        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Dudee'Go !
                    <small>avec un seul dossier, postulez partout où vous le souhaitez.</small>
                </h1>
                <ol class=\"breadcrumb\">
                    <li class=\"active\">Accueil</li>
                    <li></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Image Header -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <img class=\"img-responsive\" src=\"{{ asset('bundles/dudeegoplatform/images/site/page-service.jpg') }}\" alt=\"\" height=\"300\" width=\"1200\">
            </div>
        </div>
        <!-- /.row -->

        <!-- Service Panels -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Nos Services</h2>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-tree fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">
                        <h4>Logement</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href=\"{{ path('dudeego_platform_voirLogement') }}\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-car fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">
                        <h4>Job</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href=\"{{ path('dudeego_platform_voirJob') }}\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-support fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">
                        <h4>Stage</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href=\"{{ path('dudeego_platform_voirStage') }}\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-3 col-sm-6\">
                <div class=\"panel panel-default text-center\">
                    <div class=\"panel-heading\">
                        <span class=\"fa-stack fa-5x\">
                            <i class=\"fa fa-circle fa-stack-2x text-primary\"></i>
                            <i class=\"fa fa-database fa-stack-1x fa-inverse\"></i>
                        </span>
                    </div>
                    <div class=\"panel-body\">
                        <h4>Langue</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <a href=\"{{ path('dudeego_platform_voirLangue') }}\" class=\"btn btn-primary\">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>     

        <!-- Team Members -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Notre Equipe</h2>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-center\">
                <div class=\"thumbnail\">
                    <img class=\"img-responsive\" src=\"http://placehold.it/750x450\" alt=\"\">
                    <div class=\"caption\">
                        <h3>John Smith<br>
                            <small>Job Title</small>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <ul class=\"list-inline\">
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-linkedin-square\"></i></a>
                            </li>
                            <li><a href=\"#\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Our Customers -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">Nos Partenaires</h2>
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
            <div class=\"col-md-2 col-sm-4 col-xs-6\">
                <img class=\"img-responsive customer-img\" src=\"http://placehold.it/500x300\" alt=\"\">
            </div>
        </div>
        <!-- /.row -->

    </div>

{% endblock %}", "@DUDEEGOPlatform/front/about.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle\\Resources\\views\\front\\about.html.twig");
    }
}
