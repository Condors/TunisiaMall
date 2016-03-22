<?php

/* @CondorsTnMall/Registration/register.html.twig */
class __TwigTemplate_1f750277d6e8089be44a0938c3aead5a02ba01d3004d1ff95cdb6a703b1e7751 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@CondorsTnMall/Registration/register.html.twig", 1);
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
        $__internal_dbcebb3c13946fca9136f8c02c3a0b3e3eb7600212050edf00a3d51c26da61eb = $this->env->getExtension("native_profiler");
        $__internal_dbcebb3c13946fca9136f8c02c3a0b3e3eb7600212050edf00a3d51c26da61eb->enter($__internal_dbcebb3c13946fca9136f8c02c3a0b3e3eb7600212050edf00a3d51c26da61eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CondorsTnMall/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbcebb3c13946fca9136f8c02c3a0b3e3eb7600212050edf00a3d51c26da61eb->leave($__internal_dbcebb3c13946fca9136f8c02c3a0b3e3eb7600212050edf00a3d51c26da61eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43a897e1821dad50d55073cd0f1b2367907d7084c8bab9258737e459f38d9069 = $this->env->getExtension("native_profiler");
        $__internal_43a897e1821dad50d55073cd0f1b2367907d7084c8bab9258737e459f38d9069->enter($__internal_43a897e1821dad50d55073cd0f1b2367907d7084c8bab9258737e459f38d9069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@CondorsTnMall/Registration/register.html.twig", 4)->display($context);
        
        $__internal_43a897e1821dad50d55073cd0f1b2367907d7084c8bab9258737e459f38d9069->leave($__internal_43a897e1821dad50d55073cd0f1b2367907d7084c8bab9258737e459f38d9069_prof);

    }

    public function getTemplateName()
    {
        return "@CondorsTnMall/Registration/register.html.twig";
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
