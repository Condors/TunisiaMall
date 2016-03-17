<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_e2fa094289c11e11a7ff822a4a31027aac956dc9201e70491d0e9575d1907dcf extends Twig_Template
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
        $__internal_fafb0f5ce2ad720f1b6e5160fd830fd4827d6d7309404ce3974202db4c8da6e2 = $this->env->getExtension("native_profiler");
        $__internal_fafb0f5ce2ad720f1b6e5160fd830fd4827d6d7309404ce3974202db4c8da6e2->enter($__internal_fafb0f5ce2ad720f1b6e5160fd830fd4827d6d7309404ce3974202db4c8da6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fafb0f5ce2ad720f1b6e5160fd830fd4827d6d7309404ce3974202db4c8da6e2->leave($__internal_fafb0f5ce2ad720f1b6e5160fd830fd4827d6d7309404ce3974202db4c8da6e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_127ab8d259e3973da56b4d1b1008adf7d7dc609b13da8765ff68a7c78ad4ed40 = $this->env->getExtension("native_profiler");
        $__internal_127ab8d259e3973da56b4d1b1008adf7d7dc609b13da8765ff68a7c78ad4ed40->enter($__internal_127ab8d259e3973da56b4d1b1008adf7d7dc609b13da8765ff68a7c78ad4ed40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_127ab8d259e3973da56b4d1b1008adf7d7dc609b13da8765ff68a7c78ad4ed40->leave($__internal_127ab8d259e3973da56b4d1b1008adf7d7dc609b13da8765ff68a7c78ad4ed40_prof);

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
