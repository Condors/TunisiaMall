<?php

/* @CondorsTnMall/Responsable/index.html.twig */
class __TwigTemplate_ff88bf966988f7406b7734e18cb87767e620c22d76654da6136ebc6910ffad95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig", "@CondorsTnMall/Responsable/index.html.twig", 1);
        $this->blocks = array(
            'quickProfile' => array($this, 'block_quickProfile'),
            'nav_menu' => array($this, 'block_nav_menu'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a04bcaeeff6ad2dfd72fe503f47ee0beae8ed5b802ac53167b69eb839b763e87 = $this->env->getExtension("native_profiler");
        $__internal_a04bcaeeff6ad2dfd72fe503f47ee0beae8ed5b802ac53167b69eb839b763e87->enter($__internal_a04bcaeeff6ad2dfd72fe503f47ee0beae8ed5b802ac53167b69eb839b763e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a04bcaeeff6ad2dfd72fe503f47ee0beae8ed5b802ac53167b69eb839b763e87->leave($__internal_a04bcaeeff6ad2dfd72fe503f47ee0beae8ed5b802ac53167b69eb839b763e87_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_f9553394f48e707c817110857a05f0cfd3a8d0243489a2729bf1e27405a33bd6 = $this->env->getExtension("native_profiler");
        $__internal_f9553394f48e707c817110857a05f0cfd3a8d0243489a2729bf1e27405a33bd6->enter($__internal_f9553394f48e707c817110857a05f0cfd3a8d0243489a2729bf1e27405a33bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_f9553394f48e707c817110857a05f0cfd3a8d0243489a2729bf1e27405a33bd6->leave($__internal_f9553394f48e707c817110857a05f0cfd3a8d0243489a2729bf1e27405a33bd6_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_935ec6587dd8a0ef565341a9f7297952f6d56e2a7dbb08b90f6952bad629124c = $this->env->getExtension("native_profiler");
        $__internal_935ec6587dd8a0ef565341a9f7297952f6d56e2a7dbb08b90f6952bad629124c->enter($__internal_935ec6587dd8a0ef565341a9f7297952f6d56e2a7dbb08b90f6952bad629124c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_935ec6587dd8a0ef565341a9f7297952f6d56e2a7dbb08b90f6952bad629124c->leave($__internal_935ec6587dd8a0ef565341a9f7297952f6d56e2a7dbb08b90f6952bad629124c_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_325f13dbaa33c82915f9bdb6723d50f2591a729bf00dfc3d4b79732fcf7d6c5f = $this->env->getExtension("native_profiler");
        $__internal_325f13dbaa33c82915f9bdb6723d50f2591a729bf00dfc3d4b79732fcf7d6c5f->enter($__internal_325f13dbaa33c82915f9bdb6723d50f2591a729bf00dfc3d4b79732fcf7d6c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "  ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo " 
";
        
        $__internal_325f13dbaa33c82915f9bdb6723d50f2591a729bf00dfc3d4b79732fcf7d6c5f->leave($__internal_325f13dbaa33c82915f9bdb6723d50f2591a729bf00dfc3d4b79732fcf7d6c5f_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Responsable/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  71 => 17,  61 => 12,  58 => 11,  52 => 10,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig" %}*/
/* */
/* */
/* {%block quickProfile %}*/
/*     {{ include('CondorsTnMallBundle::Responsable/quickProfile.html.twig') }} */
/* {%endblock quickProfile %}*/
/* */
/* */
/* */
/* {% block nav_menu %}*/
/* */
/* {{ include('CondorsTnMallBundle::Responsable/navMenu.html.twig') }} */
/* */
/* {%endblock nav_menu%}*/
/* */
/* */
/*  {% block footer %}*/
/*   {{ include('CondorsTnMallBundle::Responsable/footer.html.twig') }} */
/* {% endblock footer %}*/
