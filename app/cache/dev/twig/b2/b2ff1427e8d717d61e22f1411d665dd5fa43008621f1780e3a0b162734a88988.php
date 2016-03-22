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
        $__internal_c2c357c68494c051e894f638e7ba92943eb1b74339dfc7d66b95c9e9579ef13c = $this->env->getExtension("native_profiler");
        $__internal_c2c357c68494c051e894f638e7ba92943eb1b74339dfc7d66b95c9e9579ef13c->enter($__internal_c2c357c68494c051e894f638e7ba92943eb1b74339dfc7d66b95c9e9579ef13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2c357c68494c051e894f638e7ba92943eb1b74339dfc7d66b95c9e9579ef13c->leave($__internal_c2c357c68494c051e894f638e7ba92943eb1b74339dfc7d66b95c9e9579ef13c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8c15c446c97df99c1220cb491c52aeea47dde47230902a6339122610650cc59b = $this->env->getExtension("native_profiler");
        $__internal_8c15c446c97df99c1220cb491c52aeea47dde47230902a6339122610650cc59b->enter($__internal_8c15c446c97df99c1220cb491c52aeea47dde47230902a6339122610650cc59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_8c15c446c97df99c1220cb491c52aeea47dde47230902a6339122610650cc59b->leave($__internal_8c15c446c97df99c1220cb491c52aeea47dde47230902a6339122610650cc59b_prof);

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
