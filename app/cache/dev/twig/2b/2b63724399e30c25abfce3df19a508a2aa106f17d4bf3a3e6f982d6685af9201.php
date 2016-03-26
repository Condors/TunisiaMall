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
        $__internal_042792f50eb610f9cbc2ed5081dbe60c9dd7b9503dbd7c5ce63df25124135227 = $this->env->getExtension("native_profiler");
        $__internal_042792f50eb610f9cbc2ed5081dbe60c9dd7b9503dbd7c5ce63df25124135227->enter($__internal_042792f50eb610f9cbc2ed5081dbe60c9dd7b9503dbd7c5ce63df25124135227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_042792f50eb610f9cbc2ed5081dbe60c9dd7b9503dbd7c5ce63df25124135227->leave($__internal_042792f50eb610f9cbc2ed5081dbe60c9dd7b9503dbd7c5ce63df25124135227_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcf8eb09407da5a3356d1274f58f741dac43c45a6325463ccf44a7cfedba241c = $this->env->getExtension("native_profiler");
        $__internal_dcf8eb09407da5a3356d1274f58f741dac43c45a6325463ccf44a7cfedba241c->enter($__internal_dcf8eb09407da5a3356d1274f58f741dac43c45a6325463ccf44a7cfedba241c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_dcf8eb09407da5a3356d1274f58f741dac43c45a6325463ccf44a7cfedba241c->leave($__internal_dcf8eb09407da5a3356d1274f58f741dac43c45a6325463ccf44a7cfedba241c_prof);

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
