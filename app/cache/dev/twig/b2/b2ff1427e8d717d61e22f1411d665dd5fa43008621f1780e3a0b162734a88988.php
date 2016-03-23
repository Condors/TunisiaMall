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
        $__internal_603885b39fb664009cc26d223b264218cb39f379582a4754edaca66eeaa3c5ad = $this->env->getExtension("native_profiler");
        $__internal_603885b39fb664009cc26d223b264218cb39f379582a4754edaca66eeaa3c5ad->enter($__internal_603885b39fb664009cc26d223b264218cb39f379582a4754edaca66eeaa3c5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_603885b39fb664009cc26d223b264218cb39f379582a4754edaca66eeaa3c5ad->leave($__internal_603885b39fb664009cc26d223b264218cb39f379582a4754edaca66eeaa3c5ad_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b65d9ac137cd45c2da361b02ce7cfa1ee1a797eb105e6d60efa70faf71a70cec = $this->env->getExtension("native_profiler");
        $__internal_b65d9ac137cd45c2da361b02ce7cfa1ee1a797eb105e6d60efa70faf71a70cec->enter($__internal_b65d9ac137cd45c2da361b02ce7cfa1ee1a797eb105e6d60efa70faf71a70cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b65d9ac137cd45c2da361b02ce7cfa1ee1a797eb105e6d60efa70faf71a70cec->leave($__internal_b65d9ac137cd45c2da361b02ce7cfa1ee1a797eb105e6d60efa70faf71a70cec_prof);

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
