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
        $__internal_e20e2a3378a05e33d469ea9673c7b05ef6fc05d1aeca0340abea0d9e8e873629 = $this->env->getExtension("native_profiler");
        $__internal_e20e2a3378a05e33d469ea9673c7b05ef6fc05d1aeca0340abea0d9e8e873629->enter($__internal_e20e2a3378a05e33d469ea9673c7b05ef6fc05d1aeca0340abea0d9e8e873629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e20e2a3378a05e33d469ea9673c7b05ef6fc05d1aeca0340abea0d9e8e873629->leave($__internal_e20e2a3378a05e33d469ea9673c7b05ef6fc05d1aeca0340abea0d9e8e873629_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbee1597ae21e42db0a2ef60cf23666c9103a4d0d7d2bce9d7deaf4654a1da3f = $this->env->getExtension("native_profiler");
        $__internal_dbee1597ae21e42db0a2ef60cf23666c9103a4d0d7d2bce9d7deaf4654a1da3f->enter($__internal_dbee1597ae21e42db0a2ef60cf23666c9103a4d0d7d2bce9d7deaf4654a1da3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_dbee1597ae21e42db0a2ef60cf23666c9103a4d0d7d2bce9d7deaf4654a1da3f->leave($__internal_dbee1597ae21e42db0a2ef60cf23666c9103a4d0d7d2bce9d7deaf4654a1da3f_prof);

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
