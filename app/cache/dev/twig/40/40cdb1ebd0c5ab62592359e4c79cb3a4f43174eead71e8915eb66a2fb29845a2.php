<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_842698d8bcdefdc11b691650b98485028745dc2a6e352b4cbe8e7a307fd58e2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_4047b8aed2f60bd119f33a3b8763de333a15dc9c45c1580e331526f978e7db2c = $this->env->getExtension("native_profiler");
        $__internal_4047b8aed2f60bd119f33a3b8763de333a15dc9c45c1580e331526f978e7db2c->enter($__internal_4047b8aed2f60bd119f33a3b8763de333a15dc9c45c1580e331526f978e7db2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4047b8aed2f60bd119f33a3b8763de333a15dc9c45c1580e331526f978e7db2c->leave($__internal_4047b8aed2f60bd119f33a3b8763de333a15dc9c45c1580e331526f978e7db2c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b68984b595c5eb7c5beda6392ec51ae6978cbd613ee9ee781100f11c37b5f16b = $this->env->getExtension("native_profiler");
        $__internal_b68984b595c5eb7c5beda6392ec51ae6978cbd613ee9ee781100f11c37b5f16b->enter($__internal_b68984b595c5eb7c5beda6392ec51ae6978cbd613ee9ee781100f11c37b5f16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b68984b595c5eb7c5beda6392ec51ae6978cbd613ee9ee781100f11c37b5f16b->leave($__internal_b68984b595c5eb7c5beda6392ec51ae6978cbd613ee9ee781100f11c37b5f16b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
