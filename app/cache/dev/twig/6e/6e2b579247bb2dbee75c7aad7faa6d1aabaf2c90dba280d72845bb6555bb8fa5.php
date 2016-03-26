<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c1c7453da4d79aaac6ec6edbc19543d2cac9988082a30cbcd379df6b49e3ddda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_36b469b02fb259b38d7edf0da116142e52f9ab07ab07750a21f93c4fb08a7d41 = $this->env->getExtension("native_profiler");
        $__internal_36b469b02fb259b38d7edf0da116142e52f9ab07ab07750a21f93c4fb08a7d41->enter($__internal_36b469b02fb259b38d7edf0da116142e52f9ab07ab07750a21f93c4fb08a7d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36b469b02fb259b38d7edf0da116142e52f9ab07ab07750a21f93c4fb08a7d41->leave($__internal_36b469b02fb259b38d7edf0da116142e52f9ab07ab07750a21f93c4fb08a7d41_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bf8e36db099756fcbb737207bda7f2a6c385841ce32f490255a3cc1d3f2357fb = $this->env->getExtension("native_profiler");
        $__internal_bf8e36db099756fcbb737207bda7f2a6c385841ce32f490255a3cc1d3f2357fb->enter($__internal_bf8e36db099756fcbb737207bda7f2a6c385841ce32f490255a3cc1d3f2357fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_bf8e36db099756fcbb737207bda7f2a6c385841ce32f490255a3cc1d3f2357fb->leave($__internal_bf8e36db099756fcbb737207bda7f2a6c385841ce32f490255a3cc1d3f2357fb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
