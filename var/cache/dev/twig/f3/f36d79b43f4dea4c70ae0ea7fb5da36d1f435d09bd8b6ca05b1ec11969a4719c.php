<?php

/* :frontend:head.html.twig */
class __TwigTemplate_170df8195464b21d78f49465ae37581d798a1b71963739301d624520132e1617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0c18b8865e1e1cb1c2471aee911cfa67c227c0f178a9e0123bb84e56c300921 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c18b8865e1e1cb1c2471aee911cfa67c227c0f178a9e0123bb84e56c300921->enter($__internal_e0c18b8865e1e1cb1c2471aee911cfa67c227c0f178a9e0123bb84e56c300921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":frontend:head.html.twig"));

        $__internal_d72f8f5570dd95d7291cbfd443f1af0f4270214c2c59e79fe3969a2cb5679166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72f8f5570dd95d7291cbfd443f1af0f4270214c2c59e79fe3969a2cb5679166->enter($__internal_d72f8f5570dd95d7291cbfd443f1af0f4270214c2c59e79fe3969a2cb5679166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":frontend:head.html.twig"));

        // line 1
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<title>
  ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "</title>

";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_e0c18b8865e1e1cb1c2471aee911cfa67c227c0f178a9e0123bb84e56c300921->leave($__internal_e0c18b8865e1e1cb1c2471aee911cfa67c227c0f178a9e0123bb84e56c300921_prof);

        
        $__internal_d72f8f5570dd95d7291cbfd443f1af0f4270214c2c59e79fe3969a2cb5679166->leave($__internal_d72f8f5570dd95d7291cbfd443f1af0f4270214c2c59e79fe3969a2cb5679166_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_235a3fc4752658af08a22c78262dac030cba480ea6a0fbbcac67e3fdd5b1f654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_235a3fc4752658af08a22c78262dac030cba480ea6a0fbbcac67e3fdd5b1f654->enter($__internal_235a3fc4752658af08a22c78262dac030cba480ea6a0fbbcac67e3fdd5b1f654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8bd3a86e990d1b22e5505064d0fdd81c20c935c8868c59b9e6617e3c6cb343cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd3a86e990d1b22e5505064d0fdd81c20c935c8868c59b9e6617e3c6cb343cf->enter($__internal_8bd3a86e990d1b22e5505064d0fdd81c20c935c8868c59b9e6617e3c6cb343cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    DUDEE'GO
  ";
        
        $__internal_8bd3a86e990d1b22e5505064d0fdd81c20c935c8868c59b9e6617e3c6cb343cf->leave($__internal_8bd3a86e990d1b22e5505064d0fdd81c20c935c8868c59b9e6617e3c6cb343cf_prof);

        
        $__internal_235a3fc4752658af08a22c78262dac030cba480ea6a0fbbcac67e3fdd5b1f654->leave($__internal_235a3fc4752658af08a22c78262dac030cba480ea6a0fbbcac67e3fdd5b1f654_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f3d79acf8135fec239a82491830694b8ad015b0f3093b4e44aab424f585e0c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3d79acf8135fec239a82491830694b8ad015b0f3093b4e44aab424f585e0c2->enter($__internal_6f3d79acf8135fec239a82491830694b8ad015b0f3093b4e44aab424f585e0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_87c9f12387241dff266381f603e50c3320bbb4c74c6d09dd8ce3b062047f83cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c9f12387241dff266381f603e50c3320bbb4c74c6d09dd8ce3b062047f83cd->enter($__internal_87c9f12387241dff266381f603e50c3320bbb4c74c6d09dd8ce3b062047f83cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "      
  <!-- Bootstrap Core CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/css/bootstrap.min.css"), "html", null, true);
        echo "\">
  <!-- Custom CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/css/modern-business.css"), "html", null, true);
        echo "\">
  <!-- Custom Fonts -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <!-- DataTable -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
";
        
        $__internal_87c9f12387241dff266381f603e50c3320bbb4c74c6d09dd8ce3b062047f83cd->leave($__internal_87c9f12387241dff266381f603e50c3320bbb4c74c6d09dd8ce3b062047f83cd_prof);

        
        $__internal_6f3d79acf8135fec239a82491830694b8ad015b0f3093b4e44aab424f585e0c2->leave($__internal_6f3d79acf8135fec239a82491830694b8ad015b0f3093b4e44aab424f585e0c2_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_43871cea28ae7b8ad545f929b93449fad473978a647d57c7e099cd8d1990ffb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43871cea28ae7b8ad545f929b93449fad473978a647d57c7e099cd8d1990ffb2->enter($__internal_43871cea28ae7b8ad545f929b93449fad473978a647d57c7e099cd8d1990ffb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_512c700bb9b46ec37aee3317020906eb9772bdbc7372ff5ac36c34d2b6c37f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_512c700bb9b46ec37aee3317020906eb9772bdbc7372ff5ac36c34d2b6c37f7d->enter($__internal_512c700bb9b46ec37aee3317020906eb9772bdbc7372ff5ac36c34d2b6c37f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "  <!-- Bootstrap -->
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <!-- jQuery -->
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/js/jquery.js"), "html", null, true);
        echo "\"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <!-- Script to Activate the Carousel -->
  <script>
    \$('.carousel').carousel({
interval: 5000 //changes the speed
})
  </script>
  <!-- DataTable -->
  <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
  <script type=\"text/javascript\"  src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js\"></script>
  <script type=\"text/javascript\"  src=\"https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js\"></script>

  ";
        // line 50
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/bootstrap-fileinput/css/fileinput.min.css"), "html", null, true);
        echo "\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
 This must be loaded before fileinput.min.js -->
 <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
 This must be loaded before fileinput.min.js -->
 <script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/bootstrap-fileinput/js/plugins/sortable.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
 This must be loaded before fileinput.min.js -->
 <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/bootstrap-fileinput/js/plugins/purify.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
 <!-- the main fileinput plugin file -->
 <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/bootstrap-fileinput/js/fileinput.min.js"), "html", null, true);
        echo "\"></script>
<!-- bootstrap.js below is needed if you wish to zoom and view file content 
 in a larger detailed modal dialog -->
<!-- optionally if you need a theme like font awesome theme you can include 
  it as mentioned below -->
  <script src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/bootstrap-fileinput/themes/fa/theme.js"), "html", null, true);
        echo "\"></script>
<!-- optionally if you need translation for your language then include 
  locale file as mentioned below -->
  <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dudeegoplatform/bootstrap-fileinput/js/locales/fr.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_512c700bb9b46ec37aee3317020906eb9772bdbc7372ff5ac36c34d2b6c37f7d->leave($__internal_512c700bb9b46ec37aee3317020906eb9772bdbc7372ff5ac36c34d2b6c37f7d_prof);

        
        $__internal_43871cea28ae7b8ad545f929b93449fad473978a647d57c7e099cd8d1990ffb2->leave($__internal_43871cea28ae7b8ad545f929b93449fad473978a647d57c7e099cd8d1990ffb2_prof);

    }

    public function getTemplateName()
    {
        return ":frontend:head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  200 => 70,  194 => 67,  186 => 62,  181 => 60,  175 => 57,  169 => 54,  161 => 50,  143 => 34,  138 => 32,  133 => 30,  130 => 29,  121 => 28,  104 => 20,  100 => 19,  95 => 17,  90 => 15,  78 => 13,  67 => 9,  58 => 8,  48 => 28,  45 => 27,  43 => 13,  39 => 11,  37 => 8,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"description\" content=\"\">
<meta name=\"author\" content=\"\">

<title>
  {% block title %}
    DUDEE'GO
  {% endblock %}
</title>

{% block stylesheets %}      
  <!-- Bootstrap Core CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/dudeegoplatform/css/bootstrap.min.css') }}\">
  <!-- Custom CSS -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/dudeegoplatform/css/modern-business.css') }}\">
  <!-- Custom Fonts -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/dudeegoplatform/font-awesome/css/font-awesome.min.css') }}\">
  <link href=\"{{ asset('bundles/dudeegoplatform/css/font-awesome.css') }}\" rel=\"stylesheet\">
  <!-- DataTable -->
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
{% endblock %}

{% block javascripts %}
  <!-- Bootstrap -->
  <script src=\"{{ asset('bundles/dudeegoplatform/js/bootstrap.min.js') }}\"></script>
  <!-- jQuery -->
  <script src=\"{{ asset('bundles/dudeegoplatform/js/jquery.js') }}\"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src=\"{{ asset('bundles/dudeegoplatform/js/bootstrap.min.js') }}\"></script>
  <!-- Script to Activate the Carousel -->
  <script>
    \$('.carousel').carousel({
interval: 5000 //changes the speed
})
  </script>
  <!-- DataTable -->
  <script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
  <script type=\"text/javascript\"  src=\"https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/fixedheader/3.1.2/js/dataTables.fixedHeader.min.js\"></script>
  <script type=\"text/javascript\"  src=\"https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js\"></script>
  <script type=\"text/javascript\" src=\"https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js\"></script>

  {# Bootstrap file input #}
  <link href=\"{{ asset('bundles/dudeegoplatform/bootstrap-fileinput/css/fileinput.min.css') }}\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />
  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
<!-- canvas-to-blob.min.js is only needed if you wish to resize images before upload.
 This must be loaded before fileinput.min.js -->
 <script src=\"{{ asset('bundles/dudeegoplatform/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js') }}\" type=\"text/javascript\"></script>
<!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview.
 This must be loaded before fileinput.min.js -->
 <script src=\"{{ asset('bundles/dudeegoplatform/bootstrap-fileinput/js/plugins/sortable.min.js') }}\" type=\"text/javascript\"></script>
<!-- purify.min.js is only needed if you wish to purify HTML content in your preview for HTML files.
 This must be loaded before fileinput.min.js -->
 <script src=\"{{ asset('bundles/dudeegoplatform/bootstrap-fileinput/js/plugins/purify.min.js') }}\" type=\"text/javascript\"></script>
 <!-- the main fileinput plugin file -->
 <script src=\"{{ asset('bundles/dudeegoplatform/bootstrap-fileinput/js/fileinput.min.js') }}\"></script>
<!-- bootstrap.js below is needed if you wish to zoom and view file content 
 in a larger detailed modal dialog -->
<!-- optionally if you need a theme like font awesome theme you can include 
  it as mentioned below -->
  <script src=\"{{ asset('bundles/dudeegoplatform/bootstrap-fileinput/themes/fa/theme.js') }}\"></script>
<!-- optionally if you need translation for your language then include 
  locale file as mentioned below -->
  <script src=\"{{ asset('bundles/dudeegoplatform/bootstrap-fileinput/js/locales/fr.js') }}\"></script>
{% endblock %}", ":frontend:head.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\views\\frontend\\head.html.twig");
    }
}
