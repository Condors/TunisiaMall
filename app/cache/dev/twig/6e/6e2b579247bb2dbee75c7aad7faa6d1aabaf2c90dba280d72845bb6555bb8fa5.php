<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c1c7453da4d79aaac6ec6edbc19543d2cac9988082a30cbcd379df6b49e3ddda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_717e7b1056b67cfdbd5553bc0430ac2a0592ddc5f9ddac04d18b7b1dfb6e3ae5 = $this->env->getExtension("native_profiler");
        $__internal_717e7b1056b67cfdbd5553bc0430ac2a0592ddc5f9ddac04d18b7b1dfb6e3ae5->enter($__internal_717e7b1056b67cfdbd5553bc0430ac2a0592ddc5f9ddac04d18b7b1dfb6e3ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_717e7b1056b67cfdbd5553bc0430ac2a0592ddc5f9ddac04d18b7b1dfb6e3ae5->leave($__internal_717e7b1056b67cfdbd5553bc0430ac2a0592ddc5f9ddac04d18b7b1dfb6e3ae5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9d5a844776c2ee830ef9050c0684ca0d1da67d4693e5e03998f712a8365a3aaa = $this->env->getExtension("native_profiler");
        $__internal_9d5a844776c2ee830ef9050c0684ca0d1da67d4693e5e03998f712a8365a3aaa->enter($__internal_9d5a844776c2ee830ef9050c0684ca0d1da67d4693e5e03998f712a8365a3aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_9d5a844776c2ee830ef9050c0684ca0d1da67d4693e5e03998f712a8365a3aaa->leave($__internal_9d5a844776c2ee830ef9050c0684ca0d1da67d4693e5e03998f712a8365a3aaa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
