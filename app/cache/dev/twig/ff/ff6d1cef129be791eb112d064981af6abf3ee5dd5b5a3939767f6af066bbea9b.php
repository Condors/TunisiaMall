<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_9b3bb71b53fc443b739d167c2301f662e651d1f6878ae685e15e33445e7c2055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_24a295656dc2c9b4cec1afeb98c22ef0b3492920817c47b235a47c89f1dd794b = $this->env->getExtension("native_profiler");
        $__internal_24a295656dc2c9b4cec1afeb98c22ef0b3492920817c47b235a47c89f1dd794b->enter($__internal_24a295656dc2c9b4cec1afeb98c22ef0b3492920817c47b235a47c89f1dd794b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24a295656dc2c9b4cec1afeb98c22ef0b3492920817c47b235a47c89f1dd794b->leave($__internal_24a295656dc2c9b4cec1afeb98c22ef0b3492920817c47b235a47c89f1dd794b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5cb7991630fe7ded1b816870cfe6f06c9a8468c1fb1d4e12d50a524ad10fdb1 = $this->env->getExtension("native_profiler");
        $__internal_e5cb7991630fe7ded1b816870cfe6f06c9a8468c1fb1d4e12d50a524ad10fdb1->enter($__internal_e5cb7991630fe7ded1b816870cfe6f06c9a8468c1fb1d4e12d50a524ad10fdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_e5cb7991630fe7ded1b816870cfe6f06c9a8468c1fb1d4e12d50a524ad10fdb1->leave($__internal_e5cb7991630fe7ded1b816870cfe6f06c9a8468c1fb1d4e12d50a524ad10fdb1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
