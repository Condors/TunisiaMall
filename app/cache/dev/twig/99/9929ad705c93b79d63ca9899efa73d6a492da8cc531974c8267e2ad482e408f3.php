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
        $__internal_23df74716cbfc587ece074fcfdf2c0e5e9a3aa466dda06d1a362de1038be15b0 = $this->env->getExtension("native_profiler");
        $__internal_23df74716cbfc587ece074fcfdf2c0e5e9a3aa466dda06d1a362de1038be15b0->enter($__internal_23df74716cbfc587ece074fcfdf2c0e5e9a3aa466dda06d1a362de1038be15b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23df74716cbfc587ece074fcfdf2c0e5e9a3aa466dda06d1a362de1038be15b0->leave($__internal_23df74716cbfc587ece074fcfdf2c0e5e9a3aa466dda06d1a362de1038be15b0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5fc76783145ae8252dcced3825b52553ccebe2b87d2898735041830af4ebe1b = $this->env->getExtension("native_profiler");
        $__internal_c5fc76783145ae8252dcced3825b52553ccebe2b87d2898735041830af4ebe1b->enter($__internal_c5fc76783145ae8252dcced3825b52553ccebe2b87d2898735041830af4ebe1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_c5fc76783145ae8252dcced3825b52553ccebe2b87d2898735041830af4ebe1b->leave($__internal_c5fc76783145ae8252dcced3825b52553ccebe2b87d2898735041830af4ebe1b_prof);

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
