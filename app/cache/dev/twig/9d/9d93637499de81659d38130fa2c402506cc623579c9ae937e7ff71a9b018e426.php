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
        $__internal_2e5ecb3ecb59e0efb92b9cf739a1a690146f89e7ff7f73a6478e5a27b81fa52a = $this->env->getExtension("native_profiler");
        $__internal_2e5ecb3ecb59e0efb92b9cf739a1a690146f89e7ff7f73a6478e5a27b81fa52a->enter($__internal_2e5ecb3ecb59e0efb92b9cf739a1a690146f89e7ff7f73a6478e5a27b81fa52a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e5ecb3ecb59e0efb92b9cf739a1a690146f89e7ff7f73a6478e5a27b81fa52a->leave($__internal_2e5ecb3ecb59e0efb92b9cf739a1a690146f89e7ff7f73a6478e5a27b81fa52a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_791113d0f8c9454fa76d6a4ce12752e271b8b1d669a99b1eb569f292bb10dd34 = $this->env->getExtension("native_profiler");
        $__internal_791113d0f8c9454fa76d6a4ce12752e271b8b1d669a99b1eb569f292bb10dd34->enter($__internal_791113d0f8c9454fa76d6a4ce12752e271b8b1d669a99b1eb569f292bb10dd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_791113d0f8c9454fa76d6a4ce12752e271b8b1d669a99b1eb569f292bb10dd34->leave($__internal_791113d0f8c9454fa76d6a4ce12752e271b8b1d669a99b1eb569f292bb10dd34_prof);

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
