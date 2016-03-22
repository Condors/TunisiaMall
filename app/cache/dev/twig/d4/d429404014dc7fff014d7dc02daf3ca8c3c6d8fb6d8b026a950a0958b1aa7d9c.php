<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_135d8db4cb8f551b43d1c917afb773689950ebffd3339b86d7d230ecdcff98df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_d8155afc1c950de53aa0bafe69cea407ec3df16461416065cb2257f135e914fb = $this->env->getExtension("native_profiler");
        $__internal_d8155afc1c950de53aa0bafe69cea407ec3df16461416065cb2257f135e914fb->enter($__internal_d8155afc1c950de53aa0bafe69cea407ec3df16461416065cb2257f135e914fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8155afc1c950de53aa0bafe69cea407ec3df16461416065cb2257f135e914fb->leave($__internal_d8155afc1c950de53aa0bafe69cea407ec3df16461416065cb2257f135e914fb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38446de3013dc91cbf0e5e1f87d3a8d6643eaf8e8713e847ba9e4f448f3d471c = $this->env->getExtension("native_profiler");
        $__internal_38446de3013dc91cbf0e5e1f87d3a8d6643eaf8e8713e847ba9e4f448f3d471c->enter($__internal_38446de3013dc91cbf0e5e1f87d3a8d6643eaf8e8713e847ba9e4f448f3d471c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_38446de3013dc91cbf0e5e1f87d3a8d6643eaf8e8713e847ba9e4f448f3d471c->leave($__internal_38446de3013dc91cbf0e5e1f87d3a8d6643eaf8e8713e847ba9e4f448f3d471c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
