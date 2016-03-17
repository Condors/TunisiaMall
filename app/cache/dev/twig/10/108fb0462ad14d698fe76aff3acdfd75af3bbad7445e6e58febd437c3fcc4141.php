<?php

/* CondorsTnMallBundle:SimpleVisitor:my-account.html.twig */
class __TwigTemplate_3c0a618aca29dba7cd40419d9dbee20f4dcef2d10df4d665d3a4f08e49fb0e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CondorsTnMallBundle::MyAccountTemplate.html.twig", "CondorsTnMallBundle:SimpleVisitor:my-account.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "CondorsTnMallBundle::MyAccountTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc0c1fa3a2be46a5c6f87d2d4996dec9c51eb8c82c037ca2c9594eddeeb44fe5 = $this->env->getExtension("native_profiler");
        $__internal_dc0c1fa3a2be46a5c6f87d2d4996dec9c51eb8c82c037ca2c9594eddeeb44fe5->enter($__internal_dc0c1fa3a2be46a5c6f87d2d4996dec9c51eb8c82c037ca2c9594eddeeb44fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:SimpleVisitor:my-account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc0c1fa3a2be46a5c6f87d2d4996dec9c51eb8c82c037ca2c9594eddeeb44fe5->leave($__internal_dc0c1fa3a2be46a5c6f87d2d4996dec9c51eb8c82c037ca2c9594eddeeb44fe5_prof);

    }

    public function getTemplateName()
    {
        return "CondorsTnMallBundle:SimpleVisitor:my-account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "CondorsTnMallBundle::MyAccountTemplate.html.twig" %}*/
/* */
/* */
