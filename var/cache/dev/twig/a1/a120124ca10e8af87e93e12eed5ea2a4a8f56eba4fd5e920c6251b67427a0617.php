<?php

/* @EasyAdmin/default/includes/_actions.html.twig */
class __TwigTemplate_c8955b64c92b128771ca5c9564859fbb272e021deea1604e467ea36587c82150 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c09dd2c548bf7e4f2c8b3f32644d8bb65348321bd8098b4453caeb7cd7b4bb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c09dd2c548bf7e4f2c8b3f32644d8bb65348321bd8098b4453caeb7cd7b4bb5->enter($__internal_1c09dd2c548bf7e4f2c8b3f32644d8bb65348321bd8098b4453caeb7cd7b4bb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_actions.html.twig"));

        $__internal_d6f498162d87e1947a31c63c509002ab95b3ad6a1a402701b289c8888324490f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6f498162d87e1947a31c63c509002ab95b3ad6a1a402701b289c8888324490f->enter($__internal_d6f498162d87e1947a31c63c509002ab95b3ad6a1a402701b289c8888324490f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/includes/_actions.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? $this->getContext($context, "actions")));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 2
            echo "    ";
            if (("list" == $this->getAttribute($context["action"], "name", array()))) {
                // line 3
                echo "        ";
                $context["action_href"] = (((($this->getAttribute(($context["request_parameters"] ?? null), "referer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["request_parameters"] ?? null), "referer", array()), "")) : (""))) ? (urldecode($this->getAttribute(($context["request_parameters"] ?? $this->getContext($context, "request_parameters")), "referer", array()))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["request_parameters"] ?? $this->getContext($context, "request_parameters")), array("action" => "list")))));
                // line 4
                echo "    ";
            } elseif (("method" == $this->getAttribute($context["action"], "type", array()))) {
                // line 5
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("easyadmin", twig_array_merge(($context["request_parameters"] ?? $this->getContext($context, "request_parameters")), array("action" => $this->getAttribute($context["action"], "name", array()), "id" => ($context["item_id"] ?? $this->getContext($context, "item_id")))));
                // line 6
                echo "    ";
            } elseif (("route" == $this->getAttribute($context["action"], "type", array()))) {
                // line 7
                echo "        ";
                $context["action_href"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($context["action"], "name", array()), twig_array_merge(($context["request_parameters"] ?? $this->getContext($context, "request_parameters")), array("action" => $this->getAttribute($context["action"], "name", array()), "id" => ($context["item_id"] ?? $this->getContext($context, "item_id")))));
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <a class=\"";
            // line 10
            echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, ($context["action_href"] ?? $this->getContext($context, "action_href")), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "target", array()), "html", null, true);
            echo "\">";
            // line 11
            if ($this->getAttribute($context["action"], "icon", array())) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                echo "\"></i> ";
            }
            // line 12
            if (($this->getAttribute($context["action"], "label", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($context["action"], "label", array())))) {
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["action"], "label", array()), twig_array_merge(($context["trans_parameters"] ?? $this->getContext($context, "trans_parameters")), array("%entity_id%" => ($context["item_id"] ?? $this->getContext($context, "item_id")))), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))), "html", null, true);
            }
            // line 15
            echo "</a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1c09dd2c548bf7e4f2c8b3f32644d8bb65348321bd8098b4453caeb7cd7b4bb5->leave($__internal_1c09dd2c548bf7e4f2c8b3f32644d8bb65348321bd8098b4453caeb7cd7b4bb5_prof);

        
        $__internal_d6f498162d87e1947a31c63c509002ab95b3ad6a1a402701b289c8888324490f->leave($__internal_d6f498162d87e1947a31c63c509002ab95b3ad6a1a402701b289c8888324490f_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/includes/_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  68 => 13,  66 => 12,  60 => 11,  53 => 10,  50 => 9,  47 => 8,  44 => 7,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for action in actions %}
    {% if 'list' == action.name %}
        {% set action_href = request_parameters.referer|default('') ? request_parameters.referer|easyadmin_urldecode : path('easyadmin', request_parameters|merge({ action: 'list' })) %}
    {% elseif 'method' == action.type %}
        {% set action_href = path('easyadmin', request_parameters|merge({ action: action.name, id: item_id })) %}
    {% elseif 'route' == action.type %}
        {% set action_href = path(action.name, request_parameters|merge({ action: action.name, id: item_id })) %}
    {% endif %}

    <a class=\"{{ action.css_class|default('') }}\" href=\"{{ action_href }}\" target=\"{{ action.target }}\">
        {%- if action.icon %}<i class=\"fa fa-{{ action.icon }}\"></i> {% endif -%}
        {%- if action.label is defined and not action.label is empty -%}
            {{ action.label|trans(arguments = trans_parameters|merge({ '%entity_id%': item_id }), domain = translation_domain) }}
        {%- endif -%}
    </a>
{% endfor %}
", "@EasyAdmin/default/includes/_actions.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle\\Resources\\views\\default\\includes\\_actions.html.twig");
    }
}
