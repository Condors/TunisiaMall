<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_f22a80977a78a76e28c2736a8ac62023cee0ff5a75a430fc6be19ccfd23138d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_5c179850ac0268074d5c7eac46e43735a13cfcc60b1e34fa95eedc40ee400430 = $this->env->getExtension("native_profiler");
        $__internal_5c179850ac0268074d5c7eac46e43735a13cfcc60b1e34fa95eedc40ee400430->enter($__internal_5c179850ac0268074d5c7eac46e43735a13cfcc60b1e34fa95eedc40ee400430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c179850ac0268074d5c7eac46e43735a13cfcc60b1e34fa95eedc40ee400430->leave($__internal_5c179850ac0268074d5c7eac46e43735a13cfcc60b1e34fa95eedc40ee400430_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d7fb074430adb4118606dd89ed0ce87328f22557c5dec84337fae078c172f804 = $this->env->getExtension("native_profiler");
        $__internal_d7fb074430adb4118606dd89ed0ce87328f22557c5dec84337fae078c172f804->enter($__internal_d7fb074430adb4118606dd89ed0ce87328f22557c5dec84337fae078c172f804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_d7fb074430adb4118606dd89ed0ce87328f22557c5dec84337fae078c172f804->leave($__internal_d7fb074430adb4118606dd89ed0ce87328f22557c5dec84337fae078c172f804_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
