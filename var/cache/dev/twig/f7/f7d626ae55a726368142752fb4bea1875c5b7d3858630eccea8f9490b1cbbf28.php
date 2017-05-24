<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_1f51147e30a8be0fc9f458e3efd289f74afc2fe6328c07a5e0610e0286bf9c0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'FrontBody' => array($this, 'block_FrontBody'),
            'dudeegoplatform_body' => array($this, 'block_dudeegoplatform_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a60541577c24f3f8d081934176b7b3522dd2e96f7d640e96b9c8ea228a6c4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a60541577c24f3f8d081934176b7b3522dd2e96f7d640e96b9c8ea228a6c4b4->enter($__internal_2a60541577c24f3f8d081934176b7b3522dd2e96f7d640e96b9c8ea228a6c4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $__internal_57c2927e998c1b65e88869c152803e5f0d345c5c0f55b62dd4fb3bbdea47b171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c2927e998c1b65e88869c152803e5f0d345c5c0f55b62dd4fb3bbdea47b171->enter($__internal_57c2927e998c1b65e88869c152803e5f0d345c5c0f55b62dd4fb3bbdea47b171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a60541577c24f3f8d081934176b7b3522dd2e96f7d640e96b9c8ea228a6c4b4->leave($__internal_2a60541577c24f3f8d081934176b7b3522dd2e96f7d640e96b9c8ea228a6c4b4_prof);

        
        $__internal_57c2927e998c1b65e88869c152803e5f0d345c5c0f55b62dd4fb3bbdea47b171->leave($__internal_57c2927e998c1b65e88869c152803e5f0d345c5c0f55b62dd4fb3bbdea47b171_prof);

    }

    // line 3
    public function block_FrontBody($context, array $blocks = array())
    {
        $__internal_f57bd20776bfcf4b5878a98cf7bb1c0e78bbdc13ff29ebe71aa5d2228849ef70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57bd20776bfcf4b5878a98cf7bb1c0e78bbdc13ff29ebe71aa5d2228849ef70->enter($__internal_f57bd20776bfcf4b5878a98cf7bb1c0e78bbdc13ff29ebe71aa5d2228849ef70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        $__internal_a43318191d7c8631b54733f989c9d54b3be44a8de23ce0e27e859f9260ea93c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43318191d7c8631b54733f989c9d54b3be44a8de23ce0e27e859f9260ea93c1->enter($__internal_a43318191d7c8631b54733f989c9d54b3be44a8de23ce0e27e859f9260ea93c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        echo "   
    ";
        // line 4
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 5
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 6
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 7
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 8
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 11
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "
    ";
        // line 15
        echo "    ";
        $this->displayBlock('dudeegoplatform_body', $context, $blocks);
        
        $__internal_a43318191d7c8631b54733f989c9d54b3be44a8de23ce0e27e859f9260ea93c1->leave($__internal_a43318191d7c8631b54733f989c9d54b3be44a8de23ce0e27e859f9260ea93c1_prof);

        
        $__internal_f57bd20776bfcf4b5878a98cf7bb1c0e78bbdc13ff29ebe71aa5d2228849ef70->leave($__internal_f57bd20776bfcf4b5878a98cf7bb1c0e78bbdc13ff29ebe71aa5d2228849ef70_prof);

    }

    public function block_dudeegoplatform_body($context, array $blocks = array())
    {
        $__internal_2546b2c75b9fab7f48cade16c53af16f9d5eae605cc6f999b7f22ab5efcc0ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2546b2c75b9fab7f48cade16c53af16f9d5eae605cc6f999b7f22ab5efcc0ae5->enter($__internal_2546b2c75b9fab7f48cade16c53af16f9d5eae605cc6f999b7f22ab5efcc0ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dudeegoplatform_body"));

        $__internal_a9b4a786b8a80d4e933b73f326891bc7ae09835e391bbd76a05de825ba4bdda5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b4a786b8a80d4e933b73f326891bc7ae09835e391bbd76a05de825ba4bdda5->enter($__internal_a9b4a786b8a80d4e933b73f326891bc7ae09835e391bbd76a05de825ba4bdda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dudeegoplatform_body"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_a9b4a786b8a80d4e933b73f326891bc7ae09835e391bbd76a05de825ba4bdda5->leave($__internal_a9b4a786b8a80d4e933b73f326891bc7ae09835e391bbd76a05de825ba4bdda5_prof);

        
        $__internal_2546b2c75b9fab7f48cade16c53af16f9d5eae605cc6f999b7f22ab5efcc0ae5->leave($__internal_2546b2c75b9fab7f48cade16c53af16f9d5eae605cc6f999b7f22ab5efcc0ae5_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbfd7bc99e401655a5d82867cdaa0b67410e340cf28604707c0cad67949c8327 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbfd7bc99e401655a5d82867cdaa0b67410e340cf28604707c0cad67949c8327->enter($__internal_dbfd7bc99e401655a5d82867cdaa0b67410e340cf28604707c0cad67949c8327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2a39f2c100c6856ce1f47086e3981ed386829a2ff30fe8bac29b6bd466156c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a39f2c100c6856ce1f47086e3981ed386829a2ff30fe8bac29b6bd466156c07->enter($__internal_2a39f2c100c6856ce1f47086e3981ed386829a2ff30fe8bac29b6bd466156c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_2a39f2c100c6856ce1f47086e3981ed386829a2ff30fe8bac29b6bd466156c07->leave($__internal_2a39f2c100c6856ce1f47086e3981ed386829a2ff30fe8bac29b6bd466156c07_prof);

        
        $__internal_dbfd7bc99e401655a5d82867cdaa0b67410e340cf28604707c0cad67949c8327->leave($__internal_dbfd7bc99e401655a5d82867cdaa0b67410e340cf28604707c0cad67949c8327_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 17,  124 => 16,  114 => 19,  112 => 16,  91 => 15,  88 => 13,  85 => 12,  79 => 11,  70 => 8,  65 => 7,  60 => 6,  55 => 5,  53 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block FrontBody %}   
    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
    {% block dudeegoplatform_body %} 
        {% block fos_user_content %}

        {% endblock fos_user_content %}
    {% endblock %}
{% endblock %}



{#
<div>
{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
<a href=\"{{ path('fos_user_security_logout') }}\">
{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
</a>
{% else %}
<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
{% endif %}
</div>
#}", "FOSUserBundle::layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
