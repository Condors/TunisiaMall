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
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::ResponsableLayouts/Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65ce6d268a835370d6325b5b7efee4062db6a19cfe4b15c74fa937155250de66 = $this->env->getExtension("native_profiler");
        $__internal_65ce6d268a835370d6325b5b7efee4062db6a19cfe4b15c74fa937155250de66->enter($__internal_65ce6d268a835370d6325b5b7efee4062db6a19cfe4b15c74fa937155250de66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65ce6d268a835370d6325b5b7efee4062db6a19cfe4b15c74fa937155250de66->leave($__internal_65ce6d268a835370d6325b5b7efee4062db6a19cfe4b15c74fa937155250de66_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_fdfbaee7af4c194676219b2699484ebee77b063b40c92810197c2a36a6b5c5ca = $this->env->getExtension("native_profiler");
        $__internal_fdfbaee7af4c194676219b2699484ebee77b063b40c92810197c2a36a6b5c5ca->enter($__internal_fdfbaee7af4c194676219b2699484ebee77b063b40c92810197c2a36a6b5c5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_fdfbaee7af4c194676219b2699484ebee77b063b40c92810197c2a36a6b5c5ca->leave($__internal_fdfbaee7af4c194676219b2699484ebee77b063b40c92810197c2a36a6b5c5ca_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_b5d765323ec21d0075cd102fc7b0c64038fdcd50c729dc34cfe1d47e8410dc9e = $this->env->getExtension("native_profiler");
        $__internal_b5d765323ec21d0075cd102fc7b0c64038fdcd50c729dc34cfe1d47e8410dc9e->enter($__internal_b5d765323ec21d0075cd102fc7b0c64038fdcd50c729dc34cfe1d47e8410dc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_b5d765323ec21d0075cd102fc7b0c64038fdcd50c729dc34cfe1d47e8410dc9e->leave($__internal_b5d765323ec21d0075cd102fc7b0c64038fdcd50c729dc34cfe1d47e8410dc9e_prof);

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
        return array (  60 => 12,  57 => 11,  51 => 10,  41 => 5,  35 => 4,  11 => 1,);
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
