<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_135d8db4cb8f551b43d1c917afb773689950ebffd3339b86d7d230ecdcff98df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_d8c659d4d80b6948299a34911e6b45007a5ff100b7014bcbddaa5ac02a68d137 = $this->env->getExtension("native_profiler");
        $__internal_d8c659d4d80b6948299a34911e6b45007a5ff100b7014bcbddaa5ac02a68d137->enter($__internal_d8c659d4d80b6948299a34911e6b45007a5ff100b7014bcbddaa5ac02a68d137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8c659d4d80b6948299a34911e6b45007a5ff100b7014bcbddaa5ac02a68d137->leave($__internal_d8c659d4d80b6948299a34911e6b45007a5ff100b7014bcbddaa5ac02a68d137_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_67c820db6dc60195751776085549977cb617e4c90ac08ec2063e50331637331c = $this->env->getExtension("native_profiler");
        $__internal_67c820db6dc60195751776085549977cb617e4c90ac08ec2063e50331637331c->enter($__internal_67c820db6dc60195751776085549977cb617e4c90ac08ec2063e50331637331c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_67c820db6dc60195751776085549977cb617e4c90ac08ec2063e50331637331c->leave($__internal_67c820db6dc60195751776085549977cb617e4c90ac08ec2063e50331637331c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
