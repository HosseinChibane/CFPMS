<?php

/* DUDEEGOPlatformBundle:front:about.html.twig */
class __TwigTemplate_5c3ff1fcca6d999a7a6995c0780ce7665fedb03432d7e7f19755ac1638a55bc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("DUDEEGOPlatformBundle::layout.html.twig", "DUDEEGOPlatformBundle:front:about.html.twig", 2);
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
        $__internal_3d3c9a75c0ef00c20467d4d8e0c4a8c863a5e73e8c51bbb988e1a12770dd6bce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d3c9a75c0ef00c20467d4d8e0c4a8c863a5e73e8c51bbb988e1a12770dd6bce->enter($__internal_3d3c9a75c0ef00c20467d4d8e0c4a8c863a5e73e8c51bbb988e1a12770dd6bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:about.html.twig"));

        $__internal_f5018c506920ef8d8b0a28a177a0cd3f8aed0fc0cc01e6977224a5a0a24bd0b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5018c506920ef8d8b0a28a177a0cd3f8aed0fc0cc01e6977224a5a0a24bd0b6->enter($__internal_f5018c506920ef8d8b0a28a177a0cd3f8aed0fc0cc01e6977224a5a0a24bd0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DUDEEGOPlatformBundle:front:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d3c9a75c0ef00c20467d4d8e0c4a8c863a5e73e8c51bbb988e1a12770dd6bce->leave($__internal_3d3c9a75c0ef00c20467d4d8e0c4a8c863a5e73e8c51bbb988e1a12770dd6bce_prof);

        
        $__internal_f5018c506920ef8d8b0a28a177a0cd3f8aed0fc0cc01e6977224a5a0a24bd0b6->leave($__internal_f5018c506920ef8d8b0a28a177a0cd3f8aed0fc0cc01e6977224a5a0a24bd0b6_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_23dc779b5f3d9887aa86953dd8434ac8f802e9c896616b3c8a17156950118d07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23dc779b5f3d9887aa86953dd8434ac8f802e9c896616b3c8a17156950118d07->enter($__internal_23dc779b5f3d9887aa86953dd8434ac8f802e9c896616b3c8a17156950118d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_05ca96c150a5abfd8ed637795060f449a2cfb9cc53af8435e7e91b50fbd294ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ca96c150a5abfd8ed637795060f449a2cfb9cc53af8435e7e91b50fbd294ab->enter($__internal_05ca96c150a5abfd8ed637795060f449a2cfb9cc53af8435e7e91b50fbd294ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    Blog - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_05ca96c150a5abfd8ed637795060f449a2cfb9cc53af8435e7e91b50fbd294ab->leave($__internal_05ca96c150a5abfd8ed637795060f449a2cfb9cc53af8435e7e91b50fbd294ab_prof);

        
        $__internal_23dc779b5f3d9887aa86953dd8434ac8f802e9c896616b3c8a17156950118d07->leave($__internal_23dc779b5f3d9887aa86953dd8434ac8f802e9c896616b3c8a17156950118d07_prof);

    }

    // line 8
    public function block_FrontContent($context, array $blocks = array())
    {
        $__internal_452b4055d6536c5284687b2dd1c0aa90e676c2136abcb5106e810d477d6b656a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452b4055d6536c5284687b2dd1c0aa90e676c2136abcb5106e810d477d6b656a->enter($__internal_452b4055d6536c5284687b2dd1c0aa90e676c2136abcb5106e810d477d6b656a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

        $__internal_81539e8486269bb75db5f456b54464f103f3b3abcd507bf1e1f44c10b9098b9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81539e8486269bb75db5f456b54464f103f3b3abcd507bf1e1f44c10b9098b9d->enter($__internal_81539e8486269bb75db5f456b54464f103f3b3abcd507bf1e1f44c10b9098b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontContent"));

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
        
        $__internal_81539e8486269bb75db5f456b54464f103f3b3abcd507bf1e1f44c10b9098b9d->leave($__internal_81539e8486269bb75db5f456b54464f103f3b3abcd507bf1e1f44c10b9098b9d_prof);

        
        $__internal_452b4055d6536c5284687b2dd1c0aa90e676c2136abcb5106e810d477d6b656a->leave($__internal_452b4055d6536c5284687b2dd1c0aa90e676c2136abcb5106e810d477d6b656a_prof);

    }

    public function getTemplateName()
    {
        return "DUDEEGOPlatformBundle:front:about.html.twig";
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

{% endblock %}", "DUDEEGOPlatformBundle:front:about.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\src\\DUDEEGO\\PlatformBundle/Resources/views/front/about.html.twig");
    }
}
