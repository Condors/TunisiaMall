<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_626674d07526e42d6a172b1f92ef2e1e0cd9863c343ed5b510e741ee8175c38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_0f662cc8d3f7e4aa47581deff16b5ef9a627dca06f9b84a1e35d8d342401fbc1 = $this->env->getExtension("native_profiler");
        $__internal_0f662cc8d3f7e4aa47581deff16b5ef9a627dca06f9b84a1e35d8d342401fbc1->enter($__internal_0f662cc8d3f7e4aa47581deff16b5ef9a627dca06f9b84a1e35d8d342401fbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f662cc8d3f7e4aa47581deff16b5ef9a627dca06f9b84a1e35d8d342401fbc1->leave($__internal_0f662cc8d3f7e4aa47581deff16b5ef9a627dca06f9b84a1e35d8d342401fbc1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0052575da3fd768a24a6f5ae7391273f652551542b6616dfdc0a85099aa32097 = $this->env->getExtension("native_profiler");
        $__internal_0052575da3fd768a24a6f5ae7391273f652551542b6616dfdc0a85099aa32097->enter($__internal_0052575da3fd768a24a6f5ae7391273f652551542b6616dfdc0a85099aa32097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_0052575da3fd768a24a6f5ae7391273f652551542b6616dfdc0a85099aa32097->leave($__internal_0052575da3fd768a24a6f5ae7391273f652551542b6616dfdc0a85099aa32097_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
