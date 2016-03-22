<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_37d9a9b7019f5c836c8ea9e2f39a947fbaecf3f64f52850d81f9d637b6a3790a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_76f11c93fb655afb0c6cf7b31c6792c1900eaee286cdda96702202efd4cfe098 = $this->env->getExtension("native_profiler");
        $__internal_76f11c93fb655afb0c6cf7b31c6792c1900eaee286cdda96702202efd4cfe098->enter($__internal_76f11c93fb655afb0c6cf7b31c6792c1900eaee286cdda96702202efd4cfe098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76f11c93fb655afb0c6cf7b31c6792c1900eaee286cdda96702202efd4cfe098->leave($__internal_76f11c93fb655afb0c6cf7b31c6792c1900eaee286cdda96702202efd4cfe098_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30a3cc85b0e077cfd3cb963024ab8e153db82cdc8d1cf32ac5837bcf2f174994 = $this->env->getExtension("native_profiler");
        $__internal_30a3cc85b0e077cfd3cb963024ab8e153db82cdc8d1cf32ac5837bcf2f174994->enter($__internal_30a3cc85b0e077cfd3cb963024ab8e153db82cdc8d1cf32ac5837bcf2f174994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_30a3cc85b0e077cfd3cb963024ab8e153db82cdc8d1cf32ac5837bcf2f174994->leave($__internal_30a3cc85b0e077cfd3cb963024ab8e153db82cdc8d1cf32ac5837bcf2f174994_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
