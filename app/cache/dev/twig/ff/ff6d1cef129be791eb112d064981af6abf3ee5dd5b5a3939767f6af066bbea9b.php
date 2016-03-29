<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_9b3bb71b53fc443b739d167c2301f662e651d1f6878ae685e15e33445e7c2055 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_eb3772d217a87fbd5eb178c2f8bb8f759094778fc3e762e35ff41799a2bb9cd9 = $this->env->getExtension("native_profiler");
        $__internal_eb3772d217a87fbd5eb178c2f8bb8f759094778fc3e762e35ff41799a2bb9cd9->enter($__internal_eb3772d217a87fbd5eb178c2f8bb8f759094778fc3e762e35ff41799a2bb9cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb3772d217a87fbd5eb178c2f8bb8f759094778fc3e762e35ff41799a2bb9cd9->leave($__internal_eb3772d217a87fbd5eb178c2f8bb8f759094778fc3e762e35ff41799a2bb9cd9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e2885de03d76cb2d808a9987c6eadf8f2a51362b1a574083a2b7f5b077b7c03d = $this->env->getExtension("native_profiler");
        $__internal_e2885de03d76cb2d808a9987c6eadf8f2a51362b1a574083a2b7f5b077b7c03d->enter($__internal_e2885de03d76cb2d808a9987c6eadf8f2a51362b1a574083a2b7f5b077b7c03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_e2885de03d76cb2d808a9987c6eadf8f2a51362b1a574083a2b7f5b077b7c03d->leave($__internal_e2885de03d76cb2d808a9987c6eadf8f2a51362b1a574083a2b7f5b077b7c03d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
