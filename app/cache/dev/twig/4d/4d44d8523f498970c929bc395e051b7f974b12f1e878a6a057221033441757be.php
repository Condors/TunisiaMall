<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a776b9e23b743365830103f855271edac16513211fe5d242abe2e55bac34df8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_49fa47a0b7033daed1d10be251eb0d20919070417765a96b38d6ab44de1410c2 = $this->env->getExtension("native_profiler");
        $__internal_49fa47a0b7033daed1d10be251eb0d20919070417765a96b38d6ab44de1410c2->enter($__internal_49fa47a0b7033daed1d10be251eb0d20919070417765a96b38d6ab44de1410c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49fa47a0b7033daed1d10be251eb0d20919070417765a96b38d6ab44de1410c2->leave($__internal_49fa47a0b7033daed1d10be251eb0d20919070417765a96b38d6ab44de1410c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b48da7b1b2fb7cff769047992b7dd1e6aff12159e2df9e3be07267dab32bf052 = $this->env->getExtension("native_profiler");
        $__internal_b48da7b1b2fb7cff769047992b7dd1e6aff12159e2df9e3be07267dab32bf052->enter($__internal_b48da7b1b2fb7cff769047992b7dd1e6aff12159e2df9e3be07267dab32bf052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_b48da7b1b2fb7cff769047992b7dd1e6aff12159e2df9e3be07267dab32bf052->leave($__internal_b48da7b1b2fb7cff769047992b7dd1e6aff12159e2df9e3be07267dab32bf052_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
