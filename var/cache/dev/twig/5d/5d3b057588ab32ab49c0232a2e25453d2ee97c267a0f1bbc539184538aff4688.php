<?php

/* ::base.html.twig */
class __TwigTemplate_7d24180ae363e813aee34445825f6af117263ac47f21d668802fc84782485d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Head' => array($this, 'block_Head'),
            'BackHeader' => array($this, 'block_BackHeader'),
            'BackNavigation' => array($this, 'block_BackNavigation'),
            'BackBody' => array($this, 'block_BackBody'),
            'BackFooter' => array($this, 'block_BackFooter'),
            'FrontHeader' => array($this, 'block_FrontHeader'),
            'FrontNavigation' => array($this, 'block_FrontNavigation'),
            'FrontBody' => array($this, 'block_FrontBody'),
            'FrontFooter' => array($this, 'block_FrontFooter'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8d920c3fb82d639b276955817fb4bcfd3979813f899516122f599bb348fd3fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d920c3fb82d639b276955817fb4bcfd3979813f899516122f599bb348fd3fa->enter($__internal_d8d920c3fb82d639b276955817fb4bcfd3979813f899516122f599bb348fd3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_dae44af74bac16d82e4dc5bf92035b732cbb2efbdaf18d4ad9f0230d49ad366f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae44af74bac16d82e4dc5bf92035b732cbb2efbdaf18d4ad9f0230d49ad366f->enter($__internal_dae44af74bac16d82e4dc5bf92035b732cbb2efbdaf18d4ad9f0230d49ad366f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>

 ";
        // line 8
        echo " ";
        $this->displayBlock('Head', $context, $blocks);
        // line 11
        echo "
</head>
<body>

  ";
        // line 15
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "
    ";
            // line 18
            echo "    ";
            $this->displayBlock('BackHeader', $context, $blocks);
            // line 20
            echo "
    ";
            // line 22
            echo "    ";
            $this->displayBlock('BackNavigation', $context, $blocks);
            // line 25
            echo "
    ";
            // line 27
            echo "    ";
            $this->displayBlock('BackBody', $context, $blocks);
            // line 29
            echo "
    ";
            // line 31
            echo "    ";
            $this->displayBlock('BackFooter', $context, $blocks);
            // line 34
            echo "
  ";
        } else {
            // line 36
            echo "    ";
            // line 37
            echo "    ";
            $this->displayBlock('FrontHeader', $context, $blocks);
            // line 39
            echo "
    ";
            // line 41
            echo "    ";
            $this->displayBlock('FrontNavigation', $context, $blocks);
            // line 44
            echo "
    ";
            // line 45
            echo "    
    ";
            // line 46
            $this->displayBlock('FrontBody', $context, $blocks);
            // line 48
            echo "
    ";
            // line 50
            echo "    ";
            $this->displayBlock('FrontFooter', $context, $blocks);
            // line 53
            echo "  ";
        }
        // line 54
        echo "
</body>  
</html>
";
        
        $__internal_d8d920c3fb82d639b276955817fb4bcfd3979813f899516122f599bb348fd3fa->leave($__internal_d8d920c3fb82d639b276955817fb4bcfd3979813f899516122f599bb348fd3fa_prof);

        
        $__internal_dae44af74bac16d82e4dc5bf92035b732cbb2efbdaf18d4ad9f0230d49ad366f->leave($__internal_dae44af74bac16d82e4dc5bf92035b732cbb2efbdaf18d4ad9f0230d49ad366f_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_77cb9444fdea3dcb36a97dca78eb9b806d0b3da45bd958a6254749b9749a1b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77cb9444fdea3dcb36a97dca78eb9b806d0b3da45bd958a6254749b9749a1b9e->enter($__internal_77cb9444fdea3dcb36a97dca78eb9b806d0b3da45bd958a6254749b9749a1b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_be8057460056f58584731beec8627e3e79dfadbcc2f7f92648319a4c86c9d5c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8057460056f58584731beec8627e3e79dfadbcc2f7f92648319a4c86c9d5c8->enter($__internal_be8057460056f58584731beec8627e3e79dfadbcc2f7f92648319a4c86c9d5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":frontend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_be8057460056f58584731beec8627e3e79dfadbcc2f7f92648319a4c86c9d5c8->leave($__internal_be8057460056f58584731beec8627e3e79dfadbcc2f7f92648319a4c86c9d5c8_prof);

        
        $__internal_77cb9444fdea3dcb36a97dca78eb9b806d0b3da45bd958a6254749b9749a1b9e->leave($__internal_77cb9444fdea3dcb36a97dca78eb9b806d0b3da45bd958a6254749b9749a1b9e_prof);

    }

    // line 18
    public function block_BackHeader($context, array $blocks = array())
    {
        $__internal_6101d602cd130ffe7ccc6a5a1654572e41db3f27453aa4ac8e25b756ca398fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6101d602cd130ffe7ccc6a5a1654572e41db3f27453aa4ac8e25b756ca398fb5->enter($__internal_6101d602cd130ffe7ccc6a5a1654572e41db3f27453aa4ac8e25b756ca398fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackHeader"));

        $__internal_73e668466f191c4eb84d64afdc781b123bf2b3d04977232f47ad1e65de9ce083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e668466f191c4eb84d64afdc781b123bf2b3d04977232f47ad1e65de9ce083->enter($__internal_73e668466f191c4eb84d64afdc781b123bf2b3d04977232f47ad1e65de9ce083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackHeader"));

        echo " 
    ";
        
        $__internal_73e668466f191c4eb84d64afdc781b123bf2b3d04977232f47ad1e65de9ce083->leave($__internal_73e668466f191c4eb84d64afdc781b123bf2b3d04977232f47ad1e65de9ce083_prof);

        
        $__internal_6101d602cd130ffe7ccc6a5a1654572e41db3f27453aa4ac8e25b756ca398fb5->leave($__internal_6101d602cd130ffe7ccc6a5a1654572e41db3f27453aa4ac8e25b756ca398fb5_prof);

    }

    // line 22
    public function block_BackNavigation($context, array $blocks = array())
    {
        $__internal_b9f61ec6a94e50491c783c83620d7fe3703ef3dafca45efedd8cbaf41f3b6c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f61ec6a94e50491c783c83620d7fe3703ef3dafca45efedd8cbaf41f3b6c87->enter($__internal_b9f61ec6a94e50491c783c83620d7fe3703ef3dafca45efedd8cbaf41f3b6c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackNavigation"));

        $__internal_1fdae898bdf10ccda42ee86297efb042790ed5d40ef7afea3e0ed97ba6d747fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fdae898bdf10ccda42ee86297efb042790ed5d40ef7afea3e0ed97ba6d747fd->enter($__internal_1fdae898bdf10ccda42ee86297efb042790ed5d40ef7afea3e0ed97ba6d747fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackNavigation"));

        echo " 
      ";
        // line 23
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 23)->display($context);
        echo "   
    ";
        
        $__internal_1fdae898bdf10ccda42ee86297efb042790ed5d40ef7afea3e0ed97ba6d747fd->leave($__internal_1fdae898bdf10ccda42ee86297efb042790ed5d40ef7afea3e0ed97ba6d747fd_prof);

        
        $__internal_b9f61ec6a94e50491c783c83620d7fe3703ef3dafca45efedd8cbaf41f3b6c87->leave($__internal_b9f61ec6a94e50491c783c83620d7fe3703ef3dafca45efedd8cbaf41f3b6c87_prof);

    }

    // line 27
    public function block_BackBody($context, array $blocks = array())
    {
        $__internal_ff7b299b62626aeea6fd401610682f8422be47fef3d6bf721b3408ccc7a5c637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7b299b62626aeea6fd401610682f8422be47fef3d6bf721b3408ccc7a5c637->enter($__internal_ff7b299b62626aeea6fd401610682f8422be47fef3d6bf721b3408ccc7a5c637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBody"));

        $__internal_17abeee2b02ec401d4eae7cc1672b58f91487adfbc01c28fc7befba8a4e105a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17abeee2b02ec401d4eae7cc1672b58f91487adfbc01c28fc7befba8a4e105a9->enter($__internal_17abeee2b02ec401d4eae7cc1672b58f91487adfbc01c28fc7befba8a4e105a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBody"));

        echo " 
    ";
        
        $__internal_17abeee2b02ec401d4eae7cc1672b58f91487adfbc01c28fc7befba8a4e105a9->leave($__internal_17abeee2b02ec401d4eae7cc1672b58f91487adfbc01c28fc7befba8a4e105a9_prof);

        
        $__internal_ff7b299b62626aeea6fd401610682f8422be47fef3d6bf721b3408ccc7a5c637->leave($__internal_ff7b299b62626aeea6fd401610682f8422be47fef3d6bf721b3408ccc7a5c637_prof);

    }

    // line 31
    public function block_BackFooter($context, array $blocks = array())
    {
        $__internal_1679cf188574e3c43e484364a190b086656413eb2fc85aade1ddd9651a07dee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1679cf188574e3c43e484364a190b086656413eb2fc85aade1ddd9651a07dee8->enter($__internal_1679cf188574e3c43e484364a190b086656413eb2fc85aade1ddd9651a07dee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackFooter"));

        $__internal_1e3e3885cf8ed4ebb7e16632ad9c2f54ce21efe70ed22c38195c32baf1360e13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e3e3885cf8ed4ebb7e16632ad9c2f54ce21efe70ed22c38195c32baf1360e13->enter($__internal_1e3e3885cf8ed4ebb7e16632ad9c2f54ce21efe70ed22c38195c32baf1360e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackFooter"));

        echo " 
      ";
        // line 32
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 32)->display($context);
        echo " 
    ";
        
        $__internal_1e3e3885cf8ed4ebb7e16632ad9c2f54ce21efe70ed22c38195c32baf1360e13->leave($__internal_1e3e3885cf8ed4ebb7e16632ad9c2f54ce21efe70ed22c38195c32baf1360e13_prof);

        
        $__internal_1679cf188574e3c43e484364a190b086656413eb2fc85aade1ddd9651a07dee8->leave($__internal_1679cf188574e3c43e484364a190b086656413eb2fc85aade1ddd9651a07dee8_prof);

    }

    // line 37
    public function block_FrontHeader($context, array $blocks = array())
    {
        $__internal_86a0085064aff37ad923991a7fbdbbdb75950419ca4fa136bf6a03637f04154e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a0085064aff37ad923991a7fbdbbdb75950419ca4fa136bf6a03637f04154e->enter($__internal_86a0085064aff37ad923991a7fbdbbdb75950419ca4fa136bf6a03637f04154e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontHeader"));

        $__internal_52174cff7bedf09dcd13de7f6353e624ccffeb66cdb4f4d97864f9c14226d001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52174cff7bedf09dcd13de7f6353e624ccffeb66cdb4f4d97864f9c14226d001->enter($__internal_52174cff7bedf09dcd13de7f6353e624ccffeb66cdb4f4d97864f9c14226d001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontHeader"));

        echo " 
    ";
        
        $__internal_52174cff7bedf09dcd13de7f6353e624ccffeb66cdb4f4d97864f9c14226d001->leave($__internal_52174cff7bedf09dcd13de7f6353e624ccffeb66cdb4f4d97864f9c14226d001_prof);

        
        $__internal_86a0085064aff37ad923991a7fbdbbdb75950419ca4fa136bf6a03637f04154e->leave($__internal_86a0085064aff37ad923991a7fbdbbdb75950419ca4fa136bf6a03637f04154e_prof);

    }

    // line 41
    public function block_FrontNavigation($context, array $blocks = array())
    {
        $__internal_9332eeafc29a49ca6a1dcd1c797c23e33e5a1d0e658d20ae02da3e0310de7c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9332eeafc29a49ca6a1dcd1c797c23e33e5a1d0e658d20ae02da3e0310de7c57->enter($__internal_9332eeafc29a49ca6a1dcd1c797c23e33e5a1d0e658d20ae02da3e0310de7c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontNavigation"));

        $__internal_51ef2a7bdd9953ea97e3d182d714b53bff134e1582bb374a2f17e9008abb260e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ef2a7bdd9953ea97e3d182d714b53bff134e1582bb374a2f17e9008abb260e->enter($__internal_51ef2a7bdd9953ea97e3d182d714b53bff134e1582bb374a2f17e9008abb260e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontNavigation"));

        echo " 
      ";
        // line 42
        $this->loadTemplate(":frontend:navigation.html.twig", "::base.html.twig", 42)->display($context);
        echo "   
    ";
        
        $__internal_51ef2a7bdd9953ea97e3d182d714b53bff134e1582bb374a2f17e9008abb260e->leave($__internal_51ef2a7bdd9953ea97e3d182d714b53bff134e1582bb374a2f17e9008abb260e_prof);

        
        $__internal_9332eeafc29a49ca6a1dcd1c797c23e33e5a1d0e658d20ae02da3e0310de7c57->leave($__internal_9332eeafc29a49ca6a1dcd1c797c23e33e5a1d0e658d20ae02da3e0310de7c57_prof);

    }

    // line 46
    public function block_FrontBody($context, array $blocks = array())
    {
        $__internal_28328d9495b86ea3bcdbf1ad9aed6a4f9d071207f8e04ef2a39f652c9d89a333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28328d9495b86ea3bcdbf1ad9aed6a4f9d071207f8e04ef2a39f652c9d89a333->enter($__internal_28328d9495b86ea3bcdbf1ad9aed6a4f9d071207f8e04ef2a39f652c9d89a333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        $__internal_f1445f5509270bc7c48f6d21191d74b0d560c7a3da68f6dab12d85d551712dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1445f5509270bc7c48f6d21191d74b0d560c7a3da68f6dab12d85d551712dc4->enter($__internal_f1445f5509270bc7c48f6d21191d74b0d560c7a3da68f6dab12d85d551712dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        echo " 
    ";
        
        $__internal_f1445f5509270bc7c48f6d21191d74b0d560c7a3da68f6dab12d85d551712dc4->leave($__internal_f1445f5509270bc7c48f6d21191d74b0d560c7a3da68f6dab12d85d551712dc4_prof);

        
        $__internal_28328d9495b86ea3bcdbf1ad9aed6a4f9d071207f8e04ef2a39f652c9d89a333->leave($__internal_28328d9495b86ea3bcdbf1ad9aed6a4f9d071207f8e04ef2a39f652c9d89a333_prof);

    }

    // line 50
    public function block_FrontFooter($context, array $blocks = array())
    {
        $__internal_fdd3956ce8831e8976a72a359106c61a4867cbd2a45e1c44a04e66fa89dc405d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd3956ce8831e8976a72a359106c61a4867cbd2a45e1c44a04e66fa89dc405d->enter($__internal_fdd3956ce8831e8976a72a359106c61a4867cbd2a45e1c44a04e66fa89dc405d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontFooter"));

        $__internal_b6b7edf8f2921bd94d30ebb193842ecac1598974f308419dfeed73438e6e5919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b7edf8f2921bd94d30ebb193842ecac1598974f308419dfeed73438e6e5919->enter($__internal_b6b7edf8f2921bd94d30ebb193842ecac1598974f308419dfeed73438e6e5919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontFooter"));

        echo " 
      ";
        // line 51
        $this->loadTemplate(":frontend:footer.html.twig", "::base.html.twig", 51)->display($context);
        echo " 
    ";
        
        $__internal_b6b7edf8f2921bd94d30ebb193842ecac1598974f308419dfeed73438e6e5919->leave($__internal_b6b7edf8f2921bd94d30ebb193842ecac1598974f308419dfeed73438e6e5919_prof);

        
        $__internal_fdd3956ce8831e8976a72a359106c61a4867cbd2a45e1c44a04e66fa89dc405d->leave($__internal_fdd3956ce8831e8976a72a359106c61a4867cbd2a45e1c44a04e66fa89dc405d_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 51,  289 => 50,  270 => 46,  258 => 42,  247 => 41,  228 => 37,  216 => 32,  205 => 31,  186 => 27,  174 => 23,  163 => 22,  144 => 18,  134 => 10,  132 => 9,  121 => 8,  108 => 54,  105 => 53,  102 => 50,  99 => 48,  97 => 46,  94 => 45,  91 => 44,  88 => 41,  85 => 39,  82 => 37,  80 => 36,  76 => 34,  73 => 31,  70 => 29,  67 => 27,  64 => 25,  61 => 22,  58 => 20,  55 => 18,  52 => 16,  50 => 15,  44 => 11,  41 => 8,  34 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layoutdudeego.html.twig #}

<!DOCTYPE html>
<html>
<head>

 {# Contenu de la balise head #}
 {% block Head %} 
   {% include ':frontend:head.html.twig' %}
 {% endblock %}

</head>
<body>

  {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

    {# Contenu de l'en-tete #}
    {% block BackHeader %} 
    {% endblock %}

    {# Contenu de la balise nav #}
    {% block BackNavigation %} 
      {% include ':backend:navigation.html.twig' %}   
    {% endblock %}

    {# Contenu du corps de page #}
    {% block BackBody %} 
    {% endblock %}

    {# Contenu du pied de page #}
    {% block BackFooter %} 
      {% include ':backend:footer.html.twig' %} 
    {% endblock %}

  {% else %}
    {# Contenu de l'en-tete #}
    {% block FrontHeader %} 
    {% endblock %}

    {# Contenu de la balise nav #}
    {% block FrontNavigation %} 
      {% include ':frontend:navigation.html.twig' %}   
    {% endblock %}

    {# Contenu du corps de page #}    
    {% block FrontBody %} 
    {% endblock %}

    {# Contenu du pied de page #}
    {% block FrontFooter %} 
      {% include ':frontend:footer.html.twig' %} 
    {% endblock %}
  {% endif %}

</body>  
</html>
", "::base.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app\\Resources\\views\\base.html.twig");
    }
}
