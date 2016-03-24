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
        $__internal_87536cd0f02d9417f50676291f46b432249a5559ae1eac9a2dc1756266546696 = $this->env->getExtension("native_profiler");
        $__internal_87536cd0f02d9417f50676291f46b432249a5559ae1eac9a2dc1756266546696->enter($__internal_87536cd0f02d9417f50676291f46b432249a5559ae1eac9a2dc1756266546696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87536cd0f02d9417f50676291f46b432249a5559ae1eac9a2dc1756266546696->leave($__internal_87536cd0f02d9417f50676291f46b432249a5559ae1eac9a2dc1756266546696_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53b183ceaf540ee1d367c61646939b23666d9183c6300e146c1ac7c96e3b3625 = $this->env->getExtension("native_profiler");
        $__internal_53b183ceaf540ee1d367c61646939b23666d9183c6300e146c1ac7c96e3b3625->enter($__internal_53b183ceaf540ee1d367c61646939b23666d9183c6300e146c1ac7c96e3b3625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_53b183ceaf540ee1d367c61646939b23666d9183c6300e146c1ac7c96e3b3625->leave($__internal_53b183ceaf540ee1d367c61646939b23666d9183c6300e146c1ac7c96e3b3625_prof);

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
