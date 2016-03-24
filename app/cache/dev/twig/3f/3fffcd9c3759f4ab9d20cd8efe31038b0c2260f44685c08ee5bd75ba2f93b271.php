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
        $__internal_d678b9bea2e7f521e91262a6cf99887dbef38ac8988b4afd1710153943ba231d = $this->env->getExtension("native_profiler");
        $__internal_d678b9bea2e7f521e91262a6cf99887dbef38ac8988b4afd1710153943ba231d->enter($__internal_d678b9bea2e7f521e91262a6cf99887dbef38ac8988b4afd1710153943ba231d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d678b9bea2e7f521e91262a6cf99887dbef38ac8988b4afd1710153943ba231d->leave($__internal_d678b9bea2e7f521e91262a6cf99887dbef38ac8988b4afd1710153943ba231d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3336d2cd2812a7784ee9c2522044716e3e147d054b4cb8be39e1177083859c8d = $this->env->getExtension("native_profiler");
        $__internal_3336d2cd2812a7784ee9c2522044716e3e147d054b4cb8be39e1177083859c8d->enter($__internal_3336d2cd2812a7784ee9c2522044716e3e147d054b4cb8be39e1177083859c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_3336d2cd2812a7784ee9c2522044716e3e147d054b4cb8be39e1177083859c8d->leave($__internal_3336d2cd2812a7784ee9c2522044716e3e147d054b4cb8be39e1177083859c8d_prof);

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
