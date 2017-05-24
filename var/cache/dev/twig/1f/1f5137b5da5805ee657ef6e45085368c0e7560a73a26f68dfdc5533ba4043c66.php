<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_6fad360094635baa0540ca26661b6631cd23fbe577a4f48b3ac796ed40ecb570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c6e3644efbecb627baa508f2275a34dab186a8f5b76f075bbbc78cc170c1610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6e3644efbecb627baa508f2275a34dab186a8f5b76f075bbbc78cc170c1610->enter($__internal_7c6e3644efbecb627baa508f2275a34dab186a8f5b76f075bbbc78cc170c1610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        $__internal_640b87b60f72aecab0f0cf3d788f20db8ec4eb7847c666532882aeadc149029d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_640b87b60f72aecab0f0cf3d788f20db8ec4eb7847c666532882aeadc149029d->enter($__internal_640b87b60f72aecab0f0cf3d788f20db8ec4eb7847c666532882aeadc149029d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b"] ?? $this->getContext($context, "__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b"] ?? $this->getContext($context, "__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c6e3644efbecb627baa508f2275a34dab186a8f5b76f075bbbc78cc170c1610->leave($__internal_7c6e3644efbecb627baa508f2275a34dab186a8f5b76f075bbbc78cc170c1610_prof);

        
        $__internal_640b87b60f72aecab0f0cf3d788f20db8ec4eb7847c666532882aeadc149029d->leave($__internal_640b87b60f72aecab0f0cf3d788f20db8ec4eb7847c666532882aeadc149029d_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e58951f04663f02249f68def7482e8b38539b16cb69c0a801599b68088b9cefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e58951f04663f02249f68def7482e8b38539b16cb69c0a801599b68088b9cefc->enter($__internal_e58951f04663f02249f68def7482e8b38539b16cb69c0a801599b68088b9cefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_868d8188b3012b73be4d0cc3a5c370e5d8e5b7ed6d60f6ed9c1fb66bafe1902c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_868d8188b3012b73be4d0cc3a5c370e5d8e5b7ed6d60f6ed9c1fb66bafe1902c->enter($__internal_868d8188b3012b73be4d0cc3a5c370e5d8e5b7ed6d60f6ed9c1fb66bafe1902c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_868d8188b3012b73be4d0cc3a5c370e5d8e5b7ed6d60f6ed9c1fb66bafe1902c->leave($__internal_868d8188b3012b73be4d0cc3a5c370e5d8e5b7ed6d60f6ed9c1fb66bafe1902c_prof);

        
        $__internal_e58951f04663f02249f68def7482e8b38539b16cb69c0a801599b68088b9cefc->leave($__internal_e58951f04663f02249f68def7482e8b38539b16cb69c0a801599b68088b9cefc_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_28364ddd92522da42635ee6a8d26ca0c7654745139dc8c28980d9f926eba36e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28364ddd92522da42635ee6a8d26ca0c7654745139dc8c28980d9f926eba36e1->enter($__internal_28364ddd92522da42635ee6a8d26ca0c7654745139dc8c28980d9f926eba36e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_d372937d862c42b0f24daadc1f9e50ebe6c3e4d150850e04aa1d68c679c2fe58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d372937d862c42b0f24daadc1f9e50ebe6c3e4d150850e04aa1d68c679c2fe58->enter($__internal_d372937d862c42b0f24daadc1f9e50ebe6c3e4d150850e04aa1d68c679c2fe58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_d372937d862c42b0f24daadc1f9e50ebe6c3e4d150850e04aa1d68c679c2fe58->leave($__internal_d372937d862c42b0f24daadc1f9e50ebe6c3e4d150850e04aa1d68c679c2fe58_prof);

        
        $__internal_28364ddd92522da42635ee6a8d26ca0c7654745139dc8c28980d9f926eba36e1->leave($__internal_28364ddd92522da42635ee6a8d26ca0c7654745139dc8c28980d9f926eba36e1_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_2d365c64704099180e2a2ef2754c427b72b9e0e8aa3303038d2e43715295af86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d365c64704099180e2a2ef2754c427b72b9e0e8aa3303038d2e43715295af86->enter($__internal_2d365c64704099180e2a2ef2754c427b72b9e0e8aa3303038d2e43715295af86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_78c45d4fd62d47bf45baff0c924814363bb8ab38ed0ba9e76bd4f127572326e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78c45d4fd62d47bf45baff0c924814363bb8ab38ed0ba9e76bd4f127572326e5->enter($__internal_78c45d4fd62d47bf45baff0c924814363bb8ab38ed0ba9e76bd4f127572326e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b"] ?? $this->getContext($context, "__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_78c45d4fd62d47bf45baff0c924814363bb8ab38ed0ba9e76bd4f127572326e5->leave($__internal_78c45d4fd62d47bf45baff0c924814363bb8ab38ed0ba9e76bd4f127572326e5_prof);

        
        $__internal_2d365c64704099180e2a2ef2754c427b72b9e0e8aa3303038d2e43715295af86->leave($__internal_2d365c64704099180e2a2ef2754c427b72b9e0e8aa3303038d2e43715295af86_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_624f44e55b754cf2d6b7460c37e1f960edae9863fdca49e105541d6f60d9a4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624f44e55b754cf2d6b7460c37e1f960edae9863fdca49e105541d6f60d9a4f3->enter($__internal_624f44e55b754cf2d6b7460c37e1f960edae9863fdca49e105541d6f60d9a4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_57f0007082854a7566fb3d5535492db0117d5bd758841c68057327476b28220c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57f0007082854a7566fb3d5535492db0117d5bd758841c68057327476b28220c->enter($__internal_57f0007082854a7566fb3d5535492db0117d5bd758841c68057327476b28220c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 4
($context["__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b"] ?? $this->getContext($context, "__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b")));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 4
($context["__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b"] ?? $this->getContext($context, "__internal_6aef88b67cde156ef941de89140723524dd3b6cb75b8cd23211cd9075762618b")));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_57f0007082854a7566fb3d5535492db0117d5bd758841c68057327476b28220c->leave($__internal_57f0007082854a7566fb3d5535492db0117d5bd758841c68057327476b28220c_prof);

        
        $__internal_624f44e55b754cf2d6b7460c37e1f960edae9863fdca49e105541d6f60d9a4f3->leave($__internal_624f44e55b754cf2d6b7460c37e1f960edae9863fdca49e105541d6f60d9a4f3_prof);

    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_d279b0a2af57ec572c6e378d3dc39b4036a65cec0f77eadca2417eb7fcb23b3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d279b0a2af57ec572c6e378d3dc39b4036a65cec0f77eadca2417eb7fcb23b3f->enter($__internal_d279b0a2af57ec572c6e378d3dc39b4036a65cec0f77eadca2417eb7fcb23b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        $__internal_d9aca6507fb436d526f4e7b64ba1f86c9e1af3359445f9732a6bf37350a98084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9aca6507fb436d526f4e7b64ba1f86c9e1af3359445f9732a6bf37350a98084->enter($__internal_d9aca6507fb436d526f4e7b64ba1f86c9e1af3359445f9732a6bf37350a98084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('JavierEguiluz\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 46
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 47
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 48
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 49
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 50
        echo "
            ";
        
        $__internal_d9aca6507fb436d526f4e7b64ba1f86c9e1af3359445f9732a6bf37350a98084->leave($__internal_d9aca6507fb436d526f4e7b64ba1f86c9e1af3359445f9732a6bf37350a98084_prof);

        
        $__internal_d279b0a2af57ec572c6e378d3dc39b4036a65cec0f77eadca2417eb7fcb23b3f->leave($__internal_d279b0a2af57ec572c6e378d3dc39b4036a65cec0f77eadca2417eb7fcb23b3f_prof);

    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_ae9c1b3f2816fadd0e055632e6f53d7286c244ec2bd8489f0e7f506e0acb57ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9c1b3f2816fadd0e055632e6f53d7286c244ec2bd8489f0e7f506e0acb57ee->enter($__internal_ae9c1b3f2816fadd0e055632e6f53d7286c244ec2bd8489f0e7f506e0acb57ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_6c0b89b9e2089aebe686e70c6cd5b3180acf15174545c50370f3b4386b970781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0b89b9e2089aebe686e70c6cd5b3180acf15174545c50370f3b4386b970781->enter($__internal_6c0b89b9e2089aebe686e70c6cd5b3180acf15174545c50370f3b4386b970781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 59
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 61
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 62
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 63
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 64
        echo "
    ";
        
        $__internal_6c0b89b9e2089aebe686e70c6cd5b3180acf15174545c50370f3b4386b970781->leave($__internal_6c0b89b9e2089aebe686e70c6cd5b3180acf15174545c50370f3b4386b970781_prof);

        
        $__internal_ae9c1b3f2816fadd0e055632e6f53d7286c244ec2bd8489f0e7f506e0acb57ee->leave($__internal_ae9c1b3f2816fadd0e055632e6f53d7286c244ec2bd8489f0e7f506e0acb57ee_prof);

    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_20538c5f2a6f3ea0d10fbfeb0b1825c6ed14cd97210e9e3b64687f69909e82f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20538c5f2a6f3ea0d10fbfeb0b1825c6ed14cd97210e9e3b64687f69909e82f1->enter($__internal_20538c5f2a6f3ea0d10fbfeb0b1825c6ed14cd97210e9e3b64687f69909e82f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        $__internal_5086777a144d88472ac71579b6136e45183e427d3d0a4600e8f7697d8babc4a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5086777a144d88472ac71579b6136e45183e427d3d0a4600e8f7697d8babc4a1->enter($__internal_5086777a144d88472ac71579b6136e45183e427d3d0a4600e8f7697d8babc4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
        
        $__internal_5086777a144d88472ac71579b6136e45183e427d3d0a4600e8f7697d8babc4a1->leave($__internal_5086777a144d88472ac71579b6136e45183e427d3d0a4600e8f7697d8babc4a1_prof);

        
        $__internal_20538c5f2a6f3ea0d10fbfeb0b1825c6ed14cd97210e9e3b64687f69909e82f1->leave($__internal_20538c5f2a6f3ea0d10fbfeb0b1825c6ed14cd97210e9e3b64687f69909e82f1_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 69,  268 => 68,  257 => 64,  255 => 63,  254 => 62,  253 => 61,  252 => 60,  251 => 59,  249 => 57,  240 => 56,  229 => 50,  227 => 49,  226 => 48,  225 => 47,  224 => 46,  223 => 45,  222 => 44,  219 => 43,  216 => 42,  213 => 41,  204 => 40,  194 => 56,  188 => 52,  186 => 40,  181 => 37,  173 => 34,  169 => 32,  167 => 4,  165 => 32,  163 => 31,  157 => 28,  151 => 24,  149 => 4,  148 => 24,  140 => 22,  136 => 21,  133 => 20,  124 => 19,  111 => 15,  110 => 4,  108 => 15,  105 => 14,  103 => 13,  94 => 12,  76 => 10,  58 => 9,  48 => 7,  46 => 5,  45 => 4,  44 => 5,  43 => 4,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  24 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
{% endblock %}
", "EasyAdminBundle:default:show.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\vendor\\javiereguiluz\\easyadmin-bundle/Resources/views/default/show.html.twig");
    }
}
