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
        $__internal_0a5a4321114b923d79a0445f639232ef0d22f9586dbad2559af94916f37f329b = $this->env->getExtension("native_profiler");
        $__internal_0a5a4321114b923d79a0445f639232ef0d22f9586dbad2559af94916f37f329b->enter($__internal_0a5a4321114b923d79a0445f639232ef0d22f9586dbad2559af94916f37f329b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a5a4321114b923d79a0445f639232ef0d22f9586dbad2559af94916f37f329b->leave($__internal_0a5a4321114b923d79a0445f639232ef0d22f9586dbad2559af94916f37f329b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27b05fc69039154c0f0f9fc4f660e097b6e5fea678d437812f19d3f9ebb4ddaa = $this->env->getExtension("native_profiler");
        $__internal_27b05fc69039154c0f0f9fc4f660e097b6e5fea678d437812f19d3f9ebb4ddaa->enter($__internal_27b05fc69039154c0f0f9fc4f660e097b6e5fea678d437812f19d3f9ebb4ddaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_27b05fc69039154c0f0f9fc4f660e097b6e5fea678d437812f19d3f9ebb4ddaa->leave($__internal_27b05fc69039154c0f0f9fc4f660e097b6e5fea678d437812f19d3f9ebb4ddaa_prof);

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
