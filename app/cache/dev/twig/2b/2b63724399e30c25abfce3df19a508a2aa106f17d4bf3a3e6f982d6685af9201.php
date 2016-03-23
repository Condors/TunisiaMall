<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_04feca836fa5af42644b5870961515867f01233eb3ea2e00824a07925a6cc9ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_4974c9877a8d7fb1ffb77d2fa2916e17790d25fcc108f669f9e1c68019498f45 = $this->env->getExtension("native_profiler");
        $__internal_4974c9877a8d7fb1ffb77d2fa2916e17790d25fcc108f669f9e1c68019498f45->enter($__internal_4974c9877a8d7fb1ffb77d2fa2916e17790d25fcc108f669f9e1c68019498f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4974c9877a8d7fb1ffb77d2fa2916e17790d25fcc108f669f9e1c68019498f45->leave($__internal_4974c9877a8d7fb1ffb77d2fa2916e17790d25fcc108f669f9e1c68019498f45_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9bb31ad156760481fffd04d601ee1b62eb2baf2c00f851876d9d0ab9faa6a0c = $this->env->getExtension("native_profiler");
        $__internal_d9bb31ad156760481fffd04d601ee1b62eb2baf2c00f851876d9d0ab9faa6a0c->enter($__internal_d9bb31ad156760481fffd04d601ee1b62eb2baf2c00f851876d9d0ab9faa6a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_d9bb31ad156760481fffd04d601ee1b62eb2baf2c00f851876d9d0ab9faa6a0c->leave($__internal_d9bb31ad156760481fffd04d601ee1b62eb2baf2c00f851876d9d0ab9faa6a0c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
