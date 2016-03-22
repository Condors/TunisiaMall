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
        $__internal_12e2b9947dd61d22d418b6909538af5832c62d414d6f013521bc922cf0909781 = $this->env->getExtension("native_profiler");
        $__internal_12e2b9947dd61d22d418b6909538af5832c62d414d6f013521bc922cf0909781->enter($__internal_12e2b9947dd61d22d418b6909538af5832c62d414d6f013521bc922cf0909781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12e2b9947dd61d22d418b6909538af5832c62d414d6f013521bc922cf0909781->leave($__internal_12e2b9947dd61d22d418b6909538af5832c62d414d6f013521bc922cf0909781_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_368d0602534274dd57ae20a099e2ae686df034c74b841546a13af5917862a6f3 = $this->env->getExtension("native_profiler");
        $__internal_368d0602534274dd57ae20a099e2ae686df034c74b841546a13af5917862a6f3->enter($__internal_368d0602534274dd57ae20a099e2ae686df034c74b841546a13af5917862a6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_368d0602534274dd57ae20a099e2ae686df034c74b841546a13af5917862a6f3->leave($__internal_368d0602534274dd57ae20a099e2ae686df034c74b841546a13af5917862a6f3_prof);

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
