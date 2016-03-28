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
        $__internal_db6ef7982f0e94028775ee4ca86abdb5a5d75ea6e0921ec7dd58a6b6230af8a9 = $this->env->getExtension("native_profiler");
        $__internal_db6ef7982f0e94028775ee4ca86abdb5a5d75ea6e0921ec7dd58a6b6230af8a9->enter($__internal_db6ef7982f0e94028775ee4ca86abdb5a5d75ea6e0921ec7dd58a6b6230af8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db6ef7982f0e94028775ee4ca86abdb5a5d75ea6e0921ec7dd58a6b6230af8a9->leave($__internal_db6ef7982f0e94028775ee4ca86abdb5a5d75ea6e0921ec7dd58a6b6230af8a9_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_08e23615947757dcd1d1d8c4fca93d800d472c1e1345eac2a61db2960fdb292d = $this->env->getExtension("native_profiler");
        $__internal_08e23615947757dcd1d1d8c4fca93d800d472c1e1345eac2a61db2960fdb292d->enter($__internal_08e23615947757dcd1d1d8c4fca93d800d472c1e1345eac2a61db2960fdb292d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_08e23615947757dcd1d1d8c4fca93d800d472c1e1345eac2a61db2960fdb292d->leave($__internal_08e23615947757dcd1d1d8c4fca93d800d472c1e1345eac2a61db2960fdb292d_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_1945c2935b30ba13b1333bc7d80e80088d53c2977b4302df38f58fc7277b2292 = $this->env->getExtension("native_profiler");
        $__internal_1945c2935b30ba13b1333bc7d80e80088d53c2977b4302df38f58fc7277b2292->enter($__internal_1945c2935b30ba13b1333bc7d80e80088d53c2977b4302df38f58fc7277b2292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_1945c2935b30ba13b1333bc7d80e80088d53c2977b4302df38f58fc7277b2292->leave($__internal_1945c2935b30ba13b1333bc7d80e80088d53c2977b4302df38f58fc7277b2292_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6d9463bab3bfad2398618a1aa63841dbaaa5cba9f373cfcb2173fddb067d41e7 = $this->env->getExtension("native_profiler");
        $__internal_6d9463bab3bfad2398618a1aa63841dbaaa5cba9f373cfcb2173fddb067d41e7->enter($__internal_6d9463bab3bfad2398618a1aa63841dbaaa5cba9f373cfcb2173fddb067d41e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "  ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo " 
";
        
        $__internal_6d9463bab3bfad2398618a1aa63841dbaaa5cba9f373cfcb2173fddb067d41e7->leave($__internal_6d9463bab3bfad2398618a1aa63841dbaaa5cba9f373cfcb2173fddb067d41e7_prof);

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
