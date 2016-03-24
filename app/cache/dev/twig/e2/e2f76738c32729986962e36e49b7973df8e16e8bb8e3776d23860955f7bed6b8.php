<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_0530c21eb5f2ed8ee79fa7af766fc3ce4bebaf1136b06c6a07db253c3e6afd5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_548a9610c3a38dd3a0fa4b9f7c2071a218c26dd3bad7e2f9955388600ec4cc4d = $this->env->getExtension("native_profiler");
        $__internal_548a9610c3a38dd3a0fa4b9f7c2071a218c26dd3bad7e2f9955388600ec4cc4d->enter($__internal_548a9610c3a38dd3a0fa4b9f7c2071a218c26dd3bad7e2f9955388600ec4cc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_548a9610c3a38dd3a0fa4b9f7c2071a218c26dd3bad7e2f9955388600ec4cc4d->leave($__internal_548a9610c3a38dd3a0fa4b9f7c2071a218c26dd3bad7e2f9955388600ec4cc4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_959763605f36b9321657504fb2c19ab48a865fa75e27ff02511e6557cbc31e71 = $this->env->getExtension("native_profiler");
        $__internal_959763605f36b9321657504fb2c19ab48a865fa75e27ff02511e6557cbc31e71->enter($__internal_959763605f36b9321657504fb2c19ab48a865fa75e27ff02511e6557cbc31e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_959763605f36b9321657504fb2c19ab48a865fa75e27ff02511e6557cbc31e71->leave($__internal_959763605f36b9321657504fb2c19ab48a865fa75e27ff02511e6557cbc31e71_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
