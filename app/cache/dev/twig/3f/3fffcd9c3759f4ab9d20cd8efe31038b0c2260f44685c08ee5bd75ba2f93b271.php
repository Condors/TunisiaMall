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
        $__internal_0d4930116290264ed0c2c57510f07f7c3f34e344f808539daa1d8a0e3896b26e = $this->env->getExtension("native_profiler");
        $__internal_0d4930116290264ed0c2c57510f07f7c3f34e344f808539daa1d8a0e3896b26e->enter($__internal_0d4930116290264ed0c2c57510f07f7c3f34e344f808539daa1d8a0e3896b26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d4930116290264ed0c2c57510f07f7c3f34e344f808539daa1d8a0e3896b26e->leave($__internal_0d4930116290264ed0c2c57510f07f7c3f34e344f808539daa1d8a0e3896b26e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ae2546d37917937513a77236b84437fe8679278a1bca0df6c3c4fd1154095835 = $this->env->getExtension("native_profiler");
        $__internal_ae2546d37917937513a77236b84437fe8679278a1bca0df6c3c4fd1154095835->enter($__internal_ae2546d37917937513a77236b84437fe8679278a1bca0df6c3c4fd1154095835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_ae2546d37917937513a77236b84437fe8679278a1bca0df6c3c4fd1154095835->leave($__internal_ae2546d37917937513a77236b84437fe8679278a1bca0df6c3c4fd1154095835_prof);

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
