<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c1c7453da4d79aaac6ec6edbc19543d2cac9988082a30cbcd379df6b49e3ddda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_6ea10ca96efe630bbf8cd70f1398cef16038b356b68ba5821ddc341722953bc9 = $this->env->getExtension("native_profiler");
        $__internal_6ea10ca96efe630bbf8cd70f1398cef16038b356b68ba5821ddc341722953bc9->enter($__internal_6ea10ca96efe630bbf8cd70f1398cef16038b356b68ba5821ddc341722953bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea10ca96efe630bbf8cd70f1398cef16038b356b68ba5821ddc341722953bc9->leave($__internal_6ea10ca96efe630bbf8cd70f1398cef16038b356b68ba5821ddc341722953bc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03366dbc6ce0e3208195b530c6586623dda74bd56e1c5adc65f14f4ac7379698 = $this->env->getExtension("native_profiler");
        $__internal_03366dbc6ce0e3208195b530c6586623dda74bd56e1c5adc65f14f4ac7379698->enter($__internal_03366dbc6ce0e3208195b530c6586623dda74bd56e1c5adc65f14f4ac7379698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_03366dbc6ce0e3208195b530c6586623dda74bd56e1c5adc65f14f4ac7379698->leave($__internal_03366dbc6ce0e3208195b530c6586623dda74bd56e1c5adc65f14f4ac7379698_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
