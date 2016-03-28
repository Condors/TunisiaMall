<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_04feca836fa5af42644b5870961515867f01233eb3ea2e00824a07925a6cc9ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_c759aa8c5a6f3e907fe75ffbe9d6d6a843a77e685f54d7569c203e2b7c61b499 = $this->env->getExtension("native_profiler");
        $__internal_c759aa8c5a6f3e907fe75ffbe9d6d6a843a77e685f54d7569c203e2b7c61b499->enter($__internal_c759aa8c5a6f3e907fe75ffbe9d6d6a843a77e685f54d7569c203e2b7c61b499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c759aa8c5a6f3e907fe75ffbe9d6d6a843a77e685f54d7569c203e2b7c61b499->leave($__internal_c759aa8c5a6f3e907fe75ffbe9d6d6a843a77e685f54d7569c203e2b7c61b499_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7289adb0e21dddef9ff94e41bbdf472f84337bf5e16bddcbc111f99f13bb3ec1 = $this->env->getExtension("native_profiler");
        $__internal_7289adb0e21dddef9ff94e41bbdf472f84337bf5e16bddcbc111f99f13bb3ec1->enter($__internal_7289adb0e21dddef9ff94e41bbdf472f84337bf5e16bddcbc111f99f13bb3ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_7289adb0e21dddef9ff94e41bbdf472f84337bf5e16bddcbc111f99f13bb3ec1->leave($__internal_7289adb0e21dddef9ff94e41bbdf472f84337bf5e16bddcbc111f99f13bb3ec1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
