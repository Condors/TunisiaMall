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
        $__internal_82ce0a82cdd5d75168818d8340093c1b6ae5362c5b653e73b41b28a94ef4f1a3 = $this->env->getExtension("native_profiler");
        $__internal_82ce0a82cdd5d75168818d8340093c1b6ae5362c5b653e73b41b28a94ef4f1a3->enter($__internal_82ce0a82cdd5d75168818d8340093c1b6ae5362c5b653e73b41b28a94ef4f1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ce0a82cdd5d75168818d8340093c1b6ae5362c5b653e73b41b28a94ef4f1a3->leave($__internal_82ce0a82cdd5d75168818d8340093c1b6ae5362c5b653e73b41b28a94ef4f1a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52722b600ae09add2ca683470f58567d6c809a9d071407e9ca26d4a227947850 = $this->env->getExtension("native_profiler");
        $__internal_52722b600ae09add2ca683470f58567d6c809a9d071407e9ca26d4a227947850->enter($__internal_52722b600ae09add2ca683470f58567d6c809a9d071407e9ca26d4a227947850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_52722b600ae09add2ca683470f58567d6c809a9d071407e9ca26d4a227947850->leave($__internal_52722b600ae09add2ca683470f58567d6c809a9d071407e9ca26d4a227947850_prof);

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
