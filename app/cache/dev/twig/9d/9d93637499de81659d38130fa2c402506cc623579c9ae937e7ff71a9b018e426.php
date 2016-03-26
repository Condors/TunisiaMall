<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_cc5f6ea8dd7244d7b949c7876a55f12f50046bd76f60b1bcc9281b3875013e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_cc3b925ecdb509caebd1fd1cbf7de0465504f92eda54886d5effd22a74a125bb = $this->env->getExtension("native_profiler");
        $__internal_cc3b925ecdb509caebd1fd1cbf7de0465504f92eda54886d5effd22a74a125bb->enter($__internal_cc3b925ecdb509caebd1fd1cbf7de0465504f92eda54886d5effd22a74a125bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc3b925ecdb509caebd1fd1cbf7de0465504f92eda54886d5effd22a74a125bb->leave($__internal_cc3b925ecdb509caebd1fd1cbf7de0465504f92eda54886d5effd22a74a125bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31ca325b16496d221ed021b7356c2ad4d11d26aa1b8d423c6504b7ea0d9048aa = $this->env->getExtension("native_profiler");
        $__internal_31ca325b16496d221ed021b7356c2ad4d11d26aa1b8d423c6504b7ea0d9048aa->enter($__internal_31ca325b16496d221ed021b7356c2ad4d11d26aa1b8d423c6504b7ea0d9048aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_31ca325b16496d221ed021b7356c2ad4d11d26aa1b8d423c6504b7ea0d9048aa->leave($__internal_31ca325b16496d221ed021b7356c2ad4d11d26aa1b8d423c6504b7ea0d9048aa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
