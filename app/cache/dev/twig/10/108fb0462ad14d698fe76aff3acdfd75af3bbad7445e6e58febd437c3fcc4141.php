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
        $__internal_8534f7bd932402299fb7d7d4839756b0296a270af4b9b244c8a3e6d3b777d72e = $this->env->getExtension("native_profiler");
        $__internal_8534f7bd932402299fb7d7d4839756b0296a270af4b9b244c8a3e6d3b777d72e->enter($__internal_8534f7bd932402299fb7d7d4839756b0296a270af4b9b244c8a3e6d3b777d72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:SimpleVisitor:my-account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8534f7bd932402299fb7d7d4839756b0296a270af4b9b244c8a3e6d3b777d72e->leave($__internal_8534f7bd932402299fb7d7d4839756b0296a270af4b9b244c8a3e6d3b777d72e_prof);

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
