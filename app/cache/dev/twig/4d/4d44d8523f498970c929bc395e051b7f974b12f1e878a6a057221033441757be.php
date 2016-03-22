<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_a776b9e23b743365830103f855271edac16513211fe5d242abe2e55bac34df8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_aa746edbe2705baadec38911b71cdba787187e198e7cd1d4c1c5f88e9f6c1ba2 = $this->env->getExtension("native_profiler");
        $__internal_aa746edbe2705baadec38911b71cdba787187e198e7cd1d4c1c5f88e9f6c1ba2->enter($__internal_aa746edbe2705baadec38911b71cdba787187e198e7cd1d4c1c5f88e9f6c1ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa746edbe2705baadec38911b71cdba787187e198e7cd1d4c1c5f88e9f6c1ba2->leave($__internal_aa746edbe2705baadec38911b71cdba787187e198e7cd1d4c1c5f88e9f6c1ba2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e0121d4f87124bbbeea5bf4d1e6914637749cf41fff03b1c6f16f0d097d58db = $this->env->getExtension("native_profiler");
        $__internal_8e0121d4f87124bbbeea5bf4d1e6914637749cf41fff03b1c6f16f0d097d58db->enter($__internal_8e0121d4f87124bbbeea5bf4d1e6914637749cf41fff03b1c6f16f0d097d58db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_8e0121d4f87124bbbeea5bf4d1e6914637749cf41fff03b1c6f16f0d097d58db->leave($__internal_8e0121d4f87124bbbeea5bf4d1e6914637749cf41fff03b1c6f16f0d097d58db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
