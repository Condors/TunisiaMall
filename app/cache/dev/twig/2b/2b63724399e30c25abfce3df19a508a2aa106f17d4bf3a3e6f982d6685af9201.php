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
        $__internal_8df9b94ff80e55873da7eeb361b8b931d1754547403121fbb148d7a255bf72e8 = $this->env->getExtension("native_profiler");
        $__internal_8df9b94ff80e55873da7eeb361b8b931d1754547403121fbb148d7a255bf72e8->enter($__internal_8df9b94ff80e55873da7eeb361b8b931d1754547403121fbb148d7a255bf72e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8df9b94ff80e55873da7eeb361b8b931d1754547403121fbb148d7a255bf72e8->leave($__internal_8df9b94ff80e55873da7eeb361b8b931d1754547403121fbb148d7a255bf72e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b974c8d99bdd67141b7c2bc7a3583591edd794a6e4f9ca8aa3bdf32ea8dfc5c3 = $this->env->getExtension("native_profiler");
        $__internal_b974c8d99bdd67141b7c2bc7a3583591edd794a6e4f9ca8aa3bdf32ea8dfc5c3->enter($__internal_b974c8d99bdd67141b7c2bc7a3583591edd794a6e4f9ca8aa3bdf32ea8dfc5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b974c8d99bdd67141b7c2bc7a3583591edd794a6e4f9ca8aa3bdf32ea8dfc5c3->leave($__internal_b974c8d99bdd67141b7c2bc7a3583591edd794a6e4f9ca8aa3bdf32ea8dfc5c3_prof);

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
