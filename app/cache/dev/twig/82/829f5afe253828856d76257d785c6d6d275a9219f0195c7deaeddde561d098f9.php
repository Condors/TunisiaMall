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
        $__internal_cd15bcd1f8dd6f98ca78b9c1ed5b14e08f3b2ed1f83ca6162aef43ac622232e4 = $this->env->getExtension("native_profiler");
        $__internal_cd15bcd1f8dd6f98ca78b9c1ed5b14e08f3b2ed1f83ca6162aef43ac622232e4->enter($__internal_cd15bcd1f8dd6f98ca78b9c1ed5b14e08f3b2ed1f83ca6162aef43ac622232e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd15bcd1f8dd6f98ca78b9c1ed5b14e08f3b2ed1f83ca6162aef43ac622232e4->leave($__internal_cd15bcd1f8dd6f98ca78b9c1ed5b14e08f3b2ed1f83ca6162aef43ac622232e4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_144bda0642e68698d9cda8f33e34995df1fe3682dc92fed62828280cdaa25f52 = $this->env->getExtension("native_profiler");
        $__internal_144bda0642e68698d9cda8f33e34995df1fe3682dc92fed62828280cdaa25f52->enter($__internal_144bda0642e68698d9cda8f33e34995df1fe3682dc92fed62828280cdaa25f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_144bda0642e68698d9cda8f33e34995df1fe3682dc92fed62828280cdaa25f52->leave($__internal_144bda0642e68698d9cda8f33e34995df1fe3682dc92fed62828280cdaa25f52_prof);

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
