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
        $__internal_d3b9314e8229bc83d4f1a3d61cd15d0966c29377f92e75deb6d283ccacde8233 = $this->env->getExtension("native_profiler");
        $__internal_d3b9314e8229bc83d4f1a3d61cd15d0966c29377f92e75deb6d283ccacde8233->enter($__internal_d3b9314e8229bc83d4f1a3d61cd15d0966c29377f92e75deb6d283ccacde8233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3b9314e8229bc83d4f1a3d61cd15d0966c29377f92e75deb6d283ccacde8233->leave($__internal_d3b9314e8229bc83d4f1a3d61cd15d0966c29377f92e75deb6d283ccacde8233_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d1dc34b0a78466e76fa62a5fb67a017ac7d0f69c890b7134f58010c7c572020 = $this->env->getExtension("native_profiler");
        $__internal_4d1dc34b0a78466e76fa62a5fb67a017ac7d0f69c890b7134f58010c7c572020->enter($__internal_4d1dc34b0a78466e76fa62a5fb67a017ac7d0f69c890b7134f58010c7c572020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_4d1dc34b0a78466e76fa62a5fb67a017ac7d0f69c890b7134f58010c7c572020->leave($__internal_4d1dc34b0a78466e76fa62a5fb67a017ac7d0f69c890b7134f58010c7c572020_prof);

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
