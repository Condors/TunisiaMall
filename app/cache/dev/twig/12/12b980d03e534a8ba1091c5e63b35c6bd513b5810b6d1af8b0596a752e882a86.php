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
        $__internal_d71134360119b2ebc5f2273701aa9ab39daacaed7ba3a6449f5ff884a6ac0e86 = $this->env->getExtension("native_profiler");
        $__internal_d71134360119b2ebc5f2273701aa9ab39daacaed7ba3a6449f5ff884a6ac0e86->enter($__internal_d71134360119b2ebc5f2273701aa9ab39daacaed7ba3a6449f5ff884a6ac0e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d71134360119b2ebc5f2273701aa9ab39daacaed7ba3a6449f5ff884a6ac0e86->leave($__internal_d71134360119b2ebc5f2273701aa9ab39daacaed7ba3a6449f5ff884a6ac0e86_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f93286de4e16e5d0f05fcd12a87deccc79fb5f4052a29fec7726986ede0d5df = $this->env->getExtension("native_profiler");
        $__internal_1f93286de4e16e5d0f05fcd12a87deccc79fb5f4052a29fec7726986ede0d5df->enter($__internal_1f93286de4e16e5d0f05fcd12a87deccc79fb5f4052a29fec7726986ede0d5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_1f93286de4e16e5d0f05fcd12a87deccc79fb5f4052a29fec7726986ede0d5df->leave($__internal_1f93286de4e16e5d0f05fcd12a87deccc79fb5f4052a29fec7726986ede0d5df_prof);

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
