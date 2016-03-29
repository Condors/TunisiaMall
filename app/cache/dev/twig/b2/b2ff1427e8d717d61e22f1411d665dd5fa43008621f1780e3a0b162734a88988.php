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
        $__internal_598a945e829cde3155715875cb3e79d77018a6d6e76ca0f60eb2c4eee4ca95aa = $this->env->getExtension("native_profiler");
        $__internal_598a945e829cde3155715875cb3e79d77018a6d6e76ca0f60eb2c4eee4ca95aa->enter($__internal_598a945e829cde3155715875cb3e79d77018a6d6e76ca0f60eb2c4eee4ca95aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_598a945e829cde3155715875cb3e79d77018a6d6e76ca0f60eb2c4eee4ca95aa->leave($__internal_598a945e829cde3155715875cb3e79d77018a6d6e76ca0f60eb2c4eee4ca95aa_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_25e5f48a04184d2ba336346b5818212eecff6e92346ceec6051227ef7c21207d = $this->env->getExtension("native_profiler");
        $__internal_25e5f48a04184d2ba336346b5818212eecff6e92346ceec6051227ef7c21207d->enter($__internal_25e5f48a04184d2ba336346b5818212eecff6e92346ceec6051227ef7c21207d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_25e5f48a04184d2ba336346b5818212eecff6e92346ceec6051227ef7c21207d->leave($__internal_25e5f48a04184d2ba336346b5818212eecff6e92346ceec6051227ef7c21207d_prof);

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
