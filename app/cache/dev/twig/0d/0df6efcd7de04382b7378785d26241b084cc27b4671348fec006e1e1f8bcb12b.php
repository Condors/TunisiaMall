<?php

/* @CondorsTnMall/Registration/register.html.twig */
class __TwigTemplate_1f750277d6e8089be44a0938c3aead5a02ba01d3004d1ff95cdb6a703b1e7751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CondorsTnMall/Registration/register.html.twig", 1);
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
        $__internal_a5306b4a3b30fd7889ae98f2a8ca09dffc2149b53e773ae625879dc4bea78088 = $this->env->getExtension("native_profiler");
        $__internal_a5306b4a3b30fd7889ae98f2a8ca09dffc2149b53e773ae625879dc4bea78088->enter($__internal_a5306b4a3b30fd7889ae98f2a8ca09dffc2149b53e773ae625879dc4bea78088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5306b4a3b30fd7889ae98f2a8ca09dffc2149b53e773ae625879dc4bea78088->leave($__internal_a5306b4a3b30fd7889ae98f2a8ca09dffc2149b53e773ae625879dc4bea78088_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea1efb904f80966c7a5569c252a18244b2fe41d16c449165cd788a2f5341e726 = $this->env->getExtension("native_profiler");
        $__internal_ea1efb904f80966c7a5569c252a18244b2fe41d16c449165cd788a2f5341e726->enter($__internal_ea1efb904f80966c7a5569c252a18244b2fe41d16c449165cd788a2f5341e726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@CondorsTnMall/Registration/register.html.twig", 4)->display($context);
        
        $__internal_ea1efb904f80966c7a5569c252a18244b2fe41d16c449165cd788a2f5341e726->leave($__internal_ea1efb904f80966c7a5569c252a18244b2fe41d16c449165cd788a2f5341e726_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Registration/register.html.twig";
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
