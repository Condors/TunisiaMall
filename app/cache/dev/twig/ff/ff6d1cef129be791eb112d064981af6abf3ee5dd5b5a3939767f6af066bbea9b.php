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
        $__internal_92b3695001fe0f9d57fff098f5a8218fa570a2d32f1ffdb062940d959f45a927 = $this->env->getExtension("native_profiler");
        $__internal_92b3695001fe0f9d57fff098f5a8218fa570a2d32f1ffdb062940d959f45a927->enter($__internal_92b3695001fe0f9d57fff098f5a8218fa570a2d32f1ffdb062940d959f45a927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92b3695001fe0f9d57fff098f5a8218fa570a2d32f1ffdb062940d959f45a927->leave($__internal_92b3695001fe0f9d57fff098f5a8218fa570a2d32f1ffdb062940d959f45a927_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee4041eea624ea36f9bb662dfb0537c87a9af464805b8929c04405c42229d92e = $this->env->getExtension("native_profiler");
        $__internal_ee4041eea624ea36f9bb662dfb0537c87a9af464805b8929c04405c42229d92e->enter($__internal_ee4041eea624ea36f9bb662dfb0537c87a9af464805b8929c04405c42229d92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_ee4041eea624ea36f9bb662dfb0537c87a9af464805b8929c04405c42229d92e->leave($__internal_ee4041eea624ea36f9bb662dfb0537c87a9af464805b8929c04405c42229d92e_prof);

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
