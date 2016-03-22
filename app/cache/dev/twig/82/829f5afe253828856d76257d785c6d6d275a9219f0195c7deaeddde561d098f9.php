<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_b140fb18f9da3912c429beffdc5b35e354c42bca8a57d8ffabb7ce752316958d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_65bf5a71488154071a2ef0303f73443642b45557e23ea06021ab3aa620aa0f07 = $this->env->getExtension("native_profiler");
        $__internal_65bf5a71488154071a2ef0303f73443642b45557e23ea06021ab3aa620aa0f07->enter($__internal_65bf5a71488154071a2ef0303f73443642b45557e23ea06021ab3aa620aa0f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65bf5a71488154071a2ef0303f73443642b45557e23ea06021ab3aa620aa0f07->leave($__internal_65bf5a71488154071a2ef0303f73443642b45557e23ea06021ab3aa620aa0f07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_66ebb6763656370a76ffaf175d64b64eaba0a9f2d6335f89a772d4c0b7c97f7d = $this->env->getExtension("native_profiler");
        $__internal_66ebb6763656370a76ffaf175d64b64eaba0a9f2d6335f89a772d4c0b7c97f7d->enter($__internal_66ebb6763656370a76ffaf175d64b64eaba0a9f2d6335f89a772d4c0b7c97f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_66ebb6763656370a76ffaf175d64b64eaba0a9f2d6335f89a772d4c0b7c97f7d->leave($__internal_66ebb6763656370a76ffaf175d64b64eaba0a9f2d6335f89a772d4c0b7c97f7d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
