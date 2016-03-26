<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_615d022b0413094de65ab85796791c3fdcc4d3b4fe4b3384d4f2f90367e327d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_93c4353b01ca427f74926ca275cfe40ff24ffa04c0b4aa475e55d104c30a3a24 = $this->env->getExtension("native_profiler");
        $__internal_93c4353b01ca427f74926ca275cfe40ff24ffa04c0b4aa475e55d104c30a3a24->enter($__internal_93c4353b01ca427f74926ca275cfe40ff24ffa04c0b4aa475e55d104c30a3a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93c4353b01ca427f74926ca275cfe40ff24ffa04c0b4aa475e55d104c30a3a24->leave($__internal_93c4353b01ca427f74926ca275cfe40ff24ffa04c0b4aa475e55d104c30a3a24_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4f3c5cdf6db37d55d5a32232c5f05ff22b32d1a2fa075d242fc55776f23b47f = $this->env->getExtension("native_profiler");
        $__internal_f4f3c5cdf6db37d55d5a32232c5f05ff22b32d1a2fa075d242fc55776f23b47f->enter($__internal_f4f3c5cdf6db37d55d5a32232c5f05ff22b32d1a2fa075d242fc55776f23b47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_f4f3c5cdf6db37d55d5a32232c5f05ff22b32d1a2fa075d242fc55776f23b47f->leave($__internal_f4f3c5cdf6db37d55d5a32232c5f05ff22b32d1a2fa075d242fc55776f23b47f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
