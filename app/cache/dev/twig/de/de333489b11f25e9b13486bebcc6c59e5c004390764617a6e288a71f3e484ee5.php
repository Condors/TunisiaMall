<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_626674d07526e42d6a172b1f92ef2e1e0cd9863c343ed5b510e741ee8175c38d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_2d1c5079983e444993481486fd0caa0ec5849a7476890e13176e59b732c9ef88 = $this->env->getExtension("native_profiler");
        $__internal_2d1c5079983e444993481486fd0caa0ec5849a7476890e13176e59b732c9ef88->enter($__internal_2d1c5079983e444993481486fd0caa0ec5849a7476890e13176e59b732c9ef88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d1c5079983e444993481486fd0caa0ec5849a7476890e13176e59b732c9ef88->leave($__internal_2d1c5079983e444993481486fd0caa0ec5849a7476890e13176e59b732c9ef88_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e3c79a1a3dd9276cc085d66e6ae19486fc04c38dfab25809be36eb305db3003 = $this->env->getExtension("native_profiler");
        $__internal_9e3c79a1a3dd9276cc085d66e6ae19486fc04c38dfab25809be36eb305db3003->enter($__internal_9e3c79a1a3dd9276cc085d66e6ae19486fc04c38dfab25809be36eb305db3003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_9e3c79a1a3dd9276cc085d66e6ae19486fc04c38dfab25809be36eb305db3003->leave($__internal_9e3c79a1a3dd9276cc085d66e6ae19486fc04c38dfab25809be36eb305db3003_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
