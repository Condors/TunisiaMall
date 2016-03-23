<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_a7ab57818cc3e6a0f2cbefd2e85a8c8310c6d0f6eee2dab0deded0a82f62c915 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_f4be141c16337831005d63cc00b4d01e7a890ecb777da0bdbf925cd826bcb1c8 = $this->env->getExtension("native_profiler");
        $__internal_f4be141c16337831005d63cc00b4d01e7a890ecb777da0bdbf925cd826bcb1c8->enter($__internal_f4be141c16337831005d63cc00b4d01e7a890ecb777da0bdbf925cd826bcb1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4be141c16337831005d63cc00b4d01e7a890ecb777da0bdbf925cd826bcb1c8->leave($__internal_f4be141c16337831005d63cc00b4d01e7a890ecb777da0bdbf925cd826bcb1c8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b5be0e6c213431a4f425a020a1ae305cc1c25d9b5e044f646a9f61b0c4f1e2ce = $this->env->getExtension("native_profiler");
        $__internal_b5be0e6c213431a4f425a020a1ae305cc1c25d9b5e044f646a9f61b0c4f1e2ce->enter($__internal_b5be0e6c213431a4f425a020a1ae305cc1c25d9b5e044f646a9f61b0c4f1e2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b5be0e6c213431a4f425a020a1ae305cc1c25d9b5e044f646a9f61b0c4f1e2ce->leave($__internal_b5be0e6c213431a4f425a020a1ae305cc1c25d9b5e044f646a9f61b0c4f1e2ce_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
