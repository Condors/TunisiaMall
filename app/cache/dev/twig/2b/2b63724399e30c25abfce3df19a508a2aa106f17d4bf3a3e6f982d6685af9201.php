<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_04feca836fa5af42644b5870961515867f01233eb3ea2e00824a07925a6cc9ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_2ba25256e9f881b53ec63d4eaa798635ffa4a94c713d5cbb90bffa91715e0a5d = $this->env->getExtension("native_profiler");
        $__internal_2ba25256e9f881b53ec63d4eaa798635ffa4a94c713d5cbb90bffa91715e0a5d->enter($__internal_2ba25256e9f881b53ec63d4eaa798635ffa4a94c713d5cbb90bffa91715e0a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ba25256e9f881b53ec63d4eaa798635ffa4a94c713d5cbb90bffa91715e0a5d->leave($__internal_2ba25256e9f881b53ec63d4eaa798635ffa4a94c713d5cbb90bffa91715e0a5d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52bdf973372c3470c4b7df2c25090698f80384d475750700aee9056e24d15f5a = $this->env->getExtension("native_profiler");
        $__internal_52bdf973372c3470c4b7df2c25090698f80384d475750700aee9056e24d15f5a->enter($__internal_52bdf973372c3470c4b7df2c25090698f80384d475750700aee9056e24d15f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_52bdf973372c3470c4b7df2c25090698f80384d475750700aee9056e24d15f5a->leave($__internal_52bdf973372c3470c4b7df2c25090698f80384d475750700aee9056e24d15f5a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
