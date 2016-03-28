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
        $__internal_7672d273eaa9241700964dd91871e449a3a1dd4e991d8ce55e557cbe6d2cc431 = $this->env->getExtension("native_profiler");
        $__internal_7672d273eaa9241700964dd91871e449a3a1dd4e991d8ce55e557cbe6d2cc431->enter($__internal_7672d273eaa9241700964dd91871e449a3a1dd4e991d8ce55e557cbe6d2cc431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7672d273eaa9241700964dd91871e449a3a1dd4e991d8ce55e557cbe6d2cc431->leave($__internal_7672d273eaa9241700964dd91871e449a3a1dd4e991d8ce55e557cbe6d2cc431_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e574e85673b1e8fafeba374333a8f34deff8cfde6304fd1fa283a8a977490d93 = $this->env->getExtension("native_profiler");
        $__internal_e574e85673b1e8fafeba374333a8f34deff8cfde6304fd1fa283a8a977490d93->enter($__internal_e574e85673b1e8fafeba374333a8f34deff8cfde6304fd1fa283a8a977490d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e574e85673b1e8fafeba374333a8f34deff8cfde6304fd1fa283a8a977490d93->leave($__internal_e574e85673b1e8fafeba374333a8f34deff8cfde6304fd1fa283a8a977490d93_prof);

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
