<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_a6a6fc7ca07d721148450affbb998c0e1d9599a9c85a99d64f0dfc2fd94d9d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_2be7afd866e605a1fb2c5b2006c0624e7a184bf1885f20ee4f205f6b5c5424ba = $this->env->getExtension("native_profiler");
        $__internal_2be7afd866e605a1fb2c5b2006c0624e7a184bf1885f20ee4f205f6b5c5424ba->enter($__internal_2be7afd866e605a1fb2c5b2006c0624e7a184bf1885f20ee4f205f6b5c5424ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be7afd866e605a1fb2c5b2006c0624e7a184bf1885f20ee4f205f6b5c5424ba->leave($__internal_2be7afd866e605a1fb2c5b2006c0624e7a184bf1885f20ee4f205f6b5c5424ba_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51cef39b52c4f1afa54f37da23fbb5986da3ef70bf8bb822a964f54134866a07 = $this->env->getExtension("native_profiler");
        $__internal_51cef39b52c4f1afa54f37da23fbb5986da3ef70bf8bb822a964f54134866a07->enter($__internal_51cef39b52c4f1afa54f37da23fbb5986da3ef70bf8bb822a964f54134866a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_51cef39b52c4f1afa54f37da23fbb5986da3ef70bf8bb822a964f54134866a07->leave($__internal_51cef39b52c4f1afa54f37da23fbb5986da3ef70bf8bb822a964f54134866a07_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
