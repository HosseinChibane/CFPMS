<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_b73867247a31406981f424224ef6a2f2920e5de7ce019351da08f6f85b94dfcf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56e0662a9f06f0082c93134ea7d60993be70c788d4f0a9ba43fa24d4b9be1f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e0662a9f06f0082c93134ea7d60993be70c788d4f0a9ba43fa24d4b9be1f99->enter($__internal_56e0662a9f06f0082c93134ea7d60993be70c788d4f0a9ba43fa24d4b9be1f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_01e9bc7d3cad78074368a7dbea0cd25d2bdf5fd1afa392f883a2c792a8610a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01e9bc7d3cad78074368a7dbea0cd25d2bdf5fd1afa392f883a2c792a8610a76->enter($__internal_01e9bc7d3cad78074368a7dbea0cd25d2bdf5fd1afa392f883a2c792a8610a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_56e0662a9f06f0082c93134ea7d60993be70c788d4f0a9ba43fa24d4b9be1f99->leave($__internal_56e0662a9f06f0082c93134ea7d60993be70c788d4f0a9ba43fa24d4b9be1f99_prof);

        
        $__internal_01e9bc7d3cad78074368a7dbea0cd25d2bdf5fd1afa392f883a2c792a8610a76->leave($__internal_01e9bc7d3cad78074368a7dbea0cd25d2bdf5fd1afa392f883a2c792a8610a76_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_442ac00098055185252cc8ca35d2b2dbff0c86e4b0399f9664014cf435586f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_442ac00098055185252cc8ca35d2b2dbff0c86e4b0399f9664014cf435586f56->enter($__internal_442ac00098055185252cc8ca35d2b2dbff0c86e4b0399f9664014cf435586f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_155a88ac7539632a1eadaabf181e7e30a089c883758338d4f5123e1a6ef9cc3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_155a88ac7539632a1eadaabf181e7e30a089c883758338d4f5123e1a6ef9cc3c->enter($__internal_155a88ac7539632a1eadaabf181e7e30a089c883758338d4f5123e1a6ef9cc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_155a88ac7539632a1eadaabf181e7e30a089c883758338d4f5123e1a6ef9cc3c->leave($__internal_155a88ac7539632a1eadaabf181e7e30a089c883758338d4f5123e1a6ef9cc3c_prof);

        
        $__internal_442ac00098055185252cc8ca35d2b2dbff0c86e4b0399f9664014cf435586f56->leave($__internal_442ac00098055185252cc8ca35d2b2dbff0c86e4b0399f9664014cf435586f56_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_5448625de95fd37d91827ac16edc3bec5c275fb19a667c457701bb7c5e615f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5448625de95fd37d91827ac16edc3bec5c275fb19a667c457701bb7c5e615f86->enter($__internal_5448625de95fd37d91827ac16edc3bec5c275fb19a667c457701bb7c5e615f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_9dd0ea08b24f67bd91f220300d71804599f02908181835eddc2776ae0fbdaebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dd0ea08b24f67bd91f220300d71804599f02908181835eddc2776ae0fbdaebc->enter($__internal_9dd0ea08b24f67bd91f220300d71804599f02908181835eddc2776ae0fbdaebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9dd0ea08b24f67bd91f220300d71804599f02908181835eddc2776ae0fbdaebc->leave($__internal_9dd0ea08b24f67bd91f220300d71804599f02908181835eddc2776ae0fbdaebc_prof);

        
        $__internal_5448625de95fd37d91827ac16edc3bec5c275fb19a667c457701bb7c5e615f86->leave($__internal_5448625de95fd37d91827ac16edc3bec5c275fb19a667c457701bb7c5e615f86_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_290665fa3fa20926f4c5a85c7939339741d3819058d59d9391860f79114136b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290665fa3fa20926f4c5a85c7939339741d3819058d59d9391860f79114136b2->enter($__internal_290665fa3fa20926f4c5a85c7939339741d3819058d59d9391860f79114136b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_6eaf0fc55fb65c6d0428edd2c9ebb443c12739a1065aa0e58d9165a3127b1550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eaf0fc55fb65c6d0428edd2c9ebb443c12739a1065aa0e58d9165a3127b1550->enter($__internal_6eaf0fc55fb65c6d0428edd2c9ebb443c12739a1065aa0e58d9165a3127b1550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6eaf0fc55fb65c6d0428edd2c9ebb443c12739a1065aa0e58d9165a3127b1550->leave($__internal_6eaf0fc55fb65c6d0428edd2c9ebb443c12739a1065aa0e58d9165a3127b1550_prof);

        
        $__internal_290665fa3fa20926f4c5a85c7939339741d3819058d59d9391860f79114136b2->leave($__internal_290665fa3fa20926f4c5a85c7939339741d3819058d59d9391860f79114136b2_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_ca7dfb740981f9744e9f52bfba1e092633cf296dc27f95fe9c9415f98e95364a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7dfb740981f9744e9f52bfba1e092633cf296dc27f95fe9c9415f98e95364a->enter($__internal_ca7dfb740981f9744e9f52bfba1e092633cf296dc27f95fe9c9415f98e95364a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_9e06e140b63fc9e0499dd45ee410370c079b447b9f96ea571a2e1e0ece0eb82d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e06e140b63fc9e0499dd45ee410370c079b447b9f96ea571a2e1e0ece0eb82d->enter($__internal_9e06e140b63fc9e0499dd45ee410370c079b447b9f96ea571a2e1e0ece0eb82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9e06e140b63fc9e0499dd45ee410370c079b447b9f96ea571a2e1e0ece0eb82d->leave($__internal_9e06e140b63fc9e0499dd45ee410370c079b447b9f96ea571a2e1e0ece0eb82d_prof);

        
        $__internal_ca7dfb740981f9744e9f52bfba1e092633cf296dc27f95fe9c9415f98e95364a->leave($__internal_ca7dfb740981f9744e9f52bfba1e092633cf296dc27f95fe9c9415f98e95364a_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
