<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_a1767b042796e7ee7ed77bc0a3fdee3f65ab44acd0762474d28f42b790b7e9b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2b014d888a42287c2056f908ccd609cfaa8999009e57fdda742db4bac4943755 = $this->env->getExtension("native_profiler");
        $__internal_2b014d888a42287c2056f908ccd609cfaa8999009e57fdda742db4bac4943755->enter($__internal_2b014d888a42287c2056f908ccd609cfaa8999009e57fdda742db4bac4943755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b014d888a42287c2056f908ccd609cfaa8999009e57fdda742db4bac4943755->leave($__internal_2b014d888a42287c2056f908ccd609cfaa8999009e57fdda742db4bac4943755_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_80b7e2b70eb2c065f4b2b66bf8ea47abbfcf2dc9a6f37ada1f2d13976eb1e1d6 = $this->env->getExtension("native_profiler");
        $__internal_80b7e2b70eb2c065f4b2b66bf8ea47abbfcf2dc9a6f37ada1f2d13976eb1e1d6->enter($__internal_80b7e2b70eb2c065f4b2b66bf8ea47abbfcf2dc9a6f37ada1f2d13976eb1e1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_80b7e2b70eb2c065f4b2b66bf8ea47abbfcf2dc9a6f37ada1f2d13976eb1e1d6->leave($__internal_80b7e2b70eb2c065f4b2b66bf8ea47abbfcf2dc9a6f37ada1f2d13976eb1e1d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
