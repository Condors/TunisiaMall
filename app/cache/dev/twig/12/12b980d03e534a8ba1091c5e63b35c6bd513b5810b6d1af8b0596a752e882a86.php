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
        $__internal_b0da5bd8b907324d5b10f7c7926862220613ae8e006c0764eff5b940cde47dc5 = $this->env->getExtension("native_profiler");
        $__internal_b0da5bd8b907324d5b10f7c7926862220613ae8e006c0764eff5b940cde47dc5->enter($__internal_b0da5bd8b907324d5b10f7c7926862220613ae8e006c0764eff5b940cde47dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0da5bd8b907324d5b10f7c7926862220613ae8e006c0764eff5b940cde47dc5->leave($__internal_b0da5bd8b907324d5b10f7c7926862220613ae8e006c0764eff5b940cde47dc5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8f755bb48b35e900704fb9a59d1af8e69e7ae0c53d1c4d77ff261fb3c1397b38 = $this->env->getExtension("native_profiler");
        $__internal_8f755bb48b35e900704fb9a59d1af8e69e7ae0c53d1c4d77ff261fb3c1397b38->enter($__internal_8f755bb48b35e900704fb9a59d1af8e69e7ae0c53d1c4d77ff261fb3c1397b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_8f755bb48b35e900704fb9a59d1af8e69e7ae0c53d1c4d77ff261fb3c1397b38->leave($__internal_8f755bb48b35e900704fb9a59d1af8e69e7ae0c53d1c4d77ff261fb3c1397b38_prof);

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
