<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_22c868615f1510708ea4907e6683bdbf650ba75972489b26929031731859c694 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_a9f790ec02e1115826bc205d811dfa620a06c3b615feb418dcc262c26bdc620d = $this->env->getExtension("native_profiler");
        $__internal_a9f790ec02e1115826bc205d811dfa620a06c3b615feb418dcc262c26bdc620d->enter($__internal_a9f790ec02e1115826bc205d811dfa620a06c3b615feb418dcc262c26bdc620d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f790ec02e1115826bc205d811dfa620a06c3b615feb418dcc262c26bdc620d->leave($__internal_a9f790ec02e1115826bc205d811dfa620a06c3b615feb418dcc262c26bdc620d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8413140e77639d20827694a0147f44cf7a97d2dda43bed91881c3a43e13e7b16 = $this->env->getExtension("native_profiler");
        $__internal_8413140e77639d20827694a0147f44cf7a97d2dda43bed91881c3a43e13e7b16->enter($__internal_8413140e77639d20827694a0147f44cf7a97d2dda43bed91881c3a43e13e7b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8413140e77639d20827694a0147f44cf7a97d2dda43bed91881c3a43e13e7b16->leave($__internal_8413140e77639d20827694a0147f44cf7a97d2dda43bed91881c3a43e13e7b16_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
