<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_f22a80977a78a76e28c2736a8ac62023cee0ff5a75a430fc6be19ccfd23138d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_fa5f506edef175ae81c1561b1ff04524b339d88a445c394479536d047daf8b60 = $this->env->getExtension("native_profiler");
        $__internal_fa5f506edef175ae81c1561b1ff04524b339d88a445c394479536d047daf8b60->enter($__internal_fa5f506edef175ae81c1561b1ff04524b339d88a445c394479536d047daf8b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa5f506edef175ae81c1561b1ff04524b339d88a445c394479536d047daf8b60->leave($__internal_fa5f506edef175ae81c1561b1ff04524b339d88a445c394479536d047daf8b60_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea8d69c4078bf06dbbbe9bd60eed2b807231afc4f76022d19aebd9c6068647d8 = $this->env->getExtension("native_profiler");
        $__internal_ea8d69c4078bf06dbbbe9bd60eed2b807231afc4f76022d19aebd9c6068647d8->enter($__internal_ea8d69c4078bf06dbbbe9bd60eed2b807231afc4f76022d19aebd9c6068647d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_ea8d69c4078bf06dbbbe9bd60eed2b807231afc4f76022d19aebd9c6068647d8->leave($__internal_ea8d69c4078bf06dbbbe9bd60eed2b807231afc4f76022d19aebd9c6068647d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
