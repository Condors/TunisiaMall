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
        $__internal_c7ed3dd44a80f15f616bd6d2bdd6e95456c9a1a42fd99973b0ee49f364fce4a1 = $this->env->getExtension("native_profiler");
        $__internal_c7ed3dd44a80f15f616bd6d2bdd6e95456c9a1a42fd99973b0ee49f364fce4a1->enter($__internal_c7ed3dd44a80f15f616bd6d2bdd6e95456c9a1a42fd99973b0ee49f364fce4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7ed3dd44a80f15f616bd6d2bdd6e95456c9a1a42fd99973b0ee49f364fce4a1->leave($__internal_c7ed3dd44a80f15f616bd6d2bdd6e95456c9a1a42fd99973b0ee49f364fce4a1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40c260f62bf0508634125739a0a32b3d5bcc68306debb47bee48e4dcc6e4cdf3 = $this->env->getExtension("native_profiler");
        $__internal_40c260f62bf0508634125739a0a32b3d5bcc68306debb47bee48e4dcc6e4cdf3->enter($__internal_40c260f62bf0508634125739a0a32b3d5bcc68306debb47bee48e4dcc6e4cdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_40c260f62bf0508634125739a0a32b3d5bcc68306debb47bee48e4dcc6e4cdf3->leave($__internal_40c260f62bf0508634125739a0a32b3d5bcc68306debb47bee48e4dcc6e4cdf3_prof);

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
