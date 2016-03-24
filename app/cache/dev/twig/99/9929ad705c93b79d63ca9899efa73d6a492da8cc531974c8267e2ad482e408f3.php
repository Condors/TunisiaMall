<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_a6a6fc7ca07d721148450affbb998c0e1d9599a9c85a99d64f0dfc2fd94d9d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_0d44c5a2e39fe70952fd672c31745debbd5ee9ac2456d4913932c9ef6de4f803 = $this->env->getExtension("native_profiler");
        $__internal_0d44c5a2e39fe70952fd672c31745debbd5ee9ac2456d4913932c9ef6de4f803->enter($__internal_0d44c5a2e39fe70952fd672c31745debbd5ee9ac2456d4913932c9ef6de4f803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d44c5a2e39fe70952fd672c31745debbd5ee9ac2456d4913932c9ef6de4f803->leave($__internal_0d44c5a2e39fe70952fd672c31745debbd5ee9ac2456d4913932c9ef6de4f803_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01e0a6ed7de9b65b205137ad00c3c5b938133b1ceaae87f983b06fe5981803ef = $this->env->getExtension("native_profiler");
        $__internal_01e0a6ed7de9b65b205137ad00c3c5b938133b1ceaae87f983b06fe5981803ef->enter($__internal_01e0a6ed7de9b65b205137ad00c3c5b938133b1ceaae87f983b06fe5981803ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_01e0a6ed7de9b65b205137ad00c3c5b938133b1ceaae87f983b06fe5981803ef->leave($__internal_01e0a6ed7de9b65b205137ad00c3c5b938133b1ceaae87f983b06fe5981803ef_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
