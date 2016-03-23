<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_9b3bb71b53fc443b739d167c2301f662e651d1f6878ae685e15e33445e7c2055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_03dbf8280893099170fa4127f09205c5f81107c534711d8087aedb40a7dc74de = $this->env->getExtension("native_profiler");
        $__internal_03dbf8280893099170fa4127f09205c5f81107c534711d8087aedb40a7dc74de->enter($__internal_03dbf8280893099170fa4127f09205c5f81107c534711d8087aedb40a7dc74de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03dbf8280893099170fa4127f09205c5f81107c534711d8087aedb40a7dc74de->leave($__internal_03dbf8280893099170fa4127f09205c5f81107c534711d8087aedb40a7dc74de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7af7dde73da462f958d0dd82f09a3947715fcda715d28bf252c75a206e64d4be = $this->env->getExtension("native_profiler");
        $__internal_7af7dde73da462f958d0dd82f09a3947715fcda715d28bf252c75a206e64d4be->enter($__internal_7af7dde73da462f958d0dd82f09a3947715fcda715d28bf252c75a206e64d4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_7af7dde73da462f958d0dd82f09a3947715fcda715d28bf252c75a206e64d4be->leave($__internal_7af7dde73da462f958d0dd82f09a3947715fcda715d28bf252c75a206e64d4be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
