<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_8b8d3c8a3f78dead5c99f7eb6823f1154718fc54f20316723a5f5bfb085a43fd extends Twig_Template
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
        $__internal_9b4e88aea2ca6ec1658002e887c0def248a727b507637677998c5b0a16eb92b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4e88aea2ca6ec1658002e887c0def248a727b507637677998c5b0a16eb92b0->enter($__internal_9b4e88aea2ca6ec1658002e887c0def248a727b507637677998c5b0a16eb92b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_787779e6e09188bfc8dc1d1008542a4198029040f5cb3aafe49ed7c624f24532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787779e6e09188bfc8dc1d1008542a4198029040f5cb3aafe49ed7c624f24532->enter($__internal_787779e6e09188bfc8dc1d1008542a4198029040f5cb3aafe49ed7c624f24532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

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
        
        $__internal_9b4e88aea2ca6ec1658002e887c0def248a727b507637677998c5b0a16eb92b0->leave($__internal_9b4e88aea2ca6ec1658002e887c0def248a727b507637677998c5b0a16eb92b0_prof);

        
        $__internal_787779e6e09188bfc8dc1d1008542a4198029040f5cb3aafe49ed7c624f24532->leave($__internal_787779e6e09188bfc8dc1d1008542a4198029040f5cb3aafe49ed7c624f24532_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_ca7875495c516943bac8acfd9d11c7b714e0549da316536b2af7c802214defd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca7875495c516943bac8acfd9d11c7b714e0549da316536b2af7c802214defd4->enter($__internal_ca7875495c516943bac8acfd9d11c7b714e0549da316536b2af7c802214defd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_fad42a61336a0052316799a3bf7703cfbd631b936adaf841eee7632ba666596f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad42a61336a0052316799a3bf7703cfbd631b936adaf841eee7632ba666596f->enter($__internal_fad42a61336a0052316799a3bf7703cfbd631b936adaf841eee7632ba666596f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fad42a61336a0052316799a3bf7703cfbd631b936adaf841eee7632ba666596f->leave($__internal_fad42a61336a0052316799a3bf7703cfbd631b936adaf841eee7632ba666596f_prof);

        
        $__internal_ca7875495c516943bac8acfd9d11c7b714e0549da316536b2af7c802214defd4->leave($__internal_ca7875495c516943bac8acfd9d11c7b714e0549da316536b2af7c802214defd4_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_3e0014963a7343a6a29ab871e168bb886bd9435a2d2c31e6eac4f0a983bd0496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e0014963a7343a6a29ab871e168bb886bd9435a2d2c31e6eac4f0a983bd0496->enter($__internal_3e0014963a7343a6a29ab871e168bb886bd9435a2d2c31e6eac4f0a983bd0496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_a0f68b19b5094edd641f48067819da5a28eb81db76da1d51c787f3ac4303ee21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f68b19b5094edd641f48067819da5a28eb81db76da1d51c787f3ac4303ee21->enter($__internal_a0f68b19b5094edd641f48067819da5a28eb81db76da1d51c787f3ac4303ee21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

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
        
        $__internal_a0f68b19b5094edd641f48067819da5a28eb81db76da1d51c787f3ac4303ee21->leave($__internal_a0f68b19b5094edd641f48067819da5a28eb81db76da1d51c787f3ac4303ee21_prof);

        
        $__internal_3e0014963a7343a6a29ab871e168bb886bd9435a2d2c31e6eac4f0a983bd0496->leave($__internal_3e0014963a7343a6a29ab871e168bb886bd9435a2d2c31e6eac4f0a983bd0496_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_5a3b328635dd85e86b2fa9a7ba94b4ca1c3d8c13fb76ce3555b9faed8eccc005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3b328635dd85e86b2fa9a7ba94b4ca1c3d8c13fb76ce3555b9faed8eccc005->enter($__internal_5a3b328635dd85e86b2fa9a7ba94b4ca1c3d8c13fb76ce3555b9faed8eccc005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_566a6966fe5d3112e581d4a4ebfe2151e6ce56b733e28a96bfe253402faf9b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566a6966fe5d3112e581d4a4ebfe2151e6ce56b733e28a96bfe253402faf9b16->enter($__internal_566a6966fe5d3112e581d4a4ebfe2151e6ce56b733e28a96bfe253402faf9b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_566a6966fe5d3112e581d4a4ebfe2151e6ce56b733e28a96bfe253402faf9b16->leave($__internal_566a6966fe5d3112e581d4a4ebfe2151e6ce56b733e28a96bfe253402faf9b16_prof);

        
        $__internal_5a3b328635dd85e86b2fa9a7ba94b4ca1c3d8c13fb76ce3555b9faed8eccc005->leave($__internal_5a3b328635dd85e86b2fa9a7ba94b4ca1c3d8c13fb76ce3555b9faed8eccc005_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_0447ef9d6267c48c6c937f22b6b08c9b5216c5ef8fbf5560a6a03ccea54baf3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0447ef9d6267c48c6c937f22b6b08c9b5216c5ef8fbf5560a6a03ccea54baf3f->enter($__internal_0447ef9d6267c48c6c937f22b6b08c9b5216c5ef8fbf5560a6a03ccea54baf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_2461ae680dd08beb81945fffd944e7ca35a58e024887024b7df1f6c7a407631b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2461ae680dd08beb81945fffd944e7ca35a58e024887024b7df1f6c7a407631b->enter($__internal_2461ae680dd08beb81945fffd944e7ca35a58e024887024b7df1f6c7a407631b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

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
        
        $__internal_2461ae680dd08beb81945fffd944e7ca35a58e024887024b7df1f6c7a407631b->leave($__internal_2461ae680dd08beb81945fffd944e7ca35a58e024887024b7df1f6c7a407631b_prof);

        
        $__internal_0447ef9d6267c48c6c937f22b6b08c9b5216c5ef8fbf5560a6a03ccea54baf3f->leave($__internal_0447ef9d6267c48c6c937f22b6b08c9b5216c5ef8fbf5560a6a03ccea54baf3f_prof);

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
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\vich\\uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
