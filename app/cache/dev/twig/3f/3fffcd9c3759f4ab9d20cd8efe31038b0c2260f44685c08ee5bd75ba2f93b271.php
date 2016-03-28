<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_37d9a9b7019f5c836c8ea9e2f39a947fbaecf3f64f52850d81f9d637b6a3790a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_26215391003d7b40f5896b55332f2371e445438e2d967f4298863c6a43b5ddbd = $this->env->getExtension("native_profiler");
        $__internal_26215391003d7b40f5896b55332f2371e445438e2d967f4298863c6a43b5ddbd->enter($__internal_26215391003d7b40f5896b55332f2371e445438e2d967f4298863c6a43b5ddbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26215391003d7b40f5896b55332f2371e445438e2d967f4298863c6a43b5ddbd->leave($__internal_26215391003d7b40f5896b55332f2371e445438e2d967f4298863c6a43b5ddbd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_779b923e6d0815f98adc75c25bf53cfc146c1f05e793598d74417ae2f44f6d12 = $this->env->getExtension("native_profiler");
        $__internal_779b923e6d0815f98adc75c25bf53cfc146c1f05e793598d74417ae2f44f6d12->enter($__internal_779b923e6d0815f98adc75c25bf53cfc146c1f05e793598d74417ae2f44f6d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_779b923e6d0815f98adc75c25bf53cfc146c1f05e793598d74417ae2f44f6d12->leave($__internal_779b923e6d0815f98adc75c25bf53cfc146c1f05e793598d74417ae2f44f6d12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
