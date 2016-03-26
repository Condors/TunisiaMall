<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_5b5181bc2253a81534776001f31761dbc7e02934f6d2a1d40346e6b52b7be7a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_bb7c606a430455f4287a2d70261663d04c2b97ef4cc794dd8fde9947fdc22753 = $this->env->getExtension("native_profiler");
        $__internal_bb7c606a430455f4287a2d70261663d04c2b97ef4cc794dd8fde9947fdc22753->enter($__internal_bb7c606a430455f4287a2d70261663d04c2b97ef4cc794dd8fde9947fdc22753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7c606a430455f4287a2d70261663d04c2b97ef4cc794dd8fde9947fdc22753->leave($__internal_bb7c606a430455f4287a2d70261663d04c2b97ef4cc794dd8fde9947fdc22753_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0b0a1294e4acb5e315e034d1a8b79091bcaf326ee9501948b132aab0615c433 = $this->env->getExtension("native_profiler");
        $__internal_d0b0a1294e4acb5e315e034d1a8b79091bcaf326ee9501948b132aab0615c433->enter($__internal_d0b0a1294e4acb5e315e034d1a8b79091bcaf326ee9501948b132aab0615c433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_d0b0a1294e4acb5e315e034d1a8b79091bcaf326ee9501948b132aab0615c433->leave($__internal_d0b0a1294e4acb5e315e034d1a8b79091bcaf326ee9501948b132aab0615c433_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
