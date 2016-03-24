<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_2d72e9d57d21c3eb8d25f69f6df2c76c3e2f1694d25cf545955c9b8b76038dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_381d9e30c03278b762fed98160cc87b960cf6c2a4936add2f648912fc29a056c = $this->env->getExtension("native_profiler");
        $__internal_381d9e30c03278b762fed98160cc87b960cf6c2a4936add2f648912fc29a056c->enter($__internal_381d9e30c03278b762fed98160cc87b960cf6c2a4936add2f648912fc29a056c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_381d9e30c03278b762fed98160cc87b960cf6c2a4936add2f648912fc29a056c->leave($__internal_381d9e30c03278b762fed98160cc87b960cf6c2a4936add2f648912fc29a056c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7693ee6528ce0600a3a99919fc49de7cc00652cbea69867f68a38cf3cdd49c08 = $this->env->getExtension("native_profiler");
        $__internal_7693ee6528ce0600a3a99919fc49de7cc00652cbea69867f68a38cf3cdd49c08->enter($__internal_7693ee6528ce0600a3a99919fc49de7cc00652cbea69867f68a38cf3cdd49c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_7693ee6528ce0600a3a99919fc49de7cc00652cbea69867f68a38cf3cdd49c08->leave($__internal_7693ee6528ce0600a3a99919fc49de7cc00652cbea69867f68a38cf3cdd49c08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
