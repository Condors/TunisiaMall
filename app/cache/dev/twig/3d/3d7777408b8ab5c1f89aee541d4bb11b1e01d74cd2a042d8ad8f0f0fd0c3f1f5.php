<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_31062fb56fc5ef3877b697bae16c2b891bc0a1d50698bba6d9e29ff1445b4231 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_a77f6074eef27b4b16f46ad6ba49b8a1363bcd7b910ca89cf80813c7b5f44e46 = $this->env->getExtension("native_profiler");
        $__internal_a77f6074eef27b4b16f46ad6ba49b8a1363bcd7b910ca89cf80813c7b5f44e46->enter($__internal_a77f6074eef27b4b16f46ad6ba49b8a1363bcd7b910ca89cf80813c7b5f44e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a77f6074eef27b4b16f46ad6ba49b8a1363bcd7b910ca89cf80813c7b5f44e46->leave($__internal_a77f6074eef27b4b16f46ad6ba49b8a1363bcd7b910ca89cf80813c7b5f44e46_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b8612545820df8eddf972ba4260191e4bf9dce53c7657f3ef8734da59a50d34 = $this->env->getExtension("native_profiler");
        $__internal_8b8612545820df8eddf972ba4260191e4bf9dce53c7657f3ef8734da59a50d34->enter($__internal_8b8612545820df8eddf972ba4260191e4bf9dce53c7657f3ef8734da59a50d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_8b8612545820df8eddf972ba4260191e4bf9dce53c7657f3ef8734da59a50d34->leave($__internal_8b8612545820df8eddf972ba4260191e4bf9dce53c7657f3ef8734da59a50d34_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
