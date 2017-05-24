<?php

/* :frontend:head.html.twig */
class __TwigTemplate_73d567ced3426a1ec8524b4db8965b65da459c0a3ed801bcc6d44aa416c2f396 extends Twig_Template
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
        $__internal_f395c0cf8d943b10f1016c704d154017e978c22ac592a32fd21306a655977d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f395c0cf8d943b10f1016c704d154017e978c22ac592a32fd21306a655977d0f->enter($__internal_f395c0cf8d943b10f1016c704d154017e978c22ac592a32fd21306a655977d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":frontend:head.html.twig"));

        $__internal_e5a21fe3480723baa55182050a0cf2b56d26a5ff54aba6972f482eff53591ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a21fe3480723baa55182050a0cf2b56d26a5ff54aba6972f482eff53591ad9->enter($__internal_e5a21fe3480723baa55182050a0cf2b56d26a5ff54aba6972f482eff53591ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":frontend:head.html.twig"));

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
        
        $__internal_f395c0cf8d943b10f1016c704d154017e978c22ac592a32fd21306a655977d0f->leave($__internal_f395c0cf8d943b10f1016c704d154017e978c22ac592a32fd21306a655977d0f_prof);

        
        $__internal_e5a21fe3480723baa55182050a0cf2b56d26a5ff54aba6972f482eff53591ad9->leave($__internal_e5a21fe3480723baa55182050a0cf2b56d26a5ff54aba6972f482eff53591ad9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_c4568845934c4155763adb772b5fa8c157937d5c124178ff887ec97897f13036 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4568845934c4155763adb772b5fa8c157937d5c124178ff887ec97897f13036->enter($__internal_c4568845934c4155763adb772b5fa8c157937d5c124178ff887ec97897f13036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_945a82d93808f6d922846c8b6f788562dd07e2391b0066a50c8e49a74c389a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_945a82d93808f6d922846c8b6f788562dd07e2391b0066a50c8e49a74c389a84->enter($__internal_945a82d93808f6d922846c8b6f788562dd07e2391b0066a50c8e49a74c389a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "    DUDEE'GO
  ";
        
        $__internal_945a82d93808f6d922846c8b6f788562dd07e2391b0066a50c8e49a74c389a84->leave($__internal_945a82d93808f6d922846c8b6f788562dd07e2391b0066a50c8e49a74c389a84_prof);

        
        $__internal_c4568845934c4155763adb772b5fa8c157937d5c124178ff887ec97897f13036->leave($__internal_c4568845934c4155763adb772b5fa8c157937d5c124178ff887ec97897f13036_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a80abeb23601ed1133482c43b7013a030b5113ee00dc699563393d9e89b86b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a80abeb23601ed1133482c43b7013a030b5113ee00dc699563393d9e89b86b71->enter($__internal_a80abeb23601ed1133482c43b7013a030b5113ee00dc699563393d9e89b86b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ffc4d2f1e2a3595d9018a6a02162f60c72e64e2a13a6edaef645658ef2ce6fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc4d2f1e2a3595d9018a6a02162f60c72e64e2a13a6edaef645658ef2ce6fb7->enter($__internal_ffc4d2f1e2a3595d9018a6a02162f60c72e64e2a13a6edaef645658ef2ce6fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ffc4d2f1e2a3595d9018a6a02162f60c72e64e2a13a6edaef645658ef2ce6fb7->leave($__internal_ffc4d2f1e2a3595d9018a6a02162f60c72e64e2a13a6edaef645658ef2ce6fb7_prof);

        
        $__internal_a80abeb23601ed1133482c43b7013a030b5113ee00dc699563393d9e89b86b71->leave($__internal_a80abeb23601ed1133482c43b7013a030b5113ee00dc699563393d9e89b86b71_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8b89d162b7246f696aa6a1190606b9b2198357ecbec218aa043151cd37ca057e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b89d162b7246f696aa6a1190606b9b2198357ecbec218aa043151cd37ca057e->enter($__internal_8b89d162b7246f696aa6a1190606b9b2198357ecbec218aa043151cd37ca057e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9febe5edc6e8c8c7a90dea5213a0d70e6639096367d8203a079e25af47911c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9febe5edc6e8c8c7a90dea5213a0d70e6639096367d8203a079e25af47911c13->enter($__internal_9febe5edc6e8c8c7a90dea5213a0d70e6639096367d8203a079e25af47911c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_9febe5edc6e8c8c7a90dea5213a0d70e6639096367d8203a079e25af47911c13->leave($__internal_9febe5edc6e8c8c7a90dea5213a0d70e6639096367d8203a079e25af47911c13_prof);

        
        $__internal_8b89d162b7246f696aa6a1190606b9b2198357ecbec218aa043151cd37ca057e->leave($__internal_8b89d162b7246f696aa6a1190606b9b2198357ecbec218aa043151cd37ca057e_prof);

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
{% endblock %}", ":frontend:head.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources\\views/frontend/head.html.twig");
    }
}
