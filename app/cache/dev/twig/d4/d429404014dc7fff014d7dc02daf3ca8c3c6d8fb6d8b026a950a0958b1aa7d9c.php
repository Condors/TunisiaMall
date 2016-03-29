<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_135d8db4cb8f551b43d1c917afb773689950ebffd3339b86d7d230ecdcff98df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_0d7d63c3c9779f2d4497ae520664c3a5585e43b0500b9b6e9daae55c5307a34f = $this->env->getExtension("native_profiler");
        $__internal_0d7d63c3c9779f2d4497ae520664c3a5585e43b0500b9b6e9daae55c5307a34f->enter($__internal_0d7d63c3c9779f2d4497ae520664c3a5585e43b0500b9b6e9daae55c5307a34f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d7d63c3c9779f2d4497ae520664c3a5585e43b0500b9b6e9daae55c5307a34f->leave($__internal_0d7d63c3c9779f2d4497ae520664c3a5585e43b0500b9b6e9daae55c5307a34f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d3f2a1498563c9f0fd1a58dcd18571c1f9cbdc0c6126c96b8ded72d0d708e51 = $this->env->getExtension("native_profiler");
        $__internal_6d3f2a1498563c9f0fd1a58dcd18571c1f9cbdc0c6126c96b8ded72d0d708e51->enter($__internal_6d3f2a1498563c9f0fd1a58dcd18571c1f9cbdc0c6126c96b8ded72d0d708e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6d3f2a1498563c9f0fd1a58dcd18571c1f9cbdc0c6126c96b8ded72d0d708e51->leave($__internal_6d3f2a1498563c9f0fd1a58dcd18571c1f9cbdc0c6126c96b8ded72d0d708e51_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
