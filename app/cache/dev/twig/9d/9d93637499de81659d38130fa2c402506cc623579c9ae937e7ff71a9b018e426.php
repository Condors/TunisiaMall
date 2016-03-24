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
        $__internal_fe7d6d1d3e4b82d4f83a5dfe3498522b7ca2ee5fc4b4b36d07cf183e46a21256 = $this->env->getExtension("native_profiler");
        $__internal_fe7d6d1d3e4b82d4f83a5dfe3498522b7ca2ee5fc4b4b36d07cf183e46a21256->enter($__internal_fe7d6d1d3e4b82d4f83a5dfe3498522b7ca2ee5fc4b4b36d07cf183e46a21256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe7d6d1d3e4b82d4f83a5dfe3498522b7ca2ee5fc4b4b36d07cf183e46a21256->leave($__internal_fe7d6d1d3e4b82d4f83a5dfe3498522b7ca2ee5fc4b4b36d07cf183e46a21256_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eee12fc50d786c4e03f4e6605de4654366f0d7ce9175e6adeca33ecd3c81d2ed = $this->env->getExtension("native_profiler");
        $__internal_eee12fc50d786c4e03f4e6605de4654366f0d7ce9175e6adeca33ecd3c81d2ed->enter($__internal_eee12fc50d786c4e03f4e6605de4654366f0d7ce9175e6adeca33ecd3c81d2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_eee12fc50d786c4e03f4e6605de4654366f0d7ce9175e6adeca33ecd3c81d2ed->leave($__internal_eee12fc50d786c4e03f4e6605de4654366f0d7ce9175e6adeca33ecd3c81d2ed_prof);

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
