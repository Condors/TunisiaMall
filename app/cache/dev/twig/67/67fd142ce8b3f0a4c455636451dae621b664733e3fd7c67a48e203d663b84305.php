<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a1767b042796e7ee7ed77bc0a3fdee3f65ab44acd0762474d28f42b790b7e9b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_0057d5cab0c9bf1e6246bcd36bed6ca8ba88669d4ce605907553a7ee66f41a47 = $this->env->getExtension("native_profiler");
        $__internal_0057d5cab0c9bf1e6246bcd36bed6ca8ba88669d4ce605907553a7ee66f41a47->enter($__internal_0057d5cab0c9bf1e6246bcd36bed6ca8ba88669d4ce605907553a7ee66f41a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0057d5cab0c9bf1e6246bcd36bed6ca8ba88669d4ce605907553a7ee66f41a47->leave($__internal_0057d5cab0c9bf1e6246bcd36bed6ca8ba88669d4ce605907553a7ee66f41a47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_392dba11be3904b7a8c3b416ebb93e51949d5a3a5bb98d25dad20c5ae5885126 = $this->env->getExtension("native_profiler");
        $__internal_392dba11be3904b7a8c3b416ebb93e51949d5a3a5bb98d25dad20c5ae5885126->enter($__internal_392dba11be3904b7a8c3b416ebb93e51949d5a3a5bb98d25dad20c5ae5885126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_392dba11be3904b7a8c3b416ebb93e51949d5a3a5bb98d25dad20c5ae5885126->leave($__internal_392dba11be3904b7a8c3b416ebb93e51949d5a3a5bb98d25dad20c5ae5885126_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
