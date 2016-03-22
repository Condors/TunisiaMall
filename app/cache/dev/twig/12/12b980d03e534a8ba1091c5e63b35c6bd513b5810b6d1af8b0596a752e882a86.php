<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_02d767f6154220b74f15c28f2455b601c9a043162d21a168e8ea5c2a86343f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_680262d32e6808d9e05b1f24fdb2a6f567762aa7e0f8c721677c6e347e866414 = $this->env->getExtension("native_profiler");
        $__internal_680262d32e6808d9e05b1f24fdb2a6f567762aa7e0f8c721677c6e347e866414->enter($__internal_680262d32e6808d9e05b1f24fdb2a6f567762aa7e0f8c721677c6e347e866414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_680262d32e6808d9e05b1f24fdb2a6f567762aa7e0f8c721677c6e347e866414->leave($__internal_680262d32e6808d9e05b1f24fdb2a6f567762aa7e0f8c721677c6e347e866414_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9dadb36337568839eac9f77151efddbcb568d68fa64da264229b159de37af50e = $this->env->getExtension("native_profiler");
        $__internal_9dadb36337568839eac9f77151efddbcb568d68fa64da264229b159de37af50e->enter($__internal_9dadb36337568839eac9f77151efddbcb568d68fa64da264229b159de37af50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_9dadb36337568839eac9f77151efddbcb568d68fa64da264229b159de37af50e->leave($__internal_9dadb36337568839eac9f77151efddbcb568d68fa64da264229b159de37af50e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
