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
        $__internal_b286273858349be8b329bb8b0e0fb39bef081fda8dc5da02ae76d1f32581e535 = $this->env->getExtension("native_profiler");
        $__internal_b286273858349be8b329bb8b0e0fb39bef081fda8dc5da02ae76d1f32581e535->enter($__internal_b286273858349be8b329bb8b0e0fb39bef081fda8dc5da02ae76d1f32581e535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CondorsTnMallBundle:SimpleVisitor:my-account.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b286273858349be8b329bb8b0e0fb39bef081fda8dc5da02ae76d1f32581e535->leave($__internal_b286273858349be8b329bb8b0e0fb39bef081fda8dc5da02ae76d1f32581e535_prof);

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
