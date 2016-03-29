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
        $__internal_c91b8cb587f5dacb3cae1cb604ca0f343fe26be57a43c82c6c8ddeae7de6cfa1 = $this->env->getExtension("native_profiler");
        $__internal_c91b8cb587f5dacb3cae1cb604ca0f343fe26be57a43c82c6c8ddeae7de6cfa1->enter($__internal_c91b8cb587f5dacb3cae1cb604ca0f343fe26be57a43c82c6c8ddeae7de6cfa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c91b8cb587f5dacb3cae1cb604ca0f343fe26be57a43c82c6c8ddeae7de6cfa1->leave($__internal_c91b8cb587f5dacb3cae1cb604ca0f343fe26be57a43c82c6c8ddeae7de6cfa1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9a7b2d08f2df611ddb18f8e4a493ab489a50decc06587402923589869cc609c = $this->env->getExtension("native_profiler");
        $__internal_e9a7b2d08f2df611ddb18f8e4a493ab489a50decc06587402923589869cc609c->enter($__internal_e9a7b2d08f2df611ddb18f8e4a493ab489a50decc06587402923589869cc609c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e9a7b2d08f2df611ddb18f8e4a493ab489a50decc06587402923589869cc609c->leave($__internal_e9a7b2d08f2df611ddb18f8e4a493ab489a50decc06587402923589869cc609c_prof);

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
