<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_b140fb18f9da3912c429beffdc5b35e354c42bca8a57d8ffabb7ce752316958d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_b58520458b866043373557890fc65f09003f8a2d4f6d8f48337b5e6178377636 = $this->env->getExtension("native_profiler");
        $__internal_b58520458b866043373557890fc65f09003f8a2d4f6d8f48337b5e6178377636->enter($__internal_b58520458b866043373557890fc65f09003f8a2d4f6d8f48337b5e6178377636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b58520458b866043373557890fc65f09003f8a2d4f6d8f48337b5e6178377636->leave($__internal_b58520458b866043373557890fc65f09003f8a2d4f6d8f48337b5e6178377636_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_424cf7ce38b138d63121675025fbd3336226b3b76725635e13f8b3e456157ed1 = $this->env->getExtension("native_profiler");
        $__internal_424cf7ce38b138d63121675025fbd3336226b3b76725635e13f8b3e456157ed1->enter($__internal_424cf7ce38b138d63121675025fbd3336226b3b76725635e13f8b3e456157ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_424cf7ce38b138d63121675025fbd3336226b3b76725635e13f8b3e456157ed1->leave($__internal_424cf7ce38b138d63121675025fbd3336226b3b76725635e13f8b3e456157ed1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
