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
        $__internal_b653817b737dbb99610129039f32dc5aa393f9415f1f3c5c5119c45091916b33 = $this->env->getExtension("native_profiler");
        $__internal_b653817b737dbb99610129039f32dc5aa393f9415f1f3c5c5119c45091916b33->enter($__internal_b653817b737dbb99610129039f32dc5aa393f9415f1f3c5c5119c45091916b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b653817b737dbb99610129039f32dc5aa393f9415f1f3c5c5119c45091916b33->leave($__internal_b653817b737dbb99610129039f32dc5aa393f9415f1f3c5c5119c45091916b33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8fa2c7f2f46a1ce32eda42372fa2326820597576ad779a021129220b9688e510 = $this->env->getExtension("native_profiler");
        $__internal_8fa2c7f2f46a1ce32eda42372fa2326820597576ad779a021129220b9688e510->enter($__internal_8fa2c7f2f46a1ce32eda42372fa2326820597576ad779a021129220b9688e510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_8fa2c7f2f46a1ce32eda42372fa2326820597576ad779a021129220b9688e510->leave($__internal_8fa2c7f2f46a1ce32eda42372fa2326820597576ad779a021129220b9688e510_prof);

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
