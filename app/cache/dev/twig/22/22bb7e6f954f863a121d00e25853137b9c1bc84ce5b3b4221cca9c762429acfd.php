<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a1e9534e454f2d14e6244fc9c27fa4c0c029afeedeae7f1fd72ff9e0dd3d261b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_3d5efa46406757865faf38157c93c04c156d3b6011e821c36c5d27c3b0a8522f = $this->env->getExtension("native_profiler");
        $__internal_3d5efa46406757865faf38157c93c04c156d3b6011e821c36c5d27c3b0a8522f->enter($__internal_3d5efa46406757865faf38157c93c04c156d3b6011e821c36c5d27c3b0a8522f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d5efa46406757865faf38157c93c04c156d3b6011e821c36c5d27c3b0a8522f->leave($__internal_3d5efa46406757865faf38157c93c04c156d3b6011e821c36c5d27c3b0a8522f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_09d63afe430db53785123f693a408d905f1b2338edaead6bb2fd29f243059a73 = $this->env->getExtension("native_profiler");
        $__internal_09d63afe430db53785123f693a408d905f1b2338edaead6bb2fd29f243059a73->enter($__internal_09d63afe430db53785123f693a408d905f1b2338edaead6bb2fd29f243059a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_09d63afe430db53785123f693a408d905f1b2338edaead6bb2fd29f243059a73->leave($__internal_09d63afe430db53785123f693a408d905f1b2338edaead6bb2fd29f243059a73_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
