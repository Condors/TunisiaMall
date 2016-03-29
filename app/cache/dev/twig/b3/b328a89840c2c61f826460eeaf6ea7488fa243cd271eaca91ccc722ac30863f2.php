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
        $__internal_435b1b9ea4fc6495bfa3e19f083abd131fcb780884bcc055a2e219504e8515c1 = $this->env->getExtension("native_profiler");
        $__internal_435b1b9ea4fc6495bfa3e19f083abd131fcb780884bcc055a2e219504e8515c1->enter($__internal_435b1b9ea4fc6495bfa3e19f083abd131fcb780884bcc055a2e219504e8515c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_435b1b9ea4fc6495bfa3e19f083abd131fcb780884bcc055a2e219504e8515c1->leave($__internal_435b1b9ea4fc6495bfa3e19f083abd131fcb780884bcc055a2e219504e8515c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5025d706989c7d02beb27b070c783b07013abded546b9f790257e1d69f15180f = $this->env->getExtension("native_profiler");
        $__internal_5025d706989c7d02beb27b070c783b07013abded546b9f790257e1d69f15180f->enter($__internal_5025d706989c7d02beb27b070c783b07013abded546b9f790257e1d69f15180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_5025d706989c7d02beb27b070c783b07013abded546b9f790257e1d69f15180f->leave($__internal_5025d706989c7d02beb27b070c783b07013abded546b9f790257e1d69f15180f_prof);

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
