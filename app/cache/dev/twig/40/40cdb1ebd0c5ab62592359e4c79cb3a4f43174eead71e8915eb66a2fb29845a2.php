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
        $__internal_5df1905f0215857b0fa565dc66b120159c255947f0a0aab3510032e6ad95c51e = $this->env->getExtension("native_profiler");
        $__internal_5df1905f0215857b0fa565dc66b120159c255947f0a0aab3510032e6ad95c51e->enter($__internal_5df1905f0215857b0fa565dc66b120159c255947f0a0aab3510032e6ad95c51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5df1905f0215857b0fa565dc66b120159c255947f0a0aab3510032e6ad95c51e->leave($__internal_5df1905f0215857b0fa565dc66b120159c255947f0a0aab3510032e6ad95c51e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efb5cf0bfe325db08716d18434e4f2a2c9b9bd266b968056faaaaac8ed476739 = $this->env->getExtension("native_profiler");
        $__internal_efb5cf0bfe325db08716d18434e4f2a2c9b9bd266b968056faaaaac8ed476739->enter($__internal_efb5cf0bfe325db08716d18434e4f2a2c9b9bd266b968056faaaaac8ed476739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_efb5cf0bfe325db08716d18434e4f2a2c9b9bd266b968056faaaaac8ed476739->leave($__internal_efb5cf0bfe325db08716d18434e4f2a2c9b9bd266b968056faaaaac8ed476739_prof);

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
