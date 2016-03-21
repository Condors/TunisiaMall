<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a1767b042796e7ee7ed77bc0a3fdee3f65ab44acd0762474d28f42b790b7e9b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_145d87feff305840ea3e1713349e0abeda604e182616a4b1589bd731eef7ed36 = $this->env->getExtension("native_profiler");
        $__internal_145d87feff305840ea3e1713349e0abeda604e182616a4b1589bd731eef7ed36->enter($__internal_145d87feff305840ea3e1713349e0abeda604e182616a4b1589bd731eef7ed36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_145d87feff305840ea3e1713349e0abeda604e182616a4b1589bd731eef7ed36->leave($__internal_145d87feff305840ea3e1713349e0abeda604e182616a4b1589bd731eef7ed36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a6e3d13d50958acd6010d45750a4c012fa716ddd2af27b27d65fd9fcbc7bb76 = $this->env->getExtension("native_profiler");
        $__internal_2a6e3d13d50958acd6010d45750a4c012fa716ddd2af27b27d65fd9fcbc7bb76->enter($__internal_2a6e3d13d50958acd6010d45750a4c012fa716ddd2af27b27d65fd9fcbc7bb76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2a6e3d13d50958acd6010d45750a4c012fa716ddd2af27b27d65fd9fcbc7bb76->leave($__internal_2a6e3d13d50958acd6010d45750a4c012fa716ddd2af27b27d65fd9fcbc7bb76_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
