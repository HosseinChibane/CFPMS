<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_db2a087cd64875a90932f5c306851eb1631d4f13379aadd65d0bd68fc9588fab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
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
        $__internal_461b1bdd60aa996c4ae6d6fa3d7383300acbdec47f226988dcc7f058c46b79c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_461b1bdd60aa996c4ae6d6fa3d7383300acbdec47f226988dcc7f058c46b79c1->enter($__internal_461b1bdd60aa996c4ae6d6fa3d7383300acbdec47f226988dcc7f058c46b79c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_69dfde1d58a414acdba768a9d5624782126c638c7512e26075844b4edff32c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69dfde1d58a414acdba768a9d5624782126c638c7512e26075844b4edff32c73->enter($__internal_69dfde1d58a414acdba768a9d5624782126c638c7512e26075844b4edff32c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_461b1bdd60aa996c4ae6d6fa3d7383300acbdec47f226988dcc7f058c46b79c1->leave($__internal_461b1bdd60aa996c4ae6d6fa3d7383300acbdec47f226988dcc7f058c46b79c1_prof);

        
        $__internal_69dfde1d58a414acdba768a9d5624782126c638c7512e26075844b4edff32c73->leave($__internal_69dfde1d58a414acdba768a9d5624782126c638c7512e26075844b4edff32c73_prof);

    }

    // line 3
    public function block_FrontBody($context, array $blocks = array())
    {
        $__internal_3dac2aa4d5d6ec863f4ceac611f3f0d522eecfa9fbeefe6805f19aa9b2c96164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3dac2aa4d5d6ec863f4ceac611f3f0d522eecfa9fbeefe6805f19aa9b2c96164->enter($__internal_3dac2aa4d5d6ec863f4ceac611f3f0d522eecfa9fbeefe6805f19aa9b2c96164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        $__internal_a899a553dfce01d15d5fbf06f0e8a873b693c2878209bb15faa8f7310995bd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a899a553dfce01d15d5fbf06f0e8a873b693c2878209bb15faa8f7310995bd28->enter($__internal_a899a553dfce01d15d5fbf06f0e8a873b693c2878209bb15faa8f7310995bd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

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
        
        $__internal_a899a553dfce01d15d5fbf06f0e8a873b693c2878209bb15faa8f7310995bd28->leave($__internal_a899a553dfce01d15d5fbf06f0e8a873b693c2878209bb15faa8f7310995bd28_prof);

        
        $__internal_3dac2aa4d5d6ec863f4ceac611f3f0d522eecfa9fbeefe6805f19aa9b2c96164->leave($__internal_3dac2aa4d5d6ec863f4ceac611f3f0d522eecfa9fbeefe6805f19aa9b2c96164_prof);

    }

    public function block_dudeegoplatform_body($context, array $blocks = array())
    {
        $__internal_76e02a2bc7dd5f22935254e84101bbac0bc9eb324d725af569f47e0c388645e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e02a2bc7dd5f22935254e84101bbac0bc9eb324d725af569f47e0c388645e4->enter($__internal_76e02a2bc7dd5f22935254e84101bbac0bc9eb324d725af569f47e0c388645e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dudeegoplatform_body"));

        $__internal_9d375940664ed78e05e6ab2ec6b648e1abe4a684c1f0efd6175a7d50ed5da557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d375940664ed78e05e6ab2ec6b648e1abe4a684c1f0efd6175a7d50ed5da557->enter($__internal_9d375940664ed78e05e6ab2ec6b648e1abe4a684c1f0efd6175a7d50ed5da557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dudeegoplatform_body"));

        echo " 
        ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "    ";
        
        $__internal_9d375940664ed78e05e6ab2ec6b648e1abe4a684c1f0efd6175a7d50ed5da557->leave($__internal_9d375940664ed78e05e6ab2ec6b648e1abe4a684c1f0efd6175a7d50ed5da557_prof);

        
        $__internal_76e02a2bc7dd5f22935254e84101bbac0bc9eb324d725af569f47e0c388645e4->leave($__internal_76e02a2bc7dd5f22935254e84101bbac0bc9eb324d725af569f47e0c388645e4_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe4a5097d677b86e16ec8e80ea9bce1fecfa6e04d05d186b143bf78a87b4438b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe4a5097d677b86e16ec8e80ea9bce1fecfa6e04d05d186b143bf78a87b4438b->enter($__internal_fe4a5097d677b86e16ec8e80ea9bce1fecfa6e04d05d186b143bf78a87b4438b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_49728440e0cba98061397b59e75b1119269bcd7541d69f6d06c963f6d2a83ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49728440e0cba98061397b59e75b1119269bcd7541d69f6d06c963f6d2a83ca8->enter($__internal_49728440e0cba98061397b59e75b1119269bcd7541d69f6d06c963f6d2a83ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "
        ";
        
        $__internal_49728440e0cba98061397b59e75b1119269bcd7541d69f6d06c963f6d2a83ca8->leave($__internal_49728440e0cba98061397b59e75b1119269bcd7541d69f6d06c963f6d2a83ca8_prof);

        
        $__internal_fe4a5097d677b86e16ec8e80ea9bce1fecfa6e04d05d186b143bf78a87b4438b->leave($__internal_fe4a5097d677b86e16ec8e80ea9bce1fecfa6e04d05d186b143bf78a87b4438b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
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
#}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
