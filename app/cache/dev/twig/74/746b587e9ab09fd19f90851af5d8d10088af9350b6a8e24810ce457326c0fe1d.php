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
        $__internal_5d02f3cb6d8f0fd31fb1f36b43b9c73f267388c6a5cdb7e352e3da7f209144ee = $this->env->getExtension("native_profiler");
        $__internal_5d02f3cb6d8f0fd31fb1f36b43b9c73f267388c6a5cdb7e352e3da7f209144ee->enter($__internal_5d02f3cb6d8f0fd31fb1f36b43b9c73f267388c6a5cdb7e352e3da7f209144ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d02f3cb6d8f0fd31fb1f36b43b9c73f267388c6a5cdb7e352e3da7f209144ee->leave($__internal_5d02f3cb6d8f0fd31fb1f36b43b9c73f267388c6a5cdb7e352e3da7f209144ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ddb2a465c5b6b577bc60628fa46146809c6387170ae6ff69468c8afeb6ff898 = $this->env->getExtension("native_profiler");
        $__internal_8ddb2a465c5b6b577bc60628fa46146809c6387170ae6ff69468c8afeb6ff898->enter($__internal_8ddb2a465c5b6b577bc60628fa46146809c6387170ae6ff69468c8afeb6ff898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_8ddb2a465c5b6b577bc60628fa46146809c6387170ae6ff69468c8afeb6ff898->leave($__internal_8ddb2a465c5b6b577bc60628fa46146809c6387170ae6ff69468c8afeb6ff898_prof);

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
