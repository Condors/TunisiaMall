<?php

/* CondorsTnMallBundle:Responsable:index.html.twig */
class __TwigTemplate_fede3fd51ffd9069a95c1616af37fffc39df8d05f8d4cd7b4204a3c79bfdacce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig", "CondorsTnMallBundle:Responsable:index.html.twig", 1);
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
        $__internal_3e05a2d49cb39ec63f204a917975b54ac5e36e668930b9fd1be18131dd151136 = $this->env->getExtension("native_profiler");
        $__internal_3e05a2d49cb39ec63f204a917975b54ac5e36e668930b9fd1be18131dd151136->enter($__internal_3e05a2d49cb39ec63f204a917975b54ac5e36e668930b9fd1be18131dd151136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:Responsable:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e05a2d49cb39ec63f204a917975b54ac5e36e668930b9fd1be18131dd151136->leave($__internal_3e05a2d49cb39ec63f204a917975b54ac5e36e668930b9fd1be18131dd151136_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_3c7d5e42a891f1462e6af9a5628c8df3a7017f95bf60b68d8f8bc94f806acff7 = $this->env->getExtension("native_profiler");
        $__internal_3c7d5e42a891f1462e6af9a5628c8df3a7017f95bf60b68d8f8bc94f806acff7->enter($__internal_3c7d5e42a891f1462e6af9a5628c8df3a7017f95bf60b68d8f8bc94f806acff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_3c7d5e42a891f1462e6af9a5628c8df3a7017f95bf60b68d8f8bc94f806acff7->leave($__internal_3c7d5e42a891f1462e6af9a5628c8df3a7017f95bf60b68d8f8bc94f806acff7_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_6fa6130b9479fdb967b60385b4c6671f1f72d2a945e13d7d2e2aab2303bd2357 = $this->env->getExtension("native_profiler");
        $__internal_6fa6130b9479fdb967b60385b4c6671f1f72d2a945e13d7d2e2aab2303bd2357->enter($__internal_6fa6130b9479fdb967b60385b4c6671f1f72d2a945e13d7d2e2aab2303bd2357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_6fa6130b9479fdb967b60385b4c6671f1f72d2a945e13d7d2e2aab2303bd2357->leave($__internal_6fa6130b9479fdb967b60385b4c6671f1f72d2a945e13d7d2e2aab2303bd2357_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_200b11f0c32b6201dcab016f4d7d05045dab1a36284674be29f326ab5f2db65d = $this->env->getExtension("native_profiler");
        $__internal_200b11f0c32b6201dcab016f4d7d05045dab1a36284674be29f326ab5f2db65d->enter($__internal_200b11f0c32b6201dcab016f4d7d05045dab1a36284674be29f326ab5f2db65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "  ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo " 
";
        
        $__internal_200b11f0c32b6201dcab016f4d7d05045dab1a36284674be29f326ab5f2db65d->leave($__internal_200b11f0c32b6201dcab016f4d7d05045dab1a36284674be29f326ab5f2db65d_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:Responsable:index.html.twig";
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
