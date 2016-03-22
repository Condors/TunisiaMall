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
        $__internal_e07408b69c0d726d73722682cdc324610b45ad0940c6edf7d18c56d95a8f3089 = $this->env->getExtension("native_profiler");
        $__internal_e07408b69c0d726d73722682cdc324610b45ad0940c6edf7d18c56d95a8f3089->enter($__internal_e07408b69c0d726d73722682cdc324610b45ad0940c6edf7d18c56d95a8f3089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Responsable/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e07408b69c0d726d73722682cdc324610b45ad0940c6edf7d18c56d95a8f3089->leave($__internal_e07408b69c0d726d73722682cdc324610b45ad0940c6edf7d18c56d95a8f3089_prof);

    }

    // line 4
    public function block_quickProfile($context, array $blocks = array())
    {
        $__internal_82cca2068b206d1e077af481092dfb333bd52755ac0e021c718ecdb5fde5c9bc = $this->env->getExtension("native_profiler");
        $__internal_82cca2068b206d1e077af481092dfb333bd52755ac0e021c718ecdb5fde5c9bc->enter($__internal_82cca2068b206d1e077af481092dfb333bd52755ac0e021c718ecdb5fde5c9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "quickProfile"));

        // line 5
        echo "    ";
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/quickProfile.html.twig");
        echo " 
";
        
        $__internal_82cca2068b206d1e077af481092dfb333bd52755ac0e021c718ecdb5fde5c9bc->leave($__internal_82cca2068b206d1e077af481092dfb333bd52755ac0e021c718ecdb5fde5c9bc_prof);

    }

    // line 10
    public function block_nav_menu($context, array $blocks = array())
    {
        $__internal_474d887c5e645aaf70aad8e175b7bbcfcc78d659dc991bea66ee5d6921f9c71d = $this->env->getExtension("native_profiler");
        $__internal_474d887c5e645aaf70aad8e175b7bbcfcc78d659dc991bea66ee5d6921f9c71d->enter($__internal_474d887c5e645aaf70aad8e175b7bbcfcc78d659dc991bea66ee5d6921f9c71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav_menu"));

        // line 11
        echo "
";
        // line 12
        echo twig_include($this->env, $context, "CondorsTnMallBundle::Responsable/navMenu.html.twig");
        echo " 

";
        
        $__internal_474d887c5e645aaf70aad8e175b7bbcfcc78d659dc991bea66ee5d6921f9c71d->leave($__internal_474d887c5e645aaf70aad8e175b7bbcfcc78d659dc991bea66ee5d6921f9c71d_prof);

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
