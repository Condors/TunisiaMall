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
        $__internal_9c922c51e5fb6224261b64038af586545c84198a6cf0bc40305e98ea53fd01f8 = $this->env->getExtension("native_profiler");
        $__internal_9c922c51e5fb6224261b64038af586545c84198a6cf0bc40305e98ea53fd01f8->enter($__internal_9c922c51e5fb6224261b64038af586545c84198a6cf0bc40305e98ea53fd01f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c922c51e5fb6224261b64038af586545c84198a6cf0bc40305e98ea53fd01f8->leave($__internal_9c922c51e5fb6224261b64038af586545c84198a6cf0bc40305e98ea53fd01f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_715fd2318c2b7bcd7508b317d15db633eae648a1357008cefda89170ea0ef221 = $this->env->getExtension("native_profiler");
        $__internal_715fd2318c2b7bcd7508b317d15db633eae648a1357008cefda89170ea0ef221->enter($__internal_715fd2318c2b7bcd7508b317d15db633eae648a1357008cefda89170ea0ef221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_715fd2318c2b7bcd7508b317d15db633eae648a1357008cefda89170ea0ef221->leave($__internal_715fd2318c2b7bcd7508b317d15db633eae648a1357008cefda89170ea0ef221_prof);

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
