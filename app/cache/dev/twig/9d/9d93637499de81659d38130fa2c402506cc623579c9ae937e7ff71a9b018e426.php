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
        $__internal_085a3dc85dd729256fc984812ec26092dd11636de6aa401d3aa15a143c006378 = $this->env->getExtension("native_profiler");
        $__internal_085a3dc85dd729256fc984812ec26092dd11636de6aa401d3aa15a143c006378->enter($__internal_085a3dc85dd729256fc984812ec26092dd11636de6aa401d3aa15a143c006378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085a3dc85dd729256fc984812ec26092dd11636de6aa401d3aa15a143c006378->leave($__internal_085a3dc85dd729256fc984812ec26092dd11636de6aa401d3aa15a143c006378_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_58e297b92dd6b582eb706dcdcd08725d1a9b6dc3fc55c557c0f163608475df63 = $this->env->getExtension("native_profiler");
        $__internal_58e297b92dd6b582eb706dcdcd08725d1a9b6dc3fc55c557c0f163608475df63->enter($__internal_58e297b92dd6b582eb706dcdcd08725d1a9b6dc3fc55c557c0f163608475df63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_58e297b92dd6b582eb706dcdcd08725d1a9b6dc3fc55c557c0f163608475df63->leave($__internal_58e297b92dd6b582eb706dcdcd08725d1a9b6dc3fc55c557c0f163608475df63_prof);

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
