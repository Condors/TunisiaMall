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
        $__internal_4b7589b9ad29e28801f0c893c965e52b281005b0f7d88f5c3733eae51be4157e = $this->env->getExtension("native_profiler");
        $__internal_4b7589b9ad29e28801f0c893c965e52b281005b0f7d88f5c3733eae51be4157e->enter($__internal_4b7589b9ad29e28801f0c893c965e52b281005b0f7d88f5c3733eae51be4157e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b7589b9ad29e28801f0c893c965e52b281005b0f7d88f5c3733eae51be4157e->leave($__internal_4b7589b9ad29e28801f0c893c965e52b281005b0f7d88f5c3733eae51be4157e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e641bd5d12b50899b7d4bcd661cb8a881a22c8bdb9a80b6f1d792d1c8f86eeb = $this->env->getExtension("native_profiler");
        $__internal_5e641bd5d12b50899b7d4bcd661cb8a881a22c8bdb9a80b6f1d792d1c8f86eeb->enter($__internal_5e641bd5d12b50899b7d4bcd661cb8a881a22c8bdb9a80b6f1d792d1c8f86eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_5e641bd5d12b50899b7d4bcd661cb8a881a22c8bdb9a80b6f1d792d1c8f86eeb->leave($__internal_5e641bd5d12b50899b7d4bcd661cb8a881a22c8bdb9a80b6f1d792d1c8f86eeb_prof);

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
