<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_02d767f6154220b74f15c28f2455b601c9a043162d21a168e8ea5c2a86343f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_629ff6b46d5fee0b92cc6bc662b3e53d320cf08dc8f6f18b1f1dae62c71afb67 = $this->env->getExtension("native_profiler");
        $__internal_629ff6b46d5fee0b92cc6bc662b3e53d320cf08dc8f6f18b1f1dae62c71afb67->enter($__internal_629ff6b46d5fee0b92cc6bc662b3e53d320cf08dc8f6f18b1f1dae62c71afb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_629ff6b46d5fee0b92cc6bc662b3e53d320cf08dc8f6f18b1f1dae62c71afb67->leave($__internal_629ff6b46d5fee0b92cc6bc662b3e53d320cf08dc8f6f18b1f1dae62c71afb67_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c904d9806c5b2a15e67a80dd92eadda453e23d7217ffd626d05e66e6689565f9 = $this->env->getExtension("native_profiler");
        $__internal_c904d9806c5b2a15e67a80dd92eadda453e23d7217ffd626d05e66e6689565f9->enter($__internal_c904d9806c5b2a15e67a80dd92eadda453e23d7217ffd626d05e66e6689565f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_c904d9806c5b2a15e67a80dd92eadda453e23d7217ffd626d05e66e6689565f9->leave($__internal_c904d9806c5b2a15e67a80dd92eadda453e23d7217ffd626d05e66e6689565f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
