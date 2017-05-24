<?php

/* ::base.html.twig */
class __TwigTemplate_2aaf2184e64f0f4d878a1d3a8e418adc50ba23e67ba0e1bff7752dd4ef1e9d0f extends Twig_Template
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
        $__internal_24731b836e6ec968a4c3aadc878d25b91fd6ce8ab19eed061a8ea08badb79509 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24731b836e6ec968a4c3aadc878d25b91fd6ce8ab19eed061a8ea08badb79509->enter($__internal_24731b836e6ec968a4c3aadc878d25b91fd6ce8ab19eed061a8ea08badb79509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4b88f2a62843ccd12a9691a638c3bef17cc9f3f2b37978f2e9058b197f56dffd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b88f2a62843ccd12a9691a638c3bef17cc9f3f2b37978f2e9058b197f56dffd->enter($__internal_4b88f2a62843ccd12a9691a638c3bef17cc9f3f2b37978f2e9058b197f56dffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_24731b836e6ec968a4c3aadc878d25b91fd6ce8ab19eed061a8ea08badb79509->leave($__internal_24731b836e6ec968a4c3aadc878d25b91fd6ce8ab19eed061a8ea08badb79509_prof);

        
        $__internal_4b88f2a62843ccd12a9691a638c3bef17cc9f3f2b37978f2e9058b197f56dffd->leave($__internal_4b88f2a62843ccd12a9691a638c3bef17cc9f3f2b37978f2e9058b197f56dffd_prof);

    }

    // line 8
    public function block_Head($context, array $blocks = array())
    {
        $__internal_8618e635aa3953e80face812a4574806c72a4a75267f7516e00eaa122933a9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8618e635aa3953e80face812a4574806c72a4a75267f7516e00eaa122933a9b3->enter($__internal_8618e635aa3953e80face812a4574806c72a4a75267f7516e00eaa122933a9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        $__internal_9d464839df7fb2a30899b0ab3456d715c1023bbf0065cdae6b5105fab7f84392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d464839df7fb2a30899b0ab3456d715c1023bbf0065cdae6b5105fab7f84392->enter($__internal_9d464839df7fb2a30899b0ab3456d715c1023bbf0065cdae6b5105fab7f84392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Head"));

        echo " 
   ";
        // line 9
        $this->loadTemplate(":frontend:head.html.twig", "::base.html.twig", 9)->display($context);
        // line 10
        echo " ";
        
        $__internal_9d464839df7fb2a30899b0ab3456d715c1023bbf0065cdae6b5105fab7f84392->leave($__internal_9d464839df7fb2a30899b0ab3456d715c1023bbf0065cdae6b5105fab7f84392_prof);

        
        $__internal_8618e635aa3953e80face812a4574806c72a4a75267f7516e00eaa122933a9b3->leave($__internal_8618e635aa3953e80face812a4574806c72a4a75267f7516e00eaa122933a9b3_prof);

    }

    // line 18
    public function block_BackHeader($context, array $blocks = array())
    {
        $__internal_c12440975c44abe4598b44896692925fee8f700ae1aaad573d46c30b88312298 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12440975c44abe4598b44896692925fee8f700ae1aaad573d46c30b88312298->enter($__internal_c12440975c44abe4598b44896692925fee8f700ae1aaad573d46c30b88312298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackHeader"));

        $__internal_bd018397ddc8d5e8e2d8deb2615beaacc3c0430a4a72feebb98f4f9eb15871b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd018397ddc8d5e8e2d8deb2615beaacc3c0430a4a72feebb98f4f9eb15871b3->enter($__internal_bd018397ddc8d5e8e2d8deb2615beaacc3c0430a4a72feebb98f4f9eb15871b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackHeader"));

        echo " 
    ";
        
        $__internal_bd018397ddc8d5e8e2d8deb2615beaacc3c0430a4a72feebb98f4f9eb15871b3->leave($__internal_bd018397ddc8d5e8e2d8deb2615beaacc3c0430a4a72feebb98f4f9eb15871b3_prof);

        
        $__internal_c12440975c44abe4598b44896692925fee8f700ae1aaad573d46c30b88312298->leave($__internal_c12440975c44abe4598b44896692925fee8f700ae1aaad573d46c30b88312298_prof);

    }

    // line 22
    public function block_BackNavigation($context, array $blocks = array())
    {
        $__internal_b4784378015c8098ed0ef679bfcef4570911d04db005e93ed6d177f3d158cc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4784378015c8098ed0ef679bfcef4570911d04db005e93ed6d177f3d158cc31->enter($__internal_b4784378015c8098ed0ef679bfcef4570911d04db005e93ed6d177f3d158cc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackNavigation"));

        $__internal_2a5fba6a453e48d14a4c4af1634499393ff54c01bd363672210eb7673d73a6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a5fba6a453e48d14a4c4af1634499393ff54c01bd363672210eb7673d73a6c2->enter($__internal_2a5fba6a453e48d14a4c4af1634499393ff54c01bd363672210eb7673d73a6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackNavigation"));

        echo " 
      ";
        // line 23
        $this->loadTemplate(":backend:navigation.html.twig", "::base.html.twig", 23)->display($context);
        echo "   
    ";
        
        $__internal_2a5fba6a453e48d14a4c4af1634499393ff54c01bd363672210eb7673d73a6c2->leave($__internal_2a5fba6a453e48d14a4c4af1634499393ff54c01bd363672210eb7673d73a6c2_prof);

        
        $__internal_b4784378015c8098ed0ef679bfcef4570911d04db005e93ed6d177f3d158cc31->leave($__internal_b4784378015c8098ed0ef679bfcef4570911d04db005e93ed6d177f3d158cc31_prof);

    }

    // line 27
    public function block_BackBody($context, array $blocks = array())
    {
        $__internal_744f0fcbf2a5a304f1df8c67099a7453c8452d14b6066f20481f787b85fed886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_744f0fcbf2a5a304f1df8c67099a7453c8452d14b6066f20481f787b85fed886->enter($__internal_744f0fcbf2a5a304f1df8c67099a7453c8452d14b6066f20481f787b85fed886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBody"));

        $__internal_98b52c935c7014323a329c9ffe68f00a3b35bc78261b76ec2f8d4783b98c4cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b52c935c7014323a329c9ffe68f00a3b35bc78261b76ec2f8d4783b98c4cb6->enter($__internal_98b52c935c7014323a329c9ffe68f00a3b35bc78261b76ec2f8d4783b98c4cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackBody"));

        echo " 
    ";
        
        $__internal_98b52c935c7014323a329c9ffe68f00a3b35bc78261b76ec2f8d4783b98c4cb6->leave($__internal_98b52c935c7014323a329c9ffe68f00a3b35bc78261b76ec2f8d4783b98c4cb6_prof);

        
        $__internal_744f0fcbf2a5a304f1df8c67099a7453c8452d14b6066f20481f787b85fed886->leave($__internal_744f0fcbf2a5a304f1df8c67099a7453c8452d14b6066f20481f787b85fed886_prof);

    }

    // line 31
    public function block_BackFooter($context, array $blocks = array())
    {
        $__internal_7564ee4659b19da18a7df7665bc3163abbb22e8ec4fe6ec9bcd21e15fc88a2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7564ee4659b19da18a7df7665bc3163abbb22e8ec4fe6ec9bcd21e15fc88a2cc->enter($__internal_7564ee4659b19da18a7df7665bc3163abbb22e8ec4fe6ec9bcd21e15fc88a2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackFooter"));

        $__internal_26adc809a09cf0b4b976ef7c45f432868a641eccc64caf0c9934b87c8165b801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26adc809a09cf0b4b976ef7c45f432868a641eccc64caf0c9934b87c8165b801->enter($__internal_26adc809a09cf0b4b976ef7c45f432868a641eccc64caf0c9934b87c8165b801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "BackFooter"));

        echo " 
      ";
        // line 32
        $this->loadTemplate(":backend:footer.html.twig", "::base.html.twig", 32)->display($context);
        echo " 
    ";
        
        $__internal_26adc809a09cf0b4b976ef7c45f432868a641eccc64caf0c9934b87c8165b801->leave($__internal_26adc809a09cf0b4b976ef7c45f432868a641eccc64caf0c9934b87c8165b801_prof);

        
        $__internal_7564ee4659b19da18a7df7665bc3163abbb22e8ec4fe6ec9bcd21e15fc88a2cc->leave($__internal_7564ee4659b19da18a7df7665bc3163abbb22e8ec4fe6ec9bcd21e15fc88a2cc_prof);

    }

    // line 37
    public function block_FrontHeader($context, array $blocks = array())
    {
        $__internal_0818311599a58251d8b1643935b138d61f37d598facd36c8521f00d917f43500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0818311599a58251d8b1643935b138d61f37d598facd36c8521f00d917f43500->enter($__internal_0818311599a58251d8b1643935b138d61f37d598facd36c8521f00d917f43500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontHeader"));

        $__internal_8cd7999741fec274d224a10d268b1bc4340128a9578bd88acb1b4e5dc25ab450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd7999741fec274d224a10d268b1bc4340128a9578bd88acb1b4e5dc25ab450->enter($__internal_8cd7999741fec274d224a10d268b1bc4340128a9578bd88acb1b4e5dc25ab450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontHeader"));

        echo " 
    ";
        
        $__internal_8cd7999741fec274d224a10d268b1bc4340128a9578bd88acb1b4e5dc25ab450->leave($__internal_8cd7999741fec274d224a10d268b1bc4340128a9578bd88acb1b4e5dc25ab450_prof);

        
        $__internal_0818311599a58251d8b1643935b138d61f37d598facd36c8521f00d917f43500->leave($__internal_0818311599a58251d8b1643935b138d61f37d598facd36c8521f00d917f43500_prof);

    }

    // line 41
    public function block_FrontNavigation($context, array $blocks = array())
    {
        $__internal_3aa60e1b56d331438976ceb2b0d267d4f1e94b59fdcf8684eb8354107a2562cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa60e1b56d331438976ceb2b0d267d4f1e94b59fdcf8684eb8354107a2562cf->enter($__internal_3aa60e1b56d331438976ceb2b0d267d4f1e94b59fdcf8684eb8354107a2562cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontNavigation"));

        $__internal_25e7f1b48afcba89702bd3ece8bc700767b1a430f4714b45a55438c1bca120ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e7f1b48afcba89702bd3ece8bc700767b1a430f4714b45a55438c1bca120ee->enter($__internal_25e7f1b48afcba89702bd3ece8bc700767b1a430f4714b45a55438c1bca120ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontNavigation"));

        echo " 
      ";
        // line 42
        $this->loadTemplate(":frontend:navigation.html.twig", "::base.html.twig", 42)->display($context);
        echo "   
    ";
        
        $__internal_25e7f1b48afcba89702bd3ece8bc700767b1a430f4714b45a55438c1bca120ee->leave($__internal_25e7f1b48afcba89702bd3ece8bc700767b1a430f4714b45a55438c1bca120ee_prof);

        
        $__internal_3aa60e1b56d331438976ceb2b0d267d4f1e94b59fdcf8684eb8354107a2562cf->leave($__internal_3aa60e1b56d331438976ceb2b0d267d4f1e94b59fdcf8684eb8354107a2562cf_prof);

    }

    // line 46
    public function block_FrontBody($context, array $blocks = array())
    {
        $__internal_b313093aeb717a7f044c952d9918580c94d364c7c83548bd2682351913a1d5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b313093aeb717a7f044c952d9918580c94d364c7c83548bd2682351913a1d5d1->enter($__internal_b313093aeb717a7f044c952d9918580c94d364c7c83548bd2682351913a1d5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        $__internal_7185aaaaebb900f898bda83973bfa88e5b5cbcef7329c21fe986b1b1bb7bfd4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7185aaaaebb900f898bda83973bfa88e5b5cbcef7329c21fe986b1b1bb7bfd4d->enter($__internal_7185aaaaebb900f898bda83973bfa88e5b5cbcef7329c21fe986b1b1bb7bfd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontBody"));

        echo " 
    ";
        
        $__internal_7185aaaaebb900f898bda83973bfa88e5b5cbcef7329c21fe986b1b1bb7bfd4d->leave($__internal_7185aaaaebb900f898bda83973bfa88e5b5cbcef7329c21fe986b1b1bb7bfd4d_prof);

        
        $__internal_b313093aeb717a7f044c952d9918580c94d364c7c83548bd2682351913a1d5d1->leave($__internal_b313093aeb717a7f044c952d9918580c94d364c7c83548bd2682351913a1d5d1_prof);

    }

    // line 50
    public function block_FrontFooter($context, array $blocks = array())
    {
        $__internal_7c6ce1473e76d070c966cea3b941964cc84af0687e6e8c91ec562bad80f756af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c6ce1473e76d070c966cea3b941964cc84af0687e6e8c91ec562bad80f756af->enter($__internal_7c6ce1473e76d070c966cea3b941964cc84af0687e6e8c91ec562bad80f756af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontFooter"));

        $__internal_d09a6049065696ceab9926f70ee73aacb38ba828341a326c445277e04d8dc8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09a6049065696ceab9926f70ee73aacb38ba828341a326c445277e04d8dc8b7->enter($__internal_d09a6049065696ceab9926f70ee73aacb38ba828341a326c445277e04d8dc8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FrontFooter"));

        echo " 
      ";
        // line 51
        $this->loadTemplate(":frontend:footer.html.twig", "::base.html.twig", 51)->display($context);
        echo " 
    ";
        
        $__internal_d09a6049065696ceab9926f70ee73aacb38ba828341a326c445277e04d8dc8b7->leave($__internal_d09a6049065696ceab9926f70ee73aacb38ba828341a326c445277e04d8dc8b7_prof);

        
        $__internal_7c6ce1473e76d070c966cea3b941964cc84af0687e6e8c91ec562bad80f756af->leave($__internal_7c6ce1473e76d070c966cea3b941964cc84af0687e6e8c91ec562bad80f756af_prof);

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
", "::base.html.twig", "C:\\wamp64\\www\\Projet\\CFPMS\\siteweb\\dudeego\\app/Resources\\views/base.html.twig");
    }
}
