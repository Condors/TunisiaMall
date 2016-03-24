<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a825799eaebe76fe3e118590279c95c9af4f8bef7f8d8c51044587d72e2e348a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_e7c29cc4464224014a980c9e50d17efa8fb454b3b08d7867b72ded5e96a97312 = $this->env->getExtension("native_profiler");
        $__internal_e7c29cc4464224014a980c9e50d17efa8fb454b3b08d7867b72ded5e96a97312->enter($__internal_e7c29cc4464224014a980c9e50d17efa8fb454b3b08d7867b72ded5e96a97312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7c29cc4464224014a980c9e50d17efa8fb454b3b08d7867b72ded5e96a97312->leave($__internal_e7c29cc4464224014a980c9e50d17efa8fb454b3b08d7867b72ded5e96a97312_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a0381302875624cef2db62a253f8b52c162704353c8057988471fc83b1956b7 = $this->env->getExtension("native_profiler");
        $__internal_6a0381302875624cef2db62a253f8b52c162704353c8057988471fc83b1956b7->enter($__internal_6a0381302875624cef2db62a253f8b52c162704353c8057988471fc83b1956b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_6a0381302875624cef2db62a253f8b52c162704353c8057988471fc83b1956b7->leave($__internal_6a0381302875624cef2db62a253f8b52c162704353c8057988471fc83b1956b7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
