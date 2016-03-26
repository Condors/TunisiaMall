<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a776b9e23b743365830103f855271edac16513211fe5d242abe2e55bac34df8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_e473afc893991a3fec5733ce6a84ca4d09c394f81916566e71f6586bc0fe6e2f = $this->env->getExtension("native_profiler");
        $__internal_e473afc893991a3fec5733ce6a84ca4d09c394f81916566e71f6586bc0fe6e2f->enter($__internal_e473afc893991a3fec5733ce6a84ca4d09c394f81916566e71f6586bc0fe6e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e473afc893991a3fec5733ce6a84ca4d09c394f81916566e71f6586bc0fe6e2f->leave($__internal_e473afc893991a3fec5733ce6a84ca4d09c394f81916566e71f6586bc0fe6e2f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ffd994f333be881b904f5516e59501ba541da3089c99d3f809bf8ed8e03cd62 = $this->env->getExtension("native_profiler");
        $__internal_2ffd994f333be881b904f5516e59501ba541da3089c99d3f809bf8ed8e03cd62->enter($__internal_2ffd994f333be881b904f5516e59501ba541da3089c99d3f809bf8ed8e03cd62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_2ffd994f333be881b904f5516e59501ba541da3089c99d3f809bf8ed8e03cd62->leave($__internal_2ffd994f333be881b904f5516e59501ba541da3089c99d3f809bf8ed8e03cd62_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
