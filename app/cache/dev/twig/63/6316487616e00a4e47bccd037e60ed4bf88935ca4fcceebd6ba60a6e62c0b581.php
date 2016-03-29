<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_a7ab57818cc3e6a0f2cbefd2e85a8c8310c6d0f6eee2dab0deded0a82f62c915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_96a1ee8d05983a06184e8e1b1acf8a4c0aa8785a3cff287f9998560236708b56 = $this->env->getExtension("native_profiler");
        $__internal_96a1ee8d05983a06184e8e1b1acf8a4c0aa8785a3cff287f9998560236708b56->enter($__internal_96a1ee8d05983a06184e8e1b1acf8a4c0aa8785a3cff287f9998560236708b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a1ee8d05983a06184e8e1b1acf8a4c0aa8785a3cff287f9998560236708b56->leave($__internal_96a1ee8d05983a06184e8e1b1acf8a4c0aa8785a3cff287f9998560236708b56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad0ad08437a809991809eb824236f37f4a7174e48e4fec0f4c0e3d6d5880a3dc = $this->env->getExtension("native_profiler");
        $__internal_ad0ad08437a809991809eb824236f37f4a7174e48e4fec0f4c0e3d6d5880a3dc->enter($__internal_ad0ad08437a809991809eb824236f37f4a7174e48e4fec0f4c0e3d6d5880a3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_ad0ad08437a809991809eb824236f37f4a7174e48e4fec0f4c0e3d6d5880a3dc->leave($__internal_ad0ad08437a809991809eb824236f37f4a7174e48e4fec0f4c0e3d6d5880a3dc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
