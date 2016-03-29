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
        $__internal_f3b221ca363b69639034202724ea9b73a8316830b2b6ac72ad286d2909bf7a6b = $this->env->getExtension("native_profiler");
        $__internal_f3b221ca363b69639034202724ea9b73a8316830b2b6ac72ad286d2909bf7a6b->enter($__internal_f3b221ca363b69639034202724ea9b73a8316830b2b6ac72ad286d2909bf7a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3b221ca363b69639034202724ea9b73a8316830b2b6ac72ad286d2909bf7a6b->leave($__internal_f3b221ca363b69639034202724ea9b73a8316830b2b6ac72ad286d2909bf7a6b_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_3b2e3fa91502cdcd429435fc27942d57b6add88e5fd5ce1f0dc9d74514d6a553 = $this->env->getExtension("native_profiler");
        $__internal_3b2e3fa91502cdcd429435fc27942d57b6add88e5fd5ce1f0dc9d74514d6a553->enter($__internal_3b2e3fa91502cdcd429435fc27942d57b6add88e5fd5ce1f0dc9d74514d6a553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_3b2e3fa91502cdcd429435fc27942d57b6add88e5fd5ce1f0dc9d74514d6a553->leave($__internal_3b2e3fa91502cdcd429435fc27942d57b6add88e5fd5ce1f0dc9d74514d6a553_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_b199001bfae5c071bd49e823f09c482dfef454ec3bf39d23433fbadf1feddfac = $this->env->getExtension("native_profiler");
        $__internal_b199001bfae5c071bd49e823f09c482dfef454ec3bf39d23433fbadf1feddfac->enter($__internal_b199001bfae5c071bd49e823f09c482dfef454ec3bf39d23433fbadf1feddfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_b199001bfae5c071bd49e823f09c482dfef454ec3bf39d23433fbadf1feddfac->leave($__internal_b199001bfae5c071bd49e823f09c482dfef454ec3bf39d23433fbadf1feddfac_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = array())
    {
        $__internal_94d2c0f1735a64e0bd77e830c186c5cfdb614c21975c92f66abb31d5f898231e = $this->env->getExtension("native_profiler");
        $__internal_94d2c0f1735a64e0bd77e830c186c5cfdb614c21975c92f66abb31d5f898231e->enter($__internal_94d2c0f1735a64e0bd77e830c186c5cfdb614c21975c92f66abb31d5f898231e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "  ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/footer.html.twig");
        echo " 
";
        
        $__internal_94d2c0f1735a64e0bd77e830c186c5cfdb614c21975c92f66abb31d5f898231e->leave($__internal_94d2c0f1735a64e0bd77e830c186c5cfdb614c21975c92f66abb31d5f898231e_prof);

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
